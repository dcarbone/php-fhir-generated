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
 * Details for all kinds of technology mediated contact points for a person or organization, including telephone, email, etc.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRContactPoint
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRContactPoint extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ContactPoint';

    /**
     * Time period when the contact point was/is in use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $rank = null;

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem
     */
    private $system = null;

    /**
     * Identifies the purpose for the contact point.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPointUse
     */
    private $use = null;

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $value = null;

    /**
     * FHIRContactPoint Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setPeriod($value);
            }
            if (isset($data['rank'])) {
                $value = $data['rank'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Property \"rank\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setRank($value);
            }
            if (isset($data['system'])) {
                $value = $data['system'];
                if (is_array($value)) {
                    $value = new FHIRContactPointSystem($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRContactPointSystem($value);
                }
                if (!($value instanceof FHIRContactPointSystem)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Property \"system\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem or data to construct type, saw ".gettype($value));
                }
                $this->setSystem($value);
            }
            if (isset($data['use'])) {
                $value = $data['use'];
                if (is_array($value)) {
                    $value = new FHIRContactPointUse($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRContactPointUse($value);
                }
                if (!($value instanceof FHIRContactPointUse)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Property \"use\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPointUse or data to construct type, saw ".gettype($value));
                }
                $this->setUse($value);
            }
            if (isset($data['value'])) {
                $value = $data['value'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Property \"value\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setValue($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRContactPoint::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Time period when the contact point was/is in use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Time period when the contact point was/is in use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setRank($rank)
    {
        if (null === $rank) {
            return $this; 
        }
        if (is_scalar($rank)) {
            $rank = new FHIRPositiveInt($rank);
        }
        if (!($rank instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContactPoint::setRank - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($rank)
            ));
        }
        $this->rank = $rank;
        return $this;
    }

    /**
     * Specifies a preferred order in which to use a set of contacts. Contacts are ranked with lower values coming before higher values.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem
     * @return $this
     */
    public function setSystem($system)
    {
        if (null === $system) {
            return $this; 
        }
        if (is_scalar($system)) {
            $system = new FHIRContactPointSystem($system);
        }
        if (!($system instanceof FHIRContactPointSystem)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContactPoint::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * Telecommunications form for contact point - what communications system is required to make use of the contact.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Identifies the purpose for the contact point.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPointUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRContactPointUse($use);
        }
        if (!($use instanceof FHIRContactPointUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContactPoint::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPointUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * Identifies the purpose for the contact point.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPointUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValue($value)
    {
        if (null === $value) {
            return $this; 
        }
        if (is_scalar($value)) {
            $value = new FHIRString($value);
        }
        if (!($value instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContactPoint::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The actual contact point details, in a form that is meaningful to the designated communication system (i.e. phone number or email address).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
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
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getRank())) {
            $a['rank'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a['value'] = $v;
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
            $sxe = new \SimpleXMLElement('<ContactPoint xmlns="http://hl7.org/fhir"></ContactPoint>');
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getRank())) {
            $v->xmlSerialize(true, $sxe->addChild('rank'));
        }
        if (null !== ($v = $this->getSystem())) {
            $v->xmlSerialize(true, $sxe->addChild('system'));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize(true, $sxe->addChild('use'));
        }
        if (null !== ($v = $this->getValue())) {
            $v->xmlSerialize(true, $sxe->addChild('value'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}