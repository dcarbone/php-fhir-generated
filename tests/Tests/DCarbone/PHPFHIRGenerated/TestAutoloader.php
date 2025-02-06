<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 6th, 2025 03:21+0000
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

abstract class TestAutoloader
{
    private const _CLASS_MAP = [
        // core types
        'Tests\DCarbone\PHPFHIRGenerated\Client\ConfigTest' => __DIR__ . '/Client/ConfigTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\Client\ClientTest' => __DIR__ . '/Client/ClientTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\TestAutoloader' => __DIR__ . '/TestAutoloader.php',
        'Tests\DCarbone\PHPFHIRGenerated\Types\MockResourceType' => __DIR__ . '/Types/MockResourceType.php',
        'Tests\DCarbone\PHPFHIRGenerated\Types\MockStringPrimitiveType' => __DIR__ . '/Types/MockStringPrimitiveType.php',
        'Tests\DCarbone\PHPFHIRGenerated\Versions\VersionConfigTest' => __DIR__ . '/Versions/VersionConfigTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\Validation\ValuePatternMatchRuleTest' => __DIR__ . '/Validation/ValuePatternMatchRuleTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfigTest' => __DIR__ . '/Encoding/SerializeConfigTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\Encoding\XMLWriterTest' => __DIR__ . '/Encoding/XMLWriterTest.php',
        'Tests\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfigTest' => __DIR__ . '/Encoding/UnserializeConfigTest.php',
    ];

    private static bool $_registered = false;

    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(__CLASS__ . '::loadClass');
        }
        return self::$_registered;
    }

    public static function unregister(): bool
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(__CLASS__ . '::loadClass')) {
                self::$_registered = false;
                return true;
            }
        }
        return false;
    }

    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require self::_CLASS_MAP[$class];
        }
        return null;
    }
}

TestAutoloader::register();
