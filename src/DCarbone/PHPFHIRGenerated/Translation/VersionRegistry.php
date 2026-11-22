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

final class VersionRegistry
{
    private const _VERSION_CLASSES = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\DSTU1' => 'DCarbone\\PHPFHIRGenerated\\Versions\\DSTU1\\Version',
        'DCarbone\\PHPFHIRGenerated\\Versions\\DSTU2' => 'DCarbone\\PHPFHIRGenerated\\Versions\\DSTU2\\Version',
        'DCarbone\\PHPFHIRGenerated\\Versions\\STU3' => 'DCarbone\\PHPFHIRGenerated\\Versions\\STU3\\Version',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4B' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4B\\Version',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Version',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R5' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R5\\Version',
    ];

    /** @var null|VersionInterface[] */
    private static null|array $_versions = null;

    /**
     * @return VersionInterface[]
     */
    public static function getVersions(): array
    {
        if (null === self::$_versions) {
            self::$_versions = [];
            foreach (self::_VERSION_CLASSES as $className) {
                self::$_versions[] = new $className();
            }
            usort(
                self::$_versions,
                static fn(VersionInterface $a, VersionInterface $b): int => $a->getFHIRVersionInteger() <=> $b->getFHIRVersionInteger(),
            );
        }
        return self::$_versions;
    }

    public static function getVersionForType(TypeInterface $type): VersionInterface
    {
        $typeClass = $type::class;
        foreach (self::_VERSION_CLASSES as $namespace => $className) {
            if (!str_starts_with($typeClass, $namespace . '\\')) {
                continue;
            }

            $version = new $className();
            if ($type->_getFHIRVersion() !== $version::getFHIRVersion()) {
                throw new \UnexpectedValueException(sprintf(
                    'FHIR version mismatch for generated type "%s": namespace resolves to %s, type reports %s.',
                    $typeClass,
                    (string)$version::getFHIRVersion(),
                    (string)$type->_getFHIRVersion(),
                ));
            }
            return $version;
        }

        throw new \InvalidArgumentException(sprintf(
            'Unable to resolve a generated FHIR version for type "%s".',
            $typeClass,
        ));
    }
}
