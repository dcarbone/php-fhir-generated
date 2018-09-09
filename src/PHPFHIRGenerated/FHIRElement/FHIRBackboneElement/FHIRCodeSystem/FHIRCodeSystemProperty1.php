<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem;

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
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 *
 * Class FHIRCodeSystemProperty1
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem
 */
class FHIRCodeSystemProperty1 extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CodeSystem.Property1';

    /**
     * A code that is a reference to CodeSystem.property.code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The value of this property.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * FHIRCodeSystemProperty1 Constructor
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
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueCode'])) {
                $this->setValueCode($data['valueCode']);
            }
            if (isset($data['valueCoding'])) {
                $this->setValueCoding($data['valueCoding']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valueDecimal'])) {
                $this->setValueDecimal($data['valueDecimal']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A code that is a reference to CodeSystem.property.code.
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
                'FHIRCodeSystemProperty1::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that is a reference to CodeSystem.property.code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The value of this property.
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
                'FHIRCodeSystemProperty1::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        if (null === $valueCode) {
            return $this; 
        }
        if (is_scalar($valueCode)) {
            $valueCode = new FHIRCode($valueCode);
        }
        if (!($valueCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty1::setValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($valueCode)
            ));
        }
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        if (null === $valueCoding) {
            return $this; 
        }
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty1::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        if (null === $valueDecimal) {
            return $this; 
        }
        if (is_scalar($valueDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty1::setValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($valueDecimal)
            ));
        }
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        if (null === $valueInteger) {
            return $this; 
        }
        if (is_scalar($valueInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty1::setValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($valueInteger)
            ));
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }


    /**
     * The value of this property.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValueString($valueString)
    {
        if (null === $valueString) {
            return $this; 
        }
        if (is_scalar($valueString)) {
            $valueString = new FHIRString($valueString);
        }
        if (!($valueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty1::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The value of this property.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
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
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueCode())) {
            $a['valueCode'] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a['valueCoding'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a['valueDecimal'] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a['valueInteger'] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a['valueString'] = $v;
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
            $sxe = new \SimpleXMLElement('<CodeSystemProperty1 xmlns="http://hl7.org/fhir"></CodeSystemProperty1>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}