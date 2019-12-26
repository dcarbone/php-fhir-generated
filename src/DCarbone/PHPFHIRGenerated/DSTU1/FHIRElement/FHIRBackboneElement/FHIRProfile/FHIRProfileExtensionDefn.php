<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileExtensionDefn
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileExtensionDefn extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN;
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_EXT = '_context';
    const FIELD_CONTEXT_TYPE = 'contextType';
    const FIELD_CONTEXT_TYPE_EXT = '_contextType';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique code (within the profile) used to identify the extension.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $context = [];

    /**
     * How an extension context is interpreted
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the type of context to which the extension applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext
     */
    protected $contextType = null;

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Definition of the extension and its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    protected $definition = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defined so that applications can use this name when displaying the value of the
     * extension to the user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $display = null;

    /**
     * Validation map for fields in type Profile.ExtensionDefn
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_CONTEXT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRProfileExtensionDefn Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProfileExtensionDefn::_construct - $data expected to be null or array, %s seen',
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
                if ($value instanceof FHIRCode) {
                    $this->setCode($value);
                } else if (is_array($value)) {
                    $this->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_CONTEXT]) || isset($data[self::FIELD_CONTEXT_EXT])) {
            if (isset($data[self::FIELD_CONTEXT])) {
                $value = $data[self::FIELD_CONTEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT])) {
                $ext = $data[self::FIELD_CONTEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addContext($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addContext($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addContext(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addContext(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addContext(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addContext(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addContext(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_CONTEXT_TYPE]) || isset($data[self::FIELD_CONTEXT_TYPE_EXT])) {
            if (isset($data[self::FIELD_CONTEXT_TYPE])) {
                $value = $data[self::FIELD_CONTEXT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTEXT_TYPE_EXT]) && is_array($data[self::FIELD_CONTEXT_TYPE_EXT])) {
                $ext = $data[self::FIELD_CONTEXT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRExtensionContext) {
                    $this->setContextType($value);
                } else if (is_array($value)) {
                    $this->setContextType(new FHIRExtensionContext(array_merge($ext, $value)));
                } else {
                    $this->setContextType(new FHIRExtensionContext([FHIRExtensionContext::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContextType(new FHIRExtensionContext($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            if ($data[self::FIELD_DEFINITION] instanceof FHIRProfileDefinition) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->setDefinition(new FHIRProfileDefinition($data[self::FIELD_DEFINITION]));
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
        return "<ProfileExtensionDefn{$xmlns}></ProfileExtensionDefn>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique code (within the profile) used to identify the extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique code (within the profile) used to identify the extension.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRCode) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRCode($code);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $context
     * @return static
     */
    public function addContext($context = null)
    {
        if (null === $context) {
            $this->context = [];
            return $this;
        }
        if ($context instanceof FHIRString) {
            $this->context[] = $context;
            return $this;
        }
        $this->context[] = new FHIRString($context);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the types of resource or data type elements to which the extension
     * can be applied.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $context
     * @return static
     */
    public function setContext(array $context = [])
    {
        $this->context = [];
        if ([] === $context) {
            return $this;
        }
        foreach($context as $v) {
            if ($v instanceof FHIRString) {
                $this->addContext($v);
            } else {
                $this->addContext(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * How an extension context is interpreted
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the type of context to which the extension applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * How an extension context is interpreted
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the type of context to which the extension applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext $contextType
     * @return static
     */
    public function setContextType(FHIRExtensionContext $contextType = null)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Definition of the extension and its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     *
     * Definition of the extension and its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition $definition
     * @return static
     */
    public function setDefinition(FHIRProfileDefinition $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defined so that applications can use this name when displaying the value of the
     * extension to the user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defined so that applications can use this name when displaying the value of the
     * extension to the user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $display
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
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getContextType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPLAY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT_TYPE])) {
            $v = $this->getContextType();
            foreach($validationRules[self::FIELD_CONTEXT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN, self::FIELD_CONTEXT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT_TYPE])) {
                        $errs[self::FIELD_CONTEXT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTEXT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY])) {
            $v = $this->getDisplay();
            foreach($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN, self::FIELD_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY])) {
                        $errs[self::FIELD_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISPLAY][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn
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
                throw new \DomainException(sprintf('FHIRProfileExtensionDefn::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileExtensionDefn::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProfileExtensionDefn;
        } elseif (!is_object($type) || !($type instanceof FHIRProfileExtensionDefn)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileExtensionDefn::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn or null, %s seen.',
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
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($attributes->code)) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->code);
            } else {
                $type->setCode((string)$attributes->code);
            }
        }
        if (isset($children->context)) {
            foreach($children->context as $child) {
                $type->addContext(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->contextType)) {
            $type->setContextType(FHIRExtensionContext::xmlUnserialize($children->contextType));
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRProfileDefinition::xmlUnserialize($children->definition));
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
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContextType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY, null, $v->_getFHIRXMLNamespace()));
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
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTEXT][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_CONTEXT_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getContextType())) {
            $a[self::FIELD_CONTEXT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRExtensionContext::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRExtensionContext::FIELD_VALUE]);
                $a[self::FIELD_CONTEXT_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v;
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