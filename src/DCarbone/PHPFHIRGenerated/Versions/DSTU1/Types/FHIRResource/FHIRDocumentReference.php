<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

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
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentReferenceStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * A reference to a document.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDocumentReference extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE;

    /* class_default.php:56 */
    public const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TYPE = 'type';
    public const FIELD_CLASS = 'class';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_CUSTODIAN = 'custodian';
    public const FIELD_POLICY_MANAGER = 'policyManager';
    public const FIELD_POLICY_MANAGER_EXT = '_policyManager';
    public const FIELD_AUTHENTICATOR = 'authenticator';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_INDEXED = 'indexed';
    public const FIELD_INDEXED_EXT = '_indexed';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_DOC_STATUS = 'docStatus';
    public const FIELD_RELATES_TO = 'relatesTo';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_CONFIDENTIALITY = 'confidentiality';
    public const FIELD_PRIMARY_LANGUAGE = 'primaryLanguage';
    public const FIELD_PRIMARY_LANGUAGE_EXT = '_primaryLanguage';
    public const FIELD_MIME_TYPE = 'mimeType';
    public const FIELD_MIME_TYPE_EXT = '_mimeType';
    public const FIELD_FORMAT = 'format';
    public const FIELD_FORMAT_EXT = '_format';
    public const FIELD_SIZE = 'size';
    public const FIELD_SIZE_EXT = '_size';
    public const FIELD_HASH = 'hash';
    public const FIELD_HASH_EXT = '_hash';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOCATION_EXT = '_location';
    public const FIELD_SERVICE = 'service';
    public const FIELD_CONTEXT = 'context';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_MASTER_IDENTIFIER => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_SUBJECT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_AUTHOR => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_INDEXED => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MIME_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_POLICY_MANAGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INDEXED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRIMARY_LANGUAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIME_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SIZE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HASH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LOCATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    #[FHIRIdentifier]
    protected FHIRIdentifier $masterIdentifier;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $subject;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $class;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $author;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $custodian;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $policyManager;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $authenticator;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $created;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $indexed;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus 
     */
    #[FHIRDocumentReferenceStatus]
    protected FHIRDocumentReferenceStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $docStatus;
    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo> 
     */
    #[FHIRDocumentReferenceRelatesTo]
    protected array $relatesTo;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $description;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $confidentiality;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $primaryLanguage;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $mimeType;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri> 
     */
    #[FHIRUri]
    protected array $format;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $size;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $hash;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $location;
    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService 
     */
    #[FHIRDocumentReferenceService]
    protected FHIRDocumentReferenceService $service;
    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext 
     */
    #[FHIRDocumentReferenceContext]
    protected FHIRDocumentReferenceContext $context;

    /* constructor.php:61 */
    /**
     * FHIRDocumentReference Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $masterIdentifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $class
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $custodian
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $policyManager
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $authenticator
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $created
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $indexed
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentReferenceStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $docStatus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo> $relatesTo
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> $confidentiality
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $primaryLanguage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $mimeType
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri> $format
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $size
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $hash
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService $service
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $masterIdentifier = null,
                                null|iterable $identifier = null,
                                null|FHIRResourceReference $subject = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $class = null,
                                null|iterable $author = null,
                                null|FHIRResourceReference $custodian = null,
                                null|string|FHIRUriPrimitive|FHIRUri $policyManager = null,
                                null|FHIRResourceReference $authenticator = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $indexed = null,
                                null|string|FHIRDocumentReferenceStatusList|FHIRDocumentReferenceStatus $status = null,
                                null|FHIRCodeableConcept $docStatus = null,
                                null|iterable $relatesTo = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|iterable $confidentiality = null,
                                null|string|FHIRCodePrimitive|FHIRCode $primaryLanguage = null,
                                null|string|FHIRCodePrimitive|FHIRCode $mimeType = null,
                                null|iterable $format = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $size = null,
                                null|string|FHIRStringPrimitive|FHIRString $hash = null,
                                null|string|FHIRUriPrimitive|FHIRUri $location = null,
                                null|FHIRDocumentReferenceService $service = null,
                                null|FHIRDocumentReferenceContext $context = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $masterIdentifier) {
            $this->setMasterIdentifier($masterIdentifier);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $class) {
            $this->setClass($class);
        }
        if (null !== $author) {
            $this->setAuthor(...$author);
        }
        if (null !== $custodian) {
            $this->setCustodian($custodian);
        }
        if (null !== $policyManager) {
            $this->setPolicyManager($policyManager);
        }
        if (null !== $authenticator) {
            $this->setAuthenticator($authenticator);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $indexed) {
            $this->setIndexed($indexed);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $docStatus) {
            $this->setDocStatus($docStatus);
        }
        if (null !== $relatesTo) {
            $this->setRelatesTo(...$relatesTo);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $confidentiality) {
            $this->setConfidentiality(...$confidentiality);
        }
        if (null !== $primaryLanguage) {
            $this->setPrimaryLanguage($primaryLanguage);
        }
        if (null !== $mimeType) {
            $this->setMimeType($mimeType);
        }
        if (null !== $format) {
            $this->setFormat(...$format);
        }
        if (null !== $size) {
            $this->setSize($size);
        }
        if (null !== $hash) {
            $this->setHash($hash);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $service) {
            $this->setService($service);
        }
        if (null !== $context) {
            $this->setContext($context);
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
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier(): null|FHIRIdentifier
    {
        return $this->masterIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return static
     */
    public function setMasterIdentifier(null|FHIRIdentifier $masterIdentifier): self
    {
        if (null === $masterIdentifier) {
            unset($this->masterIdentifier);
            return $this;
        }
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
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
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getClass(): null|FHIRCodeableConcept
    {
        return $this->class ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $class
     * @return static
     */
    public function setClass(null|FHIRCodeableConcept $class): self
    {
        if (null === $class) {
            unset($this->class);
            return $this;
        }
        $this->class = $class;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getAuthor(): array
    {
        return $this->author ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getAuthorIterator(): iterable
    {
        if (!isset($this->author)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->author);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $author
     * @return static
     */
    public function addAuthor(FHIRResourceReference $author): self
    {
        if (!isset($this->author)) {
            $this->author = [];
        }
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$author
     * @return static
     */
    public function setAuthor(FHIRResourceReference ...$author): self
    {
        if ([] === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getCustodian(): null|FHIRResourceReference
    {
        return $this->custodian ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $custodian
     * @return static
     */
    public function setCustodian(null|FHIRResourceReference $custodian): self
    {
        if (null === $custodian) {
            unset($this->custodian);
            return $this;
        }
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getPolicyManager(): null|FHIRUri
    {
        return $this->policyManager ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $policyManager
     * @return static
     */
    public function setPolicyManager(null|string|FHIRUriPrimitive|FHIRUri $policyManager): self
    {
        if (null === $policyManager) {
            unset($this->policyManager);
            return $this;
        }
        if (!($policyManager instanceof FHIRUri)) {
            $policyManager = new FHIRUri(value: $policyManager);
        }
        $this->policyManager = $policyManager;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getAuthenticator(): null|FHIRResourceReference
    {
        return $this->authenticator ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $authenticator
     * @return static
     */
    public function setAuthenticator(null|FHIRResourceReference $authenticator): self
    {
        if (null === $authenticator) {
            unset($this->authenticator);
            return $this;
        }
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        $this->created = $created;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getIndexed(): null|FHIRInstant
    {
        return $this->indexed ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $indexed
     * @return static
     */
    public function setIndexed(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $indexed): self
    {
        if (null === $indexed) {
            unset($this->indexed);
            return $this;
        }
        if (!($indexed instanceof FHIRInstant)) {
            $indexed = new FHIRInstant(value: $indexed);
        }
        $this->indexed = $indexed;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus(): null|FHIRDocumentReferenceStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentReferenceStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRDocumentReferenceStatusList|FHIRDocumentReferenceStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRDocumentReferenceStatus)) {
            $status = new FHIRDocumentReferenceStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDocStatus(): null|FHIRCodeableConcept
    {
        return $this->docStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $docStatus
     * @return static
     */
    public function setDocStatus(null|FHIRCodeableConcept $docStatus): self
    {
        if (null === $docStatus) {
            unset($this->docStatus);
            return $this;
        }
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo>
     */
    public function getRelatesTo(): array
    {
        return $this->relatesTo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo>
     */
    public function getRelatesToIterator(): iterable
    {
        if (!isset($this->relatesTo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatesTo);
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo $relatesTo
     * @return static
     */
    public function addRelatesTo(FHIRDocumentReferenceRelatesTo $relatesTo): self
    {
        if (!isset($this->relatesTo)) {
            $this->relatesTo = [];
        }
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo ...$relatesTo
     * @return static
     */
    public function setRelatesTo(FHIRDocumentReferenceRelatesTo ...$relatesTo): self
    {
        if ([] === $relatesTo) {
            unset($this->relatesTo);
            return $this;
        }
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
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
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getConfidentiality(): array
    {
        return $this->confidentiality ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getConfidentialityIterator(): iterable
    {
        if (!isset($this->confidentiality)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->confidentiality);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $confidentiality
     * @return static
     */
    public function addConfidentiality(FHIRCodeableConcept $confidentiality): self
    {
        if (!isset($this->confidentiality)) {
            $this->confidentiality = [];
        }
        $this->confidentiality[] = $confidentiality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept ...$confidentiality
     * @return static
     */
    public function setConfidentiality(FHIRCodeableConcept ...$confidentiality): self
    {
        if ([] === $confidentiality) {
            unset($this->confidentiality);
            return $this;
        }
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getPrimaryLanguage(): null|FHIRCode
    {
        return $this->primaryLanguage ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $primaryLanguage
     * @return static
     */
    public function setPrimaryLanguage(null|string|FHIRCodePrimitive|FHIRCode $primaryLanguage): self
    {
        if (null === $primaryLanguage) {
            unset($this->primaryLanguage);
            return $this;
        }
        if (!($primaryLanguage instanceof FHIRCode)) {
            $primaryLanguage = new FHIRCode(value: $primaryLanguage);
        }
        $this->primaryLanguage = $primaryLanguage;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getMimeType(): null|FHIRCode
    {
        return $this->mimeType ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $mimeType
     * @return static
     */
    public function setMimeType(null|string|FHIRCodePrimitive|FHIRCode $mimeType): self
    {
        if (null === $mimeType) {
            unset($this->mimeType);
            return $this;
        }
        if (!($mimeType instanceof FHIRCode)) {
            $mimeType = new FHIRCode(value: $mimeType);
        }
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri>
     */
    public function getFormat(): array
    {
        return $this->format ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri>
     */
    public function getFormatIterator(): iterable
    {
        if (!isset($this->format)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->format);
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $format
     * @return static
     */
    public function addFormat(string|FHIRUriPrimitive|FHIRUri $format): self
    {
        if (!($format instanceof FHIRUri)) {
            $format = new FHIRUri(value: $format);
        }
        if (!isset($this->format)) {
            $this->format = [];
        }
        $this->format[] = $format;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri ...$format
     * @return static
     */
    public function setFormat(string|FHIRUriPrimitive|FHIRUri ...$format): self
    {
        if ([] === $format) {
            unset($this->format);
            return $this;
        }
        $this->format = [];
        foreach($format as $v) {
            if ($v instanceof FHIRUri) {
                $this->format[] = $v;
            } else {
                $this->format[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getSize(): null|FHIRInteger
    {
        return $this->size ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $size
     * @return static
     */
    public function setSize(null|string|float|FHIRIntegerPrimitive|FHIRInteger $size): self
    {
        if (null === $size) {
            unset($this->size);
            return $this;
        }
        if (!($size instanceof FHIRInteger)) {
            $size = new FHIRInteger(value: $size);
        }
        $this->size = $size;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getHash(): null|FHIRString
    {
        return $this->hash ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $hash
     * @return static
     */
    public function setHash(null|string|FHIRStringPrimitive|FHIRString $hash): self
    {
        if (null === $hash) {
            unset($this->hash);
            return $this;
        }
        if (!($hash instanceof FHIRString)) {
            $hash = new FHIRString(value: $hash);
        }
        $this->hash = $hash;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getLocation(): null|FHIRUri
    {
        return $this->location ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $location
     * @return static
     */
    public function setLocation(null|string|FHIRUriPrimitive|FHIRUri $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        if (!($location instanceof FHIRUri)) {
            $location = new FHIRUri(value: $location);
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function getService(): null|FHIRDocumentReferenceService
    {
        return $this->service ?? null;
    }

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService $service
     * @return static
     */
    public function setService(null|FHIRDocumentReferenceService $service): self
    {
        if (null === $service) {
            unset($this->service);
            return $this;
        }
        $this->service = $service;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext(): null|FHIRDocumentReferenceContext
    {
        return $this->context ?? null;
    }

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     * @return static
     */
    public function setContext(null|FHIRDocumentReferenceContext $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDocumentReference)) {
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
            } else if (self::FIELD_MASTER_IDENTIFIER === $cen) {
                $type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASS === $cen) {
                $type->setClass(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->addAuthor(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CUSTODIAN === $cen) {
                $type->setCustodian(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY_MANAGER === $cen) {
                $type->setPolicyManager(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHENTICATOR === $cen) {
                $type->setAuthenticator(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED === $cen) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INDEXED === $cen) {
                $type->setIndexed(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOC_STATUS === $cen) {
                $type->setDocStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATES_TO === $cen) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONFIDENTIALITY === $cen) {
                $type->addConfidentiality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIMARY_LANGUAGE === $cen) {
                $type->setPrimaryLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIME_TYPE === $cen) {
                $type->setMimeType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORMAT === $cen) {
                $type->addFormat(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SIZE === $cen) {
                $type->setSize(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HASH === $cen) {
                $type->setHash(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE === $cen) {
                $type->setService(FHIRDocumentReferenceService::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRDocumentReferenceContext::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_POLICY_MANAGER])) {
            if (isset($type->policyManager)) {
                $type->policyManager->setValue((string)$attributes[self::FIELD_POLICY_MANAGER]);
            } else {
                $type->setPolicyManager((string)$attributes[self::FIELD_POLICY_MANAGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_POLICY_MANAGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            if (isset($type->created)) {
                $type->created->setValue((string)$attributes[self::FIELD_CREATED]);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CREATED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INDEXED])) {
            if (isset($type->indexed)) {
                $type->indexed->setValue((string)$attributes[self::FIELD_INDEXED]);
            } else {
                $type->setIndexed((string)$attributes[self::FIELD_INDEXED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INDEXED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRIMARY_LANGUAGE])) {
            if (isset($type->primaryLanguage)) {
                $type->primaryLanguage->setValue((string)$attributes[self::FIELD_PRIMARY_LANGUAGE]);
            } else {
                $type->setPrimaryLanguage((string)$attributes[self::FIELD_PRIMARY_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRIMARY_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIME_TYPE])) {
            if (isset($type->mimeType)) {
                $type->mimeType->setValue((string)$attributes[self::FIELD_MIME_TYPE]);
            } else {
                $type->setMimeType((string)$attributes[self::FIELD_MIME_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIME_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SIZE])) {
            if (isset($type->size)) {
                $type->size->setValue((string)$attributes[self::FIELD_SIZE]);
            } else {
                $type->setSize((string)$attributes[self::FIELD_SIZE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SIZE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HASH])) {
            if (isset($type->hash)) {
                $type->hash->setValue((string)$attributes[self::FIELD_HASH]);
            } else {
                $type->setHash((string)$attributes[self::FIELD_HASH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_HASH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOCATION])) {
            if (isset($type->location)) {
                $type->location->setValue((string)$attributes[self::FIELD_LOCATION]);
            } else {
                $type->setLocation((string)$attributes[self::FIELD_LOCATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LOCATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('DocumentReference', $this->_getSourceXMLNS());
        }
        if (isset($this->policyManager) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_POLICY_MANAGER]) {
            $xw->writeAttribute(self::FIELD_POLICY_MANAGER, $this->policyManager->_getValueAsString());
        }
        if (isset($this->created) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED]) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->_getValueAsString());
        }
        if (isset($this->indexed) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INDEXED]) {
            $xw->writeAttribute(self::FIELD_INDEXED, $this->indexed->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->primaryLanguage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRIMARY_LANGUAGE]) {
            $xw->writeAttribute(self::FIELD_PRIMARY_LANGUAGE, $this->primaryLanguage->_getValueAsString());
        }
        if (isset($this->mimeType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIME_TYPE]) {
            $xw->writeAttribute(self::FIELD_MIME_TYPE, $this->mimeType->_getValueAsString());
        }
        if (isset($this->size) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SIZE]) {
            $xw->writeAttribute(self::FIELD_SIZE, $this->size->_getValueAsString());
        }
        if (isset($this->hash) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HASH]) {
            $xw->writeAttribute(self::FIELD_HASH, $this->hash->_getValueAsString());
        }
        if (isset($this->location) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOCATION]) {
            $xw->writeAttribute(self::FIELD_LOCATION, $this->location->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->masterIdentifier)) {
            $xw->startElement(self::FIELD_MASTER_IDENTIFIER);
            $this->masterIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
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
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->class)) {
            $xw->startElement(self::FIELD_CLASS);
            $this->class->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->author)) {
            foreach ($this->author as $v) {
                $xw->startElement(self::FIELD_AUTHOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->custodian)) {
            $xw->startElement(self::FIELD_CUSTODIAN);
            $this->custodian->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->policyManager)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_POLICY_MANAGER]
                || $this->policyManager->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_POLICY_MANAGER);
            $this->policyManager->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_POLICY_MANAGER]);
            $xw->endElement();
        }
        if (isset($this->authenticator)) {
            $xw->startElement(self::FIELD_AUTHENTICATOR);
            $this->authenticator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->created)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CREATED]
                || $this->created->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CREATED]);
            $xw->endElement();
        }
        if (isset($this->indexed)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INDEXED]
                || $this->indexed->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INDEXED);
            $this->indexed->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INDEXED]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->docStatus)) {
            $xw->startElement(self::FIELD_DOC_STATUS);
            $this->docStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relatesTo)) {
            foreach ($this->relatesTo as $v) {
                $xw->startElement(self::FIELD_RELATES_TO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->confidentiality)) {
            foreach ($this->confidentiality as $v) {
                $xw->startElement(self::FIELD_CONFIDENTIALITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->primaryLanguage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRIMARY_LANGUAGE]
                || $this->primaryLanguage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRIMARY_LANGUAGE);
            $this->primaryLanguage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRIMARY_LANGUAGE]);
            $xw->endElement();
        }
        if (isset($this->mimeType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIME_TYPE]
                || $this->mimeType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIME_TYPE);
            $this->mimeType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIME_TYPE]);
            $xw->endElement();
        }
        if (isset($this->format) && [] !== $this->format) {
            foreach($this->format as $v) {
                $xw->startElement(self::FIELD_FORMAT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->size)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SIZE]
                || $this->size->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SIZE);
            $this->size->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SIZE]);
            $xw->endElement();
        }
        if (isset($this->hash)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HASH]
                || $this->hash->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HASH);
            $this->hash->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HASH]);
            $xw->endElement();
        }
        if (isset($this->location)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOCATION]
                || $this->location->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOCATION]);
            $xw->endElement();
        }
        if (isset($this->service)) {
            $xw->startElement(self::FIELD_SERVICE);
            $this->service->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->context)) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDocumentReference)) {
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
        if (isset($decoded->masterIdentifier) || property_exists($decoded, self::FIELD_MASTER_IDENTIFIER)) {
            if (is_array($decoded->masterIdentifier)) {
                $type->setMasterIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->masterIdentifier), $config));
            } else {
                $type->setMasterIdentifier(FHIRIdentifier::jsonUnserialize($decoded->masterIdentifier, $config));
            }
        }
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
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->class) || property_exists($decoded, self::FIELD_CLASS)) {
            if (is_array($decoded->class)) {
                $type->setClass(FHIRCodeableConcept::jsonUnserialize(reset($decoded->class), $config));
            } else {
                $type->setClass(FHIRCodeableConcept::jsonUnserialize($decoded->class, $config));
            }
        }
        if (isset($decoded->author) || property_exists($decoded, self::FIELD_AUTHOR)) {
            if (is_object($decoded->author)) {
                $vals = [$decoded->author];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AUTHOR, true);
            } else {
                $vals = $decoded->author;
            }
            foreach($vals as $v) {
                $type->addAuthor(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->custodian) || property_exists($decoded, self::FIELD_CUSTODIAN)) {
            if (is_array($decoded->custodian)) {
                $type->setCustodian(FHIRResourceReference::jsonUnserialize(reset($decoded->custodian), $config));
            } else {
                $type->setCustodian(FHIRResourceReference::jsonUnserialize($decoded->custodian, $config));
            }
        }
        if (isset($decoded->policyManager)
            || isset($decoded->_policyManager)
            || property_exists($decoded, self::FIELD_POLICY_MANAGER)
            || property_exists($decoded, self::FIELD_POLICY_MANAGER_EXT)) {
            $v = $decoded->_policyManager ?? new \stdClass();
            $v->value = $decoded->policyManager ?? null;
            $type->setPolicyManager(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->authenticator) || property_exists($decoded, self::FIELD_AUTHENTICATOR)) {
            if (is_array($decoded->authenticator)) {
                $type->setAuthenticator(FHIRResourceReference::jsonUnserialize(reset($decoded->authenticator), $config));
            } else {
                $type->setAuthenticator(FHIRResourceReference::jsonUnserialize($decoded->authenticator, $config));
            }
        }
        if (isset($decoded->created)
            || isset($decoded->_created)
            || property_exists($decoded, self::FIELD_CREATED)
            || property_exists($decoded, self::FIELD_CREATED_EXT)) {
            $v = $decoded->_created ?? new \stdClass();
            $v->value = $decoded->created ?? null;
            $type->setCreated(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->indexed)
            || isset($decoded->_indexed)
            || property_exists($decoded, self::FIELD_INDEXED)
            || property_exists($decoded, self::FIELD_INDEXED_EXT)) {
            $v = $decoded->_indexed ?? new \stdClass();
            $v->value = $decoded->indexed ?? null;
            $type->setIndexed(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRDocumentReferenceStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->docStatus) || property_exists($decoded, self::FIELD_DOC_STATUS)) {
            if (is_array($decoded->docStatus)) {
                $type->setDocStatus(FHIRCodeableConcept::jsonUnserialize(reset($decoded->docStatus), $config));
            } else {
                $type->setDocStatus(FHIRCodeableConcept::jsonUnserialize($decoded->docStatus, $config));
            }
        }
        if (isset($decoded->relatesTo) || property_exists($decoded, self::FIELD_RELATES_TO)) {
            if (is_object($decoded->relatesTo)) {
                $vals = [$decoded->relatesTo];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATES_TO, true);
            } else {
                $vals = $decoded->relatesTo;
            }
            foreach($vals as $v) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->confidentiality) || property_exists($decoded, self::FIELD_CONFIDENTIALITY)) {
            if (is_object($decoded->confidentiality)) {
                $vals = [$decoded->confidentiality];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONFIDENTIALITY, true);
            } else {
                $vals = $decoded->confidentiality;
            }
            foreach($vals as $v) {
                $type->addConfidentiality(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->primaryLanguage)
            || isset($decoded->_primaryLanguage)
            || property_exists($decoded, self::FIELD_PRIMARY_LANGUAGE)
            || property_exists($decoded, self::FIELD_PRIMARY_LANGUAGE_EXT)) {
            $v = $decoded->_primaryLanguage ?? new \stdClass();
            $v->value = $decoded->primaryLanguage ?? null;
            $type->setPrimaryLanguage(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->mimeType)
            || isset($decoded->_mimeType)
            || property_exists($decoded, self::FIELD_MIME_TYPE)
            || property_exists($decoded, self::FIELD_MIME_TYPE_EXT)) {
            $v = $decoded->_mimeType ?? new \stdClass();
            $v->value = $decoded->mimeType ?? null;
            $type->setMimeType(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->format)
            || isset($decoded->_format)
            || property_exists($decoded, self::FIELD_FORMAT)
            || property_exists($decoded, self::FIELD_FORMAT_EXT)) {
            $vals = (array)($decoded->format ?? []);
            $exts = (array)($decoded->FIELD_FORMAT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addFormat(FHIRUri::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->size)
            || isset($decoded->_size)
            || property_exists($decoded, self::FIELD_SIZE)
            || property_exists($decoded, self::FIELD_SIZE_EXT)) {
            $v = $decoded->_size ?? new \stdClass();
            $v->value = $decoded->size ?? null;
            $type->setSize(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->hash)
            || isset($decoded->_hash)
            || property_exists($decoded, self::FIELD_HASH)
            || property_exists($decoded, self::FIELD_HASH_EXT)) {
            $v = $decoded->_hash ?? new \stdClass();
            $v->value = $decoded->hash ?? null;
            $type->setHash(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->location)
            || isset($decoded->_location)
            || property_exists($decoded, self::FIELD_LOCATION)
            || property_exists($decoded, self::FIELD_LOCATION_EXT)) {
            $v = $decoded->_location ?? new \stdClass();
            $v->value = $decoded->location ?? null;
            $type->setLocation(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->service) || property_exists($decoded, self::FIELD_SERVICE)) {
            if (is_array($decoded->service)) {
                $type->setService(FHIRDocumentReferenceService::jsonUnserialize(reset($decoded->service), $config));
            } else {
                $type->setService(FHIRDocumentReferenceService::jsonUnserialize($decoded->service, $config));
            }
        }
        if (isset($decoded->context) || property_exists($decoded, self::FIELD_CONTEXT)) {
            if (is_array($decoded->context)) {
                $type->setContext(FHIRDocumentReferenceContext::jsonUnserialize(reset($decoded->context), $config));
            } else {
                $type->setContext(FHIRDocumentReferenceContext::jsonUnserialize($decoded->context, $config));
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
        if (isset($this->masterIdentifier)) {
            $out->masterIdentifier = $this->masterIdentifier;
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->class)) {
            $out->class = $this->class;
        }
        if (isset($this->author) && [] !== $this->author) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AUTHOR) && 1 === count($this->author)) {
                $out->author = $this->author[0];
            } else {
                $out->author = $this->author;
            }
        }
        if (isset($this->custodian)) {
            $out->custodian = $this->custodian;
        }
        if (isset($this->policyManager)) {
            if (null !== ($val = $this->policyManager->getValue())) {
                $out->policyManager = $val;
            }
            if ($this->policyManager->_nonValueFieldDefined()) {
                $ext = $this->policyManager->jsonSerialize();
                unset($ext->value);
                $out->_policyManager = $ext;
            }
        }
        if (isset($this->authenticator)) {
            $out->authenticator = $this->authenticator;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            if ($this->created->_nonValueFieldDefined()) {
                $ext = $this->created->jsonSerialize();
                unset($ext->value);
                $out->_created = $ext;
            }
        }
        if (isset($this->indexed)) {
            if (null !== ($val = $this->indexed->getValue())) {
                $out->indexed = $val;
            }
            if ($this->indexed->_nonValueFieldDefined()) {
                $ext = $this->indexed->jsonSerialize();
                unset($ext->value);
                $out->_indexed = $ext;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->docStatus)) {
            $out->docStatus = $this->docStatus;
        }
        if (isset($this->relatesTo) && [] !== $this->relatesTo) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATES_TO) && 1 === count($this->relatesTo)) {
                $out->relatesTo = $this->relatesTo[0];
            } else {
                $out->relatesTo = $this->relatesTo;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->confidentiality) && [] !== $this->confidentiality) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONFIDENTIALITY) && 1 === count($this->confidentiality)) {
                $out->confidentiality = $this->confidentiality[0];
            } else {
                $out->confidentiality = $this->confidentiality;
            }
        }
        if (isset($this->primaryLanguage)) {
            if (null !== ($val = $this->primaryLanguage->getValue())) {
                $out->primaryLanguage = $val;
            }
            if ($this->primaryLanguage->_nonValueFieldDefined()) {
                $ext = $this->primaryLanguage->jsonSerialize();
                unset($ext->value);
                $out->_primaryLanguage = $ext;
            }
        }
        if (isset($this->mimeType)) {
            if (null !== ($val = $this->mimeType->getValue())) {
                $out->mimeType = $val;
            }
            if ($this->mimeType->_nonValueFieldDefined()) {
                $ext = $this->mimeType->jsonSerialize();
                unset($ext->value);
                $out->_mimeType = $ext;
            }
        }
        if (isset($this->format) && [] !== $this->format) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->format as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->format = $vals;
            }
            if ($hasExts) {
                $out->_format = $exts;
            }
        }
        if (isset($this->size)) {
            if (null !== ($val = $this->size->getValue())) {
                $out->size = $val;
            }
            if ($this->size->_nonValueFieldDefined()) {
                $ext = $this->size->jsonSerialize();
                unset($ext->value);
                $out->_size = $ext;
            }
        }
        if (isset($this->hash)) {
            if (null !== ($val = $this->hash->getValue())) {
                $out->hash = $val;
            }
            if ($this->hash->_nonValueFieldDefined()) {
                $ext = $this->hash->jsonSerialize();
                unset($ext->value);
                $out->_hash = $ext;
            }
        }
        if (isset($this->location)) {
            if (null !== ($val = $this->location->getValue())) {
                $out->location = $val;
            }
            if ($this->location->_nonValueFieldDefined()) {
                $ext = $this->location->jsonSerialize();
                unset($ext->value);
                $out->_location = $ext;
            }
        }
        if (isset($this->service)) {
            $out->service = $this->service;
        }
        if (isset($this->context)) {
            $out->context = $this->context;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}