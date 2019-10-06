<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionType
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition
 */
class FHIRElementDefinitionType extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE;

    const FIELD_AGGREGATION = 'aggregation';
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode[]
     */
    private $aggregation = [];
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Name of Data type or Resource that is a(or the) type used for this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    private $code = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for
     * resources or datatypes referenced as the type of this element. Can be a local
     * reference - to another structure in this profile, or a reference to a structure
     * in another profile. When more than one profile is specified, the content must
     * conform to all of them. When an implementation guide is specified, the resource
     * SHALL conform to at least one profile defined in the implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    private $profile = [];

    /**
     * FHIRElementDefinitionType Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGGREGATION])) {
            if (is_array($data[self::FIELD_AGGREGATION])) {
                foreach($data[self::FIELD_AGGREGATION] as $v) {
                    if ($v instanceof FHIRAggregationMode) {
                        $this->addAggregation($v);
                    } else {
                        $this->addAggregation(new FHIRAggregationMode($v));
                    }
                }
            } else if ($data[self::FIELD_AGGREGATION] instanceof FHIRAggregationMode) {
                $this->addAggregation($data[self::FIELD_AGGREGATION]);
            } else {
                $this->addAggregation(new FHIRAggregationMode($data[self::FIELD_AGGREGATION]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRCode) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CODE])) {
                $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT]))
                ? $data[self::FIELD_PROFILE_EXT]
                : null;
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addProfile($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addProfile(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_PROFILE] instanceof FHIRUri) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROFILE])) {
                $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_PROFILE]] + $ext));
            } else {
                $this->addProfile(new FHIRUri($data[self::FIELD_PROFILE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode[]
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode $aggregation
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function addAggregation(FHIRAggregationMode $aggregation = null)
    {
        $this->aggregation[] = $aggregation;
        return $this;
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode[] $aggregation
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setAggregation(array $aggregation = [])
    {
        $this->aggregation = [];
        if ([] === $aggregation) {
            return $this;
        }
        foreach($aggregation as $v) {
            if ($v instanceof FHIRAggregationMode) {
                $this->addAggregation($v);
            } else {
                $this->addAggregation(new FHIRAggregationMode($v));
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
     * Name of Data type or Resource that is a(or the) type used for this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Name of Data type or Resource that is a(or the) type used for this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $code
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRCode) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRCode($code);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for
     * resources or datatypes referenced as the type of this element. Can be a local
     * reference - to another structure in this profile, or a reference to a structure
     * in another profile. When more than one profile is specified, the content must
     * conform to all of them. When an implementation guide is specified, the resource
     * SHALL conform to at least one profile defined in the implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for
     * resources or datatypes referenced as the type of this element. Can be a local
     * reference - to another structure in this profile, or a reference to a structure
     * in another profile. When more than one profile is specified, the content must
     * conform to all of them. When an implementation guide is specified, the resource
     * SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $profile
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function addProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = null;
            return $this;
        }
        if ($profile instanceof FHIRUri) {
            $this->profile = $profile;
            return $this;
        }
        $this->profile = new FHIRUri($profile);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for
     * resources or datatypes referenced as the type of this element. Can be a local
     * reference - to another structure in this profile, or a reference to a structure
     * in another profile. When more than one profile is specified, the content must
     * conform to all of them. When an implementation guide is specified, the resource
     * SHALL conform to at least one profile defined in the implementation guide.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[] $profile
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRElementDefinitionType::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinitionType::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRElementDefinitionType);
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionType)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinitionType::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->aggregation)) {
            foreach($children->aggregation as $child) {
                $type->addAggregation(FHIRAggregationMode::xmlUnserialize($child));
            }
        }
        if (isset($attributes->code)) {
            $type->setCode((string)$attributes->code);
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($attributes->profile)) {
            $type->addProfile((string)$attributes->profile);
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRUri::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ElementDefinitionType xmlns="http://hl7.org/fhir"></ElementDefinitionType>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAggregation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGGREGATION));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $sxe->addAttribute(self::FIELD_CODE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PROFILE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE));
                }
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAggregation())) {
            $a[self::FIELD_AGGREGATION] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = (string)$v;
            $a[self::FIELD_CODE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            $a[self::FIELD_PROFILE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PROFILE][] = (string)$v;
                $a[self::FIELD_PROFILE_EXT][] = $v;
            }
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}