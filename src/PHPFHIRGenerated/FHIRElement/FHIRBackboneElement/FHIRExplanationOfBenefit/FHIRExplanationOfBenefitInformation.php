<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 *
 * Class FHIRExplanationOfBenefitInformation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit
 */
class FHIRExplanationOfBenefitInformation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExplanationOfBenefit.Information';

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $reason = null;

    /**
     * Sequence of the information element which serves to provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The date when or period to which this information refers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $timingDate = null;

    /**
     * The date when or period to which this information refers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * FHIRExplanationOfBenefitInformation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['timingDate'])) {
                $this->setTimingDate($data['timingDate']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['valueAttachment'])) {
                $this->setValueAttachment($data['valueAttachment']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueReference'])) {
                $this->setValueReference($data['valueReference']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
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
     * The general class of the information supplied: information; exception; accident, employment; onset, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
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
     * System and code pertaining to the specific information regarding special conditions relating to the setting, treatment or patient  for which care is sought which may influence the adjudication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setReason(FHIRCoding $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * For example, provides the reason for: the additional stay, or missing tooth or any other situation where a reason code is required in addition to the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * Sequence of the information element which serves to provide a link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitInformation::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Sequence of the information element which serves to provide a link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }


    /**
     * The date when or period to which this information refers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setTimingDate($timingDate)
    {
        if (null === $timingDate) {
            return $this; 
        }
        if (is_scalar($timingDate)) {
            $timingDate = new FHIRDate($timingDate);
        }
        if (!($timingDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitInformation::setTimingDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($timingDate)
            ));
        }
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * The date when or period to which this information refers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }


    /**
     * The date when or period to which this information refers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        if (null === $timingPeriod) {
            return $this; 
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * The date when or period to which this information refers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }


    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        if (null === $valueAttachment) {
            return $this; 
        }
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }


    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        if (null === $valueBoolean) {
            return $this; 
        }
        if (is_scalar($valueBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitInformation::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        if (null === $valueQuantity) {
            return $this; 
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }


    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setValueReference(FHIRReference $valueReference = null)
    {
        if (null === $valueReference) {
            return $this; 
        }
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }


    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValueString($valueString)
    {
        if (null === $valueString) {
            return $this; 
        }
        if (is_scalar($valueString)) {
            $valueString = new FHIRString($valueString);
        }
        if (!($valueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExplanationOfBenefitInformation::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Additional data or information such as resources, documents, images etc. including references to the data or the actual inclusion of the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
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
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        if (null !== ($v = $this->getTimingDate())) {
            $a['timingDate'] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a['timingPeriod'] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a['valueAttachment'] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a['valueQuantity'] = $v;
        }
        if (null !== ($v = $this->getValueReference())) {
            $a['valueReference'] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a['valueString'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExplanationOfBenefitInformation xmlns="http://hl7.org/fhir"></ExplanationOfBenefitInformation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}