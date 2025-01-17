<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Information about a medication that is used to support knowledge.
 */
class FHIRMedicationKnowledgeCost extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_COST;


    public const FIELD_EFFECTIVE_DATE = 'effectiveDate';
    public const FIELD_TYPE = 'type';
    public const FIELD_SOURCE = 'source';
    public const FIELD_SOURCE_EXT = '_source';
    public const FIELD_COST_MONEY = 'costMoney';
    public const FIELD_COST_CODEABLE_CONCEPT = 'costCodeableConcept';

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[] 
     */
    protected array $effectiveDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of the cost information. For example, manufacturers' cost, patient
     * cost, claim reimbursement cost, actual acquisition cost.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source or owner that assigns the price to the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $source;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $costMoney;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $costCodeableConcept;

    /** Default validation map for fields in type MedicationKnowledge.Cost */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_COST_MONEY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_COST_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicationKnowledgeCost Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[] $effectiveDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $source
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $costMoney
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $costCodeableConcept
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $effectiveDate = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $source = null,
                                null|FHIRMoney $costMoney = null,
                                null|FHIRCodeableConcept $costCodeableConcept = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $effectiveDate) {
            $this->setEffectiveDate(...$effectiveDate);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $costMoney) {
            $this->setCostMoney($costMoney);
        }
        if (null !== $costCodeableConcept) {
            $this->setCostCodeableConcept($costCodeableConcept);
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[]
     */
    public function getEffectiveDate(): array
    {
        return $this->effectiveDate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod>
     */
    public function getEffectiveDateIterator(): iterable
    {
        if (!isset($this->effectiveDate) || [] === $this->effectiveDate) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->effectiveDate);
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectiveDate
     * @return static
     */
    public function addEffectiveDate(FHIRPeriod $effectiveDate): self
    {
        if (!isset($this->effectiveDate)) {
            $this->effectiveDate = [];
        }
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod ...$effectiveDate
     * @return static
     */
    public function setEffectiveDate(FHIRPeriod ...$effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of the cost information. For example, manufacturers' cost, patient
     * cost, claim reimbursement cost, actual acquisition cost.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of the cost information. For example, manufacturers' cost, patient
     * cost, claim reimbursement cost, actual acquisition cost.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source or owner that assigns the price to the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSource(): null|FHIRString
    {
        return $this->source ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The source or owner that assigns the price to the medication.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $source
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSource(null|string|FHIRStringPrimitive|FHIRString $source,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        if (!($source instanceof FHIRString)) {
            $source = new FHIRString(value: $source);
        }
        if (null !== $valueXMLLocation) {
            $source->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $source->_getValueXMLLocation()) {
            $source->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->source = $source;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getCostMoney(): null|FHIRMoney
    {
        return $this->costMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $costMoney
     * @return static
     */
    public function setCostMoney(null|FHIRMoney $costMoney): self
    {
        if (null === $costMoney) {
            unset($this->costMoney);
            return $this;
        }
        $this->costMoney = $costMoney;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCostCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->costCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The price or representation of the cost (for example, Band A, Band B or $, $$)
     * of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $costCodeableConcept
     * @return static
     */
    public function setCostCodeableConcept(null|FHIRCodeableConcept $costCodeableConcept): self
    {
        if (null === $costCodeableConcept) {
            unset($this->costCodeableConcept);
            return $this;
        }
        $this->costCodeableConcept = $costCodeableConcept;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCostMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COST_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCostCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COST_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE])) {
            $v = $this->getEffectiveDate();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EFFECTIVE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_DATE])) {
                        $errs[self::FIELD_EFFECTIVE_DATE] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST_MONEY])) {
            $v = $this->getCostMoney();
            foreach($validationRules[self::FIELD_COST_MONEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COST_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST_MONEY])) {
                        $errs[self::FIELD_COST_MONEY] = [];
                    }
                    $errs[self::FIELD_COST_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST_CODEABLE_CONCEPT])) {
            $v = $this->getCostCodeableConcept();
            foreach($validationRules[self::FIELD_COST_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COST_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_COST_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_COST_CODEABLE_CONCEPT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeCost)) {
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
            } else if (self::FIELD_EFFECTIVE_DATE === $childName) {
                $v = new FHIRPeriod();
                $type->addEffectiveDate(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSource(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COST_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setCostMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COST_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCostCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SOURCE])) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOURCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSource(new FHIRString(
                    value: (string)$attributes[self::FIELD_SOURCE],
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
            $xw->openRootNode('MedicationKnowledgeCost', $this->_getSourceXMLNS());
        }
        if (isset($this->source) && $this->source->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE, $this->source->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->effectiveDate)) {
            foreach ($this->effectiveDate as $v) {
                $xw->startElement(self::FIELD_EFFECTIVE_DATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->source) && $this->source->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->costMoney)) {
            $xw->startElement(self::FIELD_COST_MONEY);
            $this->costMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->costCodeableConcept)) {
            $xw->startElement(self::FIELD_COST_CODEABLE_CONCEPT);
            $this->costCodeableConcept->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeCost)) {
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
        if (isset($json[self::FIELD_EFFECTIVE_DATE]) || array_key_exists(self::FIELD_EFFECTIVE_DATE, $json)) {
            if (is_array($json[self::FIELD_EFFECTIVE_DATE])) {
                foreach($json[self::FIELD_EFFECTIVE_DATE] as $v) {
                    if ($v instanceof FHIRPeriod) {
                        $type->addEffectiveDate($v);
                    } else {
                        $type->addEffectiveDate(new FHIRPeriod($v));
                    }
                }
            } elseif ($json[self::FIELD_EFFECTIVE_DATE] instanceof FHIRPeriod) {
                $type->addEffectiveDate($json[self::FIELD_EFFECTIVE_DATE]);
            } else {
                $type->addEffectiveDate(new FHIRPeriod($json[self::FIELD_EFFECTIVE_DATE]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SOURCE]) || isset($json[self::FIELD_SOURCE_EXT]) || array_key_exists(self::FIELD_SOURCE, $json) || array_key_exists(self::FIELD_SOURCE_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_EXT]) && is_array($json[self::FIELD_SOURCE_EXT])) ? $json[self::FIELD_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSource($value);
                } else if (is_array($value)) {
                    $type->setSource(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSource(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSource(new FHIRString($ext));
            } else {
                $type->setSource(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COST_MONEY]) || array_key_exists(self::FIELD_COST_MONEY, $json)) {
            if ($json[self::FIELD_COST_MONEY] instanceof FHIRMoney) {
                $type->setCostMoney($json[self::FIELD_COST_MONEY]);
            } else {
                $type->setCostMoney(new FHIRMoney($json[self::FIELD_COST_MONEY]));
            }
        }
        if (isset($json[self::FIELD_COST_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_COST_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_COST_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setCostCodeableConcept($json[self::FIELD_COST_CODEABLE_CONCEPT]);
            } else {
                $type->setCostCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_COST_CODEABLE_CONCEPT]));
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
        if (isset($this->effectiveDate) && [] !== $this->effectiveDate) {
            $out->effectiveDate = $this->effectiveDate;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->source)) {
            if (null !== ($val = $this->source->getValue())) {
                $out->source = $val;
            }
            $ext = $this->source->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_source = $ext;
            }
        }
        if (isset($this->costMoney)) {
            $out->costMoney = $this->costMoney;
        }
        if (isset($this->costCodeableConcept)) {
            $out->costCodeableConcept = $this->costCodeableConcept;
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