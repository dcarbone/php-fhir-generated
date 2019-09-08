<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * The regulatory authorization of a medicinal product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductAuthorization
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductAuthorization extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION;

    const FIELD_COUNTRY = 'country';
    const FIELD_DATA_EXCLUSIVITY_PERIOD = 'dataExclusivityPeriod';
    const FIELD_DATE_OF_FIRST_AUTHORIZATION = 'dateOfFirstAuthorization';
    const FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT = '_dateOfFirstAuthorization';
    const FIELD_HOLDER = 'holder';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INTERNATIONAL_BIRTH_DATE = 'internationalBirthDate';
    const FIELD_INTERNATIONAL_BIRTH_DATE_EXT = '_internationalBirthDate';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_JURISDICTIONAL_AUTHORIZATION = 'jurisdictionalAuthorization';
    const FIELD_LEGAL_BASIS = 'legalBasis';
    const FIELD_PROCEDURE = 'procedure';
    const FIELD_REGULATOR = 'regulator';
    const FIELD_RESTORE_DATE = 'restoreDate';
    const FIELD_RESTORE_DATE_EXT = '_restoreDate';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_SUBJECT = 'subject';
    const FIELD_VALIDITY_PERIOD = 'validityPeriod';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $country = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $dataExclusivityPeriod = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $dateOfFirstAuthorization = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $holder = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $internationalBirthDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[]
     */
    private $jurisdictionalAuthorization = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $legalBasis = null;

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    private $procedure = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $regulator = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $restoreDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * The date at which the given status has become applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $statusDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $validityPeriod = null;

    /**
     * FHIRMedicinalProductAuthorization Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductAuthorization::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COUNTRY])) {
            if (is_array($data[self::FIELD_COUNTRY])) {
                foreach($data[self::FIELD_COUNTRY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountry($v);
                    } else {
                        $this->addCountry(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->addCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->addCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
        if (isset($data[self::FIELD_DATA_EXCLUSIVITY_PERIOD])) {
            if ($data[self::FIELD_DATA_EXCLUSIVITY_PERIOD] instanceof FHIRPeriod) {
                $this->setDataExclusivityPeriod($data[self::FIELD_DATA_EXCLUSIVITY_PERIOD]);
            } else {
                $this->setDataExclusivityPeriod(new FHIRPeriod($data[self::FIELD_DATA_EXCLUSIVITY_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
            $ext = (isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT]) && is_array($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT]))
                ? $data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT]
                : null;
            if ($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] instanceof FHIRDateTime) {
                $this->setDateOfFirstAuthorization($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
                $this->setDateOfFirstAuthorization(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]] + $ext));
            } else {
                $this->setDateOfFirstAuthorization(new FHIRDateTime($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]));
            }
        }
        if (isset($data[self::FIELD_HOLDER])) {
            if ($data[self::FIELD_HOLDER] instanceof FHIRReference) {
                $this->setHolder($data[self::FIELD_HOLDER]);
            } else {
                $this->setHolder(new FHIRReference($data[self::FIELD_HOLDER]));
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
        if (isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
            $ext = (isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT]) && is_array($data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT]))
                ? $data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT]
                : null;
            if ($data[self::FIELD_INTERNATIONAL_BIRTH_DATE] instanceof FHIRDateTime) {
                $this->setInternationalBirthDate($data[self::FIELD_INTERNATIONAL_BIRTH_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
                $this->setInternationalBirthDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_INTERNATIONAL_BIRTH_DATE]] + $ext));
            } else {
                $this->setInternationalBirthDate(new FHIRDateTime($data[self::FIELD_INTERNATIONAL_BIRTH_DATE]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
            if (is_array($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
                foreach($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductAuthorizationJurisdictionalAuthorization) {
                        $this->addJurisdictionalAuthorization($v);
                    } else {
                        $this->addJurisdictionalAuthorization(new FHIRMedicinalProductAuthorizationJurisdictionalAuthorization($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION] instanceof FHIRMedicinalProductAuthorizationJurisdictionalAuthorization) {
                $this->addJurisdictionalAuthorization($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION]);
            } else {
                $this->addJurisdictionalAuthorization(new FHIRMedicinalProductAuthorizationJurisdictionalAuthorization($data[self::FIELD_JURISDICTIONAL_AUTHORIZATION]));
            }
        }
        if (isset($data[self::FIELD_LEGAL_BASIS])) {
            if ($data[self::FIELD_LEGAL_BASIS] instanceof FHIRCodeableConcept) {
                $this->setLegalBasis($data[self::FIELD_LEGAL_BASIS]);
            } else {
                $this->setLegalBasis(new FHIRCodeableConcept($data[self::FIELD_LEGAL_BASIS]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if ($data[self::FIELD_PROCEDURE] instanceof FHIRMedicinalProductAuthorizationProcedure) {
                $this->setProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->setProcedure(new FHIRMedicinalProductAuthorizationProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_REGULATOR])) {
            if ($data[self::FIELD_REGULATOR] instanceof FHIRReference) {
                $this->setRegulator($data[self::FIELD_REGULATOR]);
            } else {
                $this->setRegulator(new FHIRReference($data[self::FIELD_REGULATOR]));
            }
        }
        if (isset($data[self::FIELD_RESTORE_DATE])) {
            $ext = (isset($data[self::FIELD_RESTORE_DATE_EXT]) && is_array($data[self::FIELD_RESTORE_DATE_EXT]))
                ? $data[self::FIELD_RESTORE_DATE_EXT]
                : null;
            if ($data[self::FIELD_RESTORE_DATE] instanceof FHIRDateTime) {
                $this->setRestoreDate($data[self::FIELD_RESTORE_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RESTORE_DATE])) {
                $this->setRestoreDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RESTORE_DATE]] + $ext));
            } else {
                $this->setRestoreDate(new FHIRDateTime($data[self::FIELD_RESTORE_DATE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
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
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_VALIDITY_PERIOD])) {
            if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
                $this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
            } else {
                $this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
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
     * The country in which the marketing authorization has been granted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $country
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function addCountry(FHIRCodeableConcept $country = null)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $country
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setCountry(array $country = [])
    {
        $this->country = [];
        if ([] === $country) {
            return $this;
        }
        foreach($country as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCountry($v);
            } else {
                $this->addCountry(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataExclusivityPeriod()
    {
        return $this->dataExclusivityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $dataExclusivityPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setDataExclusivityPeriod(FHIRPeriod $dataExclusivityPeriod = null)
    {
        $this->dataExclusivityPeriod = $dataExclusivityPeriod;
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
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateOfFirstAuthorization()
    {
        return $this->dateOfFirstAuthorization;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateOfFirstAuthorization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setDateOfFirstAuthorization($dateOfFirstAuthorization = null)
    {
        if (null === $dateOfFirstAuthorization) {
            $this->dateOfFirstAuthorization = null;
            return $this;
        }
        if ($dateOfFirstAuthorization instanceof FHIRDateTime) {
            $this->dateOfFirstAuthorization = $dateOfFirstAuthorization;
            return $this;
        }
        $this->dateOfFirstAuthorization = new FHIRDateTime($dateOfFirstAuthorization);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $holder
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setHolder(FHIRReference $holder = null)
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
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
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
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
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getInternationalBirthDate()
    {
        return $this->internationalBirthDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $internationalBirthDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setInternationalBirthDate($internationalBirthDate = null)
    {
        if (null === $internationalBirthDate) {
            $this->internationalBirthDate = null;
            return $this;
        }
        if ($internationalBirthDate instanceof FHIRDateTime) {
            $this->internationalBirthDate = $internationalBirthDate;
            return $this;
        }
        $this->internationalBirthDate = new FHIRDateTime($internationalBirthDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setJurisdiction(array $jurisdiction = [])
    {
        $this->jurisdiction = [];
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[]
     */
    public function getJurisdictionalAuthorization()
    {
        return $this->jurisdictionalAuthorization;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function addJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization = null)
    {
        $this->jurisdictionalAuthorization[] = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[] $jurisdictionalAuthorization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setJurisdictionalAuthorization(array $jurisdictionalAuthorization = [])
    {
        $this->jurisdictionalAuthorization = [];
        if ([] === $jurisdictionalAuthorization) {
            return $this;
        }
        foreach($jurisdictionalAuthorization as $v) {
            if ($v instanceof FHIRMedicinalProductAuthorizationJurisdictionalAuthorization) {
                $this->addJurisdictionalAuthorization($v);
            } else {
                $this->addJurisdictionalAuthorization(new FHIRMedicinalProductAuthorizationJurisdictionalAuthorization($v));
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
     * The legal framework against which this authorization is granted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalBasis()
    {
        return $this->legalBasis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $legalBasis
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setLegalBasis(FHIRCodeableConcept $legalBasis = null)
    {
        $this->legalBasis = $legalBasis;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure $procedure
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setProcedure(FHIRMedicinalProductAuthorizationProcedure $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $regulator
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setRegulator(FHIRReference $regulator = null)
    {
        $this->regulator = $regulator;
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
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRestoreDate()
    {
        return $this->restoreDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $restoreDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setRestoreDate($restoreDate = null)
    {
        if (null === $restoreDate) {
            $this->restoreDate = null;
            return $this;
        }
        if ($restoreDate instanceof FHIRDateTime) {
            $this->restoreDate = $restoreDate;
            return $this;
        }
        $this->restoreDate = new FHIRDateTime($restoreDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setStatus(FHIRCodeableConcept $status = null)
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
     * The date at which the given status has become applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * The date at which the given status has become applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $statusDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
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
     * The medicinal product that is being authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $validityPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
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
                throw new \DomainException(sprintf('FHIRMedicinalProductAuthorization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductAuthorization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRMedicinalProductAuthorization);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductAuthorization)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductAuthorization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->country)) {
            foreach($children->country as $child) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->dataExclusivityPeriod)) {
            $type->setDataExclusivityPeriod(FHIRPeriod::xmlUnserialize($children->dataExclusivityPeriod));
        }
        if (isset($attributes->dateOfFirstAuthorization)) {
            $type->setDateOfFirstAuthorization((string)$attributes->dateOfFirstAuthorization);
        }
        if (isset($children->dateOfFirstAuthorization)) {
            $type->setDateOfFirstAuthorization(FHIRDateTime::xmlUnserialize($children->dateOfFirstAuthorization));
        }
        if (isset($children->holder)) {
            $type->setHolder(FHIRReference::xmlUnserialize($children->holder));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->internationalBirthDate)) {
            $type->setInternationalBirthDate((string)$attributes->internationalBirthDate);
        }
        if (isset($children->internationalBirthDate)) {
            $type->setInternationalBirthDate(FHIRDateTime::xmlUnserialize($children->internationalBirthDate));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdictionalAuthorization)) {
            foreach($children->jurisdictionalAuthorization as $child) {
                $type->addJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization::xmlUnserialize($child));
            }
        }
        if (isset($children->legalBasis)) {
            $type->setLegalBasis(FHIRCodeableConcept::xmlUnserialize($children->legalBasis));
        }
        if (isset($children->procedure)) {
            $type->setProcedure(FHIRMedicinalProductAuthorizationProcedure::xmlUnserialize($children->procedure));
        }
        if (isset($children->regulator)) {
            $type->setRegulator(FHIRReference::xmlUnserialize($children->regulator));
        }
        if (isset($attributes->restoreDate)) {
            $type->setRestoreDate((string)$attributes->restoreDate);
        }
        if (isset($children->restoreDate)) {
            $type->setRestoreDate(FHIRDateTime::xmlUnserialize($children->restoreDate));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
        }
        if (isset($attributes->statusDate)) {
            $type->setStatusDate((string)$attributes->statusDate);
        }
        if (isset($children->statusDate)) {
            $type->setStatusDate(FHIRDateTime::xmlUnserialize($children->statusDate));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->validityPeriod)) {
            $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($children->validityPeriod));
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
            $sxe = new \SimpleXMLElement('<MedicinalProductAuthorization xmlns="http://hl7.org/fhir"></MedicinalProductAuthorization>');
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY));
            }
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_EXCLUSIVITY_PERIOD));
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            $sxe->addAttribute(self::FIELD_DATE_OF_FIRST_AUTHORIZATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_OF_FIRST_AUTHORIZATION));
            }
        }
        if (null !== ($v = $this->getHolder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HOLDER));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getInternationalBirthDate())) {
            $sxe->addAttribute(self::FIELD_INTERNATIONAL_BIRTH_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERNATIONAL_BIRTH_DATE));
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION));
            }
        }
        if ([] !== ($vs = $this->getJurisdictionalAuthorization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTIONAL_AUTHORIZATION));
            }
        }
        if (null !== ($v = $this->getLegalBasis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL_BASIS));
        }
        if (null !== ($v = $this->getProcedure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE));
        }
        if (null !== ($v = $this->getRegulator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATOR));
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $sxe->addAttribute(self::FIELD_RESTORE_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESTORE_DATE));
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
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDITY_PERIOD));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $vs;
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            $a[self::FIELD_DATA_EXCLUSIVITY_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            $a[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = (string)$v;
            $a[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT] = $v;
        }
        if (null !== ($v = $this->getHolder())) {
            $a[self::FIELD_HOLDER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getInternationalBirthDate())) {
            $a[self::FIELD_INTERNATIONAL_BIRTH_DATE] = (string)$v;
            $a[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdictionalAuthorization())) {
            $a[self::FIELD_JURISDICTIONAL_AUTHORIZATION] = $vs;
        }
        if (null !== ($v = $this->getLegalBasis())) {
            $a[self::FIELD_LEGAL_BASIS] = $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            $a[self::FIELD_PROCEDURE] = $v;
        }
        if (null !== ($v = $this->getRegulator())) {
            $a[self::FIELD_REGULATOR] = $v;
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $a[self::FIELD_RESTORE_DATE] = (string)$v;
            $a[self::FIELD_RESTORE_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a[self::FIELD_STATUS_DATE] = (string)$v;
            $a[self::FIELD_STATUS_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a[self::FIELD_VALIDITY_PERIOD] = $v;
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