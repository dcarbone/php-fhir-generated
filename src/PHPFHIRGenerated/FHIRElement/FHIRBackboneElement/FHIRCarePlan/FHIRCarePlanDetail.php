<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanDetail
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanDetail extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CarePlan.Detail';

    /**
     * High-level categorization of the type of activity in a care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $category = null;

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $dailyAmount = null;

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $definition = null;

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $goal = [];

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $performer = [];

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $productCodeableConcept = null;

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $productReference = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $prohibited = null;

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $quantity = null;

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $scheduledPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $scheduledString = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $scheduledTiming = null;

    /**
     * Identifies what progress is being made for the specific activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    private $status = null;

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $statusReason = null;

    /**
     * FHIRCarePlanDetail Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"category\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setCategory($value);
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setCode($value);
            }
            if (isset($data['dailyAmount'])) {
                $value = $data['dailyAmount'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"dailyAmount\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setDailyAmount($value);
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"definition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setDefinition($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['goal'])) {
                $value = $data['goal'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Collection field \"goal\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addGoal($v);
                    }
                }
            }
            if (isset($data['location'])) {
                $value = $data['location'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"location\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setLocation($value);
            }
            if (isset($data['performer'])) {
                $value = $data['performer'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Collection field \"performer\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPerformer($v);
                    }
                }
            }
            if (isset($data['productCodeableConcept'])) {
                $value = $data['productCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"productCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setProductCodeableConcept($value);
            }
            if (isset($data['productReference'])) {
                $value = $data['productReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"productReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setProductReference($value);
            }
            if (isset($data['prohibited'])) {
                $value = $data['prohibited'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"prohibited\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setProhibited($value);
            }
            if (isset($data['quantity'])) {
                $value = $data['quantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"quantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setQuantity($value);
            }
            if (isset($data['reasonCode'])) {
                $value = $data['reasonCode'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Collection field \"reasonCode\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReasonCode($v);
                    }
                }
            }
            if (isset($data['reasonReference'])) {
                $value = $data['reasonReference'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Collection field \"reasonReference\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReasonReference($v);
                    }
                }
            }
            if (isset($data['scheduledPeriod'])) {
                $value = $data['scheduledPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"scheduledPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setScheduledPeriod($value);
            }
            if (isset($data['scheduledString'])) {
                $value = $data['scheduledString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"scheduledString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setScheduledString($value);
            }
            if (isset($data['scheduledTiming'])) {
                $value = $data['scheduledTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"scheduledTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value)); 
                }
                $this->setScheduledTiming($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRCarePlanActivityStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCarePlanActivityStatus($value);
                }
                if (!($value instanceof FHIRCarePlanActivityStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
            if (isset($data['statusReason'])) {
                $value = $data['statusReason'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Property \"statusReason\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatusReason($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDailyAmount(FHIRQuantity $dailyAmount = null)
    {
        if (null === $dailyAmount) {
            return $this; 
        }
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefinition(FHIRReference $definition = null)
    {
        if (null === $definition) {
            return $this; 
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * Identifies the protocol, questionnaire, guideline or other specification the planned activity should be conducted in accordance with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addGoal(FHIRReference $goal = null)
    {
        if (null === $goal) {
            return $this; 
        }
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept(FHIRCodeableConcept $productCodeableConcept = null)
    {
        if (null === $productCodeableConcept) {
            return $this; 
        }
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        if (null === $productReference) {
            return $this; 
        }
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setProhibited($prohibited)
    {
        if (null === $prohibited) {
            return $this; 
        }
        if (is_scalar($prohibited)) {
            $prohibited = new FHIRBoolean($prohibited);
        }
        if (!($prohibited instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setProhibited - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($prohibited)
            ));
        }
        $this->prohibited = $prohibited;
        return $this;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, indicates that the described activity is one that should be engaged in when following the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setScheduledPeriod(FHIRPeriod $scheduledPeriod = null)
    {
        if (null === $scheduledPeriod) {
            return $this; 
        }
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setScheduledString($scheduledString)
    {
        if (null === $scheduledString) {
            return $this; 
        }
        if (is_scalar($scheduledString)) {
            $scheduledString = new FHIRString($scheduledString);
        }
        if (!($scheduledString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setScheduledString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($scheduledString)
            ));
        }
        $this->scheduledString = $scheduledString;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     * @return $this
     */
    public function setScheduledTiming(FHIRTiming $scheduledTiming = null)
    {
        if (null === $scheduledTiming) {
            return $this; 
        }
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRCarePlanActivityStatus($status);
        }
        if (!($status instanceof FHIRCarePlanActivityStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setStatusReason($statusReason)
    {
        if (null === $statusReason) {
            return $this; 
        }
        if (is_scalar($statusReason)) {
            $statusReason = new FHIRString($statusReason);
        }
        if (!($statusReason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setStatusReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($statusReason)
            ));
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $a['dailyAmount'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (0 < count($values = $this->getGoal())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['goal'] = $vs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (0 < count($values = $this->getPerformer())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['performer'] = $vs;
            }
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a['productCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a['productReference'] = $v;
        }
        if (null !== ($v = $this->getProhibited())) {
            $a['prohibited'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (0 < count($values = $this->getReasonCode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonCode'] = $vs;
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonReference'] = $vs;
            }
        }
        if (null !== ($v = $this->getScheduledPeriod())) {
            $a['scheduledPeriod'] = $v;
        }
        if (null !== ($v = $this->getScheduledString())) {
            $a['scheduledString'] = $v;
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $a['scheduledTiming'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CarePlanDetail xmlns="http://hl7.org/fhir"></CarePlanDetail>');
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize(true, $sxe->addChild('category'));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $v->xmlSerialize(true, $sxe->addChild('dailyAmount'));
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize(true, $sxe->addChild('definition'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($values = $this->getGoal())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('goal'));
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize(true, $sxe->addChild('location'));
        }
        if (0 < count($values = $this->getPerformer())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('performer'));
                }
            }
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('productCodeableConcept'));
        }
        if (null !== ($v = $this->getProductReference())) {
            $v->xmlSerialize(true, $sxe->addChild('productReference'));
        }
        if (null !== ($v = $this->getProhibited())) {
            $v->xmlSerialize(true, $sxe->addChild('prohibited'));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('quantity'));
        }
        if (0 < count($values = $this->getReasonCode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonCode'));
                }
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonReference'));
                }
            }
        }
        if (null !== ($v = $this->getScheduledPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('scheduledPeriod'));
        }
        if (null !== ($v = $this->getScheduledString())) {
            $v->xmlSerialize(true, $sxe->addChild('scheduledString'));
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('scheduledTiming'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize(true, $sxe->addChild('statusReason'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}