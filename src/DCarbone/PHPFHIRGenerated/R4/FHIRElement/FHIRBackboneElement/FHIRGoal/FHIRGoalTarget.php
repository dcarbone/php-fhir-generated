<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:11+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes the intended objective(s) for a patient, group or organization care,
 * for example, weight loss, restoring an activity of daily living, obtaining herd
 * immunity via immunization, meeting a process improvement objective, etc.
 *
 * Class FHIRGoalTarget
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal
 */
class FHIRGoalTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET;
    const FIELD_DETAIL_BOOLEAN = 'detailBoolean';
    const FIELD_DETAIL_BOOLEAN_EXT = '_detailBoolean';
    const FIELD_DETAIL_CODEABLE_CONCEPT = 'detailCodeableConcept';
    const FIELD_DETAIL_INTEGER = 'detailInteger';
    const FIELD_DETAIL_INTEGER_EXT = '_detailInteger';
    const FIELD_DETAIL_QUANTITY = 'detailQuantity';
    const FIELD_DETAIL_RANGE = 'detailRange';
    const FIELD_DETAIL_RATIO = 'detailRatio';
    const FIELD_DETAIL_STRING = 'detailString';
    const FIELD_DETAIL_STRING_EXT = '_detailString';
    const FIELD_DUE_DATE = 'dueDate';
    const FIELD_DUE_DATE_EXT = '_dueDate';
    const FIELD_DUE_DURATION = 'dueDuration';
    const FIELD_MEASURE = 'measure';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $detailBoolean = null;

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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $detailCodeableConcept = null;

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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $detailInteger = null;

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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $detailQuantity = null;

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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $detailRange = null;

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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $detailRatio = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $detailString = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $dueDate = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $dueDuration = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $measure = null;

    /**
     * Validation map for fields in type Goal.Target
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRGoalTarget Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoalTarget::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DETAIL_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_DETAIL_BOOLEAN_EXT]) && is_array($data[self::FIELD_DETAIL_BOOLEAN_EXT]))
                ? $data[self::FIELD_DETAIL_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_DETAIL_BOOLEAN] instanceof FHIRBoolean) {
                $this->setDetailBoolean($data[self::FIELD_DETAIL_BOOLEAN]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DETAIL_BOOLEAN])) {
                    $this->setDetailBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_DETAIL_BOOLEAN]] + $ext));
                } else if (is_array($data[self::FIELD_DETAIL_BOOLEAN])) {
                    $this->setDetailBoolean(new FHIRBoolean(array_merge($ext, $data[self::FIELD_DETAIL_BOOLEAN])));
                }
            } else {
                $this->setDetailBoolean(new FHIRBoolean($data[self::FIELD_DETAIL_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DETAIL_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDetailCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]);
            } else {
                $this->setDetailCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_INTEGER])) {
            $ext = (isset($data[self::FIELD_DETAIL_INTEGER_EXT]) && is_array($data[self::FIELD_DETAIL_INTEGER_EXT]))
                ? $data[self::FIELD_DETAIL_INTEGER_EXT]
                : null;
            if ($data[self::FIELD_DETAIL_INTEGER] instanceof FHIRInteger) {
                $this->setDetailInteger($data[self::FIELD_DETAIL_INTEGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DETAIL_INTEGER])) {
                    $this->setDetailInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DETAIL_INTEGER]] + $ext));
                } else if (is_array($data[self::FIELD_DETAIL_INTEGER])) {
                    $this->setDetailInteger(new FHIRInteger(array_merge($ext, $data[self::FIELD_DETAIL_INTEGER])));
                }
            } else {
                $this->setDetailInteger(new FHIRInteger($data[self::FIELD_DETAIL_INTEGER]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_QUANTITY])) {
            if ($data[self::FIELD_DETAIL_QUANTITY] instanceof FHIRQuantity) {
                $this->setDetailQuantity($data[self::FIELD_DETAIL_QUANTITY]);
            } else {
                $this->setDetailQuantity(new FHIRQuantity($data[self::FIELD_DETAIL_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_RANGE])) {
            if ($data[self::FIELD_DETAIL_RANGE] instanceof FHIRRange) {
                $this->setDetailRange($data[self::FIELD_DETAIL_RANGE]);
            } else {
                $this->setDetailRange(new FHIRRange($data[self::FIELD_DETAIL_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_RATIO])) {
            if ($data[self::FIELD_DETAIL_RATIO] instanceof FHIRRatio) {
                $this->setDetailRatio($data[self::FIELD_DETAIL_RATIO]);
            } else {
                $this->setDetailRatio(new FHIRRatio($data[self::FIELD_DETAIL_RATIO]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_STRING])) {
            $ext = (isset($data[self::FIELD_DETAIL_STRING_EXT]) && is_array($data[self::FIELD_DETAIL_STRING_EXT]))
                ? $data[self::FIELD_DETAIL_STRING_EXT]
                : null;
            if ($data[self::FIELD_DETAIL_STRING] instanceof FHIRString) {
                $this->setDetailString($data[self::FIELD_DETAIL_STRING]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DETAIL_STRING])) {
                    $this->setDetailString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DETAIL_STRING]] + $ext));
                } else if (is_array($data[self::FIELD_DETAIL_STRING])) {
                    $this->setDetailString(new FHIRString(array_merge($ext, $data[self::FIELD_DETAIL_STRING])));
                }
            } else {
                $this->setDetailString(new FHIRString($data[self::FIELD_DETAIL_STRING]));
            }
        }
        if (isset($data[self::FIELD_DUE_DATE])) {
            $ext = (isset($data[self::FIELD_DUE_DATE_EXT]) && is_array($data[self::FIELD_DUE_DATE_EXT]))
                ? $data[self::FIELD_DUE_DATE_EXT]
                : null;
            if ($data[self::FIELD_DUE_DATE] instanceof FHIRDate) {
                $this->setDueDate($data[self::FIELD_DUE_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DUE_DATE])) {
                    $this->setDueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_DUE_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DUE_DATE])) {
                    $this->setDueDate(new FHIRDate(array_merge($ext, $data[self::FIELD_DUE_DATE])));
                }
            } else {
                $this->setDueDate(new FHIRDate($data[self::FIELD_DUE_DATE]));
            }
        }
        if (isset($data[self::FIELD_DUE_DURATION])) {
            if ($data[self::FIELD_DUE_DURATION] instanceof FHIRDuration) {
                $this->setDueDuration($data[self::FIELD_DUE_DURATION]);
            } else {
                $this->setDueDuration(new FHIRDuration($data[self::FIELD_DUE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_MEASURE])) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRCodeableConcept($data[self::FIELD_MEASURE]));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<GoalTarget{$xmlns}></GoalTarget>";
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDetailBoolean()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $detailBoolean
     * @return static
     */
    public function setDetailBoolean($detailBoolean = null)
    {
        if (null === $detailBoolean) {
            $this->detailBoolean = null;
            return $this;
        }
        if ($detailBoolean instanceof FHIRBoolean) {
            $this->detailBoolean = $detailBoolean;
            return $this;
        }
        $this->detailBoolean = new FHIRBoolean($detailBoolean);
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
     * @return static
     */
    public function setDetailCodeableConcept(FHIRCodeableConcept $detailCodeableConcept = null)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getDetailInteger()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $detailInteger
     * @return static
     */
    public function setDetailInteger($detailInteger = null)
    {
        if (null === $detailInteger) {
            $this->detailInteger = null;
            return $this;
        }
        if ($detailInteger instanceof FHIRInteger) {
            $this->detailInteger = $detailInteger;
            return $this;
        }
        $this->detailInteger = new FHIRInteger($detailInteger);
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDetailQuantity()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $detailQuantity
     * @return static
     */
    public function setDetailQuantity(FHIRQuantity $detailQuantity = null)
    {
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getDetailRange()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $detailRange
     * @return static
     */
    public function setDetailRange(FHIRRange $detailRange = null)
    {
        $this->detailRange = $detailRange;
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getDetailRatio()
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
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $detailRatio
     * @return static
     */
    public function setDetailRatio(FHIRRatio $detailRatio = null)
    {
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDetailString()
    {
        return $this->detailString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $detailString
     * @return static
     */
    public function setDetailString($detailString = null)
    {
        if (null === $detailString) {
            $this->detailString = null;
            return $this;
        }
        if ($detailString instanceof FHIRString) {
            $this->detailString = $detailString;
            return $this;
        }
        $this->detailString = new FHIRString($detailString);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $dueDate
     * @return static
     */
    public function setDueDate($dueDate = null)
    {
        if (null === $dueDate) {
            $this->dueDate = null;
            return $this;
        }
        if ($dueDate instanceof FHIRDate) {
            $this->dueDate = $dueDate;
            return $this;
        }
        $this->dueDate = new FHIRDate($dueDate);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDueDuration()
    {
        return $this->dueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met. (choose any one of due*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $dueDuration
     * @return static
     */
    public function setDueDuration(FHIRDuration $dueDuration = null)
    {
        $this->dueDuration = $dueDuration;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMeasure()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $measure
     * @return static
     */
    public function setMeasure(FHIRCodeableConcept $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
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
                throw new \DomainException(sprintf('FHIRGoalTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRGoalTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRGoalTarget;
        } elseif (!is_object($type) || !($type instanceof FHIRGoalTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRGoalTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->detailBoolean)) {
            $type->setDetailBoolean((string)$attributes->detailBoolean);
        }
        if (isset($children->detailBoolean)) {
            $type->setDetailBoolean(FHIRBoolean::xmlUnserialize($children->detailBoolean));
        }
        if (isset($children->detailCodeableConcept)) {
            $type->setDetailCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->detailCodeableConcept));
        }
        if (isset($attributes->detailInteger)) {
            $type->setDetailInteger((string)$attributes->detailInteger);
        }
        if (isset($children->detailInteger)) {
            $type->setDetailInteger(FHIRInteger::xmlUnserialize($children->detailInteger));
        }
        if (isset($children->detailQuantity)) {
            $type->setDetailQuantity(FHIRQuantity::xmlUnserialize($children->detailQuantity));
        }
        if (isset($children->detailRange)) {
            $type->setDetailRange(FHIRRange::xmlUnserialize($children->detailRange));
        }
        if (isset($children->detailRatio)) {
            $type->setDetailRatio(FHIRRatio::xmlUnserialize($children->detailRatio));
        }
        if (isset($attributes->detailString)) {
            $type->setDetailString((string)$attributes->detailString);
        }
        if (isset($children->detailString)) {
            $type->setDetailString(FHIRString::xmlUnserialize($children->detailString));
        }
        if (isset($attributes->dueDate)) {
            $type->setDueDate((string)$attributes->dueDate);
        }
        if (isset($children->dueDate)) {
            $type->setDueDate(FHIRDate::xmlUnserialize($children->dueDate));
        }
        if (isset($children->dueDuration)) {
            $type->setDueDuration(FHIRDuration::xmlUnserialize($children->dueDuration));
        }
        if (isset($children->measure)) {
            $type->setMeasure(FHIRCodeableConcept::xmlUnserialize($children->measure));
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

        if (null !== ($v = $this->getDetailBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailInteger())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_INTEGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDueDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DUE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDueDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DUE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDetailBoolean())) {
            $a[self::FIELD_DETAIL_BOOLEAN] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $a[self::FIELD_DETAIL_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDetailInteger())) {
            $a[self::FIELD_DETAIL_INTEGER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_INTEGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $a[self::FIELD_DETAIL_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDetailRange())) {
            $a[self::FIELD_DETAIL_RANGE] = $v;
        }
        if (null !== ($v = $this->getDetailRatio())) {
            $a[self::FIELD_DETAIL_RATIO] = $v;
        }
        if (null !== ($v = $this->getDetailString())) {
            $a[self::FIELD_DETAIL_STRING] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDueDate())) {
            $a[self::FIELD_DUE_DATE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DUE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDueDuration())) {
            $a[self::FIELD_DUE_DURATION] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a[self::FIELD_MEASURE] = $v;
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