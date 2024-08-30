<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidanceResponseStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A guidance response is the formal response to a guidance request, including any
 * output parameters returned by the evaluation, as well as the description of any
 * proposed actions to be taken.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRGuidanceResponse
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRGuidanceResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE;

    const FIELD_REQUEST_ID = 'requestId';
    const FIELD_REQUEST_ID_EXT = '_requestId';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MODULE = 'module';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_CONTEXT = 'context';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_PERFORMER = 'performer';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_NOTE = 'note';
    const FIELD_EVALUATION_MESSAGE = 'evaluationMessage';
    const FIELD_OUTPUT_PARAMETERS = 'outputParameters';
    const FIELD_RESULT = 'result';
    const FIELD_DATA_REQUIREMENT = 'dataRequirement';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the request associated with this response. If an id was given as part
     * of the request, it will be reproduced here to enable the requester to more
     * easily identify the response in a multi-request scenario.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $requestId = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows a service to provide a unique, business identifier for the response.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the knowledge module that was invoked.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $module = null;
    /**
     * The status of a guidance response
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the response. If the evaluation is completed successfully, the
     * status will indicate success. However, in order to complete the evaluation, the
     * engine may require more information. In this case, the status will be
     * data-required, and the response will contain a description of the additional
     * required information. If the evaluation completed successfully, but the engine
     * determines that a potentially more accurate response could be provided if more
     * data was available, the status will be data-requested, and the response will
     * contain a description of the additional requested information.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidanceResponseStatus
     */
    protected null|FHIRGuidanceResponseStatus $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient for which the request was processed.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the context of the guidance response to be provided if available. In a
     * service context, this would likely be unavailable.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $context = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates when the guidance response was processed.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurrenceDateTime = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reference to the device that performed the guidance.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $performer = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $reasonCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $reasonReference = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a mechanism to communicate additional information about the response.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of
     * evaluating the request, the engine may produce informational or warning
     * messages. These messages will be provided by this element.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $evaluationMessage = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The output parameters of the evaluation, if any. Many modules will result in the
     * return of specific resources such as procedure or communication requests that
     * are returned as part of the operation result. However, modules may define
     * specific outputs that would be returned as the result of the evaluation, and
     * these would be returned in this element.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $outputParameters = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actions, if any, produced by the evaluation of the artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $result = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the evaluation could not be completed due to lack of information, or
     * additional information would potentially result in a more accurate response,
     * this element will a description of the data required in order to proceed with
     * the evaluation. A subsequent request to the service should include this data.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement[]
     */
    protected null|array $dataRequirement = [];

    /**
     * Validation map for fields in type GuidanceResponse
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_MODULE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRGuidanceResponse Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_REQUEST_ID, $data) || array_key_exists(self::FIELD_REQUEST_ID_EXT, $data)) {
            $value = $data[self::FIELD_REQUEST_ID] ?? null;
            $ext = (isset($data[self::FIELD_REQUEST_ID_EXT]) && is_array($data[self::FIELD_REQUEST_ID_EXT])) ? $data[self::FIELD_REQUEST_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setRequestId($value);
                } else if (is_array($value)) {
                    $this->setRequestId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setRequestId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequestId(new FHIRId($ext));
            } else {
                $this->setRequestId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_MODULE, $data)) {
            if ($data[self::FIELD_MODULE] instanceof FHIRReference) {
                $this->setModule($data[self::FIELD_MODULE]);
            } else {
                $this->setModule(new FHIRReference($data[self::FIELD_MODULE]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRGuidanceResponseStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRGuidanceResponseStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRGuidanceResponseStatus([FHIRGuidanceResponseStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRGuidanceResponseStatus($ext));
            } else {
                $this->setStatus(new FHIRGuidanceResponseStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_CONTEXT, $data)) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME, $data) || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            } else {
                $this->setOccurrenceDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER, $data)) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
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
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_EVALUATION_MESSAGE, $data)) {
            if (is_array($data[self::FIELD_EVALUATION_MESSAGE])) {
                foreach($data[self::FIELD_EVALUATION_MESSAGE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEvaluationMessage($v);
                    } else {
                        $this->addEvaluationMessage(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_EVALUATION_MESSAGE] instanceof FHIRReference) {
                $this->addEvaluationMessage($data[self::FIELD_EVALUATION_MESSAGE]);
            } else {
                $this->addEvaluationMessage(new FHIRReference($data[self::FIELD_EVALUATION_MESSAGE]));
            }
        }
        if (array_key_exists(self::FIELD_OUTPUT_PARAMETERS, $data)) {
            if ($data[self::FIELD_OUTPUT_PARAMETERS] instanceof FHIRReference) {
                $this->setOutputParameters($data[self::FIELD_OUTPUT_PARAMETERS]);
            } else {
                $this->setOutputParameters(new FHIRReference($data[self::FIELD_OUTPUT_PARAMETERS]));
            }
        }
        if (array_key_exists(self::FIELD_RESULT, $data)) {
            if ($data[self::FIELD_RESULT] instanceof FHIRReference) {
                $this->setResult($data[self::FIELD_RESULT]);
            } else {
                $this->setResult(new FHIRReference($data[self::FIELD_RESULT]));
            }
        }
        if (array_key_exists(self::FIELD_DATA_REQUIREMENT, $data)) {
            if (is_array($data[self::FIELD_DATA_REQUIREMENT])) {
                foreach($data[self::FIELD_DATA_REQUIREMENT] as $v) {
                    if ($v instanceof FHIRDataRequirement) {
                        $this->addDataRequirement($v);
                    } else {
                        $this->addDataRequirement(new FHIRDataRequirement($v));
                    }
                }
            } elseif ($data[self::FIELD_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->addDataRequirement($data[self::FIELD_DATA_REQUIREMENT]);
            } else {
                $this->addDataRequirement(new FHIRDataRequirement($data[self::FIELD_DATA_REQUIREMENT]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the request associated with this response. If an id was given as part
     * of the request, it will be reproduced here to enable the requester to more
     * easily identify the response in a multi-request scenario.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getRequestId(): null|FHIRId
    {
        return $this->requestId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The id of the request associated with this response. If an id was given as part
     * of the request, it will be reproduced here to enable the requester to more
     * easily identify the response in a multi-request scenario.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $requestId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequestId(null|string|FHIRIdPrimitive|FHIRId $requestId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $requestId && !($requestId instanceof FHIRId)) {
            $requestId = new FHIRId($requestId);
        }
        $this->_trackValueSet($this->requestId, $requestId);
        if (!isset($this->_xmlLocations[self::FIELD_REQUEST_ID])) {
            $this->_xmlLocations[self::FIELD_REQUEST_ID] = [];
        }
        $this->_xmlLocations[self::FIELD_REQUEST_ID][0] = $xmlLocation;
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows a service to provide a unique, business identifier for the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows a service to provide a unique, business identifier for the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the knowledge module that was invoked.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getModule(): null|FHIRReference
    {
        return $this->module;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the knowledge module that was invoked.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $module
     * @return static
     */
    public function setModule(null|FHIRReference $module = null): self
    {
        if (null === $module) {
            $module = new FHIRReference();
        }
        $this->_trackValueSet($this->module, $module);
        $this->module = $module;
        return $this;
    }

    /**
     * The status of a guidance response
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the response. If the evaluation is completed successfully, the
     * status will indicate success. However, in order to complete the evaluation, the
     * engine may require more information. In this case, the status will be
     * data-required, and the response will contain a description of the additional
     * required information. If the evaluation completed successfully, but the engine
     * determines that a potentially more accurate response could be provided if more
     * data was available, the status will be data-requested, and the response will
     * contain a description of the additional requested information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidanceResponseStatus
     */
    public function getStatus(): null|FHIRGuidanceResponseStatus
    {
        return $this->status;
    }

    /**
     * The status of a guidance response
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the response. If the evaluation is completed successfully, the
     * status will indicate success. However, in order to complete the evaluation, the
     * engine may require more information. In this case, the status will be
     * data-required, and the response will contain a description of the additional
     * required information. If the evaluation completed successfully, but the engine
     * determines that a potentially more accurate response could be provided if more
     * data was available, the status will be data-requested, and the response will
     * contain a description of the additional requested information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidanceResponseStatus $status
     * @return static
     */
    public function setStatus(null|FHIRGuidanceResponseStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRGuidanceResponseStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient for which the request was processed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * The patient for which the request was processed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the context of the guidance response to be provided if available. In a
     * service context, this would likely be unavailable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContext(): null|FHIRReference
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the context of the guidance response to be provided if available. In a
     * service context, this would likely be unavailable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(null|FHIRReference $context = null): self
    {
        if (null === $context) {
            $context = new FHIRReference();
        }
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
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
     * Indicates when the guidance response was processed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
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
     * Indicates when the guidance response was processed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $occurrenceDateTime && !($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        $this->_trackValueSet($this->occurrenceDateTime, $occurrenceDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_OCCURRENCE_DATE_TIME][0] = $xmlLocation;
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reference to the device that performed the guidance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPerformer(): null|FHIRReference
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a reference to the device that performed the guidance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRReference $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRReference();
        }
        $this->_trackValueSet($this->performer, $performer);
        $this->performer = $performer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
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
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * Indicates the reason the request was initiated. This is typically provided as a
     * parameter to the evaluation and echoed by the service, although for some use
     * cases, such as subscription- or event-based scenarios, it may provide an
     * indication of the cause for the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reasonReference
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a mechanism to communicate additional information about the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a mechanism to communicate additional information about the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides a mechanism to communicate additional information about the response.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of
     * evaluating the request, the engine may produce informational or warning
     * messages. These messages will be provided by this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getEvaluationMessage(): null|array
    {
        return $this->evaluationMessage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of
     * evaluating the request, the engine may produce informational or warning
     * messages. These messages will be provided by this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $evaluationMessage
     * @return static
     */
    public function addEvaluationMessage(null|FHIRReference $evaluationMessage = null): self
    {
        if (null === $evaluationMessage) {
            $evaluationMessage = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->evaluationMessage[] = $evaluationMessage;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Messages resulting from the evaluation of the artifact or artifacts. As part of
     * evaluating the request, the engine may produce informational or warning
     * messages. These messages will be provided by this element.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference ...$evaluationMessage
     * @return static
     */
    public function setEvaluationMessage(FHIRReference ...$evaluationMessage): self
    {
        if ([] !== $this->evaluationMessage) {
            $this->_trackValuesRemoved(count($this->evaluationMessage));
            $this->evaluationMessage = [];
        }
        if ([] === $evaluationMessage) {
            return $this;
        }
        foreach($evaluationMessage as $v) {
            $this->addEvaluationMessage($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The output parameters of the evaluation, if any. Many modules will result in the
     * return of specific resources such as procedure or communication requests that
     * are returned as part of the operation result. However, modules may define
     * specific outputs that would be returned as the result of the evaluation, and
     * these would be returned in this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOutputParameters(): null|FHIRReference
    {
        return $this->outputParameters;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The output parameters of the evaluation, if any. Many modules will result in the
     * return of specific resources such as procedure or communication requests that
     * are returned as part of the operation result. However, modules may define
     * specific outputs that would be returned as the result of the evaluation, and
     * these would be returned in this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $outputParameters
     * @return static
     */
    public function setOutputParameters(null|FHIRReference $outputParameters = null): self
    {
        if (null === $outputParameters) {
            $outputParameters = new FHIRReference();
        }
        $this->_trackValueSet($this->outputParameters, $outputParameters);
        $this->outputParameters = $outputParameters;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getResult(): null|FHIRReference
    {
        return $this->result;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $result
     * @return static
     */
    public function setResult(null|FHIRReference $result = null): self
    {
        if (null === $result) {
            $result = new FHIRReference();
        }
        $this->_trackValueSet($this->result, $result);
        $this->result = $result;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the evaluation could not be completed due to lack of information, or
     * additional information would potentially result in a more accurate response,
     * this element will a description of the data required in order to proceed with
     * the evaluation. A subsequent request to the service should include this data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement[]
     */
    public function getDataRequirement(): null|array
    {
        return $this->dataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the evaluation could not be completed due to lack of information, or
     * additional information would potentially result in a more accurate response,
     * this element will a description of the data required in order to proceed with
     * the evaluation. A subsequent request to the service should include this data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement $dataRequirement
     * @return static
     */
    public function addDataRequirement(null|FHIRDataRequirement $dataRequirement = null): self
    {
        if (null === $dataRequirement) {
            $dataRequirement = new FHIRDataRequirement();
        }
        $this->_trackValueAdded();
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the evaluation could not be completed due to lack of information, or
     * additional information would potentially result in a more accurate response,
     * this element will a description of the data required in order to proceed with
     * the evaluation. A subsequent request to the service should include this data.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement ...$dataRequirement
     * @return static
     */
    public function setDataRequirement(FHIRDataRequirement ...$dataRequirement): self
    {
        if ([] !== $this->dataRequirement) {
            $this->_trackValuesRemoved(count($this->dataRequirement));
            $this->dataRequirement = [];
        }
        if ([] === $dataRequirement) {
            return $this;
        }
        foreach($dataRequirement as $v) {
            $this->addDataRequirement($v);
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
        if (null !== ($v = $this->getRequestId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getModule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
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
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEvaluationMessage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVALUATION_MESSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOutputParameters())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTPUT_PARAMETERS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResult())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDataRequirement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATA_REQUIREMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_ID])) {
            $v = $this->getRequestId();
            foreach($validationRules[self::FIELD_REQUEST_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_REQUEST_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_ID])) {
                        $errs[self::FIELD_REQUEST_ID] = [];
                    }
                    $errs[self::FIELD_REQUEST_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODULE])) {
            $v = $this->getModule();
            foreach($validationRules[self::FIELD_MODULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_MODULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODULE])) {
                        $errs[self::FIELD_MODULE] = [];
                    }
                    $errs[self::FIELD_MODULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVALUATION_MESSAGE])) {
            $v = $this->getEvaluationMessage();
            foreach($validationRules[self::FIELD_EVALUATION_MESSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_EVALUATION_MESSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVALUATION_MESSAGE])) {
                        $errs[self::FIELD_EVALUATION_MESSAGE] = [];
                    }
                    $errs[self::FIELD_EVALUATION_MESSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTPUT_PARAMETERS])) {
            $v = $this->getOutputParameters();
            foreach($validationRules[self::FIELD_OUTPUT_PARAMETERS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_OUTPUT_PARAMETERS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTPUT_PARAMETERS])) {
                        $errs[self::FIELD_OUTPUT_PARAMETERS] = [];
                    }
                    $errs[self::FIELD_OUTPUT_PARAMETERS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_REQUIREMENT])) {
            $v = $this->getDataRequirement();
            foreach($validationRules[self::FIELD_DATA_REQUIREMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE, self::FIELD_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_DATA_REQUIREMENT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
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
        } else if (!($type instanceof FHIRGuidanceResponse)) {
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
            if (self::FIELD_REQUEST_ID === $childName) {
                $type->setRequestId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODULE === $childName) {
                $type->setModule(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRGuidanceResponseStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $childName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERFORMER === $childName) {
                $type->setPerformer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_CODEABLE_CONCEPT === $childName) {
                $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON_REFERENCE === $childName) {
                $type->setReasonReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EVALUATION_MESSAGE === $childName) {
                $type->addEvaluationMessage(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTPUT_PARAMETERS === $childName) {
                $type->setOutputParameters(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESULT === $childName) {
                $type->setResult(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATA_REQUIREMENT === $childName) {
                $type->addDataRequirement(FHIRDataRequirement::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_REQUEST_ID])) {
            $pt = $type->getRequestId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUEST_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequestId((string)$attributes[self::FIELD_REQUEST_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurrenceDateTime((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'GuidanceResponse', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_REQUEST_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequestId())) {
            $xw->writeAttribute(self::FIELD_REQUEST_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOccurrenceDateTime())) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_REQUEST_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequestId())) {
            $xw->startElement(self::FIELD_REQUEST_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIdentifier())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getModule())) {
            $xw->startElement(self::FIELD_MODULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOccurrenceDateTime())) {
            $xw->startElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPerformer())) {
            $xw->startElement(self::FIELD_PERFORMER);
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
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEvaluationMessage() as $v) {
            $xw->startElement(self::FIELD_EVALUATION_MESSAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOutputParameters())) {
            $xw->startElement(self::FIELD_OUTPUT_PARAMETERS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResult())) {
            $xw->startElement(self::FIELD_RESULT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDataRequirement() as $v) {
            $xw->startElement(self::FIELD_DATA_REQUIREMENT);
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
        if (null !== ($v = $this->getRequestId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUEST_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUEST_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getModule())) {
            $out->{self::FIELD_MODULE} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRGuidanceResponseStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $out->{self::FIELD_REASON_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEvaluationMessage())) {
            $out->{self::FIELD_EVALUATION_MESSAGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_EVALUATION_MESSAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getOutputParameters())) {
            $out->{self::FIELD_OUTPUT_PARAMETERS} = $v;
        }
        if (null !== ($v = $this->getResult())) {
            $out->{self::FIELD_RESULT} = $v;
        }
        if ([] !== ($vs = $this->getDataRequirement())) {
            $out->{self::FIELD_DATA_REQUIREMENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DATA_REQUIREMENT}[] = $v;
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