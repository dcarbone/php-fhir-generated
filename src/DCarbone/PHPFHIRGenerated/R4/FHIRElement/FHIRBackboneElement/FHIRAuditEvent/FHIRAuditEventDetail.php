<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRAuditEventDetail
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL;
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of extra detail provided in the value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $type = null;

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    protected $valueBase64Binary = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * Validation map for fields in type AuditEvent.Detail
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRAuditEventDetail Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventDetail::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_BASE_64BINARY]) || isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY])) {
                $value = $data[self::FIELD_VALUE_BASE_64BINARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])) {
                $ext = $data[self::FIELD_VALUE_BASE_64BINARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueBase64Binary(new FHIRBase64Binary($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            if (isset($data[self::FIELD_VALUE_STRING])) {
                $value = $data[self::FIELD_VALUE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) {
                $ext = $data[self::FIELD_VALUE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
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
        return "<AuditEventDetail{$xmlns}></AuditEventDetail>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of extra detail provided in the value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of extra detail provided in the value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $type
     * @return static
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRString) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRString($type);
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return static
     */
    public function setValueBase64Binary($valueBase64Binary = null)
    {
        if (null === $valueBase64Binary) {
            $this->valueBase64Binary = null;
            return $this;
        }
        if ($valueBase64Binary instanceof FHIRBase64Binary) {
            $this->valueBase64Binary = $valueBase64Binary;
            return $this;
        }
        $this->valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $valueString
     * @return static
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BASE_64BINARY])) {
            $v = $this->getValueBase64Binary();
            foreach($validationRules[self::FIELD_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL, self::FIELD_VALUE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BASE_64BINARY])) {
                        $errs[self::FIELD_VALUE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_VALUE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail
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
                throw new \DomainException(sprintf('FHIRAuditEventDetail::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAuditEventDetail::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAuditEventDetail;
        } elseif (!is_object($type) || !($type instanceof FHIRAuditEventDetail)) {
            throw new \RuntimeException(sprintf(
                'FHIRAuditEventDetail::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail or null, %s seen.',
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
        if (isset($children->type)) {
            $type->setType(FHIRString::xmlUnserialize($children->type));
        }
        if (isset($attributes->type)) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->type);
            } else {
                $type->setType((string)$attributes->type);
            }
        }
        if (isset($children->valueBase64Binary)) {
            $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($children->valueBase64Binary));
        }
        if (isset($attributes->valueBase64Binary)) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueBase64Binary);
            } else {
                $type->setValueBase64Binary((string)$attributes->valueBase64Binary);
            }
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueString)) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueString);
            } else {
                $type->setValueString((string)$attributes->valueString);
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
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_BASE_64BINARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $a[self::FIELD_VALUE_BASE_64BINARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBase64Binary::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBase64Binary::FIELD_VALUE]);
                $a[self::FIELD_VALUE_BASE_64BINARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            $a[self::FIELD_VALUE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_STRING_EXT] = $enc;
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