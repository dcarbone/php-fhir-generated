<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Demographics and other administrative information about a person or animal
 * receiving care or other health-related services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRPatient extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PATIENT;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_GENDER = 'gender';
    public const FIELD_BIRTH_DATE = 'birthDate';
    public const FIELD_BIRTH_DATE_EXT = '_birthDate';
    public const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    public const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    public const FIELD_DECEASED_DATE_TIME = 'deceasedDateTime';
    public const FIELD_DECEASED_DATE_TIME_EXT = '_deceasedDateTime';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_MARITAL_STATUS = 'maritalStatus';
    public const FIELD_MULTIPLE_BIRTH_BOOLEAN = 'multipleBirthBoolean';
    public const FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT = '_multipleBirthBoolean';
    public const FIELD_MULTIPLE_BIRTH_INTEGER = 'multipleBirthInteger';
    public const FIELD_MULTIPLE_BIRTH_INTEGER_EXT = '_multipleBirthInteger';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_ANIMAL = 'animal';
    public const FIELD_COMMUNICATION = 'communication';
    public const FIELD_CARE_PROVIDER = 'careProvider';
    public const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    public const FIELD_LINK = 'link';
    public const FIELD_ACTIVE = 'active';
    public const FIELD_ACTIVE_EXT = '_active';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_BIRTH_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MULTIPLE_BIRTH_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MULTIPLE_BIRTH_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that applies to this person as a patient.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName> 
     */
    #[FHIRHumanName]
    protected array $name;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact> 
     */
    #[FHIRContact]
    protected array $telecom;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $gender;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of birth for the individual.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $birthDate;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $deceasedBoolean;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $deceasedDateTime;
    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Addresses for the individual.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress> 
     */
    #[FHIRAddress]
    protected array $address;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $maritalStatus;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $multipleBirthBoolean;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $multipleBirthInteger;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment> 
     */
    #[FHIRAttachment]
    protected array $photo;
    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact> 
     */
    #[FHIRPatientContact]
    protected array $contact;
    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * This element has a value if the patient is an animal.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal 
     */
    #[FHIRPatientAnimal]
    protected FHIRPatientAnimal $animal;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Languages which may be used to communicate with the patient about his or her
     * health.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $communication;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $careProvider;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $managingOrganization;
    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual person.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink> 
     */
    #[FHIRPatientLink]
    protected array $link;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $active;

    /* constructor.php:61 */
    /**
     * FHIRPatient Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName> $name
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact> $telecom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $gender
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $birthDate
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $deceasedDateTime
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress> $address
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $maritalStatus
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $multipleBirthBoolean
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $multipleBirthInteger
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment> $photo
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact> $contact
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal $animal
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> $communication
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $careProvider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $managingOrganization
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink> $link
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $active
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|iterable $name = null,
                                null|iterable $telecom = null,
                                null|FHIRCodeableConcept $gender = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $birthDate = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $deceasedDateTime = null,
                                null|iterable $address = null,
                                null|FHIRCodeableConcept $maritalStatus = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleBirthBoolean = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $multipleBirthInteger = null,
                                null|iterable $photo = null,
                                null|iterable $contact = null,
                                null|FHIRPatientAnimal $animal = null,
                                null|iterable $communication = null,
                                null|iterable $careProvider = null,
                                null|FHIRResourceReference $managingOrganization = null,
                                null|iterable $link = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $active = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $name) {
            $this->setName(...$name);
        }
        if (null !== $telecom) {
            $this->setTelecom(...$telecom);
        }
        if (null !== $gender) {
            $this->setGender($gender);
        }
        if (null !== $birthDate) {
            $this->setBirthDate($birthDate);
        }
        if (null !== $deceasedBoolean) {
            $this->setDeceasedBoolean($deceasedBoolean);
        }
        if (null !== $deceasedDateTime) {
            $this->setDeceasedDateTime($deceasedDateTime);
        }
        if (null !== $address) {
            $this->setAddress(...$address);
        }
        if (null !== $maritalStatus) {
            $this->setMaritalStatus($maritalStatus);
        }
        if (null !== $multipleBirthBoolean) {
            $this->setMultipleBirthBoolean($multipleBirthBoolean);
        }
        if (null !== $multipleBirthInteger) {
            $this->setMultipleBirthInteger($multipleBirthInteger);
        }
        if (null !== $photo) {
            $this->setPhoto(...$photo);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $animal) {
            $this->setAnimal($animal);
        }
        if (null !== $communication) {
            $this->setCommunication(...$communication);
        }
        if (null !== $careProvider) {
            $this->setCareProvider(...$careProvider);
        }
        if (null !== $managingOrganization) {
            $this->setManagingOrganization($managingOrganization);
        }
        if (null !== $link) {
            $this->setLink(...$link);
        }
        if (null !== $active) {
            $this->setActive($active);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that applies to this person as a patient.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
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
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that applies to this person as a patient.
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
     * An identifier that applies to this person as a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName>
     */
    public function getName(): array
    {
        return $this->name ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName>
     */
    public function getNameIterator(): iterable
    {
        if (!isset($this->name)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->name);
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName $name
     * @return static
     */
    public function addName(FHIRHumanName $name): self
    {
        if (!isset($this->name)) {
            $this->name = [];
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName ...$name
     * @return static
     */
    public function setName(FHIRHumanName ...$name): self
    {
        if ([] === $name) {
            unset($this->name);
            return $this;
        }
        $this->name = $name;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact>
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact $telecom
     * @return static
     */
    public function addTelecom(FHIRContact $telecom): self
    {
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail (e.g. a telephone number or an email address) by which the
     * individual may be contacted.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContact ...$telecom): self
    {
        if ([] === $telecom) {
            unset($this->telecom);
            return $this;
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getGender(): null|FHIRCodeableConcept
    {
        return $this->gender ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Administrative Gender - the gender that the patient is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $gender
     * @return static
     */
    public function setGender(null|FHIRCodeableConcept $gender): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of birth for the individual.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getBirthDate(): null|FHIRDateTime
    {
        return $this->birthDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of birth for the individual.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $birthDate
     * @return static
     */
    public function setBirthDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $birthDate): self
    {
        if (null === $birthDate) {
            unset($this->birthDate);
            return $this;
        }
        if (!($birthDate instanceof FHIRDateTime)) {
            $birthDate = new FHIRDateTime(value: $birthDate);
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean(): null|FHIRBoolean
    {
        return $this->deceasedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return static
     */
    public function setDeceasedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean): self
    {
        if (null === $deceasedBoolean) {
            unset($this->deceasedBoolean);
            return $this;
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            $deceasedBoolean = new FHIRBoolean(value: $deceasedBoolean);
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime(): null|FHIRDateTime
    {
        return $this->deceasedDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the individual is deceased or not.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $deceasedDateTime
     * @return static
     */
    public function setDeceasedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $deceasedDateTime): self
    {
        if (null === $deceasedDateTime) {
            unset($this->deceasedDateTime);
            return $this;
        }
        if (!($deceasedDateTime instanceof FHIRDateTime)) {
            $deceasedDateTime = new FHIRDateTime(value: $deceasedDateTime);
        }
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Addresses for the individual.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress>
     */
    public function getAddress(): array
    {
        return $this->address ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress>
     */
    public function getAddressIterator(): iterable
    {
        if (!isset($this->address)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->address);
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Addresses for the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function addAddress(FHIRAddress $address): self
    {
        if (!isset($this->address)) {
            $this->address = [];
        }
        $this->address[] = $address;
        return $this;
    }

    /**
     * There is a variety of postal address formats defined around the world. This
     * format defines a superset that is the basis for all addresses around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Addresses for the individual.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress ...$address
     * @return static
     */
    public function setAddress(FHIRAddress ...$address): self
    {
        if ([] === $address) {
            unset($this->address);
            return $this;
        }
        $this->address = $address;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMaritalStatus(): null|FHIRCodeableConcept
    {
        return $this->maritalStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This field contains a patient's most recent marital (civil) status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $maritalStatus
     * @return static
     */
    public function setMaritalStatus(null|FHIRCodeableConcept $maritalStatus): self
    {
        if (null === $maritalStatus) {
            unset($this->maritalStatus);
            return $this;
        }
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getMultipleBirthBoolean(): null|FHIRBoolean
    {
        return $this->multipleBirthBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $multipleBirthBoolean
     * @return static
     */
    public function setMultipleBirthBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleBirthBoolean): self
    {
        if (null === $multipleBirthBoolean) {
            unset($this->multipleBirthBoolean);
            return $this;
        }
        if (!($multipleBirthBoolean instanceof FHIRBoolean)) {
            $multipleBirthBoolean = new FHIRBoolean(value: $multipleBirthBoolean);
        }
        $this->multipleBirthBoolean = $multipleBirthBoolean;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getMultipleBirthInteger(): null|FHIRInteger
    {
        return $this->multipleBirthInteger ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the patient is part of a multiple or indicates the actual
     * birth order.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $multipleBirthInteger
     * @return static
     */
    public function setMultipleBirthInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $multipleBirthInteger): self
    {
        if (null === $multipleBirthInteger) {
            unset($this->multipleBirthInteger);
            return $this;
        }
        if (!($multipleBirthInteger instanceof FHIRInteger)) {
            $multipleBirthInteger = new FHIRInteger(value: $multipleBirthInteger);
        }
        $this->multipleBirthInteger = $multipleBirthInteger;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment>
     */
    public function getPhoto(): array
    {
        return $this->photo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment>
     */
    public function getPhotoIterator(): iterable
    {
        if (!isset($this->photo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->photo);
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $photo
     * @return static
     */
    public function addPhoto(FHIRAttachment $photo): self
    {
        if (!isset($this->photo)) {
            $this->photo = [];
        }
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment ...$photo
     * @return static
     */
    public function setPhoto(FHIRAttachment ...$photo): self
    {
        if ([] === $photo) {
            unset($this->photo);
            return $this;
        }
        $this->photo = $photo;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact>
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact $contact
     * @return static
     */
    public function addContact(FHIRPatientContact $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * A contact party (e.g. guardian, partner, friend) for the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact ...$contact
     * @return static
     */
    public function setContact(FHIRPatientContact ...$contact): self
    {
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * This element has a value if the patient is an animal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
     */
    public function getAnimal(): null|FHIRPatientAnimal
    {
        return $this->animal ?? null;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * This element has a value if the patient is an animal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal $animal
     * @return static
     */
    public function setAnimal(null|FHIRPatientAnimal $animal): self
    {
        if (null === $animal) {
            unset($this->animal);
            return $this;
        }
        $this->animal = $animal;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Languages which may be used to communicate with the patient about his or her
     * health.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCommunication(): array
    {
        return $this->communication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCommunicationIterator(): iterable
    {
        if (!isset($this->communication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->communication);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Languages which may be used to communicate with the patient about his or her
     * health.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $communication
     * @return static
     */
    public function addCommunication(FHIRCodeableConcept $communication): self
    {
        if (!isset($this->communication)) {
            $this->communication = [];
        }
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Languages which may be used to communicate with the patient about his or her
     * health.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept ...$communication
     * @return static
     */
    public function setCommunication(FHIRCodeableConcept ...$communication): self
    {
        if ([] === $communication) {
            unset($this->communication);
            return $this;
        }
        $this->communication = $communication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getCareProvider(): array
    {
        return $this->careProvider ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getCareProviderIterator(): iterable
    {
        if (!isset($this->careProvider)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->careProvider);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $careProvider
     * @return static
     */
    public function addCareProvider(FHIRResourceReference $careProvider): self
    {
        if (!isset($this->careProvider)) {
            $this->careProvider = [];
        }
        $this->careProvider[] = $careProvider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient's nominated care provider.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$careProvider
     * @return static
     */
    public function setCareProvider(FHIRResourceReference ...$careProvider): self
    {
        if ([] === $careProvider) {
            unset($this->careProvider);
            return $this;
        }
        $this->careProvider = $careProvider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getManagingOrganization(): null|FHIRResourceReference
    {
        return $this->managingOrganization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization that is the custodian of the patient record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $managingOrganization
     * @return static
     */
    public function setManagingOrganization(null|FHIRResourceReference $managingOrganization): self
    {
        if (null === $managingOrganization) {
            unset($this->managingOrganization);
            return $this;
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual person.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink>
     */
    public function getLink(): array
    {
        return $this->link ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink>
     */
    public function getLinkIterator(): iterable
    {
        if (!isset($this->link)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->link);
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink $link
     * @return static
     */
    public function addLink(FHIRPatientLink $link): self
    {
        if (!isset($this->link)) {
            $this->link = [];
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     *
     * Link to another patient resource that concerns the same actual person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink ...$link
     * @return static
     */
    public function setLink(FHIRPatientLink ...$link): self
    {
        if ([] === $link) {
            unset($this->link);
            return $this;
        }
        $this->link = $link;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getActive(): null|FHIRBoolean
    {
        return $this->active ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this patient record is in active use.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $active
     * @return static
     */
    public function setActive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $active): self
    {
        if (null === $active) {
            unset($this->active);
            return $this;
        }
        if (!($active instanceof FHIRBoolean)) {
            $active = new FHIRBoolean(value: $active);
        }
        $this->active = $active;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPatient)) {
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
            if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->addName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TELECOM === $cen) {
                $type->addTelecom(FHIRContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GENDER === $cen) {
                $type->setGender(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BIRTH_DATE === $cen) {
                $type->setBirthDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_BOOLEAN === $cen) {
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_DATE_TIME === $cen) {
                $type->setDeceasedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS === $cen) {
                $type->addAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MARITAL_STATUS === $cen) {
                $type->setMaritalStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MULTIPLE_BIRTH_BOOLEAN === $cen) {
                $type->setMultipleBirthBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MULTIPLE_BIRTH_INTEGER === $cen) {
                $type->setMultipleBirthInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHOTO === $cen) {
                $type->addPhoto(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRPatientContact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ANIMAL === $cen) {
                $type->setAnimal(FHIRPatientAnimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMUNICATION === $cen) {
                $type->addCommunication(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARE_PROVIDER === $cen) {
                $type->addCareProvider(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGING_ORGANIZATION === $cen) {
                $type->setManagingOrganization(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINK === $cen) {
                $type->addLink(FHIRPatientLink::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTIVE === $cen) {
                $type->setActive(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BIRTH_DATE])) {
            if (isset($type->birthDate)) {
                $type->birthDate->setValue((string)$attributes[self::FIELD_BIRTH_DATE]);
            } else {
                $type->setBirthDate((string)$attributes[self::FIELD_BIRTH_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_BIRTH_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECEASED_BOOLEAN])) {
            if (isset($type->deceasedBoolean)) {
                $type->deceasedBoolean->setValue((string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
            } else {
                $type->setDeceasedBoolean((string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECEASED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECEASED_DATE_TIME])) {
            if (isset($type->deceasedDateTime)) {
                $type->deceasedDateTime->setValue((string)$attributes[self::FIELD_DECEASED_DATE_TIME]);
            } else {
                $type->setDeceasedDateTime((string)$attributes[self::FIELD_DECEASED_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECEASED_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
            if (isset($type->multipleBirthBoolean)) {
                $type->multipleBirthBoolean->setValue((string)$attributes[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]);
            } else {
                $type->setMultipleBirthBoolean((string)$attributes[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MULTIPLE_BIRTH_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
            if (isset($type->multipleBirthInteger)) {
                $type->multipleBirthInteger->setValue((string)$attributes[self::FIELD_MULTIPLE_BIRTH_INTEGER]);
            } else {
                $type->setMultipleBirthInteger((string)$attributes[self::FIELD_MULTIPLE_BIRTH_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MULTIPLE_BIRTH_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTIVE])) {
            if (isset($type->active)) {
                $type->active->setValue((string)$attributes[self::FIELD_ACTIVE]);
            } else {
                $type->setActive((string)$attributes[self::FIELD_ACTIVE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACTIVE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Patient', $this->_getSourceXMLNS());
        }
        if (isset($this->birthDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BIRTH_DATE]) {
            $xw->writeAttribute(self::FIELD_BIRTH_DATE, $this->birthDate->_getValueAsString());
        }
        if (isset($this->deceasedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DECEASED_BOOLEAN, $this->deceasedBoolean->_getValueAsString());
        }
        if (isset($this->deceasedDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DECEASED_DATE_TIME, $this->deceasedDateTime->_getValueAsString());
        }
        if (isset($this->multipleBirthBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_BIRTH_BOOLEAN, $this->multipleBirthBoolean->_getValueAsString());
        }
        if (isset($this->multipleBirthInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_INTEGER]) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_BIRTH_INTEGER, $this->multipleBirthInteger->_getValueAsString());
        }
        if (isset($this->active) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTIVE]) {
            $xw->writeAttribute(self::FIELD_ACTIVE, $this->active->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name)) {
            foreach ($this->name as $v) {
                $xw->startElement(self::FIELD_NAME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->telecom)) {
            foreach ($this->telecom as $v) {
                $xw->startElement(self::FIELD_TELECOM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->gender)) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->birthDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BIRTH_DATE]
                || $this->birthDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BIRTH_DATE);
            $this->birthDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BIRTH_DATE]);
            $xw->endElement();
        }
        if (isset($this->deceasedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]
                || $this->deceasedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_BOOLEAN);
            $this->deceasedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->deceasedDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_DATE_TIME]
                || $this->deceasedDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_DATE_TIME);
            $this->deceasedDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->address)) {
            foreach ($this->address as $v) {
                $xw->startElement(self::FIELD_ADDRESS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->maritalStatus)) {
            $xw->startElement(self::FIELD_MARITAL_STATUS);
            $this->maritalStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->multipleBirthBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]
                || $this->multipleBirthBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MULTIPLE_BIRTH_BOOLEAN);
            $this->multipleBirthBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->multipleBirthInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_INTEGER]
                || $this->multipleBirthInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MULTIPLE_BIRTH_INTEGER);
            $this->multipleBirthInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MULTIPLE_BIRTH_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->photo)) {
            foreach ($this->photo as $v) {
                $xw->startElement(self::FIELD_PHOTO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->animal)) {
            $xw->startElement(self::FIELD_ANIMAL);
            $this->animal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->communication)) {
            foreach ($this->communication as $v) {
                $xw->startElement(self::FIELD_COMMUNICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->careProvider)) {
            foreach ($this->careProvider as $v) {
                $xw->startElement(self::FIELD_CARE_PROVIDER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->managingOrganization)) {
            $xw->startElement(self::FIELD_MANAGING_ORGANIZATION);
            $this->managingOrganization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->link)) {
            foreach ($this->link as $v) {
                $xw->startElement(self::FIELD_LINK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->active)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTIVE]
                || $this->active->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTIVE);
            $this->active->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTIVE]);
            $xw->endElement();
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIRPatient)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->name) || property_exists($decoded, self::FIELD_NAME)) {
            if (is_object($decoded->name)) {
                $vals = [$decoded->name];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_NAME, true);
            } else {
                $vals = $decoded->name;
            }
            foreach($vals as $v) {
                $type->addName(FHIRHumanName::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->telecom) || property_exists($decoded, self::FIELD_TELECOM)) {
            if (is_object($decoded->telecom)) {
                $vals = [$decoded->telecom];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TELECOM, true);
            } else {
                $vals = $decoded->telecom;
            }
            foreach($vals as $v) {
                $type->addTelecom(FHIRContact::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->gender) || property_exists($decoded, self::FIELD_GENDER)) {
            if (is_array($decoded->gender)) {
                $type->setGender(FHIRCodeableConcept::jsonUnserialize(reset($decoded->gender), $config));
            } else {
                $type->setGender(FHIRCodeableConcept::jsonUnserialize($decoded->gender, $config));
            }
        }
        if (isset($decoded->birthDate)
            || isset($decoded->_birthDate)
            || property_exists($decoded, self::FIELD_BIRTH_DATE)
            || property_exists($decoded, self::FIELD_BIRTH_DATE_EXT)) {
            $v = $decoded->_birthDate ?? new \stdClass();
            $v->value = $decoded->birthDate ?? null;
            $type->setBirthDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->deceasedBoolean)
            || isset($decoded->_deceasedBoolean)
            || property_exists($decoded, self::FIELD_DECEASED_BOOLEAN)
            || property_exists($decoded, self::FIELD_DECEASED_BOOLEAN_EXT)) {
            $v = $decoded->_deceasedBoolean ?? new \stdClass();
            $v->value = $decoded->deceasedBoolean ?? null;
            $type->setDeceasedBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->deceasedDateTime)
            || isset($decoded->_deceasedDateTime)
            || property_exists($decoded, self::FIELD_DECEASED_DATE_TIME)
            || property_exists($decoded, self::FIELD_DECEASED_DATE_TIME_EXT)) {
            $v = $decoded->_deceasedDateTime ?? new \stdClass();
            $v->value = $decoded->deceasedDateTime ?? null;
            $type->setDeceasedDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->address) || property_exists($decoded, self::FIELD_ADDRESS)) {
            if (is_object($decoded->address)) {
                $vals = [$decoded->address];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADDRESS, true);
            } else {
                $vals = $decoded->address;
            }
            foreach($vals as $v) {
                $type->addAddress(FHIRAddress::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->maritalStatus) || property_exists($decoded, self::FIELD_MARITAL_STATUS)) {
            if (is_array($decoded->maritalStatus)) {
                $type->setMaritalStatus(FHIRCodeableConcept::jsonUnserialize(reset($decoded->maritalStatus), $config));
            } else {
                $type->setMaritalStatus(FHIRCodeableConcept::jsonUnserialize($decoded->maritalStatus, $config));
            }
        }
        if (isset($decoded->multipleBirthBoolean)
            || isset($decoded->_multipleBirthBoolean)
            || property_exists($decoded, self::FIELD_MULTIPLE_BIRTH_BOOLEAN)
            || property_exists($decoded, self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT)) {
            $v = $decoded->_multipleBirthBoolean ?? new \stdClass();
            $v->value = $decoded->multipleBirthBoolean ?? null;
            $type->setMultipleBirthBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->multipleBirthInteger)
            || isset($decoded->_multipleBirthInteger)
            || property_exists($decoded, self::FIELD_MULTIPLE_BIRTH_INTEGER)
            || property_exists($decoded, self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT)) {
            $v = $decoded->_multipleBirthInteger ?? new \stdClass();
            $v->value = $decoded->multipleBirthInteger ?? null;
            $type->setMultipleBirthInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->photo) || property_exists($decoded, self::FIELD_PHOTO)) {
            if (is_object($decoded->photo)) {
                $vals = [$decoded->photo];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PHOTO, true);
            } else {
                $vals = $decoded->photo;
            }
            foreach($vals as $v) {
                $type->addPhoto(FHIRAttachment::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->contact) || property_exists($decoded, self::FIELD_CONTACT)) {
            if (is_object($decoded->contact)) {
                $vals = [$decoded->contact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTACT, true);
            } else {
                $vals = $decoded->contact;
            }
            foreach($vals as $v) {
                $type->addContact(FHIRPatientContact::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->animal) || property_exists($decoded, self::FIELD_ANIMAL)) {
            if (is_array($decoded->animal)) {
                $type->setAnimal(FHIRPatientAnimal::jsonUnserialize(reset($decoded->animal), $config));
            } else {
                $type->setAnimal(FHIRPatientAnimal::jsonUnserialize($decoded->animal, $config));
            }
        }
        if (isset($decoded->communication) || property_exists($decoded, self::FIELD_COMMUNICATION)) {
            if (is_object($decoded->communication)) {
                $vals = [$decoded->communication];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMMUNICATION, true);
            } else {
                $vals = $decoded->communication;
            }
            foreach($vals as $v) {
                $type->addCommunication(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->careProvider) || property_exists($decoded, self::FIELD_CARE_PROVIDER)) {
            if (is_object($decoded->careProvider)) {
                $vals = [$decoded->careProvider];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CARE_PROVIDER, true);
            } else {
                $vals = $decoded->careProvider;
            }
            foreach($vals as $v) {
                $type->addCareProvider(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->managingOrganization) || property_exists($decoded, self::FIELD_MANAGING_ORGANIZATION)) {
            if (is_array($decoded->managingOrganization)) {
                $type->setManagingOrganization(FHIRResourceReference::jsonUnserialize(reset($decoded->managingOrganization), $config));
            } else {
                $type->setManagingOrganization(FHIRResourceReference::jsonUnserialize($decoded->managingOrganization, $config));
            }
        }
        if (isset($decoded->link) || property_exists($decoded, self::FIELD_LINK)) {
            if (is_object($decoded->link)) {
                $vals = [$decoded->link];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LINK, true);
            } else {
                $vals = $decoded->link;
            }
            foreach($vals as $v) {
                $type->addLink(FHIRPatientLink::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->active)
            || isset($decoded->_active)
            || property_exists($decoded, self::FIELD_ACTIVE)
            || property_exists($decoded, self::FIELD_ACTIVE_EXT)) {
            $v = $decoded->_active ?? new \stdClass();
            $v->value = $decoded->active ?? null;
            $type->setActive(FHIRBoolean::jsonUnserialize($v, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->name) && [] !== $this->name) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_NAME) && 1 === count($this->name)) {
                $out->name = $this->name[0];
            } else {
                $out->name = $this->name;
            }
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TELECOM) && 1 === count($this->telecom)) {
                $out->telecom = $this->telecom[0];
            } else {
                $out->telecom = $this->telecom;
            }
        }
        if (isset($this->gender)) {
            $out->gender = $this->gender;
        }
        if (isset($this->birthDate)) {
            if (null !== ($val = $this->birthDate->getValue())) {
                $out->birthDate = $val;
            }
            if ($this->birthDate->_nonValueFieldDefined()) {
                $ext = $this->birthDate->jsonSerialize();
                unset($ext->value);
                $out->_birthDate = $ext;
            }
        }
        if (isset($this->deceasedBoolean)) {
            if (null !== ($val = $this->deceasedBoolean->getValue())) {
                $out->deceasedBoolean = $val;
            }
            if ($this->deceasedBoolean->_nonValueFieldDefined()) {
                $ext = $this->deceasedBoolean->jsonSerialize();
                unset($ext->value);
                $out->_deceasedBoolean = $ext;
            }
        }
        if (isset($this->deceasedDateTime)) {
            if (null !== ($val = $this->deceasedDateTime->getValue())) {
                $out->deceasedDateTime = $val;
            }
            if ($this->deceasedDateTime->_nonValueFieldDefined()) {
                $ext = $this->deceasedDateTime->jsonSerialize();
                unset($ext->value);
                $out->_deceasedDateTime = $ext;
            }
        }
        if (isset($this->address) && [] !== $this->address) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADDRESS) && 1 === count($this->address)) {
                $out->address = $this->address[0];
            } else {
                $out->address = $this->address;
            }
        }
        if (isset($this->maritalStatus)) {
            $out->maritalStatus = $this->maritalStatus;
        }
        if (isset($this->multipleBirthBoolean)) {
            if (null !== ($val = $this->multipleBirthBoolean->getValue())) {
                $out->multipleBirthBoolean = $val;
            }
            if ($this->multipleBirthBoolean->_nonValueFieldDefined()) {
                $ext = $this->multipleBirthBoolean->jsonSerialize();
                unset($ext->value);
                $out->_multipleBirthBoolean = $ext;
            }
        }
        if (isset($this->multipleBirthInteger)) {
            if (null !== ($val = $this->multipleBirthInteger->getValue())) {
                $out->multipleBirthInteger = $val;
            }
            if ($this->multipleBirthInteger->_nonValueFieldDefined()) {
                $ext = $this->multipleBirthInteger->jsonSerialize();
                unset($ext->value);
                $out->_multipleBirthInteger = $ext;
            }
        }
        if (isset($this->photo) && [] !== $this->photo) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PHOTO) && 1 === count($this->photo)) {
                $out->photo = $this->photo[0];
            } else {
                $out->photo = $this->photo;
            }
        }
        if (isset($this->contact) && [] !== $this->contact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTACT) && 1 === count($this->contact)) {
                $out->contact = $this->contact[0];
            } else {
                $out->contact = $this->contact;
            }
        }
        if (isset($this->animal)) {
            $out->animal = $this->animal;
        }
        if (isset($this->communication) && [] !== $this->communication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMMUNICATION) && 1 === count($this->communication)) {
                $out->communication = $this->communication[0];
            } else {
                $out->communication = $this->communication;
            }
        }
        if (isset($this->careProvider) && [] !== $this->careProvider) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CARE_PROVIDER) && 1 === count($this->careProvider)) {
                $out->careProvider = $this->careProvider[0];
            } else {
                $out->careProvider = $this->careProvider;
            }
        }
        if (isset($this->managingOrganization)) {
            $out->managingOrganization = $this->managingOrganization;
        }
        if (isset($this->link) && [] !== $this->link) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LINK) && 1 === count($this->link)) {
                $out->link = $this->link[0];
            } else {
                $out->link = $this->link;
            }
        }
        if (isset($this->active)) {
            if (null !== ($val = $this->active->getValue())) {
                $out->active = $val;
            }
            if ($this->active->_nonValueFieldDefined()) {
                $ext = $this->active->jsonSerialize();
                unset($ext->value);
                $out->_active = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}