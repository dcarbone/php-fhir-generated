<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Details for all kinds of technology mediated contact points for a person or
 * organization, including telephone, email, etc.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRContactPoint extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONTACT_POINT;


    public const FIELD_SYSTEM = 'system';
    public const FIELD_SYSTEM_EXT = '_system';
    public const FIELD_VALUE = 'value';
    public const FIELD_VALUE_EXT = '_value';
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_RANK = 'rank';
    public const FIELD_RANK_EXT = '_rank';
    public const FIELD_PERIOD = 'period';

    /**
     * Telecommunications form for contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointSystem 
     */
    protected FHIRContactPointSystem $system;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $value;
    /**
     * Use of contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointUse 
     */
    protected FHIRContactPointUse $use;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. Contacts are
     * ranked with lower values coming before higher values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $rank;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;

    /** Default validation map for fields in type ContactPoint */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRContactPoint Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointSystem $system
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $value
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointUse $use
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $rank
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $period
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|FHIRContactPointSystem $system = null,
                                null|string|FHIRString|FHIRStringPrimitive $value = null,
                                null|ValueXMLLocationEnum $valueXMLLocation = null,
                                null|FHIRContactPointUse $use = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rank = null,
                                null|FHIRPeriod $period = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $system) {
            $this->setSystem($system);
        }
        if (null !== $value) {
            $this->setValue($value);
        }
        if (null !== $use) {
            $this->setUse($use);
        }
        if (null !== $rank) {
            $this->setRank($rank);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Telecommunications form for contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointSystem
     */
    public function getSystem(): null|FHIRContactPointSystem
    {
        return $this->system ?? null;
    }

    /**
     * Telecommunications form for contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointSystem $system
     * @return static
     */
    public function setSystem(null|FHIRContactPointSystem $system): self
    {
        if (null === $system) {
            unset($this->system);
            return $this;
        }
        $this->system = $system;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getValue(): null|FHIRString
    {
        return $this->value ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $value
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValue(null|string|FHIRString|FHIRStringPrimitive $value,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (!($value instanceof FHIRString)) {
            $value = new FHIRString(value: $value);
        }
        if (null !== $valueXMLLocation) {
            $value->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $value->_getValueXMLLocation()) {
            $value->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->value = $value;
        return $this;
    }

    /**
     * Use of contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointUse
     */
    public function getUse(): null|FHIRContactPointUse
    {
        return $this->use ?? null;
    }

    /**
     * Use of contact point
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPointUse $use
     * @return static
     */
    public function setUse(null|FHIRContactPointUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        $this->use = $use;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. Contacts are
     * ranked with lower values coming before higher values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt
     */
    public function getRank(): null|FHIRPositiveInt
    {
        return $this->rank ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. Contacts are
     * ranked with lower values coming before higher values.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $rank
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRank(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $rank,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $rank) {
            unset($this->rank);
            return $this;
        }
        if (!($rank instanceof FHIRPositiveInt)) {
            $rank = new FHIRPositiveInt(value: $rank);
        }
        if (null !== $valueXMLLocation) {
            $rank->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $rank->_getValueXMLLocation()) {
            $rank->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->rank = $rank;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_SYSTEM])) {
            $v = $this->getSystem();
            foreach($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYSTEM])) {
                        $errs[self::FIELD_SYSTEM] = [];
                    }
                    $errs[self::FIELD_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RANK])) {
            $v = $this->getRank();
            foreach($validationRules[self::FIELD_RANK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RANK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANK])) {
                        $errs[self::FIELD_RANK] = [];
                    }
                    $errs[self::FIELD_RANK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContactPoint)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_SYSTEM === $childName) {
                $v = new FHIRContactPointSystem(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSystem(FHIRContactPointSystem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValue(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE === $childName) {
                $v = new FHIRContactPointUse(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUse(FHIRContactPointUse::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RANK === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRank(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE])) {
            $pt = $type->getValue();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValue(new FHIRString(
                    value: (string)$attributes[self::FIELD_VALUE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RANK])) {
            $pt = $type->getRank();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RANK]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRank(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_RANK],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ContactPoint', $this->_getSourceXMLNS());
        }
        if (isset($this->value) && $this->value->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE, $this->value->getValue()?->_getFormattedValue());
        }
        if (isset($this->rank) && $this->rank->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RANK, $this->rank->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->system)) {
            $xw->startElement(self::FIELD_SYSTEM);
            $this->system->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->value) && $this->value->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE);
            $this->value->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->use)) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rank) && $this->rank->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RANK);
            $this->rank->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRContactPoint)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_SYSTEM]) || isset($json[self::FIELD_SYSTEM_EXT]) || array_key_exists(self::FIELD_SYSTEM, $json) || array_key_exists(self::FIELD_SYSTEM_EXT, $json)) {
            $value = $json[self::FIELD_SYSTEM] ?? null;
            $ext = (isset($json[self::FIELD_SYSTEM_EXT]) && is_array($json[self::FIELD_SYSTEM_EXT])) ? $json[self::FIELD_SYSTEM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRContactPointSystem) {
                    $type->setSystem($value);
                } else if (is_array($value)) {
                    $type->setSystem(new FHIRContactPointSystem(array_merge($ext, $value)));
                } else {
                    $type->setSystem(new FHIRContactPointSystem([FHIRContactPointSystem::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSystem(new FHIRContactPointSystem($ext));
            } else {
                $type->setSystem(new FHIRContactPointSystem(null));
            }
        }
        if (isset($json[self::FIELD_VALUE]) || isset($json[self::FIELD_VALUE_EXT]) || array_key_exists(self::FIELD_VALUE, $json) || array_key_exists(self::FIELD_VALUE_EXT, $json)) {
            $value = $json[self::FIELD_VALUE] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_EXT]) && is_array($json[self::FIELD_VALUE_EXT])) ? $json[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setValue($value);
                } else if (is_array($value)) {
                    $type->setValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValue(new FHIRString($ext));
            } else {
                $type->setValue(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_USE]) || isset($json[self::FIELD_USE_EXT]) || array_key_exists(self::FIELD_USE, $json) || array_key_exists(self::FIELD_USE_EXT, $json)) {
            $value = $json[self::FIELD_USE] ?? null;
            $ext = (isset($json[self::FIELD_USE_EXT]) && is_array($json[self::FIELD_USE_EXT])) ? $json[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRContactPointUse) {
                    $type->setUse($value);
                } else if (is_array($value)) {
                    $type->setUse(new FHIRContactPointUse(array_merge($ext, $value)));
                } else {
                    $type->setUse(new FHIRContactPointUse([FHIRContactPointUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUse(new FHIRContactPointUse($ext));
            } else {
                $type->setUse(new FHIRContactPointUse(null));
            }
        }
        if (isset($json[self::FIELD_RANK]) || isset($json[self::FIELD_RANK_EXT]) || array_key_exists(self::FIELD_RANK, $json) || array_key_exists(self::FIELD_RANK_EXT, $json)) {
            $value = $json[self::FIELD_RANK] ?? null;
            $ext = (isset($json[self::FIELD_RANK_EXT]) && is_array($json[self::FIELD_RANK_EXT])) ? $json[self::FIELD_RANK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setRank($value);
                } else if (is_array($value)) {
                    $type->setRank(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setRank(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRank(new FHIRPositiveInt($ext));
            } else {
                $type->setRank(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            if ($json[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $type->setPeriod($json[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod(new FHIRPeriod($json[self::FIELD_PERIOD]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->system)) {
            if (null !== ($val = $this->system->getValue())) {
                $out->system = $val;
            }
            $ext = $this->system->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_system = $ext;
            }
        }
        if (isset($this->value)) {
            if (null !== ($val = $this->value->getValue())) {
                $out->value = $val;
            }
            $ext = $this->value->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_value = $ext;
            }
        }
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            $ext = $this->use->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_use = $ext;
            }
        }
        if (isset($this->rank)) {
            if (null !== ($val = $this->rank->getValue())) {
                $out->rank = $val;
            }
            $ext = $this->rank->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_rank = $ext;
            }
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}