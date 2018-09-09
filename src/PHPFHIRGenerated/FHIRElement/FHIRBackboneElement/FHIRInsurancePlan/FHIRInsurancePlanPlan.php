<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 *
 * Class FHIRInsurancePlanPlan
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan
 */
class FHIRInsurancePlanPlan extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'InsurancePlan.Plan';

    /**
     * The geographic region in which a health insurance plan's benefits apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverageArea = null;

    /**
     * Overall costs associated with the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost
     */
    public $generalCost = null;

    /**
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Reference to the network that providing the type of coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $network = null;

    /**
     * Costs associated with the coverage provided by the product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost
     */
    public $specificCost = null;

    /**
     * Type of plan. For example, "Platinum" or "High Deductable".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRInsurancePlanPlan Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['coverageArea'])) {
                $this->setCoverageArea($data['coverageArea']);
            }
            if (isset($data['generalCost'])) {
                $this->setGeneralCost($data['generalCost']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['specificCost'])) {
                $this->setSpecificCost($data['specificCost']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The geographic region in which a health insurance plan's benefits apply.
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
     * The geographic region in which a health insurance plan's benefits apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }


    /**
     * Overall costs associated with the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost
     * @return $this
     */
    public function setGeneralCost(FHIRInsurancePlanGeneralCost $generalCost = null)
    {
        if (null === $generalCost) {
            return $this; 
        }
        $this->generalCost = $generalCost;
        return $this;
    }

    /**
     * Overall costs associated with the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost
     */
    public function getGeneralCost()
    {
        return $this->generalCost;
    }


    /**
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this health insurance plan which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Reference to the network that providing the type of coverage.
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
     * Reference to the network that providing the type of coverage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * Costs associated with the coverage provided by the product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost
     * @return $this
     */
    public function setSpecificCost(FHIRInsurancePlanSpecificCost $specificCost = null)
    {
        if (null === $specificCost) {
            return $this; 
        }
        $this->specificCost = $specificCost;
        return $this;
    }

    /**
     * Costs associated with the coverage provided by the product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost
     */
    public function getSpecificCost()
    {
        return $this->specificCost;
    }


    /**
     * Type of plan. For example, "Platinum" or "High Deductable".
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
     * Type of plan. For example, "Platinum" or "High Deductable".
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
        if (null !== ($v = $this->getCoverageArea())) {
            $a['coverageArea'] = $v;
        }
        if (null !== ($v = $this->getGeneralCost())) {
            $a['generalCost'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getSpecificCost())) {
            $a['specificCost'] = $v;
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
            $sxe = new \SimpleXMLElement('<InsurancePlanPlan xmlns="http://hl7.org/fhir"></InsurancePlanPlan>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}