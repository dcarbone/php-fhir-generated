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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;

class MockResourceType implements ResourceTypeInterface, CommentContainerInterface, \Iterator

{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        CommentContainerTrait,
        SourceXMLNamespaceTrait,
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

    public static function xmlUnserialize(\SimpleXMLElement|string $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): ResourceTypeInterface
    {
        throw new \BadMethodCallException('xmlUnserialize not yet implemented');
    }

    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = new SerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($this->_name, $this->_getSourceXMLNS());
        }

        $this->_xmlSerialize($xw, $config);

        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    public static function jsonUnserialize(string|\stdClass $json, null|UnserializeConfig $config = null, null|ResourceTypeInterface $type = null): ResourceTypeInterface
    {
        throw new \BadMethodCallException('jsonUnserialize not yet implemented');
    }

    public function __toString(): string
    {
        return $this->_name;
    }
}
