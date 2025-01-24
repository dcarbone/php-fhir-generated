<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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

abstract class Autoloader
{
    private const _ROOT_NAMESPACE = 'DCarbone\PHPFHIRGenerated\\';

    private const _VERSION_AUTOLOADER_MAP = [
        0 => [
            'DCarbone\PHPFHIRGenerated\Versions\DSTU1\\',
            'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Autoloader',
            __DIR__ . '/Versions/DSTU1/Autoloader.php',
        ],
        1 => [
            'DCarbone\PHPFHIRGenerated\Versions\DSTU2\\',
            'DCarbone\PHPFHIRGenerated\Versions\DSTU2\Autoloader',
            __DIR__ . '/Versions/DSTU2/Autoloader.php',
        ],
        2 => [
            'DCarbone\PHPFHIRGenerated\Versions\STU3\\',
            'DCarbone\PHPFHIRGenerated\Versions\STU3\Autoloader',
            __DIR__ . '/Versions/STU3/Autoloader.php',
        ],
        3 => [
            'DCarbone\PHPFHIRGenerated\Versions\R4\\',
            'DCarbone\PHPFHIRGenerated\Versions\R4\Autoloader',
            __DIR__ . '/Versions/R4/Autoloader.php',
        ],
        4 => [
            'DCarbone\PHPFHIRGenerated\Versions\R4B\\',
            'DCarbone\PHPFHIRGenerated\Versions\R4B\Autoloader',
            __DIR__ . '/Versions/R4B/Autoloader.php',
        ],
        5 => [
            'DCarbone\PHPFHIRGenerated\Versions\R5\\',
            'DCarbone\PHPFHIRGenerated\Versions\R5\Autoloader',
            __DIR__ . '/Versions/R5/Autoloader.php',
        ],
    ];

    private const _CORE_CLASS_MAP = [
        // core types
        'DCarbone\PHPFHIRGenerated\ResponseParser' => __DIR__ . '/ResponseParser.php',
        'DCarbone\PHPFHIRGenerated\Constants' => __DIR__ . '/Constants.php',
        'DCarbone\PHPFHIRGenerated\Client\ClientInterface' => __DIR__ . '/Client/ClientInterface.php',
        'DCarbone\PHPFHIRGenerated\Client\Response' => __DIR__ . '/Client/Response.php',
        'DCarbone\PHPFHIRGenerated\Client\ResponseHeaders' => __DIR__ . '/Client/ResponseHeaders.php',
        'DCarbone\PHPFHIRGenerated\Client\AbstractClientException' => __DIR__ . '/Client/AbstractClientException.php',
        'DCarbone\PHPFHIRGenerated\Client\Request' => __DIR__ . '/Client/Request.php',
        'DCarbone\PHPFHIRGenerated\Client\Client' => __DIR__ . '/Client/Client.php',
        'DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum' => __DIR__ . '/Client/SortDirectionEnum.php',
        'DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException' => __DIR__ . '/Client/UnexpectedResponseCodeException.php',
        'DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum' => __DIR__ . '/Client/HTTPMethodEnum.php',
        'DCarbone\PHPFHIRGenerated\Client\Config' => __DIR__ . '/Client/Config.php',
        'DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum' => __DIR__ . '/Client/ResponseFormatEnum.php',
        'DCarbone\PHPFHIRGenerated\Client\ClientErrorException' => __DIR__ . '/Client/ClientErrorException.php',
        'DCarbone\PHPFHIRGenerated\VersionEnum' => __DIR__ . '/VersionEnum.php',
        'DCarbone\PHPFHIRGenerated\SourceXMLNamespaceTrait' => __DIR__ . '/SourceXMLNamespaceTrait.php',
        'DCarbone\PHPFHIRGenerated\Types\TypeInterface' => __DIR__ . '/Types/TypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\CommentContainerTrait' => __DIR__ . '/Types/CommentContainerTrait.php',
        'DCarbone\PHPFHIRGenerated\Types\ContainedTypeInterface' => __DIR__ . '/Types/ContainedTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface' => __DIR__ . '/Types/PrimitiveTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\CommentContainerInterface' => __DIR__ . '/Types/CommentContainerInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface' => __DIR__ . '/Versions/VersionTypeMapInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionInterface' => __DIR__ . '/Versions/VersionInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface' => __DIR__ . '/Versions/VersionConfigInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionConfig' => __DIR__ . '/Versions/VersionConfig.php',
        'DCarbone\PHPFHIRGenerated\Validation\Validator' => __DIR__ . '/Validation/Validator.php',
        'DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig' => __DIR__ . '/Encoding/SerializeConfig.php',
        'DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum' => __DIR__ . '/Encoding/ValueXMLLocationEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationTrait' => __DIR__ . '/Encoding/ValueXMLLocationTrait.php',
        'DCarbone\PHPFHIRGenerated\Encoding\XMLWriter' => __DIR__ . '/Encoding/XMLWriter.php',
        'DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig' => __DIR__ . '/Encoding/UnserializeConfig.php',
    ];

    private static bool $_registered = false;

    private static array $_versionRegistered = [
        0 => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
    ];

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
        if (isset(self::_CORE_CLASS_MAP[$class])) {
            return (bool)require self::_CORE_CLASS_MAP[$class];
        } else if (!str_starts_with($class, self::_ROOT_NAMESPACE)) {
            return null;
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[0][0])) {
            if (self::$_versionRegistered[0]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[0][2];
            \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Autoloader::register();
            self::$_versionRegistered[0] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[0][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[1][0])) {
            if (self::$_versionRegistered[1]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[1][2];
            \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Autoloader::register();
            self::$_versionRegistered[1] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[1][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[2][0])) {
            if (self::$_versionRegistered[2]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[2][2];
            \DCarbone\PHPFHIRGenerated\Versions\STU3\Autoloader::register();
            self::$_versionRegistered[2] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[2][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\STU3\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[3][0])) {
            if (self::$_versionRegistered[3]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[3][2];
            \DCarbone\PHPFHIRGenerated\Versions\R4\Autoloader::register();
            self::$_versionRegistered[3] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[3][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\R4\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[4][0])) {
            if (self::$_versionRegistered[4]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[4][2];
            \DCarbone\PHPFHIRGenerated\Versions\R4B\Autoloader::register();
            self::$_versionRegistered[4] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[4][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\R4B\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else if (str_starts_with($class, self::_VERSION_AUTOLOADER_MAP[5][0])) {
            if (self::$_versionRegistered[5]) {
                return null;
            }
            require self::_VERSION_AUTOLOADER_MAP[5][2];
            \DCarbone\PHPFHIRGenerated\Versions\R5\Autoloader::register();
            self::$_versionRegistered[5] = true;
            if ($class !== self::_VERSION_AUTOLOADER_MAP[5][1]) {
                return \DCarbone\PHPFHIRGenerated\Versions\R5\Autoloader::loadClass($class);
            } else {
                return true;
            }
        } else {
            return null;
        }
    }
}

Autoloader::register();
