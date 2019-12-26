<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractAction
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION;
    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_LINK_ID = 'contextLinkId';
    const FIELD_CONTEXT_LINK_ID_EXT = '_contextLinkId';
    const FIELD_DO_NOT_PERFORM = 'doNotPerform';
    const FIELD_DO_NOT_PERFORM_EXT = '_doNotPerform';
    const FIELD_INTENT = 'intent';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_NOTE = 'note';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PERFORMER_LINK_ID = 'performerLinkId';
    const FIELD_PERFORMER_LINK_ID_EXT = '_performerLinkId';
    const FIELD_PERFORMER_ROLE = 'performerRole';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_EXT = '_reason';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_LINK_ID = 'reasonLinkId';
    const FIELD_REASON_LINK_ID_EXT = '_reasonLinkId';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_REQUESTER = 'requester';
    const FIELD_REQUESTER_LINK_ID = 'requesterLinkId';
    const FIELD_REQUESTER_LINK_ID_EXT = '_requesterLinkId';
    const FIELD_SECURITY_LABEL_NUMBER = 'securityLabelNumber';
    const FIELD_SECURITY_LABEL_NUMBER_EXT = '_securityLabelNumber';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter or Episode with primary association to specified term activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $contextLinkId = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the term prohibits the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $doNotPerform = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $intent = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to this action in the
     * referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $linkId = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the term action made by the requester, performer, subject or
     * other participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $occurrenceDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $occurrencePeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $occurrenceTiming = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $performerLinkId = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of role or competency of an individual desired or required to perform
     * or not perform the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $performerRole = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual that is desired or required to perform or not perform the
     * action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $performerType = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $reason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rationale for the action to be performed or not performed. Describes why the
     * action is permitted or prohibited.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $reasonLinkId = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies permitting or not
     * permitting this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $requester = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $requesterLinkId = [];

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    protected $securityLabelNumber = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Current state of the term action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $status = null;

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Entity of the action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject[]
     */
    protected $subject = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Activity or service obligation to be done or not done, performed or not
     * performed, effectuated or not by this Contract term.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type Contract.Action
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRContractAction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT_LINK_ID]) || isset($data[self::FIELD_CONTEXT_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_CONTEXT_LINK_ID])) {
                $value = $data[self::FIELD_CONTEXT_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTEXT_LINK_ID_EXT]) && is_array($data[self::FIELD_CONTEXT_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_CONTEXT_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addContextLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addContextLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addContextLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addContextLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addContextLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addContextLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addContextLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_DO_NOT_PERFORM]) || isset($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
            if (isset($data[self::FIELD_DO_NOT_PERFORM])) {
                $value = $data[self::FIELD_DO_NOT_PERFORM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DO_NOT_PERFORM_EXT]) && is_array($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
                $ext = $data[self::FIELD_DO_NOT_PERFORM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDoNotPerform($value);
                } else if (is_array($value)) {
                    $this->setDoNotPerform(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDoNotPerform(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoNotPerform(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INTENT])) {
            if ($data[self::FIELD_INTENT] instanceof FHIRCodeableConcept) {
                $this->setIntent($data[self::FIELD_INTENT]);
            } else {
                $this->setIntent(new FHIRCodeableConcept($data[self::FIELD_INTENT]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_LINK_ID])) {
                $value = $data[self::FIELD_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
                $value = $data[self::FIELD_OCCURRENCE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_PERIOD])) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_TIMING])) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_LINK_ID]) || isset($data[self::FIELD_PERFORMER_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_PERFORMER_LINK_ID])) {
                $value = $data[self::FIELD_PERFORMER_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PERFORMER_LINK_ID_EXT]) && is_array($data[self::FIELD_PERFORMER_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_PERFORMER_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addPerformerLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addPerformerLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPerformerLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addPerformerLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPerformerLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addPerformerLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPerformerLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PERFORMER_ROLE])) {
            if ($data[self::FIELD_PERFORMER_ROLE] instanceof FHIRCodeableConcept) {
                $this->setPerformerRole($data[self::FIELD_PERFORMER_ROLE]);
            } else {
                $this->setPerformerRole(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_ROLE]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_TYPE])) {
            if (is_array($data[self::FIELD_PERFORMER_TYPE])) {
                foreach($data[self::FIELD_PERFORMER_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPerformerType($v);
                    } else {
                        $this->addPerformerType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->addPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->addPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($data[self::FIELD_REASON]) || isset($data[self::FIELD_REASON_EXT])) {
            if (isset($data[self::FIELD_REASON])) {
                $value = $data[self::FIELD_REASON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REASON_EXT]) && is_array($data[self::FIELD_REASON_EXT])) {
                $ext = $data[self::FIELD_REASON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addReason($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addReason($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReason(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addReason(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReason(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addReason(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReason(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_LINK_ID]) || isset($data[self::FIELD_REASON_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_REASON_LINK_ID])) {
                $value = $data[self::FIELD_REASON_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REASON_LINK_ID_EXT]) && is_array($data[self::FIELD_REASON_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_REASON_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addReasonLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addReasonLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReasonLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addReasonLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReasonLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addReasonLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReasonLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if (is_array($data[self::FIELD_REQUESTER])) {
                foreach($data[self::FIELD_REQUESTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRequester($v);
                    } else {
                        $this->addRequester(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REQUESTER] instanceof FHIRReference) {
                $this->addRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->addRequester(new FHIRReference($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER_LINK_ID]) || isset($data[self::FIELD_REQUESTER_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_REQUESTER_LINK_ID])) {
                $value = $data[self::FIELD_REQUESTER_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUESTER_LINK_ID_EXT]) && is_array($data[self::FIELD_REQUESTER_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_REQUESTER_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addRequesterLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addRequesterLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addRequesterLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addRequesterLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addRequesterLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addRequesterLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addRequesterLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER]) || isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER])) {
                $value = $data[self::FIELD_SECURITY_LABEL_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT]) && is_array($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
                $ext = $data[self::FIELD_SECURITY_LABEL_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->addSecurityLabelNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUnsignedInt) {
                            $this->addSecurityLabelNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($v, $iext)));
                            } else {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractSubject) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRContractSubject($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT] instanceof FHIRContractSubject) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRContractSubject($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        return "<ContractAction{$xmlns}></ContractAction>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter or Episode with primary association to specified term activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter or Episode with primary association to specified term activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getContextLinkId()
    {
        return $this->contextLinkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $contextLinkId
     * @return static
     */
    public function addContextLinkId($contextLinkId = null)
    {
        if (null === $contextLinkId) {
            $this->contextLinkId = [];
            return $this;
        }
        if ($contextLinkId instanceof FHIRString) {
            $this->contextLinkId[] = $contextLinkId;
            return $this;
        }
        $this->contextLinkId[] = new FHIRString($contextLinkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $contextLinkId
     * @return static
     */
    public function setContextLinkId(array $contextLinkId = [])
    {
        $this->contextLinkId = [];
        if ([] === $contextLinkId) {
            return $this;
        }
        foreach($contextLinkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addContextLinkId($v);
            } else {
                $this->addContextLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the term prohibits the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the term prohibits the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $doNotPerform
     * @return static
     */
    public function setDoNotPerform($doNotPerform = null)
    {
        if (null === $doNotPerform) {
            $this->doNotPerform = null;
            return $this;
        }
        if ($doNotPerform instanceof FHIRBoolean) {
            $this->doNotPerform = $doNotPerform;
            return $this;
        }
        $this->doNotPerform = new FHIRBoolean($doNotPerform);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $intent
     * @return static
     */
    public function setIntent(FHIRCodeableConcept $intent = null)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to this action in the
     * referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to this action in the
     * referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function addLinkId($linkId = null)
    {
        if (null === $linkId) {
            $this->linkId = [];
            return $this;
        }
        if ($linkId instanceof FHIRString) {
            $this->linkId[] = $linkId;
            return $this;
        }
        $this->linkId[] = new FHIRString($linkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to this action in the
     * referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $linkId
     * @return static
     */
    public function setLinkId(array $linkId = [])
    {
        $this->linkId = [];
        if ([] === $linkId) {
            return $this;
        }
        foreach($linkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addLinkId($v);
            } else {
                $this->addLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the term action made by the requester, performer, subject or
     * other participants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the term action made by the requester, performer, subject or
     * other participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the term action made by the requester, performer, subject or
     * other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
     */
    public function setOccurrenceDateTime($occurrenceDateTime = null)
    {
        if (null === $occurrenceDateTime) {
            $this->occurrenceDateTime = null;
            return $this;
        }
        if ($occurrenceDateTime instanceof FHIRDateTime) {
            $this->occurrenceDateTime = $occurrenceDateTime;
            return $this;
        }
        $this->occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
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
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
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
     * When action happens. (choose any one of occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * Indicates who or what is being asked to perform (or not perform) the ction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getPerformerLinkId()
    {
        return $this->performerLinkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $performerLinkId
     * @return static
     */
    public function addPerformerLinkId($performerLinkId = null)
    {
        if (null === $performerLinkId) {
            $this->performerLinkId = [];
            return $this;
        }
        if ($performerLinkId instanceof FHIRString) {
            $this->performerLinkId[] = $performerLinkId;
            return $this;
        }
        $this->performerLinkId[] = new FHIRString($performerLinkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $performerLinkId
     * @return static
     */
    public function setPerformerLinkId(array $performerLinkId = [])
    {
        $this->performerLinkId = [];
        if ([] === $performerLinkId) {
            return $this;
        }
        foreach($performerLinkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addPerformerLinkId($v);
            } else {
                $this->addPerformerLinkId(new FHIRString($v));
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
     * The type of role or competency of an individual desired or required to perform
     * or not perform the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerRole()
    {
        return $this->performerRole;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of role or competency of an individual desired or required to perform
     * or not perform the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $performerRole
     * @return static
     */
    public function setPerformerRole(FHIRCodeableConcept $performerRole = null)
    {
        $this->performerRole = $performerRole;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual that is desired or required to perform or not perform the
     * action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual that is desired or required to perform or not perform the
     * action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function addPerformerType(FHIRCodeableConcept $performerType = null)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual that is desired or required to perform or not perform the
     * action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $performerType
     * @return static
     */
    public function setPerformerType(array $performerType = [])
    {
        $this->performerType = [];
        if ([] === $performerType) {
            return $this;
        }
        foreach($performerType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPerformerType($v);
            } else {
                $this->addPerformerType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $reason
     * @return static
     */
    public function addReason($reason = null)
    {
        if (null === $reason) {
            $this->reason = [];
            return $this;
        }
        if ($reason instanceof FHIRString) {
            $this->reason[] = $reason;
            return $this;
        }
        $this->reason[] = new FHIRString($reason);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes why the action is to be performed or not performed in textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $reason
     * @return static
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRString) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRString($v));
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
     * Rationale for the action to be performed or not performed. Describes why the
     * action is permitted or prohibited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rationale for the action to be performed or not performed. Describes why the
     * action is permitted or prohibited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rationale for the action to be performed or not performed. Describes why the
     * action is permitted or prohibited.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getReasonLinkId()
    {
        return $this->reasonLinkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $reasonLinkId
     * @return static
     */
    public function addReasonLinkId($reasonLinkId = null)
    {
        if (null === $reasonLinkId) {
            $this->reasonLinkId = [];
            return $this;
        }
        if ($reasonLinkId instanceof FHIRString) {
            $this->reasonLinkId[] = $reasonLinkId;
            return $this;
        }
        $this->reasonLinkId[] = new FHIRString($reasonLinkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the reason type or
     * reference of this action in the referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $reasonLinkId
     * @return static
     */
    public function setReasonLinkId(array $reasonLinkId = [])
    {
        $this->reasonLinkId = [];
        if ([] === $reasonLinkId) {
            return $this;
        }
        foreach($reasonLinkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addReasonLinkId($v);
            } else {
                $this->addReasonLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies permitting or not
     * permitting this action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies permitting or not
     * permitting this action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies permitting or not
     * permitting this action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $requester
     * @return static
     */
    public function addRequester(FHIRReference $requester = null)
    {
        $this->requester[] = $requester;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what initiated the action and has responsibility for its activation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $requester
     * @return static
     */
    public function setRequester(array $requester = [])
    {
        $this->requester = [];
        if ([] === $requester) {
            return $this;
        }
        foreach($requester as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequester($v);
            } else {
                $this->addRequester(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getRequesterLinkId()
    {
        return $this->requesterLinkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $requesterLinkId
     * @return static
     */
    public function addRequesterLinkId($requesterLinkId = null)
    {
        if (null === $requesterLinkId) {
            $this->requesterLinkId = [];
            return $this;
        }
        if ($requesterLinkId instanceof FHIRString) {
            $this->requesterLinkId[] = $requesterLinkId;
            return $this;
        }
        $this->requesterLinkId[] = new FHIRString($requesterLinkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text related to the requester of
     * this action in the referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $requesterLinkId
     * @return static
     */
    public function setRequesterLinkId(array $requesterLinkId = [])
    {
        $this->requesterLinkId = [];
        if ([] === $requesterLinkId) {
            return $this;
        }
        foreach($requesterLinkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addRequesterLinkId($v);
            } else {
                $this->addRequesterLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $securityLabelNumber
     * @return static
     */
    public function addSecurityLabelNumber($securityLabelNumber = null)
    {
        if (null === $securityLabelNumber) {
            $this->securityLabelNumber = [];
            return $this;
        }
        if ($securityLabelNumber instanceof FHIRUnsignedInt) {
            $this->securityLabelNumber[] = $securityLabelNumber;
            return $this;
        }
        $this->securityLabelNumber[] = new FHIRUnsignedInt($securityLabelNumber);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[] $securityLabelNumber
     * @return static
     */
    public function setSecurityLabelNumber(array $securityLabelNumber = [])
    {
        $this->securityLabelNumber = [];
        if ([] === $securityLabelNumber) {
            return $this;
        }
        foreach($securityLabelNumber as $v) {
            if ($v instanceof FHIRUnsignedInt) {
                $this->addSecurityLabelNumber($v);
            } else {
                $this->addSecurityLabelNumber(new FHIRUnsignedInt($v));
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
     * Current state of the term action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Current state of the term action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Entity of the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Entity of the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject $subject
     * @return static
     */
    public function addSubject(FHIRContractSubject $subject = null)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Entity of the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject[] $subject
     * @return static
     */
    public function setSubject(array $subject = [])
    {
        $this->subject = [];
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            if ($v instanceof FHIRContractSubject) {
                $this->addSubject($v);
            } else {
                $this->addSubject(new FHIRContractSubject($v));
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
     * Activity or service obligation to be done or not done, performed or not
     * performed, effectuated or not by this Contract term.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Activity or service obligation to be done or not done, performed or not
     * performed, effectuated or not by this Contract term.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContextLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTEXT_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DO_NOT_PERFORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformerLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPerformerRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER_ROLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRequester())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUESTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRequesterLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUESTER_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT_LINK_ID])) {
            $v = $this->getContextLinkId();
            foreach($validationRules[self::FIELD_CONTEXT_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_CONTEXT_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT_LINK_ID])) {
                        $errs[self::FIELD_CONTEXT_LINK_ID] = [];
                    }
                    $errs[self::FIELD_CONTEXT_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DO_NOT_PERFORM])) {
            $v = $this->getDoNotPerform();
            foreach($validationRules[self::FIELD_DO_NOT_PERFORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_DO_NOT_PERFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DO_NOT_PERFORM])) {
                        $errs[self::FIELD_DO_NOT_PERFORM] = [];
                    }
                    $errs[self::FIELD_DO_NOT_PERFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_PERIOD])) {
            $v = $this->getOccurrencePeriod();
            foreach($validationRules[self::FIELD_OCCURRENCE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_TIMING])) {
            $v = $this->getOccurrenceTiming();
            foreach($validationRules[self::FIELD_OCCURRENCE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_LINK_ID])) {
            $v = $this->getPerformerLinkId();
            foreach($validationRules[self::FIELD_PERFORMER_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_PERFORMER_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_LINK_ID])) {
                        $errs[self::FIELD_PERFORMER_LINK_ID] = [];
                    }
                    $errs[self::FIELD_PERFORMER_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_ROLE])) {
            $v = $this->getPerformerRole();
            foreach($validationRules[self::FIELD_PERFORMER_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_PERFORMER_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_ROLE])) {
                        $errs[self::FIELD_PERFORMER_ROLE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_LINK_ID])) {
            $v = $this->getReasonLinkId();
            foreach($validationRules[self::FIELD_REASON_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REASON_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_LINK_ID])) {
                        $errs[self::FIELD_REASON_LINK_ID] = [];
                    }
                    $errs[self::FIELD_REASON_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER_LINK_ID])) {
            $v = $this->getRequesterLinkId();
            foreach($validationRules[self::FIELD_REQUESTER_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_REQUESTER_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER_LINK_ID])) {
                        $errs[self::FIELD_REQUESTER_LINK_ID] = [];
                    }
                    $errs[self::FIELD_REQUESTER_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL_NUMBER])) {
            $v = $this->getSecurityLabelNumber();
            foreach($validationRules[self::FIELD_SECURITY_LABEL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_SECURITY_LABEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL_NUMBER])) {
                        $errs[self::FIELD_SECURITY_LABEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction
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
                throw new \DomainException(sprintf('FHIRContractAction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractAction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractAction;
        } elseif (!is_object($type) || !($type instanceof FHIRContractAction)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractAction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction or null, %s seen.',
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
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->contextLinkId)) {
            foreach($children->contextLinkId as $child) {
                $type->addContextLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->doNotPerform)) {
            $type->setDoNotPerform(FHIRBoolean::xmlUnserialize($children->doNotPerform));
        }
        if (isset($attributes->doNotPerform)) {
            $pt = $type->getDoNotPerform();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doNotPerform);
            } else {
                $type->setDoNotPerform((string)$attributes->doNotPerform);
            }
        }
        if (isset($children->intent)) {
            $type->setIntent(FHIRCodeableConcept::xmlUnserialize($children->intent));
        }
        if (isset($children->linkId)) {
            foreach($children->linkId as $child) {
                $type->addLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->occurrenceDateTime)) {
            $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($children->occurrenceDateTime));
        }
        if (isset($attributes->occurrenceDateTime)) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->occurrenceDateTime);
            } else {
                $type->setOccurrenceDateTime((string)$attributes->occurrenceDateTime);
            }
        }
        if (isset($children->occurrencePeriod)) {
            $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($children->occurrencePeriod));
        }
        if (isset($children->occurrenceTiming)) {
            $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($children->occurrenceTiming));
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->performerLinkId)) {
            foreach($children->performerLinkId as $child) {
                $type->addPerformerLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->performerRole)) {
            $type->setPerformerRole(FHIRCodeableConcept::xmlUnserialize($children->performerRole));
        }
        if (isset($children->performerType)) {
            foreach($children->performerType as $child) {
                $type->addPerformerType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonLinkId)) {
            foreach($children->reasonLinkId as $child) {
                $type->addReasonLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->requester)) {
            foreach($children->requester as $child) {
                $type->addRequester(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->requesterLinkId)) {
            foreach($children->requesterLinkId as $child) {
                $type->addRequesterLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->securityLabelNumber)) {
            foreach($children->securityLabelNumber as $child) {
                $type->addSecurityLabelNumber(FHIRUnsignedInt::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            foreach($children->subject as $child) {
                $type->addSubject(FHIRContractSubject::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContextLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DO_NOT_PERFORM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIntent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPerformerLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPerformerRole())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_ROLE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRequester())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRequesterLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL_NUMBER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if ([] !== ($vs = $this->getContextLinkId())) {
            $a[self::FIELD_CONTEXT_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTEXT_LINK_ID][] = $v->getValue();
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
                $a[self::FIELD_CONTEXT_LINK_ID_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a[self::FIELD_DO_NOT_PERFORM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DO_NOT_PERFORM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $a[self::FIELD_INTENT] = $v;
        }
        if ([] !== ($vs = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK_ID][] = $v->getValue();
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
                $a[self::FIELD_LINK_ID_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a[self::FIELD_OCCURRENCE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a[self::FIELD_OCCURRENCE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a[self::FIELD_OCCURRENCE_TIMING] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getPerformerLinkId())) {
            $a[self::FIELD_PERFORMER_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER_LINK_ID][] = $v->getValue();
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
                $a[self::FIELD_PERFORMER_LINK_ID_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getPerformerRole())) {
            $a[self::FIELD_PERFORMER_ROLE] = $v;
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            $a[self::FIELD_PERFORMER_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER_TYPE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON][] = $v->getValue();
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
                $a[self::FIELD_REASON_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonLinkId())) {
            $a[self::FIELD_REASON_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_LINK_ID][] = $v->getValue();
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
                $a[self::FIELD_REASON_LINK_ID_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REQUESTER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequesterLinkId())) {
            $a[self::FIELD_REQUESTER_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REQUESTER_LINK_ID][] = $v->getValue();
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
                $a[self::FIELD_REQUESTER_LINK_ID_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            $a[self::FIELD_SECURITY_LABEL_NUMBER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SECURITY_LABEL_NUMBER][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUnsignedInt::FIELD_VALUE]) || array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SECURITY_LABEL_NUMBER_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBJECT][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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