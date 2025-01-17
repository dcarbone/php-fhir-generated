<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * Describes the event of a patient being administered a vaccination or a record of
 * a vaccination as reported by a patient, a clinician or another party and may
 * include vaccine reaction information and what vaccination protocol was followed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRImmunization extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_NOT_GIVEN = 'notGiven';
    public const FIELD_NOT_GIVEN_EXT = '_notGiven';
    public const FIELD_VACCINE_CODE = 'vaccineCode';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_PRIMARY_SOURCE = 'primarySource';
    public const FIELD_PRIMARY_SOURCE_EXT = '_primarySource';
    public const FIELD_REPORT_ORIGIN = 'reportOrigin';
    public const FIELD_LOCATION = 'location';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_LOT_NUMBER = 'lotNumber';
    public const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    public const FIELD_SITE = 'site';
    public const FIELD_ROUTE = 'route';
    public const FIELD_DOSE_QUANTITY = 'doseQuantity';
    public const FIELD_PRACTITIONER = 'practitioner';
    public const FIELD_NOTE = 'note';
    public const FIELD_EXPLANATION = 'explanation';
    public const FIELD_REACTION = 'reaction';
    public const FIELD_VACCINATION_PROTOCOL = 'vaccinationProtocol';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A set of codes indicating the current status of an Immunization
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes 
     */
    protected FHIRImmunizationStatusCodes $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $notGiven;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $vaccineCode;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $primarySource;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the data when the report of the immunization event is not based on
     * information from the person who administered the vaccine.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reportOrigin;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $manufacturer;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $lotNumber;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $expirationDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $site;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $route;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of vaccine product that was administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $doseQuantity;
    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Indicates who or what performed the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner[] 
     */
    protected array $practitioner;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the immunization that is not conveyed by the other
     * attributes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation 
     */
    protected FHIRImmunizationExplanation $explanation;
    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] 
     */
    protected array $reaction;
    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[] 
     */
    protected array $vaccinationProtocol;

    /** Default validation map for fields in type Immunization */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_NOT_GIVEN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VACCINE_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PRIMARY_SOURCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImmunization Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $notGiven
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $primarySource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $reportOrigin
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $manufacturer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $lotNumber
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $expirationDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $site
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $doseQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner[] $practitioner
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation $explanation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[] $vaccinationProtocol
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRImmunizationStatusCodes $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notGiven = null,
                                null|FHIRCodeableConcept $vaccineCode = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $primarySource = null,
                                null|FHIRCodeableConcept $reportOrigin = null,
                                null|FHIRReference $location = null,
                                null|FHIRReference $manufacturer = null,
                                null|string|FHIRStringPrimitive|FHIRString $lotNumber = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate = null,
                                null|FHIRCodeableConcept $site = null,
                                null|FHIRCodeableConcept $route = null,
                                null|FHIRQuantity $doseQuantity = null,
                                null|iterable $practitioner = null,
                                null|iterable $note = null,
                                null|FHIRImmunizationExplanation $explanation = null,
                                null|iterable $reaction = null,
                                null|iterable $vaccinationProtocol = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $notGiven) {
            $this->setNotGiven($notGiven);
        }
        if (null !== $vaccineCode) {
            $this->setVaccineCode($vaccineCode);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $primarySource) {
            $this->setPrimarySource($primarySource);
        }
        if (null !== $reportOrigin) {
            $this->setReportOrigin($reportOrigin);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer($manufacturer);
        }
        if (null !== $lotNumber) {
            $this->setLotNumber($lotNumber);
        }
        if (null !== $expirationDate) {
            $this->setExpirationDate($expirationDate);
        }
        if (null !== $site) {
            $this->setSite($site);
        }
        if (null !== $route) {
            $this->setRoute($route);
        }
        if (null !== $doseQuantity) {
            $this->setDoseQuantity($doseQuantity);
        }
        if (null !== $practitioner) {
            $this->setPractitioner(...$practitioner);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $explanation) {
            $this->setExplanation($explanation);
        }
        if (null !== $reaction) {
            $this->setReaction(...$reaction);
        }
        if (null !== $vaccinationProtocol) {
            $this->setVaccinationProtocol(...$vaccinationProtocol);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * A unique identifier assigned to this immunization record.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this immunization record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A set of codes indicating the current status of an Immunization
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus(): null|FHIRImmunizationStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * A set of codes indicating the current status of an Immunization
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current status of the vaccination event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRImmunizationStatusCodes $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getNotGiven(): null|FHIRBoolean
    {
        return $this->notGiven ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was or was not given.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $notGiven
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNotGiven(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notGiven,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $notGiven) {
            unset($this->notGiven);
            return $this;
        }
        if (!($notGiven instanceof FHIRBoolean)) {
            $notGiven = new FHIRBoolean(value: $notGiven);
        }
        if (null !== $valueXMLLocation) {
            $notGiven->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $notGiven->_getValueXMLLocation()) {
            $notGiven->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->notGiven = $notGiven;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode(): null|FHIRCodeableConcept
    {
        return $this->vaccineCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function setVaccineCode(null|FHIRCodeableConcept $vaccineCode): self
    {
        if (null === $vaccineCode) {
            unset($this->vaccineCode);
            return $this;
        }
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who either received or did not receive the immunization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit or admission or other contact between patient and health care provider
     * the immunization was performed as part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
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
     * Date vaccine administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        if (null !== $valueXMLLocation) {
            $date->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $date->_getValueXMLLocation()) {
            $date->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->date = $date;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource(): null|FHIRBoolean
    {
        return $this->primarySource ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication that the content of the record is based on information from the
     * person who administered the vaccine. This reflects the context under which the
     * data was originally recorded.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $primarySource
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrimarySource(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $primarySource,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $primarySource) {
            unset($this->primarySource);
            return $this;
        }
        if (!($primarySource instanceof FHIRBoolean)) {
            $primarySource = new FHIRBoolean(value: $primarySource);
        }
        if (null !== $valueXMLLocation) {
            $primarySource->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $primarySource->_getValueXMLLocation()) {
            $primarySource->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->primarySource = $primarySource;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin(): null|FHIRCodeableConcept
    {
        return $this->reportOrigin ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $reportOrigin
     * @return static
     */
    public function setReportOrigin(null|FHIRCodeableConcept $reportOrigin): self
    {
        if (null === $reportOrigin) {
            unset($this->reportOrigin);
            return $this;
        }
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getManufacturer(): null|FHIRReference
    {
        return $this->manufacturer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRReference $manufacturer): self
    {
        if (null === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getLotNumber(): null|FHIRString
    {
        return $this->lotNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $lotNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLotNumber(null|string|FHIRStringPrimitive|FHIRString $lotNumber,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lotNumber) {
            unset($this->lotNumber);
            return $this;
        }
        if (!($lotNumber instanceof FHIRString)) {
            $lotNumber = new FHIRString(value: $lotNumber);
        }
        if (null !== $valueXMLLocation) {
            $lotNumber->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lotNumber->_getValueXMLLocation()) {
            $lotNumber->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lotNumber = $lotNumber;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getExpirationDate(): null|FHIRDate
    {
        return $this->expirationDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $expirationDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExpirationDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $expirationDate) {
            unset($this->expirationDate);
            return $this;
        }
        if (!($expirationDate instanceof FHIRDate)) {
            $expirationDate = new FHIRDate(value: $expirationDate);
        }
        if (null !== $valueXMLLocation) {
            $expirationDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $expirationDate->_getValueXMLLocation()) {
            $expirationDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->expirationDate = $expirationDate;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site where vaccine was administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site): self
    {
        if (null === $site) {
            unset($this->site);
            return $this;
        }
        $this->site = $site;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the vaccine product is taken into the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route): self
    {
        if (null === $route) {
            unset($this->route);
            return $this;
        }
        $this->route = $route;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity(): null|FHIRQuantity
    {
        return $this->doseQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(null|FHIRQuantity $doseQuantity): self
    {
        if (null === $doseQuantity) {
            unset($this->doseQuantity);
            return $this;
        }
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Indicates who or what performed the event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner[]
     */
    public function getPractitioner(): array
    {
        return $this->practitioner ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner>
     */
    public function getPractitionerIterator(): iterable
    {
        if (!isset($this->practitioner) || [] === $this->practitioner) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->practitioner);
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Indicates who or what performed the event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner $practitioner
     * @return static
     */
    public function addPractitioner(FHIRImmunizationPractitioner $practitioner): self
    {
        if (!isset($this->practitioner)) {
            $this->practitioner = [];
        }
        $this->practitioner[] = $practitioner;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Indicates who or what performed the event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner ...$practitioner
     * @return static
     */
    public function setPractitioner(FHIRImmunizationPractitioner ...$practitioner): self
    {
        $this->practitioner = $practitioner;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation(): null|FHIRImmunizationExplanation
    {
        return $this->explanation ?? null;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Reasons why a vaccine was or was not administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation $explanation
     * @return static
     */
    public function setExplanation(null|FHIRImmunizationExplanation $explanation): self
    {
        if (null === $explanation) {
            unset($this->explanation);
            return $this;
        }
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction(): array
    {
        return $this->reaction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction>
     */
    public function getReactionIterator(): iterable
    {
        if (!isset($this->reaction) || [] === $this->reaction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reaction);
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
     * @return static
     */
    public function addReaction(FHIRImmunizationReaction $reaction): self
    {
        if (!isset($this->reaction)) {
            $this->reaction = [];
        }
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction ...$reaction
     * @return static
     */
    public function setReaction(FHIRImmunizationReaction ...$reaction): self
    {
        $this->reaction = $reaction;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol(): array
    {
        return $this->vaccinationProtocol ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol>
     */
    public function getVaccinationProtocolIterator(): iterable
    {
        if (!isset($this->vaccinationProtocol) || [] === $this->vaccinationProtocol) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->vaccinationProtocol);
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $vaccinationProtocol
     * @return static
     */
    public function addVaccinationProtocol(FHIRImmunizationVaccinationProtocol $vaccinationProtocol): self
    {
        if (!isset($this->vaccinationProtocol)) {
            $this->vaccinationProtocol = [];
        }
        $this->vaccinationProtocol[] = $vaccinationProtocol;
        return $this;
    }

    /**
     * Describes the event of a patient being administered a vaccination or a record of
     * a vaccination as reported by a patient, a clinician or another party and may
     * include vaccine reaction information and what vaccination protocol was followed.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol ...$vaccinationProtocol
     * @return static
     */
    public function setVaccinationProtocol(FHIRImmunizationVaccinationProtocol ...$vaccinationProtocol): self
    {
        $this->vaccinationProtocol = $vaccinationProtocol;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotGiven())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_GIVEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIMARY_SOURCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_GIVEN])) {
            $v = $this->getNotGiven();
            foreach($validationRules[self::FIELD_NOT_GIVEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_GIVEN])) {
                        $errs[self::FIELD_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORT_ORIGIN])) {
            $v = $this->getReportOrigin();
            foreach($validationRules[self::FIELD_REPORT_ORIGIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPORT_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORT_ORIGIN])) {
                        $errs[self::FIELD_REPORT_ORIGIN] = [];
                    }
                    $errs[self::FIELD_REPORT_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOT_NUMBER])) {
            $v = $this->getLotNumber();
            foreach($validationRules[self::FIELD_LOT_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOT_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOT_NUMBER])) {
                        $errs[self::FIELD_LOT_NUMBER] = [];
                    }
                    $errs[self::FIELD_LOT_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPIRATION_DATE])) {
            $v = $this->getExpirationDate();
            foreach($validationRules[self::FIELD_EXPIRATION_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPIRATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPIRATION_DATE])) {
                        $errs[self::FIELD_EXPIRATION_DATE] = [];
                    }
                    $errs[self::FIELD_EXPIRATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
            $v = $this->getDoseQuantity();
            foreach($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
                        $errs[self::FIELD_DOSE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRACTITIONER])) {
            $v = $this->getPractitioner();
            foreach($validationRules[self::FIELD_PRACTITIONER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRACTITIONER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRACTITIONER])) {
                        $errs[self::FIELD_PRACTITIONER] = [];
                    }
                    $errs[self::FIELD_PRACTITIONER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPLANATION])) {
            $v = $this->getExplanation();
            foreach($validationRules[self::FIELD_EXPLANATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPLANATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPLANATION])) {
                        $errs[self::FIELD_EXPLANATION] = [];
                    }
                    $errs[self::FIELD_EXPLANATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REACTION])) {
            $v = $this->getReaction();
            foreach($validationRules[self::FIELD_REACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REACTION])) {
                        $errs[self::FIELD_REACTION] = [];
                    }
                    $errs[self::FIELD_REACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINATION_PROTOCOL])) {
            $v = $this->getVaccinationProtocol();
            foreach($validationRules[self::FIELD_VACCINATION_PROTOCOL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VACCINATION_PROTOCOL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINATION_PROTOCOL])) {
                        $errs[self::FIELD_VACCINATION_PROTOCOL] = [];
                    }
                    $errs[self::FIELD_VACCINATION_PROTOCOL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunization
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunization)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRImmunizationStatusCodes(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRImmunizationStatusCodes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOT_GIVEN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNotGiven(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VACCINE_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setVaccineCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT === $childName) {
                $v = new FHIRReference();
                $type->setPatient(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIMARY_SOURCE === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrimarySource(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPORT_ORIGIN === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReportOrigin(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRReference();
                $type->setLocation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MANUFACTURER === $childName) {
                $v = new FHIRReference();
                $type->setManufacturer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOT_NUMBER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLotNumber(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPIRATION_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExpirationDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SITE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROUTE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setDoseQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRACTITIONER === $childName) {
                $v = new FHIRImmunizationPractitioner();
                $type->addPractitioner(FHIRImmunizationPractitioner::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPLANATION === $childName) {
                $v = new FHIRImmunizationExplanation();
                $type->setExplanation(FHIRImmunizationExplanation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REACTION === $childName) {
                $v = new FHIRImmunizationReaction();
                $type->addReaction(FHIRImmunizationReaction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VACCINATION_PROTOCOL === $childName) {
                $v = new FHIRImmunizationVaccinationProtocol();
                $type->addVaccinationProtocol(FHIRImmunizationVaccinationProtocol::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NOT_GIVEN])) {
            $pt = $type->getNotGiven();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NOT_GIVEN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNotGiven(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_NOT_GIVEN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PRIMARY_SOURCE])) {
            $pt = $type->getPrimarySource();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PRIMARY_SOURCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrimarySource(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_PRIMARY_SOURCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LOT_NUMBER])) {
            $pt = $type->getLotNumber();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LOT_NUMBER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLotNumber(new FHIRString(
                    value: (string)$attributes[self::FIELD_LOT_NUMBER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPIRATION_DATE])) {
            $pt = $type->getExpirationDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXPIRATION_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpirationDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_EXPIRATION_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('Immunization', $this->_getSourceXMLNS());
        }
        if (isset($this->notGiven) && $this->notGiven->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NOT_GIVEN, $this->notGiven->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        if (isset($this->primarySource) && $this->primarySource->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PRIMARY_SOURCE, $this->primarySource->getValue()?->_getFormattedValue());
        }
        if (isset($this->lotNumber) && $this->lotNumber->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LOT_NUMBER, $this->lotNumber->getValue()?->_getFormattedValue());
        }
        if (isset($this->expirationDate) && $this->expirationDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPIRATION_DATE, $this->expirationDate->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->notGiven) && $this->notGiven->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NOT_GIVEN);
            $this->notGiven->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->vaccineCode)) {
            $xw->startElement(self::FIELD_VACCINE_CODE);
            $this->vaccineCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->primarySource) && $this->primarySource->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PRIMARY_SOURCE);
            $this->primarySource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reportOrigin)) {
            $xw->startElement(self::FIELD_REPORT_ORIGIN);
            $this->reportOrigin->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $this->manufacturer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lotNumber) && $this->lotNumber->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LOT_NUMBER);
            $this->lotNumber->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->expirationDate) && $this->expirationDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPIRATION_DATE);
            $this->expirationDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->site)) {
            $xw->startElement(self::FIELD_SITE);
            $this->site->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->route)) {
            $xw->startElement(self::FIELD_ROUTE);
            $this->route->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseQuantity)) {
            $xw->startElement(self::FIELD_DOSE_QUANTITY);
            $this->doseQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->practitioner)) {
            foreach ($this->practitioner as $v) {
                $xw->startElement(self::FIELD_PRACTITIONER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->explanation)) {
            $xw->startElement(self::FIELD_EXPLANATION);
            $this->explanation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reaction)) {
            foreach ($this->reaction as $v) {
                $xw->startElement(self::FIELD_REACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->vaccinationProtocol)) {
            foreach ($this->vaccinationProtocol as $v) {
                $xw->startElement(self::FIELD_VACCINATION_PROTOCOL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunization
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunization)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRImmunizationStatusCodes) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRImmunizationStatusCodes(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRImmunizationStatusCodes([FHIRImmunizationStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRImmunizationStatusCodes($ext));
            } else {
                $type->setStatus(new FHIRImmunizationStatusCodes(null));
            }
        }
        if (isset($json[self::FIELD_NOT_GIVEN]) || isset($json[self::FIELD_NOT_GIVEN_EXT]) || array_key_exists(self::FIELD_NOT_GIVEN, $json) || array_key_exists(self::FIELD_NOT_GIVEN_EXT, $json)) {
            $value = $json[self::FIELD_NOT_GIVEN] ?? null;
            $ext = (isset($json[self::FIELD_NOT_GIVEN_EXT]) && is_array($json[self::FIELD_NOT_GIVEN_EXT])) ? $json[self::FIELD_NOT_GIVEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setNotGiven($value);
                } else if (is_array($value)) {
                    $type->setNotGiven(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setNotGiven(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNotGiven(new FHIRBoolean($ext));
            } else {
                $type->setNotGiven(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_VACCINE_CODE]) || array_key_exists(self::FIELD_VACCINE_CODE, $json)) {
            if ($json[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $type->setVaccineCode($json[self::FIELD_VACCINE_CODE]);
            } else {
                $type->setVaccineCode(new FHIRCodeableConcept($json[self::FIELD_VACCINE_CODE]));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            if ($json[self::FIELD_PATIENT] instanceof FHIRReference) {
                $type->setPatient($json[self::FIELD_PATIENT]);
            } else {
                $type->setPatient(new FHIRReference($json[self::FIELD_PATIENT]));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->setEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->setEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDateTime($ext));
            } else {
                $type->setDate(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_PRIMARY_SOURCE]) || isset($json[self::FIELD_PRIMARY_SOURCE_EXT]) || array_key_exists(self::FIELD_PRIMARY_SOURCE, $json) || array_key_exists(self::FIELD_PRIMARY_SOURCE_EXT, $json)) {
            $value = $json[self::FIELD_PRIMARY_SOURCE] ?? null;
            $ext = (isset($json[self::FIELD_PRIMARY_SOURCE_EXT]) && is_array($json[self::FIELD_PRIMARY_SOURCE_EXT])) ? $json[self::FIELD_PRIMARY_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setPrimarySource($value);
                } else if (is_array($value)) {
                    $type->setPrimarySource(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setPrimarySource(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPrimarySource(new FHIRBoolean($ext));
            } else {
                $type->setPrimarySource(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_REPORT_ORIGIN]) || array_key_exists(self::FIELD_REPORT_ORIGIN, $json)) {
            if ($json[self::FIELD_REPORT_ORIGIN] instanceof FHIRCodeableConcept) {
                $type->setReportOrigin($json[self::FIELD_REPORT_ORIGIN]);
            } else {
                $type->setReportOrigin(new FHIRCodeableConcept($json[self::FIELD_REPORT_ORIGIN]));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            if ($json[self::FIELD_LOCATION] instanceof FHIRReference) {
                $type->setLocation($json[self::FIELD_LOCATION]);
            } else {
                $type->setLocation(new FHIRReference($json[self::FIELD_LOCATION]));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            if ($json[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $type->setManufacturer($json[self::FIELD_MANUFACTURER]);
            } else {
                $type->setManufacturer(new FHIRReference($json[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($json[self::FIELD_LOT_NUMBER]) || isset($json[self::FIELD_LOT_NUMBER_EXT]) || array_key_exists(self::FIELD_LOT_NUMBER, $json) || array_key_exists(self::FIELD_LOT_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_LOT_NUMBER] ?? null;
            $ext = (isset($json[self::FIELD_LOT_NUMBER_EXT]) && is_array($json[self::FIELD_LOT_NUMBER_EXT])) ? $json[self::FIELD_LOT_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setLotNumber($value);
                } else if (is_array($value)) {
                    $type->setLotNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setLotNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLotNumber(new FHIRString($ext));
            } else {
                $type->setLotNumber(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_EXPIRATION_DATE]) || isset($json[self::FIELD_EXPIRATION_DATE_EXT]) || array_key_exists(self::FIELD_EXPIRATION_DATE, $json) || array_key_exists(self::FIELD_EXPIRATION_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EXPIRATION_DATE] ?? null;
            $ext = (isset($json[self::FIELD_EXPIRATION_DATE_EXT]) && is_array($json[self::FIELD_EXPIRATION_DATE_EXT])) ? $json[self::FIELD_EXPIRATION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setExpirationDate($value);
                } else if (is_array($value)) {
                    $type->setExpirationDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setExpirationDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExpirationDate(new FHIRDate($ext));
            } else {
                $type->setExpirationDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_SITE]) || array_key_exists(self::FIELD_SITE, $json)) {
            if ($json[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $type->setSite($json[self::FIELD_SITE]);
            } else {
                $type->setSite(new FHIRCodeableConcept($json[self::FIELD_SITE]));
            }
        }
        if (isset($json[self::FIELD_ROUTE]) || array_key_exists(self::FIELD_ROUTE, $json)) {
            if ($json[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $type->setRoute($json[self::FIELD_ROUTE]);
            } else {
                $type->setRoute(new FHIRCodeableConcept($json[self::FIELD_ROUTE]));
            }
        }
        if (isset($json[self::FIELD_DOSE_QUANTITY]) || array_key_exists(self::FIELD_DOSE_QUANTITY, $json)) {
            if ($json[self::FIELD_DOSE_QUANTITY] instanceof FHIRQuantity) {
                $type->setDoseQuantity($json[self::FIELD_DOSE_QUANTITY]);
            } else {
                $type->setDoseQuantity(new FHIRQuantity($json[self::FIELD_DOSE_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_PRACTITIONER]) || array_key_exists(self::FIELD_PRACTITIONER, $json)) {
            if (is_array($json[self::FIELD_PRACTITIONER])) {
                foreach($json[self::FIELD_PRACTITIONER] as $v) {
                    if ($v instanceof FHIRImmunizationPractitioner) {
                        $type->addPractitioner($v);
                    } else {
                        $type->addPractitioner(new FHIRImmunizationPractitioner($v));
                    }
                }
            } elseif ($json[self::FIELD_PRACTITIONER] instanceof FHIRImmunizationPractitioner) {
                $type->addPractitioner($json[self::FIELD_PRACTITIONER]);
            } else {
                $type->addPractitioner(new FHIRImmunizationPractitioner($json[self::FIELD_PRACTITIONER]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        if (isset($json[self::FIELD_EXPLANATION]) || array_key_exists(self::FIELD_EXPLANATION, $json)) {
            if ($json[self::FIELD_EXPLANATION] instanceof FHIRImmunizationExplanation) {
                $type->setExplanation($json[self::FIELD_EXPLANATION]);
            } else {
                $type->setExplanation(new FHIRImmunizationExplanation($json[self::FIELD_EXPLANATION]));
            }
        }
        if (isset($json[self::FIELD_REACTION]) || array_key_exists(self::FIELD_REACTION, $json)) {
            if (is_array($json[self::FIELD_REACTION])) {
                foreach($json[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRImmunizationReaction) {
                        $type->addReaction($v);
                    } else {
                        $type->addReaction(new FHIRImmunizationReaction($v));
                    }
                }
            } elseif ($json[self::FIELD_REACTION] instanceof FHIRImmunizationReaction) {
                $type->addReaction($json[self::FIELD_REACTION]);
            } else {
                $type->addReaction(new FHIRImmunizationReaction($json[self::FIELD_REACTION]));
            }
        }
        if (isset($json[self::FIELD_VACCINATION_PROTOCOL]) || array_key_exists(self::FIELD_VACCINATION_PROTOCOL, $json)) {
            if (is_array($json[self::FIELD_VACCINATION_PROTOCOL])) {
                foreach($json[self::FIELD_VACCINATION_PROTOCOL] as $v) {
                    if ($v instanceof FHIRImmunizationVaccinationProtocol) {
                        $type->addVaccinationProtocol($v);
                    } else {
                        $type->addVaccinationProtocol(new FHIRImmunizationVaccinationProtocol($v));
                    }
                }
            } elseif ($json[self::FIELD_VACCINATION_PROTOCOL] instanceof FHIRImmunizationVaccinationProtocol) {
                $type->addVaccinationProtocol($json[self::FIELD_VACCINATION_PROTOCOL]);
            } else {
                $type->addVaccinationProtocol(new FHIRImmunizationVaccinationProtocol($json[self::FIELD_VACCINATION_PROTOCOL]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->notGiven)) {
            if (null !== ($val = $this->notGiven->getValue())) {
                $out->notGiven = $val;
            }
            $ext = $this->notGiven->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_notGiven = $ext;
            }
        }
        if (isset($this->vaccineCode)) {
            $out->vaccineCode = $this->vaccineCode;
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->primarySource)) {
            if (null !== ($val = $this->primarySource->getValue())) {
                $out->primarySource = $val;
            }
            $ext = $this->primarySource->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_primarySource = $ext;
            }
        }
        if (isset($this->reportOrigin)) {
            $out->reportOrigin = $this->reportOrigin;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->manufacturer)) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->lotNumber)) {
            if (null !== ($val = $this->lotNumber->getValue())) {
                $out->lotNumber = $val;
            }
            $ext = $this->lotNumber->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lotNumber = $ext;
            }
        }
        if (isset($this->expirationDate)) {
            if (null !== ($val = $this->expirationDate->getValue())) {
                $out->expirationDate = $val;
            }
            $ext = $this->expirationDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_expirationDate = $ext;
            }
        }
        if (isset($this->site)) {
            $out->site = $this->site;
        }
        if (isset($this->route)) {
            $out->route = $this->route;
        }
        if (isset($this->doseQuantity)) {
            $out->doseQuantity = $this->doseQuantity;
        }
        if (isset($this->practitioner) && [] !== $this->practitioner) {
            $out->practitioner = $this->practitioner;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->explanation)) {
            $out->explanation = $this->explanation;
        }
        if (isset($this->reaction) && [] !== $this->reaction) {
            $out->reaction = $this->reaction;
        }
        if (isset($this->vaccinationProtocol) && [] !== $this->vaccinationProtocol) {
            $out->vaccinationProtocol = $this->vaccinationProtocol;
        }
        $out->resourceType = $this->_getResourceType();
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