<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus;
use PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy;
use PHPFHIRGenerated\FHIRElement\FHIRResourceType;
use PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementResource
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementResource extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CapabilityStatement.Resource';

    /**
     * A flag that indicates that the server supports conditional create.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $conditionalCreate = null;

    /**
     * A code that indicates how the server supports conditional delete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus
     */
    private $conditionalDelete = null;

    /**
     * A code that indicates how the server supports conditional read.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus
     */
    private $conditionalRead = null;

    /**
     * A flag that indicates that the server supports conditional update.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $conditionalUpdate = null;

    /**
     * Additional information about the resource type used by the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $documentation = null;

    /**
     * Identifies a restful operation supported by the solution.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    private $interaction = [];

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $profile = null;

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $readHistory = null;

    /**
     * A set of flags that defines how references are supported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    private $referencePolicy = [];

    /**
     * A list of _include values supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $searchInclude = [];

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    private $searchParam = [];

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $searchRevInclude = [];

    /**
     * A type of resource exposed via the restful interface.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceType
     */
    private $type = null;

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $updateCreate = null;

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy
     */
    private $versioning = null;

    /**
     * FHIRCapabilityStatementResource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['conditionalCreate'])) {
                $value = $data['conditionalCreate'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"conditionalCreate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setConditionalCreate($value);
            }
            if (isset($data['conditionalDelete'])) {
                $value = $data['conditionalDelete'];
                if (is_array($value)) {
                    $value = new FHIRConditionalDeleteStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConditionalDeleteStatus($value);
                }
                if (!($value instanceof FHIRConditionalDeleteStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"conditionalDelete\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setConditionalDelete($value);
            }
            if (isset($data['conditionalRead'])) {
                $value = $data['conditionalRead'];
                if (is_array($value)) {
                    $value = new FHIRConditionalReadStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConditionalReadStatus($value);
                }
                if (!($value instanceof FHIRConditionalReadStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"conditionalRead\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setConditionalRead($value);
            }
            if (isset($data['conditionalUpdate'])) {
                $value = $data['conditionalUpdate'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"conditionalUpdate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setConditionalUpdate($value);
            }
            if (isset($data['documentation'])) {
                $value = $data['documentation'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"documentation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value)); 
                }
                $this->setDocumentation($value);
            }
            if (isset($data['interaction'])) {
                $value = $data['interaction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementInteraction($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementInteraction)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Collection field \"interaction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addInteraction($v);
                    }
                }
            }
            if (isset($data['profile'])) {
                $value = $data['profile'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"profile\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setProfile($value);
            }
            if (isset($data['readHistory'])) {
                $value = $data['readHistory'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"readHistory\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setReadHistory($value);
            }
            if (isset($data['referencePolicy'])) {
                $value = $data['referencePolicy'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReferenceHandlingPolicy($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRReferenceHandlingPolicy($v);
                        }
                        if (!($v instanceof FHIRReferenceHandlingPolicy)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Collection field \"referencePolicy\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReferencePolicy($v);
                    }
                }
            }
            if (isset($data['searchInclude'])) {
                $value = $data['searchInclude'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Collection field \"searchInclude\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addSearchInclude($v);
                    }
                }
            }
            if (isset($data['searchParam'])) {
                $value = $data['searchParam'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementSearchParam($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementSearchParam)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Collection field \"searchParam\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addSearchParam($v);
                    }
                }
            }
            if (isset($data['searchRevInclude'])) {
                $value = $data['searchRevInclude'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Collection field \"searchRevInclude\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addSearchRevInclude($v);
                    }
                }
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRResourceType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRResourceType($value);
                }
                if (!($value instanceof FHIRResourceType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
            if (isset($data['updateCreate'])) {
                $value = $data['updateCreate'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"updateCreate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setUpdateCreate($value);
            }
            if (isset($data['versioning'])) {
                $value = $data['versioning'];
                if (is_array($value)) {
                    $value = new FHIRResourceVersionPolicy($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRResourceVersionPolicy($value);
                }
                if (!($value instanceof FHIRResourceVersionPolicy)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Property \"versioning\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy or data to construct type, saw ".gettype($value)); 
                }
                $this->setVersioning($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setConditionalCreate($conditionalCreate)
    {
        if (null === $conditionalCreate) {
            return $this; 
        }
        if (is_scalar($conditionalCreate)) {
            $conditionalCreate = new FHIRBoolean($conditionalCreate);
        }
        if (!($conditionalCreate instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setConditionalCreate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($conditionalCreate)
            ));
        }
        $this->conditionalCreate = $conditionalCreate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional create.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getConditionalCreate()
    {
        return $this->conditionalCreate;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus
     * @return $this
     */
    public function setConditionalDelete($conditionalDelete)
    {
        if (null === $conditionalDelete) {
            return $this; 
        }
        if (is_scalar($conditionalDelete)) {
            $conditionalDelete = new FHIRConditionalDeleteStatus($conditionalDelete);
        }
        if (!($conditionalDelete instanceof FHIRConditionalDeleteStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setConditionalDelete - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus or appropriate scalar value, %s seen.',
                gettype($conditionalDelete)
            ));
        }
        $this->conditionalDelete = $conditionalDelete;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional delete.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConditionalDeleteStatus
     */
    public function getConditionalDelete()
    {
        return $this->conditionalDelete;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus
     * @return $this
     */
    public function setConditionalRead($conditionalRead)
    {
        if (null === $conditionalRead) {
            return $this; 
        }
        if (is_scalar($conditionalRead)) {
            $conditionalRead = new FHIRConditionalReadStatus($conditionalRead);
        }
        if (!($conditionalRead instanceof FHIRConditionalReadStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setConditionalRead - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus or appropriate scalar value, %s seen.',
                gettype($conditionalRead)
            ));
        }
        $this->conditionalRead = $conditionalRead;
        return $this;
    }

    /**
     * A code that indicates how the server supports conditional read.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConditionalReadStatus
     */
    public function getConditionalRead()
    {
        return $this->conditionalRead;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setConditionalUpdate($conditionalUpdate)
    {
        if (null === $conditionalUpdate) {
            return $this; 
        }
        if (is_scalar($conditionalUpdate)) {
            $conditionalUpdate = new FHIRBoolean($conditionalUpdate);
        }
        if (!($conditionalUpdate instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setConditionalUpdate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($conditionalUpdate)
            ));
        }
        $this->conditionalUpdate = $conditionalUpdate;
        return $this;
    }

    /**
     * A flag that indicates that the server supports conditional update.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getConditionalUpdate()
    {
        return $this->conditionalUpdate;
    }

    /**
     * Additional information about the resource type used by the system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        if (null === $documentation) {
            return $this; 
        }
        if (is_scalar($documentation)) {
            $documentation = new FHIRMarkdown($documentation);
        }
        if (!($documentation instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Additional information about the resource type used by the system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction
     * @return $this
     */
    public function addInteraction(FHIRCapabilityStatementInteraction $interaction = null)
    {
        if (null === $interaction) {
            return $this; 
        }
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * Identifies a restful operation supported by the solution.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProfile(FHIRReference $profile = null)
    {
        if (null === $profile) {
            return $this; 
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A specification of the profile that describes the solution's overall support for the resource, including any constraints on cardinality, bindings, lengths or other limitations. See further discussion in [Using Profiles](profiling.html#profile-uses).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setReadHistory($readHistory)
    {
        if (null === $readHistory) {
            return $this; 
        }
        if (is_scalar($readHistory)) {
            $readHistory = new FHIRBoolean($readHistory);
        }
        if (!($readHistory instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setReadHistory - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($readHistory)
            ));
        }
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * A flag for whether the server is able to return past versions as part of the vRead operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * A set of flags that defines how references are supported.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy
     * @return $this
     */
    public function addReferencePolicy($referencePolicy)
    {
        if (null === $referencePolicy) {
            return $this; 
        }
        if (is_scalar($referencePolicy)) {
            $referencePolicy = new FHIRReferenceHandlingPolicy($referencePolicy);
        }
        if (!($referencePolicy instanceof FHIRReferenceHandlingPolicy)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::addReferencePolicy - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy or appropriate scalar value, %s seen.',
                gettype($referencePolicy)
            ));
        }
        $this->referencePolicy[] = $referencePolicy;
        return $this;
    }

    /**
     * A set of flags that defines how references are supported.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReferenceHandlingPolicy[]
     */
    public function getReferencePolicy()
    {
        return $this->referencePolicy;
    }

    /**
     * A list of _include values supported by the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addSearchInclude($searchInclude)
    {
        if (null === $searchInclude) {
            return $this; 
        }
        if (is_scalar($searchInclude)) {
            $searchInclude = new FHIRString($searchInclude);
        }
        if (!($searchInclude instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::addSearchInclude - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($searchInclude)
            ));
        }
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A list of _include values supported by the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam
     * @return $this
     */
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
        if (null === $searchParam) {
            return $this; 
        }
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * Search parameters for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addSearchRevInclude($searchRevInclude)
    {
        if (null === $searchRevInclude) {
            return $this; 
        }
        if (is_scalar($searchRevInclude)) {
            $searchRevInclude = new FHIRString($searchRevInclude);
        }
        if (!($searchRevInclude instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::addSearchRevInclude - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($searchRevInclude)
            ));
        }
        $this->searchRevInclude[] = $searchRevInclude;
        return $this;
    }

    /**
     * A list of _revinclude (reverse include) values supported by the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSearchRevInclude()
    {
        return $this->searchRevInclude;
    }

    /**
     * A type of resource exposed via the restful interface.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRResourceType($type);
        }
        if (!($type instanceof FHIRResourceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A type of resource exposed via the restful interface.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setUpdateCreate($updateCreate)
    {
        if (null === $updateCreate) {
            return $this; 
        }
        if (is_scalar($updateCreate)) {
            $updateCreate = new FHIRBoolean($updateCreate);
        }
        if (!($updateCreate instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setUpdateCreate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($updateCreate)
            ));
        }
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A flag to indicate that the server allows or needs to allow the client to create new identities on the server (e.g. that is, the client PUTs to a location where there is no existing resource). Allowing this operation means that the server allows the client to create new identities on the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy
     * @return $this
     */
    public function setVersioning($versioning)
    {
        if (null === $versioning) {
            return $this; 
        }
        if (is_scalar($versioning)) {
            $versioning = new FHIRResourceVersionPolicy($versioning);
        }
        if (!($versioning instanceof FHIRResourceVersionPolicy)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementResource::setVersioning - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy or appropriate scalar value, %s seen.',
                gettype($versioning)
            ));
        }
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * This field is set to no-version to specify that the system does not support (server) or use (client) versioning for this resource type. If this has some other value, the server must at least correctly track and populate the versionId meta-property on resources. If the value is 'versioned-update', then the server supports all the versioning features, including using e-tags for version integrity in the API.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResourceVersionPolicy
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getConditionalCreate())) {
            $a['conditionalCreate'] = $v;
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $a['conditionalDelete'] = $v;
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $a['conditionalRead'] = $v;
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $a['conditionalUpdate'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (0 < count($values = $this->getInteraction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['interaction'] = $vs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getReadHistory())) {
            $a['readHistory'] = $v;
        }
        if (0 < count($values = $this->getReferencePolicy())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['referencePolicy'] = $vs;
            }
        }
        if (0 < count($values = $this->getSearchInclude())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['searchInclude'] = $vs;
            }
        }
        if (0 < count($values = $this->getSearchParam())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['searchParam'] = $vs;
            }
        }
        if (0 < count($values = $this->getSearchRevInclude())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['searchRevInclude'] = $vs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $a['updateCreate'] = $v;
        }
        if (null !== ($v = $this->getVersioning())) {
            $a['versioning'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CapabilityStatementResource xmlns="http://hl7.org/fhir"></CapabilityStatementResource>');
        }
        if (null !== ($v = $this->getConditionalCreate())) {
            $v->xmlSerialize(true, $sxe->addChild('conditionalCreate'));
        }
        if (null !== ($v = $this->getConditionalDelete())) {
            $v->xmlSerialize(true, $sxe->addChild('conditionalDelete'));
        }
        if (null !== ($v = $this->getConditionalRead())) {
            $v->xmlSerialize(true, $sxe->addChild('conditionalRead'));
        }
        if (null !== ($v = $this->getConditionalUpdate())) {
            $v->xmlSerialize(true, $sxe->addChild('conditionalUpdate'));
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize(true, $sxe->addChild('documentation'));
        }
        if (0 < count($values = $this->getInteraction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('interaction'));
                }
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize(true, $sxe->addChild('profile'));
        }
        if (null !== ($v = $this->getReadHistory())) {
            $v->xmlSerialize(true, $sxe->addChild('readHistory'));
        }
        if (0 < count($values = $this->getReferencePolicy())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('referencePolicy'));
                }
            }
        }
        if (0 < count($values = $this->getSearchInclude())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('searchInclude'));
                }
            }
        }
        if (0 < count($values = $this->getSearchParam())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('searchParam'));
                }
            }
        }
        if (0 < count($values = $this->getSearchRevInclude())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('searchRevInclude'));
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $v->xmlSerialize(true, $sxe->addChild('updateCreate'));
        }
        if (null !== ($v = $this->getVersioning())) {
            $v->xmlSerialize(true, $sxe->addChild('versioning'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}