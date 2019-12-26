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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The regulatory authorization of a medicinal product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductAuthorization
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $country = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $dataExclusivityPeriod = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $dateOfFirstAuthorization = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $holder = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $internationalBirthDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[]
     */
    protected $jurisdictionalAuthorization = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $legalBasis = null;

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    protected $procedure = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $regulator = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $restoreDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * The date at which the given status has become applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $statusDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $validityPeriod = null;

    /**
     * Validation map for fields in type MedicinalProductAuthorization
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]) || isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT])) {
            if (isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
                $value = $data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT]) && is_array($data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT])) {
                $ext = $data[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateOfFirstAuthorization($value);
                } else if (is_array($value)) {
                    $this->setDateOfFirstAuthorization(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateOfFirstAuthorization(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateOfFirstAuthorization(new FHIRDateTime($ext));
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
        if (isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE]) || isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT])) {
            if (isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
                $value = $data[self::FIELD_INTERNATIONAL_BIRTH_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT]) && is_array($data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT])) {
                $ext = $data[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setInternationalBirthDate($value);
                } else if (is_array($value)) {
                    $this->setInternationalBirthDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setInternationalBirthDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setInternationalBirthDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_RESTORE_DATE]) || isset($data[self::FIELD_RESTORE_DATE_EXT])) {
            if (isset($data[self::FIELD_RESTORE_DATE])) {
                $value = $data[self::FIELD_RESTORE_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RESTORE_DATE_EXT]) && is_array($data[self::FIELD_RESTORE_DATE_EXT])) {
                $ext = $data[self::FIELD_RESTORE_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRestoreDate($value);
                } else if (is_array($value)) {
                    $this->setRestoreDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRestoreDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRestoreDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
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
        return "<MedicinalProductAuthorization{$xmlns}></MedicinalProductAuthorization>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $country
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $country
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getDataExclusivityPeriod()
    {
        return $this->dataExclusivityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $dataExclusivityPeriod
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the first authorization was granted by a Medicines Regulatory
     * Agency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $dateOfFirstAuthorization
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $holder
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
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
     * Business identifier for the marketing authorization, as assigned by a regulator.
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
     * Business identifier for the marketing authorization, as assigned by a regulator.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of first marketing authorization for a company's new medicinal product in
     * any country in the World.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $internationalBirthDate
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[] $jurisdictionalAuthorization
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalBasis()
    {
        return $this->legalBasis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $legalBasis
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure $procedure
     * @return static
     */
    public function setProcedure(FHIRMedicinalProductAuthorizationProcedure $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $regulator
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when a suspended the marketing or the marketing authorization of the
     * product is anticipated to be restored.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $restoreDate
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
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
     * The status of the marketing authorization.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status has become applicable.
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
     * The date at which the given status has become applicable.
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
     * The medicinal product that is being authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
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
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA_EXCLUSIVITY_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHolder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HOLDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInternationalBirthDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERNATIONAL_BIRTH_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdictionalAuthorization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTIONAL_AUTHORIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLegalBasis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEGAL_BASIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRegulator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGULATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRestoreDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESTORE_DATE] = $fieldErrs;
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
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDITY_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_EXCLUSIVITY_PERIOD])) {
            $v = $this->getDataExclusivityPeriod();
            foreach($validationRules[self::FIELD_DATA_EXCLUSIVITY_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_DATA_EXCLUSIVITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_EXCLUSIVITY_PERIOD])) {
                        $errs[self::FIELD_DATA_EXCLUSIVITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_DATA_EXCLUSIVITY_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
            $v = $this->getDateOfFirstAuthorization();
            foreach($validationRules[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_DATE_OF_FIRST_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
                        $errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOLDER])) {
            $v = $this->getHolder();
            foreach($validationRules[self::FIELD_HOLDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOLDER])) {
                        $errs[self::FIELD_HOLDER] = [];
                    }
                    $errs[self::FIELD_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
            $v = $this->getInternationalBirthDate();
            foreach($validationRules[self::FIELD_INTERNATIONAL_BIRTH_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_INTERNATIONAL_BIRTH_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
                        $errs[self::FIELD_INTERNATIONAL_BIRTH_DATE] = [];
                    }
                    $errs[self::FIELD_INTERNATIONAL_BIRTH_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
            $v = $this->getJurisdictionalAuthorization();
            foreach($validationRules[self::FIELD_JURISDICTIONAL_AUTHORIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_JURISDICTIONAL_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
                        $errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_BASIS])) {
            $v = $this->getLegalBasis();
            foreach($validationRules[self::FIELD_LEGAL_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_LEGAL_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_BASIS])) {
                        $errs[self::FIELD_LEGAL_BASIS] = [];
                    }
                    $errs[self::FIELD_LEGAL_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCEDURE])) {
            $v = $this->getProcedure();
            foreach($validationRules[self::FIELD_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCEDURE])) {
                        $errs[self::FIELD_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATOR])) {
            $v = $this->getRegulator();
            foreach($validationRules[self::FIELD_REGULATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_REGULATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATOR])) {
                        $errs[self::FIELD_REGULATOR] = [];
                    }
                    $errs[self::FIELD_REGULATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESTORE_DATE])) {
            $v = $this->getRestoreDate();
            foreach($validationRules[self::FIELD_RESTORE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_RESTORE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESTORE_DATE])) {
                        $errs[self::FIELD_RESTORE_DATE] = [];
                    }
                    $errs[self::FIELD_RESTORE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
            $v = $this->getValidityPeriod();
            foreach($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION, self::FIELD_VALIDITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
                        $errs[self::FIELD_VALIDITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
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
                throw new \DomainException(sprintf('FHIRMedicinalProductAuthorization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductAuthorization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductAuthorization;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductAuthorization)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductAuthorization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization or null, %s seen.',
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
        if (isset($children->country)) {
            foreach($children->country as $child) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->dataExclusivityPeriod)) {
            $type->setDataExclusivityPeriod(FHIRPeriod::xmlUnserialize($children->dataExclusivityPeriod));
        }
        if (isset($children->dateOfFirstAuthorization)) {
            $type->setDateOfFirstAuthorization(FHIRDateTime::xmlUnserialize($children->dateOfFirstAuthorization));
        }
        if (isset($attributes->dateOfFirstAuthorization)) {
            $pt = $type->getDateOfFirstAuthorization();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateOfFirstAuthorization);
            } else {
                $type->setDateOfFirstAuthorization((string)$attributes->dateOfFirstAuthorization);
            }
        }
        if (isset($children->holder)) {
            $type->setHolder(FHIRReference::xmlUnserialize($children->holder));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->internationalBirthDate)) {
            $type->setInternationalBirthDate(FHIRDateTime::xmlUnserialize($children->internationalBirthDate));
        }
        if (isset($attributes->internationalBirthDate)) {
            $pt = $type->getInternationalBirthDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->internationalBirthDate);
            } else {
                $type->setInternationalBirthDate((string)$attributes->internationalBirthDate);
            }
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
        if (isset($children->restoreDate)) {
            $type->setRestoreDate(FHIRDateTime::xmlUnserialize($children->restoreDate));
        }
        if (isset($attributes->restoreDate)) {
            $pt = $type->getRestoreDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->restoreDate);
            } else {
                $type->setRestoreDate((string)$attributes->restoreDate);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_EXCLUSIVITY_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_OF_FIRST_AUTHORIZATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHolder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HOLDER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getInternationalBirthDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTERNATIONAL_BIRTH_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getJurisdictionalAuthorization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTIONAL_AUTHORIZATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLegalBasis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL_BASIS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProcedure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRegulator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRestoreDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESTORE_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDITY_PERIOD, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_COUNTRY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COUNTRY][] = $v;
            }
        }
        if (null !== ($v = $this->getDataExclusivityPeriod())) {
            $a[self::FIELD_DATA_EXCLUSIVITY_PERIOD] = $v;
        }
        if (null !== ($v = $this->getDateOfFirstAuthorization())) {
            $a[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getHolder())) {
            $a[self::FIELD_HOLDER] = $v;
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
        if (null !== ($v = $this->getInternationalBirthDate())) {
            $a[self::FIELD_INTERNATIONAL_BIRTH_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_JURISDICTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdictionalAuthorization())) {
            $a[self::FIELD_JURISDICTIONAL_AUTHORIZATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_JURISDICTIONAL_AUTHORIZATION][] = $v;
            }
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
            $a[self::FIELD_RESTORE_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RESTORE_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a[self::FIELD_VALIDITY_PERIOD] = $v;
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