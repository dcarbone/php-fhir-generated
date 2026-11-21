<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: November 21st, 2026 18:21+0000
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
        'DCarbone\PHPFHIRGenerated\Encoding\ProfileResolutionEnum' => __DIR__ . '/Encoding/ProfileResolutionEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\OnProfileVersionMismatchEnum' => __DIR__ . '/Encoding/OnProfileVersionMismatchEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig' => __DIR__ . '/Encoding/SerializeConfig.php',
        'DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum' => __DIR__ . '/Encoding/ValueXMLLocationEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait' => __DIR__ . '/Encoding/XMLSerializationOptionsTrait.php',
        'DCarbone\PHPFHIRGenerated\Encoding\OnProfileViolationEnum' => __DIR__ . '/Encoding/OnProfileViolationEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig' => __DIR__ . '/Encoding/UnserializeConfig.php',
        'DCarbone\PHPFHIRGenerated\Encoding\ResourceParser' => __DIR__ . '/Encoding/ResourceParser.php',
        'DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait' => __DIR__ . '/Encoding/JSONSerializationOptionsTrait.php',
        'DCarbone\PHPFHIRGenerated\Encoding\OnUnknownProfileEnum' => __DIR__ . '/Encoding/OnUnknownProfileEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum' => __DIR__ . '/Encoding/SerializeFormatEnum.php',
        'DCarbone\PHPFHIRGenerated\Encoding\XMLWriter' => __DIR__ . '/Encoding/XMLWriter.php',
        'DCarbone\PHPFHIRGenerated\Encoding\OnAmbiguousProfileEnum' => __DIR__ . '/Encoding/OnAmbiguousProfileEnum.php',
        'DCarbone\PHPFHIRGenerated\Translation\VersionRegistry' => __DIR__ . '/Translation/VersionRegistry.php',
        'DCarbone\PHPFHIRGenerated\Translation\TypeTranslatorInterface' => __DIR__ . '/Translation/TypeTranslatorInterface.php',
        'DCarbone\PHPFHIRGenerated\Translation\UnmappableFieldException' => __DIR__ . '/Translation/UnmappableFieldException.php',
        'DCarbone\PHPFHIRGenerated\Translation\CodingCodeMapper' => __DIR__ . '/Translation/CodingCodeMapper.php',
        'DCarbone\PHPFHIRGenerated\Translation\FieldMetadata' => __DIR__ . '/Translation/FieldMetadata.php',
        'DCarbone\PHPFHIRGenerated\Translation\MissingXverDefinitionException' => __DIR__ . '/Translation/MissingXverDefinitionException.php',
        'DCarbone\PHPFHIRGenerated\Translation\TranslationContext' => __DIR__ . '/Translation/TranslationContext.php',
        'DCarbone\PHPFHIRGenerated\Translation\CodeMap' => __DIR__ . '/Translation/CodeMap.php',
        'DCarbone\PHPFHIRGenerated\Translation\TranslationNoticeCollector' => __DIR__ . '/Translation/TranslationNoticeCollector.php',
        'DCarbone\PHPFHIRGenerated\Translation\XverExtensionUnfolder' => __DIR__ . '/Translation/XverExtensionUnfolder.php',
        'DCarbone\PHPFHIRGenerated\Translation\FieldMetadataFactory' => __DIR__ . '/Translation/FieldMetadataFactory.php',
        'DCarbone\PHPFHIRGenerated\Translation\FieldMetadataFactoryInterface' => __DIR__ . '/Translation/FieldMetadataFactoryInterface.php',
        'DCarbone\PHPFHIRGenerated\Translation\HopMapInterface' => __DIR__ . '/Translation/HopMapInterface.php',
        'DCarbone\PHPFHIRGenerated\Translation\XverExtension' => __DIR__ . '/Translation/XverExtension.php',
        'DCarbone\PHPFHIRGenerated\Translation\TranslationNotice' => __DIR__ . '/Translation/TranslationNotice.php',
        'DCarbone\PHPFHIRGenerated\Translation\TranslationConfig' => __DIR__ . '/Translation/TranslationConfig.php',
        'DCarbone\PHPFHIRGenerated\Translation\Translator' => __DIR__ . '/Translation/Translator.php',
        'DCarbone\PHPFHIRGenerated\Translation\XverExtensionEmitter' => __DIR__ . '/Translation/XverExtensionEmitter.php',
        'DCarbone\PHPFHIRGenerated\Translation\AmbiguousTranslationRouteException' => __DIR__ . '/Translation/AmbiguousTranslationRouteException.php',
        'DCarbone\PHPFHIRGenerated\Translation\CodeMapResult' => __DIR__ . '/Translation/CodeMapResult.php',
        'DCarbone\PHPFHIRGenerated\Translation\HopMapRegistry' => __DIR__ . '/Translation/HopMapRegistry.php',
        'DCarbone\PHPFHIRGenerated\Translation\GenericTypeTranslator' => __DIR__ . '/Translation/GenericTypeTranslator.php',
        'DCarbone\PHPFHIRGenerated\Translation\TranslationResult' => __DIR__ . '/Translation/TranslationResult.php',
        'DCarbone\PHPFHIRGenerated\Translation\OnUnmappableFieldEnum' => __DIR__ . '/Translation/OnUnmappableFieldEnum.php',
        'DCarbone\PHPFHIRGenerated\Translation\TypeTranslatorDispatcher' => __DIR__ . '/Translation/TypeTranslatorDispatcher.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionConfig' => __DIR__ . '/Versions/VersionConfig.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionInterface' => __DIR__ . '/Versions/VersionInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface' => __DIR__ . '/Versions/VersionConfigInterface.php',
        'DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface' => __DIR__ . '/Versions/VersionTypeMapInterface.php',
        'DCarbone\PHPFHIRGenerated\FHIRVersion' => __DIR__ . '/FHIRVersion.php',
        'DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait' => __DIR__ . '/Validation/TypeValidationsTrait.php',
        'DCarbone\PHPFHIRGenerated\Validation\PathResolver' => __DIR__ . '/Validation/PathResolver.php',
        'DCarbone\PHPFHIRGenerated\Validation\RuleInterface' => __DIR__ . '/Validation/RuleInterface.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\FixedValueRule' => __DIR__ . '/Validation/Rules/FixedValueRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule' => __DIR__ . '/Validation/Rules/ValueMinLengthRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\ChoiceOccursRule' => __DIR__ . '/Validation/Rules/ChoiceOccursRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\PatternValueRule' => __DIR__ . '/Validation/Rules/PatternValueRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMaxLengthRule' => __DIR__ . '/Validation/Rules/ValueMaxLengthRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\CodeBindingRule' => __DIR__ . '/Validation/Rules/CodeBindingRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule' => __DIR__ . '/Validation/Rules/MinOccursRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\SliceOccursRule' => __DIR__ . '/Validation/Rules/SliceOccursRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule' => __DIR__ . '/Validation/Rules/ValueOneOfRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule' => __DIR__ . '/Validation/Rules/ValuePatternMatchRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\Rules\MaxOccursRule' => __DIR__ . '/Validation/Rules/MaxOccursRule.php',
        'DCarbone\PHPFHIRGenerated\Validation\ValueMatcher' => __DIR__ . '/Validation/ValueMatcher.php',
        'DCarbone\PHPFHIRGenerated\Validation\Validator' => __DIR__ . '/Validation/Validator.php',
        'DCarbone\PHPFHIRGenerated\Client\AbstractClientException' => __DIR__ . '/Client/AbstractClientException.php',
        'DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum' => __DIR__ . '/Client/SortDirectionEnum.php',
        'DCarbone\PHPFHIRGenerated\Client\ClientInterface' => __DIR__ . '/Client/ClientInterface.php',
        'DCarbone\PHPFHIRGenerated\Client\Request' => __DIR__ . '/Client/Request.php',
        'DCarbone\PHPFHIRGenerated\Client\ClientErrorException' => __DIR__ . '/Client/ClientErrorException.php',
        'DCarbone\PHPFHIRGenerated\Client\Config' => __DIR__ . '/Client/Config.php',
        'DCarbone\PHPFHIRGenerated\Client\ResponseHeaders' => __DIR__ . '/Client/ResponseHeaders.php',
        'DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException' => __DIR__ . '/Client/UnexpectedResponseCodeException.php',
        'DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum' => __DIR__ . '/Client/HTTPMethodEnum.php',
        'DCarbone\PHPFHIRGenerated\Client\Response' => __DIR__ . '/Client/Response.php',
        'DCarbone\PHPFHIRGenerated\Client\Client' => __DIR__ . '/Client/Client.php',
        'DCarbone\PHPFHIRGenerated\Constants' => __DIR__ . '/Constants.php',
        'DCarbone\PHPFHIRGenerated\Types\ValueContainerTypeInterface' => __DIR__ . '/Types/ValueContainerTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\LeafTypeInterface' => __DIR__ . '/Types/LeafTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\ValueContainerTrait' => __DIR__ . '/Types/ValueContainerTrait.php',
        'DCarbone\PHPFHIRGenerated\Types\ResourceContainerTypeInterface' => __DIR__ . '/Types/ResourceContainerTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface' => __DIR__ . '/Types/ElementTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\CommentContainerInterface' => __DIR__ . '/Types/CommentContainerInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface' => __DIR__ . '/Types/ResourceTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\ProfileTypeInterface' => __DIR__ . '/Types/ProfileTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\ContainedTypeInterface' => __DIR__ . '/Types/ContainedTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\PrimitiveContainerTypeInterface' => __DIR__ . '/Types/PrimitiveContainerTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\TypeInterface' => __DIR__ . '/Types/TypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\CommentContainerTrait' => __DIR__ . '/Types/CommentContainerTrait.php',
        'DCarbone\PHPFHIRGenerated\Types\ResourceIDTypeInterface' => __DIR__ . '/Types/ResourceIDTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface' => __DIR__ . '/Types/PrimitiveTypeInterface.php',
        'DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait' => __DIR__ . '/Types/SourceXMLNamespaceTrait.php',
        // translation hop maps
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU1ToDSTU2' => __DIR__ . '/Translation/Maps/HopMap_DSTU1ToDSTU2.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU2ToDSTU1' => __DIR__ . '/Translation/Maps/HopMap_DSTU2ToDSTU1.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_DSTU2ToSTU3' => __DIR__ . '/Translation/Maps/HopMap_DSTU2ToSTU3.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_STU3ToDSTU2' => __DIR__ . '/Translation/Maps/HopMap_STU3ToDSTU2.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_STU3ToR4' => __DIR__ . '/Translation/Maps/HopMap_STU3ToR4.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4ToSTU3' => __DIR__ . '/Translation/Maps/HopMap_R4ToSTU3.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4ToR4B' => __DIR__ . '/Translation/Maps/HopMap_R4ToR4B.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4BToR4' => __DIR__ . '/Translation/Maps/HopMap_R4BToR4.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R4BToR5' => __DIR__ . '/Translation/Maps/HopMap_R4BToR5.php',
        'DCarbone\\PHPFHIRGenerated\\Translation\\Maps\\HopMap_R5ToR4B' => __DIR__ . '/Translation/Maps/HopMap_R5ToR4B.php',
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
            self::$_registered = spl_autoload_register(self::class . '::loadClass');
        }
        return self::$_registered;
    }

    public static function unregister(): bool
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(self::class . '::loadClass')) {
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
