<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent;

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
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRConsentProvisionType;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;

/**
 * A record of a healthcare consumer’s  choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 *
 * Class FHIRConsentProvision
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentProvision extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Consent.Provision';

    /**
     * Actions controlled by this Rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $action = null;

    /**
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor
     */
    public $actor = null;

    /**
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $class = null;

    /**
     * If this code is found in an instance, then the rule applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The resources controlled by this rule if specific resources are referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData
     */
    public $data = null;

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $dataPeriod = null;

    /**
     * The timeframe in this rule is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Rules which provide exceptions to the base rule or subrules.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    public $provision = null;

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $purpose = null;

    /**
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $securityLabel = null;

    /**
     * Action  to take - permit or deny - when the rule conditions are met.  Not permitted in root rule, required in all nested rules.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConsentProvisionType
     */
    public $type = null;

    /**
     * FHIRConsentProvision Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['action'])) {
                $this->setAction($data['action']);
            }
            if (isset($data['actor'])) {
                $this->setActor($data['actor']);
            }
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['data'])) {
                $this->setData($data['data']);
            }
            if (isset($data['dataPeriod'])) {
                $this->setDataPeriod($data['dataPeriod']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['provision'])) {
                $this->setProvision($data['provision']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['securityLabel'])) {
                $this->setSecurityLabel($data['securityLabel']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Actions controlled by this Rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAction(FHIRCodeableConcept $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action = $action;
        return $this;
    }

    /**
     * Actions controlled by this Rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAction()
    {
        return $this->action;
    }


    /**
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor
     * @return $this
     */
    public function setActor(FHIRConsentActor $actor = null)
    {
        if (null === $actor) {
            return $this; 
        }
        $this->actor = $actor;
        return $this;
    }

    /**
     * Who or what is controlled by this rule. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor
     */
    public function getActor()
    {
        return $this->actor;
    }


    /**
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setClass(FHIRCoding $class = null)
    {
        if (null === $class) {
            return $this; 
        }
        $this->class = $class;
        return $this;
    }

    /**
     * The class of information covered by this rule. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getClass()
    {
        return $this->class;
    }


    /**
     * If this code is found in an instance, then the rule applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * If this code is found in an instance, then the rule applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The resources controlled by this rule if specific resources are referenced.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData
     * @return $this
     */
    public function setData(FHIRConsentData $data = null)
    {
        if (null === $data) {
            return $this; 
        }
        $this->data = $data;
        return $this;
    }

    /**
     * The resources controlled by this rule if specific resources are referenced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDataPeriod(FHIRPeriod $dataPeriod = null)
    {
        if (null === $dataPeriod) {
            return $this; 
        }
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }


    /**
     * The timeframe in this rule is valid.
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
     * The timeframe in this rule is valid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Rules which provide exceptions to the base rule or subrules.
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
     * Rules which provide exceptions to the base rule or subrules.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision
     */
    public function getProvision()
    {
        return $this->provision;
    }


    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setPurpose(FHIRCoding $purpose = null)
    {
        if (null === $purpose) {
            return $this; 
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setSecurityLabel(FHIRCoding $securityLabel = null)
    {
        if (null === $securityLabel) {
            return $this; 
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A security label, comprised of 0..* security label fields (Privacy tags), which define which resources are controlled by this exception.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }


    /**
     * Action  to take - permit or deny - when the rule conditions are met.  Not permitted in root rule, required in all nested rules.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConsentProvisionType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRConsentProvisionType($type);
        }
        if (!($type instanceof FHIRConsentProvisionType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentProvision::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConsentProvisionType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Action  to take - permit or deny - when the rule conditions are met.  Not permitted in root rule, required in all nested rules.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConsentProvisionType
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
        if (null !== ($v = $this->getAction())) {
            $a['action'] = $v;
        }
        if (null !== ($v = $this->getActor())) {
            $a['actor'] = $v;
        }
        if (null !== ($v = $this->getClass())) {
            $a['class'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a['dataPeriod'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getProvision())) {
            $a['provision'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabel())) {
            $a['securityLabel'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConsentProvision xmlns="http://hl7.org/fhir"></ConsentProvision>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}