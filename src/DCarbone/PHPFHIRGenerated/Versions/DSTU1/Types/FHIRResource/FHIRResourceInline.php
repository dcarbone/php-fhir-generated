<?php declare(strict_types=1);

    namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\ResourceContainerTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRResourceInline implements ResourceContainerTypeInterface
{
    use TypeValidationsTrait;

    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESOURCE_DOT_INLINE;

    private const _FHIR_VALIDATION_RULES = [];

    /** @var null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface */
    private null|VersionContainedTypeInterface $containedType = null;

    public function __construct(null|VersionContainedTypeInterface $containedType = null)
    {
        if (null !== $containedType) {
            $this->setContainedType($containedType);
        }
    }

    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_resource_container.php:83 */
    public function _getFHIRVersion(): FHIRVersion
    {
        return Version::getFHIRVersion();
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface
     */
    public function getContainedType(): null|ContainedTypeInterface
    {
        return $this->contained ?? null;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $containedType
     * @return static
     */
    public function setContainedType(null|ContainedTypeInterface $containedType): self
    {
        if (null === $containedType) {
            unset($this->containedType);
            return $this;
        }
        if (!($containedType instanceof VersionContainedTypeInterface)) {
            throw new \InvalidArgumentException(sprintf(
                'Contained type must implement "%s", provided type "%s" does not.',
                VersionContainedTypeInterface::class,
                $containedType::class,
            ));
        }
        $this->containedType = $containedType;
        return $this;
    }

    public function __toString(): string
    {
        return (string)($this->containedType ?? self::FHIR_TYPE_NAME);
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface
     */
    public function jsonSerialize(): null|VersionContainedTypeInterface
    {
        return $this->containedType ?? null;
    }
}
