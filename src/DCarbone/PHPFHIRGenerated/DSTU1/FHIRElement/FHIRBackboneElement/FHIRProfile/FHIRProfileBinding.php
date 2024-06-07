<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

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

    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_IS_EXTENSIBLE = 'isExtensible';
    const FIELD_IS_EXTENSIBLE_EXT = '_isExtensible';
    const FIELD_CONFORMANCE = 'conformance';
    const FIELD_CONFORMANCE_EXT = '_conformance';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_REFERENCE_URI = 'referenceUri';
    const FIELD_REFERENCE_URI_EXT = '_referenceUri';
    const FIELD_REFERENCE_RESOURCE = 'referenceResource';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A descriptive name for this - can be useful for generating implementation
     * artifacts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
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
    protected null|FHIRBoolean $isExtensible = null;
    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance
     */
    protected null|FHIRBindingConformance $conformance = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Points to the value set or external definition that identifies the set of codes
     * to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $referenceUri = null;
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
    protected null|FHIRResourceReference $referenceResource = null;

    /**
     * Validation map for fields in type Profile.Binding
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRProfileBinding Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            } else {
                $this->setName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_IS_EXTENSIBLE, $data) || array_key_exists(self::FIELD_IS_EXTENSIBLE_EXT, $data)) {
            $value = $data[self::FIELD_IS_EXTENSIBLE] ?? null;
            $ext = (isset($data[self::FIELD_IS_EXTENSIBLE_EXT]) && is_array($data[self::FIELD_IS_EXTENSIBLE_EXT])) ? $data[self::FIELD_IS_EXTENSIBLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsExtensible($value);
                } else if (is_array($value)) {
                    $this->setIsExtensible(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsExtensible(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsExtensible(new FHIRBoolean($ext));
            } else {
                $this->setIsExtensible(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_CONFORMANCE, $data) || array_key_exists(self::FIELD_CONFORMANCE_EXT, $data)) {
            $value = $data[self::FIELD_CONFORMANCE] ?? null;
            $ext = (isset($data[self::FIELD_CONFORMANCE_EXT]) && is_array($data[self::FIELD_CONFORMANCE_EXT])) ? $data[self::FIELD_CONFORMANCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBindingConformance) {
                    $this->setConformance($value);
                } else if (is_array($value)) {
                    $this->setConformance(new FHIRBindingConformance(array_merge($ext, $value)));
                } else {
                    $this->setConformance(new FHIRBindingConformance([FHIRBindingConformance::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConformance(new FHIRBindingConformance($ext));
            } else {
                $this->setConformance(new FHIRBindingConformance(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_URI, $data) || array_key_exists(self::FIELD_REFERENCE_URI_EXT, $data)) {
            $value = $data[self::FIELD_REFERENCE_URI] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_URI_EXT]) && is_array($data[self::FIELD_REFERENCE_URI_EXT])) ? $data[self::FIELD_REFERENCE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReferenceUri($value);
                } else if (is_array($value)) {
                    $this->setReferenceUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReferenceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReferenceUri(new FHIRUri($ext));
            } else {
                $this->setReferenceUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_RESOURCE, $data)) {
            if ($data[self::FIELD_REFERENCE_RESOURCE] instanceof FHIRResourceReference) {
                $this->setReferenceResource($data[self::FIELD_REFERENCE_RESOURCE]);
            } else {
                $this->setReferenceResource(new FHIRResourceReference($data[self::FIELD_REFERENCE_RESOURCE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
    public function getName(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NAME][0] = $xmlLocation;
        $this->name = $name;
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
    public function getIsExtensible(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isExtensible
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIsExtensible(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isExtensible = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $isExtensible && !($isExtensible instanceof FHIRBoolean)) {
            $isExtensible = new FHIRBoolean($isExtensible);
        }
        $this->_trackValueSet($this->isExtensible, $isExtensible);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IS_EXTENSIBLE])) {
            $this->_primitiveXmlLocations[self::FIELD_IS_EXTENSIBLE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IS_EXTENSIBLE][0] = $xmlLocation;
        $this->isExtensible = $isExtensible;
        return $this;
    }

    /**
     * Binding conformance for applications
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of conformance expectations associated with this binding.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance
     */
    public function getConformance(): null|FHIRBindingConformance
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
    public function setConformance(null|FHIRBindingConformance $conformance = null): self
    {
        if (null === $conformance) {
            $conformance = new FHIRBindingConformance();
        }
        $this->_trackValueSet($this->conformance, $conformance);
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
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the intended use of this particular set of codes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
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
    public function getReferenceUri(): null|FHIRUri
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $referenceUri
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReferenceUri(null|string|FHIRUriPrimitive|FHIRUri $referenceUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $referenceUri && !($referenceUri instanceof FHIRUri)) {
            $referenceUri = new FHIRUri($referenceUri);
        }
        $this->_trackValueSet($this->referenceUri, $referenceUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REFERENCE_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_REFERENCE_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REFERENCE_URI][0] = $xmlLocation;
        $this->referenceUri = $referenceUri;
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
    public function getReferenceResource(): null|FHIRResourceReference
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
    public function setReferenceResource(null|FHIRResourceReference $referenceResource = null): self
    {
        if (null === $referenceResource) {
            $referenceResource = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->referenceResource, $referenceResource);
        $this->referenceResource = $referenceResource;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_EXTENSIBLE] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getReferenceUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_RESOURCE] = $fieldErrs;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRProfileBinding)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_NAME === $childName) {
                $type->setName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IS_EXTENSIBLE === $childName) {
                $type->setIsExtensible(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONFORMANCE === $childName) {
                $type->setConformance(FHIRBindingConformance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REFERENCE_URI === $childName) {
                $type->setReferenceUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REFERENCE_RESOURCE === $childName) {
                $type->setReferenceResource(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IS_EXTENSIBLE])) {
            $pt = $type->getIsExtensible();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_EXTENSIBLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsExtensible((string)$attributes[self::FIELD_IS_EXTENSIBLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_URI])) {
            $pt = $type->getReferenceUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REFERENCE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReferenceUri((string)$attributes[self::FIELD_REFERENCE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ProfileBinding', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_EXTENSIBLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIsExtensible())) {
            $xw->writeAttribute(self::FIELD_IS_EXTENSIBLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REFERENCE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReferenceUri())) {
            $xw->writeAttribute(self::FIELD_REFERENCE_URI, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_EXTENSIBLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIsExtensible())) {
            $xw->startElement(self::FIELD_IS_EXTENSIBLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConformance())) {
            $xw->startElement(self::FIELD_CONFORMANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REFERENCE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReferenceUri())) {
            $xw->startElement(self::FIELD_REFERENCE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $xw->startElement(self::FIELD_REFERENCE_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIsExtensible())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_EXTENSIBLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_EXTENSIBLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConformance())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONFORMANCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBindingConformance::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONFORMANCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReferenceUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReferenceResource())) {
            $out->{self::FIELD_REFERENCE_RESOURCE} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}