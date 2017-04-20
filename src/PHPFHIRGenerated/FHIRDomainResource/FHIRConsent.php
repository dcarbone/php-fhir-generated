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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConsentState
     */
    public $status = null;

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * When this  Consent was issued / created / indexed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $consentingParty = array();

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentActor[]
     */
    public $actor = array();

    /**
     * Actions controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = array();

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $organization = array();

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
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentPolicy[]
     */
    public $policy = array();

    /**
     * A referece to the specific computable policy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $policyRule = null;

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = array();

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $purpose = array();

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $dataPeriod = null;

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentData[]
     */
    public $data = array();

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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConsentState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current state of this consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConsentState $status
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
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getConsentingParty()
    {
        return $this->consentingParty;
    }

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $consentingParty
     * @return $this
     */
    public function addConsentingParty($consentingParty)
    {
        $this->consentingParty[] = $consentingParty;
        return $this;
    }

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentActor[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentActor $actor
     * @return $this
     */
    public function addActor($actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * Actions controlled by this consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Actions controlled by this consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
    public function addOrganization($organization)
    {
        $this->organization[] = $organization;
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
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentPolicy $policy
     * @return $this
     */
    public function addPolicy($policy)
    {
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * A referece to the specific computable policy.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }

    /**
     * A referece to the specific computable policy.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $policyRule
     * @return $this
     */
    public function setPolicyRule($policyRule)
    {
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
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
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $dataPeriod
     * @return $this
     */
    public function setDataPeriod($dataPeriod)
    {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentData[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConsent\FHIRConsentData $data
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
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
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (null !== $this->dateTime) $json['dateTime'] = json_encode($this->dateTime);
        if (0 < count($this->consentingParty)) {
            $json['consentingParty'] = [];
            foreach($this->consentingParty as $consentingParty) {
                $json['consentingParty'][] = json_encode($consentingParty);
            }
        }
        if (0 < count($this->actor)) {
            $json['actor'] = [];
            foreach($this->actor as $actor) {
                $json['actor'][] = json_encode($actor);
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = json_encode($action);
            }
        }
        if (0 < count($this->organization)) {
            $json['organization'] = [];
            foreach($this->organization as $organization) {
                $json['organization'][] = json_encode($organization);
            }
        }
        if (null !== $this->sourceAttachment) $json['sourceAttachment'] = json_encode($this->sourceAttachment);
        if (null !== $this->sourceIdentifier) $json['sourceIdentifier'] = json_encode($this->sourceIdentifier);
        if (null !== $this->sourceReference) $json['sourceReference'] = json_encode($this->sourceReference);
        if (0 < count($this->policy)) {
            $json['policy'] = [];
            foreach($this->policy as $policy) {
                $json['policy'][] = json_encode($policy);
            }
        }
        if (null !== $this->policyRule) $json['policyRule'] = json_encode($this->policyRule);
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                $json['securityLabel'][] = json_encode($securityLabel);
            }
        }
        if (0 < count($this->purpose)) {
            $json['purpose'] = [];
            foreach($this->purpose as $purpose) {
                $json['purpose'][] = json_encode($purpose);
            }
        }
        if (null !== $this->dataPeriod) $json['dataPeriod'] = json_encode($this->dataPeriod);
        if (0 < count($this->data)) {
            $json['data'] = [];
            foreach($this->data as $data) {
                $json['data'][] = json_encode($data);
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
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (0 < count($this->consentingParty)) {
            foreach($this->consentingParty as $consentingParty) {
                $consentingParty->xmlSerialize(true, $sxe->addChild('consentingParty'));
            }
        }
        if (0 < count($this->actor)) {
            foreach($this->actor as $actor) {
                $actor->xmlSerialize(true, $sxe->addChild('actor'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->organization)) {
            foreach($this->organization as $organization) {
                $organization->xmlSerialize(true, $sxe->addChild('organization'));
            }
        }
        if (null !== $this->sourceAttachment) $this->sourceAttachment->xmlSerialize(true, $sxe->addChild('sourceAttachment'));
        if (null !== $this->sourceIdentifier) $this->sourceIdentifier->xmlSerialize(true, $sxe->addChild('sourceIdentifier'));
        if (null !== $this->sourceReference) $this->sourceReference->xmlSerialize(true, $sxe->addChild('sourceReference'));
        if (0 < count($this->policy)) {
            foreach($this->policy as $policy) {
                $policy->xmlSerialize(true, $sxe->addChild('policy'));
            }
        }
        if (null !== $this->policyRule) $this->policyRule->xmlSerialize(true, $sxe->addChild('policyRule'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->purpose)) {
            foreach($this->purpose as $purpose) {
                $purpose->xmlSerialize(true, $sxe->addChild('purpose'));
            }
        }
        if (null !== $this->dataPeriod) $this->dataPeriod->xmlSerialize(true, $sxe->addChild('dataPeriod'));
        if (0 < count($this->data)) {
            foreach($this->data as $data) {
                $data->xmlSerialize(true, $sxe->addChild('data'));
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