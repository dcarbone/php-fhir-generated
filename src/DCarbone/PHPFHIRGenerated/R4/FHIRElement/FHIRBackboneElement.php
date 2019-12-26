<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Base definition for all elements that are defined inside a resource - but not
 * those in a data type.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRBackboneElement
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRBackboneElement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT;
    const FIELD_MODIFIER_EXTENSION = 'modifierExtension';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element and that modifies the understanding of the element in
     * which it is contained and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer can define an extension, there is a set of requirements that SHALL
     * be met as part of the definition of the extension. Applications processing a
     * resource are required to check for modifier extensions. Modifier extensions
     * SHALL NOT change the meaning of any elements on Resource or DomainResource
     * (including cannot change the meaning of modifierExtension itself).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension[]
     */
    protected $modifierExtension = [];

    /**
     * Validation map for fields in type BackboneElement
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRBackboneElement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBackboneElement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MODIFIER_EXTENSION])) {
            if (is_array($data[self::FIELD_MODIFIER_EXTENSION])) {
                foreach($data[self::FIELD_MODIFIER_EXTENSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExtension) {
                        $this->addModifierExtension($v);
                    } else {
                        $this->addModifierExtension(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_MODIFIER_EXTENSION] instanceof FHIRExtension) {
                $this->addModifierExtension($data[self::FIELD_MODIFIER_EXTENSION]);
            } else {
                $this->addModifierExtension(new FHIRExtension($data[self::FIELD_MODIFIER_EXTENSION]));
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
        return "<BackboneElement{$xmlns}></BackboneElement>";
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element and that modifies the understanding of the element in
     * which it is contained and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer can define an extension, there is a set of requirements that SHALL
     * be met as part of the definition of the extension. Applications processing a
     * resource are required to check for modifier extensions. Modifier extensions
     * SHALL NOT change the meaning of any elements on Resource or DomainResource
     * (including cannot change the meaning of modifierExtension itself).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension[]
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element and that modifies the understanding of the element in
     * which it is contained and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer can define an extension, there is a set of requirements that SHALL
     * be met as part of the definition of the extension. Applications processing a
     * resource are required to check for modifier extensions. Modifier extensions
     * SHALL NOT change the meaning of any elements on Resource or DomainResource
     * (including cannot change the meaning of modifierExtension itself).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension $modifierExtension
     * @return static
     */
    public function addModifierExtension(FHIRExtension $modifierExtension = null)
    {
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the element and that modifies the understanding of the element in
     * which it is contained and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer can define an extension, there is a set of requirements that SHALL
     * be met as part of the definition of the extension. Applications processing a
     * resource are required to check for modifier extensions. Modifier extensions
     * SHALL NOT change the meaning of any elements on Resource or DomainResource
     * (including cannot change the meaning of modifierExtension itself).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension[] $modifierExtension
     * @return static
     */
    public function setModifierExtension(array $modifierExtension = [])
    {
        $this->modifierExtension = [];
        if ([] === $modifierExtension) {
            return $this;
        }
        foreach($modifierExtension as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addModifierExtension($v);
            } else {
                $this->addModifierExtension(new FHIRExtension($v));
            }
        }
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
        if ([] !== ($vs = $this->getModifierExtension())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFIER_EXTENSION, $i)] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
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
                throw new \DomainException(sprintf('FHIRBackboneElement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBackboneElement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBackboneElement;
        } elseif (!is_object($type) || !($type instanceof FHIRBackboneElement)) {
            throw new \RuntimeException(sprintf(
                'FHIRBackboneElement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement or null, %s seen.',
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
        if (isset($children->modifierExtension)) {
            foreach($children->modifierExtension as $child) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getModifierExtension())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIER_EXTENSION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getModifierExtension())) {
            $a[self::FIELD_MODIFIER_EXTENSION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODIFIER_EXTENSION][] = $v;
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