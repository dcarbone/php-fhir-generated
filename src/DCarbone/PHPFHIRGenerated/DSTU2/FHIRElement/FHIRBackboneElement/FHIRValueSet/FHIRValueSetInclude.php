<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetInclude
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetInclude extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE;
    const FIELD_CONCEPT = 'concept';
    const FIELD_FILTER = 'filter';
    const FIELD_SYSTEM = 'system';
    const FIELD_SYSTEM_EXT = '_system';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Specifies a concept to be included or excluded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1[]
     */
    protected $concept = [];

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Select concepts by specify a matching criteria based on the properties
     * (including relationships) defined by the system. If multiple filters are
     * specified, they SHALL all be true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter[]
     */
    protected $filter = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is the code system from which the selected codes come
     * from.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $system = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the code system that the codes are selected from.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type ValueSet.Include
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRValueSetInclude Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetInclude::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONCEPT])) {
            if (is_array($data[self::FIELD_CONCEPT])) {
                foreach($data[self::FIELD_CONCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetConcept1) {
                        $this->addConcept($v);
                    } else {
                        $this->addConcept(new FHIRValueSetConcept1($v));
                    }
                }
            } else if ($data[self::FIELD_CONCEPT] instanceof FHIRValueSetConcept1) {
                $this->addConcept($data[self::FIELD_CONCEPT]);
            } else {
                $this->addConcept(new FHIRValueSetConcept1($data[self::FIELD_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_FILTER])) {
            if (is_array($data[self::FIELD_FILTER])) {
                foreach($data[self::FIELD_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRValueSetFilter) {
                        $this->addFilter($v);
                    } else {
                        $this->addFilter(new FHIRValueSetFilter($v));
                    }
                }
            } else if ($data[self::FIELD_FILTER] instanceof FHIRValueSetFilter) {
                $this->addFilter($data[self::FIELD_FILTER]);
            } else {
                $this->addFilter(new FHIRValueSetFilter($data[self::FIELD_FILTER]));
            }
        }
        if (isset($data[self::FIELD_SYSTEM]) || isset($data[self::FIELD_SYSTEM_EXT])) {
            if (isset($data[self::FIELD_SYSTEM])) {
                $value = $data[self::FIELD_SYSTEM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SYSTEM_EXT]) && is_array($data[self::FIELD_SYSTEM_EXT])) {
                $ext = $data[self::FIELD_SYSTEM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setSystem($value);
                } else if (is_array($value)) {
                    $this->setSystem(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSystem(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            if (isset($data[self::FIELD_VERSION])) {
                $value = $data[self::FIELD_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) {
                $ext = $data[self::FIELD_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
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
        return "<ValueSetInclude{$xmlns}></ValueSetInclude>";
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Specifies a concept to be included or excluded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Specifies a concept to be included or excluded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1 $concept
     * @return static
     */
    public function addConcept(FHIRValueSetConcept1 $concept = null)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Specifies a concept to be included or excluded.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1[] $concept
     * @return static
     */
    public function setConcept(array $concept = [])
    {
        $this->concept = [];
        if ([] === $concept) {
            return $this;
        }
        foreach($concept as $v) {
            if ($v instanceof FHIRValueSetConcept1) {
                $this->addConcept($v);
            } else {
                $this->addConcept(new FHIRValueSetConcept1($v));
            }
        }
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Select concepts by specify a matching criteria based on the properties
     * (including relationships) defined by the system. If multiple filters are
     * specified, they SHALL all be true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Select concepts by specify a matching criteria based on the properties
     * (including relationships) defined by the system. If multiple filters are
     * specified, they SHALL all be true.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter $filter
     * @return static
     */
    public function addFilter(FHIRValueSetFilter $filter = null)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Select concepts by specify a matching criteria based on the properties
     * (including relationships) defined by the system. If multiple filters are
     * specified, they SHALL all be true.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter[] $filter
     * @return static
     */
    public function setFilter(array $filter = [])
    {
        $this->filter = [];
        if ([] === $filter) {
            return $this;
        }
        foreach($filter as $v) {
            if ($v instanceof FHIRValueSetFilter) {
                $this->addFilter($v);
            } else {
                $this->addFilter(new FHIRValueSetFilter($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is the code system from which the selected codes come
     * from.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is the code system from which the selected codes come
     * from.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $system
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the code system that the codes are selected from.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The version of the code system that the codes are selected from.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
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
        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONCEPT])) {
            $v = $this->getConcept();
            foreach($validationRules[self::FIELD_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE, self::FIELD_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCEPT])) {
                        $errs[self::FIELD_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER])) {
            $v = $this->getFilter();
            foreach($validationRules[self::FIELD_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE, self::FIELD_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER])) {
                        $errs[self::FIELD_FILTER] = [];
                    }
                    $errs[self::FIELD_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYSTEM])) {
            $v = $this->getSystem();
            foreach($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE, self::FIELD_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYSTEM])) {
                        $errs[self::FIELD_SYSTEM] = [];
                    }
                    $errs[self::FIELD_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude
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
                throw new \DomainException(sprintf('FHIRValueSetInclude::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetInclude::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetInclude;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetInclude)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetInclude::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude or null, %s seen.',
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
        if (isset($children->concept)) {
            foreach($children->concept as $child) {
                $type->addConcept(FHIRValueSetConcept1::xmlUnserialize($child));
            }
        }
        if (isset($children->filter)) {
            foreach($children->filter as $child) {
                $type->addFilter(FHIRValueSetFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->system)) {
            $type->setSystem(FHIRUri::xmlUnserialize($children->system));
        }
        if (isset($attributes->system)) {
            $pt = $type->getSystem();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->system);
            } else {
                $type->setSystem((string)$attributes->system);
            }
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        if (isset($attributes->version)) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->version);
            } else {
                $type->setVersion((string)$attributes->version);
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
        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getConcept())) {
            $a[self::FIELD_CONCEPT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONCEPT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            $a[self::FIELD_FILTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FILTER][] = $v;
            }
        }
        if (null !== ($v = $this->getSystem())) {
            $a[self::FIELD_SYSTEM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_SYSTEM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VERSION_EXT] = $enc;
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