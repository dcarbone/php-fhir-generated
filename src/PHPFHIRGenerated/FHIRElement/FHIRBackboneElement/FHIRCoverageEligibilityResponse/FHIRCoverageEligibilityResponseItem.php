<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 *
 * Class FHIRCoverageEligibilityResponseItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse
 */
class FHIRCoverageEligibilityResponseItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CoverageEligibilityResponse.Item';

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $authorizationRequired = null;

    /**
     * Codes or comments regarding information or actions assciated with the pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $authorizationSupporting = null;

    /**
     * A descriptive document location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $authorizationUrl = null;

    /**
     * Benefits used to date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     */
    public $benefit = null;

    /**
     * A code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $billcode = null;

    /**
     * High-level Dental, Vision, Medical, Pharmacy, Rehab etc. and detailed types of services: Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but excludes Ortho, Implants and Cosmetic services'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excluded = null;

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modifier = null;

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Network designation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $network = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $term = null;

    /**
     * Unit designation: individual or family.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unit = null;

    /**
     * FHIRCoverageEligibilityResponseItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authorizationRequired'])) {
                $this->setAuthorizationRequired($data['authorizationRequired']);
            }
            if (isset($data['authorizationSupporting'])) {
                $this->setAuthorizationSupporting($data['authorizationSupporting']);
            }
            if (isset($data['authorizationUrl'])) {
                $this->setAuthorizationUrl($data['authorizationUrl']);
            }
            if (isset($data['benefit'])) {
                $this->setBenefit($data['benefit']);
            }
            if (isset($data['billcode'])) {
                $this->setBillcode($data['billcode']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['excluded'])) {
                $this->setExcluded($data['excluded']);
            }
            if (isset($data['modifier'])) {
                $this->setModifier($data['modifier']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['term'])) {
                $this->setTerm($data['term']);
            }
            if (isset($data['unit'])) {
                $this->setUnit($data['unit']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAuthorizationRequired($authorizationRequired)
    {
        if (null === $authorizationRequired) {
            return $this; 
        }
        if (is_scalar($authorizationRequired)) {
            $authorizationRequired = new FHIRBoolean($authorizationRequired);
        }
        if (!($authorizationRequired instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseItem::setAuthorizationRequired - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($authorizationRequired)
            ));
        }
        $this->authorizationRequired = $authorizationRequired;
        return $this;
    }

    /**
     * A boolean flag indicating whether a prior authorization or pre-authorization is required prior to actual service delivery.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAuthorizationRequired()
    {
        return $this->authorizationRequired;
    }


    /**
     * Codes or comments regarding information or actions assciated with the pre-authorization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAuthorizationSupporting(FHIRCodeableConcept $authorizationSupporting = null)
    {
        if (null === $authorizationSupporting) {
            return $this; 
        }
        $this->authorizationSupporting = $authorizationSupporting;
        return $this;
    }

    /**
     * Codes or comments regarding information or actions assciated with the pre-authorization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAuthorizationSupporting()
    {
        return $this->authorizationSupporting;
    }


    /**
     * A descriptive document location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        if (null === $authorizationUrl) {
            return $this; 
        }
        if (is_scalar($authorizationUrl)) {
            $authorizationUrl = new FHIRUri($authorizationUrl);
        }
        if (!($authorizationUrl instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseItem::setAuthorizationUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($authorizationUrl)
            ));
        }
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }

    /**
     * A descriptive document location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }


    /**
     * Benefits used to date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     * @return $this
     */
    public function setBenefit(FHIRCoverageEligibilityResponseBenefit $benefit = null)
    {
        if (null === $benefit) {
            return $this; 
        }
        $this->benefit = $benefit;
        return $this;
    }

    /**
     * Benefits used to date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     */
    public function getBenefit()
    {
        return $this->benefit;
    }


    /**
     * A code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBillcode(FHIRCodeableConcept $billcode = null)
    {
        if (null === $billcode) {
            return $this; 
        }
        $this->billcode = $billcode;
        return $this;
    }

    /**
     * A code to indicate the Professional Service or Product supplied (eg. CTP, HCPCS,USCLS,ICD10, NCPDP,DIN,ACHI,CCI).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBillcode()
    {
        return $this->billcode;
    }


    /**
     * High-level Dental, Vision, Medical, Pharmacy, Rehab etc. and detailed types of services: Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
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
     * High-level Dental, Vision, Medical, Pharmacy, Rehab etc. and detailed types of services: Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but excludes Ortho, Implants and Cosmetic services'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseItem::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but excludes Ortho, Implants and Cosmetic services'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExcluded($excluded)
    {
        if (null === $excluded) {
            return $this; 
        }
        if (is_scalar($excluded)) {
            $excluded = new FHIRBoolean($excluded);
        }
        if (!($excluded instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseItem::setExcluded - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($excluded)
            ));
        }
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcluded()
    {
        return $this->excluded;
    }


    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setModifier(FHIRCodeableConcept $modifier = null)
    {
        if (null === $modifier) {
            return $this; 
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Item typification or modifiers codes, eg for Oral whether the treatment is cosmetic or associated with TMJ, or for medical whether the treatment was outside the clinic or out of office hours.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModifier()
    {
        return $this->modifier;
    }


    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
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
                'FHIRCoverageEligibilityResponseItem::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Network designation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNetwork(FHIRCodeableConcept $network = null)
    {
        if (null === $network) {
            return $this; 
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Network designation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * The practitioner who is responsible for the services rendered to the patient.
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
     * The practitioner who is responsible for the services rendered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }


    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTerm(FHIRCodeableConcept $term = null)
    {
        if (null === $term) {
            return $this; 
        }
        $this->term = $term;
        return $this;
    }

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual visits'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTerm()
    {
        return $this->term;
    }


    /**
     * Unit designation: individual or family.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        if (null === $unit) {
            return $this; 
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * Unit designation: individual or family.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
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
        if (null !== ($v = $this->getAuthorizationRequired())) {
            $a['authorizationRequired'] = $v;
        }
        if (null !== ($v = $this->getAuthorizationSupporting())) {
            $a['authorizationSupporting'] = $v;
        }
        if (null !== ($v = $this->getAuthorizationUrl())) {
            $a['authorizationUrl'] = $v;
        }
        if (null !== ($v = $this->getBenefit())) {
            $a['benefit'] = $v;
        }
        if (null !== ($v = $this->getBillcode())) {
            $a['billcode'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExcluded())) {
            $a['excluded'] = $v;
        }
        if (null !== ($v = $this->getModifier())) {
            $a['modifier'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getTerm())) {
            $a['term'] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a['unit'] = $v;
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
            $sxe = new \SimpleXMLElement('<CoverageEligibilityResponseItem xmlns="http://hl7.org/fhir"></CoverageEligibilityResponseItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}