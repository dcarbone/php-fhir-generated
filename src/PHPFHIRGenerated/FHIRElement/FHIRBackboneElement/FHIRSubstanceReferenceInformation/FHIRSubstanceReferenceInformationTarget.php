<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation;

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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Todo.
 *
 * Class FHIRSubstanceReferenceInformationTarget
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation
 */
class FHIRSubstanceReferenceInformationTarget extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstanceReferenceInformation.Target';

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $amountQuantity = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $amountRange = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amountString = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $amountType = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interaction = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $organism = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $organismType = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $target = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSubstanceReferenceInformationTarget Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amountQuantity'])) {
                $this->setAmountQuantity($data['amountQuantity']);
            }
            if (isset($data['amountRange'])) {
                $this->setAmountRange($data['amountRange']);
            }
            if (isset($data['amountString'])) {
                $this->setAmountString($data['amountString']);
            }
            if (isset($data['amountType'])) {
                $this->setAmountType($data['amountType']);
            }
            if (isset($data['interaction'])) {
                $this->setInteraction($data['interaction']);
            }
            if (isset($data['organism'])) {
                $this->setOrganism($data['organism']);
            }
            if (isset($data['organismType'])) {
                $this->setOrganismType($data['organismType']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setAmountQuantity(FHIRQuantity $amountQuantity = null)
    {
        if (null === $amountQuantity) {
            return $this; 
        }
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAmountRange(FHIRRange $amountRange = null)
    {
        if (null === $amountRange) {
            return $this; 
        }
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAmountString($amountString)
    {
        if (null === $amountString) {
            return $this; 
        }
        if (is_scalar($amountString)) {
            $amountString = new FHIRString($amountString);
        }
        if (!($amountString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceReferenceInformationTarget::setAmountString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($amountString)
            ));
        }
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmountString()
    {
        return $this->amountString;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAmountType(FHIRCodeableConcept $amountType = null)
    {
        if (null === $amountType) {
            return $this; 
        }
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType()
    {
        return $this->amountType;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setInteraction(FHIRCodeableConcept $interaction = null)
    {
        if (null === $interaction) {
            return $this; 
        }
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInteraction()
    {
        return $this->interaction;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOrganism(FHIRCodeableConcept $organism = null)
    {
        if (null === $organism) {
            return $this; 
        }
        $this->organism = $organism;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrganism()
    {
        return $this->organism;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOrganismType(FHIRCodeableConcept $organismType = null)
    {
        if (null === $organismType) {
            return $this; 
        }
        $this->organismType = $organismType;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrganismType()
    {
        return $this->organismType;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSource(FHIRReference $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setTarget(FHIRIdentifier $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getTarget()
    {
        return $this->target;
    }


    /**
     * Todo.
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
     * Todo.
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
        if (null !== ($v = $this->getAmountQuantity())) {
            $a['amountQuantity'] = $v;
        }
        if (null !== ($v = $this->getAmountRange())) {
            $a['amountRange'] = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            $a['amountString'] = $v;
        }
        if (null !== ($v = $this->getAmountType())) {
            $a['amountType'] = $v;
        }
        if (null !== ($v = $this->getInteraction())) {
            $a['interaction'] = $v;
        }
        if (null !== ($v = $this->getOrganism())) {
            $a['organism'] = $v;
        }
        if (null !== ($v = $this->getOrganismType())) {
            $a['organismType'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubstanceReferenceInformationTarget xmlns="http://hl7.org/fhir"></SubstanceReferenceInformationTarget>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}