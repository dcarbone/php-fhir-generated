<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), if any, are permitted.
 *
 * Class FHIRMessageDefinitionFocus
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition
 */
class FHIRMessageDefinitionFocus extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MessageDefinition.Focus';

    /**
     * The kind of resource that must be the focus for this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $min = null;

    /**
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * FHIRMessageDefinitionFocus Constructor
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
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The kind of resource that must be the focus for this message.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionFocus::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The kind of resource that must be the focus for this message.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionFocus::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }


    /**
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRUnsignedInt($min);
        }
        if (!($min instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionFocus::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMin()
    {
        return $this->min;
    }


    /**
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionFocus::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
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
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
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
            $sxe = new \SimpleXMLElement('<MessageDefinitionFocus xmlns="http://hl7.org/fhir"></MessageDefinitionFocus>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}