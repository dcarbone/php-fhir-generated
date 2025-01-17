<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent;
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchProcessingModeType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
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
 * A search parameter that defines a named search item that can be used to
 * search/filter on a resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRSearchParameter extends FHIRCanonicalResource implements VersionContainedTypeInterface
{
    use SourceXMLNamespaceTrait;


    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SEARCH_PARAMETER;


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
    public const FIELD_DERIVED_FROM = 'derivedFrom';
    public const FIELD_DERIVED_FROM_EXT = '_derivedFrom';
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
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_BASE = 'base';
    public const FIELD_BASE_EXT = '_base';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_EXPRESSION = 'expression';
    public const FIELD_EXPRESSION_EXT = '_expression';
    public const FIELD_PROCESSING_MODE = 'processingMode';
    public const FIELD_PROCESSING_MODE_EXT = '_processingMode';
    public const FIELD_CONSTRAINT = 'constraint';
    public const FIELD_CONSTRAINT_EXT = '_constraint';
    public const FIELD_TARGET = 'target';
    public const FIELD_TARGET_EXT = '_target';
    public const FIELD_MULTIPLE_OR = 'multipleOr';
    public const FIELD_MULTIPLE_OR_EXT = '_multipleOr';
    public const FIELD_MULTIPLE_AND = 'multipleAnd';
    public const FIELD_MULTIPLE_AND_EXT = '_multipleAnd';
    public const FIELD_COMPARATOR = 'comparator';
    public const FIELD_COMPARATOR_EXT = '_comparator';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_MODIFIER_EXT = '_modifier';
    public const FIELD_CHAIN = 'chain';
    public const FIELD_CHAIN_EXT = '_chain';
    public const FIELD_COMPONENT = 'component';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this search parameter is (or will
     * be) published. This URL can be the target of a canonical reference. It SHALL
     * remain the same when the search parameter is stored on different servers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this search parameter when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $version;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $versionAlgorithmString;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to compare versions to determine which is more
     * current.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $versionAlgorithmCoding;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. i.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $derivedFrom;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this search parameter. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
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
     * The date (and optionally time) when the search parameter was last significantly
     * changed. The date must change when the business version changes and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the search parameter changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual tresponsible for the release and
     * ongoing maintenance of the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $publisher;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] 
     */
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
     * And how it used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
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
     * be used to assist with indexing and searching for appropriate search parameter
     * instances.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[] 
     */
    protected array $useContext;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
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
     * Explanation of why this search parameter is needed and why it has been designed
     * as it has.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
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
     * A copyright statement relating to the search parameter and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
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
    protected FHIRString $copyrightLabel;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The label that is recommended to be used in the URL or the parameter name in a
     * parameters resource for this search parameter. In some cases, servers may need
     * to use a different CapabilityStatement searchParam.name to differentiate between
     * multiple SearchParameters that happen to have the same code.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[] 
     */
    protected array $base;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value that a search parameter may contain, and how the content is
     * interpreted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType 
     */
    protected FHIRSearchParamType $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $expression;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the expression query.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchProcessingModeType 
     */
    protected FHIRSearchProcessingModeType $processingMode;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression that defines/sets a complex constraint for when this
     * SearchParameter is applicable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $constraint;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[] 
     */
    protected array $target;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple values are allowed for each time the parameter exists. Values
     * are separated by commas, and the parameter matches if any of the values match.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $multipleOr;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple parameters are allowed - e.g. more than one parameter with the
     * same name. The search matches if all the parameters match.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $multipleAnd;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[] 
     */
    protected array $comparator;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[] 
     */
    protected array $modifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference and specify that resources will only be returned if
     * they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] 
     */
    protected array $chain;
    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[] 
     */
    protected array $component;

    /** Default validation map for fields in type SearchParameter */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_URL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_NAME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DESCRIPTION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_BASE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSearchParameter Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $versionAlgorithmCoding
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $derivedFrom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $experimental
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[] $useContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $jurisdiction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $copyrightLabel
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[] $base
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $expression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchProcessingModeType $processingMode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $constraint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[] $target
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleOr
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleAnd
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[] $comparator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[] $modifier
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] $chain
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[] $component
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
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $derivedFrom = null,
                                null|FHIRPublicationStatus $status = null,
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
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|iterable $base = null,
                                null|FHIRSearchParamType $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $expression = null,
                                null|FHIRSearchProcessingModeType $processingMode = null,
                                null|string|FHIRStringPrimitive|FHIRString $constraint = null,
                                null|iterable $target = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleOr = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleAnd = null,
                                null|iterable $comparator = null,
                                null|iterable $modifier = null,
                                null|iterable $chain = null,
                                null|iterable $component = null,
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
        if (null !== $derivedFrom) {
            $this->setDerivedFrom($derivedFrom);
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
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $base) {
            $this->setBase(...$base);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $expression) {
            $this->setExpression($expression);
        }
        if (null !== $processingMode) {
            $this->setProcessingMode($processingMode);
        }
        if (null !== $constraint) {
            $this->setConstraint($constraint);
        }
        if (null !== $target) {
            $this->setTarget(...$target);
        }
        if (null !== $multipleOr) {
            $this->setMultipleOr($multipleOr);
        }
        if (null !== $multipleAnd) {
            $this->setMultipleAnd($multipleAnd);
        }
        if (null !== $comparator) {
            $this->setComparator(...$comparator);
        }
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
        }
        if (null !== $chain) {
            $this->setChain(...$chain);
        }
        if (null !== $component) {
            $this->setComponent(...$component);
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this search parameter is (or will
     * be) published. This URL can be the target of a canonical reference. It SHALL
     * remain the same when the search parameter is stored on different servers.
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
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this search parameter is (or will
     * be) published. This URL can be the target of a canonical reference. It SHALL
     * remain the same when the search parameter is stored on different servers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        if (null !== $valueXMLLocation) {
            $url->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $url->_getValueXMLLocation()) {
            $url->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * A formal identifier that is used to identify this search parameter when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
        if (!isset($this->identifier) || [] === $this->identifier) {
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
     * A formal identifier that is used to identify this search parameter when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * A formal identifier that is used to identify this search parameter when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        if (!($version instanceof FHIRString)) {
            $version = new FHIRString(value: $version);
        }
        if (null !== $valueXMLLocation) {
            $version->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $version->_getValueXMLLocation()) {
            $version->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * current.
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
     * current.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersionAlgorithmString(null|string|FHIRStringPrimitive|FHIRString $versionAlgorithmString,
                                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $versionAlgorithmString) {
            unset($this->versionAlgorithmString);
            return $this;
        }
        if (!($versionAlgorithmString instanceof FHIRString)) {
            $versionAlgorithmString = new FHIRString(value: $versionAlgorithmString);
        }
        if (null !== $valueXMLLocation) {
            $versionAlgorithmString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $versionAlgorithmString->_getValueXMLLocation()) {
            $versionAlgorithmString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * current.
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
     * current.
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
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
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
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        if (null !== $valueXMLLocation) {
            $name->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $name->_getValueXMLLocation()) {
            $name->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the search parameter.
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
     * A short, descriptive, user-friendly title for the search parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        if (null !== $valueXMLLocation) {
            $title->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $title->_getValueXMLLocation()) {
            $title->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. i.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getDerivedFrom(): null|FHIRCanonical
    {
        return $this->derivedFrom ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. i.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $derivedFrom
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDerivedFrom(null|string|FHIRCanonicalPrimitive|FHIRCanonical $derivedFrom,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $derivedFrom) {
            unset($this->derivedFrom);
            return $this;
        }
        if (!($derivedFrom instanceof FHIRCanonical)) {
            $derivedFrom = new FHIRCanonical(value: $derivedFrom);
        }
        if (null !== $valueXMLLocation) {
            $derivedFrom->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $derivedFrom->_getValueXMLLocation()) {
            $derivedFrom->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this search parameter. Enables tracking the life-cycle of the
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
     * The status of this search parameter. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status): self
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
     * A Boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
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
     * A Boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $experimental
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $experimental) {
            unset($this->experimental);
            return $this;
        }
        if (!($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean(value: $experimental);
        }
        if (null !== $valueXMLLocation) {
            $experimental->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $experimental->_getValueXMLLocation()) {
            $experimental->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * The date (and optionally time) when the search parameter was last significantly
     * changed. The date must change when the business version changes and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the search parameter changes.
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
     * The date (and optionally time) when the search parameter was last significantly
     * changed. The date must change when the business version changes and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the search parameter changes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual tresponsible for the release and
     * ongoing maintenance of the search parameter.
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
     * The name of the organization or individual tresponsible for the release and
     * ongoing maintenance of the search parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        if (!($publisher instanceof FHIRString)) {
            $publisher = new FHIRString(value: $publisher);
        }
        if (null !== $valueXMLLocation) {
            $publisher->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $publisher->_getValueXMLLocation()) {
            $publisher->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
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
        if (!isset($this->contact) || [] === $this->contact) {
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
     * And how it used.
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
     * And how it used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * be used to assist with indexing and searching for appropriate search parameter
     * instances.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[]
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
        if (!isset($this->useContext) || [] === $this->useContext) {
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
     * be used to assist with indexing and searching for appropriate search parameter
     * instances.
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
     * be used to assist with indexing and searching for appropriate search parameter
     * instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext ...$useContext
     * @return static
     */
    public function setUseContext(FHIRUsageContext ...$useContext): self
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
        if (!isset($this->jurisdiction) || [] === $this->jurisdiction) {
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
     * A legal or geographic region in which the search parameter is intended to be
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
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$jurisdiction
     * @return static
     */
    public function setJurisdiction(FHIRCodeableConcept ...$jurisdiction): self
    {
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
     * Explanation of why this search parameter is needed and why it has been designed
     * as it has.
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
     * Explanation of why this search parameter is needed and why it has been designed
     * as it has.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $purpose) {
            unset($this->purpose);
            return $this;
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown(value: $purpose);
        }
        if (null !== $valueXMLLocation) {
            $purpose->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $purpose->_getValueXMLLocation()) {
            $purpose->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * A copyright statement relating to the search parameter and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the search parameter.
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
     * A copyright statement relating to the search parameter and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the search parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        if (null !== $valueXMLLocation) {
            $copyright->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $copyright->_getValueXMLLocation()) {
            $copyright->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyrightLabel(null|string|FHIRStringPrimitive|FHIRString $copyrightLabel,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $copyrightLabel) {
            unset($this->copyrightLabel);
            return $this;
        }
        if (!($copyrightLabel instanceof FHIRString)) {
            $copyrightLabel = new FHIRString(value: $copyrightLabel);
        }
        if (null !== $valueXMLLocation) {
            $copyrightLabel->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $copyrightLabel->_getValueXMLLocation()) {
            $copyrightLabel->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->copyrightLabel = $copyrightLabel;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The label that is recommended to be used in the URL or the parameter name in a
     * parameters resource for this search parameter. In some cases, servers may need
     * to use a different CapabilityStatement searchParam.name to differentiate between
     * multiple SearchParameters that happen to have the same code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
     */
    public function getCode(): null|FHIRCode
    {
        return $this->code ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The label that is recommended to be used in the URL or the parameter name in a
     * parameters resource for this search parameter. In some cases, servers may need
     * to use a different CapabilityStatement searchParam.name to differentiate between
     * multiple SearchParameters that happen to have the same code.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $code
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRCode)) {
            $code = new FHIRCode(value: $code);
        }
        if (null !== $valueXMLLocation) {
            $code->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $code->_getValueXMLLocation()) {
            $code->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[]
     */
    public function getBase(): array
    {
        return $this->base ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll>
     */
    public function getBaseIterator(): iterable
    {
        if (!isset($this->base) || [] === $this->base) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->base);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll $base
     * @return static
     */
    public function addBase(FHIRVersionIndependentResourceTypesAll $base): self
    {
        if (!isset($this->base)) {
            $this->base = [];
        }
        $this->base[] = $base;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll ...$base
     * @return static
     */
    public function setBase(FHIRVersionIndependentResourceTypesAll ...$base): self
    {
        $this->base = [];
        foreach($base as $v) {
            if ($v instanceof FHIRVersionIndependentResourceTypesAll) {
                $this->base[] = $v;
            } else {
                $this->base[] = new FHIRVersionIndependentResourceTypesAll(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value that a search parameter may contain, and how the content is
     * interpreted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType
     */
    public function getType(): null|FHIRSearchParamType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value that a search parameter may contain, and how the content is
     * interpreted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType $type
     * @return static
     */
    public function setType(null|FHIRSearchParamType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getExpression(): null|FHIRString
    {
        return $this->expression ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $expression
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExpression(null|string|FHIRStringPrimitive|FHIRString $expression,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $expression) {
            unset($this->expression);
            return $this;
        }
        if (!($expression instanceof FHIRString)) {
            $expression = new FHIRString(value: $expression);
        }
        if (null !== $valueXMLLocation) {
            $expression->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $expression->_getValueXMLLocation()) {
            $expression->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the expression query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchProcessingModeType
     */
    public function getProcessingMode(): null|FHIRSearchProcessingModeType
    {
        return $this->processingMode ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the expression query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchProcessingModeType $processingMode
     * @return static
     */
    public function setProcessingMode(null|FHIRSearchProcessingModeType $processingMode): self
    {
        if (null === $processingMode) {
            unset($this->processingMode);
            return $this;
        }
        $this->processingMode = $processingMode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression that defines/sets a complex constraint for when this
     * SearchParameter is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getConstraint(): null|FHIRString
    {
        return $this->constraint ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * FHIRPath expression that defines/sets a complex constraint for when this
     * SearchParameter is applicable.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $constraint
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConstraint(null|string|FHIRStringPrimitive|FHIRString $constraint,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $constraint) {
            unset($this->constraint);
            return $this;
        }
        if (!($constraint instanceof FHIRString)) {
            $constraint = new FHIRString(value: $constraint);
        }
        if (null !== $valueXMLLocation) {
            $constraint->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $constraint->_getValueXMLLocation()) {
            $constraint->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->constraint = $constraint;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll[]
     */
    public function getTarget(): array
    {
        return $this->target ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll>
     */
    public function getTargetIterator(): iterable
    {
        if (!isset($this->target) || [] === $this->target) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->target);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll $target
     * @return static
     */
    public function addTarget(FHIRVersionIndependentResourceTypesAll $target): self
    {
        if (!isset($this->target)) {
            $this->target = [];
        }
        $this->target[] = $target;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRVersionIndependentResourceTypesAll ...$target
     * @return static
     */
    public function setTarget(FHIRVersionIndependentResourceTypesAll ...$target): self
    {
        $this->target = [];
        foreach($target as $v) {
            if ($v instanceof FHIRVersionIndependentResourceTypesAll) {
                $this->target[] = $v;
            } else {
                $this->target[] = new FHIRVersionIndependentResourceTypesAll(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple values are allowed for each time the parameter exists. Values
     * are separated by commas, and the parameter matches if any of the values match.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getMultipleOr(): null|FHIRBoolean
    {
        return $this->multipleOr ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple values are allowed for each time the parameter exists. Values
     * are separated by commas, and the parameter matches if any of the values match.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleOr
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMultipleOr(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleOr,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $multipleOr) {
            unset($this->multipleOr);
            return $this;
        }
        if (!($multipleOr instanceof FHIRBoolean)) {
            $multipleOr = new FHIRBoolean(value: $multipleOr);
        }
        if (null !== $valueXMLLocation) {
            $multipleOr->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $multipleOr->_getValueXMLLocation()) {
            $multipleOr->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->multipleOr = $multipleOr;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple parameters are allowed - e.g. more than one parameter with the
     * same name. The search matches if all the parameters match.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getMultipleAnd(): null|FHIRBoolean
    {
        return $this->multipleAnd ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether multiple parameters are allowed - e.g. more than one parameter with the
     * same name. The search matches if all the parameters match.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleAnd
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMultipleAnd(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleAnd,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $multipleAnd) {
            unset($this->multipleAnd);
            return $this;
        }
        if (!($multipleAnd instanceof FHIRBoolean)) {
            $multipleAnd = new FHIRBoolean(value: $multipleAnd);
        }
        if (null !== $valueXMLLocation) {
            $multipleAnd->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $multipleAnd->_getValueXMLLocation()) {
            $multipleAnd->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->multipleAnd = $multipleAnd;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[]
     */
    public function getComparator(): array
    {
        return $this->comparator ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator>
     */
    public function getComparatorIterator(): iterable
    {
        if (!isset($this->comparator) || [] === $this->comparator) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comparator);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator $comparator
     * @return static
     */
    public function addComparator(FHIRSearchComparator $comparator): self
    {
        if (!isset($this->comparator)) {
            $this->comparator = [];
        }
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator ...$comparator
     * @return static
     */
    public function setComparator(FHIRSearchComparator ...$comparator): self
    {
        $this->comparator = [];
        foreach($comparator as $v) {
            if ($v instanceof FHIRSearchComparator) {
                $this->comparator[] = $v;
            } else {
                $this->comparator[] = new FHIRSearchComparator(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[]
     */
    public function getModifier(): array
    {
        return $this->modifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode>
     */
    public function getModifierIterator(): iterable
    {
        if (!isset($this->modifier) || [] === $this->modifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifier);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode $modifier
     * @return static
     */
    public function addModifier(FHIRSearchModifierCode $modifier): self
    {
        if (!isset($this->modifier)) {
            $this->modifier = [];
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode ...$modifier
     * @return static
     */
    public function setModifier(FHIRSearchModifierCode ...$modifier): self
    {
        $this->modifier = [];
        foreach($modifier as $v) {
            if ($v instanceof FHIRSearchModifierCode) {
                $this->modifier[] = $v;
            } else {
                $this->modifier[] = new FHIRSearchModifierCode(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference and specify that resources will only be returned if
     * they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getChain(): array
    {
        return $this->chain ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getChainIterator(): iterable
    {
        if (!isset($this->chain) || [] === $this->chain) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->chain);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference and specify that resources will only be returned if
     * they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $chain
     * @return static
     */
    public function addChain(string|FHIRStringPrimitive|FHIRString $chain): self
    {
        if (!($chain instanceof FHIRString)) {
            $chain = new FHIRString(value: $chain);
        }
        if (!isset($this->chain)) {
            $this->chain = [];
        }
        $this->chain[] = $chain;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference and specify that resources will only be returned if
     * they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$chain
     * @return static
     */
    public function setChain(string|FHIRStringPrimitive|FHIRString ...$chain): self
    {
        $this->chain = [];
        foreach($chain as $v) {
            if ($v instanceof FHIRString) {
                $this->chain[] = $v;
            } else {
                $this->chain[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[]
     */
    public function getComponent(): array
    {
        return $this->component ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent>
     */
    public function getComponentIterator(): iterable
    {
        if (!isset($this->component) || [] === $this->component) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->component);
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent $component
     * @return static
     */
    public function addComponent(FHIRSearchParameterComponent $component): self
    {
        if (!isset($this->component)) {
            $this->component = [];
        }
        $this->component[] = $component;
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent ...$component
     * @return static
     */
    public function setComponent(FHIRSearchParameterComponent ...$component): self
    {
        $this->component = $component;
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBase())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_VERSION_ALGORITHM_STRING])) {
            $v = $this->getVersionAlgorithmString();
            foreach($validationRules[self::FIELD_VERSION_ALGORITHM_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION_ALGORITHM_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ALGORITHM_STRING])) {
                        $errs[self::FIELD_VERSION_ALGORITHM_STRING] = [];
                    }
                    $errs[self::FIELD_VERSION_ALGORITHM_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_ALGORITHM_CODING])) {
            $v = $this->getVersionAlgorithmCoding();
            foreach($validationRules[self::FIELD_VERSION_ALGORITHM_CODING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION_ALGORITHM_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ALGORITHM_CODING])) {
                        $errs[self::FIELD_VERSION_ALGORITHM_CODING] = [];
                    }
                    $errs[self::FIELD_VERSION_ALGORITHM_CODING][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM])) {
            $v = $this->getDerivedFrom();
            foreach($validationRules[self::FIELD_DERIVED_FROM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DERIVED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM])) {
                        $errs[self::FIELD_DERIVED_FROM] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT_LABEL])) {
            $v = $this->getCopyrightLabel();
            foreach($validationRules[self::FIELD_COPYRIGHT_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COPYRIGHT_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT_LABEL])) {
                        $errs[self::FIELD_COPYRIGHT_LABEL] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSION])) {
            $v = $this->getExpression();
            foreach($validationRules[self::FIELD_EXPRESSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSION])) {
                        $errs[self::FIELD_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCESSING_MODE])) {
            $v = $this->getProcessingMode();
            foreach($validationRules[self::FIELD_PROCESSING_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESSING_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESSING_MODE])) {
                        $errs[self::FIELD_PROCESSING_MODE] = [];
                    }
                    $errs[self::FIELD_PROCESSING_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONSTRAINT])) {
            $v = $this->getConstraint();
            foreach($validationRules[self::FIELD_CONSTRAINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTRAINT])) {
                        $errs[self::FIELD_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_OR])) {
            $v = $this->getMultipleOr();
            foreach($validationRules[self::FIELD_MULTIPLE_OR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MULTIPLE_OR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_OR])) {
                        $errs[self::FIELD_MULTIPLE_OR] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_OR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_AND])) {
            $v = $this->getMultipleAnd();
            foreach($validationRules[self::FIELD_MULTIPLE_AND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MULTIPLE_AND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_AND])) {
                        $errs[self::FIELD_MULTIPLE_AND] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_AND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARATOR])) {
            $v = $this->getComparator();
            foreach($validationRules[self::FIELD_COMPARATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARATOR])) {
                        $errs[self::FIELD_COMPARATOR] = [];
                    }
                    $errs[self::FIELD_COMPARATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHAIN])) {
            $v = $this->getChain();
            foreach($validationRules[self::FIELD_CHAIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHAIN])) {
                        $errs[self::FIELD_CHAIN] = [];
                    }
                    $errs[self::FIELD_CHAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPONENT])) {
            $v = $this->getComponent();
            foreach($validationRules[self::FIELD_COMPONENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPONENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPONENT])) {
                        $errs[self::FIELD_COMPONENT] = [];
                    }
                    $errs[self::FIELD_COMPONENT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSearchParameter)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_URL === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setVersionAlgorithmString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setVersionAlgorithmCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DERIVED_FROM === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDerivedFrom(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRPublicationStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPERIMENTAL === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPublisher(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTACT === $childName) {
                $v = new FHIRContactDetail();
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE_CONTEXT === $childName) {
                $v = new FHIRUsageContext();
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PURPOSE === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT_LABEL === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BASE === $childName) {
                $v = new FHIRVersionIndependentResourceTypesAll(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addBase(FHIRVersionIndependentResourceTypesAll::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRSearchParamType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setType(FHIRSearchParamType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPRESSION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExpression(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROCESSING_MODE === $childName) {
                $v = new FHIRSearchProcessingModeType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setProcessingMode(FHIRSearchProcessingModeType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONSTRAINT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setConstraint(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET === $childName) {
                $v = new FHIRVersionIndependentResourceTypesAll(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addTarget(FHIRVersionIndependentResourceTypesAll::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MULTIPLE_OR === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMultipleOr(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MULTIPLE_AND === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMultipleAnd(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARATOR === $childName) {
                $v = new FHIRSearchComparator(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addComparator(FHIRSearchComparator::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER === $childName) {
                $v = new FHIRSearchModifierCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addModifier(FHIRSearchModifierCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHAIN === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addChain(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPONENT === $childName) {
                $v = new FHIRSearchParameterComponent();
                $type->addComponent(FHIRSearchParameterComponent::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_URL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VERSION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VERSION_ALGORITHM_STRING])) {
            $pt = $type->getVersionAlgorithmString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersionAlgorithmString(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NAME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TITLE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle(new FHIRString(
                    value: (string)$attributes[self::FIELD_TITLE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DERIVED_FROM])) {
            $pt = $type->getDerivedFrom();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DERIVED_FROM]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDerivedFrom(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_DERIVED_FROM],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPERIMENTAL])) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXPERIMENTAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExperimental(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXPERIMENTAL],
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
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PUBLISHER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLISHER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PURPOSE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPurpose(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_PURPOSE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COPYRIGHT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyright(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_COPYRIGHT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT_LABEL])) {
            $pt = $type->getCopyrightLabel();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COPYRIGHT_LABEL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyrightLabel(new FHIRString(
                    value: (string)$attributes[self::FIELD_COPYRIGHT_LABEL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPRESSION])) {
            $pt = $type->getExpression();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXPRESSION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpression(new FHIRString(
                    value: (string)$attributes[self::FIELD_EXPRESSION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONSTRAINT])) {
            $pt = $type->getConstraint();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CONSTRAINT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setConstraint(new FHIRString(
                    value: (string)$attributes[self::FIELD_CONSTRAINT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MULTIPLE_OR])) {
            $pt = $type->getMultipleOr();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MULTIPLE_OR]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMultipleOr(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MULTIPLE_OR],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MULTIPLE_AND])) {
            $pt = $type->getMultipleAnd();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MULTIPLE_AND]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMultipleAnd(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MULTIPLE_AND],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CHAIN])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_CHAIN],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addChain($v);
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
            $xw->openRootNode('SearchParameter', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->_getFormattedValue());
        }
        if (isset($this->version) && $this->version->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->_getFormattedValue());
        }
        if (isset($this->versionAlgorithmString) && $this->versionAlgorithmString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION_ALGORITHM_STRING, $this->versionAlgorithmString->getValue()?->_getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->_getFormattedValue());
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->_getFormattedValue());
        }
        if (isset($this->derivedFrom) && $this->derivedFrom->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DERIVED_FROM, $this->derivedFrom->getValue()?->_getFormattedValue());
        }
        if (isset($this->experimental) && $this->experimental->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        if (isset($this->publisher) && $this->publisher->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->purpose) && $this->purpose->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $this->purpose->getValue()?->_getFormattedValue());
        }
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->getValue()?->_getFormattedValue());
        }
        if (isset($this->copyrightLabel) && $this->copyrightLabel->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT_LABEL, $this->copyrightLabel->getValue()?->_getFormattedValue());
        }
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->getValue()?->_getFormattedValue());
        }
        if (isset($this->expression) && $this->expression->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPRESSION, $this->expression->getValue()?->_getFormattedValue());
        }
        if (isset($this->constraint) && $this->constraint->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONSTRAINT, $this->constraint->getValue()?->_getFormattedValue());
        }
        if (isset($this->multipleOr) && $this->multipleOr->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_OR, $this->multipleOr->getValue()?->_getFormattedValue());
        }
        if (isset($this->multipleAnd) && $this->multipleAnd->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_AND, $this->multipleAnd->getValue()?->_getFormattedValue());
        }
        if (isset($this->chain)) {
           foreach($this->chain as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_CHAIN, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->version) && $this->version->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->versionAlgorithmString) && $this->versionAlgorithmString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_STRING);
            $this->versionAlgorithmString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->versionAlgorithmCoding)) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_CODING);
            $this->versionAlgorithmCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->title) && $this->title->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->derivedFrom) && $this->derivedFrom->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DERIVED_FROM);
            $this->derivedFrom->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->experimental) && $this->experimental->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPERIMENTAL);
            $this->experimental->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publisher) && $this->publisher->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
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
        if (isset($this->purpose) && $this->purpose->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PURPOSE);
            $this->purpose->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->copyrightLabel) && $this->copyrightLabel->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT_LABEL);
            $this->copyrightLabel->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->base)) {
            foreach ($this->base as $v) {
                $xw->startElement(self::FIELD_BASE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->expression) && $this->expression->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPRESSION);
            $this->expression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->processingMode)) {
            $xw->startElement(self::FIELD_PROCESSING_MODE);
            $this->processingMode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->constraint) && $this->constraint->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONSTRAINT);
            $this->constraint->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->target)) {
            foreach ($this->target as $v) {
                $xw->startElement(self::FIELD_TARGET);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->multipleOr) && $this->multipleOr->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MULTIPLE_OR);
            $this->multipleOr->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->multipleAnd) && $this->multipleAnd->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MULTIPLE_AND);
            $this->multipleAnd->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comparator)) {
            foreach ($this->comparator as $v) {
                $xw->startElement(self::FIELD_COMPARATOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modifier)) {
            foreach ($this->modifier as $v) {
                $xw->startElement(self::FIELD_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->chain)) {
            foreach($this->chain as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_CHAIN);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->component)) {
            foreach ($this->component as $v) {
                $xw->startElement(self::FIELD_COMPONENT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRSearchParameter
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSearchParameter)) {
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
        if (isset($json[self::FIELD_URL]) || isset($json[self::FIELD_URL_EXT]) || array_key_exists(self::FIELD_URL, $json) || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $ext = (isset($json[self::FIELD_URL_EXT]) && is_array($json[self::FIELD_URL_EXT])) ? $json[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setUrl($value);
                } else if (is_array($value)) {
                    $type->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUrl(new FHIRUri($ext));
            } else {
                $type->setUrl(new FHIRUri(null));
            }
        }
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
        if (isset($json[self::FIELD_VERSION_ALGORITHM_STRING]) || isset($json[self::FIELD_VERSION_ALGORITHM_STRING_EXT]) || array_key_exists(self::FIELD_VERSION_ALGORITHM_STRING, $json) || array_key_exists(self::FIELD_VERSION_ALGORITHM_STRING_EXT, $json)) {
            $value = $json[self::FIELD_VERSION_ALGORITHM_STRING] ?? null;
            $ext = (isset($json[self::FIELD_VERSION_ALGORITHM_STRING_EXT]) && is_array($json[self::FIELD_VERSION_ALGORITHM_STRING_EXT])) ? $json[self::FIELD_VERSION_ALGORITHM_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setVersionAlgorithmString($value);
                } else if (is_array($value)) {
                    $type->setVersionAlgorithmString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setVersionAlgorithmString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVersionAlgorithmString(new FHIRString($ext));
            } else {
                $type->setVersionAlgorithmString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VERSION_ALGORITHM_CODING]) || array_key_exists(self::FIELD_VERSION_ALGORITHM_CODING, $json)) {
            if ($json[self::FIELD_VERSION_ALGORITHM_CODING] instanceof FHIRCoding) {
                $type->setVersionAlgorithmCoding($json[self::FIELD_VERSION_ALGORITHM_CODING]);
            } else {
                $type->setVersionAlgorithmCoding(new FHIRCoding($json[self::FIELD_VERSION_ALGORITHM_CODING]));
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
        if (isset($json[self::FIELD_TITLE]) || isset($json[self::FIELD_TITLE_EXT]) || array_key_exists(self::FIELD_TITLE, $json) || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $ext = (isset($json[self::FIELD_TITLE_EXT]) && is_array($json[self::FIELD_TITLE_EXT])) ? $json[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTitle($value);
                } else if (is_array($value)) {
                    $type->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTitle(new FHIRString($ext));
            } else {
                $type->setTitle(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DERIVED_FROM]) || isset($json[self::FIELD_DERIVED_FROM_EXT]) || array_key_exists(self::FIELD_DERIVED_FROM, $json) || array_key_exists(self::FIELD_DERIVED_FROM_EXT, $json)) {
            $value = $json[self::FIELD_DERIVED_FROM] ?? null;
            $ext = (isset($json[self::FIELD_DERIVED_FROM_EXT]) && is_array($json[self::FIELD_DERIVED_FROM_EXT])) ? $json[self::FIELD_DERIVED_FROM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setDerivedFrom($value);
                } else if (is_array($value)) {
                    $type->setDerivedFrom(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setDerivedFrom(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDerivedFrom(new FHIRCanonical($ext));
            } else {
                $type->setDerivedFrom(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRPublicationStatus($ext));
            } else {
                $type->setStatus(new FHIRPublicationStatus(null));
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
        if (isset($json[self::FIELD_CONTACT]) || array_key_exists(self::FIELD_CONTACT, $json)) {
            if (is_array($json[self::FIELD_CONTACT])) {
                foreach($json[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $type->addContact($v);
                    } else {
                        $type->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $type->addContact($json[self::FIELD_CONTACT]);
            } else {
                $type->addContact(new FHIRContactDetail($json[self::FIELD_CONTACT]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_USE_CONTEXT]) || array_key_exists(self::FIELD_USE_CONTEXT, $json)) {
            if (is_array($json[self::FIELD_USE_CONTEXT])) {
                foreach($json[self::FIELD_USE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $type->addUseContext($v);
                    } else {
                        $type->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($json[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $type->addUseContext($json[self::FIELD_USE_CONTEXT]);
            } else {
                $type->addUseContext(new FHIRUsageContext($json[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($json[self::FIELD_JURISDICTION]) || array_key_exists(self::FIELD_JURISDICTION, $json)) {
            if (is_array($json[self::FIELD_JURISDICTION])) {
                foreach($json[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addJurisdiction($v);
                    } else {
                        $type->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $type->addJurisdiction($json[self::FIELD_JURISDICTION]);
            } else {
                $type->addJurisdiction(new FHIRCodeableConcept($json[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($json[self::FIELD_PURPOSE]) || isset($json[self::FIELD_PURPOSE_EXT]) || array_key_exists(self::FIELD_PURPOSE, $json) || array_key_exists(self::FIELD_PURPOSE_EXT, $json)) {
            $value = $json[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($json[self::FIELD_PURPOSE_EXT]) && is_array($json[self::FIELD_PURPOSE_EXT])) ? $json[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setPurpose($value);
                } else if (is_array($value)) {
                    $type->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPurpose(new FHIRMarkdown($ext));
            } else {
                $type->setPurpose(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_COPYRIGHT]) || isset($json[self::FIELD_COPYRIGHT_EXT]) || array_key_exists(self::FIELD_COPYRIGHT, $json) || array_key_exists(self::FIELD_COPYRIGHT_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT] ?? null;
            $ext = (isset($json[self::FIELD_COPYRIGHT_EXT]) && is_array($json[self::FIELD_COPYRIGHT_EXT])) ? $json[self::FIELD_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setCopyright($value);
                } else if (is_array($value)) {
                    $type->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCopyright(new FHIRMarkdown($ext));
            } else {
                $type->setCopyright(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_COPYRIGHT_LABEL]) || isset($json[self::FIELD_COPYRIGHT_LABEL_EXT]) || array_key_exists(self::FIELD_COPYRIGHT_LABEL, $json) || array_key_exists(self::FIELD_COPYRIGHT_LABEL_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT_LABEL] ?? null;
            $ext = (isset($json[self::FIELD_COPYRIGHT_LABEL_EXT]) && is_array($json[self::FIELD_COPYRIGHT_LABEL_EXT])) ? $json[self::FIELD_COPYRIGHT_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCopyrightLabel($value);
                } else if (is_array($value)) {
                    $type->setCopyrightLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCopyrightLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCopyrightLabel(new FHIRString($ext));
            } else {
                $type->setCopyrightLabel(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || isset($json[self::FIELD_CODE_EXT]) || array_key_exists(self::FIELD_CODE, $json) || array_key_exists(self::FIELD_CODE_EXT, $json)) {
            $value = $json[self::FIELD_CODE] ?? null;
            $ext = (isset($json[self::FIELD_CODE_EXT]) && is_array($json[self::FIELD_CODE_EXT])) ? $json[self::FIELD_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setCode($value);
                } else if (is_array($value)) {
                    $type->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCode(new FHIRCode($ext));
            } else {
                $type->setCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_BASE]) || isset($json[self::FIELD_BASE_EXT]) || array_key_exists(self::FIELD_BASE, $json) || array_key_exists(self::FIELD_BASE_EXT, $json)) {
            $value = $json[self::FIELD_BASE] ?? null;
            $ext = (isset($json[self::FIELD_BASE_EXT]) && is_array($json[self::FIELD_BASE_EXT])) ? $json[self::FIELD_BASE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRVersionIndependentResourceTypesAll) {
                    $type->addBase($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRVersionIndependentResourceTypesAll) {
                            $type->addBase($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addBase(new FHIRVersionIndependentResourceTypesAll(array_merge($v, $iext)));
                            } else {
                                $type->addBase(new FHIRVersionIndependentResourceTypesAll([FHIRVersionIndependentResourceTypesAll::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addBase(new FHIRVersionIndependentResourceTypesAll(array_merge($ext, $value)));
                } else {
                    $type->addBase(new FHIRVersionIndependentResourceTypesAll([FHIRVersionIndependentResourceTypesAll::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addBase(new FHIRVersionIndependentResourceTypesAll($iext));
                }
            } else {
                $type->addBase(new FHIRVersionIndependentResourceTypesAll(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchParamType) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRSearchParamType(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRSearchParamType($ext));
            } else {
                $type->setType(new FHIRSearchParamType(null));
            }
        }
        if (isset($json[self::FIELD_EXPRESSION]) || isset($json[self::FIELD_EXPRESSION_EXT]) || array_key_exists(self::FIELD_EXPRESSION, $json) || array_key_exists(self::FIELD_EXPRESSION_EXT, $json)) {
            $value = $json[self::FIELD_EXPRESSION] ?? null;
            $ext = (isset($json[self::FIELD_EXPRESSION_EXT]) && is_array($json[self::FIELD_EXPRESSION_EXT])) ? $json[self::FIELD_EXPRESSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setExpression($value);
                } else if (is_array($value)) {
                    $type->setExpression(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExpression(new FHIRString($ext));
            } else {
                $type->setExpression(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PROCESSING_MODE]) || isset($json[self::FIELD_PROCESSING_MODE_EXT]) || array_key_exists(self::FIELD_PROCESSING_MODE, $json) || array_key_exists(self::FIELD_PROCESSING_MODE_EXT, $json)) {
            $value = $json[self::FIELD_PROCESSING_MODE] ?? null;
            $ext = (isset($json[self::FIELD_PROCESSING_MODE_EXT]) && is_array($json[self::FIELD_PROCESSING_MODE_EXT])) ? $json[self::FIELD_PROCESSING_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchProcessingModeType) {
                    $type->setProcessingMode($value);
                } else if (is_array($value)) {
                    $type->setProcessingMode(new FHIRSearchProcessingModeType(array_merge($ext, $value)));
                } else {
                    $type->setProcessingMode(new FHIRSearchProcessingModeType([FHIRSearchProcessingModeType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setProcessingMode(new FHIRSearchProcessingModeType($ext));
            } else {
                $type->setProcessingMode(new FHIRSearchProcessingModeType(null));
            }
        }
        if (isset($json[self::FIELD_CONSTRAINT]) || isset($json[self::FIELD_CONSTRAINT_EXT]) || array_key_exists(self::FIELD_CONSTRAINT, $json) || array_key_exists(self::FIELD_CONSTRAINT_EXT, $json)) {
            $value = $json[self::FIELD_CONSTRAINT] ?? null;
            $ext = (isset($json[self::FIELD_CONSTRAINT_EXT]) && is_array($json[self::FIELD_CONSTRAINT_EXT])) ? $json[self::FIELD_CONSTRAINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setConstraint($value);
                } else if (is_array($value)) {
                    $type->setConstraint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setConstraint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setConstraint(new FHIRString($ext));
            } else {
                $type->setConstraint(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TARGET]) || isset($json[self::FIELD_TARGET_EXT]) || array_key_exists(self::FIELD_TARGET, $json) || array_key_exists(self::FIELD_TARGET_EXT, $json)) {
            $value = $json[self::FIELD_TARGET] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_EXT]) && is_array($json[self::FIELD_TARGET_EXT])) ? $json[self::FIELD_TARGET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRVersionIndependentResourceTypesAll) {
                    $type->addTarget($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRVersionIndependentResourceTypesAll) {
                            $type->addTarget($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addTarget(new FHIRVersionIndependentResourceTypesAll(array_merge($v, $iext)));
                            } else {
                                $type->addTarget(new FHIRVersionIndependentResourceTypesAll([FHIRVersionIndependentResourceTypesAll::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addTarget(new FHIRVersionIndependentResourceTypesAll(array_merge($ext, $value)));
                } else {
                    $type->addTarget(new FHIRVersionIndependentResourceTypesAll([FHIRVersionIndependentResourceTypesAll::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addTarget(new FHIRVersionIndependentResourceTypesAll($iext));
                }
            } else {
                $type->addTarget(new FHIRVersionIndependentResourceTypesAll(null));
            }
        }
        if (isset($json[self::FIELD_MULTIPLE_OR]) || isset($json[self::FIELD_MULTIPLE_OR_EXT]) || array_key_exists(self::FIELD_MULTIPLE_OR, $json) || array_key_exists(self::FIELD_MULTIPLE_OR_EXT, $json)) {
            $value = $json[self::FIELD_MULTIPLE_OR] ?? null;
            $ext = (isset($json[self::FIELD_MULTIPLE_OR_EXT]) && is_array($json[self::FIELD_MULTIPLE_OR_EXT])) ? $json[self::FIELD_MULTIPLE_OR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setMultipleOr($value);
                } else if (is_array($value)) {
                    $type->setMultipleOr(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setMultipleOr(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMultipleOr(new FHIRBoolean($ext));
            } else {
                $type->setMultipleOr(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_MULTIPLE_AND]) || isset($json[self::FIELD_MULTIPLE_AND_EXT]) || array_key_exists(self::FIELD_MULTIPLE_AND, $json) || array_key_exists(self::FIELD_MULTIPLE_AND_EXT, $json)) {
            $value = $json[self::FIELD_MULTIPLE_AND] ?? null;
            $ext = (isset($json[self::FIELD_MULTIPLE_AND_EXT]) && is_array($json[self::FIELD_MULTIPLE_AND_EXT])) ? $json[self::FIELD_MULTIPLE_AND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setMultipleAnd($value);
                } else if (is_array($value)) {
                    $type->setMultipleAnd(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setMultipleAnd(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMultipleAnd(new FHIRBoolean($ext));
            } else {
                $type->setMultipleAnd(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_COMPARATOR]) || isset($json[self::FIELD_COMPARATOR_EXT]) || array_key_exists(self::FIELD_COMPARATOR, $json) || array_key_exists(self::FIELD_COMPARATOR_EXT, $json)) {
            $value = $json[self::FIELD_COMPARATOR] ?? null;
            $ext = (isset($json[self::FIELD_COMPARATOR_EXT]) && is_array($json[self::FIELD_COMPARATOR_EXT])) ? $json[self::FIELD_COMPARATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchComparator) {
                    $type->addComparator($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRSearchComparator) {
                            $type->addComparator($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addComparator(new FHIRSearchComparator(array_merge($v, $iext)));
                            } else {
                                $type->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addComparator(new FHIRSearchComparator(array_merge($ext, $value)));
                } else {
                    $type->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addComparator(new FHIRSearchComparator($iext));
                }
            } else {
                $type->addComparator(new FHIRSearchComparator(null));
            }
        }
        if (isset($json[self::FIELD_MODIFIER]) || isset($json[self::FIELD_MODIFIER_EXT]) || array_key_exists(self::FIELD_MODIFIER, $json) || array_key_exists(self::FIELD_MODIFIER_EXT, $json)) {
            $value = $json[self::FIELD_MODIFIER] ?? null;
            $ext = (isset($json[self::FIELD_MODIFIER_EXT]) && is_array($json[self::FIELD_MODIFIER_EXT])) ? $json[self::FIELD_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchModifierCode) {
                    $type->addModifier($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRSearchModifierCode) {
                            $type->addModifier($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addModifier(new FHIRSearchModifierCode(array_merge($v, $iext)));
                            } else {
                                $type->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addModifier(new FHIRSearchModifierCode(array_merge($ext, $value)));
                } else {
                    $type->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addModifier(new FHIRSearchModifierCode($iext));
                }
            } else {
                $type->addModifier(new FHIRSearchModifierCode(null));
            }
        }
        if (isset($json[self::FIELD_CHAIN]) || isset($json[self::FIELD_CHAIN_EXT]) || array_key_exists(self::FIELD_CHAIN, $json) || array_key_exists(self::FIELD_CHAIN_EXT, $json)) {
            $value = $json[self::FIELD_CHAIN] ?? null;
            $ext = (isset($json[self::FIELD_CHAIN_EXT]) && is_array($json[self::FIELD_CHAIN_EXT])) ? $json[self::FIELD_CHAIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addChain($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addChain($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addChain(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addChain(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addChain(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addChain(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addChain(new FHIRString($iext));
                }
            } else {
                $type->addChain(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COMPONENT]) || array_key_exists(self::FIELD_COMPONENT, $json)) {
            if (is_array($json[self::FIELD_COMPONENT])) {
                foreach($json[self::FIELD_COMPONENT] as $v) {
                    if ($v instanceof FHIRSearchParameterComponent) {
                        $type->addComponent($v);
                    } else {
                        $type->addComponent(new FHIRSearchParameterComponent($v));
                    }
                }
            } elseif ($json[self::FIELD_COMPONENT] instanceof FHIRSearchParameterComponent) {
                $type->addComponent($json[self::FIELD_COMPONENT]);
            } else {
                $type->addComponent(new FHIRSearchParameterComponent($json[self::FIELD_COMPONENT]));
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
            $ext = $this->url->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_url = $ext;
            }
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
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
        if (isset($this->versionAlgorithmString)) {
            if (null !== ($val = $this->versionAlgorithmString->getValue())) {
                $out->versionAlgorithmString = $val;
            }
            $ext = $this->versionAlgorithmString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            $ext = $this->title->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_title = $ext;
            }
        }
        if (isset($this->derivedFrom)) {
            if (null !== ($val = $this->derivedFrom->getValue())) {
                $out->derivedFrom = $val;
            }
            $ext = $this->derivedFrom->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_derivedFrom = $ext;
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
        if (isset($this->contact) && [] !== $this->contact) {
            $out->contact = $this->contact;
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
        if (isset($this->useContext) && [] !== $this->useContext) {
            $out->useContext = $this->useContext;
        }
        if (isset($this->jurisdiction) && [] !== $this->jurisdiction) {
            $out->jurisdiction = $this->jurisdiction;
        }
        if (isset($this->purpose)) {
            if (null !== ($val = $this->purpose->getValue())) {
                $out->purpose = $val;
            }
            $ext = $this->purpose->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_purpose = $ext;
            }
        }
        if (isset($this->copyright)) {
            if (null !== ($val = $this->copyright->getValue())) {
                $out->copyright = $val;
            }
            $ext = $this->copyright->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_copyright = $ext;
            }
        }
        if (isset($this->copyrightLabel)) {
            if (null !== ($val = $this->copyrightLabel->getValue())) {
                $out->copyrightLabel = $val;
            }
            $ext = $this->copyrightLabel->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_copyrightLabel = $ext;
            }
        }
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            $ext = $this->code->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_code = $ext;
            }
        }
        if (isset($this->base) && [] !== $this->base) {
            $vals = [];
            $exts = [];
            foreach ($this->base as $v) {
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
                $out->base = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_base = $exts;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->expression)) {
            if (null !== ($val = $this->expression->getValue())) {
                $out->expression = $val;
            }
            $ext = $this->expression->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_expression = $ext;
            }
        }
        if (isset($this->processingMode)) {
            if (null !== ($val = $this->processingMode->getValue())) {
                $out->processingMode = $val;
            }
            $ext = $this->processingMode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_processingMode = $ext;
            }
        }
        if (isset($this->constraint)) {
            if (null !== ($val = $this->constraint->getValue())) {
                $out->constraint = $val;
            }
            $ext = $this->constraint->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_constraint = $ext;
            }
        }
        if (isset($this->target) && [] !== $this->target) {
            $vals = [];
            $exts = [];
            foreach ($this->target as $v) {
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
                $out->target = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_target = $exts;
            }
        }
        if (isset($this->multipleOr)) {
            if (null !== ($val = $this->multipleOr->getValue())) {
                $out->multipleOr = $val;
            }
            $ext = $this->multipleOr->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_multipleOr = $ext;
            }
        }
        if (isset($this->multipleAnd)) {
            if (null !== ($val = $this->multipleAnd->getValue())) {
                $out->multipleAnd = $val;
            }
            $ext = $this->multipleAnd->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_multipleAnd = $ext;
            }
        }
        if (isset($this->comparator) && [] !== $this->comparator) {
            $vals = [];
            $exts = [];
            foreach ($this->comparator as $v) {
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
                $out->comparator = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_comparator = $exts;
            }
        }
        if (isset($this->modifier) && [] !== $this->modifier) {
            $vals = [];
            $exts = [];
            foreach ($this->modifier as $v) {
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
                $out->modifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_modifier = $exts;
            }
        }
        if (isset($this->chain) && [] !== $this->chain) {
            $vals = [];
            $exts = [];
            foreach ($this->chain as $v) {
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
                $out->chain = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_chain = $exts;
            }
        }
        if (isset($this->component) && [] !== $this->component) {
            $out->component = $this->component;
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