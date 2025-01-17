<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Immunization event information.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRImmunization extends FHIRResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_VACCINE_TYPE = 'vaccineType';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_REFUSED_INDICATOR = 'refusedIndicator';
    public const FIELD_REFUSED_INDICATOR_EXT = '_refusedIndicator';
    public const FIELD_REPORTED = 'reported';
    public const FIELD_REPORTED_EXT = '_reported';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_REQUESTER = 'requester';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOT_NUMBER = 'lotNumber';
    public const FIELD_LOT_NUMBER_EXT = '_lotNumber';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_EXPIRATION_DATE_EXT = '_expirationDate';
    public const FIELD_SITE = 'site';
    public const FIELD_ROUTE = 'route';
    public const FIELD_DOSE_QUANTITY = 'doseQuantity';
    public const FIELD_EXPLANATION = 'explanation';
    public const FIELD_REACTION = 'reaction';
    public const FIELD_VACCINATION_PROTOCOL = 'vaccinationProtocol';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this adverse reaction record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $vaccineType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient to whom the vaccine was to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $subject;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was refused.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $refusedIndicator;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $reported;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $performer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $requester;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $manufacturer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $location;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $lotNumber;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $doseQuantity;
    /**
     * Immunization event information.
     *
     * Reasons why a vaccine was administered or refused.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation 
     */
    protected FHIRImmunizationExplanation $explanation;
    /**
     * Immunization event information.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] 
     */
    protected array $reaction;
    /**
     * Immunization event information.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[] 
     */
    protected array $vaccinationProtocol;

    /** Default validation map for fields in type Immunization */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_DATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VACCINE_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_REFUSED_INDICATOR => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_REPORTED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImmunization Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $vaccineType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $refusedIndicator
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $reported
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $requester
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $manufacturer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $lotNumber
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $expirationDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $site
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $doseQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation $explanation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[] $reaction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[] $vaccinationProtocol
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $identifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|FHIRCodeableConcept $vaccineType = null,
                                null|FHIRResourceReference $subject = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $refusedIndicator = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reported = null,
                                null|FHIRResourceReference $performer = null,
                                null|FHIRResourceReference $requester = null,
                                null|FHIRResourceReference $manufacturer = null,
                                null|FHIRResourceReference $location = null,
                                null|string|FHIRStringPrimitive|FHIRString $lotNumber = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $expirationDate = null,
                                null|FHIRCodeableConcept $site = null,
                                null|FHIRCodeableConcept $route = null,
                                null|FHIRQuantity $doseQuantity = null,
                                null|FHIRImmunizationExplanation $explanation = null,
                                null|iterable $reaction = null,
                                null|iterable $vaccinationProtocol = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $vaccineType) {
            $this->setVaccineType($vaccineType);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $refusedIndicator) {
            $this->setRefusedIndicator($refusedIndicator);
        }
        if (null !== $reported) {
            $this->setReported($reported);
        }
        if (null !== $performer) {
            $this->setPerformer($performer);
        }
        if (null !== $requester) {
            $this->setRequester($requester);
        }
        if (null !== $manufacturer) {
            $this->setManufacturer($manufacturer);
        }
        if (null !== $location) {
            $this->setLocation($location);
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
     * A unique identifier assigned to this adverse reaction record.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
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
     * A unique identifier assigned to this adverse reaction record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A unique identifier assigned to this adverse reaction record.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine administered or was to be administered.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineType(): null|FHIRCodeableConcept
    {
        return $this->vaccineType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that was administered or was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return static
     */
    public function setVaccineType(null|FHIRCodeableConcept $vaccineType): self
    {
        if (null === $vaccineType) {
            unset($this->vaccineType);
            return $this;
        }
        $this->vaccineType = $vaccineType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient to whom the vaccine was to be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient to whom the vaccine was to be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was refused.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getRefusedIndicator(): null|FHIRBoolean
    {
        return $this->refusedIndicator ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the vaccination was refused.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $refusedIndicator
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRefusedIndicator(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $refusedIndicator,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $refusedIndicator) {
            unset($this->refusedIndicator);
            return $this;
        }
        if (!($refusedIndicator instanceof FHIRBoolean)) {
            $refusedIndicator = new FHIRBoolean(value: $refusedIndicator);
        }
        if (null !== $valueXMLLocation) {
            $refusedIndicator->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $refusedIndicator->_getValueXMLLocation()) {
            $refusedIndicator->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->refusedIndicator = $refusedIndicator;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getReported(): null|FHIRBoolean
    {
        return $this->reported ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if this administration was reported rather than directly administered.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $reported
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReported(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reported,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $reported) {
            unset($this->reported);
            return $this;
        }
        if (!($reported instanceof FHIRBoolean)) {
            $reported = new FHIRBoolean(value: $reported);
        }
        if (null !== $valueXMLLocation) {
            $reported->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $reported->_getValueXMLLocation()) {
            $reported->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->reported = $reported;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getPerformer(): null|FHIRResourceReference
    {
        return $this->performer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who administered the vaccine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRResourceReference $performer): self
    {
        if (null === $performer) {
            unset($this->performer);
            return $this;
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getRequester(): null|FHIRResourceReference
    {
        return $this->requester ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinician who ordered the vaccination.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $requester
     * @return static
     */
    public function setRequester(null|FHIRResourceReference $requester): self
    {
        if (null === $requester) {
            unset($this->requester);
            return $this;
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Name of vaccine manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getManufacturer(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRResourceReference $manufacturer): self
    {
        if (null === $manufacturer) {
            unset($this->manufacturer);
            return $this;
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service delivery location where the vaccine administration occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getLocation(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @return static
     */
    public function setLocation(null|FHIRResourceReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getLotNumber(): null|FHIRString
    {
        return $this->lotNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lot number of the vaccine product.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $lotNumber
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
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getExpirationDate(): null|FHIRDate
    {
        return $this->expirationDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date vaccine batch expires.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $expirationDate
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $site
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $route
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $doseQuantity
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
     * Immunization event information.
     *
     * Reasons why a vaccine was administered or refused.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation(): null|FHIRImmunizationExplanation
    {
        return $this->explanation ?? null;
    }

    /**
     * Immunization event information.
     *
     * Reasons why a vaccine was administered or refused.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation $explanation
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
     * Immunization event information.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction(): array
    {
        return $this->reaction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction>
     */
    public function getReactionIterator(): iterable
    {
        if (!isset($this->reaction) || [] === $this->reaction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reaction);
    }

    /**
     * Immunization event information.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction $reaction
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
     * Immunization event information.
     *
     * Categorical data indicating that an adverse event is associated in time to an
     * immunization.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction ...$reaction
     * @return static
     */
    public function setReaction(FHIRImmunizationReaction ...$reaction): self
    {
        $this->reaction = $reaction;
        return $this;
    }

    /**
     * Immunization event information.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol(): array
    {
        return $this->vaccinationProtocol ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol>
     */
    public function getVaccinationProtocolIterator(): iterable
    {
        if (!isset($this->vaccinationProtocol) || [] === $this->vaccinationProtocol) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->vaccinationProtocol);
    }

    /**
     * Immunization event information.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $vaccinationProtocol
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
     * Immunization event information.
     *
     * Contains information about the protocol(s) under which the vaccine was
     * administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol ...$vaccinationProtocol
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
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVaccineType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRefusedIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFUSED_INDICATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReported())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_VACCINE_TYPE])) {
            $v = $this->getVaccineType();
            foreach($validationRules[self::FIELD_VACCINE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VACCINE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_TYPE])) {
                        $errs[self::FIELD_VACCINE_TYPE] = [];
                    }
                    $errs[self::FIELD_VACCINE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFUSED_INDICATOR])) {
            $v = $this->getRefusedIndicator();
            foreach($validationRules[self::FIELD_REFUSED_INDICATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFUSED_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFUSED_INDICATOR])) {
                        $errs[self::FIELD_REFUSED_INDICATOR] = [];
                    }
                    $errs[self::FIELD_REFUSED_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED])) {
            $v = $this->getReported();
            foreach($validationRules[self::FIELD_REPORTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPORTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED])) {
                        $errs[self::FIELD_REPORTED] = [];
                    }
                    $errs[self::FIELD_REPORTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
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
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VACCINE_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setVaccineType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT === $childName) {
                $v = new FHIRResourceReference();
                $type->setSubject(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFUSED_INDICATOR === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRefusedIndicator(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPORTED === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setReported(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERFORMER === $childName) {
                $v = new FHIRResourceReference();
                $type->setPerformer(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUESTER === $childName) {
                $v = new FHIRResourceReference();
                $type->setRequester(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MANUFACTURER === $childName) {
                $v = new FHIRResourceReference();
                $type->setManufacturer(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRResourceReference();
                $type->setLocation(FHIRResourceReference::xmlUnserialize($n, $v, $config));
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
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
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
        if (isset($attributes[self::FIELD_REFUSED_INDICATOR])) {
            $pt = $type->getRefusedIndicator();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REFUSED_INDICATOR]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRefusedIndicator(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_REFUSED_INDICATOR],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REPORTED])) {
            $pt = $type->getReported();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REPORTED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setReported(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_REPORTED],
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
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        if (isset($this->refusedIndicator) && $this->refusedIndicator->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REFUSED_INDICATOR, $this->refusedIndicator->getValue()?->_getFormattedValue());
        }
        if (isset($this->reported) && $this->reported->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REPORTED, $this->reported->getValue()?->_getFormattedValue());
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
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->vaccineType)) {
            $xw->startElement(self::FIELD_VACCINE_TYPE);
            $this->vaccineType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->refusedIndicator) && $this->refusedIndicator->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REFUSED_INDICATOR);
            $this->refusedIndicator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reported) && $this->reported->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REPORTED);
            $this->reported->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            $xw->startElement(self::FIELD_PERFORMER);
            $this->performer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requester)) {
            $xw->startElement(self::FIELD_REQUESTER);
            $this->requester->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->manufacturer)) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $this->manufacturer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
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
        if (isset($json[self::FIELD_VACCINE_TYPE]) || array_key_exists(self::FIELD_VACCINE_TYPE, $json)) {
            if ($json[self::FIELD_VACCINE_TYPE] instanceof FHIRCodeableConcept) {
                $type->setVaccineType($json[self::FIELD_VACCINE_TYPE]);
            } else {
                $type->setVaccineType(new FHIRCodeableConcept($json[self::FIELD_VACCINE_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            if ($json[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $type->setSubject($json[self::FIELD_SUBJECT]);
            } else {
                $type->setSubject(new FHIRResourceReference($json[self::FIELD_SUBJECT]));
            }
        }
        if (isset($json[self::FIELD_REFUSED_INDICATOR]) || isset($json[self::FIELD_REFUSED_INDICATOR_EXT]) || array_key_exists(self::FIELD_REFUSED_INDICATOR, $json) || array_key_exists(self::FIELD_REFUSED_INDICATOR_EXT, $json)) {
            $value = $json[self::FIELD_REFUSED_INDICATOR] ?? null;
            $ext = (isset($json[self::FIELD_REFUSED_INDICATOR_EXT]) && is_array($json[self::FIELD_REFUSED_INDICATOR_EXT])) ? $json[self::FIELD_REFUSED_INDICATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setRefusedIndicator($value);
                } else if (is_array($value)) {
                    $type->setRefusedIndicator(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setRefusedIndicator(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRefusedIndicator(new FHIRBoolean($ext));
            } else {
                $type->setRefusedIndicator(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_REPORTED]) || isset($json[self::FIELD_REPORTED_EXT]) || array_key_exists(self::FIELD_REPORTED, $json) || array_key_exists(self::FIELD_REPORTED_EXT, $json)) {
            $value = $json[self::FIELD_REPORTED] ?? null;
            $ext = (isset($json[self::FIELD_REPORTED_EXT]) && is_array($json[self::FIELD_REPORTED_EXT])) ? $json[self::FIELD_REPORTED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setReported($value);
                } else if (is_array($value)) {
                    $type->setReported(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setReported(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setReported(new FHIRBoolean($ext));
            } else {
                $type->setReported(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_PERFORMER]) || array_key_exists(self::FIELD_PERFORMER, $json)) {
            if ($json[self::FIELD_PERFORMER] instanceof FHIRResourceReference) {
                $type->setPerformer($json[self::FIELD_PERFORMER]);
            } else {
                $type->setPerformer(new FHIRResourceReference($json[self::FIELD_PERFORMER]));
            }
        }
        if (isset($json[self::FIELD_REQUESTER]) || array_key_exists(self::FIELD_REQUESTER, $json)) {
            if ($json[self::FIELD_REQUESTER] instanceof FHIRResourceReference) {
                $type->setRequester($json[self::FIELD_REQUESTER]);
            } else {
                $type->setRequester(new FHIRResourceReference($json[self::FIELD_REQUESTER]));
            }
        }
        if (isset($json[self::FIELD_MANUFACTURER]) || array_key_exists(self::FIELD_MANUFACTURER, $json)) {
            if ($json[self::FIELD_MANUFACTURER] instanceof FHIRResourceReference) {
                $type->setManufacturer($json[self::FIELD_MANUFACTURER]);
            } else {
                $type->setManufacturer(new FHIRResourceReference($json[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            if ($json[self::FIELD_LOCATION] instanceof FHIRResourceReference) {
                $type->setLocation($json[self::FIELD_LOCATION]);
            } else {
                $type->setLocation(new FHIRResourceReference($json[self::FIELD_LOCATION]));
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
        if (isset($this->vaccineType)) {
            $out->vaccineType = $this->vaccineType;
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->refusedIndicator)) {
            if (null !== ($val = $this->refusedIndicator->getValue())) {
                $out->refusedIndicator = $val;
            }
            $ext = $this->refusedIndicator->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_refusedIndicator = $ext;
            }
        }
        if (isset($this->reported)) {
            if (null !== ($val = $this->reported->getValue())) {
                $out->reported = $val;
            }
            $ext = $this->reported->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_reported = $ext;
            }
        }
        if (isset($this->performer)) {
            $out->performer = $this->performer;
        }
        if (isset($this->requester)) {
            $out->requester = $this->requester;
        }
        if (isset($this->manufacturer)) {
            $out->manufacturer = $this->manufacturer;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
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