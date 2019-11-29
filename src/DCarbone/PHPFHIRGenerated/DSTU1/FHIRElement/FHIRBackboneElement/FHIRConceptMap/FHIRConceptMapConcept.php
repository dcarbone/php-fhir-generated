<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concept systems.
 *
 * Class FHIRConceptMapConcept
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapConcept extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONCEPT;
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_DEPENDS_ON = 'dependsOn';
    const FIELD_MAP = 'map';
    const FIELD_SYSTEM = 'system';
    const FIELD_SYSTEM_EXT = '_system';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies concept being mapped.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified concept can be resolved, and it has the specified
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    protected $dependsOn = [];

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A concept from the target value set that this concept maps to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap[]
     */
    protected $map = [];

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System that defines the concept being mapped.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $system = null;

    /**
     * Validation map for fields in type ConceptMap.Concept
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRConceptMapConcept Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapConcept::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRCode) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode(array_merge($ext, $data[self::FIELD_CODE])));
                }
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DEPENDS_ON])) {
            if (is_array($data[self::FIELD_DEPENDS_ON])) {
                foreach($data[self::FIELD_DEPENDS_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConceptMapDependsOn) {
                        $this->addDependsOn($v);
                    } else {
                        $this->addDependsOn(new FHIRConceptMapDependsOn($v));
                    }
                }
            } else if ($data[self::FIELD_DEPENDS_ON] instanceof FHIRConceptMapDependsOn) {
                $this->addDependsOn($data[self::FIELD_DEPENDS_ON]);
            } else {
                $this->addDependsOn(new FHIRConceptMapDependsOn($data[self::FIELD_DEPENDS_ON]));
            }
        }
        if (isset($data[self::FIELD_MAP])) {
            if (is_array($data[self::FIELD_MAP])) {
                foreach($data[self::FIELD_MAP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConceptMapMap) {
                        $this->addMap($v);
                    } else {
                        $this->addMap(new FHIRConceptMapMap($v));
                    }
                }
            } else if ($data[self::FIELD_MAP] instanceof FHIRConceptMapMap) {
                $this->addMap($data[self::FIELD_MAP]);
            } else {
                $this->addMap(new FHIRConceptMapMap($data[self::FIELD_MAP]));
            }
        }
        if (isset($data[self::FIELD_SYSTEM])) {
            $ext = (isset($data[self::FIELD_SYSTEM_EXT]) && is_array($data[self::FIELD_SYSTEM_EXT]))
                ? $data[self::FIELD_SYSTEM_EXT]
                : null;
            if ($data[self::FIELD_SYSTEM] instanceof FHIRUri) {
                $this->setSystem($data[self::FIELD_SYSTEM]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SYSTEM])) {
                    $this->setSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_SYSTEM]] + $ext));
                } else if (is_array($data[self::FIELD_SYSTEM])) {
                    $this->setSystem(new FHIRUri(array_merge($ext, $data[self::FIELD_SYSTEM])));
                }
            } else {
                $this->setSystem(new FHIRUri($data[self::FIELD_SYSTEM]));
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
        return "<ConceptMapConcept{$xmlns}></ConceptMapConcept>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies concept being mapped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identifies concept being mapped.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $code
     * @return static
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
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified concept can be resolved, and it has the specified
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified concept can be resolved, and it has the specified
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
     * @return static
     */
    public function addDependsOn(FHIRConceptMapDependsOn $dependsOn = null)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified concept can be resolved, and it has the specified
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $dependsOn
     * @return static
     */
    public function setDependsOn(array $dependsOn = [])
    {
        $this->dependsOn = [];
        if ([] === $dependsOn) {
            return $this;
        }
        foreach($dependsOn as $v) {
            if ($v instanceof FHIRConceptMapDependsOn) {
                $this->addDependsOn($v);
            } else {
                $this->addDependsOn(new FHIRConceptMapDependsOn($v));
            }
        }
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A concept from the target value set that this concept maps to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A concept from the target value set that this concept maps to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap $map
     * @return static
     */
    public function addMap(FHIRConceptMapMap $map = null)
    {
        $this->map[] = $map;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A concept from the target value set that this concept maps to.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap[] $map
     * @return static
     */
    public function setMap(array $map = [])
    {
        $this->map = [];
        if ([] === $map) {
            return $this;
        }
        foreach($map as $v) {
            if ($v instanceof FHIRConceptMapMap) {
                $this->addMap($v);
            } else {
                $this->addMap(new FHIRConceptMapMap($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System that defines the concept being mapped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System that defines the concept being mapped.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $system
     * @return static
     */
    public function setSystem($system = null)
    {
        if (null === $system) {
            $this->system = null;
            return $this;
        }
        if ($system instanceof FHIRUri) {
            $this->system = $system;
            return $this;
        }
        $this->system = new FHIRUri($system);
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept
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
                throw new \DomainException(sprintf('FHIRConceptMapConcept::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConceptMapConcept::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConceptMapConcept;
        } elseif (!is_object($type) || !($type instanceof FHIRConceptMapConcept)) {
            throw new \RuntimeException(sprintf(
                'FHIRConceptMapConcept::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept or null, %s seen.',
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
        if (isset($attributes->code)) {
            $type->setCode((string)$attributes->code);
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($children->dependsOn)) {
            foreach($children->dependsOn as $child) {
                $type->addDependsOn(FHIRConceptMapDependsOn::xmlUnserialize($child));
            }
        }
        if (isset($children->map)) {
            foreach($children->map as $child) {
                $type->addMap(FHIRConceptMapMap::xmlUnserialize($child));
            }
        }
        if (isset($attributes->system)) {
            $type->setSystem((string)$attributes->system);
        }
        if (isset($children->system)) {
            $type->setSystem(FHIRUri::xmlUnserialize($children->system));
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

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDependsOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEPENDS_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMap())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MAP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDependsOn())) {
            $a[self::FIELD_DEPENDS_ON] = $vs;
        }
        if ([] !== ($vs = $this->getMap())) {
            $a[self::FIELD_MAP] = $vs;
        }
        if (null !== ($v = $this->getSystem())) {
            $a[self::FIELD_SYSTEM] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_SYSTEM_EXT] = $enc;
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