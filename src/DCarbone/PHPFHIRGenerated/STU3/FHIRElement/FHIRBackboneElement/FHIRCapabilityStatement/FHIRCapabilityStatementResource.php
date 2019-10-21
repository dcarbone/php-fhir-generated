<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalDeleteStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalReadStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceVersionPolicy;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementResource
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
    const FIELD_PROFILE = 'profile';
    const FIELD_READ_HISTORY = 'readHistory';
    const FIELD_READ_HISTORY_EXT = '_readHistory';
    const FIELD_REFERENCE_POLICY = 'referencePolicy';
    const FIELD_REFERENCE_POLICY_EXT = '_referencePolicy';
    const FIELD_SEARCH_INCLUDE = 'searchInclude';
    const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_SEARCH_REV_INCLUDE = 'searchRevInclude';
    const FIELD_SEARCH_REV_INCLUDE_EXT = '_searchRevInclude';
    const FIELD_TYPE = 'type';
    const FIELD_UPDATE_CREATE = 'updateCreate';
    const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    const FIELD_VERSIONING = 'versioning';
    const FIELD_VERSIONING_EXT = '_versioning';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $conditionalCreate = null;
    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalDeleteStatus
     */
    private $conditionalDelete = null;
    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalReadStatus
     */
    private $conditionalRead = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $conditionalUpdate = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $documentation = null;
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    private $interaction = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $profile = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $readHistory = null;
    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    private $referencePolicy = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $searchInclude = [];
    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    private $searchParam = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $searchRevInclude = [];
    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType
     */
    private $type = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $updateCreate = null;
    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceVersionPolicy
     */
    private $versioning = null;

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
        if (isset($data[self::FIELD_CONDITIONAL_CREATE])) {
            $ext = (isset($data[self::FIELD_CONDITIONAL_CREATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_CREATE_EXT]))
                ? $data[self::FIELD_CONDITIONAL_CREATE_EXT]
                : null;
            if ($data[self::FIELD_CONDITIONAL_CREATE] instanceof FHIRBoolean) {
                $this->setConditionalCreate($data[self::FIELD_CONDITIONAL_CREATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITIONAL_CREATE])) {
                $this->setConditionalCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_CONDITIONAL_CREATE]] + $ext));
            } else {
                $this->setConditionalCreate(new FHIRBoolean($data[self::FIELD_CONDITIONAL_CREATE]));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_DELETE])) {
            $ext = (isset($data[self::FIELD_CONDITIONAL_DELETE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_DELETE_EXT]))
                ? $data[self::FIELD_CONDITIONAL_DELETE_EXT]
                : null;
            if ($data[self::FIELD_CONDITIONAL_DELETE] instanceof FHIRConditionalDeleteStatus) {
                $this->setConditionalDelete($data[self::FIELD_CONDITIONAL_DELETE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITIONAL_DELETE])) {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus([FHIRConditionalDeleteStatus::FIELD_VALUE => $data[self::FIELD_CONDITIONAL_DELETE]] + $ext));
            } else {
                $this->setConditionalDelete(new FHIRConditionalDeleteStatus($data[self::FIELD_CONDITIONAL_DELETE]));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_READ])) {
            $ext = (isset($data[self::FIELD_CONDITIONAL_READ_EXT]) && is_array($data[self::FIELD_CONDITIONAL_READ_EXT]))
                ? $data[self::FIELD_CONDITIONAL_READ_EXT]
                : null;
            if ($data[self::FIELD_CONDITIONAL_READ] instanceof FHIRConditionalReadStatus) {
                $this->setConditionalRead($data[self::FIELD_CONDITIONAL_READ]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITIONAL_READ])) {
                $this->setConditionalRead(new FHIRConditionalReadStatus([FHIRConditionalReadStatus::FIELD_VALUE => $data[self::FIELD_CONDITIONAL_READ]] + $ext));
            } else {
                $this->setConditionalRead(new FHIRConditionalReadStatus($data[self::FIELD_CONDITIONAL_READ]));
            }
        }
        if (isset($data[self::FIELD_CONDITIONAL_UPDATE])) {
            $ext = (isset($data[self::FIELD_CONDITIONAL_UPDATE_EXT]) && is_array($data[self::FIELD_CONDITIONAL_UPDATE_EXT]))
                ? $data[self::FIELD_CONDITIONAL_UPDATE_EXT]
                : null;
            if ($data[self::FIELD_CONDITIONAL_UPDATE] instanceof FHIRBoolean) {
                $this->setConditionalUpdate($data[self::FIELD_CONDITIONAL_UPDATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONDITIONAL_UPDATE])) {
                $this->setConditionalUpdate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_CONDITIONAL_UPDATE]] + $ext));
            } else {
                $this->setConditionalUpdate(new FHIRBoolean($data[self::FIELD_CONDITIONAL_UPDATE]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRMarkdown) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRMarkdown($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_INTERACTION])) {
            if (is_array($data[self::FIELD_INTERACTION])) {
                foreach($data[self::FIELD_INTERACTION] as $v) {
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
        if (isset($data[self::FIELD_PROFILE])) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRReference) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRReference($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_READ_HISTORY])) {
            $ext = (isset($data[self::FIELD_READ_HISTORY_EXT]) && is_array($data[self::FIELD_READ_HISTORY_EXT]))
                ? $data[self::FIELD_READ_HISTORY_EXT]
                : null;
            if ($data[self::FIELD_READ_HISTORY] instanceof FHIRBoolean) {
                $this->setReadHistory($data[self::FIELD_READ_HISTORY]);
            } elseif ($ext && is_scalar($data[self::FIELD_READ_HISTORY])) {
                $this->setReadHistory(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_READ_HISTORY]] + $ext));
            } else {
                $this->setReadHistory(new FHIRBoolean($data[self::FIELD_READ_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_POLICY])) {
            $ext = (isset($data[self::FIELD_REFERENCE_POLICY_EXT]) && is_array($data[self::FIELD_REFERENCE_POLICY_EXT]))
                ? $data[self::FIELD_REFERENCE_POLICY_EXT]
                : null;
            if (is_array($data[self::FIELD_REFERENCE_POLICY])) {
                foreach($data[self::FIELD_REFERENCE_POLICY] as $i => $v) {
                    if ($v instanceof FHIRReferenceHandlingPolicy) {
                        $this->addReferencePolicy($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCE_POLICY] instanceof FHIRReferenceHandlingPolicy) {
                $this->addReferencePolicy($data[self::FIELD_REFERENCE_POLICY]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE_POLICY])) {
                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy([FHIRReferenceHandlingPolicy::FIELD_VALUE => $data[self::FIELD_REFERENCE_POLICY]] + $ext));
            } else {
                $this->addReferencePolicy(new FHIRReferenceHandlingPolicy($data[self::FIELD_REFERENCE_POLICY]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_INCLUDE])) {
            $ext = (isset($data[self::FIELD_SEARCH_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_INCLUDE_EXT]))
                ? $data[self::FIELD_SEARCH_INCLUDE_EXT]
                : null;
            if (is_array($data[self::FIELD_SEARCH_INCLUDE])) {
                foreach($data[self::FIELD_SEARCH_INCLUDE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addSearchInclude($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSearchInclude(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_SEARCH_INCLUDE] instanceof FHIRString) {
                $this->addSearchInclude($data[self::FIELD_SEARCH_INCLUDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEARCH_INCLUDE])) {
                $this->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SEARCH_INCLUDE]] + $ext));
            } else {
                $this->addSearchInclude(new FHIRString($data[self::FIELD_SEARCH_INCLUDE]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                foreach($data[self::FIELD_SEARCH_PARAM] as $v) {
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
        if (isset($data[self::FIELD_SEARCH_REV_INCLUDE])) {
            $ext = (isset($data[self::FIELD_SEARCH_REV_INCLUDE_EXT]) && is_array($data[self::FIELD_SEARCH_REV_INCLUDE_EXT]))
                ? $data[self::FIELD_SEARCH_REV_INCLUDE_EXT]
                : null;
            if (is_array($data[self::FIELD_SEARCH_REV_INCLUDE])) {
                foreach($data[self::FIELD_SEARCH_REV_INCLUDE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addSearchRevInclude($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSearchRevInclude(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_SEARCH_REV_INCLUDE] instanceof FHIRString) {
                $this->addSearchRevInclude($data[self::FIELD_SEARCH_REV_INCLUDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEARCH_REV_INCLUDE])) {
                $this->addSearchRevInclude(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SEARCH_REV_INCLUDE]] + $ext));
            } else {
                $this->addSearchRevInclude(new FHIRString($data[self::FIELD_SEARCH_REV_INCLUDE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $this->setType($data[self::FIELD_TYPE]);
        }
        if (isset($data[self::FIELD_UPDATE_CREATE])) {
            $ext = (isset($data[self::FIELD_UPDATE_CREATE_EXT]) && is_array($data[self::FIELD_UPDATE_CREATE_EXT]))
                ? $data[self::FIELD_UPDATE_CREATE_EXT]
                : null;
            if ($data[self::FIELD_UPDATE_CREATE] instanceof FHIRBoolean) {
                $this->setUpdateCreate($data[self::FIELD_UPDATE_CREATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_UPDATE_CREATE])) {
                $this->setUpdateCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_UPDATE_CREATE]] + $ext));
            } else {
                $this->setUpdateCreate(new FHIRBoolean($data[self::FIELD_UPDATE_CREATE]));
            }
        }
        if (isset($data[self::FIELD_VERSIONING])) {
            $ext = (isset($data[self::FIELD_VERSIONING_EXT]) && is_array($data[self::FIELD_VERSIONING_EXT]))
                ? $data[self::FIELD_VERSIONING_EXT]
                : null;
            if ($data[self::FIELD_VERSIONING] instanceof FHIRResourceVersionPolicy) {
                $this->setVersioning($data[self::FIELD_VERSIONING]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSIONING])) {
                $this->setVersioning(new FHIRResourceVersionPolicy([FHIRResourceVersionPolicy::FIELD_VALUE => $data[self::FIELD_VERSIONING]] + $ext));
            } else {
                $this->setVersioning(new FHIRResourceVersionPolicy($data[self::FIELD_VERSIONING]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional create.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $conditionalCreate
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional delete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalDeleteStatus $conditionalDelete
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function setConditionalDelete(FHIRConditionalDeleteStatus $conditionalDelete = null)
    {
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead()
    {
        return $this->conditionalRead;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code that indicates how the server supports conditional read.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalReadStatus $conditionalRead
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function setConditionalRead(FHIRConditionalReadStatus $conditionalRead = null)
    {
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag that indicates that the server supports conditional update.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $conditionalUpdate
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Additional information about the resource type used by the system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $documentation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction $interaction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function addInteraction(FHIRCapabilityStatementInteraction $interaction = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[] $interaction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's overall support for
     * the resource, including any constraints on cardinality, bindings, lengths or
     * other limitations. See further discussion in [Using
     * Profiles](profiling.html#profile-uses).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $profile
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function setProfile(FHIRReference $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $readHistory
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy()
    {
        return $this->referencePolicy;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy $referencePolicy
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function addReferencePolicy(FHIRReferenceHandlingPolicy $referencePolicy = null)
    {
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of flags that defines how references are supported.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy[] $referencePolicy
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $searchInclude
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $searchInclude
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters for implementations to support and/or make use of - either
     * references to ones defined in the specification, or additional ones defined
     * for/by the implementation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] $searchParam
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $searchRevInclude
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of _revinclude (reverse include) values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $searchRevInclude
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRResourceType) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRResourceType($type);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that the server allows or needs to allow the client to create
     * new identities on the server (e.g. that is, the client PUTs to a location where
     * there is no existing resource). Allowing this operation means that the server
     * allows the client to create new identities on the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $updateCreate
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * How the system supports versioning for a resource.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This field is set to no-version to specify that the system does not support
     * (server) or use (client) versioning for this resource type. If this has some
     * other value, the server must at least correctly track and populate the versionId
     * meta-property on resources. If the value is 'versioned-update', then the server
     * supports all the versioning features, including using e-tags for version
     * integrity in the API.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceVersionPolicy $versioning
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function setVersioning(FHIRResourceVersionPolicy $versioning = null)
    {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
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
                'FHIRCapabilityStatementResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource or null, %s seen.',
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
        if (isset($attributes->conditionalCreate)) {
            $type->setConditionalCreate((string)$attributes->conditionalCreate);
        }
        if (isset($children->conditionalCreate)) {
            $type->setConditionalCreate(FHIRBoolean::xmlUnserialize($children->conditionalCreate));
        }
        if (isset($children->conditionalDelete)) {
            $type->setConditionalDelete(FHIRConditionalDeleteStatus::xmlUnserialize($children->conditionalDelete));
        }
        if (isset($children->conditionalRead)) {
            $type->setConditionalRead(FHIRConditionalReadStatus::xmlUnserialize($children->conditionalRead));
        }
        if (isset($attributes->conditionalUpdate)) {
            $type->setConditionalUpdate((string)$attributes->conditionalUpdate);
        }
        if (isset($children->conditionalUpdate)) {
            $type->setConditionalUpdate(FHIRBoolean::xmlUnserialize($children->conditionalUpdate));
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRMarkdown::xmlUnserialize($children->documentation));
        }
        if (isset($children->interaction)) {
            foreach($children->interaction as $child) {
                $type->addInteraction(FHIRCapabilityStatementInteraction::xmlUnserialize($child));
            }
        }
        if (isset($children->profile)) {
            $type->setProfile(FHIRReference::xmlUnserialize($children->profile));
        }
        if (isset($attributes->readHistory)) {
            $type->setReadHistory((string)$attributes->readHistory);
        }
        if (isset($children->readHistory)) {
            $type->setReadHistory(FHIRBoolean::xmlUnserialize($children->readHistory));
        }
        if (isset($children->referencePolicy)) {
            foreach($children->referencePolicy as $child) {
                $type->addReferencePolicy(FHIRReferenceHandlingPolicy::xmlUnserialize($child));
            }
        }
        if (isset($attributes->searchInclude)) {
            $type->addSearchInclude((string)$attributes->searchInclude);
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
        if (isset($attributes->searchRevInclude)) {
            $type->addSearchRevInclude((string)$attributes->searchRevInclude);
        }
        if (isset($children->searchRevInclude)) {
            foreach($children->searchRevInclude as $child) {
                $type->addSearchRevInclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRResourceType::xmlUnserialize($children->type));
        }
        if (isset($attributes->updateCreate)) {
            $type->setUpdateCreate((string)$attributes->updateCreate);
        }
        if (isset($children->updateCreate)) {
            $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($children->updateCreate));
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
        if (null !== ($v = $this->getType())) {
            $sxe->addAttribute(self::FIELD_TYPE, (string)$v);
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
            $a[self::FIELD_CONDITIONAL_CREATE_EXT] = $v;
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $a[self::FIELD_CONDITIONAL_DELETE] = $v;
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $a[self::FIELD_CONDITIONAL_READ] = $v;
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $a[self::FIELD_CONDITIONAL_UPDATE] = $v->getValue();
            $a[self::FIELD_CONDITIONAL_UPDATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $v->getValue();
            $a[self::FIELD_DOCUMENTATION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getInteraction())) {
            $a[self::FIELD_INTERACTION] = $vs;
        }
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = $v;
        }
        if (null !== ($v = $this->getReadHistory())) {
            $a[self::FIELD_READ_HISTORY] = $v->getValue();
            $a[self::FIELD_READ_HISTORY_EXT] = $v;
        }
        if ([] !== ($vs = $this->getReferencePolicy())) {
            $a[self::FIELD_REFERENCE_POLICY] = $vs;
        }
        if ([] !== ($vs = $this->getSearchInclude())) {
            $a[self::FIELD_SEARCH_INCLUDE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SEARCH_INCLUDE][] = $v->getValue();
                $a[self::FIELD_SEARCH_INCLUDE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            $a[self::FIELD_SEARCH_PARAM] = $vs;
        }
        if ([] !== ($vs = $this->getSearchRevInclude())) {
            $a[self::FIELD_SEARCH_REV_INCLUDE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SEARCH_REV_INCLUDE][] = $v->getValue();
                $a[self::FIELD_SEARCH_REV_INCLUDE_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $a[self::FIELD_UPDATE_CREATE] = $v->getValue();
            $a[self::FIELD_UPDATE_CREATE_EXT] = $v;
        }
        if (null !== ($v = $this->getVersioning())) {
            $a[self::FIELD_VERSIONING] = $v;
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