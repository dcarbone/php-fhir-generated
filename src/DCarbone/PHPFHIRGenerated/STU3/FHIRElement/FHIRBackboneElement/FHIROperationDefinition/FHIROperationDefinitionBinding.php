<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 *
 * Class FHIROperationDefinitionBinding
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionBinding extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING;
    const FIELD_STRENGTH = 'strength';
    const FIELD_STRENGTH_EXT = '_strength';
    const FIELD_VALUE_SET_URI = 'valueSetUri';
    const FIELD_VALUE_SET_URI_EXT = '_valueSetUri';
    const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';

    /** @var string */
    private $_xmlns = '';

    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength
     */
    protected $strength = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $valueSetUri = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $valueSetReference = null;

    /**
     * Validation map for fields in type OperationDefinition.Binding
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIROperationDefinitionBinding Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionBinding::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STRENGTH]) || isset($data[self::FIELD_STRENGTH_EXT])) {
            $value = isset($data[self::FIELD_STRENGTH]) ? $data[self::FIELD_STRENGTH] : null;
            $ext = (isset($data[self::FIELD_STRENGTH_EXT]) && is_array($data[self::FIELD_STRENGTH_EXT])) ? $ext = $data[self::FIELD_STRENGTH_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBindingStrength) {
                    $this->setStrength($value);
                } else if (is_array($value)) {
                    $this->setStrength(new FHIRBindingStrength(array_merge($ext, $value)));
                } else {
                    $this->setStrength(new FHIRBindingStrength([FHIRBindingStrength::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStrength(new FHIRBindingStrength($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_URI]) || isset($data[self::FIELD_VALUE_SET_URI_EXT])) {
            $value = isset($data[self::FIELD_VALUE_SET_URI]) ? $data[self::FIELD_VALUE_SET_URI] : null;
            $ext = (isset($data[self::FIELD_VALUE_SET_URI_EXT]) && is_array($data[self::FIELD_VALUE_SET_URI_EXT])) ? $ext = $data[self::FIELD_VALUE_SET_URI_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setValueSetUri($value);
                } else if (is_array($value)) {
                    $this->setValueSetUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setValueSetUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueSetUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_REFERENCE])) {
            if ($data[self::FIELD_VALUE_SET_REFERENCE] instanceof FHIRReference) {
                $this->setValueSetReference($data[self::FIELD_VALUE_SET_REFERENCE]);
            } else {
                $this->setValueSetReference(new FHIRReference($data[self::FIELD_VALUE_SET_REFERENCE]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<OperationDefinitionBinding{$xmlns}></OperationDefinitionBinding>";
    }

    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength $strength
     * @return static
     */
    public function setStrength(FHIRBindingStrength $strength = null)
    {
        $this->_trackValueSet($this->strength, $strength);
        $this->strength = $strength;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getValueSetUri()
    {
        return $this->valueSetUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $valueSetUri
     * @return static
     */
    public function setValueSetUri($valueSetUri = null)
    {
        if (null !== $valueSetUri && !($valueSetUri instanceof FHIRUri)) {
            $valueSetUri = new FHIRUri($valueSetUri);
        }
        $this->_trackValueSet($this->valueSetUri, $valueSetUri);
        $this->valueSetUri = $valueSetUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getValueSetReference()
    {
        return $this->valueSetReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $valueSetReference
     * @return static
     */
    public function setValueSetReference(FHIRReference $valueSetReference = null)
    {
        $this->_trackValueSet($this->valueSetReference, $valueSetReference);
        $this->valueSetReference = $valueSetReference;
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
        if (null !== ($v = $this->getStrength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSetUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH])) {
            $v = $this->getStrength();
            foreach($validationRules[self::FIELD_STRENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING, self::FIELD_STRENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH])) {
                        $errs[self::FIELD_STRENGTH] = [];
                    }
                    $errs[self::FIELD_STRENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_URI])) {
            $v = $this->getValueSetUri();
            foreach($validationRules[self::FIELD_VALUE_SET_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING, self::FIELD_VALUE_SET_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_URI])) {
                        $errs[self::FIELD_VALUE_SET_URI] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET_REFERENCE])) {
            $v = $this->getValueSetReference();
            foreach($validationRules[self::FIELD_VALUE_SET_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING, self::FIELD_VALUE_SET_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET_REFERENCE])) {
                        $errs[self::FIELD_VALUE_SET_REFERENCE] = [];
                    }
                    $errs[self::FIELD_VALUE_SET_REFERENCE][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIROperationDefinitionBinding::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationDefinitionBinding::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIROperationDefinitionBinding(null);
        } elseif (!is_object($type) || !($type instanceof FHIROperationDefinitionBinding)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationDefinitionBinding::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_STRENGTH === $n->nodeName) {
                $type->setStrength(FHIRBindingStrength::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SET_URI === $n->nodeName) {
                $type->setValueSetUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SET_REFERENCE === $n->nodeName) {
                $type->setValueSetReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_SET_URI);
        if (null !== $n) {
            $pt = $type->getValueSetUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueSetUri($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getStrength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STRENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSetUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SET_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSetReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SET_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getStrength())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STRENGTH] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBindingStrength::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STRENGTH_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueSetUri())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE_SET_URI] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUri::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_VALUE_SET_URI_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            $a[self::FIELD_VALUE_SET_REFERENCE] = $v;
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