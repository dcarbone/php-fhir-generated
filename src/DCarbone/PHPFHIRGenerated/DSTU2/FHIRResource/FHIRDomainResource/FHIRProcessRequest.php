<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides the target, request and response, and action details for
 * an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcessRequest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRProcessRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST;
    const FIELD_ACTION = 'action';
    const FIELD_ACTION_EXT = '_action';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INCLUDE = 'include';
    const FIELD_INCLUDE_EXT = '_include';
    const FIELD_ITEM = 'item';
    const FIELD_NULLIFY = 'nullify';
    const FIELD_NULLIFY_EXT = '_nullify';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    const FIELD_PERIOD = 'period';
    const FIELD_PROVIDER = 'provider';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';
    const FIELD_RULESET = 'ruleset';
    const FIELD_TARGET = 'target';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest,PendedRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList
     */
    protected $action = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $created = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    protected $exclude = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    protected $include = [];

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    protected $item = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $nullify = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in thise
     * request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $organization = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $originalRuleset = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in thise request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $provider = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $reference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of resource which is the target or subject of this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $request = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of a prior response to resource which is the target or subject of this
     * action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $response = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $ruleset = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $target = null;

    /**
     * Validation map for fields in type ProcessRequest
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRProcessRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION]) || isset($data[self::FIELD_ACTION_EXT])) {
            if (isset($data[self::FIELD_ACTION])) {
                $value = $data[self::FIELD_ACTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACTION_EXT]) && is_array($data[self::FIELD_ACTION_EXT])) {
                $ext = $data[self::FIELD_ACTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRActionList) {
                    $this->setAction($value);
                } else if (is_array($value)) {
                    $this->setAction(new FHIRActionList(array_merge($ext, $value)));
                } else {
                    $this->setAction(new FHIRActionList([FHIRActionList::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAction(new FHIRActionList($ext));
            }
        }
        if (isset($data[self::FIELD_CREATED]) || isset($data[self::FIELD_CREATED_EXT])) {
            if (isset($data[self::FIELD_CREATED])) {
                $value = $data[self::FIELD_CREATED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) {
                $ext = $data[self::FIELD_CREATED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE]) || isset($data[self::FIELD_EXCLUDE_EXT])) {
            if (isset($data[self::FIELD_EXCLUDE])) {
                $value = $data[self::FIELD_EXCLUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) {
                $ext = $data[self::FIELD_EXCLUDE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_INCLUDE]) || isset($data[self::FIELD_INCLUDE_EXT])) {
            if (isset($data[self::FIELD_INCLUDE])) {
                $value = $data[self::FIELD_INCLUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INCLUDE_EXT]) && is_array($data[self::FIELD_INCLUDE_EXT])) {
                $ext = $data[self::FIELD_INCLUDE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProcessRequestItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRProcessRequestItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRProcessRequestItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRProcessRequestItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_NULLIFY]) || isset($data[self::FIELD_NULLIFY_EXT])) {
            if (isset($data[self::FIELD_NULLIFY])) {
                $value = $data[self::FIELD_NULLIFY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NULLIFY_EXT]) && is_array($data[self::FIELD_NULLIFY_EXT])) {
                $ext = $data[self::FIELD_NULLIFY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNullify($value);
                } else if (is_array($value)) {
                    $this->setNullify(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNullify(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNullify(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_ORIGINAL_RULESET])) {
            if ($data[self::FIELD_ORIGINAL_RULESET] instanceof FHIRCoding) {
                $this->setOriginalRuleset($data[self::FIELD_ORIGINAL_RULESET]);
            } else {
                $this->setOriginalRuleset(new FHIRCoding($data[self::FIELD_ORIGINAL_RULESET]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
            if (isset($data[self::FIELD_REFERENCE])) {
                $value = $data[self::FIELD_REFERENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReference($value);
                } else if (is_array($value)) {
                    $this->setReference(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReference(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReference(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRReference) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRReference($data[self::FIELD_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_RULESET])) {
            if ($data[self::FIELD_RULESET] instanceof FHIRCoding) {
                $this->setRuleset($data[self::FIELD_RULESET]);
            } else {
                $this->setRuleset(new FHIRCoding($data[self::FIELD_RULESET]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->setTarget($data[self::FIELD_TARGET]);
            } else {
                $this->setTarget(new FHIRReference($data[self::FIELD_TARGET]));
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
        return "<ProcessRequest{$xmlns}></ProcessRequest>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest,PendedRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList
     */
    public function getAction()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList $action
     * @return static
     */
    public function setAction(FHIRActionList $action = null)
    {
        $this->action = $action;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getCreated()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated($created = null)
    {
        if (null === $created) {
            $this->created = null;
            return $this;
        }
        if ($created instanceof FHIRDateTime) {
            $this->created = $created;
            return $this;
        }
        $this->created = new FHIRDateTime($created);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getExclude()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $exclude
     * @return static
     */
    public function addExclude($exclude = null)
    {
        if (null === $exclude) {
            $this->exclude = [];
            return $this;
        }
        if ($exclude instanceof FHIRString) {
            $this->exclude[] = $exclude;
            return $this;
        }
        $this->exclude[] = new FHIRString($exclude);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $exclude
     * @return static
     */
    public function setExclude(array $exclude = [])
    {
        $this->exclude = [];
        if ([] === $exclude) {
            return $this;
        }
        foreach($exclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addExclude($v);
            } else {
                $this->addExclude(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getInclude()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $include
     * @return static
     */
    public function addInclude($include = null)
    {
        if (null === $include) {
            $this->include = [];
            return $this;
        }
        if ($include instanceof FHIRString) {
            $this->include[] = $include;
            return $this;
        }
        $this->include[] = new FHIRString($include);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $include
     * @return static
     */
    public function setInclude(array $include = [])
    {
        $this->include = [];
        if ([] === $include) {
            return $this;
        }
        foreach($include as $v) {
            if ($v instanceof FHIRString) {
                $this->addInclude($v);
            } else {
                $this->addInclude(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public function getItem()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem $item
     * @return static
     */
    public function addItem(FHIRProcessRequestItem $item = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[] $item
     * @return static
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRProcessRequestItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRProcessRequestItem($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getNullify()
    {
        return $this->nullify;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $nullify
     * @return static
     */
    public function setNullify($nullify = null)
    {
        if (null === $nullify) {
            $this->nullify = null;
            return $this;
        }
        if ($nullify instanceof FHIRBoolean) {
            $this->nullify = $nullify;
            return $this;
        }
        $this->nullify = new FHIRBoolean($nullify);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in thise
     * request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the action speccified in thise
     * request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $originalRuleset
     * @return static
     */
    public function setOriginalRuleset(FHIRCoding $originalRuleset = null)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in thise request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in thise request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getReference()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $reference
     * @return static
     */
    public function setReference($reference = null)
    {
        if (null === $reference) {
            $this->reference = null;
            return $this;
        }
        if ($reference instanceof FHIRString) {
            $this->reference = $reference;
            return $this;
        }
        $this->reference = new FHIRString($reference);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of resource which is the target or subject of this action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequest()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $request
     * @return static
     */
    public function setRequest(FHIRReference $request = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getResponse()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $response
     * @return static
     */
    public function setResponse(FHIRReference $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $ruleset
     * @return static
     */
    public function setRuleset(FHIRCoding $ruleset = null)
    {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * The organization which is the target of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $target
     * @return static
     */
    public function setTarget(FHIRReference $target = null)
    {
        $this->target = $target;
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
        if (null !== ($v = $this->getAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNullify())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NULLIFY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGINAL_RULESET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
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
        if (null !== ($v = $this->getRuleset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RULESET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_ORIGINAL_RULESET])) {
            $v = $this->getOriginalRuleset();
            foreach($validationRules[self::FIELD_ORIGINAL_RULESET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_ORIGINAL_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGINAL_RULESET])) {
                        $errs[self::FIELD_ORIGINAL_RULESET] = [];
                    }
                    $errs[self::FIELD_ORIGINAL_RULESET][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RULESET])) {
            $v = $this->getRuleset();
            foreach($validationRules[self::FIELD_RULESET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST, self::FIELD_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULESET])) {
                        $errs[self::FIELD_RULESET] = [];
                    }
                    $errs[self::FIELD_RULESET][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest
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
                throw new \DomainException(sprintf('FHIRProcessRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProcessRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProcessRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRProcessRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRProcessRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest or null, %s seen.',
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
        if (isset($children->action)) {
            $type->setAction(FHIRActionList::xmlUnserialize($children->action));
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->created)) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->created);
            } else {
                $type->setCreated((string)$attributes->created);
            }
        }
        if (isset($children->exclude)) {
            foreach($children->exclude as $child) {
                $type->addExclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->include)) {
            foreach($children->include as $child) {
                $type->addInclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRProcessRequestItem::xmlUnserialize($child));
            }
        }
        if (isset($children->nullify)) {
            $type->setNullify(FHIRBoolean::xmlUnserialize($children->nullify));
        }
        if (isset($attributes->nullify)) {
            $pt = $type->getNullify();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->nullify);
            } else {
                $type->setNullify((string)$attributes->nullify);
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->originalRuleset)) {
            $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($children->originalRuleset));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRString::xmlUnserialize($children->reference));
        }
        if (isset($attributes->reference)) {
            $pt = $type->getReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->reference);
            } else {
                $type->setReference((string)$attributes->reference);
            }
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRReference::xmlUnserialize($children->response));
        }
        if (isset($children->ruleset)) {
            $type->setRuleset(FHIRCoding::xmlUnserialize($children->ruleset));
        }
        if (isset($children->target)) {
            $type->setTarget(FHIRReference::xmlUnserialize($children->target));
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
        if (null !== ($v = $this->getAction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getExclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNullify())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NULLIFY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_RULESET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULESET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAction())) {
            $a[self::FIELD_ACTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRActionList::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRActionList::FIELD_VALUE]);
                $a[self::FIELD_ACTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_CREATED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getExclude())) {
            $a[self::FIELD_EXCLUDE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXCLUDE][] = $v->getValue();
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
                $a[self::FIELD_EXCLUDE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInclude())) {
            $a[self::FIELD_INCLUDE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INCLUDE][] = $v->getValue();
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
                $a[self::FIELD_INCLUDE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ITEM][] = $v;
            }
        }
        if (null !== ($v = $this->getNullify())) {
            $a[self::FIELD_NULLIFY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_NULLIFY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $a[self::FIELD_ORIGINAL_RULESET] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_REFERENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $a[self::FIELD_RULESET] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $v;
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