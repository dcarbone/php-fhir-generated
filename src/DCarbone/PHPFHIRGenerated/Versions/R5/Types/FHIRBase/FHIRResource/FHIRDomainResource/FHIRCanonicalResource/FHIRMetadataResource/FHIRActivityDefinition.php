<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestResourceTypes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestIntentEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestResourceTypesEnum;
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
 * This resource allows for the definition of some activity to be performed,
 * independent of a particular patient, practitioner, or other performance context.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRActivityDefinition extends FHIRMetadataResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        SourceXMLNamespaceTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION;

    /* class_default.php:50 */
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
    public const FIELD_SUBTITLE = 'subtitle';
    public const FIELD_SUBTITLE_EXT = '_subtitle';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_EXPERIMENTAL = 'experimental';
    public const FIELD_EXPERIMENTAL_EXT = '_experimental';
    public const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    public const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    public const FIELD_SUBJECT_CANONICAL = 'subjectCanonical';
    public const FIELD_SUBJECT_CANONICAL_EXT = '_subjectCanonical';
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
    public const FIELD_USAGE = 'usage';
    public const FIELD_USAGE_EXT = '_usage';
    public const FIELD_COPYRIGHT = 'copyright';
    public const FIELD_COPYRIGHT_EXT = '_copyright';
    public const FIELD_COPYRIGHT_LABEL = 'copyrightLabel';
    public const FIELD_COPYRIGHT_LABEL_EXT = '_copyrightLabel';
    public const FIELD_APPROVAL_DATE = 'approvalDate';
    public const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    public const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    public const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    public const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_EDITOR = 'editor';
    public const FIELD_REVIEWER = 'reviewer';
    public const FIELD_ENDORSER = 'endorser';
    public const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    public const FIELD_LIBRARY = 'library';
    public const FIELD_LIBRARY_EXT = '_library';
    public const FIELD_KIND = 'kind';
    public const FIELD_KIND_EXT = '_kind';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_CODE = 'code';
    public const FIELD_INTENT = 'intent';
    public const FIELD_INTENT_EXT = '_intent';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_DO_NOT_PERFORM = 'doNotPerform';
    public const FIELD_DO_NOT_PERFORM_EXT = '_doNotPerform';
    public const FIELD_TIMING_TIMING = 'timingTiming';
    public const FIELD_TIMING_AGE = 'timingAge';
    public const FIELD_TIMING_RANGE = 'timingRange';
    public const FIELD_TIMING_DURATION = 'timingDuration';
    public const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    public const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    public const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_PRODUCT_REFERENCE = 'productReference';
    public const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_DOSAGE = 'dosage';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_SPECIMEN_REQUIREMENT = 'specimenRequirement';
    public const FIELD_SPECIMEN_REQUIREMENT_EXT = '_specimenRequirement';
    public const FIELD_OBSERVATION_REQUIREMENT = 'observationRequirement';
    public const FIELD_OBSERVATION_REQUIREMENT_EXT = '_observationRequirement';
    public const FIELD_OBSERVATION_RESULT_REQUIREMENT = 'observationResultRequirement';
    public const FIELD_OBSERVATION_RESULT_REQUIREMENT_EXT = '_observationResultRequirement';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_TRANSFORM_EXT = '_transform';
    public const FIELD_DYNAMIC_VALUE = 'dynamicValue';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSION_ALGORITHM_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUBTITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXPERIMENTAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUBJECT_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLISHER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PURPOSE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_APPROVAL_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_REVIEW_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_KIND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROFILE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INTENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRIORITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DO_NOT_PERFORM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AS_NEEDED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TRANSFORM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this activity definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the activity definition is stored on different
     * servers.
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
     * A formal identifier that is used to identify this activity definition when it is
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
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
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
     * current. (choose any one of versionAlgorithm*, but only one)
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
     * current. (choose any one of versionAlgorithm*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $versionAlgorithmCoding;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the activity definition. This name should be
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
     * A short, descriptive, user-friendly title for the activity definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the activity definition giving additional
     * information about its content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $subtitle;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this activity definition. Enables tracking the life-cycle of the
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus 
     */
    protected FHIRPublicationStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this activity definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $experimental;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subjectCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subjectReference;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $subjectCanonical;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the activity definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the activity definition changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual responsible for the release and
     * ongoing maintenance of the activity definition.
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
     * A free text natural language description of the activity definition from a
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
     * be used to assist with indexing and searching for appropriate activity
     * definition instances.
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * Explanation of why this activity definition is needed and why it has been
     * designed as it has.
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
     * A detailed description of how the activity definition is used from a clinical
     * perspective.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $usage;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
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
     * The date on which the resource content was approved by the publisher. Approval
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
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $lastReviewDate;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity definition content was or is planned to be
     * in active use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $effectivePeriod;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $topic;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] 
     */
    protected array $author;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] 
     */
    protected array $editor;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] 
     */
    protected array $reviewer;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] 
     */
    protected array $endorser;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] 
     */
    protected array $relatedArtifact;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the
     * activity definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $library;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestResourceTypes 
     */
    protected FHIRRequestResourceTypes $kind;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $profile;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the level of authority/intentionality associated with the activity and
     * where the request should fit into the workflow chain.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestIntent 
     */
    protected FHIRRequestIntent $intent;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the activity should be addressed with respect to other
     * requests.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority 
     */
    protected FHIRRequestPriority $priority;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the definition is to indicate that a particular activity
     * should NOT be performed. If true, this element should be interpreted to
     * reinforce a negative coding. For example NPO as a code with a doNotPerform of
     * true would still indicate to NOT perform the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $doNotPerform;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming 
     */
    protected FHIRTiming $timingTiming;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $timingAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $timingRange;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $timingDuration;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $asNeededBoolean;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $asNeededCodeableConcept;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $location;
    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[] 
     */
    protected array $participant;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $productReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $productCodeableConcept;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage[] 
     */
    protected array $dosage;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $bodySite;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines specimen requirements for the action to be performed, such as required
     * specimens for a lab test.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $specimenRequirement;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines observation requirements for the action to be performed, such as body
     * weight or surface area.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $observationRequirement;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $observationResultRequirement;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $transform;
    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the request resource that
     * would contain the result.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[] 
     */
    protected array $dynamicValue;

    /* constructor.php:61 */
    /**
     * FHIRActivityDefinition Constructor
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $subtitle
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPublicationStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $experimental
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subjectCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $subjectCanonical
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publisher
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $contact
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRUsageContext[] $useContext
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $jurisdiction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $purpose
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $usage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $copyrightLabel
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $approvalDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastReviewDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectivePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $topic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $editor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $reviewer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[] $endorser
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[] $relatedArtifact
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $library
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestResourceTypesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestResourceTypes $kind
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestIntentEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestIntent $intent
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority $priority
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $doNotPerform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $timingAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $timingDuration
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $asNeededBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $asNeededCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $productReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage[] $dosage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $bodySite
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $specimenRequirement
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $observationRequirement
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $observationResultRequirement
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[] $dynamicValue
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
                                null|string|FHIRStringPrimitive|FHIRString $subtitle = null,
                                null|string|FHIRPublicationStatusEnum|FHIRPublicationStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null,
                                null|FHIRCodeableConcept $subjectCodeableConcept = null,
                                null|FHIRReference $subjectReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $subjectCanonical = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $publisher = null,
                                null|iterable $contact = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $useContext = null,
                                null|iterable $jurisdiction = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $usage = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null,
                                null|string|FHIRStringPrimitive|FHIRString $copyrightLabel = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate = null,
                                null|FHIRPeriod $effectivePeriod = null,
                                null|iterable $topic = null,
                                null|iterable $author = null,
                                null|iterable $editor = null,
                                null|iterable $reviewer = null,
                                null|iterable $endorser = null,
                                null|iterable $relatedArtifact = null,
                                null|iterable $library = null,
                                null|string|FHIRRequestResourceTypesEnum|FHIRRequestResourceTypes $kind = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRRequestIntentEnum|FHIRRequestIntent $intent = null,
                                null|string|FHIRRequestPriorityEnum|FHIRRequestPriority $priority = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $doNotPerform = null,
                                null|FHIRTiming $timingTiming = null,
                                null|FHIRAge $timingAge = null,
                                null|FHIRRange $timingRange = null,
                                null|FHIRDuration $timingDuration = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean = null,
                                null|FHIRCodeableConcept $asNeededCodeableConcept = null,
                                null|FHIRCodeableReference $location = null,
                                null|iterable $participant = null,
                                null|FHIRReference $productReference = null,
                                null|FHIRCodeableConcept $productCodeableConcept = null,
                                null|FHIRQuantity $quantity = null,
                                null|iterable $dosage = null,
                                null|iterable $bodySite = null,
                                null|iterable $specimenRequirement = null,
                                null|iterable $observationRequirement = null,
                                null|iterable $observationResultRequirement = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $transform = null,
                                null|iterable $dynamicValue = null,
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
        if (null !== $subtitle) {
            $this->setSubtitle($subtitle);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $experimental) {
            $this->setExperimental($experimental);
        }
        if (null !== $subjectCodeableConcept) {
            $this->setSubjectCodeableConcept($subjectCodeableConcept);
        }
        if (null !== $subjectReference) {
            $this->setSubjectReference($subjectReference);
        }
        if (null !== $subjectCanonical) {
            $this->setSubjectCanonical($subjectCanonical);
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
        if (null !== $usage) {
            $this->setUsage($usage);
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
        if (null !== $topic) {
            $this->setTopic(...$topic);
        }
        if (null !== $author) {
            $this->setAuthor(...$author);
        }
        if (null !== $editor) {
            $this->setEditor(...$editor);
        }
        if (null !== $reviewer) {
            $this->setReviewer(...$reviewer);
        }
        if (null !== $endorser) {
            $this->setEndorser(...$endorser);
        }
        if (null !== $relatedArtifact) {
            $this->setRelatedArtifact(...$relatedArtifact);
        }
        if (null !== $library) {
            $this->setLibrary(...$library);
        }
        if (null !== $kind) {
            $this->setKind($kind);
        }
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $intent) {
            $this->setIntent($intent);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $doNotPerform) {
            $this->setDoNotPerform($doNotPerform);
        }
        if (null !== $timingTiming) {
            $this->setTimingTiming($timingTiming);
        }
        if (null !== $timingAge) {
            $this->setTimingAge($timingAge);
        }
        if (null !== $timingRange) {
            $this->setTimingRange($timingRange);
        }
        if (null !== $timingDuration) {
            $this->setTimingDuration($timingDuration);
        }
        if (null !== $asNeededBoolean) {
            $this->setAsNeededBoolean($asNeededBoolean);
        }
        if (null !== $asNeededCodeableConcept) {
            $this->setAsNeededCodeableConcept($asNeededCodeableConcept);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $productReference) {
            $this->setProductReference($productReference);
        }
        if (null !== $productCodeableConcept) {
            $this->setProductCodeableConcept($productCodeableConcept);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $dosage) {
            $this->setDosage(...$dosage);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $specimenRequirement) {
            $this->setSpecimenRequirement(...$specimenRequirement);
        }
        if (null !== $observationRequirement) {
            $this->setObservationRequirement(...$observationRequirement);
        }
        if (null !== $observationResultRequirement) {
            $this->setObservationResultRequirement(...$observationResultRequirement);
        }
        if (null !== $transform) {
            $this->setTransform($transform);
        }
        if (null !== $dynamicValue) {
            $this->setDynamicValue(...$dynamicValue);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:151 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this activity definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the activity definition is stored on different
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
     * An absolute URI that is used to identify this activity definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which an authoritative instance of this activity definition is (or
     * will be) published. This URL can be the target of a canonical reference. It
     * SHALL remain the same when the activity definition is stored on different
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
     * A formal identifier that is used to identify this activity definition when it is
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
     * A formal identifier that is used to identify this activity definition when it is
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
     * A formal identifier that is used to identify this activity definition when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
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
     * The identifier that is used to identify this version of the activity definition
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the activity definition author and is not expected to
     * be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. To provide a version consistent with
     * the Decision Support Service specification, use the format Major.Minor.Revision
     * (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the
     * Decision Support Service specification. Note that a version is required for
     * non-experimental active assets.
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
     * A natural language name identifying the activity definition. This name should be
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
     * A natural language name identifying the activity definition. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
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
     * A short, descriptive, user-friendly title for the activity definition.
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
     * A short, descriptive, user-friendly title for the activity definition.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the activity definition giving additional
     * information about its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSubtitle(): null|FHIRString
    {
        return $this->subtitle ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanatory or alternate title for the activity definition giving additional
     * information about its content.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $subtitle
     * @return static
     */
    public function setSubtitle(null|string|FHIRStringPrimitive|FHIRString $subtitle): self
    {
        if (null === $subtitle) {
            unset($this->subtitle);
            return $this;
        }
        if (!($subtitle instanceof FHIRString)) {
            $subtitle = new FHIRString(value: $subtitle);
        }
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this activity definition. Enables tracking the life-cycle of the
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
     * The status of this activity definition. Enables tracking the life-cycle of the
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
     * A Boolean value to indicate that this activity definition is authored for
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
     * A Boolean value to indicate that this activity definition is authored for
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->subjectCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(null|FHIRCodeableConcept $subjectCodeableConcept): self
    {
        if (null === $subjectCodeableConcept) {
            unset($this->subjectCodeableConcept);
            return $this;
        }
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubjectReference(): null|FHIRReference
    {
        return $this->subjectReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(null|FHIRReference $subjectReference): self
    {
        if (null === $subjectReference) {
            unset($this->subjectReference);
            return $this;
        }
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getSubjectCanonical(): null|FHIRCanonical
    {
        return $this->subjectCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes or identifies
     * the intended subject of the activity being defined. Canonical references are
     * allowed to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $subjectCanonical
     * @return static
     */
    public function setSubjectCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $subjectCanonical): self
    {
        if (null === $subjectCanonical) {
            unset($this->subjectCanonical);
            return $this;
        }
        if (!($subjectCanonical instanceof FHIRCanonical)) {
            $subjectCanonical = new FHIRCanonical(value: $subjectCanonical);
        }
        $this->subjectCanonical = $subjectCanonical;
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
     * The date (and optionally time) when the activity definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the activity definition changes.
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
     * The date (and optionally time) when the activity definition was last
     * significantly changed. The date must change when the business version changes
     * and it must change if the status code changes. In addition, it should change
     * when the substantive content of the activity definition changes.
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
     * ongoing maintenance of the activity definition.
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
     * ongoing maintenance of the activity definition.
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
     * A free text natural language description of the activity definition from a
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
     * A free text natural language description of the activity definition from a
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
     * be used to assist with indexing and searching for appropriate activity
     * definition instances.
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
     * be used to assist with indexing and searching for appropriate activity
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
     * be used to assist with indexing and searching for appropriate activity
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * A legal or geographic region in which the activity definition is intended to be
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
     * Explanation of why this activity definition is needed and why it has been
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
     * Explanation of why this activity definition is needed and why it has been
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
     * A detailed description of how the activity definition is used from a clinical
     * perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getUsage(): null|FHIRMarkdown
    {
        return $this->usage ?? null;
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
     * A detailed description of how the activity definition is used from a clinical
     * perspective.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $usage
     * @return static
     */
    public function setUsage(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $usage): self
    {
        if (null === $usage) {
            unset($this->usage);
            return $this;
        }
        if (!($usage instanceof FHIRMarkdown)) {
            $usage = new FHIRMarkdown(value: $usage);
        }
        $this->usage = $usage;
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
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
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
     * A copyright statement relating to the activity definition and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the activity definition.
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
     * The date on which the resource content was approved by the publisher. Approval
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
     * The date on which the resource content was approved by the publisher. Approval
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
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
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
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
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
     * The period during which the activity definition content was or is planned to be
     * in active use.
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
     * The period during which the activity definition content was or is planned to be
     * in active use.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getTopic(): array
    {
        return $this->topic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getTopicIterator(): iterable
    {
        if (!isset($this->topic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->topic);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $topic
     * @return static
     */
    public function addTopic(FHIRCodeableConcept $topic): self
    {
        if (!isset($this->topic)) {
            $this->topic = [];
        }
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive topics related to the content of the activity. Topics provide a
     * high-level categorization of the activity that can be useful for filtering and
     * searching.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$topic
     * @return static
     */
    public function setTopic(FHIRCodeableConcept ...$topic): self
    {
        if ([] === $topic) {
            unset($this->topic);
            return $this;
        }
        $this->topic = $topic;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getAuthor(): array
    {
        return $this->author ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getAuthorIterator(): iterable
    {
        if (!isset($this->author)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->author);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $author
     * @return static
     */
    public function addAuthor(FHIRContactDetail $author): self
    {
        if (!isset($this->author)) {
            $this->author = [];
        }
        $this->author[] = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual or organization primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail ...$author
     * @return static
     */
    public function setAuthor(FHIRContactDetail ...$author): self
    {
        if ([] === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getEditor(): array
    {
        return $this->editor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getEditorIterator(): iterable
    {
        if (!isset($this->editor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->editor);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $editor
     * @return static
     */
    public function addEditor(FHIRContactDetail $editor): self
    {
        if (!isset($this->editor)) {
            $this->editor = [];
        }
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization primarily responsible for internal coherence of
     * the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail ...$editor
     * @return static
     */
    public function setEditor(FHIRContactDetail ...$editor): self
    {
        if ([] === $editor) {
            unset($this->editor);
            return $this;
        }
        $this->editor = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getReviewer(): array
    {
        return $this->reviewer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getReviewerIterator(): iterable
    {
        if (!isset($this->reviewer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reviewer);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $reviewer
     * @return static
     */
    public function addReviewer(FHIRContactDetail $reviewer): self
    {
        if (!isset($this->reviewer)) {
            $this->reviewer = [];
        }
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be primarily
     * responsible for review of some aspect of the content.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail ...$reviewer
     * @return static
     */
    public function setReviewer(FHIRContactDetail ...$reviewer): self
    {
        if ([] === $reviewer) {
            unset($this->reviewer);
            return $this;
        }
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail[]
     */
    public function getEndorser(): array
    {
        return $this->endorser ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail>
     */
    public function getEndorserIterator(): iterable
    {
        if (!isset($this->endorser)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->endorser);
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail $endorser
     * @return static
     */
    public function addEndorser(FHIRContactDetail $endorser): self
    {
        if (!isset($this->endorser)) {
            $this->endorser = [];
        }
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individual or organization asserted by the publisher to be responsible for
     * officially endorsing the content for use in some setting.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactDetail ...$endorser
     * @return static
     */
    public function setEndorser(FHIRContactDetail ...$endorser): self
    {
        if ([] === $endorser) {
            unset($this->endorser);
            return $this;
        }
        $this->endorser = $endorser;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): array
    {
        return $this->relatedArtifact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
     */
    public function getRelatedArtifactIterator(): iterable
    {
        if (!isset($this->relatedArtifact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedArtifact);
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(FHIRRelatedArtifact $relatedArtifact): self
    {
        if (!isset($this->relatedArtifact)) {
            $this->relatedArtifact = [];
        }
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact ...$relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(FHIRRelatedArtifact ...$relatedArtifact): self
    {
        if ([] === $relatedArtifact) {
            unset($this->relatedArtifact);
            return $this;
        }
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the
     * activity definition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getLibrary(): array
    {
        return $this->library ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getLibraryIterator(): iterable
    {
        if (!isset($this->library)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->library);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the
     * activity definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $library
     * @return static
     */
    public function addLibrary(string|FHIRCanonicalPrimitive|FHIRCanonical $library): self
    {
        if (!($library instanceof FHIRCanonical)) {
            $library = new FHIRCanonical(value: $library);
        }
        if (!isset($this->library)) {
            $this->library = [];
        }
        $this->library[] = $library;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a Library resource containing any formal logic used by the
     * activity definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$library
     * @return static
     */
    public function setLibrary(string|FHIRCanonicalPrimitive|FHIRCanonical ...$library): self
    {
        if ([] === $library) {
            unset($this->library);
            return $this;
        }
        $this->library = [];
        foreach($library as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->library[] = $v;
            } else {
                $this->library[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestResourceTypes
     */
    public function getKind(): null|FHIRRequestResourceTypes
    {
        return $this->kind ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the kind of resource the activity definition is representing.
     * For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestResourceTypesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestResourceTypes $kind
     * @return static
     */
    public function setKind(null|string|FHIRRequestResourceTypesEnum|FHIRRequestResourceTypes $kind): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
        }
        if (!($kind instanceof FHIRRequestResourceTypes)) {
            $kind = new FHIRRequestResourceTypes(value: $kind);
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getProfile(): null|FHIRCanonical
    {
        return $this->profile ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function setProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        if (!($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical(value: $profile);
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
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
     * Detailed description of the type of activity; e.g. What lab test, what
     * procedure, what kind of encounter.
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
     * Indicates the level of authority/intentionality associated with the activity and
     * where the request should fit into the workflow chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestIntent
     */
    public function getIntent(): null|FHIRRequestIntent
    {
        return $this->intent ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the level of authority/intentionality associated with the activity and
     * where the request should fit into the workflow chain.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestIntentEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestIntent $intent
     * @return static
     */
    public function setIntent(null|string|FHIRRequestIntentEnum|FHIRRequestIntent $intent): self
    {
        if (null === $intent) {
            unset($this->intent);
            return $this;
        }
        if (!($intent instanceof FHIRRequestIntent)) {
            $intent = new FHIRRequestIntent(value: $intent);
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the activity should be addressed with respect to other
     * requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the activity should be addressed with respect to other
     * requests.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|string|FHIRRequestPriorityEnum|FHIRRequestPriority $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            $priority = new FHIRRequestPriority(value: $priority);
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the definition is to indicate that a particular activity
     * should NOT be performed. If true, this element should be interpreted to
     * reinforce a negative coding. For example NPO as a code with a doNotPerform of
     * true would still indicate to NOT perform the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform(): null|FHIRBoolean
    {
        return $this->doNotPerform ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the definition is to indicate that a particular activity
     * should NOT be performed. If true, this element should be interpreted to
     * reinforce a negative coding. For example NPO as a code with a doNotPerform of
     * true would still indicate to NOT perform the action.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $doNotPerform
     * @return static
     */
    public function setDoNotPerform(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $doNotPerform): self
    {
        if (null === $doNotPerform) {
            unset($this->doNotPerform);
            return $this;
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            $doNotPerform = new FHIRBoolean(value: $doNotPerform);
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getTimingTiming(): null|FHIRTiming
    {
        return $this->timingTiming ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(null|FHIRTiming $timingTiming): self
    {
        if (null === $timingTiming) {
            unset($this->timingTiming);
            return $this;
        }
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getTimingAge(): null|FHIRAge
    {
        return $this->timingAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $timingAge
     * @return static
     */
    public function setTimingAge(null|FHIRAge $timingAge): self
    {
        if (null === $timingAge) {
            unset($this->timingAge);
            return $this;
        }
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getTimingRange(): null|FHIRRange
    {
        return $this->timingRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $timingRange
     * @return static
     */
    public function setTimingRange(null|FHIRRange $timingRange): self
    {
        if (null === $timingRange) {
            unset($this->timingRange);
            return $this;
        }
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration(): null|FHIRDuration
    {
        return $this->timingDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing or frequency upon which the described activity is to occur. (choose
     * any one of timing*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $timingDuration
     * @return static
     */
    public function setTimingDuration(null|FHIRDuration $timingDuration): self
    {
        if (null === $timingDuration) {
            unset($this->timingDuration);
            return $this;
        }
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean(): null|FHIRBoolean
    {
        return $this->asNeededBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return static
     */
    public function setAsNeededBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean): self
    {
        if (null === $asNeededBoolean) {
            unset($this->asNeededBoolean);
            return $this;
        }
        if (!($asNeededBoolean instanceof FHIRBoolean)) {
            $asNeededBoolean = new FHIRBoolean(value: $asNeededBoolean);
        }
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->asNeededCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(null|FHIRCodeableConcept $asNeededCodeableConcept): self
    {
        if (null === $asNeededCodeableConcept) {
            unset($this->asNeededCodeableConcept);
            return $this;
        }
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getLocation(): null|FHIRCodeableReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $location
     * @return static
     */
    public function setLocation(null|FHIRCodeableReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRActivityDefinitionParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRActivityDefinitionParticipant ...$participant): self
    {
        if ([] === $participant) {
            unset($this->participant);
            return $this;
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getProductReference(): null|FHIRReference
    {
        return $this->productReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $productReference
     * @return static
     */
    public function setProductReference(null|FHIRReference $productReference): self
    {
        if (null === $productReference) {
            unset($this->productReference);
            return $this;
        }
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getProductCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->productCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity. (choose any one of product*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $productCodeableConcept
     * @return static
     */
    public function setProductCodeableConcept(null|FHIRCodeableConcept $productCodeableConcept): self
    {
        if (null === $productCodeableConcept) {
            unset($this->productCodeableConcept);
            return $this;
        }
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage[]
     */
    public function getDosage(): array
    {
        return $this->dosage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage>
     */
    public function getDosageIterator(): iterable
    {
        if (!isset($this->dosage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dosage);
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $dosage
     * @return static
     */
    public function addDosage(FHIRDosage $dosage): self
    {
        if (!isset($this->dosage)) {
            $this->dosage = [];
        }
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides detailed dosage instructions in the same way that they are described
     * for MedicationRequest resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage ...$dosage
     * @return static
     */
    public function setDosage(FHIRDosage ...$dosage): self
    {
        if ([] === $dosage) {
            unset($this->dosage);
            return $this;
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getBodySiteIterator(): iterable
    {
        if (!isset($this->bodySite)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodySite);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableConcept $bodySite): self
    {
        if (!isset($this->bodySite)) {
            $this->bodySite = [];
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept ...$bodySite): self
    {
        if ([] === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines specimen requirements for the action to be performed, such as required
     * specimens for a lab test.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getSpecimenRequirement(): array
    {
        return $this->specimenRequirement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getSpecimenRequirementIterator(): iterable
    {
        if (!isset($this->specimenRequirement)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specimenRequirement);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines specimen requirements for the action to be performed, such as required
     * specimens for a lab test.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $specimenRequirement
     * @return static
     */
    public function addSpecimenRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical $specimenRequirement): self
    {
        if (!($specimenRequirement instanceof FHIRCanonical)) {
            $specimenRequirement = new FHIRCanonical(value: $specimenRequirement);
        }
        if (!isset($this->specimenRequirement)) {
            $this->specimenRequirement = [];
        }
        $this->specimenRequirement[] = $specimenRequirement;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines specimen requirements for the action to be performed, such as required
     * specimens for a lab test.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$specimenRequirement
     * @return static
     */
    public function setSpecimenRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical ...$specimenRequirement): self
    {
        if ([] === $specimenRequirement) {
            unset($this->specimenRequirement);
            return $this;
        }
        $this->specimenRequirement = [];
        foreach($specimenRequirement as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->specimenRequirement[] = $v;
            } else {
                $this->specimenRequirement[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines observation requirements for the action to be performed, such as body
     * weight or surface area.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getObservationRequirement(): array
    {
        return $this->observationRequirement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getObservationRequirementIterator(): iterable
    {
        if (!isset($this->observationRequirement)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->observationRequirement);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines observation requirements for the action to be performed, such as body
     * weight or surface area.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $observationRequirement
     * @return static
     */
    public function addObservationRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical $observationRequirement): self
    {
        if (!($observationRequirement instanceof FHIRCanonical)) {
            $observationRequirement = new FHIRCanonical(value: $observationRequirement);
        }
        if (!isset($this->observationRequirement)) {
            $this->observationRequirement = [];
        }
        $this->observationRequirement[] = $observationRequirement;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines observation requirements for the action to be performed, such as body
     * weight or surface area.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$observationRequirement
     * @return static
     */
    public function setObservationRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical ...$observationRequirement): self
    {
        if ([] === $observationRequirement) {
            unset($this->observationRequirement);
            return $this;
        }
        $this->observationRequirement = [];
        foreach($observationRequirement as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->observationRequirement[] = $v;
            } else {
                $this->observationRequirement[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getObservationResultRequirement(): array
    {
        return $this->observationResultRequirement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getObservationResultRequirementIterator(): iterable
    {
        if (!isset($this->observationResultRequirement)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->observationResultRequirement);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $observationResultRequirement
     * @return static
     */
    public function addObservationResultRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical $observationResultRequirement): self
    {
        if (!($observationResultRequirement instanceof FHIRCanonical)) {
            $observationResultRequirement = new FHIRCanonical(value: $observationResultRequirement);
        }
        if (!isset($this->observationResultRequirement)) {
            $this->observationResultRequirement = [];
        }
        $this->observationResultRequirement[] = $observationResultRequirement;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$observationResultRequirement
     * @return static
     */
    public function setObservationResultRequirement(string|FHIRCanonicalPrimitive|FHIRCanonical ...$observationResultRequirement): self
    {
        if ([] === $observationResultRequirement) {
            unset($this->observationResultRequirement);
            return $this;
        }
        $this->observationResultRequirement = [];
        foreach($observationResultRequirement as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->observationResultRequirement[] = $v;
            } else {
                $this->observationResultRequirement[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getTransform(): null|FHIRCanonical
    {
        return $this->transform ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a StructureMap resource that defines a transform that can be
     * executed to produce the intent resource using the ActivityDefinition instance as
     * the input.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $transform
     * @return static
     */
    public function setTransform(null|string|FHIRCanonicalPrimitive|FHIRCanonical $transform): self
    {
        if (null === $transform) {
            unset($this->transform);
            return $this;
        }
        if (!($transform instanceof FHIRCanonical)) {
            $transform = new FHIRCanonical(value: $transform);
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the request resource that
     * would contain the result.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue[]
     */
    public function getDynamicValue(): array
    {
        return $this->dynamicValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue>
     */
    public function getDynamicValueIterator(): iterable
    {
        if (!isset($this->dynamicValue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dynamicValue);
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the request resource that
     * would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue $dynamicValue
     * @return static
     */
    public function addDynamicValue(FHIRActivityDefinitionDynamicValue $dynamicValue): self
    {
        if (!isset($this->dynamicValue)) {
            $this->dynamicValue = [];
        }
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of some activity to be performed,
     * independent of a particular patient, practitioner, or other performance context.
     *
     * Dynamic values that will be evaluated to produce values for elements of the
     * resulting resource. For example, if the dosage of a medication must be computed
     * based on the patient's weight, a dynamic value would be used to specify an
     * expression that calculated the weight, and the path on the request resource that
     * would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue ...$dynamicValue
     * @return static
     */
    public function setDynamicValue(FHIRActivityDefinitionDynamicValue ...$dynamicValue): self
    {
        if ([] === $dynamicValue) {
            unset($this->dynamicValue);
            return $this;
        }
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRActivityDefinition)) {
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
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
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
            } else if (self::FIELD_SUBTITLE === $cen) {
                $type->setSubtitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPERIMENTAL === $cen) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_CODEABLE_CONCEPT === $cen) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_REFERENCE === $cen) {
                $type->setSubjectReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_CANONICAL === $cen) {
                $type->setSubjectCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
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
            } else if (self::FIELD_USAGE === $cen) {
                $type->setUsage(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT === $cen) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT_LABEL === $cen) {
                $type->setCopyrightLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_APPROVAL_DATE === $cen) {
                $type->setApprovalDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_REVIEW_DATE === $cen) {
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EFFECTIVE_PERIOD === $cen) {
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOPIC === $cen) {
                $type->addTopic(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->addAuthor(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EDITOR === $cen) {
                $type->addEditor(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REVIEWER === $cen) {
                $type->addReviewer(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDORSER === $cen) {
                $type->addEndorser(FHIRContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ARTIFACT === $cen) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIBRARY === $cen) {
                $type->addLibrary(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KIND === $cen) {
                $type->setKind(FHIRRequestResourceTypes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->setProfile(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENT === $cen) {
                $type->setIntent(FHIRRequestIntent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DO_NOT_PERFORM === $cen) {
                $type->setDoNotPerform(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_TIMING === $cen) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_AGE === $cen) {
                $type->setTimingAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_RANGE === $cen) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_DURATION === $cen) {
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED_BOOLEAN === $cen) {
                $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED_CODEABLE_CONCEPT === $cen) {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT === $cen) {
                $type->addParticipant(FHIRActivityDefinitionParticipant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_REFERENCE === $cen) {
                $type->setProductReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT_CODEABLE_CONCEPT === $cen) {
                $type->setProductCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSAGE === $cen) {
                $type->addDosage(FHIRDosage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIMEN_REQUIREMENT === $cen) {
                $type->addSpecimenRequirement(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OBSERVATION_REQUIREMENT === $cen) {
                $type->addObservationRequirement(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OBSERVATION_RESULT_REQUIREMENT === $cen) {
                $type->addObservationResultRequirement(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRANSFORM === $cen) {
                $type->setTransform(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DYNAMIC_VALUE === $cen) {
                $type->addDynamicValue(FHIRActivityDefinitionDynamicValue::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_SUBTITLE])) {
            if (isset($type->subtitle)) {
                $type->subtitle->setValue((string)$attributes[self::FIELD_SUBTITLE]);
            } else {
                $type->setSubtitle((string)$attributes[self::FIELD_SUBTITLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUBTITLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_SUBJECT_CANONICAL])) {
            if (isset($type->subjectCanonical)) {
                $type->subjectCanonical->setValue((string)$attributes[self::FIELD_SUBJECT_CANONICAL]);
            } else {
                $type->setSubjectCanonical((string)$attributes[self::FIELD_SUBJECT_CANONICAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUBJECT_CANONICAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_USAGE])) {
            if (isset($type->usage)) {
                $type->usage->setValue((string)$attributes[self::FIELD_USAGE]);
            } else {
                $type->setUsage((string)$attributes[self::FIELD_USAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_APPROVAL_DATE])) {
            if (isset($type->approvalDate)) {
                $type->approvalDate->setValue((string)$attributes[self::FIELD_APPROVAL_DATE]);
            } else {
                $type->setApprovalDate((string)$attributes[self::FIELD_APPROVAL_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_APPROVAL_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_REVIEW_DATE])) {
            if (isset($type->lastReviewDate)) {
                $type->lastReviewDate->setValue((string)$attributes[self::FIELD_LAST_REVIEW_DATE]);
            } else {
                $type->setLastReviewDate((string)$attributes[self::FIELD_LAST_REVIEW_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LAST_REVIEW_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_KIND])) {
            if (isset($type->kind)) {
                $type->kind->setValue((string)$attributes[self::FIELD_KIND]);
            } else {
                $type->setKind((string)$attributes[self::FIELD_KIND]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_KIND, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            if (isset($type->profile)) {
                $type->profile->setValue((string)$attributes[self::FIELD_PROFILE]);
            } else {
                $type->setProfile((string)$attributes[self::FIELD_PROFILE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PROFILE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INTENT])) {
            if (isset($type->intent)) {
                $type->intent->setValue((string)$attributes[self::FIELD_INTENT]);
            } else {
                $type->setIntent((string)$attributes[self::FIELD_INTENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INTENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRIORITY])) {
            if (isset($type->priority)) {
                $type->priority->setValue((string)$attributes[self::FIELD_PRIORITY]);
            } else {
                $type->setPriority((string)$attributes[self::FIELD_PRIORITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRIORITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DO_NOT_PERFORM])) {
            if (isset($type->doNotPerform)) {
                $type->doNotPerform->setValue((string)$attributes[self::FIELD_DO_NOT_PERFORM]);
            } else {
                $type->setDoNotPerform((string)$attributes[self::FIELD_DO_NOT_PERFORM]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DO_NOT_PERFORM, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AS_NEEDED_BOOLEAN])) {
            if (isset($type->asNeededBoolean)) {
                $type->asNeededBoolean->setValue((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN]);
            } else {
                $type->setAsNeededBoolean((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AS_NEEDED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TRANSFORM])) {
            if (isset($type->transform)) {
                $type->transform->setValue((string)$attributes[self::FIELD_TRANSFORM]);
            } else {
                $type->setTransform((string)$attributes[self::FIELD_TRANSFORM]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TRANSFORM, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('ActivityDefinition', $this->_getSourceXMLNS());
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
        if (isset($this->subtitle) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBTITLE]) {
            $xw->writeAttribute(self::FIELD_SUBTITLE, $this->subtitle->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->experimental) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXPERIMENTAL]) {
            $xw->writeAttribute(self::FIELD_EXPERIMENTAL, $this->experimental->_getValueAsString());
        }
        if (isset($this->subjectCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBJECT_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_SUBJECT_CANONICAL, $this->subjectCanonical->_getValueAsString());
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
        if (isset($this->usage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USAGE]) {
            $xw->writeAttribute(self::FIELD_USAGE, $this->usage->_getValueAsString());
        }
        if (isset($this->copyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->_getValueAsString());
        }
        if (isset($this->copyrightLabel) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT_LABEL]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT_LABEL, $this->copyrightLabel->_getValueAsString());
        }
        if (isset($this->approvalDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]) {
            $xw->writeAttribute(self::FIELD_APPROVAL_DATE, $this->approvalDate->_getValueAsString());
        }
        if (isset($this->lastReviewDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_REVIEW_DATE, $this->lastReviewDate->_getValueAsString());
        }
        if (isset($this->kind) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KIND]) {
            $xw->writeAttribute(self::FIELD_KIND, $this->kind->_getValueAsString());
        }
        if (isset($this->profile) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROFILE]) {
            $xw->writeAttribute(self::FIELD_PROFILE, $this->profile->_getValueAsString());
        }
        if (isset($this->intent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INTENT]) {
            $xw->writeAttribute(self::FIELD_INTENT, $this->intent->_getValueAsString());
        }
        if (isset($this->priority) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRIORITY]) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $this->priority->_getValueAsString());
        }
        if (isset($this->doNotPerform) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DO_NOT_PERFORM]) {
            $xw->writeAttribute(self::FIELD_DO_NOT_PERFORM, $this->doNotPerform->_getValueAsString());
        }
        if (isset($this->asNeededBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED_BOOLEAN, $this->asNeededBoolean->_getValueAsString());
        }
        if (isset($this->transform) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TRANSFORM]) {
            $xw->writeAttribute(self::FIELD_TRANSFORM, $this->transform->_getValueAsString());
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
        if (isset($this->subtitle)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUBTITLE]
                || $this->subtitle->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUBTITLE);
            $this->subtitle->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUBTITLE]);
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
        if (isset($this->subjectCodeableConcept)) {
            $xw->startElement(self::FIELD_SUBJECT_CODEABLE_CONCEPT);
            $this->subjectCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectReference)) {
            $xw->startElement(self::FIELD_SUBJECT_REFERENCE);
            $this->subjectReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUBJECT_CANONICAL]
                || $this->subjectCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUBJECT_CANONICAL);
            $this->subjectCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUBJECT_CANONICAL]);
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
        if (isset($this->usage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USAGE]
                || $this->usage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USAGE);
            $this->usage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USAGE]);
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
        if (isset($this->approvalDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]
                || $this->approvalDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_APPROVAL_DATE);
            $this->approvalDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_APPROVAL_DATE]);
            $xw->endElement();
        }
        if (isset($this->lastReviewDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]
                || $this->lastReviewDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_REVIEW_DATE);
            $this->lastReviewDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_REVIEW_DATE]);
            $xw->endElement();
        }
        if (isset($this->effectivePeriod)) {
            $xw->startElement(self::FIELD_EFFECTIVE_PERIOD);
            $this->effectivePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->topic)) {
            foreach ($this->topic as $v) {
                $xw->startElement(self::FIELD_TOPIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->author)) {
            foreach ($this->author as $v) {
                $xw->startElement(self::FIELD_AUTHOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->editor)) {
            foreach ($this->editor as $v) {
                $xw->startElement(self::FIELD_EDITOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reviewer)) {
            foreach ($this->reviewer as $v) {
                $xw->startElement(self::FIELD_REVIEWER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->endorser)) {
            foreach ($this->endorser as $v) {
                $xw->startElement(self::FIELD_ENDORSER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedArtifact)) {
            foreach ($this->relatedArtifact as $v) {
                $xw->startElement(self::FIELD_RELATED_ARTIFACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->library) && [] !== $this->library) {
            foreach($this->library as $v) {
                $xw->startElement(self::FIELD_LIBRARY);
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
        if (isset($this->profile)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROFILE]
                || $this->profile->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROFILE]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->intent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INTENT]
                || $this->intent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INTENT);
            $this->intent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INTENT]);
            $xw->endElement();
        }
        if (isset($this->priority)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRIORITY]
                || $this->priority->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRIORITY]);
            $xw->endElement();
        }
        if (isset($this->doNotPerform)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DO_NOT_PERFORM]
                || $this->doNotPerform->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DO_NOT_PERFORM);
            $this->doNotPerform->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DO_NOT_PERFORM]);
            $xw->endElement();
        }
        if (isset($this->timingTiming)) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $this->timingTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingAge)) {
            $xw->startElement(self::FIELD_TIMING_AGE);
            $this->timingAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingRange)) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $this->timingRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingDuration)) {
            $xw->startElement(self::FIELD_TIMING_DURATION);
            $this->timingDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asNeededBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]
                || $this->asNeededBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AS_NEEDED_BOOLEAN);
            $this->asNeededBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->asNeededCodeableConcept)) {
            $xw->startElement(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT);
            $this->asNeededCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participant)) {
            foreach ($this->participant as $v) {
                $xw->startElement(self::FIELD_PARTICIPANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->productReference)) {
            $xw->startElement(self::FIELD_PRODUCT_REFERENCE);
            $this->productReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->productCodeableConcept)) {
            $xw->startElement(self::FIELD_PRODUCT_CODEABLE_CONCEPT);
            $this->productCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dosage)) {
            foreach ($this->dosage as $v) {
                $xw->startElement(self::FIELD_DOSAGE);
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
        if (isset($this->specimenRequirement) && [] !== $this->specimenRequirement) {
            foreach($this->specimenRequirement as $v) {
                $xw->startElement(self::FIELD_SPECIMEN_REQUIREMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->observationRequirement) && [] !== $this->observationRequirement) {
            foreach($this->observationRequirement as $v) {
                $xw->startElement(self::FIELD_OBSERVATION_REQUIREMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->observationResultRequirement) && [] !== $this->observationResultRequirement) {
            foreach($this->observationResultRequirement as $v) {
                $xw->startElement(self::FIELD_OBSERVATION_RESULT_REQUIREMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->transform)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TRANSFORM]
                || $this->transform->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $this->transform->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TRANSFORM]);
            $xw->endElement();
        }
        if (isset($this->dynamicValue)) {
            foreach ($this->dynamicValue as $v) {
                $xw->startElement(self::FIELD_DYNAMIC_VALUE);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCanonicalResource\FHIRMetadataResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRActivityDefinition)) {
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->url)
            || isset($json->_url)
            || property_exists($json, self::FIELD_URL)
            || property_exists($json, self::FIELD_URL_EXT)) {
            $v = $json->_url ?? new \stdClass();
            $v->value = $json->url ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->version)
            || isset($json->_version)
            || property_exists($json, self::FIELD_VERSION)
            || property_exists($json, self::FIELD_VERSION_EXT)) {
            $v = $json->_version ?? new \stdClass();
            $v->value = $json->version ?? null;
            $type->setVersion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->versionAlgorithmString)
            || isset($json->_versionAlgorithmString)
            || property_exists($json, self::FIELD_VERSION_ALGORITHM_STRING)
            || property_exists($json, self::FIELD_VERSION_ALGORITHM_STRING_EXT)) {
            $v = $json->_versionAlgorithmString ?? new \stdClass();
            $v->value = $json->versionAlgorithmString ?? null;
            $type->setVersionAlgorithmString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->versionAlgorithmCoding) || property_exists($json, self::FIELD_VERSION_ALGORITHM_CODING)) {
            if (is_array($json->versionAlgorithmCoding)) {
                $type->setVersionAlgorithmCoding(FHIRCoding::jsonUnserialize(reset($json->versionAlgorithmCoding), $config));
            } else {
                $type->setVersionAlgorithmCoding(FHIRCoding::jsonUnserialize($json->versionAlgorithmCoding, $config));
            }
        }
        if (isset($json->name)
            || isset($json->_name)
            || property_exists($json, self::FIELD_NAME)
            || property_exists($json, self::FIELD_NAME_EXT)) {
            $v = $json->_name ?? new \stdClass();
            $v->value = $json->name ?? null;
            $type->setName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->title)
            || isset($json->_title)
            || property_exists($json, self::FIELD_TITLE)
            || property_exists($json, self::FIELD_TITLE_EXT)) {
            $v = $json->_title ?? new \stdClass();
            $v->value = $json->title ?? null;
            $type->setTitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subtitle)
            || isset($json->_subtitle)
            || property_exists($json, self::FIELD_SUBTITLE)
            || property_exists($json, self::FIELD_SUBTITLE_EXT)) {
            $v = $json->_subtitle ?? new \stdClass();
            $v->value = $json->subtitle ?? null;
            $type->setSubtitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRPublicationStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->experimental)
            || isset($json->_experimental)
            || property_exists($json, self::FIELD_EXPERIMENTAL)
            || property_exists($json, self::FIELD_EXPERIMENTAL_EXT)) {
            $v = $json->_experimental ?? new \stdClass();
            $v->value = $json->experimental ?? null;
            $type->setExperimental(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->subjectCodeableConcept) || property_exists($json, self::FIELD_SUBJECT_CODEABLE_CONCEPT)) {
            if (is_array($json->subjectCodeableConcept)) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->subjectCodeableConcept), $config));
            } else {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->subjectCodeableConcept, $config));
            }
        }
        if (isset($json->subjectReference) || property_exists($json, self::FIELD_SUBJECT_REFERENCE)) {
            if (is_array($json->subjectReference)) {
                $type->setSubjectReference(FHIRReference::jsonUnserialize(reset($json->subjectReference), $config));
            } else {
                $type->setSubjectReference(FHIRReference::jsonUnserialize($json->subjectReference, $config));
            }
        }
        if (isset($json->subjectCanonical)
            || isset($json->_subjectCanonical)
            || property_exists($json, self::FIELD_SUBJECT_CANONICAL)
            || property_exists($json, self::FIELD_SUBJECT_CANONICAL_EXT)) {
            $v = $json->_subjectCanonical ?? new \stdClass();
            $v->value = $json->subjectCanonical ?? null;
            $type->setSubjectCanonical(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($json->date)
            || isset($json->_date)
            || property_exists($json, self::FIELD_DATE)
            || property_exists($json, self::FIELD_DATE_EXT)) {
            $v = $json->_date ?? new \stdClass();
            $v->value = $json->date ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->publisher)
            || isset($json->_publisher)
            || property_exists($json, self::FIELD_PUBLISHER)
            || property_exists($json, self::FIELD_PUBLISHER_EXT)) {
            $v = $json->_publisher ?? new \stdClass();
            $v->value = $json->publisher ?? null;
            $type->setPublisher(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->contact) || property_exists($json, self::FIELD_CONTACT)) {
            if (is_object($json->contact)) {
                $vals = [$json->contact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTACT, true);
            } else {
                $vals = $json->contact;
            }
            foreach($vals as $v) {
                $type->addContact(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->description)
            || isset($json->_description)
            || property_exists($json, self::FIELD_DESCRIPTION)
            || property_exists($json, self::FIELD_DESCRIPTION_EXT)) {
            $v = $json->_description ?? new \stdClass();
            $v->value = $json->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->useContext) || property_exists($json, self::FIELD_USE_CONTEXT)) {
            if (is_object($json->useContext)) {
                $vals = [$json->useContext];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_USE_CONTEXT, true);
            } else {
                $vals = $json->useContext;
            }
            foreach($vals as $v) {
                $type->addUseContext(FHIRUsageContext::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->jurisdiction) || property_exists($json, self::FIELD_JURISDICTION)) {
            if (is_object($json->jurisdiction)) {
                $vals = [$json->jurisdiction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_JURISDICTION, true);
            } else {
                $vals = $json->jurisdiction;
            }
            foreach($vals as $v) {
                $type->addJurisdiction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->purpose)
            || isset($json->_purpose)
            || property_exists($json, self::FIELD_PURPOSE)
            || property_exists($json, self::FIELD_PURPOSE_EXT)) {
            $v = $json->_purpose ?? new \stdClass();
            $v->value = $json->purpose ?? null;
            $type->setPurpose(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->usage)
            || isset($json->_usage)
            || property_exists($json, self::FIELD_USAGE)
            || property_exists($json, self::FIELD_USAGE_EXT)) {
            $v = $json->_usage ?? new \stdClass();
            $v->value = $json->usage ?? null;
            $type->setUsage(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->copyright)
            || isset($json->_copyright)
            || property_exists($json, self::FIELD_COPYRIGHT)
            || property_exists($json, self::FIELD_COPYRIGHT_EXT)) {
            $v = $json->_copyright ?? new \stdClass();
            $v->value = $json->copyright ?? null;
            $type->setCopyright(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($json->copyrightLabel)
            || isset($json->_copyrightLabel)
            || property_exists($json, self::FIELD_COPYRIGHT_LABEL)
            || property_exists($json, self::FIELD_COPYRIGHT_LABEL_EXT)) {
            $v = $json->_copyrightLabel ?? new \stdClass();
            $v->value = $json->copyrightLabel ?? null;
            $type->setCopyrightLabel(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->approvalDate)
            || isset($json->_approvalDate)
            || property_exists($json, self::FIELD_APPROVAL_DATE)
            || property_exists($json, self::FIELD_APPROVAL_DATE_EXT)) {
            $v = $json->_approvalDate ?? new \stdClass();
            $v->value = $json->approvalDate ?? null;
            $type->setApprovalDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->lastReviewDate)
            || isset($json->_lastReviewDate)
            || property_exists($json, self::FIELD_LAST_REVIEW_DATE)
            || property_exists($json, self::FIELD_LAST_REVIEW_DATE_EXT)) {
            $v = $json->_lastReviewDate ?? new \stdClass();
            $v->value = $json->lastReviewDate ?? null;
            $type->setLastReviewDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->effectivePeriod) || property_exists($json, self::FIELD_EFFECTIVE_PERIOD)) {
            if (is_array($json->effectivePeriod)) {
                $type->setEffectivePeriod(FHIRPeriod::jsonUnserialize(reset($json->effectivePeriod), $config));
            } else {
                $type->setEffectivePeriod(FHIRPeriod::jsonUnserialize($json->effectivePeriod, $config));
            }
        }
        if (isset($json->topic) || property_exists($json, self::FIELD_TOPIC)) {
            if (is_object($json->topic)) {
                $vals = [$json->topic];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TOPIC, true);
            } else {
                $vals = $json->topic;
            }
            foreach($vals as $v) {
                $type->addTopic(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->author) || property_exists($json, self::FIELD_AUTHOR)) {
            if (is_object($json->author)) {
                $vals = [$json->author];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AUTHOR, true);
            } else {
                $vals = $json->author;
            }
            foreach($vals as $v) {
                $type->addAuthor(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->editor) || property_exists($json, self::FIELD_EDITOR)) {
            if (is_object($json->editor)) {
                $vals = [$json->editor];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EDITOR, true);
            } else {
                $vals = $json->editor;
            }
            foreach($vals as $v) {
                $type->addEditor(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->reviewer) || property_exists($json, self::FIELD_REVIEWER)) {
            if (is_object($json->reviewer)) {
                $vals = [$json->reviewer];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REVIEWER, true);
            } else {
                $vals = $json->reviewer;
            }
            foreach($vals as $v) {
                $type->addReviewer(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->endorser) || property_exists($json, self::FIELD_ENDORSER)) {
            if (is_object($json->endorser)) {
                $vals = [$json->endorser];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ENDORSER, true);
            } else {
                $vals = $json->endorser;
            }
            foreach($vals as $v) {
                $type->addEndorser(FHIRContactDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->relatedArtifact) || property_exists($json, self::FIELD_RELATED_ARTIFACT)) {
            if (is_object($json->relatedArtifact)) {
                $vals = [$json->relatedArtifact];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED_ARTIFACT, true);
            } else {
                $vals = $json->relatedArtifact;
            }
            foreach($vals as $v) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->library)
            || isset($json->_library)
            || property_exists($json, self::FIELD_LIBRARY)
            || property_exists($json, self::FIELD_LIBRARY_EXT)) {
            $vals = (array)($json->library ?? []);
            $exts = (array)($json->FIELD_LIBRARY_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addLibrary(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->kind)
            || isset($json->_kind)
            || property_exists($json, self::FIELD_KIND)
            || property_exists($json, self::FIELD_KIND_EXT)) {
            $v = $json->_kind ?? new \stdClass();
            $v->value = $json->kind ?? null;
            $type->setKind(FHIRRequestResourceTypes::jsonUnserialize($v, $config));
        }
        if (isset($json->profile)
            || isset($json->_profile)
            || property_exists($json, self::FIELD_PROFILE)
            || property_exists($json, self::FIELD_PROFILE_EXT)) {
            $v = $json->_profile ?? new \stdClass();
            $v->value = $json->profile ?? null;
            $type->setProfile(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
            }
        }
        if (isset($json->intent)
            || isset($json->_intent)
            || property_exists($json, self::FIELD_INTENT)
            || property_exists($json, self::FIELD_INTENT_EXT)) {
            $v = $json->_intent ?? new \stdClass();
            $v->value = $json->intent ?? null;
            $type->setIntent(FHIRRequestIntent::jsonUnserialize($v, $config));
        }
        if (isset($json->priority)
            || isset($json->_priority)
            || property_exists($json, self::FIELD_PRIORITY)
            || property_exists($json, self::FIELD_PRIORITY_EXT)) {
            $v = $json->_priority ?? new \stdClass();
            $v->value = $json->priority ?? null;
            $type->setPriority(FHIRRequestPriority::jsonUnserialize($v, $config));
        }
        if (isset($json->doNotPerform)
            || isset($json->_doNotPerform)
            || property_exists($json, self::FIELD_DO_NOT_PERFORM)
            || property_exists($json, self::FIELD_DO_NOT_PERFORM_EXT)) {
            $v = $json->_doNotPerform ?? new \stdClass();
            $v->value = $json->doNotPerform ?? null;
            $type->setDoNotPerform(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->timingTiming) || property_exists($json, self::FIELD_TIMING_TIMING)) {
            if (is_array($json->timingTiming)) {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize(reset($json->timingTiming), $config));
            } else {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize($json->timingTiming, $config));
            }
        }
        if (isset($json->timingAge) || property_exists($json, self::FIELD_TIMING_AGE)) {
            if (is_array($json->timingAge)) {
                $type->setTimingAge(FHIRAge::jsonUnserialize(reset($json->timingAge), $config));
            } else {
                $type->setTimingAge(FHIRAge::jsonUnserialize($json->timingAge, $config));
            }
        }
        if (isset($json->timingRange) || property_exists($json, self::FIELD_TIMING_RANGE)) {
            if (is_array($json->timingRange)) {
                $type->setTimingRange(FHIRRange::jsonUnserialize(reset($json->timingRange), $config));
            } else {
                $type->setTimingRange(FHIRRange::jsonUnserialize($json->timingRange, $config));
            }
        }
        if (isset($json->timingDuration) || property_exists($json, self::FIELD_TIMING_DURATION)) {
            if (is_array($json->timingDuration)) {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize(reset($json->timingDuration), $config));
            } else {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize($json->timingDuration, $config));
            }
        }
        if (isset($json->asNeededBoolean)
            || isset($json->_asNeededBoolean)
            || property_exists($json, self::FIELD_AS_NEEDED_BOOLEAN)
            || property_exists($json, self::FIELD_AS_NEEDED_BOOLEAN_EXT)) {
            $v = $json->_asNeededBoolean ?? new \stdClass();
            $v->value = $json->asNeededBoolean ?? null;
            $type->setAsNeededBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->asNeededCodeableConcept) || property_exists($json, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT)) {
            if (is_array($json->asNeededCodeableConcept)) {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->asNeededCodeableConcept), $config));
            } else {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->asNeededCodeableConcept, $config));
            }
        }
        if (isset($json->location) || property_exists($json, self::FIELD_LOCATION)) {
            if (is_array($json->location)) {
                $type->setLocation(FHIRCodeableReference::jsonUnserialize(reset($json->location), $config));
            } else {
                $type->setLocation(FHIRCodeableReference::jsonUnserialize($json->location, $config));
            }
        }
        if (isset($json->participant) || property_exists($json, self::FIELD_PARTICIPANT)) {
            if (is_object($json->participant)) {
                $vals = [$json->participant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PARTICIPANT, true);
            } else {
                $vals = $json->participant;
            }
            foreach($vals as $v) {
                $type->addParticipant(FHIRActivityDefinitionParticipant::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->productReference) || property_exists($json, self::FIELD_PRODUCT_REFERENCE)) {
            if (is_array($json->productReference)) {
                $type->setProductReference(FHIRReference::jsonUnserialize(reset($json->productReference), $config));
            } else {
                $type->setProductReference(FHIRReference::jsonUnserialize($json->productReference, $config));
            }
        }
        if (isset($json->productCodeableConcept) || property_exists($json, self::FIELD_PRODUCT_CODEABLE_CONCEPT)) {
            if (is_array($json->productCodeableConcept)) {
                $type->setProductCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->productCodeableConcept), $config));
            } else {
                $type->setProductCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->productCodeableConcept, $config));
            }
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->dosage) || property_exists($json, self::FIELD_DOSAGE)) {
            if (is_object($json->dosage)) {
                $vals = [$json->dosage];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DOSAGE, true);
            } else {
                $vals = $json->dosage;
            }
            foreach($vals as $v) {
                $type->addDosage(FHIRDosage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->bodySite) || property_exists($json, self::FIELD_BODY_SITE)) {
            if (is_object($json->bodySite)) {
                $vals = [$json->bodySite];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BODY_SITE, true);
            } else {
                $vals = $json->bodySite;
            }
            foreach($vals as $v) {
                $type->addBodySite(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->specimenRequirement)
            || isset($json->_specimenRequirement)
            || property_exists($json, self::FIELD_SPECIMEN_REQUIREMENT)
            || property_exists($json, self::FIELD_SPECIMEN_REQUIREMENT_EXT)) {
            $vals = (array)($json->specimenRequirement ?? []);
            $exts = (array)($json->FIELD_SPECIMEN_REQUIREMENT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addSpecimenRequirement(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->observationRequirement)
            || isset($json->_observationRequirement)
            || property_exists($json, self::FIELD_OBSERVATION_REQUIREMENT)
            || property_exists($json, self::FIELD_OBSERVATION_REQUIREMENT_EXT)) {
            $vals = (array)($json->observationRequirement ?? []);
            $exts = (array)($json->FIELD_OBSERVATION_REQUIREMENT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addObservationRequirement(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->observationResultRequirement)
            || isset($json->_observationResultRequirement)
            || property_exists($json, self::FIELD_OBSERVATION_RESULT_REQUIREMENT)
            || property_exists($json, self::FIELD_OBSERVATION_RESULT_REQUIREMENT_EXT)) {
            $vals = (array)($json->observationResultRequirement ?? []);
            $exts = (array)($json->FIELD_OBSERVATION_RESULT_REQUIREMENT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addObservationResultRequirement(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->transform)
            || isset($json->_transform)
            || property_exists($json, self::FIELD_TRANSFORM)
            || property_exists($json, self::FIELD_TRANSFORM_EXT)) {
            $v = $json->_transform ?? new \stdClass();
            $v->value = $json->transform ?? null;
            $type->setTransform(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($json->dynamicValue) || property_exists($json, self::FIELD_DYNAMIC_VALUE)) {
            if (is_object($json->dynamicValue)) {
                $vals = [$json->dynamicValue];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DYNAMIC_VALUE, true);
            } else {
                $vals = $json->dynamicValue;
            }
            foreach($vals as $v) {
                $type->addDynamicValue(FHIRActivityDefinitionDynamicValue::jsonUnserialize($v, $config));
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
        if (isset($this->subtitle)) {
            if (null !== ($val = $this->subtitle->getValue())) {
                $out->subtitle = $val;
            }
            if ($this->subtitle->_nonValueFieldDefined()) {
                $ext = $this->subtitle->jsonSerialize();
                unset($ext->value);
                $out->_subtitle = $ext;
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
        if (isset($this->subjectCodeableConcept)) {
            $out->subjectCodeableConcept = $this->subjectCodeableConcept;
        }
        if (isset($this->subjectReference)) {
            $out->subjectReference = $this->subjectReference;
        }
        if (isset($this->subjectCanonical)) {
            if (null !== ($val = $this->subjectCanonical->getValue())) {
                $out->subjectCanonical = $val;
            }
            if ($this->subjectCanonical->_nonValueFieldDefined()) {
                $ext = $this->subjectCanonical->jsonSerialize();
                unset($ext->value);
                $out->_subjectCanonical = $ext;
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
        if (isset($this->usage)) {
            if (null !== ($val = $this->usage->getValue())) {
                $out->usage = $val;
            }
            if ($this->usage->_nonValueFieldDefined()) {
                $ext = $this->usage->jsonSerialize();
                unset($ext->value);
                $out->_usage = $ext;
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
        if (isset($this->approvalDate)) {
            if (null !== ($val = $this->approvalDate->getValue())) {
                $out->approvalDate = $val;
            }
            if ($this->approvalDate->_nonValueFieldDefined()) {
                $ext = $this->approvalDate->jsonSerialize();
                unset($ext->value);
                $out->_approvalDate = $ext;
            }
        }
        if (isset($this->lastReviewDate)) {
            if (null !== ($val = $this->lastReviewDate->getValue())) {
                $out->lastReviewDate = $val;
            }
            if ($this->lastReviewDate->_nonValueFieldDefined()) {
                $ext = $this->lastReviewDate->jsonSerialize();
                unset($ext->value);
                $out->_lastReviewDate = $ext;
            }
        }
        if (isset($this->effectivePeriod)) {
            $out->effectivePeriod = $this->effectivePeriod;
        }
        if (isset($this->topic) && [] !== $this->topic) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TOPIC) && 1 === count($this->topic)) {
                $out->topic = $this->topic[0];
            } else {
                $out->topic = $this->topic;
            }
        }
        if (isset($this->author) && [] !== $this->author) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AUTHOR) && 1 === count($this->author)) {
                $out->author = $this->author[0];
            } else {
                $out->author = $this->author;
            }
        }
        if (isset($this->editor) && [] !== $this->editor) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EDITOR) && 1 === count($this->editor)) {
                $out->editor = $this->editor[0];
            } else {
                $out->editor = $this->editor;
            }
        }
        if (isset($this->reviewer) && [] !== $this->reviewer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REVIEWER) && 1 === count($this->reviewer)) {
                $out->reviewer = $this->reviewer[0];
            } else {
                $out->reviewer = $this->reviewer;
            }
        }
        if (isset($this->endorser) && [] !== $this->endorser) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ENDORSER) && 1 === count($this->endorser)) {
                $out->endorser = $this->endorser[0];
            } else {
                $out->endorser = $this->endorser;
            }
        }
        if (isset($this->relatedArtifact) && [] !== $this->relatedArtifact) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED_ARTIFACT) && 1 === count($this->relatedArtifact)) {
                $out->relatedArtifact = $this->relatedArtifact[0];
            } else {
                $out->relatedArtifact = $this->relatedArtifact;
            }
        }
        if (isset($this->library) && [] !== $this->library) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->library as $v) {
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
                $out->library = $vals;
            }
            if ($hasExts) {
                $out->_library = $exts;
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
        if (isset($this->profile)) {
            if (null !== ($val = $this->profile->getValue())) {
                $out->profile = $val;
            }
            if ($this->profile->_nonValueFieldDefined()) {
                $ext = $this->profile->jsonSerialize();
                unset($ext->value);
                $out->_profile = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->intent)) {
            if (null !== ($val = $this->intent->getValue())) {
                $out->intent = $val;
            }
            if ($this->intent->_nonValueFieldDefined()) {
                $ext = $this->intent->jsonSerialize();
                unset($ext->value);
                $out->_intent = $ext;
            }
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            if ($this->priority->_nonValueFieldDefined()) {
                $ext = $this->priority->jsonSerialize();
                unset($ext->value);
                $out->_priority = $ext;
            }
        }
        if (isset($this->doNotPerform)) {
            if (null !== ($val = $this->doNotPerform->getValue())) {
                $out->doNotPerform = $val;
            }
            if ($this->doNotPerform->_nonValueFieldDefined()) {
                $ext = $this->doNotPerform->jsonSerialize();
                unset($ext->value);
                $out->_doNotPerform = $ext;
            }
        }
        if (isset($this->timingTiming)) {
            $out->timingTiming = $this->timingTiming;
        }
        if (isset($this->timingAge)) {
            $out->timingAge = $this->timingAge;
        }
        if (isset($this->timingRange)) {
            $out->timingRange = $this->timingRange;
        }
        if (isset($this->timingDuration)) {
            $out->timingDuration = $this->timingDuration;
        }
        if (isset($this->asNeededBoolean)) {
            if (null !== ($val = $this->asNeededBoolean->getValue())) {
                $out->asNeededBoolean = $val;
            }
            if ($this->asNeededBoolean->_nonValueFieldDefined()) {
                $ext = $this->asNeededBoolean->jsonSerialize();
                unset($ext->value);
                $out->_asNeededBoolean = $ext;
            }
        }
        if (isset($this->asNeededCodeableConcept)) {
            $out->asNeededCodeableConcept = $this->asNeededCodeableConcept;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->participant) && [] !== $this->participant) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PARTICIPANT) && 1 === count($this->participant)) {
                $out->participant = $this->participant[0];
            } else {
                $out->participant = $this->participant;
            }
        }
        if (isset($this->productReference)) {
            $out->productReference = $this->productReference;
        }
        if (isset($this->productCodeableConcept)) {
            $out->productCodeableConcept = $this->productCodeableConcept;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->dosage) && [] !== $this->dosage) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DOSAGE) && 1 === count($this->dosage)) {
                $out->dosage = $this->dosage[0];
            } else {
                $out->dosage = $this->dosage;
            }
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BODY_SITE) && 1 === count($this->bodySite)) {
                $out->bodySite = $this->bodySite[0];
            } else {
                $out->bodySite = $this->bodySite;
            }
        }
        if (isset($this->specimenRequirement) && [] !== $this->specimenRequirement) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->specimenRequirement as $v) {
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
                $out->specimenRequirement = $vals;
            }
            if ($hasExts) {
                $out->_specimenRequirement = $exts;
            }
        }
        if (isset($this->observationRequirement) && [] !== $this->observationRequirement) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->observationRequirement as $v) {
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
                $out->observationRequirement = $vals;
            }
            if ($hasExts) {
                $out->_observationRequirement = $exts;
            }
        }
        if (isset($this->observationResultRequirement) && [] !== $this->observationResultRequirement) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->observationResultRequirement as $v) {
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
                $out->observationResultRequirement = $vals;
            }
            if ($hasExts) {
                $out->_observationResultRequirement = $exts;
            }
        }
        if (isset($this->transform)) {
            if (null !== ($val = $this->transform->getValue())) {
                $out->transform = $val;
            }
            if ($this->transform->_nonValueFieldDefined()) {
                $ext = $this->transform->jsonSerialize();
                unset($ext->value);
                $out->_transform = $ext;
            }
        }
        if (isset($this->dynamicValue) && [] !== $this->dynamicValue) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DYNAMIC_VALUE) && 1 === count($this->dynamicValue)) {
                $out->dynamicValue = $this->dynamicValue[0];
            } else {
                $out->dynamicValue = $this->dynamicValue;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}