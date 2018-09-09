<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind;
use PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

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
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $dailyAmount = null;

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $goal = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    public $kind = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $scheduledPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $scheduledString = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $scheduledTiming = null;

    /**
     * Identifies what progress is being made for the specific activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public $status = null;

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * FHIRCarePlanDetail Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['dailyAmount'])) {
                $this->setDailyAmount($data['dailyAmount']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
            }
            if (isset($data['goal'])) {
                $this->setGoal($data['goal']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['productCodeableConcept'])) {
                $this->setProductCodeableConcept($data['productCodeableConcept']);
            }
            if (isset($data['productReference'])) {
                $this->setProductReference($data['productReference']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['scheduledPeriod'])) {
                $this->setScheduledPeriod($data['scheduledPeriod']);
            }
            if (isset($data['scheduledString'])) {
                $this->setScheduledString($data['scheduledString']);
            }
            if (isset($data['scheduledTiming'])) {
                $this->setScheduledTiming($data['scheduledTiming']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
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
     * Detailed description of the type of planned activity; e.g. what lab test, what procedure, what kind of encounter.
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
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        if (null === $doNotPerform) {
            return $this; 
        }
        if (is_scalar($doNotPerform)) {
            $doNotPerform = new FHIRBoolean($doNotPerform);
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setDoNotPerform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($doNotPerform)
            ));
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.  If false, or missing, indicates that the described activity is one that should be engaged in when following the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }


    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setGoal(FHIRReference $goal = null)
    {
        if (null === $goal) {
            return $this; 
        }
        $this->goal = $goal;
        return $this;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getGoal()
    {
        return $this->goal;
    }


    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        if (is_scalar($instantiatesCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        if (null === $instantiatesUri) {
            return $this; 
        }
        if (is_scalar($instantiatesUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     * @return $this
     */
    public function setKind($kind)
    {
        if (null === $kind) {
            return $this; 
        }
        if (is_scalar($kind)) {
            $kind = new FHIRCarePlanActivityKind($kind);
        }
        if (!($kind instanceof FHIRCarePlanActivityKind)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanDetail::setKind - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind or appropriate scalar value, %s seen.',
                gettype($kind)
            ));
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * A description of the kind of resource the in-line definition of a care plan activity is representing.  The CarePlan.activity.detail is an in-line definition when a resource is not referenced using CarePlan.activity.reference.  For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityKind
     */
    public function getKind()
    {
        return $this->kind;
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
    public function setPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
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
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }


    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
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
     * Identifies the food, drug or other product to be consumed or supplied in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
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
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan or the reason why the activity was prohibited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Indicates another resource, such as the health condition(s), whose existence justifies this request and drove the inclusion of this particular activity as part of the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
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
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
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
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDailyAmount())) {
            $a['dailyAmount'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a['doNotPerform'] = $v;
        }
        if (null !== ($v = $this->getGoal())) {
            $a['goal'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a['kind'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a['productCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a['productReference'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}