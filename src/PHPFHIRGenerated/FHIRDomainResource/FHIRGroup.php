<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGroup extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique business identifier for this group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public $type = null;

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $actual = null;

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

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
     * Identifies the traits shared by members of the group.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public $characteristic = array();

    /**
     * Identifies the resource instances that are members of the group.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember[]
     */
    public $member = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Group';

    /**
     * A unique business identifier for this group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique business identifier for this group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGroupType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $actual
     * @return $this
     */
    public function setActual($actual)
    {
        $this->actual = $actual;
        return $this;
    }

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A label assigned to the group for human identification and communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A label assigned to the group for human identification and communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A count of the number of resource instances that are part of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A count of the number of resource instances that are part of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the traits shared by members of the group.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Identifies the traits shared by members of the group.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic $characteristic
     * @return $this
     */
    public function addCharacteristic($characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * Identifies the resource instances that are members of the group.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Identifies the resource instances that are members of the group.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember $member
     * @return $this
     */
    public function addMember($member)
    {
        $this->member[] = $member;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->actual) $json['actual'] = $this->actual;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (0 < count($this->characteristic)) {
            $json['characteristic'] = [];
            foreach($this->characteristic as $characteristic) {
                $json['characteristic'][] = $characteristic;
            }
        }
        if (0 < count($this->member)) {
            $json['member'] = [];
            foreach($this->member as $member) {
                $json['member'][] = $member;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Group xmlns="http://hl7.org/fhir"></Group>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->actual) $this->actual->xmlSerialize(true, $sxe->addChild('actual'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (0 < count($this->characteristic)) {
            foreach($this->characteristic as $characteristic) {
                $characteristic->xmlSerialize(true, $sxe->addChild('characteristic'));
            }
        }
        if (0 < count($this->member)) {
            foreach($this->member as $member) {
                $member->xmlSerialize(true, $sxe->addChild('member'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}