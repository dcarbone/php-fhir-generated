<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * The CoverageEligibilityRequest provides patient and insurance coverage
 * information to an insurer for them to respond, in the form of an
 * CoverageEligibilityResponse, with information regarding whether the stated
 * coverage is valid and in-force and optionally to provide the insurance details
 * of the policy.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCoverageEligibilityRequest
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCoverageEligibilityRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST;

    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_ENTERER = 'enterer';
    const FIELD_FACILITY = 'facility';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INSURER = 'insurer';
    const FIELD_ITEM = 'item';
    const FIELD_PATIENT = 'patient';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PROVIDER = 'provider';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_SERVICED_DATE = 'servicedDate';
    const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    const FIELD_STATUS = 'status';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when this resource was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $enterer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services are intended to be provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $facility = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance[]
     */
    private $insurance = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the recipient of the
     * request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $insurer = null;

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Service categories or billable services for which benefit details and/or an
     * authorization prior to service delivery may be required by the payor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem[]
     */
    private $item = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * When the requestor expects the processor to complete processing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $priority = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $provider = null;

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose[]
     */
    private $purpose = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $servicedDate = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $servicedPeriod = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo[]
     */
    private $supportingInfo = [];

    /**
     * FHIRCoverageEligibilityRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_FACILITY])) {
            if ($data[self::FIELD_FACILITY] instanceof FHIRReference) {
                $this->setFacility($data[self::FIELD_FACILITY]);
            } else {
                $this->setFacility(new FHIRReference($data[self::FIELD_FACILITY]));
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
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIRCoverageEligibilityRequestInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRCoverageEligibilityRequestInsurance($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIRCoverageEligibilityRequestInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRCoverageEligibilityRequestInsurance($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRCoverageEligibilityRequestItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRCoverageEligibilityRequestItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRCoverageEligibilityRequestItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRCoverageEligibilityRequestItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            if (is_array($data[self::FIELD_PURPOSE])) {
                foreach($data[self::FIELD_PURPOSE] as $v) {
                    if ($v instanceof FHIREligibilityRequestPurpose) {
                        $this->addPurpose($v);
                    } else {
                        $this->addPurpose(new FHIREligibilityRequestPurpose($v));
                    }
                }
            } else if ($data[self::FIELD_PURPOSE] instanceof FHIREligibilityRequestPurpose) {
                $this->addPurpose($data[self::FIELD_PURPOSE]);
            } else {
                $this->addPurpose(new FHIREligibilityRequestPurpose($data[self::FIELD_PURPOSE]));
            }
        }
        if (isset($data[self::FIELD_SERVICED_DATE])) {
            $ext = (isset($data[self::FIELD_SERVICED_DATE_EXT]) && is_array($data[self::FIELD_SERVICED_DATE_EXT]))
                ? $data[self::FIELD_SERVICED_DATE_EXT]
                : null;
            if ($data[self::FIELD_SERVICED_DATE] instanceof FHIRDate) {
                $this->setServicedDate($data[self::FIELD_SERVICED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERVICED_DATE])) {
                $this->setServicedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_SERVICED_DATE]] + $ext));
            } else {
                $this->setServicedDate(new FHIRDate($data[self::FIELD_SERVICED_DATE]));
            }
        }
        if (isset($data[self::FIELD_SERVICED_PERIOD])) {
            if ($data[self::FIELD_SERVICED_PERIOD] instanceof FHIRPeriod) {
                $this->setServicedPeriod($data[self::FIELD_SERVICED_PERIOD]);
            } else {
                $this->setServicedPeriod(new FHIRPeriod($data[self::FIELD_SERVICED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRFinancialResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFO])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if ($v instanceof FHIRCoverageEligibilityRequestSupportingInfo) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRCoverageEligibilityRequestSupportingInfo($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRCoverageEligibilityRequestSupportingInfo) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRCoverageEligibilityRequestSupportingInfo($data[self::FIELD_SUPPORTING_INFO]));
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when this resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when this resource was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $enterer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services are intended to be provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services are intended to be provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $facility
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setFacility(FHIRReference $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
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
     * A unique identifier assigned to this coverage eligiblity request.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
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
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance $insurance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function addInsurance(FHIRCoverageEligibilityRequestInsurance $insurance = null)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Financial instruments for reimbursement for the health care products and
     * services.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance[] $insurance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRCoverageEligibilityRequestInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRCoverageEligibilityRequestInsurance($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the recipient of the
     * request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who issued the coverage in question and is the recipient of the
     * request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $insurer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Service categories or billable services for which benefit details and/or an
     * authorization prior to service delivery may be required by the payor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Service categories or billable services for which benefit details and/or an
     * authorization prior to service delivery may be required by the payor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function addItem(FHIRCoverageEligibilityRequestItem $item = null)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Service categories or billable services for which benefit details and/or an
     * authorization prior to service delivery may be required by the payor.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem[] $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRCoverageEligibilityRequestItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRCoverageEligibilityRequestItem($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * The party who is the beneficiary of the supplied coverage and for whom
     * eligibility is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * When the requestor expects the processor to complete processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * When the requestor expects the processor to complete processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose $purpose
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function addPurpose(FHIREligibilityRequestPurpose $purpose = null)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A code specifying the types of information being requested.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Code to specify whether requesting: prior authorization requirements for some
     * service categories or billing codes; benefits for coverages specified or
     * discovered; discovery and return of coverages for the patient; and/or validation
     * that the specified coverage is in-force at the date/period specified or 'now' if
     * not specified.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIREligibilityRequestPurpose[] $purpose
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setPurpose(array $purpose = [])
    {
        $this->purpose = [];
        if ([] === $purpose) {
            return $this;
        }
        foreach($purpose as $v) {
            if ($v instanceof FHIREligibilityRequestPurpose) {
                $this->addPurpose($v);
            } else {
                $this->addPurpose(new FHIREligibilityRequestPurpose($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $servicedDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setServicedDate($servicedDate = null)
    {
        if (null === $servicedDate) {
            $this->servicedDate = null;
            return $this;
        }
        if ($servicedDate instanceof FHIRDate) {
            $this->servicedDate = $servicedDate;
            return $this;
        }
        $this->servicedDate = new FHIRDate($servicedDate);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the enclosed suite of services were performed or
     * completed. (choose any one of serviced*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $servicedPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setServicedPeriod(FHIRPeriod $servicedPeriod = null)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo $supportingInfo
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function addSupportingInfo(FHIRCoverageEligibilityRequestSupportingInfo $supportingInfo = null)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * The CoverageEligibilityRequest provides patient and insurance coverage
     * information to an insurer for them to respond, in the form of an
     * CoverageEligibilityResponse, with information regarding whether the stated
     * coverage is valid and in-force and optionally to provide the insurance details
     * of the policy.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo[] $supportingInfo
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     */
    public function setSupportingInfo(array $supportingInfo = [])
    {
        $this->supportingInfo = [];
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            if ($v instanceof FHIRCoverageEligibilityRequestSupportingInfo) {
                $this->addSupportingInfo($v);
            } else {
                $this->addSupportingInfo(new FHIRCoverageEligibilityRequestSupportingInfo($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
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
                throw new \DomainException(sprintf('FHIRCoverageEligibilityRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageEligibilityRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRCoverageEligibilityRequest);
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageEligibilityRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageEligibilityRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($children->enterer)) {
            $type->setEnterer(FHIRReference::xmlUnserialize($children->enterer));
        }
        if (isset($children->facility)) {
            $type->setFacility(FHIRReference::xmlUnserialize($children->facility));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIRCoverageEligibilityRequestInsurance::xmlUnserialize($child));
            }
        }
        if (isset($children->insurer)) {
            $type->setInsurer(FHIRReference::xmlUnserialize($children->insurer));
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRCoverageEligibilityRequestItem::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRCodeableConcept::xmlUnserialize($children->priority));
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($children->purpose)) {
            foreach($children->purpose as $child) {
                $type->addPurpose(FHIREligibilityRequestPurpose::xmlUnserialize($child));
            }
        }
        if (isset($attributes->servicedDate)) {
            $type->setServicedDate((string)$attributes->servicedDate);
        }
        if (isset($children->servicedDate)) {
            $type->setServicedDate(FHIRDate::xmlUnserialize($children->servicedDate));
        }
        if (isset($children->servicedPeriod)) {
            $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($children->servicedPeriod));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->supportingInfo)) {
            foreach($children->supportingInfo as $child) {
                $type->addSupportingInfo(FHIRCoverageEligibilityRequestSupportingInfo::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement('<CoverageEligibilityRequest xmlns="http://hl7.org/fhir"></CoverageEligibilityRequest>');
        }
        if (null !== ($v = $this->getCreated())) {
            $sxe->addAttribute(self::FIELD_CREATED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED));
            }
        }
        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERER));
        }
        if (null !== ($v = $this->getFacility())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACILITY));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE));
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSURER));
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY));
        }
        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDER));
        }
        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE));
            }
        }
        if (null !== ($v = $this->getServicedDate())) {
            $sxe->addAttribute(self::FIELD_SERVICED_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICED_DATE));
            }
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICED_PERIOD));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFO));
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
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if (null !== ($v = $this->getFacility())) {
            $a[self::FIELD_FACILITY] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = $vs;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a[self::FIELD_INSURER] = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if ([] !== ($vs = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $vs;
        }
        if (null !== ($v = $this->getServicedDate())) {
            $a[self::FIELD_SERVICED_DATE] = (string)$v;
            $a[self::FIELD_SERVICED_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $a[self::FIELD_SERVICED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $a[self::FIELD_SUPPORTING_INFO] = $vs;
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