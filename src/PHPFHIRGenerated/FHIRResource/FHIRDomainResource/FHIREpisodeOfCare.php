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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREpisodeOfCare
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIREpisodeOfCare extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'EpisodeOfCare';

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $account = null;

    /**
     * The practitioner that is the care manager/care coordinator for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $careManager = null;

    /**
     * The list of diagnosis relevant to this episode of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis
     */
    public $diagnosis = null;

    /**
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * The patient who is the focus of this episode of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referralRequest = null;

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public $status = null;

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory
     */
    public $statusHistory = null;

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $team = null;

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIREpisodeOfCare Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['account'])) {
                $this->setAccount($data['account']);
            }
            if (isset($data['careManager'])) {
                $this->setCareManager($data['careManager']);
            }
            if (isset($data['diagnosis'])) {
                $this->setDiagnosis($data['diagnosis']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['managingOrganization'])) {
                $this->setManagingOrganization($data['managingOrganization']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['referralRequest'])) {
                $this->setReferralRequest($data['referralRequest']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusHistory'])) {
                $this->setStatusHistory($data['statusHistory']);
            }
            if (isset($data['team'])) {
                $this->setTeam($data['team']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAccount(FHIRReference $account = null)
    {
        if (null === $account) {
            return $this; 
        }
        $this->account = $account;
        return $this;
    }

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAccount()
    {
        return $this->account;
    }


    /**
     * The practitioner that is the care manager/care coordinator for this patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCareManager(FHIRReference $careManager = null)
    {
        if (null === $careManager) {
            return $this; 
        }
        $this->careManager = $careManager;
        return $this;
    }

    /**
     * The practitioner that is the care manager/care coordinator for this patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCareManager()
    {
        return $this->careManager;
    }


    /**
     * The list of diagnosis relevant to this episode of care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis
     * @return $this
     */
    public function setDiagnosis(FHIREpisodeOfCareDiagnosis $diagnosis = null)
    {
        if (null === $diagnosis) {
            return $this; 
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * The list of diagnosis relevant to this episode of care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }


    /**
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }


    /**
     * The patient who is the focus of this episode of care.
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
     * The patient who is the focus of this episode of care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferralRequest(FHIRReference $referralRequest = null)
    {
        if (null === $referralRequest) {
            return $this; 
        }
        $this->referralRequest = $referralRequest;
        return $this;
    }

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferralRequest()
    {
        return $this->referralRequest;
    }


    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREpisodeOfCareStatus($status);
        }
        if (!($status instanceof FHIREpisodeOfCareStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREpisodeOfCare::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory
     * @return $this
     */
    public function setStatusHistory(FHIREpisodeOfCareStatusHistory $statusHistory = null)
    {
        if (null === $statusHistory) {
            return $this; 
        }
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }


    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTeam(FHIRReference $team = null)
    {
        if (null === $team) {
            return $this; 
        }
        $this->team = $team;
        return $this;
    }

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTeam()
    {
        return $this->team;
    }


    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getAccount())) {
            $a['account'] = $v;
        }
        if (null !== ($v = $this->getCareManager())) {
            $a['careManager'] = $v;
        }
        if (null !== ($v = $this->getDiagnosis())) {
            $a['diagnosis'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getReferralRequest())) {
            $a['referralRequest'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusHistory())) {
            $a['statusHistory'] = $v;
        }
        if (null !== ($v = $this->getTeam())) {
            $a['team'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<EpisodeOfCare xmlns="http://hl7.org/fhir"></EpisodeOfCare>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}