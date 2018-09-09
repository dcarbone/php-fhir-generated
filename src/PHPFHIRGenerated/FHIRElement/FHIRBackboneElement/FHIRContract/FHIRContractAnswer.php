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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractAnswer
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAnswer extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.Answer';

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * FHIRContractAnswer Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['valueAttachment'])) {
                $this->setValueAttachment($data['valueAttachment']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueCoding'])) {
                $this->setValueCoding($data['valueCoding']);
            }
            if (isset($data['valueDate'])) {
                $this->setValueDate($data['valueDate']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valueDecimal'])) {
                $this->setValueDecimal($data['valueDecimal']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
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
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
            if (isset($data['valueUri'])) {
                $this->setValueUri($data['valueUri']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
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
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
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
                'FHIRContractAnswer::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        if (null === $valueCoding) {
            return $this; 
        }
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        if (null === $valueDate) {
            return $this; 
        }
        if (is_scalar($valueDate)) {
            $valueDate = new FHIRDate($valueDate);
        }
        if (!($valueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($valueDate)
            ));
        }
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        if (null === $valueDecimal) {
            return $this; 
        }
        if (is_scalar($valueDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($valueDecimal)
            ));
        }
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        if (null === $valueInteger) {
            return $this; 
        }
        if (is_scalar($valueInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($valueInteger)
            ));
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
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
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
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
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
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
                'FHIRContractAnswer::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        if (null === $valueTime) {
            return $this; 
        }
        if (is_scalar($valueTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        if (!($valueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($valueTime)
            ));
        }
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }


    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        if (null === $valueUri) {
            return $this; 
        }
        if (is_scalar($valueUri)) {
            $valueUri = new FHIRUri($valueUri);
        }
        if (!($valueUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAnswer::setValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($valueUri)
            ));
        }
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * Response to an offer clause or question text,  which enables selection of values to be agreed to, e.g., the period of participation, the date of occupancy of a rental, warrently duration, or whether biospecimen may be used for further research.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
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
        if (null !== ($v = $this->getValueAttachment())) {
            $a['valueAttachment'] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a['valueCoding'] = $v;
        }
        if (null !== ($v = $this->getValueDate())) {
            $a['valueDate'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a['valueDecimal'] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a['valueInteger'] = $v;
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
        if (null !== ($v = $this->getValueTime())) {
            $a['valueTime'] = $v;
        }
        if (null !== ($v = $this->getValueUri())) {
            $a['valueUri'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContractAnswer xmlns="http://hl7.org/fhir"></ContractAnswer>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}