<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerInterface;
use DCarbone\PHPFHIRGenerated\Types\CommentContainerTrait;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveContainerTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;

class MockResourceType implements ResourceTypeInterface, CommentContainerInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        CommentContainerTrait,
        SourceXMLNamespaceTrait;

    private const _FHIR_VALIDATION_RULES = [];

    protected string $_name;
    protected array $_fields = [];

    private array $_valueXMLLocations = [];

    public function __construct(string $name,
                                array $fields = [],
                                array $validationRuleMap = [],
                                array $fhirComments = [])
    {
        $this->_name = $name;
        $this->_fields = $fields;
        $this->_setFHIRComments($fhirComments);
        foreach($validationRuleMap as $field => $rules) {
            $this->_setFieldValidationRules($field, $validationRuleMap);
        }

        foreach($fields as $field => $def) {
            if (!isset($def['class'])) {
                throw new \LogicException(sprintf('Field "%s" definition must contain "class" key', $field));
            }
            if (is_a($def['class'], PrimitiveContainerTypeInterface::class, true)) {
                $this->_valueXMLLocations[$field] = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE;
            }
        }
    }

    public function _getFHIRTypeName(): string
    {
        return $this->_name;
    }

    protected function _doGet(string $field, array $fieldDef, array $args): null|array|TypeInterface
    {
        if ([] !== $args) {
            throw new \BadMethodCallException(sprintf('Method "get%s" has no parameters, but %d were provided', ucfirst($field), count($args)));
        }
        $collection = $fieldDef['collection'] ?? false;
        return $this->_fields[$field]['value'] ?? ($collection ? [] : null);
    }

    protected function _doSet(string $field, array $fieldDef, array $args): self
    {
        $class = $fieldDef['class'];
        $collection = $fieldDef['collection'] ?? false;
        $primitive = is_a($class, PrimitiveTypeInterface::class, true);

        // non-collection setters accept exactly 1 argument
        if (!$collection && 1 !== count($args)) {
            throw new \BadMethodCallException(sprintf('Method "set%s" must have exactly one argument of type %s', ucfirst($field), $class));
        }

        // if "empty" input, unset value
        if (([] === $args && $collection) || null === $args[0]) {
            unset($this->_fields[$field]['value']);
            return $this;
        }

        if ($collection) {
            $this->_fields[$field]['value'] = [];
            foreach($args as $v) {
                if ($primitive && (is_scalar($v) || $v instanceof \DateTime)) {
                    $this->_fields[$field]['value'][] = new $class($v);
                } else if (!is_a($v, $class, false)) {
                    throw new \InvalidArgumentException(sprintf('Field "%s" values must be of type "%s", saw "%s"', $field, $class, gettype($v)));
                } else {
                    $this->_fields[$field]['value'][] = $v;
                }
            }
            return $this;
        }

        if ($primitive && (is_scalar($args[0]) || $args[0] instanceof \DateTime)) {
            $this->_fields[$field] = new $class($args[0]);
        } else if (!is_a($args[0], $class, false)) {
            throw new \InvalidArgumentException(sprintf('Field "%s" value must be of type "%s", saw "%s"', $field, $class, gettype($args[0])));
        } else {
            $this->_fields[$field]['value'] = $args[0];
        }

        return $this;
    }

    protected function _doAdd(string $field, array $fieldDef, array $args): self
    {
        $class = $fieldDef['class'];
        $collection = $fieldDef['collection'] ?? false;
        $primitive = is_a($class, PrimitiveTypeInterface::class, true);

        if (!$collection) {
            throw new \BadMethodCallException(sprintf('Method "add%s" not defined', ucfirst($field)));
        }

        // collection add methods have exactly 1 parameter.
        if (1 !== count($args)) {
            throw new \InvalidArgumentException(sprintf('Method "add%s" requires exactly 1 parameter, but %d were provided.', ucfirst($field), count($args)));
        }

        if ($primitive && (is_scalar($args[0]) || $args[0] instanceof \DateTime)) {
            if (!isset($this->_fields[$field]['value'])) {
                $this->_fields[$field]['value'] = [];
            }
            $this->_fields[$field]['value'][] = new $class($args[0]);
            return $this;
        }

        if (!is_a($args[0], $class, false)) {
            throw new \InvalidArgumentException(sprintf('Field "%s" value must be of type "%s", saw "%s"', $field, $class, gettype($args[0])));
        }

        if (!isset($this->_fields[$field]['value'])) {
            $this->_fields[$field]['value'] = [];
        }
        $this->_fields[$field]['value'][] = $args[0];

        return $this;
    }

    public function __call(string $name, array $args): null|self|TypeInterface
    {
        $get = str_starts_with($name, 'get');
        $set = str_starts_with($name, 'set');
        $add = str_starts_with($name, 'add');

        if (!$get && !$set && !$add) {
            throw new \BadMethodCallException(sprintf('Method "%s" not defined', $name));
        }

        $field = lcfirst(substr($name, 3));
        if (!isset($this->_fields[$field])) {
            throw new \BadMethodCallException(sprintf('No field "%s" defined', $field));
        }

        return match(true) {
            $get => $this->_doGet($field, $this->_fields[$field], $args),
            $set => $this->_doSet($field, $this->_fields[$field], $args),
            $add => $this->_doAdd($field, $this->_fields[$field], $args),
        };
    }

    public static function xmlUnserialize(\SimpleXMLElement|string $element, UnserializeConfig $config = null, ResourceTypeInterface $type = null): ResourceTypeInterface
    {
        throw new \BadMethodCallException('gotta do this');
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

        // define primitives as attributes
        foreach($this->_fields as $field => $def) {
            $class = $def['class'];
            $value = $def['value'] ?? null;
            $primitive = is_a($class, PrimitiveTypeInterface::class, true);

            if (!$primitive || null === $value) {
                continue;
            }

            $xw->writeAttribute($field, $value->_getValueAsString());
        }

        // define others as elements
        foreach($this->_fields as $field => $def) {
            $class = $def['class'];
            $value = $def['value'] ?? null;
            $collection = $def['collection'] ?? false;
            $primitiveContainer = is_a($class, PrimitiveContainerTypeInterface::class, true);

            if ($collection) {
                foreach ($value as $v) {
                    $xw->startElement($field);
                    if ($primitiveContainer) {
                        $v->xmlSerialize($xw, $config, $this->_valueXMLLocations[$field]);
                    } else {
                        $v->xmlSerialize($xw, $config);
                    }
                    $xw->endElement();
                }
            } else if ($primitiveContainer) {
                $xw->startElement($field);
                $value->xmlSerialize($xw, $config, $this->_valueXMLLocations[$field]);
                $xw->endElement();
            } else {
                $xw->startElement($field);
                $value->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }

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
        throw new \BadMethodCallException('gotta do this');
    }

    public function jsonSerialize(): \stdClass
    {
        $out = new \stdClass();
        foreach($this->_fields as $field => $def) {
            $class = $def['class'];
            $value = $def['value'] ?? null;
            $primitiveContainer = is_a($class, PrimitiveContainerTypeInterface::class, true);

            if (null === $value || [] === $value) {
                continue;
            }

            if (!$primitiveContainer) {
                $out->{$field} = $value;
            } else {
                $out->{$field}->getValue();
            }
        }

        return $out;
    }

    public function __toString(): string
    {
        return $this->_name;
    }
}
