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
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractAsset
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAsset extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.Asset';

    /**
     * Response to assets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public $answer = null;

    /**
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * Circumstance of the asset.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext
     */
    public $context = null;

    /**
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Asset relevant contractual time period.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Type of Asset availability for use or ownership.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $periodType = null;

    /**
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $relationship = null;

    /**
     * Differentiates the kind of the asset .
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $scope = null;

    /**
     * Security labels that protects the asset.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $securityLabelNumber = null;

    /**
     * May be a subtype or part of an offered asset.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subtype = null;

    /**
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Target entity type about which the term may be concerned.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Associated entities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $typeReference = null;

    /**
     * Time period of asset use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $usePeriod = null;

    /**
     * Contract Valued Item List.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem
     */
    public $valuedItem = null;

    /**
     * FHIRContractAsset Constructor
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
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['periodType'])) {
                $this->setPeriodType($data['periodType']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['scope'])) {
                $this->setScope($data['scope']);
            }
            if (isset($data['securityLabelNumber'])) {
                $this->setSecurityLabelNumber($data['securityLabelNumber']);
            }
            if (isset($data['subtype'])) {
                $this->setSubtype($data['subtype']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['typeReference'])) {
                $this->setTypeReference($data['typeReference']);
            }
            if (isset($data['usePeriod'])) {
                $this->setUsePeriod($data['usePeriod']);
            }
            if (isset($data['valuedItem'])) {
                $this->setValuedItem($data['valuedItem']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Response to assets.
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
     * Response to assets.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer
     */
    public function getAnswer()
    {
        return $this->answer;
    }


    /**
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCondition($condition)
    {
        if (null === $condition) {
            return $this; 
        }
        if (is_scalar($condition)) {
            $condition = new FHIRString($condition);
        }
        if (!($condition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAsset::setCondition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($condition)
            ));
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * Circumstance of the asset.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext
     * @return $this
     */
    public function setContext(FHIRContractContext $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Circumstance of the asset.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
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
                'FHIRContractAsset::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * Asset relevant contractual time period.
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
     * Asset relevant contractual time period.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Type of Asset availability for use or ownership.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPeriodType(FHIRCodeableConcept $periodType = null)
    {
        if (null === $periodType) {
            return $this; 
        }
        $this->periodType = $periodType;
        return $this;
    }

    /**
     * Type of Asset availability for use or ownership.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }


    /**
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setRelationship(FHIRCoding $relationship = null)
    {
        if (null === $relationship) {
            return $this; 
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRelationship()
    {
        return $this->relationship;
    }


    /**
     * Differentiates the kind of the asset .
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        if (null === $scope) {
            return $this; 
        }
        $this->scope = $scope;
        return $this;
    }

    /**
     * Differentiates the kind of the asset .
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }


    /**
     * Security labels that protects the asset.
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
                'FHIRContractAsset::setSecurityLabelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($securityLabelNumber)
            ));
        }
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }

    /**
     * Security labels that protects the asset.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }


    /**
     * May be a subtype or part of an offered asset.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubtype(FHIRCodeableConcept $subtype = null)
    {
        if (null === $subtype) {
            return $this; 
        }
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * May be a subtype or part of an offered asset.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubtype()
    {
        return $this->subtype;
    }


    /**
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
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
                'FHIRContractAsset::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Target entity type about which the term may be concerned.
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
     * Target entity type about which the term may be concerned.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Associated entities.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTypeReference(FHIRReference $typeReference = null)
    {
        if (null === $typeReference) {
            return $this; 
        }
        $this->typeReference = $typeReference;
        return $this;
    }

    /**
     * Associated entities.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTypeReference()
    {
        return $this->typeReference;
    }


    /**
     * Time period of asset use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setUsePeriod(FHIRPeriod $usePeriod = null)
    {
        if (null === $usePeriod) {
            return $this; 
        }
        $this->usePeriod = $usePeriod;
        return $this;
    }

    /**
     * Time period of asset use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getUsePeriod()
    {
        return $this->usePeriod;
    }


    /**
     * Contract Valued Item List.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem
     * @return $this
     */
    public function setValuedItem(FHIRContractValuedItem $valuedItem = null)
    {
        if (null === $valuedItem) {
            return $this; 
        }
        $this->valuedItem = $valuedItem;
        return $this;
    }

    /**
     * Contract Valued Item List.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
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
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPeriodType())) {
            $a['periodType'] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a['relationship'] = $v;
        }
        if (null !== ($v = $this->getScope())) {
            $a['scope'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabelNumber())) {
            $a['securityLabelNumber'] = $v;
        }
        if (null !== ($v = $this->getSubtype())) {
            $a['subtype'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getTypeReference())) {
            $a['typeReference'] = $v;
        }
        if (null !== ($v = $this->getUsePeriod())) {
            $a['usePeriod'] = $v;
        }
        if (null !== ($v = $this->getValuedItem())) {
            $a['valuedItem'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractAsset xmlns="http://hl7.org/fhir"></ContractAsset>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}