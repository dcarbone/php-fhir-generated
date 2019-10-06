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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionSlicing
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition
 */
class FHIRElementDefinitionSlicing extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DISCRIMINATOR = 'discriminator';
    const FIELD_DISCRIMINATOR_EXT = '_discriminator';
    const FIELD_ORDERED = 'ordered';
    const FIELD_ORDERED_EXT = '_ordered';
    const FIELD_RULES = 'rules';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    private $discriminator = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    private $ordered = null;
    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules
     */
    private $rules = null;

    /**
     * FHIRElementDefinitionSlicing Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionSlicing::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DISCRIMINATOR])) {
            $ext = (isset($data[self::FIELD_DISCRIMINATOR_EXT]) && is_array($data[self::FIELD_DISCRIMINATOR_EXT]))
                ? $data[self::FIELD_DISCRIMINATOR_EXT]
                : null;
            if (is_array($data[self::FIELD_DISCRIMINATOR])) {
                foreach($data[self::FIELD_DISCRIMINATOR] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addDiscriminator($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDiscriminator(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDiscriminator(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_DISCRIMINATOR] instanceof FHIRString) {
                $this->addDiscriminator($data[self::FIELD_DISCRIMINATOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISCRIMINATOR])) {
                $this->addDiscriminator(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISCRIMINATOR]] + $ext));
            } else {
                $this->addDiscriminator(new FHIRString($data[self::FIELD_DISCRIMINATOR]));
            }
        }
        if (isset($data[self::FIELD_ORDERED])) {
            $ext = (isset($data[self::FIELD_ORDERED_EXT]) && is_array($data[self::FIELD_ORDERED_EXT]))
                ? $data[self::FIELD_ORDERED_EXT]
                : null;
            if ($data[self::FIELD_ORDERED] instanceof FHIRBoolean) {
                $this->setOrdered($data[self::FIELD_ORDERED]);
            } elseif ($ext && is_scalar($data[self::FIELD_ORDERED])) {
                $this->setOrdered(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ORDERED]] + $ext));
            } else {
                $this->setOrdered(new FHIRBoolean($data[self::FIELD_ORDERED]));
            }
        }
        if (isset($data[self::FIELD_RULES])) {
            if ($data[self::FIELD_RULES] instanceof FHIRSlicingRules) {
                $this->setRules($data[self::FIELD_RULES]);
            } else {
                $this->setRules(new FHIRSlicingRules($data[self::FIELD_RULES]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human-readable text description of how the slicing works. If there is no
     * discriminator, this is required to be present to provide whatever information is
     * possible about how the slices can be differentiated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $discriminator
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function addDiscriminator($discriminator = null)
    {
        if (null === $discriminator) {
            $this->discriminator = null;
            return $this;
        }
        if ($discriminator instanceof FHIRString) {
            $this->discriminator = $discriminator;
            return $this;
        }
        $this->discriminator = new FHIRString($discriminator);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Designates which child elements are used to discriminate between the slices when
     * processing an instance. If one or more discriminators are provided, the value of
     * the child elements in the instance data SHALL completely distinguish which slice
     * the element in the resource matches based on the allowed values for those
     * elements in each of the slices.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $discriminator
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function setDiscriminator(array $discriminator = [])
    {
        $this->discriminator = [];
        if ([] === $discriminator) {
            return $this;
        }
        foreach($discriminator as $v) {
            if ($v instanceof FHIRString) {
                $this->addDiscriminator($v);
            } else {
                $this->addDiscriminator(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $ordered
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function setOrdered($ordered = null)
    {
        if (null === $ordered) {
            $this->ordered = null;
            return $this;
        }
        if ($ordered instanceof FHIRBoolean) {
            $this->ordered = $ordered;
            return $this;
        }
        $this->ordered = new FHIRBoolean($ordered);
        return $this;
    }

    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * How slices are interpreted when evaluating an instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules $rules
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function setRules(FHIRSlicingRules $rules = null)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
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
                throw new \DomainException(sprintf('FHIRElementDefinitionSlicing::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinitionSlicing::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRElementDefinitionSlicing);
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionSlicing)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinitionSlicing::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->discriminator)) {
            $type->addDiscriminator((string)$attributes->discriminator);
        }
        if (isset($children->discriminator)) {
            foreach($children->discriminator as $child) {
                $type->addDiscriminator(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->ordered)) {
            $type->setOrdered((string)$attributes->ordered);
        }
        if (isset($children->ordered)) {
            $type->setOrdered(FHIRBoolean::xmlUnserialize($children->ordered));
        }
        if (isset($children->rules)) {
            $type->setRules(FHIRSlicingRules::xmlUnserialize($children->rules));
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
            $sxe = new \SimpleXMLElement('<ElementDefinitionSlicing xmlns="http://hl7.org/fhir"></ElementDefinitionSlicing>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if ([] !== ($vs = $this->getDiscriminator())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_DISCRIMINATOR, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_DISCRIMINATOR));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_DISCRIMINATOR));
                }
            }
        }
        if (null !== ($v = $this->getOrdered())) {
            $sxe->addAttribute(self::FIELD_ORDERED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED));
            }
        }

        if (null !== ($v = $this->getRules())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULES));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDiscriminator())) {
            $a[self::FIELD_DISCRIMINATOR] = [];
            $a[self::FIELD_DISCRIMINATOR_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_DISCRIMINATOR][] = (string)$v;
                $a[self::FIELD_DISCRIMINATOR_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getOrdered())) {
            $a[self::FIELD_ORDERED] = (string)$v;
            $a[self::FIELD_ORDERED_EXT] = $v;
        }
        if (null !== ($v = $this->getRules())) {
            $a[self::FIELD_RULES] = $v;
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