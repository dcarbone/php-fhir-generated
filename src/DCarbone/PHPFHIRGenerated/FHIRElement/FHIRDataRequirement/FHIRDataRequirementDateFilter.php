<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirementDateFilter
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementDateFilter extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER;

    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_SEARCH_PARAM_EXT = '_searchParam';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_DURATION = 'valueDuration';
    const FIELD_VALUE_PERIOD = 'valuePeriod';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $path = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A date parameter that refers to a search parameter defined on the specified type
     * of the DataRequirement, and which searches on elements of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $searchParam = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $valueDuration = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $valuePeriod = null;

    /**
     * FHIRDataRequirementDateFilter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementDateFilter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PATH])) {
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT]))
                ? $data[self::FIELD_PATH_EXT]
                : null;
            if ($data[self::FIELD_PATH] instanceof FHIRString) {
                $this->setPath($data[self::FIELD_PATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATH])) {
                $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATH]] + $ext));
            } else {
                $this->setPath(new FHIRString($data[self::FIELD_PATH]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            $ext = (isset($data[self::FIELD_SEARCH_PARAM_EXT]) && is_array($data[self::FIELD_SEARCH_PARAM_EXT]))
                ? $data[self::FIELD_SEARCH_PARAM_EXT]
                : null;
            if ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRString) {
                $this->setSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEARCH_PARAM])) {
                $this->setSearchParam(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SEARCH_PARAM]] + $ext));
            } else {
                $this->setSearchParam(new FHIRString($data[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT]))
                ? $data[self::FIELD_VALUE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_VALUE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setValueDateTime($data[self::FIELD_VALUE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_DATE_TIME])) {
                $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALUE_DATE_TIME]] + $ext));
            } else {
                $this->setValueDateTime(new FHIRDateTime($data[self::FIELD_VALUE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_VALUE_DURATION])) {
            if ($data[self::FIELD_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setValueDuration($data[self::FIELD_VALUE_DURATION]);
            } else {
                $this->setValueDuration(new FHIRDuration($data[self::FIELD_VALUE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $path
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A date parameter that refers to a search parameter defined on the specified type
     * of the DataRequirement, and which searches on elements of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A date parameter that refers to a search parameter defined on the specified type
     * of the DataRequirement, and which searches on elements of type date, dateTime,
     * Period, Schedule, or Timing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $searchParam
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function setSearchParam($searchParam = null)
    {
        if (null === $searchParam) {
            $this->searchParam = null;
            return $this;
        }
        if ($searchParam instanceof FHIRString) {
            $this->searchParam = $searchParam;
            return $this;
        }
        $this->searchParam = new FHIRString($searchParam);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null === $valueDateTime) {
            $this->valueDateTime = null;
            return $this;
        }
        if ($valueDateTime instanceof FHIRDateTime) {
            $this->valueDateTime = $valueDateTime;
            return $this;
        }
        $this->valueDateTime = new FHIRDateTime($valueDateTime);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function setValueDuration(FHIRDuration $valueDuration = null)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The value of the filter. If period is specified, the filter will return only
     * those data items that fall within the bounds determined by the Period, inclusive
     * of the period boundaries. If dateTime is specified, the filter will return only
     * those data items that are equal to the specified dateTime. If a Duration is
     * specified, the filter will return only those data items that fall within
     * Duration before now. (choose any one of value*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDataRequirementDateFilter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirementDateFilter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize(\$sxe, new FHIRDataRequirementDateFilter);
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirementDateFilter)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirementDateFilter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->path)) {
            $type->setPath((string)$attributes->path);
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($attributes->searchParam)) {
            $type->setSearchParam((string)$attributes->searchParam);
        }
        if (isset($children->searchParam)) {
            $type->setSearchParam(FHIRString::xmlUnserialize($children->searchParam));
        }
        if (isset($attributes->valueDateTime)) {
            $type->setValueDateTime((string)$attributes->valueDateTime);
        }
        if (isset($children->valueDateTime)) {
            $type->setValueDateTime(FHIRDateTime::xmlUnserialize($children->valueDateTime));
        }
        if (isset($children->valueDuration)) {
            $type->setValueDuration(FHIRDuration::xmlUnserialize($children->valueDuration));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DataRequirementDateFilter xmlns="http://hl7.org/fhir"></DataRequirementDateFilter>');
        }
        if (null !== ($v = $this->getPath())) {
            $sxe->addAttribute(self::FIELD_PATH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATH));
            }
        }
        if (null !== ($v = $this->getSearchParam())) {
            $sxe->addAttribute(self::FIELD_SEARCH_PARAM, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_PARAM));
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $sxe->addAttribute(self::FIELD_VALUE_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getValueDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_DURATION));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = (string)$v;
            $a[self::FIELD_PATH_EXT] = $v;
        }
        if (null !== ($v = $this->getSearchParam())) {
            $a[self::FIELD_SEARCH_PARAM] = (string)$v;
            $a[self::FIELD_SEARCH_PARAM_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a[self::FIELD_VALUE_DATE_TIME] = (string)$v;
            $a[self::FIELD_VALUE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $a[self::FIELD_VALUE_DURATION] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}