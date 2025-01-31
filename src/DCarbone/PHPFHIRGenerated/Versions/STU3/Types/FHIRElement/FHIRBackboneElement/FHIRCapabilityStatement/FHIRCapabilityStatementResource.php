<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalDeleteStatusList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalReadStatusList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceVersionPolicyList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE;

    /* class_default.php:47 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_INTERACTION = 'interaction';
    public const FIELD_VERSIONING = 'versioning';
    public const FIELD_VERSIONING_EXT = '_versioning';
    public const FIELD_READ_HISTORY = 'readHistory';
    public const FIELD_READ_HISTORY_EXT = '_readHistory';
    public const FIELD_UPDATE_CREATE = 'updateCreate';
    public const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    public const FIELD_CONDITIONAL_CREATE = 'conditionalCreate';
    public const FIELD_CONDITIONAL_CREATE_EXT = '_conditionalCreate';
    public const FIELD_CONDITIONAL_READ = 'conditionalRead';
    public const FIELD_CONDITIONAL_READ_EXT = '_conditionalRead';
    public const FIELD_CONDITIONAL_UPDATE = 'conditionalUpdate';
    public const FIELD_CONDITIONAL_UPDATE_EXT = '_conditionalUpdate';
    public const FIELD_CONDITIONAL_DELETE = 'conditionalDelete';
    public const FIELD_CONDITIONAL_DELETE_EXT = '_conditionalDelete';
    public const FIELD_REFERENCE_POLICY = 'referencePolicy';
    public const FIELD_REFERENCE_POLICY_EXT = '_referencePolicy';
    public const FIELD_SEARCH_INCLUDE = 'searchInclude';
    public const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    public const FIELD_SEARCH_REV_INCLUDE = 'searchRevInclude';
    public const FIELD_SEARCH_REV_INCLUDE_EXT = '_searchRevInclude';
    public const FIELD_SEARCH_PARAM = 'searchParam';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INTERACTION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERSIONING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_READ_HISTORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_UPDATE_CREATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITIONAL_CREATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITIONAL_READ => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITIONAL_UPDATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITIONAL_DELETE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType 
     */
    protected FHIRResourceType $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $profile;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $documentation;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[] 
     */
    protected array $interaction;
    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy 
     */
    protected FHIRResourceVersionPolicy $versioning;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $readHistory;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $updateCreate;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $conditionalCreate;
    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus 
     */
    protected FHIRConditionalReadStatus $conditionalRead;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $conditionalUpdate;
    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus 
     */
    protected FHIRConditionalDeleteStatus $conditionalDelete;
    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy[] 
     */
    protected array $referencePolicy;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] 
     */
    protected array $searchInclude;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] 
     */
    protected array $searchRevInclude;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] 
     */
    protected array $searchParam;

    /* constructor.php:63 */
    /**
     * FHIRCapabilityStatementResource Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $profile
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[] $interaction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceVersionPolicyList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $readHistory
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $updateCreate
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $conditionalCreate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalReadStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $conditionalUpdate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalDeleteStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy[] $referencePolicy
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] $searchInclude
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[] $searchRevInclude
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] $searchParam
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRResourceTypeList|FHIRResourceType $type = null,
                                null|FHIRReference $profile = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation = null,
                                null|iterable $interaction = null,
                                null|string|FHIRResourceVersionPolicyList|FHIRResourceVersionPolicy $versioning = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalCreate = null,
                                null|string|FHIRConditionalReadStatusList|FHIRConditionalReadStatus $conditionalRead = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalUpdate = null,
                                null|string|FHIRConditionalDeleteStatusList|FHIRConditionalDeleteStatus $conditionalDelete = null,
                                null|iterable $referencePolicy = null,
                                null|iterable $searchInclude = null,
                                null|iterable $searchRevInclude = null,
                                null|iterable $searchParam = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
        if (null !== $interaction) {
            $this->setInteraction(...$interaction);
        }
        if (null !== $versioning) {
            $this->setVersioning($versioning);
        }
        if (null !== $readHistory) {
            $this->setReadHistory($readHistory);
        }
        if (null !== $updateCreate) {
            $this->setUpdateCreate($updateCreate);
        }
        if (null !== $conditionalCreate) {
            $this->setConditionalCreate($conditionalCreate);
        }
        if (null !== $conditionalRead) {
            $this->setConditionalRead($conditionalRead);
        }
        if (null !== $conditionalUpdate) {
            $this->setConditionalUpdate($conditionalUpdate);
        }
        if (null !== $conditionalDelete) {
            $this->setConditionalDelete($conditionalDelete);
        }
        if (null !== $referencePolicy) {
            $this->setReferencePolicy(...$referencePolicy);
        }
        if (null !== $searchInclude) {
            $this->setSearchInclude(...$searchInclude);
        }
        if (null !== $searchRevInclude) {
            $this->setSearchRevInclude(...$searchRevInclude);
        }
        if (null !== $searchParam) {
            $this->setSearchParam(...$searchParam);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType
     */
    public function getType(): null|FHIRResourceType
    {
        return $this->type ?? null;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRResourceTypeList|FHIRResourceType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRResourceType)) {
            $type = new FHIRResourceType(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        if (ValueXMLLocationEnum::CONTAINER_ATTRIBUTE === $valueXMLLocation) {
            throw new \InvalidArgumentException(sprintf(
                'Cannot set "%s" as value XML serialize location for primitive property "type" on type "CapabilityStatement.Resource"',
                $valueXMLLocation->name,
            ));
        }
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getProfile(): null|FHIRReference
    {
        return $this->profile ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function setProfile(null|FHIRReference $profile): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation(): null|FHIRMarkdown
    {
        return $this->documentation ?? null;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown $documentation
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDocumentation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRMarkdown)) {
            $documentation = new FHIRMarkdown(value: $documentation);
        }
        $this->documentation = $documentation;
        if ($this->_valueXMLLocations[self::FIELD_DOCUMENTATION] !== $valueXMLLocation) {
            $this->_setDocumentationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the documentation element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDocumentationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DOCUMENTATION];
    }

    /**
     * Set the location the "value" field of the documentation element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDocumentationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DOCUMENTATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction(): array
    {
        return $this->interaction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction>
     */
    public function getInteractionIterator(): iterable
    {
        if (!isset($this->interaction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->interaction);
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return static
     */
    public function addInteraction(FHIRCapabilityStatementInteraction $interaction): self
    {
        if (!isset($this->interaction)) {
            $this->interaction = [];
        }
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction ...$interaction
     * @return static
     */
    public function setInteraction(FHIRCapabilityStatementInteraction ...$interaction): self
    {
        if ([] === $interaction) {
            unset($this->interaction);
            return $this;
        }
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning(): null|FHIRResourceVersionPolicy
    {
        return $this->versioning ?? null;
    }

    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceVersionPolicyList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVersioning(null|string|FHIRResourceVersionPolicyList|FHIRResourceVersionPolicy $versioning,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $versioning) {
            unset($this->versioning);
            return $this;
        }
        if (!($versioning instanceof FHIRResourceVersionPolicy)) {
            $versioning = new FHIRResourceVersionPolicy(value: $versioning);
        }
        $this->versioning = $versioning;
        if ($this->_valueXMLLocations[self::FIELD_VERSIONING] !== $valueXMLLocation) {
            $this->_setVersioningValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the versioning element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVersioningValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VERSIONING];
    }

    /**
     * Set the location the "value" field of the versioning element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVersioningValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VERSIONING] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getReadHistory(): null|FHIRBoolean
    {
        return $this->readHistory ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $readHistory
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReadHistory(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $readHistory) {
            unset($this->readHistory);
            return $this;
        }
        if (!($readHistory instanceof FHIRBoolean)) {
            $readHistory = new FHIRBoolean(value: $readHistory);
        }
        $this->readHistory = $readHistory;
        if ($this->_valueXMLLocations[self::FIELD_READ_HISTORY] !== $valueXMLLocation) {
            $this->_setReadHistoryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the readHistory element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReadHistoryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_READ_HISTORY];
    }

    /**
     * Set the location the "value" field of the readHistory element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReadHistoryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_READ_HISTORY] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate(): null|FHIRBoolean
    {
        return $this->updateCreate ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $updateCreate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUpdateCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $updateCreate) {
            unset($this->updateCreate);
            return $this;
        }
        if (!($updateCreate instanceof FHIRBoolean)) {
            $updateCreate = new FHIRBoolean(value: $updateCreate);
        }
        $this->updateCreate = $updateCreate;
        if ($this->_valueXMLLocations[self::FIELD_UPDATE_CREATE] !== $valueXMLLocation) {
            $this->_setUpdateCreateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the updateCreate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUpdateCreateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_UPDATE_CREATE];
    }

    /**
     * Set the location the "value" field of the updateCreate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUpdateCreateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_UPDATE_CREATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate(): null|FHIRBoolean
    {
        return $this->conditionalCreate ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $conditionalCreate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConditionalCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalCreate,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $conditionalCreate) {
            unset($this->conditionalCreate);
            return $this;
        }
        if (!($conditionalCreate instanceof FHIRBoolean)) {
            $conditionalCreate = new FHIRBoolean(value: $conditionalCreate);
        }
        $this->conditionalCreate = $conditionalCreate;
        if ($this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE] !== $valueXMLLocation) {
            $this->_setConditionalCreateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the conditionalCreate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionalCreateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE];
    }

    /**
     * Set the location the "value" field of the conditionalCreate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionalCreateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead(): null|FHIRConditionalReadStatus
    {
        return $this->conditionalRead ?? null;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalReadStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConditionalRead(null|string|FHIRConditionalReadStatusList|FHIRConditionalReadStatus $conditionalRead,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $conditionalRead) {
            unset($this->conditionalRead);
            return $this;
        }
        if (!($conditionalRead instanceof FHIRConditionalReadStatus)) {
            $conditionalRead = new FHIRConditionalReadStatus(value: $conditionalRead);
        }
        $this->conditionalRead = $conditionalRead;
        if ($this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ] !== $valueXMLLocation) {
            $this->_setConditionalReadValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the conditionalRead element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionalReadValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ];
    }

    /**
     * Set the location the "value" field of the conditionalRead element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionalReadValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate(): null|FHIRBoolean
    {
        return $this->conditionalUpdate ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $conditionalUpdate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConditionalUpdate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalUpdate,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $conditionalUpdate) {
            unset($this->conditionalUpdate);
            return $this;
        }
        if (!($conditionalUpdate instanceof FHIRBoolean)) {
            $conditionalUpdate = new FHIRBoolean(value: $conditionalUpdate);
        }
        $this->conditionalUpdate = $conditionalUpdate;
        if ($this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE] !== $valueXMLLocation) {
            $this->_setConditionalUpdateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the conditionalUpdate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionalUpdateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE];
    }

    /**
     * Set the location the "value" field of the conditionalUpdate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionalUpdateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete(): null|FHIRConditionalDeleteStatus
    {
        return $this->conditionalDelete ?? null;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalDeleteStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConditionalDelete(null|string|FHIRConditionalDeleteStatusList|FHIRConditionalDeleteStatus $conditionalDelete,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $conditionalDelete) {
            unset($this->conditionalDelete);
            return $this;
        }
        if (!($conditionalDelete instanceof FHIRConditionalDeleteStatus)) {
            $conditionalDelete = new FHIRConditionalDeleteStatus(value: $conditionalDelete);
        }
        $this->conditionalDelete = $conditionalDelete;
        if ($this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE] !== $valueXMLLocation) {
            $this->_setConditionalDeleteValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the conditionalDelete element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionalDeleteValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE];
    }

    /**
     * Set the location the "value" field of the conditionalDelete element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionalDeleteValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy(): array
    {
        return $this->referencePolicy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy>
     */
    public function getReferencePolicyIterator(): iterable
    {
        if (!isset($this->referencePolicy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->referencePolicy);
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return static
     */
    public function addReferencePolicy(string|FHIRReferenceHandlingPolicyList|FHIRReferenceHandlingPolicy $referencePolicy): self
    {
        if (!($referencePolicy instanceof FHIRReferenceHandlingPolicy)) {
            $referencePolicy = new FHIRReferenceHandlingPolicy(value: $referencePolicy);
        }
        if (!isset($this->referencePolicy)) {
            $this->referencePolicy = [];
        }
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy ...$referencePolicy
     * @return static
     */
    public function setReferencePolicy(string|FHIRReferenceHandlingPolicyList|FHIRReferenceHandlingPolicy ...$referencePolicy): self
    {
        if ([] === $referencePolicy) {
            unset($this->referencePolicy);
            return $this;
        }
        $this->referencePolicy = [];
        foreach($referencePolicy as $v) {
            if ($v instanceof FHIRReferenceHandlingPolicy) {
                $this->referencePolicy[] = $v;
            } else {
                $this->referencePolicy[] = new FHIRReferenceHandlingPolicy(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[]
     */
    public function getSearchInclude(): array
    {
        return $this->searchInclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
     */
    public function getSearchIncludeIterator(): iterable
    {
        if (!isset($this->searchInclude)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchInclude);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $searchInclude
     * @return static
     */
    public function addSearchInclude(string|FHIRStringPrimitive|FHIRString $searchInclude): self
    {
        if (!($searchInclude instanceof FHIRString)) {
            $searchInclude = new FHIRString(value: $searchInclude);
        }
        if (!isset($this->searchInclude)) {
            $this->searchInclude = [];
        }
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString ...$searchInclude
     * @return static
     */
    public function setSearchInclude(string|FHIRStringPrimitive|FHIRString ...$searchInclude): self
    {
        if ([] === $searchInclude) {
            unset($this->searchInclude);
            return $this;
        }
        $this->searchInclude = [];
        foreach($searchInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->searchInclude[] = $v;
            } else {
                $this->searchInclude[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude(): array
    {
        return $this->searchRevInclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
     */
    public function getSearchRevIncludeIterator(): iterable
    {
        if (!isset($this->searchRevInclude)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchRevInclude);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $searchRevInclude
     * @return static
     */
    public function addSearchRevInclude(string|FHIRStringPrimitive|FHIRString $searchRevInclude): self
    {
        if (!($searchRevInclude instanceof FHIRString)) {
            $searchRevInclude = new FHIRString(value: $searchRevInclude);
        }
        if (!isset($this->searchRevInclude)) {
            $this->searchRevInclude = [];
        }
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString ...$searchRevInclude
     * @return static
     */
    public function setSearchRevInclude(string|FHIRStringPrimitive|FHIRString ...$searchRevInclude): self
    {
        if ([] === $searchRevInclude) {
            unset($this->searchRevInclude);
            return $this;
        }
        $this->searchRevInclude = [];
        foreach($searchRevInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->searchRevInclude[] = $v;
            } else {
                $this->searchRevInclude[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam(): array
    {
        return $this->searchParam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam>
     */
    public function getSearchParamIterator(): iterable
    {
        if (!isset($this->searchParam)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchParam);
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam): self
    {
        if (!isset($this->searchParam)) {
            $this->searchParam = [];
        }
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam ...$searchParam
     * @return static
     */
    public function setSearchParam(FHIRCapabilityStatementSearchParam ...$searchParam): self
    {
        if ([] === $searchParam) {
            unset($this->searchParam);
            return $this;
        }
        $this->searchParam = $searchParam;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INTERACTION, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERACTION])) {
            $v = $this->getInteraction();
            foreach($validationRules[self::FIELD_INTERACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTERACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERACTION])) {
                        $errs[self::FIELD_INTERACTION] = [];
                    }
                    $errs[self::FIELD_INTERACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSIONING])) {
            $v = $this->getVersioning();
            foreach($validationRules[self::FIELD_VERSIONING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSIONING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSIONING])) {
                        $errs[self::FIELD_VERSIONING] = [];
                    }
                    $errs[self::FIELD_VERSIONING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_HISTORY])) {
            $v = $this->getReadHistory();
            foreach($validationRules[self::FIELD_READ_HISTORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_READ_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_HISTORY])) {
                        $errs[self::FIELD_READ_HISTORY] = [];
                    }
                    $errs[self::FIELD_READ_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UPDATE_CREATE])) {
            $v = $this->getUpdateCreate();
            foreach($validationRules[self::FIELD_UPDATE_CREATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UPDATE_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPDATE_CREATE])) {
                        $errs[self::FIELD_UPDATE_CREATE] = [];
                    }
                    $errs[self::FIELD_UPDATE_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_CREATE])) {
            $v = $this->getConditionalCreate();
            foreach($validationRules[self::FIELD_CONDITIONAL_CREATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITIONAL_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_CREATE])) {
                        $errs[self::FIELD_CONDITIONAL_CREATE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_READ])) {
            $v = $this->getConditionalRead();
            foreach($validationRules[self::FIELD_CONDITIONAL_READ] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITIONAL_READ, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_READ])) {
                        $errs[self::FIELD_CONDITIONAL_READ] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_READ][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_UPDATE])) {
            $v = $this->getConditionalUpdate();
            foreach($validationRules[self::FIELD_CONDITIONAL_UPDATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITIONAL_UPDATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_UPDATE])) {
                        $errs[self::FIELD_CONDITIONAL_UPDATE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_UPDATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_DELETE])) {
            $v = $this->getConditionalDelete();
            foreach($validationRules[self::FIELD_CONDITIONAL_DELETE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITIONAL_DELETE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_DELETE])) {
                        $errs[self::FIELD_CONDITIONAL_DELETE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_DELETE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_POLICY])) {
            $v = $this->getReferencePolicy();
            foreach($validationRules[self::FIELD_REFERENCE_POLICY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_POLICY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_POLICY])) {
                        $errs[self::FIELD_REFERENCE_POLICY] = [];
                    }
                    $errs[self::FIELD_REFERENCE_POLICY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_INCLUDE])) {
            $v = $this->getSearchInclude();
            foreach($validationRules[self::FIELD_SEARCH_INCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_INCLUDE])) {
                        $errs[self::FIELD_SEARCH_INCLUDE] = [];
                    }
                    $errs[self::FIELD_SEARCH_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_REV_INCLUDE])) {
            $v = $this->getSearchRevInclude();
            foreach($validationRules[self::FIELD_SEARCH_REV_INCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_REV_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_REV_INCLUDE])) {
                        $errs[self::FIELD_SEARCH_REV_INCLUDE] = [];
                    }
                    $errs[self::FIELD_SEARCH_REV_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_PARAM])) {
            $v = $this->getSearchParam();
            foreach($validationRules[self::FIELD_SEARCH_PARAM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_PARAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_PARAM])) {
                        $errs[self::FIELD_SEARCH_PARAM] = [];
                    }
                    $errs[self::FIELD_SEARCH_PARAM][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCapabilityStatementResource)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRResourceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->setProfile(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTERACTION === $cen) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSIONING === $cen) {
                $type->setVersioning(FHIRResourceVersionPolicy::xmlUnserialize($ce, $config));
            } else if (self::FIELD_READ_HISTORY === $cen) {
                $type->setReadHistory(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UPDATE_CREATE === $cen) {
                $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITIONAL_CREATE === $cen) {
                $type->setConditionalCreate(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITIONAL_READ === $cen) {
                $type->setConditionalRead(FHIRConditionalReadStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITIONAL_UPDATE === $cen) {
                $type->setConditionalUpdate(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITIONAL_DELETE === $cen) {
                $type->setConditionalDelete(FHIRConditionalDeleteStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_POLICY === $cen) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEARCH_INCLUDE === $cen) {
                $type->addSearchInclude(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEARCH_REV_INCLUDE === $cen) {
                $type->addSearchRevInclude(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEARCH_PARAM === $cen) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
                $type->_setDocumentationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERSIONING])) {
            if (isset($type->versioning)) {
                $type->versioning->setValue((string)$attributes[self::FIELD_VERSIONING]);
                $type->_setVersioningValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVersioning((string)$attributes[self::FIELD_VERSIONING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_READ_HISTORY])) {
            if (isset($type->readHistory)) {
                $type->readHistory->setValue((string)$attributes[self::FIELD_READ_HISTORY]);
                $type->_setReadHistoryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReadHistory((string)$attributes[self::FIELD_READ_HISTORY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_UPDATE_CREATE])) {
            if (isset($type->updateCreate)) {
                $type->updateCreate->setValue((string)$attributes[self::FIELD_UPDATE_CREATE]);
                $type->_setUpdateCreateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUpdateCreate((string)$attributes[self::FIELD_UPDATE_CREATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_CREATE])) {
            if (isset($type->conditionalCreate)) {
                $type->conditionalCreate->setValue((string)$attributes[self::FIELD_CONDITIONAL_CREATE]);
                $type->_setConditionalCreateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setConditionalCreate((string)$attributes[self::FIELD_CONDITIONAL_CREATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_READ])) {
            if (isset($type->conditionalRead)) {
                $type->conditionalRead->setValue((string)$attributes[self::FIELD_CONDITIONAL_READ]);
                $type->_setConditionalReadValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setConditionalRead((string)$attributes[self::FIELD_CONDITIONAL_READ], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_UPDATE])) {
            if (isset($type->conditionalUpdate)) {
                $type->conditionalUpdate->setValue((string)$attributes[self::FIELD_CONDITIONAL_UPDATE]);
                $type->_setConditionalUpdateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setConditionalUpdate((string)$attributes[self::FIELD_CONDITIONAL_UPDATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_DELETE])) {
            if (isset($type->conditionalDelete)) {
                $type->conditionalDelete->setValue((string)$attributes[self::FIELD_CONDITIONAL_DELETE]);
                $type->_setConditionalDeleteValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setConditionalDelete((string)$attributes[self::FIELD_CONDITIONAL_DELETE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getFormattedValue());
        }
        if (isset($this->versioning) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSIONING]) {
            $xw->writeAttribute(self::FIELD_VERSIONING, $this->versioning->_getFormattedValue());
        }
        if (isset($this->readHistory) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_READ_HISTORY]) {
            $xw->writeAttribute(self::FIELD_READ_HISTORY, $this->readHistory->_getFormattedValue());
        }
        if (isset($this->updateCreate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UPDATE_CREATE]) {
            $xw->writeAttribute(self::FIELD_UPDATE_CREATE, $this->updateCreate->_getFormattedValue());
        }
        if (isset($this->conditionalCreate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE]) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_CREATE, $this->conditionalCreate->_getFormattedValue());
        }
        if (isset($this->conditionalRead) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ]) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_READ, $this->conditionalRead->_getFormattedValue());
        }
        if (isset($this->conditionalUpdate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE]) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_UPDATE, $this->conditionalUpdate->_getFormattedValue());
        }
        if (isset($this->conditionalDelete) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE]) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_DELETE, $this->conditionalDelete->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->profile)) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
            $xw->endElement();
        }
        if (isset($this->interaction)) {
            foreach ($this->interaction as $v) {
                $xw->startElement(self::FIELD_INTERACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->versioning)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSIONING]
                || $this->versioning->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSIONING);
            $this->versioning->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSIONING]);
            $xw->endElement();
        }
        if (isset($this->readHistory)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_READ_HISTORY]
                || $this->readHistory->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_READ_HISTORY);
            $this->readHistory->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_READ_HISTORY]);
            $xw->endElement();
        }
        if (isset($this->updateCreate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UPDATE_CREATE]
                || $this->updateCreate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UPDATE_CREATE);
            $this->updateCreate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UPDATE_CREATE]);
            $xw->endElement();
        }
        if (isset($this->conditionalCreate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE]
                || $this->conditionalCreate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITIONAL_CREATE);
            $this->conditionalCreate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITIONAL_CREATE]);
            $xw->endElement();
        }
        if (isset($this->conditionalRead)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ]
                || $this->conditionalRead->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITIONAL_READ);
            $this->conditionalRead->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITIONAL_READ]);
            $xw->endElement();
        }
        if (isset($this->conditionalUpdate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE]
                || $this->conditionalUpdate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITIONAL_UPDATE);
            $this->conditionalUpdate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITIONAL_UPDATE]);
            $xw->endElement();
        }
        if (isset($this->conditionalDelete)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE]
                || $this->conditionalDelete->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITIONAL_DELETE);
            $this->conditionalDelete->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITIONAL_DELETE]);
            $xw->endElement();
        }
        if (isset($this->referencePolicy) && [] !== $this->referencePolicy) {
            foreach($this->referencePolicy as $v) {
                $xw->startElement(self::FIELD_REFERENCE_POLICY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->searchInclude) && [] !== $this->searchInclude) {
            foreach($this->searchInclude as $v) {
                $xw->startElement(self::FIELD_SEARCH_INCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->searchRevInclude) && [] !== $this->searchRevInclude) {
            foreach($this->searchRevInclude as $v) {
                $xw->startElement(self::FIELD_SEARCH_REV_INCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->searchParam)) {
            foreach ($this->searchParam as $v) {
                $xw->startElement(self::FIELD_SEARCH_PARAM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCapabilityStatementResource)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRResourceType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRResourceType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROFILE]) || array_key_exists(self::FIELD_PROFILE, $json)) {
            $type->setProfile(FHIRReference::jsonUnserialize($json[self::FIELD_PROFILE], $config));
        }
        if (isset($json[self::FIELD_DOCUMENTATION])
            || isset($json[self::FIELD_DOCUMENTATION_EXT])
            || array_key_exists(self::FIELD_DOCUMENTATION, $json)
            || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $json)) {
            $value = $json[self::FIELD_DOCUMENTATION] ?? null;
            $type->setDocumentation(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DOCUMENTATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INTERACTION]) || array_key_exists(self::FIELD_INTERACTION, $json)) {
            $vs = $json[self::FIELD_INTERACTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VERSIONING])
            || isset($json[self::FIELD_VERSIONING_EXT])
            || array_key_exists(self::FIELD_VERSIONING, $json)
            || array_key_exists(self::FIELD_VERSIONING_EXT, $json)) {
            $value = $json[self::FIELD_VERSIONING] ?? null;
            $type->setVersioning(FHIRResourceVersionPolicy::jsonUnserialize(
                (is_array($value) ? $value : [FHIRResourceVersionPolicy::FIELD_VALUE => $value]) + ($json[self::FIELD_VERSIONING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_READ_HISTORY])
            || isset($json[self::FIELD_READ_HISTORY_EXT])
            || array_key_exists(self::FIELD_READ_HISTORY, $json)
            || array_key_exists(self::FIELD_READ_HISTORY_EXT, $json)) {
            $value = $json[self::FIELD_READ_HISTORY] ?? null;
            $type->setReadHistory(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_READ_HISTORY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_UPDATE_CREATE])
            || isset($json[self::FIELD_UPDATE_CREATE_EXT])
            || array_key_exists(self::FIELD_UPDATE_CREATE, $json)
            || array_key_exists(self::FIELD_UPDATE_CREATE_EXT, $json)) {
            $value = $json[self::FIELD_UPDATE_CREATE] ?? null;
            $type->setUpdateCreate(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_UPDATE_CREATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITIONAL_CREATE])
            || isset($json[self::FIELD_CONDITIONAL_CREATE_EXT])
            || array_key_exists(self::FIELD_CONDITIONAL_CREATE, $json)
            || array_key_exists(self::FIELD_CONDITIONAL_CREATE_EXT, $json)) {
            $value = $json[self::FIELD_CONDITIONAL_CREATE] ?? null;
            $type->setConditionalCreate(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITIONAL_CREATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITIONAL_READ])
            || isset($json[self::FIELD_CONDITIONAL_READ_EXT])
            || array_key_exists(self::FIELD_CONDITIONAL_READ, $json)
            || array_key_exists(self::FIELD_CONDITIONAL_READ_EXT, $json)) {
            $value = $json[self::FIELD_CONDITIONAL_READ] ?? null;
            $type->setConditionalRead(FHIRConditionalReadStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRConditionalReadStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITIONAL_READ_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITIONAL_UPDATE])
            || isset($json[self::FIELD_CONDITIONAL_UPDATE_EXT])
            || array_key_exists(self::FIELD_CONDITIONAL_UPDATE, $json)
            || array_key_exists(self::FIELD_CONDITIONAL_UPDATE_EXT, $json)) {
            $value = $json[self::FIELD_CONDITIONAL_UPDATE] ?? null;
            $type->setConditionalUpdate(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITIONAL_UPDATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONDITIONAL_DELETE])
            || isset($json[self::FIELD_CONDITIONAL_DELETE_EXT])
            || array_key_exists(self::FIELD_CONDITIONAL_DELETE, $json)
            || array_key_exists(self::FIELD_CONDITIONAL_DELETE_EXT, $json)) {
            $value = $json[self::FIELD_CONDITIONAL_DELETE] ?? null;
            $type->setConditionalDelete(FHIRConditionalDeleteStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRConditionalDeleteStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITIONAL_DELETE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REFERENCE_POLICY])
            || isset($json[self::FIELD_REFERENCE_POLICY_EXT])
            || array_key_exists(self::FIELD_REFERENCE_POLICY, $json)
            || array_key_exists(self::FIELD_REFERENCE_POLICY_EXT, $json)) {
            $value = (array)($json[self::FIELD_REFERENCE_POLICY] ?? []);
            $ext = (array)($json[self::FIELD_REFERENCE_POLICY_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::jsonUnserialize(
                    [FHIRReferenceHandlingPolicy::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_SEARCH_INCLUDE])
            || isset($json[self::FIELD_SEARCH_INCLUDE_EXT])
            || array_key_exists(self::FIELD_SEARCH_INCLUDE, $json)
            || array_key_exists(self::FIELD_SEARCH_INCLUDE_EXT, $json)) {
            $value = (array)($json[self::FIELD_SEARCH_INCLUDE] ?? []);
            $ext = (array)($json[self::FIELD_SEARCH_INCLUDE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSearchInclude(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_SEARCH_REV_INCLUDE])
            || isset($json[self::FIELD_SEARCH_REV_INCLUDE_EXT])
            || array_key_exists(self::FIELD_SEARCH_REV_INCLUDE, $json)
            || array_key_exists(self::FIELD_SEARCH_REV_INCLUDE_EXT, $json)) {
            $value = (array)($json[self::FIELD_SEARCH_REV_INCLUDE] ?? []);
            $ext = (array)($json[self::FIELD_SEARCH_REV_INCLUDE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addSearchRevInclude(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_SEARCH_PARAM]) || array_key_exists(self::FIELD_SEARCH_PARAM, $json)) {
            $vs = $json[self::FIELD_SEARCH_PARAM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::jsonUnserialize($v, $config));
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
        if (isset($this->profile)) {
            $out->profile = $this->profile;
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            if ($this->documentation->_nonValueFieldDefined()) {
                $ext = $this->documentation->jsonSerialize();
                unset($ext->value);
                $out->_documentation = $ext;
            }
        }
        if (isset($this->interaction) && [] !== $this->interaction) {
            $out->interaction = $this->interaction;
        }
        if (isset($this->versioning)) {
            if (null !== ($val = $this->versioning->getValue())) {
                $out->versioning = $val;
            }
            if ($this->versioning->_nonValueFieldDefined()) {
                $ext = $this->versioning->jsonSerialize();
                unset($ext->value);
                $out->_versioning = $ext;
            }
        }
        if (isset($this->readHistory)) {
            if (null !== ($val = $this->readHistory->getValue())) {
                $out->readHistory = $val;
            }
            if ($this->readHistory->_nonValueFieldDefined()) {
                $ext = $this->readHistory->jsonSerialize();
                unset($ext->value);
                $out->_readHistory = $ext;
            }
        }
        if (isset($this->updateCreate)) {
            if (null !== ($val = $this->updateCreate->getValue())) {
                $out->updateCreate = $val;
            }
            if ($this->updateCreate->_nonValueFieldDefined()) {
                $ext = $this->updateCreate->jsonSerialize();
                unset($ext->value);
                $out->_updateCreate = $ext;
            }
        }
        if (isset($this->conditionalCreate)) {
            if (null !== ($val = $this->conditionalCreate->getValue())) {
                $out->conditionalCreate = $val;
            }
            if ($this->conditionalCreate->_nonValueFieldDefined()) {
                $ext = $this->conditionalCreate->jsonSerialize();
                unset($ext->value);
                $out->_conditionalCreate = $ext;
            }
        }
        if (isset($this->conditionalRead)) {
            if (null !== ($val = $this->conditionalRead->getValue())) {
                $out->conditionalRead = $val;
            }
            if ($this->conditionalRead->_nonValueFieldDefined()) {
                $ext = $this->conditionalRead->jsonSerialize();
                unset($ext->value);
                $out->_conditionalRead = $ext;
            }
        }
        if (isset($this->conditionalUpdate)) {
            if (null !== ($val = $this->conditionalUpdate->getValue())) {
                $out->conditionalUpdate = $val;
            }
            if ($this->conditionalUpdate->_nonValueFieldDefined()) {
                $ext = $this->conditionalUpdate->jsonSerialize();
                unset($ext->value);
                $out->_conditionalUpdate = $ext;
            }
        }
        if (isset($this->conditionalDelete)) {
            if (null !== ($val = $this->conditionalDelete->getValue())) {
                $out->conditionalDelete = $val;
            }
            if ($this->conditionalDelete->_nonValueFieldDefined()) {
                $ext = $this->conditionalDelete->jsonSerialize();
                unset($ext->value);
                $out->_conditionalDelete = $ext;
            }
        }
        if (isset($this->referencePolicy) && [] !== $this->referencePolicy) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->referencePolicy as $v) {
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
                $out->referencePolicy = $vals;
            }
            if ($hasExts) {
                $out->_referencePolicy = $exts;
            }
        }
        if (isset($this->searchInclude) && [] !== $this->searchInclude) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->searchInclude as $v) {
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
                $out->searchInclude = $vals;
            }
            if ($hasExts) {
                $out->_searchInclude = $exts;
            }
        }
        if (isset($this->searchRevInclude) && [] !== $this->searchRevInclude) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->searchRevInclude as $v) {
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
                $out->searchRevInclude = $vals;
            }
            if ($hasExts) {
                $out->_searchRevInclude = $exts;
            }
        }
        if (isset($this->searchParam) && [] !== $this->searchParam) {
            $out->searchParam = $this->searchParam;
        }
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}