<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Describes the intended objective(s) for a patient, group or organization care,
 * for example, weight loss, restoring an activity of daily living, obtaining herd
 * immunity via immunization, meeting a process improvement objective, etc.
 */
class FHIRGoalTarget extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_GOAL_DOT_TARGET;

    /* class_default.php:47 */
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
    public const FIELD_DUE_DATE = 'dueDate';
    public const FIELD_DUE_DATE_EXT = '_dueDate';
    public const FIELD_DUE_DURATION = 'dueDuration';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_DETAIL_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_INTEGER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DUE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $measure;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $detailQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $detailRange;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $detailCodeableConcept;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $detailString;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $detailBoolean;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $detailInteger;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $detailRatio;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $dueDate;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $dueDuration;

    /* constructor.php:63 */
    /**
     * FHIRGoalTarget Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $measure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $detailQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $detailRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $detailString
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $detailBoolean
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $detailInteger
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $detailRatio
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $dueDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $dueDuration
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $measure = null,
                                null|FHIRDecimal|FHIRQuantity $detailQuantity = null,
                                null|FHIRRange $detailRange = null,
                                null|FHIRCodeableConcept $detailCodeableConcept = null,
                                null|string|FHIRStringPrimitive|FHIRString $detailString = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger = null,
                                null|FHIRRatio $detailRatio = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dueDate = null,
                                null|FHIRDecimal|FHIRDuration $dueDuration = null,
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
        if (null !== $dueDate) {
            $this->setDueDate($dueDate);
        }
        if (null !== $dueDuration) {
            $this->setDueDuration($dueDuration);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $measure
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $detailQuantity
     * @return static
     */
    public function setDetailQuantity(null|FHIRDecimal|FHIRQuantity $detailQuantity): self
    {
        if (null === $detailQuantity) {
            unset($this->detailQuantity);
            return $this;
        }
        if (!($detailQuantity instanceof FHIRQuantity)) {
            $detailQuantity = new FHIRQuantity(value: $detailQuantity);
        }
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $detailRange
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDetailString(): null|FHIRString
    {
        return $this->detailString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $detailString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetailString(null|string|FHIRStringPrimitive|FHIRString $detailString,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $detailString) {
            unset($this->detailString);
            return $this;
        }
        if (!($detailString instanceof FHIRString)) {
            $detailString = new FHIRString(value: $detailString);
        }
        $this->detailString = $detailString;
        if ($this->_valueXMLLocations[self::FIELD_DETAIL_STRING] !== $valueXMLLocation) {
            $this->_setDetailStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the detailString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDetailStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DETAIL_STRING];
    }

    /**
     * Set the location the "value" field of the detailString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDetailStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DETAIL_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getDetailBoolean(): null|FHIRBoolean
    {
        return $this->detailBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $detailBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetailBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $detailBoolean,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $detailBoolean) {
            unset($this->detailBoolean);
            return $this;
        }
        if (!($detailBoolean instanceof FHIRBoolean)) {
            $detailBoolean = new FHIRBoolean(value: $detailBoolean);
        }
        $this->detailBoolean = $detailBoolean;
        if ($this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN] !== $valueXMLLocation) {
            $this->_setDetailBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the detailBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDetailBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the detailBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDetailBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $detailInteger
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetailInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $detailInteger,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $detailInteger) {
            unset($this->detailInteger);
            return $this;
        }
        if (!($detailInteger instanceof FHIRInteger)) {
            $detailInteger = new FHIRInteger(value: $detailInteger);
        }
        $this->detailInteger = $detailInteger;
        if ($this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER] !== $valueXMLLocation) {
            $this->_setDetailIntegerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the detailInteger element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDetailIntegerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER];
    }

    /**
     * Set the location the "value" field of the detailInteger element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDetailIntegerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio
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
     * The target value of the focus to be achieved to signify the fulfillment of the
     * goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range
     * can be specified. When a low value is missing, it indicates that the goal is
     * achieved at any focus value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any focus value at
     * or above the low value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $detailRatio
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
     */
    public function getDueDate(): null|FHIRDate
    {
        return $this->dueDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $dueDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dueDate,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dueDate) {
            unset($this->dueDate);
            return $this;
        }
        if (!($dueDate instanceof FHIRDate)) {
            $dueDate = new FHIRDate(value: $dueDate);
        }
        $this->dueDate = $dueDate;
        if ($this->_valueXMLLocations[self::FIELD_DUE_DATE] !== $valueXMLLocation) {
            $this->_setDueDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dueDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDueDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DUE_DATE];
    }

    /**
     * Set the location the "value" field of the dueDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDueDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DUE_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDueDuration(): null|FHIRDuration
    {
        return $this->dueDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates either the date or the duration after start by which the goal should
     * be met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $dueDuration
     * @return static
     */
    public function setDueDuration(null|FHIRDecimal|FHIRDuration $dueDuration): self
    {
        if (null === $dueDuration) {
            unset($this->dueDuration);
            return $this;
        }
        if (!($dueDuration instanceof FHIRDuration)) {
            $dueDuration = new FHIRDuration(value: $dueDuration);
        }
        $this->dueDuration = $dueDuration;
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
        if (isset($validationRules[self::FIELD_MEASURE])) {
            $v = $this->getMeasure();
            foreach($validationRules[self::FIELD_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE])) {
                        $errs[self::FIELD_MEASURE] = [];
                    }
                    $errs[self::FIELD_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_QUANTITY])) {
            $v = $this->getDetailQuantity();
            foreach($validationRules[self::FIELD_DETAIL_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_QUANTITY])) {
                        $errs[self::FIELD_DETAIL_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DETAIL_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RANGE])) {
            $v = $this->getDetailRange();
            foreach($validationRules[self::FIELD_DETAIL_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RANGE])) {
                        $errs[self::FIELD_DETAIL_RANGE] = [];
                    }
                    $errs[self::FIELD_DETAIL_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            $v = $this->getDetailCodeableConcept();
            foreach($validationRules[self::FIELD_DETAIL_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DETAIL_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_STRING])) {
            $v = $this->getDetailString();
            foreach($validationRules[self::FIELD_DETAIL_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_STRING])) {
                        $errs[self::FIELD_DETAIL_STRING] = [];
                    }
                    $errs[self::FIELD_DETAIL_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_BOOLEAN])) {
            $v = $this->getDetailBoolean();
            foreach($validationRules[self::FIELD_DETAIL_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_BOOLEAN])) {
                        $errs[self::FIELD_DETAIL_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DETAIL_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_INTEGER])) {
            $v = $this->getDetailInteger();
            foreach($validationRules[self::FIELD_DETAIL_INTEGER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_INTEGER])) {
                        $errs[self::FIELD_DETAIL_INTEGER] = [];
                    }
                    $errs[self::FIELD_DETAIL_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_RATIO])) {
            $v = $this->getDetailRatio();
            foreach($validationRules[self::FIELD_DETAIL_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_RATIO])) {
                        $errs[self::FIELD_DETAIL_RATIO] = [];
                    }
                    $errs[self::FIELD_DETAIL_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DATE])) {
            $v = $this->getDueDate();
            foreach($validationRules[self::FIELD_DUE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DATE])) {
                        $errs[self::FIELD_DUE_DATE] = [];
                    }
                    $errs[self::FIELD_DUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DUE_DURATION])) {
            $v = $this->getDueDuration();
            foreach($validationRules[self::FIELD_DUE_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DUE_DURATION])) {
                        $errs[self::FIELD_DUE_DURATION] = [];
                    }
                    $errs[self::FIELD_DUE_DURATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGoalTarget)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            } else if (self::FIELD_DUE_DATE === $cen) {
                $type->setDueDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DUE_DURATION === $cen) {
                $type->setDueDuration(FHIRDuration::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL_STRING])) {
            if (isset($type->detailString)) {
                $type->detailString->setValue((string)$attributes[self::FIELD_DETAIL_STRING]);
                $type->_setDetailStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDetailString((string)$attributes[self::FIELD_DETAIL_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_BOOLEAN])) {
            if (isset($type->detailBoolean)) {
                $type->detailBoolean->setValue((string)$attributes[self::FIELD_DETAIL_BOOLEAN]);
                $type->_setDetailBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDetailBoolean((string)$attributes[self::FIELD_DETAIL_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_INTEGER])) {
            if (isset($type->detailInteger)) {
                $type->detailInteger->setValue((string)$attributes[self::FIELD_DETAIL_INTEGER]);
                $type->_setDetailIntegerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDetailInteger((string)$attributes[self::FIELD_DETAIL_INTEGER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DUE_DATE])) {
            if (isset($type->dueDate)) {
                $type->dueDate->setValue((string)$attributes[self::FIELD_DUE_DATE]);
                $type->_setDueDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDueDate((string)$attributes[self::FIELD_DUE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->detailString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_STRING]) {
            $xw->writeAttribute(self::FIELD_DETAIL_STRING, $this->detailString->_getFormattedValue());
        }
        if (isset($this->detailBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DETAIL_BOOLEAN, $this->detailBoolean->_getFormattedValue());
        }
        if (isset($this->detailInteger) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_INTEGER]) {
            $xw->writeAttribute(self::FIELD_DETAIL_INTEGER, $this->detailInteger->_getFormattedValue());
        }
        if (isset($this->dueDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DUE_DATE]) {
            $xw->writeAttribute(self::FIELD_DUE_DATE, $this->dueDate->_getFormattedValue());
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
        if (isset($this->dueDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DUE_DATE]
                || $this->dueDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DUE_DATE);
            $this->dueDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DUE_DATE]);
            $xw->endElement();
        }
        if (isset($this->dueDuration)) {
            $xw->startElement(self::FIELD_DUE_DURATION);
            $this->dueDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGoalTarget)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_MEASURE]) || array_key_exists(self::FIELD_MEASURE, $json)) {
            $type->setMeasure(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_MEASURE], $config));
        }
        if (isset($json[self::FIELD_DETAIL_QUANTITY]) || array_key_exists(self::FIELD_DETAIL_QUANTITY, $json)) {
            $type->setDetailQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_DETAIL_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_DETAIL_RANGE]) || array_key_exists(self::FIELD_DETAIL_RANGE, $json)) {
            $type->setDetailRange(FHIRRange::jsonUnserialize($json[self::FIELD_DETAIL_RANGE], $config));
        }
        if (isset($json[self::FIELD_DETAIL_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DETAIL_CODEABLE_CONCEPT, $json)) {
            $type->setDetailCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_DETAIL_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_DETAIL_STRING])
            || isset($json[self::FIELD_DETAIL_STRING_EXT])
            || array_key_exists(self::FIELD_DETAIL_STRING, $json)
            || array_key_exists(self::FIELD_DETAIL_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL_STRING] ?? null;
            $type->setDetailString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DETAIL_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DETAIL_BOOLEAN])
            || isset($json[self::FIELD_DETAIL_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_DETAIL_BOOLEAN, $json)
            || array_key_exists(self::FIELD_DETAIL_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL_BOOLEAN] ?? null;
            $type->setDetailBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_DETAIL_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DETAIL_INTEGER])
            || isset($json[self::FIELD_DETAIL_INTEGER_EXT])
            || array_key_exists(self::FIELD_DETAIL_INTEGER, $json)
            || array_key_exists(self::FIELD_DETAIL_INTEGER_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL_INTEGER] ?? null;
            $type->setDetailInteger(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_DETAIL_INTEGER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DETAIL_RATIO]) || array_key_exists(self::FIELD_DETAIL_RATIO, $json)) {
            $type->setDetailRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_DETAIL_RATIO], $config));
        }
        if (isset($json[self::FIELD_DUE_DATE])
            || isset($json[self::FIELD_DUE_DATE_EXT])
            || array_key_exists(self::FIELD_DUE_DATE, $json)
            || array_key_exists(self::FIELD_DUE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DUE_DATE] ?? null;
            $type->setDueDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_DUE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DUE_DURATION]) || array_key_exists(self::FIELD_DUE_DURATION, $json)) {
            $type->setDueDuration(FHIRDuration::jsonUnserialize($json[self::FIELD_DUE_DURATION], $config));
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
        if (isset($this->dueDate)) {
            if (null !== ($val = $this->dueDate->getValue())) {
                $out->dueDate = $val;
            }
            if ($this->dueDate->_nonValueFieldDefined()) {
                $ext = $this->dueDate->jsonSerialize();
                unset($ext->value);
                $out->_dueDate = $ext;
            }
        }
        if (isset($this->dueDuration)) {
            $out->dueDuration = $this->dueDuration;
        }
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}