<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The EligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an EligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREligibilityRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $servicedDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $servicedPeriod = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The Insurer who is target  of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverage = null;

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $businessArrangement = null;

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $benefitCategory = null;

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $benefitSubCategory = null;

    /**
     * A list of billable services for which an authorization prior to service delivery may be required by the payor.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREligibilityRequest\FHIREligibilityRequestAuthorization[]
     */
    public $authorization = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'EligibilityRequest';

    /**
     * The Response business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Patient Resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Patient Resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getServicedDate() {
        return $this->servicedDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $servicedDate
     * @return $this
     */
    public function setServicedDate($servicedDate) {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod() {
        return $this->servicedPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $servicedPeriod
     * @return $this
     */
    public function setServicedPeriod($servicedPeriod) {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date when this resource was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer() {
        return $this->enterer;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $enterer
     * @return $this
     */
    public function setEnterer($enterer) {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider) {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * The Insurer who is target  of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer() {
        return $this->insurer;
    }

    /**
     * The Insurer who is target  of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $insurer
     * @return $this
     */
    public function setInsurer($insurer) {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility() {
        return $this->facility;
    }

    /**
     * Facility where the services were provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $facility
     * @return $this
     */
    public function setFacility($facility) {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage() {
        return $this->coverage;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $coverage
     * @return $this
     */
    public function setCoverage($coverage) {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBusinessArrangement() {
        return $this->businessArrangement;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $businessArrangement
     * @return $this
     */
    public function setBusinessArrangement($businessArrangement) {
        $this->businessArrangement = $businessArrangement;
        return $this;
    }

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBenefitCategory() {
        return $this->benefitCategory;
    }

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $benefitCategory
     * @return $this
     */
    public function setBenefitCategory($benefitCategory) {
        $this->benefitCategory = $benefitCategory;
        return $this;
    }

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBenefitSubCategory() {
        return $this->benefitSubCategory;
    }

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $benefitSubCategory
     * @return $this
     */
    public function setBenefitSubCategory($benefitSubCategory) {
        $this->benefitSubCategory = $benefitSubCategory;
        return $this;
    }

    /**
     * A list of billable services for which an authorization prior to service delivery may be required by the payor.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREligibilityRequest\FHIREligibilityRequestAuthorization[]
     */
    public function getAuthorization() {
        return $this->authorization;
    }

    /**
     * A list of billable services for which an authorization prior to service delivery may be required by the payor.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREligibilityRequest\FHIREligibilityRequestAuthorization $authorization
     * @return $this
     */
    public function addAuthorization($authorization) {
        $this->authorization[] = $authorization;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['servicedDate'])) {
                $this->setServicedDate($data['servicedDate']);
            }
            if (isset($data['servicedPeriod'])) {
                $this->setServicedPeriod($data['servicedPeriod']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['insurer'])) {
                $this->setInsurer($data['insurer']);
            }
            if (isset($data['facility'])) {
                $this->setFacility($data['facility']);
            }
            if (isset($data['coverage'])) {
                $this->setCoverage($data['coverage']);
            }
            if (isset($data['businessArrangement'])) {
                $this->setBusinessArrangement($data['businessArrangement']);
            }
            if (isset($data['benefitCategory'])) {
                $this->setBenefitCategory($data['benefitCategory']);
            }
            if (isset($data['benefitSubCategory'])) {
                $this->setBenefitSubCategory($data['benefitSubCategory']);
            }
            if (isset($data['authorization'])) {
                if (is_array($data['authorization'])) {
                    foreach($data['authorization'] as $d) {
                        $this->addAuthorization($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"authorization" must be array of objects or null, '.gettype($data['authorization']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->servicedDate)) $json['servicedDate'] = $this->servicedDate;
        if (isset($this->servicedPeriod)) $json['servicedPeriod'] = $this->servicedPeriod;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->enterer)) $json['enterer'] = $this->enterer;
        if (isset($this->provider)) $json['provider'] = $this->provider;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->insurer)) $json['insurer'] = $this->insurer;
        if (isset($this->facility)) $json['facility'] = $this->facility;
        if (isset($this->coverage)) $json['coverage'] = $this->coverage;
        if (isset($this->businessArrangement)) $json['businessArrangement'] = $this->businessArrangement;
        if (isset($this->benefitCategory)) $json['benefitCategory'] = $this->benefitCategory;
        if (isset($this->benefitSubCategory)) $json['benefitSubCategory'] = $this->benefitSubCategory;
        if (0 < count($this->authorization)) {
            $json['authorization'] = [];
            foreach($this->authorization as $authorization) {
                if (null !== $authorization) $json['authorization'][] = $authorization;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EligibilityRequest xmlns="http://hl7.org/fhir"></EligibilityRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->servicedDate)) $this->servicedDate->xmlSerialize(true, $sxe->addChild('servicedDate'));
        if (isset($this->servicedPeriod)) $this->servicedPeriod->xmlSerialize(true, $sxe->addChild('servicedPeriod'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->enterer)) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (isset($this->provider)) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->insurer)) $this->insurer->xmlSerialize(true, $sxe->addChild('insurer'));
        if (isset($this->facility)) $this->facility->xmlSerialize(true, $sxe->addChild('facility'));
        if (isset($this->coverage)) $this->coverage->xmlSerialize(true, $sxe->addChild('coverage'));
        if (isset($this->businessArrangement)) $this->businessArrangement->xmlSerialize(true, $sxe->addChild('businessArrangement'));
        if (isset($this->benefitCategory)) $this->benefitCategory->xmlSerialize(true, $sxe->addChild('benefitCategory'));
        if (isset($this->benefitSubCategory)) $this->benefitSubCategory->xmlSerialize(true, $sxe->addChild('benefitSubCategory'));
        if (0 < count($this->authorization)) {
            foreach($this->authorization as $authorization) {
                $authorization->xmlSerialize(true, $sxe->addChild('authorization'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}