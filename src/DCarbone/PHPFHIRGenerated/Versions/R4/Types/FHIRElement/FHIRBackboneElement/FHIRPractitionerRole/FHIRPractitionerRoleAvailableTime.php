<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A specific set of Roles/Locations/specialties/services that a practitioner may
 * perform at an organization for a period of time.
 */
class FHIRPractitionerRoleAvailableTime extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME;


    public const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    public const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    public const FIELD_ALL_DAY = 'allDay';
    public const FIELD_ALL_DAY_EXT = '_allDay';
    public const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    public const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    public const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    public const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek[] 
     */
    protected array $daysOfWeek;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $allDay;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $availableStartTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $availableEndTime;

    /** Default validation map for fields in type PractitionerRole.AvailableTime */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRPractitionerRoleAvailableTime Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $allDay
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $availableStartTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $availableEndTime
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $daysOfWeek = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $daysOfWeek) {
            $this->setDaysOfWeek(...$daysOfWeek);
        }
        if (null !== $allDay) {
            $this->setAllDay($allDay);
        }
        if (null !== $availableStartTime) {
            $this->setAvailableStartTime($availableStartTime);
        }
        if (null !== $availableEndTime) {
            $this->setAvailableEndTime($availableEndTime);
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
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek(): array
    {
        return $this->daysOfWeek ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek>
     */
    public function getDaysOfWeekIterator(): iterable
    {
        if (!isset($this->daysOfWeek) || [] === $this->daysOfWeek) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->daysOfWeek);
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return static
     */
    public function addDaysOfWeek(FHIRDaysOfWeek $daysOfWeek): self
    {
        if (!isset($this->daysOfWeek)) {
            $this->daysOfWeek = [];
        }
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDaysOfWeek ...$daysOfWeek
     * @return static
     */
    public function setDaysOfWeek(FHIRDaysOfWeek ...$daysOfWeek): self
    {
        $this->daysOfWeek = [];
        foreach($daysOfWeek as $v) {
            if ($v instanceof FHIRDaysOfWeek) {
                $this->daysOfWeek[] = $v;
            } else {
                $this->daysOfWeek[] = new FHIRDaysOfWeek(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getAllDay(): null|FHIRBoolean
    {
        return $this->allDay ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $allDay
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllDay(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $allDay) {
            unset($this->allDay);
            return $this;
        }
        if (!($allDay instanceof FHIRBoolean)) {
            $allDay = new FHIRBoolean(value: $allDay);
        }
        if (null !== $valueXMLLocation) {
            $allDay->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $allDay->_getValueXMLLocation()) {
            $allDay->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime(): null|FHIRTime
    {
        return $this->availableStartTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $availableStartTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailableStartTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $availableStartTime) {
            unset($this->availableStartTime);
            return $this;
        }
        if (!($availableStartTime instanceof FHIRTime)) {
            $availableStartTime = new FHIRTime(value: $availableStartTime);
        }
        if (null !== $valueXMLLocation) {
            $availableStartTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $availableStartTime->_getValueXMLLocation()) {
            $availableStartTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime(): null|FHIRTime
    {
        return $this->availableEndTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTime $availableEndTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailableEndTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $availableEndTime) {
            unset($this->availableEndTime);
            return $this;
        }
        if (!($availableEndTime instanceof FHIRTime)) {
            $availableEndTime = new FHIRTime(value: $availableEndTime);
        }
        if (null !== $valueXMLLocation) {
            $availableEndTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $availableEndTime->_getValueXMLLocation()) {
            $availableEndTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->availableEndTime = $availableEndTime;
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
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_OF_WEEK])) {
                        $errs[self::FIELD_DAYS_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAYS_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALL_DAY])) {
            $v = $this->getAllDay();
            foreach($validationRules[self::FIELD_ALL_DAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALL_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALL_DAY])) {
                        $errs[self::FIELD_ALL_DAY] = [];
                    }
                    $errs[self::FIELD_ALL_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_START_TIME])) {
            $v = $this->getAvailableStartTime();
            foreach($validationRules[self::FIELD_AVAILABLE_START_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABLE_START_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_START_TIME])) {
                        $errs[self::FIELD_AVAILABLE_START_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_START_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_END_TIME])) {
            $v = $this->getAvailableEndTime();
            foreach($validationRules[self::FIELD_AVAILABLE_END_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABLE_END_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_END_TIME])) {
                        $errs[self::FIELD_AVAILABLE_END_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_END_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPractitionerRoleAvailableTime)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DAYS_OF_WEEK === $childName) {
                $v = new FHIRDaysOfWeek(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALL_DAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAllDay(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AVAILABLE_START_TIME === $childName) {
                $v = new FHIRTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAvailableStartTime(FHIRTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AVAILABLE_END_TIME === $childName) {
                $v = new FHIRTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAvailableEndTime(FHIRTime::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ALL_DAY])) {
            $pt = $type->getAllDay();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ALL_DAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAllDay(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ALL_DAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AVAILABLE_START_TIME])) {
            $pt = $type->getAvailableStartTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AVAILABLE_START_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAvailableStartTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_AVAILABLE_START_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AVAILABLE_END_TIME])) {
            $pt = $type->getAvailableEndTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AVAILABLE_END_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAvailableEndTime(new FHIRTime(
                    value: (string)$attributes[self::FIELD_AVAILABLE_END_TIME],
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
            $xw->openRootNode('PractitionerRoleAvailableTime', $this->_getSourceXMLNS());
        }
        if (isset($this->allDay) && $this->allDay->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ALL_DAY, $this->allDay->getValue()?->_getFormattedValue());
        }
        if (isset($this->availableStartTime) && $this->availableStartTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_START_TIME, $this->availableStartTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->availableEndTime) && $this->availableEndTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_END_TIME, $this->availableEndTime->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->daysOfWeek)) {
            foreach ($this->daysOfWeek as $v) {
                $xw->startElement(self::FIELD_DAYS_OF_WEEK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->allDay) && $this->allDay->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ALL_DAY);
            $this->allDay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->availableStartTime) && $this->availableStartTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AVAILABLE_START_TIME);
            $this->availableStartTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->availableEndTime) && $this->availableEndTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AVAILABLE_END_TIME);
            $this->availableEndTime->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPractitionerRoleAvailableTime)) {
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
        if (isset($json[self::FIELD_DAYS_OF_WEEK]) || isset($json[self::FIELD_DAYS_OF_WEEK_EXT]) || array_key_exists(self::FIELD_DAYS_OF_WEEK, $json) || array_key_exists(self::FIELD_DAYS_OF_WEEK_EXT, $json)) {
            $value = $json[self::FIELD_DAYS_OF_WEEK] ?? null;
            $ext = (isset($json[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($json[self::FIELD_DAYS_OF_WEEK_EXT])) ? $json[self::FIELD_DAYS_OF_WEEK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDaysOfWeek) {
                    $type->addDaysOfWeek($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDaysOfWeek) {
                            $type->addDaysOfWeek($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($v, $iext)));
                            } else {
                                $type->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($ext, $value)));
                } else {
                    $type->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addDaysOfWeek(new FHIRDaysOfWeek($iext));
                }
            } else {
                $type->addDaysOfWeek(new FHIRDaysOfWeek(null));
            }
        }
        if (isset($json[self::FIELD_ALL_DAY]) || isset($json[self::FIELD_ALL_DAY_EXT]) || array_key_exists(self::FIELD_ALL_DAY, $json) || array_key_exists(self::FIELD_ALL_DAY_EXT, $json)) {
            $value = $json[self::FIELD_ALL_DAY] ?? null;
            $ext = (isset($json[self::FIELD_ALL_DAY_EXT]) && is_array($json[self::FIELD_ALL_DAY_EXT])) ? $json[self::FIELD_ALL_DAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setAllDay($value);
                } else if (is_array($value)) {
                    $type->setAllDay(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAllDay(new FHIRBoolean($ext));
            } else {
                $type->setAllDay(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_AVAILABLE_START_TIME]) || isset($json[self::FIELD_AVAILABLE_START_TIME_EXT]) || array_key_exists(self::FIELD_AVAILABLE_START_TIME, $json) || array_key_exists(self::FIELD_AVAILABLE_START_TIME_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABLE_START_TIME] ?? null;
            $ext = (isset($json[self::FIELD_AVAILABLE_START_TIME_EXT]) && is_array($json[self::FIELD_AVAILABLE_START_TIME_EXT])) ? $json[self::FIELD_AVAILABLE_START_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setAvailableStartTime($value);
                } else if (is_array($value)) {
                    $type->setAvailableStartTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setAvailableStartTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAvailableStartTime(new FHIRTime($ext));
            } else {
                $type->setAvailableStartTime(new FHIRTime(null));
            }
        }
        if (isset($json[self::FIELD_AVAILABLE_END_TIME]) || isset($json[self::FIELD_AVAILABLE_END_TIME_EXT]) || array_key_exists(self::FIELD_AVAILABLE_END_TIME, $json) || array_key_exists(self::FIELD_AVAILABLE_END_TIME_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABLE_END_TIME] ?? null;
            $ext = (isset($json[self::FIELD_AVAILABLE_END_TIME_EXT]) && is_array($json[self::FIELD_AVAILABLE_END_TIME_EXT])) ? $json[self::FIELD_AVAILABLE_END_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $type->setAvailableEndTime($value);
                } else if (is_array($value)) {
                    $type->setAvailableEndTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $type->setAvailableEndTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAvailableEndTime(new FHIRTime($ext));
            } else {
                $type->setAvailableEndTime(new FHIRTime(null));
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
        if (isset($this->daysOfWeek) && [] !== $this->daysOfWeek) {
            $vals = [];
            $exts = [];
            foreach ($this->daysOfWeek as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->daysOfWeek = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_daysOfWeek = $exts;
            }
        }
        if (isset($this->allDay)) {
            if (null !== ($val = $this->allDay->getValue())) {
                $out->allDay = $val;
            }
            $ext = $this->allDay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_allDay = $ext;
            }
        }
        if (isset($this->availableStartTime)) {
            if (null !== ($val = $this->availableStartTime->getValue())) {
                $out->availableStartTime = $val;
            }
            $ext = $this->availableStartTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_availableStartTime = $ext;
            }
        }
        if (isset($this->availableEndTime)) {
            if (null !== ($val = $this->availableEndTime->getValue())) {
                $out->availableEndTime = $val;
            }
            $ext = $this->availableEndTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_availableEndTime = $ext;
            }
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