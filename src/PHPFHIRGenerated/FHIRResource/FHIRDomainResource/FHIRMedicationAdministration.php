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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the event of a patient consuming or otherwise being administered a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.  Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationAdministration
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicationAdministration';

    /**
     * Indicates where the medication is expected to be consumed or administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public $dosage = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $eventHistory = null;

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event. This identifier is particularly important when these records require updates.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiates = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * A larger event of which this particular event is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer
     */
    public $performer = null;

    /**
     * A code indicating why the medication was given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Condition or observation that supports why the medication was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * A code indicating why the administration was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The person or animal or group receiving the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInformation = null;

    /**
     * FHIRMedicationAdministration Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['dosage'])) {
                $this->setDosage($data['dosage']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['eventHistory'])) {
                $this->setEventHistory($data['eventHistory']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiates'])) {
                $this->setInstantiates($data['instantiates']);
            }
            if (isset($data['medicationCodeableConcept'])) {
                $this->setMedicationCodeableConcept($data['medicationCodeableConcept']);
            }
            if (isset($data['medicationReference'])) {
                $this->setMedicationReference($data['medicationReference']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates where the medication is expected to be consumed or administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates where the medication is expected to be consumed or administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The visit, admission, or other contact between patient and health care provider during which the medication administration was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     * @return $this
     */
    public function setDosage(FHIRMedicationAdministrationDosage $dosage = null)
    {
        if (null === $dosage) {
            return $this; 
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }


    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        if (null === $effectiveDateTime) {
            return $this; 
        }
        if (is_scalar($effectiveDateTime)) {
            $effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        }
        if (!($effectiveDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationAdministration::setEffectiveDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($effectiveDateTime)
            ));
        }
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }


    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        if (null === $effectivePeriod) {
            return $this; 
        }
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * A specific date/time or interval of time during which the administration took place (or did not take place, when the 'notGiven' attribute is true). For many administrations, such as swallowing a tablet the use of dateTime is more appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }


    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEventHistory(FHIRReference $eventHistory = null)
    {
        if (null === $eventHistory) {
            return $this; 
        }
        $this->eventHistory = $eventHistory;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }


    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event. This identifier is particularly important when these records require updates.
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
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event. This identifier is particularly important when these records require updates.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiates($instantiates)
    {
        if (null === $instantiates) {
            return $this; 
        }
        if (is_scalar($instantiates)) {
            $instantiates = new FHIRUri($instantiates);
        }
        if (!($instantiates instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationAdministration::setInstantiates - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiates)
            ));
        }
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * A protocol, guideline, orderset, or other definition that was adhered to in whole or in part by this event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }


    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        if (null === $medicationCodeableConcept) {
            return $this; 
        }
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }


    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        if (null === $medicationReference) {
            return $this; 
        }
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Identifies the medication that was administered. This is either a link to a resource representing the details of the medication or a simple attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }


    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
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
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * A larger event of which this particular event is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer
     * @return $this
     */
    public function setPerformer(FHIRMedicationAdministrationPerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who or what performed the medication administration and how they were involved.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * A code indicating why the medication was given.
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
     * A code indicating why the medication was given.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Condition or observation that supports why the medication was administered.
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
     * Condition or observation that supports why the medication was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The original request, instruction or authority to perform the administration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequest(FHIRReference $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMedicationAdministrationStatus($status);
        }
        if (!($status instanceof FHIRMedicationAdministrationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationAdministration::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions, it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A code indicating why the administration was not performed.
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
     * A code indicating why the administration was not performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The person or animal or group receiving the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The person or animal or group receiving the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInformation(FHIRReference $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
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
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getDosage())) {
            $a['dosage'] = $v;
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $a['effectiveDateTime'] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a['effectivePeriod'] = $v;
        }
        if (null !== ($v = $this->getEventHistory())) {
            $a['eventHistory'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiates())) {
            $a['instantiates'] = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a['medicationCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a['medicationReference'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSupportingInformation())) {
            $a['supportingInformation'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicationAdministration xmlns="http://hl7.org/fhir"></MedicationAdministration>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}