<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;

interface TypeInterface extends \JsonSerializable
{
    /**
     * Returns the FHIR name represented by this Type
     *
     * @return string
     */
    public function _getFHIRTypeName(): string;

    /**
     * Returns the root XMLNS value found in the source.  Null indicates no "xmlns" was found.  Only defined when
     * unserializing XML, and only used when serializing XML.
     *
     * @return null|string
     */
    public function _getSourceXMLNS(): null|string;

    /**
     * Must return an associative array in structure ["field" => ["rule" => {constraint}]] to be used during validation
     *
     * @return array
     */
    public function _getValidationRules(): array;

    /**
     * Must return associative array where, if there are validation errors, the keys are the names of fields within the
     * type that failed validation.  The value must be a string message describing the manner of error
     *
     * @return array
     */
    public function _getValidationErrors(): array;

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|static $type Instance of this class to unserialize into.  If left null, a new instance will be created.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return static
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self;

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter;

    /**
     * @param string|array|\stdClass $json Raw or already un-encoded JSON
     * @param null|static $type Instance of this class to unserialize into.  If left null, a new instance will be created.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return static
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self;

    /**
     * @return string
     */
    public function __toString(): string;
}
