<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Translation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: November 22nd, 2026 04:37+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class TranslationContext
{
    public function __construct(
        private readonly VersionInterface $sourceVersion,
        private readonly VersionInterface $targetVersion,
        private readonly TranslationConfig $config,
        private readonly string $path,
        private readonly TypeTranslatorInterface $translator,
        private readonly TranslationNoticeCollector $notices,
        private readonly null|HopMapInterface $hopMap = null,
        private readonly null|string $expectedTargetClass = null,
    ) {
    }

    public function getSourceVersion(): VersionInterface
    {
        return $this->sourceVersion;
    }

    public function getTargetVersion(): VersionInterface
    {
        return $this->targetVersion;
    }

    public function getConfig(): TranslationConfig
    {
        return $this->config;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getHopMap(): null|HopMapInterface
    {
        return $this->hopMap;
    }

    /**
     * Class declared by the target field currently being populated, if any.  Translators should produce an
     * instance of this class when the source type differs from the target field's declared type.
     *
     * @return null|class-string<TypeInterface>
     */
    public function getExpectedTargetClass(): null|string
    {
        return $this->expectedTargetClass;
    }

    public function translate(TypeInterface $source): null|TypeInterface
    {
        return $this->translateAtPath($source, $this->path, null);
    }

    /**
     * @param null|class-string<TypeInterface> $expectedTargetClass
     */
    public function translateField(string $fieldName,
                                   TypeInterface $source,
                                   null|string $expectedTargetClass = null): null|TypeInterface
    {
        $path = '' === $this->path ? $fieldName : $this->path . '.' . $fieldName;
        return $this->translateAtPath($source, $path, $expectedTargetClass);
    }

    public function handleUnmappableField(string $fieldName, string $sourceTypeName): void
    {
        $path = '' === $this->path ? $fieldName : $this->path . '.' . $fieldName;
        $this->applyUnmappablePolicy($path, $sourceTypeName);
    }

    private function translateAtPath(
        TypeInterface $source,
        string $path,
        null|string $expectedTargetClass,
    ): null|TypeInterface {
        $context = new self(
            $this->sourceVersion,
            $this->targetVersion,
            $this->config,
            $path,
            $this->translator,
            $this->notices,
            $this->hopMap,
            $expectedTargetClass,
        );
        $translated = $this->translator->translate($source, $context);
        if (null !== $translated) {
            return $translated;
        }

        $context->applyUnmappablePolicy($path, $source->_getFHIRTypeName());
        return null;
    }

    public function addNotice(TranslationNotice $notice): void
    {
        $this->notices->add($notice);
    }

    private function applyUnmappablePolicy(string $path, string $sourceTypeName): void
    {
        $policy = $this->config->getOnUnmappableField();
        if (OnUnmappableFieldEnum::EXTENSION === $policy) {
            throw new MissingXverDefinitionException(
                $path,
                $this->sourceVersion->getName(),
                $this->targetVersion->getName(),
            );
        }

        $message = sprintf(
            'Source value of type "%s" at "%s" has no target representation when translating %s to %s.',
            $sourceTypeName,
            $path,
            $this->sourceVersion->getName(),
            $this->targetVersion->getName(),
        );
        if (OnUnmappableFieldEnum::THROW === $policy) {
            throw new UnmappableFieldException($message);
        }

        $this->addNotice(new TranslationNotice(
            $path,
            'dropped',
            $this->sourceVersion->getName(),
            $this->targetVersion->getName(),
            $message,
        ));
    }
}
