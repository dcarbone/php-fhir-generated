<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalDeleteStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalReadStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReferenceHandlingPolicy;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceVersionPolicy;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server for a particular version of FHIR that may be used as a statement of
 * actual server functionality or a statement of required or desired server
 * implementation.
 *
 * Class FHIRCapabilityStatementResource
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE;
    const FIELD_CONDITIONAL_CREATE = 'conditionalCreate';
    const FIELD_CONDITIONAL_CREATE_EXT = '_conditionalCreate';
    const FIELD_CONDITIONAL_DELETE = 'conditionalDelete';
    const FIELD_CONDITIONAL_DELETE_EXT = '_conditionalDelete';
    const FIELD_CONDITIONAL_READ = 'conditionalRead';
    const FIELD_CONDITIONAL_READ_EXT = '_conditionalRead';
    const FIELD_CONDITIONAL_UPDATE = 'conditionalUpdate';
    const FIELD_CONDITIONAL_UPDATE_EXT = '_conditionalUpdate';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_INTERACTION = 'interaction';
    const FIELD_OPERATION = 'operation';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_READ_HISTORY = 'readHistory';
    const FIELD_READ_HISTORY_EXT = '_readHistory';
    const FIELD_REFERENCE_POLICY = 'referencePolicy';
    const FIELD_REFERENCE_POLICY_EXT = '_referencePolicy';
    const FIELD_SEARCH_INCLUDE = 'searchInclude';
    const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_SEARCH_REV_INCLUDE = 'searchRevInclude';
    const FIELD_SEARCH_REV_INCLUDE_EXT = '_searchRevInclude';
    const FIELD_SUPPORTED_PROFILE = 'supportedProfile';
    const FIELD_SUPPORTED_PROFILE_EXT = '_supportedProfile';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_UPDATE_CREATE = 'updateCreate';
    const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    const FIELD_VERSIONING = 'versioning';
    const FIELD_VERSIONING_EXT = '_versioning';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $conditionalCreate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalDeleteStatus
     */
    protected $conditionalDelete = null;

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalReadStatus
     */
    protected $conditionalRead = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $conditionalUpdate = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $documentation = null;

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    protected $interaction = [];

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    protected $operation = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $profile = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $readHistory = null;

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    protected $referencePolicy = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $searchInclude = [];

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    protected $searchParam = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $searchRevInclude = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles](profiling.html#profile-uses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $supportedProfile = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $type = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (that is, the client PUTs to a location where there
     * is no existing resource). Allowing this operation means that the server allows
     * the client to create new identities on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $updateCreate = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceVersionPolicy
     */
    protected $versioning = null;

    /**
     * Validation map for fields in type CapabilityStatement.Resource
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCapabilityStatementResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONDITIONAL_CREATE]) || isset($data[self::FIELD_CONDITIONAL_CREATE_EXT])) {
            if (isset($data[self::FIELD_CONDITIONAL_CREATE])) {
                $value = $data[self::FIELD_CONDITIONAL_CREATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITIONAL_CREATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_CREATE_EXT])) {
                $ext = $data[self::FIELD_CONDITIONAL_CREATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalCreate($value);
                } else if (is_array($value)) {
                    $this->setConditionalCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConditionalCreate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_DELETE]) || isset($data[self::FIELD_CONDITIONAL_DELETE_EXT])) {
            if (isset($data[self::FIELD_CONDITIONAL_DELETE])) {
                $value = $data[self::FIELD_CONDITIONAL_DELETE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITIONAL_DELETE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_DELETE_EXT])) {
                $ext = $data[self::FIELD_CONDITIONAL_DELETE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRConditionalDeleteStatus) {
                    $this->setConditionalDelete($value);
                } else if (is_array($value)) {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalDelete(new FHIRConditionalDeleteStatus([FHIRConditionalDeleteStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_READ]) || isset($data[self::FIELD_CONDITIONAL_READ_EXT])) {
            if (isset($data[self::FIELD_CONDITIONAL_READ])) {
                $value = $data[self::FIELD_CONDITIONAL_READ];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITIONAL_READ_EXT]) && is_array($data[self::FIELD_CONDITIONAL_READ_EXT])) {
                $ext = $data[self::FIELD_CONDITIONAL_READ_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRConditionalReadStatus) {
                    $this->setConditionalRead($value);
                } else if (is_array($value)) {
                    $this->setConditionalRead(new FHIRConditionalReadStatus(array_merge($ext, $value)));
                } else {
                    $this->setConditionalRead(new FHIRConditionalReadStatus([FHIRConditionalReadStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConditionalRead(new FHIRConditionalReadStatus($ext));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_UPDATE]) || isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT])) {
            if (isset($data[self::FIELD_CONDITIONAL_UPDATE])) {
                $value = $data[self::FIELD_CONDITIONAL_UPDATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_UPDATE_EXT])) {
                $ext = $data[self::FIELD_CONDITIONAL_UPDATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setConditionalUpdate($value);
                } else if (is_array($value)) {
                    $this->setConditionalUpdate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setConditionalUpdate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConditionalUpdate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION]) || isset($data[self::FIELD_DOCUMENTATION_EXT])) {
            if (isset($data[self::FIELD_DOCUMENTATION])) {
                $value = $data[self::FIELD_DOCUMENTATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) {
                $ext = $data[self::FIELD_DOCUMENTATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDocumentation(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_INTERACTION])) {
            if (is_array($data[self::FIELD_INTERACTION])) {
                foreach($data[self::FIELD_INTERACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementInteraction) {
                        $this->addInteraction($v);
                    } else {
                        $this->addInteraction(new FHIRCapabilityStatementInteraction($v));
                    }
                }
            } else if ($data[self::FIELD_INTERACTION] instanceof FHIRCapabilityStatementInteraction) {
                $this->addInteraction($data[self::FIELD_INTERACTION]);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction($data[self::FIELD_INTERACTION]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRCapabilityStatementOperation($v));
                    }
                }
            } else if ($data[self::FIELD_OPERATION] instanceof FHIRCapabilityStatementOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRCapabilityStatementOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_PROFILE]) || isset($data[self::FIELD_PROFILE_EXT])) {
            if (isset($data[self::FIELD_PROFILE])) {
                $value = $data[self::FIELD_PROFILE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) {
                $ext = $data[self::FIELD_PROFILE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setProfile($value);
                } else if (is_array($value)) {
                    $this->setProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProfile(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_READ_HISTORY]) || isset($data[self::FIELD_READ_HISTORY_EXT])) {
            if (isset($data[self::FIELD_READ_HISTORY])) {
                $value = $data[self::FIELD_READ_HISTORY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_READ_HISTORY_EXT]) && is_array($data[self::FIELD_READ_HISTORY_EXT])) {
                $ext = $data[self::FIELD_READ_HISTORY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReadHistory($value);
                } else if (is_array($value)) {
                    $this->setReadHistory(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReadHistory(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReadHistory(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_POLICY]) || isset($data[self::FIELD_REFERENCE_POLICY_EXT])) {
            if (isset($data[self::FIELD_REFERENCE_POLICY])) {
                $value = $data[self::FIELD_REFERENCE_POLICY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_POLICY_EXT]) && is_array($data[self::FIELD_REFERENCE_POLICY_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_POLICY_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEARCH_INCLUDE]) || isset($data[self::FIELD_SEARCH_INCLUDE_EXT])) {
            if (isset($data[self::FIELD_SEARCH_INCLUDE])) {
                $value = $data[self::FIELD_SEARCH_INCLUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEARCH_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_INCLUDE_EXT])) {
                $ext = $data[self::FIELD_SEARCH_INCLUDE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchInclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                foreach($data[self::FIELD_SEARCH_PARAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementSearchParam) {
                        $this->addSearchParam($v);
                    } else {
                        $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
                    }
                }
            } else if ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($data[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_REV_INCLUDE]) || isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT])) {
            if (isset($data[self::FIELD_SEARCH_REV_INCLUDE])) {
                $value = $data[self::FIELD_SEARCH_REV_INCLUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_REV_INCLUDE_EXT])) {
                $ext = $data[self::FIELD_SEARCH_REV_INCLUDE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSearchRevInclude(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SUPPORTED_PROFILE]) || isset($data[self::FIELD_SUPPORTED_PROFILE_EXT])) {
            if (isset($data[self::FIELD_SUPPORTED_PROFILE])) {
                $value = $data[self::FIELD_SUPPORTED_PROFILE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUPPORTED_PROFILE_EXT]) && is_array($data[self::FIELD_SUPPORTED_PROFILE_EXT])) {
                $ext = $data[self::FIELD_SUPPORTED_PROFILE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSupportedProfile(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_UPDATE_CREATE]) || isset($data[self::FIELD_UPDATE_CREATE_EXT])) {
            if (isset($data[self::FIELD_UPDATE_CREATE])) {
                $value = $data[self::FIELD_UPDATE_CREATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_UPDATE_CREATE_EXT]) && is_array($data[self::FIELD_UPDATE_CREATE_EXT])) {
                $ext = $data[self::FIELD_UPDATE_CREATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setUpdateCreate($value);
                } else if (is_array($value)) {
                    $this->setUpdateCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setUpdateCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUpdateCreate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VERSIONING]) || isset($data[self::FIELD_VERSIONING_EXT])) {
            if (isset($data[self::FIELD_VERSIONING])) {
                $value = $data[self::FIELD_VERSIONING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERSIONING_EXT]) && is_array($data[self::FIELD_VERSIONING_EXT])) {
                $ext = $data[self::FIELD_VERSIONING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRResourceVersionPolicy) {
                    $this->setVersioning($value);
                } else if (is_array($value)) {
                    $this->setVersioning(new FHIRResourceVersionPolicy(array_merge($ext, $value)));
                } else {
                    $this->setVersioning(new FHIRResourceVersionPolicy([FHIRResourceVersionPolicy::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVersioning(new FHIRResourceVersionPolicy($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<CapabilityStatementResource{$xmlns}></CapabilityStatementResource>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $conditionalCreate
     * @return static
     */
    public function setConditionalCreate($conditionalCreate = null)
    {
        if (null === $conditionalCreate) {
            $this->conditionalCreate = null;
            return $this;
        }
        if ($conditionalCreate instanceof FHIRBoolean) {
            $this->conditionalCreate = $conditionalCreate;
            return $this;
        }
        $this->conditionalCreate = new FHIRBoolean($conditionalCreate);
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return static
     */
    public function setConditionalDelete(FHIRConditionalDeleteStatus $conditionalDelete = null)
    {
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead()
    {
        return $this->conditionalRead;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @return static
     */
    public function setConditionalRead(FHIRConditionalReadStatus $conditionalRead = null)
    {
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return static
     */
    public function setConditionalUpdate($conditionalUpdate = null)
    {
        if (null === $conditionalUpdate) {
            $this->conditionalUpdate = null;
            return $this;
        }
        if ($conditionalUpdate instanceof FHIRBoolean) {
            $this->conditionalUpdate = $conditionalUpdate;
            return $this;
        }
        $this->conditionalUpdate = new FHIRBoolean($conditionalUpdate);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $documentation
     * @return static
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRMarkdown) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRMarkdown($documentation);
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return static
     */
    public function addInteraction(FHIRCapabilityStatementInteraction $interaction = null)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[] $interaction
     * @return static
     */
    public function setInteraction(array $interaction = [])
    {
        $this->interaction = [];
        if ([] === $interaction) {
            return $this;
        }
        foreach($interaction as $v) {
            if ($v instanceof FHIRCapabilityStatementInteraction) {
                $this->addInteraction($v);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation $operation
     * @return static
     */
    public function addOperation(FHIRCapabilityStatementOperation $operation = null)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type. Consult the definition of the operation for details
     * about how to invoke the operation, and the parameters.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[] $operation
     * @return static
     */
    public function setOperation(array $operation = [])
    {
        $this->operation = [];
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRCapabilityStatementOperation) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRCapabilityStatementOperation($v));
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
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function setProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = null;
            return $this;
        }
        if ($profile instanceof FHIRCanonical) {
            $this->profile = $profile;
            return $this;
        }
        $this->profile = new FHIRCanonical($profile);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getReadHistory()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $readHistory
     * @return static
     */
    public function setReadHistory($readHistory = null)
    {
        if (null === $readHistory) {
            $this->readHistory = null;
            return $this;
        }
        if ($readHistory instanceof FHIRBoolean) {
            $this->readHistory = $readHistory;
            return $this;
        }
        $this->readHistory = new FHIRBoolean($readHistory);
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy()
    {
        return $this->referencePolicy;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return static
     */
    public function addReferencePolicy(FHIRReferenceHandlingPolicy $referencePolicy = null)
    {
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReferenceHandlingPolicy[] $referencePolicy
     * @return static
     */
    public function setReferencePolicy(array $referencePolicy = [])
    {
        $this->referencePolicy = [];
        if ([] === $referencePolicy) {
            return $this;
        }
        foreach($referencePolicy as $v) {
            if ($v instanceof FHIRReferenceHandlingPolicy) {
                $this->addReferencePolicy($v);
            } else {
                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $searchInclude
     * @return static
     */
    public function addSearchInclude($searchInclude = null)
    {
        if (null === $searchInclude) {
            $this->searchInclude = [];
            return $this;
        }
        if ($searchInclude instanceof FHIRString) {
            $this->searchInclude[] = $searchInclude;
            return $this;
        }
        $this->searchInclude[] = new FHIRString($searchInclude);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $searchInclude
     * @return static
     */
    public function setSearchInclude(array $searchInclude = [])
    {
        $this->searchInclude = [];
        if ([] === $searchInclude) {
            return $this;
        }
        foreach($searchInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchInclude($v);
            } else {
                $this->addSearchInclude(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server for a particular version of FHIR that may be used as a statement of
     * actual server functionality or a statement of required or desired server
     * implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] $searchParam
     * @return static
     */
    public function setSearchParam(array $searchParam = [])
    {
        $this->searchParam = [];
        if ([] === $searchParam) {
            return $this;
        }
        foreach($searchParam as $v) {
            if ($v instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($v);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $searchRevInclude
     * @return static
     */
    public function addSearchRevInclude($searchRevInclude = null)
    {
        if (null === $searchRevInclude) {
            $this->searchRevInclude = [];
            return $this;
        }
        if ($searchRevInclude instanceof FHIRString) {
            $this->searchRevInclude[] = $searchRevInclude;
            return $this;
        }
        $this->searchRevInclude[] = new FHIRString($searchRevInclude);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $searchRevInclude
     * @return static
     */
    public function setSearchRevInclude(array $searchRevInclude = [])
    {
        $this->searchRevInclude = [];
        if ([] === $searchRevInclude) {
            return $this;
        }
        foreach($searchRevInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->addSearchRevInclude($v);
            } else {
                $this->addSearchRevInclude(new FHIRString($v));
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
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getSupportedProfile()
    {
        return $this->supportedProfile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles](profiling.html#profile-uses).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $supportedProfile
     * @return static
     */
    public function addSupportedProfile($supportedProfile = null)
    {
        if (null === $supportedProfile) {
            $this->supportedProfile = [];
            return $this;
        }
        if ($supportedProfile instanceof FHIRCanonical) {
            $this->supportedProfile[] = $supportedProfile;
            return $this;
        }
        $this->supportedProfile[] = new FHIRCanonical($supportedProfile);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles](profiling.html#profile-uses).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $supportedProfile
     * @return static
     */
    public function setSupportedProfile(array $supportedProfile = [])
    {
        $this->supportedProfile = [];
        if ([] === $supportedProfile) {
            return $this;
        }
        foreach($supportedProfile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addSupportedProfile($v);
            } else {
                $this->addSupportedProfile(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRCode) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRCode($type);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $updateCreate
     * @return static
     */
    public function setUpdateCreate($updateCreate = null)
    {
        if (null === $updateCreate) {
            $this->updateCreate = null;
            return $this;
        }
        if ($updateCreate instanceof FHIRBoolean) {
            $this->updateCreate = $updateCreate;
            return $this;
        }
        $this->updateCreate = new FHIRBoolean($updateCreate);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning()
    {
        return $this->versioning;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return static
     */
    public function setVersioning(FHIRResourceVersionPolicy $versioning = null)
    {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getConditionalCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITIONAL_DELETE] = $fieldErrs;
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
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_HISTORY] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEARCH_PARAM, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSupportedProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTED_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPDATE_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSIONING] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRCapabilityStatementResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCapabilityStatementResource;
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->conditionalCreate)) {
            $type->setConditionalCreate(FHIRBoolean::xmlUnserialize($children->conditionalCreate));
        }
        if (isset($attributes->conditionalCreate)) {
            $pt = $type->getConditionalCreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->conditionalCreate);
            } else {
                $type->setConditionalCreate((string)$attributes->conditionalCreate);
            }
        }
        if (isset($children->conditionalDelete)) {
            $type->setConditionalDelete(FHIRConditionalDeleteStatus::xmlUnserialize($children->conditionalDelete));
        }
        if (isset($children->conditionalRead)) {
            $type->setConditionalRead(FHIRConditionalReadStatus::xmlUnserialize($children->conditionalRead));
        }
        if (isset($children->conditionalUpdate)) {
            $type->setConditionalUpdate(FHIRBoolean::xmlUnserialize($children->conditionalUpdate));
        }
        if (isset($attributes->conditionalUpdate)) {
            $pt = $type->getConditionalUpdate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->conditionalUpdate);
            } else {
                $type->setConditionalUpdate((string)$attributes->conditionalUpdate);
            }
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRMarkdown::xmlUnserialize($children->documentation));
        }
        if (isset($attributes->documentation)) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->documentation);
            } else {
                $type->setDocumentation((string)$attributes->documentation);
            }
        }
        if (isset($children->interaction)) {
            foreach($children->interaction as $child) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::xmlUnserialize($child));
            }
        }
        if (isset($children->operation)) {
            foreach($children->operation as $child) {
                $type->addOperation(FHIRCapabilityStatementOperation::xmlUnserialize($child));
            }
        }
        if (isset($children->profile)) {
            $type->setProfile(FHIRCanonical::xmlUnserialize($children->profile));
        }
        if (isset($attributes->profile)) {
            $pt = $type->getProfile();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->profile);
            } else {
                $type->setProfile((string)$attributes->profile);
            }
        }
        if (isset($children->readHistory)) {
            $type->setReadHistory(FHIRBoolean::xmlUnserialize($children->readHistory));
        }
        if (isset($attributes->readHistory)) {
            $pt = $type->getReadHistory();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->readHistory);
            } else {
                $type->setReadHistory((string)$attributes->readHistory);
            }
        }
        if (isset($children->referencePolicy)) {
            foreach($children->referencePolicy as $child) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::xmlUnserialize($child));
            }
        }
        if (isset($children->searchInclude)) {
            foreach($children->searchInclude as $child) {
                $type->addSearchInclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->searchParam)) {
            foreach($children->searchParam as $child) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::xmlUnserialize($child));
            }
        }
        if (isset($children->searchRevInclude)) {
            foreach($children->searchRevInclude as $child) {
                $type->addSearchRevInclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->supportedProfile)) {
            foreach($children->supportedProfile as $child) {
                $type->addSupportedProfile(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
        }
        if (isset($attributes->type)) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->type);
            } else {
                $type->setType((string)$attributes->type);
            }
        }
        if (isset($children->updateCreate)) {
            $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($children->updateCreate));
        }
        if (isset($attributes->updateCreate)) {
            $pt = $type->getUpdateCreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->updateCreate);
            } else {
                $type->setUpdateCreate((string)$attributes->updateCreate);
            }
        }
        if (isset($children->versioning)) {
            $type->setVersioning(FHIRResourceVersionPolicy::xmlUnserialize($children->versioning));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getConditionalCreate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITIONAL_CREATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITIONAL_DELETE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITIONAL_READ, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITIONAL_UPDATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReadHistory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_READ_HISTORY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_POLICY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_INCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_PARAM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_REV_INCLUDE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSupportedProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTED_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UPDATE_CREATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersioning())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSIONING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getConditionalCreate())) {
            $a[self::FIELD_CONDITIONAL_CREATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_CONDITIONAL_CREATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $a[self::FIELD_CONDITIONAL_DELETE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConditionalDeleteStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConditionalDeleteStatus::FIELD_VALUE]);
                $a[self::FIELD_CONDITIONAL_DELETE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $a[self::FIELD_CONDITIONAL_READ] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConditionalReadStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConditionalReadStatus::FIELD_VALUE]);
                $a[self::FIELD_CONDITIONAL_READ_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $a[self::FIELD_CONDITIONAL_UPDATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_CONDITIONAL_UPDATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DOCUMENTATION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            $a[self::FIELD_INTERACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INTERACTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $a[self::FIELD_OPERATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OPERATION][] = $v;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCanonical::FIELD_VALUE]);
                $a[self::FIELD_PROFILE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReadHistory())) {
            $a[self::FIELD_READ_HISTORY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_READ_HISTORY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            $a[self::FIELD_REFERENCE_POLICY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REFERENCE_POLICY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRReferenceHandlingPolicy::FIELD_VALUE]) || array_key_exists(FHIRReferenceHandlingPolicy::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRReferenceHandlingPolicy::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_REFERENCE_POLICY_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            $a[self::FIELD_SEARCH_INCLUDE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SEARCH_INCLUDE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SEARCH_INCLUDE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            $a[self::FIELD_SEARCH_PARAM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SEARCH_PARAM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            $a[self::FIELD_SEARCH_REV_INCLUDE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SEARCH_REV_INCLUDE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SEARCH_REV_INCLUDE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSupportedProfile())) {
            $a[self::FIELD_SUPPORTED_PROFILE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTED_PROFILE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SUPPORTED_PROFILE_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $a[self::FIELD_UPDATE_CREATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_UPDATE_CREATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVersioning())) {
            $a[self::FIELD_VERSIONING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRResourceVersionPolicy::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRResourceVersionPolicy::FIELD_VALUE]);
                $a[self::FIELD_VERSIONING_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}