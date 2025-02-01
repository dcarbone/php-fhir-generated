<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * The regulatory authorization of a medicinal product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicinalProductAuthorization extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_AUTHORIZATION;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_DATE = 'statusDate';
    public const FIELD_STATUS_DATE_EXT = '_statusDate';
    public const FIELD_RESTORE_DATE = 'restoreDate';
    public const FIELD_RESTORE_DATE_EXT = '_restoreDate';
    public const FIELD_VALIDITY_PERIOD = 'validityPeriod';
    public const FIELD_DATA_EXCLUSIVITY_PERIOD = 'dataExclusivityPeriod';
    public const FIELD_DATE_OF_FIRST_AUTHORIZATION = 'dateOfFirstAuthorization';
    public const FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT = '_dateOfFirstAuthorization';
    public const FIELD_INTERNATIONAL_BIRTH_DATE = 'internationalBirthDate';
    public const FIELD_INTERNATIONAL_BIRTH_DATE_EXT = '_internationalBirthDate';
    public const FIELD_LEGAL_BASIS = 'legalBasis';
    public const FIELD_JURISDICTIONAL_AUTHORIZATION = 'jurisdictionalAuthorization';
    public const FIELD_HOLDER = 'holder';
    public const FIELD_REGULATOR = 'regulator';
    public const FIELD_PROCEDURE = 'procedure';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RESTORE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE_OF_FIRST_AUTHORIZATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INTERNATIONAL_BIRTH_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $country;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $jurisdiction;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $status;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $statusDate;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $restoreDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The beginning of the time period in which the marketing authorization is in the
     * specific status shall be specified A complete date consisting of day, month and
     * year shall be specified using the ISO 8601 date format.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $validityPeriod;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $dataExclusivityPeriod;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateOfFirstAuthorization;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $internationalBirthDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $legalBasis;
    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[] 
     */
    protected array $jurisdictionalAuthorization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $holder;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $regulator;
    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure 
     */
    protected FHIRMedicinalProductAuthorizationProcedure $procedure;

    /* constructor.php:63 */
    /**
     * FHIRMedicinalProductAuthorization Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $statusDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $restoreDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $validityPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $dataExclusivityPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $dateOfFirstAuthorization
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $internationalBirthDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $legalBasis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[] $jurisdictionalAuthorization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $holder
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $regulator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure $procedure
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
                                null|FHIRReference $subject = null,
                                null|iterable $country = null,
                                null|iterable $jurisdiction = null,
                                null|FHIRCodeableConcept $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $restoreDate = null,
                                null|FHIRPeriod $validityPeriod = null,
                                null|FHIRPeriod $dataExclusivityPeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateOfFirstAuthorization = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $internationalBirthDate = null,
                                null|FHIRCodeableConcept $legalBasis = null,
                                null|iterable $jurisdictionalAuthorization = null,
                                null|FHIRReference $holder = null,
                                null|FHIRReference $regulator = null,
                                null|FHIRMedicinalProductAuthorizationProcedure $procedure = null,
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
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $country) {
            $this->setCountry(...$country);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction(...$jurisdiction);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusDate) {
            $this->setStatusDate($statusDate);
        }
        if (null !== $restoreDate) {
            $this->setRestoreDate($restoreDate);
        }
        if (null !== $validityPeriod) {
            $this->setValidityPeriod($validityPeriod);
        }
        if (null !== $dataExclusivityPeriod) {
            $this->setDataExclusivityPeriod($dataExclusivityPeriod);
        }
        if (null !== $dateOfFirstAuthorization) {
            $this->setDateOfFirstAuthorization($dateOfFirstAuthorization);
        }
        if (null !== $internationalBirthDate) {
            $this->setInternationalBirthDate($internationalBirthDate);
        }
        if (null !== $legalBasis) {
            $this->setLegalBasis($legalBasis);
        }
        if (null !== $jurisdictionalAuthorization) {
            $this->setJurisdictionalAuthorization(...$jurisdictionalAuthorization);
        }
        if (null !== $holder) {
            $this->setHolder($holder);
        }
        if (null !== $regulator) {
            $this->setRegulator($regulator);
        }
        if (null !== $procedure) {
            $this->setProcedure($procedure);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the marketing authorization, as assigned by a regulator.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medicinal product that is being authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry(): array
    {
        return $this->country ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCountryIterator(): iterable
    {
        if (!isset($this->country)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->country);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country in which the marketing authorization has been granted.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $country
     * @return static
     */
    public function addCountry(FHIRCodeableConcept $country): self
    {
        if (!isset($this->country)) {
            $this->country = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$country
     * @return static
     */
    public function setCountry(FHIRCodeableConcept ...$country): self
    {
        if ([] === $country) {
            unset($this->country);
            return $this;
        }
        $this->country = $country;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction(): array
    {
        return $this->jurisdiction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getJurisdictionIterator(): iterable
    {
        if (!isset($this->jurisdiction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->jurisdiction);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Jurisdiction within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction): self
    {
        if (!isset($this->jurisdiction)) {
            $this->jurisdiction = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$jurisdiction
     * @return static
     */
    public function setJurisdiction(FHIRCodeableConcept ...$jurisdiction): self
    {
        if ([] === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        $this->jurisdiction = $jurisdiction;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the marketing authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): null|FHIRDateTime
    {
        return $this->statusDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $statusDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatusDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $statusDate) {
            unset($this->statusDate);
            return $this;
        }
        if (!($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime(value: $statusDate);
        }
        $this->statusDate = $statusDate;
        if ($this->_valueXMLLocations[self::FIELD_STATUS_DATE] !== $valueXMLLocation) {
            $this->_setStatusDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the statusDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS_DATE];
    }

    /**
     * Set the location the "value" field of the statusDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS_DATE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getRestoreDate(): null|FHIRDateTime
    {
        return $this->restoreDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $restoreDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRestoreDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $restoreDate,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $restoreDate) {
            unset($this->restoreDate);
            return $this;
        }
        if (!($restoreDate instanceof FHIRDateTime)) {
            $restoreDate = new FHIRDateTime(value: $restoreDate);
        }
        $this->restoreDate = $restoreDate;
        if ($this->_valueXMLLocations[self::FIELD_RESTORE_DATE] !== $valueXMLLocation) {
            $this->_setRestoreDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the restoreDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRestoreDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RESTORE_DATE];
    }

    /**
     * Set the location the "value" field of the restoreDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRestoreDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RESTORE_DATE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod(): null|FHIRPeriod
    {
        return $this->validityPeriod ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(null|FHIRPeriod $validityPeriod): self
    {
        if (null === $validityPeriod) {
            unset($this->validityPeriod);
            return $this;
        }
        $this->validityPeriod = $validityPeriod;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getDataExclusivityPeriod(): null|FHIRPeriod
    {
        return $this->dataExclusivityPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A period of time after authorization before generic product applicatiosn can be
     * submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $dataExclusivityPeriod
     * @return static
     */
    public function setDataExclusivityPeriod(null|FHIRPeriod $dataExclusivityPeriod): self
    {
        if (null === $dataExclusivityPeriod) {
            unset($this->dataExclusivityPeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getDateOfFirstAuthorization(): null|FHIRDateTime
    {
        return $this->dateOfFirstAuthorization ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $dateOfFirstAuthorization
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateOfFirstAuthorization(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateOfFirstAuthorization,
                                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateOfFirstAuthorization) {
            unset($this->dateOfFirstAuthorization);
            return $this;
        }
        if (!($dateOfFirstAuthorization instanceof FHIRDateTime)) {
            $dateOfFirstAuthorization = new FHIRDateTime(value: $dateOfFirstAuthorization);
        }
        $this->dateOfFirstAuthorization = $dateOfFirstAuthorization;
        if ($this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] !== $valueXMLLocation) {
            $this->_setDateOfFirstAuthorizationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateOfFirstAuthorization element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateOfFirstAuthorizationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION];
    }

    /**
     * Set the location the "value" field of the dateOfFirstAuthorization element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateOfFirstAuthorizationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getInternationalBirthDate(): null|FHIRDateTime
    {
        return $this->internationalBirthDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $internationalBirthDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInternationalBirthDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $internationalBirthDate,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $internationalBirthDate) {
            unset($this->internationalBirthDate);
            return $this;
        }
        if (!($internationalBirthDate instanceof FHIRDateTime)) {
            $internationalBirthDate = new FHIRDateTime(value: $internationalBirthDate);
        }
        $this->internationalBirthDate = $internationalBirthDate;
        if ($this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE] !== $valueXMLLocation) {
            $this->_setInternationalBirthDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the internationalBirthDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInternationalBirthDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE];
    }

    /**
     * Set the location the "value" field of the internationalBirthDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInternationalBirthDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalBasis(): null|FHIRCodeableConcept
    {
        return $this->legalBasis ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal framework against which this authorization is granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $legalBasis
     * @return static
     */
    public function setLegalBasis(null|FHIRCodeableConcept $legalBasis): self
    {
        if (null === $legalBasis) {
            unset($this->legalBasis);
            return $this;
        }
        $this->legalBasis = $legalBasis;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization[]
     */
    public function getJurisdictionalAuthorization(): array
    {
        return $this->jurisdictionalAuthorization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization>
     */
    public function getJurisdictionalAuthorizationIterator(): iterable
    {
        if (!isset($this->jurisdictionalAuthorization)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->jurisdictionalAuthorization);
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization
     * @return static
     */
    public function addJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization $jurisdictionalAuthorization): self
    {
        if (!isset($this->jurisdictionalAuthorization)) {
            $this->jurisdictionalAuthorization = [];
        }
        $this->jurisdictionalAuthorization[] = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * Authorization in areas within a country.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization ...$jurisdictionalAuthorization
     * @return static
     */
    public function setJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization ...$jurisdictionalAuthorization): self
    {
        if ([] === $jurisdictionalAuthorization) {
            unset($this->jurisdictionalAuthorization);
            return $this;
        }
        $this->jurisdictionalAuthorization = $jurisdictionalAuthorization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getHolder(): null|FHIRReference
    {
        return $this->holder ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing Authorization Holder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $holder
     * @return static
     */
    public function setHolder(null|FHIRReference $holder): self
    {
        if (null === $holder) {
            unset($this->holder);
            return $this;
        }
        $this->holder = $holder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getRegulator(): null|FHIRReference
    {
        return $this->regulator ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Medicines Regulatory Agency.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $regulator
     * @return static
     */
    public function setRegulator(null|FHIRReference $regulator): self
    {
        if (null === $regulator) {
            unset($this->regulator);
            return $this;
        }
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure
     */
    public function getProcedure(): null|FHIRMedicinalProductAuthorizationProcedure
    {
        return $this->procedure ?? null;
    }

    /**
     * The regulatory authorization of a medicinal product.
     *
     * The regulatory procedure for granting or amending a marketing authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure $procedure
     * @return static
     */
    public function setProcedure(null|FHIRMedicinalProductAuthorizationProcedure $procedure): self
    {
        if (null === $procedure) {
            unset($this->procedure);
            return $this;
        }
        $this->procedure = $procedure;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESTORE_DATE])) {
            $v = $this->getRestoreDate();
            foreach($validationRules[self::FIELD_RESTORE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESTORE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESTORE_DATE])) {
                        $errs[self::FIELD_RESTORE_DATE] = [];
                    }
                    $errs[self::FIELD_RESTORE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
            $v = $this->getValidityPeriod();
            foreach($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
                        $errs[self::FIELD_VALIDITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATA_EXCLUSIVITY_PERIOD])) {
            $v = $this->getDataExclusivityPeriod();
            foreach($validationRules[self::FIELD_DATA_EXCLUSIVITY_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_EXCLUSIVITY_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_OF_FIRST_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
                        $errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_DATE_OF_FIRST_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
            $v = $this->getInternationalBirthDate();
            foreach($validationRules[self::FIELD_INTERNATIONAL_BIRTH_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTERNATIONAL_BIRTH_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
                        $errs[self::FIELD_INTERNATIONAL_BIRTH_DATE] = [];
                    }
                    $errs[self::FIELD_INTERNATIONAL_BIRTH_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_BASIS])) {
            $v = $this->getLegalBasis();
            foreach($validationRules[self::FIELD_LEGAL_BASIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LEGAL_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_BASIS])) {
                        $errs[self::FIELD_LEGAL_BASIS] = [];
                    }
                    $errs[self::FIELD_LEGAL_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
            $v = $this->getJurisdictionalAuthorization();
            foreach($validationRules[self::FIELD_JURISDICTIONAL_AUTHORIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_JURISDICTIONAL_AUTHORIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION])) {
                        $errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION] = [];
                    }
                    $errs[self::FIELD_JURISDICTIONAL_AUTHORIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOLDER])) {
            $v = $this->getHolder();
            foreach($validationRules[self::FIELD_HOLDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOLDER])) {
                        $errs[self::FIELD_HOLDER] = [];
                    }
                    $errs[self::FIELD_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATOR])) {
            $v = $this->getRegulator();
            foreach($validationRules[self::FIELD_REGULATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REGULATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATOR])) {
                        $errs[self::FIELD_REGULATOR] = [];
                    }
                    $errs[self::FIELD_REGULATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCEDURE])) {
            $v = $this->getProcedure();
            foreach($validationRules[self::FIELD_PROCEDURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCEDURE])) {
                        $errs[self::FIELD_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_PROCEDURE][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductAuthorization)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNTRY === $cen) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_DATE === $cen) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESTORE_DATE === $cen) {
                $type->setRestoreDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDITY_PERIOD === $cen) {
                $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_EXCLUSIVITY_PERIOD === $cen) {
                $type->setDataExclusivityPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_OF_FIRST_AUTHORIZATION === $cen) {
                $type->setDateOfFirstAuthorization(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTERNATIONAL_BIRTH_DATE === $cen) {
                $type->setInternationalBirthDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LEGAL_BASIS === $cen) {
                $type->setLegalBasis(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTIONAL_AUTHORIZATION === $cen) {
                $type->addJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HOLDER === $cen) {
                $type->setHolder(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGULATOR === $cen) {
                $type->setRegulator(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCEDURE === $cen) {
                $type->setProcedure(FHIRMedicinalProductAuthorizationProcedure::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS_DATE])) {
            if (isset($type->statusDate)) {
                $type->statusDate->setValue((string)$attributes[self::FIELD_STATUS_DATE]);
                $type->_setStatusDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatusDate((string)$attributes[self::FIELD_STATUS_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESTORE_DATE])) {
            if (isset($type->restoreDate)) {
                $type->restoreDate->setValue((string)$attributes[self::FIELD_RESTORE_DATE]);
                $type->_setRestoreDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRestoreDate((string)$attributes[self::FIELD_RESTORE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])) {
            if (isset($type->dateOfFirstAuthorization)) {
                $type->dateOfFirstAuthorization->setValue((string)$attributes[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]);
                $type->_setDateOfFirstAuthorizationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateOfFirstAuthorization((string)$attributes[self::FIELD_DATE_OF_FIRST_AUTHORIZATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INTERNATIONAL_BIRTH_DATE])) {
            if (isset($type->internationalBirthDate)) {
                $type->internationalBirthDate->setValue((string)$attributes[self::FIELD_INTERNATIONAL_BIRTH_DATE]);
                $type->_setInternationalBirthDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInternationalBirthDate((string)$attributes[self::FIELD_INTERNATIONAL_BIRTH_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('MedicinalProductAuthorization', $this->_getSourceXMLNS());
        }
        if (isset($this->statusDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS_DATE]) {
            $xw->writeAttribute(self::FIELD_STATUS_DATE, $this->statusDate->_getFormattedValue());
        }
        if (isset($this->restoreDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]) {
            $xw->writeAttribute(self::FIELD_RESTORE_DATE, $this->restoreDate->_getFormattedValue());
        }
        if (isset($this->dateOfFirstAuthorization) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]) {
            $xw->writeAttribute(self::FIELD_DATE_OF_FIRST_AUTHORIZATION, $this->dateOfFirstAuthorization->_getFormattedValue());
        }
        if (isset($this->internationalBirthDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE]) {
            $xw->writeAttribute(self::FIELD_INTERNATIONAL_BIRTH_DATE, $this->internationalBirthDate->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->country)) {
            foreach ($this->country as $v) {
                $xw->startElement(self::FIELD_COUNTRY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->jurisdiction)) {
            foreach ($this->jurisdiction as $v) {
                $xw->startElement(self::FIELD_JURISDICTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->statusDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS_DATE]
                || $this->statusDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS_DATE);
            $this->statusDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS_DATE]);
            $xw->endElement();
        }
        if (isset($this->restoreDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]
                || $this->restoreDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RESTORE_DATE);
            $this->restoreDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RESTORE_DATE]);
            $xw->endElement();
        }
        if (isset($this->validityPeriod)) {
            $xw->startElement(self::FIELD_VALIDITY_PERIOD);
            $this->validityPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dataExclusivityPeriod)) {
            $xw->startElement(self::FIELD_DATA_EXCLUSIVITY_PERIOD);
            $this->dataExclusivityPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateOfFirstAuthorization)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]
                || $this->dateOfFirstAuthorization->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_OF_FIRST_AUTHORIZATION);
            $this->dateOfFirstAuthorization->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_OF_FIRST_AUTHORIZATION]);
            $xw->endElement();
        }
        if (isset($this->internationalBirthDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE]
                || $this->internationalBirthDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INTERNATIONAL_BIRTH_DATE);
            $this->internationalBirthDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INTERNATIONAL_BIRTH_DATE]);
            $xw->endElement();
        }
        if (isset($this->legalBasis)) {
            $xw->startElement(self::FIELD_LEGAL_BASIS);
            $this->legalBasis->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->jurisdictionalAuthorization)) {
            foreach ($this->jurisdictionalAuthorization as $v) {
                $xw->startElement(self::FIELD_JURISDICTIONAL_AUTHORIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->holder)) {
            $xw->startElement(self::FIELD_HOLDER);
            $this->holder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->regulator)) {
            $xw->startElement(self::FIELD_REGULATOR);
            $this->regulator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->procedure)) {
            $xw->startElement(self::FIELD_PROCEDURE);
            $this->procedure->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductAuthorization)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_COUNTRY]) || array_key_exists(self::FIELD_COUNTRY, $json)) {
            $vs = $json[self::FIELD_COUNTRY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCountry(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_JURISDICTION]) || array_key_exists(self::FIELD_JURISDICTION, $json)) {
            $vs = $json[self::FIELD_JURISDICTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || array_key_exists(self::FIELD_STATUS, $json)) {
            $type->setStatus(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_STATUS], $config));
        }
        if (isset($json[self::FIELD_STATUS_DATE])
            || isset($json[self::FIELD_STATUS_DATE_EXT])
            || array_key_exists(self::FIELD_STATUS_DATE, $json)
            || array_key_exists(self::FIELD_STATUS_DATE_EXT, $json)) {
            $value = $json[self::FIELD_STATUS_DATE] ?? null;
            $type->setStatusDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RESTORE_DATE])
            || isset($json[self::FIELD_RESTORE_DATE_EXT])
            || array_key_exists(self::FIELD_RESTORE_DATE, $json)
            || array_key_exists(self::FIELD_RESTORE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_RESTORE_DATE] ?? null;
            $type->setRestoreDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_RESTORE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALIDITY_PERIOD]) || array_key_exists(self::FIELD_VALIDITY_PERIOD, $json)) {
            $type->setValidityPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_VALIDITY_PERIOD], $config));
        }
        if (isset($json[self::FIELD_DATA_EXCLUSIVITY_PERIOD]) || array_key_exists(self::FIELD_DATA_EXCLUSIVITY_PERIOD, $json)) {
            $type->setDataExclusivityPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_DATA_EXCLUSIVITY_PERIOD], $config));
        }
        if (isset($json[self::FIELD_DATE_OF_FIRST_AUTHORIZATION])
            || isset($json[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT])
            || array_key_exists(self::FIELD_DATE_OF_FIRST_AUTHORIZATION, $json)
            || array_key_exists(self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT, $json)) {
            $value = $json[self::FIELD_DATE_OF_FIRST_AUTHORIZATION] ?? null;
            $type->setDateOfFirstAuthorization(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_OF_FIRST_AUTHORIZATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INTERNATIONAL_BIRTH_DATE])
            || isset($json[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT])
            || array_key_exists(self::FIELD_INTERNATIONAL_BIRTH_DATE, $json)
            || array_key_exists(self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT, $json)) {
            $value = $json[self::FIELD_INTERNATIONAL_BIRTH_DATE] ?? null;
            $type->setInternationalBirthDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_INTERNATIONAL_BIRTH_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LEGAL_BASIS]) || array_key_exists(self::FIELD_LEGAL_BASIS, $json)) {
            $type->setLegalBasis(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_LEGAL_BASIS], $config));
        }
        if (isset($json[self::FIELD_JURISDICTIONAL_AUTHORIZATION]) || array_key_exists(self::FIELD_JURISDICTIONAL_AUTHORIZATION, $json)) {
            $vs = $json[self::FIELD_JURISDICTIONAL_AUTHORIZATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addJurisdictionalAuthorization(FHIRMedicinalProductAuthorizationJurisdictionalAuthorization::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_HOLDER]) || array_key_exists(self::FIELD_HOLDER, $json)) {
            $type->setHolder(FHIRReference::jsonUnserialize($json[self::FIELD_HOLDER], $config));
        }
        if (isset($json[self::FIELD_REGULATOR]) || array_key_exists(self::FIELD_REGULATOR, $json)) {
            $type->setRegulator(FHIRReference::jsonUnserialize($json[self::FIELD_REGULATOR], $config));
        }
        if (isset($json[self::FIELD_PROCEDURE]) || array_key_exists(self::FIELD_PROCEDURE, $json)) {
            $type->setProcedure(FHIRMedicinalProductAuthorizationProcedure::jsonUnserialize($json[self::FIELD_PROCEDURE], $config));
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
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->country) && [] !== $this->country) {
            $out->country = $this->country;
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            $out->jurisdiction = $this->jurisdiction;
        }
        if (isset($this->status)) {
            $out->status = $this->status;
        }
        if (isset($this->statusDate)) {
            if (null !== ($val = $this->statusDate->getValue())) {
                $out->statusDate = $val;
            }
            if ($this->statusDate->_nonValueFieldDefined()) {
                $ext = $this->statusDate->jsonSerialize();
                unset($ext->value);
                $out->_statusDate = $ext;
            }
        }
        if (isset($this->restoreDate)) {
            if (null !== ($val = $this->restoreDate->getValue())) {
                $out->restoreDate = $val;
            }
            if ($this->restoreDate->_nonValueFieldDefined()) {
                $ext = $this->restoreDate->jsonSerialize();
                unset($ext->value);
                $out->_restoreDate = $ext;
            }
        }
        if (isset($this->validityPeriod)) {
            $out->validityPeriod = $this->validityPeriod;
        }
        if (isset($this->dataExclusivityPeriod)) {
            $out->dataExclusivityPeriod = $this->dataExclusivityPeriod;
        }
        if (isset($this->dateOfFirstAuthorization)) {
            if (null !== ($val = $this->dateOfFirstAuthorization->getValue())) {
                $out->dateOfFirstAuthorization = $val;
            }
            if ($this->dateOfFirstAuthorization->_nonValueFieldDefined()) {
                $ext = $this->dateOfFirstAuthorization->jsonSerialize();
                unset($ext->value);
                $out->_dateOfFirstAuthorization = $ext;
            }
        }
        if (isset($this->internationalBirthDate)) {
            if (null !== ($val = $this->internationalBirthDate->getValue())) {
                $out->internationalBirthDate = $val;
            }
            if ($this->internationalBirthDate->_nonValueFieldDefined()) {
                $ext = $this->internationalBirthDate->jsonSerialize();
                unset($ext->value);
                $out->_internationalBirthDate = $ext;
            }
        }
        if (isset($this->legalBasis)) {
            $out->legalBasis = $this->legalBasis;
        }
        if (isset($this->jurisdictionalAuthorization) && [] !== $this->jurisdictionalAuthorization) {
            $out->jurisdictionalAuthorization = $this->jurisdictionalAuthorization;
        }
        if (isset($this->holder)) {
            $out->holder = $this->holder;
        }
        if (isset($this->regulator)) {
            $out->regulator = $this->regulator;
        }
        if (isset($this->procedure)) {
            $out->procedure = $this->procedure;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}