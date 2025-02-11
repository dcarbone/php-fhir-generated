<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Describes the event of a patient being given a dose of a medication. This may be
 * as simple as swallowing a tablet or it may be a long running infusion. Related
 * resources tie this event to the authorizing prescription, and the specific
 * encounter between patient and health care practitioner.
 */
class FHIRMedicationAdministrationDosage extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE;

    /* class_default.php:50 */
    public const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    public const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    public const FIELD_TIMING_PERIOD = 'timingPeriod';
    public const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    public const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    public const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    public const FIELD_SITE = 'site';
    public const FIELD_ROUTE = 'route';
    public const FIELD_METHOD = 'method';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_RATE = 'rate';
    public const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TIMING_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AS_NEEDED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $timingDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $timingPeriod;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $asNeededBoolean;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $asNeededCodeableConcept;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. E.g. "left arm".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $site;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. E.g. topical, intravenous, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $route;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication was introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was introduced into the patient.
     * Typically the rate for an infusion e.g. 200ml in 2 hours. May also expressed as
     * a rate per unit of time such as 100ml per hour - the duration is then not
     * specified, or is specified in the quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $rate;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that was administered to
     * the patient over the specified period of time. E.g. 1000mg in 24 hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $maxDosePerPeriod;

    /* constructor.php:61 */
    /**
     * FHIRMedicationAdministrationDosage Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $timingPeriod
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $asNeededBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $site
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $rate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null,
                                null|FHIRPeriod $timingPeriod = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean = null,
                                null|FHIRCodeableConcept $asNeededCodeableConcept = null,
                                null|FHIRCodeableConcept $site = null,
                                null|FHIRCodeableConcept $route = null,
                                null|FHIRCodeableConcept $method = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRRatio $rate = null,
                                null|FHIRRatio $maxDosePerPeriod = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $timingDateTime) {
            $this->setTimingDateTime($timingDateTime);
        }
        if (null !== $timingPeriod) {
            $this->setTimingPeriod($timingPeriod);
        }
        if (null !== $asNeededBoolean) {
            $this->setAsNeededBoolean($asNeededBoolean);
        }
        if (null !== $asNeededCodeableConcept) {
            $this->setAsNeededCodeableConcept($asNeededCodeableConcept);
        }
        if (null !== $site) {
            $this->setSite($site);
        }
        if (null !== $route) {
            $this->setRoute($route);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $rate) {
            $this->setRate($rate);
        }
        if (null !== $maxDosePerPeriod) {
            $this->setMaxDosePerPeriod($maxDosePerPeriod);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime(): null|FHIRDateTime
    {
        return $this->timingDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $timingDateTime
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime): self
    {
        if (null === $timingDateTime) {
            unset($this->timingDateTime);
            return $this;
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime(value: $timingDateTime);
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
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
     * The timing schedule for giving the medication to the patient. This may be a
     * single time point (using dateTime) or it may be a start and end dateTime
     * (Period).
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean(): null|FHIRBoolean
    {
        return $this->asNeededBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return static
     */
    public function setAsNeededBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean): self
    {
        if (null === $asNeededBoolean) {
            unset($this->asNeededBoolean);
            return $this;
        }
        if (!($asNeededBoolean instanceof FHIRBoolean)) {
            $asNeededBoolean = new FHIRBoolean(value: $asNeededBoolean);
        }
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->asNeededCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(null|FHIRCodeableConcept $asNeededCodeableConcept): self
    {
        if (null === $asNeededCodeableConcept) {
            unset($this->asNeededCodeableConcept);
            return $this;
        }
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. E.g. "left arm".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first entered
     * the body. E.g. "left arm".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site): self
    {
        if (null === $site) {
            unset($this->site);
            return $this;
        }
        $this->site = $site;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. E.g. topical, intravenous, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto the patient. E.g. topical, intravenous, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route): self
    {
        if (null === $route) {
            unset($this->route);
            return $this;
        }
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication was introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication was introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
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
     * The amount of the medication given at one administration event. Use this value
     * when the administration is essentially an instantaneous event such as a
     * swallowing a tablet or giving an injection.
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
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was introduced into the patient.
     * Typically the rate for an infusion e.g. 200ml in 2 hours. May also expressed as
     * a rate per unit of time such as 100ml per hour - the duration is then not
     * specified, or is specified in the quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio
     */
    public function getRate(): null|FHIRRatio
    {
        return $this->rate ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was introduced into the patient.
     * Typically the rate for an infusion e.g. 200ml in 2 hours. May also expressed as
     * a rate per unit of time such as 100ml per hour - the duration is then not
     * specified, or is specified in the quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $rate
     * @return static
     */
    public function setRate(null|FHIRRatio $rate): self
    {
        if (null === $rate) {
            unset($this->rate);
            return $this;
        }
        $this->rate = $rate;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that was administered to
     * the patient over the specified period of time. E.g. 1000mg in 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod(): null|FHIRRatio
    {
        return $this->maxDosePerPeriod ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that was administered to
     * the patient over the specified period of time. E.g. 1000mg in 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(null|FHIRRatio $maxDosePerPeriod): self
    {
        if (null === $maxDosePerPeriod) {
            unset($this->maxDosePerPeriod);
            return $this;
        }
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationAdministrationDosage)) {
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
            } else if (self::FIELD_TIMING_DATE_TIME === $cen) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING_PERIOD === $cen) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED_BOOLEAN === $cen) {
                $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED_CODEABLE_CONCEPT === $cen) {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SITE === $cen) {
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROUTE === $cen) {
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RATE === $cen) {
                $type->setRate(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_DOSE_PER_PERIOD === $cen) {
                $type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            if (isset($type->timingDateTime)) {
                $type->timingDateTime->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME]);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TIMING_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AS_NEEDED_BOOLEAN])) {
            if (isset($type->asNeededBoolean)) {
                $type->asNeededBoolean->setValue((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN]);
            } else {
                $type->setAsNeededBoolean((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AS_NEEDED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('MedicationAdministrationDosage', $this->_getSourceXMLNS());
        }
        if (isset($this->timingDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $this->timingDateTime->_getValueAsString());
        }
        if (isset($this->asNeededBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED_BOOLEAN, $this->asNeededBoolean->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->timingDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]
                || $this->timingDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $this->timingDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMING_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->timingPeriod)) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $this->timingPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asNeededBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]
                || $this->asNeededBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AS_NEEDED_BOOLEAN);
            $this->asNeededBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AS_NEEDED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->asNeededCodeableConcept)) {
            $xw->startElement(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT);
            $this->asNeededCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->site)) {
            $xw->startElement(self::FIELD_SITE);
            $this->site->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->route)) {
            $xw->startElement(self::FIELD_ROUTE);
            $this->route->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rate)) {
            $xw->startElement(self::FIELD_RATE);
            $this->rate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDosePerPeriod)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_PERIOD);
            $this->maxDosePerPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationAdministrationDosage)) {
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->timingDateTime)
            || isset($json->_timingDateTime)
            || property_exists($json, self::FIELD_TIMING_DATE_TIME)
            || property_exists($json, self::FIELD_TIMING_DATE_TIME_EXT)) {
            $v = $json->_timingDateTime ?? new \stdClass();
            $v->value = $json->timingDateTime ?? null;
            $type->setTimingDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->timingPeriod) || property_exists($json, self::FIELD_TIMING_PERIOD)) {
            if (is_array($json->timingPeriod)) {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize(reset($json->timingPeriod), $config));
            } else {
                $type->setTimingPeriod(FHIRPeriod::jsonUnserialize($json->timingPeriod, $config));
            }
        }
        if (isset($json->asNeededBoolean)
            || isset($json->_asNeededBoolean)
            || property_exists($json, self::FIELD_AS_NEEDED_BOOLEAN)
            || property_exists($json, self::FIELD_AS_NEEDED_BOOLEAN_EXT)) {
            $v = $json->_asNeededBoolean ?? new \stdClass();
            $v->value = $json->asNeededBoolean ?? null;
            $type->setAsNeededBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->asNeededCodeableConcept) || property_exists($json, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT)) {
            if (is_array($json->asNeededCodeableConcept)) {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->asNeededCodeableConcept), $config));
            } else {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->asNeededCodeableConcept, $config));
            }
        }
        if (isset($json->site) || property_exists($json, self::FIELD_SITE)) {
            if (is_array($json->site)) {
                $type->setSite(FHIRCodeableConcept::jsonUnserialize(reset($json->site), $config));
            } else {
                $type->setSite(FHIRCodeableConcept::jsonUnserialize($json->site, $config));
            }
        }
        if (isset($json->route) || property_exists($json, self::FIELD_ROUTE)) {
            if (is_array($json->route)) {
                $type->setRoute(FHIRCodeableConcept::jsonUnserialize(reset($json->route), $config));
            } else {
                $type->setRoute(FHIRCodeableConcept::jsonUnserialize($json->route, $config));
            }
        }
        if (isset($json->method) || property_exists($json, self::FIELD_METHOD)) {
            if (is_array($json->method)) {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize(reset($json->method), $config));
            } else {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize($json->method, $config));
            }
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->rate) || property_exists($json, self::FIELD_RATE)) {
            if (is_array($json->rate)) {
                $type->setRate(FHIRRatio::jsonUnserialize(reset($json->rate), $config));
            } else {
                $type->setRate(FHIRRatio::jsonUnserialize($json->rate, $config));
            }
        }
        if (isset($json->maxDosePerPeriod) || property_exists($json, self::FIELD_MAX_DOSE_PER_PERIOD)) {
            if (is_array($json->maxDosePerPeriod)) {
                $type->setMaxDosePerPeriod(FHIRRatio::jsonUnserialize(reset($json->maxDosePerPeriod), $config));
            } else {
                $type->setMaxDosePerPeriod(FHIRRatio::jsonUnserialize($json->maxDosePerPeriod, $config));
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
        if (isset($this->timingDateTime)) {
            if (null !== ($val = $this->timingDateTime->getValue())) {
                $out->timingDateTime = $val;
            }
            if ($this->timingDateTime->_nonValueFieldDefined()) {
                $ext = $this->timingDateTime->jsonSerialize();
                unset($ext->value);
                $out->_timingDateTime = $ext;
            }
        }
        if (isset($this->timingPeriod)) {
            $out->timingPeriod = $this->timingPeriod;
        }
        if (isset($this->asNeededBoolean)) {
            if (null !== ($val = $this->asNeededBoolean->getValue())) {
                $out->asNeededBoolean = $val;
            }
            if ($this->asNeededBoolean->_nonValueFieldDefined()) {
                $ext = $this->asNeededBoolean->jsonSerialize();
                unset($ext->value);
                $out->_asNeededBoolean = $ext;
            }
        }
        if (isset($this->asNeededCodeableConcept)) {
            $out->asNeededCodeableConcept = $this->asNeededCodeableConcept;
        }
        if (isset($this->site)) {
            $out->site = $this->site;
        }
        if (isset($this->route)) {
            $out->route = $this->route;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->rate)) {
            $out->rate = $this->rate;
        }
        if (isset($this->maxDosePerPeriod)) {
            $out->maxDosePerPeriod = $this->maxDosePerPeriod;
        }
        return $out;
    }
}