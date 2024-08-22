<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREvidenceVariableHandling;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (e.g., population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 *
 * Class FHIREvidenceVariable
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence
 */
class FHIREvidenceVariable extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE;

    const FIELD_VARIABLE_DEFINITION = 'variableDefinition';
    const FIELD_HANDLING = 'handling';
    const FIELD_HANDLING_EXT = '_handling';
    const FIELD_VALUE_CATEGORY = 'valueCategory';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $variableDefinition = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREvidenceVariableHandling
     */
    protected null|FHIREvidenceVariableHandling $handling = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $valueCategory = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    protected null|array $valueQuantity = [];
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange[]
     */
    protected null|array $valueRange = [];

    /**
     * Validation map for fields in type Evidence.Variable
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_VARIABLE_DEFINITION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIREvidenceVariable Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_VARIABLE_DEFINITION, $data)) {
            if ($data[self::FIELD_VARIABLE_DEFINITION] instanceof FHIRReference) {
                $this->setVariableDefinition($data[self::FIELD_VARIABLE_DEFINITION]);
            } else {
                $this->setVariableDefinition(new FHIRReference($data[self::FIELD_VARIABLE_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_HANDLING, $data) || array_key_exists(self::FIELD_HANDLING_EXT, $data)) {
            $value = $data[self::FIELD_HANDLING] ?? null;
            $ext = (isset($data[self::FIELD_HANDLING_EXT]) && is_array($data[self::FIELD_HANDLING_EXT])) ? $data[self::FIELD_HANDLING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREvidenceVariableHandling) {
                    $this->setHandling($value);
                } else if (is_array($value)) {
                    $this->setHandling(new FHIREvidenceVariableHandling(array_merge($ext, $value)));
                } else {
                    $this->setHandling(new FHIREvidenceVariableHandling([FHIREvidenceVariableHandling::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHandling(new FHIREvidenceVariableHandling($ext));
            } else {
                $this->setHandling(new FHIREvidenceVariableHandling(null));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_VALUE_CATEGORY])) {
                foreach($data[self::FIELD_VALUE_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addValueCategory($v);
                    } else {
                        $this->addValueCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addValueCategory($data[self::FIELD_VALUE_CATEGORY]);
            } else {
                $this->addValueCategory(new FHIRCodeableConcept($data[self::FIELD_VALUE_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_QUANTITY, $data)) {
            if (is_array($data[self::FIELD_VALUE_QUANTITY])) {
                foreach($data[self::FIELD_VALUE_QUANTITY] as $v) {
                    if ($v instanceof FHIRQuantity) {
                        $this->addValueQuantity($v);
                    } else {
                        $this->addValueQuantity(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->addValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->addValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_RANGE, $data)) {
            if (is_array($data[self::FIELD_VALUE_RANGE])) {
                foreach($data[self::FIELD_VALUE_RANGE] as $v) {
                    if ($v instanceof FHIRRange) {
                        $this->addValueRange($v);
                    } else {
                        $this->addValueRange(new FHIRRange($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->addValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->addValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getVariableDefinition(): null|FHIRReference
    {
        return $this->variableDefinition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $variableDefinition
     * @return static
     */
    public function setVariableDefinition(null|FHIRReference $variableDefinition = null): self
    {
        if (null === $variableDefinition) {
            $variableDefinition = new FHIRReference();
        }
        $this->_trackValueSet($this->variableDefinition, $variableDefinition);
        $this->variableDefinition = $variableDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREvidenceVariableHandling
     */
    public function getHandling(): null|FHIREvidenceVariableHandling
    {
        return $this->handling;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIREvidenceVariableHandling $handling
     * @return static
     */
    public function setHandling(null|FHIREvidenceVariableHandling $handling = null): self
    {
        if (null === $handling) {
            $handling = new FHIREvidenceVariableHandling();
        }
        $this->_trackValueSet($this->handling, $handling);
        $this->handling = $handling;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getValueCategory(): null|array
    {
        return $this->valueCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCategory
     * @return static
     */
    public function addValueCategory(null|FHIRCodeableConcept $valueCategory = null): self
    {
        if (null === $valueCategory) {
            $valueCategory = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->valueCategory[] = $valueCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$valueCategory
     * @return static
     */
    public function setValueCategory(FHIRCodeableConcept ...$valueCategory): self
    {
        if ([] !== $this->valueCategory) {
            $this->_trackValuesRemoved(count($this->valueCategory));
            $this->valueCategory = [];
        }
        if ([] === $valueCategory) {
            return $this;
        }
        foreach($valueCategory as $v) {
            $this->addValueCategory($v);
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity[]
     */
    public function getValueQuantity(): null|array
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @return static
     */
    public function addValueQuantity(null|FHIRQuantity $valueQuantity = null): self
    {
        if (null === $valueQuantity) {
            $valueQuantity = new FHIRQuantity();
        }
        $this->_trackValueAdded();
        $this->valueQuantity[] = $valueQuantity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity ...$valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity ...$valueQuantity): self
    {
        if ([] !== $this->valueQuantity) {
            $this->_trackValuesRemoved(count($this->valueQuantity));
            $this->valueQuantity = [];
        }
        if ([] === $valueQuantity) {
            return $this;
        }
        foreach($valueQuantity as $v) {
            $this->addValueQuantity($v);
        }
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange[]
     */
    public function getValueRange(): null|array
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @return static
     */
    public function addValueRange(null|FHIRRange $valueRange = null): self
    {
        if (null === $valueRange) {
            $valueRange = new FHIRRange();
        }
        $this->_trackValueAdded();
        $this->valueRange[] = $valueRange;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange ...$valueRange
     * @return static
     */
    public function setValueRange(FHIRRange ...$valueRange): self
    {
        if ([] !== $this->valueRange) {
            $this->_trackValuesRemoved(count($this->valueRange));
            $this->valueRange = [];
        }
        if ([] === $valueRange) {
            return $this;
        }
        foreach($valueRange as $v) {
            $this->addValueRange($v);
        }
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getVariableDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIABLE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHandling())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HANDLING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValueCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueQuantity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_QUANTITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueRange())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_RANGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE_DEFINITION])) {
            $v = $this->getVariableDefinition();
            foreach($validationRules[self::FIELD_VARIABLE_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VARIABLE_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE_DEFINITION])) {
                        $errs[self::FIELD_VARIABLE_DEFINITION] = [];
                    }
                    $errs[self::FIELD_VARIABLE_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HANDLING])) {
            $v = $this->getHandling();
            foreach($validationRules[self::FIELD_HANDLING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_HANDLING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HANDLING])) {
                        $errs[self::FIELD_HANDLING] = [];
                    }
                    $errs[self::FIELD_HANDLING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CATEGORY])) {
            $v = $this->getValueCategory();
            foreach($validationRules[self::FIELD_VALUE_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CATEGORY])) {
                        $errs[self::FIELD_VALUE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_VALUE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RANGE])) {
            $v = $this->getValueRange();
            foreach($validationRules[self::FIELD_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RANGE])) {
                        $errs[self::FIELD_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_VALUE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIREvidenceVariable)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_VARIABLE_DEFINITION === $childName) {
                $type->setVariableDefinition(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_HANDLING === $childName) {
                $type->setHandling(FHIREvidenceVariableHandling::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_CATEGORY === $childName) {
                $type->addValueCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_QUANTITY === $childName) {
                $type->addValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_RANGE === $childName) {
                $type->addValueRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'EvidenceVariable', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getVariableDefinition())) {
            $xw->startElement(self::FIELD_VARIABLE_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getHandling())) {
            $xw->startElement(self::FIELD_HANDLING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getValueCategory() as $v) {
            $xw->startElement(self::FIELD_VALUE_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getValueQuantity() as $v) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getValueRange() as $v) {
            $xw->startElement(self::FIELD_VALUE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getVariableDefinition())) {
            $out->{self::FIELD_VARIABLE_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getHandling())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HANDLING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREvidenceVariableHandling::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HANDLING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getValueCategory())) {
            $out->{self::FIELD_VALUE_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VALUE_CATEGORY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getValueQuantity())) {
            $out->{self::FIELD_VALUE_QUANTITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VALUE_QUANTITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getValueRange())) {
            $out->{self::FIELD_VALUE_RANGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VALUE_RANGE}[] = $v;
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