<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Represents a defined collection of entities that may be discussed or acted upon
 * collectively but which are not expected to act collectively and are not formally
 * or legally recognized. I.e. A collection of entities that isn't an Organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRGroup
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRGroup extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GROUP;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTUAL = 'actual';
    const FIELD_ACTUAL_EXT = '_actual';
    const FIELD_CHARACTERISTIC = 'characteristic';
    const FIELD_CODE = 'code';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MEMBER = 'member';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $actual = null;
    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     *
     * Identifies the traits shared by members of the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[]
     */
    private $characteristic = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes. E.g. "cow", "syringe",
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the resource instances that are members of the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $member = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $quantity = null;
    /**
     * Types of resources that are part of group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType
     */
    private $type = null;

    /**
     * FHIRGroup Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGroup::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTUAL])) {
            $ext = (isset($data[self::FIELD_ACTUAL_EXT]) && is_array($data[self::FIELD_ACTUAL_EXT]))
                ? $data[self::FIELD_ACTUAL_EXT]
                : null;
            if ($data[self::FIELD_ACTUAL] instanceof FHIRBoolean) {
                $this->setActual($data[self::FIELD_ACTUAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTUAL])) {
                $this->setActual(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTUAL]] + $ext));
            } else {
                $this->setActual(new FHIRBoolean($data[self::FIELD_ACTUAL]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRGroupCharacteristic) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRGroupCharacteristic($v));
                    }
                }
            } else if ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRGroupCharacteristic) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRGroupCharacteristic($data[self::FIELD_CHARACTERISTIC]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MEMBER])) {
            if (is_array($data[self::FIELD_MEMBER])) {
                foreach($data[self::FIELD_MEMBER] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addMember($v);
                    } else {
                        $this->addMember(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_MEMBER] instanceof FHIRResourceReference) {
                $this->addMember($data[self::FIELD_MEMBER]);
            } else {
                $this->addMember(new FHIRResourceReference($data[self::FIELD_MEMBER]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT]))
                ? $data[self::FIELD_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_QUANTITY] instanceof FHIRInteger) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUANTITY])) {
                $this->setQuantity(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_QUANTITY]] + $ext));
            } else {
                $this->setQuantity(new FHIRInteger($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRGroupType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRGroupType([FHIRGroupType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRGroupType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Group{$xmlns}></Group>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the resource refers to a specific group of real
     * individuals. If false, the group defines a set of intended individuals.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $actual
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setActual($actual = null)
    {
        if (null === $actual) {
            $this->actual = null;
            return $this;
        }
        if ($actual instanceof FHIRBoolean) {
            $this->actual = $actual;
            return $this;
        }
        $this->actual = new FHIRBoolean($actual);
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     *
     * Identifies the traits shared by members of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     *
     * Identifies the traits shared by members of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic $characteristic
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function addCharacteristic(FHIRGroupCharacteristic $characteristic = null)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     *
     * Identifies the traits shared by members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic[] $characteristic
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setCharacteristic(array $characteristic = [])
    {
        $this->characteristic = [];
        if ([] === $characteristic) {
            return $this;
        }
        foreach($characteristic as $v) {
            if ($v instanceof FHIRGroupCharacteristic) {
                $this->addCharacteristic($v);
            } else {
                $this->addCharacteristic(new FHIRGroupCharacteristic($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes. E.g. "cow", "syringe",
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides a specific type of resource the group includes. E.g. "cow", "syringe",
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique business identifier for this group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the resource instances that are members of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $member
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function addMember(FHIRResourceReference $member = null)
    {
        $this->member[] = $member;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the resource instances that are members of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $member
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setMember(array $member = [])
    {
        $this->member = [];
        if ([] === $member) {
            return $this;
        }
        foreach($member as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addMember($v);
            } else {
                $this->addMember(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A label assigned to the group for human identification and communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A count of the number of resource instances that are part of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $quantity
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setQuantity($quantity = null)
    {
        if (null === $quantity) {
            $this->quantity = null;
            return $this;
        }
        if ($quantity instanceof FHIRInteger) {
            $this->quantity = $quantity;
            return $this;
        }
        $this->quantity = new FHIRInteger($quantity);
        return $this;
    }

    /**
     * Types of resources that are part of group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Types of resources that are part of group
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the broad classification of the kind of resources the group includes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function setType(FHIRGroupType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRGroup::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRGroup::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRGroup;
        } elseif (!is_object($type) || !($type instanceof FHIRGroup)) {
            throw new \RuntimeException(sprintf(
                'FHIRGroup::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->actual)) {
            $type->setActual((string)$attributes->actual);
        }
        if (isset($children->actual)) {
            $type->setActual(FHIRBoolean::xmlUnserialize($children->actual));
        }
        if (isset($children->characteristic)) {
            foreach($children->characteristic as $child) {
                $type->addCharacteristic(FHIRGroupCharacteristic::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->member)) {
            foreach($children->member as $child) {
                $type->addMember(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->quantity)) {
            $type->setQuantity((string)$attributes->quantity);
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRInteger::xmlUnserialize($children->quantity));
        }
        if (isset($children->type)) {
            $type->setType(FHIRGroupType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActual())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTUAL, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CHARACTERISTIC, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getMember())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MEMBER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActual())) {
            $a[self::FIELD_ACTUAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ACTUAL_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $a[self::FIELD_CHARACTERISTIC] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IDENTIFIER_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getMember())) {
            $a[self::FIELD_MEMBER] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_QUANTITY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TYPE_EXT] = $v;
            }
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}