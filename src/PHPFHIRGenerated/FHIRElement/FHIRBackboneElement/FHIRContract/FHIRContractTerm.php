<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract;

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
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractTerm
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractTerm extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.Term';

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction
     */
    public $action = null;

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Contract Term Asset List.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset
     */
    public $asset = null;

    /**
     * Nested group of Contract Provisions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     */
    public $group = null;

    /**
     * Unique identifier for this particular Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * When this Contract Provision was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer
     */
    public $offer = null;

    /**
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public $securityLabel = null;

    /**
     * A specialized legal clause or condition based on overarching contract type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * Statement of a provision in a policy or a contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The entity that the term applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topicCodeableConcept = null;

    /**
     * The entity that the term applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $topicReference = null;

    /**
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRContractTerm Constructor
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
            if (isset($data['applies'])) {
                $this->setApplies($data['applies']);
            }
            if (isset($data['asset'])) {
                $this->setAsset($data['asset']);
            }
            if (isset($data['group'])) {
                $this->setGroup($data['group']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['offer'])) {
                $this->setOffer($data['offer']);
            }
            if (isset($data['securityLabel'])) {
                $this->setSecurityLabel($data['securityLabel']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['topicCodeableConcept'])) {
                $this->setTopicCodeableConcept($data['topicCodeableConcept']);
            }
            if (isset($data['topicReference'])) {
                $this->setTopicReference($data['topicReference']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction
     * @return $this
     */
    public function setAction(FHIRContractAction $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action = $action;
        return $this;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction
     */
    public function getAction()
    {
        return $this->action;
    }


    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setApplies(FHIRPeriod $applies = null)
    {
        if (null === $applies) {
            return $this; 
        }
        $this->applies = $applies;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }


    /**
     * Contract Term Asset List.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset
     * @return $this
     */
    public function setAsset(FHIRContractAsset $asset = null)
    {
        if (null === $asset) {
            return $this; 
        }
        $this->asset = $asset;
        return $this;
    }

    /**
     * Contract Term Asset List.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset
     */
    public function getAsset()
    {
        return $this->asset;
    }


    /**
     * Nested group of Contract Provisions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     * @return $this
     */
    public function setGroup(FHIRContractTerm $group = null)
    {
        if (null === $group) {
            return $this; 
        }
        $this->group = $group;
        return $this;
    }

    /**
     * Nested group of Contract Provisions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     */
    public function getGroup()
    {
        return $this->group;
    }


    /**
     * Unique identifier for this particular Contract Provision.
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
     * Unique identifier for this particular Contract Provision.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * When this Contract Provision was issued.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setIssued($issued)
    {
        if (null === $issued) {
            return $this; 
        }
        if (is_scalar($issued)) {
            $issued = new FHIRDateTime($issued);
        }
        if (!($issued instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractTerm::setIssued - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($issued)
            ));
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * When this Contract Provision was issued.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }


    /**
     * The matter of concern in the context of this provision of the agrement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer
     * @return $this
     */
    public function setOffer(FHIRContractOffer $offer = null)
    {
        if (null === $offer) {
            return $this; 
        }
        $this->offer = $offer;
        return $this;
    }

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer
     */
    public function getOffer()
    {
        return $this->offer;
    }


    /**
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     * @return $this
     */
    public function setSecurityLabel(FHIRContractSecurityLabel $securityLabel = null)
    {
        if (null === $securityLabel) {
            return $this; 
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Security labels that protect the handling of information about the term and its elements, which may be specifically identified..
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }


    /**
     * A specialized legal clause or condition based on overarching contract type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        if (null === $subType) {
            return $this; 
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * A specialized legal clause or condition based on overarching contract type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }


    /**
     * Statement of a provision in a policy or a contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRString($text);
        }
        if (!($text instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractTerm::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Statement of a provision in a policy or a contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * The entity that the term applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTopicCodeableConcept(FHIRCodeableConcept $topicCodeableConcept = null)
    {
        if (null === $topicCodeableConcept) {
            return $this; 
        }
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * The entity that the term applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }


    /**
     * The entity that the term applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTopicReference(FHIRReference $topicReference = null)
    {
        if (null === $topicReference) {
            return $this; 
        }
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * The entity that the term applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }


    /**
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
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
     * A legal clause or condition contained within a contract that requires one or both parties to perform a particular requirement by some specified time or prevents one or both parties from performing a particular requirement by some specified time.
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
        if (null !== ($v = $this->getAction())) {
            $a['action'] = $v;
        }
        if (null !== ($v = $this->getApplies())) {
            $a['applies'] = $v;
        }
        if (null !== ($v = $this->getAsset())) {
            $a['asset'] = $v;
        }
        if (null !== ($v = $this->getGroup())) {
            $a['group'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a['issued'] = $v;
        }
        if (null !== ($v = $this->getOffer())) {
            $a['offer'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabel())) {
            $a['securityLabel'] = $v;
        }
        if (null !== ($v = $this->getSubType())) {
            $a['subType'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getTopicCodeableConcept())) {
            $a['topicCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getTopicReference())) {
            $a['topicReference'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractTerm xmlns="http://hl7.org/fhir"></ContractTerm>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}