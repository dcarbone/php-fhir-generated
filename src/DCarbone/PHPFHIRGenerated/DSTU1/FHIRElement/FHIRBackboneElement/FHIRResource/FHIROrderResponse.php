<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A response to an order.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIROrderResponse
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIROrderResponse extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ORDER_RESPONSE;

    const FIELD_AUTHORITY_CODEABLE_CONCEPT = 'authorityCodeableConcept';
    const FIELD_AUTHORITY_RESOURCE = 'authorityResource';
    const FIELD_CODE = 'code';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_FULFILLMENT = 'fulfillment';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_REQUEST = 'request';
    const FIELD_WHO = 'who';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $authorityCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $authorityResource = null;
    /**
     * The status of the response to an order
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What this response says about the status of the original order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus
     */
    private $code = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time at which this order response was made (created/posted).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional description about the response - e.g. a text description provided by
     * a human user when making decisions about the order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to resources that provide details of the outcome of performing the order.
     * E.g. Diagnostic Reports in a response that is made to an order that referenced a
     * diagnostic order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $fulfillment = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order. The identifiers are usually assigned by the
     * system responding to the order, but they may be provided or added to by other
     * systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the order that this is in response to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $request = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person, organization, or device credited with making the response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $who = null;

    /**
     * FHIROrderResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROrderResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORITY_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AUTHORITY_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAuthorityCodeableConcept($data[self::FIELD_AUTHORITY_CODEABLE_CONCEPT]);
            } else {
                $this->setAuthorityCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AUTHORITY_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_AUTHORITY_RESOURCE])) {
            if ($data[self::FIELD_AUTHORITY_RESOURCE] instanceof FHIRResourceReference) {
                $this->setAuthorityResource($data[self::FIELD_AUTHORITY_RESOURCE]);
            } else {
                $this->setAuthorityResource(new FHIRResourceReference($data[self::FIELD_AUTHORITY_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIROrderOutcomeStatus) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIROrderOutcomeStatus($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_FULFILLMENT])) {
            if (is_array($data[self::FIELD_FULFILLMENT])) {
                foreach($data[self::FIELD_FULFILLMENT] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addFulfillment($v);
                    } else {
                        $this->addFulfillment(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_FULFILLMENT] instanceof FHIRResourceReference) {
                $this->addFulfillment($data[self::FIELD_FULFILLMENT]);
            } else {
                $this->addFulfillment(new FHIRResourceReference($data[self::FIELD_FULFILLMENT]));
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
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRResourceReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRResourceReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_WHO])) {
            if ($data[self::FIELD_WHO] instanceof FHIRResourceReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRResourceReference($data[self::FIELD_WHO]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getAuthorityCodeableConcept()
    {
        return $this->authorityCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $authorityCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setAuthorityCodeableConcept(FHIRCodeableConcept $authorityCodeableConcept = null)
    {
        $this->authorityCodeableConcept = $authorityCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getAuthorityResource()
    {
        return $this->authorityResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to an authority policy that is the reason for the response. Usually
     * this is used when the order is rejected, to provide a reason for rejection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $authorityResource
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setAuthorityResource(FHIRResourceReference $authorityResource = null)
    {
        $this->authorityResource = $authorityResource;
        return $this;
    }

    /**
     * The status of the response to an order
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What this response says about the status of the original order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The status of the response to an order
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What this response says about the status of the original order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus $code
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setCode(FHIROrderOutcomeStatus $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time at which this order response was made (created/posted).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and time at which this order response was made (created/posted).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional description about the response - e.g. a text description provided by
     * a human user when making decisions about the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional description about the response - e.g. a text description provided by
     * a human user when making decisions about the order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to resources that provide details of the outcome of performing the order.
     * E.g. Diagnostic Reports in a response that is made to an order that referenced a
     * diagnostic order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to resources that provide details of the outcome of performing the order.
     * E.g. Diagnostic Reports in a response that is made to an order that referenced a
     * diagnostic order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $fulfillment
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function addFulfillment(FHIRResourceReference $fulfillment = null)
    {
        $this->fulfillment[] = $fulfillment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to resources that provide details of the outcome of performing the order.
     * E.g. Diagnostic Reports in a response that is made to an order that referenced a
     * diagnostic order.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $fulfillment
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setFulfillment(array $fulfillment = [])
    {
        $this->fulfillment = [];
        if ([] === $fulfillment) {
            return $this;
        }
        foreach($fulfillment as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addFulfillment($v);
            } else {
                $this->addFulfillment(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order. The identifiers are usually assigned by the
     * system responding to the order, but they may be provided or added to by other
     * systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order. The identifiers are usually assigned by the
     * system responding to the order, but they may be provided or added to by other
     * systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order. The identifiers are usually assigned by the
     * system responding to the order, but they may be provided or added to by other
     * systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
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
     * A reference to the order that this is in response to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the order that this is in response to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $request
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setRequest(FHIRResourceReference $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person, organization, or device credited with making the response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person, organization, or device credited with making the response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $who
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function setWho(FHIRResourceReference $who = null)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
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
                throw new \DomainException(sprintf('FHIROrderResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROrderResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIROrderResponse);
        } elseif (!is_object($type) || !($type instanceof FHIROrderResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIROrderResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authorityCodeableConcept)) {
            $type->setAuthorityCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->authorityCodeableConcept));
        }
        if (isset($children->authorityResource)) {
            $type->setAuthorityResource(FHIRResourceReference::xmlUnserialize($children->authorityResource));
        }
        if (isset($children->code)) {
            $type->setCode(FHIROrderOutcomeStatus::xmlUnserialize($children->code));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->fulfillment)) {
            foreach($children->fulfillment as $child) {
                $type->addFulfillment(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRResourceReference::xmlUnserialize($children->request));
        }
        if (isset($children->who)) {
            $type->setWho(FHIRResourceReference::xmlUnserialize($children->who));
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
            $sxe = new \SimpleXMLElement('<OrderResponse xmlns="http://hl7.org/fhir"></OrderResponse>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAuthorityCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY_CODEABLE_CONCEPT));
        }

        if (null !== ($v = $this->getAuthorityResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY_RESOURCE));
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getDate())) {
            $sxe->addAttribute(self::FIELD_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }

        if ([] !== ($vs = $this->getFulfillment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FULFILLMENT));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }

        if (null !== ($v = $this->getWho())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthorityCodeableConcept())) {
            $a[self::FIELD_AUTHORITY_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getAuthorityResource())) {
            $a[self::FIELD_AUTHORITY_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = (string)$v;
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getFulfillment())) {
            $a[self::FIELD_FULFILLMENT] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getWho())) {
            $a[self::FIELD_WHO] = $v;
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