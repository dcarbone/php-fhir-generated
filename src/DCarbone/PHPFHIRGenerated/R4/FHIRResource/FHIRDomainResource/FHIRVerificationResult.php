<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
 * If the element is present, it must have either a \@value, an \@id, or extensions
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
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_TARGET = 'target';
    const FIELD_TARGET_LOCATION = 'targetLocation';
    const FIELD_TARGET_LOCATION_EXT = '_targetLocation';
    const FIELD_VALIDATION_PROCESS = 'validationProcess';
    const FIELD_VALIDATION_TYPE = 'validationType';
    const FIELD_VALIDATOR = 'validator';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    protected $attestation = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $failureAction = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $frequency = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $lastPerformed = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $need = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $nextScheduled = null;

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    protected $primarySource = [];

    /**
     * The validation status of the target.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus
     */
    protected $status = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $statusDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $target = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $targetLocation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $validationProcess = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $validationType = null;

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    protected $validator = [];

    /**
     * Validation map for fields in type VerificationResult
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_LAST_PERFORMED]) || isset($data[self::FIELD_LAST_PERFORMED_EXT])) {
            if (isset($data[self::FIELD_LAST_PERFORMED])) {
                $value = $data[self::FIELD_LAST_PERFORMED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_PERFORMED_EXT]) && is_array($data[self::FIELD_LAST_PERFORMED_EXT])) {
                $ext = $data[self::FIELD_LAST_PERFORMED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastPerformed($value);
                } else if (is_array($value)) {
                    $this->setLastPerformed(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastPerformed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastPerformed(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_NEED])) {
            if ($data[self::FIELD_NEED] instanceof FHIRCodeableConcept) {
                $this->setNeed($data[self::FIELD_NEED]);
            } else {
                $this->setNeed(new FHIRCodeableConcept($data[self::FIELD_NEED]));
            }
        }
        if (isset($data[self::FIELD_NEXT_SCHEDULED]) || isset($data[self::FIELD_NEXT_SCHEDULED_EXT])) {
            if (isset($data[self::FIELD_NEXT_SCHEDULED])) {
                $value = $data[self::FIELD_NEXT_SCHEDULED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NEXT_SCHEDULED_EXT]) && is_array($data[self::FIELD_NEXT_SCHEDULED_EXT])) {
                $ext = $data[self::FIELD_NEXT_SCHEDULED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setNextScheduled($value);
                } else if (is_array($value)) {
                    $this->setNextScheduled(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setNextScheduled(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNextScheduled(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_SOURCE])) {
            if (is_array($data[self::FIELD_PRIMARY_SOURCE])) {
                foreach($data[self::FIELD_PRIMARY_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRStatus([FHIRStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE]) || isset($data[self::FIELD_STATUS_DATE_EXT])) {
            if (isset($data[self::FIELD_STATUS_DATE])) {
                $value = $data[self::FIELD_STATUS_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT])) {
                $ext = $data[self::FIELD_STATUS_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStatusDate($value);
                } else if (is_array($value)) {
                    $this->setStatusDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStatusDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatusDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_TARGET_LOCATION]) || isset($data[self::FIELD_TARGET_LOCATION_EXT])) {
            if (isset($data[self::FIELD_TARGET_LOCATION])) {
                $value = $data[self::FIELD_TARGET_LOCATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TARGET_LOCATION_EXT]) && is_array($data[self::FIELD_TARGET_LOCATION_EXT])) {
                $ext = $data[self::FIELD_TARGET_LOCATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addTargetLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addTargetLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addTargetLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addTargetLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addTargetLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addTargetLocation(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_VALIDATION_PROCESS])) {
            if (is_array($data[self::FIELD_VALIDATION_PROCESS])) {
                foreach($data[self::FIELD_VALIDATION_PROCESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        return "<VerificationResult{$xmlns}></VerificationResult>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $failureAction
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $frequency
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $lastPerformed
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $need
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $nextScheduled
     * @return static
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
     * @return static
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
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRStatus $status
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $statusDate
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $target
     * @return static
     */
    public function addTarget(FHIRReference $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $target
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $targetLocation
     * @return static
     */
    public function addTargetLocation($targetLocation = null)
    {
        if (null === $targetLocation) {
            $this->targetLocation = [];
            return $this;
        }
        if ($targetLocation instanceof FHIRString) {
            $this->targetLocation[] = $targetLocation;
            return $this;
        }
        $this->targetLocation[] = new FHIRString($targetLocation);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $targetLocation
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $validationProcess
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $validationProcess
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $validationType
     * @return static
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
     * @return static
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
     * @return static
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
        if (null !== ($v = $this->getAttestation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ATTESTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFailureAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAILURE_ACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrequency())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREQUENCY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastPerformed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_PERFORMED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNeed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NEED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNextScheduled())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NEXT_SCHEDULED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRIMARY_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALIDATION_PROCESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValidationType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATION_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValidator())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALIDATOR, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTESTATION])) {
            $v = $this->getAttestation();
            foreach($validationRules[self::FIELD_ATTESTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_ATTESTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTESTATION])) {
                        $errs[self::FIELD_ATTESTATION] = [];
                    }
                    $errs[self::FIELD_ATTESTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAILURE_ACTION])) {
            $v = $this->getFailureAction();
            foreach($validationRules[self::FIELD_FAILURE_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_FAILURE_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAILURE_ACTION])) {
                        $errs[self::FIELD_FAILURE_ACTION] = [];
                    }
                    $errs[self::FIELD_FAILURE_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PERFORMED])) {
            $v = $this->getLastPerformed();
            foreach($validationRules[self::FIELD_LAST_PERFORMED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_LAST_PERFORMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PERFORMED])) {
                        $errs[self::FIELD_LAST_PERFORMED] = [];
                    }
                    $errs[self::FIELD_LAST_PERFORMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEED])) {
            $v = $this->getNeed();
            foreach($validationRules[self::FIELD_NEED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_NEED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEED])) {
                        $errs[self::FIELD_NEED] = [];
                    }
                    $errs[self::FIELD_NEED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEXT_SCHEDULED])) {
            $v = $this->getNextScheduled();
            foreach($validationRules[self::FIELD_NEXT_SCHEDULED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_NEXT_SCHEDULED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEXT_SCHEDULED])) {
                        $errs[self::FIELD_NEXT_SCHEDULED] = [];
                    }
                    $errs[self::FIELD_NEXT_SCHEDULED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_LOCATION])) {
            $v = $this->getTargetLocation();
            foreach($validationRules[self::FIELD_TARGET_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_TARGET_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_LOCATION])) {
                        $errs[self::FIELD_TARGET_LOCATION] = [];
                    }
                    $errs[self::FIELD_TARGET_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_PROCESS])) {
            $v = $this->getValidationProcess();
            foreach($validationRules[self::FIELD_VALIDATION_PROCESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATION_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_PROCESS])) {
                        $errs[self::FIELD_VALIDATION_PROCESS] = [];
                    }
                    $errs[self::FIELD_VALIDATION_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_TYPE])) {
            $v = $this->getValidationType();
            foreach($validationRules[self::FIELD_VALIDATION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_TYPE])) {
                        $errs[self::FIELD_VALIDATION_TYPE] = [];
                    }
                    $errs[self::FIELD_VALIDATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATOR])) {
            $v = $this->getValidator();
            foreach($validationRules[self::FIELD_VALIDATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT, self::FIELD_VALIDATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATOR])) {
                        $errs[self::FIELD_VALIDATOR] = [];
                    }
                    $errs[self::FIELD_VALIDATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult
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
                throw new \DomainException(sprintf('FHIRVerificationResult::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVerificationResult::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRVerificationResult;
        } elseif (!is_object($type) || !($type instanceof FHIRVerificationResult)) {
            throw new \RuntimeException(sprintf(
                'FHIRVerificationResult::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
        if (isset($children->lastPerformed)) {
            $type->setLastPerformed(FHIRDateTime::xmlUnserialize($children->lastPerformed));
        }
        if (isset($attributes->lastPerformed)) {
            $pt = $type->getLastPerformed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastPerformed);
            } else {
                $type->setLastPerformed((string)$attributes->lastPerformed);
            }
        }
        if (isset($children->need)) {
            $type->setNeed(FHIRCodeableConcept::xmlUnserialize($children->need));
        }
        if (isset($children->nextScheduled)) {
            $type->setNextScheduled(FHIRDate::xmlUnserialize($children->nextScheduled));
        }
        if (isset($attributes->nextScheduled)) {
            $pt = $type->getNextScheduled();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->nextScheduled);
            } else {
                $type->setNextScheduled((string)$attributes->nextScheduled);
            }
        }
        if (isset($children->primarySource)) {
            foreach($children->primarySource as $child) {
                $type->addPrimarySource(FHIRVerificationResultPrimarySource::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusDate)) {
            $type->setStatusDate(FHIRDateTime::xmlUnserialize($children->statusDate));
        }
        if (isset($attributes->statusDate)) {
            $pt = $type->getStatusDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->statusDate);
            } else {
                $type->setStatusDate((string)$attributes->statusDate);
            }
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRReference::xmlUnserialize($child));
            }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAttestation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ATTESTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFailureAction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FAILURE_ACTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrequency())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLastPerformed())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_PERFORMED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNeed())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NEED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NEXT_SCHEDULED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRIMARY_SOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_PROCESS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getValidationType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getValidator())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATOR, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_LAST_PERFORMED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_LAST_PERFORMED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNeed())) {
            $a[self::FIELD_NEED] = $v;
        }
        if (null !== ($v = $this->getNextScheduled())) {
            $a[self::FIELD_NEXT_SCHEDULED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_NEXT_SCHEDULED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPrimarySource())) {
            $a[self::FIELD_PRIMARY_SOURCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRIMARY_SOURCE][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a[self::FIELD_STATUS_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_STATUS_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTargetLocation())) {
            $a[self::FIELD_TARGET_LOCATION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET_LOCATION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_TARGET_LOCATION_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getValidationProcess())) {
            $a[self::FIELD_VALIDATION_PROCESS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALIDATION_PROCESS][] = $v;
            }
        }
        if (null !== ($v = $this->getValidationType())) {
            $a[self::FIELD_VALIDATION_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getValidator())) {
            $a[self::FIELD_VALIDATOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALIDATOR][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}