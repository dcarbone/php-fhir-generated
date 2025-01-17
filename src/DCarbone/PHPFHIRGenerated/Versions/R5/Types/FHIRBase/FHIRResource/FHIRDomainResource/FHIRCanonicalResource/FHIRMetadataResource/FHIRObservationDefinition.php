<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;

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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue;
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
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
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRObservationDefinition extends FHIRMetadataResource implements VersionContainedTypeInterface
{
    use SourceXMLNamespaceTrait;


    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION;


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
    public const FIELD_APPROVAL_DATE = 'approvalDate';
    public const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    public const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    public const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    public const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    public const FIELD_DERIVED_FROM_CANONICAL = 'derivedFromCanonical';
    public const FIELD_DERIVED_FROM_CANONICAL_EXT = '_derivedFromCanonical';
    public const FIELD_DERIVED_FROM_URI = 'derivedFromUri';
    public const FIELD_DERIVED_FROM_URI_EXT = '_derivedFromUri';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_PERFORMER_TYPE = 'performerType';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_PERMITTED_DATA_TYPE = 'permittedDataType';
    public const FIELD_PERMITTED_DATA_TYPE_EXT = '_permittedDataType';
    public const FIELD_MULTIPLE_RESULTS_ALLOWED = 'multipleResultsAllowed';
    public const FIELD_MULTIPLE_RESULTS_ALLOWED_EXT = '_multipleResultsAllowed';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_METHOD = 'method';
    public const FIELD_SPECIMEN = 'specimen';
    public const FIELD_DEVICE = 'device';
    public const FIELD_PREFERRED_REPORT_NAME = 'preferredReportName';
    public const FIELD_PREFERRED_REPORT_NAME_EXT = '_preferredReportName';
    public const FIELD_PERMITTED_UNIT = 'permittedUnit';
    public const FIELD_QUALIFIED_VALUE = 'qualifiedValue';
    public const FIELD_HAS_MEMBER = 'hasMember';
    public const FIELD_COMPONENT = 'component';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this ObservationDefinition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * ObservationDefinition is (or will be) published. The URL SHOULD include the
     * major version of the ObservationDefinition. For more information see Technical
     * and Business Versions.
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
     * Business identifiers assigned to this ObservationDefinition. by the performer
     * and/or other systems. These identifiers remain constant as the resource is
     * updated and propagates from server to server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the
     * ObservationDefinition when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the ObservationDefinition author
     * and is not expected to be globally unique. For example, it might be a timestamp
     * (e.g. yyyymmdd) if a managed version is not available. There is also no
     * expectation that versions are orderable.
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
     * A natural language name identifying the ObservationDefinition. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this ObservationDefinition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
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
     * The date (and optionally time) when the ObservationDefinition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ObservationDefinition changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Helps establish the "authority/credibility" of the ObservationDefinition. May
     * also allow for contact.
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
     * A free text natural language description of the ObservationDefinition from the
     * consumer's perspective.
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
     * be used to assist with indexing and searching for appropriate
     * ObservationDefinition instances.
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
     * A jurisdiction in which the ObservationDefinition is intended to be used.
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
     * Explains why this ObservationDefinition is needed and why it has been designed
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
     * Copyright statement relating to the ObservationDefinition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the ObservationDefinition.
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
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $approvalDate;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was last reviewed. Review happens
     * periodically after that, but doesn't change the original approval date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $lastReviewDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the ObservationDefinition content was or is planned to
     * be effective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $effectivePeriod;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is
     * adhered to in whole or in part by this definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $derivedFromCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined observation definition, guideline or
     * other definition that is adhered to in whole or in part by this definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] 
     */
    protected array $derivedFromUri;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that describes the intended kind of subject of Observation instances
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $subject;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual/organization/device that is expected to act upon
     * instances of this definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $performerType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[] 
     */
    protected array $permittedDataType;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $multipleResultsAllowed;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The site on the subject's body where the observation is to be made.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $bodySite;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $specimen;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurement model of device or actual device used to produce observations of
     * this type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $device;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $preferredReportName;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $permittedUnit;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[] 
     */
    protected array $qualifiedValue;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel
     * of tests, a set of vital sign measurements) that includes the target as a member
     * of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $hasMember;
    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Some observations have multiple component observations, expressed as separate
     * code value pairs.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent[] 
     */
    protected array $component;

    /** Default validation map for fields in type ObservationDefinition */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRObservationDefinition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $version
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $versionAlgorithmString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $versionAlgorithmCoding
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $approvalDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastReviewDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectivePeriod
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $derivedFromCanonical
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] $derivedFromUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $performerType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[] $permittedDataType
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleResultsAllowed
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $bodySite
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $specimen
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $device
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $preferredReportName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $permittedUnit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[] $qualifiedValue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $hasMember
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent[] $component
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
                                null|FHIRIdentifier $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $version = null,
                                null|string|FHIRStringPrimitive|FHIRString $versionAlgorithmString = null,
                                null|FHIRCoding $versionAlgorithmCoding = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
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
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate = null,
                                null|FHIRPeriod $effectivePeriod = null,
                                null|iterable $derivedFromCanonical = null,
                                null|iterable $derivedFromUri = null,
                                null|iterable $subject = null,
                                null|FHIRCodeableConcept $performerType = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $permittedDataType = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleResultsAllowed = null,
                                null|FHIRCodeableConcept $bodySite = null,
                                null|FHIRCodeableConcept $method = null,
                                null|iterable $specimen = null,
                                null|iterable $device = null,
                                null|string|FHIRStringPrimitive|FHIRString $preferredReportName = null,
                                null|iterable $permittedUnit = null,
                                null|iterable $qualifiedValue = null,
                                null|iterable $hasMember = null,
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
            $this->setIdentifier($identifier);
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
        if (null !== $approvalDate) {
            $this->setApprovalDate($approvalDate);
        }
        if (null !== $lastReviewDate) {
            $this->setLastReviewDate($lastReviewDate);
        }
        if (null !== $effectivePeriod) {
            $this->setEffectivePeriod($effectivePeriod);
        }
        if (null !== $derivedFromCanonical) {
            $this->setDerivedFromCanonical(...$derivedFromCanonical);
        }
        if (null !== $derivedFromUri) {
            $this->setDerivedFromUri(...$derivedFromUri);
        }
        if (null !== $subject) {
            $this->setSubject(...$subject);
        }
        if (null !== $performerType) {
            $this->setPerformerType($performerType);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $permittedDataType) {
            $this->setPermittedDataType(...$permittedDataType);
        }
        if (null !== $multipleResultsAllowed) {
            $this->setMultipleResultsAllowed($multipleResultsAllowed);
        }
        if (null !== $bodySite) {
            $this->setBodySite($bodySite);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $specimen) {
            $this->setSpecimen(...$specimen);
        }
        if (null !== $device) {
            $this->setDevice(...$device);
        }
        if (null !== $preferredReportName) {
            $this->setPreferredReportName($preferredReportName);
        }
        if (null !== $permittedUnit) {
            $this->setPermittedUnit(...$permittedUnit);
        }
        if (null !== $qualifiedValue) {
            $this->setQualifiedValue(...$qualifiedValue);
        }
        if (null !== $hasMember) {
            $this->setHasMember(...$hasMember);
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
     * An absolute URL that is used to identify this ObservationDefinition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * ObservationDefinition is (or will be) published. The URL SHOULD include the
     * major version of the ObservationDefinition. For more information see Technical
     * and Business Versions.
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
     * An absolute URL that is used to identify this ObservationDefinition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * ObservationDefinition is (or will be) published. The URL SHOULD include the
     * major version of the ObservationDefinition. For more information see Technical
     * and Business Versions.
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
     * Business identifiers assigned to this ObservationDefinition. by the performer
     * and/or other systems. These identifiers remain constant as the resource is
     * updated and propagates from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this ObservationDefinition. by the performer
     * and/or other systems. These identifiers remain constant as the resource is
     * updated and propagates from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
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
     * The identifier that is used to identify this version of the
     * ObservationDefinition when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the ObservationDefinition author
     * and is not expected to be globally unique. For example, it might be a timestamp
     * (e.g. yyyymmdd) if a managed version is not available. There is also no
     * expectation that versions are orderable.
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
     * The identifier that is used to identify this version of the
     * ObservationDefinition when it is referenced in a specification, model, design or
     * instance. This is an arbitrary value managed by the ObservationDefinition author
     * and is not expected to be globally unique. For example, it might be a timestamp
     * (e.g. yyyymmdd) if a managed version is not available. There is also no
     * expectation that versions are orderable.
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
     * A natural language name identifying the ObservationDefinition. This name should
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
     * A natural language name identifying the ObservationDefinition. This name should
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
     * A short, descriptive, user-friendly title for the ObservationDefinition.
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
     * A short, descriptive, user-friendly title for the ObservationDefinition.
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
     * The current state of the ObservationDefinition.
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
     * The current state of the ObservationDefinition.
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
     * A flag to indicate that this ObservationDefinition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
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
     * A flag to indicate that this ObservationDefinition is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
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
     * The date (and optionally time) when the ObservationDefinition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ObservationDefinition changes.
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
     * The date (and optionally time) when the ObservationDefinition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the ObservationDefinition changes.
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
     * Helps establish the "authority/credibility" of the ObservationDefinition. May
     * also allow for contact.
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
     * Helps establish the "authority/credibility" of the ObservationDefinition. May
     * also allow for contact.
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
     * A free text natural language description of the ObservationDefinition from the
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
     * A free text natural language description of the ObservationDefinition from the
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
     * be used to assist with indexing and searching for appropriate
     * ObservationDefinition instances.
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
     * be used to assist with indexing and searching for appropriate
     * ObservationDefinition instances.
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
     * be used to assist with indexing and searching for appropriate
     * ObservationDefinition instances.
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
     * A jurisdiction in which the ObservationDefinition is intended to be used.
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
     * A jurisdiction in which the ObservationDefinition is intended to be used.
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
     * A jurisdiction in which the ObservationDefinition is intended to be used.
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
     * Explains why this ObservationDefinition is needed and why it has been designed
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
     * Explains why this ObservationDefinition is needed and why it has been designed
     * as it has.
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
     * Copyright statement relating to the ObservationDefinition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the ObservationDefinition.
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
     * Copyright statement relating to the ObservationDefinition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the ObservationDefinition.
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
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getApprovalDate(): null|FHIRDate
    {
        return $this->approvalDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $approvalDate
     * @return static
     */
    public function setApprovalDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate): self
    {
        if (null === $approvalDate) {
            unset($this->approvalDate);
            return $this;
        }
        if (!($approvalDate instanceof FHIRDate)) {
            $approvalDate = new FHIRDate(value: $approvalDate);
        }
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was last reviewed. Review happens
     * periodically after that, but doesn't change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLastReviewDate(): null|FHIRDate
    {
        return $this->lastReviewDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the asset content was last reviewed. Review happens
     * periodically after that, but doesn't change the original approval date.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastReviewDate
     * @return static
     */
    public function setLastReviewDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate): self
    {
        if (null === $lastReviewDate) {
            unset($this->lastReviewDate);
            return $this;
        }
        if (!($lastReviewDate instanceof FHIRDate)) {
            $lastReviewDate = new FHIRDate(value: $lastReviewDate);
        }
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the ObservationDefinition content was or is planned to
     * be effective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getEffectivePeriod(): null|FHIRPeriod
    {
        return $this->effectivePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the ObservationDefinition content was or is planned to
     * be effective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(null|FHIRPeriod $effectivePeriod): self
    {
        if (null === $effectivePeriod) {
            unset($this->effectivePeriod);
            return $this;
        }
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is
     * adhered to in whole or in part by this definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getDerivedFromCanonical(): array
    {
        return $this->derivedFromCanonical ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getDerivedFromCanonicalIterator(): iterable
    {
        if (!isset($this->derivedFromCanonical) || [] === $this->derivedFromCanonical) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->derivedFromCanonical);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is
     * adhered to in whole or in part by this definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $derivedFromCanonical
     * @return static
     */
    public function addDerivedFromCanonical(string|FHIRCanonicalPrimitive|FHIRCanonical $derivedFromCanonical): self
    {
        if (!($derivedFromCanonical instanceof FHIRCanonical)) {
            $derivedFromCanonical = new FHIRCanonical(value: $derivedFromCanonical);
        }
        if (!isset($this->derivedFromCanonical)) {
            $this->derivedFromCanonical = [];
        }
        $this->derivedFromCanonical[] = $derivedFromCanonical;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is
     * adhered to in whole or in part by this definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$derivedFromCanonical
     * @return static
     */
    public function setDerivedFromCanonical(string|FHIRCanonicalPrimitive|FHIRCanonical ...$derivedFromCanonical): self
    {
        $this->derivedFromCanonical = [];
        foreach($derivedFromCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->derivedFromCanonical[] = $v;
            } else {
                $this->derivedFromCanonical[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined observation definition, guideline or
     * other definition that is adhered to in whole or in part by this definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getDerivedFromUri(): array
    {
        return $this->derivedFromUri ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri>
     */
    public function getDerivedFromUriIterator(): iterable
    {
        if (!isset($this->derivedFromUri) || [] === $this->derivedFromUri) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->derivedFromUri);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined observation definition, guideline or
     * other definition that is adhered to in whole or in part by this definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $derivedFromUri
     * @return static
     */
    public function addDerivedFromUri(string|FHIRUriPrimitive|FHIRUri $derivedFromUri): self
    {
        if (!($derivedFromUri instanceof FHIRUri)) {
            $derivedFromUri = new FHIRUri(value: $derivedFromUri);
        }
        if (!isset($this->derivedFromUri)) {
            $this->derivedFromUri = [];
        }
        $this->derivedFromUri[] = $derivedFromUri;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined observation definition, guideline or
     * other definition that is adhered to in whole or in part by this definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri ...$derivedFromUri
     * @return static
     */
    public function setDerivedFromUri(string|FHIRUriPrimitive|FHIRUri ...$derivedFromUri): self
    {
        $this->derivedFromUri = [];
        foreach($derivedFromUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->derivedFromUri[] = $v;
            } else {
                $this->derivedFromUri[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that describes the intended kind of subject of Observation instances
     * conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSubject(): array
    {
        return $this->subject ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSubjectIterator(): iterable
    {
        if (!isset($this->subject) || [] === $this->subject) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subject);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that describes the intended kind of subject of Observation instances
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subject
     * @return static
     */
    public function addSubject(FHIRCodeableConcept $subject): self
    {
        if (!isset($this->subject)) {
            $this->subject = [];
        }
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that describes the intended kind of subject of Observation instances
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$subject
     * @return static
     */
    public function setSubject(FHIRCodeableConcept ...$subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual/organization/device that is expected to act upon
     * instances of this definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPerformerType(): null|FHIRCodeableConcept
    {
        return $this->performerType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of individual/organization/device that is expected to act upon
     * instances of this definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $performerType
     * @return static
     */
    public function setPerformerType(null|FHIRCodeableConcept $performerType): self
    {
        if (null === $performerType) {
            unset($this->performerType);
            return $this;
        }
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
        if (!isset($this->category) || [] === $this->category) {
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
     * A code that classifies the general type of observation.
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
     * A code that classifies the general type of observation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType[]
     */
    public function getPermittedDataType(): array
    {
        return $this->permittedDataType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType>
     */
    public function getPermittedDataTypeIterator(): iterable
    {
        if (!isset($this->permittedDataType) || [] === $this->permittedDataType) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->permittedDataType);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType $permittedDataType
     * @return static
     */
    public function addPermittedDataType(FHIRObservationDataType $permittedDataType): self
    {
        if (!isset($this->permittedDataType)) {
            $this->permittedDataType = [];
        }
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRObservationDataType ...$permittedDataType
     * @return static
     */
    public function setPermittedDataType(FHIRObservationDataType ...$permittedDataType): self
    {
        $this->permittedDataType = [];
        foreach($permittedDataType as $v) {
            if ($v instanceof FHIRObservationDataType) {
                $this->permittedDataType[] = $v;
            } else {
                $this->permittedDataType[] = new FHIRObservationDataType(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getMultipleResultsAllowed(): null|FHIRBoolean
    {
        return $this->multipleResultsAllowed ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $multipleResultsAllowed
     * @return static
     */
    public function setMultipleResultsAllowed(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $multipleResultsAllowed): self
    {
        if (null === $multipleResultsAllowed) {
            unset($this->multipleResultsAllowed);
            return $this;
        }
        if (!($multipleResultsAllowed instanceof FHIRBoolean)) {
            $multipleResultsAllowed = new FHIRBoolean(value: $multipleResultsAllowed);
        }
        $this->multipleResultsAllowed = $multipleResultsAllowed;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The site on the subject's body where the observation is to be made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getBodySite(): null|FHIRCodeableConcept
    {
        return $this->bodySite ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The site on the subject's body where the observation is to be made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function setBodySite(null|FHIRCodeableConcept $bodySite): self
    {
        if (null === $bodySite) {
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
     * The method or technique used to perform the observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpecimen(): array
    {
        return $this->specimen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSpecimenIterator(): iterable
    {
        if (!isset($this->specimen) || [] === $this->specimen) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specimen);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRReference $specimen): self
    {
        if (!isset($this->specimen)) {
            $this->specimen = [];
        }
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$specimen
     * @return static
     */
    public function setSpecimen(FHIRReference ...$specimen): self
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurement model of device or actual device used to produce observations of
     * this type.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getDevice(): array
    {
        return $this->device ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getDeviceIterator(): iterable
    {
        if (!isset($this->device) || [] === $this->device) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->device);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurement model of device or actual device used to produce observations of
     * this type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $device
     * @return static
     */
    public function addDevice(FHIRReference $device): self
    {
        if (!isset($this->device)) {
            $this->device = [];
        }
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measurement model of device or actual device used to produce observations of
     * this type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$device
     * @return static
     */
    public function setDevice(FHIRReference ...$device): self
    {
        $this->device = $device;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPreferredReportName(): null|FHIRString
    {
        return $this->preferredReportName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $preferredReportName
     * @return static
     */
    public function setPreferredReportName(null|string|FHIRStringPrimitive|FHIRString $preferredReportName): self
    {
        if (null === $preferredReportName) {
            unset($this->preferredReportName);
            return $this;
        }
        if (!($preferredReportName instanceof FHIRString)) {
            $preferredReportName = new FHIRString(value: $preferredReportName);
        }
        $this->preferredReportName = $preferredReportName;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getPermittedUnit(): array
    {
        return $this->permittedUnit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getPermittedUnitIterator(): iterable
    {
        if (!isset($this->permittedUnit) || [] === $this->permittedUnit) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->permittedUnit);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $permittedUnit
     * @return static
     */
    public function addPermittedUnit(FHIRCoding $permittedUnit): self
    {
        if (!isset($this->permittedUnit)) {
            $this->permittedUnit = [];
        }
        $this->permittedUnit[] = $permittedUnit;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Units allowed for the valueQuantity element in the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$permittedUnit
     * @return static
     */
    public function setPermittedUnit(FHIRCoding ...$permittedUnit): self
    {
        $this->permittedUnit = $permittedUnit;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue[]
     */
    public function getQualifiedValue(): array
    {
        return $this->qualifiedValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue>
     */
    public function getQualifiedValueIterator(): iterable
    {
        if (!isset($this->qualifiedValue) || [] === $this->qualifiedValue) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->qualifiedValue);
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue $qualifiedValue
     * @return static
     */
    public function addQualifiedValue(FHIRObservationDefinitionQualifiedValue $qualifiedValue): self
    {
        if (!isset($this->qualifiedValue)) {
            $this->qualifiedValue = [];
        }
        $this->qualifiedValue[] = $qualifiedValue;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * A set of qualified values associated with a context and a set of conditions -
     * provides a range for quantitative and ordinal observations and a collection of
     * value sets for qualitative observations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedValue ...$qualifiedValue
     * @return static
     */
    public function setQualifiedValue(FHIRObservationDefinitionQualifiedValue ...$qualifiedValue): self
    {
        $this->qualifiedValue = $qualifiedValue;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel
     * of tests, a set of vital sign measurements) that includes the target as a member
     * of the group.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getHasMember(): array
    {
        return $this->hasMember ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getHasMemberIterator(): iterable
    {
        if (!isset($this->hasMember) || [] === $this->hasMember) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->hasMember);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel
     * of tests, a set of vital sign measurements) that includes the target as a member
     * of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $hasMember
     * @return static
     */
    public function addHasMember(FHIRReference $hasMember): self
    {
        if (!isset($this->hasMember)) {
            $this->hasMember = [];
        }
        $this->hasMember[] = $hasMember;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel
     * of tests, a set of vital sign measurements) that includes the target as a member
     * of the group.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$hasMember
     * @return static
     */
    public function setHasMember(FHIRReference ...$hasMember): self
    {
        $this->hasMember = $hasMember;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Some observations have multiple component observations, expressed as separate
     * code value pairs.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent[]
     */
    public function getComponent(): array
    {
        return $this->component ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent>
     */
    public function getComponentIterator(): iterable
    {
        if (!isset($this->component) || [] === $this->component) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->component);
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Some observations have multiple component observations, expressed as separate
     * code value pairs.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent $component
     * @return static
     */
    public function addComponent(FHIRObservationDefinitionComponent $component): self
    {
        if (!isset($this->component)) {
            $this->component = [];
        }
        $this->component[] = $component;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Some observations have multiple component observations, expressed as separate
     * code value pairs.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionComponent ...$component
     * @return static
     */
    public function setComponent(FHIRObservationDefinitionComponent ...$component): self
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM_CANONICAL])) {
            $v = $this->getDerivedFromCanonical();
            foreach($validationRules[self::FIELD_DERIVED_FROM_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DERIVED_FROM_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM_CANONICAL])) {
                        $errs[self::FIELD_DERIVED_FROM_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM_URI])) {
            $v = $this->getDerivedFromUri();
            foreach($validationRules[self::FIELD_DERIVED_FROM_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DERIVED_FROM_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM_URI])) {
                        $errs[self::FIELD_DERIVED_FROM_URI] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM_URI][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PERMITTED_DATA_TYPE])) {
            $v = $this->getPermittedDataType();
            foreach($validationRules[self::FIELD_PERMITTED_DATA_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERMITTED_DATA_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERMITTED_DATA_TYPE])) {
                        $errs[self::FIELD_PERMITTED_DATA_TYPE] = [];
                    }
                    $errs[self::FIELD_PERMITTED_DATA_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
            $v = $this->getMultipleResultsAllowed();
            foreach($validationRules[self::FIELD_MULTIPLE_RESULTS_ALLOWED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MULTIPLE_RESULTS_ALLOWED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
                        $errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED] = [];
                    }
                    $errs[self::FIELD_MULTIPLE_RESULTS_ALLOWED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFERRED_REPORT_NAME])) {
            $v = $this->getPreferredReportName();
            foreach($validationRules[self::FIELD_PREFERRED_REPORT_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREFERRED_REPORT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFERRED_REPORT_NAME])) {
                        $errs[self::FIELD_PREFERRED_REPORT_NAME] = [];
                    }
                    $errs[self::FIELD_PREFERRED_REPORT_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERMITTED_UNIT])) {
            $v = $this->getPermittedUnit();
            foreach($validationRules[self::FIELD_PERMITTED_UNIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERMITTED_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERMITTED_UNIT])) {
                        $errs[self::FIELD_PERMITTED_UNIT] = [];
                    }
                    $errs[self::FIELD_PERMITTED_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALIFIED_VALUE])) {
            $v = $this->getQualifiedValue();
            foreach($validationRules[self::FIELD_QUALIFIED_VALUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUALIFIED_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALIFIED_VALUE])) {
                        $errs[self::FIELD_QUALIFIED_VALUE] = [];
                    }
                    $errs[self::FIELD_QUALIFIED_VALUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HAS_MEMBER])) {
            $v = $this->getHasMember();
            foreach($validationRules[self::FIELD_HAS_MEMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HAS_MEMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HAS_MEMBER])) {
                        $errs[self::FIELD_HAS_MEMBER] = [];
                    }
                    $errs[self::FIELD_HAS_MEMBER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinition)) {
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
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
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
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVersionAlgorithmString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION_ALGORITHM_CODING === $childName) {
                $v = new FHIRCoding();
                $type->setVersionAlgorithmCoding(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRPublicationStatus(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPERIMENTAL === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPublisher(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTACT === $childName) {
                $v = new FHIRContactDetail();
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE_CONTEXT === $childName) {
                $v = new FHIRUsageContext();
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_JURISDICTION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PURPOSE === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT_LABEL === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_APPROVAL_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setApprovalDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_REVIEW_DATE === $childName) {
                $v = new FHIRDate(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EFFECTIVE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DERIVED_FROM_CANONICAL === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addDerivedFromCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DERIVED_FROM_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addDerivedFromUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addSubject(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERFORMER_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setPerformerType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CATEGORY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERMITTED_DATA_TYPE === $childName) {
                $v = new FHIRObservationDataType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addPermittedDataType(FHIRObservationDataType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MULTIPLE_RESULTS_ALLOWED === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMultipleResultsAllowed(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BODY_SITE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_METHOD === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SPECIMEN === $childName) {
                $v = new FHIRReference();
                $type->addSpecimen(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEVICE === $childName) {
                $v = new FHIRReference();
                $type->addDevice(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PREFERRED_REPORT_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPreferredReportName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERMITTED_UNIT === $childName) {
                $v = new FHIRCoding();
                $type->addPermittedUnit(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_QUALIFIED_VALUE === $childName) {
                $v = new FHIRObservationDefinitionQualifiedValue();
                $type->addQualifiedValue(FHIRObservationDefinitionQualifiedValue::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_HAS_MEMBER === $childName) {
                $v = new FHIRReference();
                $type->addHasMember(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPONENT === $childName) {
                $v = new FHIRObservationDefinitionComponent();
                $type->addComponent(FHIRObservationDefinitionComponent::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
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
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
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
        if (isset($attributes[self::FIELD_VERSION_ALGORITHM_STRING])) {
            $pt = $type->getVersionAlgorithmString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersionAlgorithmString(new FHIRString(
                    value: (string)$attributes[self::FIELD_VERSION_ALGORITHM_STRING],
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
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle(new FHIRString(
                    value: (string)$attributes[self::FIELD_TITLE],
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
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PURPOSE])) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PURPOSE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPurpose(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_PURPOSE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COPYRIGHT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyright(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_COPYRIGHT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT_LABEL])) {
            $pt = $type->getCopyrightLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COPYRIGHT_LABEL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyrightLabel(new FHIRString(
                    value: (string)$attributes[self::FIELD_COPYRIGHT_LABEL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_APPROVAL_DATE])) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_APPROVAL_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setApprovalDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_APPROVAL_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVIEW_DATE])) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_REVIEW_DATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastReviewDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_LAST_REVIEW_DATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DERIVED_FROM_CANONICAL])) {
            $v = new FHIRCanonical(value: (string)$attributes[self::FIELD_DERIVED_FROM_CANONICAL],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addDerivedFromCanonical($v);
        }
        if (isset($attributes[self::FIELD_DERIVED_FROM_URI])) {
            $v = new FHIRUri(value: (string)$attributes[self::FIELD_DERIVED_FROM_URI],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addDerivedFromUri($v);
        }
        if (isset($attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
            $pt = $type->getMultipleResultsAllowed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMultipleResultsAllowed(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MULTIPLE_RESULTS_ALLOWED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PREFERRED_REPORT_NAME])) {
            $pt = $type->getPreferredReportName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PREFERRED_REPORT_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPreferredReportName(new FHIRString(
                    value: (string)$attributes[self::FIELD_PREFERRED_REPORT_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ObservationDefinition', $this->_getSourceXMLNS());
        }
        if (isset($this->url) && $this->url->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->getFormattedValue());
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION, $this->version->getValue()?->getFormattedValue());
        }
        if (isset($this->versionAlgorithmString) && $this->versionAlgorithmString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VERSION_ALGORITHM_STRING, $this->versionAlgorithmString->getValue()?->getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->getFormattedValue());
        }
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->getFormattedValue());
        }
        if (isset($this->experimental) && $this->experimental->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->getValue()?->getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->getFormattedValue());
        }
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $this->publisher->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->purpose) && $this->purpose->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PURPOSE, $this->purpose->getValue()?->getFormattedValue());
        }
        if (isset($this->copyright) && $this->copyright->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->getValue()?->getFormattedValue());
        }
        if (isset($this->copyrightLabel) && $this->copyrightLabel->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT_LABEL, $this->copyrightLabel->getValue()?->getFormattedValue());
        }
        if (isset($this->approvalDate) && $this->approvalDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_APPROVAL_DATE, $this->approvalDate->getValue()?->getFormattedValue());
        }
        if (isset($this->lastReviewDate) && $this->lastReviewDate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_REVIEW_DATE, $this->lastReviewDate->getValue()?->getFormattedValue());
        }
        if (isset($this->derivedFromCanonical)) {
           foreach($this->derivedFromCanonical as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_DERIVED_FROM_CANONICAL, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->derivedFromUri)) {
           foreach($this->derivedFromUri as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_DERIVED_FROM_URI, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->multipleResultsAllowed) && $this->multipleResultsAllowed->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MULTIPLE_RESULTS_ALLOWED, $this->multipleResultsAllowed->getValue()?->getFormattedValue());
        }
        if (isset($this->preferredReportName) && $this->preferredReportName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PREFERRED_REPORT_NAME, $this->preferredReportName->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->url) && $this->url->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version) && $this->version->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->versionAlgorithmString) && $this->versionAlgorithmString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_STRING);
            $this->versionAlgorithmString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->versionAlgorithmCoding)) {
            $xw->startElement(self::FIELD_VERSION_ALGORITHM_CODING);
            $this->versionAlgorithmCoding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
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
        if (isset($this->publisher) && $this->publisher->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
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
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
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
        if (isset($this->purpose) && $this->purpose->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PURPOSE);
            $this->purpose->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->copyright) && $this->copyright->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->copyrightLabel) && $this->copyrightLabel->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT_LABEL);
            $this->copyrightLabel->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->approvalDate) && $this->approvalDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_APPROVAL_DATE);
            $this->approvalDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastReviewDate) && $this->lastReviewDate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_REVIEW_DATE);
            $this->lastReviewDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->effectivePeriod)) {
            $xw->startElement(self::FIELD_EFFECTIVE_PERIOD);
            $this->effectivePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->derivedFromCanonical)) {
            foreach($this->derivedFromCanonical as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_DERIVED_FROM_CANONICAL);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->derivedFromUri)) {
            foreach($this->derivedFromUri as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_DERIVED_FROM_URI);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->subject)) {
            foreach ($this->subject as $v) {
                $xw->startElement(self::FIELD_SUBJECT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->performerType)) {
            $xw->startElement(self::FIELD_PERFORMER_TYPE);
            $this->performerType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->permittedDataType)) {
            foreach ($this->permittedDataType as $v) {
                $xw->startElement(self::FIELD_PERMITTED_DATA_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->multipleResultsAllowed) && $this->multipleResultsAllowed->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MULTIPLE_RESULTS_ALLOWED);
            $this->multipleResultsAllowed->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bodySite)) {
            $xw->startElement(self::FIELD_BODY_SITE);
            $this->bodySite->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specimen)) {
            foreach ($this->specimen as $v) {
                $xw->startElement(self::FIELD_SPECIMEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->device)) {
            foreach ($this->device as $v) {
                $xw->startElement(self::FIELD_DEVICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->preferredReportName) && $this->preferredReportName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PREFERRED_REPORT_NAME);
            $this->preferredReportName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->permittedUnit)) {
            foreach ($this->permittedUnit as $v) {
                $xw->startElement(self::FIELD_PERMITTED_UNIT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->qualifiedValue)) {
            foreach ($this->qualifiedValue as $v) {
                $xw->startElement(self::FIELD_QUALIFIED_VALUE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->hasMember)) {
            foreach ($this->hasMember as $v) {
                $xw->startElement(self::FIELD_HAS_MEMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinition)) {
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
            if ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->setIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
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
        if (isset($json[self::FIELD_APPROVAL_DATE]) || isset($json[self::FIELD_APPROVAL_DATE_EXT]) || array_key_exists(self::FIELD_APPROVAL_DATE, $json) || array_key_exists(self::FIELD_APPROVAL_DATE_EXT, $json)) {
            $value = $json[self::FIELD_APPROVAL_DATE] ?? null;
            $ext = (isset($json[self::FIELD_APPROVAL_DATE_EXT]) && is_array($json[self::FIELD_APPROVAL_DATE_EXT])) ? $json[self::FIELD_APPROVAL_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setApprovalDate($value);
                } else if (is_array($value)) {
                    $type->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setApprovalDate(new FHIRDate($ext));
            } else {
                $type->setApprovalDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_LAST_REVIEW_DATE]) || isset($json[self::FIELD_LAST_REVIEW_DATE_EXT]) || array_key_exists(self::FIELD_LAST_REVIEW_DATE, $json) || array_key_exists(self::FIELD_LAST_REVIEW_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_REVIEW_DATE] ?? null;
            $ext = (isset($json[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($json[self::FIELD_LAST_REVIEW_DATE_EXT])) ? $json[self::FIELD_LAST_REVIEW_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $type->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLastReviewDate(new FHIRDate($ext));
            } else {
                $type->setLastReviewDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_EFFECTIVE_PERIOD]) || array_key_exists(self::FIELD_EFFECTIVE_PERIOD, $json)) {
            if ($json[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $type->setEffectivePeriod($json[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $type->setEffectivePeriod(new FHIRPeriod($json[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_DERIVED_FROM_CANONICAL]) || isset($json[self::FIELD_DERIVED_FROM_CANONICAL_EXT]) || array_key_exists(self::FIELD_DERIVED_FROM_CANONICAL, $json) || array_key_exists(self::FIELD_DERIVED_FROM_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DERIVED_FROM_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_DERIVED_FROM_CANONICAL_EXT]) && is_array($json[self::FIELD_DERIVED_FROM_CANONICAL_EXT])) ? $json[self::FIELD_DERIVED_FROM_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->addDerivedFromCanonical($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $type->addDerivedFromCanonical($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addDerivedFromCanonical(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $type->addDerivedFromCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addDerivedFromCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->addDerivedFromCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addDerivedFromCanonical(new FHIRCanonical($iext));
                }
            } else {
                $type->addDerivedFromCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_DERIVED_FROM_URI]) || isset($json[self::FIELD_DERIVED_FROM_URI_EXT]) || array_key_exists(self::FIELD_DERIVED_FROM_URI, $json) || array_key_exists(self::FIELD_DERIVED_FROM_URI_EXT, $json)) {
            $value = $json[self::FIELD_DERIVED_FROM_URI] ?? null;
            $ext = (isset($json[self::FIELD_DERIVED_FROM_URI_EXT]) && is_array($json[self::FIELD_DERIVED_FROM_URI_EXT])) ? $json[self::FIELD_DERIVED_FROM_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->addDerivedFromUri($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $type->addDerivedFromUri($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addDerivedFromUri(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $type->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addDerivedFromUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addDerivedFromUri(new FHIRUri($iext));
                }
            } else {
                $type->addDerivedFromUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            if (is_array($json[self::FIELD_SUBJECT])) {
                foreach($json[self::FIELD_SUBJECT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addSubject($v);
                    } else {
                        $type->addSubject(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_SUBJECT] instanceof FHIRCodeableConcept) {
                $type->addSubject($json[self::FIELD_SUBJECT]);
            } else {
                $type->addSubject(new FHIRCodeableConcept($json[self::FIELD_SUBJECT]));
            }
        }
        if (isset($json[self::FIELD_PERFORMER_TYPE]) || array_key_exists(self::FIELD_PERFORMER_TYPE, $json)) {
            if ($json[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $type->setPerformerType($json[self::FIELD_PERFORMER_TYPE]);
            } else {
                $type->setPerformerType(new FHIRCodeableConcept($json[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            if (is_array($json[self::FIELD_CATEGORY])) {
                foreach($json[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addCategory($v);
                    } else {
                        $type->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $type->addCategory($json[self::FIELD_CATEGORY]);
            } else {
                $type->addCategory(new FHIRCodeableConcept($json[self::FIELD_CATEGORY]));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_PERMITTED_DATA_TYPE]) || isset($json[self::FIELD_PERMITTED_DATA_TYPE_EXT]) || array_key_exists(self::FIELD_PERMITTED_DATA_TYPE, $json) || array_key_exists(self::FIELD_PERMITTED_DATA_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_PERMITTED_DATA_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_PERMITTED_DATA_TYPE_EXT]) && is_array($json[self::FIELD_PERMITTED_DATA_TYPE_EXT])) ? $json[self::FIELD_PERMITTED_DATA_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRObservationDataType) {
                    $type->addPermittedDataType($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRObservationDataType) {
                            $type->addPermittedDataType($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addPermittedDataType(new FHIRObservationDataType(array_merge($v, $iext)));
                            } else {
                                $type->addPermittedDataType(new FHIRObservationDataType([FHIRObservationDataType::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addPermittedDataType(new FHIRObservationDataType(array_merge($ext, $value)));
                } else {
                    $type->addPermittedDataType(new FHIRObservationDataType([FHIRObservationDataType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addPermittedDataType(new FHIRObservationDataType($iext));
                }
            } else {
                $type->addPermittedDataType(new FHIRObservationDataType(null));
            }
        }
        if (isset($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED]) || isset($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT]) || array_key_exists(self::FIELD_MULTIPLE_RESULTS_ALLOWED, $json) || array_key_exists(self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT, $json)) {
            $value = $json[self::FIELD_MULTIPLE_RESULTS_ALLOWED] ?? null;
            $ext = (isset($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT]) && is_array($json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT])) ? $json[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setMultipleResultsAllowed($value);
                } else if (is_array($value)) {
                    $type->setMultipleResultsAllowed(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setMultipleResultsAllowed(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMultipleResultsAllowed(new FHIRBoolean($ext));
            } else {
                $type->setMultipleResultsAllowed(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_BODY_SITE]) || array_key_exists(self::FIELD_BODY_SITE, $json)) {
            if ($json[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $type->setBodySite($json[self::FIELD_BODY_SITE]);
            } else {
                $type->setBodySite(new FHIRCodeableConcept($json[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            if ($json[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $type->setMethod($json[self::FIELD_METHOD]);
            } else {
                $type->setMethod(new FHIRCodeableConcept($json[self::FIELD_METHOD]));
            }
        }
        if (isset($json[self::FIELD_SPECIMEN]) || array_key_exists(self::FIELD_SPECIMEN, $json)) {
            if (is_array($json[self::FIELD_SPECIMEN])) {
                foreach($json[self::FIELD_SPECIMEN] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSpecimen($v);
                    } else {
                        $type->addSpecimen(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $type->addSpecimen($json[self::FIELD_SPECIMEN]);
            } else {
                $type->addSpecimen(new FHIRReference($json[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($json[self::FIELD_DEVICE]) || array_key_exists(self::FIELD_DEVICE, $json)) {
            if (is_array($json[self::FIELD_DEVICE])) {
                foreach($json[self::FIELD_DEVICE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addDevice($v);
                    } else {
                        $type->addDevice(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_DEVICE] instanceof FHIRReference) {
                $type->addDevice($json[self::FIELD_DEVICE]);
            } else {
                $type->addDevice(new FHIRReference($json[self::FIELD_DEVICE]));
            }
        }
        if (isset($json[self::FIELD_PREFERRED_REPORT_NAME]) || isset($json[self::FIELD_PREFERRED_REPORT_NAME_EXT]) || array_key_exists(self::FIELD_PREFERRED_REPORT_NAME, $json) || array_key_exists(self::FIELD_PREFERRED_REPORT_NAME_EXT, $json)) {
            $value = $json[self::FIELD_PREFERRED_REPORT_NAME] ?? null;
            $ext = (isset($json[self::FIELD_PREFERRED_REPORT_NAME_EXT]) && is_array($json[self::FIELD_PREFERRED_REPORT_NAME_EXT])) ? $json[self::FIELD_PREFERRED_REPORT_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPreferredReportName($value);
                } else if (is_array($value)) {
                    $type->setPreferredReportName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPreferredReportName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPreferredReportName(new FHIRString($ext));
            } else {
                $type->setPreferredReportName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PERMITTED_UNIT]) || array_key_exists(self::FIELD_PERMITTED_UNIT, $json)) {
            if (is_array($json[self::FIELD_PERMITTED_UNIT])) {
                foreach($json[self::FIELD_PERMITTED_UNIT] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $type->addPermittedUnit($v);
                    } else {
                        $type->addPermittedUnit(new FHIRCoding($v));
                    }
                }
            } elseif ($json[self::FIELD_PERMITTED_UNIT] instanceof FHIRCoding) {
                $type->addPermittedUnit($json[self::FIELD_PERMITTED_UNIT]);
            } else {
                $type->addPermittedUnit(new FHIRCoding($json[self::FIELD_PERMITTED_UNIT]));
            }
        }
        if (isset($json[self::FIELD_QUALIFIED_VALUE]) || array_key_exists(self::FIELD_QUALIFIED_VALUE, $json)) {
            if (is_array($json[self::FIELD_QUALIFIED_VALUE])) {
                foreach($json[self::FIELD_QUALIFIED_VALUE] as $v) {
                    if ($v instanceof FHIRObservationDefinitionQualifiedValue) {
                        $type->addQualifiedValue($v);
                    } else {
                        $type->addQualifiedValue(new FHIRObservationDefinitionQualifiedValue($v));
                    }
                }
            } elseif ($json[self::FIELD_QUALIFIED_VALUE] instanceof FHIRObservationDefinitionQualifiedValue) {
                $type->addQualifiedValue($json[self::FIELD_QUALIFIED_VALUE]);
            } else {
                $type->addQualifiedValue(new FHIRObservationDefinitionQualifiedValue($json[self::FIELD_QUALIFIED_VALUE]));
            }
        }
        if (isset($json[self::FIELD_HAS_MEMBER]) || array_key_exists(self::FIELD_HAS_MEMBER, $json)) {
            if (is_array($json[self::FIELD_HAS_MEMBER])) {
                foreach($json[self::FIELD_HAS_MEMBER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addHasMember($v);
                    } else {
                        $type->addHasMember(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_HAS_MEMBER] instanceof FHIRReference) {
                $type->addHasMember($json[self::FIELD_HAS_MEMBER]);
            } else {
                $type->addHasMember(new FHIRReference($json[self::FIELD_HAS_MEMBER]));
            }
        }
        if (isset($json[self::FIELD_COMPONENT]) || array_key_exists(self::FIELD_COMPONENT, $json)) {
            if (is_array($json[self::FIELD_COMPONENT])) {
                foreach($json[self::FIELD_COMPONENT] as $v) {
                    if ($v instanceof FHIRObservationDefinitionComponent) {
                        $type->addComponent($v);
                    } else {
                        $type->addComponent(new FHIRObservationDefinitionComponent($v));
                    }
                }
            } elseif ($json[self::FIELD_COMPONENT] instanceof FHIRObservationDefinitionComponent) {
                $type->addComponent($json[self::FIELD_COMPONENT]);
            } else {
                $type->addComponent(new FHIRObservationDefinitionComponent($json[self::FIELD_COMPONENT]));
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
        if (isset($this->identifier)) {
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
        if (isset($this->approvalDate)) {
            if (null !== ($val = $this->approvalDate->getValue())) {
                $out->approvalDate = $val;
            }
            $ext = $this->approvalDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_approvalDate = $ext;
            }
        }
        if (isset($this->lastReviewDate)) {
            if (null !== ($val = $this->lastReviewDate->getValue())) {
                $out->lastReviewDate = $val;
            }
            $ext = $this->lastReviewDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastReviewDate = $ext;
            }
        }
        if (isset($this->effectivePeriod)) {
            $out->effectivePeriod = $this->effectivePeriod;
        }
        if (isset($this->derivedFromCanonical) && [] !== $this->derivedFromCanonical) {
            $vals = [];
            $exts = [];
            foreach ($this->derivedFromCanonical as $v) {
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
                $out->derivedFromCanonical = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_derivedFromCanonical = $exts;
            }
        }
        if (isset($this->derivedFromUri) && [] !== $this->derivedFromUri) {
            $vals = [];
            $exts = [];
            foreach ($this->derivedFromUri as $v) {
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
                $out->derivedFromUri = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_derivedFromUri = $exts;
            }
        }
        if (isset($this->subject) && [] !== $this->subject) {
            $out->subject = $this->subject;
        }
        if (isset($this->performerType)) {
            $out->performerType = $this->performerType;
        }
        if (isset($this->category) && [] !== $this->category) {
            $out->category = $this->category;
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->permittedDataType) && [] !== $this->permittedDataType) {
            $vals = [];
            $exts = [];
            foreach ($this->permittedDataType as $v) {
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
                $out->permittedDataType = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_permittedDataType = $exts;
            }
        }
        if (isset($this->multipleResultsAllowed)) {
            if (null !== ($val = $this->multipleResultsAllowed->getValue())) {
                $out->multipleResultsAllowed = $val;
            }
            $ext = $this->multipleResultsAllowed->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_multipleResultsAllowed = $ext;
            }
        }
        if (isset($this->bodySite)) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->specimen) && [] !== $this->specimen) {
            $out->specimen = $this->specimen;
        }
        if (isset($this->device) && [] !== $this->device) {
            $out->device = $this->device;
        }
        if (isset($this->preferredReportName)) {
            if (null !== ($val = $this->preferredReportName->getValue())) {
                $out->preferredReportName = $val;
            }
            $ext = $this->preferredReportName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_preferredReportName = $ext;
            }
        }
        if (isset($this->permittedUnit) && [] !== $this->permittedUnit) {
            $out->permittedUnit = $this->permittedUnit;
        }
        if (isset($this->qualifiedValue) && [] !== $this->qualifiedValue) {
            $out->qualifiedValue = $this->qualifiedValue;
        }
        if (isset($this->hasMember) && [] !== $this->hasMember) {
            $out->hasMember = $this->hasMember;
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