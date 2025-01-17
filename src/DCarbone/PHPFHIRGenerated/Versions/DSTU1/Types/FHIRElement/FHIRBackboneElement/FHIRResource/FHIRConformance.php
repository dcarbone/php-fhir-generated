<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
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
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRConformance extends FHIRResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_PUBLISHER_EXT = '_publisher';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_EXPERIMENTAL = 'experimental';
    public const FIELD_EXPERIMENTAL_EXT = '_experimental';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_SOFTWARE = 'software';
    public const FIELD_IMPLEMENTATION = 'implementation';
    public const FIELD_FHIR_VERSION = 'fhirVersion';
    public const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    public const FIELD_ACCEPT_UNKNOWN = 'acceptUnknown';
    public const FIELD_ACCEPT_UNKNOWN_EXT = '_acceptUnknown';
    public const FIELD_FORMAT = 'format';
    public const FIELD_FORMAT_EXT = '_format';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_REST = 'rest';
    public const FIELD_MESSAGING = 'messaging';
    public const FIELD_DOCUMENT = 'document';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance (should be globally
     * unique OID, UUID, or URI).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $identifier;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the conformance statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of Organization publishing this conformance statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $publisher;
    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contacts for Organization relevant to this conformance statement. The contacts
     * may be a website, email, phone numbers, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact[] 
     */
    protected array $telecom;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the profile describes a desired rather than an
     * actual solution, for example as a formal expression of requirements as part of
     * an RFP.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * The status of this conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this conformance statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus 
     */
    protected FHIRConformanceStatementStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $experimental;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the conformance statement was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * profile describes the capabilities of a particular software version, independent
     * of an installation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware 
     */
    protected FHIRConformanceSoftware $software;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation 
     */
    protected FHIRConformanceImplementation $implementation;
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $fhirVersion;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates whether the application accepts unknown elements as part
     * of a resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $acceptUnknown;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode[] 
     */
    protected array $format;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles supported by the system. For a server, "supported by the
     * system" means the system hosts/produces a set of recourses, conformant to a
     * particular profile, and allows its clients to search using this profile and to
     * find appropriate data. For a client, it means the system will search by this
     * profile and process data according to the guidance implicit in the profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $profile;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[] 
     */
    protected array $rest;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[] 
     */
    protected array $messaging;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A document definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[] 
     */
    protected array $document;

    /** Default validation map for fields in type Conformance */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_PUBLISHER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FHIR_VERSION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ACCEPT_UNKNOWN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FORMAT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact[] $telecom
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware $software
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation $implementation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $fhirVersion
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $acceptUnknown
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode[] $format
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[] $rest
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[] $messaging
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[] $document
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|string|FHIRStringPrimitive|FHIRString $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $publisher = null,
                                null|iterable $telecom = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRConformanceStatementStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|FHIRConformanceSoftware $software = null,
                                null|FHIRConformanceImplementation $implementation = null,
                                null|string|FHIRIdPrimitive|FHIRId $fhirVersion = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $acceptUnknown = null,
                                null|iterable $format = null,
                                null|iterable $profile = null,
                                null|iterable $rest = null,
                                null|iterable $messaging = null,
                                null|iterable $document = null,
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
            $this->setIdentifier($identifier);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $publisher) {
            $this->setPublisher($publisher);
        }
        if (null !== $telecom) {
            $this->setTelecom(...$telecom);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $experimental) {
            $this->setExperimental($experimental);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $software) {
            $this->setSoftware($software);
        }
        if (null !== $implementation) {
            $this->setImplementation($implementation);
        }
        if (null !== $fhirVersion) {
            $this->setFhirVersion($fhirVersion);
        }
        if (null !== $acceptUnknown) {
            $this->setAcceptUnknown($acceptUnknown);
        }
        if (null !== $format) {
            $this->setFormat(...$format);
        }
        if (null !== $profile) {
            $this->setProfile(...$profile);
        }
        if (null !== $rest) {
            $this->setRest(...$rest);
        }
        if (null !== $messaging) {
            $this->setMessaging(...$messaging);
        }
        if (null !== $document) {
            $this->setDocument(...$document);
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance (should be globally
     * unique OID, UUID, or URI).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getIdentifier(): null|FHIRString
    {
        return $this->identifier ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance (should be globally
     * unique OID, UUID, or URI).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $identifier
     * @return static
     */
    public function setIdentifier(null|string|FHIRStringPrimitive|FHIRString $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        if (!($identifier instanceof FHIRString)) {
            $identifier = new FHIRString(value: $identifier);
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the conformance statement.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of Organization publishing this conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of Organization publishing this conformance statement.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        if (!($publisher instanceof FHIRString)) {
            $publisher = new FHIRString(value: $publisher);
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * All kinds of technology mediated contact details for a person or organization,
     * including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contacts for Organization relevant to this conformance statement. The contacts
     * may be a website, email, phone numbers, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact[]
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
        if (!isset($this->telecom) || [] === $this->telecom) {
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
     * Contacts for Organization relevant to this conformance statement. The contacts
     * may be a website, email, phone numbers, etc.
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
     * Contacts for Organization relevant to this conformance statement. The contacts
     * may be a website, email, phone numbers, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContact ...$telecom): self
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the profile describes a desired rather than an
     * actual solution, for example as a formal expression of requirements as part of
     * an RFP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the profile describes a desired rather than an
     * actual solution, for example as a formal expression of requirements as part of
     * an RFP.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The status of this conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus
     */
    public function getStatus(): null|FHIRConformanceStatementStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of this conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this conformance statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus $status
     * @return static
     */
    public function setStatus(null|FHIRConformanceStatementStatus $status): self
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
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental): self
    {
        if (null === $experimental) {
            unset($this->experimental);
            return $this;
        }
        if (!($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean(value: $experimental);
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the conformance statement was published.
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
     * The date when the conformance statement was published.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * profile describes the capabilities of a particular software version, independent
     * of an installation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware
     */
    public function getSoftware(): null|FHIRConformanceSoftware
    {
        return $this->software ?? null;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * profile describes the capabilities of a particular software version, independent
     * of an installation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware $software
     * @return static
     */
    public function setSoftware(null|FHIRConformanceSoftware $software): self
    {
        if (null === $software) {
            unset($this->software);
            return $this;
        }
        $this->software = $software;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation
     */
    public function getImplementation(): null|FHIRConformanceImplementation
    {
        return $this->implementation ?? null;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation $implementation
     * @return static
     */
    public function setImplementation(null|FHIRConformanceImplementation $implementation): self
    {
        if (null === $implementation) {
            unset($this->implementation);
            return $this;
        }
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getFhirVersion(): null|FHIRId
    {
        return $this->fhirVersion ?? null;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $fhirVersion
     * @return static
     */
    public function setFhirVersion(null|string|FHIRIdPrimitive|FHIRId $fhirVersion): self
    {
        if (null === $fhirVersion) {
            unset($this->fhirVersion);
            return $this;
        }
        if (!($fhirVersion instanceof FHIRId)) {
            $fhirVersion = new FHIRId(value: $fhirVersion);
        }
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates whether the application accepts unknown elements as part
     * of a resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getAcceptUnknown(): null|FHIRBoolean
    {
        return $this->acceptUnknown ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates whether the application accepts unknown elements as part
     * of a resource.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $acceptUnknown
     * @return static
     */
    public function setAcceptUnknown(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $acceptUnknown): self
    {
        if (null === $acceptUnknown) {
            unset($this->acceptUnknown);
            return $this;
        }
        if (!($acceptUnknown instanceof FHIRBoolean)) {
            $acceptUnknown = new FHIRBoolean(value: $acceptUnknown);
        }
        $this->acceptUnknown = $acceptUnknown;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode[]
     */
    public function getFormat(): array
    {
        return $this->format ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode>
     */
    public function getFormatIterator(): iterable
    {
        if (!isset($this->format) || [] === $this->format) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->format);
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $format
     * @return static
     */
    public function addFormat(string|FHIRCodePrimitive|FHIRCode $format): self
    {
        if (!($format instanceof FHIRCode)) {
            $format = new FHIRCode(value: $format);
        }
        if (!isset($this->format)) {
            $this->format = [];
        }
        $this->format[] = $format;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode ...$format
     * @return static
     */
    public function setFormat(string|FHIRCodePrimitive|FHIRCode ...$format): self
    {
        $this->format = [];
        foreach($format as $v) {
            if ($v instanceof FHIRCode) {
                $this->format[] = $v;
            } else {
                $this->format[] = new FHIRCode(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles supported by the system. For a server, "supported by the
     * system" means the system hosts/produces a set of recourses, conformant to a
     * particular profile, and allows its clients to search using this profile and to
     * find appropriate data. For a client, it means the system will search by this
     * profile and process data according to the guidance implicit in the profile.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getProfile(): array
    {
        return $this->profile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getProfileIterator(): iterable
    {
        if (!isset($this->profile) || [] === $this->profile) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->profile);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles supported by the system. For a server, "supported by the
     * system" means the system hosts/produces a set of recourses, conformant to a
     * particular profile, and allows its clients to search using this profile and to
     * find appropriate data. For a client, it means the system will search by this
     * profile and process data according to the guidance implicit in the profile.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $profile
     * @return static
     */
    public function addProfile(FHIRResourceReference $profile): self
    {
        if (!isset($this->profile)) {
            $this->profile = [];
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles supported by the system. For a server, "supported by the
     * system" means the system hosts/produces a set of recourses, conformant to a
     * particular profile, and allows its clients to search using this profile and to
     * find appropriate data. For a client, it means the system will search by this
     * profile and process data according to the guidance implicit in the profile.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$profile
     * @return static
     */
    public function setProfile(FHIRResourceReference ...$profile): self
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[]
     */
    public function getRest(): array
    {
        return $this->rest ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest>
     */
    public function getRestIterator(): iterable
    {
        if (!isset($this->rest) || [] === $this->rest) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->rest);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $rest
     * @return static
     */
    public function addRest(FHIRConformanceRest $rest): self
    {
        if (!isset($this->rest)) {
            $this->rest = [];
        }
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest ...$rest
     * @return static
     */
    public function setRest(FHIRConformanceRest ...$rest): self
    {
        $this->rest = $rest;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[]
     */
    public function getMessaging(): array
    {
        return $this->messaging ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging>
     */
    public function getMessagingIterator(): iterable
    {
        if (!isset($this->messaging) || [] === $this->messaging) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->messaging);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $messaging
     * @return static
     */
    public function addMessaging(FHIRConformanceMessaging $messaging): self
    {
        if (!isset($this->messaging)) {
            $this->messaging = [];
        }
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging ...$messaging
     * @return static
     */
    public function setMessaging(FHIRConformanceMessaging ...$messaging): self
    {
        $this->messaging = $messaging;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A document definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[]
     */
    public function getDocument(): array
    {
        return $this->document ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument>
     */
    public function getDocumentIterator(): iterable
    {
        if (!isset($this->document) || [] === $this->document) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->document);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A document definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument $document
     * @return static
     */
    public function addDocument(FHIRConformanceDocument $document): self
    {
        if (!isset($this->document)) {
            $this->document = [];
        }
        $this->document[] = $document;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A document definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument ...$document
     * @return static
     */
    public function setDocument(FHIRConformanceDocument ...$document): self
    {
        $this->document = $document;
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
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FHIR_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAcceptUnknown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCEPT_UNKNOWN] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORMAT, $i)] = $fieldErrs;
                }
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
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SOFTWARE])) {
            $v = $this->getSoftware();
            foreach($validationRules[self::FIELD_SOFTWARE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOFTWARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOFTWARE])) {
                        $errs[self::FIELD_SOFTWARE] = [];
                    }
                    $errs[self::FIELD_SOFTWARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLEMENTATION])) {
            $v = $this->getImplementation();
            foreach($validationRules[self::FIELD_IMPLEMENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLEMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLEMENTATION])) {
                        $errs[self::FIELD_IMPLEMENTATION] = [];
                    }
                    $errs[self::FIELD_IMPLEMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_VERSION])) {
            $v = $this->getFhirVersion();
            foreach($validationRules[self::FIELD_FHIR_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FHIR_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_VERSION])) {
                        $errs[self::FIELD_FHIR_VERSION] = [];
                    }
                    $errs[self::FIELD_FHIR_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCEPT_UNKNOWN])) {
            $v = $this->getAcceptUnknown();
            foreach($validationRules[self::FIELD_ACCEPT_UNKNOWN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACCEPT_UNKNOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCEPT_UNKNOWN])) {
                        $errs[self::FIELD_ACCEPT_UNKNOWN] = [];
                    }
                    $errs[self::FIELD_ACCEPT_UNKNOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORMAT])) {
            $v = $this->getFormat();
            foreach($validationRules[self::FIELD_FORMAT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORMAT])) {
                        $errs[self::FIELD_FORMAT] = [];
                    }
                    $errs[self::FIELD_FORMAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REST])) {
            $v = $this->getRest();
            foreach($validationRules[self::FIELD_REST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REST])) {
                        $errs[self::FIELD_REST] = [];
                    }
                    $errs[self::FIELD_REST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MESSAGING])) {
            $v = $this->getMessaging();
            foreach($validationRules[self::FIELD_MESSAGING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MESSAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MESSAGING])) {
                        $errs[self::FIELD_MESSAGING] = [];
                    }
                    $errs[self::FIELD_MESSAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT])) {
            $v = $this->getDocument();
            foreach($validationRules[self::FIELD_DOCUMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT])) {
                        $errs[self::FIELD_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_DOCUMENT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformance)) {
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
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
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
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIdentifier(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPublisher(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TELECOM === $childName) {
                $v = new FHIRContact();
                $type->addTelecom(FHIRContact::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRConformanceStatementStatus(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRConformanceStatementStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPERIMENTAL === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOFTWARE === $childName) {
                $v = new FHIRConformanceSoftware();
                $type->setSoftware(FHIRConformanceSoftware::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLEMENTATION === $childName) {
                $v = new FHIRConformanceImplementation();
                $type->setImplementation(FHIRConformanceImplementation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FHIR_VERSION === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFhirVersion(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACCEPT_UNKNOWN === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAcceptUnknown(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORMAT === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addFormat(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROFILE === $childName) {
                $v = new FHIRResourceReference();
                $type->addProfile(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REST === $childName) {
                $v = new FHIRConformanceRest();
                $type->addRest(FHIRConformanceRest::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MESSAGING === $childName) {
                $v = new FHIRConformanceMessaging();
                $type->addMessaging(FHIRConformanceMessaging::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOCUMENT === $childName) {
                $v = new FHIRConformanceDocument();
                $type->addDocument(FHIRConformanceDocument::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            $pt = $type->getIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IDENTIFIER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIdentifier(new FHIRString(
                    value: (string)$attributes[self::FIELD_IDENTIFIER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLISHER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLISHER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPERIMENTAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExperimental(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXPERIMENTAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FHIR_VERSION])) {
            $pt = $type->getFhirVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FHIR_VERSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFhirVersion(new FHIRId(
                    value: (string)$attributes[self::FIELD_FHIR_VERSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ACCEPT_UNKNOWN])) {
            $pt = $type->getAcceptUnknown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ACCEPT_UNKNOWN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAcceptUnknown(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ACCEPT_UNKNOWN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FORMAT])) {
            $v = new FHIRCode(value: (string)$attributes[self::FIELD_FORMAT],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addFormat($v);
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
            $xw->openRootNode('Conformance', $this->_getSourceXMLNS());
        }
        if (isset($this->identifier) && $this->identifier->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $this->identifier->getValue()?->getFormattedValue());
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->getFormattedValue());
        }
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->experimental) && $this->experimental->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->getValue()?->getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->getFormattedValue());
        }
        if (isset($this->fhirVersion) && $this->fhirVersion->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FHIR_VERSION, $this->fhirVersion->getValue()?->getFormattedValue());
        }
        if (isset($this->acceptUnknown) && $this->acceptUnknown->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ACCEPT_UNKNOWN, $this->acceptUnknown->getValue()?->getFormattedValue());
        }
        if (isset($this->format)) {
           foreach($this->format as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_FORMAT, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && $this->identifier->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->telecom)) {
            foreach ($this->telecom as $v) {
                $xw->startElement(self::FIELD_TELECOM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->experimental) && $this->experimental->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->software)) {
            $xw->startElement(self::FIELD_SOFTWARE);
            $this->software->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->implementation)) {
            $xw->startElement(self::FIELD_IMPLEMENTATION);
            $this->implementation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fhirVersion) && $this->fhirVersion->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FHIR_VERSION);
            $this->fhirVersion->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->acceptUnknown) && $this->acceptUnknown->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ACCEPT_UNKNOWN);
            $this->acceptUnknown->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->format)) {
            foreach($this->format as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_FORMAT);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->profile)) {
            foreach ($this->profile as $v) {
                $xw->startElement(self::FIELD_PROFILE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->rest)) {
            foreach ($this->rest as $v) {
                $xw->startElement(self::FIELD_REST);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->messaging)) {
            foreach ($this->messaging as $v) {
                $xw->startElement(self::FIELD_MESSAGING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->document)) {
            foreach ($this->document as $v) {
                $xw->startElement(self::FIELD_DOCUMENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformance)) {
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
        if (isset($json[self::FIELD_IDENTIFIER]) || isset($json[self::FIELD_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_IDENTIFIER, $json) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIER] ?? null;
            $ext = (isset($json[self::FIELD_IDENTIFIER_EXT]) && is_array($json[self::FIELD_IDENTIFIER_EXT])) ? $json[self::FIELD_IDENTIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setIdentifier($value);
                } else if (is_array($value)) {
                    $type->setIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIdentifier(new FHIRString($ext));
            } else {
                $type->setIdentifier(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VERSION]) || isset($json[self::FIELD_VERSION_EXT]) || array_key_exists(self::FIELD_VERSION, $json) || array_key_exists(self::FIELD_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_VERSION_EXT]) && is_array($json[self::FIELD_VERSION_EXT])) ? $json[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setVersion($value);
                } else if (is_array($value)) {
                    $type->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVersion(new FHIRString($ext));
            } else {
                $type->setVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRString($ext));
            } else {
                $type->setName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PUBLISHER]) || isset($json[self::FIELD_PUBLISHER_EXT]) || array_key_exists(self::FIELD_PUBLISHER, $json) || array_key_exists(self::FIELD_PUBLISHER_EXT, $json)) {
            $value = $json[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($json[self::FIELD_PUBLISHER_EXT]) && is_array($json[self::FIELD_PUBLISHER_EXT])) ? $json[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPublisher($value);
                } else if (is_array($value)) {
                    $type->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPublisher(new FHIRString($ext));
            } else {
                $type->setPublisher(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TELECOM]) || array_key_exists(self::FIELD_TELECOM, $json)) {
            if (is_array($json[self::FIELD_TELECOM])) {
                foreach($json[self::FIELD_TELECOM] as $v) {
                    if ($v instanceof FHIRContact) {
                        $type->addTelecom($v);
                    } else {
                        $type->addTelecom(new FHIRContact($v));
                    }
                }
            } elseif ($json[self::FIELD_TELECOM] instanceof FHIRContact) {
                $type->addTelecom($json[self::FIELD_TELECOM]);
            } else {
                $type->addTelecom(new FHIRContact($json[self::FIELD_TELECOM]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConformanceStatementStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRConformanceStatementStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRConformanceStatementStatus([FHIRConformanceStatementStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRConformanceStatementStatus($ext));
            } else {
                $type->setStatus(new FHIRConformanceStatementStatus(null));
            }
        }
        if (isset($json[self::FIELD_EXPERIMENTAL]) || isset($json[self::FIELD_EXPERIMENTAL_EXT]) || array_key_exists(self::FIELD_EXPERIMENTAL, $json) || array_key_exists(self::FIELD_EXPERIMENTAL_EXT, $json)) {
            $value = $json[self::FIELD_EXPERIMENTAL] ?? null;
            $ext = (isset($json[self::FIELD_EXPERIMENTAL_EXT]) && is_array($json[self::FIELD_EXPERIMENTAL_EXT])) ? $json[self::FIELD_EXPERIMENTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExperimental($value);
                } else if (is_array($value)) {
                    $type->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExperimental(new FHIRBoolean($ext));
            } else {
                $type->setExperimental(new FHIRBoolean(null));
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
        if (isset($json[self::FIELD_SOFTWARE]) || array_key_exists(self::FIELD_SOFTWARE, $json)) {
            if ($json[self::FIELD_SOFTWARE] instanceof FHIRConformanceSoftware) {
                $type->setSoftware($json[self::FIELD_SOFTWARE]);
            } else {
                $type->setSoftware(new FHIRConformanceSoftware($json[self::FIELD_SOFTWARE]));
            }
        }
        if (isset($json[self::FIELD_IMPLEMENTATION]) || array_key_exists(self::FIELD_IMPLEMENTATION, $json)) {
            if ($json[self::FIELD_IMPLEMENTATION] instanceof FHIRConformanceImplementation) {
                $type->setImplementation($json[self::FIELD_IMPLEMENTATION]);
            } else {
                $type->setImplementation(new FHIRConformanceImplementation($json[self::FIELD_IMPLEMENTATION]));
            }
        }
        if (isset($json[self::FIELD_FHIR_VERSION]) || isset($json[self::FIELD_FHIR_VERSION_EXT]) || array_key_exists(self::FIELD_FHIR_VERSION, $json) || array_key_exists(self::FIELD_FHIR_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_FHIR_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_FHIR_VERSION_EXT]) && is_array($json[self::FIELD_FHIR_VERSION_EXT])) ? $json[self::FIELD_FHIR_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setFhirVersion($value);
                } else if (is_array($value)) {
                    $type->setFhirVersion(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setFhirVersion(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFhirVersion(new FHIRId($ext));
            } else {
                $type->setFhirVersion(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_ACCEPT_UNKNOWN]) || isset($json[self::FIELD_ACCEPT_UNKNOWN_EXT]) || array_key_exists(self::FIELD_ACCEPT_UNKNOWN, $json) || array_key_exists(self::FIELD_ACCEPT_UNKNOWN_EXT, $json)) {
            $value = $json[self::FIELD_ACCEPT_UNKNOWN] ?? null;
            $ext = (isset($json[self::FIELD_ACCEPT_UNKNOWN_EXT]) && is_array($json[self::FIELD_ACCEPT_UNKNOWN_EXT])) ? $json[self::FIELD_ACCEPT_UNKNOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setAcceptUnknown($value);
                } else if (is_array($value)) {
                    $type->setAcceptUnknown(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setAcceptUnknown(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAcceptUnknown(new FHIRBoolean($ext));
            } else {
                $type->setAcceptUnknown(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_FORMAT]) || isset($json[self::FIELD_FORMAT_EXT]) || array_key_exists(self::FIELD_FORMAT, $json) || array_key_exists(self::FIELD_FORMAT_EXT, $json)) {
            $value = $json[self::FIELD_FORMAT] ?? null;
            $ext = (isset($json[self::FIELD_FORMAT_EXT]) && is_array($json[self::FIELD_FORMAT_EXT])) ? $json[self::FIELD_FORMAT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->addFormat($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $type->addFormat($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addFormat(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $type->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addFormat(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addFormat(new FHIRCode($iext));
                }
            } else {
                $type->addFormat(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_PROFILE]) || array_key_exists(self::FIELD_PROFILE, $json)) {
            if (is_array($json[self::FIELD_PROFILE])) {
                foreach($json[self::FIELD_PROFILE] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $type->addProfile($v);
                    } else {
                        $type->addProfile(new FHIRResourceReference($v));
                    }
                }
            } elseif ($json[self::FIELD_PROFILE] instanceof FHIRResourceReference) {
                $type->addProfile($json[self::FIELD_PROFILE]);
            } else {
                $type->addProfile(new FHIRResourceReference($json[self::FIELD_PROFILE]));
            }
        }
        if (isset($json[self::FIELD_REST]) || array_key_exists(self::FIELD_REST, $json)) {
            if (is_array($json[self::FIELD_REST])) {
                foreach($json[self::FIELD_REST] as $v) {
                    if ($v instanceof FHIRConformanceRest) {
                        $type->addRest($v);
                    } else {
                        $type->addRest(new FHIRConformanceRest($v));
                    }
                }
            } elseif ($json[self::FIELD_REST] instanceof FHIRConformanceRest) {
                $type->addRest($json[self::FIELD_REST]);
            } else {
                $type->addRest(new FHIRConformanceRest($json[self::FIELD_REST]));
            }
        }
        if (isset($json[self::FIELD_MESSAGING]) || array_key_exists(self::FIELD_MESSAGING, $json)) {
            if (is_array($json[self::FIELD_MESSAGING])) {
                foreach($json[self::FIELD_MESSAGING] as $v) {
                    if ($v instanceof FHIRConformanceMessaging) {
                        $type->addMessaging($v);
                    } else {
                        $type->addMessaging(new FHIRConformanceMessaging($v));
                    }
                }
            } elseif ($json[self::FIELD_MESSAGING] instanceof FHIRConformanceMessaging) {
                $type->addMessaging($json[self::FIELD_MESSAGING]);
            } else {
                $type->addMessaging(new FHIRConformanceMessaging($json[self::FIELD_MESSAGING]));
            }
        }
        if (isset($json[self::FIELD_DOCUMENT]) || array_key_exists(self::FIELD_DOCUMENT, $json)) {
            if (is_array($json[self::FIELD_DOCUMENT])) {
                foreach($json[self::FIELD_DOCUMENT] as $v) {
                    if ($v instanceof FHIRConformanceDocument) {
                        $type->addDocument($v);
                    } else {
                        $type->addDocument(new FHIRConformanceDocument($v));
                    }
                }
            } elseif ($json[self::FIELD_DOCUMENT] instanceof FHIRConformanceDocument) {
                $type->addDocument($json[self::FIELD_DOCUMENT]);
            } else {
                $type->addDocument(new FHIRConformanceDocument($json[self::FIELD_DOCUMENT]));
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
        if (isset($this->identifier)) {
            if (null !== ($val = $this->identifier->getValue())) {
                $out->identifier = $val;
            }
            $ext = $this->identifier->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_identifier = $ext;
            }
        }
        if (isset($this->version)) {
            if (null !== ($val = $this->version->getValue())) {
                $out->version = $val;
            }
            $ext = $this->version->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_version = $ext;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->publisher)) {
            if (null !== ($val = $this->publisher->getValue())) {
                $out->publisher = $val;
            }
            $ext = $this->publisher->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_publisher = $ext;
            }
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            $out->telecom = $this->telecom;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
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
        if (isset($this->experimental)) {
            if (null !== ($val = $this->experimental->getValue())) {
                $out->experimental = $val;
            }
            $ext = $this->experimental->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_experimental = $ext;
            }
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
        if (isset($this->software)) {
            $out->software = $this->software;
        }
        if (isset($this->implementation)) {
            $out->implementation = $this->implementation;
        }
        if (isset($this->fhirVersion)) {
            if (null !== ($val = $this->fhirVersion->getValue())) {
                $out->fhirVersion = $val;
            }
            $ext = $this->fhirVersion->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fhirVersion = $ext;
            }
        }
        if (isset($this->acceptUnknown)) {
            if (null !== ($val = $this->acceptUnknown->getValue())) {
                $out->acceptUnknown = $val;
            }
            $ext = $this->acceptUnknown->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_acceptUnknown = $ext;
            }
        }
        if (isset($this->format) && [] !== $this->format) {
            $vals = [];
            $exts = [];
            foreach ($this->format as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->format = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_format = $exts;
            }
        }
        if (isset($this->profile) && [] !== $this->profile) {
            $out->profile = $this->profile;
        }
        if (isset($this->rest) && [] !== $this->rest) {
            $out->rest = $this->rest;
        }
        if (isset($this->messaging) && [] !== $this->messaging) {
            $out->messaging = $this->messaging;
        }
        if (isset($this->document) && [] !== $this->document) {
            $out->document = $this->document;
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