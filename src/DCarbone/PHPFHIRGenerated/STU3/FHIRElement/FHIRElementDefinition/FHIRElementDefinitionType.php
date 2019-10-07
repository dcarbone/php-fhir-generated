<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceVersionRules;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionType
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition
 */
class FHIRElementDefinitionType extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AGGREGATION = 'aggregation';
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_TARGET_PROFILE = 'targetProfile';
    const FIELD_TARGET_PROFILE_EXT = '_targetProfile';
    const FIELD_VERSIONING = 'versioning';

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode[]
     */
    private $aggregation = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $code = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $profile = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $targetProfile = null;
    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceVersionRules
     */
    private $versioning = null;

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
            if ($data[self::FIELD_CODE] instanceof FHIRUri) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CODE])) {
                $this->setCode(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
            } else {
                $this->setCode(new FHIRUri($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT]))
                ? $data[self::FIELD_PROFILE_EXT]
                : null;
            if ($data[self::FIELD_PROFILE] instanceof FHIRUri) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROFILE])) {
                $this->setProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_PROFILE]] + $ext));
            } else {
                $this->setProfile(new FHIRUri($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_TARGET_PROFILE])) {
            $ext = (isset($data[self::FIELD_TARGET_PROFILE_EXT]) && is_array($data[self::FIELD_TARGET_PROFILE_EXT]))
                ? $data[self::FIELD_TARGET_PROFILE_EXT]
                : null;
            if ($data[self::FIELD_TARGET_PROFILE] instanceof FHIRUri) {
                $this->setTargetProfile($data[self::FIELD_TARGET_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TARGET_PROFILE])) {
                $this->setTargetProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_TARGET_PROFILE]] + $ext));
            } else {
                $this->setTargetProfile(new FHIRUri($data[self::FIELD_TARGET_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_VERSIONING])) {
            if ($data[self::FIELD_VERSIONING] instanceof FHIRReferenceVersionRules) {
                $this->setVersioning($data[self::FIELD_VERSIONING]);
            } else {
                $this->setVersioning(new FHIRReferenceVersionRules($data[self::FIELD_VERSIONING]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ElementDefinitionType{$xmlns}></ElementDefinitionType>";
    }


    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode $aggregation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode[] $aggregation
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRUri) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRUri($code);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $profile
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setProfile($profile = null)
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
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $targetProfile
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setTargetProfile($targetProfile = null)
    {
        if (null === $targetProfile) {
            $this->targetProfile = null;
            return $this;
        }
        if ($targetProfile instanceof FHIRUri) {
            $this->targetProfile = $targetProfile;
            return $this;
        }
        $this->targetProfile = new FHIRUri($targetProfile);
        return $this;
    }

    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceVersionRules
     */
    public function getVersioning()
    {
        return $this->versioning;
    }

    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceVersionRules $versioning
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     */
    public function setVersioning(FHIRReferenceVersionRules $versioning = null)
    {
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
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
                'FHIRElementDefinitionType::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
            $type->setCode(FHIRUri::xmlUnserialize($children->code));
        }
        if (isset($attributes->profile)) {
            $type->setProfile((string)$attributes->profile);
        }
        if (isset($children->profile)) {
            $type->setProfile(FHIRUri::xmlUnserialize($children->profile));
        }
        if (isset($attributes->targetProfile)) {
            $type->setTargetProfile((string)$attributes->targetProfile);
        }
        if (isset($children->targetProfile)) {
            $type->setTargetProfile(FHIRUri::xmlUnserialize($children->targetProfile));
        }
        if (isset($children->versioning)) {
            $type->setVersioning(FHIRReferenceVersionRules::xmlUnserialize($children->versioning));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAggregation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGGREGATION, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTargetProfile())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_PROFILE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getVersioning())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSIONING, null, $v->getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = (string)$v;
            $a[self::FIELD_PROFILE_EXT] = $v;
        }
        if (null !== ($v = $this->getTargetProfile())) {
            $a[self::FIELD_TARGET_PROFILE] = (string)$v;
            $a[self::FIELD_TARGET_PROFILE_EXT] = $v;
        }
        if (null !== ($v = $this->getVersioning())) {
            $a[self::FIELD_VERSIONING] = $v;
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