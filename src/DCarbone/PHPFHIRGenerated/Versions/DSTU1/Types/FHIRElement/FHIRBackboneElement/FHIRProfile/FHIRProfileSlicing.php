<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 */
class FHIRProfileSlicing extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROFILE_DOT_SLICING;

    /* class_default.php:47 */
    public const FIELD_DISCRIMINATOR = 'discriminator';
    public const FIELD_DISCRIMINATOR_EXT = '_discriminator';
    public const FIELD_ORDERED = 'ordered';
    public const FIELD_ORDERED_EXT = '_ordered';
    public const FIELD_RULES = 'rules';
    public const FIELD_RULES_EXT = '_rules';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_DISCRIMINATOR => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ORDERED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RULES => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_DISCRIMINATOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ORDERED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RULES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $discriminator;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $ordered;
    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules 
     */
    protected FHIRSlicingRules $rules;

    /* constructor.php:63 */
    /**
     * FHIRProfileSlicing Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $discriminator
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $ordered
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules $rules
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $discriminator = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $ordered = null,
                                null|string|FHIRSlicingRulesList|FHIRSlicingRules $rules = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $discriminator) {
            $this->setDiscriminator($discriminator);
        }
        if (null !== $ordered) {
            $this->setOrdered($ordered);
        }
        if (null !== $rules) {
            $this->setRules($rules);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getDiscriminator(): null|FHIRId
    {
        return $this->discriminator ?? null;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Designates which child element is used to discriminate between the slices when
     * processing an instance. The value of the child element in the instance SHALL
     * completely distinguish which slice the element in the resource matches based on
     * the allowed values for that element in each of the slices.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $discriminator
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDiscriminator(null|string|FHIRIdPrimitive|FHIRId $discriminator,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $discriminator) {
            unset($this->discriminator);
            return $this;
        }
        if (!($discriminator instanceof FHIRId)) {
            $discriminator = new FHIRId(value: $discriminator);
        }
        $this->discriminator = $discriminator;
        if ($this->_valueXMLLocations[self::FIELD_DISCRIMINATOR] !== $valueXMLLocation) {
            $this->_setDiscriminatorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the discriminator element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDiscriminatorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR];
    }

    /**
     * Set the location the "value" field of the discriminator element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDiscriminatorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getOrdered(): null|FHIRBoolean
    {
        return $this->ordered ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the matching elements have to occur in the same order as defined in the
     * profile.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $ordered
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOrdered(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $ordered,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $ordered) {
            unset($this->ordered);
            return $this;
        }
        if (!($ordered instanceof FHIRBoolean)) {
            $ordered = new FHIRBoolean(value: $ordered);
        }
        $this->ordered = $ordered;
        if ($this->_valueXMLLocations[self::FIELD_ORDERED] !== $valueXMLLocation) {
            $this->_setOrderedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the ordered element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOrderedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ORDERED];
    }

    /**
     * Set the location the "value" field of the ordered element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOrderedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ORDERED] = $valueXMLLocation;
        return $this;
    }

    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules
     */
    public function getRules(): null|FHIRSlicingRules
    {
        return $this->rules ?? null;
    }

    /**
     * How slices are interpreted when evaluating an instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether additional slices are allowed or not. When the slices are ordered,
     * profile authors can also say that additional slices are only allowed at the end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules $rules
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRules(null|string|FHIRSlicingRulesList|FHIRSlicingRules $rules,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $rules) {
            unset($this->rules);
            return $this;
        }
        if (!($rules instanceof FHIRSlicingRules)) {
            $rules = new FHIRSlicingRules(value: $rules);
        }
        $this->rules = $rules;
        if ($this->_valueXMLLocations[self::FIELD_RULES] !== $valueXMLLocation) {
            $this->_setRulesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the rules element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRulesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RULES];
    }

    /**
     * Set the location the "value" field of the rules element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRulesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RULES] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getDiscriminator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISCRIMINATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrdered())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRules())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RULES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DISCRIMINATOR])) {
            $v = $this->getDiscriminator();
            foreach($validationRules[self::FIELD_DISCRIMINATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISCRIMINATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISCRIMINATOR])) {
                        $errs[self::FIELD_DISCRIMINATOR] = [];
                    }
                    $errs[self::FIELD_DISCRIMINATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED])) {
            $v = $this->getOrdered();
            foreach($validationRules[self::FIELD_ORDERED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDERED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED])) {
                        $errs[self::FIELD_ORDERED] = [];
                    }
                    $errs[self::FIELD_ORDERED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULES])) {
            $v = $this->getRules();
            foreach($validationRules[self::FIELD_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULES])) {
                        $errs[self::FIELD_RULES] = [];
                    }
                    $errs[self::FIELD_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileSlicing)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISCRIMINATOR === $cen) {
                $type->setDiscriminator(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDERED === $cen) {
                $type->setOrdered(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RULES === $cen) {
                $type->setRules(FHIRSlicingRules::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISCRIMINATOR])) {
            if (isset($type->discriminator)) {
                $type->discriminator->setValue((string)$attributes[self::FIELD_DISCRIMINATOR]);
                $type->_setDiscriminatorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDiscriminator((string)$attributes[self::FIELD_DISCRIMINATOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ORDERED])) {
            if (isset($type->ordered)) {
                $type->ordered->setValue((string)$attributes[self::FIELD_ORDERED]);
                $type->_setOrderedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOrdered((string)$attributes[self::FIELD_ORDERED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RULES])) {
            if (isset($type->rules)) {
                $type->rules->setValue((string)$attributes[self::FIELD_RULES]);
                $type->_setRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRules((string)$attributes[self::FIELD_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->discriminator) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]) {
            $xw->writeAttribute(self::FIELD_DISCRIMINATOR, $this->discriminator->_getFormattedValue());
        }
        if (isset($this->ordered) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORDERED]) {
            $xw->writeAttribute(self::FIELD_ORDERED, $this->ordered->_getFormattedValue());
        }
        if (isset($this->rules) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RULES]) {
            $xw->writeAttribute(self::FIELD_RULES, $this->rules->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->discriminator)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]
                || $this->discriminator->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISCRIMINATOR);
            $this->discriminator->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISCRIMINATOR]);
            $xw->endElement();
        }
        if (isset($this->ordered)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORDERED]
                || $this->ordered->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORDERED);
            $this->ordered->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORDERED]);
            $xw->endElement();
        }
        if (isset($this->rules)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RULES]
                || $this->rules->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RULES);
            $this->rules->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RULES]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProfileSlicing)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DISCRIMINATOR])
            || isset($json[self::FIELD_DISCRIMINATOR_EXT])
            || array_key_exists(self::FIELD_DISCRIMINATOR, $json)
            || array_key_exists(self::FIELD_DISCRIMINATOR_EXT, $json)) {
            $value = $json[self::FIELD_DISCRIMINATOR] ?? null;
            $type->setDiscriminator(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_DISCRIMINATOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ORDERED])
            || isset($json[self::FIELD_ORDERED_EXT])
            || array_key_exists(self::FIELD_ORDERED, $json)
            || array_key_exists(self::FIELD_ORDERED_EXT, $json)) {
            $value = $json[self::FIELD_ORDERED] ?? null;
            $type->setOrdered(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ORDERED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RULES])
            || isset($json[self::FIELD_RULES_EXT])
            || array_key_exists(self::FIELD_RULES, $json)
            || array_key_exists(self::FIELD_RULES_EXT, $json)) {
            $value = $json[self::FIELD_RULES] ?? null;
            $type->setRules(FHIRSlicingRules::jsonUnserialize(
                (is_array($value) ? $value : [FHIRSlicingRules::FIELD_VALUE => $value]) + ($json[self::FIELD_RULES_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->discriminator)) {
            if (null !== ($val = $this->discriminator->getValue())) {
                $out->discriminator = $val;
            }
            if ($this->discriminator->_nonValueFieldDefined()) {
                $ext = $this->discriminator->jsonSerialize();
                unset($ext->value);
                $out->_discriminator = $ext;
            }
        }
        if (isset($this->ordered)) {
            if (null !== ($val = $this->ordered->getValue())) {
                $out->ordered = $val;
            }
            if ($this->ordered->_nonValueFieldDefined()) {
                $ext = $this->ordered->jsonSerialize();
                unset($ext->value);
                $out->_ordered = $ext;
            }
        }
        if (isset($this->rules)) {
            if (null !== ($val = $this->rules->getValue())) {
                $out->rules = $val;
            }
            if ($this->rules->_nonValueFieldDefined()) {
                $ext = $this->rules->jsonSerialize();
                unset($ext->value);
                $out->_rules = $ext;
            }
        }
        return $out;
    }
}