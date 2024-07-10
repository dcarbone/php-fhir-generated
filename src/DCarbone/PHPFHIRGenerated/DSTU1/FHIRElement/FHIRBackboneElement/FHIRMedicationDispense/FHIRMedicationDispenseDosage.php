<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * Dispensing a medication to a named patient. This includes a description of the
 * supply provided and the instructions for administering the medication.
 *
 * Class FHIRMedicationDispenseDosage
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense
 */
class FHIRMedicationDispenseDosage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE;

    const FIELD_ADDITIONAL_INSTRUCTIONS = 'additionalInstructions';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_SCHEDULE = 'timingSchedule';
    const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    const FIELD_SITE = 'site';
    const FIELD_ROUTE = 'route';
    const FIELD_METHOD = 'method';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_RATE = 'rate';
    const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $additionalInstructions = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $timingDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $timingPeriod = null;
    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    protected null|FHIRSchedule $timingSchedule = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true or if specified as a CodeableConcept, indicates that the
     * medication is only taken when needed within the specified schedule rather than
     * at every scheduled dose. If a CodeableConcept is present, it indicates the
     * pre-condition for taking the Medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $asNeededBoolean = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $asNeededCodeableConcept = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $site = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a subject.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $route = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $method = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $quantity = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the substance is introduced into the subject.
     * Typically the rate for an infusion. 200ml in 2 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $rate = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $maxDosePerPeriod = null;

    /**
     * Validation map for fields in type MedicationDispense.Dosage
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRMedicationDispenseDosage Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ADDITIONAL_INSTRUCTIONS, $data)) {
            if ($data[self::FIELD_ADDITIONAL_INSTRUCTIONS] instanceof FHIRCodeableConcept) {
                $this->setAdditionalInstructions($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]);
            } else {
                $this->setAdditionalInstructions(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_DATE_TIME, $data) || array_key_exists(self::FIELD_TIMING_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_TIMING_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])) ? $data[self::FIELD_TIMING_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTimingDateTime(new FHIRDateTime($ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_PERIOD, $data)) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_TIMING_SCHEDULE, $data)) {
            if ($data[self::FIELD_TIMING_SCHEDULE] instanceof FHIRSchedule) {
                $this->setTimingSchedule($data[self::FIELD_TIMING_SCHEDULE]);
            } else {
                $this->setTimingSchedule(new FHIRSchedule($data[self::FIELD_TIMING_SCHEDULE]));
            }
        }
        if (array_key_exists(self::FIELD_AS_NEEDED_BOOLEAN, $data) || array_key_exists(self::FIELD_AS_NEEDED_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_AS_NEEDED_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) && is_array($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])) ? $data[self::FIELD_AS_NEEDED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAsNeededBoolean($value);
                } else if (is_array($value)) {
                    $this->setAsNeededBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAsNeededBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAsNeededBoolean(new FHIRBoolean($ext));
            } else {
                $this->setAsNeededBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAsNeededCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]);
            } else {
                $this->setAsNeededCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_SITE, $data)) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (array_key_exists(self::FIELD_ROUTE, $data)) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (array_key_exists(self::FIELD_METHOD, $data)) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (array_key_exists(self::FIELD_QUANTITY, $data)) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_RATE, $data)) {
            if ($data[self::FIELD_RATE] instanceof FHIRRatio) {
                $this->setRate($data[self::FIELD_RATE]);
            } else {
                $this->setRate(new FHIRRatio($data[self::FIELD_RATE]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_DOSE_PER_PERIOD, $data)) {
            if ($data[self::FIELD_MAX_DOSE_PER_PERIOD] instanceof FHIRRatio) {
                $this->setMaxDosePerPeriod($data[self::FIELD_MAX_DOSE_PER_PERIOD]);
            } else {
                $this->setMaxDosePerPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_PERIOD]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalInstructions(): null|FHIRCodeableConcept
    {
        return $this->additionalInstructions;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $additionalInstructions
     * @return static
     */
    public function setAdditionalInstructions(null|FHIRCodeableConcept $additionalInstructions = null): self
    {
        if (null === $additionalInstructions) {
            $additionalInstructions = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->additionalInstructions, $additionalInstructions);
        $this->additionalInstructions = $additionalInstructions;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime(): null|FHIRDateTime
    {
        return $this->timingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $timingDateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $timingDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $timingDateTime && !($timingDateTime instanceof FHIRDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        $this->_trackValueSet($this->timingDateTime, $timingDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME][0] = $xmlLocation;
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod(): null|FHIRPeriod
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
     */
    public function setTimingPeriod(null|FHIRPeriod $timingPeriod = null): self
    {
        if (null === $timingPeriod) {
            $timingPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->timingPeriod, $timingPeriod);
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule
     */
    public function getTimingSchedule(): null|FHIRSchedule
    {
        return $this->timingSchedule;
    }

    /**
     * Specifies an event that may occur multiple times. Schedules are used for to
     * reord when things are expected or requested to occur.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions, for example. "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule $timingSchedule
     * @return static
     */
    public function setTimingSchedule(null|FHIRSchedule $timingSchedule = null): self
    {
        if (null === $timingSchedule) {
            $timingSchedule = new FHIRSchedule();
        }
        $this->_trackValueSet($this->timingSchedule, $timingSchedule);
        $this->timingSchedule = $timingSchedule;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean(): null|FHIRBoolean
    {
        return $this->asNeededBoolean;
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $asNeededBoolean
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAsNeededBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $asNeededBoolean && !($asNeededBoolean instanceof FHIRBoolean)) {
            $asNeededBoolean = new FHIRBoolean($asNeededBoolean);
        }
        $this->_trackValueSet($this->asNeededBoolean, $asNeededBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_AS_NEEDED_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_AS_NEEDED_BOOLEAN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->asNeededCodeableConcept;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(null|FHIRCodeableConcept $asNeededCodeableConcept = null): self
    {
        if (null === $asNeededCodeableConcept) {
            $asNeededCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->asNeededCodeableConcept, $asNeededCodeableConcept);
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site = null): self
    {
        if (null === $site) {
            $site = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->site, $site);
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
     * therapeutic agent into or onto a subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route = null): self
    {
        if (null === $route) {
            $route = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->route, $route);
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. Examples: Slow Push; Deep
     * IV. Terminologies used often pre-coordinate this term with the route and or form
     * of administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method = null): self
    {
        if (null === $method) {
            $method = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->method, $method);
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
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity = null): self
    {
        if (null === $quantity) {
            $quantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the substance is introduced into the subject.
     * Typically the rate for an infusion. 200ml in 2 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getRate(): null|FHIRRatio
    {
        return $this->rate;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the substance is introduced into the subject.
     * Typically the rate for an infusion. 200ml in 2 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $rate
     * @return static
     */
    public function setRate(null|FHIRRatio $rate = null): self
    {
        if (null === $rate) {
            $rate = new FHIRRatio();
        }
        $this->_trackValueSet($this->rate, $rate);
        $this->rate = $rate;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod(): null|FHIRRatio
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(null|FHIRRatio $maxDosePerPeriod = null): self
    {
        if (null === $maxDosePerPeriod) {
            $maxDosePerPeriod = new FHIRRatio();
        }
        $this->_trackValueSet($this->maxDosePerPeriod, $maxDosePerPeriod);
        $this->maxDosePerPeriod = $maxDosePerPeriod;
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
        if (null !== ($v = $this->getAdditionalInstructions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_SCHEDULE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
            $v = $this->getAdditionalInstructions();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_ADDITIONAL_INSTRUCTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_DATE_TIME])) {
            $v = $this->getTimingDateTime();
            foreach($validationRules[self::FIELD_TIMING_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_TIMING_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DATE_TIME])) {
                        $errs[self::FIELD_TIMING_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_TIMING_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
            $v = $this->getTimingPeriod();
            foreach($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
                        $errs[self::FIELD_TIMING_PERIOD] = [];
                    }
                    $errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_SCHEDULE])) {
            $v = $this->getTimingSchedule();
            foreach($validationRules[self::FIELD_TIMING_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_TIMING_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_SCHEDULE])) {
                        $errs[self::FIELD_TIMING_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_TIMING_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $v = $this->getAsNeededBoolean();
            foreach($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_AS_NEEDED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_BOOLEAN])) {
                        $errs[self::FIELD_AS_NEEDED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            $v = $this->getAsNeededCodeableConcept();
            foreach($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE])) {
            $v = $this->getRate();
            foreach($validationRules[self::FIELD_RATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_RATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE])) {
                        $errs[self::FIELD_RATE] = [];
                    }
                    $errs[self::FIELD_RATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            $v = $this->getMaxDosePerPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE, self::FIELD_MAX_DOSE_PER_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_PERIOD][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage
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
        } else if (!($type instanceof FHIRMedicationDispenseDosage)) {
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
            if (self::FIELD_ADDITIONAL_INSTRUCTIONS === $childName) {
                $type->setAdditionalInstructions(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_DATE_TIME === $childName) {
                $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TIMING_PERIOD === $childName) {
                $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIMING_SCHEDULE === $childName) {
                $type->setTimingSchedule(FHIRSchedule::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AS_NEEDED_BOOLEAN === $childName) {
                $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AS_NEEDED_CODEABLE_CONCEPT === $childName) {
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SITE === $childName) {
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROUTE === $childName) {
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_METHOD === $childName) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUANTITY === $childName) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RATE === $childName) {
                $type->setRate(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_DOSE_PER_PERIOD === $childName) {
                $type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TIMING_DATE_TIME])) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTimingDateTime((string)$attributes[self::FIELD_TIMING_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $pt = $type->getAsNeededBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAsNeededBoolean((string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MedicationDispenseDosage', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->writeAttribute(self::FIELD_TIMING_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AS_NEEDED_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAsNeededBoolean())) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getAdditionalInstructions())) {
            $xw->startElement(self::FIELD_ADDITIONAL_INSTRUCTIONS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TIMING_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTimingDateTime())) {
            $xw->startElement(self::FIELD_TIMING_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $xw->startElement(self::FIELD_TIMING_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            $xw->startElement(self::FIELD_TIMING_SCHEDULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AS_NEEDED_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAsNeededBoolean())) {
            $xw->startElement(self::FIELD_AS_NEEDED_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $xw->startElement(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSite())) {
            $xw->startElement(self::FIELD_SITE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRoute())) {
            $xw->startElement(self::FIELD_ROUTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMethod())) {
            $xw->startElement(self::FIELD_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getQuantity())) {
            $xw->startElement(self::FIELD_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRate())) {
            $xw->startElement(self::FIELD_RATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_PERIOD);
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
        if (null !== ($v = $this->getAdditionalInstructions())) {
            $out->{self::FIELD_ADDITIONAL_INSTRUCTIONS} = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIMING_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIMING_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $out->{self::FIELD_TIMING_PERIOD} = $v;
        }
        if (null !== ($v = $this->getTimingSchedule())) {
            $out->{self::FIELD_TIMING_SCHEDULE} = $v;
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AS_NEEDED_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AS_NEEDED_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $out->{self::FIELD_AS_NEEDED_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $out->{self::FIELD_SITE} = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $out->{self::FIELD_ROUTE} = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $out->{self::FIELD_METHOD} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $out->{self::FIELD_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getRate())) {
            $out->{self::FIELD_RATE} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $out->{self::FIELD_MAX_DOSE_PER_PERIOD} = $v;
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