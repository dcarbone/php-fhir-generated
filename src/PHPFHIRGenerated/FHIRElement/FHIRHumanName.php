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
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRHumanName
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRHumanName extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'HumanName';

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $family = null;

    /**
     * Given name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $given = [];

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $prefix = [];

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $suffix = [];

    /**
     * A full text representation of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $text = null;

    /**
     * Identifies the purpose for this name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    private $use = null;

    /**
     * FHIRHumanName Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['family'])) {
                $value = $data['family'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Property \"family\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setFamily($value);
            }
            if (isset($data['given'])) {
                $value = $data['given'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Collection field \"given\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addGiven($v);
                    }
                }
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setPeriod($value);
            }
            if (isset($data['prefix'])) {
                $value = $data['prefix'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Collection field \"prefix\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addPrefix($v);
                    }
                }
            }
            if (isset($data['suffix'])) {
                $value = $data['suffix'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Collection field \"suffix\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addSuffix($v);
                    }
                }
            }
            if (isset($data['text'])) {
                $value = $data['text'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Property \"text\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setText($value);
            }
            if (isset($data['use'])) {
                $value = $data['use'];
                if (is_array($value)) {
                    $value = new FHIRNameUse($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRNameUse($value);
                }
                if (!($value instanceof FHIRNameUse)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Property \"use\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRNameUse or data to construct type, saw ".gettype($value));
                }
                $this->setUse($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setFamily($family)
    {
        if (null === $family) {
            return $this; 
        }
        if (is_scalar($family)) {
            $family = new FHIRString($family);
        }
        if (!($family instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setFamily - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($family)
            ));
        }
        $this->family = $family;
        return $this;
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Given name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addGiven($given)
    {
        if (null === $given) {
            return $this; 
        }
        if (is_scalar($given)) {
            $given = new FHIRString($given);
        }
        if (!($given instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::addGiven - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($given)
            ));
        }
        $this->given[] = $given;
        return $this;
    }

    /**
     * Given name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * Indicates the period of time when this name was valid for the named person.
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
     * Indicates the period of time when this name was valid for the named person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addPrefix($prefix)
    {
        if (null === $prefix) {
            return $this; 
        }
        if (is_scalar($prefix)) {
            $prefix = new FHIRString($prefix);
        }
        if (!($prefix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::addPrefix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($prefix)
            ));
        }
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addSuffix($suffix)
    {
        if (null === $suffix) {
            return $this; 
        }
        if (is_scalar($suffix)) {
            $suffix = new FHIRString($suffix);
        }
        if (!($suffix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::addSuffix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($suffix)
            ));
        }
        $this->suffix[] = $suffix;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * A full text representation of the name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRString($text);
        }
        if (!($text instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A full text representation of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Identifies the purpose for this name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNameUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRNameUse($use);
        }
        if (!($use instanceof FHIRNameUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRNameUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * Identifies the purpose for this name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    public function getUse()
    {
        return $this->use;
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
        if (null !== ($v = $this->getFamily())) {
            $a['family'] = $v;
        }
        if (0 < count($values = $this->getGiven())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['given'] = $vs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (0 < count($values = $this->getPrefix())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['prefix'] = $vs;
            }
        }
        if (0 < count($values = $this->getSuffix())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['suffix'] = $vs;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
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
            $sxe = new \SimpleXMLElement('<HumanName xmlns="http://hl7.org/fhir"></HumanName>');
        }
        if (null !== ($v = $this->getFamily())) {
            $v->xmlSerialize(true, $sxe->addChild('family'));
        }
        if (0 < count($values = $this->getGiven())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('given'));
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (0 < count($values = $this->getPrefix())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('prefix'));
                }
            }
        }
        if (0 < count($values = $this->getSuffix())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('suffix'));
                }
            }
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize(true, $sxe->addChild('text'));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize(true, $sxe->addChild('use'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}