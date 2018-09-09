<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

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
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 *
 * Class FHIRClaimResponseItem
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseItem extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClaimResponse.Item';

    /**
     * The adjudication results.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     */
    public $adjudication = null;

    /**
     * The second-tier service adjudications for submitted services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail
     */
    public $detail = null;

    /**
     * A service line number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $itemSequence = null;

    /**
     * A list of note references to the notes provided below.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $noteNumber = null;

    /**
     * FHIRClaimResponseItem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['adjudication'])) {
                $this->setAdjudication($data['adjudication']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['itemSequence'])) {
                $this->setItemSequence($data['itemSequence']);
            }
            if (isset($data['noteNumber'])) {
                $this->setNoteNumber($data['noteNumber']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The adjudication results.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     * @return $this
     */
    public function setAdjudication(FHIRClaimResponseAdjudication $adjudication = null)
    {
        if (null === $adjudication) {
            return $this; 
        }
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * The adjudication results.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }


    /**
     * The second-tier service adjudications for submitted services.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail
     * @return $this
     */
    public function setDetail(FHIRClaimResponseDetail $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * The second-tier service adjudications for submitted services.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * A service line number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setItemSequence($itemSequence)
    {
        if (null === $itemSequence) {
            return $this; 
        }
        if (is_scalar($itemSequence)) {
            $itemSequence = new FHIRPositiveInt($itemSequence);
        }
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseItem::setItemSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($itemSequence)
            ));
        }
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * A service line number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }


    /**
     * A list of note references to the notes provided below.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setNoteNumber($noteNumber)
    {
        if (null === $noteNumber) {
            return $this; 
        }
        if (is_scalar($noteNumber)) {
            $noteNumber = new FHIRPositiveInt($noteNumber);
        }
        if (!($noteNumber instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseItem::setNoteNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($noteNumber)
            ));
        }
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * A list of note references to the notes provided below.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
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
        if (null !== ($v = $this->getAdjudication())) {
            $a['adjudication'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getItemSequence())) {
            $a['itemSequence'] = $v;
        }
        if (null !== ($v = $this->getNoteNumber())) {
            $a['noteNumber'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimResponseItem xmlns="http://hl7.org/fhir"></ClaimResponseItem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}