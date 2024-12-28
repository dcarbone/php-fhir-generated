<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRAllTypes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationParameterUse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 *
 * Class FHIROperationDefinitionParameter
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER;
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_SEARCH_TYPE = 'searchType';
    const FIELD_SEARCH_TYPE_EXT = '_searchType';
    const FIELD_PROFILE = 'profile';
    const FIELD_BINDING = 'binding';
    const FIELD_PART = 'part';

    /** @var string */
    private $_xmlns = '';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $name = null;

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationParameterUse
     */
    protected $use = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $min = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $max = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $documentation = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRAllTypes
     */
    protected $type = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType
     */
    protected $searchType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $profile = null;

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    protected $binding = null;

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    protected $part = [];

    /**
     * Validation map for fields in type OperationDefinition.Parameter
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIROperationDefinitionParameter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = isset($data[self::FIELD_NAME]) ? $data[self::FIELD_NAME] : null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $ext = $data[self::FIELD_NAME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_USE]) || isset($data[self::FIELD_USE_EXT])) {
            $value = isset($data[self::FIELD_USE]) ? $data[self::FIELD_USE] : null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $ext = $data[self::FIELD_USE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIROperationParameterUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIROperationParameterUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIROperationParameterUse([FHIROperationParameterUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIROperationParameterUse($ext));
            }
        }
        if (isset($data[self::FIELD_MIN]) || isset($data[self::FIELD_MIN_EXT])) {
            $value = isset($data[self::FIELD_MIN]) ? $data[self::FIELD_MIN] : null;
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) ? $ext = $data[self::FIELD_MIN_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMin(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MAX]) || isset($data[self::FIELD_MAX_EXT])) {
            $value = isset($data[self::FIELD_MAX]) ? $data[self::FIELD_MAX] : null;
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) ? $ext = $data[self::FIELD_MAX_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION]) || isset($data[self::FIELD_DOCUMENTATION_EXT])) {
            $value = isset($data[self::FIELD_DOCUMENTATION]) ? $data[self::FIELD_DOCUMENTATION] : null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $ext = $data[self::FIELD_DOCUMENTATION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = isset($data[self::FIELD_TYPE]) ? $data[self::FIELD_TYPE] : null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $ext = $data[self::FIELD_TYPE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRAllTypes) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRFHIRAllTypes(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRFHIRAllTypes([FHIRFHIRAllTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRFHIRAllTypes($ext));
            }
        }
        if (isset($data[self::FIELD_SEARCH_TYPE]) || isset($data[self::FIELD_SEARCH_TYPE_EXT])) {
            $value = isset($data[self::FIELD_SEARCH_TYPE]) ? $data[self::FIELD_SEARCH_TYPE] : null;
            $ext = (isset($data[self::FIELD_SEARCH_TYPE_EXT]) && is_array($data[self::FIELD_SEARCH_TYPE_EXT])) ? $ext = $data[self::FIELD_SEARCH_TYPE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchParamType) {
                    $this->setSearchType($value);
                } else if (is_array($value)) {
                    $this->setSearchType(new FHIRSearchParamType(array_merge($ext, $value)));
                } else {
                    $this->setSearchType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSearchType(new FHIRSearchParamType($ext));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRReference) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRReference($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_BINDING])) {
            if ($data[self::FIELD_BINDING] instanceof FHIROperationDefinitionBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIROperationDefinitionBinding($data[self::FIELD_BINDING]));
            }
        }
        if (isset($data[self::FIELD_PART])) {
            if (is_array($data[self::FIELD_PART])) {
                foreach($data[self::FIELD_PART] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIROperationDefinitionParameter) {
                        $this->addPart($v);
                    } else {
                        $this->addPart(new FHIROperationDefinitionParameter($v));
                    }
                }
            } elseif ($data[self::FIELD_PART] instanceof FHIROperationDefinitionParameter) {
                $this->addPart($data[self::FIELD_PART]);
            } else {
                $this->addPart(new FHIROperationDefinitionParameter($data[self::FIELD_PART]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<OperationDefinitionParameter{$xmlns}></OperationDefinitionParameter>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null !== $name && !($name instanceof FHIRCode)) {
            $name = new FHIRCode($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationParameterUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationParameterUse $use
     * @return static
     */
    public function setUse(FHIROperationParameterUse $use = null)
    {
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $min
     * @return static
     */
    public function setMin($min = null)
    {
        if (null !== $min && !($min instanceof FHIRInteger)) {
            $min = new FHIRInteger($min);
        }
        $this->_trackValueSet($this->min, $min);
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $max
     * @return static
     */
    public function setMax($max = null)
    {
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        $this->max = $max;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation($documentation = null)
    {
        if (null !== $documentation && !($documentation instanceof FHIRString)) {
            $documentation = new FHIRString($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRAllTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRAllTypes $type
     * @return static
     */
    public function setType(FHIRFHIRAllTypes $type = null)
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType $searchType
     * @return static
     */
    public function setSearchType(FHIRSearchParamType $searchType = null)
    {
        $this->_trackValueSet($this->searchType, $searchType);
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function setProfile(FHIRReference $profile = null)
    {
        $this->_trackValueSet($this->profile, $profile);
        $this->profile = $profile;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return static
     */
    public function setBinding(FHIROperationDefinitionBinding $binding = null)
    {
        $this->_trackValueSet($this->binding, $binding);
        $this->binding = $binding;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return static
     */
    public function addPart(FHIROperationDefinitionParameter $part = null)
    {
        $this->_trackValueAdded();
        $this->part[] = $part;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] $part
     * @return static
     */
    public function setPart(array $part = [])
    {
        if ([] !== $this->part) {
            $this->_trackValuesRemoved(count($this->part));
            $this->part = [];
        }
        if ([] === $part) {
            return $this;
        }
        foreach($part as $v) {
            if ($v instanceof FHIROperationDefinitionParameter) {
                $this->addPart($v);
            } else {
                $this->addPart(new FHIROperationDefinitionParameter($v));
            }
        }
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEARCH_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPart())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_MIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN])) {
                        $errs[self::FIELD_MIN] = [];
                    }
                    $errs[self::FIELD_MIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX])) {
            $v = $this->getMax();
            foreach($validationRules[self::FIELD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX])) {
                        $errs[self::FIELD_MAX] = [];
                    }
                    $errs[self::FIELD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_TYPE])) {
            $v = $this->getSearchType();
            foreach($validationRules[self::FIELD_SEARCH_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_SEARCH_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_TYPE])) {
                        $errs[self::FIELD_SEARCH_TYPE] = [];
                    }
                    $errs[self::FIELD_SEARCH_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIROperationDefinitionParameter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationDefinitionParameter::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIROperationDefinitionParameter(null);
        } elseif (!is_object($type) || !($type instanceof FHIROperationDefinitionParameter)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationDefinitionParameter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRCode::xmlUnserialize($n));
            } elseif (self::FIELD_USE === $n->nodeName) {
                $type->setUse(FHIROperationParameterUse::xmlUnserialize($n));
            } elseif (self::FIELD_MIN === $n->nodeName) {
                $type->setMin(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_MAX === $n->nodeName) {
                $type->setMax(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
                $type->setDocumentation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRFHIRAllTypes::xmlUnserialize($n));
            } elseif (self::FIELD_SEARCH_TYPE === $n->nodeName) {
                $type->setSearchType(FHIRSearchParamType::xmlUnserialize($n));
            } elseif (self::FIELD_PROFILE === $n->nodeName) {
                $type->setProfile(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BINDING === $n->nodeName) {
                $type->setBinding(FHIROperationDefinitionBinding::xmlUnserialize($n));
            } elseif (self::FIELD_PART === $n->nodeName) {
                $type->addPart(FHIROperationDefinitionParameter::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MIN);
        if (null !== $n) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMin($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX);
        if (null !== $n) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMax($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOCUMENTATION);
        if (null !== $n) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDocumentation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_USE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMin())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMax())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocumentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSearchType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEARCH_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProfile())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROFILE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBinding())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BINDING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getPart())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PART);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NAME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCode::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_NAME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_USE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIROperationParameterUse::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_USE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MIN] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MIN_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MAX] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MAX_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DOCUMENTATION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DOCUMENTATION_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_TYPE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRFHIRAllTypes::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_TYPE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SEARCH_TYPE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRSearchParamType::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SEARCH_TYPE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = $v;
        }
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
        }
        if ([] !== ($vs = $this->getPart())) {
            $a[self::FIELD_PART] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PART][] = $v;
            }
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