<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImmunization
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRImmunization extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Immunization';

    /**
     * The quantity of vaccine product that was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $doseQuantity = null;

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public $education = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Date vaccine batch expires.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $expirationDate = null;

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fundingSource = null;

    /**
     * A unique identifier assigned to this immunization record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isSubpotent = null;

    /**
     * The service delivery location where the vaccine administration occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Lot number of the  vaccine product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $lotNumber = null;

    /**
     * Name of vaccine manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $occurrenceString = null;

    /**
     * The patient who either received or did not receive the immunization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Indicates who performed the immunization event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer
     */
    public $performer = null;

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $primarySource = null;

    /**
     * Indicates a patient's eligibility for a funding program.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $programEligibility = null;

    /**
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public $protocolApplied = null;

    /**
     * Reasons why the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recorded = null;

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reportOrigin = null;

    /**
     * The path by which the vaccine product is taken into the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * Body site where vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $site = null;

    /**
     * Indicates the current status of the immunization event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public $status = null;

    /**
     * Indicates the reason the immunization event was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * Reason why a dose is considered to be subpotent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subpotentReason = null;

    /**
     * Vaccine that was administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $vaccineCode = null;

    /**
     * FHIRImmunization Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['doseQuantity'])) {
                $this->setDoseQuantity($data['doseQuantity']);
            }
            if (isset($data['education'])) {
                $this->setEducation($data['education']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['expirationDate'])) {
                $this->setExpirationDate($data['expirationDate']);
            }
            if (isset($data['fundingSource'])) {
                $this->setFundingSource($data['fundingSource']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['isSubpotent'])) {
                $this->setIsSubpotent($data['isSubpotent']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['lotNumber'])) {
                $this->setLotNumber($data['lotNumber']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrenceString'])) {
                $this->setOccurrenceString($data['occurrenceString']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['primarySource'])) {
                $this->setPrimarySource($data['primarySource']);
            }
            if (isset($data['programEligibility'])) {
                $this->setProgramEligibility($data['programEligibility']);
            }
            if (isset($data['protocolApplied'])) {
                $this->setProtocolApplied($data['protocolApplied']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['recorded'])) {
                $this->setRecorded($data['recorded']);
            }
            if (isset($data['reportOrigin'])) {
                $this->setReportOrigin($data['reportOrigin']);
            }
            if (isset($data['route'])) {
                $this->setRoute($data['route']);
            }
            if (isset($data['site'])) {
                $this->setSite($data['site']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subpotentReason'])) {
                $this->setSubpotentReason($data['subpotentReason']);
            }
            if (isset($data['vaccineCode'])) {
                $this->setVaccineCode($data['vaccineCode']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The quantity of vaccine product that was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDoseQuantity(FHIRQuantity $doseQuantity = null)
    {
        if (null === $doseQuantity) {
            return $this; 
        }
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }


    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     * @return $this
     */
    public function setEducation(FHIRImmunizationEducation $education = null)
    {
        if (null === $education) {
            return $this; 
        }
        $this->education = $education;
        return $this;
    }

    /**
     * Educational material presented to the patient (or guardian) at the time of vaccine administration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public function getEducation()
    {
        return $this->education;
    }


    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * Date vaccine batch expires.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        if (null === $expirationDate) {
            return $this; 
        }
        if (is_scalar($expirationDate)) {
            $expirationDate = new FHIRDate($expirationDate);
        }
        if (!($expirationDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setExpirationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($expirationDate)
            ));
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Date vaccine batch expires.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }


    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFundingSource(FHIRCodeableConcept $fundingSource = null)
    {
        if (null === $fundingSource) {
            return $this; 
        }
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * Indicates the source of the vaccine actually administered. This may be different than the patient eligibility (e.g. the patient may be eligible for a publically purchased vaccine but due to inventory issues, vaccine purchased with private funds was actually administered).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }


    /**
     * A unique identifier assigned to this immunization record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A unique identifier assigned to this immunization record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setIsSubpotent($isSubpotent)
    {
        if (null === $isSubpotent) {
            return $this; 
        }
        if (is_scalar($isSubpotent)) {
            $isSubpotent = new FHIRBoolean($isSubpotent);
        }
        if (!($isSubpotent instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setIsSubpotent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($isSubpotent)
            ));
        }
        $this->isSubpotent = $isSubpotent;
        return $this;
    }

    /**
     * Indication if a dose is considered to be subpotent. By default, a dose should be considered to be potent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSubpotent()
    {
        return $this->isSubpotent;
    }


    /**
     * The service delivery location where the vaccine administration occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Lot number of the  vaccine product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        if (null === $lotNumber) {
            return $this; 
        }
        if (is_scalar($lotNumber)) {
            $lotNumber = new FHIRString($lotNumber);
        }
        if (!($lotNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setLotNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($lotNumber)
            ));
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Lot number of the  vaccine product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }


    /**
     * Name of vaccine manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Name of vaccine manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Date vaccine administered or was to be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        if (null === $occurrenceDateTime) {
            return $this; 
        }
        if (is_scalar($occurrenceDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * Date vaccine administered or was to be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOccurrenceString($occurrenceString)
    {
        if (null === $occurrenceString) {
            return $this; 
        }
        if (is_scalar($occurrenceString)) {
            $occurrenceString = new FHIRString($occurrenceString);
        }
        if (!($occurrenceString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setOccurrenceString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($occurrenceString)
            ));
        }
        $this->occurrenceString = $occurrenceString;
        return $this;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }


    /**
     * The patient who either received or did not receive the immunization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Indicates who performed the immunization event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer
     * @return $this
     */
    public function setPerformer(FHIRImmunizationPerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who performed the immunization event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setPrimarySource($primarySource)
    {
        if (null === $primarySource) {
            return $this; 
        }
        if (is_scalar($primarySource)) {
            $primarySource = new FHIRBoolean($primarySource);
        }
        if (!($primarySource instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setPrimarySource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($primarySource)
            ));
        }
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }


    /**
     * Indicates a patient's eligibility for a funding program.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProgramEligibility(FHIRCodeableConcept $programEligibility = null)
    {
        if (null === $programEligibility) {
            return $this; 
        }
        $this->programEligibility = $programEligibility;
        return $this;
    }

    /**
     * Indicates a patient's eligibility for a funding program.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProgramEligibility()
    {
        return $this->programEligibility;
    }


    /**
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     * @return $this
     */
    public function setProtocolApplied(FHIRImmunizationProtocolApplied $protocolApplied = null)
    {
        if (null === $protocolApplied) {
            return $this; 
        }
        $this->protocolApplied = $protocolApplied;
        return $this;
    }

    /**
     * The protocol (set of recommendations) being followed by the provider who administered the dose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function getProtocolApplied()
    {
        return $this->protocolApplied;
    }


    /**
     * Reasons why the vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Reasons why the vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Condition, Observation or DiagnosticReport that supports why the immunization was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRecorded($recorded)
    {
        if (null === $recorded) {
            return $this; 
        }
        if (is_scalar($recorded)) {
            $recorded = new FHIRDateTime($recorded);
        }
        if (!($recorded instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setRecorded - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($recorded)
            ));
        }
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * The date the occurrence of the immunization was first captured in the record - potentially significantly after the occurrence of the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecorded()
    {
        return $this->recorded;
    }


    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReportOrigin(FHIRCodeableConcept $reportOrigin = null)
    {
        if (null === $reportOrigin) {
            return $this; 
        }
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin()
    {
        return $this->reportOrigin;
    }


    /**
     * The path by which the vaccine product is taken into the body.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        if (null === $route) {
            return $this; 
        }
        $this->route = $route;
        return $this;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }


    /**
     * Body site where vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        if (null === $site) {
            return $this; 
        }
        $this->site = $site;
        return $this;
    }

    /**
     * Body site where vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }


    /**
     * Indicates the current status of the immunization event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRImmunizationStatusCodes($status);
        }
        if (!($status instanceof FHIRImmunizationStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the current status of the immunization event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Indicates the reason the immunization event was not performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Indicates the reason the immunization event was not performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * Reason why a dose is considered to be subpotent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubpotentReason(FHIRCodeableConcept $subpotentReason = null)
    {
        if (null === $subpotentReason) {
            return $this; 
        }
        $this->subpotentReason = $subpotentReason;
        return $this;
    }

    /**
     * Reason why a dose is considered to be subpotent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubpotentReason()
    {
        return $this->subpotentReason;
    }


    /**
     * Vaccine that was administered or was to be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        if (null === $vaccineCode) {
            return $this; 
        }
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getDoseQuantity())) {
            $a['doseQuantity'] = $v;
        }
        if (null !== ($v = $this->getEducation())) {
            $a['education'] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a['expirationDate'] = $v;
        }
        if (null !== ($v = $this->getFundingSource())) {
            $a['fundingSource'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            $a['isSubpotent'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a['lotNumber'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            $a['occurrenceString'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $a['primarySource'] = $v;
        }
        if (null !== ($v = $this->getProgramEligibility())) {
            $a['programEligibility'] = $v;
        }
        if (null !== ($v = $this->getProtocolApplied())) {
            $a['protocolApplied'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRecorded())) {
            $a['recorded'] = $v;
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $a['reportOrigin'] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a['route'] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a['site'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubpotentReason())) {
            $a['subpotentReason'] = $v;
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a['vaccineCode'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Immunization xmlns="http://hl7.org/fhir"></Immunization>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}