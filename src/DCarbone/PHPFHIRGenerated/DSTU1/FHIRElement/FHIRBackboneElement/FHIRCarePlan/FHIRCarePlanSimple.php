<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient for a period of time, possibly limited to care for a
 * specific condition or set of conditions.
 *
 * Class FHIRCarePlanSimple
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanSimple extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE;
    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_EXT = '_category';
    const FIELD_CODE = 'code';
    const FIELD_DAILY_AMOUNT = 'dailyAmount';
    const FIELD_DETAILS = 'details';
    const FIELD_DETAILS_EXT = '_details';
    const FIELD_LOCATION = 'location';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRODUCT = 'product';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_SCHEDULE = 'timingSchedule';
    const FIELD_TIMING_STRING = 'timingString';
    const FIELD_TIMING_STRING_EXT = '_timingString';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory
     */
    protected $category = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $dailyAmount = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $details = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $location = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $performer = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $product = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $quantity = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $timingPeriod = null;

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected $timingSchedule = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $timingString = null;

    /**
     * Validation map for fields in type CarePlan.Simple
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCarePlanSimple Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanSimple::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY]) || isset($data[self::FIELD_CATEGORY_EXT])) {
            if (isset($data[self::FIELD_CATEGORY])) {
                $value = $data[self::FIELD_CATEGORY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT])) {
                $ext = $data[self::FIELD_CATEGORY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCarePlanActivityCategory) {
                    $this->setCategory($value);
                } else if (is_array($value)) {
                    $this->setCategory(new FHIRCarePlanActivityCategory(array_merge($ext, $value)));
                } else {
                    $this->setCategory(new FHIRCarePlanActivityCategory([FHIRCarePlanActivityCategory::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCategory(new FHIRCarePlanActivityCategory($ext));
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
            if ($data[self::FIELD_DAILY_AMOUNT] instanceof FHIRQuantity) {
                $this->setDailyAmount($data[self::FIELD_DAILY_AMOUNT]);
            } else {
                $this->setDailyAmount(new FHIRQuantity($data[self::FIELD_DAILY_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_DETAILS]) || isset($data[self::FIELD_DETAILS_EXT])) {
            if (isset($data[self::FIELD_DETAILS])) {
                $value = $data[self::FIELD_DETAILS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DETAILS_EXT]) && is_array($data[self::FIELD_DETAILS_EXT])) {
                $ext = $data[self::FIELD_DETAILS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetails($value);
                } else if (is_array($value)) {
                    $this->setDetails(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetails(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDetails(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRResourceReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRResourceReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRResourceReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRResourceReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRResourceReference) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRResourceReference($data[self::FIELD_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_TIMING_PERIOD])) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TIMING_SCHEDULE])) {
            if ($data[self::FIELD_TIMING_SCHEDULE] instanceof FHIRSchedule) {
                $this->setTimingSchedule($data[self::FIELD_TIMING_SCHEDULE]);
            } else {
                $this->setTimingSchedule(new FHIRSchedule($data[self::FIELD_TIMING_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_TIMING_STRING]) || isset($data[self::FIELD_TIMING_STRING_EXT])) {
            if (isset($data[self::FIELD_TIMING_STRING])) {
                $value = $data[self::FIELD_TIMING_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIMING_STRING_EXT]) && is_array($data[self::FIELD_TIMING_STRING_EXT])) {
                $ext = $data[self::FIELD_TIMING_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTimingString($value);
                } else if (is_array($value)) {
                    $this->setTimingString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTimingString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimingString(new FHIRString($ext));
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
        return "<CarePlanSimple{$xmlns}></CarePlanSimple>";
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory $category
     * @return static
     */
    public function setCategory(FHIRCarePlanActivityCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $code
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $dailyAmount
     * @return static
     */
    public function setDailyAmount(FHIRQuantity $dailyAmount = null)
    {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $details
     * @return static
     */
    public function setDetails($details = null)
    {
        if (null === $details) {
            $this->details = null;
            return $this;
        }
        if ($details instanceof FHIRString) {
            $this->details = $details;
            return $this;
        }
        $this->details = new FHIRString($details);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $location
     * @return static
     */
    public function setLocation(FHIRResourceReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function addPerformer(FHIRResourceReference $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $performer
     * @return static
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $product
     * @return static
     */
    public function setProduct(FHIRResourceReference $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    public function getTimingSchedule()
    {
        return $this->timingSchedule;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $timingSchedule
     * @return static
     */
    public function setTimingSchedule(FHIRSchedule $timingSchedule = null)
    {
        $this->timingSchedule = $timingSchedule;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getTimingString()
    {
        return $this->timingString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $timingString
     * @return static
     */
    public function setTimingString($timingString = null)
    {
        if (null === $timingString) {
            $this->timingString = null;
            return $this;
        }
        if ($timingString instanceof FHIRString) {
            $this->timingString = $timingString;
            return $this;
        }
        $this->timingString = new FHIRString($timingString);
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
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDailyAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAILY_AMOUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetails())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAILS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAILY_AMOUNT])) {
            $v = $this->getDailyAmount();
            foreach($validationRules[self::FIELD_DAILY_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_DAILY_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAILY_AMOUNT])) {
                        $errs[self::FIELD_DAILY_AMOUNT] = [];
                    }
                    $errs[self::FIELD_DAILY_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAILS])) {
            $v = $this->getDetails();
            foreach($validationRules[self::FIELD_DETAILS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_DETAILS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAILS])) {
                        $errs[self::FIELD_DETAILS] = [];
                    }
                    $errs[self::FIELD_DETAILS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
            $v = $this->getTimingPeriod();
            foreach($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
                        $errs[self::FIELD_TIMING_PERIOD] = [];
                    }
                    $errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_SCHEDULE])) {
            $v = $this->getTimingSchedule();
            foreach($validationRules[self::FIELD_TIMING_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_TIMING_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_SCHEDULE])) {
                        $errs[self::FIELD_TIMING_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_TIMING_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_STRING])) {
            $v = $this->getTimingString();
            foreach($validationRules[self::FIELD_TIMING_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE, self::FIELD_TIMING_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_STRING])) {
                        $errs[self::FIELD_TIMING_STRING] = [];
                    }
                    $errs[self::FIELD_TIMING_STRING][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
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
                throw new \DomainException(sprintf('FHIRCarePlanSimple::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanSimple::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCarePlanSimple;
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanSimple)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanSimple::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple or null, %s seen.',
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
            $type->setCategory(FHIRCarePlanActivityCategory::xmlUnserialize($children->category));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->dailyAmount)) {
            $type->setDailyAmount(FHIRQuantity::xmlUnserialize($children->dailyAmount));
        }
        if (isset($children->details)) {
            $type->setDetails(FHIRString::xmlUnserialize($children->details));
        }
        if (isset($attributes->details)) {
            $pt = $type->getDetails();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->details);
            } else {
                $type->setDetails((string)$attributes->details);
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRResourceReference::xmlUnserialize($children->location));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->product)) {
            $type->setProduct(FHIRResourceReference::xmlUnserialize($children->product));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->timingPeriod)) {
            $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($children->timingPeriod));
        }
        if (isset($children->timingSchedule)) {
            $type->setTimingSchedule(FHIRSchedule::xmlUnserialize($children->timingSchedule));
        }
        if (isset($children->timingString)) {
            $type->setTimingString(FHIRString::xmlUnserialize($children->timingString));
        }
        if (isset($attributes->timingString)) {
            $pt = $type->getTimingString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timingString);
            } else {
                $type->setTimingString((string)$attributes->timingString);
            }
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
        if (null !== ($v = $this->getDetails())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAILS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_SCHEDULE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_STRING, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CATEGORY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCarePlanActivityCategory::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCarePlanActivityCategory::FIELD_VALUE]);
                $a[self::FIELD_CATEGORY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $a[self::FIELD_DAILY_AMOUNT] = $v;
        }
        if (null !== ($v = $this->getDetails())) {
            $a[self::FIELD_DETAILS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DETAILS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER][] = $v;
            }
        }
        if (null !== ($v = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a[self::FIELD_TIMING_PERIOD] = $v;
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            $a[self::FIELD_TIMING_SCHEDULE] = $v;
        }
        if (null !== ($v = $this->getTimingString())) {
            $a[self::FIELD_TIMING_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TIMING_STRING_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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