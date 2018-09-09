<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDetectedIssueSeverity;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRObservationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDetectedIssue
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDetectedIssue extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DetectedIssue';

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Identifies the general type of issue identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The date or date-time when the detected issue was initially identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A textual explanation of the detected issue.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $detail = null;

    /**
     * Business identifier associated with the detected issue record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $implicated = null;

    /**
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation
     */
    public $mitigation = null;

    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDetectedIssueSeverity
     */
    public $severity = null;

    /**
     * Indicates the status of the detected issue.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * FHIRDetectedIssue Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['implicated'])) {
                $this->setImplicated($data['implicated']);
            }
            if (isset($data['mitigation'])) {
                $this->setMitigation($data['mitigation']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDetectedIssue::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthor(FHIRReference $author = null)
    {
        if (null === $author) {
            return $this; 
        }
        $this->author = $author;
        return $this;
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Identifies the general type of issue identified.
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
     * Identifies the general type of issue identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The date or date-time when the detected issue was initially identified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date or date-time when the detected issue was initially identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A textual explanation of the detected issue.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDetail($detail)
    {
        if (null === $detail) {
            return $this; 
        }
        if (is_scalar($detail)) {
            $detail = new FHIRString($detail);
        }
        if (!($detail instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::setDetail - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($detail)
            ));
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * A textual explanation of the detected issue.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * Business identifier associated with the detected issue record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Business identifier associated with the detected issue record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setImplicated(FHIRReference $implicated = null)
    {
        if (null === $implicated) {
            return $this; 
        }
        $this->implicated = $implicated;
        return $this;
    }

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getImplicated()
    {
        return $this->implicated;
    }


    /**
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation
     * @return $this
     */
    public function setMitigation(FHIRDetectedIssueMitigation $mitigation = null)
    {
        if (null === $mitigation) {
            return $this; 
        }
        $this->mitigation = $mitigation;
        return $this;
    }

    /**
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }


    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * Indicates the patient whose record the detected issue is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setReference($reference)
    {
        if (null === $reference) {
            return $this; 
        }
        if (is_scalar($reference)) {
            $reference = new FHIRUri($reference);
        }
        if (!($reference instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::setReference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($reference)
            ));
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDetectedIssueSeverity
     * @return $this
     */
    public function setSeverity($severity)
    {
        if (null === $severity) {
            return $this; 
        }
        if (is_scalar($severity)) {
            $severity = new FHIRDetectedIssueSeverity($severity);
        }
        if (!($severity instanceof FHIRDetectedIssueSeverity)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::setSeverity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDetectedIssueSeverity or appropriate scalar value, %s seen.',
                gettype($severity)
            ));
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }


    /**
     * Indicates the status of the detected issue.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRObservationStatus($status);
        }
        if (!($status instanceof FHIRObservationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the status of the detected issue.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getImplicated())) {
            $a['implicated'] = $v;
        }
        if (null !== ($v = $this->getMitigation())) {
            $a['mitigation'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<DetectedIssue xmlns="http://hl7.org/fhir"></DetectedIssue>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}