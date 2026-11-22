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

final class TypeTranslatorDispatcher implements TypeTranslatorInterface
{
    /** @var array<string, \DCarbone\PHPFHIRGenerated\Translation\TypeTranslatorInterface> */
    private array $translators = [];

    private readonly TypeTranslatorInterface $defaultTranslator;

    public function __construct(
        FieldMetadataFactoryInterface $metadataFactory = new FieldMetadataFactory(),
    ) {
        $this->defaultTranslator = new GenericTypeTranslator($metadataFactory);
    }

    public function register(
        VersionInterface $from,
        VersionInterface $to,
        string $typeName,
        TypeTranslatorInterface $translator,
    ): void {
        if ('' === trim($typeName)) {
            throw new \InvalidArgumentException('FHIR type name must not be empty.');
        }
        $this->translators[$this->translatorKey($from, $to, $typeName)] = $translator;
    }

    public function has(VersionInterface $from, VersionInterface $to, string $typeName): bool
    {
        return isset($this->translators[$this->translatorKey($from, $to, $typeName)]);
    }

    public function translate(TypeInterface $source, TranslationContext $context): null|TypeInterface
    {
        $from = $context->getSourceVersion();
        $to = $context->getTargetVersion();
        $translator = $this->translators[$this->translatorKey($from, $to, $source->_getFHIRTypeName())]
            ?? $this->defaultTranslator;

        $translated = $translator->translate($source, $context);
        if (null !== $translated) {
            $translatedVersion = VersionRegistry::getVersionForType($translated);
            if ($translatedVersion->getName() !== $to->getName()) {
                throw new \UnexpectedValueException(sprintf(
                    'Translator for "%s" from %s to %s returned a type from %s.',
                    $source->_getFHIRTypeName(),
                    $from->getName(),
                    $to->getName(),
                    $translatedVersion->getName(),
                ));
            }
        }
        return $translated;
    }

    private function translatorKey(VersionInterface $from, VersionInterface $to, string $typeName): string
    {
        return $from->getName() . "\0" . $to->getName() . "\0" . $typeName;
    }
}
