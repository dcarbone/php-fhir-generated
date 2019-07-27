<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A description of a triggering event. Triggering events can be named events, data
 * events, or periodic, as determined by the type element.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTriggerDefinition
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
 */
class FHIRTriggerDefinition extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TRIGGER_DEFINITION;

    const FIELD_CONDITION = 'condition';
    const FIELD_DATA = 'data';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_TIMING_DATE = 'timingDate';
    const FIELD_TIMING_DATE_EXT = '_timingDate';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_REFERENCE = 'timingReference';
    const FIELD_TIMING_TIMING = 'timingTiming';
    const FIELD_TYPE = 'type';

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A boolean-valued expression that is evaluated in the context of the container of
     * the trigger definition and returns whether or not the trigger fires.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    private $condition = null;

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger). If more than one
     * data is requirement is specified, then all the data requirements must be true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    private $data = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A formal name for the event. This may be an absolute URI that identifies the
     * event formally (e.g. from a trigger registry), or a simple relative URI that
     * identifies the event in a local context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $timingDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $timingDateTime = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $timingReference = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $timingTiming = null;

    /**
     * The type of trigger.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    private $type = null;

    /**
     * FHIRTriggerDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTriggerDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONDITION])) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRExpression) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRExpression($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_DATA])) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRDataRequirement($v));
                    }
                }
            } else if ($data[self::FIELD_DATA] instanceof FHIRDataRequirement) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRDataRequirement($data[self::FIELD_DATA]));
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
        if (isset($data[self::FIELD_TIMING_DATE])) {
            $ext = (isset($data[self::FIELD_TIMING_DATE_EXT]) && is_array($data[self::FIELD_TIMING_DATE_EXT]))
                ? $data[self::FIELD_TIMING_DATE_EXT]
                : null;
            if ($data[self::FIELD_TIMING_DATE] instanceof FHIRDate) {
                $this->setTimingDate($data[self::FIELD_TIMING_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMING_DATE])) {
                $this->setTimingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_TIMING_DATE]] + $ext));
            } else {
                $this->setTimingDate(new FHIRDate($data[self::FIELD_TIMING_DATE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT]))
                ? $data[self::FIELD_TIMING_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_TIMING_DATE_TIME] instanceof FHIRDateTime) {
                $this->setTimingDateTime($data[self::FIELD_TIMING_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMING_DATE_TIME])) {
                $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_TIMING_DATE_TIME]] + $ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime($data[self::FIELD_TIMING_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_TIMING_REFERENCE])) {
            if ($data[self::FIELD_TIMING_REFERENCE] instanceof FHIRReference) {
                $this->setTimingReference($data[self::FIELD_TIMING_REFERENCE]);
            } else {
                $this->setTimingReference(new FHIRReference($data[self::FIELD_TIMING_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_TIMING])) {
            if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
            } else {
                $this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRTriggerType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRTriggerType($data[self::FIELD_TYPE]));
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
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A boolean-valued expression that is evaluated in the context of the container of
     * the trigger definition and returns whether or not the trigger fires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A boolean-valued expression that is evaluated in the context of the container of
     * the trigger definition and returns whether or not the trigger fires.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExpression $condition
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setCondition(FHIRExpression $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger). If more than one
     * data is requirement is specified, then all the data requirements must be true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger). If more than one
     * data is requirement is specified, then all the data requirements must be true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $data
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function addData(FHIRDataRequirement $data = null)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger). If more than one
     * data is requirement is specified, then all the data requirements must be true.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[] $data
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setData(array $data = [])
    {
        $this->data = [];
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            if ($v instanceof FHIRDataRequirement) {
                $this->addData($v);
            } else {
                $this->addData(new FHIRDataRequirement($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A formal name for the event. This may be an absolute URI that identifies the
     * event formally (e.g. from a trigger registry), or a simple relative URI that
     * identifies the event in a local context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A formal name for the event. This may be an absolute URI that identifies the
     * event formally (e.g. from a trigger registry), or a simple relative URI that
     * identifies the event in a local context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $timingDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setTimingDate($timingDate = null)
    {
        if (null === $timingDate) {
            $this->timingDate = null;
            return $this;
        }
        if ($timingDate instanceof FHIRDate) {
            $this->timingDate = $timingDate;
            return $this;
        }
        $this->timingDate = new FHIRDate($timingDate);
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
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $timingDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setTimingDateTime($timingDateTime = null)
    {
        if (null === $timingDateTime) {
            $this->timingDateTime = null;
            return $this;
        }
        if ($timingDateTime instanceof FHIRDateTime) {
            $this->timingDateTime = $timingDateTime;
            return $this;
        }
        $this->timingDateTime = new FHIRDateTime($timingDateTime);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTimingReference()
    {
        return $this->timingReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $timingReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setTimingReference(FHIRReference $timingReference = null)
    {
        $this->timingReference = $timingReference;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of
     * timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming $timingTiming
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * The type of trigger.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of trigger.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function setType(FHIRTriggerType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
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
                throw new \DomainException(sprintf('FHIRTriggerDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTriggerDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize(\$sxe, new FHIRTriggerDefinition);
        } elseif (!is_object($type) || !($type instanceof FHIRTriggerDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRTriggerDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->condition)) {
            $type->setCondition(FHIRExpression::xmlUnserialize($children->condition));
        }
        if (isset($children->data)) {
            foreach($children->data as $child) {
                $type->addData(FHIRDataRequirement::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->timingDate)) {
            $type->setTimingDate((string)$attributes->timingDate);
        }
        if (isset($children->timingDate)) {
            $type->setTimingDate(FHIRDate::xmlUnserialize($children->timingDate));
        }
        if (isset($attributes->timingDateTime)) {
            $type->setTimingDateTime((string)$attributes->timingDateTime);
        }
        if (isset($children->timingDateTime)) {
            $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($children->timingDateTime));
        }
        if (isset($children->timingReference)) {
            $type->setTimingReference(FHIRReference::xmlUnserialize($children->timingReference));
        }
        if (isset($children->timingTiming)) {
            $type->setTimingTiming(FHIRTiming::xmlUnserialize($children->timingTiming));
        }
        if (isset($children->type)) {
            $type->setType(FHIRTriggerType::xmlUnserialize($children->type));
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
            $sxe = new \SimpleXMLElement('<TriggerDefinition xmlns="http://hl7.org/fhir"></TriggerDefinition>');
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION));
        }
        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATA));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if (null !== ($v = $this->getTimingDate())) {
            $sxe->addAttribute(self::FIELD_TIMING_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE));
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $sxe->addAttribute(self::FIELD_TIMING_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getTimingReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_REFERENCE));
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_TIMING));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $v;
        }
        if ([] !== ($vs = $this->getData())) {
            $a[self::FIELD_DATA] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingDate())) {
            $a[self::FIELD_TIMING_DATE] = (string)$v;
            $a[self::FIELD_TIMING_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = (string)$v;
            $a[self::FIELD_TIMING_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingReference())) {
            $a[self::FIELD_TIMING_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a[self::FIELD_TIMING_TIMING] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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