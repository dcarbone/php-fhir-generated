<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical and non-clinical artifacts such as
 * clinical decision support rules, order sets, protocols, and drug quality
 * specifications.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRPlanDefinitionTarget extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_TARGET;

    /* class_default.php:56 */
    public const FIELD_MEASURE = 'measure';
    public const FIELD_DETAIL_QUANTITY = 'detailQuantity';
    public const FIELD_DETAIL_RANGE = 'detailRange';
    public const FIELD_DETAIL_CODEABLE_CONCEPT = 'detailCodeableConcept';
    public const FIELD_DETAIL_STRING = 'detailString';
    public const FIELD_DETAIL_STRING_EXT = '_detailString';
    public const FIELD_DETAIL_BOOLEAN = 'detailBoolean';
    public const FIELD_DETAIL_BOOLEAN_EXT = '_detailBoolean';
    public const FIELD_DETAIL_INTEGER = 'detailInteger';
    public const FIELD_DETAIL_INTEGER_EXT = '_detailInteger';
    public const FIELD_DETAIL_RATIO = 'detailRatio';
    public const FIELD_DUE = 'due';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DETAIL_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $measure;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $detailQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $detailRange;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $detailCodeableConcept;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $detailString;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $detailBoolean;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $detailInteger;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
    #[FHIRRatio]
    protected FHIRRatio $detailRatio;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    #[FHIRDuration]
    protected FHIRDuration $due;

    /* constructor.php:61 */
    /**
     * FHIRPlanDefinitionTarget Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $detailQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $detailRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $detailCodeableConcept
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $detailString
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $detailBoolean
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $detailInteger
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $detailRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $due
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $measure = null,
                                null|FHIRQuantity $detailQuantity = null,
                                null|FHIRRange $detailRange = null,
                                null|FHIRCodeableConcept $detailCodeableConcept = null,
                                null|string|FHIRStringPrimitive|FHIRString $detailString = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger = null,
                                null|FHIRRatio $detailRatio = null,
                                null|FHIRDuration $due = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $measure) {
            $this->setMeasure($measure);
        }
        if (null !== $detailQuantity) {
            $this->setDetailQuantity($detailQuantity);
        }
        if (null !== $detailRange) {
            $this->setDetailRange($detailRange);
        }
        if (null !== $detailCodeableConcept) {
            $this->setDetailCodeableConcept($detailCodeableConcept);
        }
        if (null !== $detailString) {
            $this->setDetailString($detailString);
        }
        if (null !== $detailBoolean) {
            $this->setDetailBoolean($detailBoolean);
        }
        if (null !== $detailInteger) {
            $this->setDetailInteger($detailInteger);
        }
        if (null !== $detailRatio) {
            $this->setDetailRatio($detailRatio);
        }
        if (null !== $due) {
            $this->setDue($due);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMeasure(): null|FHIRCodeableConcept
    {
        return $this->measure ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measure
     * @return static
     */
    public function setMeasure(null|FHIRCodeableConcept $measure): self
    {
        if (null === $measure) {
            unset($this->measure);
            return $this;
        }
        $this->measure = $measure;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getDetailQuantity(): null|FHIRQuantity
    {
        return $this->detailQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $detailQuantity
     * @return static
     */
    public function setDetailQuantity(null|FHIRQuantity $detailQuantity): self
    {
        if (null === $detailQuantity) {
            unset($this->detailQuantity);
            return $this;
        }
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDetailRange(): null|FHIRRange
    {
        return $this->detailRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $detailRange
     * @return static
     */
    public function setDetailRange(null|FHIRRange $detailRange): self
    {
        if (null === $detailRange) {
            unset($this->detailRange);
            return $this;
        }
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->detailCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $detailCodeableConcept
     * @return static
     */
    public function setDetailCodeableConcept(null|FHIRCodeableConcept $detailCodeableConcept): self
    {
        if (null === $detailCodeableConcept) {
            unset($this->detailCodeableConcept);
            return $this;
        }
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDetailString(): null|FHIRString
    {
        return $this->detailString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $detailString
     * @return static
     */
    public function setDetailString(null|string|FHIRStringPrimitive|FHIRString $detailString): self
    {
        if (null === $detailString) {
            unset($this->detailString);
            return $this;
        }
        if (!($detailString instanceof FHIRString)) {
            $detailString = new FHIRString(value: $detailString);
        }
        $this->detailString = $detailString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getDetailBoolean(): null|FHIRBoolean
    {
        return $this->detailBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $detailBoolean
     * @return static
     */
    public function setDetailBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean): self
    {
        if (null === $detailBoolean) {
            unset($this->detailBoolean);
            return $this;
        }
        if (!($detailBoolean instanceof FHIRBoolean)) {
            $detailBoolean = new FHIRBoolean(value: $detailBoolean);
        }
        $this->detailBoolean = $detailBoolean;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getDetailInteger(): null|FHIRInteger
    {
        return $this->detailInteger ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $detailInteger
     * @return static
     */
    public function setDetailInteger(null|string|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger): self
    {
        if (null === $detailInteger) {
            unset($this->detailInteger);
            return $this;
        }
        if (!($detailInteger instanceof FHIRInteger)) {
            $detailInteger = new FHIRInteger(value: $detailInteger);
        }
        $this->detailInteger = $detailInteger;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getDetailRatio(): null|FHIRRatio
    {
        return $this->detailRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%, or in the case of pharmaceutical quality - NMT
     * 0.6%, Clear solution, etc. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any value at or below the high value. Similarly, if the high value
     * is missing, it indicates that the goal is achieved at any value at or above the
     * low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $detailRatio
     * @return static
     */
    public function setDetailRatio(null|FHIRRatio $detailRatio): self
    {
        if (null === $detailRatio) {
            unset($this->detailRatio);
            return $this;
        }
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getDue(): null|FHIRDuration
    {
        return $this->due ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $due
     * @return static
     */
    public function setDue(null|FHIRDuration $due): self
    {
        if (null === $due) {
            unset($this->due);
            return $this;
        }
        $this->due = $due;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionTarget)) {
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
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE === $cen) {
                $type->setMeasure(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_QUANTITY === $cen) {
                $type->setDetailQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_RANGE === $cen) {
                $type->setDetailRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_CODEABLE_CONCEPT === $cen) {
                $type->setDetailCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_STRING === $cen) {
                $type->setDetailString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_BOOLEAN === $cen) {
                $type->setDetailBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_INTEGER === $cen) {
                $type->setDetailInteger(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_RATIO === $cen) {
                $type->setDetailRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DUE === $cen) {
                $type->setDue(FHIRDuration::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL_STRING])) {
            if (isset($type->detailString)) {
                $type->detailString->setValue((string)$attributes[self::FIELD_DETAIL_STRING]);
            } else {
                $type->setDetailString((string)$attributes[self::FIELD_DETAIL_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAIL_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL_BOOLEAN])) {
            if (isset($type->detailBoolean)) {
                $type->detailBoolean->setValue((string)$attributes[self::FIELD_DETAIL_BOOLEAN]);
            } else {
                $type->setDetailBoolean((string)$attributes[self::FIELD_DETAIL_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAIL_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL_INTEGER])) {
            if (isset($type->detailInteger)) {
                $type->detailInteger->setValue((string)$attributes[self::FIELD_DETAIL_INTEGER]);
            } else {
                $type->setDetailInteger((string)$attributes[self::FIELD_DETAIL_INTEGER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAIL_INTEGER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->detailString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_STRING]) {
            $xw->writeAttribute(self::FIELD_DETAIL_STRING, $this->detailString->_getValueAsString());
        }
        if (isset($this->detailBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DETAIL_BOOLEAN, $this->detailBoolean->_getValueAsString());
        }
        if (isset($this->detailInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER]) {
            $xw->writeAttribute(self::FIELD_DETAIL_INTEGER, $this->detailInteger->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->measure)) {
            $xw->startElement(self::FIELD_MEASURE);
            $this->measure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detailQuantity)) {
            $xw->startElement(self::FIELD_DETAIL_QUANTITY);
            $this->detailQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detailRange)) {
            $xw->startElement(self::FIELD_DETAIL_RANGE);
            $this->detailRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detailCodeableConcept)) {
            $xw->startElement(self::FIELD_DETAIL_CODEABLE_CONCEPT);
            $this->detailCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detailString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL_STRING]
                || $this->detailString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL_STRING);
            $this->detailString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL_STRING]);
            $xw->endElement();
        }
        if (isset($this->detailBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN]
                || $this->detailBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL_BOOLEAN);
            $this->detailBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->detailInteger)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER]
                || $this->detailInteger->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL_INTEGER);
            $this->detailInteger->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER]);
            $xw->endElement();
        }
        if (isset($this->detailRatio)) {
            $xw->startElement(self::FIELD_DETAIL_RATIO);
            $this->detailRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->due)) {
            $xw->startElement(self::FIELD_DUE);
            $this->due->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPlanDefinitionTarget)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->measure) || property_exists($decoded, self::FIELD_MEASURE)) {
            if (is_array($decoded->measure)) {
                $type->setMeasure(FHIRCodeableConcept::jsonUnserialize(reset($decoded->measure), $config));
            } else {
                $type->setMeasure(FHIRCodeableConcept::jsonUnserialize($decoded->measure, $config));
            }
        }
        if (isset($decoded->detailQuantity) || property_exists($decoded, self::FIELD_DETAIL_QUANTITY)) {
            if (is_array($decoded->detailQuantity)) {
                $type->setDetailQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->detailQuantity), $config));
            } else {
                $type->setDetailQuantity(FHIRQuantity::jsonUnserialize($decoded->detailQuantity, $config));
            }
        }
        if (isset($decoded->detailRange) || property_exists($decoded, self::FIELD_DETAIL_RANGE)) {
            if (is_array($decoded->detailRange)) {
                $type->setDetailRange(FHIRRange::jsonUnserialize(reset($decoded->detailRange), $config));
            } else {
                $type->setDetailRange(FHIRRange::jsonUnserialize($decoded->detailRange, $config));
            }
        }
        if (isset($decoded->detailCodeableConcept) || property_exists($decoded, self::FIELD_DETAIL_CODEABLE_CONCEPT)) {
            if (is_array($decoded->detailCodeableConcept)) {
                $type->setDetailCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->detailCodeableConcept), $config));
            } else {
                $type->setDetailCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->detailCodeableConcept, $config));
            }
        }
        if (isset($decoded->detailString)
            || isset($decoded->_detailString)
            || property_exists($decoded, self::FIELD_DETAIL_STRING)
            || property_exists($decoded, self::FIELD_DETAIL_STRING_EXT)) {
            $v = $decoded->_detailString ?? new \stdClass();
            $v->value = $decoded->detailString ?? null;
            $type->setDetailString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->detailBoolean)
            || isset($decoded->_detailBoolean)
            || property_exists($decoded, self::FIELD_DETAIL_BOOLEAN)
            || property_exists($decoded, self::FIELD_DETAIL_BOOLEAN_EXT)) {
            $v = $decoded->_detailBoolean ?? new \stdClass();
            $v->value = $decoded->detailBoolean ?? null;
            $type->setDetailBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->detailInteger)
            || isset($decoded->_detailInteger)
            || property_exists($decoded, self::FIELD_DETAIL_INTEGER)
            || property_exists($decoded, self::FIELD_DETAIL_INTEGER_EXT)) {
            $v = $decoded->_detailInteger ?? new \stdClass();
            $v->value = $decoded->detailInteger ?? null;
            $type->setDetailInteger(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->detailRatio) || property_exists($decoded, self::FIELD_DETAIL_RATIO)) {
            if (is_array($decoded->detailRatio)) {
                $type->setDetailRatio(FHIRRatio::jsonUnserialize(reset($decoded->detailRatio), $config));
            } else {
                $type->setDetailRatio(FHIRRatio::jsonUnserialize($decoded->detailRatio, $config));
            }
        }
        if (isset($decoded->due) || property_exists($decoded, self::FIELD_DUE)) {
            if (is_array($decoded->due)) {
                $type->setDue(FHIRDuration::jsonUnserialize(reset($decoded->due), $config));
            } else {
                $type->setDue(FHIRDuration::jsonUnserialize($decoded->due, $config));
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
        if (isset($this->measure)) {
            $out->measure = $this->measure;
        }
        if (isset($this->detailQuantity)) {
            $out->detailQuantity = $this->detailQuantity;
        }
        if (isset($this->detailRange)) {
            $out->detailRange = $this->detailRange;
        }
        if (isset($this->detailCodeableConcept)) {
            $out->detailCodeableConcept = $this->detailCodeableConcept;
        }
        if (isset($this->detailString)) {
            if (null !== ($val = $this->detailString->getValue())) {
                $out->detailString = $val;
            }
            if ($this->detailString->_nonValueFieldDefined()) {
                $ext = $this->detailString->jsonSerialize();
                unset($ext->value);
                $out->_detailString = $ext;
            }
        }
        if (isset($this->detailBoolean)) {
            if (null !== ($val = $this->detailBoolean->getValue())) {
                $out->detailBoolean = $val;
            }
            if ($this->detailBoolean->_nonValueFieldDefined()) {
                $ext = $this->detailBoolean->jsonSerialize();
                unset($ext->value);
                $out->_detailBoolean = $ext;
            }
        }
        if (isset($this->detailInteger)) {
            if (null !== ($val = $this->detailInteger->getValue())) {
                $out->detailInteger = $val;
            }
            if ($this->detailInteger->_nonValueFieldDefined()) {
                $ext = $this->detailInteger->jsonSerialize();
                unset($ext->value);
                $out->_detailInteger = $ext;
            }
        }
        if (isset($this->detailRatio)) {
            $out->detailRatio = $this->detailRatio;
        }
        if (isset($this->due)) {
            $out->due = $this->due;
        }
        return $out;
    }
}