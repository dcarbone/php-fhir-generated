<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Measurements and simple assertions made about a patient, device or other
 * subject.
 *
 * Class FHIRObservationComponent
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation
 */
class FHIRObservationComponent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT;
    const FIELD_CODE = 'code';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';
    const FIELD_VALUE_RANGE = 'valueRange';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_TIME = 'valueTime';
    const FIELD_VALUE_TIME_EXT = '_valueTime';
    const FIELD_VALUE_DATE_TIME = 'valueDateTime';
    const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_DATA_ABSENT_REASON = 'dataAbsentReason';
    const FIELD_INTERPRETATION = 'interpretation';
    const FIELD_REFERENCE_RANGE = 'referenceRange';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected $valueQuantity = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $valueCodeableConcept = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected $valueRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected $valueRatio = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected $valueSampledData = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected $valueAttachment = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $valueTime = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $valueDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $valuePeriod = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reason why the expected value in the element Observation.value[x] is
     * missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $dataAbsentReason = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation. Intended as a simple
     * compact code often placed adjacent to the result value in reports and flow
     * sheets to signal the meaning/normalcy status of the result. Otherwise known as
     * abnormal flag.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $interpretation = null;

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    protected $referenceRange = [];

    /**
     * Validation map for fields in type Observation.Component
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRObservationComponent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            $value = isset($data[self::FIELD_VALUE_STRING]) ? $data[self::FIELD_VALUE_STRING] : null;
            $ext = (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) ? $ext = $data[self::FIELD_VALUE_STRING_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_RANGE])) {
            if ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->setValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->setValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RATIO])) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_TIME]) || isset($data[self::FIELD_VALUE_TIME_EXT])) {
            $value = isset($data[self::FIELD_VALUE_TIME]) ? $data[self::FIELD_VALUE_TIME] : null;
            $ext = (isset($data[self::FIELD_VALUE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_TIME_EXT])) ? $ext = $data[self::FIELD_VALUE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setValueTime($value);
                } else if (is_array($value)) {
                    $this->setValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_DATE_TIME]) || isset($data[self::FIELD_VALUE_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_VALUE_DATE_TIME]) ? $data[self::FIELD_VALUE_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_VALUE_DATE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DATA_ABSENT_REASON])) {
            if ($data[self::FIELD_DATA_ABSENT_REASON] instanceof FHIRCodeableConcept) {
                $this->setDataAbsentReason($data[self::FIELD_DATA_ABSENT_REASON]);
            } else {
                $this->setDataAbsentReason(new FHIRCodeableConcept($data[self::FIELD_DATA_ABSENT_REASON]));
            }
        }
        if (isset($data[self::FIELD_INTERPRETATION])) {
            if ($data[self::FIELD_INTERPRETATION] instanceof FHIRCodeableConcept) {
                $this->setInterpretation($data[self::FIELD_INTERPRETATION]);
            } else {
                $this->setInterpretation(new FHIRCodeableConcept($data[self::FIELD_INTERPRETATION]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RANGE])) {
            if (is_array($data[self::FIELD_REFERENCE_RANGE])) {
                foreach($data[self::FIELD_REFERENCE_RANGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRObservationReferenceRange) {
                        $this->addReferenceRange($v);
                    } else {
                        $this->addReferenceRange(new FHIRObservationReferenceRange($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCE_RANGE] instanceof FHIRObservationReferenceRange) {
                $this->addReferenceRange($data[self::FIELD_REFERENCE_RANGE]);
            } else {
                $this->addReferenceRange(new FHIRObservationReferenceRange($data[self::FIELD_REFERENCE_RANGE]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ObservationComponent{$xmlns}></ObservationComponent>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->_trackValueSet($this->valueQuantity, $valueQuantity);
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->_trackValueSet($this->valueCodeableConcept, $valueCodeableConcept);
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $valueString
     * @return static
     */
    public function setValueString($valueString = null)
    {
        if (null !== $valueString && !($valueString instanceof FHIRString)) {
            $valueString = new FHIRString($valueString);
        }
        $this->_trackValueSet($this->valueString, $valueString);
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        $this->_trackValueSet($this->valueRange, $valueRange);
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->_trackValueSet($this->valueRatio, $valueRatio);
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        $this->_trackValueSet($this->valueSampledData, $valueSampledData);
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->_trackValueSet($this->valueAttachment, $valueAttachment);
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $valueTime
     * @return static
     */
    public function setValueTime($valueTime = null)
    {
        if (null !== $valueTime && !($valueTime instanceof FHIRTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        $this->_trackValueSet($this->valueTime, $valueTime);
        $this->valueTime = $valueTime;
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
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $valueDateTime
     * @return static
     */
    public function setValueDateTime($valueDateTime = null)
    {
        if (null !== $valueDateTime && !($valueDateTime instanceof FHIRDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        $this->_trackValueSet($this->valueDateTime, $valueDateTime);
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->_trackValueSet($this->valuePeriod, $valuePeriod);
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reason why the expected value in the element Observation.value[x] is
     * missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reason why the expected value in the element Observation.value[x] is
     * missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return static
     */
    public function setDataAbsentReason(FHIRCodeableConcept $dataAbsentReason = null)
    {
        $this->_trackValueSet($this->dataAbsentReason, $dataAbsentReason);
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation. Intended as a simple
     * compact code often placed adjacent to the result value in reports and flow
     * sheets to signal the meaning/normalcy status of the result. Otherwise known as
     * abnormal flag.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation. Intended as a simple
     * compact code often placed adjacent to the result value in reports and flow
     * sheets to signal the meaning/normalcy status of the result. Otherwise known as
     * abnormal flag.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $interpretation
     * @return static
     */
    public function setInterpretation(FHIRCodeableConcept $interpretation = null)
    {
        $this->_trackValueSet($this->interpretation, $interpretation);
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return static
     */
    public function addReferenceRange(FHIRObservationReferenceRange $referenceRange = null)
    {
        $this->_trackValueAdded();
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[] $referenceRange
     * @return static
     */
    public function setReferenceRange(array $referenceRange = [])
    {
        if ([] !== $this->referenceRange) {
            $this->_trackValuesRemoved(count($this->referenceRange));
            $this->referenceRange = [];
        }
        if ([] === $referenceRange) {
            return $this;
        }
        foreach($referenceRange as $v) {
            if ($v instanceof FHIRObservationReferenceRange) {
                $this->addReferenceRange($v);
            } else {
                $this->addReferenceRange(new FHIRObservationReferenceRange($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_ABSENT_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInterpretation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERPRETATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_RANGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RANGE])) {
            $v = $this->getValueRange();
            foreach($validationRules[self::FIELD_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RANGE])) {
                        $errs[self::FIELD_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_VALUE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RATIO])) {
            $v = $this->getValueRatio();
            foreach($validationRules[self::FIELD_VALUE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RATIO])) {
                        $errs[self::FIELD_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SAMPLED_DATA])) {
            $v = $this->getValueSampledData();
            foreach($validationRules[self::FIELD_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
            $v = $this->getValueAttachment();
            foreach($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_TIME])) {
            $v = $this->getValueTime();
            foreach($validationRules[self::FIELD_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_TIME])) {
                        $errs[self::FIELD_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_DATE_TIME])) {
            $v = $this->getValueDateTime();
            foreach($validationRules[self::FIELD_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
                        $errs[self::FIELD_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_ABSENT_REASON])) {
            $v = $this->getDataAbsentReason();
            foreach($validationRules[self::FIELD_DATA_ABSENT_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_DATA_ABSENT_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_ABSENT_REASON])) {
                        $errs[self::FIELD_DATA_ABSENT_REASON] = [];
                    }
                    $errs[self::FIELD_DATA_ABSENT_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERPRETATION])) {
            $v = $this->getInterpretation();
            foreach($validationRules[self::FIELD_INTERPRETATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_INTERPRETATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERPRETATION])) {
                        $errs[self::FIELD_INTERPRETATION] = [];
                    }
                    $errs[self::FIELD_INTERPRETATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RANGE])) {
            $v = $this->getReferenceRange();
            foreach($validationRules[self::FIELD_REFERENCE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT, self::FIELD_REFERENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RANGE])) {
                        $errs[self::FIELD_REFERENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRObservationComponent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservationComponent::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRObservationComponent(null);
        } elseif (!is_object($type) || !($type instanceof FHIRObservationComponent)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservationComponent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_QUANTITY === $n->nodeName) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_STRING === $n->nodeName) {
                $type->setValueString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RANGE === $n->nodeName) {
                $type->setValueRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RATIO === $n->nodeName) {
                $type->setValueRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SAMPLED_DATA === $n->nodeName) {
                $type->setValueSampledData(FHIRSampledData::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_ATTACHMENT === $n->nodeName) {
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_TIME === $n->nodeName) {
                $type->setValueTime(FHIRTime::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_DATE_TIME === $n->nodeName) {
                $type->setValueDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_PERIOD === $n->nodeName) {
                $type->setValuePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_DATA_ABSENT_REASON === $n->nodeName) {
                $type->setDataAbsentReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INTERPRETATION === $n->nodeName) {
                $type->setInterpretation(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_RANGE === $n->nodeName) {
                $type->addReferenceRange(FHIRObservationReferenceRange::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_STRING);
        if (null !== $n) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_TIME);
        if (null !== $n) {
            $pt = $type->getValueTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getValueDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SAMPLED_DATA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ATTACHMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATA_ABSENT_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInterpretation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTERPRETATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_RANGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_STRING] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_STRING_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueRange())) {
            $a[self::FIELD_VALUE_RANGE] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a[self::FIELD_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a[self::FIELD_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $a[self::FIELD_DATA_ABSENT_REASON] = $v;
        }
        if (null !== ($v = $this->getInterpretation())) {
            $a[self::FIELD_INTERPRETATION] = $v;
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            $a[self::FIELD_REFERENCE_RANGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REFERENCE_RANGE][] = $v;
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