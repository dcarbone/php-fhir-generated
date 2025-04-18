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
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCompositionStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRCompositionStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDocumentReferenceStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A reference to a document of any kind for any purpose. While the term
 * “document” implies a more narrow focus, for this resource this "document"
 * encompasses *any* serialized object with a mime-type, it includes formal
 * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
 * specific documents like policy text, as well as a photo, video, or audio
 * recording acquired or used in healthcare. The DocumentReference resource
 * provides metadata about the document so that the document can be discovered and
 * managed. The actual content may be inline base64 encoded data or provided by
 * direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDocumentReference extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_DOC_STATUS = 'docStatus';
    public const FIELD_DOC_STATUS_EXT = '_docStatus';
    public const FIELD_MODALITY = 'modality';
    public const FIELD_TYPE = 'type';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_CONTEXT = 'context';
    public const FIELD_EVENT = 'event';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_FACILITY_TYPE = 'facilityType';
    public const FIELD_PRACTICE_SETTING = 'practiceSetting';
    public const FIELD_PERIOD = 'period';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_ATTESTER = 'attester';
    public const FIELD_CUSTODIAN = 'custodian';
    public const FIELD_RELATES_TO = 'relatesTo';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_SECURITY_LABEL = 'securityLabel';
    public const FIELD_CONTENT = 'content';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_CONTENT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOC_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other business identifiers associated with the document, including version
     * independent identifiers.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explicitly assigned identifer of a variation of the content in the
     * DocumentReference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $version;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $basedOn;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDocumentReferenceStatus 
     */
    #[FHIRDocumentReferenceStatus]
    protected FHIRDocumentReferenceStatus $status;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCompositionStatus 
     */
    #[FHIRCompositionStatus]
    protected FHIRCompositionStatus $docStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Imaging modality used. This may include both acquisition and non-acquisition
     * modalities.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $modality;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $category;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $context;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> 
     */
    #[FHIRCodeableReference]
    protected array $event;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures included in the document.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> 
     */
    #[FHIRCodeableReference]
    protected array $bodySite;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $facilityType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $practiceSetting;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $period;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $date;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $author;
    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester> 
     */
    #[FHIRDocumentReferenceAttester]
    protected array $attester;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $custodian;
    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo> 
     */
    #[FHIRDocumentReferenceRelatesTo]
    protected array $relatesTo;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-readable description of the source document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document found at DocumentReference.content.attachment.url. Note that
     * DocumentReference.meta.security contains the security labels of the data
     * elements in DocumentReference, while DocumentReference.securityLabel contains
     * the security labels for the document the reference refers to. The distinction
     * recognizes that the document may contain sensitive information, while the
     * DocumentReference is metadata about the document and thus might not be as
     * sensitive as the document. For example: a psychotherapy episode may contain
     * highly sensitive information, while the metadata may simply indicate that some
     * episode happened.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $securityLabel;
    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * The document and format referenced. If there are multiple content element
     * repetitions, these must all represent the same document in different format, or
     * attachment metadata.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent> 
     */
    #[FHIRDocumentReferenceContent]
    protected array $content;

    /* constructor.php:61 */
    /**
     * FHIRDocumentReference Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $basedOn
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDocumentReferenceStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDocumentReferenceStatus $status
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRCompositionStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCompositionStatus $docStatus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $modality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $context
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> $event
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference> $bodySite
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $facilityType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $practiceSetting
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $date
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $author
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester> $attester
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $custodian
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo> $relatesTo
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $securityLabel
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent> $content
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
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|iterable $basedOn = null,
                                null|string|FHIRDocumentReferenceStatusEnum|FHIRDocumentReferenceStatus $status = null,
                                null|string|FHIRCompositionStatusEnum|FHIRCompositionStatus $docStatus = null,
                                null|iterable $modality = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $category = null,
                                null|FHIRReference $subject = null,
                                null|iterable $context = null,
                                null|iterable $event = null,
                                null|iterable $bodySite = null,
                                null|FHIRCodeableConcept $facilityType = null,
                                null|FHIRCodeableConcept $practiceSetting = null,
                                null|FHIRPeriod $period = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $date = null,
                                null|iterable $author = null,
                                null|iterable $attester = null,
                                null|FHIRReference $custodian = null,
                                null|iterable $relatesTo = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $securityLabel = null,
                                null|iterable $content = null,
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
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $docStatus) {
            $this->setDocStatus($docStatus);
        }
        if (null !== $modality) {
            $this->setModality(...$modality);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $context) {
            $this->setContext(...$context);
        }
        if (null !== $event) {
            $this->setEvent(...$event);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $facilityType) {
            $this->setFacilityType($facilityType);
        }
        if (null !== $practiceSetting) {
            $this->setPracticeSetting($practiceSetting);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $author) {
            $this->setAuthor(...$author);
        }
        if (null !== $attester) {
            $this->setAttester(...$attester);
        }
        if (null !== $custodian) {
            $this->setCustodian($custodian);
        }
        if (null !== $relatesTo) {
            $this->setRelatesTo(...$relatesTo);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $securityLabel) {
            $this->setSecurityLabel(...$securityLabel);
        }
        if (null !== $content) {
            $this->setContent(...$content);
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
     * Other business identifiers associated with the document, including version
     * independent identifiers.
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
     * Other business identifiers associated with the document, including version
     * independent identifiers.
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
     * Other business identifiers associated with the document, including version
     * independent identifiers.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explicitly assigned identifer of a variation of the content in the
     * DocumentReference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explicitly assigned identifer of a variation of the content in the
     * DocumentReference.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn): self
    {
        if (!isset($this->basedOn)) {
            $this->basedOn = [];
        }
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] === $basedOn) {
            unset($this->basedOn);
            return $this;
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDocumentReferenceStatus
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDocumentReferenceStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRDocumentReferenceStatusEnum|FHIRDocumentReferenceStatus $status): self
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCompositionStatus
     */
    public function getDocStatus(): null|FHIRCompositionStatus
    {
        return $this->docStatus ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRCompositionStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCompositionStatus $docStatus
     * @return static
     */
    public function setDocStatus(null|string|FHIRCompositionStatusEnum|FHIRCompositionStatus $docStatus): self
    {
        if (null === $docStatus) {
            unset($this->docStatus);
            return $this;
        }
        if (!($docStatus instanceof FHIRCompositionStatus)) {
            $docStatus = new FHIRCompositionStatus(value: $docStatus);
        }
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Imaging modality used. This may include both acquisition and non-acquisition
     * modalities.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getModality(): array
    {
        return $this->modality ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getModalityIterator(): iterable
    {
        if (!isset($this->modality)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modality);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Imaging modality used. This may include both acquisition and non-acquisition
     * modalities.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $modality
     * @return static
     */
    public function addModality(FHIRCodeableConcept $modality): self
    {
        if (!isset($this->modality)) {
            $this->modality = [];
        }
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Imaging modality used. This may include both acquisition and non-acquisition
     * modalities.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$modality
     * @return static
     */
    public function setModality(FHIRCodeableConcept ...$modality): self
    {
        if ([] === $modality) {
            unset($this->modality);
            return $this;
        }
        $this->modality = $modality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
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
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getContext(): array
    {
        return $this->context ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getContextIterator(): iterable
    {
        if (!isset($this->context)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->context);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $context
     * @return static
     */
    public function addContext(FHIRReference $context): self
    {
        if (!isset($this->context)) {
            $this->context = [];
        }
        $this->context[] = $context;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$context
     * @return static
     */
    public function setContext(FHIRReference ...$context): self
    {
        if ([] === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getEvent(): array
    {
        return $this->event ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getEventIterator(): iterable
    {
        if (!isset($this->event)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->event);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $event
     * @return static
     */
    public function addEvent(FHIRCodeableReference $event): self
    {
        if (!isset($this->event)) {
            $this->event = [];
        }
        $this->event[] = $event;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$event
     * @return static
     */
    public function setEvent(FHIRCodeableReference ...$event): self
    {
        if ([] === $event) {
            unset($this->event);
            return $this;
        }
        $this->event = $event;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures included in the document.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getBodySiteIterator(): iterable
    {
        if (!isset($this->bodySite)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodySite);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures included in the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableReference $bodySite): self
    {
        if (!isset($this->bodySite)) {
            $this->bodySite = [];
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures included in the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableReference ...$bodySite): self
    {
        if ([] === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFacilityType(): null|FHIRCodeableConcept
    {
        return $this->facilityType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $facilityType
     * @return static
     */
    public function setFacilityType(null|FHIRCodeableConcept $facilityType): self
    {
        if (null === $facilityType) {
            unset($this->facilityType);
            return $this;
        }
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPracticeSetting(): null|FHIRCodeableConcept
    {
        return $this->practiceSetting ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $practiceSetting
     * @return static
     */
    public function setPracticeSetting(null|FHIRCodeableConcept $practiceSetting): self
    {
        if (null === $practiceSetting) {
            unset($this->practiceSetting);
            return $this;
        }
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getDate(): null|FHIRInstant
    {
        return $this->date ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRInstant)) {
            $date = new FHIRInstant(value: $date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAuthor(): array
    {
        return $this->author ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function addAuthor(FHIRReference $author): self
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$author
     * @return static
     */
    public function setAuthor(FHIRReference ...$author): self
    {
        if ([] === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester>
     */
    public function getAttester(): array
    {
        return $this->attester ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester>
     */
    public function getAttesterIterator(): iterable
    {
        if (!isset($this->attester)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->attester);
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester $attester
     * @return static
     */
    public function addAttester(FHIRDocumentReferenceAttester $attester): self
    {
        if (!isset($this->attester)) {
            $this->attester = [];
        }
        $this->attester[] = $attester;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * A participant who has authenticated the accuracy of the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAttester ...$attester
     * @return static
     */
    public function setAttester(FHIRDocumentReferenceAttester ...$attester): self
    {
        if ([] === $attester) {
            unset($this->attester);
            return $this;
        }
        $this->attester = $attester;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getCustodian(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $custodian
     * @return static
     */
    public function setCustodian(null|FHIRReference $custodian): self
    {
        if (null === $custodian) {
            unset($this->custodian);
            return $this;
        }
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo>
     */
    public function getRelatesTo(): array
    {
        return $this->relatesTo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo>
     */
    public function getRelatesToIterator(): iterable
    {
        if (!isset($this->relatesTo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatesTo);
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo $relatesTo
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
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo ...$relatesTo
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-readable description of the source document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-readable description of the source document.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
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
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document found at DocumentReference.content.attachment.url. Note that
     * DocumentReference.meta.security contains the security labels of the data
     * elements in DocumentReference, while DocumentReference.securityLabel contains
     * the security labels for the document the reference refers to. The distinction
     * recognizes that the document may contain sensitive information, while the
     * DocumentReference is metadata about the document and thus might not be as
     * sensitive as the document. For example: a psychotherapy episode may contain
     * highly sensitive information, while the metadata may simply indicate that some
     * episode happened.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSecurityLabel(): array
    {
        return $this->securityLabel ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSecurityLabelIterator(): iterable
    {
        if (!isset($this->securityLabel)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->securityLabel);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document found at DocumentReference.content.attachment.url. Note that
     * DocumentReference.meta.security contains the security labels of the data
     * elements in DocumentReference, while DocumentReference.securityLabel contains
     * the security labels for the document the reference refers to. The distinction
     * recognizes that the document may contain sensitive information, while the
     * DocumentReference is metadata about the document and thus might not be as
     * sensitive as the document. For example: a psychotherapy episode may contain
     * highly sensitive information, while the metadata may simply indicate that some
     * episode happened.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $securityLabel
     * @return static
     */
    public function addSecurityLabel(FHIRCodeableConcept $securityLabel): self
    {
        if (!isset($this->securityLabel)) {
            $this->securityLabel = [];
        }
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document found at DocumentReference.content.attachment.url. Note that
     * DocumentReference.meta.security contains the security labels of the data
     * elements in DocumentReference, while DocumentReference.securityLabel contains
     * the security labels for the document the reference refers to. The distinction
     * recognizes that the document may contain sensitive information, while the
     * DocumentReference is metadata about the document and thus might not be as
     * sensitive as the document. For example: a psychotherapy episode may contain
     * highly sensitive information, while the metadata may simply indicate that some
     * episode happened.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$securityLabel
     * @return static
     */
    public function setSecurityLabel(FHIRCodeableConcept ...$securityLabel): self
    {
        if ([] === $securityLabel) {
            unset($this->securityLabel);
            return $this;
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * The document and format referenced. If there are multiple content element
     * repetitions, these must all represent the same document in different format, or
     * attachment metadata.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent>
     */
    public function getContent(): array
    {
        return $this->content ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent>
     */
    public function getContentIterator(): iterable
    {
        if (!isset($this->content)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->content);
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * The document and format referenced. If there are multiple content element
     * repetitions, these must all represent the same document in different format, or
     * attachment metadata.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent $content
     * @return static
     */
    public function addContent(FHIRDocumentReferenceContent $content): self
    {
        if (!isset($this->content)) {
            $this->content = [];
        }
        $this->content[] = $content;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. While the term
     * “document” implies a more narrow focus, for this resource this "document"
     * encompasses *any* serialized object with a mime-type, it includes formal
     * patient-centric documents (CDA), clinical notes, scanned paper, non-patient
     * specific documents like policy text, as well as a photo, video, or audio
     * recording acquired or used in healthcare. The DocumentReference resource
     * provides metadata about the document so that the document can be discovered and
     * managed. The actual content may be inline base64 encoded data or provided by
     * direct reference.
     *
     * The document and format referenced. If there are multiple content element
     * repetitions, these must all represent the same document in different format, or
     * attachment metadata.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent ...$content
     * @return static
     */
    public function setContent(FHIRDocumentReferenceContent ...$content): self
    {
        if ([] === $content) {
            unset($this->content);
            return $this;
        }
        $this->content = $content;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASED_ON === $cen) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOC_STATUS === $cen) {
                $type->setDocStatus(FHIRCompositionStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODALITY === $cen) {
                $type->addModality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->addContext(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT === $cen) {
                $type->addEvent(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACILITY_TYPE === $cen) {
                $type->setFacilityType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRACTICE_SETTING === $cen) {
                $type->setPracticeSetting(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->addAuthor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ATTESTER === $cen) {
                $type->addAttester(FHIRDocumentReferenceAttester::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CUSTODIAN === $cen) {
                $type->setCustodian(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATES_TO === $cen) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SECURITY_LABEL === $cen) {
                $type->addSecurityLabel(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->addContent(FHIRDocumentReferenceContent::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_VERSION])) {
            if (isset($type->version)) {
                $type->version->setValue((string)$attributes[self::FIELD_VERSION]);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOC_STATUS])) {
            if (isset($type->docStatus)) {
                $type->docStatus->setValue((string)$attributes[self::FIELD_DOC_STATUS]);
            } else {
                $type->setDocStatus((string)$attributes[self::FIELD_DOC_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOC_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->version) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION]) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->docStatus) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOC_STATUS]) {
            $xw->writeAttribute(self::FIELD_DOC_STATUS, $this->docStatus->_getValueAsString());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->version)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSION]
                || $this->version->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSION]);
            $xw->endElement();
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->docStatus)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOC_STATUS]
                || $this->docStatus->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOC_STATUS);
            $this->docStatus->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOC_STATUS]);
            $xw->endElement();
        }
        if (isset($this->modality)) {
            foreach ($this->modality as $v) {
                $xw->startElement(self::FIELD_MODALITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->context)) {
            foreach ($this->context as $v) {
                $xw->startElement(self::FIELD_CONTEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->event)) {
            foreach ($this->event as $v) {
                $xw->startElement(self::FIELD_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->bodySite)) {
            foreach ($this->bodySite as $v) {
                $xw->startElement(self::FIELD_BODY_SITE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->facilityType)) {
            $xw->startElement(self::FIELD_FACILITY_TYPE);
            $this->facilityType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->practiceSetting)) {
            $xw->startElement(self::FIELD_PRACTICE_SETTING);
            $this->practiceSetting->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->author)) {
            foreach ($this->author as $v) {
                $xw->startElement(self::FIELD_AUTHOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->attester)) {
            foreach ($this->attester as $v) {
                $xw->startElement(self::FIELD_ATTESTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->custodian)) {
            $xw->startElement(self::FIELD_CUSTODIAN);
            $this->custodian->xmlSerialize($xw, $config);
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
        if (isset($this->securityLabel)) {
            foreach ($this->securityLabel as $v) {
                $xw->startElement(self::FIELD_SECURITY_LABEL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->content)) {
            foreach ($this->content as $v) {
                $xw->startElement(self::FIELD_CONTENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
        if (isset($decoded->version)
            || isset($decoded->_version)
            || property_exists($decoded, self::FIELD_VERSION)
            || property_exists($decoded, self::FIELD_VERSION_EXT)) {
            $v = $decoded->_version ?? new \stdClass();
            $v->value = $decoded->version ?? null;
            $type->setVersion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->basedOn) || property_exists($decoded, self::FIELD_BASED_ON)) {
            if (is_object($decoded->basedOn)) {
                $vals = [$decoded->basedOn];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BASED_ON, true);
            } else {
                $vals = $decoded->basedOn;
            }
            foreach($vals as $v) {
                $type->addBasedOn(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRDocumentReferenceStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->docStatus)
            || isset($decoded->_docStatus)
            || property_exists($decoded, self::FIELD_DOC_STATUS)
            || property_exists($decoded, self::FIELD_DOC_STATUS_EXT)) {
            $v = $decoded->_docStatus ?? new \stdClass();
            $v->value = $decoded->docStatus ?? null;
            $type->setDocStatus(FHIRCompositionStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->modality) || property_exists($decoded, self::FIELD_MODALITY)) {
            if (is_object($decoded->modality)) {
                $vals = [$decoded->modality];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODALITY, true);
            } else {
                $vals = $decoded->modality;
            }
            foreach($vals as $v) {
                $type->addModality(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->category) || property_exists($decoded, self::FIELD_CATEGORY)) {
            if (is_object($decoded->category)) {
                $vals = [$decoded->category];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CATEGORY, true);
            } else {
                $vals = $decoded->category;
            }
            foreach($vals as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->context) || property_exists($decoded, self::FIELD_CONTEXT)) {
            if (is_object($decoded->context)) {
                $vals = [$decoded->context];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTEXT, true);
            } else {
                $vals = $decoded->context;
            }
            foreach($vals as $v) {
                $type->addContext(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->event) || property_exists($decoded, self::FIELD_EVENT)) {
            if (is_object($decoded->event)) {
                $vals = [$decoded->event];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EVENT, true);
            } else {
                $vals = $decoded->event;
            }
            foreach($vals as $v) {
                $type->addEvent(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->bodySite) || property_exists($decoded, self::FIELD_BODY_SITE)) {
            if (is_object($decoded->bodySite)) {
                $vals = [$decoded->bodySite];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BODY_SITE, true);
            } else {
                $vals = $decoded->bodySite;
            }
            foreach($vals as $v) {
                $type->addBodySite(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->facilityType) || property_exists($decoded, self::FIELD_FACILITY_TYPE)) {
            if (is_array($decoded->facilityType)) {
                $type->setFacilityType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->facilityType), $config));
            } else {
                $type->setFacilityType(FHIRCodeableConcept::jsonUnserialize($decoded->facilityType, $config));
            }
        }
        if (isset($decoded->practiceSetting) || property_exists($decoded, self::FIELD_PRACTICE_SETTING)) {
            if (is_array($decoded->practiceSetting)) {
                $type->setPracticeSetting(FHIRCodeableConcept::jsonUnserialize(reset($decoded->practiceSetting), $config));
            } else {
                $type->setPracticeSetting(FHIRCodeableConcept::jsonUnserialize($decoded->practiceSetting, $config));
            }
        }
        if (isset($decoded->period) || property_exists($decoded, self::FIELD_PERIOD)) {
            if (is_array($decoded->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($decoded->period, $config));
            }
        }
        if (isset($decoded->date)
            || isset($decoded->_date)
            || property_exists($decoded, self::FIELD_DATE)
            || property_exists($decoded, self::FIELD_DATE_EXT)) {
            $v = $decoded->_date ?? new \stdClass();
            $v->value = $decoded->date ?? null;
            $type->setDate(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->author) || property_exists($decoded, self::FIELD_AUTHOR)) {
            if (is_object($decoded->author)) {
                $vals = [$decoded->author];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AUTHOR, true);
            } else {
                $vals = $decoded->author;
            }
            foreach($vals as $v) {
                $type->addAuthor(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->attester) || property_exists($decoded, self::FIELD_ATTESTER)) {
            if (is_object($decoded->attester)) {
                $vals = [$decoded->attester];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ATTESTER, true);
            } else {
                $vals = $decoded->attester;
            }
            foreach($vals as $v) {
                $type->addAttester(FHIRDocumentReferenceAttester::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->custodian) || property_exists($decoded, self::FIELD_CUSTODIAN)) {
            if (is_array($decoded->custodian)) {
                $type->setCustodian(FHIRReference::jsonUnserialize(reset($decoded->custodian), $config));
            } else {
                $type->setCustodian(FHIRReference::jsonUnserialize($decoded->custodian, $config));
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
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->securityLabel) || property_exists($decoded, self::FIELD_SECURITY_LABEL)) {
            if (is_object($decoded->securityLabel)) {
                $vals = [$decoded->securityLabel];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SECURITY_LABEL, true);
            } else {
                $vals = $decoded->securityLabel;
            }
            foreach($vals as $v) {
                $type->addSecurityLabel(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->content) || property_exists($decoded, self::FIELD_CONTENT)) {
            if (is_object($decoded->content)) {
                $vals = [$decoded->content];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTENT, true);
            } else {
                $vals = $decoded->content;
            }
            foreach($vals as $v) {
                $type->addContent(FHIRDocumentReferenceContent::jsonUnserialize($v, $config));
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
        if (isset($this->version)) {
            if (null !== ($val = $this->version->getValue())) {
                $out->version = $val;
            }
            if ($this->version->_nonValueFieldDefined()) {
                $ext = $this->version->jsonSerialize();
                unset($ext->value);
                $out->_version = $ext;
            }
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BASED_ON) && 1 === count($this->basedOn)) {
                $out->basedOn = $this->basedOn[0];
            } else {
                $out->basedOn = $this->basedOn;
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
            if (null !== ($val = $this->docStatus->getValue())) {
                $out->docStatus = $val;
            }
            if ($this->docStatus->_nonValueFieldDefined()) {
                $ext = $this->docStatus->jsonSerialize();
                unset($ext->value);
                $out->_docStatus = $ext;
            }
        }
        if (isset($this->modality) && [] !== $this->modality) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODALITY) && 1 === count($this->modality)) {
                $out->modality = $this->modality[0];
            } else {
                $out->modality = $this->modality;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->category) && [] !== $this->category) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CATEGORY) && 1 === count($this->category)) {
                $out->category = $this->category[0];
            } else {
                $out->category = $this->category;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->context) && [] !== $this->context) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTEXT) && 1 === count($this->context)) {
                $out->context = $this->context[0];
            } else {
                $out->context = $this->context;
            }
        }
        if (isset($this->event) && [] !== $this->event) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EVENT) && 1 === count($this->event)) {
                $out->event = $this->event[0];
            } else {
                $out->event = $this->event;
            }
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BODY_SITE) && 1 === count($this->bodySite)) {
                $out->bodySite = $this->bodySite[0];
            } else {
                $out->bodySite = $this->bodySite;
            }
        }
        if (isset($this->facilityType)) {
            $out->facilityType = $this->facilityType;
        }
        if (isset($this->practiceSetting)) {
            $out->practiceSetting = $this->practiceSetting;
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
        }
        if (isset($this->author) && [] !== $this->author) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AUTHOR) && 1 === count($this->author)) {
                $out->author = $this->author[0];
            } else {
                $out->author = $this->author;
            }
        }
        if (isset($this->attester) && [] !== $this->attester) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ATTESTER) && 1 === count($this->attester)) {
                $out->attester = $this->attester[0];
            } else {
                $out->attester = $this->attester;
            }
        }
        if (isset($this->custodian)) {
            $out->custodian = $this->custodian;
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
        if (isset($this->securityLabel) && [] !== $this->securityLabel) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SECURITY_LABEL) && 1 === count($this->securityLabel)) {
                $out->securityLabel = $this->securityLabel[0];
            } else {
                $out->securityLabel = $this->securityLabel;
            }
        }
        if (isset($this->content) && [] !== $this->content) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTENT) && 1 === count($this->content)) {
                $out->content = $this->content[0];
            } else {
                $out->content = $this->content;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}