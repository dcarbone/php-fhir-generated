<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceStructureVariant extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT;


    public const FIELD_VARIANT_TYPE = 'variantType';
    public const FIELD_EXACT = 'exact';
    public const FIELD_EXACT_EXT = '_exact';
    public const FIELD_LENGTH = 'length';
    public const FIELD_LENGTH_EXT = '_length';
    public const FIELD_OUTER = 'outer';
    public const FIELD_INNER = 'inner';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $variantType;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exact;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $length;
    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter 
     */
    protected FHIRMolecularSequenceOuter $outer;
    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner 
     */
    protected FHIRMolecularSequenceInner $inner;

    /** Default validation map for fields in type MolecularSequence.StructureVariant */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRMolecularSequenceStructureVariant Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $variantType
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exact
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter $outer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner $inner
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $variantType = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exact = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length = null,
                                null|FHIRMolecularSequenceOuter $outer = null,
                                null|FHIRMolecularSequenceInner $inner = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $variantType) {
            $this->setVariantType($variantType);
        }
        if (null !== $exact) {
            $this->setExact($exact);
        }
        if (null !== $length) {
            $this->setLength($length);
        }
        if (null !== $outer) {
            $this->setOuter($outer);
        }
        if (null !== $inner) {
            $this->setInner($inner);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantType(): null|FHIRCodeableConcept
    {
        return $this->variantType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $variantType
     * @return static
     */
    public function setVariantType(null|FHIRCodeableConcept $variantType): self
    {
        if (null === $variantType) {
            unset($this->variantType);
            return $this;
        }
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getExact(): null|FHIRBoolean
    {
        return $this->exact ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exact
     * @return static
     */
    public function setExact(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exact): self
    {
        if (null === $exact) {
            unset($this->exact);
            return $this;
        }
        if (!($exact instanceof FHIRBoolean)) {
            $exact = new FHIRBoolean(value: $exact);
        }
        $this->exact = $exact;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getLength(): null|FHIRInteger
    {
        return $this->length ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @return static
     */
    public function setLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length): self
    {
        if (null === $length) {
            unset($this->length);
            return $this;
        }
        if (!($length instanceof FHIRInteger)) {
            $length = new FHIRInteger(value: $length);
        }
        $this->length = $length;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public function getOuter(): null|FHIRMolecularSequenceOuter
    {
        return $this->outer ?? null;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter $outer
     * @return static
     */
    public function setOuter(null|FHIRMolecularSequenceOuter $outer): self
    {
        if (null === $outer) {
            unset($this->outer);
            return $this;
        }
        $this->outer = $outer;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public function getInner(): null|FHIRMolecularSequenceInner
    {
        return $this->inner ?? null;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner $inner
     * @return static
     */
    public function setInner(null|FHIRMolecularSequenceInner $inner): self
    {
        if (null === $inner) {
            unset($this->inner);
            return $this;
        }
        $this->inner = $inner;
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
        if (isset($validationRules[self::FIELD_VARIANT_TYPE])) {
            $v = $this->getVariantType();
            foreach($validationRules[self::FIELD_VARIANT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VARIANT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT_TYPE])) {
                        $errs[self::FIELD_VARIANT_TYPE] = [];
                    }
                    $errs[self::FIELD_VARIANT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXACT])) {
            $v = $this->getExact();
            foreach($validationRules[self::FIELD_EXACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXACT])) {
                        $errs[self::FIELD_EXACT] = [];
                    }
                    $errs[self::FIELD_EXACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTER])) {
            $v = $this->getOuter();
            foreach($validationRules[self::FIELD_OUTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTER])) {
                        $errs[self::FIELD_OUTER] = [];
                    }
                    $errs[self::FIELD_OUTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INNER])) {
            $v = $this->getInner();
            foreach($validationRules[self::FIELD_INNER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INNER])) {
                        $errs[self::FIELD_INNER] = [];
                    }
                    $errs[self::FIELD_INNER][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceStructureVariant)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VARIANT_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setVariantType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXACT === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setExact(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LENGTH === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLength(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTER === $childName) {
                $v = new FHIRMolecularSequenceOuter();
                $type->setOuter(FHIRMolecularSequenceOuter::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INNER === $childName) {
                $v = new FHIRMolecularSequenceInner();
                $type->setInner(FHIRMolecularSequenceInner::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXACT])) {
            $pt = $type->getExact();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXACT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExact(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXACT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LENGTH])) {
            $pt = $type->getLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LENGTH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLength(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_LENGTH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('MolecularSequenceStructureVariant', $this->_getSourceXMLNS());
        }
        if (isset($this->exact) && $this->exact->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXACT, $this->exact->getValue()?->getFormattedValue());
        }
        if (isset($this->length) && $this->length->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LENGTH, $this->length->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->variantType)) {
            $xw->startElement(self::FIELD_VARIANT_TYPE);
            $this->variantType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exact) && $this->exact->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXACT);
            $this->exact->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->length) && $this->length->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LENGTH);
            $this->length->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outer)) {
            $xw->startElement(self::FIELD_OUTER);
            $this->outer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->inner)) {
            $xw->startElement(self::FIELD_INNER);
            $this->inner->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceStructureVariant)) {
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
        if (isset($json[self::FIELD_VARIANT_TYPE]) || array_key_exists(self::FIELD_VARIANT_TYPE, $json)) {
            if ($json[self::FIELD_VARIANT_TYPE] instanceof FHIRCodeableConcept) {
                $type->setVariantType($json[self::FIELD_VARIANT_TYPE]);
            } else {
                $type->setVariantType(new FHIRCodeableConcept($json[self::FIELD_VARIANT_TYPE]));
            }
        }
        if (isset($json[self::FIELD_EXACT]) || isset($json[self::FIELD_EXACT_EXT]) || array_key_exists(self::FIELD_EXACT, $json) || array_key_exists(self::FIELD_EXACT_EXT, $json)) {
            $value = $json[self::FIELD_EXACT] ?? null;
            $ext = (isset($json[self::FIELD_EXACT_EXT]) && is_array($json[self::FIELD_EXACT_EXT])) ? $json[self::FIELD_EXACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExact($value);
                } else if (is_array($value)) {
                    $type->setExact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExact(new FHIRBoolean($ext));
            } else {
                $type->setExact(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_LENGTH]) || isset($json[self::FIELD_LENGTH_EXT]) || array_key_exists(self::FIELD_LENGTH, $json) || array_key_exists(self::FIELD_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_LENGTH] ?? null;
            $ext = (isset($json[self::FIELD_LENGTH_EXT]) && is_array($json[self::FIELD_LENGTH_EXT])) ? $json[self::FIELD_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setLength($value);
                } else if (is_array($value)) {
                    $type->setLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLength(new FHIRInteger($ext));
            } else {
                $type->setLength(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_OUTER]) || array_key_exists(self::FIELD_OUTER, $json)) {
            if ($json[self::FIELD_OUTER] instanceof FHIRMolecularSequenceOuter) {
                $type->setOuter($json[self::FIELD_OUTER]);
            } else {
                $type->setOuter(new FHIRMolecularSequenceOuter($json[self::FIELD_OUTER]));
            }
        }
        if (isset($json[self::FIELD_INNER]) || array_key_exists(self::FIELD_INNER, $json)) {
            if ($json[self::FIELD_INNER] instanceof FHIRMolecularSequenceInner) {
                $type->setInner($json[self::FIELD_INNER]);
            } else {
                $type->setInner(new FHIRMolecularSequenceInner($json[self::FIELD_INNER]));
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
        if (isset($this->variantType)) {
            $out->variantType = $this->variantType;
        }
        if (isset($this->exact)) {
            if (null !== ($val = $this->exact->getValue())) {
                $out->exact = $val;
            }
            $ext = $this->exact->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exact = $ext;
            }
        }
        if (isset($this->length)) {
            if (null !== ($val = $this->length->getValue())) {
                $out->length = $val;
            }
            $ext = $this->length->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_length = $ext;
            }
        }
        if (isset($this->outer)) {
            $out->outer = $this->outer;
        }
        if (isset($this->inner)) {
            $out->inner = $this->inner;
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