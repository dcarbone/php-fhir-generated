<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A pharmaceutical product described in terms of its composition and dose form.
 *
 * Class FHIRMedicinalProductPharmaceuticalRouteOfAdministration
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical
 */
class FHIRMedicinalProductPharmaceuticalRouteOfAdministration extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION;
    const FIELD_CODE = 'code';
    const FIELD_FIRST_DOSE = 'firstDose';
    const FIELD_MAX_DOSE_PER_DAY = 'maxDosePerDay';
    const FIELD_MAX_DOSE_PER_TREATMENT_PERIOD = 'maxDosePerTreatmentPeriod';
    const FIELD_MAX_SINGLE_DOSE = 'maxSingleDose';
    const FIELD_MAX_TREATMENT_PERIOD = 'maxTreatmentPeriod';
    const FIELD_TARGET_SPECIES = 'targetSpecies';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered in humans can be specified, for a
     * product under investigation, using a numerical value and its unit of
     * measurement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $firstDose = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered as per the protocol referenced in the
     * clinical trial authorisation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $maxDosePerDay = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered as per the
     * protocol referenced in the clinical trial authorisation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $maxDosePerTreatmentPeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered as per the protocol of a
     * clinical trial can be specified using a numerical value and its unit of
     * measurement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $maxSingleDose = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which an Investigational Medicinal Product
     * can be administered as per the protocol referenced in the clinical trial
     * authorisation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $maxTreatmentPeriod = null;

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[]
     */
    protected $targetSpecies = [];

    /**
     * Validation map for fields in type MedicinalProductPharmaceutical.RouteOfAdministration
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicinalProductPharmaceuticalRouteOfAdministration Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductPharmaceuticalRouteOfAdministration::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_FIRST_DOSE])) {
            if ($data[self::FIELD_FIRST_DOSE] instanceof FHIRQuantity) {
                $this->setFirstDose($data[self::FIELD_FIRST_DOSE]);
            } else {
                $this->setFirstDose(new FHIRQuantity($data[self::FIELD_FIRST_DOSE]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_DAY])) {
            if ($data[self::FIELD_MAX_DOSE_PER_DAY] instanceof FHIRQuantity) {
                $this->setMaxDosePerDay($data[self::FIELD_MAX_DOSE_PER_DAY]);
            } else {
                $this->setMaxDosePerDay(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_DAY]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
            if ($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] instanceof FHIRRatio) {
                $this->setMaxDosePerTreatmentPeriod($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]);
            } else {
                $this->setMaxDosePerTreatmentPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_MAX_SINGLE_DOSE])) {
            if ($data[self::FIELD_MAX_SINGLE_DOSE] instanceof FHIRQuantity) {
                $this->setMaxSingleDose($data[self::FIELD_MAX_SINGLE_DOSE]);
            } else {
                $this->setMaxSingleDose(new FHIRQuantity($data[self::FIELD_MAX_SINGLE_DOSE]));
            }
        }
        if (isset($data[self::FIELD_MAX_TREATMENT_PERIOD])) {
            if ($data[self::FIELD_MAX_TREATMENT_PERIOD] instanceof FHIRDuration) {
                $this->setMaxTreatmentPeriod($data[self::FIELD_MAX_TREATMENT_PERIOD]);
            } else {
                $this->setMaxTreatmentPeriod(new FHIRDuration($data[self::FIELD_MAX_TREATMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TARGET_SPECIES])) {
            if (is_array($data[self::FIELD_TARGET_SPECIES])) {
                foreach($data[self::FIELD_TARGET_SPECIES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                        $this->addTargetSpecies($v);
                    } else {
                        $this->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET_SPECIES] instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                $this->addTargetSpecies($data[self::FIELD_TARGET_SPECIES]);
            } else {
                $this->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($data[self::FIELD_TARGET_SPECIES]));
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
        return "<MedicinalProductPharmaceuticalRouteOfAdministration{$xmlns}></MedicinalProductPharmaceuticalRouteOfAdministration>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered in humans can be specified, for a
     * product under investigation, using a numerical value and its unit of
     * measurement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getFirstDose()
    {
        return $this->firstDose;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered in humans can be specified, for a
     * product under investigation, using a numerical value and its unit of
     * measurement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $firstDose
     * @return static
     */
    public function setFirstDose(FHIRQuantity $firstDose = null)
    {
        $this->firstDose = $firstDose;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered as per the protocol referenced in the
     * clinical trial authorisation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerDay()
    {
        return $this->maxDosePerDay;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered as per the protocol referenced in the
     * clinical trial authorisation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $maxDosePerDay
     * @return static
     */
    public function setMaxDosePerDay(FHIRQuantity $maxDosePerDay = null)
    {
        $this->maxDosePerDay = $maxDosePerDay;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered as per the
     * protocol referenced in the clinical trial authorisation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerTreatmentPeriod()
    {
        return $this->maxDosePerTreatmentPeriod;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered as per the
     * protocol referenced in the clinical trial authorisation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $maxDosePerTreatmentPeriod
     * @return static
     */
    public function setMaxDosePerTreatmentPeriod(FHIRRatio $maxDosePerTreatmentPeriod = null)
    {
        $this->maxDosePerTreatmentPeriod = $maxDosePerTreatmentPeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered as per the protocol of a
     * clinical trial can be specified using a numerical value and its unit of
     * measurement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getMaxSingleDose()
    {
        return $this->maxSingleDose;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered as per the protocol of a
     * clinical trial can be specified using a numerical value and its unit of
     * measurement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $maxSingleDose
     * @return static
     */
    public function setMaxSingleDose(FHIRQuantity $maxSingleDose = null)
    {
        $this->maxSingleDose = $maxSingleDose;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which an Investigational Medicinal Product
     * can be administered as per the protocol referenced in the clinical trial
     * authorisation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxTreatmentPeriod()
    {
        return $this->maxTreatmentPeriod;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which an Investigational Medicinal Product
     * can be administered as per the protocol referenced in the clinical trial
     * authorisation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $maxTreatmentPeriod
     * @return static
     */
    public function setMaxTreatmentPeriod(FHIRDuration $maxTreatmentPeriod = null)
    {
        $this->maxTreatmentPeriod = $maxTreatmentPeriod;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[]
     */
    public function getTargetSpecies()
    {
        return $this->targetSpecies;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies $targetSpecies
     * @return static
     */
    public function addTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies $targetSpecies = null)
    {
        $this->targetSpecies[] = $targetSpecies;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[] $targetSpecies
     * @return static
     */
    public function setTargetSpecies(array $targetSpecies = [])
    {
        $this->targetSpecies = [];
        if ([] === $targetSpecies) {
            return $this;
        }
        foreach($targetSpecies as $v) {
            if ($v instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                $this->addTargetSpecies($v);
            } else {
                $this->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($v));
            }
        }
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFirstDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIRST_DOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_DAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_SINGLE_DOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_TREATMENT_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_SPECIES, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST_DOSE])) {
            $v = $this->getFirstDose();
            foreach($validationRules[self::FIELD_FIRST_DOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_FIRST_DOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST_DOSE])) {
                        $errs[self::FIELD_FIRST_DOSE] = [];
                    }
                    $errs[self::FIELD_FIRST_DOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_DAY])) {
            $v = $this->getMaxDosePerDay();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_DOSE_PER_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_DAY])) {
                        $errs[self::FIELD_MAX_DOSE_PER_DAY] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
            $v = $this->getMaxDosePerTreatmentPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_SINGLE_DOSE])) {
            $v = $this->getMaxSingleDose();
            foreach($validationRules[self::FIELD_MAX_SINGLE_DOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_SINGLE_DOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_SINGLE_DOSE])) {
                        $errs[self::FIELD_MAX_SINGLE_DOSE] = [];
                    }
                    $errs[self::FIELD_MAX_SINGLE_DOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_TREATMENT_PERIOD])) {
            $v = $this->getMaxTreatmentPeriod();
            foreach($validationRules[self::FIELD_MAX_TREATMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_TREATMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_TREATMENT_PERIOD])) {
                        $errs[self::FIELD_MAX_TREATMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_TREATMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_SPECIES])) {
            $v = $this->getTargetSpecies();
            foreach($validationRules[self::FIELD_TARGET_SPECIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_TARGET_SPECIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_SPECIES])) {
                        $errs[self::FIELD_TARGET_SPECIES] = [];
                    }
                    $errs[self::FIELD_TARGET_SPECIES][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
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
                throw new \DomainException(sprintf('FHIRMedicinalProductPharmaceuticalRouteOfAdministration::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductPharmaceuticalRouteOfAdministration::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductPharmaceuticalRouteOfAdministration;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductPharmaceuticalRouteOfAdministration::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration or null, %s seen.',
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
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->firstDose)) {
            $type->setFirstDose(FHIRQuantity::xmlUnserialize($children->firstDose));
        }
        if (isset($children->maxDosePerDay)) {
            $type->setMaxDosePerDay(FHIRQuantity::xmlUnserialize($children->maxDosePerDay));
        }
        if (isset($children->maxDosePerTreatmentPeriod)) {
            $type->setMaxDosePerTreatmentPeriod(FHIRRatio::xmlUnserialize($children->maxDosePerTreatmentPeriod));
        }
        if (isset($children->maxSingleDose)) {
            $type->setMaxSingleDose(FHIRQuantity::xmlUnserialize($children->maxSingleDose));
        }
        if (isset($children->maxTreatmentPeriod)) {
            $type->setMaxTreatmentPeriod(FHIRDuration::xmlUnserialize($children->maxTreatmentPeriod));
        }
        if (isset($children->targetSpecies)) {
            foreach($children->targetSpecies as $child) {
                $type->addTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies::xmlUnserialize($child));
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFirstDose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIRST_DOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_DAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_SINGLE_DOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_TREATMENT_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_SPECIES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getFirstDose())) {
            $a[self::FIELD_FIRST_DOSE] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $a[self::FIELD_MAX_DOSE_PER_DAY] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $a[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] = $v;
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $a[self::FIELD_MAX_SINGLE_DOSE] = $v;
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $a[self::FIELD_MAX_TREATMENT_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            $a[self::FIELD_TARGET_SPECIES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET_SPECIES][] = $v;
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