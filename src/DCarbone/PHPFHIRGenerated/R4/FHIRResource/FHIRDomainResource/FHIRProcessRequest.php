<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionList;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * This resource provides the target, request and response, and action details for
 * an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcessRequest
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRProcessRequest extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTION = 'action';
    const FIELD_ACTION_EXT = '_action';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INCLUDE = 'include';
    const FIELD_INCLUDE_EXT = '_include';
    const FIELD_ITEM = 'item';
    const FIELD_NULLIFY = 'nullify';
    const FIELD_NULLIFY_EXT = '_nullify';
    const FIELD_PERIOD = 'period';
    const FIELD_PROVIDER = 'provider';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TARGET = 'target';

    /**
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest, PendedRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionList
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $created = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $exclude = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $include = [];

    /**
     * This resource provides the target, request and response, and action details for
     * an action to be performed by the target on or about existing resources.
     *
     * List of top level items to be re-adjudicated, if none specified then the entire
     * submission is re-adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    protected $item = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true remove all history excluding audit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $nullify = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the action specified in this request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $provider = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $reference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference of resource which is the target or subject of this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $response = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $target = null;

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
        if (isset($data[self::FIELD_ACTION])) {
            $ext = (isset($data[self::FIELD_ACTION_EXT]) && is_array($data[self::FIELD_ACTION_EXT]))
                ? $data[self::FIELD_ACTION_EXT]
                : null;
            if ($data[self::FIELD_ACTION] instanceof FHIRActionList) {
                $this->setAction($data[self::FIELD_ACTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTION])) {
                $this->setAction(new FHIRActionList([FHIRActionList::FIELD_VALUE => $data[self::FIELD_ACTION]] + $ext));
            } else {
                $this->setAction(new FHIRActionList($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_CREATED])) {
                $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE])) {
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT]))
                ? $data[self::FIELD_EXCLUDE_EXT]
                : null;
            if (is_array($data[self::FIELD_EXCLUDE])) {
                foreach($data[self::FIELD_EXCLUDE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addExclude($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addExclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addExclude(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_EXCLUDE] instanceof FHIRString) {
                $this->addExclude($data[self::FIELD_EXCLUDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXCLUDE])) {
                $this->addExclude(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXCLUDE]] + $ext));
            } else {
                $this->addExclude(new FHIRString($data[self::FIELD_EXCLUDE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INCLUDE])) {
            $ext = (isset($data[self::FIELD_INCLUDE_EXT]) && is_array($data[self::FIELD_INCLUDE_EXT]))
                ? $data[self::FIELD_INCLUDE_EXT]
                : null;
            if (is_array($data[self::FIELD_INCLUDE])) {
                foreach($data[self::FIELD_INCLUDE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addInclude($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addInclude(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_INCLUDE] instanceof FHIRString) {
                $this->addInclude($data[self::FIELD_INCLUDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INCLUDE])) {
                $this->addInclude(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_INCLUDE]] + $ext));
            } else {
                $this->addInclude(new FHIRString($data[self::FIELD_INCLUDE]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
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
        if (isset($data[self::FIELD_NULLIFY])) {
            $ext = (isset($data[self::FIELD_NULLIFY_EXT]) && is_array($data[self::FIELD_NULLIFY_EXT]))
                ? $data[self::FIELD_NULLIFY_EXT]
                : null;
            if ($data[self::FIELD_NULLIFY] instanceof FHIRBoolean) {
                $this->setNullify($data[self::FIELD_NULLIFY]);
            } elseif ($ext && is_scalar($data[self::FIELD_NULLIFY])) {
                $this->setNullify(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_NULLIFY]] + $ext));
            } else {
                $this->setNullify(new FHIRBoolean($data[self::FIELD_NULLIFY]));
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
        if (isset($data[self::FIELD_REFERENCE])) {
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT]))
                ? $data[self::FIELD_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE] instanceof FHIRString) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE])) {
                $this->setReference(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REFERENCE]] + $ext));
            } else {
                $this->setReference(new FHIRString($data[self::FIELD_REFERENCE]));
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
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRFinancialResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($data[self::FIELD_STATUS]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * List of allowable action which this resource can request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of processing action being requested, for example Reversal,
     * Readjudication, StatusRequest, PendedRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionList
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
     * Readjudication, StatusRequest, PendedRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRActionList $action
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $created
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $exclude
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to exclude.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $exclude
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ProcessRequest business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $include
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Names of resource types to include.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $include
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem $item
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[] $item
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $nullify
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time during which the fulfilling resources would have been created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
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
     * The practitioner who is responsible for the action specified in this request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The practitioner who is responsible for the action specified in this request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to supply which authenticates the process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $reference
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $request
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $response
     * @return static
     */
    public function setResponse(FHIRReference $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is the target of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $target
     * @return static
     */
    public function setTarget(FHIRReference $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcessRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcessRequest
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
                'FHIRProcessRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProcessRequest or null, %s seen.',
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
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->exclude)) {
            $type->addExclude((string)$attributes->exclude);
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
        if (isset($attributes->include)) {
            $type->addInclude((string)$attributes->include);
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
        if (isset($attributes->nullify)) {
            $type->setNullify((string)$attributes->nullify);
        }
        if (isset($children->nullify)) {
            $type->setNullify(FHIRBoolean::xmlUnserialize($children->nullify));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($attributes->reference)) {
            $type->setReference((string)$attributes->reference);
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRString::xmlUnserialize($children->reference));
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRReference::xmlUnserialize($children->response));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
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

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ACTION] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = $v->getValue();
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getExclude())) {
            $a[self::FIELD_EXCLUDE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXCLUDE][] = $v->getValue();
                $a[self::FIELD_EXCLUDE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInclude())) {
            $a[self::FIELD_INCLUDE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INCLUDE][] = $v->getValue();
                $a[self::FIELD_INCLUDE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if (null !== ($v = $this->getNullify())) {
            $a[self::FIELD_NULLIFY] = $v->getValue();
            $a[self::FIELD_NULLIFY_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v->getValue();
            $a[self::FIELD_REFERENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $v;
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