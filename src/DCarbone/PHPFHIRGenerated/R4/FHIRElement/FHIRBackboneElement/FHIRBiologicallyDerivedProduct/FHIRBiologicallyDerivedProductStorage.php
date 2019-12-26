<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStorageScale;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A material substance originating from a biological entity intended to be
 * transplanted or infused into another (possibly the same) biological entity.
 *
 * Class FHIRBiologicallyDerivedProductStorage
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct
 */
class FHIRBiologicallyDerivedProductStorage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DURATION = 'duration';
    const FIELD_SCALE = 'scale';
    const FIELD_SCALE_EXT = '_scale';
    const FIELD_TEMPERATURE = 'temperature';
    const FIELD_TEMPERATURE_EXT = '_temperature';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $duration = null;

    /**
     * BiologicallyDerived Product Storage Scale.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStorageScale
     */
    protected $scale = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $temperature = null;

    /**
     * Validation map for fields in type BiologicallyDerivedProduct.Storage
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRBiologicallyDerivedProductStorage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProductStorage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRPeriod) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRPeriod($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_SCALE]) || isset($data[self::FIELD_SCALE_EXT])) {
            if (isset($data[self::FIELD_SCALE])) {
                $value = $data[self::FIELD_SCALE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SCALE_EXT]) && is_array($data[self::FIELD_SCALE_EXT])) {
                $ext = $data[self::FIELD_SCALE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBiologicallyDerivedProductStorageScale) {
                    $this->setScale($value);
                } else if (is_array($value)) {
                    $this->setScale(new FHIRBiologicallyDerivedProductStorageScale(array_merge($ext, $value)));
                } else {
                    $this->setScale(new FHIRBiologicallyDerivedProductStorageScale([FHIRBiologicallyDerivedProductStorageScale::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setScale(new FHIRBiologicallyDerivedProductStorageScale($ext));
            }
        }
        if (isset($data[self::FIELD_TEMPERATURE]) || isset($data[self::FIELD_TEMPERATURE_EXT])) {
            if (isset($data[self::FIELD_TEMPERATURE])) {
                $value = $data[self::FIELD_TEMPERATURE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEMPERATURE_EXT]) && is_array($data[self::FIELD_TEMPERATURE_EXT])) {
                $ext = $data[self::FIELD_TEMPERATURE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setTemperature($value);
                } else if (is_array($value)) {
                    $this->setTemperature(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setTemperature(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTemperature(new FHIRDecimal($ext));
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
        return "<BiologicallyDerivedProductStorage{$xmlns}></BiologicallyDerivedProductStorage>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $duration
     * @return static
     */
    public function setDuration(FHIRPeriod $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * BiologicallyDerived Product Storage Scale.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStorageScale
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * BiologicallyDerived Product Storage Scale.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBiologicallyDerivedProductStorageScale $scale
     * @return static
     */
    public function setScale(FHIRBiologicallyDerivedProductStorageScale $scale = null)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $temperature
     * @return static
     */
    public function setTemperature($temperature = null)
    {
        if (null === $temperature) {
            $this->temperature = null;
            return $this;
        }
        if ($temperature instanceof FHIRDecimal) {
            $this->temperature = $temperature;
            return $this;
        }
        $this->temperature = new FHIRDecimal($temperature);
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCALE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTemperature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEMPERATURE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCALE])) {
            $v = $this->getScale();
            foreach($validationRules[self::FIELD_SCALE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_SCALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCALE])) {
                        $errs[self::FIELD_SCALE] = [];
                    }
                    $errs[self::FIELD_SCALE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEMPERATURE])) {
            $v = $this->getTemperature();
            foreach($validationRules[self::FIELD_TEMPERATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_TEMPERATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE])) {
                        $errs[self::FIELD_TEMPERATURE] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage
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
                throw new \DomainException(sprintf('FHIRBiologicallyDerivedProductStorage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBiologicallyDerivedProductStorage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRBiologicallyDerivedProductStorage;
        } elseif (!is_object($type) || !($type instanceof FHIRBiologicallyDerivedProductStorage)) {
            throw new \RuntimeException(sprintf(
                'FHIRBiologicallyDerivedProductStorage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage or null, %s seen.',
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
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRPeriod::xmlUnserialize($children->duration));
        }
        if (isset($children->scale)) {
            $type->setScale(FHIRBiologicallyDerivedProductStorageScale::xmlUnserialize($children->scale));
        }
        if (isset($children->temperature)) {
            $type->setTemperature(FHIRDecimal::xmlUnserialize($children->temperature));
        }
        if (isset($attributes->temperature)) {
            $pt = $type->getTemperature();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->temperature);
            } else {
                $type->setTemperature((string)$attributes->temperature);
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScale())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCALE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTemperature())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEMPERATURE, null, $v->_getFHIRXMLNamespace()));
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getScale())) {
            $a[self::FIELD_SCALE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBiologicallyDerivedProductStorageScale::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBiologicallyDerivedProductStorageScale::FIELD_VALUE]);
                $a[self::FIELD_SCALE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTemperature())) {
            $a[self::FIELD_TEMPERATURE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_TEMPERATURE_EXT] = $enc;
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