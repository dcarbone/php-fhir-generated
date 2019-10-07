<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileBinding
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileBinding extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONFORMANCE = 'conformance';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_IS_EXTENSIBLE = 'isExtensible';
    const FIELD_IS_EXTENSIBLE_EXT = '_isExtensible';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_REFERENCE_RESOURCE = 'referenceResource';
    const FIELD_REFERENCE_URI = 'referenceUri';
    const FIELD_REFERENCE_URI_EXT = '_referenceUri';

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance
     */
    private $conformance = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $isExtensible = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $referenceResource = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $referenceUri = null;

    /**
     * FHIRProfileBinding Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProfileBinding::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONFORMANCE])) {
            if ($data[self::FIELD_CONFORMANCE] instanceof FHIRBindingConformance) {
                $this->setConformance($data[self::FIELD_CONFORMANCE]);
            } else {
                $this->setConformance(new FHIRBindingConformance($data[self::FIELD_CONFORMANCE]));
            }
        }
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
        if (isset($data[self::FIELD_IS_EXTENSIBLE])) {
            $ext = (isset($data[self::FIELD_IS_EXTENSIBLE_EXT]) && is_array($data[self::FIELD_IS_EXTENSIBLE_EXT]))
                ? $data[self::FIELD_IS_EXTENSIBLE_EXT]
                : null;
            if ($data[self::FIELD_IS_EXTENSIBLE] instanceof FHIRBoolean) {
                $this->setIsExtensible($data[self::FIELD_IS_EXTENSIBLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_IS_EXTENSIBLE])) {
                $this->setIsExtensible(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_EXTENSIBLE]] + $ext));
            } else {
                $this->setIsExtensible(new FHIRBoolean($data[self::FIELD_IS_EXTENSIBLE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RESOURCE])) {
            if ($data[self::FIELD_REFERENCE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setReferenceResource($data[self::FIELD_REFERENCE_RESOURCE]);
            } else {
                $this->setReferenceResource(new FHIRResourceReference($data[self::FIELD_REFERENCE_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_URI])) {
            $ext = (isset($data[self::FIELD_REFERENCE_URI_EXT]) && is_array($data[self::FIELD_REFERENCE_URI_EXT]))
                ? $data[self::FIELD_REFERENCE_URI_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE_URI] instanceof FHIRUri) {
                $this->setReferenceUri($data[self::FIELD_REFERENCE_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE_URI])) {
                $this->setReferenceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_REFERENCE_URI]] + $ext));
            } else {
                $this->setReferenceUri(new FHIRUri($data[self::FIELD_REFERENCE_URI]));
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
        return "<ProfileBinding{$xmlns}></ProfileBinding>";
    }


    /**
     * Binding conformance for applications
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance
     */
    public function getConformance()
    {
        return $this->conformance;
    }

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance $conformance
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function setConformance(FHIRBindingConformance $conformance = null)
    {
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getIsExtensible()
    {
        return $this->isExtensible;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isExtensible
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function setIsExtensible($isExtensible = null)
    {
        if (null === $isExtensible) {
            $this->isExtensible = null;
            return $this;
        }
        if ($isExtensible instanceof FHIRBoolean) {
            $this->isExtensible = $isExtensible;
            return $this;
        }
        $this->isExtensible = new FHIRBoolean($isExtensible);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReferenceResource()
    {
        return $this->referenceResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $referenceResource
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function setReferenceResource(FHIRResourceReference $referenceResource = null)
    {
        $this->referenceResource = $referenceResource;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getReferenceUri()
    {
        return $this->referenceUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $referenceUri
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public function setReferenceUri($referenceUri = null)
    {
        if (null === $referenceUri) {
            $this->referenceUri = null;
            return $this;
        }
        if ($referenceUri instanceof FHIRUri) {
            $this->referenceUri = $referenceUri;
            return $this;
        }
        $this->referenceUri = new FHIRUri($referenceUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
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
                throw new \DomainException(sprintf('FHIRProfileBinding::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileBinding::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRProfileBinding);
        } elseif (!is_object($type) || !($type instanceof FHIRProfileBinding)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileBinding::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding or null, %s seen.',
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
        if (isset($children->conformance)) {
            $type->setConformance(FHIRBindingConformance::xmlUnserialize($children->conformance));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->isExtensible)) {
            $type->setIsExtensible((string)$attributes->isExtensible);
        }
        if (isset($children->isExtensible)) {
            $type->setIsExtensible(FHIRBoolean::xmlUnserialize($children->isExtensible));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->referenceResource)) {
            $type->setReferenceResource(FHIRResourceReference::xmlUnserialize($children->referenceResource));
        }
        if (isset($attributes->referenceUri)) {
            $type->setReferenceUri((string)$attributes->referenceUri);
        }
        if (isset($children->referenceUri)) {
            $type->setReferenceUri(FHIRUri::xmlUnserialize($children->referenceUri));
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

        if (null !== ($v = $this->getConformance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONFORMANCE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsExtensible())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_EXTENSIBLE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferenceResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_RESOURCE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_URI, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getConformance())) {
            $a[self::FIELD_CONFORMANCE] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getIsExtensible())) {
            $a[self::FIELD_IS_EXTENSIBLE] = (string)$v;
            $a[self::FIELD_IS_EXTENSIBLE_EXT] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $a[self::FIELD_REFERENCE_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getReferenceUri())) {
            $a[self::FIELD_REFERENCE_URI] = (string)$v;
            $a[self::FIELD_REFERENCE_URI_EXT] = $v;
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