<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest;

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
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A request to convey information; e.g. the CDS system proposes that an alert be sent to a responsible provider, the CDS system proposes that the public health agency be notified about a reportable condition.
 *
 * Class FHIRCommunicationRequestPayload
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest
 */
class FHIRCommunicationRequestPayload extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CommunicationRequest.Payload';

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $contentAttachment = null;

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contentReference = null;

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $contentString = null;

    /**
     * FHIRCommunicationRequestPayload Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contentAttachment'])) {
                $this->setContentAttachment($data['contentAttachment']);
            }
            if (isset($data['contentReference'])) {
                $this->setContentReference($data['contentReference']);
            }
            if (isset($data['contentString'])) {
                $this->setContentString($data['contentString']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setContentAttachment(FHIRAttachment $contentAttachment = null)
    {
        if (null === $contentAttachment) {
            return $this; 
        }
        $this->contentAttachment = $contentAttachment;
        return $this;
    }

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getContentAttachment()
    {
        return $this->contentAttachment;
    }


    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContentReference(FHIRReference $contentReference = null)
    {
        if (null === $contentReference) {
            return $this; 
        }
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContentReference()
    {
        return $this->contentReference;
    }


    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setContentString($contentString)
    {
        if (null === $contentString) {
            return $this; 
        }
        if (is_scalar($contentString)) {
            $contentString = new FHIRString($contentString);
        }
        if (!($contentString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunicationRequestPayload::setContentString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($contentString)
            ));
        }
        $this->contentString = $contentString;
        return $this;
    }

    /**
     * The communicated content (or for multi-part communications, one portion of the communication).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getContentString()
    {
        return $this->contentString;
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
        if (null !== ($v = $this->getContentAttachment())) {
            $a['contentAttachment'] = $v;
        }
        if (null !== ($v = $this->getContentReference())) {
            $a['contentReference'] = $v;
        }
        if (null !== ($v = $this->getContentString())) {
            $a['contentString'] = $v;
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
            $sxe = new \SimpleXMLElement('<CommunicationRequestPayload xmlns="http://hl7.org/fhir"></CommunicationRequestPayload>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}