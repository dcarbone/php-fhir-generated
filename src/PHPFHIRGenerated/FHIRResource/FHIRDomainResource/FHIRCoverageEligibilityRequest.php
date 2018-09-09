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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInformation;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCoverageEligibilityRequest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCoverageEligibilityRequest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CoverageEligibilityRequest';

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
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Insurance policies which the patient has advised may be applicable for paying for health services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance
     */
    public $insurance = null;

    /**
     * The Insurer who is target  of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * A list of service types or billable services for which bebefit details and/or an authorization prior to service delivery may be required by the payor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem
     */
    public $item = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The provider who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * Specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for th patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose
     */
    public $purpose = null;

    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $servicedDate = null;

    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $servicedPeriod = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInformation
     */
    public $supportingInformation = null;

    /**
     * FHIRCoverageEligibilityRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['facility'])) {
                $this->setFacility($data['facility']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['insurance'])) {
                $this->setInsurance($data['insurance']);
            }
            if (isset($data['insurer'])) {
                $this->setInsurer($data['insurer']);
            }
            if (isset($data['item'])) {
                $this->setItem($data['item']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['servicedDate'])) {
                $this->setServicedDate($data['servicedDate']);
            }
            if (isset($data['servicedPeriod'])) {
                $this->setServicedPeriod($data['servicedPeriod']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['supportingInformation'])) {
                $this->setSupportingInformation($data['supportingInformation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date when this resource was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequest::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        if (null === $enterer) {
            return $this; 
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }


    /**
     * Facility where the services were provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFacility(FHIRReference $facility = null)
    {
        if (null === $facility) {
            return $this; 
        }
        $this->facility = $facility;
        return $this;
    }

    /**
     * Facility where the services were provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }


    /**
     * The Response business identifier.
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
     * The Response business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Insurance policies which the patient has advised may be applicable for paying for health services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance
     * @return $this
     */
    public function setInsurance(FHIRCoverageEligibilityRequestInsurance $insurance = null)
    {
        if (null === $insurance) {
            return $this; 
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Insurance policies which the patient has advised may be applicable for paying for health services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }


    /**
     * The Insurer who is target  of the request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        if (null === $insurer) {
            return $this; 
        }
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The Insurer who is target  of the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }


    /**
     * A list of service types or billable services for which bebefit details and/or an authorization prior to service delivery may be required by the payor.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem
     * @return $this
     */
    public function setItem(FHIRCoverageEligibilityRequestItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item = $item;
        return $this;
    }

    /**
     * A list of service types or billable services for which bebefit details and/or an authorization prior to service delivery may be required by the payor.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem
     */
    public function getItem()
    {
        return $this->item;
    }


    /**
     * Patient Resource.
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
     * Patient Resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        if (null === $priority) {
            return $this; 
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The provider who is responsible for the services rendered to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProvider(FHIRReference $provider = null)
    {
        if (null === $provider) {
            return $this; 
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * The provider who is responsible for the services rendered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }


    /**
     * Specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for th patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        if (null === $purpose) {
            return $this; 
        }
        if (is_scalar($purpose)) {
            $purpose = new FHIREligibilityRequestPurpose($purpose);
        }
        if (!($purpose instanceof FHIREligibilityRequestPurpose)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequest::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Specify whether requesting: prior authorization requirements for some service categories or billing codes; benefits for coverages specified or discovered; discovery and return of coverages for th patient; and/or validation that the specified coverage is in-force at the date/period specified or 'now' if not specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setServicedDate($servicedDate)
    {
        if (null === $servicedDate) {
            return $this; 
        }
        if (is_scalar($servicedDate)) {
            $servicedDate = new FHIRDate($servicedDate);
        }
        if (!($servicedDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequest::setServicedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($servicedDate)
            ));
        }
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }


    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setServicedPeriod(FHIRPeriod $servicedPeriod = null)
    {
        if (null === $servicedPeriod) {
            return $this; 
        }
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * The date or dates when the enclosed suite of services were performed or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFinancialResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInformation
     * @return $this
     */
    public function setSupportingInformation(FHIRCoverageEligibilityRequestSupportingInformation $supportingInformation = null)
    {
        if (null === $supportingInformation) {
            return $this; 
        }
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues. Often there are mutiple jurisdiction specific valuesets which are required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInformation
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
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a['enterer'] = $v;
        }
        if (null !== ($v = $this->getFacility())) {
            $a['facility'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a['insurer'] = $v;
        }
        if (null !== ($v = $this->getItem())) {
            $a['item'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getServicedDate())) {
            $a['servicedDate'] = $v;
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $a['servicedPeriod'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<CoverageEligibilityRequest xmlns="http://hl7.org/fhir"></CoverageEligibilityRequest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}