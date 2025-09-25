<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIREncounterHospitalization extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;

    /* class_default.php:56 */
    public const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_ADMIT_SOURCE = 'admitSource';
    public const FIELD_PERIOD = 'period';
    public const FIELD_ACCOMODATION = 'accomodation';
    public const FIELD_DIET = 'diet';
    public const FIELD_SPECIAL_COURTESY = 'specialCourtesy';
    public const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';
    public const FIELD_DISCHARGE_DIAGNOSIS = 'dischargeDiagnosis';
    public const FIELD_RE_ADMISSION = 'reAdmission';
    public const FIELD_RE_ADMISSION_EXT = '_reAdmission';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_RE_ADMISSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    #[FHIRIdentifier]
    protected FHIRIdentifier $preAdmissionIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $origin;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $admitSource;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $period;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation> 
     */
    #[FHIREncounterAccomodation]
    protected array $accomodation;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $diet;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $specialCourtesy;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $specialArrangement;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $destination;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $dischargeDisposition;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $dischargeDiagnosis;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $reAdmission;

    /* constructor.php:61 */
    /**
     * FHIREncounterHospitalization Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $origin
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $admitSource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $period
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation> $accomodation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $diet
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> $specialCourtesy
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> $specialArrangement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $destination
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $dischargeDiagnosis
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $reAdmission
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $preAdmissionIdentifier = null,
                                null|FHIRResourceReference $origin = null,
                                null|FHIRCodeableConcept $admitSource = null,
                                null|FHIRPeriod $period = null,
                                null|iterable $accomodation = null,
                                null|FHIRCodeableConcept $diet = null,
                                null|iterable $specialCourtesy = null,
                                null|iterable $specialArrangement = null,
                                null|FHIRResourceReference $destination = null,
                                null|FHIRCodeableConcept $dischargeDisposition = null,
                                null|FHIRResourceReference $dischargeDiagnosis = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reAdmission = null,
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
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $accomodation) {
            $this->setAccomodation(...$accomodation);
        }
        if (null !== $diet) {
            $this->setDiet($diet);
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
            $this->setDischargeDiagnosis($dischargeDiagnosis);
        }
        if (null !== $reAdmission) {
            $this->setReAdmission($reAdmission);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getOrigin(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $origin
     * @return static
     */
    public function setOrigin(null|FHIRResourceReference $origin): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $admitSource
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation>
     */
    public function getAccomodation(): array
    {
        return $this->accomodation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation>
     */
    public function getAccomodationIterator(): iterable
    {
        if (!isset($this->accomodation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->accomodation);
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation $accomodation
     * @return static
     */
    public function addAccomodation(FHIREncounterAccomodation $accomodation): self
    {
        if (!isset($this->accomodation)) {
            $this->accomodation = [];
        }
        $this->accomodation[] = $accomodation;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation ...$accomodation
     * @return static
     */
    public function setAccomodation(FHIREncounterAccomodation ...$accomodation): self
    {
        if ([] === $accomodation) {
            unset($this->accomodation);
            return $this;
        }
        $this->accomodation = $accomodation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDiet(): null|FHIRCodeableConcept
    {
        return $this->diet ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $diet
     * @return static
     */
    public function setDiet(null|FHIRCodeableConcept $diet): self
    {
        if (null === $diet) {
            unset($this->diet);
            return $this;
        }
        $this->diet = $diet;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialCourtesy(): array
    {
        return $this->specialCourtesy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialCourtesyIterator(): iterable
    {
        if (!isset($this->specialCourtesy)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $specialCourtesy
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept ...$specialCourtesy
     * @return static
     */
    public function setSpecialCourtesy(FHIRCodeableConcept ...$specialCourtesy): self
    {
        if ([] === $specialCourtesy) {
            unset($this->specialCourtesy);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialArrangement(): array
    {
        return $this->specialArrangement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSpecialArrangementIterator(): iterable
    {
        if (!isset($this->specialArrangement)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $specialArrangement
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept ...$specialArrangement
     * @return static
     */
    public function setSpecialArrangement(FHIRCodeableConcept ...$specialArrangement): self
    {
        if ([] === $specialArrangement) {
            unset($this->specialArrangement);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getDestination(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $destination
     * @return static
     */
    public function setDestination(null|FHIRResourceReference $destination): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $dischargeDisposition
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getDischargeDiagnosis(): null|FHIRResourceReference
    {
        return $this->dischargeDiagnosis ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $dischargeDiagnosis
     * @return static
     */
    public function setDischargeDiagnosis(null|FHIRResourceReference $dischargeDiagnosis): self
    {
        if (null === $dischargeDiagnosis) {
            unset($this->dischargeDiagnosis);
            return $this;
        }
        $this->dischargeDiagnosis = $dischargeDiagnosis;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getReAdmission(): null|FHIRBoolean
    {
        return $this->reAdmission ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $reAdmission
     * @return static
     */
    public function setReAdmission(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reAdmission): self
    {
        if (null === $reAdmission) {
            unset($this->reAdmission);
            return $this;
        }
        if (!($reAdmission instanceof FHIRBoolean)) {
            $reAdmission = new FHIRBoolean(value: $reAdmission);
        }
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRE_ADMISSION_IDENTIFIER === $cen) {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGIN === $cen) {
                $type->setOrigin(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMIT_SOURCE === $cen) {
                $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCOMODATION === $cen) {
                $type->addAccomodation(FHIREncounterAccomodation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIET === $cen) {
                $type->setDiet(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIAL_COURTESY === $cen) {
                $type->addSpecialCourtesy(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIAL_ARRANGEMENT === $cen) {
                $type->addSpecialArrangement(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESTINATION === $cen) {
                $type->setDestination(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISCHARGE_DISPOSITION === $cen) {
                $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISCHARGE_DIAGNOSIS === $cen) {
                $type->setDischargeDiagnosis(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RE_ADMISSION === $cen) {
                $type->setReAdmission(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RE_ADMISSION])) {
            if (isset($type->reAdmission)) {
                $type->reAdmission->setValue((string)$attributes[self::FIELD_RE_ADMISSION]);
            } else {
                $type->setReAdmission((string)$attributes[self::FIELD_RE_ADMISSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RE_ADMISSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->reAdmission) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RE_ADMISSION]) {
            $xw->writeAttribute(self::FIELD_RE_ADMISSION, $this->reAdmission->_getValueAsString());
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
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->accomodation)) {
            foreach ($this->accomodation as $v) {
                $xw->startElement(self::FIELD_ACCOMODATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->diet)) {
            $xw->startElement(self::FIELD_DIET);
            $this->diet->xmlSerialize($xw, $config);
            $xw->endElement();
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
            $xw->startElement(self::FIELD_DISCHARGE_DIAGNOSIS);
            $this->dischargeDiagnosis->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reAdmission)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RE_ADMISSION]
                || $this->reAdmission->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RE_ADMISSION);
            $this->reAdmission->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RE_ADMISSION]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIREncounterHospitalization)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->preAdmissionIdentifier) || property_exists($decoded, self::FIELD_PRE_ADMISSION_IDENTIFIER)) {
            if (is_array($decoded->preAdmissionIdentifier)) {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->preAdmissionIdentifier), $config));
            } else {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::jsonUnserialize($decoded->preAdmissionIdentifier, $config));
            }
        }
        if (isset($decoded->origin) || property_exists($decoded, self::FIELD_ORIGIN)) {
            if (is_array($decoded->origin)) {
                $type->setOrigin(FHIRResourceReference::jsonUnserialize(reset($decoded->origin), $config));
            } else {
                $type->setOrigin(FHIRResourceReference::jsonUnserialize($decoded->origin, $config));
            }
        }
        if (isset($decoded->admitSource) || property_exists($decoded, self::FIELD_ADMIT_SOURCE)) {
            if (is_array($decoded->admitSource)) {
                $type->setAdmitSource(FHIRCodeableConcept::jsonUnserialize(reset($decoded->admitSource), $config));
            } else {
                $type->setAdmitSource(FHIRCodeableConcept::jsonUnserialize($decoded->admitSource, $config));
            }
        }
        if (isset($decoded->period) || property_exists($decoded, self::FIELD_PERIOD)) {
            if (is_array($decoded->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($decoded->period, $config));
            }
        }
        if (isset($decoded->accomodation) || property_exists($decoded, self::FIELD_ACCOMODATION)) {
            if (is_object($decoded->accomodation)) {
                $vals = [$decoded->accomodation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACCOMODATION, true);
            } else {
                $vals = $decoded->accomodation;
            }
            foreach($vals as $v) {
                $type->addAccomodation(FHIREncounterAccomodation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->diet) || property_exists($decoded, self::FIELD_DIET)) {
            if (is_array($decoded->diet)) {
                $type->setDiet(FHIRCodeableConcept::jsonUnserialize(reset($decoded->diet), $config));
            } else {
                $type->setDiet(FHIRCodeableConcept::jsonUnserialize($decoded->diet, $config));
            }
        }
        if (isset($decoded->specialCourtesy) || property_exists($decoded, self::FIELD_SPECIAL_COURTESY)) {
            if (is_object($decoded->specialCourtesy)) {
                $vals = [$decoded->specialCourtesy];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPECIAL_COURTESY, true);
            } else {
                $vals = $decoded->specialCourtesy;
            }
            foreach($vals as $v) {
                $type->addSpecialCourtesy(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->specialArrangement) || property_exists($decoded, self::FIELD_SPECIAL_ARRANGEMENT)) {
            if (is_object($decoded->specialArrangement)) {
                $vals = [$decoded->specialArrangement];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPECIAL_ARRANGEMENT, true);
            } else {
                $vals = $decoded->specialArrangement;
            }
            foreach($vals as $v) {
                $type->addSpecialArrangement(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->destination) || property_exists($decoded, self::FIELD_DESTINATION)) {
            if (is_array($decoded->destination)) {
                $type->setDestination(FHIRResourceReference::jsonUnserialize(reset($decoded->destination), $config));
            } else {
                $type->setDestination(FHIRResourceReference::jsonUnserialize($decoded->destination, $config));
            }
        }
        if (isset($decoded->dischargeDisposition) || property_exists($decoded, self::FIELD_DISCHARGE_DISPOSITION)) {
            if (is_array($decoded->dischargeDisposition)) {
                $type->setDischargeDisposition(FHIRCodeableConcept::jsonUnserialize(reset($decoded->dischargeDisposition), $config));
            } else {
                $type->setDischargeDisposition(FHIRCodeableConcept::jsonUnserialize($decoded->dischargeDisposition, $config));
            }
        }
        if (isset($decoded->dischargeDiagnosis) || property_exists($decoded, self::FIELD_DISCHARGE_DIAGNOSIS)) {
            if (is_array($decoded->dischargeDiagnosis)) {
                $type->setDischargeDiagnosis(FHIRResourceReference::jsonUnserialize(reset($decoded->dischargeDiagnosis), $config));
            } else {
                $type->setDischargeDiagnosis(FHIRResourceReference::jsonUnserialize($decoded->dischargeDiagnosis, $config));
            }
        }
        if (isset($decoded->reAdmission)
            || isset($decoded->_reAdmission)
            || property_exists($decoded, self::FIELD_RE_ADMISSION)
            || property_exists($decoded, self::FIELD_RE_ADMISSION_EXT)) {
            $v = $decoded->_reAdmission ?? new \stdClass();
            $v->value = $decoded->reAdmission ?? null;
            $type->setReAdmission(FHIRBoolean::jsonUnserialize($v, $config));
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
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->accomodation) && [] !== $this->accomodation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACCOMODATION) && 1 === count($this->accomodation)) {
                $out->accomodation = $this->accomodation[0];
            } else {
                $out->accomodation = $this->accomodation;
            }
        }
        if (isset($this->diet)) {
            $out->diet = $this->diet;
        }
        if (isset($this->specialCourtesy) && [] !== $this->specialCourtesy) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPECIAL_COURTESY) && 1 === count($this->specialCourtesy)) {
                $out->specialCourtesy = $this->specialCourtesy[0];
            } else {
                $out->specialCourtesy = $this->specialCourtesy;
            }
        }
        if (isset($this->specialArrangement) && [] !== $this->specialArrangement) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPECIAL_ARRANGEMENT) && 1 === count($this->specialArrangement)) {
                $out->specialArrangement = $this->specialArrangement[0];
            } else {
                $out->specialArrangement = $this->specialArrangement;
            }
        }
        if (isset($this->destination)) {
            $out->destination = $this->destination;
        }
        if (isset($this->dischargeDisposition)) {
            $out->dischargeDisposition = $this->dischargeDisposition;
        }
        if (isset($this->dischargeDiagnosis)) {
            $out->dischargeDiagnosis = $this->dischargeDiagnosis;
        }
        if (isset($this->reAdmission)) {
            if (null !== ($val = $this->reAdmission->getValue())) {
                $out->reAdmission = $val;
            }
            if ($this->reAdmission->_nonValueFieldDefined()) {
                $ext = $this->reAdmission->jsonSerialize();
                unset($ext->value);
                $out->_reAdmission = $ext;
            }
        }
        return $out;
    }
}