<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A description of a triggering event.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRTriggerDefinition
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRTriggerDefinition extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TRIGGER_DEFINITION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_EVENT_DATA = 'eventData';
    const FIELD_EVENT_NAME = 'eventName';
    const FIELD_EVENT_NAME_EXT = '_eventName';
    const FIELD_EVENT_TIMING_DATE = 'eventTimingDate';
    const FIELD_EVENT_TIMING_DATE_EXT = '_eventTimingDate';
    const FIELD_EVENT_TIMING_DATE_TIME = 'eventTimingDateTime';
    const FIELD_EVENT_TIMING_DATE_TIME_EXT = '_eventTimingDateTime';
    const FIELD_EVENT_TIMING_REFERENCE = 'eventTimingReference';
    const FIELD_EVENT_TIMING_TIMING = 'eventTimingTiming';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    private $eventData = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $eventName = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    private $eventTimingDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $eventTimingDateTime = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $eventTimingReference = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    private $eventTimingTiming = null;
    /**
     * The type of trigger
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerType
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
        if (isset($data[self::FIELD_EVENT_DATA])) {
            if ($data[self::FIELD_EVENT_DATA] instanceof FHIRDataRequirement) {
                $this->setEventData($data[self::FIELD_EVENT_DATA]);
            } else {
                $this->setEventData(new FHIRDataRequirement($data[self::FIELD_EVENT_DATA]));
            }
        }
        if (isset($data[self::FIELD_EVENT_NAME])) {
            $ext = (isset($data[self::FIELD_EVENT_NAME_EXT]) && is_array($data[self::FIELD_EVENT_NAME_EXT]))
                ? $data[self::FIELD_EVENT_NAME_EXT]
                : null;
            if ($data[self::FIELD_EVENT_NAME] instanceof FHIRString) {
                $this->setEventName($data[self::FIELD_EVENT_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_EVENT_NAME])) {
                $this->setEventName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EVENT_NAME]] + $ext));
            } else {
                $this->setEventName(new FHIRString($data[self::FIELD_EVENT_NAME]));
            }
        }
        if (isset($data[self::FIELD_EVENT_TIMING_DATE])) {
            $ext = (isset($data[self::FIELD_EVENT_TIMING_DATE_EXT]) && is_array($data[self::FIELD_EVENT_TIMING_DATE_EXT]))
                ? $data[self::FIELD_EVENT_TIMING_DATE_EXT]
                : null;
            if ($data[self::FIELD_EVENT_TIMING_DATE] instanceof FHIRDate) {
                $this->setEventTimingDate($data[self::FIELD_EVENT_TIMING_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EVENT_TIMING_DATE])) {
                $this->setEventTimingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_EVENT_TIMING_DATE]] + $ext));
            } else {
                $this->setEventTimingDate(new FHIRDate($data[self::FIELD_EVENT_TIMING_DATE]));
            }
        }
        if (isset($data[self::FIELD_EVENT_TIMING_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_EVENT_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_EVENT_TIMING_DATE_TIME_EXT]))
                ? $data[self::FIELD_EVENT_TIMING_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_EVENT_TIMING_DATE_TIME] instanceof FHIRDateTime) {
                $this->setEventTimingDateTime($data[self::FIELD_EVENT_TIMING_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_EVENT_TIMING_DATE_TIME])) {
                $this->setEventTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_EVENT_TIMING_DATE_TIME]] + $ext));
            } else {
                $this->setEventTimingDateTime(new FHIRDateTime($data[self::FIELD_EVENT_TIMING_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_EVENT_TIMING_REFERENCE])) {
            if ($data[self::FIELD_EVENT_TIMING_REFERENCE] instanceof FHIRReference) {
                $this->setEventTimingReference($data[self::FIELD_EVENT_TIMING_REFERENCE]);
            } else {
                $this->setEventTimingReference(new FHIRReference($data[self::FIELD_EVENT_TIMING_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_EVENT_TIMING_TIMING])) {
            if ($data[self::FIELD_EVENT_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setEventTimingTiming($data[self::FIELD_EVENT_TIMING_TIMING]);
            } else {
                $this->setEventTimingTiming(new FHIRTiming($data[self::FIELD_EVENT_TIMING_TIMING]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRTriggerType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRTriggerType([FHIRTriggerType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRTriggerType($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
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
        return "<TriggerDefinition{$xmlns}></TriggerDefinition>";
    }


    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement $eventData
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventData(FHIRDataRequirement $eventData = null)
    {
        $this->eventData = $eventData;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $eventName
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventName($eventName = null)
    {
        if (null === $eventName) {
            $this->eventName = null;
            return $this;
        }
        if ($eventName instanceof FHIRString) {
            $this->eventName = $eventName;
            return $this;
        }
        $this->eventName = new FHIRString($eventName);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getEventTimingDate()
    {
        return $this->eventTimingDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $eventTimingDate
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventTimingDate($eventTimingDate = null)
    {
        if (null === $eventTimingDate) {
            $this->eventTimingDate = null;
            return $this;
        }
        if ($eventTimingDate instanceof FHIRDate) {
            $this->eventTimingDate = $eventTimingDate;
            return $this;
        }
        $this->eventTimingDate = new FHIRDate($eventTimingDate);
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
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getEventTimingDateTime()
    {
        return $this->eventTimingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $eventTimingDateTime
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventTimingDateTime($eventTimingDateTime = null)
    {
        if (null === $eventTimingDateTime) {
            $this->eventTimingDateTime = null;
            return $this;
        }
        if ($eventTimingDateTime instanceof FHIRDateTime) {
            $this->eventTimingDateTime = $eventTimingDateTime;
            return $this;
        }
        $this->eventTimingDateTime = new FHIRDateTime($eventTimingDateTime);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getEventTimingReference()
    {
        return $this->eventTimingReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $eventTimingReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventTimingReference(FHIRReference $eventTimingReference = null)
    {
        $this->eventTimingReference = $eventTimingReference;
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
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getEventTimingTiming()
    {
        return $this->eventTimingTiming;
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
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $eventTimingTiming
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setEventTimingTiming(FHIRTiming $eventTimingTiming = null)
    {
        $this->eventTimingTiming = $eventTimingTiming;
        return $this;
    }

    /**
     * The type of trigger
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of trigger
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of triggering event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerType $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
     */
    public function setType(FHIRTriggerType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition
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
                throw new \DomainException(sprintf('FHIRTriggerDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTriggerDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTriggerDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRTriggerDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRTriggerDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->eventData)) {
            $type->setEventData(FHIRDataRequirement::xmlUnserialize($children->eventData));
        }
        if (isset($attributes->eventName)) {
            $type->setEventName((string)$attributes->eventName);
        }
        if (isset($children->eventName)) {
            $type->setEventName(FHIRString::xmlUnserialize($children->eventName));
        }
        if (isset($attributes->eventTimingDate)) {
            $type->setEventTimingDate((string)$attributes->eventTimingDate);
        }
        if (isset($children->eventTimingDate)) {
            $type->setEventTimingDate(FHIRDate::xmlUnserialize($children->eventTimingDate));
        }
        if (isset($attributes->eventTimingDateTime)) {
            $type->setEventTimingDateTime((string)$attributes->eventTimingDateTime);
        }
        if (isset($children->eventTimingDateTime)) {
            $type->setEventTimingDateTime(FHIRDateTime::xmlUnserialize($children->eventTimingDateTime));
        }
        if (isset($children->eventTimingReference)) {
            $type->setEventTimingReference(FHIRReference::xmlUnserialize($children->eventTimingReference));
        }
        if (isset($children->eventTimingTiming)) {
            $type->setEventTimingTiming(FHIRTiming::xmlUnserialize($children->eventTimingTiming));
        }
        if (isset($children->type)) {
            $type->setType(FHIRTriggerType::xmlUnserialize($children->type));
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

        if (null !== ($v = $this->getEventData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEventName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEventTimingDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_TIMING_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEventTimingDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_TIMING_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEventTimingReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_TIMING_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEventTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_TIMING_TIMING, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getEventData())) {
            $a[self::FIELD_EVENT_DATA] = $v;
        }
        if (null !== ($v = $this->getEventName())) {
            $a[self::FIELD_EVENT_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EVENT_NAME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getEventTimingDate())) {
            $a[self::FIELD_EVENT_TIMING_DATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EVENT_TIMING_DATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getEventTimingDateTime())) {
            $a[self::FIELD_EVENT_TIMING_DATE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EVENT_TIMING_DATE_TIME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getEventTimingReference())) {
            $a[self::FIELD_EVENT_TIMING_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getEventTimingTiming())) {
            $a[self::FIELD_EVENT_TIMING_TIMING] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TYPE_EXT] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}