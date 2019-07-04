<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanDetail
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL;

    const FIELD_CODE = 'code';
    const FIELD_DAILY_AMOUNT = 'dailyAmount';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DO_NOT_PERFORM = 'doNotPerform';
    const FIELD_DO_NOT_PERFORM_EXT = '_doNotPerform';
    const FIELD_GOAL = 'goal';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_KIND = 'kind';
    const FIELD_LOCATION = 'location';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
    const FIELD_PRODUCT_REFERENCE = 'productReference';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_SCHEDULED_PERIOD = 'scheduledPeriod';
    const FIELD_SCHEDULED_STRING = 'scheduledString';
    const FIELD_SCHEDULED_STRING_EXT = '_scheduledString';
    const FIELD_SCHEDULED_TIMING = 'scheduledTiming';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_REASON = 'statusReason';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of planned activity; e.g. what lab test, what
     * procedure, what kind of encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $dailyAmount = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, or missing, indicates that the described
     * activity is one that should be engaged in when following the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $doNotPerform = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $goal = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other
     * definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    private $instantiatesCanonical = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire
     * or other definition that is adhered to in whole or in part by this CarePlan
     * activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $instantiatesUri = [];

    /**
     * Resource types defined as part of FHIR that can be represented as in-line
     * definitions of a care plan activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the kind of resource the in-line definition of a care plan
     * activity is representing. The CarePlan.activity.detail is an in-line definition
     * when a resource is not referenced using CarePlan.activity.reference. For
     * example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    private $kind = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $performer = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $productCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product to be consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $productReference = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates another resource, such as the health condition(s), whose existence
     * justifies this request and drove the inclusion of this particular activity as
     * part of the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     * (choose any one of scheduled*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $scheduledPeriod = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     * (choose any one of scheduled*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * (choose any one of scheduled*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $scheduledTiming = null;

    /**
     * Codes that reflect the current state of a care plan activity within its overall
     * life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    private $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DAILY_AMOUNT])) {
            if ($data[self::FIELD_DAILY_AMOUNT] instanceof FHIRQuantity) {
                $this->setDailyAmount($data[self::FIELD_DAILY_AMOUNT]);
            } else {
                $this->setDailyAmount(new FHIRQuantity($data[self::FIELD_DAILY_AMOUNT]));
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
        if (isset($data[self::FIELD_DO_NOT_PERFORM])) {
            $ext = (isset($data[self::FIELD_DO_NOT_PERFORM_EXT]) && is_array($data[self::FIELD_DO_NOT_PERFORM_EXT]))
                ? $data[self::FIELD_DO_NOT_PERFORM_EXT]
                : null;
            if ($data[self::FIELD_DO_NOT_PERFORM] instanceof FHIRBoolean) {
                $this->setDoNotPerform($data[self::FIELD_DO_NOT_PERFORM]);
            } elseif ($ext && is_scalar($data[self::FIELD_DO_NOT_PERFORM])) {
                $this->setDoNotPerform(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_DO_NOT_PERFORM]] + $ext));
            } else {
                $this->setDoNotPerform(new FHIRBoolean($data[self::FIELD_DO_NOT_PERFORM]));
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
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]))
                ? $data[self::FIELD_INSTANTIATES_CANONICAL_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                foreach($data[self::FIELD_INSTANTIATES_CANONICAL] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addInstantiatesCanonical($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addInstantiatesCanonical(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES_CANONICAL] instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($data[self::FIELD_INSTANTIATES_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_INSTANTIATES_CANONICAL]] + $ext));
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($data[self::FIELD_INSTANTIATES_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT]))
                ? $data[self::FIELD_INSTANTIATES_URI_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES_URI])) {
                foreach($data[self::FIELD_INSTANTIATES_URI] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addInstantiatesUri($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addInstantiatesUri(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES_URI] instanceof FHIRUri) {
                $this->addInstantiatesUri($data[self::FIELD_INSTANTIATES_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTANTIATES_URI])) {
                $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_INSTANTIATES_URI]] + $ext));
            } else {
                $this->addInstantiatesUri(new FHIRUri($data[self::FIELD_INSTANTIATES_URI]));
            }
        }
        if (isset($data[self::FIELD_KIND])) {
            if ($data[self::FIELD_KIND] instanceof FHIRCarePlanActivityKind) {
                $this->setKind($data[self::FIELD_KIND]);
            } else {
                $this->setKind(new FHIRCarePlanActivityKind($data[self::FIELD_KIND]));
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
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
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
            if ($data[self::FIELD_STATUS] instanceof FHIRCarePlanActivityStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCarePlanActivityStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of planned activity; e.g. what lab test, what
     * procedure, what kind of encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * Detailed description of the type of planned activity; e.g. what lab test, what
     * procedure, what kind of encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $dailyAmount
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setDailyAmount(FHIRQuantity $dailyAmount = null)
    {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This provides a textual description of constraints on the intended activity
     * occurrence, including relation to other activities. It may also include
     * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
     * about the activity such as body site, method, route, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, or missing, indicates that the described
     * activity is one that should be engaged in when following the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan. If false, or missing, indicates that the described
     * activity is one that should be engaged in when following the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $doNotPerform
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setDoNotPerform($doNotPerform = null)
    {
        if (null === $doNotPerform) {
            $this->doNotPerform = null;
            return $this;
        }
        if ($doNotPerform instanceof FHIRBoolean) {
            $this->doNotPerform = $doNotPerform;
            return $this;
        }
        $this->doNotPerform = new FHIRBoolean($doNotPerform);
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $goal
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $goal
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other
     * definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other
     * definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addInstantiatesCanonical($instantiatesCanonical = null)
    {
        if (null === $instantiatesCanonical) {
            $this->instantiatesCanonical = null;
            return $this;
        }
        if ($instantiatesCanonical instanceof FHIRCanonical) {
            $this->instantiatesCanonical = $instantiatesCanonical;
            return $this;
        }
        $this->instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other
     * definition that is adhered to in whole or in part by this CarePlan activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = [])
    {
        $this->instantiatesCanonical = [];
        if ([] === $instantiatesCanonical) {
            return $this;
        }
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($v);
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire
     * or other definition that is adhered to in whole or in part by this CarePlan
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire
     * or other definition that is adhered to in whole or in part by this CarePlan
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $instantiatesUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function addInstantiatesUri($instantiatesUri = null)
    {
        if (null === $instantiatesUri) {
            $this->instantiatesUri = null;
            return $this;
        }
        if ($instantiatesUri instanceof FHIRUri) {
            $this->instantiatesUri = $instantiatesUri;
            return $this;
        }
        $this->instantiatesUri = new FHIRUri($instantiatesUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, questionnaire
     * or other definition that is adhered to in whole or in part by this CarePlan
     * activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[] $instantiatesUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setInstantiatesUri(array $instantiatesUri = [])
    {
        $this->instantiatesUri = [];
        if ([] === $instantiatesUri) {
            return $this;
        }
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiatesUri($v);
            } else {
                $this->addInstantiatesUri(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * Resource types defined as part of FHIR that can be represented as in-line
     * definitions of a care plan activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the kind of resource the in-line definition of a care plan
     * activity is representing. The CarePlan.activity.detail is an in-line definition
     * when a resource is not referenced using CarePlan.activity.reference. For
     * example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Resource types defined as part of FHIR that can be represented as in-line
     * definitions of a care plan activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the kind of resource the in-line definition of a care plan
     * activity is representing. The CarePlan.activity.detail is an in-line definition
     * when a resource is not referenced using CarePlan.activity.reference. For
     * example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind $kind
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setKind(FHIRCarePlanActivityKind $kind = null)
    {
        $this->kind = $kind;
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $performer
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * activity. (choose any one of product*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * activity. (choose any one of product*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * activity. (choose any one of product*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * activity. (choose any one of product*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $productReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        $this->productReference = $productReference;
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * Indicates another resource, such as the health condition(s), whose existence
     * justifies this request and drove the inclusion of this particular activity as
     * part of the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * Indicates another resource, such as the health condition(s), whose existence
     * justifies this request and drove the inclusion of this particular activity as
     * part of the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * Indicates another resource, such as the health condition(s), whose existence
     * justifies this request and drove the inclusion of this particular activity as
     * part of the plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * (choose any one of scheduled*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
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
     * (choose any one of scheduled*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $scheduledPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setScheduledPeriod(FHIRPeriod $scheduledPeriod = null)
    {
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     * (choose any one of scheduled*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     * (choose any one of scheduled*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $scheduledString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
     * (choose any one of scheduled*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * (choose any one of scheduled*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming $scheduledTiming
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setScheduledTiming(FHIRTiming $scheduledTiming = null)
    {
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * Codes that reflect the current state of a care plan activity within its overall
     * life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes that reflect the current state of a care plan activity within its overall
     * life cycle.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setStatus(FHIRCarePlanActivityStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides reason why the activity isn't yet started, is on hold, was cancelled,
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
                throw new \DomainException(sprintf('FHIRCarePlanDetail::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanDetail::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRCarePlanDetail);
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanDetail)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanDetail::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->dailyAmount)) {
            $type->setDailyAmount(FHIRQuantity::xmlUnserialize($children->dailyAmount));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->doNotPerform)) {
            $type->setDoNotPerform((string)$attributes->doNotPerform);
        }
        if (isset($children->doNotPerform)) {
            $type->setDoNotPerform(FHIRBoolean::xmlUnserialize($children->doNotPerform));
        }
        if (isset($children->goal)) {
            foreach($children->goal as $child) {
                $type->addGoal(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->instantiatesCanonical)) {
            $type->addInstantiatesCanonical((string)$attributes->instantiatesCanonical);
        }
        if (isset($children->instantiatesCanonical)) {
            foreach($children->instantiatesCanonical as $child) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->instantiatesUri)) {
            $type->addInstantiatesUri((string)$attributes->instantiatesUri);
        }
        if (isset($children->instantiatesUri)) {
            foreach($children->instantiatesUri as $child) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRCarePlanActivityKind::xmlUnserialize($children->kind));
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
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($children->statusReason));
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
            $sxe = new \SimpleXMLElement('<CarePlanDetail xmlns="http://hl7.org/fhir"></CarePlanDetail>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DAILY_AMOUNT));
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $sxe->addAttribute(self::FIELD_DO_NOT_PERFORM, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DO_NOT_PERFORM));
            }
        }
        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL));
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_INSTANTIATES_CANONICAL, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL));
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_INSTANTIATES_URI, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI));
                }
            }
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION));
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER));
            }
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getProductReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_REFERENCE));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY));
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE));
            }
        }
        if (null !== ($v = $this->getScheduledPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_PERIOD));
        }
        if (null !== ($v = $this->getScheduledString())) {
            $sxe->addAttribute(self::FIELD_SCHEDULED_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_STRING));
            }
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_TIMING));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON));
        }
        return $sxe;
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
        if (null !== ($v = $this->getDailyAmount())) {
            $a[self::FIELD_DAILY_AMOUNT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a[self::FIELD_DO_NOT_PERFORM] = (string)$v;
            $a[self::FIELD_DO_NOT_PERFORM_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $a[self::FIELD_INSTANTIATES_CANONICAL] = [];
            $a[self::FIELD_INSTANTIATES_CANONICAL_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_INSTANTIATES_CANONICAL][] = (string)$v;
                $a[self::FIELD_INSTANTIATES_CANONICAL_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $a[self::FIELD_INSTANTIATES_URI] = [];
            $a[self::FIELD_INSTANTIATES_URI_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_INSTANTIATES_URI][] = (string)$v;
                $a[self::FIELD_INSTANTIATES_URI_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v;
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
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
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
            $a[self::FIELD_SCHEDULED_STRING] = (string)$v;
            $a[self::FIELD_SCHEDULED_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $a[self::FIELD_SCHEDULED_TIMING] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
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