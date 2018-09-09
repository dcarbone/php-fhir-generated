<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem;

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
use PHPFHIRGenerated\FHIRElement\FHIRNamingSystemIdentifierType;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A curated namespace that issues unique symbols within that namespace for the identification of concepts, people, devices, etc.  Represents a "System" used within the Identifier and Coding data types.
 *
 * Class FHIRNamingSystemUniqueId
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem
 */
class FHIRNamingSystemUniqueId extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'NamingSystem.UniqueId';

    /**
     * Notes about the past or intended usage of this identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system.  Outside of this window, the identifier might be non-deterministic.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $preferred = null;

    /**
     * Identifies the unique identifier scheme used for this particular identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemIdentifierType
     */
    public $type = null;

    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * FHIRNamingSystemUniqueId Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['preferred'])) {
                $this->setPreferred($data['preferred']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Notes about the past or intended usage of this identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystemUniqueId::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Notes about the past or intended usage of this identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system.  Outside of this window, the identifier might be non-deterministic.
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
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system.  Outside of this window, the identifier might be non-deterministic.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setPreferred($preferred)
    {
        if (null === $preferred) {
            return $this; 
        }
        if (is_scalar($preferred)) {
            $preferred = new FHIRBoolean($preferred);
        }
        if (!($preferred instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystemUniqueId::setPreferred - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($preferred)
            ));
        }
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPreferred()
    {
        return $this->preferred;
    }


    /**
     * Identifies the unique identifier scheme used for this particular identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNamingSystemIdentifierType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRNamingSystemIdentifierType($type);
        }
        if (!($type instanceof FHIRNamingSystemIdentifierType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystemUniqueId::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemIdentifierType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Identifies the unique identifier scheme used for this particular identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNamingSystemIdentifierType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
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
                'FHIRNamingSystemUniqueId::setValue - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($value)
            ));
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
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
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPreferred())) {
            $a['preferred'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<NamingSystemUniqueId xmlns="http://hl7.org/fhir"></NamingSystemUniqueId>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}