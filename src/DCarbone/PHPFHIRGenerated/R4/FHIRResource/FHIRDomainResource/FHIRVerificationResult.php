<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:58+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRVerificationResult
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRVerificationResult extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT;

    const FIELD_ATTESTATION = 'attestation';
    const FIELD_FAILURE_ACTION = 'failureAction';
    const FIELD_FREQUENCY = 'frequency';
    const FIELD_LAST_PERFORMED = 'lastPerformed';
    const FIELD_LAST_PERFORMED_EXT = '_lastPerformed';
    const FIELD_NEED = 'need';
    const FIELD_NEXT_SCHEDULED = 'nextScheduled';
    const FIELD_NEXT_SCHEDULED_EXT = '_nextScheduled';
    const FIELD_PRIMARY_SOURCE = 'primarySource';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_TARGET = 'target';
    const FIELD_TARGET_LOCATION = 'targetLocation';
    const FIELD_TARGET_LOCATION_EXT = '_targetLocation';
    const FIELD_VALIDATION_PROCESS = 'validationProcess';
    const FIELD_VALIDATION_TYPE = 'validationType';
    const FIELD_VALIDATOR = 'validator';

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    private $attestation = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $failureAction = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $frequency = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $lastPerformed = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $need = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $nextScheduled = null;

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    private $primarySource = [];

    /**
     * The validation status of the target.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus
     */
    private $status = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the validation status was updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $statusDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $target = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    private $targetLocation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $validationProcess = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $validationType = null;

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    private $validator = [];

    /**
     * FHIRVerificationResult Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResult::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ATTESTATION])) {
            if ($data[self::FIELD_ATTESTATION] instanceof FHIRVerificationResultAttestation) {
                $this->setAttestation($data[self::FIELD_ATTESTATION]);
            } else {
                $this->setAttestation(new FHIRVerificationResultAttestation($data[self::FIELD_ATTESTATION]));
            }
        }
        if (isset($data[self::FIELD_FAILURE_ACTION])) {
            if ($data[self::FIELD_FAILURE_ACTION] instanceof FHIRCodeableConcept) {
                $this->setFailureAction($data[self::FIELD_FAILURE_ACTION]);
            } else {
                $this->setFailureAction(new FHIRCodeableConcept($data[self::FIELD_FAILURE_ACTION]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY])) {
            if ($data[self::FIELD_FREQUENCY] instanceof FHIRTiming) {
                $this->setFrequency($data[self::FIELD_FREQUENCY]);
            } else {
                $this->setFrequency(new FHIRTiming($data[self::FIELD_FREQUENCY]));
            }
        }
        if (isset($data[self::FIELD_LAST_PERFORMED])) {
            $ext = (isset($data[self::FIELD_LAST_PERFORMED_EXT]) && is_array($data[self::FIELD_LAST_PERFORMED_EXT]))
                ? $data[self::FIELD_LAST_PERFORMED_EXT]
                : null;
            if ($data[self::FIELD_LAST_PERFORMED] instanceof FHIRDateTime) {
                $this->setLastPerformed($data[self::FIELD_LAST_PERFORMED]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_PERFORMED])) {
                $this->setLastPerformed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_LAST_PERFORMED]] + $ext));
            } else {
                $this->setLastPerformed(new FHIRDateTime($data[self::FIELD_LAST_PERFORMED]));
            }
        }
        if (isset($data[self::FIELD_NEED])) {
            if ($data[self::FIELD_NEED] instanceof FHIRCodeableConcept) {
                $this->setNeed($data[self::FIELD_NEED]);
            } else {
                $this->setNeed(new FHIRCodeableConcept($data[self::FIELD_NEED]));
            }
        }
        if (isset($data[self::FIELD_NEXT_SCHEDULED])) {
            $ext = (isset($data[self::FIELD_NEXT_SCHEDULED_EXT]) && is_array($data[self::FIELD_NEXT_SCHEDULED_EXT]))
                ? $data[self::FIELD_NEXT_SCHEDULED_EXT]
                : null;
            if ($data[self::FIELD_NEXT_SCHEDULED] instanceof FHIRDate) {
                $this->setNextScheduled($data[self::FIELD_NEXT_SCHEDULED]);
            } elseif ($ext && is_scalar($data[self::FIELD_NEXT_SCHEDULED])) {
                $this->setNextScheduled(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_NEXT_SCHEDULED]] + $ext));
            } else {
                $this->setNextScheduled(new FHIRDate($data[self::FIELD_NEXT_SCHEDULED]));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_SOURCE])) {
            if (is_array($data[self::FIELD_PRIMARY_SOURCE])) {
                foreach($data[self::FIELD_PRIMARY_SOURCE] as $v) {
                    if ($v instanceof FHIRVerificationResultPrimarySource) {
                        $this->addPrimarySource($v);
                    } else {
                        $this->addPrimarySource(new FHIRVerificationResultPrimarySource($v));
                    }
                }
            } else if ($data[self::FIELD_PRIMARY_SOURCE] instanceof FHIRVerificationResultPrimarySource) {
                $this->addPrimarySource($data[self::FIELD_PRIMARY_SOURCE]);
            } else {
                $this->addPrimarySource(new FHIRVerificationResultPrimarySource($data[self::FIELD_PRIMARY_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE])) {
            $ext = (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT]))
                ? $data[self::FIELD_STATUS_DATE_EXT]
                : null;
            if ($data[self::FIELD_STATUS_DATE] instanceof FHIRDateTime) {
                $this->setStatusDate($data[self::FIELD_STATUS_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS_DATE])) {
                $this->setStatusDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_STATUS_DATE]] + $ext));
            } else {
                $this->setStatusDate(new FHIRDateTime($data[self::FIELD_STATUS_DATE]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRReference($data[self::FIELD_TARGET]));
            }
        }
        if (isset($data[self::FIELD_TARGET_LOCATION])) {
            $ext = (isset($data[self::FIELD_TARGET_LOCATION_EXT]) && is_array($data[self::FIELD_TARGET_LOCATION_EXT]))
                ? $data[self::FIELD_TARGET_LOCATION_EXT]
                : null;
            if (is_array($data[self::FIELD_TARGET_LOCATION])) {
                foreach($data[self::FIELD_TARGET_LOCATION] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addTargetLocation($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTargetLocation(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_LOCATION] instanceof FHIRString) {
                $this->addTargetLocation($data[self::FIELD_TARGET_LOCATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_TARGET_LOCATION])) {
                $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TARGET_LOCATION]] + $ext));
            } else {
                $this->addTargetLocation(new FHIRString($data[self::FIELD_TARGET_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_PROCESS])) {
            if (is_array($data[self::FIELD_VALIDATION_PROCESS])) {
                foreach($data[self::FIELD_VALIDATION_PROCESS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addValidationProcess($v);
                    } else {
                        $this->addValidationProcess(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_VALIDATION_PROCESS] instanceof FHIRCodeableConcept) {
                $this->addValidationProcess($data[self::FIELD_VALIDATION_PROCESS]);
            } else {
                $this->addValidationProcess(new FHIRCodeableConcept($data[self::FIELD_VALIDATION_PROCESS]));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_TYPE])) {
            if ($data[self::FIELD_VALIDATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setValidationType($data[self::FIELD_VALIDATION_TYPE]);
            } else {
                $this->setValidationType(new FHIRCodeableConcept($data[self::FIELD_VALIDATION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALIDATOR])) {
            if (is_array($data[self::FIELD_VALIDATOR])) {
                foreach($data[self::FIELD_VALIDATOR] as $v) {
                    if ($v instanceof FHIRVerificationResultValidator) {
                        $this->addValidator($v);
                    } else {
                        $this->addValidator(new FHIRVerificationResultValidator($v));
                    }
                }
            } else if ($data[self::FIELD_VALIDATOR] instanceof FHIRVerificationResultValidator) {
                $this->addValidator($data[self::FIELD_VALIDATOR]);
            } else {
                $this->addValidator(new FHIRVerificationResultValidator($data[self::FIELD_VALIDATOR]));
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
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $attestation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setAttestation(FHIRVerificationResultAttestation $attestation = null)
    {
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFailureAction()
    {
        return $this->failureAction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $failureAction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setFailureAction(FHIRCodeableConcept $failureAction = null)
    {
        $this->failureAction = $failureAction;
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
     * Frequency of revalidation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getFrequency()
    {
        return $this->frequency;
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
     * Frequency of revalidation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $frequency
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setFrequency(FHIRTiming $frequency = null)
    {
        $this->frequency = $frequency;
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
     * The date/time validation was last completed (including failed validations).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getLastPerformed()
    {
        return $this->lastPerformed;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $lastPerformed
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setLastPerformed($lastPerformed = null)
    {
        if (null === $lastPerformed) {
            $this->lastPerformed = null;
            return $this;
        }
        if ($lastPerformed instanceof FHIRDateTime) {
            $this->lastPerformed = $lastPerformed;
            return $this;
        }
        $this->lastPerformed = new FHIRDateTime($lastPerformed);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $need
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setNeed(FHIRCodeableConcept $need = null)
    {
        $this->need = $need;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getNextScheduled()
    {
        return $this->nextScheduled;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $nextScheduled
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setNextScheduled($nextScheduled = null)
    {
        if (null === $nextScheduled) {
            $this->nextScheduled = null;
            return $this;
        }
        if ($nextScheduled instanceof FHIRDate) {
            $this->nextScheduled = $nextScheduled;
            return $this;
        }
        $this->nextScheduled = new FHIRDate($nextScheduled);
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $primarySource
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function addPrimarySource(FHIRVerificationResultPrimarySource $primarySource = null)
    {
        $this->primarySource[] = $primarySource;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[] $primarySource
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setPrimarySource(array $primarySource = [])
    {
        $this->primarySource = [];
        if ([] === $primarySource) {
            return $this;
        }
        foreach($primarySource as $v) {
            if ($v instanceof FHIRVerificationResultPrimarySource) {
                $this->addPrimarySource($v);
            } else {
                $this->addPrimarySource(new FHIRVerificationResultPrimarySource($v));
            }
        }
        return $this;
    }

    /**
     * The validation status of the target.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The validation status of the target.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setStatus(FHIRStatus $status = null)
    {
        $this->status = $status;
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
     * When the validation status was updated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the validation status was updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $statusDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setStatusDate($statusDate = null)
    {
        if (null === $statusDate) {
            $this->statusDate = null;
            return $this;
        }
        if ($statusDate instanceof FHIRDateTime) {
            $this->statusDate = $statusDate;
            return $this;
        }
        $this->statusDate = new FHIRDateTime($statusDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $target
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function addTarget(FHIRReference $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $target
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setTarget(array $target = [])
    {
        $this->target = [];
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getTargetLocation()
    {
        return $this->targetLocation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $targetLocation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function addTargetLocation($targetLocation = null)
    {
        if (null === $targetLocation) {
            $this->targetLocation = null;
            return $this;
        }
        if ($targetLocation instanceof FHIRString) {
            $this->targetLocation = $targetLocation;
            return $this;
        }
        $this->targetLocation = new FHIRString($targetLocation);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $targetLocation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setTargetLocation(array $targetLocation = [])
    {
        $this->targetLocation = [];
        if ([] === $targetLocation) {
            return $this;
        }
        foreach($targetLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->addTargetLocation($v);
            } else {
                $this->addTargetLocation(new FHIRString($v));
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
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValidationProcess()
    {
        return $this->validationProcess;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $validationProcess
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function addValidationProcess(FHIRCodeableConcept $validationProcess = null)
    {
        $this->validationProcess[] = $validationProcess;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $validationProcess
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setValidationProcess(array $validationProcess = [])
    {
        $this->validationProcess = [];
        if ([] === $validationProcess) {
            return $this;
        }
        foreach($validationProcess as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addValidationProcess($v);
            } else {
                $this->addValidationProcess(new FHIRCodeableConcept($v));
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
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationType()
    {
        return $this->validationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $validationType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setValidationType(FHIRCodeableConcept $validationType = null)
    {
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator $validator
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function addValidator(FHIRVerificationResultValidator $validator = null)
    {
        $this->validator[] = $validator;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[] $validator
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     */
    public function setValidator(array $validator = [])
    {
        $this->validator = [];
        if ([] === $validator) {
            return $this;
        }
        foreach($validator as $v) {
            if ($v instanceof FHIRVerificationResultValidator) {
                $this->addValidator($v);
            } else {
                $this->addValidator(new FHIRVerificationResultValidator($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
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
                throw new \DomainException(sprintf('FHIRVerificationResult::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVerificationResult::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRVerificationResult);
        } elseif (!is_object($type) || !($type instanceof FHIRVerificationResult)) {
            throw new \RuntimeException(sprintf(
                'FHIRVerificationResult::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->attestation)) {
            $type->setAttestation(FHIRVerificationResultAttestation::xmlUnserialize($children->attestation));
        }
        if (isset($children->failureAction)) {
            $type->setFailureAction(FHIRCodeableConcept::xmlUnserialize($children->failureAction));
        }
        if (isset($children->frequency)) {
            $type->setFrequency(FHIRTiming::xmlUnserialize($children->frequency));
        }
        if (isset($attributes->lastPerformed)) {
            $type->setLastPerformed((string)$attributes->lastPerformed);
        }
        if (isset($children->lastPerformed)) {
            $type->setLastPerformed(FHIRDateTime::xmlUnserialize($children->lastPerformed));
        }
        if (isset($children->need)) {
            $type->setNeed(FHIRCodeableConcept::xmlUnserialize($children->need));
        }
        if (isset($attributes->nextScheduled)) {
            $type->setNextScheduled((string)$attributes->nextScheduled);
        }
        if (isset($children->nextScheduled)) {
            $type->setNextScheduled(FHIRDate::xmlUnserialize($children->nextScheduled));
        }
        if (isset($children->primarySource)) {
            foreach($children->primarySource as $child) {
                $type->addPrimarySource(FHIRVerificationResultPrimarySource::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRStatus::xmlUnserialize($children->status));
        }
        if (isset($attributes->statusDate)) {
            $type->setStatusDate((string)$attributes->statusDate);
        }
        if (isset($children->statusDate)) {
            $type->setStatusDate(FHIRDateTime::xmlUnserialize($children->statusDate));
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->targetLocation)) {
            $type->addTargetLocation((string)$attributes->targetLocation);
        }
        if (isset($children->targetLocation)) {
            foreach($children->targetLocation as $child) {
                $type->addTargetLocation(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->validationProcess)) {
            foreach($children->validationProcess as $child) {
                $type->addValidationProcess(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->validationType)) {
            $type->setValidationType(FHIRCodeableConcept::xmlUnserialize($children->validationType));
        }
        if (isset($children->validator)) {
            foreach($children->validator as $child) {
                $type->addValidator(FHIRVerificationResultValidator::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<VerificationResult xmlns="http://hl7.org/fhir"></VerificationResult>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAttestation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ATTESTATION));
        }

        if (null !== ($v = $this->getFailureAction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FAILURE_ACTION));
        }

        if (null !== ($v = $this->getFrequency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY));
        }
        if (null !== ($v = $this->getLastPerformed())) {
            $sxe->addAttribute(self::FIELD_LAST_PERFORMED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_PERFORMED));
            }
        }

        if (null !== ($v = $this->getNeed())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NEED));
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $sxe->addAttribute(self::FIELD_NEXT_SCHEDULED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NEXT_SCHEDULED));
            }
        }

        if ([] !== ($vs = $this->getPrimarySource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRIMARY_SOURCE));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getStatusDate())) {
            $sxe->addAttribute(self::FIELD_STATUS_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_DATE));
            }
        }

        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET));
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_TARGET_LOCATION, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_LOCATION));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_LOCATION));
                }
            }
        }

        if ([] !== ($vs = $this->getValidationProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_PROCESS));
            }
        }

        if (null !== ($v = $this->getValidationType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_TYPE));
        }

        if ([] !== ($vs = $this->getValidator())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATOR));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAttestation())) {
            $a[self::FIELD_ATTESTATION] = $v;
        }
        if (null !== ($v = $this->getFailureAction())) {
            $a[self::FIELD_FAILURE_ACTION] = $v;
        }
        if (null !== ($v = $this->getFrequency())) {
            $a[self::FIELD_FREQUENCY] = $v;
        }
        if (null !== ($v = $this->getLastPerformed())) {
            $a[self::FIELD_LAST_PERFORMED] = (string)$v;
            $a[self::FIELD_LAST_PERFORMED_EXT] = $v;
        }
        if (null !== ($v = $this->getNeed())) {
            $a[self::FIELD_NEED] = $v;
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $a[self::FIELD_NEXT_SCHEDULED] = (string)$v;
            $a[self::FIELD_NEXT_SCHEDULED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            $a[self::FIELD_PRIMARY_SOURCE] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a[self::FIELD_STATUS_DATE] = (string)$v;
            $a[self::FIELD_STATUS_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $vs;
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            $a[self::FIELD_TARGET_LOCATION] = [];
            $a[self::FIELD_TARGET_LOCATION_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_TARGET_LOCATION][] = (string)$v;
                $a[self::FIELD_TARGET_LOCATION_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            $a[self::FIELD_VALIDATION_PROCESS] = $vs;
        }
        if (null !== ($v = $this->getValidationType())) {
            $a[self::FIELD_VALIDATION_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getValidator())) {
            $a[self::FIELD_VALIDATOR] = $vs;
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