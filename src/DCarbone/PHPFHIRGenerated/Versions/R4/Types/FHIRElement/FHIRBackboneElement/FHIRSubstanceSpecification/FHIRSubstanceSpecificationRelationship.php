<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 */
class FHIRSubstanceSpecificationRelationship extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP;


    public const FIELD_SUBSTANCE_REFERENCE = 'substanceReference';
    public const FIELD_SUBSTANCE_CODEABLE_CONCEPT = 'substanceCodeableConcept';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_IS_DEFINING = 'isDefining';
    public const FIELD_IS_DEFINING_EXT = '_isDefining';
    public const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    public const FIELD_AMOUNT_RANGE = 'amountRange';
    public const FIELD_AMOUNT_RATIO = 'amountRatio';
    public const FIELD_AMOUNT_STRING = 'amountString';
    public const FIELD_AMOUNT_STRING_EXT = '_amountString';
    public const FIELD_AMOUNT_RATIO_LOW_LIMIT = 'amountRatioLowLimit';
    public const FIELD_AMOUNT_TYPE = 'amountType';
    public const FIELD_SOURCE = 'source';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $substanceReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $substanceCodeableConcept;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationship;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isDefining;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $amountQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $amountRange;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $amountRatio;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $amountString;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $amountRatioLowLimit;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $amountType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $source;

    /** Default validation map for fields in type SubstanceSpecification.Relationship */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceSpecificationRelationship Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $substanceReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $substanceCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $isDefining
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $amountRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $amountRatio
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $amountRatioLowLimit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $amountType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $source
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $substanceReference = null,
                                null|FHIRCodeableConcept $substanceCodeableConcept = null,
                                null|FHIRCodeableConcept $relationship = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDefining = null,
                                null|FHIRQuantity $amountQuantity = null,
                                null|FHIRRange $amountRange = null,
                                null|FHIRRatio $amountRatio = null,
                                null|string|FHIRStringPrimitive|FHIRString $amountString = null,
                                null|FHIRRatio $amountRatioLowLimit = null,
                                null|FHIRCodeableConcept $amountType = null,
                                null|iterable $source = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $substanceReference) {
            $this->setSubstanceReference($substanceReference);
        }
        if (null !== $substanceCodeableConcept) {
            $this->setSubstanceCodeableConcept($substanceCodeableConcept);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $isDefining) {
            $this->setIsDefining($isDefining);
        }
        if (null !== $amountQuantity) {
            $this->setAmountQuantity($amountQuantity);
        }
        if (null !== $amountRange) {
            $this->setAmountRange($amountRange);
        }
        if (null !== $amountRatio) {
            $this->setAmountRatio($amountRatio);
        }
        if (null !== $amountString) {
            $this->setAmountString($amountString);
        }
        if (null !== $amountRatioLowLimit) {
            $this->setAmountRatioLowLimit($amountRatioLowLimit);
        }
        if (null !== $amountType) {
            $this->setAmountType($amountType);
        }
        if (null !== $source) {
            $this->setSource(...$source);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getSubstanceReference(): null|FHIRReference
    {
        return $this->substanceReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $substanceReference
     * @return static
     */
    public function setSubstanceReference(null|FHIRReference $substanceReference): self
    {
        if (null === $substanceReference) {
            unset($this->substanceReference);
            return $this;
        }
        $this->substanceReference = $substanceReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstanceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->substanceCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $substanceCodeableConcept
     * @return static
     */
    public function setSubstanceCodeableConcept(null|FHIRCodeableConcept $substanceCodeableConcept): self
    {
        if (null === $substanceCodeableConcept) {
            unset($this->substanceCodeableConcept);
            return $this;
        }
        $this->substanceCodeableConcept = $substanceCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getIsDefining(): null|FHIRBoolean
    {
        return $this->isDefining ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $isDefining
     * @return static
     */
    public function setIsDefining(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDefining): self
    {
        if (null === $isDefining) {
            unset($this->isDefining);
            return $this;
        }
        if (!($isDefining instanceof FHIRBoolean)) {
            $isDefining = new FHIRBoolean(value: $isDefining);
        }
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity(): null|FHIRQuantity
    {
        return $this->amountQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(null|FHIRQuantity $amountQuantity): self
    {
        if (null === $amountQuantity) {
            unset($this->amountQuantity);
            return $this;
        }
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange
     */
    public function getAmountRange(): null|FHIRRange
    {
        return $this->amountRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $amountRange
     * @return static
     */
    public function setAmountRange(null|FHIRRange $amountRange): self
    {
        if (null === $amountRange) {
            unset($this->amountRange);
            return $this;
        }
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getAmountRatio(): null|FHIRRatio
    {
        return $this->amountRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $amountRatio
     * @return static
     */
    public function setAmountRatio(null|FHIRRatio $amountRatio): self
    {
        if (null === $amountRatio) {
            unset($this->amountRatio);
            return $this;
        }
        $this->amountRatio = $amountRatio;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAmountString(): null|FHIRString
    {
        return $this->amountString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @return static
     */
    public function setAmountString(null|string|FHIRStringPrimitive|FHIRString $amountString): self
    {
        if (null === $amountString) {
            unset($this->amountString);
            return $this;
        }
        if (!($amountString instanceof FHIRString)) {
            $amountString = new FHIRString(value: $amountString);
        }
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getAmountRatioLowLimit(): null|FHIRRatio
    {
        return $this->amountRatioLowLimit ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $amountRatioLowLimit
     * @return static
     */
    public function setAmountRatioLowLimit(null|FHIRRatio $amountRatioLowLimit): self
    {
        if (null === $amountRatioLowLimit) {
            unset($this->amountRatioLowLimit);
            return $this;
        }
        $this->amountRatioLowLimit = $amountRatioLowLimit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType(): null|FHIRCodeableConcept
    {
        return $this->amountType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $amountType
     * @return static
     */
    public function setAmountType(null|FHIRCodeableConcept $amountType): self
    {
        if (null === $amountType) {
            unset($this->amountType);
            return $this;
        }
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getSource(): array
    {
        return $this->source ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getSourceIterator(): iterable
    {
        if (!isset($this->source) || [] === $this->source) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->source);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $source
     * @return static
     */
    public function addSource(FHIRReference $source): self
    {
        if (!isset($this->source)) {
            $this->source = [];
        }
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$source
     * @return static
     */
    public function setSource(FHIRReference ...$source): self
    {
        $this->source = $source;
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
        if (isset($validationRules[self::FIELD_SUBSTANCE_REFERENCE])) {
            $v = $this->getSubstanceReference();
            foreach($validationRules[self::FIELD_SUBSTANCE_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSTANCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE_REFERENCE])) {
                        $errs[self::FIELD_SUBSTANCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT])) {
            $v = $this->getSubstanceCodeableConcept();
            foreach($validationRules[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSTANCE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_DEFINING])) {
            $v = $this->getIsDefining();
            foreach($validationRules[self::FIELD_IS_DEFINING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_DEFINING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_DEFINING])) {
                        $errs[self::FIELD_IS_DEFINING] = [];
                    }
                    $errs[self::FIELD_IS_DEFINING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_QUANTITY])) {
            $v = $this->getAmountQuantity();
            foreach($validationRules[self::FIELD_AMOUNT_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_QUANTITY])) {
                        $errs[self::FIELD_AMOUNT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_AMOUNT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RANGE])) {
            $v = $this->getAmountRange();
            foreach($validationRules[self::FIELD_AMOUNT_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RANGE])) {
                        $errs[self::FIELD_AMOUNT_RANGE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RATIO])) {
            $v = $this->getAmountRatio();
            foreach($validationRules[self::FIELD_AMOUNT_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RATIO])) {
                        $errs[self::FIELD_AMOUNT_RATIO] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_STRING])) {
            $v = $this->getAmountString();
            foreach($validationRules[self::FIELD_AMOUNT_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_STRING])) {
                        $errs[self::FIELD_AMOUNT_STRING] = [];
                    }
                    $errs[self::FIELD_AMOUNT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RATIO_LOW_LIMIT])) {
            $v = $this->getAmountRatioLowLimit();
            foreach($validationRules[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_RATIO_LOW_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RATIO_LOW_LIMIT])) {
                        $errs[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RATIO_LOW_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_TYPE])) {
            $v = $this->getAmountType();
            foreach($validationRules[self::FIELD_AMOUNT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_TYPE])) {
                        $errs[self::FIELD_AMOUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSpecificationRelationship)) {
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
            } else if (self::FIELD_SUBSTANCE_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setSubstanceReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBSTANCE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSubstanceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIONSHIP === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_DEFINING === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIsDefining(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setAmountRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setAmountRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_STRING === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAmountString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_RATIO_LOW_LIMIT === $childName) {
                $v = new FHIRRatio();
                $type->setAmountRatioLowLimit(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAmountType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE === $childName) {
                $v = new FHIRReference();
                $type->addSource(FHIRReference::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_IS_DEFINING])) {
            $pt = $type->getIsDefining();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_DEFINING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsDefining(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_DEFINING],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT_STRING])) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AMOUNT_STRING]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAmountString(new FHIRString(
                    value: (string)$attributes[self::FIELD_AMOUNT_STRING],
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
            $xw->openRootNode('SubstanceSpecificationRelationship', $this->_getSourceXMLNS());
        }
        if (isset($this->isDefining) && $this->isDefining->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_DEFINING, $this->isDefining->getValue()?->getFormattedValue());
        }
        if (isset($this->amountString) && $this->amountString->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AMOUNT_STRING, $this->amountString->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->substanceReference)) {
            $xw->startElement(self::FIELD_SUBSTANCE_REFERENCE);
            $this->substanceReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->substanceCodeableConcept)) {
            $xw->startElement(self::FIELD_SUBSTANCE_CODEABLE_CONCEPT);
            $this->substanceCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relationship)) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isDefining) && $this->isDefining->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_DEFINING);
            $this->isDefining->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountQuantity)) {
            $xw->startElement(self::FIELD_AMOUNT_QUANTITY);
            $this->amountQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountRange)) {
            $xw->startElement(self::FIELD_AMOUNT_RANGE);
            $this->amountRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountRatio)) {
            $xw->startElement(self::FIELD_AMOUNT_RATIO);
            $this->amountRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountString) && $this->amountString->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AMOUNT_STRING);
            $this->amountString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountRatioLowLimit)) {
            $xw->startElement(self::FIELD_AMOUNT_RATIO_LOW_LIMIT);
            $this->amountRatioLowLimit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountType)) {
            $xw->startElement(self::FIELD_AMOUNT_TYPE);
            $this->amountType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->source)) {
            foreach ($this->source as $v) {
                $xw->startElement(self::FIELD_SOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSpecificationRelationship)) {
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
        if (isset($json[self::FIELD_SUBSTANCE_REFERENCE]) || array_key_exists(self::FIELD_SUBSTANCE_REFERENCE, $json)) {
            if ($json[self::FIELD_SUBSTANCE_REFERENCE] instanceof FHIRReference) {
                $type->setSubstanceReference($json[self::FIELD_SUBSTANCE_REFERENCE]);
            } else {
                $type->setSubstanceReference(new FHIRReference($json[self::FIELD_SUBSTANCE_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_SUBSTANCE_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setSubstanceCodeableConcept($json[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]);
            } else {
                $type->setSubstanceCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_RELATIONSHIP]) || array_key_exists(self::FIELD_RELATIONSHIP, $json)) {
            if ($json[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $type->setRelationship($json[self::FIELD_RELATIONSHIP]);
            } else {
                $type->setRelationship(new FHIRCodeableConcept($json[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($json[self::FIELD_IS_DEFINING]) || isset($json[self::FIELD_IS_DEFINING_EXT]) || array_key_exists(self::FIELD_IS_DEFINING, $json) || array_key_exists(self::FIELD_IS_DEFINING_EXT, $json)) {
            $value = $json[self::FIELD_IS_DEFINING] ?? null;
            $ext = (isset($json[self::FIELD_IS_DEFINING_EXT]) && is_array($json[self::FIELD_IS_DEFINING_EXT])) ? $json[self::FIELD_IS_DEFINING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsDefining($value);
                } else if (is_array($value)) {
                    $type->setIsDefining(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsDefining(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsDefining(new FHIRBoolean($ext));
            } else {
                $type->setIsDefining(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_QUANTITY]) || array_key_exists(self::FIELD_AMOUNT_QUANTITY, $json)) {
            if ($json[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $type->setAmountQuantity($json[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $type->setAmountQuantity(new FHIRQuantity($json[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_RANGE]) || array_key_exists(self::FIELD_AMOUNT_RANGE, $json)) {
            if ($json[self::FIELD_AMOUNT_RANGE] instanceof FHIRRange) {
                $type->setAmountRange($json[self::FIELD_AMOUNT_RANGE]);
            } else {
                $type->setAmountRange(new FHIRRange($json[self::FIELD_AMOUNT_RANGE]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_RATIO]) || array_key_exists(self::FIELD_AMOUNT_RATIO, $json)) {
            if ($json[self::FIELD_AMOUNT_RATIO] instanceof FHIRRatio) {
                $type->setAmountRatio($json[self::FIELD_AMOUNT_RATIO]);
            } else {
                $type->setAmountRatio(new FHIRRatio($json[self::FIELD_AMOUNT_RATIO]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_STRING]) || isset($json[self::FIELD_AMOUNT_STRING_EXT]) || array_key_exists(self::FIELD_AMOUNT_STRING, $json) || array_key_exists(self::FIELD_AMOUNT_STRING_EXT, $json)) {
            $value = $json[self::FIELD_AMOUNT_STRING] ?? null;
            $ext = (isset($json[self::FIELD_AMOUNT_STRING_EXT]) && is_array($json[self::FIELD_AMOUNT_STRING_EXT])) ? $json[self::FIELD_AMOUNT_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAmountString($value);
                } else if (is_array($value)) {
                    $type->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAmountString(new FHIRString($ext));
            } else {
                $type->setAmountString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]) || array_key_exists(self::FIELD_AMOUNT_RATIO_LOW_LIMIT, $json)) {
            if ($json[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] instanceof FHIRRatio) {
                $type->setAmountRatioLowLimit($json[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]);
            } else {
                $type->setAmountRatioLowLimit(new FHIRRatio($json[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_TYPE]) || array_key_exists(self::FIELD_AMOUNT_TYPE, $json)) {
            if ($json[self::FIELD_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $type->setAmountType($json[self::FIELD_AMOUNT_TYPE]);
            } else {
                $type->setAmountType(new FHIRCodeableConcept($json[self::FIELD_AMOUNT_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SOURCE]) || array_key_exists(self::FIELD_SOURCE, $json)) {
            if (is_array($json[self::FIELD_SOURCE])) {
                foreach($json[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSource($v);
                    } else {
                        $type->addSource(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SOURCE] instanceof FHIRReference) {
                $type->addSource($json[self::FIELD_SOURCE]);
            } else {
                $type->addSource(new FHIRReference($json[self::FIELD_SOURCE]));
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
        if (isset($this->substanceReference)) {
            $out->substanceReference = $this->substanceReference;
        }
        if (isset($this->substanceCodeableConcept)) {
            $out->substanceCodeableConcept = $this->substanceCodeableConcept;
        }
        if (isset($this->relationship)) {
            $out->relationship = $this->relationship;
        }
        if (isset($this->isDefining)) {
            if (null !== ($val = $this->isDefining->getValue())) {
                $out->isDefining = $val;
            }
            $ext = $this->isDefining->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isDefining = $ext;
            }
        }
        if (isset($this->amountQuantity)) {
            $out->amountQuantity = $this->amountQuantity;
        }
        if (isset($this->amountRange)) {
            $out->amountRange = $this->amountRange;
        }
        if (isset($this->amountRatio)) {
            $out->amountRatio = $this->amountRatio;
        }
        if (isset($this->amountString)) {
            if (null !== ($val = $this->amountString->getValue())) {
                $out->amountString = $val;
            }
            $ext = $this->amountString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_amountString = $ext;
            }
        }
        if (isset($this->amountRatioLowLimit)) {
            $out->amountRatioLowLimit = $this->amountRatioLowLimit;
        }
        if (isset($this->amountType)) {
            $out->amountType = $this->amountType;
        }
        if (isset($this->source) && [] !== $this->source) {
            $out->source = $this->source;
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