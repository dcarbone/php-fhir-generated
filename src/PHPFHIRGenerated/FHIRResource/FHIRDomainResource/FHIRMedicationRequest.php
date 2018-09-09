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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent;
use PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationRequest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationRequest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicationRequest';

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The description of the overall patte3rn of the administration of the medication to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $courseOfTherapyType = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $detectedIssue = null;

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    public $dispenseRequest = null;

    /**
     * If true indicates that the provider is asking for the medication request not to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * Indicates how the medication is to be used by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $dosageInstruction = null;

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $eventHistory = null;

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a reimbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiates = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurance = null;

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent
     */
    public $intent = null;

    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Indicates the type of performer of the administration of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $priorPrescription = null;

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * The reason or the indication for ordering or not ordering the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Condition or observation that supports why the medication was ordered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * A code specifying the current state of the order.  Generally, this will be active or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus
     */
    public $status = null;

    /**
     * Captures the reason for the current state of the MedicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public $substitution = null;

    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInformation = null;

    /**
     * FHIRMedicationRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['courseOfTherapyType'])) {
                $this->setCourseOfTherapyType($data['courseOfTherapyType']);
            }
            if (isset($data['detectedIssue'])) {
                $this->setDetectedIssue($data['detectedIssue']);
            }
            if (isset($data['dispenseRequest'])) {
                $this->setDispenseRequest($data['dispenseRequest']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
            }
            if (isset($data['dosageInstruction'])) {
                $this->setDosageInstruction($data['dosageInstruction']);
            }
            if (isset($data['eventHistory'])) {
                $this->setEventHistory($data['eventHistory']);
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiates'])) {
                $this->setInstantiates($data['instantiates']);
            }
            if (isset($data['insurance'])) {
                $this->setInsurance($data['insurance']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
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
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['performerType'])) {
                $this->setPerformerType($data['performerType']);
            }
            if (isset($data['priorPrescription'])) {
                $this->setPriorPrescription($data['priorPrescription']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
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
            if (isset($data['substitution'])) {
                $this->setSubstitution($data['substitution']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicationRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        if (null === $authoredOn) {
            return $this; 
        }
        if (is_scalar($authoredOn)) {
            $authoredOn = new FHIRDateTime($authoredOn);
        }
        if (!($authoredOn instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::setAuthoredOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authoredOn)
            ));
        }
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }


    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
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
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
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
     * A link to an encounter, or episode of care, that identifies the particular occurrence or set occurrences of contact between patient and health care provider.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The description of the overall patte3rn of the administration of the medication to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCourseOfTherapyType(FHIRCodeableConcept $courseOfTherapyType = null)
    {
        if (null === $courseOfTherapyType) {
            return $this; 
        }
        $this->courseOfTherapyType = $courseOfTherapyType;
        return $this;
    }

    /**
     * The description of the overall patte3rn of the administration of the medication to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCourseOfTherapyType()
    {
        return $this->courseOfTherapyType;
    }


    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDetectedIssue(FHIRReference $detectedIssue = null)
    {
        if (null === $detectedIssue) {
            return $this; 
        }
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }


    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     * @return $this
     */
    public function setDispenseRequest(FHIRMedicationRequestDispenseRequest $dispenseRequest = null)
    {
        if (null === $dispenseRequest) {
            return $this; 
        }
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order).  Note that this information is not always sent with the order.  There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    public function getDispenseRequest()
    {
        return $this->dispenseRequest;
    }


    /**
     * If true indicates that the provider is asking for the medication request not to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        if (null === $doNotPerform) {
            return $this; 
        }
        if (is_scalar($doNotPerform)) {
            $doNotPerform = new FHIRBoolean($doNotPerform);
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::setDoNotPerform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($doNotPerform)
            ));
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * If true indicates that the provider is asking for the medication request not to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }


    /**
     * Indicates how the medication is to be used by the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setDosageInstruction(FHIRDosage $dosageInstruction = null)
    {
        if (null === $dosageInstruction) {
            return $this; 
        }
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates how the medication is to be used by the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }


    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
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
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }


    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setGroupIdentifier(FHIRIdentifier $groupIdentifier = null)
    {
        if (null === $groupIdentifier) {
            return $this; 
        }
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }


    /**
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a reimbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
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
     * This records identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. For example a reimbursement system might issue its own id for each prescription that is created.  This is particularly important where FHIR only provides part of an entire workflow process where records must be tracked through an entire system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
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
                'FHIRMedicationRequest::setInstantiates - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiates)
            ));
        }
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }


    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInsurance(FHIRReference $insurance = null)
    {
        if (null === $insurance) {
            return $this; 
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurance()
    {
        return $this->insurance;
    }


    /**
     * Whether the request is a proposal, plan, or an original order.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent
     * @return $this
     */
    public function setIntent($intent)
    {
        if (null === $intent) {
            return $this; 
        }
        if (is_scalar($intent)) {
            $intent = new FHIRMedicationRequestIntent($intent);
        }
        if (!($intent instanceof FHIRMedicationRequestIntent)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::setIntent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent or appropriate scalar value, %s seen.',
                gettype($intent)
            ));
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }


    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }


    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
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
     * Extra information about the prescription that could not be conveyed by the other attributes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Indicates the type of performer of the administration of the medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPerformerType(FHIRCodeableConcept $performerType = null)
    {
        if (null === $performerType) {
            return $this; 
        }
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Indicates the type of performer of the administration of the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }


    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPriorPrescription(FHIRReference $priorPrescription = null)
    {
        if (null === $priorPrescription) {
            return $this; 
        }
        $this->priorPrescription = $priorPrescription;
        return $this;
    }

    /**
     * A link to a resource representing an earlier order related order or prescription.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPriorPrescription()
    {
        return $this->priorPrescription;
    }


    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRRequestPriority($priority);
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The reason or the indication for ordering or not ordering the medication.
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
     * The reason or the indication for ordering or not ordering the medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Condition or observation that supports why the medication was ordered.
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
     * Condition or observation that supports why the medication was ordered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        if (null === $recorder) {
            return $this; 
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }


    /**
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequester(FHIRReference $requester = null)
    {
        if (null === $requester) {
            return $this; 
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }


    /**
     * A code specifying the current state of the order.  Generally, this will be active or completed state.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMedicationRequestStatus($status);
        }
        if (!($status instanceof FHIRMedicationRequestStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the current state of the order.  Generally, this will be active or completed state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMedicationRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Captures the reason for the current state of the MedicationRequest.
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
     * Captures the reason for the current state of the MedicationRequest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
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
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     * @return $this
     */
    public function setSubstitution(FHIRMedicationRequestSubstitution $substitution = null)
    {
        if (null === $substitution) {
            return $this; 
        }
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }


    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
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
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
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
        if (null !== ($v = $this->getAuthoredOn())) {
            $a['authoredOn'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getCourseOfTherapyType())) {
            $a['courseOfTherapyType'] = $v;
        }
        if (null !== ($v = $this->getDetectedIssue())) {
            $a['detectedIssue'] = $v;
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            $a['dispenseRequest'] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a['doNotPerform'] = $v;
        }
        if (null !== ($v = $this->getDosageInstruction())) {
            $a['dosageInstruction'] = $v;
        }
        if (null !== ($v = $this->getEventHistory())) {
            $a['eventHistory'] = $v;
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a['groupIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiates())) {
            $a['instantiates'] = $v;
        }
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
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
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPerformerType())) {
            $a['performerType'] = $v;
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            $a['priorPrescription'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a['recorder'] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a['requester'] = $v;
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
        if (null !== ($v = $this->getSubstitution())) {
            $a['substitution'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicationRequest xmlns="http://hl7.org/fhir"></MedicationRequest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}