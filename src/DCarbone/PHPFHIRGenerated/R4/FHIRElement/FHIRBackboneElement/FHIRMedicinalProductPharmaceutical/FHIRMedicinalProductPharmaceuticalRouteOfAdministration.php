<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

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
    const FIELD_MAX_SINGLE_DOSE = 'maxSingleDose';
    const FIELD_MAX_DOSE_PER_DAY = 'maxDosePerDay';
    const FIELD_MAX_DOSE_PER_TREATMENT_PERIOD = 'maxDosePerTreatmentPeriod';
    const FIELD_MAX_TREATMENT_PERIOD = 'maxTreatmentPeriod';
    const FIELD_TARGET_SPECIES = 'targetSpecies';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $firstDose = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $maxSingleDose = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $maxDosePerDay = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered as per the
     * protocol referenced in the clinical trial authorisation.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $maxDosePerTreatmentPeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which an Investigational Medicinal Product
     * can be administered as per the protocol referenced in the clinical trial
     * authorisation.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $maxTreatmentPeriod = null;
    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[]
     */
    protected null|array $targetSpecies = [];

    /**
     * Validation map for fields in type MedicinalProductPharmaceutical.RouteOfAdministration
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRMedicinalProductPharmaceuticalRouteOfAdministration Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_FIRST_DOSE, $data)) {
            if ($data[self::FIELD_FIRST_DOSE] instanceof FHIRQuantity) {
                $this->setFirstDose($data[self::FIELD_FIRST_DOSE]);
            } else {
                $this->setFirstDose(new FHIRQuantity($data[self::FIELD_FIRST_DOSE]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_SINGLE_DOSE, $data)) {
            if ($data[self::FIELD_MAX_SINGLE_DOSE] instanceof FHIRQuantity) {
                $this->setMaxSingleDose($data[self::FIELD_MAX_SINGLE_DOSE]);
            } else {
                $this->setMaxSingleDose(new FHIRQuantity($data[self::FIELD_MAX_SINGLE_DOSE]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_DAY, $data)) {
            if ($data[self::FIELD_MAX_DOSE_PER_DAY] instanceof FHIRQuantity) {
                $this->setMaxDosePerDay($data[self::FIELD_MAX_DOSE_PER_DAY]);
            } else {
                $this->setMaxDosePerDay(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_DAY]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, $data)) {
            if ($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] instanceof FHIRRatio) {
                $this->setMaxDosePerTreatmentPeriod($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]);
            } else {
                $this->setMaxDosePerTreatmentPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_TREATMENT_PERIOD, $data)) {
            if ($data[self::FIELD_MAX_TREATMENT_PERIOD] instanceof FHIRDuration) {
                $this->setMaxTreatmentPeriod($data[self::FIELD_MAX_TREATMENT_PERIOD]);
            } else {
                $this->setMaxTreatmentPeriod(new FHIRDuration($data[self::FIELD_MAX_TREATMENT_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_SPECIES, $data)) {
            if (is_array($data[self::FIELD_TARGET_SPECIES])) {
                foreach($data[self::FIELD_TARGET_SPECIES] as $v) {
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                        $this->addTargetSpecies($v);
                    } else {
                        $this->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_SPECIES] instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                $this->addTargetSpecies($data[self::FIELD_TARGET_SPECIES]);
            } else {
                $this->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($data[self::FIELD_TARGET_SPECIES]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
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
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
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
    public function getFirstDose(): null|FHIRQuantity
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
    public function setFirstDose(null|FHIRQuantity $firstDose = null): self
    {
        if (null === $firstDose) {
            $firstDose = new FHIRQuantity();
        }
        $this->_trackValueSet($this->firstDose, $firstDose);
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
     * The maximum single dose that can be administered as per the protocol of a
     * clinical trial can be specified using a numerical value and its unit of
     * measurement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getMaxSingleDose(): null|FHIRQuantity
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
    public function setMaxSingleDose(null|FHIRQuantity $maxSingleDose = null): self
    {
        if (null === $maxSingleDose) {
            $maxSingleDose = new FHIRQuantity();
        }
        $this->_trackValueSet($this->maxSingleDose, $maxSingleDose);
        $this->maxSingleDose = $maxSingleDose;
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
    public function getMaxDosePerDay(): null|FHIRQuantity
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
    public function setMaxDosePerDay(null|FHIRQuantity $maxDosePerDay = null): self
    {
        if (null === $maxDosePerDay) {
            $maxDosePerDay = new FHIRQuantity();
        }
        $this->_trackValueSet($this->maxDosePerDay, $maxDosePerDay);
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
    public function getMaxDosePerTreatmentPeriod(): null|FHIRRatio
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
    public function setMaxDosePerTreatmentPeriod(null|FHIRRatio $maxDosePerTreatmentPeriod = null): self
    {
        if (null === $maxDosePerTreatmentPeriod) {
            $maxDosePerTreatmentPeriod = new FHIRRatio();
        }
        $this->_trackValueSet($this->maxDosePerTreatmentPeriod, $maxDosePerTreatmentPeriod);
        $this->maxDosePerTreatmentPeriod = $maxDosePerTreatmentPeriod;
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
    public function getMaxTreatmentPeriod(): null|FHIRDuration
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
    public function setMaxTreatmentPeriod(null|FHIRDuration $maxTreatmentPeriod = null): self
    {
        if (null === $maxTreatmentPeriod) {
            $maxTreatmentPeriod = new FHIRDuration();
        }
        $this->_trackValueSet($this->maxTreatmentPeriod, $maxTreatmentPeriod);
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
    public function getTargetSpecies(): null|array
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
    public function addTargetSpecies(null|FHIRMedicinalProductPharmaceuticalTargetSpecies $targetSpecies = null): self
    {
        if (null === $targetSpecies) {
            $targetSpecies = new FHIRMedicinalProductPharmaceuticalTargetSpecies();
        }
        $this->_trackValueAdded();
        $this->targetSpecies[] = $targetSpecies;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies ...$targetSpecies
     * @return static
     */
    public function setTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies ...$targetSpecies): self
    {
        if ([] !== $this->targetSpecies) {
            $this->_trackValuesRemoved(count($this->targetSpecies));
            $this->targetSpecies = [];
        }
        if ([] === $targetSpecies) {
            return $this;
        }
        foreach($targetSpecies as $v) {
            $this->addTargetSpecies($v);
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
        if (null !== ($v = $this->getMaxSingleDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_SINGLE_DOSE] = $fieldErrs;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
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
        } else if (!($type instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration)) {
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
            if (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIRST_DOSE === $childName) {
                $type->setFirstDose(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_SINGLE_DOSE === $childName) {
                $type->setMaxSingleDose(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_DAY === $childName) {
                $type->setMaxDosePerDay(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD === $childName) {
                $type->setMaxDosePerTreatmentPeriod(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_TREATMENT_PERIOD === $childName) {
                $type->setMaxTreatmentPeriod(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_SPECIES === $childName) {
                $type->addTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies::xmlUnserialize($n, null, $config));
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MedicinalProductPharmaceuticalRouteOfAdministration', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFirstDose())) {
            $xw->startElement(self::FIELD_FIRST_DOSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $xw->startElement(self::FIELD_MAX_SINGLE_DOSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_DAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $xw->startElement(self::FIELD_MAX_TREATMENT_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTargetSpecies() as $v) {
            $xw->startElement(self::FIELD_TARGET_SPECIES);
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
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getFirstDose())) {
            $out->{self::FIELD_FIRST_DOSE} = $v;
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $out->{self::FIELD_MAX_SINGLE_DOSE} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $out->{self::FIELD_MAX_DOSE_PER_DAY} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $out->{self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD} = $v;
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $out->{self::FIELD_MAX_TREATMENT_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            $out->{self::FIELD_TARGET_SPECIES} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TARGET_SPECIES}[] = $v;
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