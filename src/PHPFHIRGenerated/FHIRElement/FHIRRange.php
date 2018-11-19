<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A set of ordered Quantities defined by a low and high limit.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRRange
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRRange extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Range';

    /**
     * The high limit. The boundary is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $high = null;

    /**
     * The low limit. The boundary is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $low = null;

    /**
     * FHIRRange Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['high'])) {
                $value = $data['high'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRRange::__construct - Property \"high\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setHigh($value);
            }
            if (isset($data['low'])) {
                $value = $data['low'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRRange::__construct - Property \"low\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setLow($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRRange::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The high limit. The boundary is inclusive.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setHigh(FHIRQuantity $high = null)
    {
        if (null === $high) {
            return $this; 
        }
        $this->high = $high;
        return $this;
    }

    /**
     * The high limit. The boundary is inclusive.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * The low limit. The boundary is inclusive.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setLow(FHIRQuantity $low = null)
    {
        if (null === $low) {
            return $this; 
        }
        $this->low = $low;
        return $this;
    }

    /**
     * The low limit. The boundary is inclusive.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getLow()
    {
        return $this->low;
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
        if (null !== ($v = $this->getHigh())) {
            $a['high'] = $v;
        }
        if (null !== ($v = $this->getLow())) {
            $a['low'] = $v;
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
            $sxe = new \SimpleXMLElement('<Range xmlns="http://hl7.org/fhir"></Range>');
        }
        if (null !== ($v = $this->getHigh())) {
            $v->xmlSerialize(true, $sxe->addChild('high'));
        }
        if (null !== ($v = $this->getLow())) {
            $v->xmlSerialize(true, $sxe->addChild('low'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}