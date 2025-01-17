<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
class FHIRAppointmentMonthlyTemplate extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE;


    public const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    public const FIELD_DAY_OF_MONTH_EXT = '_dayOfMonth';
    public const FIELD_NTH_WEEK_OF_MONTH = 'nthWeekOfMonth';
    public const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    public const FIELD_MONTH_INTERVAL = 'monthInterval';
    public const FIELD_MONTH_INTERVAL_EXT = '_monthInterval';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $dayOfMonth;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $nthWeekOfMonth;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $dayOfWeek;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $monthInterval;

    /** Default validation map for fields in type Appointment.MonthlyTemplate */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_MONTH_INTERVAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRAppointmentMonthlyTemplate Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth = null,
                                null|FHIRCoding $nthWeekOfMonth = null,
                                null|FHIRCoding $dayOfWeek = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $dayOfMonth) {
            $this->setDayOfMonth($dayOfMonth);
        }
        if (null !== $nthWeekOfMonth) {
            $this->setNthWeekOfMonth($nthWeekOfMonth);
        }
        if (null !== $dayOfWeek) {
            $this->setDayOfWeek($dayOfWeek);
        }
        if (null !== $monthInterval) {
            $this->setMonthInterval($monthInterval);
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDayOfMonth(): null|FHIRPositiveInt
    {
        return $this->dayOfMonth ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @return static
     */
    public function setDayOfMonth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth): self
    {
        if (null === $dayOfMonth) {
            unset($this->dayOfMonth);
            return $this;
        }
        if (!($dayOfMonth instanceof FHIRPositiveInt)) {
            $dayOfMonth = new FHIRPositiveInt(value: $dayOfMonth);
        }
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getNthWeekOfMonth(): null|FHIRCoding
    {
        return $this->nthWeekOfMonth ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @return static
     */
    public function setNthWeekOfMonth(null|FHIRCoding $nthWeekOfMonth): self
    {
        if (null === $nthWeekOfMonth) {
            unset($this->nthWeekOfMonth);
            return $this;
        }
        $this->nthWeekOfMonth = $nthWeekOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getDayOfWeek(): null|FHIRCoding
    {
        return $this->dayOfWeek ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @return static
     */
    public function setDayOfWeek(null|FHIRCoding $dayOfWeek): self
    {
        if (null === $dayOfWeek) {
            unset($this->dayOfWeek);
            return $this;
        }
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMonthInterval(): null|FHIRPositiveInt
    {
        return $this->monthInterval ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @return static
     */
    public function setMonthInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval): self
    {
        if (null === $monthInterval) {
            unset($this->monthInterval);
            return $this;
        }
        if (!($monthInterval instanceof FHIRPositiveInt)) {
            $monthInterval = new FHIRPositiveInt(value: $monthInterval);
        }
        $this->monthInterval = $monthInterval;
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
        if (null !== ($v = $this->getMonthInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTH_INTERVAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_MONTH])) {
            $v = $this->getDayOfMonth();
            foreach($validationRules[self::FIELD_DAY_OF_MONTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAY_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_MONTH])) {
                        $errs[self::FIELD_DAY_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_DAY_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NTH_WEEK_OF_MONTH])) {
            $v = $this->getNthWeekOfMonth();
            foreach($validationRules[self::FIELD_NTH_WEEK_OF_MONTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NTH_WEEK_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NTH_WEEK_OF_MONTH])) {
                        $errs[self::FIELD_NTH_WEEK_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_NTH_WEEK_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_WEEK])) {
            $v = $this->getDayOfWeek();
            foreach($validationRules[self::FIELD_DAY_OF_WEEK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_WEEK])) {
                        $errs[self::FIELD_DAY_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAY_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONTH_INTERVAL])) {
            $v = $this->getMonthInterval();
            foreach($validationRules[self::FIELD_MONTH_INTERVAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONTH_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONTH_INTERVAL])) {
                        $errs[self::FIELD_MONTH_INTERVAL] = [];
                    }
                    $errs[self::FIELD_MONTH_INTERVAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DAY_OF_MONTH === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDayOfMonth(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NTH_WEEK_OF_MONTH === $childName) {
                $v = new FHIRCoding();
                $type->setNthWeekOfMonth(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DAY_OF_WEEK === $childName) {
                $v = new FHIRCoding();
                $type->setDayOfWeek(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MONTH_INTERVAL === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMonthInterval(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DAY_OF_MONTH])) {
            $pt = $type->getDayOfMonth();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DAY_OF_MONTH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDayOfMonth(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DAY_OF_MONTH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MONTH_INTERVAL])) {
            $pt = $type->getMonthInterval();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MONTH_INTERVAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMonthInterval(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_MONTH_INTERVAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('AppointmentMonthlyTemplate', $this->_getSourceXMLNS());
        }
        if (isset($this->dayOfMonth) && $this->dayOfMonth->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DAY_OF_MONTH, $this->dayOfMonth->getValue()?->getFormattedValue());
        }
        if (isset($this->monthInterval) && $this->monthInterval->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MONTH_INTERVAL, $this->monthInterval->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->dayOfMonth) && $this->dayOfMonth->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DAY_OF_MONTH);
            $this->dayOfMonth->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->nthWeekOfMonth)) {
            $xw->startElement(self::FIELD_NTH_WEEK_OF_MONTH);
            $this->nthWeekOfMonth->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dayOfWeek)) {
            $xw->startElement(self::FIELD_DAY_OF_WEEK);
            $this->dayOfWeek->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->monthInterval) && $this->monthInterval->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MONTH_INTERVAL);
            $this->monthInterval->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
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
        if (isset($json[self::FIELD_DAY_OF_MONTH]) || isset($json[self::FIELD_DAY_OF_MONTH_EXT]) || array_key_exists(self::FIELD_DAY_OF_MONTH, $json) || array_key_exists(self::FIELD_DAY_OF_MONTH_EXT, $json)) {
            $value = $json[self::FIELD_DAY_OF_MONTH] ?? null;
            $ext = (isset($json[self::FIELD_DAY_OF_MONTH_EXT]) && is_array($json[self::FIELD_DAY_OF_MONTH_EXT])) ? $json[self::FIELD_DAY_OF_MONTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setDayOfMonth($value);
                } else if (is_array($value)) {
                    $type->setDayOfMonth(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setDayOfMonth(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDayOfMonth(new FHIRPositiveInt($ext));
            } else {
                $type->setDayOfMonth(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_NTH_WEEK_OF_MONTH]) || array_key_exists(self::FIELD_NTH_WEEK_OF_MONTH, $json)) {
            if ($json[self::FIELD_NTH_WEEK_OF_MONTH] instanceof FHIRCoding) {
                $type->setNthWeekOfMonth($json[self::FIELD_NTH_WEEK_OF_MONTH]);
            } else {
                $type->setNthWeekOfMonth(new FHIRCoding($json[self::FIELD_NTH_WEEK_OF_MONTH]));
            }
        }
        if (isset($json[self::FIELD_DAY_OF_WEEK]) || array_key_exists(self::FIELD_DAY_OF_WEEK, $json)) {
            if ($json[self::FIELD_DAY_OF_WEEK] instanceof FHIRCoding) {
                $type->setDayOfWeek($json[self::FIELD_DAY_OF_WEEK]);
            } else {
                $type->setDayOfWeek(new FHIRCoding($json[self::FIELD_DAY_OF_WEEK]));
            }
        }
        if (isset($json[self::FIELD_MONTH_INTERVAL]) || isset($json[self::FIELD_MONTH_INTERVAL_EXT]) || array_key_exists(self::FIELD_MONTH_INTERVAL, $json) || array_key_exists(self::FIELD_MONTH_INTERVAL_EXT, $json)) {
            $value = $json[self::FIELD_MONTH_INTERVAL] ?? null;
            $ext = (isset($json[self::FIELD_MONTH_INTERVAL_EXT]) && is_array($json[self::FIELD_MONTH_INTERVAL_EXT])) ? $json[self::FIELD_MONTH_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setMonthInterval($value);
                } else if (is_array($value)) {
                    $type->setMonthInterval(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setMonthInterval(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMonthInterval(new FHIRPositiveInt($ext));
            } else {
                $type->setMonthInterval(new FHIRPositiveInt(null));
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
        if (isset($this->dayOfMonth)) {
            if (null !== ($val = $this->dayOfMonth->getValue())) {
                $out->dayOfMonth = $val;
            }
            $ext = $this->dayOfMonth->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dayOfMonth = $ext;
            }
        }
        if (isset($this->nthWeekOfMonth)) {
            $out->nthWeekOfMonth = $this->nthWeekOfMonth;
        }
        if (isset($this->dayOfWeek)) {
            $out->dayOfWeek = $this->dayOfWeek;
        }
        if (isset($this->monthInterval)) {
            if (null !== ($val = $this->monthInterval->getValue())) {
                $out->monthInterval = $val;
            }
            $ext = $this->monthInterval->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_monthInterval = $ext;
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