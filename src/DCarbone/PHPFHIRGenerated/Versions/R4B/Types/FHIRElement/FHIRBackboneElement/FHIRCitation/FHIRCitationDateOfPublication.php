<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRCitationDateOfPublication extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_DATE_OF_PUBLICATION;

    /* class_default.php:56 */
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_YEAR = 'year';
    public const FIELD_YEAR_EXT = '_year';
    public const FIELD_MONTH = 'month';
    public const FIELD_MONTH_EXT = '_month';
    public const FIELD_DAY = 'day';
    public const FIELD_DAY_EXT = '_day';
    public const FIELD_SEASON = 'season';
    public const FIELD_SEASON_EXT = '_season';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_YEAR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MONTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SEASON => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date on which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    #[FHIRDate]
    protected FHIRDate $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Year on which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $year;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Month on which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $month;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Day on which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $day;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $season;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date of which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $text;

    /* constructor.php:61 */
    /**
     * FHIRCitationDateOfPublication Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $year
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $month
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $day
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $season
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $text
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $year = null,
                                null|string|FHIRStringPrimitive|FHIRString $month = null,
                                null|string|FHIRStringPrimitive|FHIRString $day = null,
                                null|string|FHIRStringPrimitive|FHIRString $season = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $year) {
            $this->setYear($year);
        }
        if (null !== $month) {
            $this->setMonth($month);
        }
        if (null !== $day) {
            $this->setDay($day);
        }
        if (null !== $season) {
            $this->setSeason($season);
        }
        if (null !== $text) {
            $this->setText($text);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date on which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
     */
    public function getDate(): null|FHIRDate
    {
        return $this->date ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date on which the issue of the journal was published.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDate)) {
            $date = new FHIRDate(value: $date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Year on which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getYear(): null|FHIRString
    {
        return $this->year ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Year on which the issue of the journal was published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $year
     * @return static
     */
    public function setYear(null|string|FHIRStringPrimitive|FHIRString $year): self
    {
        if (null === $year) {
            unset($this->year);
            return $this;
        }
        if (!($year instanceof FHIRString)) {
            $year = new FHIRString(value: $year);
        }
        $this->year = $year;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Month on which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getMonth(): null|FHIRString
    {
        return $this->month ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Month on which the issue of the journal was published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $month
     * @return static
     */
    public function setMonth(null|string|FHIRStringPrimitive|FHIRString $month): self
    {
        if (null === $month) {
            unset($this->month);
            return $this;
        }
        if (!($month instanceof FHIRString)) {
            $month = new FHIRString(value: $month);
        }
        $this->month = $month;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Day on which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDay(): null|FHIRString
    {
        return $this->day ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Day on which the issue of the journal was published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $day
     * @return static
     */
    public function setDay(null|string|FHIRStringPrimitive|FHIRString $day): self
    {
        if (null === $day) {
            unset($this->day);
            return $this;
        }
        if (!($day instanceof FHIRString)) {
            $day = new FHIRString(value: $day);
        }
        $this->day = $day;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getSeason(): null|FHIRString
    {
        return $this->season ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $season
     * @return static
     */
    public function setSeason(null|string|FHIRStringPrimitive|FHIRString $season): self
    {
        if (null === $season) {
            unset($this->season);
            return $this;
        }
        if (!($season instanceof FHIRString)) {
            $season = new FHIRString(value: $season);
        }
        $this->season = $season;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date of which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date of which the issue of the journal was published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationDateOfPublication)) {
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
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_YEAR === $cen) {
                $type->setYear(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONTH === $cen) {
                $type->setMonth(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAY === $cen) {
                $type->setDay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEASON === $cen) {
                $type->setSeason(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_YEAR])) {
            if (isset($type->year)) {
                $type->year->setValue((string)$attributes[self::FIELD_YEAR]);
            } else {
                $type->setYear((string)$attributes[self::FIELD_YEAR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_YEAR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MONTH])) {
            if (isset($type->month)) {
                $type->month->setValue((string)$attributes[self::FIELD_MONTH]);
            } else {
                $type->setMonth((string)$attributes[self::FIELD_MONTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MONTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DAY])) {
            if (isset($type->day)) {
                $type->day->setValue((string)$attributes[self::FIELD_DAY]);
            } else {
                $type->setDay((string)$attributes[self::FIELD_DAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEASON])) {
            if (isset($type->season)) {
                $type->season->setValue((string)$attributes[self::FIELD_SEASON]);
            } else {
                $type->setSeason((string)$attributes[self::FIELD_SEASON]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEASON, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->year) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_YEAR]) {
            $xw->writeAttribute(self::FIELD_YEAR, $this->year->_getValueAsString());
        }
        if (isset($this->month) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MONTH]) {
            $xw->writeAttribute(self::FIELD_MONTH, $this->month->_getValueAsString());
        }
        if (isset($this->day) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DAY]) {
            $xw->writeAttribute(self::FIELD_DAY, $this->day->_getValueAsString());
        }
        if (isset($this->season) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEASON]) {
            $xw->writeAttribute(self::FIELD_SEASON, $this->season->_getValueAsString());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->year)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_YEAR]
                || $this->year->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_YEAR);
            $this->year->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_YEAR]);
            $xw->endElement();
        }
        if (isset($this->month)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MONTH]
                || $this->month->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MONTH);
            $this->month->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MONTH]);
            $xw->endElement();
        }
        if (isset($this->day)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DAY]
                || $this->day->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DAY);
            $this->day->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DAY]);
            $xw->endElement();
        }
        if (isset($this->season)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEASON]
                || $this->season->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEASON);
            $this->season->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEASON]);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationDateOfPublication)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->date)
            || isset($decoded->_date)
            || property_exists($decoded, self::FIELD_DATE)
            || property_exists($decoded, self::FIELD_DATE_EXT)) {
            $v = $decoded->_date ?? new \stdClass();
            $v->value = $decoded->date ?? null;
            $type->setDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->year)
            || isset($decoded->_year)
            || property_exists($decoded, self::FIELD_YEAR)
            || property_exists($decoded, self::FIELD_YEAR_EXT)) {
            $v = $decoded->_year ?? new \stdClass();
            $v->value = $decoded->year ?? null;
            $type->setYear(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->month)
            || isset($decoded->_month)
            || property_exists($decoded, self::FIELD_MONTH)
            || property_exists($decoded, self::FIELD_MONTH_EXT)) {
            $v = $decoded->_month ?? new \stdClass();
            $v->value = $decoded->month ?? null;
            $type->setMonth(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->day)
            || isset($decoded->_day)
            || property_exists($decoded, self::FIELD_DAY)
            || property_exists($decoded, self::FIELD_DAY_EXT)) {
            $v = $decoded->_day ?? new \stdClass();
            $v->value = $decoded->day ?? null;
            $type->setDay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->season)
            || isset($decoded->_season)
            || property_exists($decoded, self::FIELD_SEASON)
            || property_exists($decoded, self::FIELD_SEASON_EXT)) {
            $v = $decoded->_season ?? new \stdClass();
            $v->value = $decoded->season ?? null;
            $type->setSeason(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->text)
            || isset($decoded->_text)
            || property_exists($decoded, self::FIELD_TEXT)
            || property_exists($decoded, self::FIELD_TEXT_EXT)) {
            $v = $decoded->_text ?? new \stdClass();
            $v->value = $decoded->text ?? null;
            $type->setText(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
        }
        if (isset($this->year)) {
            if (null !== ($val = $this->year->getValue())) {
                $out->year = $val;
            }
            if ($this->year->_nonValueFieldDefined()) {
                $ext = $this->year->jsonSerialize();
                unset($ext->value);
                $out->_year = $ext;
            }
        }
        if (isset($this->month)) {
            if (null !== ($val = $this->month->getValue())) {
                $out->month = $val;
            }
            if ($this->month->_nonValueFieldDefined()) {
                $ext = $this->month->jsonSerialize();
                unset($ext->value);
                $out->_month = $ext;
            }
        }
        if (isset($this->day)) {
            if (null !== ($val = $this->day->getValue())) {
                $out->day = $val;
            }
            if ($this->day->_nonValueFieldDefined()) {
                $ext = $this->day->jsonSerialize();
                unset($ext->value);
                $out->_day = $ext;
            }
        }
        if (isset($this->season)) {
            if (null !== ($val = $this->season->getValue())) {
                $out->season = $val;
            }
            if ($this->season->_nonValueFieldDefined()) {
                $ext = $this->season->jsonSerialize();
                unset($ext->value);
                $out->_season = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            if ($this->text->_nonValueFieldDefined()) {
                $ext = $this->text->jsonSerialize();
                unset($ext->value);
                $out->_text = $ext;
            }
        }
        return $out;
    }
}