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
    const FIELD_CONFORMANCE = 'conformance';
    const FIELD_CONFORMANCE_EXT = '_conformance';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_IS_EXTENSIBLE = 'isExtensible';
    const FIELD_IS_EXTENSIBLE_EXT = '_isExtensible';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_REFERENCE_RESOURCE = 'referenceResource';
    const FIELD_REFERENCE_URI = 'referenceUri';
    const FIELD_REFERENCE_URI_EXT = '_referenceUri';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance
     */
    protected $conformance = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $isExtensible = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $referenceResource = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $referenceUri = null;

    /**
     * Validation map for fields in type Profile.Binding
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_CONFORMANCE]) || isset($data[self::FIELD_CONFORMANCE_EXT])) {
            if (isset($data[self::FIELD_CONFORMANCE])) {
                $value = $data[self::FIELD_CONFORMANCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONFORMANCE_EXT]) && is_array($data[self::FIELD_CONFORMANCE_EXT])) {
                $ext = $data[self::FIELD_CONFORMANCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBindingConformance) {
                    $this->setConformance($value);
                } else if (is_array($value)) {
                    $this->setConformance(new FHIRBindingConformance(array_merge($ext, $value)));
                } else {
                    $this->setConformance(new FHIRBindingConformance([FHIRBindingConformance::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConformance(new FHIRBindingConformance($ext));
            }
        }
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
        if (isset($data[self::FIELD_IS_EXTENSIBLE]) || isset($data[self::FIELD_IS_EXTENSIBLE_EXT])) {
            if (isset($data[self::FIELD_IS_EXTENSIBLE])) {
                $value = $data[self::FIELD_IS_EXTENSIBLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_EXTENSIBLE_EXT]) && is_array($data[self::FIELD_IS_EXTENSIBLE_EXT])) {
                $ext = $data[self::FIELD_IS_EXTENSIBLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsExtensible($value);
                } else if (is_array($value)) {
                    $this->setIsExtensible(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsExtensible(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsExtensible(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RESOURCE])) {
            if ($data[self::FIELD_REFERENCE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setReferenceResource($data[self::FIELD_REFERENCE_RESOURCE]);
            } else {
                $this->setReferenceResource(new FHIRResourceReference($data[self::FIELD_REFERENCE_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_URI]) || isset($data[self::FIELD_REFERENCE_URI_EXT])) {
            if (isset($data[self::FIELD_REFERENCE_URI])) {
                $value = $data[self::FIELD_REFERENCE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_URI_EXT]) && is_array($data[self::FIELD_REFERENCE_URI_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReferenceUri($value);
                } else if (is_array($value)) {
                    $this->setReferenceUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReferenceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReferenceUri(new FHIRUri($ext));
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
        return "<ProfileBinding{$xmlns}></ProfileBinding>";
    }

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance $conformance
     * @return static
     */
    public function setConformance(FHIRBindingConformance $conformance = null)
    {
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, then conformant systems may use additional codes or (where the data
     * type permits) text alone to convey concepts not covered by the set of codes
     * identified in the binding. If false, then conformant systems are constrained to
     * the provided codes alone.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isExtensible
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $referenceResource
     * @return static
     */
    public function setReferenceResource(FHIRResourceReference $referenceResource = null)
    {
        $this->referenceResource = $referenceResource;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $referenceUri
     * @return static
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
        if (null !== ($v = $this->getConformance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONFORMANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_EXTENSIBLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_URI] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONFORMANCE])) {
            $v = $this->getConformance();
            foreach($validationRules[self::FIELD_CONFORMANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_CONFORMANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFORMANCE])) {
                        $errs[self::FIELD_CONFORMANCE] = [];
                    }
                    $errs[self::FIELD_CONFORMANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_EXTENSIBLE])) {
            $v = $this->getIsExtensible();
            foreach($validationRules[self::FIELD_IS_EXTENSIBLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_IS_EXTENSIBLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_EXTENSIBLE])) {
                        $errs[self::FIELD_IS_EXTENSIBLE] = [];
                    }
                    $errs[self::FIELD_IS_EXTENSIBLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RESOURCE])) {
            $v = $this->getReferenceResource();
            foreach($validationRules[self::FIELD_REFERENCE_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_REFERENCE_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RESOURCE])) {
                        $errs[self::FIELD_REFERENCE_RESOURCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_URI])) {
            $v = $this->getReferenceUri();
            foreach($validationRules[self::FIELD_REFERENCE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING, self::FIELD_REFERENCE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_URI])) {
                        $errs[self::FIELD_REFERENCE_URI] = [];
                    }
                    $errs[self::FIELD_REFERENCE_URI][$rule] = $err;
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
            $type = new FHIRProfileBinding;
        } elseif (!is_object($type) || !($type instanceof FHIRProfileBinding)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileBinding::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding or null, %s seen.',
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
        if (isset($children->conformance)) {
            $type->setConformance(FHIRBindingConformance::xmlUnserialize($children->conformance));
        }
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
        if (isset($children->isExtensible)) {
            $type->setIsExtensible(FHIRBoolean::xmlUnserialize($children->isExtensible));
        }
        if (isset($attributes->isExtensible)) {
            $pt = $type->getIsExtensible();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isExtensible);
            } else {
                $type->setIsExtensible((string)$attributes->isExtensible);
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->referenceResource)) {
            $type->setReferenceResource(FHIRResourceReference::xmlUnserialize($children->referenceResource));
        }
        if (isset($children->referenceUri)) {
            $type->setReferenceUri(FHIRUri::xmlUnserialize($children->referenceUri));
        }
        if (isset($attributes->referenceUri)) {
            $pt = $type->getReferenceUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->referenceUri);
            } else {
                $type->setReferenceUri((string)$attributes->referenceUri);
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
        if (null !== ($v = $this->getConformance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONFORMANCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsExtensible())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_EXTENSIBLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_URI, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CONFORMANCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBindingConformance::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBindingConformance::FIELD_VALUE]);
                $a[self::FIELD_CONFORMANCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            $a[self::FIELD_IS_EXTENSIBLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_EXTENSIBLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $a[self::FIELD_REFERENCE_RESOURCE] = $v;
        }
        if (null !== ($v = $this->getReferenceUri())) {
            $a[self::FIELD_REFERENCE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_REFERENCE_URI_EXT] = $enc;
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