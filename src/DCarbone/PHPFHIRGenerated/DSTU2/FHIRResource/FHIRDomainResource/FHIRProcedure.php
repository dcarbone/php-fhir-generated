<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * An action that is or was performed on a patient. This can be a physical
 * intervention like an operation, or less invasive like counseling or
 * hypnotherapy.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcedure
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRProcedure extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCEDURE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_SUBJECT = 'subject';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_NOT_PERFORMED = 'notPerformed';
    const FIELD_NOT_PERFORMED_EXT = '_notPerformed';
    const FIELD_REASON_NOT_PERFORMED = 'reasonNotPerformed';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PERFORMED_DATE_TIME = 'performedDateTime';
    const FIELD_PERFORMED_DATE_TIME_EXT = '_performedDateTime';
    const FIELD_PERFORMED_PERIOD = 'performedPeriod';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_LOCATION = 'location';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_REPORT = 'report';
    const FIELD_COMPLICATION = 'complication';
    const FIELD_FOLLOW_UP = 'followUp';
    const FIELD_REQUEST = 'request';
    const FIELD_NOTES = 'notes';
    const FIELD_FOCAL_DEVICE = 'focalDevice';
    const FIELD_USED = 'used';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group on which the procedure was performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A code specifying the state of the procedure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally this will be in-progress
     * or completed state.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus
     */
    protected null|FHIRProcedureStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $category = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $notPerformed = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the procedure was not performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonNotPerformed = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $bodySite = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $reasonCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $reasonReference = null;
    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    protected null|array $performer = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $performedDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $performedPeriod = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve reasons for the procedure being
     * performed?
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $outcome = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc..
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $report = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $complication = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or could potentially be more
     * complex in which case the CarePlan resource can be used.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $followUp = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $request = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes about the procedure. E.g. the operative notes.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $notes = [];
    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    protected null|array $focalDevice = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $used = [];

    /**
     * Validation map for fields in type Procedure
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRProcedure Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRProcedureStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRProcedureStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRProcedureStatus([FHIRProcedureStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRProcedureStatus($ext));
            } else {
                $this->setStatus(new FHIRProcedureStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data)) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_NOT_PERFORMED, $data) || array_key_exists(self::FIELD_NOT_PERFORMED_EXT, $data)) {
            $value = $data[self::FIELD_NOT_PERFORMED] ?? null;
            $ext = (isset($data[self::FIELD_NOT_PERFORMED_EXT]) && is_array($data[self::FIELD_NOT_PERFORMED_EXT])) ? $data[self::FIELD_NOT_PERFORMED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNotPerformed($value);
                } else if (is_array($value)) {
                    $this->setNotPerformed(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNotPerformed(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotPerformed(new FHIRBoolean($ext));
            } else {
                $this->setNotPerformed(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_REASON_NOT_PERFORMED, $data)) {
            if (is_array($data[self::FIELD_REASON_NOT_PERFORMED])) {
                foreach($data[self::FIELD_REASON_NOT_PERFORMED] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonNotPerformed($v);
                    } else {
                        $this->addReasonNotPerformed(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_NOT_PERFORMED] instanceof FHIRCodeableConcept) {
                $this->addReasonNotPerformed($data[self::FIELD_REASON_NOT_PERFORMED]);
            } else {
                $this->addReasonNotPerformed(new FHIRCodeableConcept($data[self::FIELD_REASON_NOT_PERFORMED]));
            }
        }
        if (array_key_exists(self::FIELD_BODY_SITE, $data)) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (array_key_exists(self::FIELD_REASON_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_REASON_REFERENCE, $data)) {
            if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->setReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->setReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER, $data)) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRProcedurePerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRProcedurePerformer($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRProcedurePerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMED_DATE_TIME, $data) || array_key_exists(self::FIELD_PERFORMED_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_PERFORMED_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_PERFORMED_DATE_TIME_EXT]) && is_array($data[self::FIELD_PERFORMED_DATE_TIME_EXT])) ? $data[self::FIELD_PERFORMED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPerformedDateTime($value);
                } else if (is_array($value)) {
                    $this->setPerformedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPerformedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPerformedDateTime(new FHIRDateTime($ext));
            } else {
                $this->setPerformedDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMED_PERIOD, $data)) {
            if ($data[self::FIELD_PERFORMED_PERIOD] instanceof FHIRPeriod) {
                $this->setPerformedPeriod($data[self::FIELD_PERFORMED_PERIOD]);
            } else {
                $this->setPerformedPeriod(new FHIRPeriod($data[self::FIELD_PERFORMED_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME, $data)) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (array_key_exists(self::FIELD_REPORT, $data)) {
            if (is_array($data[self::FIELD_REPORT])) {
                foreach($data[self::FIELD_REPORT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReport($v);
                    } else {
                        $this->addReport(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REPORT] instanceof FHIRReference) {
                $this->addReport($data[self::FIELD_REPORT]);
            } else {
                $this->addReport(new FHIRReference($data[self::FIELD_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_COMPLICATION, $data)) {
            if (is_array($data[self::FIELD_COMPLICATION])) {
                foreach($data[self::FIELD_COMPLICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComplication($v);
                    } else {
                        $this->addComplication(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPLICATION] instanceof FHIRCodeableConcept) {
                $this->addComplication($data[self::FIELD_COMPLICATION]);
            } else {
                $this->addComplication(new FHIRCodeableConcept($data[self::FIELD_COMPLICATION]));
            }
        }
        if (array_key_exists(self::FIELD_FOLLOW_UP, $data)) {
            if (is_array($data[self::FIELD_FOLLOW_UP])) {
                foreach($data[self::FIELD_FOLLOW_UP] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFollowUp($v);
                    } else {
                        $this->addFollowUp(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_FOLLOW_UP] instanceof FHIRCodeableConcept) {
                $this->addFollowUp($data[self::FIELD_FOLLOW_UP]);
            } else {
                $this->addFollowUp(new FHIRCodeableConcept($data[self::FIELD_FOLLOW_UP]));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST, $data)) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_NOTES, $data)) {
            if (is_array($data[self::FIELD_NOTES])) {
                foreach($data[self::FIELD_NOTES] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNotes($v);
                    } else {
                        $this->addNotes(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTES] instanceof FHIRAnnotation) {
                $this->addNotes($data[self::FIELD_NOTES]);
            } else {
                $this->addNotes(new FHIRAnnotation($data[self::FIELD_NOTES]));
            }
        }
        if (array_key_exists(self::FIELD_FOCAL_DEVICE, $data)) {
            if (is_array($data[self::FIELD_FOCAL_DEVICE])) {
                foreach($data[self::FIELD_FOCAL_DEVICE] as $v) {
                    if ($v instanceof FHIRProcedureFocalDevice) {
                        $this->addFocalDevice($v);
                    } else {
                        $this->addFocalDevice(new FHIRProcedureFocalDevice($v));
                    }
                }
            } elseif ($data[self::FIELD_FOCAL_DEVICE] instanceof FHIRProcedureFocalDevice) {
                $this->addFocalDevice($data[self::FIELD_FOCAL_DEVICE]);
            } else {
                $this->addFocalDevice(new FHIRProcedureFocalDevice($data[self::FIELD_FOCAL_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_USED, $data)) {
            if (is_array($data[self::FIELD_USED])) {
                foreach($data[self::FIELD_USED] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addUsed($v);
                    } else {
                        $this->addUsed(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_USED] instanceof FHIRReference) {
                $this->addUsed($data[self::FIELD_USED]);
            } else {
                $this->addUsed(new FHIRReference($data[self::FIELD_USED]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group on which the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group on which the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A code specifying the state of the procedure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally this will be in-progress
     * or completed state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus
     */
    public function getStatus(): null|FHIRProcedureStatus
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the procedure.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally this will be in-progress
     * or completed state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus $status
     * @return static
     */
    public function setStatus(null|FHIRProcedureStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRProcedureStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->category, $category);
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the procedure was NOT performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getNotPerformed(): null|FHIRBoolean
    {
        return $this->notPerformed;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the procedure was NOT performed.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $notPerformed
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNotPerformed(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notPerformed = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $notPerformed && !($notPerformed instanceof FHIRBoolean)) {
            $notPerformed = new FHIRBoolean($notPerformed);
        }
        $this->_trackValueSet($this->notPerformed, $notPerformed);
        if (!isset($this->_xmlLocations[self::FIELD_NOT_PERFORMED])) {
            $this->_xmlLocations[self::FIELD_NOT_PERFORMED] = [];
        }
        $this->_xmlLocations[self::FIELD_NOT_PERFORMED][0] = $xmlLocation;
        $this->notPerformed = $notPerformed;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the procedure was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotPerformed(): null|array
    {
        return $this->reasonNotPerformed;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the procedure was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonNotPerformed
     * @return static
     */
    public function addReasonNotPerformed(null|FHIRCodeableConcept $reasonNotPerformed = null): self
    {
        if (null === $reasonNotPerformed) {
            $reasonNotPerformed = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonNotPerformed[] = $reasonNotPerformed;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the procedure was not performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$reasonNotPerformed
     * @return static
     */
    public function setReasonNotPerformed(FHIRCodeableConcept ...$reasonNotPerformed): self
    {
        if ([] !== $this->reasonNotPerformed) {
            $this->_trackValuesRemoved(count($this->reasonNotPerformed));
            $this->reasonNotPerformed = [];
        }
        if ([] === $reasonNotPerformed) {
            return $this;
        }
        foreach($reasonNotPerformed as $v) {
            $this->addReasonNotPerformed($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite(): null|array
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(null|FHIRCodeableConcept $bodySite = null): self
    {
        if (null === $bodySite) {
            $bodySite = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept ...$bodySite): self
    {
        if ([] !== $this->bodySite) {
            $this->_trackValuesRemoved(count($this->bodySite));
            $this->bodySite = [];
        }
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            $this->addBodySite($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(null|FHIRCodeableConcept $reasonCodeableConcept = null): self
    {
        if (null === $reasonCodeableConcept) {
            $reasonCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->reasonCodeableConcept, $reasonCodeableConcept);
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getReasonReference(): null|FHIRReference
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(null|FHIRReference $reasonReference = null): self
    {
        if (null === $reasonReference) {
            $reasonReference = new FHIRReference();
        }
        $this->_trackValueSet($this->reasonReference, $reasonReference);
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return static
     */
    public function addPerformer(null|FHIRProcedurePerformer $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRProcedurePerformer();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer ...$performer
     * @return static
     */
    public function setPerformer(FHIRProcedurePerformer ...$performer): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            $this->addPerformer($v);
        }
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
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime(): null|FHIRDateTime
    {
        return $this->performedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $performedDateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPerformedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $performedDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $performedDateTime && !($performedDateTime instanceof FHIRDateTime)) {
            $performedDateTime = new FHIRDateTime($performedDateTime);
        }
        $this->_trackValueSet($this->performedDateTime, $performedDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_PERFORMED_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_PERFORMED_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_PERFORMED_DATE_TIME][0] = $xmlLocation;
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPerformedPeriod(): null|FHIRPeriod
    {
        return $this->performedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date(time)/period over which the procedure was performed. Allows a period to
     * support complex procedures that span more than one date, and also allows for the
     * length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $performedPeriod
     * @return static
     */
    public function setPerformedPeriod(null|FHIRPeriod $performedPeriod = null): self
    {
        if (null === $performedPeriod) {
            $performedPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->performedPeriod, $performedPeriod);
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve reasons for the procedure being
     * performed?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve reasons for the procedure being
     * performed?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc..
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getReport(): null|array
    {
        return $this->report;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc..
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $report
     * @return static
     */
    public function addReport(null|FHIRReference $report = null): self
    {
        if (null === $report) {
            $report = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->report[] = $report;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc..
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference ...$report
     * @return static
     */
    public function setReport(FHIRReference ...$report): self
    {
        if ([] !== $this->report) {
            $this->_trackValuesRemoved(count($this->report));
            $this->report = [];
        }
        if ([] === $report) {
            return $this;
        }
        foreach($report as $v) {
            $this->addReport($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication(): null|array
    {
        return $this->complication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $complication
     * @return static
     */
    public function addComplication(null|FHIRCodeableConcept $complication = null): self
    {
        if (null === $complication) {
            $complication = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$complication
     * @return static
     */
    public function setComplication(FHIRCodeableConcept ...$complication): self
    {
        if ([] !== $this->complication) {
            $this->_trackValuesRemoved(count($this->complication));
            $this->complication = [];
        }
        if ([] === $complication) {
            return $this;
        }
        foreach($complication as $v) {
            $this->addComplication($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or could potentially be more
     * complex in which case the CarePlan resource can be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFollowUp(): null|array
    {
        return $this->followUp;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or could potentially be more
     * complex in which case the CarePlan resource can be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $followUp
     * @return static
     */
    public function addFollowUp(null|FHIRCodeableConcept $followUp = null): self
    {
        if (null === $followUp) {
            $followUp = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or could potentially be more
     * complex in which case the CarePlan resource can be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$followUp
     * @return static
     */
    public function setFollowUp(FHIRCodeableConcept ...$followUp): self
    {
        if ([] !== $this->followUp) {
            $this->_trackValuesRemoved(count($this->followUp));
            $this->followUp = [];
        }
        if ([] === $followUp) {
            return $this;
        }
        foreach($followUp as $v) {
            $this->addFollowUp($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequest(): null|FHIRReference
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $request
     * @return static
     */
    public function setRequest(null|FHIRReference $request = null): self
    {
        if (null === $request) {
            $request = new FHIRReference();
        }
        $this->_trackValueSet($this->request, $request);
        $this->request = $request;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes about the procedure. E.g. the operative notes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public function getNotes(): null|array
    {
        return $this->notes;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes about the procedure. E.g. the operative notes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $notes
     * @return static
     */
    public function addNotes(null|FHIRAnnotation $notes = null): self
    {
        if (null === $notes) {
            $notes = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes about the procedure. E.g. the operative notes.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation ...$notes
     * @return static
     */
    public function setNotes(FHIRAnnotation ...$notes): self
    {
        if ([] !== $this->notes) {
            $this->_trackValuesRemoved(count($this->notes));
            $this->notes = [];
        }
        if ([] === $notes) {
            return $this;
        }
        foreach($notes as $v) {
            $this->addNotes($v);
        }
        return $this;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public function getFocalDevice(): null|array
    {
        return $this->focalDevice;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice $focalDevice
     * @return static
     */
    public function addFocalDevice(null|FHIRProcedureFocalDevice $focalDevice = null): self
    {
        if (null === $focalDevice) {
            $focalDevice = new FHIRProcedureFocalDevice();
        }
        $this->_trackValueAdded();
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * An action that is or was performed on a patient. This can be a physical
     * intervention like an operation, or less invasive like counseling or
     * hypnotherapy.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice ...$focalDevice
     * @return static
     */
    public function setFocalDevice(FHIRProcedureFocalDevice ...$focalDevice): self
    {
        if ([] !== $this->focalDevice) {
            $this->_trackValuesRemoved(count($this->focalDevice));
            $this->focalDevice = [];
        }
        if ([] === $focalDevice) {
            return $this;
        }
        foreach($focalDevice as $v) {
            $this->addFocalDevice($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getUsed(): null|array
    {
        return $this->used;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $used
     * @return static
     */
    public function addUsed(null|FHIRReference $used = null): self
    {
        if (null === $used) {
            $used = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->used[] = $used;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference ...$used
     * @return static
     */
    public function setUsed(FHIRReference ...$used): self
    {
        if ([] !== $this->used) {
            $this->_trackValuesRemoved(count($this->used));
            $this->used = [];
        }
        if ([] === $used) {
            return $this;
        }
        foreach($used as $v) {
            $this->addUsed($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getNotPerformed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_PERFORMED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonNotPerformed())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_NOT_PERFORMED, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_SITE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPerformedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPLICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFollowUp())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FOLLOW_UP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNotes())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTES, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFocalDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FOCAL_DEVICE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUsed())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USED, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_CATEGORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_PERFORMED])) {
            $v = $this->getNotPerformed();
            foreach($validationRules[self::FIELD_NOT_PERFORMED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_NOT_PERFORMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_PERFORMED])) {
                        $errs[self::FIELD_NOT_PERFORMED] = [];
                    }
                    $errs[self::FIELD_NOT_PERFORMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_NOT_PERFORMED])) {
            $v = $this->getReasonNotPerformed();
            foreach($validationRules[self::FIELD_REASON_NOT_PERFORMED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REASON_NOT_PERFORMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_NOT_PERFORMED])) {
                        $errs[self::FIELD_REASON_NOT_PERFORMED] = [];
                    }
                    $errs[self::FIELD_REASON_NOT_PERFORMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_DATE_TIME])) {
            $v = $this->getPerformedDateTime();
            foreach($validationRules[self::FIELD_PERFORMED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PERFORMED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_DATE_TIME])) {
                        $errs[self::FIELD_PERFORMED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_PERFORMED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMED_PERIOD])) {
            $v = $this->getPerformedPeriod();
            foreach($validationRules[self::FIELD_PERFORMED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PERFORMED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMED_PERIOD])) {
                        $errs[self::FIELD_PERFORMED_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERFORMED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORT])) {
            $v = $this->getReport();
            foreach($validationRules[self::FIELD_REPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORT])) {
                        $errs[self::FIELD_REPORT] = [];
                    }
                    $errs[self::FIELD_REPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPLICATION])) {
            $v = $this->getComplication();
            foreach($validationRules[self::FIELD_COMPLICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_COMPLICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPLICATION])) {
                        $errs[self::FIELD_COMPLICATION] = [];
                    }
                    $errs[self::FIELD_COMPLICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOLLOW_UP])) {
            $v = $this->getFollowUp();
            foreach($validationRules[self::FIELD_FOLLOW_UP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOLLOW_UP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOLLOW_UP])) {
                        $errs[self::FIELD_FOLLOW_UP] = [];
                    }
                    $errs[self::FIELD_FOLLOW_UP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCAL_DEVICE])) {
            $v = $this->getFocalDevice();
            foreach($validationRules[self::FIELD_FOCAL_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOCAL_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCAL_DEVICE])) {
                        $errs[self::FIELD_FOCAL_DEVICE] = [];
                    }
                    $errs[self::FIELD_FOCAL_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED])) {
            $v = $this->getUsed();
            foreach($validationRules[self::FIELD_USED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_USED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED])) {
                        $errs[self::FIELD_USED] = [];
                    }
                    $errs[self::FIELD_USED][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedure $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedure
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRProcedure)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRProcedureStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOT_PERFORMED === $childName) {
                $type->setNotPerformed(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REASON_NOT_PERFORMED === $childName) {
                $type->addReasonNotPerformed(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BODY_SITE === $childName) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_CODEABLE_CONCEPT === $childName) {
                $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_REFERENCE === $childName) {
                $type->setReasonReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERFORMER === $childName) {
                $type->addPerformer(FHIRProcedurePerformer::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERFORMED_DATE_TIME === $childName) {
                $type->setPerformedDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERFORMED_PERIOD === $childName) {
                $type->setPerformedPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTCOME === $childName) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REPORT === $childName) {
                $type->addReport(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPLICATION === $childName) {
                $type->addComplication(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FOLLOW_UP === $childName) {
                $type->addFollowUp(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUEST === $childName) {
                $type->setRequest(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTES === $childName) {
                $type->addNotes(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FOCAL_DEVICE === $childName) {
                $type->addFocalDevice(FHIRProcedureFocalDevice::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_USED === $childName) {
                $type->addUsed(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NOT_PERFORMED])) {
            $pt = $type->getNotPerformed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NOT_PERFORMED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNotPerformed((string)$attributes[self::FIELD_NOT_PERFORMED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PERFORMED_DATE_TIME])) {
            $pt = $type->getPerformedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PERFORMED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPerformedDateTime((string)$attributes[self::FIELD_PERFORMED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Procedure', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_NOT_PERFORMED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNotPerformed())) {
            $xw->writeAttribute(self::FIELD_NOT_PERFORMED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PERFORMED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPerformedDateTime())) {
            $xw->writeAttribute(self::FIELD_PERFORMED_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCategory())) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NOT_PERFORMED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNotPerformed())) {
            $xw->startElement(self::FIELD_NOT_PERFORMED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReasonNotPerformed() as $v) {
            $xw->startElement(self::FIELD_REASON_NOT_PERFORMED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBodySite() as $v) {
            $xw->startElement(self::FIELD_BODY_SITE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $xw->startElement(self::FIELD_REASON_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReasonReference())) {
            $xw->startElement(self::FIELD_REASON_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPerformer() as $v) {
            $xw->startElement(self::FIELD_PERFORMER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PERFORMED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPerformedDateTime())) {
            $xw->startElement(self::FIELD_PERFORMED_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPerformedPeriod())) {
            $xw->startElement(self::FIELD_PERFORMED_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOutcome())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReport() as $v) {
            $xw->startElement(self::FIELD_REPORT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getComplication() as $v) {
            $xw->startElement(self::FIELD_COMPLICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFollowUp() as $v) {
            $xw->startElement(self::FIELD_FOLLOW_UP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequest())) {
            $xw->startElement(self::FIELD_REQUEST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNotes() as $v) {
            $xw->startElement(self::FIELD_NOTES);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFocalDevice() as $v) {
            $xw->startElement(self::FIELD_FOCAL_DEVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUsed() as $v) {
            $xw->startElement(self::FIELD_USED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRProcedureStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getNotPerformed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOT_PERFORMED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOT_PERFORMED_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReasonNotPerformed())) {
            $out->{self::FIELD_REASON_NOT_PERFORMED} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REASON_NOT_PERFORMED}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            $out->{self::FIELD_BODY_SITE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BODY_SITE}[] = $v;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $out->{self::FIELD_REASON_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PERFORMER}[] = $v;
            }
        }
        if (null !== ($v = $this->getPerformedDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PERFORMED_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PERFORMED_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPerformedPeriod())) {
            $out->{self::FIELD_PERFORMED_PERIOD} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
        }
        if ([] !== ($vs = $this->getReport())) {
            $out->{self::FIELD_REPORT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REPORT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            $out->{self::FIELD_COMPLICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COMPLICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFollowUp())) {
            $out->{self::FIELD_FOLLOW_UP} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_FOLLOW_UP}[] = $v;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if ([] !== ($vs = $this->getNotes())) {
            $out->{self::FIELD_NOTES} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTES}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getFocalDevice())) {
            $out->{self::FIELD_FOCAL_DEVICE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_FOCAL_DEVICE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getUsed())) {
            $out->{self::FIELD_USED} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_USED}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}