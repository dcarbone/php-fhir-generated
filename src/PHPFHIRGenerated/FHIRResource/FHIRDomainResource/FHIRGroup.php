<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRGroupType;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively, and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRGroup
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRGroup extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Group';

    /**
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $actual = null;

    /**
     * Identifies traits whose presence r absence is shared by members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic
     */
    public $characteristic = null;

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A unique business identifier for this group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identifies the resource instances that are members of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember
     */
    public $member = null;

    /**
     * A label assigned to the group for human identification and communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A count of the number of resource instances that are part of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $quantity = null;

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public $type = null;

    /**
     * FHIRGroup Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['actual'])) {
                $this->setActual($data['actual']);
            }
            if (isset($data['characteristic'])) {
                $this->setCharacteristic($data['characteristic']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['member'])) {
                $this->setMember($data['member']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGroup::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActive($active)
    {
        if (null === $active) {
            return $this; 
        }
        if (is_scalar($active)) {
            $active = new FHIRBoolean($active);
        }
        if (!($active instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroup::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Indicates whether the record for the group is available for use or is merely being retained for historical purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActual($actual)
    {
        if (null === $actual) {
            return $this; 
        }
        if (is_scalar($actual)) {
            $actual = new FHIRBoolean($actual);
        }
        if (!($actual instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroup::setActual - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($actual)
            ));
        }
        $this->actual = $actual;
        return $this;
    }

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActual()
    {
        return $this->actual;
    }


    /**
     * Identifies traits whose presence r absence is shared by members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic
     * @return $this
     */
    public function setCharacteristic(FHIRGroupCharacteristic $characteristic = null)
    {
        if (null === $characteristic) {
            return $this; 
        }
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Identifies traits whose presence r absence is shared by members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }


    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
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
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * A unique business identifier for this group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A unique business identifier for this group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Identifies the resource instances that are members of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember
     * @return $this
     */
    public function setMember(FHIRGroupMember $member = null)
    {
        if (null === $member) {
            return $this; 
        }
        $this->member = $member;
        return $this;
    }

    /**
     * Identifies the resource instances that are members of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember
     */
    public function getMember()
    {
        return $this->member;
    }


    /**
     * A label assigned to the group for human identification and communication.
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
                'FHIRGroup::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A label assigned to the group for human identification and communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * A count of the number of resource instances that are part of the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setQuantity($quantity)
    {
        if (null === $quantity) {
            return $this; 
        }
        if (is_scalar($quantity)) {
            $quantity = new FHIRUnsignedInt($quantity);
        }
        if (!($quantity instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroup::setQuantity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($quantity)
            ));
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A count of the number of resource instances that are part of the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGroupType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRGroupType($type);
        }
        if (!($type instanceof FHIRGroupType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroup::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGroupType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public function getType()
    {
        return $this->type;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (null !== ($v = $this->getActual())) {
            $a['actual'] = $v;
        }
        if (null !== ($v = $this->getCharacteristic())) {
            $a['characteristic'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMember())) {
            $a['member'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Group xmlns="http://hl7.org/fhir"></Group>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}