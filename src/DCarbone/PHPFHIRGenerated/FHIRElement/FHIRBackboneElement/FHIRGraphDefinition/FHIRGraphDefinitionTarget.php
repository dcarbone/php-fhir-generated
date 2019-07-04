<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A formal computable definition of a graph of resources - that is, a coherent set
 * of resources that form a graph by following references. The Graph Definition
 * resource defines a set and makes rules about the set.
 *
 * Class FHIRGraphDefinitionTarget
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition
 */
class FHIRGraphDefinitionTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_TARGET;

    const FIELD_COMPARTMENT = 'compartment';
    const FIELD_LINK = 'link';
    const FIELD_PARAMS = 'params';
    const FIELD_PARAMS_EXT = '_params';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment[]
     */
    private $compartment = [];

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Additional links from target resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink[]
     */
    private $link = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of parameters to look up.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $params = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Profile for the target resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $profile = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type of resource this link refers to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $type = null;

    /**
     * FHIRGraphDefinitionTarget Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionTarget::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMPARTMENT])) {
            if (is_array($data[self::FIELD_COMPARTMENT])) {
                foreach($data[self::FIELD_COMPARTMENT] as $v) {
                    if ($v instanceof FHIRGraphDefinitionCompartment) {
                        $this->addCompartment($v);
                    } else {
                        $this->addCompartment(new FHIRGraphDefinitionCompartment($v));
                    }
                }
            } else if ($data[self::FIELD_COMPARTMENT] instanceof FHIRGraphDefinitionCompartment) {
                $this->addCompartment($data[self::FIELD_COMPARTMENT]);
            } else {
                $this->addCompartment(new FHIRGraphDefinitionCompartment($data[self::FIELD_COMPARTMENT]));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if ($v instanceof FHIRGraphDefinitionLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRGraphDefinitionLink($v));
                    }
                }
            } else if ($data[self::FIELD_LINK] instanceof FHIRGraphDefinitionLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRGraphDefinitionLink($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_PARAMS])) {
            $ext = (isset($data[self::FIELD_PARAMS_EXT]) && is_array($data[self::FIELD_PARAMS_EXT]))
                ? $data[self::FIELD_PARAMS_EXT]
                : null;
            if ($data[self::FIELD_PARAMS] instanceof FHIRString) {
                $this->setParams($data[self::FIELD_PARAMS]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARAMS])) {
                $this->setParams(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PARAMS]] + $ext));
            } else {
                $this->setParams(new FHIRString($data[self::FIELD_PARAMS]));
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
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment $compartment
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function addCompartment(FHIRGraphDefinitionCompartment $compartment = null)
    {
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment[] $compartment
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function setCompartment(array $compartment = [])
    {
        $this->compartment = [];
        if ([] === $compartment) {
            return $this;
        }
        foreach($compartment as $v) {
            if ($v instanceof FHIRGraphDefinitionCompartment) {
                $this->addCompartment($v);
            } else {
                $this->addCompartment(new FHIRGraphDefinitionCompartment($v));
            }
        }
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Additional links from target resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Additional links from target resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink $link
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function addLink(FHIRGraphDefinitionLink $link = null)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Additional links from target resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink[] $link
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRGraphDefinitionLink) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRGraphDefinitionLink($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of parameters to look up.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A set of parameters to look up.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $params
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function setParams($params = null)
    {
        if (null === $params) {
            $this->params = null;
            return $this;
        }
        if ($params instanceof FHIRString) {
            $this->params = $params;
            return $this;
        }
        $this->params = new FHIRString($params);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Profile for the target resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
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
     * Profile for the target resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $profile
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
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
     * Type of resource this link refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode
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
     * Type of resource this link refers to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
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
                throw new \DomainException(sprintf('FHIRGraphDefinitionTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRGraphDefinitionTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRGraphDefinitionTarget);
        } elseif (!is_object($type) || !($type instanceof FHIRGraphDefinitionTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRGraphDefinitionTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->compartment)) {
            foreach($children->compartment as $child) {
                $type->addCompartment(FHIRGraphDefinitionCompartment::xmlUnserialize($child));
            }
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRGraphDefinitionLink::xmlUnserialize($child));
            }
        }
        if (isset($attributes->params)) {
            $type->setParams((string)$attributes->params);
        }
        if (isset($children->params)) {
            $type->setParams(FHIRString::xmlUnserialize($children->params));
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
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<GraphDefinitionTarget xmlns="http://hl7.org/fhir"></GraphDefinitionTarget>');
        }
        if ([] !== ($vs = $this->getCompartment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARTMENT));
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK));
            }
        }
        if (null !== ($v = $this->getParams())) {
            $sxe->addAttribute(self::FIELD_PARAMS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMS));
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $sxe->addAttribute(self::FIELD_PROFILE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE));
            }
        }
        if (null !== ($v = $this->getType())) {
            $sxe->addAttribute(self::FIELD_TYPE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
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
        if ([] !== ($vs = $this->getCompartment())) {
            $a[self::FIELD_COMPARTMENT] = $vs;
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = $vs;
        }
        if (null !== ($v = $this->getParams())) {
            $a[self::FIELD_PARAMS] = (string)$v;
            $a[self::FIELD_PARAMS_EXT] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = (string)$v;
            $a[self::FIELD_PROFILE_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = (string)$v;
            $a[self::FIELD_TYPE_EXT] = $v;
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