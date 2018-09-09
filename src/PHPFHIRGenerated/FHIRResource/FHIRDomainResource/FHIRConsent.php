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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIREventStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a healthcare consumer’s  choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRConsent
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRConsent extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Consent';

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * When this  Consent was issued / created / indexed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy
     */
    public $policy = null;

    /**
     * A reference to the specific base computable regulation or policy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $policyRule = null;

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    public $provision = null;

    /**
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research.  This list is now extensible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $scope = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $sourceAttachment = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $sourceIdentifier = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sourceReference = null;

    /**
     * Indicates the current state of this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
     */
    public $verification = null;

    /**
     * FHIRConsent Constructor
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
            if (isset($data['dateTime'])) {
                $this->setDateTime($data['dateTime']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['policy'])) {
                $this->setPolicy($data['policy']);
            }
            if (isset($data['policyRule'])) {
                $this->setPolicyRule($data['policyRule']);
            }
            if (isset($data['provision'])) {
                $this->setProvision($data['provision']);
            }
            if (isset($data['scope'])) {
                $this->setScope($data['scope']);
            }
            if (isset($data['sourceAttachment'])) {
                $this->setSourceAttachment($data['sourceAttachment']);
            }
            if (isset($data['sourceIdentifier'])) {
                $this->setSourceIdentifier($data['sourceIdentifier']);
            }
            if (isset($data['sourceReference'])) {
                $this->setSourceReference($data['sourceReference']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['verification'])) {
                $this->setVerification($data['verification']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
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
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * When this  Consent was issued / created / indexed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        if (null === $dateTime) {
            return $this; 
        }
        if (is_scalar($dateTime)) {
            $dateTime = new FHIRDateTime($dateTime);
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::setDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($dateTime)
            ));
        }
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * When this  Consent was issued / created / indexed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }


    /**
     * Unique identifier for this copy of the Consent Statement.
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
     * Unique identifier for this copy of the Consent Statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * The patient/healthcare consumer to whom this consent applies.
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
     * The patient/healthcare consumer to whom this consent applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
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
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy
     * @return $this
     */
    public function setPolicy(FHIRConsentPolicy $policy = null)
    {
        if (null === $policy) {
            return $this; 
        }
        $this->policy = $policy;
        return $this;
    }

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy
     */
    public function getPolicy()
    {
        return $this->policy;
    }


    /**
     * A reference to the specific base computable regulation or policy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPolicyRule(FHIRCodeableConcept $policyRule = null)
    {
        if (null === $policyRule) {
            return $this; 
        }
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * A reference to the specific base computable regulation or policy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }


    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     * @return $this
     */
    public function setProvision(FHIRConsentProvision $provision = null)
    {
        if (null === $provision) {
            return $this; 
        }
        $this->provision = $provision;
        return $this;
    }

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    public function getProvision()
    {
        return $this->provision;
    }


    /**
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research.  This list is now extensible.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        if (null === $scope) {
            return $this; 
        }
        $this->scope = $scope;
        return $this;
    }

    /**
     * A selector of the type of consent being presented: ADR, Privacy, Treatment, Research.  This list is now extensible.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }


    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setSourceAttachment(FHIRAttachment $sourceAttachment = null)
    {
        if (null === $sourceAttachment) {
            return $this; 
        }
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }


    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setSourceIdentifier(FHIRIdentifier $sourceIdentifier = null)
    {
        if (null === $sourceIdentifier) {
            return $this; 
        }
        $this->sourceIdentifier = $sourceIdentifier;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }


    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSourceReference(FHIRReference $sourceReference = null)
    {
        if (null === $sourceReference) {
            return $this; 
        }
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }


    /**
     * Indicates the current state of this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREventStatus($status);
        }
        if (!($status instanceof FHIREventStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREventStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the current state of this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
     * @return $this
     */
    public function setVerification(FHIRConsentVerification $verification = null)
    {
        if (null === $verification) {
            return $this; 
        }
        $this->verification = $verification;
        return $this;
    }

    /**
     * Whether a treatment instruction (e.g. artificial respiration yes or no) was verified with the patient, his/her family or another authorized person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification
     */
    public function getVerification()
    {
        return $this->verification;
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
        if (null !== ($v = $this->getDateTime())) {
            $a['dateTime'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPolicy())) {
            $a['policy'] = $v;
        }
        if (null !== ($v = $this->getPolicyRule())) {
            $a['policyRule'] = $v;
        }
        if (null !== ($v = $this->getProvision())) {
            $a['provision'] = $v;
        }
        if (null !== ($v = $this->getScope())) {
            $a['scope'] = $v;
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $a['sourceAttachment'] = $v;
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            $a['sourceIdentifier'] = $v;
        }
        if (null !== ($v = $this->getSourceReference())) {
            $a['sourceReference'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getVerification())) {
            $a['verification'] = $v;
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
            $sxe = new \SimpleXMLElement('<Consent xmlns="http://hl7.org/fhir"></Consent>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}