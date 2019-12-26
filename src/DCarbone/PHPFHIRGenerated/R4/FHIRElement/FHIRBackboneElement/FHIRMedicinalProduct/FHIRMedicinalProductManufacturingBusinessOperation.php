<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct
 * patient care (e.g. regulatory use).
 *
 * Class FHIRMedicinalProductManufacturingBusinessOperation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct
 */
class FHIRMedicinalProductManufacturingBusinessOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION;
    const FIELD_AUTHORISATION_REFERENCE_NUMBER = 'authorisationReferenceNumber';
    const FIELD_CONFIDENTIALITY_INDICATOR = 'confidentialityIndicator';
    const FIELD_EFFECTIVE_DATE = 'effectiveDate';
    const FIELD_EFFECTIVE_DATE_EXT = '_effectiveDate';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_OPERATION_TYPE = 'operationType';
    const FIELD_REGULATOR = 'regulator';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory authorization reference number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $authorisationReferenceNumber = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To indicate if this proces is commercially confidential.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $confidentialityIndicator = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Regulatory authorization date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $effectiveDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufacturer or establishment associated with the process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $manufacturer = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of manufacturing operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $operationType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A regulator which oversees the operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $regulator = null;

    /**
     * Validation map for fields in type MedicinalProduct.ManufacturingBusinessOperation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicinalProductManufacturingBusinessOperation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductManufacturingBusinessOperation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORISATION_REFERENCE_NUMBER])) {
            if ($data[self::FIELD_AUTHORISATION_REFERENCE_NUMBER] instanceof FHIRIdentifier) {
                $this->setAuthorisationReferenceNumber($data[self::FIELD_AUTHORISATION_REFERENCE_NUMBER]);
            } else {
                $this->setAuthorisationReferenceNumber(new FHIRIdentifier($data[self::FIELD_AUTHORISATION_REFERENCE_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_CONFIDENTIALITY_INDICATOR])) {
            if ($data[self::FIELD_CONFIDENTIALITY_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setConfidentialityIndicator($data[self::FIELD_CONFIDENTIALITY_INDICATOR]);
            } else {
                $this->setConfidentialityIndicator(new FHIRCodeableConcept($data[self::FIELD_CONFIDENTIALITY_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_DATE]) || isset($data[self::FIELD_EFFECTIVE_DATE_EXT])) {
            if (isset($data[self::FIELD_EFFECTIVE_DATE])) {
                $value = $data[self::FIELD_EFFECTIVE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EFFECTIVE_DATE_EXT]) && is_array($data[self::FIELD_EFFECTIVE_DATE_EXT])) {
                $ext = $data[self::FIELD_EFFECTIVE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveDate($value);
                } else if (is_array($value)) {
                    $this->setEffectiveDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEffectiveDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if (is_array($data[self::FIELD_MANUFACTURER])) {
                foreach($data[self::FIELD_MANUFACTURER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addManufacturer($v);
                    } else {
                        $this->addManufacturer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->addManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->addManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_OPERATION_TYPE])) {
            if ($data[self::FIELD_OPERATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setOperationType($data[self::FIELD_OPERATION_TYPE]);
            } else {
                $this->setOperationType(new FHIRCodeableConcept($data[self::FIELD_OPERATION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_REGULATOR])) {
            if ($data[self::FIELD_REGULATOR] instanceof FHIRReference) {
                $this->setRegulator($data[self::FIELD_REGULATOR]);
            } else {
                $this->setRegulator(new FHIRReference($data[self::FIELD_REGULATOR]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MedicinalProductManufacturingBusinessOperation{$xmlns}></MedicinalProductManufacturingBusinessOperation>";
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory authorization reference number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getAuthorisationReferenceNumber()
    {
        return $this->authorisationReferenceNumber;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Regulatory authorization reference number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $authorisationReferenceNumber
     * @return static
     */
    public function setAuthorisationReferenceNumber(FHIRIdentifier $authorisationReferenceNumber = null)
    {
        $this->authorisationReferenceNumber = $authorisationReferenceNumber;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To indicate if this proces is commercially confidential.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getConfidentialityIndicator()
    {
        return $this->confidentialityIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * To indicate if this proces is commercially confidential.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $confidentialityIndicator
     * @return static
     */
    public function setConfidentialityIndicator(FHIRCodeableConcept $confidentialityIndicator = null)
    {
        $this->confidentialityIndicator = $confidentialityIndicator;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Regulatory authorization date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Regulatory authorization date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $effectiveDate
     * @return static
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        if (null === $effectiveDate) {
            $this->effectiveDate = null;
            return $this;
        }
        if ($effectiveDate instanceof FHIRDateTime) {
            $this->effectiveDate = $effectiveDate;
            return $this;
        }
        $this->effectiveDate = new FHIRDateTime($effectiveDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufacturer or establishment associated with the process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufacturer or establishment associated with the process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(FHIRReference $manufacturer = null)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The manufacturer or establishment associated with the process.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $manufacturer
     * @return static
     */
    public function setManufacturer(array $manufacturer = [])
    {
        $this->manufacturer = [];
        if ([] === $manufacturer) {
            return $this;
        }
        foreach($manufacturer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addManufacturer($v);
            } else {
                $this->addManufacturer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of manufacturing operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of manufacturing operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $operationType
     * @return static
     */
    public function setOperationType(FHIRCodeableConcept $operationType = null)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A regulator which oversees the operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A regulator which oversees the operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $regulator
     * @return static
     */
    public function setRegulator(FHIRReference $regulator = null)
    {
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAuthorisationReferenceNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORISATION_REFERENCE_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConfidentialityIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONFIDENTIALITY_INDICATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectiveDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOperationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRegulator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGULATOR] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORISATION_REFERENCE_NUMBER])) {
            $v = $this->getAuthorisationReferenceNumber();
            foreach($validationRules[self::FIELD_AUTHORISATION_REFERENCE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_AUTHORISATION_REFERENCE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORISATION_REFERENCE_NUMBER])) {
                        $errs[self::FIELD_AUTHORISATION_REFERENCE_NUMBER] = [];
                    }
                    $errs[self::FIELD_AUTHORISATION_REFERENCE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFIDENTIALITY_INDICATOR])) {
            $v = $this->getConfidentialityIndicator();
            foreach($validationRules[self::FIELD_CONFIDENTIALITY_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_CONFIDENTIALITY_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFIDENTIALITY_INDICATOR])) {
                        $errs[self::FIELD_CONFIDENTIALITY_INDICATOR] = [];
                    }
                    $errs[self::FIELD_CONFIDENTIALITY_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE])) {
            $v = $this->getEffectiveDate();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_EFFECTIVE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_DATE])) {
                        $errs[self::FIELD_EFFECTIVE_DATE] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION_TYPE])) {
            $v = $this->getOperationType();
            foreach($validationRules[self::FIELD_OPERATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_OPERATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION_TYPE])) {
                        $errs[self::FIELD_OPERATION_TYPE] = [];
                    }
                    $errs[self::FIELD_OPERATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATOR])) {
            $v = $this->getRegulator();
            foreach($validationRules[self::FIELD_REGULATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DOT_MANUFACTURING_BUSINESS_OPERATION, self::FIELD_REGULATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATOR])) {
                        $errs[self::FIELD_REGULATOR] = [];
                    }
                    $errs[self::FIELD_REGULATOR][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicinalProductManufacturingBusinessOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductManufacturingBusinessOperation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductManufacturingBusinessOperation;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductManufacturingBusinessOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductManufacturingBusinessOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authorisationReferenceNumber)) {
            $type->setAuthorisationReferenceNumber(FHIRIdentifier::xmlUnserialize($children->authorisationReferenceNumber));
        }
        if (isset($children->confidentialityIndicator)) {
            $type->setConfidentialityIndicator(FHIRCodeableConcept::xmlUnserialize($children->confidentialityIndicator));
        }
        if (isset($children->effectiveDate)) {
            $type->setEffectiveDate(FHIRDateTime::xmlUnserialize($children->effectiveDate));
        }
        if (isset($attributes->effectiveDate)) {
            $pt = $type->getEffectiveDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->effectiveDate);
            } else {
                $type->setEffectiveDate((string)$attributes->effectiveDate);
            }
        }
        if (isset($children->manufacturer)) {
            foreach($children->manufacturer as $child) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->operationType)) {
            $type->setOperationType(FHIRCodeableConcept::xmlUnserialize($children->operationType));
        }
        if (isset($children->regulator)) {
            $type->setRegulator(FHIRReference::xmlUnserialize($children->regulator));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAuthorisationReferenceNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORISATION_REFERENCE_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getConfidentialityIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONFIDENTIALITY_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectiveDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOperationType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRegulator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATOR, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthorisationReferenceNumber())) {
            $a[self::FIELD_AUTHORISATION_REFERENCE_NUMBER] = $v;
        }
        if (null !== ($v = $this->getConfidentialityIndicator())) {
            $a[self::FIELD_CONFIDENTIALITY_INDICATOR] = $v;
        }
        if (null !== ($v = $this->getEffectiveDate())) {
            $a[self::FIELD_EFFECTIVE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EFFECTIVE_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MANUFACTURER][] = $v;
            }
        }
        if (null !== ($v = $this->getOperationType())) {
            $a[self::FIELD_OPERATION_TYPE] = $v;
        }
        if (null !== ($v = $this->getRegulator())) {
            $a[self::FIELD_REGULATOR] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}