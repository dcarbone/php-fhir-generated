<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The parameters to the module. This collection specifies both the input and
 * output parameters. Input parameters are provided by the caller as part of the
 * $evaluate operation. Output parameters are included in the GuidanceResponse.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRParameterDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRParameterDefinition extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PARAMETER_DEFINITION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief discussion of what the parameter is for and how it is used by the
     * module.
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
     * The name of the parameter used to allow access to the value of the parameter in
     * evaluation contexts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $name = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If specified, this indicates a profile that the input data must conform to, or
     * that the output data will conform to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $profile = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $type = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Whether the parameter is input or output for the module.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $use = null;

    /**
     * FHIRParameterDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRParameterDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_PROFILE])) {
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT]))
                ? $data[self::FIELD_PROFILE_EXT]
                : null;
            if ($data[self::FIELD_PROFILE] instanceof FHIRCanonical) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROFILE])) {
                $this->setProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_PROFILE]] + $ext));
            } else {
                $this->setProfile(new FHIRCanonical($data[self::FIELD_PROFILE]));
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
            if ($data[self::FIELD_USE] instanceof FHIRCode) {
                $this->setUse($data[self::FIELD_USE]);
            } elseif ($ext && is_scalar($data[self::FIELD_USE])) {
                $this->setUse(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_USE]] + $ext));
            } else {
                $this->setUse(new FHIRCode($data[self::FIELD_USE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
        return "<ParameterDefinition{$xmlns}></ParameterDefinition>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A brief discussion of what the parameter is for and how it is used by the
     * module.
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
     * A brief discussion of what the parameter is for and how it is used by the
     * module.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $documentation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * The name of the parameter used to allow access to the value of the parameter in
     * evaluation contexts.
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
     * The name of the parameter used to allow access to the value of the parameter in
     * evaluation contexts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If specified, this indicates a profile that the input data must conform to, or
     * that the output data will conform to.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If specified, this indicates a profile that the input data must conform to, or
     * that the output data will conform to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $profile
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the parameter.
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
     * The type of the parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Whether the parameter is input or output for the module.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Whether the parameter is input or output for the module.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $use
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
     */
    public function setUse($use = null)
    {
        if (null === $use) {
            $this->use = null;
            return $this;
        }
        if ($use instanceof FHIRCode) {
            $this->use = $use;
            return $this;
        }
        $this->use = new FHIRCode($use);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition
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
                throw new \DomainException(sprintf('FHIRParameterDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRParameterDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRParameterDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRParameterDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRParameterDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRParameterDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
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
        if (isset($attributes->profile)) {
            $type->setProfile((string)$attributes->profile);
        }
        if (isset($children->profile)) {
            $type->setProfile(FHIRCanonical::xmlUnserialize($children->profile));
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
        }
        if (isset($attributes->use)) {
            $type->setUse((string)$attributes->use);
        }
        if (isset($children->use)) {
            $type->setUse(FHIRCode::xmlUnserialize($children->use));
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
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PROFILE_EXT] = $v;
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