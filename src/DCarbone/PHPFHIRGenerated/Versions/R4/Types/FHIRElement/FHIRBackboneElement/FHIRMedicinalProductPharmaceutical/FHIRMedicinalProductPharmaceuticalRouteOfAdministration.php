<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A pharmaceutical product described in terms of its composition and dose form.
 */
class FHIRMedicinalProductPharmaceuticalRouteOfAdministration extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL_DOT_ROUTE_OF_ADMINISTRATION;


    public const FIELD_CODE = 'code';
    public const FIELD_FIRST_DOSE = 'firstDose';
    public const FIELD_MAX_SINGLE_DOSE = 'maxSingleDose';
    public const FIELD_MAX_DOSE_PER_DAY = 'maxDosePerDay';
    public const FIELD_MAX_DOSE_PER_TREATMENT_PERIOD = 'maxDosePerTreatmentPeriod';
    public const FIELD_MAX_TREATMENT_PERIOD = 'maxTreatmentPeriod';
    public const FIELD_TARGET_SPECIES = 'targetSpecies';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $firstDose;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $maxSingleDose;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $maxDosePerDay;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered as per the
     * protocol referenced in the clinical trial authorisation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $maxDosePerTreatmentPeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which an Investigational Medicinal Product
     * can be administered as per the protocol referenced in the clinical trial
     * authorisation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $maxTreatmentPeriod;
    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[] 
     */
    protected array $targetSpecies;

    /** Default validation map for fields in type MedicinalProductPharmaceutical.RouteOfAdministration */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicinalProductPharmaceuticalRouteOfAdministration Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $firstDose
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $maxSingleDose
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $maxDosePerDay
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $maxDosePerTreatmentPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $maxTreatmentPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[] $targetSpecies
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRQuantity $firstDose = null,
                                null|FHIRQuantity $maxSingleDose = null,
                                null|FHIRQuantity $maxDosePerDay = null,
                                null|FHIRRatio $maxDosePerTreatmentPeriod = null,
                                null|FHIRDuration $maxTreatmentPeriod = null,
                                null|iterable $targetSpecies = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $firstDose) {
            $this->setFirstDose($firstDose);
        }
        if (null !== $maxSingleDose) {
            $this->setMaxSingleDose($maxSingleDose);
        }
        if (null !== $maxDosePerDay) {
            $this->setMaxDosePerDay($maxDosePerDay);
        }
        if (null !== $maxDosePerTreatmentPeriod) {
            $this->setMaxDosePerTreatmentPeriod($maxDosePerTreatmentPeriod);
        }
        if (null !== $maxTreatmentPeriod) {
            $this->setMaxTreatmentPeriod($maxTreatmentPeriod);
        }
        if (null !== $targetSpecies) {
            $this->setTargetSpecies(...$targetSpecies);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getFirstDose(): null|FHIRQuantity
    {
        return $this->firstDose ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $firstDose
     * @return static
     */
    public function setFirstDose(null|FHIRQuantity $firstDose): self
    {
        if (null === $firstDose) {
            unset($this->firstDose);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getMaxSingleDose(): null|FHIRQuantity
    {
        return $this->maxSingleDose ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $maxSingleDose
     * @return static
     */
    public function setMaxSingleDose(null|FHIRQuantity $maxSingleDose): self
    {
        if (null === $maxSingleDose) {
            unset($this->maxSingleDose);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerDay(): null|FHIRQuantity
    {
        return $this->maxDosePerDay ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $maxDosePerDay
     * @return static
     */
    public function setMaxDosePerDay(null|FHIRQuantity $maxDosePerDay): self
    {
        if (null === $maxDosePerDay) {
            unset($this->maxDosePerDay);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerTreatmentPeriod(): null|FHIRRatio
    {
        return $this->maxDosePerTreatmentPeriod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $maxDosePerTreatmentPeriod
     * @return static
     */
    public function setMaxDosePerTreatmentPeriod(null|FHIRRatio $maxDosePerTreatmentPeriod): self
    {
        if (null === $maxDosePerTreatmentPeriod) {
            unset($this->maxDosePerTreatmentPeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxTreatmentPeriod(): null|FHIRDuration
    {
        return $this->maxTreatmentPeriod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $maxTreatmentPeriod
     * @return static
     */
    public function setMaxTreatmentPeriod(null|FHIRDuration $maxTreatmentPeriod): self
    {
        if (null === $maxTreatmentPeriod) {
            unset($this->maxTreatmentPeriod);
            return $this;
        }
        $this->maxTreatmentPeriod = $maxTreatmentPeriod;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies[]
     */
    public function getTargetSpecies(): array
    {
        return $this->targetSpecies ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies>
     */
    public function getTargetSpeciesIterator(): iterable
    {
        if (!isset($this->targetSpecies) || [] === $this->targetSpecies) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetSpecies);
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies $targetSpecies
     * @return static
     */
    public function addTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies $targetSpecies): self
    {
        if (!isset($this->targetSpecies)) {
            $this->targetSpecies = [];
        }
        $this->targetSpecies[] = $targetSpecies;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * A species for which this route applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies ...$targetSpecies
     * @return static
     */
    public function setTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies ...$targetSpecies): self
    {
        $this->targetSpecies = $targetSpecies;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIRST_DOSE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_SINGLE_DOSE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DOSE_PER_DAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_TREATMENT_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_SPECIES, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIRST_DOSE === $childName) {
                $v = new FHIRQuantity();
                $type->setFirstDose(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_SINGLE_DOSE === $childName) {
                $v = new FHIRQuantity();
                $type->setMaxSingleDose(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_DOSE_PER_DAY === $childName) {
                $v = new FHIRQuantity();
                $type->setMaxDosePerDay(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD === $childName) {
                $v = new FHIRRatio();
                $type->setMaxDosePerTreatmentPeriod(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_TREATMENT_PERIOD === $childName) {
                $v = new FHIRDuration();
                $type->setMaxTreatmentPeriod(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_SPECIES === $childName) {
                $v = new FHIRMedicinalProductPharmaceuticalTargetSpecies();
                $type->addTargetSpecies(FHIRMedicinalProductPharmaceuticalTargetSpecies::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('MedicinalProductPharmaceuticalRouteOfAdministration', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->firstDose)) {
            $xw->startElement(self::FIELD_FIRST_DOSE);
            $this->firstDose->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxSingleDose)) {
            $xw->startElement(self::FIELD_MAX_SINGLE_DOSE);
            $this->maxSingleDose->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDosePerDay)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_DAY);
            $this->maxDosePerDay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDosePerTreatmentPeriod)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD);
            $this->maxDosePerTreatmentPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxTreatmentPeriod)) {
            $xw->startElement(self::FIELD_MAX_TREATMENT_PERIOD);
            $this->maxTreatmentPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetSpecies)) {
            foreach ($this->targetSpecies as $v) {
                $xw->startElement(self::FIELD_TARGET_SPECIES);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration)) {
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
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_FIRST_DOSE]) || array_key_exists(self::FIELD_FIRST_DOSE, $json)) {
            if ($json[self::FIELD_FIRST_DOSE] instanceof FHIRQuantity) {
                $type->setFirstDose($json[self::FIELD_FIRST_DOSE]);
            } else {
                $type->setFirstDose(new FHIRQuantity($json[self::FIELD_FIRST_DOSE]));
            }
        }
        if (isset($json[self::FIELD_MAX_SINGLE_DOSE]) || array_key_exists(self::FIELD_MAX_SINGLE_DOSE, $json)) {
            if ($json[self::FIELD_MAX_SINGLE_DOSE] instanceof FHIRQuantity) {
                $type->setMaxSingleDose($json[self::FIELD_MAX_SINGLE_DOSE]);
            } else {
                $type->setMaxSingleDose(new FHIRQuantity($json[self::FIELD_MAX_SINGLE_DOSE]));
            }
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_DAY]) || array_key_exists(self::FIELD_MAX_DOSE_PER_DAY, $json)) {
            if ($json[self::FIELD_MAX_DOSE_PER_DAY] instanceof FHIRQuantity) {
                $type->setMaxDosePerDay($json[self::FIELD_MAX_DOSE_PER_DAY]);
            } else {
                $type->setMaxDosePerDay(new FHIRQuantity($json[self::FIELD_MAX_DOSE_PER_DAY]));
            }
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]) || array_key_exists(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, $json)) {
            if ($json[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] instanceof FHIRRatio) {
                $type->setMaxDosePerTreatmentPeriod($json[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]);
            } else {
                $type->setMaxDosePerTreatmentPeriod(new FHIRRatio($json[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_MAX_TREATMENT_PERIOD]) || array_key_exists(self::FIELD_MAX_TREATMENT_PERIOD, $json)) {
            if ($json[self::FIELD_MAX_TREATMENT_PERIOD] instanceof FHIRDuration) {
                $type->setMaxTreatmentPeriod($json[self::FIELD_MAX_TREATMENT_PERIOD]);
            } else {
                $type->setMaxTreatmentPeriod(new FHIRDuration($json[self::FIELD_MAX_TREATMENT_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_TARGET_SPECIES]) || array_key_exists(self::FIELD_TARGET_SPECIES, $json)) {
            if (is_array($json[self::FIELD_TARGET_SPECIES])) {
                foreach($json[self::FIELD_TARGET_SPECIES] as $v) {
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                        $type->addTargetSpecies($v);
                    } else {
                        $type->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($v));
                    }
                }
            } elseif ($json[self::FIELD_TARGET_SPECIES] instanceof FHIRMedicinalProductPharmaceuticalTargetSpecies) {
                $type->addTargetSpecies($json[self::FIELD_TARGET_SPECIES]);
            } else {
                $type->addTargetSpecies(new FHIRMedicinalProductPharmaceuticalTargetSpecies($json[self::FIELD_TARGET_SPECIES]));
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
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->firstDose)) {
            $out->firstDose = $this->firstDose;
        }
        if (isset($this->maxSingleDose)) {
            $out->maxSingleDose = $this->maxSingleDose;
        }
        if (isset($this->maxDosePerDay)) {
            $out->maxDosePerDay = $this->maxDosePerDay;
        }
        if (isset($this->maxDosePerTreatmentPeriod)) {
            $out->maxDosePerTreatmentPeriod = $this->maxDosePerTreatmentPeriod;
        }
        if (isset($this->maxTreatmentPeriod)) {
            $out->maxTreatmentPeriod = $this->maxTreatmentPeriod;
        }
        if (isset($this->targetSpecies) && [] !== $this->targetSpecies) {
            $out->targetSpecies = $this->targetSpecies;
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