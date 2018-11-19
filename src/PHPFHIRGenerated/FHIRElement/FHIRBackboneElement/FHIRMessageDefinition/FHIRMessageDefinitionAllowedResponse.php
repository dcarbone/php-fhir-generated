<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), if any, are permitted.
 *
 * Class FHIRMessageDefinitionAllowedResponse
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition
 */
class FHIRMessageDefinitionAllowedResponse extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MessageDefinition.AllowedResponse';

    /**
     * A reference to the message definition that must be adhered to by this supported response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $message = null;

    /**
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $situation = null;

    /**
     * FHIRMessageDefinitionAllowedResponse Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['message'])) {
                $value = $data['message'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse::__construct - Property \"message\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setMessage($value);
            }
            if (isset($data['situation'])) {
                $value = $data['situation'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse::__construct - Property \"situation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value)); 
                }
                $this->setSituation($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A reference to the message definition that must be adhered to by this supported response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setMessage(FHIRReference $message = null)
    {
        if (null === $message) {
            return $this; 
        }
        $this->message = $message;
        return $this;
    }

    /**
     * A reference to the message definition that must be adhered to by this supported response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setSituation($situation)
    {
        if (null === $situation) {
            return $this; 
        }
        if (is_scalar($situation)) {
            $situation = new FHIRMarkdown($situation);
        }
        if (!($situation instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageDefinitionAllowedResponse::setSituation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($situation)
            ));
        }
        $this->situation = $situation;
        return $this;
    }

    /**
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getSituation()
    {
        return $this->situation;
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
        if (null !== ($v = $this->getMessage())) {
            $a['message'] = $v;
        }
        if (null !== ($v = $this->getSituation())) {
            $a['situation'] = $v;
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
            $sxe = new \SimpleXMLElement('<MessageDefinitionAllowedResponse xmlns="http://hl7.org/fhir"></MessageDefinitionAllowedResponse>');
        }
        if (null !== ($v = $this->getMessage())) {
            $v->xmlSerialize(true, $sxe->addChild('message'));
        }
        if (null !== ($v = $this->getSituation())) {
            $v->xmlSerialize(true, $sxe->addChild('situation'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}