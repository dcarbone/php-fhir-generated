<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 *
 * Class FHIRDeviceDefinitionMaterial
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition
 */
class FHIRDeviceDefinitionMaterial extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_MATERIAL;
    const FIELD_ALLERGENIC_INDICATOR = 'allergenicIndicator';
    const FIELD_ALLERGENIC_INDICATOR_EXT = '_allergenicIndicator';
    const FIELD_ALTERNATE = 'alternate';
    const FIELD_ALTERNATE_EXT = '_alternate';
    const FIELD_SUBSTANCE = 'substance';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $allergenicIndicator = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $alternate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $substance = null;

    /**
     * Validation map for fields in type DeviceDefinition.Material
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDeviceDefinitionMaterial Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinitionMaterial::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLERGENIC_INDICATOR]) || isset($data[self::FIELD_ALLERGENIC_INDICATOR_EXT])) {
            if (isset($data[self::FIELD_ALLERGENIC_INDICATOR])) {
                $value = $data[self::FIELD_ALLERGENIC_INDICATOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALLERGENIC_INDICATOR_EXT]) && is_array($data[self::FIELD_ALLERGENIC_INDICATOR_EXT])) {
                $ext = $data[self::FIELD_ALLERGENIC_INDICATOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAllergenicIndicator($value);
                } else if (is_array($value)) {
                    $this->setAllergenicIndicator(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAllergenicIndicator(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAllergenicIndicator(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ALTERNATE]) || isset($data[self::FIELD_ALTERNATE_EXT])) {
            if (isset($data[self::FIELD_ALTERNATE])) {
                $value = $data[self::FIELD_ALTERNATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALTERNATE_EXT]) && is_array($data[self::FIELD_ALTERNATE_EXT])) {
                $ext = $data[self::FIELD_ALTERNATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAlternate($value);
                } else if (is_array($value)) {
                    $this->setAlternate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAlternate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAlternate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
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
        return "<DeviceDefinitionMaterial{$xmlns}></DeviceDefinitionMaterial>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the substance is a known or suspected allergen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $allergenicIndicator
     * @return static
     */
    public function setAllergenicIndicator($allergenicIndicator = null)
    {
        if (null === $allergenicIndicator) {
            $this->allergenicIndicator = null;
            return $this;
        }
        if ($allergenicIndicator instanceof FHIRBoolean) {
            $this->allergenicIndicator = $allergenicIndicator;
            return $this;
        }
        $this->allergenicIndicator = new FHIRBoolean($allergenicIndicator);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates an alternative material of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $alternate
     * @return static
     */
    public function setAlternate($alternate = null)
    {
        if (null === $alternate) {
            $this->alternate = null;
            return $this;
        }
        if ($alternate instanceof FHIRBoolean) {
            $this->alternate = $alternate;
            return $this;
        }
        $this->alternate = new FHIRBoolean($alternate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $substance
     * @return static
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        $this->substance = $substance;
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
        if (null !== ($v = $this->getAllergenicIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLERGENIC_INDICATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAlternate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALTERNATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ALLERGENIC_INDICATOR])) {
            $v = $this->getAllergenicIndicator();
            foreach($validationRules[self::FIELD_ALLERGENIC_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_MATERIAL, self::FIELD_ALLERGENIC_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLERGENIC_INDICATOR])) {
                        $errs[self::FIELD_ALLERGENIC_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ALLERGENIC_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTERNATE])) {
            $v = $this->getAlternate();
            foreach($validationRules[self::FIELD_ALTERNATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_MATERIAL, self::FIELD_ALTERNATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATE])) {
                        $errs[self::FIELD_ALTERNATE] = [];
                    }
                    $errs[self::FIELD_ALTERNATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_MATERIAL, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial
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
                throw new \DomainException(sprintf('FHIRDeviceDefinitionMaterial::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceDefinitionMaterial::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceDefinitionMaterial;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceDefinitionMaterial)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceDefinitionMaterial::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial or null, %s seen.',
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
        if (isset($children->allergenicIndicator)) {
            $type->setAllergenicIndicator(FHIRBoolean::xmlUnserialize($children->allergenicIndicator));
        }
        if (isset($attributes->allergenicIndicator)) {
            $pt = $type->getAllergenicIndicator();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->allergenicIndicator);
            } else {
                $type->setAllergenicIndicator((string)$attributes->allergenicIndicator);
            }
        }
        if (isset($children->alternate)) {
            $type->setAlternate(FHIRBoolean::xmlUnserialize($children->alternate));
        }
        if (isset($attributes->alternate)) {
            $pt = $type->getAlternate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->alternate);
            } else {
                $type->setAlternate((string)$attributes->alternate);
            }
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($children->substance));
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
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLERGENIC_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAlternate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALTERNATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $a[self::FIELD_ALLERGENIC_INDICATOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ALLERGENIC_INDICATOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAlternate())) {
            $a[self::FIELD_ALTERNATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ALTERNATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
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