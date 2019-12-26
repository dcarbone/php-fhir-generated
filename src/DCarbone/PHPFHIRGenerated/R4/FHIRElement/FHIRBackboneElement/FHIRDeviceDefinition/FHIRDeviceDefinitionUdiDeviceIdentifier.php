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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 *
 * Class FHIRDeviceDefinitionUdiDeviceIdentifier
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition
 */
class FHIRDeviceDefinitionUdiDeviceIdentifier extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER;
    const FIELD_DEVICE_IDENTIFIER = 'deviceIdentifier';
    const FIELD_DEVICE_IDENTIFIER_EXT = '_deviceIdentifier';
    const FIELD_ISSUER = 'issuer';
    const FIELD_ISSUER_EXT = '_issuer';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_JURISDICTION_EXT = '_jurisdiction';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdication porvided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $deviceIdentifier = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $issuer = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $jurisdiction = null;

    /**
     * Validation map for fields in type DeviceDefinition.UdiDeviceIdentifier
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDeviceDefinitionUdiDeviceIdentifier Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinitionUdiDeviceIdentifier::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DEVICE_IDENTIFIER]) || isset($data[self::FIELD_DEVICE_IDENTIFIER_EXT])) {
            if (isset($data[self::FIELD_DEVICE_IDENTIFIER])) {
                $value = $data[self::FIELD_DEVICE_IDENTIFIER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEVICE_IDENTIFIER_EXT]) && is_array($data[self::FIELD_DEVICE_IDENTIFIER_EXT])) {
                $ext = $data[self::FIELD_DEVICE_IDENTIFIER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDeviceIdentifier($value);
                } else if (is_array($value)) {
                    $this->setDeviceIdentifier(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDeviceIdentifier(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeviceIdentifier(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUER]) || isset($data[self::FIELD_ISSUER_EXT])) {
            if (isset($data[self::FIELD_ISSUER])) {
                $value = $data[self::FIELD_ISSUER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUER_EXT]) && is_array($data[self::FIELD_ISSUER_EXT])) {
                $ext = $data[self::FIELD_ISSUER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setIssuer($value);
                } else if (is_array($value)) {
                    $this->setIssuer(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setIssuer(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssuer(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION]) || isset($data[self::FIELD_JURISDICTION_EXT])) {
            if (isset($data[self::FIELD_JURISDICTION])) {
                $value = $data[self::FIELD_JURISDICTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_JURISDICTION_EXT]) && is_array($data[self::FIELD_JURISDICTION_EXT])) {
                $ext = $data[self::FIELD_JURISDICTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setJurisdiction($value);
                } else if (is_array($value)) {
                    $this->setJurisdiction(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setJurisdiction(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setJurisdiction(new FHIRUri($ext));
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
        return "<DeviceDefinitionUdiDeviceIdentifier{$xmlns}></DeviceDefinitionUdiDeviceIdentifier>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdication porvided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdication porvided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $deviceIdentifier
     * @return static
     */
    public function setDeviceIdentifier($deviceIdentifier = null)
    {
        if (null === $deviceIdentifier) {
            $this->deviceIdentifier = null;
            return $this;
        }
        if ($deviceIdentifier instanceof FHIRString) {
            $this->deviceIdentifier = $deviceIdentifier;
            return $this;
        }
        $this->deviceIdentifier = new FHIRString($deviceIdentifier);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $issuer
     * @return static
     */
    public function setIssuer($issuer = null)
    {
        if (null === $issuer) {
            $this->issuer = null;
            return $this;
        }
        if ($issuer instanceof FHIRUri) {
            $this->issuer = $issuer;
            return $this;
        }
        $this->issuer = new FHIRUri($issuer);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $jurisdiction
     * @return static
     */
    public function setJurisdiction($jurisdiction = null)
    {
        if (null === $jurisdiction) {
            $this->jurisdiction = null;
            return $this;
        }
        if ($jurisdiction instanceof FHIRUri) {
            $this->jurisdiction = $jurisdiction;
            return $this;
        }
        $this->jurisdiction = new FHIRUri($jurisdiction);
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
        if (null !== ($v = $this->getDeviceIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getJurisdiction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_JURISDICTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_IDENTIFIER])) {
            $v = $this->getDeviceIdentifier();
            foreach($validationRules[self::FIELD_DEVICE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER, self::FIELD_DEVICE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_IDENTIFIER])) {
                        $errs[self::FIELD_DEVICE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEVICE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUER])) {
            $v = $this->getIssuer();
            foreach($validationRules[self::FIELD_ISSUER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER, self::FIELD_ISSUER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUER])) {
                        $errs[self::FIELD_ISSUER] = [];
                    }
                    $errs[self::FIELD_ISSUER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
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
                throw new \DomainException(sprintf('FHIRDeviceDefinitionUdiDeviceIdentifier::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceDefinitionUdiDeviceIdentifier::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceDefinitionUdiDeviceIdentifier;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceDefinitionUdiDeviceIdentifier)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceDefinitionUdiDeviceIdentifier::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier or null, %s seen.',
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
        if (isset($children->deviceIdentifier)) {
            $type->setDeviceIdentifier(FHIRString::xmlUnserialize($children->deviceIdentifier));
        }
        if (isset($attributes->deviceIdentifier)) {
            $pt = $type->getDeviceIdentifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deviceIdentifier);
            } else {
                $type->setDeviceIdentifier((string)$attributes->deviceIdentifier);
            }
        }
        if (isset($children->issuer)) {
            $type->setIssuer(FHIRUri::xmlUnserialize($children->issuer));
        }
        if (isset($attributes->issuer)) {
            $pt = $type->getIssuer();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issuer);
            } else {
                $type->setIssuer((string)$attributes->issuer);
            }
        }
        if (isset($children->jurisdiction)) {
            $type->setJurisdiction(FHIRUri::xmlUnserialize($children->jurisdiction));
        }
        if (isset($attributes->jurisdiction)) {
            $pt = $type->getJurisdiction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->jurisdiction);
            } else {
                $type->setJurisdiction((string)$attributes->jurisdiction);
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
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIssuer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $a[self::FIELD_DEVICE_IDENTIFIER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DEVICE_IDENTIFIER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            $a[self::FIELD_ISSUER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_ISSUER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_JURISDICTION_EXT] = $enc;
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