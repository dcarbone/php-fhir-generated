<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 *
 * Class FHIREncounterHospitalization
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter
 */
class FHIREncounterHospitalization extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;

    const FIELD_ADMIT_SOURCE = 'admitSource';
    const FIELD_ADMITTING_DIAGNOSIS = 'admittingDiagnosis';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DIET_PREFERENCE = 'dietPreference';
    const FIELD_DISCHARGE_DIAGNOSIS = 'dischargeDiagnosis';
    const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';
    const FIELD_ORIGIN = 'origin';
    const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    const FIELD_RE_ADMISSION = 'reAdmission';
    const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    const FIELD_SPECIAL_COURTESY = 'specialCourtesy';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $admitSource = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    private $admittingDiagnosis = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $destination = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $dietPreference = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    private $dischargeDiagnosis = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $dischargeDisposition = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $origin = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    private $preAdmissionIdentifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $reAdmission = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $specialArrangement = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $specialCourtesy = [];

    /**
     * FHIREncounterHospitalization Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREncounterHospitalization::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADMIT_SOURCE])) {
            if ($data[self::FIELD_ADMIT_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setAdmitSource($data[self::FIELD_ADMIT_SOURCE]);
            } else {
                $this->setAdmitSource(new FHIRCodeableConcept($data[self::FIELD_ADMIT_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_ADMITTING_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_ADMITTING_DIAGNOSIS])) {
                foreach($data[self::FIELD_ADMITTING_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAdmittingDiagnosis($v);
                    } else {
                        $this->addAdmittingDiagnosis(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ADMITTING_DIAGNOSIS] instanceof FHIRReference) {
                $this->addAdmittingDiagnosis($data[self::FIELD_ADMITTING_DIAGNOSIS]);
            } else {
                $this->addAdmittingDiagnosis(new FHIRReference($data[self::FIELD_ADMITTING_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_DIET_PREFERENCE])) {
            if (is_array($data[self::FIELD_DIET_PREFERENCE])) {
                foreach($data[self::FIELD_DIET_PREFERENCE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addDietPreference($v);
                    } else {
                        $this->addDietPreference(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_DIET_PREFERENCE] instanceof FHIRCodeableConcept) {
                $this->addDietPreference($data[self::FIELD_DIET_PREFERENCE]);
            } else {
                $this->addDietPreference(new FHIRCodeableConcept($data[self::FIELD_DIET_PREFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DISCHARGE_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_DISCHARGE_DIAGNOSIS])) {
                foreach($data[self::FIELD_DISCHARGE_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addDischargeDiagnosis($v);
                    } else {
                        $this->addDischargeDiagnosis(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DISCHARGE_DIAGNOSIS] instanceof FHIRReference) {
                $this->addDischargeDiagnosis($data[self::FIELD_DISCHARGE_DIAGNOSIS]);
            } else {
                $this->addDischargeDiagnosis(new FHIRReference($data[self::FIELD_DISCHARGE_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_DISCHARGE_DISPOSITION])) {
            if ($data[self::FIELD_DISCHARGE_DISPOSITION] instanceof FHIRCodeableConcept) {
                $this->setDischargeDisposition($data[self::FIELD_DISCHARGE_DISPOSITION]);
            } else {
                $this->setDischargeDisposition(new FHIRCodeableConcept($data[self::FIELD_DISCHARGE_DISPOSITION]));
            }
        }
        if (isset($data[self::FIELD_ORIGIN])) {
            if ($data[self::FIELD_ORIGIN] instanceof FHIRReference) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRReference($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
            if ($data[self::FIELD_PRE_ADMISSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPreAdmissionIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]);
            } else {
                $this->setPreAdmissionIdentifier(new FHIRIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_RE_ADMISSION])) {
            if ($data[self::FIELD_RE_ADMISSION] instanceof FHIRCodeableConcept) {
                $this->setReAdmission($data[self::FIELD_RE_ADMISSION]);
            } else {
                $this->setReAdmission(new FHIRCodeableConcept($data[self::FIELD_RE_ADMISSION]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_ARRANGEMENT])) {
            if (is_array($data[self::FIELD_SPECIAL_ARRANGEMENT])) {
                foreach($data[self::FIELD_SPECIAL_ARRANGEMENT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialArrangement($v);
                    } else {
                        $this->addSpecialArrangement(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIAL_ARRANGEMENT] instanceof FHIRCodeableConcept) {
                $this->addSpecialArrangement($data[self::FIELD_SPECIAL_ARRANGEMENT]);
            } else {
                $this->addSpecialArrangement(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_ARRANGEMENT]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_COURTESY])) {
            if (is_array($data[self::FIELD_SPECIAL_COURTESY])) {
                foreach($data[self::FIELD_SPECIAL_COURTESY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialCourtesy($v);
                    } else {
                        $this->addSpecialCourtesy(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIAL_COURTESY] instanceof FHIRCodeableConcept) {
                $this->addSpecialCourtesy($data[self::FIELD_SPECIAL_COURTESY]);
            } else {
                $this->addSpecialCourtesy(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_COURTESY]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $admitSource
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setAdmitSource(FHIRCodeableConcept $admitSource = null)
    {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getAdmittingDiagnosis()
    {
        return $this->admittingDiagnosis;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $admittingDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addAdmittingDiagnosis(FHIRReference $admittingDiagnosis = null)
    {
        $this->admittingDiagnosis[] = $admittingDiagnosis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The admitting diagnosis field is used to record the diagnosis codes as reported
     * by admitting practitioner. This could be different or in addition to the
     * conditions reported as reason-condition(s) for the encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $admittingDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setAdmittingDiagnosis(array $admittingDiagnosis = [])
    {
        $this->admittingDiagnosis = [];
        if ([] === $admittingDiagnosis) {
            return $this;
        }
        foreach($admittingDiagnosis as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAdmittingDiagnosis($v);
            } else {
                $this->addAdmittingDiagnosis(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $destination
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDestination(FHIRReference $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $dietPreference
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addDietPreference(FHIRCodeableConcept $dietPreference = null)
    {
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Diet preferences reported by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $dietPreference
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDietPreference(array $dietPreference = [])
    {
        $this->dietPreference = [];
        if ([] === $dietPreference) {
            return $this;
        }
        foreach($dietPreference as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addDietPreference($v);
            } else {
                $this->addDietPreference(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getDischargeDiagnosis()
    {
        return $this->dischargeDiagnosis;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $dischargeDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addDischargeDiagnosis(FHIRReference $dischargeDiagnosis = null)
    {
        $this->dischargeDiagnosis[] = $dischargeDiagnosis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $dischargeDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDischargeDiagnosis(array $dischargeDiagnosis = [])
    {
        $this->dischargeDiagnosis = [];
        if ([] === $dischargeDiagnosis) {
            return $this;
        }
        foreach($dischargeDiagnosis as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDischargeDiagnosis($v);
            } else {
                $this->addDischargeDiagnosis(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDischargeDisposition(FHIRCodeableConcept $dischargeDisposition = null)
    {
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $origin
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setOrigin(FHIRReference $origin = null)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setPreAdmissionIdentifier(FHIRIdentifier $preAdmissionIdentifier = null)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether this hospitalization is a readmission and why if known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reAdmission
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setReAdmission(FHIRCodeableConcept $reAdmission = null)
    {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addSpecialArrangement(FHIRCodeableConcept $specialArrangement = null)
    {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Wheelchair, translator, stretcher, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $specialArrangement
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setSpecialArrangement(array $specialArrangement = [])
    {
        $this->specialArrangement = [];
        if ([] === $specialArrangement) {
            return $this;
        }
        foreach($specialArrangement as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialArrangement($v);
            } else {
                $this->addSpecialArrangement(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addSpecialCourtesy(FHIRCodeableConcept $specialCourtesy = null)
    {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Special courtesies (VIP, board member).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $specialCourtesy
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setSpecialCourtesy(array $specialCourtesy = [])
    {
        $this->specialCourtesy = [];
        if ([] === $specialCourtesy) {
            return $this;
        }
        foreach($specialCourtesy as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialCourtesy($v);
            } else {
                $this->addSpecialCourtesy(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIREncounterHospitalization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREncounterHospitalization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIREncounterHospitalization);
        } elseif (!is_object($type) || !($type instanceof FHIREncounterHospitalization)) {
            throw new \RuntimeException(sprintf(
                'FHIREncounterHospitalization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->admitSource)) {
            $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($children->admitSource));
        }
        if (isset($children->admittingDiagnosis)) {
            foreach($children->admittingDiagnosis as $child) {
                $type->addAdmittingDiagnosis(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRReference::xmlUnserialize($children->destination));
        }
        if (isset($children->dietPreference)) {
            foreach($children->dietPreference as $child) {
                $type->addDietPreference(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->dischargeDiagnosis)) {
            foreach($children->dischargeDiagnosis as $child) {
                $type->addDischargeDiagnosis(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dischargeDisposition)) {
            $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($children->dischargeDisposition));
        }
        if (isset($children->origin)) {
            $type->setOrigin(FHIRReference::xmlUnserialize($children->origin));
        }
        if (isset($children->preAdmissionIdentifier)) {
            $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($children->preAdmissionIdentifier));
        }
        if (isset($children->reAdmission)) {
            $type->setReAdmission(FHIRCodeableConcept::xmlUnserialize($children->reAdmission));
        }
        if (isset($children->specialArrangement)) {
            foreach($children->specialArrangement as $child) {
                $type->addSpecialArrangement(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->specialCourtesy)) {
            foreach($children->specialCourtesy as $child) {
                $type->addSpecialCourtesy(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAdmitSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADMIT_SOURCE));
        }

        if ([] !== ($vs = $this->getAdmittingDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADMITTING_DIAGNOSIS));
            }
        }

        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION));
        }

        if ([] !== ($vs = $this->getDietPreference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIET_PREFERENCE));
            }
        }

        if ([] !== ($vs = $this->getDischargeDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISCHARGE_DIAGNOSIS));
            }
        }

        if (null !== ($v = $this->getDischargeDisposition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISCHARGE_DISPOSITION));
        }

        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGIN));
        }

        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_ADMISSION_IDENTIFIER));
        }

        if (null !== ($v = $this->getReAdmission())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RE_ADMISSION));
        }

        if ([] !== ($vs = $this->getSpecialArrangement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_ARRANGEMENT));
            }
        }

        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_COURTESY));
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
        if (null !== ($v = $this->getAdmitSource())) {
            $a[self::FIELD_ADMIT_SOURCE] = $v;
        }
        if ([] !== ($vs = $this->getAdmittingDiagnosis())) {
            $a[self::FIELD_ADMITTING_DIAGNOSIS] = $vs;
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v;
        }
        if ([] !== ($vs = $this->getDietPreference())) {
            $a[self::FIELD_DIET_PREFERENCE] = $vs;
        }
        if ([] !== ($vs = $this->getDischargeDiagnosis())) {
            $a[self::FIELD_DISCHARGE_DIAGNOSIS] = $vs;
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            $a[self::FIELD_DISCHARGE_DISPOSITION] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a[self::FIELD_ORIGIN] = $v;
        }
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $a[self::FIELD_PRE_ADMISSION_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getReAdmission())) {
            $a[self::FIELD_RE_ADMISSION] = $v;
        }
        if ([] !== ($vs = $this->getSpecialArrangement())) {
            $a[self::FIELD_SPECIAL_ARRANGEMENT] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            $a[self::FIELD_SPECIAL_COURTESY] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}