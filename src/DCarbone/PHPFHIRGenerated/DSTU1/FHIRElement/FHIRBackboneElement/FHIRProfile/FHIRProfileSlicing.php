<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileSlicing
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileSlicing extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_SLICING;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DISCRIMINATOR = 'discriminator';
    const FIELD_DISCRIMINATOR_EXT = '_discriminator';
    const FIELD_ORDERED = 'ordered';
    const FIELD_ORDERED_EXT = '_ordered';
    const FIELD_RULES = 'rules';
    const FIELD_RULES_EXT = '_rules';

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    private $discriminator = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $ordered = null;
    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules
     */
    private $rules = null;

    /**
     * FHIRProfileSlicing Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProfileSlicing::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISCRIMINATOR])) {
            $ext = (isset($data[self::FIELD_DISCRIMINATOR_EXT]) && is_array($data[self::FIELD_DISCRIMINATOR_EXT]))
                ? $data[self::FIELD_DISCRIMINATOR_EXT]
                : null;
            if ($data[self::FIELD_DISCRIMINATOR] instanceof FHIRId) {
                $this->setDiscriminator($data[self::FIELD_DISCRIMINATOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISCRIMINATOR])) {
                $this->setDiscriminator(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_DISCRIMINATOR]] + $ext));
            } else {
                $this->setDiscriminator(new FHIRId($data[self::FIELD_DISCRIMINATOR]));
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
            $ext = (isset($data[self::FIELD_RULES_EXT]) && is_array($data[self::FIELD_RULES_EXT]))
                ? $data[self::FIELD_RULES_EXT]
                : null;
            if ($data[self::FIELD_RULES] instanceof FHIRSlicingRules) {
                $this->setRules($data[self::FIELD_RULES]);
            } elseif ($ext && is_scalar($data[self::FIELD_RULES])) {
                $this->setRules(new FHIRSlicingRules([FHIRSlicingRules::FIELD_VALUE => $data[self::FIELD_RULES]] + $ext));
            } else {
                $this->setRules(new FHIRSlicingRules($data[self::FIELD_RULES]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
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
        return "<ProfileSlicing{$xmlns}></ProfileSlicing>";
    }


    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $discriminator
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     */
    public function setDiscriminator($discriminator = null)
    {
        if (null === $discriminator) {
            $this->discriminator = null;
            return $this;
        }
        if ($discriminator instanceof FHIRId) {
            $this->discriminator = $discriminator;
            return $this;
        }
        $this->discriminator = new FHIRId($discriminator);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $ordered
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
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
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules $rules
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     */
    public function setRules(FHIRSlicingRules $rules = null)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
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
                throw new \DomainException(sprintf('FHIRProfileSlicing::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileSlicing::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProfileSlicing;
        } elseif (!is_object($type) || !($type instanceof FHIRProfileSlicing)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileSlicing::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing or null, %s seen.',
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
        if (isset($attributes->discriminator)) {
            $type->setDiscriminator((string)$attributes->discriminator);
        }
        if (isset($children->discriminator)) {
            $type->setDiscriminator(FHIRId::xmlUnserialize($children->discriminator));
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getDiscriminator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISCRIMINATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrdered())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRules())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULES, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDiscriminator())) {
            $a[self::FIELD_DISCRIMINATOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DISCRIMINATOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getOrdered())) {
            $a[self::FIELD_ORDERED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ORDERED_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getRules())) {
            $a[self::FIELD_RULES] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_RULES_EXT] = $v;
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