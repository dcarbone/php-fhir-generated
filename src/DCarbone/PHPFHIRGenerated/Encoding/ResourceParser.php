<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;

class ResourceParser
{
    private const XML_START = ['<'];
    private const JSON_START = ['{', '['];

    /**
     * Attempts to parse the provided input into FHIR objects.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param null|string|array|\stdClass|\SimpleXMLElement|\DOMDocument $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     * @throws \Exception
     */
    public static function parse(VersionInterface $version,
                                 null|string|array|\stdClass|\SimpleXMLElement|\DOMDocument $input): null|ResourceTypeInterface
    {
        if (null === $input) {
            return null;
        } else if (is_string($input)) {
            return static::parseString($version, $input);
        } else if (is_array($input)) {
            return static::parseArray($version, $input);
        } else {
            return static::parseObject($version, $input);
        }
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param array $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseArray(VersionInterface $version, array $input): null|ResourceTypeInterface
    {
        if ([] === $input) {
            return null;
        }
        if (isset($input[Constants::JSON_FIELD_RESOURCE_TYPE])) {
            /** @var \DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface $className */
            $className = $version->getTypeMap()::getTypeClassName($input[Constants::JSON_FIELD_RESOURCE_TYPE]);
            if (null === $className) {
                throw new \UnexpectedValueException(sprintf(
                    'Provided input has "%s" value of "%s", but it does not map to any known type.  Other keys: ["%s"]',
                    Constants::JSON_FIELD_RESOURCE_TYPE,
                    $input[Constants::JSON_FIELD_RESOURCE_TYPE],
                    implode('","', array_keys($input))
                ));
            }
            return $className::jsonUnserialize($input, $version->getConfig()->getUnserializeConfig());
        }
        throw new \DomainException(sprintf(
            'Unable to determine FHIR Type from provided array: missing "%s" key.  Available keys: ["%s"]',
            Constants::JSON_FIELD_RESOURCE_TYPE,
            implode('","', array_keys($input))
        ));
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param \stdClass $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseStdClass(VersionInterface $version, \stdClass $input): null|ResourceTypeInterface
    {
        return static::parseArray($version, (array)$input);
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param \SimpleXMLElement $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseSimpleXMLElement(VersionInterface $version, \SimpleXMLElement $input): null|ResourceTypeInterface
    {
        $elementName = $input->getName();
        /** @var \DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface $fhirType */
        $fhirType = $version->getTypeMap()::getTypeClassName($elementName);
        if (null === $fhirType) {
            throw new \UnexpectedValueException(sprintf(
                'Unable to locate FHIR type for root XML element "%s". Input seen: %s',
                $elementName,
                static::getPrintableStringInput($input->saveXML())
            ));
        }
        return $fhirType::xmlUnserialize($input, $version->getConfig()->getUnserializeConfig());
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param \DOMDocument $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseDOMDocument(VersionInterface $version, \DOMDocument $input): null|ResourceTypeInterface
    {
        return static::parseSimpleXMLElement($version, simplexml_import_dom($input));
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param \stdClass|\SimpleXMLElement|\DOMDocument $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseObject(VersionInterface $version,
                                       \stdClass|\SimpleXMLElement|\DOMDocument $input): null|ResourceTypeInterface
    {
        if ($input instanceof \stdClass) {
            return static::parseStdClass($version, $input);
        } elseif ($input instanceof \SimpleXMLElement) {
            return static::parseSimpleXMLElement($version, $input);
        } else {
            return static::parseDOMDocument($version, $input);
        }
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param string $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     * @throws \Exception
     */
    public static function parseXML(VersionInterface $version, string $input): null|ResourceTypeInterface
    {
        return static::parseSimpleXMLElement(
            $version,
            new \SimpleXMLElement($input, $version->getConfig()->getUnserializeConfig()->getLibxmlOpts()));
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param string $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public static function parseJSON(VersionInterface $version, string $input): null|ResourceTypeInterface
    {
        $decoded = json_decode($input, true, $version->getConfig()->getUnserializeConfig()->getJSONDecodeMaxDepth());
        $err = json_last_error();
        if (JSON_ERROR_NONE !== $err) {
            throw new \DomainException(sprintf(
                'Unable to parse provided input as JSON.  Error: %s; Input: %s',
                json_last_error_msg(),
               static::getPrintableStringInput($input)
            ));
        }

        return static::parseArray($version, $decoded);
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Versions\VersionInterface $version
     * @param string $input
     * @return null|\DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     * @throws \Exception
     */
    public static function parseString(VersionInterface $version, string $input): null|ResourceTypeInterface
    {
        if ('' === $input) {
            return null;
        }
        $chr = $input[0];
        if (in_array($chr, self::XML_START, true)) {
            return static::parseXML($version, $input);
        } elseif (in_array($chr, self::JSON_START, true)) {
            return static::parseJSON($version, $input);
        }
        throw new \UnexpectedValueException(sprintf(
            'Input string must be either XML or JSON encoded object.  Provided: %s',
           static::getPrintableStringInput($input)
        ));
    }

    /**
     * @param string $input
     * @return string
     */
    protected static function getPrintableStringInput(string $input): string
    {
        if (strlen($input) > 100) {
            return sprintf('%s[...]', substr($input, 0, 100));
        }
        return $input;
    }
}
