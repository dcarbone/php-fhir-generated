<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalDeleteStatus;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalReadStatus;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRReferenceHandlingPolicy;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceVersionPolicy;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server or Client for a particular version of FHIR that may be used as a
 * statement of actual server functionality or a statement of required or desired
 * server implementation.
 *
 * Class FHIRCapabilityStatementResource
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE;

    const FIELD_TYPE = 'type';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_SUPPORTED_PROFILE = 'supportedProfile';
    const FIELD_SUPPORTED_PROFILE_EXT = '_supportedProfile';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_INTERACTION = 'interaction';
    const FIELD_VERSIONING = 'versioning';
    const FIELD_VERSIONING_EXT = '_versioning';
    const FIELD_READ_HISTORY = 'readHistory';
    const FIELD_READ_HISTORY_EXT = '_readHistory';
    const FIELD_UPDATE_CREATE = 'updateCreate';
    const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    const FIELD_CONDITIONAL_CREATE = 'conditionalCreate';
    const FIELD_CONDITIONAL_CREATE_EXT = '_conditionalCreate';
    const FIELD_CONDITIONAL_READ = 'conditionalRead';
    const FIELD_CONDITIONAL_READ_EXT = '_conditionalRead';
    const FIELD_CONDITIONAL_UPDATE = 'conditionalUpdate';
    const FIELD_CONDITIONAL_UPDATE_EXT = '_conditionalUpdate';
    const FIELD_CONDITIONAL_PATCH = 'conditionalPatch';
    const FIELD_CONDITIONAL_PATCH_EXT = '_conditionalPatch';
    const FIELD_CONDITIONAL_DELETE = 'conditionalDelete';
    const FIELD_CONDITIONAL_DELETE_EXT = '_conditionalDelete';
    const FIELD_REFERENCE_POLICY = 'referencePolicy';
    const FIELD_REFERENCE_POLICY_EXT = '_referencePolicy';
    const FIELD_SEARCH_INCLUDE = 'searchInclude';
    const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    const FIELD_SEARCH_REV_INCLUDE = 'searchRevInclude';
    const FIELD_SEARCH_REV_INCLUDE_EXT = '_searchRevInclude';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_OPERATION = 'operation';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceType
     */
    protected null|FHIRResourceType $type = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A system-wide profile that is applied across *all* instances of the resource
     * supported by the system. For example, if declared on Observation, this profile
     * is the "superset" of capabilities for laboratory *and* vitals *and* other
     * domains. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $profile = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles representing different use cases the system hosts/produces. A
     * supported profile is a statement about the functionality of the data and
     * services provided by the server (or the client) for supported use cases. For
     * example, a system can define and declare multiple Observation profiles for
     * laboratory observations, vital sign observations, etc. By declaring supported
     * profiles, systems provide a way to determine whether individual resources are
     * conformant. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    protected null|array $supportedProfile = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $documentation = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    protected null|array $interaction = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceVersionPolicy
     */
    protected null|FHIRResourceVersionPolicy $versioning = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $readHistory = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (that is, the client PUTs to a location where there
     * is no existing resource). Allowing this operation means that the server allows
     * the client to create new identities on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $updateCreate = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionalCreate = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalReadStatus
     */
    protected null|FHIRConditionalReadStatus $conditionalRead = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionalUpdate = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional patch.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $conditionalPatch = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalDeleteStatus
     */
    protected null|FHIRConditionalDeleteStatus $conditionalDelete = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    protected null|array $referencePolicy = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $searchInclude = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    protected null|array $searchRevInclude = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    protected null|array $searchParam = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    protected null|array $operation = [];

    /**
     * Validation map for fields in type CapabilityStatement.Resource
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRCapabilityStatementResource Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRResourceType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRResourceType($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data) || array_key_exists(self::FIELD_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setProfile($value);
                } else if (is_array($value)) {
                    $this->setProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProfile(new FHIRCanonical($ext));
            } else {
                $this->setProfile(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTED_PROFILE, $data) || array_key_exists(self::FIELD_SUPPORTED_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_SUPPORTED_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_SUPPORTED_PROFILE_EXT]) && is_array($data[self::FIELD_SUPPORTED_PROFILE_EXT])) ? $data[self::FIELD_SUPPORTED_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addSupportedProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addSupportedProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSupportedProfile(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addSupportedProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSupportedProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addSupportedProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSupportedProfile(new FHIRCanonical($iext));
                }
            } else {
                $this->addSupportedProfile(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENTATION, $data) || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $data)) {
            $value = $data[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $data[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRMarkdown($ext));
            } else {
                $this->setDocumentation(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_INTERACTION, $data)) {
            if (is_array($data[self::FIELD_INTERACTION])) {
                foreach($data[self::FIELD_INTERACTION] as $v) {
                    if ($v instanceof FHIRCapabilityStatementInteraction) {
                        $this->addInteraction($v);
                    } else {
                        $this->addInteraction(new FHIRCapabilityStatementInteraction($v));
                    }
                }
            } elseif ($data[self::FIELD_INTERACTION] instanceof FHIRCapabilityStatementInteraction) {
                $this->addInteraction($data[self::FIELD_INTERACTION]);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction($data[self::FIELD_INTERACTION]));
            }
        }
        if (array_key_exists(self::FIELD_VERSIONING, $data) || array_key_exists(self::FIELD_VERSIONING_EXT, $data)) {
            $value = $data[self::FIELD_VERSIONING] ?? null;
            $ext = (isset($data[self::FIELD_VERSIONING_EXT]) && is_array($data[self::FIELD_VERSIONING_EXT])) ? $data[self::FIELD_VERSIONING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRResourceVersionPolicy) {
                    $this->setVersioning($value);
                } else if (is_array($value)) {
                    $this->setVersioning(new FHIRResourceVersionPolicy(array_merge($ext, $value)));
                } else {
                    $this->setVersioning(new FHIRResourceVersionPolicy([FHIRResourceVersionPolicy::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersioning(new FHIRResourceVersionPolicy($ext));
            } else {
                $this->setVersioning(new FHIRResourceVersionPolicy(null));
            }
        }
        if (array_key_exists(self::FIELD_READ_HISTORY, $data) || array_key_exists(self::FIELD_READ_HISTORY_EXT, $data)) {
            $value = $data[self::FIELD_READ_HISTORY] ?? null;
            $ext = (isset($data[self::FIELD_READ_HISTORY_EXT]) && is_array($data[self::FIELD_READ_HISTORY_EXT])) ? $data[self::FIELD_READ_HISTORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReadHistory($value);
                } else if (is_array($value)) {
                    $this->setReadHistory(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReadHistory(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadHistory(new FHIRBoolean($ext));
            } else {
                $this->setReadHistory(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_UPDATE_CREATE, $data) || array_key_exists(self::FIELD_UPDATE_CREATE_EXT, $data)) {
            $value = $data[self::FIELD_UPDATE_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_UPDATE_CREATE_EXT]) && is_array($data[self::FIELD_UPDATE_CREATE_EXT])) ? $data[self::FIELD_UPDATE_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setUpdateCreate($value);
                } else if (is_array($value)) {
                    $this->setUpdateCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setUpdateCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUpdateCreate(new FHIRBoolean($ext));
            } else {
                $this->setUpdateCreate(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITIONAL_CREATE, $data) || array_key_exists(self::FIELD_CONDITIONAL_CREATE_EXT, $data)) {
            $value = $data[self::FIELD_CONDITIONAL_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_CREATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_CREATE_EXT])) ? $data[self::FIELD_CONDITIONAL_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalCreate($value);
                } else if (is_array($value)) {
                    $this->setConditionalCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalCreate(new FHIRBoolean($ext));
            } else {
                $this->setConditionalCreate(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITIONAL_READ, $data) || array_key_exists(self::FIELD_CONDITIONAL_READ_EXT, $data)) {
            $value = $data[self::FIELD_CONDITIONAL_READ] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_READ_EXT]) && is_array($data[self::FIELD_CONDITIONAL_READ_EXT])) ? $data[self::FIELD_CONDITIONAL_READ_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConditionalReadStatus) {
                    $this->setConditionalRead($value);
                } else if (is_array($value)) {
                    $this->setConditionalRead(new FHIRConditionalReadStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalRead(new FHIRConditionalReadStatus([FHIRConditionalReadStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalRead(new FHIRConditionalReadStatus($ext));
            } else {
                $this->setConditionalRead(new FHIRConditionalReadStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITIONAL_UPDATE, $data) || array_key_exists(self::FIELD_CONDITIONAL_UPDATE_EXT, $data)) {
            $value = $data[self::FIELD_CONDITIONAL_UPDATE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_UPDATE_EXT])) ? $data[self::FIELD_CONDITIONAL_UPDATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalUpdate($value);
                } else if (is_array($value)) {
                    $this->setConditionalUpdate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalUpdate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalUpdate(new FHIRBoolean($ext));
            } else {
                $this->setConditionalUpdate(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITIONAL_PATCH, $data) || array_key_exists(self::FIELD_CONDITIONAL_PATCH_EXT, $data)) {
            $value = $data[self::FIELD_CONDITIONAL_PATCH] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_PATCH_EXT]) && is_array($data[self::FIELD_CONDITIONAL_PATCH_EXT])) ? $data[self::FIELD_CONDITIONAL_PATCH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalPatch($value);
                } else if (is_array($value)) {
                    $this->setConditionalPatch(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalPatch(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalPatch(new FHIRBoolean($ext));
            } else {
                $this->setConditionalPatch(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITIONAL_DELETE, $data) || array_key_exists(self::FIELD_CONDITIONAL_DELETE_EXT, $data)) {
            $value = $data[self::FIELD_CONDITIONAL_DELETE] ?? null;
            $ext = (isset($data[self::FIELD_CONDITIONAL_DELETE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_DELETE_EXT])) ? $data[self::FIELD_CONDITIONAL_DELETE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConditionalDeleteStatus) {
                    $this->setConditionalDelete($value);
                } else if (is_array($value)) {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus([FHIRConditionalDeleteStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus($ext));
            } else {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_POLICY, $data) || array_key_exists(self::FIELD_REFERENCE_POLICY_EXT, $data)) {
            $value = $data[self::FIELD_REFERENCE_POLICY] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_POLICY_EXT]) && is_array($data[self::FIELD_REFERENCE_POLICY_EXT])) ? $data[self::FIELD_REFERENCE_POLICY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRReferenceHandlingPolicy) {
                    $this->addReferencePolicy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRReferenceHandlingPolicy) {
                            $this->addReferencePolicy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy(array_merge($v, $iext)));
                            } else {
                                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy(array_merge($ext, $value)));
                } else {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($iext));
                }
            } else {
                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy(null));
            }
        }
        if (array_key_exists(self::FIELD_SEARCH_INCLUDE, $data) || array_key_exists(self::FIELD_SEARCH_INCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_SEARCH_INCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_SEARCH_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_INCLUDE_EXT])) ? $data[self::FIELD_SEARCH_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSearchInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSearchInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSearchInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSearchInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchInclude(new FHIRString($iext));
                }
            } else {
                $this->addSearchInclude(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SEARCH_REV_INCLUDE, $data) || array_key_exists(self::FIELD_SEARCH_REV_INCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_SEARCH_REV_INCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_REV_INCLUDE_EXT])) ? $data[self::FIELD_SEARCH_REV_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addSearchRevInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addSearchRevInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSearchRevInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSearchRevInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchRevInclude(new FHIRString($iext));
                }
            } else {
                $this->addSearchRevInclude(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SEARCH_PARAM, $data)) {
            if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                foreach($data[self::FIELD_SEARCH_PARAM] as $v) {
                    if ($v instanceof FHIRCapabilityStatementSearchParam) {
                        $this->addSearchParam($v);
                    } else {
                        $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
                    }
                }
            } elseif ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($data[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (array_key_exists(self::FIELD_OPERATION, $data)) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if ($v instanceof FHIRCapabilityStatementOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRCapabilityStatementOperation($v));
                    }
                }
            } elseif ($data[self::FIELD_OPERATION] instanceof FHIRCapabilityStatementOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRCapabilityStatementOperation($data[self::FIELD_OPERATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceType
     */
    public function getType(): null|FHIRResourceType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceType $type
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRResourceType $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $type && !($type instanceof FHIRResourceType)) {
            $type = new FHIRResourceType($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TYPE])) {
            $this->_primitiveXmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A system-wide profile that is applied across *all* instances of the resource
     * supported by the system. For example, if declared on Observation, this profile
     * is the "superset" of capabilities for laboratory *and* vitals *and* other
     * domains. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getProfile(): null|FHIRCanonical
    {
        return $this->profile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A system-wide profile that is applied across *all* instances of the resource
     * supported by the system. For example, if declared on Observation, this profile
     * is the "superset" of capabilities for laboratory *and* vitals *and* other
     * domains. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $profile
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $profile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $profile && !($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical($profile);
        }
        $this->_trackValueSet($this->profile, $profile);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PROFILE])) {
            $this->_primitiveXmlLocations[self::FIELD_PROFILE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PROFILE][0] = $xmlLocation;
        $this->profile = $profile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles representing different use cases the system hosts/produces. A
     * supported profile is a statement about the functionality of the data and
     * services provided by the server (or the client) for supported use cases. For
     * example, a system can define and declare multiple Observation profiles for
     * laboratory observations, vital sign observations, etc. By declaring supported
     * profiles, systems provide a way to determine whether individual resources are
     * conformant. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getSupportedProfile(): null|array
    {
        return $this->supportedProfile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles representing different use cases the system hosts/produces. A
     * supported profile is a statement about the functionality of the data and
     * services provided by the server (or the client) for supported use cases. For
     * example, a system can define and declare multiple Observation profiles for
     * laboratory observations, vital sign observations, etc. By declaring supported
     * profiles, systems provide a way to determine whether individual resources are
     * conformant. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $supportedProfile
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSupportedProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $supportedProfile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $supportedProfile && !($supportedProfile instanceof FHIRCanonical)) {
            $supportedProfile = new FHIRCanonical($supportedProfile);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE])) {
            $this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE][] = $xmlLocation;
        $this->supportedProfile[] = $supportedProfile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles representing different use cases the system hosts/produces. A
     * supported profile is a statement about the functionality of the data and
     * services provided by the server (or the client) for supported use cases. For
     * example, a system can define and declare multiple Observation profiles for
     * laboratory observations, vital sign observations, etc. By declaring supported
     * profiles, systems provide a way to determine whether individual resources are
     * conformant. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical[] $supportedProfile
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSupportedProfile(array $supportedProfile = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE]);
        if ([] !== $this->supportedProfile) {
            $this->_trackValuesRemoved(count($this->supportedProfile));
            $this->supportedProfile = [];
        }
        if ([] === $supportedProfile) {
            return $this;
        }
        foreach($supportedProfile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addSupportedProfile($v, $xmlLocation);
            } else {
                $this->addSupportedProfile(new FHIRCanonical($v), $xmlLocation);
            }
        }
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
     * Additional information about the resource type used by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation(): null|FHIRMarkdown
    {
        return $this->documentation;
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
     * Additional information about the resource type used by the system.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $documentation
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDocumentation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $documentation && !($documentation instanceof FHIRMarkdown)) {
            $documentation = new FHIRMarkdown($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DOCUMENTATION])) {
            $this->_primitiveXmlLocations[self::FIELD_DOCUMENTATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DOCUMENTATION][0] = $xmlLocation;
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction(): null|array
    {
        return $this->interaction;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return static
     */
    public function addInteraction(null|FHIRCapabilityStatementInteraction $interaction = null): self
    {
        if (null === $interaction) {
            $interaction = new FHIRCapabilityStatementInteraction();
        }
        $this->_trackValueAdded();
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning(): null|FHIRResourceVersionPolicy
    {
        return $this->versioning;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return static
     */
    public function setVersioning(null|FHIRResourceVersionPolicy $versioning = null): self
    {
        if (null === $versioning) {
            $versioning = new FHIRResourceVersionPolicy();
        }
        $this->_trackValueSet($this->versioning, $versioning);
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getReadHistory(): null|FHIRBoolean
    {
        return $this->readHistory;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $readHistory
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReadHistory(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $readHistory && !($readHistory instanceof FHIRBoolean)) {
            $readHistory = new FHIRBoolean($readHistory);
        }
        $this->_trackValueSet($this->readHistory, $readHistory);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_READ_HISTORY])) {
            $this->_primitiveXmlLocations[self::FIELD_READ_HISTORY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_READ_HISTORY][0] = $xmlLocation;
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (that is, the client PUTs to a location where there
     * is no existing resource). Allowing this operation means that the server allows
     * the client to create new identities on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate(): null|FHIRBoolean
    {
        return $this->updateCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (that is, the client PUTs to a location where there
     * is no existing resource). Allowing this operation means that the server allows
     * the client to create new identities on the server.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $updateCreate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUpdateCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $updateCreate && !($updateCreate instanceof FHIRBoolean)) {
            $updateCreate = new FHIRBoolean($updateCreate);
        }
        $this->_trackValueSet($this->updateCreate, $updateCreate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_UPDATE_CREATE])) {
            $this->_primitiveXmlLocations[self::FIELD_UPDATE_CREATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_UPDATE_CREATE][0] = $xmlLocation;
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate(): null|FHIRBoolean
    {
        return $this->conditionalCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $conditionalCreate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setConditionalCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalCreate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $conditionalCreate && !($conditionalCreate instanceof FHIRBoolean)) {
            $conditionalCreate = new FHIRBoolean($conditionalCreate);
        }
        $this->_trackValueSet($this->conditionalCreate, $conditionalCreate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_CREATE])) {
            $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_CREATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_CREATE][0] = $xmlLocation;
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead(): null|FHIRConditionalReadStatus
    {
        return $this->conditionalRead;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @return static
     */
    public function setConditionalRead(null|FHIRConditionalReadStatus $conditionalRead = null): self
    {
        if (null === $conditionalRead) {
            $conditionalRead = new FHIRConditionalReadStatus();
        }
        $this->_trackValueSet($this->conditionalRead, $conditionalRead);
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate(): null|FHIRBoolean
    {
        return $this->conditionalUpdate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $conditionalUpdate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setConditionalUpdate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalUpdate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $conditionalUpdate && !($conditionalUpdate instanceof FHIRBoolean)) {
            $conditionalUpdate = new FHIRBoolean($conditionalUpdate);
        }
        $this->_trackValueSet($this->conditionalUpdate, $conditionalUpdate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_UPDATE])) {
            $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_UPDATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_UPDATE][0] = $xmlLocation;
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional patch.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getConditionalPatch(): null|FHIRBoolean
    {
        return $this->conditionalPatch;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional patch.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $conditionalPatch
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setConditionalPatch(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionalPatch = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $conditionalPatch && !($conditionalPatch instanceof FHIRBoolean)) {
            $conditionalPatch = new FHIRBoolean($conditionalPatch);
        }
        $this->_trackValueSet($this->conditionalPatch, $conditionalPatch);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_PATCH])) {
            $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_PATCH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_PATCH][0] = $xmlLocation;
        $this->conditionalPatch = $conditionalPatch;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete(): null|FHIRConditionalDeleteStatus
    {
        return $this->conditionalDelete;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return static
     */
    public function setConditionalDelete(null|FHIRConditionalDeleteStatus $conditionalDelete = null): self
    {
        if (null === $conditionalDelete) {
            $conditionalDelete = new FHIRConditionalDeleteStatus();
        }
        $this->_trackValueSet($this->conditionalDelete, $conditionalDelete);
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy(): null|array
    {
        return $this->referencePolicy;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return static
     */
    public function addReferencePolicy(null|FHIRReferenceHandlingPolicy $referencePolicy = null): self
    {
        if (null === $referencePolicy) {
            $referencePolicy = new FHIRReferenceHandlingPolicy();
        }
        $this->_trackValueAdded();
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getSearchInclude(): null|array
    {
        return $this->searchInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $searchInclude
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSearchInclude(null|string|FHIRStringPrimitive|FHIRString $searchInclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $searchInclude && !($searchInclude instanceof FHIRString)) {
            $searchInclude = new FHIRString($searchInclude);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE])) {
            $this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE][] = $xmlLocation;
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $searchInclude
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSearchInclude(array $searchInclude = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE]);
        if ([] !== $this->searchInclude) {
            $this->_trackValuesRemoved(count($this->searchInclude));
            $this->searchInclude = [];
        }
        if ([] === $searchInclude) {
            return $this;
        }
        foreach($searchInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchInclude($v, $xmlLocation);
            } else {
                $this->addSearchInclude(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude(): null|array
    {
        return $this->searchRevInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $searchRevInclude
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSearchRevInclude(null|string|FHIRStringPrimitive|FHIRString $searchRevInclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $searchRevInclude && !($searchRevInclude instanceof FHIRString)) {
            $searchRevInclude = new FHIRString($searchRevInclude);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE])) {
            $this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE][] = $xmlLocation;
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString[] $searchRevInclude
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSearchRevInclude(array $searchRevInclude = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE]);
        if ([] !== $this->searchRevInclude) {
            $this->_trackValuesRemoved(count($this->searchRevInclude));
            $this->searchRevInclude = [];
        }
        if ([] === $searchRevInclude) {
            return $this;
        }
        foreach($searchRevInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchRevInclude($v, $xmlLocation);
            } else {
                $this->addSearchRevInclude(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam(): null|array
    {
        return $this->searchParam;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(null|FHIRCapabilityStatementSearchParam $searchParam = null): self
    {
        if (null === $searchParam) {
            $searchParam = new FHIRCapabilityStatementSearchParam();
        }
        $this->_trackValueAdded();
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    public function getOperation(): null|array
    {
        return $this->operation;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server or Client for a particular version of FHIR that may be used as a
     * statement of actual server functionality or a statement of required or desired
     * server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation $operation
     * @return static
     */
    public function addOperation(null|FHIRCapabilityStatementOperation $operation = null): self
    {
        if (null === $operation) {
            $operation = new FHIRCapabilityStatementOperation();
        }
        $this->_trackValueAdded();
        $this->operation[] = $operation;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
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
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportedProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTED_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INTERACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSIONING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_HISTORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPDATE_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalRead())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_READ] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_UPDATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalPatch())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_PATCH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_DELETE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_POLICY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_REV_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_PARAM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTED_PROFILE])) {
            $v = $this->getSupportedProfile();
            foreach($validationRules[self::FIELD_SUPPORTED_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SUPPORTED_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTED_PROFILE])) {
                        $errs[self::FIELD_SUPPORTED_PROFILE] = [];
                    }
                    $errs[self::FIELD_SUPPORTED_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_INTERACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_VERSIONING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_READ_HISTORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_UPDATE_CREATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_CREATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_READ, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_UPDATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_UPDATE])) {
                        $errs[self::FIELD_CONDITIONAL_UPDATE] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_UPDATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_PATCH])) {
            $v = $this->getConditionalPatch();
            foreach($validationRules[self::FIELD_CONDITIONAL_PATCH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_PATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONAL_PATCH])) {
                        $errs[self::FIELD_CONDITIONAL_PATCH] = [];
                    }
                    $errs[self::FIELD_CONDITIONAL_PATCH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONAL_DELETE])) {
            $v = $this->getConditionalDelete();
            foreach($validationRules[self::FIELD_CONDITIONAL_DELETE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_CONDITIONAL_DELETE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_REFERENCE_POLICY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_INCLUDE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_REV_INCLUDE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_SEARCH_PARAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_PARAM])) {
                        $errs[self::FIELD_SEARCH_PARAM] = [];
                    }
                    $errs[self::FIELD_SEARCH_PARAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCapabilityStatementResource)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRResourceType::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->setProfile(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUPPORTED_PROFILE === $childName) {
                $type->addSupportedProfile(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOCUMENTATION === $childName) {
                $type->setDocumentation(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_INTERACTION === $childName) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERSIONING === $childName) {
                $type->setVersioning(FHIRResourceVersionPolicy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_READ_HISTORY === $childName) {
                $type->setReadHistory(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_UPDATE_CREATE === $childName) {
                $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITIONAL_CREATE === $childName) {
                $type->setConditionalCreate(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITIONAL_READ === $childName) {
                $type->setConditionalRead(FHIRConditionalReadStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITIONAL_UPDATE === $childName) {
                $type->setConditionalUpdate(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITIONAL_PATCH === $childName) {
                $type->setConditionalPatch(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITIONAL_DELETE === $childName) {
                $type->setConditionalDelete(FHIRConditionalDeleteStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE_POLICY === $childName) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SEARCH_INCLUDE === $childName) {
                $type->addSearchInclude(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEARCH_REV_INCLUDE === $childName) {
                $type->addSearchRevInclude(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEARCH_PARAM === $childName) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPERATION === $childName) {
                $type->addOperation(FHIRCapabilityStatementOperation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $pt = $type->getProfile();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setProfile((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUPPORTED_PROFILE])) {
            $type->addSupportedProfile((string)$attributes[self::FIELD_SUPPORTED_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOCUMENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_READ_HISTORY])) {
            $pt = $type->getReadHistory();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_READ_HISTORY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReadHistory((string)$attributes[self::FIELD_READ_HISTORY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_UPDATE_CREATE])) {
            $pt = $type->getUpdateCreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_UPDATE_CREATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUpdateCreate((string)$attributes[self::FIELD_UPDATE_CREATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_CREATE])) {
            $pt = $type->getConditionalCreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITIONAL_CREATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setConditionalCreate((string)$attributes[self::FIELD_CONDITIONAL_CREATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_UPDATE])) {
            $pt = $type->getConditionalUpdate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITIONAL_UPDATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setConditionalUpdate((string)$attributes[self::FIELD_CONDITIONAL_UPDATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONAL_PATCH])) {
            $pt = $type->getConditionalPatch();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITIONAL_PATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setConditionalPatch((string)$attributes[self::FIELD_CONDITIONAL_PATCH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SEARCH_INCLUDE])) {
            $type->addSearchInclude((string)$attributes[self::FIELD_SEARCH_INCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEARCH_REV_INCLUDE])) {
            $type->addSearchRevInclude((string)$attributes[self::FIELD_SEARCH_REV_INCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CapabilityStatementResource', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->writeAttribute(self::FIELD_PROFILE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSupportedProfile())) {
            $xw->writeAttribute(self::FIELD_SUPPORTED_PROFILE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSupportedProfile()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SUPPORTED_PROFILE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DOCUMENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDocumentation())) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_READ_HISTORY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReadHistory())) {
            $xw->writeAttribute(self::FIELD_READ_HISTORY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_UPDATE_CREATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUpdateCreate())) {
            $xw->writeAttribute(self::FIELD_UPDATE_CREATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_CREATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getConditionalCreate())) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_CREATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_UPDATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getConditionalUpdate())) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_UPDATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_PATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getConditionalPatch())) {
            $xw->writeAttribute(self::FIELD_CONDITIONAL_PATCH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSearchInclude())) {
            $xw->writeAttribute(self::FIELD_SEARCH_INCLUDE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSearchInclude()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SEARCH_INCLUDE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSearchRevInclude())) {
            $xw->writeAttribute(self::FIELD_SEARCH_REV_INCLUDE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSearchRevInclude()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SEARCH_REV_INCLUDE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->startElement(self::FIELD_PROFILE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUPPORTED_PROFILE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSupportedProfile())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SUPPORTED_PROFILE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DOCUMENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDocumentation())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getInteraction() as $v) {
            $xw->startElement(self::FIELD_INTERACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVersioning())) {
            $xw->startElement(self::FIELD_VERSIONING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_READ_HISTORY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReadHistory())) {
            $xw->startElement(self::FIELD_READ_HISTORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_UPDATE_CREATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUpdateCreate())) {
            $xw->startElement(self::FIELD_UPDATE_CREATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_CREATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getConditionalCreate())) {
            $xw->startElement(self::FIELD_CONDITIONAL_CREATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $xw->startElement(self::FIELD_CONDITIONAL_READ);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_UPDATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getConditionalUpdate())) {
            $xw->startElement(self::FIELD_CONDITIONAL_UPDATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITIONAL_PATCH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getConditionalPatch())) {
            $xw->startElement(self::FIELD_CONDITIONAL_PATCH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $xw->startElement(self::FIELD_CONDITIONAL_DELETE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReferencePolicy() as $v) {
            $xw->startElement(self::FIELD_REFERENCE_POLICY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEARCH_INCLUDE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSearchInclude())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SEARCH_INCLUDE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEARCH_REV_INCLUDE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSearchRevInclude())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SEARCH_REV_INCLUDE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getSearchParam() as $v) {
            $xw->startElement(self::FIELD_SEARCH_PARAM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOperation() as $v) {
            $xw->startElement(self::FIELD_OPERATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROFILE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportedProfile())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCanonical::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SUPPORTED_PROFILE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUPPORTED_PROFILE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOCUMENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            $out->{self::FIELD_INTERACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INTERACTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSIONING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRResourceVersionPolicy::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSIONING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READ_HISTORY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READ_HISTORY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UPDATE_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UPDATE_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalRead())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_READ} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConditionalReadStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_READ_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_UPDATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_UPDATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalPatch())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_PATCH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_PATCH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONDITIONAL_DELETE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRConditionalDeleteStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITIONAL_DELETE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRReferenceHandlingPolicy::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_REFERENCE_POLICY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_POLICY_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SEARCH_INCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEARCH_INCLUDE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SEARCH_REV_INCLUDE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEARCH_REV_INCLUDE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            $out->{self::FIELD_SEARCH_PARAM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SEARCH_PARAM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OPERATION}[] = $v;
            }
        }

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