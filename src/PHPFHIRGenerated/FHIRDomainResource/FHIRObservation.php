<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRObservation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * A larger event of which this particular Observation is a component or step.  For example,  an observation as part of a procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * The status of the result value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * A code that classifies the general type of observation being made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $effectiveTiming = null;

    /**
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * Who was responsible for asserting the observed value as "true".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $performer = [];

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Indicates the mechanism used to perform the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The specimen that was used when this observation was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The device used to generate the observation data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = [];

    /**
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $hasMember = [];

    /**
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $derivedFrom = [];

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public $component = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation';

    /**
     * A unique identifier assigned to this observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A larger event of which this particular Observation is a component or step.  For example,  an observation as part of a procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular Observation is a component or step.  For example,  an observation as part of a procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The status of the result value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the result value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the general type of observation being made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A code that classifies the general type of observation being made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getEffectiveTiming() {
        return $this->effectiveTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $effectiveTiming
     * @return $this
     */
    public function setEffectiveTiming($effectiveTiming) {
        $this->effectiveTiming = $effectiveTiming;
        return $this;
    }

    /**
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * The date and time this version of the observation was made available to providers, typically after the results have been reviewed and verified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity() {
        return $this->valueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity) {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept() {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept) {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString() {
        return $this->valueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString) {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean() {
        return $this->valueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean) {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger() {
        return $this->valueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger) {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange() {
        return $this->valueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange) {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio() {
        return $this->valueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio) {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData() {
        return $this->valueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData) {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime() {
        return $this->valueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime) {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime() {
        return $this->valueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime) {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod() {
        return $this->valuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod) {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason() {
        return $this->dataAbsentReason;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return $this
     */
    public function setDataAbsentReason($dataAbsentReason) {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation() {
        return $this->interpretation;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $interpretation
     * @return $this
     */
    public function setInterpretation($interpretation) {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    /**
     * The specimen that was used when this observation was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimen() {
        return $this->specimen;
    }

    /**
     * The specimen that was used when this observation was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $specimen
     * @return $this
     */
    public function setSpecimen($specimen) {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * The device used to generate the observation data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The device used to generate the observation data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device) {
        $this->device = $device;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange() {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return $this
     */
    public function addReferenceRange($referenceRange) {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getHasMember() {
        return $this->hasMember;
    }

    /**
     * This observation is a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $hasMember
     * @return $this
     */
    public function addHasMember($hasMember) {
        $this->hasMember[] = $hasMember;
        return $this;
    }

    /**
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDerivedFrom() {
        return $this->derivedFrom;
    }

    /**
     * The target resource that represents a measurement from which this observation value is derived. For example, a calculated anion gap or a fetal measurement based on an ultrasound image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $derivedFrom
     * @return $this
     */
    public function addDerivedFrom($derivedFrom) {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public function getComponent() {
        return $this->component;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent $component
     * @return $this
     */
    public function addComponent($component) {
        $this->component[] = $component;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addPartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['effectiveTiming'])) {
                $this->setEffectiveTiming($data['effectiveTiming']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['performer'])) {
                if (is_array($data['performer'])) {
                    foreach($data['performer'] as $d) {
                        $this->addPerformer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"performer" must be array of objects or null, '.gettype($data['performer']).' seen.');
                }
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
            }
            if (isset($data['valueRange'])) {
                $this->setValueRange($data['valueRange']);
            }
            if (isset($data['valueRatio'])) {
                $this->setValueRatio($data['valueRatio']);
            }
            if (isset($data['valueSampledData'])) {
                $this->setValueSampledData($data['valueSampledData']);
            }
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['interpretation'])) {
                $this->setInterpretation($data['interpretation']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['specimen'])) {
                $this->setSpecimen($data['specimen']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['referenceRange'])) {
                if (is_array($data['referenceRange'])) {
                    foreach($data['referenceRange'] as $d) {
                        $this->addReferenceRange($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceRange" must be array of objects or null, '.gettype($data['referenceRange']).' seen.');
                }
            }
            if (isset($data['hasMember'])) {
                if (is_array($data['hasMember'])) {
                    foreach($data['hasMember'] as $d) {
                        $this->addHasMember($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"hasMember" must be array of objects or null, '.gettype($data['hasMember']).' seen.');
                }
            }
            if (isset($data['derivedFrom'])) {
                if (is_array($data['derivedFrom'])) {
                    foreach($data['derivedFrom'] as $d) {
                        $this->addDerivedFrom($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"derivedFrom" must be array of objects or null, '.gettype($data['derivedFrom']).' seen.');
                }
            }
            if (isset($data['component'])) {
                if (is_array($data['component'])) {
                    foreach($data['component'] as $d) {
                        $this->addComponent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"component" must be array of objects or null, '.gettype($data['component']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (isset($this->effectiveTiming)) $json['effectiveTiming'] = $this->effectiveTiming;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (isset($this->valueQuantity)) $json['valueQuantity'] = $this->valueQuantity;
        if (isset($this->valueCodeableConcept)) $json['valueCodeableConcept'] = $this->valueCodeableConcept;
        if (isset($this->valueString)) $json['valueString'] = $this->valueString;
        if (isset($this->valueBoolean)) $json['valueBoolean'] = $this->valueBoolean;
        if (isset($this->valueInteger)) $json['valueInteger'] = $this->valueInteger;
        if (isset($this->valueRange)) $json['valueRange'] = $this->valueRange;
        if (isset($this->valueRatio)) $json['valueRatio'] = $this->valueRatio;
        if (isset($this->valueSampledData)) $json['valueSampledData'] = $this->valueSampledData;
        if (isset($this->valueTime)) $json['valueTime'] = $this->valueTime;
        if (isset($this->valueDateTime)) $json['valueDateTime'] = $this->valueDateTime;
        if (isset($this->valuePeriod)) $json['valuePeriod'] = $this->valuePeriod;
        if (isset($this->dataAbsentReason)) $json['dataAbsentReason'] = $this->dataAbsentReason;
        if (isset($this->interpretation)) $json['interpretation'] = $this->interpretation;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (isset($this->method)) $json['method'] = $this->method;
        if (isset($this->specimen)) $json['specimen'] = $this->specimen;
        if (isset($this->device)) $json['device'] = $this->device;
        if (0 < count($this->referenceRange)) {
            $json['referenceRange'] = [];
            foreach($this->referenceRange as $referenceRange) {
                if (null !== $referenceRange) $json['referenceRange'][] = $referenceRange;
            }
        }
        if (0 < count($this->hasMember)) {
            $json['hasMember'] = [];
            foreach($this->hasMember as $hasMember) {
                if (null !== $hasMember) $json['hasMember'][] = $hasMember;
            }
        }
        if (0 < count($this->derivedFrom)) {
            $json['derivedFrom'] = [];
            foreach($this->derivedFrom as $derivedFrom) {
                if (null !== $derivedFrom) $json['derivedFrom'][] = $derivedFrom;
            }
        }
        if (0 < count($this->component)) {
            $json['component'] = [];
            foreach($this->component as $component) {
                if (null !== $component) $json['component'][] = $component;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Observation xmlns="http://hl7.org/fhir"></Observation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (isset($this->effectiveTiming)) $this->effectiveTiming->xmlSerialize(true, $sxe->addChild('effectiveTiming'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (isset($this->valueQuantity)) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (isset($this->valueCodeableConcept)) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (isset($this->valueString)) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (isset($this->valueBoolean)) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (isset($this->valueInteger)) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (isset($this->valueRange)) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (isset($this->valueRatio)) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (isset($this->valueSampledData)) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (isset($this->valueTime)) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (isset($this->valueDateTime)) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (isset($this->valuePeriod)) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (isset($this->dataAbsentReason)) $this->dataAbsentReason->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        if (isset($this->interpretation)) $this->interpretation->xmlSerialize(true, $sxe->addChild('interpretation'));
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (isset($this->method)) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (isset($this->specimen)) $this->specimen->xmlSerialize(true, $sxe->addChild('specimen'));
        if (isset($this->device)) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->referenceRange)) {
            foreach($this->referenceRange as $referenceRange) {
                $referenceRange->xmlSerialize(true, $sxe->addChild('referenceRange'));
            }
        }
        if (0 < count($this->hasMember)) {
            foreach($this->hasMember as $hasMember) {
                $hasMember->xmlSerialize(true, $sxe->addChild('hasMember'));
            }
        }
        if (0 < count($this->derivedFrom)) {
            foreach($this->derivedFrom as $derivedFrom) {
                $derivedFrom->xmlSerialize(true, $sxe->addChild('derivedFrom'));
            }
        }
        if (0 < count($this->component)) {
            foreach($this->component as $component) {
                $component->xmlSerialize(true, $sxe->addChild('component'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}