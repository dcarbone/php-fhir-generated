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
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractOffer
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractOffer extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.Offer';

    /**
     * Response to offer text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public $answer = null;

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $decision = null;

    /**
     * How the decision about a Contract was conveyed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $decisionMode = null;

    /**
     * Unique identifier for this particular Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Offer Recipient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty
     */
    public $party = null;

    /**
     * Security labels that protects the offer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $securityLabelNumber = null;

    /**
     * Human readable form of this Contract Offer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $topic = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRContractOffer Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['answer'])) {
                $this->setAnswer($data['answer']);
            }
            if (isset($data['decision'])) {
                $this->setDecision($data['decision']);
            }
            if (isset($data['decisionMode'])) {
                $this->setDecisionMode($data['decisionMode']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['party'])) {
                $this->setParty($data['party']);
            }
            if (isset($data['securityLabelNumber'])) {
                $this->setSecurityLabelNumber($data['securityLabelNumber']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['topic'])) {
                $this->setTopic($data['topic']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Response to offer text.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     * @return $this
     */
    public function setAnswer(FHIRContractAnswer $answer = null)
    {
        if (null === $answer) {
            return $this; 
        }
        $this->answer = $answer;
        return $this;
    }

    /**
     * Response to offer text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function getAnswer()
    {
        return $this->answer;
    }


    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDecision(FHIRCodeableConcept $decision = null)
    {
        if (null === $decision) {
            return $this; 
        }
        $this->decision = $decision;
        return $this;
    }

    /**
     * Type of choice made by accepting party with respect to an offer made by an offeror/ grantee.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDecision()
    {
        return $this->decision;
    }


    /**
     * How the decision about a Contract was conveyed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDecisionMode(FHIRCodeableConcept $decisionMode = null)
    {
        if (null === $decisionMode) {
            return $this; 
        }
        $this->decisionMode = $decisionMode;
        return $this;
    }

    /**
     * How the decision about a Contract was conveyed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDecisionMode()
    {
        return $this->decisionMode;
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
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLinkId($linkId)
    {
        if (null === $linkId) {
            return $this; 
        }
        if (is_scalar($linkId)) {
            $linkId = new FHIRString($linkId);
        }
        if (!($linkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractOffer::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * The id of the clause or question text of the offer in the referenced questionnaire/response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * Offer Recipient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty
     * @return $this
     */
    public function setParty(FHIRContractParty $party = null)
    {
        if (null === $party) {
            return $this; 
        }
        $this->party = $party;
        return $this;
    }

    /**
     * Offer Recipient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty
     */
    public function getParty()
    {
        return $this->party;
    }


    /**
     * Security labels that protects the offer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setSecurityLabelNumber($securityLabelNumber)
    {
        if (null === $securityLabelNumber) {
            return $this; 
        }
        if (is_scalar($securityLabelNumber)) {
            $securityLabelNumber = new FHIRUnsignedInt($securityLabelNumber);
        }
        if (!($securityLabelNumber instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractOffer::setSecurityLabelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($securityLabelNumber)
            ));
        }
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }

    /**
     * Security labels that protects the offer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }


    /**
     * Human readable form of this Contract Offer.
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
                'FHIRContractOffer::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Human readable form of this Contract Offer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTopic(FHIRReference $topic = null)
    {
        if (null === $topic) {
            return $this; 
        }
        $this->topic = $topic;
        return $this;
    }

    /**
     * The owner of an asset has the residual control rights over the asset: the right to decide all usages of the asset in any way not inconsistent with a prior contract, custom, or law (Hart, 1995, p. 30).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTopic()
    {
        return $this->topic;
    }


    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
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
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
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
        if (null !== ($v = $this->getAnswer())) {
            $a['answer'] = $v;
        }
        if (null !== ($v = $this->getDecision())) {
            $a['decision'] = $v;
        }
        if (null !== ($v = $this->getDecisionMode())) {
            $a['decisionMode'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getParty())) {
            $a['party'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabelNumber())) {
            $a['securityLabelNumber'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getTopic())) {
            $a['topic'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractOffer xmlns="http://hl7.org/fhir"></ContractOffer>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}