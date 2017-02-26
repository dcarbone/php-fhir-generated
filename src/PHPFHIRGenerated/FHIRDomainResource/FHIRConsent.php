<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRConsent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier for this copy of the Consent Statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the current state of this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConsentStatus
     */
    public $status = null;

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * When this  Consent was issued / created / indexed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The patient/consumer that is responsible for agreeing to the consent represented by this resource. This is the person (usually) that agreed to the policy, along with the exceptions, e.g. the persion who takes responsibility for the agreement. In the signature this corresponds to the role "Consent Signature".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $consentor = array();

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $sourceAttachment = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $sourceIdentifier = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sourceReference = null;

    /**
     * A reference to the policy that this consents to. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $policy = null;

    /**
     * Actor whose access is controlled by this consent under the terms of the policy and exceptions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $recipient = array();

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $purpose = array();

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentExcept[]
     */
    public $except = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Consent';

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Indicates the current state of this consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConsentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current state of this consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConsentStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * When this  Consent was issued / created / indexed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * When this  Consent was issued / created / indexed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient/consumer that is responsible for agreeing to the consent represented by this resource. This is the person (usually) that agreed to the policy, along with the exceptions, e.g. the persion who takes responsibility for the agreement. In the signature this corresponds to the role "Consent Signature".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getConsentor()
    {
        return $this->consentor;
    }

    /**
     * The patient/consumer that is responsible for agreeing to the consent represented by this resource. This is the person (usually) that agreed to the policy, along with the exceptions, e.g. the persion who takes responsibility for the agreement. In the signature this corresponds to the role "Consent Signature".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $consentor
     * @return $this
     */
    public function addConsentor($consentor)
    {
        $this->consentor[] = $consentor;
        return $this;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $sourceAttachment
     * @return $this
     */
    public function setSourceAttachment($sourceAttachment)
    {
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $sourceIdentifier
     * @return $this
     */
    public function setSourceIdentifier($sourceIdentifier)
    {
        $this->sourceIdentifier = $sourceIdentifier;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sourceReference
     * @return $this
     */
    public function setSourceReference($sourceReference)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * A reference to the policy that this consents to. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * A reference to the policy that this consents to. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Actor whose access is controlled by this consent under the terms of the policy and exceptions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Actor whose access is controlled by this consent under the terms of the policy and exceptions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function addRecipient($recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $purpose
     * @return $this
     */
    public function addPurpose($purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentExcept[]
     */
    public function getExcept()
    {
        return $this->except;
    }

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentExcept $except
     * @return $this
     */
    public function addExcept($except)
    {
        $this->except[] = $except;
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
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = json_encode($category);
            }
        }
        if (null !== $this->dateTime) $json['dateTime'] = json_encode($this->dateTime);
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (0 < count($this->consentor)) {
            $json['consentor'] = [];
            foreach($this->consentor as $consentor) {
                $json['consentor'][] = json_encode($consentor);
            }
        }
        if (null !== $this->organization) $json['organization'] = json_encode($this->organization);
        if (null !== $this->sourceAttachment) $json['sourceAttachment'] = json_encode($this->sourceAttachment);
        if (null !== $this->sourceIdentifier) $json['sourceIdentifier'] = json_encode($this->sourceIdentifier);
        if (null !== $this->sourceReference) $json['sourceReference'] = json_encode($this->sourceReference);
        if (null !== $this->policy) $json['policy'] = json_encode($this->policy);
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                $json['recipient'][] = json_encode($recipient);
            }
        }
        if (0 < count($this->purpose)) {
            $json['purpose'] = [];
            foreach($this->purpose as $purpose) {
                $json['purpose'][] = json_encode($purpose);
            }
        }
        if (0 < count($this->except)) {
            $json['except'] = [];
            foreach($this->except as $except) {
                $json['except'][] = json_encode($except);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Consent xmlns="http://hl7.org/fhir"></Consent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (0 < count($this->consentor)) {
            foreach($this->consentor as $consentor) {
                $consentor->xmlSerialize(true, $sxe->addChild('consentor'));
            }
        }
        if (null !== $this->organization) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (null !== $this->sourceAttachment) $this->sourceAttachment->xmlSerialize(true, $sxe->addChild('sourceAttachment'));
        if (null !== $this->sourceIdentifier) $this->sourceIdentifier->xmlSerialize(true, $sxe->addChild('sourceIdentifier'));
        if (null !== $this->sourceReference) $this->sourceReference->xmlSerialize(true, $sxe->addChild('sourceReference'));
        if (null !== $this->policy) $this->policy->xmlSerialize(true, $sxe->addChild('policy'));
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
            }
        }
        if (0 < count($this->purpose)) {
            foreach($this->purpose as $purpose) {
                $purpose->xmlSerialize(true, $sxe->addChild('purpose'));
            }
        }
        if (0 < count($this->except)) {
            foreach($this->except as $except) {
                $except->xmlSerialize(true, $sxe->addChild('except'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}