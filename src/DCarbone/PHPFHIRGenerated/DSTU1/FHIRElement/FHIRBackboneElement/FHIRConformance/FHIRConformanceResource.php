<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 *
 * Class FHIRConformanceResource
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE;
    const FIELD_OPERATION = 'operation';
    const FIELD_PROFILE = 'profile';
    const FIELD_READ_HISTORY = 'readHistory';
    const FIELD_READ_HISTORY_EXT = '_readHistory';
    const FIELD_SEARCH_INCLUDE = 'searchInclude';
    const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_UPDATE_CREATE = 'updateCreate';
    const FIELD_UPDATE_CREATE_EXT = '_updateCreate';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[]
     */
    protected $operation = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $profile = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $readHistory = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $searchInclude = [];

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[]
     */
    protected $searchParam = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $type = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $updateCreate = null;

    /**
     * Validation map for fields in type Conformance.Resource
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_OPERATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformanceResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConformanceResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRConformanceOperation($v));
                    }
                }
            } else if ($data[self::FIELD_OPERATION] instanceof FHIRConformanceOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRConformanceOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRResourceReference) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRResourceReference($data[self::FIELD_PROFILE]));
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
                    if ($v instanceof FHIRConformanceSearchParam) {
                        $this->addSearchParam($v);
                    } else {
                        $this->addSearchParam(new FHIRConformanceSearchParam($v));
                    }
                }
            } else if ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRConformanceSearchParam) {
                $this->addSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } else {
                $this->addSearchParam(new FHIRConformanceSearchParam($data[self::FIELD_SEARCH_PARAM]));
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
        return "<ConformanceResource{$xmlns}></ConformanceResource>";
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation $operation
     * @return static
     */
    public function addOperation(FHIRConformanceOperation $operation = null)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[] $operation
     * @return static
     */
    public function setOperation(array $operation = [])
    {
        $this->operation = [];
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRConformanceOperation) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRConformanceOperation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $profile
     * @return static
     */
    public function setProfile(FHIRResourceReference $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $readHistory
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $searchInclude
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $searchInclude
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
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(FHIRConformanceSearchParam $searchParam = null)
    {
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[] $searchParam
     * @return static
     */
    public function setSearchParam(array $searchParam = [])
    {
        $this->searchParam = [];
        if ([] === $searchParam) {
            return $this;
        }
        foreach($searchParam as $v) {
            if ($v instanceof FHIRConformanceSearchParam) {
                $this->addSearchParam($v);
            } else {
                $this->addSearchParam(new FHIRConformanceSearchParam($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $type
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
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $updateCreate
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
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_OPERATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_PROFILE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_READ_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_HISTORY])) {
                        $errs[self::FIELD_READ_HISTORY] = [];
                    }
                    $errs[self::FIELD_READ_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_INCLUDE])) {
            $v = $this->getSearchInclude();
            foreach($validationRules[self::FIELD_SEARCH_INCLUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_SEARCH_INCLUDE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_SEARCH_PARAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_PARAM])) {
                        $errs[self::FIELD_SEARCH_PARAM] = [];
                    }
                    $errs[self::FIELD_SEARCH_PARAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE, self::FIELD_UPDATE_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPDATE_CREATE])) {
                        $errs[self::FIELD_UPDATE_CREATE] = [];
                    }
                    $errs[self::FIELD_UPDATE_CREATE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource
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
                throw new \DomainException(sprintf('FHIRConformanceResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConformanceResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConformanceResource;
        } elseif (!is_object($type) || !($type instanceof FHIRConformanceResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRConformanceResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource or null, %s seen.',
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
        if (isset($children->operation)) {
            foreach($children->operation as $child) {
                $type->addOperation(FHIRConformanceOperation::xmlUnserialize($child));
            }
        }
        if (isset($children->profile)) {
            $type->setProfile(FHIRResourceReference::xmlUnserialize($children->profile));
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
        if (isset($children->searchInclude)) {
            foreach($children->searchInclude as $child) {
                $type->addSearchInclude(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->searchParam)) {
            foreach($children->searchParam as $child) {
                $type->addSearchParam(FHIRConformanceSearchParam::xmlUnserialize($child));
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
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUpdateCreate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UPDATE_CREATE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
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
            $a[self::FIELD_PROFILE] = $v;
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