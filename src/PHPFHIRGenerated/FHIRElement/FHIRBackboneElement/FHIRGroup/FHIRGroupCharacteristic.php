<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;

/**
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 *
 * Class FHIRGroupCharacteristic
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup
 */
class FHIRGroupCharacteristic extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Group.Characteristic';

    /**
     * A code that identifies the kind of trait being asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $exclude = null;

    /**
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * FHIRGroupCharacteristic Constructor
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
            if (isset($data['exclude'])) {
                $this->setExclude($data['exclude']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueRange'])) {
                $this->setValueRange($data['valueRange']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A code that identifies the kind of trait being asserted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that identifies the kind of trait being asserted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExclude($exclude)
    {
        if (null === $exclude) {
            return $this; 
        }
        if (is_scalar($exclude)) {
            $exclude = new FHIRBoolean($exclude);
        }
        if (!($exclude instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroupCharacteristic::setExclude - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($exclude)
            ));
        }
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * If true, indicates the characteristic is one that is NOT held by members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExclude()
    {
        return $this->exclude;
    }


    /**
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
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
     * The period over which the characteristic is tested; e.g. the patient had an operation during the month of June.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        if (null === $valueBoolean) {
            return $this; 
        }
        if (is_scalar($valueBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroupCharacteristic::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        if (null === $valueCodeableConcept) {
            return $this; 
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }


    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        if (null === $valueQuantity) {
            return $this; 
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }


    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        if (null === $valueRange) {
            return $this; 
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The value of the trait that holds (or does not hold - see 'exclude') for members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
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
        if (null !== ($v = $this->getExclude())) {
            $a['exclude'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a['valueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a['valueQuantity'] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a['valueRange'] = $v;
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
            $sxe = new \SimpleXMLElement('<GroupCharacteristic xmlns="http://hl7.org/fhir"></GroupCharacteristic>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}