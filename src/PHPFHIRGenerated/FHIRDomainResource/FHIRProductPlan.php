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
 * Details of a Health Insurance product/plan provided by an organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProductPlan extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for the product/plan that is used to identify it across multiple disparate systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Whether the organization's record is still in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The type of product/plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = [];

    /**
     * Official name of the product/plan (as designated by the owner).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A list of alternate names that the product/plan is known as, or was known as in the past.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $alias = [];

    /**
     * The period of time that the product is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Owner of the product/plan (typically a payer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $ownedBy = null;

    /**
     * Administrator of the product/plan (e.g. self-insured employer plan administered by a TPA).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $administeredBy = null;

    /**
     * An address for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = [];

    /**
     * The geographic region in which this product/plan is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverageArea = null;

    /**
     * Contact for the product/plan for a certain purpose.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanContact[]
     */
    public $contact = [];

    /**
     * Details about the coverage offered by the insurance product.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanCoverage[]
     */
    public $coverage = [];

    /**
     * Details about an insurance plan.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanPlan[]
     */
    public $plan = [];

    /**
     * Technical endpoints providing access to services operated for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $endpoint = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ProductPlan';

    /**
     * Identifier for the product/plan that is used to identify it across multiple disparate systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifier for the product/plan that is used to identify it across multiple disparate systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Whether the organization's record is still in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Whether the organization's record is still in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of product/plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of product/plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Official name of the product/plan (as designated by the owner).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Official name of the product/plan (as designated by the owner).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * A list of alternate names that the product/plan is known as, or was known as in the past.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * A list of alternate names that the product/plan is known as, or was known as in the past.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $alias
     * @return $this
     */
    public function addAlias($alias) {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * The period of time that the product is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The period of time that the product is available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Owner of the product/plan (typically a payer).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwnedBy() {
        return $this->ownedBy;
    }

    /**
     * Owner of the product/plan (typically a payer).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $ownedBy
     * @return $this
     */
    public function setOwnedBy($ownedBy) {
        $this->ownedBy = $ownedBy;
        return $this;
    }

    /**
     * Administrator of the product/plan (e.g. self-insured employer plan administered by a TPA).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAdministeredBy() {
        return $this->administeredBy;
    }

    /**
     * Administrator of the product/plan (e.g. self-insured employer plan administered by a TPA).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $administeredBy
     * @return $this
     */
    public function setAdministeredBy($administeredBy) {
        $this->administeredBy = $administeredBy;
        return $this;
    }

    /**
     * An address for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * An address for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function addAddress($address) {
        $this->address[] = $address;
        return $this;
    }

    /**
     * The geographic region in which this product/plan is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverageArea() {
        return $this->coverageArea;
    }

    /**
     * The geographic region in which this product/plan is available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $coverageArea
     * @return $this
     */
    public function setCoverageArea($coverageArea) {
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * Contact for the product/plan for a certain purpose.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanContact[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contact for the product/plan for a certain purpose.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanContact $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details about the coverage offered by the insurance product.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanCoverage[]
     */
    public function getCoverage() {
        return $this->coverage;
    }

    /**
     * Details about the coverage offered by the insurance product.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanCoverage $coverage
     * @return $this
     */
    public function addCoverage($coverage) {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Details about an insurance plan.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanPlan[]
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * Details about an insurance plan.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProductPlan\FHIRProductPlanPlan $plan
     * @return $this
     */
    public function addPlan($plan) {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Technical endpoints providing access to services operated for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint) {
        $this->endpoint[] = $endpoint;
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
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.');
                }
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['alias'])) {
                if (is_array($data['alias'])) {
                    foreach($data['alias'] as $d) {
                        $this->addAlias($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"alias" must be array of objects or null, '.gettype($data['alias']).' seen.');
                }
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['ownedBy'])) {
                $this->setOwnedBy($data['ownedBy']);
            }
            if (isset($data['administeredBy'])) {
                $this->setAdministeredBy($data['administeredBy']);
            }
            if (isset($data['address'])) {
                if (is_array($data['address'])) {
                    foreach($data['address'] as $d) {
                        $this->addAddress($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"address" must be array of objects or null, '.gettype($data['address']).' seen.');
                }
            }
            if (isset($data['coverageArea'])) {
                $this->setCoverageArea($data['coverageArea']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach($data['contact'] as $d) {
                        $this->addContact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.');
                }
            }
            if (isset($data['coverage'])) {
                if (is_array($data['coverage'])) {
                    foreach($data['coverage'] as $d) {
                        $this->addCoverage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"coverage" must be array of objects or null, '.gettype($data['coverage']).' seen.');
                }
            }
            if (isset($data['plan'])) {
                if (is_array($data['plan'])) {
                    foreach($data['plan'] as $d) {
                        $this->addPlan($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"plan" must be array of objects or null, '.gettype($data['plan']).' seen.');
                }
            }
            if (isset($data['endpoint'])) {
                if (is_array($data['endpoint'])) {
                    foreach($data['endpoint'] as $d) {
                        $this->addEndpoint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endpoint" must be array of objects or null, '.gettype($data['endpoint']).' seen.');
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
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (isset($this->name)) $json['name'] = $this->name;
        if (0 < count($this->alias)) {
            $json['alias'] = [];
            foreach($this->alias as $alias) {
                if (null !== $alias) $json['alias'][] = $alias;
            }
        }
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->ownedBy)) $json['ownedBy'] = $this->ownedBy;
        if (isset($this->administeredBy)) $json['administeredBy'] = $this->administeredBy;
        if (0 < count($this->address)) {
            $json['address'] = [];
            foreach($this->address as $address) {
                if (null !== $address) $json['address'][] = $address;
            }
        }
        if (isset($this->coverageArea)) $json['coverageArea'] = $this->coverageArea;
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->coverage)) {
            $json['coverage'] = [];
            foreach($this->coverage as $coverage) {
                if (null !== $coverage) $json['coverage'][] = $coverage;
            }
        }
        if (0 < count($this->plan)) {
            $json['plan'] = [];
            foreach($this->plan as $plan) {
                if (null !== $plan) $json['plan'][] = $plan;
            }
        }
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                if (null !== $endpoint) $json['endpoint'][] = $endpoint;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProductPlan xmlns="http://hl7.org/fhir"></ProductPlan>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (0 < count($this->alias)) {
            foreach($this->alias as $alias) {
                $alias->xmlSerialize(true, $sxe->addChild('alias'));
            }
        }
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->ownedBy)) $this->ownedBy->xmlSerialize(true, $sxe->addChild('ownedBy'));
        if (isset($this->administeredBy)) $this->administeredBy->xmlSerialize(true, $sxe->addChild('administeredBy'));
        if (0 < count($this->address)) {
            foreach($this->address as $address) {
                $address->xmlSerialize(true, $sxe->addChild('address'));
            }
        }
        if (isset($this->coverageArea)) $this->coverageArea->xmlSerialize(true, $sxe->addChild('coverageArea'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->coverage)) {
            foreach($this->coverage as $coverage) {
                $coverage->xmlSerialize(true, $sxe->addChild('coverage'));
            }
        }
        if (0 < count($this->plan)) {
            foreach($this->plan as $plan) {
                $plan->xmlSerialize(true, $sxe->addChild('plan'));
            }
        }
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}