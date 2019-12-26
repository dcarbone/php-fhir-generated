<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapDependsOn
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapDependsOn extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON;
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROPERTY_EXT = '_property';
    const FIELD_SYSTEM = 'system';
    const FIELD_SYSTEM_EXT = '_system';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $code = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $display = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an element that holds a coded value that corresponds to a code
     * system property. The idea is that the information model carries an element
     * somwhere that is labeled to correspond with a code system property.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $property = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $system = null;

    /**
     * Validation map for fields in type ConceptMap.DependsOn
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRConceptMapDependsOn Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapDependsOn::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE]) || isset($data[self::FIELD_CODE_EXT])) {
            if (isset($data[self::FIELD_CODE])) {
                $value = $data[self::FIELD_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT])) {
                $ext = $data[self::FIELD_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCode($value);
                } else if (is_array($value)) {
                    $this->setCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCode(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DISPLAY]) || isset($data[self::FIELD_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_DISPLAY])) {
                $value = $data[self::FIELD_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDisplay($value);
                } else if (is_array($value)) {
                    $this->setDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PROPERTY]) || isset($data[self::FIELD_PROPERTY_EXT])) {
            if (isset($data[self::FIELD_PROPERTY])) {
                $value = $data[self::FIELD_PROPERTY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROPERTY_EXT]) && is_array($data[self::FIELD_PROPERTY_EXT])) {
                $ext = $data[self::FIELD_PROPERTY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setProperty($value);
                } else if (is_array($value)) {
                    $this->setProperty(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setProperty(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProperty(new FHIRUri($ext));
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
        return "<ConceptMapDependsOn{$xmlns}></ConceptMapDependsOn>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRString) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRString($code);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay($display = null)
    {
        if (null === $display) {
            $this->display = null;
            return $this;
        }
        if ($display instanceof FHIRString) {
            $this->display = $display;
            return $this;
        }
        $this->display = new FHIRString($display);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an element that holds a coded value that corresponds to a code
     * system property. The idea is that the information model carries an element
     * somwhere that is labeled to correspond with a code system property.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to an element that holds a coded value that corresponds to a code
     * system property. The idea is that the information model carries an element
     * somwhere that is labeled to correspond with a code system property.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $property
     * @return static
     */
    public function setProperty($property = null)
    {
        if (null === $property) {
            $this->property = null;
            return $this;
        }
        if ($property instanceof FHIRUri) {
            $this->property = $property;
            return $this;
        }
        $this->property = new FHIRUri($property);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $system
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProperty())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROPERTY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SYSTEM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY])) {
            $v = $this->getDisplay();
            foreach($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON, self::FIELD_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY])) {
                        $errs[self::FIELD_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYSTEM])) {
            $v = $this->getSystem();
            foreach($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON, self::FIELD_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYSTEM])) {
                        $errs[self::FIELD_SYSTEM] = [];
                    }
                    $errs[self::FIELD_SYSTEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
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
                throw new \DomainException(sprintf('FHIRConceptMapDependsOn::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConceptMapDependsOn::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConceptMapDependsOn;
        } elseif (!is_object($type) || !($type instanceof FHIRConceptMapDependsOn)) {
            throw new \RuntimeException(sprintf(
                'FHIRConceptMapDependsOn::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn or null, %s seen.',
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
        if (isset($children->code)) {
            $type->setCode(FHIRString::xmlUnserialize($children->code));
        }
        if (isset($attributes->code)) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->code);
            } else {
                $type->setCode((string)$attributes->code);
            }
        }
        if (isset($children->display)) {
            $type->setDisplay(FHIRString::xmlUnserialize($children->display));
        }
        if (isset($attributes->display)) {
            $pt = $type->getDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->display);
            } else {
                $type->setDisplay((string)$attributes->display);
            }
        }
        if (isset($children->property)) {
            $type->setProperty(FHIRUri::xmlUnserialize($children->property));
        }
        if (isset($attributes->property)) {
            $pt = $type->getProperty();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->property);
            } else {
                $type->setProperty((string)$attributes->property);
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
        if (null !== ($v = $this->getDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProperty())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            $a[self::FIELD_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_PROPERTY_EXT] = $enc;
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