<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 */
class FHIRMeasureReportStratum extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM;


    public const FIELD_VALUE = 'value';
    public const FIELD_VALUE_EXT = '_value';
    public const FIELD_POPULATION = 'population';
    public const FIELD_MEASURE_SCORE = 'measureScore';
    public const FIELD_MEASURE_SCORE_EXT = '_measureScore';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $value;
    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[] 
     */
    protected array $population;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $measureScore;

    /** Default validation map for fields in type MeasureReport.Stratum */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMeasureReportStratum Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $value
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[] $population
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $measureScore
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRString|FHIRStringPrimitive $value = null,
                                null|ValueXMLLocationEnum $valueXMLLocation = null,
                                null|iterable $population = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $measureScore = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $value) {
            $this->setValue($value);
        }
        if (null !== $population) {
            $this->setPopulation(...$population);
        }
        if (null !== $measureScore) {
            $this->setMeasureScore($measureScore);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a string. When defining stratifiers on
     * complex values, the value must be rendered such that the value for each stratum
     * within the stratifier is unique.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $value
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValue(null|string|FHIRString|FHIRStringPrimitive $value,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (!($value instanceof FHIRString)) {
            $value = new FHIRString(value: $value);
        }
        if (null !== $valueXMLLocation) {
            $value->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $value->_getValueXMLLocation()) {
            $value->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[]
     */
    public function getPopulation(): array
    {
        return $this->population ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1>
     */
    public function getPopulationIterator(): iterable
    {
        if (!isset($this->population) || [] === $this->population) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->population);
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1 $population
     * @return static
     */
    public function addPopulation(FHIRMeasureReportPopulation1 $population): self
    {
        if (!isset($this->population)) {
            $this->population = [];
        }
        $this->population[] = $population;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1 ...$population
     * @return static
     */
    public function setPopulation(FHIRMeasureReportPopulation1 ...$population): self
    {
        $this->population = $population;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getMeasureScore(): null|FHIRDecimal
    {
        return $this->measureScore ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $measureScore
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMeasureScore(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $measureScore,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $measureScore) {
            unset($this->measureScore);
            return $this;
        }
        if (!($measureScore instanceof FHIRDecimal)) {
            $measureScore = new FHIRDecimal(value: $measureScore);
        }
        if (null !== $valueXMLLocation) {
            $measureScore->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $measureScore->_getValueXMLLocation()) {
            $measureScore->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->measureScore = $measureScore;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getValue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POPULATION])) {
            $v = $this->getPopulation();
            foreach($validationRules[self::FIELD_POPULATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POPULATION])) {
                        $errs[self::FIELD_POPULATION] = [];
                    }
                    $errs[self::FIELD_POPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE])) {
            $v = $this->getMeasureScore();
            foreach($validationRules[self::FIELD_MEASURE_SCORE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEASURE_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE])) {
                        $errs[self::FIELD_MEASURE_SCORE] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportStratum)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValue(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POPULATION === $childName) {
                $v = new FHIRMeasureReportPopulation1();
                $type->addPopulation(FHIRMeasureReportPopulation1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEASURE_SCORE === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMeasureScore(FHIRDecimal::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValue(new FHIRString(
                    value: (string)$attributes[self::FIELD_VALUE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MEASURE_SCORE])) {
            $pt = $type->getMeasureScore();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MEASURE_SCORE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasureScore(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_MEASURE_SCORE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
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
            $xw->openRootNode('MeasureReportStratum', $this->_getSourceXMLNS());
        }
        if (isset($this->value) && $this->value->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE, $this->value->getValue()?->_getFormattedValue());
        }
        if (isset($this->measureScore) && $this->measureScore->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MEASURE_SCORE, $this->measureScore->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->value) && $this->value->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE);
            $this->value->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->population)) {
            foreach ($this->population as $v) {
                $xw->startElement(self::FIELD_POPULATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->measureScore) && $this->measureScore->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MEASURE_SCORE);
            $this->measureScore->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportStratum)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_VALUE]) || isset($json[self::FIELD_VALUE_EXT]) || array_key_exists(self::FIELD_VALUE, $json) || array_key_exists(self::FIELD_VALUE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_EXT]) && is_array($json[self::FIELD_VALUE_EXT])) ? $json[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setValue($value);
                } else if (is_array($value)) {
                    $type->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValue(new FHIRString($ext));
            } else {
                $type->setValue(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_POPULATION]) || array_key_exists(self::FIELD_POPULATION, $json)) {
            if (is_array($json[self::FIELD_POPULATION])) {
                foreach($json[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRMeasureReportPopulation1) {
                        $type->addPopulation($v);
                    } else {
                        $type->addPopulation(new FHIRMeasureReportPopulation1($v));
                    }
                }
            } elseif ($json[self::FIELD_POPULATION] instanceof FHIRMeasureReportPopulation1) {
                $type->addPopulation($json[self::FIELD_POPULATION]);
            } else {
                $type->addPopulation(new FHIRMeasureReportPopulation1($json[self::FIELD_POPULATION]));
            }
        }
        if (isset($json[self::FIELD_MEASURE_SCORE]) || isset($json[self::FIELD_MEASURE_SCORE_EXT]) || array_key_exists(self::FIELD_MEASURE_SCORE, $json) || array_key_exists(self::FIELD_MEASURE_SCORE_EXT, $json)) {
            $value = $json[self::FIELD_MEASURE_SCORE] ?? null;
            $ext = (isset($json[self::FIELD_MEASURE_SCORE_EXT]) && is_array($json[self::FIELD_MEASURE_SCORE_EXT])) ? $json[self::FIELD_MEASURE_SCORE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setMeasureScore($value);
                } else if (is_array($value)) {
                    $type->setMeasureScore(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setMeasureScore(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMeasureScore(new FHIRDecimal($ext));
            } else {
                $type->setMeasureScore(new FHIRDecimal(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->value)) {
            if (null !== ($val = $this->value->getValue())) {
                $out->value = $val;
            }
            $ext = $this->value->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_value = $ext;
            }
        }
        if (isset($this->population) && [] !== $this->population) {
            $out->population = $this->population;
        }
        if (isset($this->measureScore)) {
            if (null !== ($val = $this->measureScore->getValue())) {
                $out->measureScore = $val;
            }
            $ext = $this->measureScore->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_measureScore = $ext;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}