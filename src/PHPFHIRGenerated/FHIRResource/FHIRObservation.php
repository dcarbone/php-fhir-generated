<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRObservation extends FHIRResource implements \JsonSerializable
{
    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $name = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The assessment made based on the result of the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comments = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $appliesDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $appliesPeriod = null;

    /**
     * Date/Time this was made available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * The status of the result value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * An estimate of the degree to which quality issues have impacted on the value reported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationReliability
     */
    public $reliability = null;

    /**
     * Indicates where on the subject's body the observation was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Indicates the mechanism used to perform the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * A unique identifier for the simple observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The thing the observation is being made about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The specimen that was used when this observation was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $specimen = null;

    /**
     * Who was responsible for asserting the observed value as "true".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $performer = array();

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = array();

    /**
     * Related observations - either components, or previous observations, or statements of derivation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public $related = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation';

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The assessment made based on the result of the observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * The assessment made based on the result of the observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $interpretation
     * @return $this
     */
    public function setInterpretation($interpretation)
    {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAppliesDateTime()
    {
        return $this->appliesDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $appliesDateTime
     * @return $this
     */
    public function setAppliesDateTime($appliesDateTime)
    {
        $this->appliesDateTime = $appliesDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getAppliesPeriod()
    {
        return $this->appliesPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $appliesPeriod
     * @return $this
     */
    public function setAppliesPeriod($appliesPeriod)
    {
        $this->appliesPeriod = $appliesPeriod;
        return $this;
    }

    /**
     * Date/Time this was made available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Date/Time this was made available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     * The status of the result value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the result value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An estimate of the degree to which quality issues have impacted on the value reported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRObservationReliability
     */
    public function getReliability()
    {
        return $this->reliability;
    }

    /**
     * An estimate of the degree to which quality issues have impacted on the value reported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRObservationReliability $reliability
     * @return $this
     */
    public function setReliability($reliability)
    {
        $this->reliability = $reliability;
        return $this;
    }

    /**
     * Indicates where on the subject's body the observation was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates where on the subject's body the observation was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A unique identifier for the simple observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier for the simple observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The thing the observation is being made about.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The thing the observation is being made about.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The specimen that was used when this observation was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * The specimen that was used when this observation was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $specimen
     * @return $this
     */
    public function setSpecimen($specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return $this
     */
    public function addReferenceRange($referenceRange)
    {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * Related observations - either components, or previous observations, or statements of derivation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Related observations - either components, or previous observations, or statements of derivation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->valueQuantity) $json['valueQuantity'] = json_encode($this->valueQuantity);
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = json_encode($this->valueCodeableConcept);
        if (null !== $this->valueAttachment) $json['valueAttachment'] = json_encode($this->valueAttachment);
        if (null !== $this->valueRatio) $json['valueRatio'] = json_encode($this->valueRatio);
        if (null !== $this->valuePeriod) $json['valuePeriod'] = json_encode($this->valuePeriod);
        if (null !== $this->valueSampledData) $json['valueSampledData'] = json_encode($this->valueSampledData);
        if (null !== $this->valueString) $json['valueString'] = json_encode($this->valueString);
        if (null !== $this->interpretation) $json['interpretation'] = json_encode($this->interpretation);
        if (null !== $this->comments) $json['comments'] = json_encode($this->comments);
        if (null !== $this->appliesDateTime) $json['appliesDateTime'] = json_encode($this->appliesDateTime);
        if (null !== $this->appliesPeriod) $json['appliesPeriod'] = json_encode($this->appliesPeriod);
        if (null !== $this->issued) $json['issued'] = json_encode($this->issued);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->reliability) $json['reliability'] = json_encode($this->reliability);
        if (null !== $this->bodySite) $json['bodySite'] = json_encode($this->bodySite);
        if (null !== $this->method) $json['method'] = json_encode($this->method);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->specimen) $json['specimen'] = json_encode($this->specimen);
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = json_encode($performer);
            }
        }
        if (0 < count($this->referenceRange)) {
            $json['referenceRange'] = [];
            foreach($this->referenceRange as $referenceRange) {
                $json['referenceRange'][] = json_encode($referenceRange);
            }
        }
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = json_encode($related);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Observation xmlns="http://hl7.org/fhir"></Observation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->interpretation) $this->interpretation->xmlSerialize(true, $sxe->addChild('interpretation'));
        if (null !== $this->comments) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if (null !== $this->appliesDateTime) $this->appliesDateTime->xmlSerialize(true, $sxe->addChild('appliesDateTime'));
        if (null !== $this->appliesPeriod) $this->appliesPeriod->xmlSerialize(true, $sxe->addChild('appliesPeriod'));
        if (null !== $this->issued) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->reliability) $this->reliability->xmlSerialize(true, $sxe->addChild('reliability'));
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->specimen) $this->specimen->xmlSerialize(true, $sxe->addChild('specimen'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (0 < count($this->referenceRange)) {
            foreach($this->referenceRange as $referenceRange) {
                $referenceRange->xmlSerialize(true, $sxe->addChild('referenceRange'));
            }
        }
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}