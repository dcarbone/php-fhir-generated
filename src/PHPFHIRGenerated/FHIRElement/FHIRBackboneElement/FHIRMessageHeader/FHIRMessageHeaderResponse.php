<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader;

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
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRResponseType;

/**
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 *
 * Class FHIRMessageHeaderResponse
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader
 */
class FHIRMessageHeaderResponse extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MessageHeader.Response';

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResponseType
     */
    public $code = null;

    /**
     * Full details of any issues found in the message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $details = null;

    /**
     * The MessageHeader.id of the message to which this message is a response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $identifier = null;

    /**
     * FHIRMessageHeaderResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['details'])) {
                $this->setDetails($data['details']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResponseType
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRResponseType($code);
        }
        if (!($code instanceof FHIRResponseType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeaderResponse::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResponseType or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResponseType
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Full details of any issues found in the message.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDetails(FHIRReference $details = null)
    {
        if (null === $details) {
            return $this; 
        }
        $this->details = $details;
        return $this;
    }

    /**
     * Full details of any issues found in the message.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDetails()
    {
        return $this->details;
    }


    /**
     * The MessageHeader.id of the message to which this message is a response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if (null === $identifier) {
            return $this; 
        }
        if (is_scalar($identifier)) {
            $identifier = new FHIRId($identifier);
        }
        if (!($identifier instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeaderResponse::setIdentifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($identifier)
            ));
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The MessageHeader.id of the message to which this message is a response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDetails())) {
            $a['details'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
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
            $sxe = new \SimpleXMLElement('<MessageHeaderResponse xmlns="http://hl7.org/fhir"></MessageHeaderResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}