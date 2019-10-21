<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanActivityStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanDetail
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_DAILY_AMOUNT = 'dailyAmount';
    const FIELD_DAILY_AMOUNT_EXT = '_dailyAmount';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_GOAL = 'goal';
    const FIELD_LOCATION = 'location';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
    const FIELD_PRODUCT_REFERENCE = 'productReference';
    const FIELD_PROHIBITED = 'prohibited';
    const FIELD_PROHIBITED_EXT = '_prohibited';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_SCHEDULED_PERIOD = 'scheduledPeriod';
    const FIELD_SCHEDULED_STRING = 'scheduledString';
    const FIELD_SCHEDULED_STRING_EXT = '_scheduledString';
    const FIELD_SCHEDULED_TIMING = 'scheduledTiming';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_STATUS_REASON_EXT = '_statusReason';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $category = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of planned activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    private $dailyAmount = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the protocol, questionnaire, guideline or other specification the
     * planned activity should be conducted in accordance with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $definition = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $goal = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $location = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $performer = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $productCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $productReference = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, indicates that the described activity is
     * one that should be engaged in when following the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $prohibited = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied, administered or consumed by the
     * subject.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the rationale that drove the inclusion of this particular activity as
     * part of the plan or the reason why the activity was prohibited.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the health condition(s) that drove the inclusion of this particular
     * activity as part of the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $scheduledPeriod = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $scheduledString = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    private $scheduledTiming = null;
    /**
     * Indicates where the activity is at in its overall life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanActivityStatus
     */
    private $status = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $statusReason = null;

    /**
     * FHIRCarePlanDetail Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DAILY_AMOUNT])) {
            $ext = (isset($data[self::FIELD_DAILY_AMOUNT_EXT]) && is_array($data[self::FIELD_DAILY_AMOUNT_EXT]))
                ? $data[self::FIELD_DAILY_AMOUNT_EXT]
                : null;
            if ($data[self::FIELD_DAILY_AMOUNT] instanceof FHIRQuantity) {
                $this->setDailyAmount($data[self::FIELD_DAILY_AMOUNT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DAILY_AMOUNT])) {
                $this->setDailyAmount(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_DAILY_AMOUNT]] + $ext));
            } else {
                $this->setDailyAmount(new FHIRQuantity($data[self::FIELD_DAILY_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            if ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->setDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_GOAL])) {
            if (is_array($data[self::FIELD_GOAL])) {
                foreach($data[self::FIELD_GOAL] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addGoal($v);
                    } else {
                        $this->addGoal(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_GOAL] instanceof FHIRReference) {
                $this->addGoal($data[self::FIELD_GOAL]);
            } else {
                $this->addGoal(new FHIRReference($data[self::FIELD_GOAL]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setProductCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]);
            } else {
                $this->setProductCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_REFERENCE])) {
            if ($data[self::FIELD_PRODUCT_REFERENCE] instanceof FHIRReference) {
                $this->setProductReference($data[self::FIELD_PRODUCT_REFERENCE]);
            } else {
                $this->setProductReference(new FHIRReference($data[self::FIELD_PRODUCT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PROHIBITED])) {
            $ext = (isset($data[self::FIELD_PROHIBITED_EXT]) && is_array($data[self::FIELD_PROHIBITED_EXT]))
                ? $data[self::FIELD_PROHIBITED_EXT]
                : null;
            if ($data[self::FIELD_PROHIBITED] instanceof FHIRBoolean) {
                $this->setProhibited($data[self::FIELD_PROHIBITED]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROHIBITED])) {
                $this->setProhibited(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PROHIBITED]] + $ext));
            } else {
                $this->setProhibited(new FHIRBoolean($data[self::FIELD_PROHIBITED]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT]))
                ? $data[self::FIELD_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUANTITY])) {
                $this->setQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_QUANTITY]] + $ext));
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULED_PERIOD])) {
            if ($data[self::FIELD_SCHEDULED_PERIOD] instanceof FHIRPeriod) {
                $this->setScheduledPeriod($data[self::FIELD_SCHEDULED_PERIOD]);
            } else {
                $this->setScheduledPeriod(new FHIRPeriod($data[self::FIELD_SCHEDULED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULED_STRING])) {
            $ext = (isset($data[self::FIELD_SCHEDULED_STRING_EXT]) && is_array($data[self::FIELD_SCHEDULED_STRING_EXT]))
                ? $data[self::FIELD_SCHEDULED_STRING_EXT]
                : null;
            if ($data[self::FIELD_SCHEDULED_STRING] instanceof FHIRString) {
                $this->setScheduledString($data[self::FIELD_SCHEDULED_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_SCHEDULED_STRING])) {
                $this->setScheduledString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SCHEDULED_STRING]] + $ext));
            } else {
                $this->setScheduledString(new FHIRString($data[self::FIELD_SCHEDULED_STRING]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULED_TIMING])) {
            if ($data[self::FIELD_SCHEDULED_TIMING] instanceof FHIRTiming) {
                $this->setScheduledTiming($data[self::FIELD_SCHEDULED_TIMING]);
            } else {
                $this->setScheduledTiming(new FHIRTiming($data[self::FIELD_SCHEDULED_TIMING]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCarePlanActivityStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRCarePlanActivityStatus([FHIRCarePlanActivityStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRCarePlanActivityStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            $ext = (isset($data[self::FIELD_STATUS_REASON_EXT]) && is_array($data[self::FIELD_STATUS_REASON_EXT]))
                ? $data[self::FIELD_STATUS_REASON_EXT]
                : null;
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRString) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS_REASON])) {
                $this->setStatusReason(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_STATUS_REASON]] + $ext));
            } else {
                $this->setStatusReason(new FHIRString($data[self::FIELD_STATUS_REASON]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
        return "<CarePlanDetail{$xmlns}></CarePlanDetail>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of planned activity; e.g. What lab test, what
     * procedure, what kind of encounter.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of planned activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $dailyAmount
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setDailyAmount(FHIRQuantity $dailyAmount = null)
    {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the protocol, questionnaire, guideline or other specification the
     * planned activity should be conducted in accordance with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the protocol, questionnaire, guideline or other specification the
     * planned activity should be conducted in accordance with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $definition
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setDefinition(FHIRReference $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $goal
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addGoal(FHIRReference $goal = null)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $goal
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setGoal(array $goal = [])
    {
        $this->goal = [];
        if ([] === $goal) {
            return $this;
        }
        foreach($goal as $v) {
            if ($v instanceof FHIRReference) {
                $this->addGoal($v);
            } else {
                $this->addGoal(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $performer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addPerformer(FHIRReference $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $performer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setProductCodeableConcept(FHIRCodeableConcept $productCodeableConcept = null)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $productReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, indicates that the described activity is
     * one that should be engaged in when following the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, indicates that the described activity is
     * one that should be engaged in when following the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $prohibited
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setProhibited($prohibited = null)
    {
        if (null === $prohibited) {
            $this->prohibited = null;
            return $this;
        }
        if ($prohibited instanceof FHIRBoolean) {
            $this->prohibited = $prohibited;
            return $this;
        }
        $this->prohibited = new FHIRBoolean($prohibited);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied, administered or consumed by the
     * subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied, administered or consumed by the
     * subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the rationale that drove the inclusion of this particular activity as
     * part of the plan or the reason why the activity was prohibited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the rationale that drove the inclusion of this particular activity as
     * part of the plan or the reason why the activity was prohibited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the rationale that drove the inclusion of this particular activity as
     * part of the plan or the reason why the activity was prohibited.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the health condition(s) that drove the inclusion of this particular
     * activity as part of the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the health condition(s) that drove the inclusion of this particular
     * activity as part of the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides the health condition(s) that drove the inclusion of this particular
     * activity as part of the plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $scheduledPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setScheduledPeriod(FHIRPeriod $scheduledPeriod = null)
    {
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $scheduledString
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setScheduledString($scheduledString = null)
    {
        if (null === $scheduledString) {
            $this->scheduledString = null;
            return $this;
        }
        if ($scheduledString instanceof FHIRString) {
            $this->scheduledString = $scheduledString;
            return $this;
        }
        $this->scheduledString = new FHIRString($scheduledString);
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
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
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
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $scheduledTiming
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setScheduledTiming(FHIRTiming $scheduledTiming = null)
    {
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * Indicates where the activity is at in its overall life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates where the activity is at in its overall life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setStatus(FHIRCarePlanActivityStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $statusReason
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setStatusReason($statusReason = null)
    {
        if (null === $statusReason) {
            $this->statusReason = null;
            return $this;
        }
        if ($statusReason instanceof FHIRString) {
            $this->statusReason = $statusReason;
            return $this;
        }
        $this->statusReason = new FHIRString($statusReason);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
                throw new \DomainException(sprintf('FHIRCarePlanDetail::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanDetail::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCarePlanDetail;
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanDetail)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanDetail::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail or null, %s seen.',
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
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->dailyAmount)) {
            $type->setDailyAmount(FHIRQuantity::xmlUnserialize($children->dailyAmount));
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRReference::xmlUnserialize($children->definition));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->goal)) {
            foreach($children->goal as $child) {
                $type->addGoal(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->productCodeableConcept)) {
            $type->setProductCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->productCodeableConcept));
        }
        if (isset($children->productReference)) {
            $type->setProductReference(FHIRReference::xmlUnserialize($children->productReference));
        }
        if (isset($attributes->prohibited)) {
            $type->setProhibited((string)$attributes->prohibited);
        }
        if (isset($children->prohibited)) {
            $type->setProhibited(FHIRBoolean::xmlUnserialize($children->prohibited));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->scheduledPeriod)) {
            $type->setScheduledPeriod(FHIRPeriod::xmlUnserialize($children->scheduledPeriod));
        }
        if (isset($attributes->scheduledString)) {
            $type->setScheduledString((string)$attributes->scheduledString);
        }
        if (isset($children->scheduledString)) {
            $type->setScheduledString(FHIRString::xmlUnserialize($children->scheduledString));
        }
        if (isset($children->scheduledTiming)) {
            $type->setScheduledTiming(FHIRTiming::xmlUnserialize($children->scheduledTiming));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCarePlanActivityStatus::xmlUnserialize($children->status));
        }
        if (isset($attributes->statusReason)) {
            $type->setStatusReason((string)$attributes->statusReason);
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRString::xmlUnserialize($children->statusReason));
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

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DAILY_AMOUNT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getProductCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getProductReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProhibited())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROHIBITED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getScheduledPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScheduledString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_STRING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getScheduledTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $a[self::FIELD_DAILY_AMOUNT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DAILY_AMOUNT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $vs;
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a[self::FIELD_PRODUCT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a[self::FIELD_PRODUCT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getProhibited())) {
            $a[self::FIELD_PROHIBITED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PROHIBITED_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_QUANTITY_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $vs;
        }
        if (null !== ($v = $this->getScheduledPeriod())) {
            $a[self::FIELD_SCHEDULED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getScheduledString())) {
            $a[self::FIELD_SCHEDULED_STRING] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SCHEDULED_STRING_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $a[self::FIELD_SCHEDULED_TIMING] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_REASON_EXT] = $v;
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