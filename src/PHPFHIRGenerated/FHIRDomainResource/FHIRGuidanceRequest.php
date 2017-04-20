<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A guidance request is a request to evaluate a particular knowledge module focused on decision support, providing information relevant to decision support such as workflow and user context.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGuidanceRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A reference to a knowledge module involved in an interaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $module = null;

    /**
     * The date and time of the request, with respect to the initiator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Indicates that the evaluation should be performed as though it was the given date and time. The most direct implication of this is that references to "Now" within the evaluation logic of the module should result in this value. In addition, wherever possible, the data accessed by the module should appear as though it was accessed at this time. The evaluateAtDateTime value may be any time in the past or future, enabling both retrospective and prospective scenarios. If no value is provided, the requestDateTime is assumed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $evaluateAtDateTime = null;

    /**
     * The input parameters for a request, if any. These parameters are used to provide patient-independent information to the evaluation. Patient-specific information is either accessed directly as part of the evaluation (because the evaluation engine and the patient-data are co-located) or provided as part of the operation input in the form of resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $inputParameters = null;

    /**
     * The organization initiating the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $initiatingOrganization = null;

    /**
     * The person initiating the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $initiatingPerson = null;

    /**
     * The type of user initiating the request, e.g. patient, healthcare provider, or specific type of healthcare provider (physician, nurse, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $userType = null;

    /**
     * Preferred language of the person using the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $userLanguage = null;

    /**
     * The task the system user is performing, e.g. laboratory results review, medication list review, etc. This information can be used to tailor decision support outputs, such as recommended information resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $userTaskContext = null;

    /**
     * The organization that will receive the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receivingOrganization = null;

    /**
     * The person in the receiving organization that will receive the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receivingPerson = null;

    /**
     * The type of individual that will consume the response content. This may be different from the requesting user type (e.g. if a clinician is getting disease management guidance for provision to a patient). E.g. patient, healthcare provider or specific type of healthcare provider (physician, nurse, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $recipientType = null;

    /**
     * Preferred language of the person that will consume the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $recipientLanguage = null;

    /**
     * The class of encounter (inpatient, outpatient, etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $encounterClass = null;

    /**
     * The type of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $encounterType = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'GuidanceRequest';

    /**
     * A reference to a knowledge module involved in an interaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * A reference to a knowledge module involved in an interaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * The date and time of the request, with respect to the initiator.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * The date and time of the request, with respect to the initiator.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Indicates that the evaluation should be performed as though it was the given date and time. The most direct implication of this is that references to "Now" within the evaluation logic of the module should result in this value. In addition, wherever possible, the data accessed by the module should appear as though it was accessed at this time. The evaluateAtDateTime value may be any time in the past or future, enabling both retrospective and prospective scenarios. If no value is provided, the requestDateTime is assumed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEvaluateAtDateTime()
    {
        return $this->evaluateAtDateTime;
    }

    /**
     * Indicates that the evaluation should be performed as though it was the given date and time. The most direct implication of this is that references to "Now" within the evaluation logic of the module should result in this value. In addition, wherever possible, the data accessed by the module should appear as though it was accessed at this time. The evaluateAtDateTime value may be any time in the past or future, enabling both retrospective and prospective scenarios. If no value is provided, the requestDateTime is assumed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $evaluateAtDateTime
     * @return $this
     */
    public function setEvaluateAtDateTime($evaluateAtDateTime)
    {
        $this->evaluateAtDateTime = $evaluateAtDateTime;
        return $this;
    }

    /**
     * The input parameters for a request, if any. These parameters are used to provide patient-independent information to the evaluation. Patient-specific information is either accessed directly as part of the evaluation (because the evaluation engine and the patient-data are co-located) or provided as part of the operation input in the form of resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInputParameters()
    {
        return $this->inputParameters;
    }

    /**
     * The input parameters for a request, if any. These parameters are used to provide patient-independent information to the evaluation. Patient-specific information is either accessed directly as part of the evaluation (because the evaluation engine and the patient-data are co-located) or provided as part of the operation input in the form of resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $inputParameters
     * @return $this
     */
    public function setInputParameters($inputParameters)
    {
        $this->inputParameters = $inputParameters;
        return $this;
    }

    /**
     * The organization initiating the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInitiatingOrganization()
    {
        return $this->initiatingOrganization;
    }

    /**
     * The organization initiating the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $initiatingOrganization
     * @return $this
     */
    public function setInitiatingOrganization($initiatingOrganization)
    {
        $this->initiatingOrganization = $initiatingOrganization;
        return $this;
    }

    /**
     * The person initiating the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInitiatingPerson()
    {
        return $this->initiatingPerson;
    }

    /**
     * The person initiating the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $initiatingPerson
     * @return $this
     */
    public function setInitiatingPerson($initiatingPerson)
    {
        $this->initiatingPerson = $initiatingPerson;
        return $this;
    }

    /**
     * The type of user initiating the request, e.g. patient, healthcare provider, or specific type of healthcare provider (physician, nurse, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * The type of user initiating the request, e.g. patient, healthcare provider, or specific type of healthcare provider (physician, nurse, etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $userType
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Preferred language of the person using the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Preferred language of the person using the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $userLanguage
     * @return $this
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;
        return $this;
    }

    /**
     * The task the system user is performing, e.g. laboratory results review, medication list review, etc. This information can be used to tailor decision support outputs, such as recommended information resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUserTaskContext()
    {
        return $this->userTaskContext;
    }

    /**
     * The task the system user is performing, e.g. laboratory results review, medication list review, etc. This information can be used to tailor decision support outputs, such as recommended information resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $userTaskContext
     * @return $this
     */
    public function setUserTaskContext($userTaskContext)
    {
        $this->userTaskContext = $userTaskContext;
        return $this;
    }

    /**
     * The organization that will receive the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceivingOrganization()
    {
        return $this->receivingOrganization;
    }

    /**
     * The organization that will receive the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $receivingOrganization
     * @return $this
     */
    public function setReceivingOrganization($receivingOrganization)
    {
        $this->receivingOrganization = $receivingOrganization;
        return $this;
    }

    /**
     * The person in the receiving organization that will receive the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceivingPerson()
    {
        return $this->receivingPerson;
    }

    /**
     * The person in the receiving organization that will receive the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $receivingPerson
     * @return $this
     */
    public function setReceivingPerson($receivingPerson)
    {
        $this->receivingPerson = $receivingPerson;
        return $this;
    }

    /**
     * The type of individual that will consume the response content. This may be different from the requesting user type (e.g. if a clinician is getting disease management guidance for provision to a patient). E.g. patient, healthcare provider or specific type of healthcare provider (physician, nurse, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRecipientType()
    {
        return $this->recipientType;
    }

    /**
     * The type of individual that will consume the response content. This may be different from the requesting user type (e.g. if a clinician is getting disease management guidance for provision to a patient). E.g. patient, healthcare provider or specific type of healthcare provider (physician, nurse, etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->recipientType = $recipientType;
        return $this;
    }

    /**
     * Preferred language of the person that will consume the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRecipientLanguage()
    {
        return $this->recipientLanguage;
    }

    /**
     * Preferred language of the person that will consume the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $recipientLanguage
     * @return $this
     */
    public function setRecipientLanguage($recipientLanguage)
    {
        $this->recipientLanguage = $recipientLanguage;
        return $this;
    }

    /**
     * The class of encounter (inpatient, outpatient, etc).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEncounterClass()
    {
        return $this->encounterClass;
    }

    /**
     * The class of encounter (inpatient, outpatient, etc).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $encounterClass
     * @return $this
     */
    public function setEncounterClass($encounterClass)
    {
        $this->encounterClass = $encounterClass;
        return $this;
    }

    /**
     * The type of the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEncounterType()
    {
        return $this->encounterType;
    }

    /**
     * The type of the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $encounterType
     * @return $this
     */
    public function setEncounterType($encounterType)
    {
        $this->encounterType = $encounterType;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->module) $json['module'] = json_encode($this->module);
        if (null !== $this->dateTime) $json['dateTime'] = json_encode($this->dateTime);
        if (null !== $this->evaluateAtDateTime) $json['evaluateAtDateTime'] = json_encode($this->evaluateAtDateTime);
        if (null !== $this->inputParameters) $json['inputParameters'] = json_encode($this->inputParameters);
        if (null !== $this->initiatingOrganization) $json['initiatingOrganization'] = json_encode($this->initiatingOrganization);
        if (null !== $this->initiatingPerson) $json['initiatingPerson'] = json_encode($this->initiatingPerson);
        if (null !== $this->userType) $json['userType'] = json_encode($this->userType);
        if (null !== $this->userLanguage) $json['userLanguage'] = json_encode($this->userLanguage);
        if (null !== $this->userTaskContext) $json['userTaskContext'] = json_encode($this->userTaskContext);
        if (null !== $this->receivingOrganization) $json['receivingOrganization'] = json_encode($this->receivingOrganization);
        if (null !== $this->receivingPerson) $json['receivingPerson'] = json_encode($this->receivingPerson);
        if (null !== $this->recipientType) $json['recipientType'] = json_encode($this->recipientType);
        if (null !== $this->recipientLanguage) $json['recipientLanguage'] = json_encode($this->recipientLanguage);
        if (null !== $this->encounterClass) $json['encounterClass'] = json_encode($this->encounterClass);
        if (null !== $this->encounterType) $json['encounterType'] = json_encode($this->encounterType);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<GuidanceRequest xmlns="http://hl7.org/fhir"></GuidanceRequest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->module) $this->module->xmlSerialize(true, $sxe->addChild('module'));
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (null !== $this->evaluateAtDateTime) $this->evaluateAtDateTime->xmlSerialize(true, $sxe->addChild('evaluateAtDateTime'));
        if (null !== $this->inputParameters) $this->inputParameters->xmlSerialize(true, $sxe->addChild('inputParameters'));
        if (null !== $this->initiatingOrganization) $this->initiatingOrganization->xmlSerialize(true, $sxe->addChild('initiatingOrganization'));
        if (null !== $this->initiatingPerson) $this->initiatingPerson->xmlSerialize(true, $sxe->addChild('initiatingPerson'));
        if (null !== $this->userType) $this->userType->xmlSerialize(true, $sxe->addChild('userType'));
        if (null !== $this->userLanguage) $this->userLanguage->xmlSerialize(true, $sxe->addChild('userLanguage'));
        if (null !== $this->userTaskContext) $this->userTaskContext->xmlSerialize(true, $sxe->addChild('userTaskContext'));
        if (null !== $this->receivingOrganization) $this->receivingOrganization->xmlSerialize(true, $sxe->addChild('receivingOrganization'));
        if (null !== $this->receivingPerson) $this->receivingPerson->xmlSerialize(true, $sxe->addChild('receivingPerson'));
        if (null !== $this->recipientType) $this->recipientType->xmlSerialize(true, $sxe->addChild('recipientType'));
        if (null !== $this->recipientLanguage) $this->recipientLanguage->xmlSerialize(true, $sxe->addChild('recipientLanguage'));
        if (null !== $this->encounterClass) $this->encounterClass->xmlSerialize(true, $sxe->addChild('encounterClass'));
        if (null !== $this->encounterType) $this->encounterType->xmlSerialize(true, $sxe->addChild('encounterType'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}