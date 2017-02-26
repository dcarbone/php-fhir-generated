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
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREpisodeOfCare extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public $status = null;

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @var \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    public $statusHistory = array();

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $condition = array();

    /**
     * The patient that this EpisodeOfCare applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $referralRequest = array();

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $careManager = null;

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $team = array();

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $account = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'EpisodeOfCare';

    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @return \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @param \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory $statusHistory
     * @return $this
     */
    public function addStatusHistory($statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * The patient that this EpisodeOfCare applies to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient that this EpisodeOfCare applies to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReferralRequest()
    {
        return $this->referralRequest;
    }

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referralRequest
     * @return $this
     */
    public function addReferralRequest($referralRequest)
    {
        $this->referralRequest[] = $referralRequest;
        return $this;
    }

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCareManager()
    {
        return $this->careManager;
    }

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $careManager
     * @return $this
     */
    public function setCareManager($careManager)
    {
        $this->careManager = $careManager;
        return $this;
    }

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $team
     * @return $this
     */
    public function addTeam($team)
    {
        $this->team[] = $team;
        return $this;
    }

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $account
     * @return $this
     */
    public function addAccount($account)
    {
        $this->account[] = $account;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (0 < count($this->statusHistory)) {
            $json['statusHistory'] = [];
            foreach($this->statusHistory as $statusHistory) {
                $json['statusHistory'][] = json_encode($statusHistory);
            }
        }
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                $json['type'][] = json_encode($type);
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = json_encode($condition);
            }
        }
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->managingOrganization) $json['managingOrganization'] = json_encode($this->managingOrganization);
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (0 < count($this->referralRequest)) {
            $json['referralRequest'] = [];
            foreach($this->referralRequest as $referralRequest) {
                $json['referralRequest'][] = json_encode($referralRequest);
            }
        }
        if (null !== $this->careManager) $json['careManager'] = json_encode($this->careManager);
        if (0 < count($this->team)) {
            $json['team'] = [];
            foreach($this->team as $team) {
                $json['team'][] = json_encode($team);
            }
        }
        if (0 < count($this->account)) {
            $json['account'] = [];
            foreach($this->account as $account) {
                $json['account'][] = json_encode($account);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EpisodeOfCare xmlns="http://hl7.org/fhir"></EpisodeOfCare>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->statusHistory)) {
            foreach($this->statusHistory as $statusHistory) {
                $statusHistory->xmlSerialize(true, $sxe->addChild('statusHistory'));
            }
        }
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->referralRequest)) {
            foreach($this->referralRequest as $referralRequest) {
                $referralRequest->xmlSerialize(true, $sxe->addChild('referralRequest'));
            }
        }
        if (null !== $this->careManager) $this->careManager->xmlSerialize(true, $sxe->addChild('careManager'));
        if (0 < count($this->team)) {
            foreach($this->team as $team) {
                $team->xmlSerialize(true, $sxe->addChild('team'));
            }
        }
        if (0 < count($this->account)) {
            foreach($this->account as $account) {
                $account->xmlSerialize(true, $sxe->addChild('account'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}