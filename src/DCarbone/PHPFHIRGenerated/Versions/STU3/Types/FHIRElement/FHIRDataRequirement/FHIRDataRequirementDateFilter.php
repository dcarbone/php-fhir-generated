<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRDataRequirementDateFilter extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER;


    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    public const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    public const FIELD_VALUE_PERIOD = 'valuePeriod';
    public const FIELD_VALUE_DURATION = 'valueDuration';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $path;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $valueDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $valuePeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $valueDuration;

    /** Default validation map for fields in type DataRequirement.DateFilter */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_PATH => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRDataRequirementDateFilter Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $valueDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $valuePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime = null,
                                null|FHIRPeriod $valuePeriod = null,
                                null|FHIRDuration $valueDuration = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $path) {
            $this->setPath($path);
        }
        if (null !== $valueDateTime) {
            $this->setValueDateTime($valueDateTime);
        }
        if (null !== $valuePeriod) {
            $this->setValuePeriod($valuePeriod);
        }
        if (null !== $valueDuration) {
            $this->setValueDuration($valueDuration);
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date-valued attribute of the filter. The specified path must be resolvable
     * from the type of the required data. The path is allowed to contain qualifiers
     * (.) to traverse sub-elements, as well as indexers ([x]) to traverse
     * multiple-cardinality sub-elements. Note that the index must be an integer
     * constant. The path must resolve to an element of type dateTime, Period,
     * Schedule, or Timing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $path
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        if (null !== $valueXMLLocation) {
            $path->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $path->_getValueXMLLocation()) {
            $path->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->path = $path;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime(): null|FHIRDateTime
    {
        return $this->valueDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $valueDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $valueDateTime,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueDateTime) {
            unset($this->valueDateTime);
            return $this;
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime(value: $valueDateTime);
        }
        if (null !== $valueXMLLocation) {
            $valueDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueDateTime->_getValueXMLLocation()) {
            $valueDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod(): null|FHIRPeriod
    {
        return $this->valuePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(null|FHIRPeriod $valuePeriod): self
    {
        if (null === $valuePeriod) {
            unset($this->valuePeriod);
            return $this;
        }
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration(): null|FHIRDuration
    {
        return $this->valueDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration from now.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return static
     */
    public function setValueDuration(null|FHIRDuration $valueDuration): self
    {
        if (null === $valueDuration) {
            unset($this->valueDuration);
            return $this;
        }
        $this->valueDuration = $valueDuration;
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
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE_TIME])) {
            $v = $this->getValueDateTime();
            foreach($validationRules[self::FIELD_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
            $v = $this->getValuePeriod();
            foreach($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
                        $errs[self::FIELD_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DURATION])) {
            $v = $this->getValueDuration();
            foreach($validationRules[self::FIELD_VALUE_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_DURATION])) {
                        $errs[self::FIELD_VALUE_DURATION] = [];
                    }
                    $errs[self::FIELD_VALUE_DURATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirementDateFilter)) {
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
            } else if (self::FIELD_PATH === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPath(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setValueDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PATH])) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PATH]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPath(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATH],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_DATE_TIME])) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_VALUE_DATE_TIME],
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
            $xw->openRootNode('DataRequirementDateFilter', $this->_getSourceXMLNS());
        }
        if (isset($this->path) && $this->path->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueDateTime) && $this->valueDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_DATE_TIME, $this->valueDateTime->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->path) && $this->path->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDateTime) && $this->valueDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_DATE_TIME);
            $this->valueDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valuePeriod)) {
            $xw->startElement(self::FIELD_VALUE_PERIOD);
            $this->valuePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueDuration)) {
            $xw->startElement(self::FIELD_VALUE_DURATION);
            $this->valueDuration->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirementDateFilter)) {
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
        if (isset($json[self::FIELD_PATH]) || isset($json[self::FIELD_PATH_EXT]) || array_key_exists(self::FIELD_PATH, $json) || array_key_exists(self::FIELD_PATH_EXT, $json)) {
            $value = $json[self::FIELD_PATH] ?? null;
            $ext = (isset($json[self::FIELD_PATH_EXT]) && is_array($json[self::FIELD_PATH_EXT])) ? $json[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPath($value);
                } else if (is_array($value)) {
                    $type->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPath(new FHIRString($ext));
            } else {
                $type->setPath(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VALUE_DATE_TIME]) || isset($json[self::FIELD_VALUE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_VALUE_DATE_TIME, $json) || array_key_exists(self::FIELD_VALUE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($json[self::FIELD_VALUE_DATE_TIME_EXT])) ? $json[self::FIELD_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setValueDateTime($value);
                } else if (is_array($value)) {
                    $type->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValueDateTime(new FHIRDateTime($ext));
            } else {
                $type->setValueDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_VALUE_PERIOD]) || array_key_exists(self::FIELD_VALUE_PERIOD, $json)) {
            if ($json[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $type->setValuePeriod($json[self::FIELD_VALUE_PERIOD]);
            } else {
                $type->setValuePeriod(new FHIRPeriod($json[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_VALUE_DURATION]) || array_key_exists(self::FIELD_VALUE_DURATION, $json)) {
            if ($json[self::FIELD_VALUE_DURATION] instanceof FHIRDuration) {
                $type->setValueDuration($json[self::FIELD_VALUE_DURATION]);
            } else {
                $type->setValueDuration(new FHIRDuration($json[self::FIELD_VALUE_DURATION]));
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
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            $ext = $this->path->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_path = $ext;
            }
        }
        if (isset($this->valueDateTime)) {
            if (null !== ($val = $this->valueDateTime->getValue())) {
                $out->valueDateTime = $val;
            }
            $ext = $this->valueDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueDateTime = $ext;
            }
        }
        if (isset($this->valuePeriod)) {
            $out->valuePeriod = $this->valuePeriod;
        }
        if (isset($this->valueDuration)) {
            $out->valueDuration = $this->valueDuration;
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