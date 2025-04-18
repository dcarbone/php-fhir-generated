<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionCardinalityBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionGroupingBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionPrecheckBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionRequiredBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionSelectionBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical and non-clinical artifacts such as
 * clinical decision support rules, order sets, protocols, and drug quality
 * specifications.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRPlanDefinitionAction extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION;

    /* class_default.php:56 */
    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_PREFIX = 'prefix';
    public const FIELD_PREFIX_EXT = '_prefix';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_TEXT_EQUIVALENT = 'textEquivalent';
    public const FIELD_TEXT_EQUIVALENT_EXT = '_textEquivalent';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_CODE = 'code';
    public const FIELD_REASON = 'reason';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_GOAL_ID = 'goalId';
    public const FIELD_GOAL_ID_EXT = '_goalId';
    public const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    public const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    public const FIELD_SUBJECT_CANONICAL = 'subjectCanonical';
    public const FIELD_SUBJECT_CANONICAL_EXT = '_subjectCanonical';
    public const FIELD_TRIGGER = 'trigger';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_INPUT = 'input';
    public const FIELD_OUTPUT = 'output';
    public const FIELD_RELATED_ACTION = 'relatedAction';
    public const FIELD_TIMING_AGE = 'timingAge';
    public const FIELD_TIMING_DURATION = 'timingDuration';
    public const FIELD_TIMING_RANGE = 'timingRange';
    public const FIELD_TIMING_TIMING = 'timingTiming';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_TYPE = 'type';
    public const FIELD_GROUPING_BEHAVIOR = 'groupingBehavior';
    public const FIELD_GROUPING_BEHAVIOR_EXT = '_groupingBehavior';
    public const FIELD_SELECTION_BEHAVIOR = 'selectionBehavior';
    public const FIELD_SELECTION_BEHAVIOR_EXT = '_selectionBehavior';
    public const FIELD_REQUIRED_BEHAVIOR = 'requiredBehavior';
    public const FIELD_REQUIRED_BEHAVIOR_EXT = '_requiredBehavior';
    public const FIELD_PRECHECK_BEHAVIOR = 'precheckBehavior';
    public const FIELD_PRECHECK_BEHAVIOR_EXT = '_precheckBehavior';
    public const FIELD_CARDINALITY_BEHAVIOR = 'cardinalityBehavior';
    public const FIELD_CARDINALITY_BEHAVIOR_EXT = '_cardinalityBehavior';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_URI = 'definitionUri';
    public const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_TRANSFORM_EXT = '_transform';
    public const FIELD_DYNAMIC_VALUE = 'dynamicValue';
    public const FIELD_ACTION = 'action';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PREFIX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT_EQUIVALENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRIORITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUBJECT_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GROUPING_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SELECTION_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIRED_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRECHECK_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CARDINALITY_BEHAVIOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TRANSFORM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the PlanDefinition to allow linkage within
     * the realized CarePlan and/or RequestOrchestration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $linkId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action. For example a section or item numbering
     * such as 1. or A.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $prefix;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $title;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $textEquivalent;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority 
     */
    #[FHIRRequestPriority]
    protected FHIRRequestPriority $priority;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $reason;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact> 
     */
    #[FHIRRelatedArtifact]
    protected array $documentation;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId> 
     */
    #[FHIRId]
    protected array $goalId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $subjectCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $subjectReference;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
     * specifications, and is allowed to reference a MedicinalProductDefinition,
     * SubstanceDefinition, AdministrableProductDefinition, ManufacturedItemDefinition,
     * or PackagedProductDefinition resource. (choose any one of subject*, but only
     * one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $subjectCanonical;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered. When multiple triggers are
     * specified on an action, any triggering event invokes the action.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition> 
     */
    #[FHIRTriggerDefinition]
    protected array $trigger;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition> 
     */
    #[FHIRPlanDefinitionCondition]
    protected array $condition;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines input data requirements for the action.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput> 
     */
    #[FHIRPlanDefinitionInput]
    protected array $input;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines the outputs of the action, if any.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput> 
     */
    #[FHIRPlanDefinitionOutput]
    protected array $output;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction> 
     */
    #[FHIRPlanDefinitionRelatedAction]
    protected array $relatedAction;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge 
     */
    #[FHIRAge]
    protected FHIRAge $timingAge;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    #[FHIRDuration]
    protected FHIRDuration $timingDuration;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $timingRange;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming 
     */
    #[FHIRTiming]
    protected FHIRTiming $timingTiming;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the action will occur; e.g. home, hospital,
     * specific clinic, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    #[FHIRCodeableReference]
    protected FHIRCodeableReference $location;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant> 
     */
    #[FHIRPlanDefinitionParticipant]
    protected array $participant;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionGroupingBehavior 
     */
    #[FHIRActionGroupingBehavior]
    protected FHIRActionGroupingBehavior $groupingBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionSelectionBehavior 
     */
    #[FHIRActionSelectionBehavior]
    protected FHIRActionSelectionBehavior $selectionBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionRequiredBehavior 
     */
    #[FHIRActionRequiredBehavior]
    protected FHIRActionRequiredBehavior $requiredBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionPrecheckBehavior 
     */
    #[FHIRActionPrecheckBehavior]
    protected FHIRActionPrecheckBehavior $precheckBehavior;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionCardinalityBehavior 
     */
    #[FHIRActionCardinalityBehavior]
    protected FHIRActionCardinalityBehavior $cardinalityBehavior;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $definitionCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    #[FHIRUri]
    protected FHIRUri $definitionUri;
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
    #[FHIRCanonical]
    protected FHIRCanonical $transform;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue> 
     */
    #[FHIRPlanDefinitionDynamicValue]
    protected array $dynamicValue;
    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction> 
     */
    #[FHIRPlanDefinitionAction]
    protected array $action;

    /* constructor.php:61 */
    /**
     * FHIRPlanDefinitionAction Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $prefix
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $textEquivalent
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRRequestPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $reason
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact> $documentation
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId> $goalId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subjectCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $subjectCanonical
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition> $trigger
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition> $condition
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput> $input
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput> $output
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction> $relatedAction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $timingAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $timingDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $timingRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $location
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant> $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $definitionUri
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $transform
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue> $dynamicValue
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction> $action
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $linkId = null,
                                null|string|FHIRStringPrimitive|FHIRString $prefix = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $textEquivalent = null,
                                null|string|FHIRRequestPriorityEnum|FHIRRequestPriority $priority = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $reason = null,
                                null|iterable $documentation = null,
                                null|iterable $goalId = null,
                                null|FHIRCodeableConcept $subjectCodeableConcept = null,
                                null|FHIRReference $subjectReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $subjectCanonical = null,
                                null|iterable $trigger = null,
                                null|iterable $condition = null,
                                null|iterable $input = null,
                                null|iterable $output = null,
                                null|iterable $relatedAction = null,
                                null|FHIRAge $timingAge = null,
                                null|FHIRDuration $timingDuration = null,
                                null|FHIRRange $timingRange = null,
                                null|FHIRTiming $timingTiming = null,
                                null|FHIRCodeableReference $location = null,
                                null|iterable $participant = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRActionGroupingBehaviorEnum|FHIRActionGroupingBehavior $groupingBehavior = null,
                                null|string|FHIRActionSelectionBehaviorEnum|FHIRActionSelectionBehavior $selectionBehavior = null,
                                null|string|FHIRActionRequiredBehaviorEnum|FHIRActionRequiredBehavior $requiredBehavior = null,
                                null|string|FHIRActionPrecheckBehaviorEnum|FHIRActionPrecheckBehavior $precheckBehavior = null,
                                null|string|FHIRActionCardinalityBehaviorEnum|FHIRActionCardinalityBehavior $cardinalityBehavior = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|string|FHIRUriPrimitive|FHIRUri $definitionUri = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $transform = null,
                                null|iterable $dynamicValue = null,
                                null|iterable $action = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $linkId) {
            $this->setLinkId($linkId);
        }
        if (null !== $prefix) {
            $this->setPrefix($prefix);
        }
        if (null !== $title) {
            $this->setTitle($title);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $textEquivalent) {
            $this->setTextEquivalent($textEquivalent);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $reason) {
            $this->setReason(...$reason);
        }
        if (null !== $documentation) {
            $this->setDocumentation(...$documentation);
        }
        if (null !== $goalId) {
            $this->setGoalId(...$goalId);
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
        if (null !== $trigger) {
            $this->setTrigger(...$trigger);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $input) {
            $this->setInput(...$input);
        }
        if (null !== $output) {
            $this->setOutput(...$output);
        }
        if (null !== $relatedAction) {
            $this->setRelatedAction(...$relatedAction);
        }
        if (null !== $timingAge) {
            $this->setTimingAge($timingAge);
        }
        if (null !== $timingDuration) {
            $this->setTimingDuration($timingDuration);
        }
        if (null !== $timingRange) {
            $this->setTimingRange($timingRange);
        }
        if (null !== $timingTiming) {
            $this->setTimingTiming($timingTiming);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $groupingBehavior) {
            $this->setGroupingBehavior($groupingBehavior);
        }
        if (null !== $selectionBehavior) {
            $this->setSelectionBehavior($selectionBehavior);
        }
        if (null !== $requiredBehavior) {
            $this->setRequiredBehavior($requiredBehavior);
        }
        if (null !== $precheckBehavior) {
            $this->setPrecheckBehavior($precheckBehavior);
        }
        if (null !== $cardinalityBehavior) {
            $this->setCardinalityBehavior($cardinalityBehavior);
        }
        if (null !== $definitionCanonical) {
            $this->setDefinitionCanonical($definitionCanonical);
        }
        if (null !== $definitionUri) {
            $this->setDefinitionUri($definitionUri);
        }
        if (null !== $transform) {
            $this->setTransform($transform);
        }
        if (null !== $dynamicValue) {
            $this->setDynamicValue(...$dynamicValue);
        }
        if (null !== $action) {
            $this->setAction(...$action);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the PlanDefinition to allow linkage within
     * the realized CarePlan and/or RequestOrchestration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the PlanDefinition to allow linkage within
     * the realized CarePlan and/or RequestOrchestration.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId): self
    {
        if (null === $linkId) {
            unset($this->linkId);
            return $this;
        }
        if (!($linkId instanceof FHIRString)) {
            $linkId = new FHIRString(value: $linkId);
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action. For example a section or item numbering
     * such as 1. or A.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A user-visible prefix for the action. For example a section or item numbering
     * such as 1. or A.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix): self
    {
        if (null === $prefix) {
            unset($this->prefix);
            return $this;
        }
        if (!($prefix instanceof FHIRString)) {
            $prefix = new FHIRString(value: $prefix);
        }
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
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
     * The textual description of the action displayed to a user. For example, when the
     * action is a test to be performed, the title would be the title of the test such
     * as Assay by HPLC.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A brief description of the action used to provide a summary to display to the
     * user.
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
     * A brief description of the action used to provide a summary to display to the
     * user.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getTextEquivalent(): null|FHIRMarkdown
    {
        return $this->textEquivalent ?? null;
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
     * A text equivalent of the action to be performed. This provides a
     * human-interpretable description of the action when the definition is consumed by
     * a system that might not be capable of interpreting it dynamically.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $textEquivalent
     * @return static
     */
    public function setTextEquivalent(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $textEquivalent): self
    {
        if (null === $textEquivalent) {
            unset($this->textEquivalent);
            return $this;
        }
        if (!($textEquivalent instanceof FHIRMarkdown)) {
            $textEquivalent = new FHIRMarkdown(value: $textEquivalent);
        }
        $this->textEquivalent = $textEquivalent;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
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
     * Indicates how quickly the action should be addressed with respect to other
     * actions.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
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
     * A code that provides a meaning, grouping, or classification for the action or
     * action group. For example, a section may have a LOINC code for the section of a
     * documentation template. In pharmaceutical quality, an action (Test) such as pH
     * could be classified as a physical property.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getReason(): array
    {
        return $this->reason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getReasonIterator(): iterable
    {
        if (!isset($this->reason)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reason);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $reason
     * @return static
     */
    public function addReason(FHIRCodeableConcept $reason): self
    {
        if (!isset($this->reason)) {
            $this->reason = [];
        }
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of why this action is necessary or appropriate.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$reason
     * @return static
     */
    public function setReason(FHIRCodeableConcept ...$reason): self
    {
        if ([] === $reason) {
            unset($this->reason);
            return $this;
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
     */
    public function getDocumentation(): array
    {
        return $this->documentation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact>
     */
    public function getDocumentationIterator(): iterable
    {
        if (!isset($this->documentation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->documentation);
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact $documentation
     * @return static
     */
    public function addDocumentation(FHIRRelatedArtifact $documentation): self
    {
        if (!isset($this->documentation)) {
            $this->documentation = [];
        }
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Didactic or other informational resources associated with the action that can be
     * provided to the CDS recipient. Information resources can include inline text
     * commentary and links to web resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRelatedArtifact ...$documentation
     * @return static
     */
    public function setDocumentation(FHIRRelatedArtifact ...$documentation): self
    {
        if ([] === $documentation) {
            unset($this->documentation);
            return $this;
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId>
     */
    public function getGoalId(): array
    {
        return $this->goalId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId>
     */
    public function getGoalIdIterator(): iterable
    {
        if (!isset($this->goalId)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->goalId);
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $goalId
     * @return static
     */
    public function addGoalId(string|FHIRIdPrimitive|FHIRId $goalId): self
    {
        if (!($goalId instanceof FHIRId)) {
            $goalId = new FHIRId(value: $goalId);
        }
        if (!isset($this->goalId)) {
            $this->goalId = [];
        }
        $this->goalId[] = $goalId;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies goals that this action supports. The reference must be to a goal
     * element defined within this plan definition. In pharmaceutical quality, a goal
     * represents acceptance criteria (Goal) for a given action (Test), so the goalId
     * would be the unique id of a defined goal element establishing the acceptance
     * criteria for the action.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId ...$goalId
     * @return static
     */
    public function setGoalId(string|FHIRIdPrimitive|FHIRId ...$goalId): self
    {
        if ([] === $goalId) {
            unset($this->goalId);
            return $this;
        }
        $this->goalId = [];
        foreach($goalId as $v) {
            if ($v instanceof FHIRId) {
                $this->goalId[] = $v;
            } else {
                $this->goalId[] = new FHIRId(value: $v);
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A code, group definition, or canonical reference that describes the intended
     * subject of the action and its children, if any. Canonical references are allowed
     * to support the definition of protocols for drug and substance quality
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
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered. When multiple triggers are
     * specified on an action, any triggering event invokes the action.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition>
     */
    public function getTrigger(): array
    {
        return $this->trigger ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition>
     */
    public function getTriggerIterator(): iterable
    {
        if (!isset($this->trigger)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->trigger);
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered. When multiple triggers are
     * specified on an action, any triggering event invokes the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition $trigger
     * @return static
     */
    public function addTrigger(FHIRTriggerDefinition $trigger): self
    {
        if (!isset($this->trigger)) {
            $this->trigger = [];
        }
        $this->trigger[] = $trigger;
        return $this;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description of when the action should be triggered. When multiple triggers are
     * specified on an action, any triggering event invokes the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRTriggerDefinition ...$trigger
     * @return static
     */
    public function setTrigger(FHIRTriggerDefinition ...$trigger): self
    {
        if ([] === $trigger) {
            unset($this->trigger);
            return $this;
        }
        $this->trigger = $trigger;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition>
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition $condition
     * @return static
     */
    public function addCondition(FHIRPlanDefinitionCondition $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * An expression that describes applicability criteria or start/stop conditions for
     * the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRPlanDefinitionCondition ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines input data requirements for the action.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput>
     */
    public function getInput(): array
    {
        return $this->input ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput>
     */
    public function getInputIterator(): iterable
    {
        if (!isset($this->input)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->input);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines input data requirements for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput $input
     * @return static
     */
    public function addInput(FHIRPlanDefinitionInput $input): self
    {
        if (!isset($this->input)) {
            $this->input = [];
        }
        $this->input[] = $input;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines input data requirements for the action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionInput ...$input
     * @return static
     */
    public function setInput(FHIRPlanDefinitionInput ...$input): self
    {
        if ([] === $input) {
            unset($this->input);
            return $this;
        }
        $this->input = $input;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines the outputs of the action, if any.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput>
     */
    public function getOutput(): array
    {
        return $this->output ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput>
     */
    public function getOutputIterator(): iterable
    {
        if (!isset($this->output)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->output);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines the outputs of the action, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput $output
     * @return static
     */
    public function addOutput(FHIRPlanDefinitionOutput $output): self
    {
        if (!isset($this->output)) {
            $this->output = [];
        }
        $this->output[] = $output;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Defines the outputs of the action, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionOutput ...$output
     * @return static
     */
    public function setOutput(FHIRPlanDefinitionOutput ...$output): self
    {
        if ([] === $output) {
            unset($this->output);
            return $this;
        }
        $this->output = $output;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction>
     */
    public function getRelatedAction(): array
    {
        return $this->relatedAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction>
     */
    public function getRelatedActionIterator(): iterable
    {
        if (!isset($this->relatedAction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedAction);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction $relatedAction
     * @return static
     */
    public function addRelatedAction(FHIRPlanDefinitionRelatedAction $relatedAction): self
    {
        if (!isset($this->relatedAction)) {
            $this->relatedAction = [];
        }
        $this->relatedAction[] = $relatedAction;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * A relationship to another action such as "before" or "30-60 minutes after start
     * of".
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction ...$relatedAction
     * @return static
     */
    public function setRelatedAction(FHIRPlanDefinitionRelatedAction ...$relatedAction): self
    {
        if ([] === $relatedAction) {
            unset($this->relatedAction);
            return $this;
        }
        $this->relatedAction = $relatedAction;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * An optional value describing when the action should be performed. (choose any
     * one of timing*, but only one)
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the action will occur; e.g. home, hospital,
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
     * Identifies the facility where the action will occur; e.g. home, hospital,
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant>
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRPlanDefinitionParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRPlanDefinitionParticipant ...$participant): self
    {
        if ([] === $participant) {
            unset($this->participant);
            return $this;
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of action to perform (create, update, remove).
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
     * The type of action to perform (create, update, remove).
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionGroupingBehavior
     */
    public function getGroupingBehavior(): null|FHIRActionGroupingBehavior
    {
        return $this->groupingBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the grouping behavior for the action and its children.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionGroupingBehavior $groupingBehavior
     * @return static
     */
    public function setGroupingBehavior(null|string|FHIRActionGroupingBehaviorEnum|FHIRActionGroupingBehavior $groupingBehavior): self
    {
        if (null === $groupingBehavior) {
            unset($this->groupingBehavior);
            return $this;
        }
        if (!($groupingBehavior instanceof FHIRActionGroupingBehavior)) {
            $groupingBehavior = new FHIRActionGroupingBehavior(value: $groupingBehavior);
        }
        $this->groupingBehavior = $groupingBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionSelectionBehavior
     */
    public function getSelectionBehavior(): null|FHIRActionSelectionBehavior
    {
        return $this->selectionBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the selection behavior for the action and its children.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionSelectionBehavior $selectionBehavior
     * @return static
     */
    public function setSelectionBehavior(null|string|FHIRActionSelectionBehaviorEnum|FHIRActionSelectionBehavior $selectionBehavior): self
    {
        if (null === $selectionBehavior) {
            unset($this->selectionBehavior);
            return $this;
        }
        if (!($selectionBehavior instanceof FHIRActionSelectionBehavior)) {
            $selectionBehavior = new FHIRActionSelectionBehavior(value: $selectionBehavior);
        }
        $this->selectionBehavior = $selectionBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionRequiredBehavior
     */
    public function getRequiredBehavior(): null|FHIRActionRequiredBehavior
    {
        return $this->requiredBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines the required behavior for the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionRequiredBehavior $requiredBehavior
     * @return static
     */
    public function setRequiredBehavior(null|string|FHIRActionRequiredBehaviorEnum|FHIRActionRequiredBehavior $requiredBehavior): self
    {
        if (null === $requiredBehavior) {
            unset($this->requiredBehavior);
            return $this;
        }
        if (!($requiredBehavior instanceof FHIRActionRequiredBehavior)) {
            $requiredBehavior = new FHIRActionRequiredBehavior(value: $requiredBehavior);
        }
        $this->requiredBehavior = $requiredBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionPrecheckBehavior
     */
    public function getPrecheckBehavior(): null|FHIRActionPrecheckBehavior
    {
        return $this->precheckBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action should usually be preselected.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionPrecheckBehavior $precheckBehavior
     * @return static
     */
    public function setPrecheckBehavior(null|string|FHIRActionPrecheckBehaviorEnum|FHIRActionPrecheckBehavior $precheckBehavior): self
    {
        if (null === $precheckBehavior) {
            unset($this->precheckBehavior);
            return $this;
        }
        if (!($precheckBehavior instanceof FHIRActionPrecheckBehavior)) {
            $precheckBehavior = new FHIRActionPrecheckBehavior(value: $precheckBehavior);
        }
        $this->precheckBehavior = $precheckBehavior;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionCardinalityBehavior
     */
    public function getCardinalityBehavior(): null|FHIRActionCardinalityBehavior
    {
        return $this->cardinalityBehavior ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines whether the action can be selected multiple times.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRActionCardinalityBehavior $cardinalityBehavior
     * @return static
     */
    public function setCardinalityBehavior(null|string|FHIRActionCardinalityBehaviorEnum|FHIRActionCardinalityBehavior $cardinalityBehavior): self
    {
        if (null === $cardinalityBehavior) {
            unset($this->cardinalityBehavior);
            return $this;
        }
        if (!($cardinalityBehavior instanceof FHIRActionCardinalityBehavior)) {
            $cardinalityBehavior = new FHIRActionCardinalityBehavior(value: $cardinalityBehavior);
        }
        $this->cardinalityBehavior = $cardinalityBehavior;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $definitionCanonical
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical): self
    {
        if (null === $definitionCanonical) {
            unset($this->definitionCanonical);
            return $this;
        }
        if (!($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical(value: $definitionCanonical);
        }
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getDefinitionUri(): null|FHIRUri
    {
        return $this->definitionUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an ActivityDefinition that describes the action to be taken in
     * detail, a MessageDefinition describing a message to be snet, a PlanDefinition
     * that describes a series of actions to be taken, a Questionnaire that should be
     * filled out, a SpecimenDefinition describing a specimen to be collected, or an
     * ObservationDefinition that specifies what observation should be captured.
     * (choose any one of definition*, but only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $definitionUri
     * @return static
     */
    public function setDefinitionUri(null|string|FHIRUriPrimitive|FHIRUri $definitionUri): self
    {
        if (null === $definitionUri) {
            unset($this->definitionUri);
            return $this;
        }
        if (!($definitionUri instanceof FHIRUri)) {
            $definitionUri = new FHIRUri(value: $definitionUri);
        }
        $this->definitionUri = $definitionUri;
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
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue>
     */
    public function getDynamicValue(): array
    {
        return $this->dynamicValue ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue>
     */
    public function getDynamicValueIterator(): iterable
    {
        if (!isset($this->dynamicValue)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dynamicValue);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue $dynamicValue
     * @return static
     */
    public function addDynamicValue(FHIRPlanDefinitionDynamicValue $dynamicValue): self
    {
        if (!isset($this->dynamicValue)) {
            $this->dynamicValue = [];
        }
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Customizations that should be applied to the statically defined resource. For
     * example, if the dosage of a medication must be computed based on the patient's
     * weight, a customization would be used to specify an expression that calculated
     * the weight, and the path on the resource that would contain the result.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue ...$dynamicValue
     * @return static
     */
    public function setDynamicValue(FHIRPlanDefinitionDynamicValue ...$dynamicValue): self
    {
        if ([] === $dynamicValue) {
            unset($this->dynamicValue);
            return $this;
        }
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction>
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $action
     * @return static
     */
    public function addAction(FHIRPlanDefinitionAction $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * This resource allows for the definition of various types of plans as a sharable,
     * consumable, and executable artifact. The resource is general enough to support
     * the description of a broad range of clinical and non-clinical artifacts such as
     * clinical decision support rules, order sets, protocols, and drug quality
     * specifications.
     *
     * Sub actions that are contained within the action. The behavior of this action
     * determines the functionality of the sub-actions. For example, a selection
     * behavior of at-most-one indicates that of the sub-actions, at most one may be
     * chosen as part of realizing the action definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction ...$action
     * @return static
     */
    public function setAction(FHIRPlanDefinitionAction ...$action): self
    {
        if ([] === $action) {
            unset($this->action);
            return $this;
        }
        $this->action = $action;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionAction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINK_ID === $cen) {
                $type->setLinkId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREFIX === $cen) {
                $type->setPrefix(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_EQUIVALENT === $cen) {
                $type->setTextEquivalent(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->addDocumentation(FHIRRelatedArtifact::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GOAL_ID === $cen) {
                $type->addGoalId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_CODEABLE_CONCEPT === $cen) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_REFERENCE === $cen) {
                $type->setSubjectReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_CANONICAL === $cen) {
                $type->setSubjectCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRIGGER === $cen) {
                $type->addTrigger(FHIRTriggerDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRPlanDefinitionCondition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INPUT === $cen) {
                $type->addInput(FHIRPlanDefinitionInput::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTPUT === $cen) {
                $type->addOutput(FHIRPlanDefinitionOutput::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ACTION === $cen) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_AGE === $cen) {
                $type->setTimingAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_DURATION === $cen) {
                $type->setTimingDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_RANGE === $cen) {
                $type->setTimingRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_TIMING === $cen) {
                $type->setTimingTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT === $cen) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUPING_BEHAVIOR === $cen) {
                $type->setGroupingBehavior(FHIRActionGroupingBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SELECTION_BEHAVIOR === $cen) {
                $type->setSelectionBehavior(FHIRActionSelectionBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIRED_BEHAVIOR === $cen) {
                $type->setRequiredBehavior(FHIRActionRequiredBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRECHECK_BEHAVIOR === $cen) {
                $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARDINALITY_BEHAVIOR === $cen) {
                $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $cen) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_URI === $cen) {
                $type->setDefinitionUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRANSFORM === $cen) {
                $type->setTransform(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DYNAMIC_VALUE === $cen) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->addAction(FHIRPlanDefinitionAction::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            if (isset($type->linkId)) {
                $type->linkId->setValue((string)$attributes[self::FIELD_LINK_ID]);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LINK_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PREFIX])) {
            if (isset($type->prefix)) {
                $type->prefix->setValue((string)$attributes[self::FIELD_PREFIX]);
            } else {
                $type->setPrefix((string)$attributes[self::FIELD_PREFIX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PREFIX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TITLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_EQUIVALENT])) {
            if (isset($type->textEquivalent)) {
                $type->textEquivalent->setValue((string)$attributes[self::FIELD_TEXT_EQUIVALENT]);
            } else {
                $type->setTextEquivalent((string)$attributes[self::FIELD_TEXT_EQUIVALENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT_EQUIVALENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRIORITY])) {
            if (isset($type->priority)) {
                $type->priority->setValue((string)$attributes[self::FIELD_PRIORITY]);
            } else {
                $type->setPriority((string)$attributes[self::FIELD_PRIORITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRIORITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUBJECT_CANONICAL])) {
            if (isset($type->subjectCanonical)) {
                $type->subjectCanonical->setValue((string)$attributes[self::FIELD_SUBJECT_CANONICAL]);
            } else {
                $type->setSubjectCanonical((string)$attributes[self::FIELD_SUBJECT_CANONICAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUBJECT_CANONICAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GROUPING_BEHAVIOR])) {
            if (isset($type->groupingBehavior)) {
                $type->groupingBehavior->setValue((string)$attributes[self::FIELD_GROUPING_BEHAVIOR]);
            } else {
                $type->setGroupingBehavior((string)$attributes[self::FIELD_GROUPING_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GROUPING_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SELECTION_BEHAVIOR])) {
            if (isset($type->selectionBehavior)) {
                $type->selectionBehavior->setValue((string)$attributes[self::FIELD_SELECTION_BEHAVIOR]);
            } else {
                $type->setSelectionBehavior((string)$attributes[self::FIELD_SELECTION_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SELECTION_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIRED_BEHAVIOR])) {
            if (isset($type->requiredBehavior)) {
                $type->requiredBehavior->setValue((string)$attributes[self::FIELD_REQUIRED_BEHAVIOR]);
            } else {
                $type->setRequiredBehavior((string)$attributes[self::FIELD_REQUIRED_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIRED_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRECHECK_BEHAVIOR])) {
            if (isset($type->precheckBehavior)) {
                $type->precheckBehavior->setValue((string)$attributes[self::FIELD_PRECHECK_BEHAVIOR]);
            } else {
                $type->setPrecheckBehavior((string)$attributes[self::FIELD_PRECHECK_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRECHECK_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CARDINALITY_BEHAVIOR])) {
            if (isset($type->cardinalityBehavior)) {
                $type->cardinalityBehavior->setValue((string)$attributes[self::FIELD_CARDINALITY_BEHAVIOR]);
            } else {
                $type->setCardinalityBehavior((string)$attributes[self::FIELD_CARDINALITY_BEHAVIOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CARDINALITY_BEHAVIOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            if (isset($type->definitionCanonical)) {
                $type->definitionCanonical->setValue((string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
            } else {
                $type->setDefinitionCanonical((string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFINITION_CANONICAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFINITION_URI])) {
            if (isset($type->definitionUri)) {
                $type->definitionUri->setValue((string)$attributes[self::FIELD_DEFINITION_URI]);
            } else {
                $type->setDefinitionUri((string)$attributes[self::FIELD_DEFINITION_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEFINITION_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->linkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $this->linkId->_getValueAsString());
        }
        if (isset($this->prefix) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PREFIX]) {
            $xw->writeAttribute(self::FIELD_PREFIX, $this->prefix->_getValueAsString());
        }
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->textEquivalent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]) {
            $xw->writeAttribute(self::FIELD_TEXT_EQUIVALENT, $this->textEquivalent->_getValueAsString());
        }
        if (isset($this->priority) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRIORITY]) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $this->priority->_getValueAsString());
        }
        if (isset($this->subjectCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBJECT_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_SUBJECT_CANONICAL, $this->subjectCanonical->_getValueAsString());
        }
        if (isset($this->groupingBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_GROUPING_BEHAVIOR, $this->groupingBehavior->_getValueAsString());
        }
        if (isset($this->selectionBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_SELECTION_BEHAVIOR, $this->selectionBehavior->_getValueAsString());
        }
        if (isset($this->requiredBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_REQUIRED_BEHAVIOR, $this->requiredBehavior->_getValueAsString());
        }
        if (isset($this->precheckBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_PRECHECK_BEHAVIOR, $this->precheckBehavior->_getValueAsString());
        }
        if (isset($this->cardinalityBehavior) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]) {
            $xw->writeAttribute(self::FIELD_CARDINALITY_BEHAVIOR, $this->cardinalityBehavior->_getValueAsString());
        }
        if (isset($this->definitionCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->_getValueAsString());
        }
        if (isset($this->definitionUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION_URI]) {
            $xw->writeAttribute(self::FIELD_DEFINITION_URI, $this->definitionUri->_getValueAsString());
        }
        if (isset($this->transform) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TRANSFORM]) {
            $xw->writeAttribute(self::FIELD_TRANSFORM, $this->transform->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->linkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LINK_ID]
                || $this->linkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $this->linkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->prefix)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PREFIX]
                || $this->prefix->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PREFIX);
            $this->prefix->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PREFIX]);
            $xw->endElement();
        }
        if (isset($this->title)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TITLE]
                || $this->title->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TITLE]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->textEquivalent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]
                || $this->textEquivalent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_EQUIVALENT);
            $this->textEquivalent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_EQUIVALENT]);
            $xw->endElement();
        }
        if (isset($this->priority)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRIORITY]
                || $this->priority->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRIORITY]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reason)) {
            foreach ($this->reason as $v) {
                $xw->startElement(self::FIELD_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->documentation)) {
            foreach ($this->documentation as $v) {
                $xw->startElement(self::FIELD_DOCUMENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->goalId) && [] !== $this->goalId) {
            foreach($this->goalId as $v) {
                $xw->startElement(self::FIELD_GOAL_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->trigger)) {
            foreach ($this->trigger as $v) {
                $xw->startElement(self::FIELD_TRIGGER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->condition)) {
            foreach ($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->input)) {
            foreach ($this->input as $v) {
                $xw->startElement(self::FIELD_INPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->output)) {
            foreach ($this->output as $v) {
                $xw->startElement(self::FIELD_OUTPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedAction)) {
            foreach ($this->relatedAction as $v) {
                $xw->startElement(self::FIELD_RELATED_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->timingAge)) {
            $xw->startElement(self::FIELD_TIMING_AGE);
            $this->timingAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingDuration)) {
            $xw->startElement(self::FIELD_TIMING_DURATION);
            $this->timingDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingRange)) {
            $xw->startElement(self::FIELD_TIMING_RANGE);
            $this->timingRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingTiming)) {
            $xw->startElement(self::FIELD_TIMING_TIMING);
            $this->timingTiming->xmlSerialize($xw, $config);
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
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupingBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]
                || $this->groupingBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUPING_BEHAVIOR);
            $this->groupingBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUPING_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->selectionBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]
                || $this->selectionBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SELECTION_BEHAVIOR);
            $this->selectionBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SELECTION_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->requiredBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]
                || $this->requiredBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIRED_BEHAVIOR);
            $this->requiredBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIRED_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->precheckBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]
                || $this->precheckBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRECHECK_BEHAVIOR);
            $this->precheckBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRECHECK_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->cardinalityBehavior)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]
                || $this->cardinalityBehavior->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CARDINALITY_BEHAVIOR);
            $this->cardinalityBehavior->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CARDINALITY_BEHAVIOR]);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]
                || $this->definitionCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->definitionUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION_URI]
                || $this->definitionUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION_URI);
            $this->definitionUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION_URI]);
            $xw->endElement();
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
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionAction)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->linkId)
            || isset($decoded->_linkId)
            || property_exists($decoded, self::FIELD_LINK_ID)
            || property_exists($decoded, self::FIELD_LINK_ID_EXT)) {
            $v = $decoded->_linkId ?? new \stdClass();
            $v->value = $decoded->linkId ?? null;
            $type->setLinkId(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->prefix)
            || isset($decoded->_prefix)
            || property_exists($decoded, self::FIELD_PREFIX)
            || property_exists($decoded, self::FIELD_PREFIX_EXT)) {
            $v = $decoded->_prefix ?? new \stdClass();
            $v->value = $decoded->prefix ?? null;
            $type->setPrefix(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->title)
            || isset($decoded->_title)
            || property_exists($decoded, self::FIELD_TITLE)
            || property_exists($decoded, self::FIELD_TITLE_EXT)) {
            $v = $decoded->_title ?? new \stdClass();
            $v->value = $decoded->title ?? null;
            $type->setTitle(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->textEquivalent)
            || isset($decoded->_textEquivalent)
            || property_exists($decoded, self::FIELD_TEXT_EQUIVALENT)
            || property_exists($decoded, self::FIELD_TEXT_EQUIVALENT_EXT)) {
            $v = $decoded->_textEquivalent ?? new \stdClass();
            $v->value = $decoded->textEquivalent ?? null;
            $type->setTextEquivalent(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->priority)
            || isset($decoded->_priority)
            || property_exists($decoded, self::FIELD_PRIORITY)
            || property_exists($decoded, self::FIELD_PRIORITY_EXT)) {
            $v = $decoded->_priority ?? new \stdClass();
            $v->value = $decoded->priority ?? null;
            $type->setPriority(FHIRRequestPriority::jsonUnserialize($v, $config));
        }
        if (isset($decoded->code) || property_exists($decoded, self::FIELD_CODE)) {
            if (is_array($decoded->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($decoded->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($decoded->code, $config));
            }
        }
        if (isset($decoded->reason) || property_exists($decoded, self::FIELD_REASON)) {
            if (is_object($decoded->reason)) {
                $vals = [$decoded->reason];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REASON, true);
            } else {
                $vals = $decoded->reason;
            }
            foreach($vals as $v) {
                $type->addReason(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->documentation) || property_exists($decoded, self::FIELD_DOCUMENTATION)) {
            if (is_object($decoded->documentation)) {
                $vals = [$decoded->documentation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DOCUMENTATION, true);
            } else {
                $vals = $decoded->documentation;
            }
            foreach($vals as $v) {
                $type->addDocumentation(FHIRRelatedArtifact::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->goalId)
            || isset($decoded->_goalId)
            || property_exists($decoded, self::FIELD_GOAL_ID)
            || property_exists($decoded, self::FIELD_GOAL_ID_EXT)) {
            $vals = (array)($decoded->goalId ?? []);
            $exts = (array)($decoded->FIELD_GOAL_ID_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addGoalId(FHIRId::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->subjectCodeableConcept) || property_exists($decoded, self::FIELD_SUBJECT_CODEABLE_CONCEPT)) {
            if (is_array($decoded->subjectCodeableConcept)) {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->subjectCodeableConcept), $config));
            } else {
                $type->setSubjectCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->subjectCodeableConcept, $config));
            }
        }
        if (isset($decoded->subjectReference) || property_exists($decoded, self::FIELD_SUBJECT_REFERENCE)) {
            if (is_array($decoded->subjectReference)) {
                $type->setSubjectReference(FHIRReference::jsonUnserialize(reset($decoded->subjectReference), $config));
            } else {
                $type->setSubjectReference(FHIRReference::jsonUnserialize($decoded->subjectReference, $config));
            }
        }
        if (isset($decoded->subjectCanonical)
            || isset($decoded->_subjectCanonical)
            || property_exists($decoded, self::FIELD_SUBJECT_CANONICAL)
            || property_exists($decoded, self::FIELD_SUBJECT_CANONICAL_EXT)) {
            $v = $decoded->_subjectCanonical ?? new \stdClass();
            $v->value = $decoded->subjectCanonical ?? null;
            $type->setSubjectCanonical(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->trigger) || property_exists($decoded, self::FIELD_TRIGGER)) {
            if (is_object($decoded->trigger)) {
                $vals = [$decoded->trigger];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TRIGGER, true);
            } else {
                $vals = $decoded->trigger;
            }
            foreach($vals as $v) {
                $type->addTrigger(FHIRTriggerDefinition::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->condition) || property_exists($decoded, self::FIELD_CONDITION)) {
            if (is_object($decoded->condition)) {
                $vals = [$decoded->condition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONDITION, true);
            } else {
                $vals = $decoded->condition;
            }
            foreach($vals as $v) {
                $type->addCondition(FHIRPlanDefinitionCondition::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->input) || property_exists($decoded, self::FIELD_INPUT)) {
            if (is_object($decoded->input)) {
                $vals = [$decoded->input];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INPUT, true);
            } else {
                $vals = $decoded->input;
            }
            foreach($vals as $v) {
                $type->addInput(FHIRPlanDefinitionInput::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->output) || property_exists($decoded, self::FIELD_OUTPUT)) {
            if (is_object($decoded->output)) {
                $vals = [$decoded->output];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_OUTPUT, true);
            } else {
                $vals = $decoded->output;
            }
            foreach($vals as $v) {
                $type->addOutput(FHIRPlanDefinitionOutput::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->relatedAction) || property_exists($decoded, self::FIELD_RELATED_ACTION)) {
            if (is_object($decoded->relatedAction)) {
                $vals = [$decoded->relatedAction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED_ACTION, true);
            } else {
                $vals = $decoded->relatedAction;
            }
            foreach($vals as $v) {
                $type->addRelatedAction(FHIRPlanDefinitionRelatedAction::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->timingAge) || property_exists($decoded, self::FIELD_TIMING_AGE)) {
            if (is_array($decoded->timingAge)) {
                $type->setTimingAge(FHIRAge::jsonUnserialize(reset($decoded->timingAge), $config));
            } else {
                $type->setTimingAge(FHIRAge::jsonUnserialize($decoded->timingAge, $config));
            }
        }
        if (isset($decoded->timingDuration) || property_exists($decoded, self::FIELD_TIMING_DURATION)) {
            if (is_array($decoded->timingDuration)) {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize(reset($decoded->timingDuration), $config));
            } else {
                $type->setTimingDuration(FHIRDuration::jsonUnserialize($decoded->timingDuration, $config));
            }
        }
        if (isset($decoded->timingRange) || property_exists($decoded, self::FIELD_TIMING_RANGE)) {
            if (is_array($decoded->timingRange)) {
                $type->setTimingRange(FHIRRange::jsonUnserialize(reset($decoded->timingRange), $config));
            } else {
                $type->setTimingRange(FHIRRange::jsonUnserialize($decoded->timingRange, $config));
            }
        }
        if (isset($decoded->timingTiming) || property_exists($decoded, self::FIELD_TIMING_TIMING)) {
            if (is_array($decoded->timingTiming)) {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize(reset($decoded->timingTiming), $config));
            } else {
                $type->setTimingTiming(FHIRTiming::jsonUnserialize($decoded->timingTiming, $config));
            }
        }
        if (isset($decoded->location) || property_exists($decoded, self::FIELD_LOCATION)) {
            if (is_array($decoded->location)) {
                $type->setLocation(FHIRCodeableReference::jsonUnserialize(reset($decoded->location), $config));
            } else {
                $type->setLocation(FHIRCodeableReference::jsonUnserialize($decoded->location, $config));
            }
        }
        if (isset($decoded->participant) || property_exists($decoded, self::FIELD_PARTICIPANT)) {
            if (is_object($decoded->participant)) {
                $vals = [$decoded->participant];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PARTICIPANT, true);
            } else {
                $vals = $decoded->participant;
            }
            foreach($vals as $v) {
                $type->addParticipant(FHIRPlanDefinitionParticipant::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->groupingBehavior)
            || isset($decoded->_groupingBehavior)
            || property_exists($decoded, self::FIELD_GROUPING_BEHAVIOR)
            || property_exists($decoded, self::FIELD_GROUPING_BEHAVIOR_EXT)) {
            $v = $decoded->_groupingBehavior ?? new \stdClass();
            $v->value = $decoded->groupingBehavior ?? null;
            $type->setGroupingBehavior(FHIRActionGroupingBehavior::jsonUnserialize($v, $config));
        }
        if (isset($decoded->selectionBehavior)
            || isset($decoded->_selectionBehavior)
            || property_exists($decoded, self::FIELD_SELECTION_BEHAVIOR)
            || property_exists($decoded, self::FIELD_SELECTION_BEHAVIOR_EXT)) {
            $v = $decoded->_selectionBehavior ?? new \stdClass();
            $v->value = $decoded->selectionBehavior ?? null;
            $type->setSelectionBehavior(FHIRActionSelectionBehavior::jsonUnserialize($v, $config));
        }
        if (isset($decoded->requiredBehavior)
            || isset($decoded->_requiredBehavior)
            || property_exists($decoded, self::FIELD_REQUIRED_BEHAVIOR)
            || property_exists($decoded, self::FIELD_REQUIRED_BEHAVIOR_EXT)) {
            $v = $decoded->_requiredBehavior ?? new \stdClass();
            $v->value = $decoded->requiredBehavior ?? null;
            $type->setRequiredBehavior(FHIRActionRequiredBehavior::jsonUnserialize($v, $config));
        }
        if (isset($decoded->precheckBehavior)
            || isset($decoded->_precheckBehavior)
            || property_exists($decoded, self::FIELD_PRECHECK_BEHAVIOR)
            || property_exists($decoded, self::FIELD_PRECHECK_BEHAVIOR_EXT)) {
            $v = $decoded->_precheckBehavior ?? new \stdClass();
            $v->value = $decoded->precheckBehavior ?? null;
            $type->setPrecheckBehavior(FHIRActionPrecheckBehavior::jsonUnserialize($v, $config));
        }
        if (isset($decoded->cardinalityBehavior)
            || isset($decoded->_cardinalityBehavior)
            || property_exists($decoded, self::FIELD_CARDINALITY_BEHAVIOR)
            || property_exists($decoded, self::FIELD_CARDINALITY_BEHAVIOR_EXT)) {
            $v = $decoded->_cardinalityBehavior ?? new \stdClass();
            $v->value = $decoded->cardinalityBehavior ?? null;
            $type->setCardinalityBehavior(FHIRActionCardinalityBehavior::jsonUnserialize($v, $config));
        }
        if (isset($decoded->definitionCanonical)
            || isset($decoded->_definitionCanonical)
            || property_exists($decoded, self::FIELD_DEFINITION_CANONICAL)
            || property_exists($decoded, self::FIELD_DEFINITION_CANONICAL_EXT)) {
            $v = $decoded->_definitionCanonical ?? new \stdClass();
            $v->value = $decoded->definitionCanonical ?? null;
            $type->setDefinitionCanonical(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->definitionUri)
            || isset($decoded->_definitionUri)
            || property_exists($decoded, self::FIELD_DEFINITION_URI)
            || property_exists($decoded, self::FIELD_DEFINITION_URI_EXT)) {
            $v = $decoded->_definitionUri ?? new \stdClass();
            $v->value = $decoded->definitionUri ?? null;
            $type->setDefinitionUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($decoded->transform)
            || isset($decoded->_transform)
            || property_exists($decoded, self::FIELD_TRANSFORM)
            || property_exists($decoded, self::FIELD_TRANSFORM_EXT)) {
            $v = $decoded->_transform ?? new \stdClass();
            $v->value = $decoded->transform ?? null;
            $type->setTransform(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->dynamicValue) || property_exists($decoded, self::FIELD_DYNAMIC_VALUE)) {
            if (is_object($decoded->dynamicValue)) {
                $vals = [$decoded->dynamicValue];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DYNAMIC_VALUE, true);
            } else {
                $vals = $decoded->dynamicValue;
            }
            foreach($vals as $v) {
                $type->addDynamicValue(FHIRPlanDefinitionDynamicValue::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->action) || property_exists($decoded, self::FIELD_ACTION)) {
            if (is_object($decoded->action)) {
                $vals = [$decoded->action];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTION, true);
            } else {
                $vals = $decoded->action;
            }
            foreach($vals as $v) {
                $type->addAction(FHIRPlanDefinitionAction::jsonUnserialize($v, $config));
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
        if (isset($this->linkId)) {
            if (null !== ($val = $this->linkId->getValue())) {
                $out->linkId = $val;
            }
            if ($this->linkId->_nonValueFieldDefined()) {
                $ext = $this->linkId->jsonSerialize();
                unset($ext->value);
                $out->_linkId = $ext;
            }
        }
        if (isset($this->prefix)) {
            if (null !== ($val = $this->prefix->getValue())) {
                $out->prefix = $val;
            }
            if ($this->prefix->_nonValueFieldDefined()) {
                $ext = $this->prefix->jsonSerialize();
                unset($ext->value);
                $out->_prefix = $ext;
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
        if (isset($this->textEquivalent)) {
            if (null !== ($val = $this->textEquivalent->getValue())) {
                $out->textEquivalent = $val;
            }
            if ($this->textEquivalent->_nonValueFieldDefined()) {
                $ext = $this->textEquivalent->jsonSerialize();
                unset($ext->value);
                $out->_textEquivalent = $ext;
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
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->reason) && [] !== $this->reason) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REASON) && 1 === count($this->reason)) {
                $out->reason = $this->reason[0];
            } else {
                $out->reason = $this->reason;
            }
        }
        if (isset($this->documentation) && [] !== $this->documentation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DOCUMENTATION) && 1 === count($this->documentation)) {
                $out->documentation = $this->documentation[0];
            } else {
                $out->documentation = $this->documentation;
            }
        }
        if (isset($this->goalId) && [] !== $this->goalId) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->goalId as $v) {
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
                $out->goalId = $vals;
            }
            if ($hasExts) {
                $out->_goalId = $exts;
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
        if (isset($this->trigger) && [] !== $this->trigger) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TRIGGER) && 1 === count($this->trigger)) {
                $out->trigger = $this->trigger[0];
            } else {
                $out->trigger = $this->trigger;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONDITION) && 1 === count($this->condition)) {
                $out->condition = $this->condition[0];
            } else {
                $out->condition = $this->condition;
            }
        }
        if (isset($this->input) && [] !== $this->input) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INPUT) && 1 === count($this->input)) {
                $out->input = $this->input[0];
            } else {
                $out->input = $this->input;
            }
        }
        if (isset($this->output) && [] !== $this->output) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_OUTPUT) && 1 === count($this->output)) {
                $out->output = $this->output[0];
            } else {
                $out->output = $this->output;
            }
        }
        if (isset($this->relatedAction) && [] !== $this->relatedAction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED_ACTION) && 1 === count($this->relatedAction)) {
                $out->relatedAction = $this->relatedAction[0];
            } else {
                $out->relatedAction = $this->relatedAction;
            }
        }
        if (isset($this->timingAge)) {
            $out->timingAge = $this->timingAge;
        }
        if (isset($this->timingDuration)) {
            $out->timingDuration = $this->timingDuration;
        }
        if (isset($this->timingRange)) {
            $out->timingRange = $this->timingRange;
        }
        if (isset($this->timingTiming)) {
            $out->timingTiming = $this->timingTiming;
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->groupingBehavior)) {
            if (null !== ($val = $this->groupingBehavior->getValue())) {
                $out->groupingBehavior = $val;
            }
            if ($this->groupingBehavior->_nonValueFieldDefined()) {
                $ext = $this->groupingBehavior->jsonSerialize();
                unset($ext->value);
                $out->_groupingBehavior = $ext;
            }
        }
        if (isset($this->selectionBehavior)) {
            if (null !== ($val = $this->selectionBehavior->getValue())) {
                $out->selectionBehavior = $val;
            }
            if ($this->selectionBehavior->_nonValueFieldDefined()) {
                $ext = $this->selectionBehavior->jsonSerialize();
                unset($ext->value);
                $out->_selectionBehavior = $ext;
            }
        }
        if (isset($this->requiredBehavior)) {
            if (null !== ($val = $this->requiredBehavior->getValue())) {
                $out->requiredBehavior = $val;
            }
            if ($this->requiredBehavior->_nonValueFieldDefined()) {
                $ext = $this->requiredBehavior->jsonSerialize();
                unset($ext->value);
                $out->_requiredBehavior = $ext;
            }
        }
        if (isset($this->precheckBehavior)) {
            if (null !== ($val = $this->precheckBehavior->getValue())) {
                $out->precheckBehavior = $val;
            }
            if ($this->precheckBehavior->_nonValueFieldDefined()) {
                $ext = $this->precheckBehavior->jsonSerialize();
                unset($ext->value);
                $out->_precheckBehavior = $ext;
            }
        }
        if (isset($this->cardinalityBehavior)) {
            if (null !== ($val = $this->cardinalityBehavior->getValue())) {
                $out->cardinalityBehavior = $val;
            }
            if ($this->cardinalityBehavior->_nonValueFieldDefined()) {
                $ext = $this->cardinalityBehavior->jsonSerialize();
                unset($ext->value);
                $out->_cardinalityBehavior = $ext;
            }
        }
        if (isset($this->definitionCanonical)) {
            if (null !== ($val = $this->definitionCanonical->getValue())) {
                $out->definitionCanonical = $val;
            }
            if ($this->definitionCanonical->_nonValueFieldDefined()) {
                $ext = $this->definitionCanonical->jsonSerialize();
                unset($ext->value);
                $out->_definitionCanonical = $ext;
            }
        }
        if (isset($this->definitionUri)) {
            if (null !== ($val = $this->definitionUri->getValue())) {
                $out->definitionUri = $val;
            }
            if ($this->definitionUri->_nonValueFieldDefined()) {
                $ext = $this->definitionUri->jsonSerialize();
                unset($ext->value);
                $out->_definitionUri = $ext;
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
        if (isset($this->action) && [] !== $this->action) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTION) && 1 === count($this->action)) {
                $out->action = $this->action[0];
            } else {
                $out->action = $this->action;
            }
        }
        return $out;
    }
}