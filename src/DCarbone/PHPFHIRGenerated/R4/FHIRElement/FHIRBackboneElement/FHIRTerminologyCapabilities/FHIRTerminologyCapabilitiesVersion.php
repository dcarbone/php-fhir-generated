<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 *
 * Class FHIRTerminologyCapabilitiesVersion
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities
 */
class FHIRTerminologyCapabilitiesVersion extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION;
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_COMPOSITIONAL = 'compositional';
    const FIELD_COMPOSITIONAL_EXT = '_compositional';
    const FIELD_FILTER = 'filter';
    const FIELD_IS_DEFAULT = 'isDefault';
    const FIELD_IS_DEFAULT_EXT = '_isDefault';
    const FIELD_LANGUAGE = 'language';
    const FIELD_LANGUAGE_EXT = '_language';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROPERTY_EXT = '_property';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For version-less code systems, there should be a single version with no
     * identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $code = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the compositional grammar defined by the code system is supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $compositional = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Filter Properties supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter[]
     */
    protected $filter = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default version for this code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $isDefault = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Language Displays supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    protected $language = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Properties supported for $lookup.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    protected $property = [];

    /**
     * Validation map for fields in type TerminologyCapabilities.Version
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTerminologyCapabilitiesVersion Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesVersion::_construct - $data expected to be null or array, %s seen',
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
                if ($value instanceof FHIRString) {
                    $this->setCode($value);
                } else if (is_array($value)) {
                    $this->setCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCode(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMPOSITIONAL]) || isset($data[self::FIELD_COMPOSITIONAL_EXT])) {
            if (isset($data[self::FIELD_COMPOSITIONAL])) {
                $value = $data[self::FIELD_COMPOSITIONAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMPOSITIONAL_EXT]) && is_array($data[self::FIELD_COMPOSITIONAL_EXT])) {
                $ext = $data[self::FIELD_COMPOSITIONAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCompositional($value);
                } else if (is_array($value)) {
                    $this->setCompositional(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCompositional(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCompositional(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_FILTER])) {
            if (is_array($data[self::FIELD_FILTER])) {
                foreach($data[self::FIELD_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTerminologyCapabilitiesFilter) {
                        $this->addFilter($v);
                    } else {
                        $this->addFilter(new FHIRTerminologyCapabilitiesFilter($v));
                    }
                }
            } else if ($data[self::FIELD_FILTER] instanceof FHIRTerminologyCapabilitiesFilter) {
                $this->addFilter($data[self::FIELD_FILTER]);
            } else {
                $this->addFilter(new FHIRTerminologyCapabilitiesFilter($data[self::FIELD_FILTER]));
            }
        }
        if (isset($data[self::FIELD_IS_DEFAULT]) || isset($data[self::FIELD_IS_DEFAULT_EXT])) {
            if (isset($data[self::FIELD_IS_DEFAULT])) {
                $value = $data[self::FIELD_IS_DEFAULT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_DEFAULT_EXT]) && is_array($data[self::FIELD_IS_DEFAULT_EXT])) {
                $ext = $data[self::FIELD_IS_DEFAULT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDefault($value);
                } else if (is_array($value)) {
                    $this->setIsDefault(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDefault(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsDefault(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE]) || isset($data[self::FIELD_LANGUAGE_EXT])) {
            if (isset($data[self::FIELD_LANGUAGE])) {
                $value = $data[self::FIELD_LANGUAGE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LANGUAGE_EXT]) && is_array($data[self::FIELD_LANGUAGE_EXT])) {
                $ext = $data[self::FIELD_LANGUAGE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addLanguage($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addLanguage($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLanguage(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLanguage(new FHIRCode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PROPERTY]) || isset($data[self::FIELD_PROPERTY_EXT])) {
            if (isset($data[self::FIELD_PROPERTY])) {
                $value = $data[self::FIELD_PROPERTY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROPERTY_EXT]) && is_array($data[self::FIELD_PROPERTY_EXT])) {
                $ext = $data[self::FIELD_PROPERTY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addProperty($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addProperty($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProperty(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addProperty(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProperty(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addProperty(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProperty(new FHIRCode($iext));
                }
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
        return "<TerminologyCapabilitiesVersion{$xmlns}></TerminologyCapabilitiesVersion>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For version-less code systems, there should be a single version with no
     * identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For version-less code systems, there should be a single version with no
     * identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRString) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRString($code);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the compositional grammar defined by the code system is supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getCompositional()
    {
        return $this->compositional;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the compositional grammar defined by the code system is supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $compositional
     * @return static
     */
    public function setCompositional($compositional = null)
    {
        if (null === $compositional) {
            $this->compositional = null;
            return $this;
        }
        if ($compositional instanceof FHIRBoolean) {
            $this->compositional = $compositional;
            return $this;
        }
        $this->compositional = new FHIRBoolean($compositional);
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Filter Properties supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Filter Properties supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter $filter
     * @return static
     */
    public function addFilter(FHIRTerminologyCapabilitiesFilter $filter = null)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Filter Properties supported.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter[] $filter
     * @return static
     */
    public function setFilter(array $filter = [])
    {
        $this->filter = [];
        if ([] === $filter) {
            return $this;
        }
        foreach($filter as $v) {
            if ($v instanceof FHIRTerminologyCapabilitiesFilter) {
                $this->addFilter($v);
            } else {
                $this->addFilter(new FHIRTerminologyCapabilitiesFilter($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default version for this code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default version for this code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isDefault
     * @return static
     */
    public function setIsDefault($isDefault = null)
    {
        if (null === $isDefault) {
            $this->isDefault = null;
            return $this;
        }
        if ($isDefault instanceof FHIRBoolean) {
            $this->isDefault = $isDefault;
            return $this;
        }
        $this->isDefault = new FHIRBoolean($isDefault);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Language Displays supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Language Displays supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $language
     * @return static
     */
    public function addLanguage($language = null)
    {
        if (null === $language) {
            $this->language = [];
            return $this;
        }
        if ($language instanceof FHIRCode) {
            $this->language[] = $language;
            return $this;
        }
        $this->language[] = new FHIRCode($language);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Language Displays supported.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[] $language
     * @return static
     */
    public function setLanguage(array $language = [])
    {
        $this->language = [];
        if ([] === $language) {
            return $this;
        }
        foreach($language as $v) {
            if ($v instanceof FHIRCode) {
                $this->addLanguage($v);
            } else {
                $this->addLanguage(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Properties supported for $lookup.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Properties supported for $lookup.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $property
     * @return static
     */
    public function addProperty($property = null)
    {
        if (null === $property) {
            $this->property = [];
            return $this;
        }
        if ($property instanceof FHIRCode) {
            $this->property[] = $property;
            return $this;
        }
        $this->property[] = new FHIRCode($property);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Properties supported for $lookup.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode[] $property
     * @return static
     */
    public function setProperty(array $property = [])
    {
        $this->property = [];
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRCode) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRCode($v));
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompositional())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITIONAL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIsDefault())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DEFAULT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANGUAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPOSITIONAL])) {
            $v = $this->getCompositional();
            foreach($validationRules[self::FIELD_COMPOSITIONAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_COMPOSITIONAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPOSITIONAL])) {
                        $errs[self::FIELD_COMPOSITIONAL] = [];
                    }
                    $errs[self::FIELD_COMPOSITIONAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER])) {
            $v = $this->getFilter();
            foreach($validationRules[self::FIELD_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER])) {
                        $errs[self::FIELD_FILTER] = [];
                    }
                    $errs[self::FIELD_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_DEFAULT])) {
            $v = $this->getIsDefault();
            foreach($validationRules[self::FIELD_IS_DEFAULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_IS_DEFAULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_DEFAULT])) {
                        $errs[self::FIELD_IS_DEFAULT] = [];
                    }
                    $errs[self::FIELD_IS_DEFAULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion
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
                throw new \DomainException(sprintf('FHIRTerminologyCapabilitiesVersion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTerminologyCapabilitiesVersion::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTerminologyCapabilitiesVersion;
        } elseif (!is_object($type) || !($type instanceof FHIRTerminologyCapabilitiesVersion)) {
            throw new \RuntimeException(sprintf(
                'FHIRTerminologyCapabilitiesVersion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion or null, %s seen.',
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
            $type->setCode(FHIRString::xmlUnserialize($children->code));
        }
        if (isset($attributes->code)) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->code);
            } else {
                $type->setCode((string)$attributes->code);
            }
        }
        if (isset($children->compositional)) {
            $type->setCompositional(FHIRBoolean::xmlUnserialize($children->compositional));
        }
        if (isset($attributes->compositional)) {
            $pt = $type->getCompositional();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->compositional);
            } else {
                $type->setCompositional((string)$attributes->compositional);
            }
        }
        if (isset($children->filter)) {
            foreach($children->filter as $child) {
                $type->addFilter(FHIRTerminologyCapabilitiesFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->isDefault)) {
            $type->setIsDefault(FHIRBoolean::xmlUnserialize($children->isDefault));
        }
        if (isset($attributes->isDefault)) {
            $pt = $type->getIsDefault();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isDefault);
            } else {
                $type->setIsDefault((string)$attributes->isDefault);
            }
        }
        if (isset($children->language)) {
            foreach($children->language as $child) {
                $type->addLanguage(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($children->property)) {
            foreach($children->property as $child) {
                $type->addProperty(FHIRCode::xmlUnserialize($child));
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
        if (null !== ($v = $this->getCompositional())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMPOSITIONAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIsDefault())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_DEFAULT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCompositional())) {
            $a[self::FIELD_COMPOSITIONAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_COMPOSITIONAL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            $a[self::FIELD_FILTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FILTER][] = $v;
            }
        }
        if (null !== ($v = $this->getIsDefault())) {
            $a[self::FIELD_IS_DEFAULT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_DEFAULT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LANGUAGE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCode::FIELD_VALUE]) || array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LANGUAGE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROPERTY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCode::FIELD_VALUE]) || array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PROPERTY_EXT] = $encs;
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