<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRAppointmentMonthlyTemplate extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE;

    /* class_default.php:56 */
    public const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    public const FIELD_DAY_OF_MONTH_EXT = '_dayOfMonth';
    public const FIELD_NTH_WEEK_OF_MONTH = 'nthWeekOfMonth';
    public const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    public const FIELD_MONTH_INTERVAL = 'monthInterval';
    public const FIELD_MONTH_INTERVAL_EXT = '_monthInterval';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_MONTH_INTERVAL => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DAY_OF_MONTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MONTH_INTERVAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
    #[FHIRPositiveInt]
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
    #[FHIRCoding]
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
    #[FHIRCoding]
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
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $monthInterval;

    /* constructor.php:61 */
    /**
     * FHIRAppointmentMonthlyTemplate Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth = null,
                                null|FHIRCoding $nthWeekOfMonth = null,
                                null|FHIRCoding $dayOfWeek = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @return static
     */
    public function setDayOfMonth(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth): self
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @return static
     */
    public function setMonthInterval(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval): self
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

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAY_OF_MONTH === $cen) {
                $type->setDayOfMonth(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NTH_WEEK_OF_MONTH === $cen) {
                $type->setNthWeekOfMonth(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAY_OF_WEEK === $cen) {
                $type->setDayOfWeek(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONTH_INTERVAL === $cen) {
                $type->setMonthInterval(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DAY_OF_MONTH])) {
            if (isset($type->dayOfMonth)) {
                $type->dayOfMonth->setValue((string)$attributes[self::FIELD_DAY_OF_MONTH]);
            } else {
                $type->setDayOfMonth((string)$attributes[self::FIELD_DAY_OF_MONTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DAY_OF_MONTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MONTH_INTERVAL])) {
            if (isset($type->monthInterval)) {
                $type->monthInterval->setValue((string)$attributes[self::FIELD_MONTH_INTERVAL]);
            } else {
                $type->setMonthInterval((string)$attributes[self::FIELD_MONTH_INTERVAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MONTH_INTERVAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->dayOfMonth) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]) {
            $xw->writeAttribute(self::FIELD_DAY_OF_MONTH, $this->dayOfMonth->_getValueAsString());
        }
        if (isset($this->monthInterval) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]) {
            $xw->writeAttribute(self::FIELD_MONTH_INTERVAL, $this->monthInterval->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->dayOfMonth)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]
                || $this->dayOfMonth->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DAY_OF_MONTH);
            $this->dayOfMonth->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]);
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
        if (isset($this->monthInterval)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]
                || $this->monthInterval->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MONTH_INTERVAL);
            $this->monthInterval->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->dayOfMonth)
            || isset($decoded->_dayOfMonth)
            || property_exists($decoded, self::FIELD_DAY_OF_MONTH)
            || property_exists($decoded, self::FIELD_DAY_OF_MONTH_EXT)) {
            $v = $decoded->_dayOfMonth ?? new \stdClass();
            $v->value = $decoded->dayOfMonth ?? null;
            $type->setDayOfMonth(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->nthWeekOfMonth) || property_exists($decoded, self::FIELD_NTH_WEEK_OF_MONTH)) {
            if (is_array($decoded->nthWeekOfMonth)) {
                $type->setNthWeekOfMonth(FHIRCoding::jsonUnserialize(reset($decoded->nthWeekOfMonth), $config));
            } else {
                $type->setNthWeekOfMonth(FHIRCoding::jsonUnserialize($decoded->nthWeekOfMonth, $config));
            }
        }
        if (isset($decoded->dayOfWeek) || property_exists($decoded, self::FIELD_DAY_OF_WEEK)) {
            if (is_array($decoded->dayOfWeek)) {
                $type->setDayOfWeek(FHIRCoding::jsonUnserialize(reset($decoded->dayOfWeek), $config));
            } else {
                $type->setDayOfWeek(FHIRCoding::jsonUnserialize($decoded->dayOfWeek, $config));
            }
        }
        if (isset($decoded->monthInterval)
            || isset($decoded->_monthInterval)
            || property_exists($decoded, self::FIELD_MONTH_INTERVAL)
            || property_exists($decoded, self::FIELD_MONTH_INTERVAL_EXT)) {
            $v = $decoded->_monthInterval ?? new \stdClass();
            $v->value = $decoded->monthInterval ?? null;
            $type->setMonthInterval(FHIRPositiveInt::jsonUnserialize($v, $config));
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
            if ($this->dayOfMonth->_nonValueFieldDefined()) {
                $ext = $this->dayOfMonth->jsonSerialize();
                unset($ext->value);
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
            if ($this->monthInterval->_nonValueFieldDefined()) {
                $ext = $this->monthInterval->jsonSerialize();
                unset($ext->value);
                $out->_monthInterval = $ext;
            }
        }
        return $out;
    }
}