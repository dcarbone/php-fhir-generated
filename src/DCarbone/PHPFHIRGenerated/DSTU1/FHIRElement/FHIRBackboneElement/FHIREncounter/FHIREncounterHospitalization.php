<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 *
 * Class FHIREncounterHospitalization
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter
 */
class FHIREncounterHospitalization extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCOMODATION = 'accomodation';
    const FIELD_ADMIT_SOURCE = 'admitSource';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DIET = 'diet';
    const FIELD_DISCHARGE_DIAGNOSIS = 'dischargeDiagnosis';
    const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';
    const FIELD_ORIGIN = 'origin';
    const FIELD_PERIOD = 'period';
    const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    const FIELD_PRE_ADMISSION_IDENTIFIER_EXT = '_preAdmissionIdentifier';
    const FIELD_RE_ADMISSION = 'reAdmission';
    const FIELD_RE_ADMISSION_EXT = '_reAdmission';
    const FIELD_SPECIAL_ARRANGEMENT = 'specialArrangement';
    const FIELD_SPECIAL_COURTESY = 'specialCourtesy';

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[]
     */
    private $accomodation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $admitSource = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Location to which the patient is discharged.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $destination = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $diet = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The final diagnosis given a patient before release from the hospital after all
     * testing, surgery, and workup are complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $dischargeDiagnosis = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $dischargeDisposition = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location from which the patient came before admission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $origin = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $preAdmissionIdentifier = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
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
        if (isset($data[self::FIELD_ACCOMODATION])) {
            if (is_array($data[self::FIELD_ACCOMODATION])) {
                foreach($data[self::FIELD_ACCOMODATION] as $v) {
                    if ($v instanceof FHIREncounterAccomodation) {
                        $this->addAccomodation($v);
                    } else {
                        $this->addAccomodation(new FHIREncounterAccomodation($v));
                    }
                }
            } else if ($data[self::FIELD_ACCOMODATION] instanceof FHIREncounterAccomodation) {
                $this->addAccomodation($data[self::FIELD_ACCOMODATION]);
            } else {
                $this->addAccomodation(new FHIREncounterAccomodation($data[self::FIELD_ACCOMODATION]));
            }
        }
        if (isset($data[self::FIELD_ADMIT_SOURCE])) {
            if ($data[self::FIELD_ADMIT_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setAdmitSource($data[self::FIELD_ADMIT_SOURCE]);
            } else {
                $this->setAdmitSource(new FHIRCodeableConcept($data[self::FIELD_ADMIT_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRResourceReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRResourceReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_DIET])) {
            if ($data[self::FIELD_DIET] instanceof FHIRCodeableConcept) {
                $this->setDiet($data[self::FIELD_DIET]);
            } else {
                $this->setDiet(new FHIRCodeableConcept($data[self::FIELD_DIET]));
            }
        }
        if (isset($data[self::FIELD_DISCHARGE_DIAGNOSIS])) {
            if ($data[self::FIELD_DISCHARGE_DIAGNOSIS] instanceof FHIRResourceReference) {
                $this->setDischargeDiagnosis($data[self::FIELD_DISCHARGE_DIAGNOSIS]);
            } else {
                $this->setDischargeDiagnosis(new FHIRResourceReference($data[self::FIELD_DISCHARGE_DIAGNOSIS]));
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
            if ($data[self::FIELD_ORIGIN] instanceof FHIRResourceReference) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRResourceReference($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_PRE_ADMISSION_IDENTIFIER_EXT]) && is_array($data[self::FIELD_PRE_ADMISSION_IDENTIFIER_EXT]))
                ? $data[self::FIELD_PRE_ADMISSION_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_PRE_ADMISSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPreAdmissionIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRE_ADMISSION_IDENTIFIER])) {
                $this->setPreAdmissionIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_PRE_ADMISSION_IDENTIFIER]] + $ext));
            } else {
                $this->setPreAdmissionIdentifier(new FHIRIdentifier($data[self::FIELD_PRE_ADMISSION_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_RE_ADMISSION])) {
            $ext = (isset($data[self::FIELD_RE_ADMISSION_EXT]) && is_array($data[self::FIELD_RE_ADMISSION_EXT]))
                ? $data[self::FIELD_RE_ADMISSION_EXT]
                : null;
            if ($data[self::FIELD_RE_ADMISSION] instanceof FHIRBoolean) {
                $this->setReAdmission($data[self::FIELD_RE_ADMISSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_RE_ADMISSION])) {
                $this->setReAdmission(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_RE_ADMISSION]] + $ext));
            } else {
                $this->setReAdmission(new FHIRBoolean($data[self::FIELD_RE_ADMISSION]));
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
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<EncounterHospitalization{$xmlns}></EncounterHospitalization>";
    }


    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[]
     */
    public function getAccomodation()
    {
        return $this->accomodation;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation $accomodation
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function addAccomodation(FHIREncounterAccomodation $accomodation = null)
    {
        $this->accomodation[] = $accomodation;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     *
     * Where the patient stays during this encounter.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation[] $accomodation
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setAccomodation(array $accomodation = [])
    {
        $this->accomodation = [];
        if ([] === $accomodation) {
            return $this;
        }
        foreach($accomodation as $v) {
            if ($v instanceof FHIREncounterAccomodation) {
                $this->addAccomodation($v);
            } else {
                $this->addAccomodation(new FHIREncounterAccomodation($v));
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
     * From where patient was admitted (physician referral, transfer).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $admitSource
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * Location to which the patient is discharged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $destination
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDestination(FHIRResourceReference $destination = null)
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
     * Dietary restrictions for the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dietary restrictions for the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $diet
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDiet(FHIRCodeableConcept $diet = null)
    {
        $this->diet = $diet;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $dischargeDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setDischargeDiagnosis(FHIRResourceReference $dischargeDiagnosis = null)
    {
        $this->dischargeDiagnosis = $dischargeDiagnosis;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $origin
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setOrigin(FHIRResourceReference $origin = null)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Period during which the patient was admitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setPreAdmissionIdentifier(FHIRIdentifier $preAdmissionIdentifier = null)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this hospitalization is a readmission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $reAdmission
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
     */
    public function setReAdmission($reAdmission = null)
    {
        if (null === $reAdmission) {
            $this->reAdmission = null;
            return $this;
        }
        if ($reAdmission instanceof FHIRBoolean) {
            $this->reAdmission = $reAdmission;
            return $this;
        }
        $this->reAdmission = new FHIRBoolean($reAdmission);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $specialArrangement
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $specialCourtesy
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
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
                throw new \DomainException(sprintf('FHIREncounterHospitalization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREncounterHospitalization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREncounterHospitalization;
        } elseif (!is_object($type) || !($type instanceof FHIREncounterHospitalization)) {
            throw new \RuntimeException(sprintf(
                'FHIREncounterHospitalization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization or null, %s seen.',
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
        if (isset($children->accomodation)) {
            foreach($children->accomodation as $child) {
                $type->addAccomodation(FHIREncounterAccomodation::xmlUnserialize($child));
            }
        }
        if (isset($children->admitSource)) {
            $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($children->admitSource));
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRResourceReference::xmlUnserialize($children->destination));
        }
        if (isset($children->diet)) {
            $type->setDiet(FHIRCodeableConcept::xmlUnserialize($children->diet));
        }
        if (isset($children->dischargeDiagnosis)) {
            $type->setDischargeDiagnosis(FHIRResourceReference::xmlUnserialize($children->dischargeDiagnosis));
        }
        if (isset($children->dischargeDisposition)) {
            $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($children->dischargeDisposition));
        }
        if (isset($children->origin)) {
            $type->setOrigin(FHIRResourceReference::xmlUnserialize($children->origin));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->preAdmissionIdentifier)) {
            $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($children->preAdmissionIdentifier));
        }
        if (isset($attributes->reAdmission)) {
            $type->setReAdmission((string)$attributes->reAdmission);
        }
        if (isset($children->reAdmission)) {
            $type->setReAdmission(FHIRBoolean::xmlUnserialize($children->reAdmission));
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAccomodation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACCOMODATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getAdmitSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADMIT_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDiet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIET, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDischargeDiagnosis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISCHARGE_DIAGNOSIS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDischargeDisposition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISCHARGE_DISPOSITION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGIN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_ADMISSION_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReAdmission())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RE_ADMISSION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSpecialArrangement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_ARRANGEMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIAL_COURTESY, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAccomodation())) {
            $a[self::FIELD_ACCOMODATION] = $vs;
        }
        if (null !== ($v = $this->getAdmitSource())) {
            $a[self::FIELD_ADMIT_SOURCE] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v;
        }
        if (null !== ($v = $this->getDiet())) {
            $a[self::FIELD_DIET] = $v;
        }
        if (null !== ($v = $this->getDischargeDiagnosis())) {
            $a[self::FIELD_DISCHARGE_DIAGNOSIS] = $v;
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            $a[self::FIELD_DISCHARGE_DISPOSITION] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a[self::FIELD_ORIGIN] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $a[self::FIELD_PRE_ADMISSION_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PRE_ADMISSION_IDENTIFIER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getReAdmission())) {
            $a[self::FIELD_RE_ADMISSION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_RE_ADMISSION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecialArrangement())) {
            $a[self::FIELD_SPECIAL_ARRANGEMENT] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialCourtesy())) {
            $a[self::FIELD_SPECIAL_COURTESY] = $vs;
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