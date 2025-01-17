<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIREncounter;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 */
class FHIREncounterHospitalization extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;


    public const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_ADMIT_SOURCE = 'admitSource';
    public const FIELD_ADMITTING_DIAGNOSIS = 'admittingDiagnosis';
    public const FIELD_RE_ADMISSION = 'reAdmission';
    public const FIELD_DIET_PREFERENCE = 'dietPreference';
    public const FIELD_SPECIAL_COURTESY = 'specialCourtesy';
    public const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';
    public const FIELD_DISCHARGE_DIAGNOSIS = 'dischargeDiagnosis';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $preAdmissionIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $origin;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $admitSource;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $admittingDiagnosis;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reAdmission;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $dietPreference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $specialCourtesy;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $specialArrangement;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $destination;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $dischargeDisposition;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $dischargeDiagnosis;

    /** Default validation map for fields in type Encounter.Hospitalization */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIREncounterHospitalization Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $origin
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $admitSource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $admittingDiagnosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reAdmission
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $dietPreference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $specialCourtesy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $specialArrangement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $destination
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $dischargeDiagnosis
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $preAdmissionIdentifier = null,
                                null|FHIRReference $origin = null,
                                null|FHIRCodeableConcept $admitSource = null,
                                null|iterable $admittingDiagnosis = null,
                                null|FHIRCodeableConcept $reAdmission = null,
                                null|iterable $dietPreference = null,
                                null|iterable $specialCourtesy = null,
                                null|iterable $specialArrangement = null,
                                null|FHIRReference $destination = null,
                                null|FHIRCodeableConcept $dischargeDisposition = null,
                                null|iterable $dischargeDiagnosis = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $preAdmissionIdentifier) {
            $this->setPreAdmissionIdentifier($preAdmissionIdentifier);
        }
        if (null !== $origin) {
            $this->setOrigin($origin);
        }
        if (null !== $admitSource) {
            $this->setAdmitSource($admitSource);
        }
        if (null !== $admittingDiagnosis) {
            $this->setAdmittingDiagnosis(...$admittingDiagnosis);
        }
        if (null !== $reAdmission) {
            $this->setReAdmission($reAdmission);
        }
        if (null !== $dietPreference) {
            $this->setDietPreference(...$dietPreference);
        }
        if (null !== $specialCourtesy) {
            $this->setSpecialCourtesy(...$specialCourtesy);
        }
        if (null !== $specialArrangement) {
            $this->setSpecialArrangement(...$specialArrangement);
        }
        if (null !== $destination) {
            $this->setDestination($destination);
        }
        if (null !== $dischargeDisposition) {
            $this->setDischargeDisposition($dischargeDisposition);
        }
        if (null !== $dischargeDiagnosis) {
            $this->setDischargeDiagnosis(...$dischargeDiagnosis);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier(): null|FHIRIdentifier
    {
        return $this->preAdmissionIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return static
     */
    public function setPreAdmissionIdentifier(null|FHIRIdentifier $preAdmissionIdentifier): self
    {
        if (null === $preAdmissionIdentifier) {
            unset($this->preAdmissionIdentifier);
            return $this;
        }
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getOrigin(): null|FHIRReference
    {
        return $this->origin ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $origin
     * @return static
     */
    public function setOrigin(null|FHIRReference $origin): self
    {
        if (null === $origin) {
            unset($this->origin);
            return $this;
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource(): null|FHIRCodeableConcept
    {
        return $this->admitSource ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $admitSource
     * @return static
     */
    public function setAdmitSource(null|FHIRCodeableConcept $admitSource): self
    {
        if (null === $admitSource) {
            unset($this->admitSource);
            return $this;
        }
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getAdmittingDiagnosis(): array
    {
        return $this->admittingDiagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getAdmittingDiagnosisIterator(): iterable
    {
        if (!isset($this->admittingDiagnosis) || [] === $this->admittingDiagnosis) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->admittingDiagnosis);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $admittingDiagnosis
     * @return static
     */
    public function addAdmittingDiagnosis(FHIRReference $admittingDiagnosis): self
    {
        if (!isset($this->admittingDiagnosis)) {
            $this->admittingDiagnosis = [];
        }
        $this->admittingDiagnosis[] = $admittingDiagnosis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$admittingDiagnosis
     * @return static
     */
    public function setAdmittingDiagnosis(FHIRReference ...$admittingDiagnosis): self
    {
        $this->admittingDiagnosis = $admittingDiagnosis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission(): null|FHIRCodeableConcept
    {
        return $this->reAdmission ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reAdmission
     * @return static
     */
    public function setReAdmission(null|FHIRCodeableConcept $reAdmission): self
    {
        if (null === $reAdmission) {
            unset($this->reAdmission);
            return $this;
        }
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDietPreference(): array
    {
        return $this->dietPreference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getDietPreferenceIterator(): iterable
    {
        if (!isset($this->dietPreference) || [] === $this->dietPreference) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dietPreference);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $dietPreference
     * @return static
     */
    public function addDietPreference(FHIRCodeableConcept $dietPreference): self
    {
        if (!isset($this->dietPreference)) {
            $this->dietPreference = [];
        }
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$dietPreference
     * @return static
     */
    public function setDietPreference(FHIRCodeableConcept ...$dietPreference): self
    {
        $this->dietPreference = $dietPreference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy(): array
    {
        return $this->specialCourtesy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialCourtesyIterator(): iterable
    {
        if (!isset($this->specialCourtesy) || [] === $this->specialCourtesy) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specialCourtesy);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return static
     */
    public function addSpecialCourtesy(FHIRCodeableConcept $specialCourtesy): self
    {
        if (!isset($this->specialCourtesy)) {
            $this->specialCourtesy = [];
        }
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$specialCourtesy
     * @return static
     */
    public function setSpecialCourtesy(FHIRCodeableConcept ...$specialCourtesy): self
    {
        $this->specialCourtesy = $specialCourtesy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement(): array
    {
        return $this->specialArrangement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialArrangementIterator(): iterable
    {
        if (!isset($this->specialArrangement) || [] === $this->specialArrangement) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specialArrangement);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return static
     */
    public function addSpecialArrangement(FHIRCodeableConcept $specialArrangement): self
    {
        if (!isset($this->specialArrangement)) {
            $this->specialArrangement = [];
        }
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$specialArrangement
     * @return static
     */
    public function setSpecialArrangement(FHIRCodeableConcept ...$specialArrangement): self
    {
        $this->specialArrangement = $specialArrangement;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getDestination(): null|FHIRReference
    {
        return $this->destination ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $destination
     * @return static
     */
    public function setDestination(null|FHIRReference $destination): self
    {
        if (null === $destination) {
            unset($this->destination);
            return $this;
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition(): null|FHIRCodeableConcept
    {
        return $this->dischargeDisposition ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return static
     */
    public function setDischargeDisposition(null|FHIRCodeableConcept $dischargeDisposition): self
    {
        if (null === $dischargeDisposition) {
            unset($this->dischargeDisposition);
            return $this;
        }
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getDischargeDiagnosis(): array
    {
        return $this->dischargeDiagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getDischargeDiagnosisIterator(): iterable
    {
        if (!isset($this->dischargeDiagnosis) || [] === $this->dischargeDiagnosis) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dischargeDiagnosis);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $dischargeDiagnosis
     * @return static
     */
    public function addDischargeDiagnosis(FHIRReference $dischargeDiagnosis): self
    {
        if (!isset($this->dischargeDiagnosis)) {
            $this->dischargeDiagnosis = [];
        }
        $this->dischargeDiagnosis[] = $dischargeDiagnosis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$dischargeDiagnosis
     * @return static
     */
    public function setDischargeDiagnosis(FHIRReference ...$dischargeDiagnosis): self
    {
        $this->dischargeDiagnosis = $dischargeDiagnosis;
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
        if (isset($validationRules[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
            $v = $this->getPreAdmissionIdentifier();
            foreach($validationRules[self::FIELD_PRE_ADMISSION_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRE_ADMISSION_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
                        $errs[self::FIELD_PRE_ADMISSION_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PRE_ADMISSION_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMIT_SOURCE])) {
            $v = $this->getAdmitSource();
            foreach($validationRules[self::FIELD_ADMIT_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMIT_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMIT_SOURCE])) {
                        $errs[self::FIELD_ADMIT_SOURCE] = [];
                    }
                    $errs[self::FIELD_ADMIT_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMITTING_DIAGNOSIS])) {
            $v = $this->getAdmittingDiagnosis();
            foreach($validationRules[self::FIELD_ADMITTING_DIAGNOSIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMITTING_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMITTING_DIAGNOSIS])) {
                        $errs[self::FIELD_ADMITTING_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_ADMITTING_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RE_ADMISSION])) {
            $v = $this->getReAdmission();
            foreach($validationRules[self::FIELD_RE_ADMISSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RE_ADMISSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RE_ADMISSION])) {
                        $errs[self::FIELD_RE_ADMISSION] = [];
                    }
                    $errs[self::FIELD_RE_ADMISSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIET_PREFERENCE])) {
            $v = $this->getDietPreference();
            foreach($validationRules[self::FIELD_DIET_PREFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIET_PREFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIET_PREFERENCE])) {
                        $errs[self::FIELD_DIET_PREFERENCE] = [];
                    }
                    $errs[self::FIELD_DIET_PREFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_COURTESY])) {
            $v = $this->getSpecialCourtesy();
            foreach($validationRules[self::FIELD_SPECIAL_COURTESY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIAL_COURTESY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_COURTESY])) {
                        $errs[self::FIELD_SPECIAL_COURTESY] = [];
                    }
                    $errs[self::FIELD_SPECIAL_COURTESY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_ARRANGEMENT])) {
            $v = $this->getSpecialArrangement();
            foreach($validationRules[self::FIELD_SPECIAL_ARRANGEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIAL_ARRANGEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_ARRANGEMENT])) {
                        $errs[self::FIELD_SPECIAL_ARRANGEMENT] = [];
                    }
                    $errs[self::FIELD_SPECIAL_ARRANGEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISCHARGE_DISPOSITION])) {
            $v = $this->getDischargeDisposition();
            foreach($validationRules[self::FIELD_DISCHARGE_DISPOSITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISCHARGE_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCHARGE_DISPOSITION])) {
                        $errs[self::FIELD_DISCHARGE_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISCHARGE_DISPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISCHARGE_DIAGNOSIS])) {
            $v = $this->getDischargeDiagnosis();
            foreach($validationRules[self::FIELD_DISCHARGE_DIAGNOSIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISCHARGE_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCHARGE_DIAGNOSIS])) {
                        $errs[self::FIELD_DISCHARGE_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_DISCHARGE_DIAGNOSIS][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREncounterHospitalization)) {
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
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRE_ADMISSION_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORIGIN === $childName) {
                $v = new FHIRReference();
                $type->setOrigin(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADMIT_SOURCE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADMITTING_DIAGNOSIS === $childName) {
                $v = new FHIRReference();
                $type->addAdmittingDiagnosis(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RE_ADMISSION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReAdmission(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIET_PREFERENCE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addDietPreference(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SPECIAL_COURTESY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addSpecialCourtesy(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SPECIAL_ARRANGEMENT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addSpecialArrangement(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESTINATION === $childName) {
                $v = new FHIRReference();
                $type->setDestination(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISCHARGE_DISPOSITION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISCHARGE_DIAGNOSIS === $childName) {
                $v = new FHIRReference();
                $type->addDischargeDiagnosis(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
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
            $xw->openRootNode('EncounterHospitalization', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->preAdmissionIdentifier)) {
            $xw->startElement(self::FIELD_PRE_ADMISSION_IDENTIFIER);
            $this->preAdmissionIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->origin)) {
            $xw->startElement(self::FIELD_ORIGIN);
            $this->origin->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->admitSource)) {
            $xw->startElement(self::FIELD_ADMIT_SOURCE);
            $this->admitSource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->admittingDiagnosis)) {
            foreach ($this->admittingDiagnosis as $v) {
                $xw->startElement(self::FIELD_ADMITTING_DIAGNOSIS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reAdmission)) {
            $xw->startElement(self::FIELD_RE_ADMISSION);
            $this->reAdmission->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dietPreference)) {
            foreach ($this->dietPreference as $v) {
                $xw->startElement(self::FIELD_DIET_PREFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->specialCourtesy)) {
            foreach ($this->specialCourtesy as $v) {
                $xw->startElement(self::FIELD_SPECIAL_COURTESY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->specialArrangement)) {
            foreach ($this->specialArrangement as $v) {
                $xw->startElement(self::FIELD_SPECIAL_ARRANGEMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->destination)) {
            $xw->startElement(self::FIELD_DESTINATION);
            $this->destination->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dischargeDisposition)) {
            $xw->startElement(self::FIELD_DISCHARGE_DISPOSITION);
            $this->dischargeDisposition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dischargeDiagnosis)) {
            foreach ($this->dischargeDiagnosis as $v) {
                $xw->startElement(self::FIELD_DISCHARGE_DIAGNOSIS);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREncounterHospitalization)) {
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
        if (isset($json[self::FIELD_PRE_ADMISSION_IDENTIFIER]) || array_key_exists(self::FIELD_PRE_ADMISSION_IDENTIFIER, $json)) {
            if ($json[self::FIELD_PRE_ADMISSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setPreAdmissionIdentifier($json[self::FIELD_PRE_ADMISSION_IDENTIFIER]);
            } else {
                $type->setPreAdmissionIdentifier(new FHIRIdentifier($json[self::FIELD_PRE_ADMISSION_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_ORIGIN]) || array_key_exists(self::FIELD_ORIGIN, $json)) {
            if ($json[self::FIELD_ORIGIN] instanceof FHIRReference) {
                $type->setOrigin($json[self::FIELD_ORIGIN]);
            } else {
                $type->setOrigin(new FHIRReference($json[self::FIELD_ORIGIN]));
            }
        }
        if (isset($json[self::FIELD_ADMIT_SOURCE]) || array_key_exists(self::FIELD_ADMIT_SOURCE, $json)) {
            if ($json[self::FIELD_ADMIT_SOURCE] instanceof FHIRCodeableConcept) {
                $type->setAdmitSource($json[self::FIELD_ADMIT_SOURCE]);
            } else {
                $type->setAdmitSource(new FHIRCodeableConcept($json[self::FIELD_ADMIT_SOURCE]));
            }
        }
        if (isset($json[self::FIELD_ADMITTING_DIAGNOSIS]) || array_key_exists(self::FIELD_ADMITTING_DIAGNOSIS, $json)) {
            if (is_array($json[self::FIELD_ADMITTING_DIAGNOSIS])) {
                foreach($json[self::FIELD_ADMITTING_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addAdmittingDiagnosis($v);
                    } else {
                        $type->addAdmittingDiagnosis(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_ADMITTING_DIAGNOSIS] instanceof FHIRReference) {
                $type->addAdmittingDiagnosis($json[self::FIELD_ADMITTING_DIAGNOSIS]);
            } else {
                $type->addAdmittingDiagnosis(new FHIRReference($json[self::FIELD_ADMITTING_DIAGNOSIS]));
            }
        }
        if (isset($json[self::FIELD_RE_ADMISSION]) || array_key_exists(self::FIELD_RE_ADMISSION, $json)) {
            if ($json[self::FIELD_RE_ADMISSION] instanceof FHIRCodeableConcept) {
                $type->setReAdmission($json[self::FIELD_RE_ADMISSION]);
            } else {
                $type->setReAdmission(new FHIRCodeableConcept($json[self::FIELD_RE_ADMISSION]));
            }
        }
        if (isset($json[self::FIELD_DIET_PREFERENCE]) || array_key_exists(self::FIELD_DIET_PREFERENCE, $json)) {
            if (is_array($json[self::FIELD_DIET_PREFERENCE])) {
                foreach($json[self::FIELD_DIET_PREFERENCE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addDietPreference($v);
                    } else {
                        $type->addDietPreference(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_DIET_PREFERENCE] instanceof FHIRCodeableConcept) {
                $type->addDietPreference($json[self::FIELD_DIET_PREFERENCE]);
            } else {
                $type->addDietPreference(new FHIRCodeableConcept($json[self::FIELD_DIET_PREFERENCE]));
            }
        }
        if (isset($json[self::FIELD_SPECIAL_COURTESY]) || array_key_exists(self::FIELD_SPECIAL_COURTESY, $json)) {
            if (is_array($json[self::FIELD_SPECIAL_COURTESY])) {
                foreach($json[self::FIELD_SPECIAL_COURTESY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addSpecialCourtesy($v);
                    } else {
                        $type->addSpecialCourtesy(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SPECIAL_COURTESY] instanceof FHIRCodeableConcept) {
                $type->addSpecialCourtesy($json[self::FIELD_SPECIAL_COURTESY]);
            } else {
                $type->addSpecialCourtesy(new FHIRCodeableConcept($json[self::FIELD_SPECIAL_COURTESY]));
            }
        }
        if (isset($json[self::FIELD_SPECIAL_ARRANGEMENT]) || array_key_exists(self::FIELD_SPECIAL_ARRANGEMENT, $json)) {
            if (is_array($json[self::FIELD_SPECIAL_ARRANGEMENT])) {
                foreach($json[self::FIELD_SPECIAL_ARRANGEMENT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addSpecialArrangement($v);
                    } else {
                        $type->addSpecialArrangement(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SPECIAL_ARRANGEMENT] instanceof FHIRCodeableConcept) {
                $type->addSpecialArrangement($json[self::FIELD_SPECIAL_ARRANGEMENT]);
            } else {
                $type->addSpecialArrangement(new FHIRCodeableConcept($json[self::FIELD_SPECIAL_ARRANGEMENT]));
            }
        }
        if (isset($json[self::FIELD_DESTINATION]) || array_key_exists(self::FIELD_DESTINATION, $json)) {
            if ($json[self::FIELD_DESTINATION] instanceof FHIRReference) {
                $type->setDestination($json[self::FIELD_DESTINATION]);
            } else {
                $type->setDestination(new FHIRReference($json[self::FIELD_DESTINATION]));
            }
        }
        if (isset($json[self::FIELD_DISCHARGE_DISPOSITION]) || array_key_exists(self::FIELD_DISCHARGE_DISPOSITION, $json)) {
            if ($json[self::FIELD_DISCHARGE_DISPOSITION] instanceof FHIRCodeableConcept) {
                $type->setDischargeDisposition($json[self::FIELD_DISCHARGE_DISPOSITION]);
            } else {
                $type->setDischargeDisposition(new FHIRCodeableConcept($json[self::FIELD_DISCHARGE_DISPOSITION]));
            }
        }
        if (isset($json[self::FIELD_DISCHARGE_DIAGNOSIS]) || array_key_exists(self::FIELD_DISCHARGE_DIAGNOSIS, $json)) {
            if (is_array($json[self::FIELD_DISCHARGE_DIAGNOSIS])) {
                foreach($json[self::FIELD_DISCHARGE_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addDischargeDiagnosis($v);
                    } else {
                        $type->addDischargeDiagnosis(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_DISCHARGE_DIAGNOSIS] instanceof FHIRReference) {
                $type->addDischargeDiagnosis($json[self::FIELD_DISCHARGE_DIAGNOSIS]);
            } else {
                $type->addDischargeDiagnosis(new FHIRReference($json[self::FIELD_DISCHARGE_DIAGNOSIS]));
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
        if (isset($this->preAdmissionIdentifier)) {
            $out->preAdmissionIdentifier = $this->preAdmissionIdentifier;
        }
        if (isset($this->origin)) {
            $out->origin = $this->origin;
        }
        if (isset($this->admitSource)) {
            $out->admitSource = $this->admitSource;
        }
        if (isset($this->admittingDiagnosis) && [] !== $this->admittingDiagnosis) {
            $out->admittingDiagnosis = $this->admittingDiagnosis;
        }
        if (isset($this->reAdmission)) {
            $out->reAdmission = $this->reAdmission;
        }
        if (isset($this->dietPreference) && [] !== $this->dietPreference) {
            $out->dietPreference = $this->dietPreference;
        }
        if (isset($this->specialCourtesy) && [] !== $this->specialCourtesy) {
            $out->specialCourtesy = $this->specialCourtesy;
        }
        if (isset($this->specialArrangement) && [] !== $this->specialArrangement) {
            $out->specialArrangement = $this->specialArrangement;
        }
        if (isset($this->destination)) {
            $out->destination = $this->destination;
        }
        if (isset($this->dischargeDisposition)) {
            $out->dischargeDisposition = $this->dischargeDisposition;
        }
        if (isset($this->dischargeDiagnosis) && [] !== $this->dischargeDiagnosis) {
            $out->dischargeDiagnosis = $this->dischargeDiagnosis;
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