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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRImmunizationStatusCodes;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImmunization
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRImmunization extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION;
    const FIELD_DOSE_QUANTITY = 'doseQuantity';
    const FIELD_EDUCATION = 'education';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EXPIRATION_DATE = 'expirationDate';
    const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    const FIELD_FUNDING_SOURCE = 'fundingSource';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IS_SUBPOTENT = 'isSubpotent';
    const FIELD_IS_SUBPOTENT_EXT = '_isSubpotent';
    const FIELD_LOCATION = 'location';
    const FIELD_LOT_NUMBER = 'lotNumber';
    const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_NOTE = 'note';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_STRING = 'occurrenceString';
    const FIELD_OCCURRENCE_STRING_EXT = '_occurrenceString';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRIMARY_SOURCE = 'primarySource';
    const FIELD_PRIMARY_SOURCE_EXT = '_primarySource';
    const FIELD_PROGRAM_ELIGIBILITY = 'programEligibility';
    const FIELD_PROTOCOL_APPLIED = 'protocolApplied';
    const FIELD_REACTION = 'reaction';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_RECORDED = 'recorded';
    const FIELD_RECORDED_EXT = '_recorded';
    const FIELD_REPORT_ORIGIN = 'reportOrigin';
    const FIELD_ROUTE = 'route';
    const FIELD_SITE = 'site';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_SUBPOTENT_REASON = 'subpotentReason';
    const FIELD_VACCINE_CODE = 'vaccineCode';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $doseQuantity = null;

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Educational material presented to the patient (or guardian) at the time of
     * vaccine administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[]
     */
    protected $education = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $expirationDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $fundingSource = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $isSubpotent = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $lotNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $manufacturer = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $occurrenceDateTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $occurrenceString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
     */
    protected $performer = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $primarySource = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $programEligibility = [];

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
     */
    protected $protocolApplied = [];

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    protected $reaction = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reasons why the vaccine was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $recorded = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $reportOrigin = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $route = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $site = null;

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRImmunizationStatusCodes
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $statusReason = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $subpotentReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $vaccineCode = null;

    /**
     * Validation map for fields in type Immunization
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRImmunization Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOSE_QUANTITY])) {
            if ($data[self::FIELD_DOSE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDoseQuantity($data[self::FIELD_DOSE_QUANTITY]);
            } else {
                $this->setDoseQuantity(new FHIRQuantity($data[self::FIELD_DOSE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_EDUCATION])) {
            if (is_array($data[self::FIELD_EDUCATION])) {
                foreach($data[self::FIELD_EDUCATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationEducation) {
                        $this->addEducation($v);
                    } else {
                        $this->addEducation(new FHIRImmunizationEducation($v));
                    }
                }
            } else if ($data[self::FIELD_EDUCATION] instanceof FHIRImmunizationEducation) {
                $this->addEducation($data[self::FIELD_EDUCATION]);
            } else {
                $this->addEducation(new FHIRImmunizationEducation($data[self::FIELD_EDUCATION]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_DATE]) || isset($data[self::FIELD_EXPIRATION_DATE_EXT])) {
            if (isset($data[self::FIELD_EXPIRATION_DATE])) {
                $value = $data[self::FIELD_EXPIRATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT])) {
                $ext = $data[self::FIELD_EXPIRATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setExpirationDate($value);
                } else if (is_array($value)) {
                    $this->setExpirationDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setExpirationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExpirationDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_FUNDING_SOURCE])) {
            if ($data[self::FIELD_FUNDING_SOURCE] instanceof FHIRCodeableConcept) {
                $this->setFundingSource($data[self::FIELD_FUNDING_SOURCE]);
            } else {
                $this->setFundingSource(new FHIRCodeableConcept($data[self::FIELD_FUNDING_SOURCE]));
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
        if (isset($data[self::FIELD_IS_SUBPOTENT]) || isset($data[self::FIELD_IS_SUBPOTENT_EXT])) {
            if (isset($data[self::FIELD_IS_SUBPOTENT])) {
                $value = $data[self::FIELD_IS_SUBPOTENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_SUBPOTENT_EXT]) && is_array($data[self::FIELD_IS_SUBPOTENT_EXT])) {
                $ext = $data[self::FIELD_IS_SUBPOTENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsSubpotent($value);
                } else if (is_array($value)) {
                    $this->setIsSubpotent(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsSubpotent(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsSubpotent(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_LOT_NUMBER]) || isset($data[self::FIELD_LOT_NUMBER_EXT])) {
            if (isset($data[self::FIELD_LOT_NUMBER])) {
                $value = $data[self::FIELD_LOT_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT])) {
                $ext = $data[self::FIELD_LOT_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLotNumber($value);
                } else if (is_array($value)) {
                    $this->setLotNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLotNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
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
        if (isset($data[self::FIELD_OCCURRENCE_STRING]) || isset($data[self::FIELD_OCCURRENCE_STRING_EXT])) {
            if (isset($data[self::FIELD_OCCURRENCE_STRING])) {
                $value = $data[self::FIELD_OCCURRENCE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OCCURRENCE_STRING_EXT]) && is_array($data[self::FIELD_OCCURRENCE_STRING_EXT])) {
                $ext = $data[self::FIELD_OCCURRENCE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOccurrenceString($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOccurrenceString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationPerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRImmunizationPerformer($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRImmunizationPerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRImmunizationPerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_SOURCE]) || isset($data[self::FIELD_PRIMARY_SOURCE_EXT])) {
            if (isset($data[self::FIELD_PRIMARY_SOURCE])) {
                $value = $data[self::FIELD_PRIMARY_SOURCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIMARY_SOURCE_EXT]) && is_array($data[self::FIELD_PRIMARY_SOURCE_EXT])) {
                $ext = $data[self::FIELD_PRIMARY_SOURCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPrimarySource($value);
                } else if (is_array($value)) {
                    $this->setPrimarySource(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPrimarySource(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPrimarySource(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
            if (is_array($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
                foreach($data[self::FIELD_PROGRAM_ELIGIBILITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProgramEligibility($v);
                    } else {
                        $this->addProgramEligibility(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PROGRAM_ELIGIBILITY] instanceof FHIRCodeableConcept) {
                $this->addProgramEligibility($data[self::FIELD_PROGRAM_ELIGIBILITY]);
            } else {
                $this->addProgramEligibility(new FHIRCodeableConcept($data[self::FIELD_PROGRAM_ELIGIBILITY]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL_APPLIED])) {
            if (is_array($data[self::FIELD_PROTOCOL_APPLIED])) {
                foreach($data[self::FIELD_PROTOCOL_APPLIED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationProtocolApplied) {
                        $this->addProtocolApplied($v);
                    } else {
                        $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($v));
                    }
                }
            } else if ($data[self::FIELD_PROTOCOL_APPLIED] instanceof FHIRImmunizationProtocolApplied) {
                $this->addProtocolApplied($data[self::FIELD_PROTOCOL_APPLIED]);
            } else {
                $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($data[self::FIELD_PROTOCOL_APPLIED]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRImmunizationReaction($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRImmunizationReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($data[self::FIELD_REACTION]));
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
        if (isset($data[self::FIELD_RECORDED]) || isset($data[self::FIELD_RECORDED_EXT])) {
            if (isset($data[self::FIELD_RECORDED])) {
                $value = $data[self::FIELD_RECORDED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT])) {
                $ext = $data[self::FIELD_RECORDED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecorded($value);
                } else if (is_array($value)) {
                    $this->setRecorded(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecorded(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRecorded(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_REPORT_ORIGIN])) {
            if ($data[self::FIELD_REPORT_ORIGIN] instanceof FHIRCodeableConcept) {
                $this->setReportOrigin($data[self::FIELD_REPORT_ORIGIN]);
            } else {
                $this->setReportOrigin(new FHIRCodeableConcept($data[self::FIELD_REPORT_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRImmunizationStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRImmunizationStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRImmunizationStatusCodes([FHIRImmunizationStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRImmunizationStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_SUBPOTENT_REASON])) {
            if (is_array($data[self::FIELD_SUBPOTENT_REASON])) {
                foreach($data[self::FIELD_SUBPOTENT_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubpotentReason($v);
                    } else {
                        $this->addSubpotentReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUBPOTENT_REASON] instanceof FHIRCodeableConcept) {
                $this->addSubpotentReason($data[self::FIELD_SUBPOTENT_REASON]);
            } else {
                $this->addSubpotentReason(new FHIRCodeableConcept($data[self::FIELD_SUBPOTENT_REASON]));
            }
        }
        if (isset($data[self::FIELD_VACCINE_CODE])) {
            if ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->setVaccineCode($data[self::FIELD_VACCINE_CODE]);
            } else {
                $this->setVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
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
        return "<Immunization{$xmlns}></Immunization>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(FHIRQuantity $doseQuantity = null)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Educational material presented to the patient (or guardian) at the time of
     * vaccine administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[]
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Educational material presented to the patient (or guardian) at the time of
     * vaccine administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation $education
     * @return static
     */
    public function addEducation(FHIRImmunizationEducation $education = null)
    {
        $this->education[] = $education;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Educational material presented to the patient (or guardian) at the time of
     * vaccine administration.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[] $education
     * @return static
     */
    public function setEducation(array $education = [])
    {
        $this->education = [];
        if ([] === $education) {
            return $this;
        }
        foreach($education as $v) {
            if ($v instanceof FHIRImmunizationEducation) {
                $this->addEducation($v);
            } else {
                $this->addEducation(new FHIRImmunizationEducation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $expirationDate
     * @return static
     */
    public function setExpirationDate($expirationDate = null)
    {
        if (null === $expirationDate) {
            $this->expirationDate = null;
            return $this;
        }
        if ($expirationDate instanceof FHIRDate) {
            $this->expirationDate = $expirationDate;
            return $this;
        }
        $this->expirationDate = new FHIRDate($expirationDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $fundingSource
     * @return static
     */
    public function setFundingSource(FHIRCodeableConcept $fundingSource = null)
    {
        $this->fundingSource = $fundingSource;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIsSubpotent()
    {
        return $this->isSubpotent;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isSubpotent
     * @return static
     */
    public function setIsSubpotent($isSubpotent = null)
    {
        if (null === $isSubpotent) {
            $this->isSubpotent = null;
            return $this;
        }
        if ($isSubpotent instanceof FHIRBoolean) {
            $this->isSubpotent = $isSubpotent;
            return $this;
        }
        $this->isSubpotent = new FHIRBoolean($isSubpotent);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $lotNumber
     * @return static
     */
    public function setLotNumber($lotNumber = null)
    {
        if (null === $lotNumber) {
            $this->lotNumber = null;
            return $this;
        }
        if ($lotNumber instanceof FHIRString) {
            $this->lotNumber = $lotNumber;
            return $this;
        }
        $this->lotNumber = new FHIRString($lotNumber);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
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
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
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
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $occurrenceString
     * @return static
     */
    public function setOccurrenceString($occurrenceString = null)
    {
        if (null === $occurrenceString) {
            $this->occurrenceString = null;
            return $this;
        }
        if ($occurrenceString instanceof FHIRString) {
            $this->occurrenceString = $occurrenceString;
            return $this;
        }
        $this->occurrenceString = new FHIRString($occurrenceString);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer $performer
     * @return static
     */
    public function addPerformer(FHIRImmunizationPerformer $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[] $performer
     * @return static
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRImmunizationPerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRImmunizationPerformer($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $primarySource
     * @return static
     */
    public function setPrimarySource($primarySource = null)
    {
        if (null === $primarySource) {
            $this->primarySource = null;
            return $this;
        }
        if ($primarySource instanceof FHIRBoolean) {
            $this->primarySource = $primarySource;
            return $this;
        }
        $this->primarySource = new FHIRBoolean($primarySource);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramEligibility()
    {
        return $this->programEligibility;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $programEligibility
     * @return static
     */
    public function addProgramEligibility(FHIRCodeableConcept $programEligibility = null)
    {
        $this->programEligibility[] = $programEligibility;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $programEligibility
     * @return static
     */
    public function setProgramEligibility(array $programEligibility = [])
    {
        $this->programEligibility = [];
        if ([] === $programEligibility) {
            return $this;
        }
        foreach($programEligibility as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProgramEligibility($v);
            } else {
                $this->addProgramEligibility(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
     */
    public function getProtocolApplied()
    {
        return $this->protocolApplied;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied $protocolApplied
     * @return static
     */
    public function addProtocolApplied(FHIRImmunizationProtocolApplied $protocolApplied = null)
    {
        $this->protocolApplied[] = $protocolApplied;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[] $protocolApplied
     * @return static
     */
    public function setProtocolApplied(array $protocolApplied = [])
    {
        $this->protocolApplied = [];
        if ([] === $protocolApplied) {
            return $this;
        }
        foreach($protocolApplied as $v) {
            if ($v instanceof FHIRImmunizationProtocolApplied) {
                $this->addProtocolApplied($v);
            } else {
                $this->addProtocolApplied(new FHIRImmunizationProtocolApplied($v));
            }
        }
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return static
     */
    public function addReaction(FHIRImmunizationReaction $reaction = null)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @return static
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRImmunizationReaction) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRImmunizationReaction($v));
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
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * Reasons why the vaccine was administered.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
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
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $recorded
     * @return static
     */
    public function setRecorded($recorded = null)
    {
        if (null === $recorded) {
            $this->recorded = null;
            return $this;
        }
        if ($recorded instanceof FHIRDateTime) {
            $this->recorded = $recorded;
            return $this;
        }
        $this->recorded = new FHIRDateTime($recorded);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin()
    {
        return $this->reportOrigin;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reportOrigin
     * @return static
     */
    public function setReportOrigin(FHIRCodeableConcept $reportOrigin = null)
    {
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRImmunizationStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRImmunizationStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubpotentReason()
    {
        return $this->subpotentReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subpotentReason
     * @return static
     */
    public function addSubpotentReason(FHIRCodeableConcept $subpotentReason = null)
    {
        $this->subpotentReason[] = $subpotentReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $subpotentReason
     * @return static
     */
    public function setSubpotentReason(array $subpotentReason = [])
    {
        $this->subpotentReason = [];
        if ([] === $subpotentReason) {
            return $this;
        }
        foreach($subpotentReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubpotentReason($v);
            } else {
                $this->addSubpotentReason(new FHIRCodeableConcept($v));
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
     * Vaccine that was administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        $this->vaccineCode = $vaccineCode;
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
        if (null !== ($v = $this->getDoseQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEducation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EDUCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPIRATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FUNDING_SOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_SUBPOTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLotNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOT_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
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
        if (null !== ($v = $this->getOccurrenceString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIMARY_SOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRAM_ELIGIBILITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROTOCOL_APPLIED, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REACTION, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORT_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBPOTENT_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
            $v = $this->getDoseQuantity();
            foreach($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_DOSE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
                        $errs[self::FIELD_DOSE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EDUCATION])) {
            $v = $this->getEducation();
            foreach($validationRules[self::FIELD_EDUCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_EDUCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EDUCATION])) {
                        $errs[self::FIELD_EDUCATION] = [];
                    }
                    $errs[self::FIELD_EDUCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FUNDING_SOURCE])) {
            $v = $this->getFundingSource();
            foreach($validationRules[self::FIELD_FUNDING_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_FUNDING_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNDING_SOURCE])) {
                        $errs[self::FIELD_FUNDING_SOURCE] = [];
                    }
                    $errs[self::FIELD_FUNDING_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_SUBPOTENT])) {
            $v = $this->getIsSubpotent();
            foreach($validationRules[self::FIELD_IS_SUBPOTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_IS_SUBPOTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_SUBPOTENT])) {
                        $errs[self::FIELD_IS_SUBPOTENT] = [];
                    }
                    $errs[self::FIELD_IS_SUBPOTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOT_NUMBER])) {
            $v = $this->getLotNumber();
            foreach($validationRules[self::FIELD_LOT_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_LOT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOT_NUMBER])) {
                        $errs[self::FIELD_LOT_NUMBER] = [];
                    }
                    $errs[self::FIELD_LOT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_NOTE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_STRING])) {
            $v = $this->getOccurrenceString();
            foreach($validationRules[self::FIELD_OCCURRENCE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_OCCURRENCE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_STRING])) {
                        $errs[self::FIELD_OCCURRENCE_STRING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRAM_ELIGIBILITY])) {
            $v = $this->getProgramEligibility();
            foreach($validationRules[self::FIELD_PROGRAM_ELIGIBILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PROGRAM_ELIGIBILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRAM_ELIGIBILITY])) {
                        $errs[self::FIELD_PROGRAM_ELIGIBILITY] = [];
                    }
                    $errs[self::FIELD_PROGRAM_ELIGIBILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL_APPLIED])) {
            $v = $this->getProtocolApplied();
            foreach($validationRules[self::FIELD_PROTOCOL_APPLIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_PROTOCOL_APPLIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL_APPLIED])) {
                        $errs[self::FIELD_PROTOCOL_APPLIED] = [];
                    }
                    $errs[self::FIELD_PROTOCOL_APPLIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REACTION])) {
            $v = $this->getReaction();
            foreach($validationRules[self::FIELD_REACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REACTION])) {
                        $errs[self::FIELD_REACTION] = [];
                    }
                    $errs[self::FIELD_REACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED])) {
            $v = $this->getRecorded();
            foreach($validationRules[self::FIELD_RECORDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED])) {
                        $errs[self::FIELD_RECORDED] = [];
                    }
                    $errs[self::FIELD_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORT_ORIGIN])) {
            $v = $this->getReportOrigin();
            foreach($validationRules[self::FIELD_REPORT_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_REPORT_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORT_ORIGIN])) {
                        $errs[self::FIELD_REPORT_ORIGIN] = [];
                    }
                    $errs[self::FIELD_REPORT_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBPOTENT_REASON])) {
            $v = $this->getSubpotentReason();
            foreach($validationRules[self::FIELD_SUBPOTENT_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_SUBPOTENT_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBPOTENT_REASON])) {
                        $errs[self::FIELD_SUBPOTENT_REASON] = [];
                    }
                    $errs[self::FIELD_SUBPOTENT_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization
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
                throw new \DomainException(sprintf('FHIRImmunization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImmunization;
        } elseif (!is_object($type) || !($type instanceof FHIRImmunization)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRImmunization or null, %s seen.',
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
        if (isset($children->doseQuantity)) {
            $type->setDoseQuantity(FHIRQuantity::xmlUnserialize($children->doseQuantity));
        }
        if (isset($children->education)) {
            foreach($children->education as $child) {
                $type->addEducation(FHIRImmunizationEducation::xmlUnserialize($child));
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->expirationDate)) {
            $type->setExpirationDate(FHIRDate::xmlUnserialize($children->expirationDate));
        }
        if (isset($attributes->expirationDate)) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->expirationDate);
            } else {
                $type->setExpirationDate((string)$attributes->expirationDate);
            }
        }
        if (isset($children->fundingSource)) {
            $type->setFundingSource(FHIRCodeableConcept::xmlUnserialize($children->fundingSource));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->isSubpotent)) {
            $type->setIsSubpotent(FHIRBoolean::xmlUnserialize($children->isSubpotent));
        }
        if (isset($attributes->isSubpotent)) {
            $pt = $type->getIsSubpotent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isSubpotent);
            } else {
                $type->setIsSubpotent((string)$attributes->isSubpotent);
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($attributes->lotNumber)) {
            $pt = $type->getLotNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lotNumber);
            } else {
                $type->setLotNumber((string)$attributes->lotNumber);
            }
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRReference::xmlUnserialize($children->manufacturer));
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
        if (isset($children->occurrenceString)) {
            $type->setOccurrenceString(FHIRString::xmlUnserialize($children->occurrenceString));
        }
        if (isset($attributes->occurrenceString)) {
            $pt = $type->getOccurrenceString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->occurrenceString);
            } else {
                $type->setOccurrenceString((string)$attributes->occurrenceString);
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRImmunizationPerformer::xmlUnserialize($child));
            }
        }
        if (isset($children->primarySource)) {
            $type->setPrimarySource(FHIRBoolean::xmlUnserialize($children->primarySource));
        }
        if (isset($attributes->primarySource)) {
            $pt = $type->getPrimarySource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->primarySource);
            } else {
                $type->setPrimarySource((string)$attributes->primarySource);
            }
        }
        if (isset($children->programEligibility)) {
            foreach($children->programEligibility as $child) {
                $type->addProgramEligibility(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->protocolApplied)) {
            foreach($children->protocolApplied as $child) {
                $type->addProtocolApplied(FHIRImmunizationProtocolApplied::xmlUnserialize($child));
            }
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRImmunizationReaction::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->recorded)) {
            $type->setRecorded(FHIRDateTime::xmlUnserialize($children->recorded));
        }
        if (isset($attributes->recorded)) {
            $pt = $type->getRecorded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->recorded);
            } else {
                $type->setRecorded((string)$attributes->recorded);
            }
        }
        if (isset($children->reportOrigin)) {
            $type->setReportOrigin(FHIRCodeableConcept::xmlUnserialize($children->reportOrigin));
        }
        if (isset($children->route)) {
            $type->setRoute(FHIRCodeableConcept::xmlUnserialize($children->route));
        }
        if (isset($children->site)) {
            $type->setSite(FHIRCodeableConcept::xmlUnserialize($children->site));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRImmunizationStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($children->statusReason));
        }
        if (isset($children->subpotentReason)) {
            foreach($children->subpotentReason as $child) {
                $type->addSubpotentReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->vaccineCode)) {
            $type->setVaccineCode(FHIRCodeableConcept::xmlUnserialize($children->vaccineCode));
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
        if (null !== ($v = $this->getDoseQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEducation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EDUCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFundingSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FUNDING_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_SUBPOTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOT_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getOccurrenceString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIMARY_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRAM_ELIGIBILITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL_APPLIED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORT_ORIGIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBPOTENT_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDoseQuantity())) {
            $a[self::FIELD_DOSE_QUANTITY] = $v;
        }
        if ([] !== ($vs = $this->getEducation())) {
            $a[self::FIELD_EDUCATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EDUCATION][] = $v;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a[self::FIELD_EXPIRATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_EXPIRATION_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            $a[self::FIELD_FUNDING_SOURCE] = $v;
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
        if (null !== ($v = $this->getIsSubpotent())) {
            $a[self::FIELD_IS_SUBPOTENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_SUBPOTENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_LOT_NUMBER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v;
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
        if (null !== ($v = $this->getOccurrenceString())) {
            $a[self::FIELD_OCCURRENCE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_OCCURRENCE_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER][] = $v;
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $a[self::FIELD_PRIMARY_SOURCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_PRIMARY_SOURCE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            $a[self::FIELD_PROGRAM_ELIGIBILITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROGRAM_ELIGIBILITY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            $a[self::FIELD_PROTOCOL_APPLIED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROTOCOL_APPLIED][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REACTION][] = $v;
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
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $a[self::FIELD_RECORDED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RECORDED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $a[self::FIELD_REPORT_ORIGIN] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a[self::FIELD_ROUTE] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a[self::FIELD_SITE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRImmunizationStatusCodes::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRImmunizationStatusCodes::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            $a[self::FIELD_SUBPOTENT_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBPOTENT_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a[self::FIELD_VACCINE_CODE] = $v;
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