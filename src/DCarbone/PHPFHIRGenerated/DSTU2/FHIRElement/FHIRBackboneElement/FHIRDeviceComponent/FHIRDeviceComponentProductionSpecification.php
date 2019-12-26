<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent;

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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the characteristics, operational status and capabilities of a
 * medical-related component of a medical device.
 *
 * Class FHIRDeviceComponentProductionSpecification
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent
 */
class FHIRDeviceComponentProductionSpecification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION;
    const FIELD_COMPONENT_ID = 'componentId';
    const FIELD_PRODUCTION_SPEC = 'productionSpec';
    const FIELD_PRODUCTION_SPEC_EXT = '_productionSpec';
    const FIELD_SPEC_TYPE = 'specType';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $componentId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $productionSpec = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $specType = null;

    /**
     * Validation map for fields in type DeviceComponent.ProductionSpecification
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDeviceComponentProductionSpecification Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceComponentProductionSpecification::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMPONENT_ID])) {
            if ($data[self::FIELD_COMPONENT_ID] instanceof FHIRIdentifier) {
                $this->setComponentId($data[self::FIELD_COMPONENT_ID]);
            } else {
                $this->setComponentId(new FHIRIdentifier($data[self::FIELD_COMPONENT_ID]));
            }
        }
        if (isset($data[self::FIELD_PRODUCTION_SPEC]) || isset($data[self::FIELD_PRODUCTION_SPEC_EXT])) {
            if (isset($data[self::FIELD_PRODUCTION_SPEC])) {
                $value = $data[self::FIELD_PRODUCTION_SPEC];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRODUCTION_SPEC_EXT]) && is_array($data[self::FIELD_PRODUCTION_SPEC_EXT])) {
                $ext = $data[self::FIELD_PRODUCTION_SPEC_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setProductionSpec($value);
                } else if (is_array($value)) {
                    $this->setProductionSpec(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setProductionSpec(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProductionSpec(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SPEC_TYPE])) {
            if ($data[self::FIELD_SPEC_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSpecType($data[self::FIELD_SPEC_TYPE]);
            } else {
                $this->setSpecType(new FHIRCodeableConcept($data[self::FIELD_SPEC_TYPE]));
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
        return "<DeviceComponentProductionSpecification{$xmlns}></DeviceComponentProductionSpecification>";
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the internal component unique identification. This is a provision for
     * manufacture specific standard components using a private OID. 11073-10101 has a
     * partition for private OID semantic that the manufacture can make use of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $componentId
     * @return static
     */
    public function setComponentId(FHIRIdentifier $componentId = null)
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getProductionSpec()
    {
        return $this->productionSpec;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the printable string defining the component.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $productionSpec
     * @return static
     */
    public function setProductionSpec($productionSpec = null)
    {
        if (null === $productionSpec) {
            $this->productionSpec = null;
            return $this;
        }
        if ($productionSpec instanceof FHIRString) {
            $this->productionSpec = $productionSpec;
            return $this;
        }
        $this->productionSpec = new FHIRString($productionSpec);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecType()
    {
        return $this->specType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the specification type, such as, serial number, part number, hardware
     * revision, software revision, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $specType
     * @return static
     */
    public function setSpecType(FHIRCodeableConcept $specType = null)
    {
        $this->specType = $specType;
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
        if (null !== ($v = $this->getComponentId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPONENT_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductionSpec())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCTION_SPEC] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPEC_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COMPONENT_ID])) {
            $v = $this->getComponentId();
            foreach($validationRules[self::FIELD_COMPONENT_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_COMPONENT_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPONENT_ID])) {
                        $errs[self::FIELD_COMPONENT_ID] = [];
                    }
                    $errs[self::FIELD_COMPONENT_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCTION_SPEC])) {
            $v = $this->getProductionSpec();
            foreach($validationRules[self::FIELD_PRODUCTION_SPEC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_PRODUCTION_SPEC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCTION_SPEC])) {
                        $errs[self::FIELD_PRODUCTION_SPEC] = [];
                    }
                    $errs[self::FIELD_PRODUCTION_SPEC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPEC_TYPE])) {
            $v = $this->getSpecType();
            foreach($validationRules[self::FIELD_SPEC_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION, self::FIELD_SPEC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPEC_TYPE])) {
                        $errs[self::FIELD_SPEC_TYPE] = [];
                    }
                    $errs[self::FIELD_SPEC_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification
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
                throw new \DomainException(sprintf('FHIRDeviceComponentProductionSpecification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceComponentProductionSpecification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceComponentProductionSpecification;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceComponentProductionSpecification)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceComponentProductionSpecification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification or null, %s seen.',
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
        if (isset($children->componentId)) {
            $type->setComponentId(FHIRIdentifier::xmlUnserialize($children->componentId));
        }
        if (isset($children->productionSpec)) {
            $type->setProductionSpec(FHIRString::xmlUnserialize($children->productionSpec));
        }
        if (isset($attributes->productionSpec)) {
            $pt = $type->getProductionSpec();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->productionSpec);
            } else {
                $type->setProductionSpec((string)$attributes->productionSpec);
            }
        }
        if (isset($children->specType)) {
            $type->setSpecType(FHIRCodeableConcept::xmlUnserialize($children->specType));
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
        if (null !== ($v = $this->getComponentId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPONENT_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProductionSpec())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCTION_SPEC, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSpecType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPEC_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getComponentId())) {
            $a[self::FIELD_COMPONENT_ID] = $v;
        }
        if (null !== ($v = $this->getProductionSpec())) {
            $a[self::FIELD_PRODUCTION_SPEC] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PRODUCTION_SPEC_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSpecType())) {
            $a[self::FIELD_SPEC_TYPE] = $v;
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