<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A person who is directly or indirectly involved in the provisioning of
 * healthcare or related services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRPractitioner extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PRACTITIONER;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ACTIVE = 'active';
    public const FIELD_ACTIVE_EXT = '_active';
    public const FIELD_NAME = 'name';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_GENDER = 'gender';
    public const FIELD_GENDER_EXT = '_gender';
    public const FIELD_BIRTH_DATE = 'birthDate';
    public const FIELD_BIRTH_DATE_EXT = '_birthDate';
    public const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    public const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    public const FIELD_DECEASED_DATE_TIME = 'deceasedDateTime';
    public const FIELD_DECEASED_DATE_TIME_EXT = '_deceasedDateTime';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_QUALIFICATION = 'qualification';
    public const FIELD_COMMUNICATION = 'communication';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GENDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BIRTH_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that applies to this person in this role.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $active;
    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name(s) associated with the practitioner.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName> 
     */
    #[FHIRHumanName]
    protected array $name;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email
     * address.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint> 
     */
    #[FHIRContactPoint]
    protected array $telecom;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the person is considered to have for
     * administration and record keeping purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender 
     */
    #[FHIRAdministrativeGender]
    protected FHIRAdministrativeGender $gender;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the practitioner.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    #[FHIRDate]
    protected FHIRDate $birthDate;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $deceasedBoolean;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $deceasedDateTime;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Address(es) of the practitioner that are not role specific (typically home
     * address). Work addresses are not typically entered in this property as they are
     * usually role dependent.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress> 
     */
    #[FHIRAddress]
    protected array $address;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment> 
     */
    #[FHIRAttachment]
    protected array $photo;
    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * The official qualifications, certifications, accreditations, training, licenses
     * (and other types of educations/skills/capabilities) that authorize or otherwise
     * pertain to the provision of care by the practitioner. For example, a medical
     * license issued by a medical board of licensure authorizing the practitioner to
     * practice medicine within a certain locality.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification> 
     */
    #[FHIRPractitionerQualification]
    protected array $qualification;
    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * A language which may be used to communicate with the practitioner, often for
     * correspondence/administrative purposes. The `PractitionerRole.communication`
     * property should be used for publishing the languages that a practitioner is able
     * to communicate with patients (on a per Organization/Role basis).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication> 
     */
    #[FHIRPractitionerCommunication]
    protected array $communication;

    /* constructor.php:61 */
    /**
     * FHIRPractitioner Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $active
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName> $name
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint> $telecom
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $birthDate
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $deceasedDateTime
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress> $address
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment> $photo
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification> $qualification
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication> $communication
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
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $active = null,
                                null|iterable $name = null,
                                null|iterable $telecom = null,
                                null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $birthDate = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $deceasedDateTime = null,
                                null|iterable $address = null,
                                null|iterable $photo = null,
                                null|iterable $qualification = null,
                                null|iterable $communication = null,
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
        if (null !== $active) {
            $this->setActive($active);
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
        if (null !== $photo) {
            $this->setPhoto(...$photo);
        }
        if (null !== $qualification) {
            $this->setQualification(...$qualification);
        }
        if (null !== $communication) {
            $this->setCommunication(...$communication);
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that applies to this person in this role.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
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
     * An identifier that applies to this person in this role.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * An identifier that applies to this person in this role.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getActive(): null|FHIRBoolean
    {
        return $this->active ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $active
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

    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name(s) associated with the practitioner.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName>
     */
    public function getName(): array
    {
        return $this->name ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName>
     */
    public function getNameIterator(): iterable
    {
        if (!isset($this->name)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->name);
    }

    /**
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name(s) associated with the practitioner.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName $name
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
     * A name, normally of a human, that can be used for other living entities (e.g.
     * animals but not organizations) that have been assigned names by a human and may
     * need the use of name parts or the need for usage information.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name(s) associated with the practitioner.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRHumanName ...$name
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
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email
     * address.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint>
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email
     * address.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRContactPoint $telecom): self
    {
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A contact detail for the practitioner, e.g. a telephone number or an email
     * address.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContactPoint ...$telecom): self
    {
        if ([] === $telecom) {
            unset($this->telecom);
            return $this;
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the person is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the person is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            $gender = new FHIRAdministrativeGender(value: $gender);
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the practitioner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getBirthDate(): null|FHIRDate
    {
        return $this->birthDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date of birth for the practitioner.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $birthDate
     * @return static
     */
    public function setBirthDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $birthDate): self
    {
        if (null === $birthDate) {
            unset($this->birthDate);
            return $this;
        }
        if (!($birthDate instanceof FHIRDate)) {
            $birthDate = new FHIRDate(value: $birthDate);
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean(): null|FHIRBoolean
    {
        return $this->deceasedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $deceasedBoolean
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime(): null|FHIRDateTime
    {
        return $this->deceasedDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if the practitioner is deceased or not. (choose any one of deceased*,
     * but only one)
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $deceasedDateTime
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
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Address(es) of the practitioner that are not role specific (typically home
     * address). Work addresses are not typically entered in this property as they are
     * usually role dependent.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress>
     */
    public function getAddress(): array
    {
        return $this->address ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress>
     */
    public function getAddressIterator(): iterable
    {
        if (!isset($this->address)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->address);
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Address(es) of the practitioner that are not role specific (typically home
     * address). Work addresses are not typically entered in this property as they are
     * usually role dependent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress $address
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
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world. The ISO21090-codedString may be used to provide a coded
     * representation of the contents of strings in an Address.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Address(es) of the practitioner that are not role specific (typically home
     * address). Work addresses are not typically entered in this property as they are
     * usually role dependent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAddress ...$address
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Image of the person.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment>
     */
    public function getPhoto(): array
    {
        return $this->photo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $photo
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment ...$photo
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
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * The official qualifications, certifications, accreditations, training, licenses
     * (and other types of educations/skills/capabilities) that authorize or otherwise
     * pertain to the provision of care by the practitioner. For example, a medical
     * license issued by a medical board of licensure authorizing the practitioner to
     * practice medicine within a certain locality.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification>
     */
    public function getQualification(): array
    {
        return $this->qualification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification>
     */
    public function getQualificationIterator(): iterable
    {
        if (!isset($this->qualification)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->qualification);
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * The official qualifications, certifications, accreditations, training, licenses
     * (and other types of educations/skills/capabilities) that authorize or otherwise
     * pertain to the provision of care by the practitioner. For example, a medical
     * license issued by a medical board of licensure authorizing the practitioner to
     * practice medicine within a certain locality.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification $qualification
     * @return static
     */
    public function addQualification(FHIRPractitionerQualification $qualification): self
    {
        if (!isset($this->qualification)) {
            $this->qualification = [];
        }
        $this->qualification[] = $qualification;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * The official qualifications, certifications, accreditations, training, licenses
     * (and other types of educations/skills/capabilities) that authorize or otherwise
     * pertain to the provision of care by the practitioner. For example, a medical
     * license issued by a medical board of licensure authorizing the practitioner to
     * practice medicine within a certain locality.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification ...$qualification
     * @return static
     */
    public function setQualification(FHIRPractitionerQualification ...$qualification): self
    {
        if ([] === $qualification) {
            unset($this->qualification);
            return $this;
        }
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * A language which may be used to communicate with the practitioner, often for
     * correspondence/administrative purposes. The `PractitionerRole.communication`
     * property should be used for publishing the languages that a practitioner is able
     * to communicate with patients (on a per Organization/Role basis).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication>
     */
    public function getCommunication(): array
    {
        return $this->communication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication>
     */
    public function getCommunicationIterator(): iterable
    {
        if (!isset($this->communication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->communication);
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * A language which may be used to communicate with the practitioner, often for
     * correspondence/administrative purposes. The `PractitionerRole.communication`
     * property should be used for publishing the languages that a practitioner is able
     * to communicate with patients (on a per Organization/Role basis).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication $communication
     * @return static
     */
    public function addCommunication(FHIRPractitionerCommunication $communication): self
    {
        if (!isset($this->communication)) {
            $this->communication = [];
        }
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare or related services.
     *
     * A language which may be used to communicate with the practitioner, often for
     * correspondence/administrative purposes. The `PractitionerRole.communication`
     * property should be used for publishing the languages that a practitioner is able
     * to communicate with patients (on a per Organization/Role basis).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerCommunication ...$communication
     * @return static
     */
    public function setCommunication(FHIRPractitionerCommunication ...$communication): self
    {
        if ([] === $communication) {
            unset($this->communication);
            return $this;
        }
        $this->communication = $communication;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPractitioner)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTIVE === $cen) {
                $type->setActive(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->addName(FHIRHumanName::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TELECOM === $cen) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GENDER === $cen) {
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BIRTH_DATE === $cen) {
                $type->setBirthDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_BOOLEAN === $cen) {
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_DATE_TIME === $cen) {
                $type->setDeceasedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS === $cen) {
                $type->addAddress(FHIRAddress::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHOTO === $cen) {
                $type->addPhoto(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUALIFICATION === $cen) {
                $type->addQualification(FHIRPractitionerQualification::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMUNICATION === $cen) {
                $type->addCommunication(FHIRPractitionerCommunication::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTIVE])) {
            if (isset($type->active)) {
                $type->active->setValue((string)$attributes[self::FIELD_ACTIVE]);
            } else {
                $type->setActive((string)$attributes[self::FIELD_ACTIVE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACTIVE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GENDER])) {
            if (isset($type->gender)) {
                $type->gender->setValue((string)$attributes[self::FIELD_GENDER]);
            } else {
                $type->setGender((string)$attributes[self::FIELD_GENDER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GENDER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Practitioner', $this->_getSourceXMLNS());
        }
        if (isset($this->active) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTIVE]) {
            $xw->writeAttribute(self::FIELD_ACTIVE, $this->active->_getValueAsString());
        }
        if (isset($this->gender) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GENDER]) {
            $xw->writeAttribute(self::FIELD_GENDER, $this->gender->_getValueAsString());
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
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
        if (isset($this->gender)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GENDER]
                || $this->gender->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GENDER]);
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
        if (isset($this->photo)) {
            foreach ($this->photo as $v) {
                $xw->startElement(self::FIELD_PHOTO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->qualification)) {
            foreach ($this->qualification as $v) {
                $xw->startElement(self::FIELD_QUALIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->communication)) {
            foreach ($this->communication as $v) {
                $xw->startElement(self::FIELD_COMMUNICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPractitioner
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPractitioner)) {
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
        if (isset($decoded->active)
            || isset($decoded->_active)
            || property_exists($decoded, self::FIELD_ACTIVE)
            || property_exists($decoded, self::FIELD_ACTIVE_EXT)) {
            $v = $decoded->_active ?? new \stdClass();
            $v->value = $decoded->active ?? null;
            $type->setActive(FHIRBoolean::jsonUnserialize($v, $config));
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
                $type->addTelecom(FHIRContactPoint::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->gender)
            || isset($decoded->_gender)
            || property_exists($decoded, self::FIELD_GENDER)
            || property_exists($decoded, self::FIELD_GENDER_EXT)) {
            $v = $decoded->_gender ?? new \stdClass();
            $v->value = $decoded->gender ?? null;
            $type->setGender(FHIRAdministrativeGender::jsonUnserialize($v, $config));
        }
        if (isset($decoded->birthDate)
            || isset($decoded->_birthDate)
            || property_exists($decoded, self::FIELD_BIRTH_DATE)
            || property_exists($decoded, self::FIELD_BIRTH_DATE_EXT)) {
            $v = $decoded->_birthDate ?? new \stdClass();
            $v->value = $decoded->birthDate ?? null;
            $type->setBirthDate(FHIRDate::jsonUnserialize($v, $config));
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
        if (isset($decoded->qualification) || property_exists($decoded, self::FIELD_QUALIFICATION)) {
            if (is_object($decoded->qualification)) {
                $vals = [$decoded->qualification];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_QUALIFICATION, true);
            } else {
                $vals = $decoded->qualification;
            }
            foreach($vals as $v) {
                $type->addQualification(FHIRPractitionerQualification::jsonUnserialize($v, $config));
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
                $type->addCommunication(FHIRPractitionerCommunication::jsonUnserialize($v, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
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
            if (null !== ($val = $this->gender->getValue())) {
                $out->gender = $val;
            }
            if ($this->gender->_nonValueFieldDefined()) {
                $ext = $this->gender->jsonSerialize();
                unset($ext->value);
                $out->_gender = $ext;
            }
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
        if (isset($this->photo) && [] !== $this->photo) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PHOTO) && 1 === count($this->photo)) {
                $out->photo = $this->photo[0];
            } else {
                $out->photo = $this->photo;
            }
        }
        if (isset($this->qualification) && [] !== $this->qualification) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_QUALIFICATION) && 1 === count($this->qualification)) {
                $out->qualification = $this->qualification[0];
            } else {
                $out->qualification = $this->qualification;
            }
        }
        if (isset($this->communication) && [] !== $this->communication) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMMUNICATION) && 1 === count($this->communication)) {
                $out->communication = $this->communication[0];
            } else {
                $out->communication = $this->communication;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}