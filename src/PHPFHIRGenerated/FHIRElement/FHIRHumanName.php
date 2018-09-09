<?php

namespace PHPFHIRGenerated\FHIRElement;

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
    public $family = null;

    /**
     * Given name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $given = null;

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $prefix = null;

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $suffix = null;

    /**
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Identifies the purpose for this name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    public $use = null;

    /**
     * FHIRHumanName Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['family'])) {
                $this->setFamily($data['family']);
            }
            if (isset($data['given'])) {
                $this->setGiven($data['given']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['prefix'])) {
                $this->setPrefix($data['prefix']);
            }
            if (isset($data['suffix'])) {
                $this->setSuffix($data['suffix']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRHumanName::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setGiven($given)
    {
        if (null === $given) {
            return $this; 
        }
        if (is_scalar($given)) {
            $given = new FHIRString($given);
        }
        if (!($given instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setGiven - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($given)
            ));
        }
        $this->given = $given;
        return $this;
    }

    /**
     * Given name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
    public function setPrefix($prefix)
    {
        if (null === $prefix) {
            return $this; 
        }
        if (is_scalar($prefix)) {
            $prefix = new FHIRString($prefix);
        }
        if (!($prefix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setPrefix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($prefix)
            ));
        }
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
    public function setSuffix($suffix)
    {
        if (null === $suffix) {
            return $this; 
        }
        if (is_scalar($suffix)) {
            $suffix = new FHIRString($suffix);
        }
        if (!($suffix instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHumanName::setSuffix - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($suffix)
            ));
        }
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSuffix()
    {
        return $this->suffix;
    }


    /**
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
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
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
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
        if (null !== ($v = $this->getGiven())) {
            $a['given'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPrefix())) {
            $a['prefix'] = $v;
        }
        if (null !== ($v = $this->getSuffix())) {
            $a['suffix'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}