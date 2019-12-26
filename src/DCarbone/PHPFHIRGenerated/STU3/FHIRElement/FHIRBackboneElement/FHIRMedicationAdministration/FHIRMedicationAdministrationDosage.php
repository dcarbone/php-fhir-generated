<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient consuming or otherwise being administered a
 * medication. This may be as simple as swallowing a tablet or it may be a long
 * running infusion. Related resources tie this event to the authorizing
 * prescription, and the specific encounter between patient and health care
 * practitioner.
 *
 * Class FHIRMedicationAdministrationDosage
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration
 */
class FHIRMedicationAdministrationDosage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE;
    const FIELD_DOSE = 'dose';
    const FIELD_METHOD = 'method';
    const FIELD_RATE_QUANTITY = 'rateQuantity';
    const FIELD_RATE_RATIO = 'rateRatio';
    const FIELD_ROUTE = 'route';
    const FIELD_SITE = 'site';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $dose = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body. This attribute will most often NOT be
     * populated. It is most commonly used for injections. For example, Slow Push, Deep
     * IV.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $method = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $rateQuantity = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected $rateRatio = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. For example, topical, intravenous,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $route = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. For example, "left arm".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $site = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage can be used for cases where the dosage administered is too
     * complex to code. When coded dosage is present, the free text dosage may still be
     * present for display to humans. The dosage instructions should reflect the dosage
     * of the medication that was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Validation map for fields in type MedicationAdministration.Dosage
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationAdministrationDosage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationAdministrationDosage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOSE])) {
            if ($data[self::FIELD_DOSE] instanceof FHIRQuantity) {
                $this->setDose($data[self::FIELD_DOSE]);
            } else {
                $this->setDose(new FHIRQuantity($data[self::FIELD_DOSE]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_RATE_QUANTITY])) {
            if ($data[self::FIELD_RATE_QUANTITY] instanceof FHIRQuantity) {
                $this->setRateQuantity($data[self::FIELD_RATE_QUANTITY]);
            } else {
                $this->setRateQuantity(new FHIRQuantity($data[self::FIELD_RATE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_RATE_RATIO])) {
            if ($data[self::FIELD_RATE_RATIO] instanceof FHIRRatio) {
                $this->setRateRatio($data[self::FIELD_RATE_RATIO]);
            } else {
                $this->setRateRatio(new FHIRRatio($data[self::FIELD_RATE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
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
        return "<MedicationAdministrationDosage{$xmlns}></MedicationAdministrationDosage>";
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $dose
     * @return static
     */
    public function setDose(FHIRQuantity $dose = null)
    {
        $this->dose = $dose;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body. This attribute will most often NOT be
     * populated. It is most commonly used for injections. For example, Slow Push, Deep
     * IV.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body. This attribute will most often NOT be
     * populated. It is most commonly used for injections. For example, Slow Push, Deep
     * IV.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $rateQuantity
     * @return static
     */
    public function setRateQuantity(FHIRQuantity $rateQuantity = null)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $rateRatio
     * @return static
     */
    public function setRateRatio(FHIRRatio $rateRatio = null)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. For example, topical, intravenous,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. For example, topical, intravenous,
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. For example, "left arm".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. For example, "left arm".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage can be used for cases where the dosage administered is too
     * complex to code. When coded dosage is present, the free text dosage may still be
     * present for display to humans. The dosage instructions should reflect the dosage
     * of the medication that was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage can be used for cases where the dosage administered is too
     * complex to code. When coded dosage is present, the free text dosage may still be
     * present for display to humans. The dosage instructions should reflect the dosage
     * of the medication that was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
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
        if (null !== ($v = $this->getDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRateQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRateRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DOSE])) {
            $v = $this->getDose();
            foreach($validationRules[self::FIELD_DOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_DOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE])) {
                        $errs[self::FIELD_DOSE] = [];
                    }
                    $errs[self::FIELD_DOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_QUANTITY])) {
            $v = $this->getRateQuantity();
            foreach($validationRules[self::FIELD_RATE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_RATE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_QUANTITY])) {
                        $errs[self::FIELD_RATE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_RATE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_RATIO])) {
            $v = $this->getRateRatio();
            foreach($validationRules[self::FIELD_RATE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_RATE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_RATIO])) {
                        $errs[self::FIELD_RATE_RATIO] = [];
                    }
                    $errs[self::FIELD_RATE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
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
                throw new \DomainException(sprintf('FHIRMedicationAdministrationDosage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationAdministrationDosage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationAdministrationDosage;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationAdministrationDosage)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationAdministrationDosage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage or null, %s seen.',
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
        if (isset($children->dose)) {
            $type->setDose(FHIRQuantity::xmlUnserialize($children->dose));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($children->rateQuantity)) {
            $type->setRateQuantity(FHIRQuantity::xmlUnserialize($children->rateQuantity));
        }
        if (isset($children->rateRatio)) {
            $type->setRateRatio(FHIRRatio::xmlUnserialize($children->rateRatio));
        }
        if (isset($children->route)) {
            $type->setRoute(FHIRCodeableConcept::xmlUnserialize($children->route));
        }
        if (isset($children->site)) {
            $type->setSite(FHIRCodeableConcept::xmlUnserialize($children->site));
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
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
        if (null !== ($v = $this->getDose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRateQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRateRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDose())) {
            $a[self::FIELD_DOSE] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getRateQuantity())) {
            $a[self::FIELD_RATE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getRateRatio())) {
            $a[self::FIELD_RATE_RATIO] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a[self::FIELD_ROUTE] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a[self::FIELD_SITE] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
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