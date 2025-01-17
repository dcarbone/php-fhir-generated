<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRElementDefinitionType extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE;


    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_TARGET_PROFILE = 'targetProfile';
    public const FIELD_TARGET_PROFILE_EXT = '_targetProfile';
    public const FIELD_AGGREGATION = 'aggregation';
    public const FIELD_AGGREGATION_EXT = '_aggregation';
    public const FIELD_VERSIONING = 'versioning';
    public const FIELD_VERSIONING_EXT = '_versioning';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $code;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $profile;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $targetProfile;
    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode[] 
     */
    protected array $aggregation;
    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules 
     */
    protected FHIRReferenceVersionRules $versioning;

    /** Default validation map for fields in type ElementDefinition.Type */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRElementDefinitionType Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $profile
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $targetProfile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode[] $aggregation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules $versioning
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRUriPrimitive|FHIRUri $code = null,
                                null|string|FHIRUriPrimitive|FHIRUri $profile = null,
                                null|string|FHIRUriPrimitive|FHIRUri $targetProfile = null,
                                null|iterable $aggregation = null,
                                null|FHIRReferenceVersionRules $versioning = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $targetProfile) {
            $this->setTargetProfile($targetProfile);
        }
        if (null !== $aggregation) {
            $this->setAggregation(...$aggregation);
        }
        if (null !== $versioning) {
            $this->setVersioning($versioning);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getCode(): null|FHIRUri
    {
        return $this->code ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of Data type or Resource that is a(or the) type used for this element.
     * References are URLs that are relative to http://hl7.org/fhir/StructureDefinition
     * e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string.
     * Absolute URLs are only allowed in logical models.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $code
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRUriPrimitive|FHIRUri $code,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRUri)) {
            $code = new FHIRUri(value: $code);
        }
        if (null !== $valueXMLLocation) {
            $code->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $code->_getValueXMLLocation()) {
            $code->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getProfile(): null|FHIRUri
    {
        return $this->profile ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * datatype this element refers to. Can be a local reference - to a contained
     * StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setProfile(null|string|FHIRUriPrimitive|FHIRUri $profile,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        if (!($profile instanceof FHIRUri)) {
            $profile = new FHIRUri(value: $profile);
        }
        if (null !== $valueXMLLocation) {
            $profile->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $profile->_getValueXMLLocation()) {
            $profile->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getTargetProfile(): null|FHIRUri
    {
        return $this->targetProfile ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile structure or implementation Guide that SHALL hold for the
     * target of the reference this element refers to. Can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the resource SHALL conform to at least one profile defined in the
     * implementation guide.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $targetProfile
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetProfile(null|string|FHIRUriPrimitive|FHIRUri $targetProfile,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $targetProfile) {
            unset($this->targetProfile);
            return $this;
        }
        if (!($targetProfile instanceof FHIRUri)) {
            $targetProfile = new FHIRUri(value: $targetProfile);
        }
        if (null !== $valueXMLLocation) {
            $targetProfile->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $targetProfile->_getValueXMLLocation()) {
            $targetProfile->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode[]
     */
    public function getAggregation(): array
    {
        return $this->aggregation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode>
     */
    public function getAggregationIterator(): iterable
    {
        if (!isset($this->aggregation) || [] === $this->aggregation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->aggregation);
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode $aggregation
     * @return static
     */
    public function addAggregation(FHIRAggregationMode $aggregation): self
    {
        if (!isset($this->aggregation)) {
            $this->aggregation = [];
        }
        $this->aggregation[] = $aggregation;
        return $this;
    }

    /**
     * How resource references can be aggregated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggregated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode ...$aggregation
     * @return static
     */
    public function setAggregation(FHIRAggregationMode ...$aggregation): self
    {
        $this->aggregation = [];
        foreach($aggregation as $v) {
            if ($v instanceof FHIRAggregationMode) {
                $this->aggregation[] = $v;
            } else {
                $this->aggregation[] = new FHIRAggregationMode(value: $v);
            }
        }
        return $this;
    }

    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules
     */
    public function getVersioning(): null|FHIRReferenceVersionRules
    {
        return $this->versioning ?? null;
    }

    /**
     * Whether a reference needs to be version specific or version independent, or
     * whether either can be used
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this reference needs to be version specific or version independent, or
     * whether either can be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules $versioning
     * @return static
     */
    public function setVersioning(null|FHIRReferenceVersionRules $versioning): self
    {
        if (null === $versioning) {
            unset($this->versioning);
            return $this;
        }
        $this->versioning = $versioning;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_PROFILE])) {
            $v = $this->getTargetProfile();
            foreach($validationRules[self::FIELD_TARGET_PROFILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_PROFILE])) {
                        $errs[self::FIELD_TARGET_PROFILE] = [];
                    }
                    $errs[self::FIELD_TARGET_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGGREGATION])) {
            $v = $this->getAggregation();
            foreach($validationRules[self::FIELD_AGGREGATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGGREGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGGREGATION])) {
                        $errs[self::FIELD_AGGREGATION] = [];
                    }
                    $errs[self::FIELD_AGGREGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSIONING])) {
            $v = $this->getVersioning();
            foreach($validationRules[self::FIELD_VERSIONING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSIONING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSIONING])) {
                        $errs[self::FIELD_VERSIONING] = [];
                    }
                    $errs[self::FIELD_VERSIONING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinitionType)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCode(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROFILE === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setProfile(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_PROFILE === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTargetProfile(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGGREGATION === $childName) {
                $v = new FHIRAggregationMode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addAggregation(FHIRAggregationMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSIONING === $childName) {
                $v = new FHIRReferenceVersionRules(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setVersioning(FHIRReferenceVersionRules::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode(new FHIRUri(
                    value: (string)$attributes[self::FIELD_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $pt = $type->getProfile();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PROFILE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setProfile(new FHIRUri(
                    value: (string)$attributes[self::FIELD_PROFILE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET_PROFILE])) {
            $pt = $type->getTargetProfile();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET_PROFILE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetProfile(new FHIRUri(
                    value: (string)$attributes[self::FIELD_TARGET_PROFILE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ElementDefinitionType', $this->_getSourceXMLNS());
        }
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->getValue()?->_getFormattedValue());
        }
        if (isset($this->profile) && $this->profile->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PROFILE, $this->profile->getValue()?->_getFormattedValue());
        }
        if (isset($this->targetProfile) && $this->targetProfile->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET_PROFILE, $this->targetProfile->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->profile) && $this->profile->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetProfile) && $this->targetProfile->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET_PROFILE);
            $this->targetProfile->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->aggregation)) {
            foreach ($this->aggregation as $v) {
                $xw->startElement(self::FIELD_AGGREGATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->versioning)) {
            $xw->startElement(self::FIELD_VERSIONING);
            $this->versioning->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRElementDefinitionType)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CODE]) || isset($json[self::FIELD_CODE_EXT]) || array_key_exists(self::FIELD_CODE, $json) || array_key_exists(self::FIELD_CODE_EXT, $json)) {
            $value = $json[self::FIELD_CODE] ?? null;
            $ext = (isset($json[self::FIELD_CODE_EXT]) && is_array($json[self::FIELD_CODE_EXT])) ? $json[self::FIELD_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setCode($value);
                } else if (is_array($value)) {
                    $type->setCode(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setCode(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCode(new FHIRUri($ext));
            } else {
                $type->setCode(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_PROFILE]) || isset($json[self::FIELD_PROFILE_EXT]) || array_key_exists(self::FIELD_PROFILE, $json) || array_key_exists(self::FIELD_PROFILE_EXT, $json)) {
            $value = $json[self::FIELD_PROFILE] ?? null;
            $ext = (isset($json[self::FIELD_PROFILE_EXT]) && is_array($json[self::FIELD_PROFILE_EXT])) ? $json[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setProfile($value);
                } else if (is_array($value)) {
                    $type->setProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setProfile(new FHIRUri($ext));
            } else {
                $type->setProfile(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TARGET_PROFILE]) || isset($json[self::FIELD_TARGET_PROFILE_EXT]) || array_key_exists(self::FIELD_TARGET_PROFILE, $json) || array_key_exists(self::FIELD_TARGET_PROFILE_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_PROFILE] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_PROFILE_EXT]) && is_array($json[self::FIELD_TARGET_PROFILE_EXT])) ? $json[self::FIELD_TARGET_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setTargetProfile($value);
                } else if (is_array($value)) {
                    $type->setTargetProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setTargetProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTargetProfile(new FHIRUri($ext));
            } else {
                $type->setTargetProfile(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_AGGREGATION]) || isset($json[self::FIELD_AGGREGATION_EXT]) || array_key_exists(self::FIELD_AGGREGATION, $json) || array_key_exists(self::FIELD_AGGREGATION_EXT, $json)) {
            $value = $json[self::FIELD_AGGREGATION] ?? null;
            $ext = (isset($json[self::FIELD_AGGREGATION_EXT]) && is_array($json[self::FIELD_AGGREGATION_EXT])) ? $json[self::FIELD_AGGREGATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAggregationMode) {
                    $type->addAggregation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRAggregationMode) {
                            $type->addAggregation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addAggregation(new FHIRAggregationMode(array_merge($v, $iext)));
                            } else {
                                $type->addAggregation(new FHIRAggregationMode([FHIRAggregationMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addAggregation(new FHIRAggregationMode(array_merge($ext, $value)));
                } else {
                    $type->addAggregation(new FHIRAggregationMode([FHIRAggregationMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addAggregation(new FHIRAggregationMode($iext));
                }
            } else {
                $type->addAggregation(new FHIRAggregationMode(null));
            }
        }
        if (isset($json[self::FIELD_VERSIONING]) || isset($json[self::FIELD_VERSIONING_EXT]) || array_key_exists(self::FIELD_VERSIONING, $json) || array_key_exists(self::FIELD_VERSIONING_EXT, $json)) {
            $value = $json[self::FIELD_VERSIONING] ?? null;
            $ext = (isset($json[self::FIELD_VERSIONING_EXT]) && is_array($json[self::FIELD_VERSIONING_EXT])) ? $json[self::FIELD_VERSIONING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRReferenceVersionRules) {
                    $type->setVersioning($value);
                } else if (is_array($value)) {
                    $type->setVersioning(new FHIRReferenceVersionRules(array_merge($ext, $value)));
                } else {
                    $type->setVersioning(new FHIRReferenceVersionRules([FHIRReferenceVersionRules::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVersioning(new FHIRReferenceVersionRules($ext));
            } else {
                $type->setVersioning(new FHIRReferenceVersionRules(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            $ext = $this->code->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_code = $ext;
            }
        }
        if (isset($this->profile)) {
            if (null !== ($val = $this->profile->getValue())) {
                $out->profile = $val;
            }
            $ext = $this->profile->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_profile = $ext;
            }
        }
        if (isset($this->targetProfile)) {
            if (null !== ($val = $this->targetProfile->getValue())) {
                $out->targetProfile = $val;
            }
            $ext = $this->targetProfile->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_targetProfile = $ext;
            }
        }
        if (isset($this->aggregation) && [] !== $this->aggregation) {
            $vals = [];
            $exts = [];
            foreach ($this->aggregation as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->aggregation = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_aggregation = $exts;
            }
        }
        if (isset($this->versioning)) {
            if (null !== ($val = $this->versioning->getValue())) {
                $out->versioning = $val;
            }
            $ext = $this->versioning->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_versioning = $ext;
            }
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