<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Describes the intended objective(s) for a patient, group or organization care,
 * for example, weight loss, restoring an activity of daily living, obtaining herd
 * immunity via immunization, meeting a process improvement objective, etc.
 *
 * Class FHIRGoalTarget
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal
 */
class FHIRGoalTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET;

    const FIELD_MEASURE = 'measure';
    const FIELD_DETAIL_QUANTITY = 'detailQuantity';
    const FIELD_DETAIL_RANGE = 'detailRange';
    const FIELD_DETAIL_CODEABLE_CONCEPT = 'detailCodeableConcept';
    const FIELD_DETAIL_STRING = 'detailString';
    const FIELD_DETAIL_STRING_EXT = '_detailString';
    const FIELD_DETAIL_BOOLEAN = 'detailBoolean';
    const FIELD_DETAIL_BOOLEAN_EXT = '_detailBoolean';
    const FIELD_DETAIL_INTEGER = 'detailInteger';
    const FIELD_DETAIL_INTEGER_EXT = '_detailInteger';
    const FIELD_DETAIL_RATIO = 'detailRatio';
    const FIELD_DUE_DATE = 'dueDate';
    const FIELD_DUE_DATE_EXT = '_dueDate';
    const FIELD_DUE_DURATION = 'dueDuration';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $measure = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $detailQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $detailRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $detailCodeableConcept = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $detailString = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $detailBoolean = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $detailInteger = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $detailRatio = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $dueDate = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $dueDuration = null;

    /**
     * Validation map for fields in type Goal.Target
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRGoalTarget Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_MEASURE, $data)) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRCodeableConcept($data[self::FIELD_MEASURE]));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_QUANTITY, $data)) {
            if ($data[self::FIELD_DETAIL_QUANTITY] instanceof FHIRQuantity) {
                $this->setDetailQuantity($data[self::FIELD_DETAIL_QUANTITY]);
            } else {
                $this->setDetailQuantity(new FHIRQuantity($data[self::FIELD_DETAIL_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_RANGE, $data)) {
            if ($data[self::FIELD_DETAIL_RANGE] instanceof FHIRRange) {
                $this->setDetailRange($data[self::FIELD_DETAIL_RANGE]);
            } else {
                $this->setDetailRange(new FHIRRange($data[self::FIELD_DETAIL_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DETAIL_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDetailCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]);
            } else {
                $this->setDetailCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_STRING, $data) || array_key_exists(self::FIELD_DETAIL_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DETAIL_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_STRING_EXT]) && is_array($data[self::FIELD_DETAIL_STRING_EXT])) ? $data[self::FIELD_DETAIL_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetailString($value);
                } else if (is_array($value)) {
                    $this->setDetailString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetailString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailString(new FHIRString($ext));
            } else {
                $this->setDetailString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_BOOLEAN, $data) || array_key_exists(self::FIELD_DETAIL_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_DETAIL_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_BOOLEAN_EXT]) && is_array($data[self::FIELD_DETAIL_BOOLEAN_EXT])) ? $data[self::FIELD_DETAIL_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDetailBoolean($value);
                } else if (is_array($value)) {
                    $this->setDetailBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDetailBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailBoolean(new FHIRBoolean($ext));
            } else {
                $this->setDetailBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_INTEGER, $data) || array_key_exists(self::FIELD_DETAIL_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_DETAIL_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_DETAIL_INTEGER_EXT]) && is_array($data[self::FIELD_DETAIL_INTEGER_EXT])) ? $data[self::FIELD_DETAIL_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDetailInteger($value);
                } else if (is_array($value)) {
                    $this->setDetailInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDetailInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetailInteger(new FHIRInteger($ext));
            } else {
                $this->setDetailInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL_RATIO, $data)) {
            if ($data[self::FIELD_DETAIL_RATIO] instanceof FHIRRatio) {
                $this->setDetailRatio($data[self::FIELD_DETAIL_RATIO]);
            } else {
                $this->setDetailRatio(new FHIRRatio($data[self::FIELD_DETAIL_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_DUE_DATE, $data) || array_key_exists(self::FIELD_DUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DUE_DATE_EXT]) && is_array($data[self::FIELD_DUE_DATE_EXT])) ? $data[self::FIELD_DUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDueDate($value);
                } else if (is_array($value)) {
                    $this->setDueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDueDate(new FHIRDate($ext));
            } else {
                $this->setDueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_DUE_DURATION, $data)) {
            if ($data[self::FIELD_DUE_DURATION] instanceof FHIRDuration) {
                $this->setDueDuration($data[self::FIELD_DUE_DURATION]);
            } else {
                $this->setDueDuration(new FHIRDuration($data[self::FIELD_DUE_DURATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMeasure(): null|FHIRCodeableConcept
    {
        return $this->measure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measure
     * @return static
     */
    public function setMeasure(null|FHIRCodeableConcept $measure = null): self
    {
        if (null === $measure) {
            $measure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->measure, $measure);
        $this->measure = $measure;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDetailQuantity(): null|FHIRQuantity
    {
        return $this->detailQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $detailQuantity
     * @return static
     */
    public function setDetailQuantity(null|FHIRQuantity $detailQuantity = null): self
    {
        if (null === $detailQuantity) {
            $detailQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->detailQuantity, $detailQuantity);
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDetailRange(): null|FHIRRange
    {
        return $this->detailRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $detailRange
     * @return static
     */
    public function setDetailRange(null|FHIRRange $detailRange = null): self
    {
        if (null === $detailRange) {
            $detailRange = new FHIRRange();
        }
        $this->_trackValueSet($this->detailRange, $detailRange);
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->detailCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $detailCodeableConcept
     * @return static
     */
    public function setDetailCodeableConcept(null|FHIRCodeableConcept $detailCodeableConcept = null): self
    {
        if (null === $detailCodeableConcept) {
            $detailCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->detailCodeableConcept, $detailCodeableConcept);
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDetailString(): null|FHIRString
    {
        return $this->detailString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $detailString
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDetailString(null|string|FHIRStringPrimitive|FHIRString $detailString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $detailString && !($detailString instanceof FHIRString)) {
            $detailString = new FHIRString($detailString);
        }
        $this->_trackValueSet($this->detailString, $detailString);
        if (!isset($this->_xmlLocations[self::FIELD_DETAIL_STRING])) {
            $this->_xmlLocations[self::FIELD_DETAIL_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_DETAIL_STRING][0] = $xmlLocation;
        $this->detailString = $detailString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getDetailBoolean(): null|FHIRBoolean
    {
        return $this->detailBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $detailBoolean
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDetailBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $detailBoolean && !($detailBoolean instanceof FHIRBoolean)) {
            $detailBoolean = new FHIRBoolean($detailBoolean);
        }
        $this->_trackValueSet($this->detailBoolean, $detailBoolean);
        if (!isset($this->_xmlLocations[self::FIELD_DETAIL_BOOLEAN])) {
            $this->_xmlLocations[self::FIELD_DETAIL_BOOLEAN] = [];
        }
        $this->_xmlLocations[self::FIELD_DETAIL_BOOLEAN][0] = $xmlLocation;
        $this->detailBoolean = $detailBoolean;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getDetailInteger(): null|FHIRInteger
    {
        return $this->detailInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $detailInteger
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDetailInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $detailInteger && !($detailInteger instanceof FHIRInteger)) {
            $detailInteger = new FHIRInteger($detailInteger);
        }
        $this->_trackValueSet($this->detailInteger, $detailInteger);
        if (!isset($this->_xmlLocations[self::FIELD_DETAIL_INTEGER])) {
            $this->_xmlLocations[self::FIELD_DETAIL_INTEGER] = [];
        }
        $this->_xmlLocations[self::FIELD_DETAIL_INTEGER][0] = $xmlLocation;
        $this->detailInteger = $detailInteger;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getDetailRatio(): null|FHIRRatio
    {
        return $this->detailRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $detailRatio
     * @return static
     */
    public function setDetailRatio(null|FHIRRatio $detailRatio = null): self
    {
        if (null === $detailRatio) {
            $detailRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->detailRatio, $detailRatio);
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getDueDate(): null|FHIRDate
    {
        return $this->dueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $dueDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $dueDate && !($dueDate instanceof FHIRDate)) {
            $dueDate = new FHIRDate($dueDate);
        }
        $this->_trackValueSet($this->dueDate, $dueDate);
        if (!isset($this->_xmlLocations[self::FIELD_DUE_DATE])) {
            $this->_xmlLocations[self::FIELD_DUE_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DUE_DATE][0] = $xmlLocation;
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getDueDuration(): null|FHIRDuration
    {
        return $this->dueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $dueDuration
     * @return static
     */
    public function setDueDuration(null|FHIRDuration $dueDuration = null): self
    {
        if (null === $dueDuration) {
            $dueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->dueDuration, $dueDuration);
        $this->dueDuration = $dueDuration;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetailRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DUE_DURATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE])) {
            $v = $this->getMeasure();
            foreach($validationRules[self::FIELD_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE])) {
                        $errs[self::FIELD_MEASURE] = [];
                    }
                    $errs[self::FIELD_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_QUANTITY])) {
            $v = $this->getDetailQuantity();
            foreach($validationRules[self::FIELD_DETAIL_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_QUANTITY])) {
                        $errs[self::FIELD_DETAIL_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DETAIL_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RANGE])) {
            $v = $this->getDetailRange();
            foreach($validationRules[self::FIELD_DETAIL_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RANGE])) {
                        $errs[self::FIELD_DETAIL_RANGE] = [];
                    }
                    $errs[self::FIELD_DETAIL_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            $v = $this->getDetailCodeableConcept();
            foreach($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_STRING])) {
            $v = $this->getDetailString();
            foreach($validationRules[self::FIELD_DETAIL_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_STRING])) {
                        $errs[self::FIELD_DETAIL_STRING] = [];
                    }
                    $errs[self::FIELD_DETAIL_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_BOOLEAN])) {
            $v = $this->getDetailBoolean();
            foreach($validationRules[self::FIELD_DETAIL_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_BOOLEAN])) {
                        $errs[self::FIELD_DETAIL_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DETAIL_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_INTEGER])) {
            $v = $this->getDetailInteger();
            foreach($validationRules[self::FIELD_DETAIL_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_INTEGER])) {
                        $errs[self::FIELD_DETAIL_INTEGER] = [];
                    }
                    $errs[self::FIELD_DETAIL_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RATIO])) {
            $v = $this->getDetailRatio();
            foreach($validationRules[self::FIELD_DETAIL_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DETAIL_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RATIO])) {
                        $errs[self::FIELD_DETAIL_RATIO] = [];
                    }
                    $errs[self::FIELD_DETAIL_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DATE])) {
            $v = $this->getDueDate();
            foreach($validationRules[self::FIELD_DUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DATE])) {
                        $errs[self::FIELD_DUE_DATE] = [];
                    }
                    $errs[self::FIELD_DUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DURATION])) {
            $v = $this->getDueDuration();
            foreach($validationRules[self::FIELD_DUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET, self::FIELD_DUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DURATION])) {
                        $errs[self::FIELD_DUE_DURATION] = [];
                    }
                    $errs[self::FIELD_DUE_DURATION][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRGoalTarget)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_MEASURE === $childName) {
                $type->setMeasure(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL_QUANTITY === $childName) {
                $type->setDetailQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL_RANGE === $childName) {
                $type->setDetailRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL_CODEABLE_CONCEPT === $childName) {
                $type->setDetailCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL_STRING === $childName) {
                $type->setDetailString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DETAIL_BOOLEAN === $childName) {
                $type->setDetailBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DETAIL_INTEGER === $childName) {
                $type->setDetailInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DETAIL_RATIO === $childName) {
                $type->setDetailRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DUE_DATE === $childName) {
                $type->setDueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DUE_DURATION === $childName) {
                $type->setDueDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DETAIL_STRING])) {
            $pt = $type->getDetailString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETAIL_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetailString((string)$attributes[self::FIELD_DETAIL_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_BOOLEAN])) {
            $pt = $type->getDetailBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETAIL_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetailBoolean((string)$attributes[self::FIELD_DETAIL_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_INTEGER])) {
            $pt = $type->getDetailInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETAIL_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetailInteger((string)$attributes[self::FIELD_DETAIL_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DUE_DATE])) {
            $pt = $type->getDueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDueDate((string)$attributes[self::FIELD_DUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'GoalTarget', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDetailString())) {
            $xw->writeAttribute(self::FIELD_DETAIL_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDetailBoolean())) {
            $xw->writeAttribute(self::FIELD_DETAIL_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDetailInteger())) {
            $xw->writeAttribute(self::FIELD_DETAIL_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDueDate())) {
            $xw->writeAttribute(self::FIELD_DUE_DATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getMeasure())) {
            $xw->startElement(self::FIELD_MEASURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $xw->startElement(self::FIELD_DETAIL_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDetailRange())) {
            $xw->startElement(self::FIELD_DETAIL_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $xw->startElement(self::FIELD_DETAIL_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDetailString())) {
            $xw->startElement(self::FIELD_DETAIL_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDetailBoolean())) {
            $xw->startElement(self::FIELD_DETAIL_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DETAIL_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDetailInteger())) {
            $xw->startElement(self::FIELD_DETAIL_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $xw->startElement(self::FIELD_DETAIL_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDueDate())) {
            $xw->startElement(self::FIELD_DUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDueDuration())) {
            $xw->startElement(self::FIELD_DUE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getMeasure())) {
            $out->{self::FIELD_MEASURE} = $v;
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $out->{self::FIELD_DETAIL_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDetailRange())) {
            $out->{self::FIELD_DETAIL_RANGE} = $v;
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $out->{self::FIELD_DETAIL_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDetailString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETAIL_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETAIL_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $out->{self::FIELD_DETAIL_RATIO} = $v;
        }
        if (null !== ($v = $this->getDueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDueDuration())) {
            $out->{self::FIELD_DUE_DURATION} = $v;
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