<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;

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
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRVersion;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureDefinitionKind;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTypeDerivationRule;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFHIRVersionEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureDefinitionKindEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTypeDerivationRuleEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A definition of a FHIR structure. This resource is used to describe the
 * underlying resources, data types defined in FHIR, and also for describing
 * extensions and constraints on resources and data types.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRStructureDefinition extends FHIRCanonicalResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        SourceXMLNamespaceTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION;

    /* class_default.php:56 */
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_VERSION = 'version';
    public const FIELD_VERSION_EXT = '_version';
    public const FIELD_VERSION_ALGORITHM_STRING = 'versionAlgorithmString';
    public const FIELD_VERSION_ALGORITHM_STRING_EXT = '_versionAlgorithmString';
    public const FIELD_VERSION_ALGORITHM_CODING = 'versionAlgorithmCoding';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_EXPERIMENTAL = 'experimental';
    public const FIELD_EXPERIMENTAL_EXT = '_experimental';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_PUBLISHER_EXT = '_publisher';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_USE_CONTEXT = 'useContext';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_PURPOSE = 'purpose';
    public const FIELD_PURPOSE_EXT = '_purpose';
    public const FIELD_COPYRIGHT = 'copyright';
    public const FIELD_COPYRIGHT_EXT = '_copyright';
    public const FIELD_COPYRIGHT_LABEL = 'copyrightLabel';
    public const FIELD_COPYRIGHT_LABEL_EXT = '_copyrightLabel';
    public const FIELD_KEYWORD = 'keyword';
    public const FIELD_FHIR_VERSION = 'fhirVersion';
    public const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    public const FIELD_MAPPING = 'mapping';
    public const FIELD_KIND = 'kind';
    public const FIELD_KIND_EXT = '_kind';
    public const FIELD_ABSTRACT = 'abstract';
    public const FIELD_ABSTRACT_EXT = '_abstract';
    public const FIELD_CONTEXT = 'context';
    public const FIELD_CONTEXT_INVARIANT = 'contextInvariant';
    public const FIELD_CONTEXT_INVARIANT_EXT = '_contextInvariant';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_BASE_DEFINITION = 'baseDefinition';
    public const FIELD_BASE_DEFINITION_EXT = '_baseDefinition';
    public const FIELD_DERIVATION = 'derivation';
    public const FIELD_DERIVATION_EXT = '_derivation';
    public const FIELD_SNAPSHOT = 'snapshot';
    public const FIELD_DIFFERENTIAL = 'differential';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_URL => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_NAME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_KIND => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ABSTRACT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION_ALGORITHM_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPERIMENTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLISHER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PURPOSE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FHIR_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_KIND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABSTRACT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BASE_DEFINITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DERIVATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $url;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $versionAlgorithmString;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    #[FHIRCoding]
    protected FHIRCoding $versionAlgorithmCoding;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $title;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus 
     */
    #[FHIRPublicationStatus]
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $experimental;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the structure definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $publisher;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail> 
     */
    #[FHIRContactDetail]
    protected array $contact;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext> 
     */
    #[FHIRUsageContext]
    protected array $useContext;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the structure definition is intended to be
     * used.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $jurisdiction;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $purpose;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $copyright;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $copyrightLabel;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding> 
     */
    #[FHIRCoding]
    protected array $keyword;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRVersion 
     */
    #[FHIRFHIRVersion]
    protected FHIRFHIRVersion $fhirVersion;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping> 
     */
    #[FHIRStructureDefinitionMapping]
    protected array $mapping;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureDefinitionKind 
     */
    #[FHIRStructureDefinitionKind]
    protected FHIRStructureDefinitionKind $kind;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $abstract;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext> 
     */
    #[FHIRStructureDefinitionContext]
    protected array $context;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString> 
     */
    #[FHIRString]
    protected array $contextInvariant;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $type;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $baseDefinition;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTypeDerivationRule 
     */
    #[FHIRTypeDerivationRule]
    protected FHIRTypeDerivationRule $derivation;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot 
     */
    #[FHIRStructureDefinitionSnapshot]
    protected FHIRStructureDefinitionSnapshot $snapshot;
    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential 
     */
    #[FHIRStructureDefinitionDifferential]
    protected FHIRStructureDefinitionDifferential $differential;

    /* constructor.php:61 */
    /**
     * FHIRStructureDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $versionAlgorithmCoding
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publisher
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail> $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext> $useContext
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $jurisdiction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $copyrightLabel
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding> $keyword
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFHIRVersionEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping> $mapping
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureDefinitionKindEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureDefinitionKind $kind
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $abstract
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext> $context
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString> $contextInvariant
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $baseDefinition
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTypeDerivationRuleEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTypeDerivationRule $derivation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot $snapshot
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential $differential
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
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|iterable $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|string|FHIRStringPrimitive|FHIRString $versionAlgorithmString = null,
                                null|FHIRCoding $versionAlgorithmCoding = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $publisher = null,
                                null|iterable $contact = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $useContext = null,
                                null|iterable $jurisdiction = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null,
                                null|string|FHIRStringPrimitive|FHIRString $copyrightLabel = null,
                                null|iterable $keyword = null,
                                null|string|FHIRFHIRVersionEnum|FHIRFHIRVersion $fhirVersion = null,
                                null|iterable $mapping = null,
                                null|string|FHIRStructureDefinitionKindEnum|FHIRStructureDefinitionKind $kind = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abstract = null,
                                null|iterable $context = null,
                                null|iterable $contextInvariant = null,
                                null|string|FHIRUriPrimitive|FHIRUri $type = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $baseDefinition = null,
                                null|string|FHIRTypeDerivationRuleEnum|FHIRTypeDerivationRule $derivation = null,
                                null|FHIRStructureDefinitionSnapshot $snapshot = null,
                                null|FHIRStructureDefinitionDifferential $differential = null,
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
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $versionAlgorithmString) {
            $this->setVersionAlgorithmString($versionAlgorithmString);
        }
        if (null !== $versionAlgorithmCoding) {
            $this->setVersionAlgorithmCoding($versionAlgorithmCoding);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $title) {
            $this->setTitle($title);
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
        if (null !== $publisher) {
            $this->setPublisher($publisher);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $useContext) {
            $this->setUseContext(...$useContext);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction(...$jurisdiction);
        }
        if (null !== $purpose) {
            $this->setPurpose($purpose);
        }
        if (null !== $copyright) {
            $this->setCopyright($copyright);
        }
        if (null !== $copyrightLabel) {
            $this->setCopyrightLabel($copyrightLabel);
        }
        if (null !== $keyword) {
            $this->setKeyword(...$keyword);
        }
        if (null !== $fhirVersion) {
            $this->setFhirVersion($fhirVersion);
        }
        if (null !== $mapping) {
            $this->setMapping(...$mapping);
        }
        if (null !== $kind) {
            $this->setKind($kind);
        }
        if (null !== $abstract) {
            $this->setAbstract($abstract);
        }
        if (null !== $context) {
            $this->setContext(...$context);
        }
        if (null !== $contextInvariant) {
            $this->setContextInvariant(...$contextInvariant);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $baseDefinition) {
            $this->setBaseDefinition($baseDefinition);
        }
        if (null !== $derivation) {
            $this->setDerivation($derivation);
        }
        if (null !== $snapshot) {
            $this->setSnapshot($snapshot);
        }
        if (null !== $differential) {
            $this->setDifferential($differential);
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this structure definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this structure definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the structure definition is stored on different
     * servers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * A formal identifier that is used to identify this structure definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
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
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
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
     * The identifier that is used to identify this version of the structure definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the structure definition author and is not expected
     * to be globally unique. There is no expectation that versions can be placed in a
     * lexicographical sequence, so authors are encouraged to populate the
     * StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there
     * is no managed version available, authors can consider using ISO date/time syntax
     * (e.g., '2023-01-01').
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVersionAlgorithmString(): null|FHIRString
    {
        return $this->versionAlgorithmString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @return static
     */
    public function setVersionAlgorithmString(null|string|FHIRStringPrimitive|FHIRString $versionAlgorithmString): self
    {
        if (null === $versionAlgorithmString) {
            unset($this->versionAlgorithmString);
            return $this;
        }
        if (!($versionAlgorithmString instanceof FHIRString)) {
            $versionAlgorithmString = new FHIRString(value: $versionAlgorithmString);
        }
        $this->versionAlgorithmString = $versionAlgorithmString;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getVersionAlgorithmCoding(): null|FHIRCoding
    {
        return $this->versionAlgorithmCoding ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $versionAlgorithmCoding
     * @return static
     */
    public function setVersionAlgorithmCoding(null|FHIRCoding $versionAlgorithmCoding): self
    {
        if (null === $versionAlgorithmCoding) {
            unset($this->versionAlgorithmCoding);
            return $this;
        }
        $this->versionAlgorithmCoding = $versionAlgorithmCoding;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the structure definition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
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
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the structure definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this structure definition. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            $status = new FHIRPublicationStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this structure definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $experimental
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
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
     * The date (and optionally time) when the structure definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the structure definition changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the structure definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the structure definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publisher
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
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(FHIRContactDetail $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail ...$contact
     * @return static
     */
    public function setContact(FHIRContactDetail ...$contact): self
    {
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
        $this->contact = $contact;
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
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
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
     * A free text natural language description of the structure definition from a
     * consumer's perspective.
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
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext>
     */
    public function getUseContext(): array
    {
        return $this->useContext ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext>
     */
    public function getUseContextIterator(): iterable
    {
        if (!isset($this->useContext)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->useContext);
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(FHIRUsageContext $useContext): self
    {
        if (!isset($this->useContext)) {
            $this->useContext = [];
        }
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate structure
     * definition instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext ...$useContext
     * @return static
     */
    public function setUseContext(FHIRUsageContext ...$useContext): self
    {
        if ([] === $useContext) {
            unset($this->useContext);
            return $this;
        }
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the structure definition is intended to be
     * used.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getJurisdiction(): array
    {
        return $this->jurisdiction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $jurisdiction
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
     * A legal or geographic region in which the structure definition is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$jurisdiction
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getPurpose(): null|FHIRMarkdown
    {
        return $this->purpose ?? null;
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
     * Explanation of why this structure definition is needed and why it has been
     * designed as it has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose): self
    {
        if (null === $purpose) {
            unset($this->purpose);
            return $this;
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown(value: $purpose);
        }
        $this->purpose = $purpose;
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
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): null|FHIRMarkdown
    {
        return $this->copyright ?? null;
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
     * A copyright statement relating to the structure definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the structure definition. The short copyright declaration (e.g. (c) '2015+
     * xyz organization' should be sent in the copyrightLabel element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getCopyrightLabel(): null|FHIRString
    {
        return $this->copyrightLabel ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that
     * identifies the copyright holder, effective period, and optionally whether rights
     * are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $copyrightLabel
     * @return static
     */
    public function setCopyrightLabel(null|string|FHIRStringPrimitive|FHIRString $copyrightLabel): self
    {
        if (null === $copyrightLabel) {
            unset($this->copyrightLabel);
            return $this;
        }
        if (!($copyrightLabel instanceof FHIRString)) {
            $copyrightLabel = new FHIRString(value: $copyrightLabel);
        }
        $this->copyrightLabel = $copyrightLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getKeyword(): array
    {
        return $this->keyword ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getKeywordIterator(): iterable
    {
        if (!isset($this->keyword)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->keyword);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $keyword
     * @return static
     */
    public function addKeyword(FHIRCoding $keyword): self
    {
        if (!isset($this->keyword)) {
            $this->keyword = [];
        }
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be
     * used to assist with indexing and searching of templates nby describing the use
     * of this structure definition, or the content it describes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$keyword
     * @return static
     */
    public function setKeyword(FHIRCoding ...$keyword): self
    {
        if ([] === $keyword) {
            unset($this->keyword);
            return $this;
        }
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRVersion
     */
    public function getFhirVersion(): null|FHIRFHIRVersion
    {
        return $this->fhirVersion ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the FHIR specification on which this StructureDefinition is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFHIRVersionEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return static
     */
    public function setFhirVersion(null|string|FHIRFHIRVersionEnum|FHIRFHIRVersion $fhirVersion): self
    {
        if (null === $fhirVersion) {
            unset($this->fhirVersion);
            return $this;
        }
        if (!($fhirVersion instanceof FHIRFHIRVersion)) {
            $fhirVersion = new FHIRFHIRVersion(value: $fhirVersion);
        }
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping>
     */
    public function getMapping(): array
    {
        return $this->mapping ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping>
     */
    public function getMappingIterator(): iterable
    {
        if (!isset($this->mapping)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mapping);
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping $mapping
     * @return static
     */
    public function addMapping(FHIRStructureDefinitionMapping $mapping): self
    {
        if (!isset($this->mapping)) {
            $this->mapping = [];
        }
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * An external specification that the content is mapped to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping ...$mapping
     * @return static
     */
    public function setMapping(FHIRStructureDefinitionMapping ...$mapping): self
    {
        if ([] === $mapping) {
            unset($this->mapping);
            return $this;
        }
        $this->mapping = $mapping;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureDefinitionKind
     */
    public function getKind(): null|FHIRStructureDefinitionKind
    {
        return $this->kind ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureDefinitionKindEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureDefinitionKind $kind
     * @return static
     */
    public function setKind(null|string|FHIRStructureDefinitionKindEnum|FHIRStructureDefinitionKind $kind): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
        }
        if (!($kind instanceof FHIRStructureDefinitionKind)) {
            $kind = new FHIRStructureDefinitionKind(value: $kind);
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAbstract(): null|FHIRBoolean
    {
        return $this->abstract ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether structure this definition describes is abstract or not - that is,
     * whether the structure is not intended to be instantiated. For Resources and Data
     * types, abstract types will never be exchanged between systems.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $abstract
     * @return static
     */
    public function setAbstract(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abstract): self
    {
        if (null === $abstract) {
            unset($this->abstract);
            return $this;
        }
        if (!($abstract instanceof FHIRBoolean)) {
            $abstract = new FHIRBoolean(value: $abstract);
        }
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext>
     */
    public function getContext(): array
    {
        return $this->context ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext>
     */
    public function getContextIterator(): iterable
    {
        if (!isset($this->context)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->context);
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext $context
     * @return static
     */
    public function addContext(FHIRStructureDefinitionContext $context): self
    {
        if (!isset($this->context)) {
            $this->context = [];
        }
        $this->context[] = $context;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied. For more guidance on using the 'context' element, see the
     * [defining extensions page](defining-extensions.html#context).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext ...$context
     * @return static
     */
    public function setContext(FHIRStructureDefinitionContext ...$context): self
    {
        if ([] === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getContextInvariant(): array
    {
        return $this->contextInvariant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getContextInvariantIterator(): iterable
    {
        if (!isset($this->contextInvariant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contextInvariant);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $contextInvariant
     * @return static
     */
    public function addContextInvariant(string|FHIRStringPrimitive|FHIRString $contextInvariant): self
    {
        if (!($contextInvariant instanceof FHIRString)) {
            $contextInvariant = new FHIRString(value: $contextInvariant);
        }
        if (!isset($this->contextInvariant)) {
            $this->contextInvariant = [];
        }
        $this->contextInvariant[] = $contextInvariant;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g.
     * co-occurrence variants for the extension). All the rules must be true.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$contextInvariant
     * @return static
     */
    public function setContextInvariant(string|FHIRStringPrimitive|FHIRString ...$contextInvariant): self
    {
        if ([] === $contextInvariant) {
            unset($this->contextInvariant);
            return $this;
        }
        $this->contextInvariant = [];
        foreach($contextInvariant as $v) {
            if ($v instanceof FHIRString) {
                $this->contextInvariant[] = $v;
            } else {
                $this->contextInvariant[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getType(): null|FHIRUri
    {
        return $this->type ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type this structure describes. If the derivation kind is 'specialization'
     * then this is the master definition for a type, and there is always one of these
     * (a data type, an extension, a resource, including abstract ones). Otherwise the
     * structure definition is a constraint on the stated type (and in this case, the
     * type cannot be an abstract type). References are URLs that are relative to
     * http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to
     * http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed
     * in logical models, where they are required.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $type
     * @return static
     */
    public function setType(null|string|FHIRUriPrimitive|FHIRUri $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRUri)) {
            $type = new FHIRUri(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getBaseDefinition(): null|FHIRCanonical
    {
        return $this->baseDefinition ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An absolute URI that is the base structure from which this type is derived,
     * either by specialization or constraint.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $baseDefinition
     * @return static
     */
    public function setBaseDefinition(null|string|FHIRCanonicalPrimitive|FHIRCanonical $baseDefinition): self
    {
        if (null === $baseDefinition) {
            unset($this->baseDefinition);
            return $this;
        }
        if (!($baseDefinition instanceof FHIRCanonical)) {
            $baseDefinition = new FHIRCanonical(value: $baseDefinition);
        }
        $this->baseDefinition = $baseDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTypeDerivationRule
     */
    public function getDerivation(): null|FHIRTypeDerivationRule
    {
        return $this->derivation ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the type relates to the baseDefinition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRTypeDerivationRuleEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRTypeDerivationRule $derivation
     * @return static
     */
    public function setDerivation(null|string|FHIRTypeDerivationRuleEnum|FHIRTypeDerivationRule $derivation): self
    {
        if (null === $derivation) {
            unset($this->derivation);
            return $this;
        }
        if (!($derivation instanceof FHIRTypeDerivationRule)) {
            $derivation = new FHIRTypeDerivationRule(value: $derivation);
        }
        $this->derivation = $derivation;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public function getSnapshot(): null|FHIRStructureDefinitionSnapshot
    {
        return $this->snapshot ?? null;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A snapshot view is expressed in a standalone form that can be used and
     * interpreted without considering the base StructureDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot $snapshot
     * @return static
     */
    public function setSnapshot(null|FHIRStructureDefinitionSnapshot $snapshot): self
    {
        if (null === $snapshot) {
            unset($this->snapshot);
            return $this;
        }
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public function getDifferential(): null|FHIRStructureDefinitionDifferential
    {
        return $this->differential ?? null;
    }

    /**
     * A definition of a FHIR structure. This resource is used to describe the
     * underlying resources, data types defined in FHIR, and also for describing
     * extensions and constraints on resources and data types.
     *
     * A differential view is expressed relative to the base StructureDefinition - a
     * statement of differences that it applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential $differential
     * @return static
     */
    public function setDifferential(null|FHIRStructureDefinitionDifferential $differential): self
    {
        if (null === $differential) {
            unset($this->differential);
            return $this;
        }
        $this->differential = $differential;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureDefinition)) {
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
            } else if (self::FIELD_URL === $cen) {
                $type->setUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->setVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_STRING === $cen) {
                $type->setVersionAlgorithmString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_CODING === $cen) {
                $type->setVersionAlgorithmCoding(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPERIMENTAL === $cen) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHER === $cen) {
                $type->setPublisher(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE_CONTEXT === $cen) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PURPOSE === $cen) {
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT === $cen) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT_LABEL === $cen) {
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KEYWORD === $cen) {
                $type->addKeyword(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FHIR_VERSION === $cen) {
                $type->setFhirVersion(FHIRFHIRVersion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAPPING === $cen) {
                $type->addMapping(FHIRStructureDefinitionMapping::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KIND === $cen) {
                $type->setKind(FHIRStructureDefinitionKind::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABSTRACT === $cen) {
                $type->setAbstract(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->addContext(FHIRStructureDefinitionContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT_INVARIANT === $cen) {
                $type->addContextInvariant(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE_DEFINITION === $cen) {
                $type->setBaseDefinition(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DERIVATION === $cen) {
                $type->setDerivation(FHIRTypeDerivationRule::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SNAPSHOT === $cen) {
                $type->setSnapshot(FHIRStructureDefinitionSnapshot::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIFFERENTIAL === $cen) {
                $type->setDifferential(FHIRStructureDefinitionDifferential::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            if (isset($type->version)) {
                $type->version->setValue((string)$attributes[self::FIELD_VERSION]);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VERSION_ALGORITHM_STRING])) {
            if (isset($type->versionAlgorithmString)) {
                $type->versionAlgorithmString->setValue((string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING]);
            } else {
                $type->setVersionAlgorithmString((string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERSION_ALGORITHM_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TITLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            if (isset($type->experimental)) {
                $type->experimental->setValue((string)$attributes[self::FIELD_EXPERIMENTAL]);
            } else {
                $type->setExperimental((string)$attributes[self::FIELD_EXPERIMENTAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXPERIMENTAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            if (isset($type->publisher)) {
                $type->publisher->setValue((string)$attributes[self::FIELD_PUBLISHER]);
            } else {
                $type->setPublisher((string)$attributes[self::FIELD_PUBLISHER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PUBLISHER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            if (isset($type->purpose)) {
                $type->purpose->setValue((string)$attributes[self::FIELD_PURPOSE]);
            } else {
                $type->setPurpose((string)$attributes[self::FIELD_PURPOSE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PURPOSE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            if (isset($type->copyright)) {
                $type->copyright->setValue((string)$attributes[self::FIELD_COPYRIGHT]);
            } else {
                $type->setCopyright((string)$attributes[self::FIELD_COPYRIGHT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COPYRIGHT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COPYRIGHT_LABEL])) {
            if (isset($type->copyrightLabel)) {
                $type->copyrightLabel->setValue((string)$attributes[self::FIELD_COPYRIGHT_LABEL]);
            } else {
                $type->setCopyrightLabel((string)$attributes[self::FIELD_COPYRIGHT_LABEL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COPYRIGHT_LABEL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FHIR_VERSION])) {
            if (isset($type->fhirVersion)) {
                $type->fhirVersion->setValue((string)$attributes[self::FIELD_FHIR_VERSION]);
            } else {
                $type->setFhirVersion((string)$attributes[self::FIELD_FHIR_VERSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FHIR_VERSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_KIND])) {
            if (isset($type->kind)) {
                $type->kind->setValue((string)$attributes[self::FIELD_KIND]);
            } else {
                $type->setKind((string)$attributes[self::FIELD_KIND]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_KIND, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ABSTRACT])) {
            if (isset($type->abstract)) {
                $type->abstract->setValue((string)$attributes[self::FIELD_ABSTRACT]);
            } else {
                $type->setAbstract((string)$attributes[self::FIELD_ABSTRACT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ABSTRACT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BASE_DEFINITION])) {
            if (isset($type->baseDefinition)) {
                $type->baseDefinition->setValue((string)$attributes[self::FIELD_BASE_DEFINITION]);
            } else {
                $type->setBaseDefinition((string)$attributes[self::FIELD_BASE_DEFINITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_BASE_DEFINITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DERIVATION])) {
            if (isset($type->derivation)) {
                $type->derivation->setValue((string)$attributes[self::FIELD_DERIVATION]);
            } else {
                $type->setDerivation((string)$attributes[self::FIELD_DERIVATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DERIVATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('StructureDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getValueAsString());
        }
        if (isset($this->version) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION]) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->_getValueAsString());
        }
        if (isset($this->versionAlgorithmString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION_ALGORITHM_STRING]) {
            $xw->writeAttribute(self::FIELD_VERSION_ALGORITHM_STRING, $this->versionAlgorithmString->_getValueAsString());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->experimental) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->_getValueAsString());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->publisher) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLISHER]) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->purpose) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PURPOSE]) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $this->purpose->_getValueAsString());
        }
        if (isset($this->copyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->_getValueAsString());
        }
        if (isset($this->copyrightLabel) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT_LABEL]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT_LABEL, $this->copyrightLabel->_getValueAsString());
        }
        if (isset($this->fhirVersion) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FHIR_VERSION]) {
            $xw->writeAttribute(self::FIELD_FHIR_VERSION, $this->fhirVersion->_getValueAsString());
        }
        if (isset($this->kind) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KIND]) {
            $xw->writeAttribute(self::FIELD_KIND, $this->kind->_getValueAsString());
        }
        if (isset($this->abstract) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABSTRACT]) {
            $xw->writeAttribute(self::FIELD_ABSTRACT, $this->abstract->_getValueAsString());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->baseDefinition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BASE_DEFINITION]) {
            $xw->writeAttribute(self::FIELD_BASE_DEFINITION, $this->baseDefinition->_getValueAsString());
        }
        if (isset($this->derivation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DERIVATION]) {
            $xw->writeAttribute(self::FIELD_DERIVATION, $this->derivation->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_URL]
                || $this->url->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_URL]);
            $xw->endElement();
        }
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
        if (isset($this->versionAlgorithmString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSION_ALGORITHM_STRING]
                || $this->versionAlgorithmString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_STRING);
            $this->versionAlgorithmString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSION_ALGORITHM_STRING]);
            $xw->endElement();
        }
        if (isset($this->versionAlgorithmCoding)) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_CODING);
            $this->versionAlgorithmCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->title)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TITLE]
                || $this->title->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TITLE]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->experimental)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]
                || $this->experimental->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->publisher)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PUBLISHER]
                || $this->publisher->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PUBLISHER]);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
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
        if (isset($this->useContext)) {
            foreach ($this->useContext as $v) {
                $xw->startElement(self::FIELD_USE_CONTEXT);
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
        if (isset($this->purpose)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PURPOSE]
                || $this->purpose->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PURPOSE);
            $this->purpose->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PURPOSE]);
            $xw->endElement();
        }
        if (isset($this->copyright)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COPYRIGHT]
                || $this->copyright->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COPYRIGHT]);
            $xw->endElement();
        }
        if (isset($this->copyrightLabel)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COPYRIGHT_LABEL]
                || $this->copyrightLabel->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COPYRIGHT_LABEL);
            $this->copyrightLabel->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COPYRIGHT_LABEL]);
            $xw->endElement();
        }
        if (isset($this->keyword)) {
            foreach ($this->keyword as $v) {
                $xw->startElement(self::FIELD_KEYWORD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->fhirVersion)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FHIR_VERSION]
                || $this->fhirVersion->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FHIR_VERSION);
            $this->fhirVersion->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FHIR_VERSION]);
            $xw->endElement();
        }
        if (isset($this->mapping)) {
            foreach ($this->mapping as $v) {
                $xw->startElement(self::FIELD_MAPPING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->kind)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_KIND]
                || $this->kind->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_KIND);
            $this->kind->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_KIND]);
            $xw->endElement();
        }
        if (isset($this->abstract)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABSTRACT]
                || $this->abstract->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABSTRACT);
            $this->abstract->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABSTRACT]);
            $xw->endElement();
        }
        if (isset($this->context)) {
            foreach ($this->context as $v) {
                $xw->startElement(self::FIELD_CONTEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contextInvariant) && [] !== $this->contextInvariant) {
            foreach($this->contextInvariant as $v) {
                $xw->startElement(self::FIELD_CONTEXT_INVARIANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->baseDefinition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BASE_DEFINITION]
                || $this->baseDefinition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BASE_DEFINITION);
            $this->baseDefinition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BASE_DEFINITION]);
            $xw->endElement();
        }
        if (isset($this->derivation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DERIVATION]
                || $this->derivation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DERIVATION);
            $this->derivation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DERIVATION]);
            $xw->endElement();
        }
        if (isset($this->snapshot)) {
            $xw->startElement(self::FIELD_SNAPSHOT);
            $this->snapshot->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->differential)) {
            $xw->startElement(self::FIELD_DIFFERENTIAL);
            $this->differential->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureDefinition)) {
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
        if (isset($decoded->url)
            || isset($decoded->_url)
            || property_exists($decoded, self::FIELD_URL)
            || property_exists($decoded, self::FIELD_URL_EXT)) {
            $v = $decoded->_url ?? new \stdClass();
            $v->value = $decoded->url ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize($v, $config));
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
        if (isset($decoded->version)
            || isset($decoded->_version)
            || property_exists($decoded, self::FIELD_VERSION)
            || property_exists($decoded, self::FIELD_VERSION_EXT)) {
            $v = $decoded->_version ?? new \stdClass();
            $v->value = $decoded->version ?? null;
            $type->setVersion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->versionAlgorithmString)
            || isset($decoded->_versionAlgorithmString)
            || property_exists($decoded, self::FIELD_VERSION_ALGORITHM_STRING)
            || property_exists($decoded, self::FIELD_VERSION_ALGORITHM_STRING_EXT)) {
            $v = $decoded->_versionAlgorithmString ?? new \stdClass();
            $v->value = $decoded->versionAlgorithmString ?? null;
            $type->setVersionAlgorithmString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->versionAlgorithmCoding) || property_exists($decoded, self::FIELD_VERSION_ALGORITHM_CODING)) {
            if (is_array($decoded->versionAlgorithmCoding)) {
                $type->setVersionAlgorithmCoding(FHIRCoding::jsonUnserialize(reset($decoded->versionAlgorithmCoding), $config));
            } else {
                $type->setVersionAlgorithmCoding(FHIRCoding::jsonUnserialize($decoded->versionAlgorithmCoding, $config));
            }
        }
        if (isset($decoded->name)
            || isset($decoded->_name)
            || property_exists($decoded, self::FIELD_NAME)
            || property_exists($decoded, self::FIELD_NAME_EXT)) {
            $v = $decoded->_name ?? new \stdClass();
            $v->value = $decoded->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->title)
            || isset($decoded->_title)
            || property_exists($decoded, self::FIELD_TITLE)
            || property_exists($decoded, self::FIELD_TITLE_EXT)) {
            $v = $decoded->_title ?? new \stdClass();
            $v->value = $decoded->title ?? null;
            $type->setTitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->experimental)
            || isset($decoded->_experimental)
            || property_exists($decoded, self::FIELD_EXPERIMENTAL)
            || property_exists($decoded, self::FIELD_EXPERIMENTAL_EXT)) {
            $v = $decoded->_experimental ?? new \stdClass();
            $v->value = $decoded->experimental ?? null;
            $type->setExperimental(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->date)
            || isset($decoded->_date)
            || property_exists($decoded, self::FIELD_DATE)
            || property_exists($decoded, self::FIELD_DATE_EXT)) {
            $v = $decoded->_date ?? new \stdClass();
            $v->value = $decoded->date ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->publisher)
            || isset($decoded->_publisher)
            || property_exists($decoded, self::FIELD_PUBLISHER)
            || property_exists($decoded, self::FIELD_PUBLISHER_EXT)) {
            $v = $decoded->_publisher ?? new \stdClass();
            $v->value = $decoded->publisher ?? null;
            $type->setPublisher(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->contact) || property_exists($decoded, self::FIELD_CONTACT)) {
            if (is_object($decoded->contact)) {
                $vals = [$decoded->contact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTACT, true);
            } else {
                $vals = $decoded->contact;
            }
            foreach($vals as $v) {
                $type->addContact(FHIRContactDetail::jsonUnserialize($v, $config));
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
        if (isset($decoded->useContext) || property_exists($decoded, self::FIELD_USE_CONTEXT)) {
            if (is_object($decoded->useContext)) {
                $vals = [$decoded->useContext];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_USE_CONTEXT, true);
            } else {
                $vals = $decoded->useContext;
            }
            foreach($vals as $v) {
                $type->addUseContext(FHIRUsageContext::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->jurisdiction) || property_exists($decoded, self::FIELD_JURISDICTION)) {
            if (is_object($decoded->jurisdiction)) {
                $vals = [$decoded->jurisdiction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_JURISDICTION, true);
            } else {
                $vals = $decoded->jurisdiction;
            }
            foreach($vals as $v) {
                $type->addJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->purpose)
            || isset($decoded->_purpose)
            || property_exists($decoded, self::FIELD_PURPOSE)
            || property_exists($decoded, self::FIELD_PURPOSE_EXT)) {
            $v = $decoded->_purpose ?? new \stdClass();
            $v->value = $decoded->purpose ?? null;
            $type->setPurpose(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->copyright)
            || isset($decoded->_copyright)
            || property_exists($decoded, self::FIELD_COPYRIGHT)
            || property_exists($decoded, self::FIELD_COPYRIGHT_EXT)) {
            $v = $decoded->_copyright ?? new \stdClass();
            $v->value = $decoded->copyright ?? null;
            $type->setCopyright(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->copyrightLabel)
            || isset($decoded->_copyrightLabel)
            || property_exists($decoded, self::FIELD_COPYRIGHT_LABEL)
            || property_exists($decoded, self::FIELD_COPYRIGHT_LABEL_EXT)) {
            $v = $decoded->_copyrightLabel ?? new \stdClass();
            $v->value = $decoded->copyrightLabel ?? null;
            $type->setCopyrightLabel(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->keyword) || property_exists($decoded, self::FIELD_KEYWORD)) {
            if (is_object($decoded->keyword)) {
                $vals = [$decoded->keyword];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_KEYWORD, true);
            } else {
                $vals = $decoded->keyword;
            }
            foreach($vals as $v) {
                $type->addKeyword(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->fhirVersion)
            || isset($decoded->_fhirVersion)
            || property_exists($decoded, self::FIELD_FHIR_VERSION)
            || property_exists($decoded, self::FIELD_FHIR_VERSION_EXT)) {
            $v = $decoded->_fhirVersion ?? new \stdClass();
            $v->value = $decoded->fhirVersion ?? null;
            $type->setFhirVersion(FHIRFHIRVersion::jsonUnserialize($v, $config));
        }
        if (isset($decoded->mapping) || property_exists($decoded, self::FIELD_MAPPING)) {
            if (is_object($decoded->mapping)) {
                $vals = [$decoded->mapping];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MAPPING, true);
            } else {
                $vals = $decoded->mapping;
            }
            foreach($vals as $v) {
                $type->addMapping(FHIRStructureDefinitionMapping::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->kind)
            || isset($decoded->_kind)
            || property_exists($decoded, self::FIELD_KIND)
            || property_exists($decoded, self::FIELD_KIND_EXT)) {
            $v = $decoded->_kind ?? new \stdClass();
            $v->value = $decoded->kind ?? null;
            $type->setKind(FHIRStructureDefinitionKind::jsonUnserialize($v, $config));
        }
        if (isset($decoded->abstract)
            || isset($decoded->_abstract)
            || property_exists($decoded, self::FIELD_ABSTRACT)
            || property_exists($decoded, self::FIELD_ABSTRACT_EXT)) {
            $v = $decoded->_abstract ?? new \stdClass();
            $v->value = $decoded->abstract ?? null;
            $type->setAbstract(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->context) || property_exists($decoded, self::FIELD_CONTEXT)) {
            if (is_object($decoded->context)) {
                $vals = [$decoded->context];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTEXT, true);
            } else {
                $vals = $decoded->context;
            }
            foreach($vals as $v) {
                $type->addContext(FHIRStructureDefinitionContext::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->contextInvariant)
            || isset($decoded->_contextInvariant)
            || property_exists($decoded, self::FIELD_CONTEXT_INVARIANT)
            || property_exists($decoded, self::FIELD_CONTEXT_INVARIANT_EXT)) {
            $vals = (array)($decoded->contextInvariant ?? []);
            $exts = (array)($decoded->FIELD_CONTEXT_INVARIANT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addContextInvariant(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->baseDefinition)
            || isset($decoded->_baseDefinition)
            || property_exists($decoded, self::FIELD_BASE_DEFINITION)
            || property_exists($decoded, self::FIELD_BASE_DEFINITION_EXT)) {
            $v = $decoded->_baseDefinition ?? new \stdClass();
            $v->value = $decoded->baseDefinition ?? null;
            $type->setBaseDefinition(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->derivation)
            || isset($decoded->_derivation)
            || property_exists($decoded, self::FIELD_DERIVATION)
            || property_exists($decoded, self::FIELD_DERIVATION_EXT)) {
            $v = $decoded->_derivation ?? new \stdClass();
            $v->value = $decoded->derivation ?? null;
            $type->setDerivation(FHIRTypeDerivationRule::jsonUnserialize($v, $config));
        }
        if (isset($decoded->snapshot) || property_exists($decoded, self::FIELD_SNAPSHOT)) {
            if (is_array($decoded->snapshot)) {
                $type->setSnapshot(FHIRStructureDefinitionSnapshot::jsonUnserialize(reset($decoded->snapshot), $config));
            } else {
                $type->setSnapshot(FHIRStructureDefinitionSnapshot::jsonUnserialize($decoded->snapshot, $config));
            }
        }
        if (isset($decoded->differential) || property_exists($decoded, self::FIELD_DIFFERENTIAL)) {
            if (is_array($decoded->differential)) {
                $type->setDifferential(FHIRStructureDefinitionDifferential::jsonUnserialize(reset($decoded->differential), $config));
            } else {
                $type->setDifferential(FHIRStructureDefinitionDifferential::jsonUnserialize($decoded->differential, $config));
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
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            if ($this->url->_nonValueFieldDefined()) {
                $ext = $this->url->jsonSerialize();
                unset($ext->value);
                $out->_url = $ext;
            }
        }
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
        if (isset($this->versionAlgorithmString)) {
            if (null !== ($val = $this->versionAlgorithmString->getValue())) {
                $out->versionAlgorithmString = $val;
            }
            if ($this->versionAlgorithmString->_nonValueFieldDefined()) {
                $ext = $this->versionAlgorithmString->jsonSerialize();
                unset($ext->value);
                $out->_versionAlgorithmString = $ext;
            }
        }
        if (isset($this->versionAlgorithmCoding)) {
            $out->versionAlgorithmCoding = $this->versionAlgorithmCoding;
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            if ($this->title->_nonValueFieldDefined()) {
                $ext = $this->title->jsonSerialize();
                unset($ext->value);
                $out->_title = $ext;
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
        if (isset($this->experimental)) {
            if (null !== ($val = $this->experimental->getValue())) {
                $out->experimental = $val;
            }
            if ($this->experimental->_nonValueFieldDefined()) {
                $ext = $this->experimental->jsonSerialize();
                unset($ext->value);
                $out->_experimental = $ext;
            }
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
        if (isset($this->publisher)) {
            if (null !== ($val = $this->publisher->getValue())) {
                $out->publisher = $val;
            }
            if ($this->publisher->_nonValueFieldDefined()) {
                $ext = $this->publisher->jsonSerialize();
                unset($ext->value);
                $out->_publisher = $ext;
            }
        }
        if (isset($this->contact) && [] !== $this->contact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTACT) && 1 === count($this->contact)) {
                $out->contact = $this->contact[0];
            } else {
                $out->contact = $this->contact;
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
        if (isset($this->useContext) && [] !== $this->useContext) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_USE_CONTEXT) && 1 === count($this->useContext)) {
                $out->useContext = $this->useContext[0];
            } else {
                $out->useContext = $this->useContext;
            }
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_JURISDICTION) && 1 === count($this->jurisdiction)) {
                $out->jurisdiction = $this->jurisdiction[0];
            } else {
                $out->jurisdiction = $this->jurisdiction;
            }
        }
        if (isset($this->purpose)) {
            if (null !== ($val = $this->purpose->getValue())) {
                $out->purpose = $val;
            }
            if ($this->purpose->_nonValueFieldDefined()) {
                $ext = $this->purpose->jsonSerialize();
                unset($ext->value);
                $out->_purpose = $ext;
            }
        }
        if (isset($this->copyright)) {
            if (null !== ($val = $this->copyright->getValue())) {
                $out->copyright = $val;
            }
            if ($this->copyright->_nonValueFieldDefined()) {
                $ext = $this->copyright->jsonSerialize();
                unset($ext->value);
                $out->_copyright = $ext;
            }
        }
        if (isset($this->copyrightLabel)) {
            if (null !== ($val = $this->copyrightLabel->getValue())) {
                $out->copyrightLabel = $val;
            }
            if ($this->copyrightLabel->_nonValueFieldDefined()) {
                $ext = $this->copyrightLabel->jsonSerialize();
                unset($ext->value);
                $out->_copyrightLabel = $ext;
            }
        }
        if (isset($this->keyword) && [] !== $this->keyword) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_KEYWORD) && 1 === count($this->keyword)) {
                $out->keyword = $this->keyword[0];
            } else {
                $out->keyword = $this->keyword;
            }
        }
        if (isset($this->fhirVersion)) {
            if (null !== ($val = $this->fhirVersion->getValue())) {
                $out->fhirVersion = $val;
            }
            if ($this->fhirVersion->_nonValueFieldDefined()) {
                $ext = $this->fhirVersion->jsonSerialize();
                unset($ext->value);
                $out->_fhirVersion = $ext;
            }
        }
        if (isset($this->mapping) && [] !== $this->mapping) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MAPPING) && 1 === count($this->mapping)) {
                $out->mapping = $this->mapping[0];
            } else {
                $out->mapping = $this->mapping;
            }
        }
        if (isset($this->kind)) {
            if (null !== ($val = $this->kind->getValue())) {
                $out->kind = $val;
            }
            if ($this->kind->_nonValueFieldDefined()) {
                $ext = $this->kind->jsonSerialize();
                unset($ext->value);
                $out->_kind = $ext;
            }
        }
        if (isset($this->abstract)) {
            if (null !== ($val = $this->abstract->getValue())) {
                $out->abstract = $val;
            }
            if ($this->abstract->_nonValueFieldDefined()) {
                $ext = $this->abstract->jsonSerialize();
                unset($ext->value);
                $out->_abstract = $ext;
            }
        }
        if (isset($this->context) && [] !== $this->context) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTEXT) && 1 === count($this->context)) {
                $out->context = $this->context[0];
            } else {
                $out->context = $this->context;
            }
        }
        if (isset($this->contextInvariant) && [] !== $this->contextInvariant) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->contextInvariant as $v) {
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
                $out->contextInvariant = $vals;
            }
            if ($hasExts) {
                $out->_contextInvariant = $exts;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->baseDefinition)) {
            if (null !== ($val = $this->baseDefinition->getValue())) {
                $out->baseDefinition = $val;
            }
            if ($this->baseDefinition->_nonValueFieldDefined()) {
                $ext = $this->baseDefinition->jsonSerialize();
                unset($ext->value);
                $out->_baseDefinition = $ext;
            }
        }
        if (isset($this->derivation)) {
            if (null !== ($val = $this->derivation->getValue())) {
                $out->derivation = $val;
            }
            if ($this->derivation->_nonValueFieldDefined()) {
                $ext = $this->derivation->jsonSerialize();
                unset($ext->value);
                $out->_derivation = $ext;
            }
        }
        if (isset($this->snapshot)) {
            $out->snapshot = $this->snapshot;
        }
        if (isset($this->differential)) {
            $out->differential = $this->differential;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}