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

use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

final class HopMapRegistry
{
    /** @var array<string, class-string<\DCarbone\PHPFHIRGenerated\Translation\HopMapInterface>> */
    private const _MAP_CLASSES = [
        'DSTU1' . "\0" . 'DSTU2' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU1ToDSTU2',
        'DSTU2' . "\0" . 'DSTU1' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU2ToDSTU1',
        'DSTU2' . "\0" . 'STU3' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU2ToSTU3',
        'STU3' . "\0" . 'DSTU2' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_STU3ToDSTU2',
        'STU3' . "\0" . 'R4' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_STU3ToR4',
        'R4' . "\0" . 'STU3' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4ToSTU3',
        'R4' . "\0" . 'R4B' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4ToR4B',
        'R4B' . "\0" . 'R4' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4BToR4',
        'R4B' . "\0" . 'R5' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4BToR5',
        'R5' . "\0" . 'R4B' => 'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R5ToR4B',
    ];

    /** @var array<string, \DCarbone\PHPFHIRGenerated\Translation\HopMapInterface> */
    private static array $_maps = [];

    public static function getMap(VersionInterface $source, VersionInterface $target): null|HopMapInterface
    {
        $key = $source->getName() . "\0" . $target->getName();
        if (isset(self::$_maps[$key])) {
            return self::$_maps[$key];
        }

        $className = self::_MAP_CLASSES[$key] ?? null;
        if (null === $className) {
            return null;
        }

        $map = new $className();
        if (!$map instanceof HopMapInterface) {
            throw new \UnexpectedValueException(sprintf(
                'Generated hop map "%s" must implement %s.',
                $className,
                HopMapInterface::class,
            ));
        }
        return self::$_maps[$key] = $map;
    }
}
