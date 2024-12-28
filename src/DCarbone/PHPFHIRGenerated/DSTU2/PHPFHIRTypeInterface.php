<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

/**
 * Interface PHPFHIRTypeInterface
 * @package \DCarbone\PHPFHIRGenerated\DSTU2
 */
interface PHPFHIRTypeInterface extends \JsonSerializable {
    /**
     * @param array|null $data
     */
    public function __construct($data = null);

    /**
     * Returns the FHIR name represented by this Type
     * @return string
     */
    public function _getFHIRTypeName();

    /**
     * Returns the xml namespace to use for this type when serializing to XML, if applicable.
     * @return string
     */
    public function _getFHIRXMLNamespace();

    /**
     * Set the XML Namespace to be output when serializing this type to XML
     * @param string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace);

    /**
     * Returns the base xml element definition for this type
     * @return string
     */
    public function _getFHIRXMLElementDefinition();

    /**
     * Must return an associative array in structure ["field" => ["rule" => {constraint}]] to be used during validation
     * @return array
     */
    public function _getValidationRules();

    /**
     * Must return associative array where, if there are validation errors, the keys are the names of fields within the
     * type that failed validation.  The value must be a string message describing the manner of error
     * @return array
     */
    public function _getValidationErrors();

    /**
     * Must return true if any field on this type is set to a non-empty value
     * @return bool
     */
    public function _isValued();

    /**
     * @param \DOMElement|string|null $element
     * @param null|static $type
     * @param null|int $libxmlOpts
     * @return null|static
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872);

    /**
     * @param \DOMElement|null $element
     * @param null|int $libxmlOpts
     * @return string|\DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872);

    /**
     * @return string
     */
    public function __toString();
}
