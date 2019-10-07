<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Indicates an actual or potential clinical issue with or between one or more
 * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
 * Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDetectedIssue
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDetectedIssue extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AUTHOR = 'author';
    const FIELD_CODE = 'code';
    const FIELD_DETAIL = 'detail';
    const FIELD_DETAIL_EXT = '_detail';
    const FIELD_EVIDENCE = 'evidence';
    const FIELD_IDENTIFIED_DATE_TIME = 'identifiedDateTime';
    const FIELD_IDENTIFIED_DATE_TIME_EXT = '_identifiedDateTime';
    const FIELD_IDENTIFIED_PERIOD = 'identifiedPeriod';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMPLICATED = 'implicated';
    const FIELD_MITIGATION = 'mitigation';
    const FIELD_PATIENT = 'patient';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_SEVERITY = 'severity';
    const FIELD_STATUS = 'status';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $author = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $detail = null;
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[]
     */
    private $evidence = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $identifiedDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $identifiedPeriod = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $implicated = [];
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    private $mitigation = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $reference = null;
    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity
     */
    private $severity = null;
    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus
     */
    private $status = null;

    /**
     * FHIRDetectedIssue Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDetectedIssue::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            $ext = (isset($data[self::FIELD_DETAIL_EXT]) && is_array($data[self::FIELD_DETAIL_EXT]))
                ? $data[self::FIELD_DETAIL_EXT]
                : null;
            if ($data[self::FIELD_DETAIL] instanceof FHIRString) {
                $this->setDetail($data[self::FIELD_DETAIL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DETAIL])) {
                $this->setDetail(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DETAIL]] + $ext));
            } else {
                $this->setDetail(new FHIRString($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_EVIDENCE])) {
            if (is_array($data[self::FIELD_EVIDENCE])) {
                foreach($data[self::FIELD_EVIDENCE] as $v) {
                    if ($v instanceof FHIRDetectedIssueEvidence) {
                        $this->addEvidence($v);
                    } else {
                        $this->addEvidence(new FHIRDetectedIssueEvidence($v));
                    }
                }
            } else if ($data[self::FIELD_EVIDENCE] instanceof FHIRDetectedIssueEvidence) {
                $this->addEvidence($data[self::FIELD_EVIDENCE]);
            } else {
                $this->addEvidence(new FHIRDetectedIssueEvidence($data[self::FIELD_EVIDENCE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_IDENTIFIED_DATE_TIME_EXT]) && is_array($data[self::FIELD_IDENTIFIED_DATE_TIME_EXT]))
                ? $data[self::FIELD_IDENTIFIED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setIdentifiedDateTime($data[self::FIELD_IDENTIFIED_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIED_DATE_TIME])) {
                $this->setIdentifiedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_IDENTIFIED_DATE_TIME]] + $ext));
            } else {
                $this->setIdentifiedDateTime(new FHIRDateTime($data[self::FIELD_IDENTIFIED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIED_PERIOD])) {
            if ($data[self::FIELD_IDENTIFIED_PERIOD] instanceof FHIRPeriod) {
                $this->setIdentifiedPeriod($data[self::FIELD_IDENTIFIED_PERIOD]);
            } else {
                $this->setIdentifiedPeriod(new FHIRPeriod($data[self::FIELD_IDENTIFIED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMPLICATED])) {
            if (is_array($data[self::FIELD_IMPLICATED])) {
                foreach($data[self::FIELD_IMPLICATED] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addImplicated($v);
                    } else {
                        $this->addImplicated(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_IMPLICATED] instanceof FHIRReference) {
                $this->addImplicated($data[self::FIELD_IMPLICATED]);
            } else {
                $this->addImplicated(new FHIRReference($data[self::FIELD_IMPLICATED]));
            }
        }
        if (isset($data[self::FIELD_MITIGATION])) {
            if (is_array($data[self::FIELD_MITIGATION])) {
                foreach($data[self::FIELD_MITIGATION] as $v) {
                    if ($v instanceof FHIRDetectedIssueMitigation) {
                        $this->addMitigation($v);
                    } else {
                        $this->addMitigation(new FHIRDetectedIssueMitigation($v));
                    }
                }
            } else if ($data[self::FIELD_MITIGATION] instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($data[self::FIELD_MITIGATION]);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($data[self::FIELD_MITIGATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT]))
                ? $data[self::FIELD_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE] instanceof FHIRUri) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE])) {
                $this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_REFERENCE]] + $ext));
            } else {
                $this->setReference(new FHIRUri($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            if ($data[self::FIELD_SEVERITY] instanceof FHIRDetectedIssueSeverity) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } else {
                $this->setSeverity(new FHIRDetectedIssueSeverity($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRObservationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRObservationStatus($data[self::FIELD_STATUS]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DetectedIssue{$xmlns}></DetectedIssue>";
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $author
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setAuthor(FHIRReference $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the general type of issue identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Identifies the general type of issue identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $detail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setDetail($detail = null)
    {
        if (null === $detail) {
            $this->detail = null;
            return $this;
        }
        if ($detail instanceof FHIRString) {
            $this->detail = $detail;
            return $this;
        }
        $this->detail = new FHIRString($detail);
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence $evidence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function addEvidence(FHIRDetectedIssueEvidence $evidence = null)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[] $evidence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setEvidence(array $evidence = [])
    {
        $this->evidence = [];
        if ([] === $evidence) {
            return $this;
        }
        foreach($evidence as $v) {
            if ($v instanceof FHIRDetectedIssueEvidence) {
                $this->addEvidence($v);
            } else {
                $this->addEvidence(new FHIRDetectedIssueEvidence($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getIdentifiedDateTime()
    {
        return $this->identifiedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $identifiedDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setIdentifiedDateTime($identifiedDateTime = null)
    {
        if (null === $identifiedDateTime) {
            $this->identifiedDateTime = null;
            return $this;
        }
        if ($identifiedDateTime instanceof FHIRDateTime) {
            $this->identifiedDateTime = $identifiedDateTime;
            return $this;
        }
        $this->identifiedDateTime = new FHIRDateTime($identifiedDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getIdentifiedPeriod()
    {
        return $this->identifiedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $identifiedPeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setIdentifiedPeriod(FHIRPeriod $identifiedPeriod = null)
    {
        $this->identifiedPeriod = $identifiedPeriod;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getImplicated()
    {
        return $this->implicated;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $implicated
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function addImplicated(FHIRReference $implicated = null)
    {
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $implicated
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setImplicated(array $implicated = [])
    {
        $this->implicated = [];
        if ([] === $implicated) {
            return $this;
        }
        foreach($implicated as $v) {
            if ($v instanceof FHIRReference) {
                $this->addImplicated($v);
            } else {
                $this->addImplicated(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation $mitigation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function addMitigation(FHIRDetectedIssueMitigation $mitigation = null)
    {
        $this->mitigation[] = $mitigation;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[] $mitigation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setMitigation(array $mitigation = [])
    {
        $this->mitigation = [];
        if ([] === $mitigation) {
            return $this;
        }
        foreach($mitigation as $v) {
            if ($v instanceof FHIRDetectedIssueMitigation) {
                $this->addMitigation($v);
            } else {
                $this->addMitigation(new FHIRDetectedIssueMitigation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $reference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setReference($reference = null)
    {
        if (null === $reference) {
            $this->reference = null;
            return $this;
        }
        if ($reference instanceof FHIRUri) {
            $this->reference = $reference;
            return $this;
        }
        $this->reference = new FHIRUri($reference);
        return $this;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Indicates the potential degree of impact of the identified issue on the patient.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setSeverity(FHIRDetectedIssueSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the status of the identified issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRObservationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     */
    public function setStatus(FHIRObservationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
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
                throw new \DomainException(sprintf('FHIRDetectedIssue::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDetectedIssue::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRDetectedIssue);
        } elseif (!is_object($type) || !($type instanceof FHIRDetectedIssue)) {
            throw new \RuntimeException(sprintf(
                'FHIRDetectedIssue::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            $type->setAuthor(FHIRReference::xmlUnserialize($children->author));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($attributes->detail)) {
            $type->setDetail((string)$attributes->detail);
        }
        if (isset($children->detail)) {
            $type->setDetail(FHIRString::xmlUnserialize($children->detail));
        }
        if (isset($children->evidence)) {
            foreach($children->evidence as $child) {
                $type->addEvidence(FHIRDetectedIssueEvidence::xmlUnserialize($child));
            }
        }
        if (isset($attributes->identifiedDateTime)) {
            $type->setIdentifiedDateTime((string)$attributes->identifiedDateTime);
        }
        if (isset($children->identifiedDateTime)) {
            $type->setIdentifiedDateTime(FHIRDateTime::xmlUnserialize($children->identifiedDateTime));
        }
        if (isset($children->identifiedPeriod)) {
            $type->setIdentifiedPeriod(FHIRPeriod::xmlUnserialize($children->identifiedPeriod));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->implicated)) {
            foreach($children->implicated as $child) {
                $type->addImplicated(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->mitigation)) {
            foreach($children->mitigation as $child) {
                $type->addMitigation(FHIRDetectedIssueMitigation::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($attributes->reference)) {
            $type->setReference((string)$attributes->reference);
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRUri::xmlUnserialize($children->reference));
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRDetectedIssueSeverity::xmlUnserialize($children->severity));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRObservationStatus::xmlUnserialize($children->status));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVIDENCE, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifiedDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIED_DATE_TIME, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIdentifiedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIED_PERIOD, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getImplicated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLICATED, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getMitigation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MITIGATION, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = (string)$v;
            $a[self::FIELD_DETAIL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEvidence())) {
            $a[self::FIELD_EVIDENCE] = $vs;
        }
        if (null !== ($v = $this->getIdentifiedDateTime())) {
            $a[self::FIELD_IDENTIFIED_DATE_TIME] = (string)$v;
            $a[self::FIELD_IDENTIFIED_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getIdentifiedPeriod())) {
            $a[self::FIELD_IDENTIFIED_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getImplicated())) {
            $a[self::FIELD_IMPLICATED] = $vs;
        }
        if ([] !== ($vs = $this->getMitigation())) {
            $a[self::FIELD_MITIGATION] = $vs;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = (string)$v;
            $a[self::FIELD_REFERENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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