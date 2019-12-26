<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    const FIELD_AMOUNT_RANGE = 'amountRange';
    const FIELD_AMOUNT_RATIO = 'amountRatio';
    const FIELD_AMOUNT_RATIO_LOW_LIMIT = 'amountRatioLowLimit';
    const FIELD_AMOUNT_STRING = 'amountString';
    const FIELD_AMOUNT_STRING_EXT = '_amountString';
    const FIELD_AMOUNT_TYPE = 'amountType';
    const FIELD_IS_DEFINING = 'isDefining';
    const FIELD_IS_DEFINING_EXT = '_isDefining';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SOURCE = 'source';
    const FIELD_SUBSTANCE_CODEABLE_CONCEPT = 'substanceCodeableConcept';
    const FIELD_SUBSTANCE_REFERENCE = 'substanceReference';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other. (choose any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $amountQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other. (choose any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $amountRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other. (choose any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $amountRatio = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For use when the numeric.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $amountRatioLowLimit = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other. (choose any one of amount*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $amountString = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $amountType = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For example where an enzyme strongly bonds with a particular substance, this is
     * a defining relationship for that enzyme, out of several possible substance
     * relationships.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $isDefining = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $relationship = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $source = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * (choose any one of substance*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $substanceCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * (choose any one of substance*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $substanceReference = null;

    /**
     * Validation map for fields in type SubstanceSpecification.Relationship
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSpecificationRelationship Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecificationRelationship::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AMOUNT_QUANTITY])) {
            if ($data[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $this->setAmountQuantity($data[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $this->setAmountQuantity(new FHIRQuantity($data[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_RANGE])) {
            if ($data[self::FIELD_AMOUNT_RANGE] instanceof FHIRRange) {
                $this->setAmountRange($data[self::FIELD_AMOUNT_RANGE]);
            } else {
                $this->setAmountRange(new FHIRRange($data[self::FIELD_AMOUNT_RANGE]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_RATIO])) {
            if ($data[self::FIELD_AMOUNT_RATIO] instanceof FHIRRatio) {
                $this->setAmountRatio($data[self::FIELD_AMOUNT_RATIO]);
            } else {
                $this->setAmountRatio(new FHIRRatio($data[self::FIELD_AMOUNT_RATIO]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT])) {
            if ($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] instanceof FHIRRatio) {
                $this->setAmountRatioLowLimit($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]);
            } else {
                $this->setAmountRatioLowLimit(new FHIRRatio($data[self::FIELD_AMOUNT_RATIO_LOW_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_STRING]) || isset($data[self::FIELD_AMOUNT_STRING_EXT])) {
            if (isset($data[self::FIELD_AMOUNT_STRING])) {
                $value = $data[self::FIELD_AMOUNT_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AMOUNT_STRING_EXT]) && is_array($data[self::FIELD_AMOUNT_STRING_EXT])) {
                $ext = $data[self::FIELD_AMOUNT_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAmountString($value);
                } else if (is_array($value)) {
                    $this->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAmountString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AMOUNT_TYPE])) {
            if ($data[self::FIELD_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAmountType($data[self::FIELD_AMOUNT_TYPE]);
            } else {
                $this->setAmountType(new FHIRCodeableConcept($data[self::FIELD_AMOUNT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_IS_DEFINING]) || isset($data[self::FIELD_IS_DEFINING_EXT])) {
            if (isset($data[self::FIELD_IS_DEFINING])) {
                $value = $data[self::FIELD_IS_DEFINING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IS_DEFINING_EXT]) && is_array($data[self::FIELD_IS_DEFINING_EXT])) {
                $ext = $data[self::FIELD_IS_DEFINING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsDefining($value);
                } else if (is_array($value)) {
                    $this->setIsDefining(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsDefining(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIsDefining(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubstanceCodeableConcept($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]);
            } else {
                $this->setSubstanceCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE_REFERENCE])) {
            if ($data[self::FIELD_SUBSTANCE_REFERENCE] instanceof FHIRReference) {
                $this->setSubstanceReference($data[self::FIELD_SUBSTANCE_REFERENCE]);
            } else {
                $this->setSubstanceReference(new FHIRReference($data[self::FIELD_SUBSTANCE_REFERENCE]));
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
        return "<SubstanceSpecificationRelationship{$xmlns}></SubstanceSpecificationRelationship>";
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
     * other. (choose any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity()
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
     * other. (choose any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(FHIRQuantity $amountQuantity = null)
    {
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
     * other. (choose any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAmountRange()
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
     * other. (choose any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $amountRange
     * @return static
     */
    public function setAmountRange(FHIRRange $amountRange = null)
    {
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
     * other. (choose any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getAmountRatio()
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
     * other. (choose any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $amountRatio
     * @return static
     */
    public function setAmountRatio(FHIRRatio $amountRatio = null)
    {
        $this->amountRatio = $amountRatio;
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
    public function getAmountRatioLowLimit()
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
    public function setAmountRatioLowLimit(FHIRRatio $amountRatioLowLimit = null)
    {
        $this->amountRatioLowLimit = $amountRatioLowLimit;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A numeric factor for the relationship, for instance to express that the salt of
     * a substance has some percentage of the active substance in relation to some
     * other. (choose any one of amount*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAmountString()
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
     * other. (choose any one of amount*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $amountString
     * @return static
     */
    public function setAmountString($amountString = null)
    {
        if (null === $amountString) {
            $this->amountString = null;
            return $this;
        }
        if ($amountString instanceof FHIRString) {
            $this->amountString = $amountString;
            return $this;
        }
        $this->amountString = new FHIRString($amountString);
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
    public function getAmountType()
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
    public function setAmountType(FHIRCodeableConcept $amountType = null)
    {
        $this->amountType = $amountType;
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
    public function getIsDefining()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $isDefining
     * @return static
     */
    public function setIsDefining($isDefining = null)
    {
        if (null === $isDefining) {
            $this->isDefining = null;
            return $this;
        }
        if ($isDefining instanceof FHIRBoolean) {
            $this->isDefining = $isDefining;
            return $this;
        }
        $this->isDefining = new FHIRBoolean($isDefining);
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
    public function getRelationship()
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
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        $this->relationship = $relationship;
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
    public function getSource()
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
    public function addSource(FHIRReference $source = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $source
     * @return static
     */
    public function setSource(array $source = [])
    {
        $this->source = [];
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * (choose any one of substance*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstanceCodeableConcept()
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
     * (choose any one of substance*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $substanceCodeableConcept
     * @return static
     */
    public function setSubstanceCodeableConcept(FHIRCodeableConcept $substanceCodeableConcept = null)
    {
        $this->substanceCodeableConcept = $substanceCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * (choose any one of substance*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubstanceReference()
    {
        return $this->substanceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to another substance, as a resource or just a representational code.
     * (choose any one of substance*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $substanceReference
     * @return static
     */
    public function setSubstanceReference(FHIRReference $substanceReference = null)
    {
        $this->substanceReference = $substanceReference;
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
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsDefining())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_DEFINING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstanceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE_REFERENCE] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship
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
                throw new \DomainException(sprintf('FHIRSubstanceSpecificationRelationship::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecificationRelationship::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSpecificationRelationship;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecificationRelationship)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecificationRelationship::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship or null, %s seen.',
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
        if (isset($children->amountQuantity)) {
            $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($children->amountQuantity));
        }
        if (isset($children->amountRange)) {
            $type->setAmountRange(FHIRRange::xmlUnserialize($children->amountRange));
        }
        if (isset($children->amountRatio)) {
            $type->setAmountRatio(FHIRRatio::xmlUnserialize($children->amountRatio));
        }
        if (isset($children->amountRatioLowLimit)) {
            $type->setAmountRatioLowLimit(FHIRRatio::xmlUnserialize($children->amountRatioLowLimit));
        }
        if (isset($children->amountString)) {
            $type->setAmountString(FHIRString::xmlUnserialize($children->amountString));
        }
        if (isset($attributes->amountString)) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->amountString);
            } else {
                $type->setAmountString((string)$attributes->amountString);
            }
        }
        if (isset($children->amountType)) {
            $type->setAmountType(FHIRCodeableConcept::xmlUnserialize($children->amountType));
        }
        if (isset($children->isDefining)) {
            $type->setIsDefining(FHIRBoolean::xmlUnserialize($children->isDefining));
        }
        if (isset($attributes->isDefining)) {
            $pt = $type->getIsDefining();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->isDefining);
            } else {
                $type->setIsDefining((string)$attributes->isDefining);
            }
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($children->relationship));
        }
        if (isset($children->source)) {
            foreach($children->source as $child) {
                $type->addSource(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->substanceCodeableConcept)) {
            $type->setSubstanceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->substanceCodeableConcept));
        }
        if (isset($children->substanceReference)) {
            $type->setSubstanceReference(FHIRReference::xmlUnserialize($children->substanceReference));
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
        if (null !== ($v = $this->getAmountQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_RATIO_LOW_LIMIT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAmountType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIsDefining())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IS_DEFINING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstanceReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAmountQuantity())) {
            $a[self::FIELD_AMOUNT_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getAmountRange())) {
            $a[self::FIELD_AMOUNT_RANGE] = $v;
        }
        if (null !== ($v = $this->getAmountRatio())) {
            $a[self::FIELD_AMOUNT_RATIO] = $v;
        }
        if (null !== ($v = $this->getAmountRatioLowLimit())) {
            $a[self::FIELD_AMOUNT_RATIO_LOW_LIMIT] = $v;
        }
        if (null !== ($v = $this->getAmountString())) {
            $a[self::FIELD_AMOUNT_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_AMOUNT_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAmountType())) {
            $a[self::FIELD_AMOUNT_TYPE] = $v;
        }
        if (null !== ($v = $this->getIsDefining())) {
            $a[self::FIELD_IS_DEFINING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IS_DEFINING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v;
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SOURCE][] = $v;
            }
        }
        if (null !== ($v = $this->getSubstanceCodeableConcept())) {
            $a[self::FIELD_SUBSTANCE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubstanceReference())) {
            $a[self::FIELD_SUBSTANCE_REFERENCE] = $v;
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