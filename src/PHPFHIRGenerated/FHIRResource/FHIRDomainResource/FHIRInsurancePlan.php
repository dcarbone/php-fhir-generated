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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRInsurancePlan
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRInsurancePlan extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'InsurancePlan';

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $administeredBy = null;

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $alias = null;

    /**
     * The contact for the health insurance product for a certain purpose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact
     */
    public $contact = null;

    /**
     * Details about the coverage offered by the insurance product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage
     */
    public $coverage = null;

    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverageArea = null;

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Official name of the health insurance product as designated by the owner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Reference to the network included in the health insurance product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $network = null;

    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $ownedBy = null;

    /**
     * The period of time that the health insurance product is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Details about an insurance plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan
     */
    public $plan = null;

    /**
     * The current state of the health insurance product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The kind of health insurance product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRInsurancePlan Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['administeredBy'])) {
                $this->setAdministeredBy($data['administeredBy']);
            }
            if (isset($data['alias'])) {
                $this->setAlias($data['alias']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['coverage'])) {
                $this->setCoverage($data['coverage']);
            }
            if (isset($data['coverageArea'])) {
                $this->setCoverageArea($data['coverageArea']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['ownedBy'])) {
                $this->setOwnedBy($data['ownedBy']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['plan'])) {
                $this->setPlan($data['plan']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRInsurancePlan::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAdministeredBy(FHIRReference $administeredBy = null)
    {
        if (null === $administeredBy) {
            return $this; 
        }
        $this->administeredBy = $administeredBy;
        return $this;
    }

    /**
     * An organization which administer other services such as underwriting, customer service and/or claims processing on behalf of the health insurance product owner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAdministeredBy()
    {
        return $this->administeredBy;
    }


    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAlias($alias)
    {
        if (null === $alias) {
            return $this; 
        }
        if (is_scalar($alias)) {
            $alias = new FHIRString($alias);
        }
        if (!($alias instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInsurancePlan::setAlias - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($alias)
            ));
        }
        $this->alias = $alias;
        return $this;
    }

    /**
     * A list of alternate names that the product is known as, or was known as in the past.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAlias()
    {
        return $this->alias;
    }


    /**
     * The contact for the health insurance product for a certain purpose.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact
     * @return $this
     */
    public function setContact(FHIRInsurancePlanContact $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * The contact for the health insurance product for a certain purpose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * Details about the coverage offered by the insurance product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage
     * @return $this
     */
    public function setCoverage(FHIRInsurancePlanCoverage $coverage = null)
    {
        if (null === $coverage) {
            return $this; 
        }
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Details about the coverage offered by the insurance product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage
     */
    public function getCoverage()
    {
        return $this->coverage;
    }


    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCoverageArea(FHIRReference $coverageArea = null)
    {
        if (null === $coverageArea) {
            return $this; 
        }
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * The geographic region in which a health insurance product's benefits apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }


    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEndpoint(FHIRReference $endpoint = null)
    {
        if (null === $endpoint) {
            return $this; 
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * The technical endpoints providing access to services operated for the health insurance product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance product which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Official name of the health insurance product as designated by the owner.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInsurancePlan::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Official name of the health insurance product as designated by the owner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Reference to the network included in the health insurance product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setNetwork(FHIRReference $network = null)
    {
        if (null === $network) {
            return $this; 
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Reference to the network included in the health insurance product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOwnedBy(FHIRReference $ownedBy = null)
    {
        if (null === $ownedBy) {
            return $this; 
        }
        $this->ownedBy = $ownedBy;
        return $this;
    }

    /**
     * The entity that is providing  the health insurance product and underwriting the risk.  This is typically an insurance carriers, other third-party payers, or health plan sponsors comonly referred to as 'payers'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwnedBy()
    {
        return $this->ownedBy;
    }


    /**
     * The period of time that the health insurance product is available.
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
     * The period of time that the health insurance product is available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Details about an insurance plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan
     * @return $this
     */
    public function setPlan(FHIRInsurancePlanPlan $plan = null)
    {
        if (null === $plan) {
            return $this; 
        }
        $this->plan = $plan;
        return $this;
    }

    /**
     * Details about an insurance plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan
     */
    public function getPlan()
    {
        return $this->plan;
    }


    /**
     * The current state of the health insurance product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInsurancePlan::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the health insurance product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The kind of health insurance product.
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
     * The kind of health insurance product.
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
        if (null !== ($v = $this->getAdministeredBy())) {
            $a['administeredBy'] = $v;
        }
        if (null !== ($v = $this->getAlias())) {
            $a['alias'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a['coverage'] = $v;
        }
        if (null !== ($v = $this->getCoverageArea())) {
            $a['coverageArea'] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getOwnedBy())) {
            $a['ownedBy'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPlan())) {
            $a['plan'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<InsurancePlan xmlns="http://hl7.org/fhir"></InsurancePlan>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}