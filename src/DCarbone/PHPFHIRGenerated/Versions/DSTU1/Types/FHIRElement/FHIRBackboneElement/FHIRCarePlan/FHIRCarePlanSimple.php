<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient for a period of time, possibly limited to care for a
 * specific condition or set of conditions.
 */
class FHIRCarePlanSimple extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE;

    /* class_default.php:50 */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CATEGORY_EXT = '_category';
    public const FIELD_CODE = 'code';
    public const FIELD_TIMING_SCHEDULE = 'timingSchedule';
    public const FIELD_TIMING_PERIOD = 'timingPeriod';
    public const FIELD_TIMING_STRING = 'timingString';
    public const FIELD_TIMING_STRING_EXT = '_timingString';
    public const FIELD_LOCATION = 'location';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_DAILY_AMOUNT = 'dailyAmount';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_DETAILS = 'details';
    public const FIELD_DETAILS_EXT = '_details';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CATEGORY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMING_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAILS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory 
     */
    protected FHIRCarePlanActivityCategory $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule 
     */
    protected FHIRSchedule $timingSchedule;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $timingPeriod;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $timingString;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $location;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $performer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $product;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $dailyAmount;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $details;

    /* constructor.php:61 */
    /**
     * FHIRCarePlanSimple Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $timingSchedule
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $timingString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $product
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $dailyAmount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $details
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCarePlanActivityCategoryList|FHIRCarePlanActivityCategory $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRSchedule $timingSchedule = null,
                                null|FHIRPeriod $timingPeriod = null,
                                null|string|FHIRStringPrimitive|FHIRString $timingString = null,
                                null|FHIRResourceReference $location = null,
                                null|iterable $performer = null,
                                null|FHIRResourceReference $product = null,
                                null|FHIRQuantity $dailyAmount = null,
                                null|FHIRQuantity $quantity = null,
                                null|string|FHIRStringPrimitive|FHIRString $details = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $timingSchedule) {
            $this->setTimingSchedule($timingSchedule);
        }
        if (null !== $timingPeriod) {
            $this->setTimingPeriod($timingPeriod);
        }
        if (null !== $timingString) {
            $this->setTimingString($timingString);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $performer) {
            $this->setPerformer(...$performer);
        }
        if (null !== $product) {
            $this->setProduct($product);
        }
        if (null !== $dailyAmount) {
            $this->setDailyAmount($dailyAmount);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $details) {
            $this->setDetails($details);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory
     */
    public function getCategory(): null|FHIRCarePlanActivityCategory
    {
        return $this->category ?? null;
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * High-level categorization of the type of activity in a care plan.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory $category
     * @return static
     */
    public function setCategory(null|string|FHIRCarePlanActivityCategoryList|FHIRCarePlanActivityCategory $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        if (!($category instanceof FHIRCarePlanActivityCategory)) {
            $category = new FHIRCarePlanActivityCategory(value: $category);
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed description of the type of activity. E.g. What lab test, what
     * procedure, what kind of encounter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule
     */
    public function getTimingSchedule(): null|FHIRSchedule
    {
        return $this->timingSchedule ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule $timingSchedule
     * @return static
     */
    public function setTimingSchedule(null|FHIRSchedule $timingSchedule): self
    {
        if (null === $timingSchedule) {
            unset($this->timingSchedule);
            return $this;
        }
        $this->timingSchedule = $timingSchedule;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod(): null|FHIRPeriod
    {
        return $this->timingPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(null|FHIRPeriod $timingPeriod): self
    {
        if (null === $timingPeriod) {
            unset($this->timingPeriod);
            return $this;
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getTimingString(): null|FHIRString
    {
        return $this->timingString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period, timing or frequency upon which the described activity is to occur.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $timingString
     * @return static
     */
    public function setTimingString(null|string|FHIRStringPrimitive|FHIRString $timingString): self
    {
        if (null === $timingString) {
            unset($this->timingString);
            return $this;
        }
        if (!($timingString instanceof FHIRString)) {
            $timingString = new FHIRString(value: $timingString);
        }
        $this->timingString = $timingString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getLocation(): null|FHIRResourceReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the facility where the activity will occur. E.g. home, hospital,
     * specific clinic, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @return static
     */
    public function setLocation(null|FHIRResourceReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getPerformer(): array
    {
        return $this->performer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getPerformerIterator(): iterable
    {
        if (!isset($this->performer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->performer);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function addPerformer(FHIRResourceReference $performer): self
    {
        if (!isset($this->performer)) {
            $this->performer = [];
        }
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who's expected to be involved in the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$performer
     * @return static
     */
    public function setPerformer(FHIRResourceReference ...$performer): self
    {
        if ([] === $performer) {
            unset($this->performer);
            return $this;
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getProduct(): null|FHIRResourceReference
    {
        return $this->product ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the food, drug or other product being consumed or supplied in the
     * activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $product
     * @return static
     */
    public function setProduct(null|FHIRResourceReference $product): self
    {
        if (null === $product) {
            unset($this->product);
            return $this;
        }
        $this->product = $product;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getDailyAmount(): null|FHIRQuantity
    {
        return $this->dailyAmount ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be consumed in a given day.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $dailyAmount
     * @return static
     */
    public function setDailyAmount(null|FHIRQuantity $dailyAmount): self
    {
        if (null === $dailyAmount) {
            unset($this->dailyAmount);
            return $this;
        }
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the quantity expected to be supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDetails(): null|FHIRString
    {
        return $this->details ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This provides a textual description of constraints on the activity occurrence,
     * including relation to other activities. It may also include objectives,
     * pre-conditions and end-conditions. Finally, it may convey specifics about the
     * activity such as body site, method, route, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $details
     * @return static
     */
    public function setDetails(null|string|FHIRStringPrimitive|FHIRString $details): self
    {
        if (null === $details) {
            unset($this->details);
            return $this;
        }
        if (!($details instanceof FHIRString)) {
            $details = new FHIRString(value: $details);
        }
        $this->details = $details;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCarePlanSimple)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCarePlanActivityCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_SCHEDULE === $cen) {
                $type->setTimingSchedule(FHIRSchedule::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_PERIOD === $cen) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_STRING === $cen) {
                $type->setTimingString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMER === $cen) {
                $type->addPerformer(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT === $cen) {
                $type->setProduct(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAILY_AMOUNT === $cen) {
                $type->setDailyAmount(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAILS === $cen) {
                $type->setDetails(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CATEGORY])) {
            if (isset($type->category)) {
                $type->category->setValue((string)$attributes[self::FIELD_CATEGORY]);
            } else {
                $type->setCategory((string)$attributes[self::FIELD_CATEGORY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CATEGORY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMING_STRING])) {
            if (isset($type->timingString)) {
                $type->timingString->setValue((string)$attributes[self::FIELD_TIMING_STRING]);
            } else {
                $type->setTimingString((string)$attributes[self::FIELD_TIMING_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TIMING_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAILS])) {
            if (isset($type->details)) {
                $type->details->setValue((string)$attributes[self::FIELD_DETAILS]);
            } else {
                $type->setDetails((string)$attributes[self::FIELD_DETAILS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAILS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('CarePlanSimple', $this->_getSourceXMLNS());
        }
        if (isset($this->category) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_CATEGORY, $this->category->_getValueAsString());
        }
        if (isset($this->timingString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMING_STRING]) {
            $xw->writeAttribute(self::FIELD_TIMING_STRING, $this->timingString->_getValueAsString());
        }
        if (isset($this->details) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAILS]) {
            $xw->writeAttribute(self::FIELD_DETAILS, $this->details->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->category)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CATEGORY]
                || $this->category->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingSchedule)) {
            $xw->startElement(self::FIELD_TIMING_SCHEDULE);
            $this->timingSchedule->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingPeriod)) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $this->timingPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timingString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMING_STRING]
                || $this->timingString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMING_STRING);
            $this->timingString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMING_STRING]);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            foreach ($this->performer as $v) {
                $xw->startElement(self::FIELD_PERFORMER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->product)) {
            $xw->startElement(self::FIELD_PRODUCT);
            $this->product->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dailyAmount)) {
            $xw->startElement(self::FIELD_DAILY_AMOUNT);
            $this->dailyAmount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->details)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAILS]
                || $this->details->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAILS);
            $this->details->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAILS]);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCarePlanSimple)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->category)
            || isset($json->_category)
            || property_exists($json, self::FIELD_CATEGORY)
            || property_exists($json, self::FIELD_CATEGORY_EXT)) {
            $v = $json->_category ?? new \stdClass();
            $v->value = $json->category ?? null;
            $type->setCategory(FHIRCarePlanActivityCategory::jsonUnserialize($v, $config));
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
            }
        }
        if (isset($json->timingSchedule) || property_exists($json, self::FIELD_TIMING_SCHEDULE)) {
            if (is_array($json->timingSchedule)) {
                $type->setTimingSchedule(FHIRSchedule::jsonUnserialize(reset($json->timingSchedule), $config));
            } else {
                $type->setTimingSchedule(FHIRSchedule::jsonUnserialize($json->timingSchedule, $config));
            }
        }
        if (isset($json->timingPeriod) || property_exists($json, self::FIELD_TIMING_PERIOD)) {
            if (is_array($json->timingPeriod)) {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize(reset($json->timingPeriod), $config));
            } else {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize($json->timingPeriod, $config));
            }
        }
        if (isset($json->timingString)
            || isset($json->_timingString)
            || property_exists($json, self::FIELD_TIMING_STRING)
            || property_exists($json, self::FIELD_TIMING_STRING_EXT)) {
            $v = $json->_timingString ?? new \stdClass();
            $v->value = $json->timingString ?? null;
            $type->setTimingString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->location) || property_exists($json, self::FIELD_LOCATION)) {
            if (is_array($json->location)) {
                $type->setLocation(FHIRResourceReference::jsonUnserialize(reset($json->location), $config));
            } else {
                $type->setLocation(FHIRResourceReference::jsonUnserialize($json->location, $config));
            }
        }
        if (isset($json->performer) || property_exists($json, self::FIELD_PERFORMER)) {
            if (is_object($json->performer)) {
                $vals = [$json->performer];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PERFORMER, true);
            } else {
                $vals = $json->performer;
            }
            foreach($vals as $v) {
                $type->addPerformer(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->product) || property_exists($json, self::FIELD_PRODUCT)) {
            if (is_array($json->product)) {
                $type->setProduct(FHIRResourceReference::jsonUnserialize(reset($json->product), $config));
            } else {
                $type->setProduct(FHIRResourceReference::jsonUnserialize($json->product, $config));
            }
        }
        if (isset($json->dailyAmount) || property_exists($json, self::FIELD_DAILY_AMOUNT)) {
            if (is_array($json->dailyAmount)) {
                $type->setDailyAmount(FHIRQuantity::jsonUnserialize(reset($json->dailyAmount), $config));
            } else {
                $type->setDailyAmount(FHIRQuantity::jsonUnserialize($json->dailyAmount, $config));
            }
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->details)
            || isset($json->_details)
            || property_exists($json, self::FIELD_DETAILS)
            || property_exists($json, self::FIELD_DETAILS_EXT)) {
            $v = $json->_details ?? new \stdClass();
            $v->value = $json->details ?? null;
            $type->setDetails(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->category)) {
            if (null !== ($val = $this->category->getValue())) {
                $out->category = $val;
            }
            if ($this->category->_nonValueFieldDefined()) {
                $ext = $this->category->jsonSerialize();
                unset($ext->value);
                $out->_category = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->timingSchedule)) {
            $out->timingSchedule = $this->timingSchedule;
        }
        if (isset($this->timingPeriod)) {
            $out->timingPeriod = $this->timingPeriod;
        }
        if (isset($this->timingString)) {
            if (null !== ($val = $this->timingString->getValue())) {
                $out->timingString = $val;
            }
            if ($this->timingString->_nonValueFieldDefined()) {
                $ext = $this->timingString->jsonSerialize();
                unset($ext->value);
                $out->_timingString = $ext;
            }
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->performer) && [] !== $this->performer) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PERFORMER) && 1 === count($this->performer)) {
                $out->performer = $this->performer[0];
            } else {
                $out->performer = $this->performer;
            }
        }
        if (isset($this->product)) {
            $out->product = $this->product;
        }
        if (isset($this->dailyAmount)) {
            $out->dailyAmount = $this->dailyAmount;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->details)) {
            if (null !== ($val = $this->details->getValue())) {
                $out->details = $val;
            }
            if ($this->details->_nonValueFieldDefined()) {
                $ext = $this->details->jsonSerialize();
                unset($ext->value);
                $out->_details = $ext;
            }
        }
        return $out;
    }
}