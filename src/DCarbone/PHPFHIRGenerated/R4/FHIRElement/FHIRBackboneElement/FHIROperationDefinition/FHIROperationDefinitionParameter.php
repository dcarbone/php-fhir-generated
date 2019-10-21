<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 *
 * Class FHIROperationDefinitionParameter
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BINDING = 'binding';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PART = 'part';
    const FIELD_REFERENCED_FROM = 'referencedFrom';
    const FIELD_SEARCH_TYPE = 'searchType';
    const FIELD_SEARCH_TYPE_EXT = '_searchType';
    const FIELD_TARGET_PROFILE = 'targetProfile';
    const FIELD_TARGET_PROFILE_EXT = '_targetProfile';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    private $binding = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $documentation = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $max = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $min = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $name = null;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    private $part = [];
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[]
     */
    private $referencedFrom = [];
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType
     */
    private $searchType = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $targetProfile = [];
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $type = null;
    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse
     */
    private $use = null;

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
        if (isset($data[self::FIELD_BINDING])) {
            if ($data[self::FIELD_BINDING] instanceof FHIROperationDefinitionBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIROperationDefinitionBinding($data[self::FIELD_BINDING]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_MAX])) {
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT]))
                ? $data[self::FIELD_MAX_EXT]
                : null;
            if ($data[self::FIELD_MAX] instanceof FHIRString) {
                $this->setMax($data[self::FIELD_MAX]);
            } elseif ($ext && is_scalar($data[self::FIELD_MAX])) {
                $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MAX]] + $ext));
            } else {
                $this->setMax(new FHIRString($data[self::FIELD_MAX]));
            }
        }
        if (isset($data[self::FIELD_MIN])) {
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT]))
                ? $data[self::FIELD_MIN_EXT]
                : null;
            if ($data[self::FIELD_MIN] instanceof FHIRInteger) {
                $this->setMin($data[self::FIELD_MIN]);
            } elseif ($ext && is_scalar($data[self::FIELD_MIN])) {
                $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_MIN]] + $ext));
            } else {
                $this->setMin(new FHIRInteger($data[self::FIELD_MIN]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRCode) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRCode($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PART])) {
            if (is_array($data[self::FIELD_PART])) {
                foreach($data[self::FIELD_PART] as $v) {
                    if ($v instanceof FHIROperationDefinitionParameter) {
                        $this->addPart($v);
                    } else {
                        $this->addPart(new FHIROperationDefinitionParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PART] instanceof FHIROperationDefinitionParameter) {
                $this->addPart($data[self::FIELD_PART]);
            } else {
                $this->addPart(new FHIROperationDefinitionParameter($data[self::FIELD_PART]));
            }
        }
        if (isset($data[self::FIELD_REFERENCED_FROM])) {
            if (is_array($data[self::FIELD_REFERENCED_FROM])) {
                foreach($data[self::FIELD_REFERENCED_FROM] as $v) {
                    if ($v instanceof FHIROperationDefinitionReferencedFrom) {
                        $this->addReferencedFrom($v);
                    } else {
                        $this->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCED_FROM] instanceof FHIROperationDefinitionReferencedFrom) {
                $this->addReferencedFrom($data[self::FIELD_REFERENCED_FROM]);
            } else {
                $this->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($data[self::FIELD_REFERENCED_FROM]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_TYPE])) {
            $ext = (isset($data[self::FIELD_SEARCH_TYPE_EXT]) && is_array($data[self::FIELD_SEARCH_TYPE_EXT]))
                ? $data[self::FIELD_SEARCH_TYPE_EXT]
                : null;
            if ($data[self::FIELD_SEARCH_TYPE] instanceof FHIRSearchParamType) {
                $this->setSearchType($data[self::FIELD_SEARCH_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEARCH_TYPE])) {
                $this->setSearchType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $data[self::FIELD_SEARCH_TYPE]] + $ext));
            } else {
                $this->setSearchType(new FHIRSearchParamType($data[self::FIELD_SEARCH_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TARGET_PROFILE])) {
            $ext = (isset($data[self::FIELD_TARGET_PROFILE_EXT]) && is_array($data[self::FIELD_TARGET_PROFILE_EXT]))
                ? $data[self::FIELD_TARGET_PROFILE_EXT]
                : null;
            if (is_array($data[self::FIELD_TARGET_PROFILE])) {
                foreach($data[self::FIELD_TARGET_PROFILE] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addTargetProfile($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTargetProfile(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_PROFILE] instanceof FHIRCanonical) {
                $this->addTargetProfile($data[self::FIELD_TARGET_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TARGET_PROFILE])) {
                $this->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_TARGET_PROFILE]] + $ext));
            } else {
                $this->addTargetProfile(new FHIRCanonical($data[self::FIELD_TARGET_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRCode) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRCode($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT]))
                ? $data[self::FIELD_USE_EXT]
                : null;
            if ($data[self::FIELD_USE] instanceof FHIROperationParameterUse) {
                $this->setUse($data[self::FIELD_USE]);
            } elseif ($ext && is_scalar($data[self::FIELD_USE])) {
                $this->setUse(new FHIROperationParameterUse([FHIROperationParameterUse::FIELD_VALUE => $data[self::FIELD_USE]] + $ext));
            } else {
                $this->setUse(new FHIROperationParameterUse($data[self::FIELD_USE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
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
        return "<OperationDefinitionParameter{$xmlns}></OperationDefinitionParameter>";
    }


    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setBinding(FHIROperationDefinitionBinding $binding = null)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $documentation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $max
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setMax($max = null)
    {
        if (null === $max) {
            $this->max = null;
            return $this;
        }
        if ($max instanceof FHIRString) {
            $this->max = $max;
            return $this;
        }
        $this->max = new FHIRString($max);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $min
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setMin($min = null)
    {
        if (null === $min) {
            $this->min = null;
            return $this;
        }
        if ($min instanceof FHIRInteger) {
            $this->min = $min;
            return $this;
        }
        $this->min = new FHIRInteger($min);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRCode) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRCode($name);
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function addPart(FHIROperationDefinitionParameter $part = null)
    {
        $this->part[] = $part;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] $part
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setPart(array $part = [])
    {
        $this->part = [];
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
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[]
     */
    public function getReferencedFrom()
    {
        return $this->referencedFrom;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom $referencedFrom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function addReferencedFrom(FHIROperationDefinitionReferencedFrom $referencedFrom = null)
    {
        $this->referencedFrom[] = $referencedFrom;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[] $referencedFrom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setReferencedFrom(array $referencedFrom = [])
    {
        $this->referencedFrom = [];
        if ([] === $referencedFrom) {
            return $this;
        }
        foreach($referencedFrom as $v) {
            if ($v instanceof FHIROperationDefinitionReferencedFrom) {
                $this->addReferencedFrom($v);
            } else {
                $this->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType $searchType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setSearchType(FHIRSearchParamType $searchType = null)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $targetProfile
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function addTargetProfile($targetProfile = null)
    {
        if (null === $targetProfile) {
            $this->targetProfile = [];
            return $this;
        }
        if ($targetProfile instanceof FHIRCanonical) {
            $this->targetProfile[] = $targetProfile;
            return $this;
        }
        $this->targetProfile[] = new FHIRCanonical($targetProfile);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $targetProfile
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setTargetProfile(array $targetProfile = [])
    {
        $this->targetProfile = [];
        if ([] === $targetProfile) {
            return $this;
        }
        foreach($targetProfile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addTargetProfile($v);
            } else {
                $this->addTargetProfile(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
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
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse $use
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function setUse(FHIROperationParameterUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
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
                throw new \DomainException(sprintf('FHIROperationDefinitionParameter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationDefinitionParameter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIROperationDefinitionParameter;
        } elseif (!is_object($type) || !($type instanceof FHIROperationDefinitionParameter)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationDefinitionParameter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter or null, %s seen.',
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
        if (isset($children->binding)) {
            $type->setBinding(FHIROperationDefinitionBinding::xmlUnserialize($children->binding));
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($attributes->max)) {
            $type->setMax((string)$attributes->max);
        }
        if (isset($children->max)) {
            $type->setMax(FHIRString::xmlUnserialize($children->max));
        }
        if (isset($attributes->min)) {
            $type->setMin((string)$attributes->min);
        }
        if (isset($children->min)) {
            $type->setMin(FHIRInteger::xmlUnserialize($children->min));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRCode::xmlUnserialize($children->name));
        }
        if (isset($children->part)) {
            foreach($children->part as $child) {
                $type->addPart(FHIROperationDefinitionParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->referencedFrom)) {
            foreach($children->referencedFrom as $child) {
                $type->addReferencedFrom(FHIROperationDefinitionReferencedFrom::xmlUnserialize($child));
            }
        }
        if (isset($children->searchType)) {
            $type->setSearchType(FHIRSearchParamType::xmlUnserialize($children->searchType));
        }
        if (isset($attributes->targetProfile)) {
            $type->addTargetProfile((string)$attributes->targetProfile);
        }
        if (isset($children->targetProfile)) {
            foreach($children->targetProfile as $child) {
                $type->addTargetProfile(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
        }
        if (isset($children->use)) {
            $type->setUse(FHIROperationParameterUse::xmlUnserialize($children->use));
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

        if (null !== ($v = $this->getBinding())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BINDING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPart())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getReferencedFrom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCED_FROM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTargetProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBinding())) {
            $a[self::FIELD_BINDING] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DOCUMENTATION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getMax())) {
            $a[self::FIELD_MAX] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MAX_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getMin())) {
            $a[self::FIELD_MIN] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_MIN_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getPart())) {
            $a[self::FIELD_PART] = $vs;
        }
        if ([] !== ($vs = $this->getReferencedFrom())) {
            $a[self::FIELD_REFERENCED_FROM] = $vs;
        }
        if (null !== ($v = $this->getSearchType())) {
            $a[self::FIELD_SEARCH_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SEARCH_TYPE_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getTargetProfile())) {
            $a[self::FIELD_TARGET_PROFILE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET_PROFILE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_TARGET_PROFILE_EXT])) {
                        $a[self::FIELD_TARGET_PROFILE_EXT] = [];
                    }
                    $a[self::FIELD_TARGET_PROFILE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TYPE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_USE_EXT] = $v;
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