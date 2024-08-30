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

use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionList;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
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
 * This resource provides the target, request and response, and action details for
 * an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcessRequest
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRProcessRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_ACTION = 'action';
    const FIELD_ACTION_EXT = '_action';
    const FIELD_TARGET = 'target';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_PROVIDER = 'provider';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';
    const FIELD_NULLIFY = 'nullify';
    const FIELD_NULLIFY_EXT = '_nullify';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_ITEM = 'item';
    const FIELD_INCLUDE = 'include';
    const FIELD_INCLUDE_EXT = '_include';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_PERIOD = 'period';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected null|FHIRFinancialResourceStatusCodes $status = null;
    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest,PendedRequest.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionList
     */
    protected null|FHIRActionList $action = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $target = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when this resource was created.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $created = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in this request.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $provider = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in this request.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $organization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of resource which is the target or subject of this action.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $request = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of a prior response to resource which is the target or subject of this
     * action.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $response = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $nullify = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $reference = null;
    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    protected null|array $item = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $include = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $exclude = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;

    /**
     * Validation map for fields in type ProcessRequest
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRProcessRequest Constructor
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
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFinancialResourceStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($ext));
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes(null));
            }
        }
        if (array_key_exists(self::FIELD_ACTION, $data) || array_key_exists(self::FIELD_ACTION_EXT, $data)) {
            $value = $data[self::FIELD_ACTION] ?? null;
            $ext = (isset($data[self::FIELD_ACTION_EXT]) && is_array($data[self::FIELD_ACTION_EXT])) ? $data[self::FIELD_ACTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionList) {
                    $this->setAction($value);
                } else if (is_array($value)) {
                    $this->setAction(new FHIRActionList(array_merge($ext, $value)));
                } else {
                    $this->setAction(new FHIRActionList([FHIRActionList::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAction(new FHIRActionList($ext));
            } else {
                $this->setAction(new FHIRActionList(null));
            }
        }
        if (array_key_exists(self::FIELD_TARGET, $data)) {
            if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->setTarget($data[self::FIELD_TARGET]);
            } else {
                $this->setTarget(new FHIRReference($data[self::FIELD_TARGET]));
            }
        }
        if (array_key_exists(self::FIELD_CREATED, $data) || array_key_exists(self::FIELD_CREATED_EXT, $data)) {
            $value = $data[self::FIELD_CREATED] ?? null;
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) ? $data[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            } else {
                $this->setCreated(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PROVIDER, $data)) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANIZATION, $data)) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_REQUEST, $data)) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (array_key_exists(self::FIELD_RESPONSE, $data)) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRReference) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRReference($data[self::FIELD_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_NULLIFY, $data) || array_key_exists(self::FIELD_NULLIFY_EXT, $data)) {
            $value = $data[self::FIELD_NULLIFY] ?? null;
            $ext = (isset($data[self::FIELD_NULLIFY_EXT]) && is_array($data[self::FIELD_NULLIFY_EXT])) ? $data[self::FIELD_NULLIFY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNullify($value);
                } else if (is_array($value)) {
                    $this->setNullify(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNullify(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNullify(new FHIRBoolean($ext));
            } else {
                $this->setNullify(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE, $data) || array_key_exists(self::FIELD_REFERENCE_EXT, $data)) {
            $value = $data[self::FIELD_REFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) ? $data[self::FIELD_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReference($value);
                } else if (is_array($value)) {
                    $this->setReference(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReference(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReference(new FHIRString($ext));
            } else {
                $this->setReference(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ITEM, $data)) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRProcessRequestItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRProcessRequestItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ITEM] instanceof FHIRProcessRequestItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRProcessRequestItem($data[self::FIELD_ITEM]));
            }
        }
        if (array_key_exists(self::FIELD_INCLUDE, $data) || array_key_exists(self::FIELD_INCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_INCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_INCLUDE_EXT]) && is_array($data[self::FIELD_INCLUDE_EXT])) ? $data[self::FIELD_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInclude(new FHIRString($iext));
                }
            } else {
                $this->addInclude(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_EXCLUDE, $data) || array_key_exists(self::FIELD_EXCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_EXCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) ? $data[self::FIELD_EXCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addExclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addExclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addExclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addExclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExclude(new FHIRString($iext));
                }
            } else {
                $this->addExclude(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PERIOD, $data)) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
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
     * The ProcessRequest business identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
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
     * The ProcessRequest business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
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
     * The ProcessRequest business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier ...$identifier
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRFinancialResourceStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRFinancialResourceStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest,PendedRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionList
     */
    public function getAction(): null|FHIRActionList
    {
        return $this->action;
    }

    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest,PendedRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionList $action
     * @return static
     */
    public function setAction(null|FHIRActionList $action = null): self
    {
        if (null === $action) {
            $action = new FHIRActionList();
        }
        $this->_trackValueSet($this->action, $action);
        $this->action = $action;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getTarget(): null|FHIRReference
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $target
     * @return static
     */
    public function setTarget(null|FHIRReference $target = null): self
    {
        if (null === $target) {
            $target = new FHIRReference();
        }
        $this->_trackValueSet($this->target, $target);
        $this->target = $target;
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
     * The date when this resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when this resource was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $created
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $created && !($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime($created);
        }
        $this->_trackValueSet($this->created, $created);
        if (!isset($this->_xmlLocations[self::FIELD_CREATED])) {
            $this->_xmlLocations[self::FIELD_CREATED] = [];
        }
        $this->_xmlLocations[self::FIELD_CREATED][0] = $xmlLocation;
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in this request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getProvider(): null|FHIRReference
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in this request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(null|FHIRReference $provider = null): self
    {
        if (null === $provider) {
            $provider = new FHIRReference();
        }
        $this->_trackValueSet($this->provider, $provider);
        $this->provider = $provider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in this request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOrganization(): null|FHIRReference
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in this request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(null|FHIRReference $organization = null): self
    {
        if (null === $organization) {
            $organization = new FHIRReference();
        }
        $this->_trackValueSet($this->organization, $organization);
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of resource which is the target or subject of this action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * Reference of resource which is the target or subject of this action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $request
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of a prior response to resource which is the target or subject of this
     * action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getResponse(): null|FHIRReference
    {
        return $this->response;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of a prior response to resource which is the target or subject of this
     * action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $response
     * @return static
     */
    public function setResponse(null|FHIRReference $response = null): self
    {
        if (null === $response) {
            $response = new FHIRReference();
        }
        $this->_trackValueSet($this->response, $response);
        $this->response = $response;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getNullify(): null|FHIRBoolean
    {
        return $this->nullify;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $nullify
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNullify(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $nullify = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $nullify && !($nullify instanceof FHIRBoolean)) {
            $nullify = new FHIRBoolean($nullify);
        }
        $this->_trackValueSet($this->nullify, $nullify);
        if (!isset($this->_xmlLocations[self::FIELD_NULLIFY])) {
            $this->_xmlLocations[self::FIELD_NULLIFY] = [];
        }
        $this->_xmlLocations[self::FIELD_NULLIFY][0] = $xmlLocation;
        $this->nullify = $nullify;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getReference(): null|FHIRString
    {
        return $this->reference;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $reference
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReference(null|string|FHIRStringPrimitive|FHIRString $reference = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $reference && !($reference instanceof FHIRString)) {
            $reference = new FHIRString($reference);
        }
        $this->_trackValueSet($this->reference, $reference);
        if (!isset($this->_xmlLocations[self::FIELD_REFERENCE])) {
            $this->_xmlLocations[self::FIELD_REFERENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_REFERENCE][0] = $xmlLocation;
        $this->reference = $reference;
        return $this;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public function getItem(): null|array
    {
        return $this->item;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem $item
     * @return static
     */
    public function addItem(null|FHIRProcessRequestItem $item = null): self
    {
        if (null === $item) {
            $item = new FHIRProcessRequestItem();
        }
        $this->_trackValueAdded();
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem ...$item
     * @return static
     */
    public function setItem(FHIRProcessRequestItem ...$item): self
    {
        if ([] !== $this->item) {
            $this->_trackValuesRemoved(count($this->item));
            $this->item = [];
        }
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            $this->addItem($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getInclude(): null|array
    {
        return $this->include;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $include
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addInclude(null|string|FHIRStringPrimitive|FHIRString $include = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $include && !($include instanceof FHIRString)) {
            $include = new FHIRString($include);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_INCLUDE])) {
            $this->_xmlLocations[self::FIELD_INCLUDE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_INCLUDE]) {
            $this->_xmlLocations[self::FIELD_INCLUDE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_INCLUDE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->include[] = $include;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $include
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInclude(array $include = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_INCLUDE]);
        if ([] !== $this->include) {
            $this->_trackValuesRemoved(count($this->include));
            $this->include = [];
        }
        if ([] === $include) {
            return $this;
        }
        foreach($include as $v) {
            if ($v instanceof FHIRString) {
                $this->addInclude($v, $xmlLocation);
            } else {
                $this->addInclude(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getExclude(): null|array
    {
        return $this->exclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $exclude
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addExclude(null|string|FHIRStringPrimitive|FHIRString $exclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $exclude && !($exclude instanceof FHIRString)) {
            $exclude = new FHIRString($exclude);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_EXCLUDE])) {
            $this->_xmlLocations[self::FIELD_EXCLUDE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_EXCLUDE]) {
            $this->_xmlLocations[self::FIELD_EXCLUDE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_EXCLUDE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $exclude
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExclude(array $exclude = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_EXCLUDE]);
        if ([] !== $this->exclude) {
            $this->_trackValuesRemoved(count($this->exclude));
            $this->exclude = [];
        }
        if ([] === $exclude) {
            return $this;
        }
        foreach($exclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addExclude($v, $xmlLocation);
            } else {
                $this->addExclude(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNullify())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NULLIFY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVIDER])) {
            $v = $this->getProvider();
            foreach($validationRules[self::FIELD_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDER])) {
                        $errs[self::FIELD_PROVIDER] = [];
                    }
                    $errs[self::FIELD_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSE])) {
            $v = $this->getResponse();
            foreach($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSE])) {
                        $errs[self::FIELD_RESPONSE] = [];
                    }
                    $errs[self::FIELD_RESPONSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NULLIFY])) {
            $v = $this->getNullify();
            foreach($validationRules[self::FIELD_NULLIFY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_NULLIFY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NULLIFY])) {
                        $errs[self::FIELD_NULLIFY] = [];
                    }
                    $errs[self::FIELD_NULLIFY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE])) {
            $v = $this->getInclude();
            foreach($validationRules[self::FIELD_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE])) {
                        $errs[self::FIELD_INCLUDE] = [];
                    }
                    $errs[self::FIELD_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest
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
        } else if (!($type instanceof FHIRProcessRequest)) {
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
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTION === $childName) {
                $type->setAction(FHIRActionList::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET === $childName) {
                $type->setTarget(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CREATED === $childName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROVIDER === $childName) {
                $type->setProvider(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANIZATION === $childName) {
                $type->setOrganization(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUEST === $childName) {
                $type->setRequest(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESPONSE === $childName) {
                $type->setResponse(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NULLIFY === $childName) {
                $type->setNullify(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REFERENCE === $childName) {
                $type->setReference(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ITEM === $childName) {
                $type->addItem(FHIRProcessRequestItem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INCLUDE === $childName) {
                $type->addInclude(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXCLUDE === $childName) {
                $type->addExclude(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERIOD === $childName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_CREATED])) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NULLIFY])) {
            $pt = $type->getNullify();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NULLIFY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNullify((string)$attributes[self::FIELD_NULLIFY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE])) {
            $pt = $type->getReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REFERENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReference((string)$attributes[self::FIELD_REFERENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INCLUDE])) {
            $type->addInclude((string)$attributes[self::FIELD_INCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            $type->addExclude((string)$attributes[self::FIELD_EXCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'ProcessRequest', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->writeAttribute(self::FIELD_CREATED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_NULLIFY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNullify())) {
            $xw->writeAttribute(self::FIELD_NULLIFY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_REFERENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReference())) {
            $xw->writeAttribute(self::FIELD_REFERENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_INCLUDE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getInclude())) {
            $xw->writeAttribute(self::FIELD_INCLUDE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getInclude()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_INCLUDE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_EXCLUDE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getExclude())) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getExclude()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAction())) {
            $xw->startElement(self::FIELD_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTarget())) {
            $xw->startElement(self::FIELD_TARGET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->startElement(self::FIELD_CREATED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProvider())) {
            $xw->startElement(self::FIELD_PROVIDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOrganization())) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequest())) {
            $xw->startElement(self::FIELD_REQUEST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResponse())) {
            $xw->startElement(self::FIELD_RESPONSE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NULLIFY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNullify())) {
            $xw->startElement(self::FIELD_NULLIFY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_REFERENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReference())) {
            $xw->startElement(self::FIELD_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getItem() as $v) {
            $xw->startElement(self::FIELD_ITEM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_INCLUDE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getInclude())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_INCLUDE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getExclude())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_EXCLUDE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $xw->startElement(self::FIELD_PERIOD);
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
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRFinancialResourceStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionList::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            $out->{self::FIELD_TARGET} = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CREATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CREATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            $out->{self::FIELD_PROVIDER} = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $out->{self::FIELD_ORGANIZATION} = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $out->{self::FIELD_REQUEST} = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $out->{self::FIELD_RESPONSE} = $v;
        }
        if (null !== ($v = $this->getNullify())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NULLIFY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NULLIFY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $out->{self::FIELD_ITEM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ITEM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_INCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INCLUDE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
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