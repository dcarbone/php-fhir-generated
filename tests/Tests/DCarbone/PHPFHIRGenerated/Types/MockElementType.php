<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerInterface;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerTrait;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;

class MockElementType implements ElementTypeInterface, CommentContainerInterface, \Iterator

{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        CommentContainerTrait,
        MockTypeFieldsTrait;

    private const _FHIR_VALIDATION_RULES = [];

    protected string $_name;

    private array $_valueXMLLocations = [];

    public function __construct(string $name,
                                array $fields = [],
                                array $validationRuleMap = [],
                                array $fhirComments = [])
    {
        $this->_name = $name;
        $this->_setFHIRComments($fhirComments);
        foreach($validationRuleMap as $field => $rules) {
            $this->_setFieldValidationRules($field, $rules);
        }
        $this->_processFields($fields);
    }

    public function _getFHIRTypeName(): string
    {
        return $this->_name;
    }

    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        throw new \BadMethodCallException('xmlUnserialize not yet implemented');
    }

    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        $this->_xmlSerialize($xw, $config);
    }

    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        throw new \BadMethodCallException('jsonUnserialize not yet implemented');
    }

    public function __toString(): string
    {
        return $this->_name;
    }
}
