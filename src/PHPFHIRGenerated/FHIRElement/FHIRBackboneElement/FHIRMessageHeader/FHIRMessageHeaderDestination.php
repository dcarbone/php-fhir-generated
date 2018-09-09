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
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;

/**
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 *
 * Class FHIRMessageHeaderDestination
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader
 */
class FHIRMessageHeaderDestination extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MessageHeader.Destination';

    /**
     * Indicates where the message should be routed to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $endpoint = null;

    /**
     * Human-readable name for the target system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receiver = null;

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * FHIRMessageHeaderDestination Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['receiver'])) {
                $this->setReceiver($data['receiver']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates where the message should be routed to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        if (null === $endpoint) {
            return $this; 
        }
        if (is_scalar($endpoint)) {
            $endpoint = new FHIRUrl($endpoint);
        }
        if (!($endpoint instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeaderDestination::setEndpoint - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($endpoint)
            ));
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Indicates where the message should be routed to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Human-readable name for the target system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeaderDestination::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Human-readable name for the target system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReceiver(FHIRReference $receiver = null)
    {
        if (null === $receiver) {
            return $this; 
        }
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }


    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTarget(FHIRReference $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
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
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a['receiver'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<MessageHeaderDestination xmlns="http://hl7.org/fhir"></MessageHeaderDestination>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}