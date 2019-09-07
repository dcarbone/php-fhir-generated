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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImmunization
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
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
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_SUBPOTENT_REASON = 'subpotentReason';
    const FIELD_VACCINE_CODE = 'vaccineCode';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $doseQuantity = null;

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Educational material presented to the patient (or guardian) at the time of
     * vaccine administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[]
     */
    private $education = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $encounter = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $expirationDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $fundingSource = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $isSubpotent = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $lotNumber = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $manufacturer = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $occurrenceString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Indicates who performed the immunization event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
     */
    private $performer = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $primarySource = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $programEligibility = [];

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * The protocol (set of recommendations) being followed by the provider who
     * administered the dose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
     */
    private $protocolApplied = [];

    /**
     * Describes the event of a patient being administered a vaccine or a record of an
     * immunization as reported by a patient, a clinician or another party.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    private $reaction = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reasons why the vaccine was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $recorded = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $reportOrigin = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $route = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $site = null;

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    private $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $statusReason = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $subpotentReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $vaccineCode = null;

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
        if (isset($data[self::FIELD_EXPIRATION_DATE])) {
            $ext = (isset($data[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($data[self::FIELD_EXPIRATION_DATE_EXT]))
                ? $data[self::FIELD_EXPIRATION_DATE_EXT]
                : null;
            if ($data[self::FIELD_EXPIRATION_DATE] instanceof FHIRDate) {
                $this->setExpirationDate($data[self::FIELD_EXPIRATION_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPIRATION_DATE])) {
                $this->setExpirationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_EXPIRATION_DATE]] + $ext));
            } else {
                $this->setExpirationDate(new FHIRDate($data[self::FIELD_EXPIRATION_DATE]));
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
        if (isset($data[self::FIELD_IS_SUBPOTENT])) {
            $ext = (isset($data[self::FIELD_IS_SUBPOTENT_EXT]) && is_array($data[self::FIELD_IS_SUBPOTENT_EXT]))
                ? $data[self::FIELD_IS_SUBPOTENT_EXT]
                : null;
            if ($data[self::FIELD_IS_SUBPOTENT] instanceof FHIRBoolean) {
                $this->setIsSubpotent($data[self::FIELD_IS_SUBPOTENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_IS_SUBPOTENT])) {
                $this->setIsSubpotent(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_SUBPOTENT]] + $ext));
            } else {
                $this->setIsSubpotent(new FHIRBoolean($data[self::FIELD_IS_SUBPOTENT]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_LOT_NUMBER])) {
            $ext = (isset($data[self::FIELD_LOT_NUMBER_EXT]) && is_array($data[self::FIELD_LOT_NUMBER_EXT]))
                ? $data[self::FIELD_LOT_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_LOT_NUMBER] instanceof FHIRString) {
                $this->setLotNumber($data[self::FIELD_LOT_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOT_NUMBER])) {
                $this->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LOT_NUMBER]] + $ext));
            } else {
                $this->setLotNumber(new FHIRString($data[self::FIELD_LOT_NUMBER]));
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
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]))
                ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_OCCURRENCE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setOccurrenceDateTime($data[self::FIELD_OCCURRENCE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
                $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_OCCURRENCE_DATE_TIME]] + $ext));
            } else {
                $this->setOccurrenceDateTime(new FHIRDateTime($data[self::FIELD_OCCURRENCE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_STRING])) {
            $ext = (isset($data[self::FIELD_OCCURRENCE_STRING_EXT]) && is_array($data[self::FIELD_OCCURRENCE_STRING_EXT]))
                ? $data[self::FIELD_OCCURRENCE_STRING_EXT]
                : null;
            if ($data[self::FIELD_OCCURRENCE_STRING] instanceof FHIRString) {
                $this->setOccurrenceString($data[self::FIELD_OCCURRENCE_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_OCCURRENCE_STRING])) {
                $this->setOccurrenceString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OCCURRENCE_STRING]] + $ext));
            } else {
                $this->setOccurrenceString(new FHIRString($data[self::FIELD_OCCURRENCE_STRING]));
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
        if (isset($data[self::FIELD_PRIMARY_SOURCE])) {
            $ext = (isset($data[self::FIELD_PRIMARY_SOURCE_EXT]) && is_array($data[self::FIELD_PRIMARY_SOURCE_EXT]))
                ? $data[self::FIELD_PRIMARY_SOURCE_EXT]
                : null;
            if ($data[self::FIELD_PRIMARY_SOURCE] instanceof FHIRBoolean) {
                $this->setPrimarySource($data[self::FIELD_PRIMARY_SOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRIMARY_SOURCE])) {
                $this->setPrimarySource(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PRIMARY_SOURCE]] + $ext));
            } else {
                $this->setPrimarySource(new FHIRBoolean($data[self::FIELD_PRIMARY_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
            if (is_array($data[self::FIELD_PROGRAM_ELIGIBILITY])) {
                foreach($data[self::FIELD_PROGRAM_ELIGIBILITY] as $v) {
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
        if (isset($data[self::FIELD_RECORDED])) {
            $ext = (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT]))
                ? $data[self::FIELD_RECORDED_EXT]
                : null;
            if ($data[self::FIELD_RECORDED] instanceof FHIRDateTime) {
                $this->setRecorded($data[self::FIELD_RECORDED]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECORDED])) {
                $this->setRecorded(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RECORDED]] + $ext));
            } else {
                $this->setRecorded(new FHIRDateTime($data[self::FIELD_RECORDED]));
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
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRImmunizationStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRImmunizationStatusCodes($data[self::FIELD_STATUS]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $doseQuantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation $education
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation[] $education
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $expirationDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFundingSource()
    {
        return $this->fundingSource;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the source of the vaccine actually administered. This may be different
     * than the patient eligibility (e.g. the patient may be eligible for a publically
     * purchased vaccine but due to inventory issues, vaccine purchased with private
     * funds was actually administered).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fundingSource
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
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
     * A unique identifier assigned to this immunization record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * A unique identifier assigned to this immunization record.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSubpotent()
    {
        return $this->isSubpotent;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indication if a dose is considered to be subpotent. By default, a dose should be
     * considered to be potent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $isSubpotent
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $lotNumber
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOccurrenceString()
    {
        return $this->occurrenceString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date vaccine administered or was to be administered. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $occurrenceString
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
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
     * The patient who either received or did not receive the immunization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer $performer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer[] $performer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $primarySource
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramEligibility()
    {
        return $this->programEligibility;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $programEligibility
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a patient's eligibility for a funding program.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $programEligibility
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied $protocolApplied
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied[] $protocolApplied
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reasons why the vaccine was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reasons why the vaccine was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reasons why the vaccine was administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Condition, Observation or DiagnosticReport that supports why the immunization
     * was administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $reasonReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date the occurrence of the immunization was first captured in the record -
     * potentially significantly after the occurrence of the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $recorded
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin()
    {
        return $this->reportOrigin;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reportOrigin
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $site
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A set of codes indicating the current status of an Immunization.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the current status of the immunization event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason the immunization event was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubpotentReason()
    {
        return $this->subpotentReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subpotentReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason why a dose is considered to be subpotent.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $subpotentReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization
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
                throw new \DomainException(sprintf('FHIRImmunization::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunization::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRImmunization);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunization)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunization::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->expirationDate)) {
            $type->setExpirationDate((string)$attributes->expirationDate);
        }
        if (isset($children->expirationDate)) {
            $type->setExpirationDate(FHIRDate::xmlUnserialize($children->expirationDate));
        }
        if (isset($children->fundingSource)) {
            $type->setFundingSource(FHIRCodeableConcept::xmlUnserialize($children->fundingSource));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->isSubpotent)) {
            $type->setIsSubpotent((string)$attributes->isSubpotent);
        }
        if (isset($children->isSubpotent)) {
            $type->setIsSubpotent(FHIRBoolean::xmlUnserialize($children->isSubpotent));
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($attributes->lotNumber)) {
            $type->setLotNumber((string)$attributes->lotNumber);
        }
        if (isset($children->lotNumber)) {
            $type->setLotNumber(FHIRString::xmlUnserialize($children->lotNumber));
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRReference::xmlUnserialize($children->manufacturer));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->occurrenceDateTime)) {
            $type->setOccurrenceDateTime((string)$attributes->occurrenceDateTime);
        }
        if (isset($children->occurrenceDateTime)) {
            $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($children->occurrenceDateTime));
        }
        if (isset($attributes->occurrenceString)) {
            $type->setOccurrenceString((string)$attributes->occurrenceString);
        }
        if (isset($children->occurrenceString)) {
            $type->setOccurrenceString(FHIRString::xmlUnserialize($children->occurrenceString));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRImmunizationPerformer::xmlUnserialize($child));
            }
        }
        if (isset($attributes->primarySource)) {
            $type->setPrimarySource((string)$attributes->primarySource);
        }
        if (isset($children->primarySource)) {
            $type->setPrimarySource(FHIRBoolean::xmlUnserialize($children->primarySource));
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
        if (isset($attributes->recorded)) {
            $type->setRecorded((string)$attributes->recorded);
        }
        if (isset($children->recorded)) {
            $type->setRecorded(FHIRDateTime::xmlUnserialize($children->recorded));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Immunization xmlns="http://hl7.org/fhir"></Immunization>');
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_QUANTITY));
        }
        if ([] !== ($vs = $this->getEducation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EDUCATION));
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER));
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $sxe->addAttribute(self::FIELD_EXPIRATION_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_DATE));
            }
        }
        if (null !== ($v = $this->getFundingSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FUNDING_SOURCE));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            $sxe->addAttribute(self::FIELD_IS_SUBPOTENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_IS_SUBPOTENT));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $sxe->addAttribute(self::FIELD_LOT_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOT_NUMBER));
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $sxe->addAttribute(self::FIELD_OCCURRENCE_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            $sxe->addAttribute(self::FIELD_OCCURRENCE_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_STRING));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER));
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $sxe->addAttribute(self::FIELD_PRIMARY_SOURCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRIMARY_SOURCE));
            }
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRAM_ELIGIBILITY));
            }
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL_APPLIED));
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION));
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE));
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $sxe->addAttribute(self::FIELD_RECORDED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED));
            }
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORT_ORIGIN));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE));
        }
        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON));
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBPOTENT_REASON));
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_CODE));
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
            $a[self::FIELD_EDUCATION] = $vs;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a[self::FIELD_EXPIRATION_DATE] = (string)$v;
            $a[self::FIELD_EXPIRATION_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getFundingSource())) {
            $a[self::FIELD_FUNDING_SOURCE] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getIsSubpotent())) {
            $a[self::FIELD_IS_SUBPOTENT] = (string)$v;
            $a[self::FIELD_IS_SUBPOTENT_EXT] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a[self::FIELD_LOT_NUMBER] = (string)$v;
            $a[self::FIELD_LOT_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a[self::FIELD_OCCURRENCE_DATE_TIME] = (string)$v;
            $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOccurrenceString())) {
            $a[self::FIELD_OCCURRENCE_STRING] = (string)$v;
            $a[self::FIELD_OCCURRENCE_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $vs;
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $a[self::FIELD_PRIMARY_SOURCE] = (string)$v;
            $a[self::FIELD_PRIMARY_SOURCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getProgramEligibility())) {
            $a[self::FIELD_PROGRAM_ELIGIBILITY] = $vs;
        }
        if ([] !== ($vs = $this->getProtocolApplied())) {
            $a[self::FIELD_PROTOCOL_APPLIED] = $vs;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = $vs;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $vs;
        }
        if (null !== ($v = $this->getRecorded())) {
            $a[self::FIELD_RECORDED] = (string)$v;
            $a[self::FIELD_RECORDED_EXT] = $v;
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
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
        }
        if ([] !== ($vs = $this->getSubpotentReason())) {
            $a[self::FIELD_SUBPOTENT_REASON] = $vs;
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a[self::FIELD_VACCINE_CODE] = $v;
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