<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionBinding
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition
 */
class FHIRElementDefinitionBinding extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BINDING;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_STRENGTH = 'strength';
    const FIELD_STRENGTH_EXT = '_strength';
    const FIELD_VALUE_SET_REFERENCE = 'valueSetReference';
    const FIELD_VALUE_SET_URI = 'valueSetUri';
    const FIELD_VALUE_SET_URI_EXT = '_valueSetUri';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength
     */
    private $strength = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $valueSetReference = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $valueSetUri = null;

    /**
     * FHIRElementDefinitionBinding Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionBinding::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_STRENGTH])) {
            $ext = (isset($data[self::FIELD_STRENGTH_EXT]) && is_array($data[self::FIELD_STRENGTH_EXT]))
                ? $data[self::FIELD_STRENGTH_EXT]
                : null;
            if ($data[self::FIELD_STRENGTH] instanceof FHIRBindingStrength) {
                $this->setStrength($data[self::FIELD_STRENGTH]);
            } elseif ($ext && is_scalar($data[self::FIELD_STRENGTH])) {
                $this->setStrength(new FHIRBindingStrength([FHIRBindingStrength::FIELD_VALUE => $data[self::FIELD_STRENGTH]] + $ext));
            } else {
                $this->setStrength(new FHIRBindingStrength($data[self::FIELD_STRENGTH]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_REFERENCE])) {
            if ($data[self::FIELD_VALUE_SET_REFERENCE] instanceof FHIRReference) {
                $this->setValueSetReference($data[self::FIELD_VALUE_SET_REFERENCE]);
            } else {
                $this->setValueSetReference(new FHIRReference($data[self::FIELD_VALUE_SET_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET_URI])) {
            $ext = (isset($data[self::FIELD_VALUE_SET_URI_EXT]) && is_array($data[self::FIELD_VALUE_SET_URI_EXT]))
                ? $data[self::FIELD_VALUE_SET_URI_EXT]
                : null;
            if ($data[self::FIELD_VALUE_SET_URI] instanceof FHIRUri) {
                $this->setValueSetUri($data[self::FIELD_VALUE_SET_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE_SET_URI])) {
                $this->setValueSetUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_VALUE_SET_URI]] + $ext));
            } else {
                $this->setValueSetUri(new FHIRUri($data[self::FIELD_VALUE_SET_URI]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
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
        return "<ElementDefinitionBinding{$xmlns}></ElementDefinitionBinding>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
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
     * Describes the intended use of this particular set of codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
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
     * Indication of the degree of conformance expectations associated with a binding.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding -
     * that is, the degree to which the provided value set must be adhered to in the
     * instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength $strength
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function setStrength(FHIRBindingStrength $strength = null)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $valueSetReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function setValueSetReference(FHIRReference $valueSetReference = null)
    {
        $this->valueSetReference = $valueSetReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition (e.g. implicit value set) that
     * identifies the set of codes to be used. If the binding refers to an explicit
     * value set - the normal case - then use a Reference(ValueSet) preferably
     * containing the canonical URL for the value set. If the reference is to an
     * implicit value set - usually, an IETF RFC that defines a grammar, such as mime
     * types - then use a uri.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $valueSetUri
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function setValueSetUri($valueSetUri = null)
    {
        if (null === $valueSetUri) {
            $this->valueSetUri = null;
            return $this;
        }
        if ($valueSetUri instanceof FHIRUri) {
            $this->valueSetUri = $valueSetUri;
            return $this;
        }
        $this->valueSetUri = new FHIRUri($valueSetUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
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
                throw new \DomainException(sprintf('FHIRElementDefinitionBinding::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinitionBinding::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRElementDefinitionBinding;
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionBinding)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinitionBinding::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding or null, %s seen.',
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
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->strength)) {
            $type->setStrength(FHIRBindingStrength::xmlUnserialize($children->strength));
        }
        if (isset($children->valueSetReference)) {
            $type->setValueSetReference(FHIRReference::xmlUnserialize($children->valueSetReference));
        }
        if (isset($attributes->valueSetUri)) {
            $type->setValueSetUri((string)$attributes->valueSetUri);
        }
        if (isset($children->valueSetUri)) {
            $type->setValueSetUri(FHIRUri::xmlUnserialize($children->valueSetUri));
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStrength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRENGTH, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValueSetReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSetUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET_URI, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStrength())) {
            $a[self::FIELD_STRENGTH] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STRENGTH_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValueSetReference())) {
            $a[self::FIELD_VALUE_SET_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getValueSetUri())) {
            $a[self::FIELD_VALUE_SET_URI] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALUE_SET_URI_EXT] = $v;
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