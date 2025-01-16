<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceSpecificationRelationship
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification
 */
class FHIRSubstanceSpecificationRelationship extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP;

    const FIELD_SUBSTANCE_REFERENCE = 'substanceReference';
    const FIELD_SUBSTANCE_CODEABLE_CONCEPT = 'substanceCodeableConcept';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_IS_DEFINING = 'isDefining';
    const FIELD_IS_DEFINING_EXT = '_isDefining';
    const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    const FIELD_AMOUNT_RANGE = 'amountRange';
    const FIELD_AMOUNT_RATIO = 'amountRatio';
    const FIELD_AMOUNT_STRING = 'amountString';
    const FIELD_AMOUNT_STRING_EXT = '_amountString';
    const FIELD_AMOUNT_RATIO_LOW_LIMIT = 'amountRatioLowLimit';
    const FIELD_AMOUNT_TYPE = 'amountType';
    const FIELD_SOURCE = 'source';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $substanceReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $substanceCodeableConcept = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $relationship = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isDefining = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $amountQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $amountRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $amountRatio = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $amountString = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $amountRatioLowLimit = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $amountType = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $source = [];

    /**
     * Validation map for fields in type SubstanceSpecification.Relationship
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubstanceSpecificationRelationship Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SUBSTANCE_REFERENCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE_REFERENCE] instanceof FHIRReference) {
                $this->setSubstanceReference($data[self::FIELD_SUBSTANCE_REFERENCE]);
            } else {
                $this->setSubstanceReference(new FHIRReference($data[self::FIELD_SUBSTANCE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubstanceCodeableConcept($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]);
            } else {
                $this->setSubstanceCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_RELATIONSHIP, $data)) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (array_key_exists(self::FIELD_IS_DEFINING, $data) || array_key_exists(self::FIELD_IS_DEFINING_EXT, $data)) {
            $value = $data[self::FIELD_IS_DEFINING] ?? null;
            $ext = (isset($data[self::FIELD_IS_DEFINING_EXT]) && is_array($data[self::FIELD_IS_DEFINING_EXT])) ? $data[self::FIELD_IS_DEFINING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDefining($value);
                } else if (is_array($value)) {
                    $this->setIsDefining(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDefining(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsDefining(new FHIRBoolean($ext));
            } else {
                $this->setIsDefining(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_QUANTITY, $data)) {
            if ($data[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $this->setAmountQuantity($data[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $this->setAmountQuantity(new FHIRQuantity($data[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_RANGE, $data)) {
            if ($data[self::FIELD_AMOUNT_RANGE] instanceof FHIRRange) {
                $this->setAmountRange($data[self::FIELD_AMOUNT_RANGE]);
            } else {
                $this->setAmountRange(new FHIRRange($data[self::FIELD_AMOUNT_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_RATIO, $data)) {
            if ($data[self::FIELD_AMOUNT_RATIO] instanceof FHIRRatio) {
                $this->setAmountRatio($data[self::FIELD_AMOUNT_RATIO]);
            } else {
                $this->setAmountRatio(new FHIRRatio($data[self::FIELD_AMOUNT_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_STRING, $data) || array_key_exists(self::FIELD_AMOUNT_STRING_EXT, $data)) {
            $value = $data[self::FIELD_AMOUNT_STRING] ?? null;
            $ext = (isset($data[self::FIELD_AMOUNT_STRING_EXT]) && is_array($data[self::FIELD_AMOUNT_STRING_EXT])) ? $data[self::FIELD_AMOUNT_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAmountString($value);
                } else if (is_array($value)) {
                    $this->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAmountString(new FHIRString($ext));
            } else {
                $this->setAmountString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_RATIO_LOW_LIMIT, $data)) {
            if ($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] instanceof FHIRRatio) {
                $this->setAmountRatioLowLimit($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]);
            } else {
                $this->setAmountRatioLowLimit(new FHIRRatio($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT_TYPE, $data)) {
            if ($data[self::FIELD_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAmountType($data[self::FIELD_AMOUNT_TYPE]);
            } else {
                $this->setAmountType(new FHIRCodeableConcept($data[self::FIELD_AMOUNT_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SOURCE, $data)) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubstanceReference(): null|FHIRReference
    {
        return $this->substanceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $substanceReference
     * @return static
     */
    public function setSubstanceReference(null|FHIRReference $substanceReference = null): self
    {
        if (null === $substanceReference) {
            $substanceReference = new FHIRReference();
        }
        $this->_trackValueSet($this->substanceReference, $substanceReference);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstanceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->substanceCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $substanceCodeableConcept
     * @return static
     */
    public function setSubstanceCodeableConcept(null|FHIRCodeableConcept $substanceCodeableConcept = null): self
    {
        if (null === $substanceCodeableConcept) {
            $substanceCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->substanceCodeableConcept, $substanceCodeableConcept);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship = null): self
    {
        if (null === $relationship) {
            $relationship = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->relationship, $relationship);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIsDefining(): null|FHIRBoolean
    {
        return $this->isDefining;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isDefining
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIsDefining(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isDefining = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $isDefining && !($isDefining instanceof FHIRBoolean)) {
            $isDefining = new FHIRBoolean($isDefining);
        }
        $this->_trackValueSet($this->isDefining, $isDefining);
        if (!isset($this->_xmlLocations[self::FIELD_IS_DEFINING])) {
            $this->_xmlLocations[self::FIELD_IS_DEFINING] = [];
        }
        $this->_xmlLocations[self::FIELD_IS_DEFINING][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity(): null|FHIRQuantity
    {
        return $this->amountQuantity;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(null|FHIRQuantity $amountQuantity = null): self
    {
        if (null === $amountQuantity) {
            $amountQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->amountQuantity, $amountQuantity);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAmountRange(): null|FHIRRange
    {
        return $this->amountRange;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $amountRange
     * @return static
     */
    public function setAmountRange(null|FHIRRange $amountRange = null): self
    {
        if (null === $amountRange) {
            $amountRange = new FHIRRange();
        }
        $this->_trackValueSet($this->amountRange, $amountRange);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getAmountRatio(): null|FHIRRatio
    {
        return $this->amountRatio;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $amountRatio
     * @return static
     */
    public function setAmountRatio(null|FHIRRatio $amountRatio = null): self
    {
        if (null === $amountRatio) {
            $amountRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->amountRatio, $amountRatio);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAmountString(): null|FHIRString
    {
        return $this->amountString;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $amountString
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAmountString(null|string|FHIRStringPrimitive|FHIRString $amountString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $amountString && !($amountString instanceof FHIRString)) {
            $amountString = new FHIRString($amountString);
        }
        $this->_trackValueSet($this->amountString, $amountString);
        if (!isset($this->_xmlLocations[self::FIELD_AMOUNT_STRING])) {
            $this->_xmlLocations[self::FIELD_AMOUNT_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_AMOUNT_STRING][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getAmountRatioLowLimit(): null|FHIRRatio
    {
        return $this->amountRatioLowLimit;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $amountRatioLowLimit
     * @return static
     */
    public function setAmountRatioLowLimit(null|FHIRRatio $amountRatioLowLimit = null): self
    {
        if (null === $amountRatioLowLimit) {
            $amountRatioLowLimit = new FHIRRatio();
        }
        $this->_trackValueSet($this->amountRatioLowLimit, $amountRatioLowLimit);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType(): null|FHIRCodeableConcept
    {
        return $this->amountType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $amountType
     * @return static
     */
    public function setAmountType(null|FHIRCodeableConcept $amountType = null): self
    {
        if (null === $amountType) {
            $amountType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->amountType, $amountType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSource(): null|array
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $source
     * @return static
     */
    public function addSource(null|FHIRReference $source = null): self
    {
        if (null === $source) {
            $source = new FHIRReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$source
     * @return static
     */
    public function setSource(FHIRReference ...$source): self
    {
        if ([] !== $this->source) {
            $this->_trackValuesRemoved(count($this->source));
            $this->source = [];
        }
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            $this->addSource($v);
        }
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
        if (null !== ($v = $this->getSubstanceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsDefining())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DEFINING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE_REFERENCE])) {
            $v = $this->getSubstanceReference();
            foreach($validationRules[self::FIELD_SUBSTANCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_SUBSTANCE_REFERENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_SUBSTANCE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_IS_DEFINING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_RATIO, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_RATIO_LOW_LIMIT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_AMOUNT_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_RELATIONSHIP, self::FIELD_SOURCE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship
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
        } else if (!($type instanceof FHIRSubstanceSpecificationRelationship)) {
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
            if (self::FIELD_SUBSTANCE_REFERENCE === $childName) {
                $type->setSubstanceReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE_CODEABLE_CONCEPT === $childName) {
                $type->setSubstanceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATIONSHIP === $childName) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IS_DEFINING === $childName) {
                $type->setIsDefining(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AMOUNT_QUANTITY === $childName) {
                $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AMOUNT_RANGE === $childName) {
                $type->setAmountRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AMOUNT_RATIO === $childName) {
                $type->setAmountRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AMOUNT_STRING === $childName) {
                $type->setAmountString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AMOUNT_RATIO_LOW_LIMIT === $childName) {
                $type->setAmountRatioLowLimit(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AMOUNT_TYPE === $childName) {
                $type->setAmountType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SOURCE === $childName) {
                $type->addSource(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_IS_DEFINING])) {
            $pt = $type->getIsDefining();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_DEFINING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsDefining((string)$attributes[self::FIELD_IS_DEFINING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT_STRING])) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AMOUNT_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAmountString((string)$attributes[self::FIELD_AMOUNT_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'SubstanceSpecificationRelationship', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_IS_DEFINING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIsDefining())) {
            $xw->writeAttribute(self::FIELD_IS_DEFINING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_AMOUNT_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAmountString())) {
            $xw->writeAttribute(self::FIELD_AMOUNT_STRING, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getSubstanceReference())) {
            $xw->startElement(self::FIELD_SUBSTANCE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            $xw->startElement(self::FIELD_SUBSTANCE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRelationship())) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_IS_DEFINING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIsDefining())) {
            $xw->startElement(self::FIELD_IS_DEFINING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            $xw->startElement(self::FIELD_AMOUNT_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmountRange())) {
            $xw->startElement(self::FIELD_AMOUNT_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $xw->startElement(self::FIELD_AMOUNT_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_AMOUNT_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAmountString())) {
            $xw->startElement(self::FIELD_AMOUNT_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            $xw->startElement(self::FIELD_AMOUNT_RATIO_LOW_LIMIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmountType())) {
            $xw->startElement(self::FIELD_AMOUNT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSource() as $v) {
            $xw->startElement(self::FIELD_SOURCE);
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
        if (null !== ($v = $this->getSubstanceReference())) {
            $out->{self::FIELD_SUBSTANCE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            $out->{self::FIELD_SUBSTANCE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $out->{self::FIELD_RELATIONSHIP} = $v;
        }
        if (null !== ($v = $this->getIsDefining())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_DEFINING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_DEFINING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAmountQuantity())) {
            $out->{self::FIELD_AMOUNT_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getAmountRange())) {
            $out->{self::FIELD_AMOUNT_RANGE} = $v;
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $out->{self::FIELD_AMOUNT_RATIO} = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AMOUNT_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AMOUNT_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            $out->{self::FIELD_AMOUNT_RATIO_LOW_LIMIT} = $v;
        }
        if (null !== ($v = $this->getAmountType())) {
            $out->{self::FIELD_AMOUNT_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getSource())) {
            $out->{self::FIELD_SOURCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SOURCE}[] = $v;
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