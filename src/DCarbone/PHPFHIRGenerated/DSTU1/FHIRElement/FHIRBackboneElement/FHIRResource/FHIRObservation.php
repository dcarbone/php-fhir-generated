<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Measurements and simple assertions made about a patient, device or other
 * subject.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRObservation
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRObservation extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION;
    const FIELD_APPLIES_DATE_TIME = 'appliesDateTime';
    const FIELD_APPLIES_DATE_TIME_EXT = '_appliesDateTime';
    const FIELD_APPLIES_PERIOD = 'appliesPeriod';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_COMMENTS = 'comments';
    const FIELD_COMMENTS_EXT = '_comments';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INTERPRETATION = 'interpretation';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_METHOD = 'method';
    const FIELD_NAME = 'name';
    const FIELD_PERFORMER = 'performer';
    const FIELD_REFERENCE_RANGE = 'referenceRange';
    const FIELD_RELATED = 'related';
    const FIELD_RELIABILITY = 'reliability';
    const FIELD_RELIABILITY_EXT = '_reliability';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    const FIELD_VALUE_PERIOD = 'valuePeriod';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RATIO = 'valueRatio';
    const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
    const FIELD_VALUE_STRING = 'valueString';
    const FIELD_VALUE_STRING_EXT = '_valueString';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $appliesDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $appliesPeriod = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where on the subject's body the observation was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $bodySite = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * May include statements about significant, unexpected or unreliable values, or
     * information about the source of the value where this may be relevant to the
     * interpretation of the result.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $comments = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for the simple observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $interpretation = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time this was made available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $issued = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to perform the observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $method = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who was responsible for asserting the observed value as "true".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $performer = [];

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    protected $referenceRange = [];

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Related observations - either components, or previous observations, or
     * statements of derivation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated[]
     */
    protected $related = [];

    /**
     * Codes that provide an estimate of the degree to which quality issues have
     * impacted on the value of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An estimate of the degree to which quality issues have impacted on the value
     * reported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability
     */
    protected $reliability = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen that was used when this observation was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $specimen = null;

    /**
     * Codes providing the status of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the result value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The thing the observation is being made about.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    protected $valueAttachment = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $valueCodeableConcept = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $valuePeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    protected $valueQuantity = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    protected $valueRatio = null;

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    protected $valueSampledData = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $valueString = null;

    /**
     * Validation map for fields in type Observation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRObservation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPLIES_DATE_TIME]) || isset($data[self::FIELD_APPLIES_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_APPLIES_DATE_TIME])) {
                $value = $data[self::FIELD_APPLIES_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_APPLIES_DATE_TIME_EXT]) && is_array($data[self::FIELD_APPLIES_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_APPLIES_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAppliesDateTime($value);
                } else if (is_array($value)) {
                    $this->setAppliesDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAppliesDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAppliesDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_APPLIES_PERIOD])) {
            if ($data[self::FIELD_APPLIES_PERIOD] instanceof FHIRPeriod) {
                $this->setAppliesPeriod($data[self::FIELD_APPLIES_PERIOD]);
            } else {
                $this->setAppliesPeriod(new FHIRPeriod($data[self::FIELD_APPLIES_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_COMMENTS]) || isset($data[self::FIELD_COMMENTS_EXT])) {
            if (isset($data[self::FIELD_COMMENTS])) {
                $value = $data[self::FIELD_COMMENTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT])) {
                $ext = $data[self::FIELD_COMMENTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComments($value);
                } else if (is_array($value)) {
                    $this->setComments(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComments(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INTERPRETATION])) {
            if ($data[self::FIELD_INTERPRETATION] instanceof FHIRCodeableConcept) {
                $this->setInterpretation($data[self::FIELD_INTERPRETATION]);
            } else {
                $this->setInterpretation(new FHIRCodeableConcept($data[self::FIELD_INTERPRETATION]));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            if (isset($data[self::FIELD_ISSUED])) {
                $value = $data[self::FIELD_ISSUED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) {
                $ext = $data[self::FIELD_ISSUED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssued(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRResourceReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRResourceReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_RANGE])) {
            if (is_array($data[self::FIELD_REFERENCE_RANGE])) {
                foreach($data[self::FIELD_REFERENCE_RANGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRObservationReferenceRange) {
                        $this->addReferenceRange($v);
                    } else {
                        $this->addReferenceRange(new FHIRObservationReferenceRange($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCE_RANGE] instanceof FHIRObservationReferenceRange) {
                $this->addReferenceRange($data[self::FIELD_REFERENCE_RANGE]);
            } else {
                $this->addReferenceRange(new FHIRObservationReferenceRange($data[self::FIELD_REFERENCE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RELATED])) {
            if (is_array($data[self::FIELD_RELATED])) {
                foreach($data[self::FIELD_RELATED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRObservationRelated) {
                        $this->addRelated($v);
                    } else {
                        $this->addRelated(new FHIRObservationRelated($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED] instanceof FHIRObservationRelated) {
                $this->addRelated($data[self::FIELD_RELATED]);
            } else {
                $this->addRelated(new FHIRObservationRelated($data[self::FIELD_RELATED]));
            }
        }
        if (isset($data[self::FIELD_RELIABILITY]) || isset($data[self::FIELD_RELIABILITY_EXT])) {
            if (isset($data[self::FIELD_RELIABILITY])) {
                $value = $data[self::FIELD_RELIABILITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RELIABILITY_EXT]) && is_array($data[self::FIELD_RELIABILITY_EXT])) {
                $ext = $data[self::FIELD_RELIABILITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRObservationReliability) {
                    $this->setReliability($value);
                } else if (is_array($value)) {
                    $this->setReliability(new FHIRObservationReliability(array_merge($ext, $value)));
                } else {
                    $this->setReliability(new FHIRObservationReliability([FHIRObservationReliability::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReliability(new FHIRObservationReliability($ext));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRResourceReference) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRResourceReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRObservationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRObservationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRObservationStatus([FHIRObservationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRObservationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
            if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_VALUE_PERIOD])) {
            if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
            } else {
                $this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RATIO])) {
            if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
            } else {
                $this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
            if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
            } else {
                $this->setValueSampledData(new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]));
            }
        }
        if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
            if (isset($data[self::FIELD_VALUE_STRING])) {
                $value = $data[self::FIELD_VALUE_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALUE_STRING_EXT]) && is_array($data[self::FIELD_VALUE_STRING_EXT])) {
                $ext = $data[self::FIELD_VALUE_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setValueString($value);
                } else if (is_array($value)) {
                    $this->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValueString(new FHIRString($ext));
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
        return "<Observation{$xmlns}></Observation>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getAppliesDateTime()
    {
        return $this->appliesDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $appliesDateTime
     * @return static
     */
    public function setAppliesDateTime($appliesDateTime = null)
    {
        if (null === $appliesDateTime) {
            $this->appliesDateTime = null;
            return $this;
        }
        if ($appliesDateTime instanceof FHIRDateTime) {
            $this->appliesDateTime = $appliesDateTime;
            return $this;
        }
        $this->appliesDateTime = new FHIRDateTime($appliesDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getAppliesPeriod()
    {
        return $this->appliesPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed value is asserted as being true. For
     * biological subjects - e.g. human patients - this is usually called the
     * "physiologically relevant time". This is usually either the time of the
     * procedure or of specimen collection, but very often the source of the date/time
     * is not known, only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $appliesPeriod
     * @return static
     */
    public function setAppliesPeriod(FHIRPeriod $appliesPeriod = null)
    {
        $this->appliesPeriod = $appliesPeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where on the subject's body the observation was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where on the subject's body the observation was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * May include statements about significant, unexpected or unreliable values, or
     * information about the source of the value where this may be relevant to the
     * interpretation of the result.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * May include statements about significant, unexpected or unreliable values, or
     * information about the source of the value where this may be relevant to the
     * interpretation of the result.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $comments
     * @return static
     */
    public function setComments($comments = null)
    {
        if (null === $comments) {
            $this->comments = null;
            return $this;
        }
        if ($comments instanceof FHIRString) {
            $this->comments = $comments;
            return $this;
        }
        $this->comments = new FHIRString($comments);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for the simple observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier for the simple observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The assessment made based on the result of the observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $interpretation
     * @return static
     */
    public function setInterpretation(FHIRCodeableConcept $interpretation = null)
    {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time this was made available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/Time this was made available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $issued
     * @return static
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRInstant) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRInstant($issued);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to perform the observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the mechanism used to perform the observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $name
     * @return static
     */
    public function setName(FHIRCodeableConcept $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who was responsible for asserting the observed value as "true".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who was responsible for asserting the observed value as "true".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function addPerformer(FHIRResourceReference $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who was responsible for asserting the observed value as "true".
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $performer
     * @return static
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return static
     */
    public function addReferenceRange(FHIRObservationReferenceRange $referenceRange = null)
    {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended
     * range.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange[] $referenceRange
     * @return static
     */
    public function setReferenceRange(array $referenceRange = [])
    {
        $this->referenceRange = [];
        if ([] === $referenceRange) {
            return $this;
        }
        foreach($referenceRange as $v) {
            if ($v instanceof FHIRObservationReferenceRange) {
                $this->addReferenceRange($v);
            } else {
                $this->addReferenceRange(new FHIRObservationReferenceRange($v));
            }
        }
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Related observations - either components, or previous observations, or
     * statements of derivation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Related observations - either components, or previous observations, or
     * statements of derivation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated $related
     * @return static
     */
    public function addRelated(FHIRObservationRelated $related = null)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     *
     * Related observations - either components, or previous observations, or
     * statements of derivation.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated[] $related
     * @return static
     */
    public function setRelated(array $related = [])
    {
        $this->related = [];
        if ([] === $related) {
            return $this;
        }
        foreach($related as $v) {
            if ($v instanceof FHIRObservationRelated) {
                $this->addRelated($v);
            } else {
                $this->addRelated(new FHIRObservationRelated($v));
            }
        }
        return $this;
    }

    /**
     * Codes that provide an estimate of the degree to which quality issues have
     * impacted on the value of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An estimate of the degree to which quality issues have impacted on the value
     * reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability
     */
    public function getReliability()
    {
        return $this->reliability;
    }

    /**
     * Codes that provide an estimate of the degree to which quality issues have
     * impacted on the value of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An estimate of the degree to which quality issues have impacted on the value
     * reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability $reliability
     * @return static
     */
    public function setReliability(FHIRObservationReliability $reliability = null)
    {
        $this->reliability = $reliability;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen that was used when this observation was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen that was used when this observation was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $specimen
     * @return static
     */
    public function setSpecimen(FHIRResourceReference $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Codes providing the status of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the result value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes providing the status of an observation
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the result value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus $status
     * @return static
     */
    public function setStatus(FHIRObservationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The thing the observation is being made about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The thing the observation is being made about.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $valuePeriod
     * @return static
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio $valueRatio
     * @return static
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData $valueSampledData
     * @return static
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The information determined as a result of making the observation, if the
     * information has a simple value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $valueString
     * @return static
     */
    public function setValueString($valueString = null)
    {
        if (null === $valueString) {
            $this->valueString = null;
            return $this;
        }
        if ($valueString instanceof FHIRString) {
            $this->valueString = $valueString;
            return $this;
        }
        $this->valueString = new FHIRString($valueString);
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
        if (null !== ($v = $this->getAppliesDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLIES_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAppliesPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLIES_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBodySite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComments())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInterpretation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERPRETATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_RANGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReliability())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELIABILITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES_DATE_TIME])) {
            $v = $this->getAppliesDateTime();
            foreach($validationRules[self::FIELD_APPLIES_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_APPLIES_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES_DATE_TIME])) {
                        $errs[self::FIELD_APPLIES_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_APPLIES_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES_PERIOD])) {
            $v = $this->getAppliesPeriod();
            foreach($validationRules[self::FIELD_APPLIES_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_APPLIES_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES_PERIOD])) {
                        $errs[self::FIELD_APPLIES_PERIOD] = [];
                    }
                    $errs[self::FIELD_APPLIES_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENTS])) {
            $v = $this->getComments();
            foreach($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_COMMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENTS])) {
                        $errs[self::FIELD_COMMENTS] = [];
                    }
                    $errs[self::FIELD_COMMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERPRETATION])) {
            $v = $this->getInterpretation();
            foreach($validationRules[self::FIELD_INTERPRETATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_INTERPRETATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERPRETATION])) {
                        $errs[self::FIELD_INTERPRETATION] = [];
                    }
                    $errs[self::FIELD_INTERPRETATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RANGE])) {
            $v = $this->getReferenceRange();
            foreach($validationRules[self::FIELD_REFERENCE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_REFERENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RANGE])) {
                        $errs[self::FIELD_REFERENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED])) {
            $v = $this->getRelated();
            foreach($validationRules[self::FIELD_RELATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_RELATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED])) {
                        $errs[self::FIELD_RELATED] = [];
                    }
                    $errs[self::FIELD_RELATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELIABILITY])) {
            $v = $this->getReliability();
            foreach($validationRules[self::FIELD_RELIABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_RELIABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELIABILITY])) {
                        $errs[self::FIELD_RELIABILITY] = [];
                    }
                    $errs[self::FIELD_RELIABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
            $v = $this->getValueAttachment();
            foreach($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
            $v = $this->getValuePeriod();
            foreach($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
                        $errs[self::FIELD_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RATIO])) {
            $v = $this->getValueRatio();
            foreach($validationRules[self::FIELD_VALUE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RATIO])) {
                        $errs[self::FIELD_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SAMPLED_DATA])) {
            $v = $this->getValueSampledData();
            foreach($validationRules[self::FIELD_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
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
                throw new \DomainException(sprintf('FHIRObservation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRObservation;
        } elseif (!is_object($type) || !($type instanceof FHIRObservation)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->appliesDateTime)) {
            $type->setAppliesDateTime(FHIRDateTime::xmlUnserialize($children->appliesDateTime));
        }
        if (isset($attributes->appliesDateTime)) {
            $pt = $type->getAppliesDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->appliesDateTime);
            } else {
                $type->setAppliesDateTime((string)$attributes->appliesDateTime);
            }
        }
        if (isset($children->appliesPeriod)) {
            $type->setAppliesPeriod(FHIRPeriod::xmlUnserialize($children->appliesPeriod));
        }
        if (isset($children->bodySite)) {
            $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($children->bodySite));
        }
        if (isset($children->comments)) {
            $type->setComments(FHIRString::xmlUnserialize($children->comments));
        }
        if (isset($attributes->comments)) {
            $pt = $type->getComments();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comments);
            } else {
                $type->setComments((string)$attributes->comments);
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->interpretation)) {
            $type->setInterpretation(FHIRCodeableConcept::xmlUnserialize($children->interpretation));
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRInstant::xmlUnserialize($children->issued));
        }
        if (isset($attributes->issued)) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issued);
            } else {
                $type->setIssued((string)$attributes->issued);
            }
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($children->name)) {
            $type->setName(FHIRCodeableConcept::xmlUnserialize($children->name));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->referenceRange)) {
            foreach($children->referenceRange as $child) {
                $type->addReferenceRange(FHIRObservationReferenceRange::xmlUnserialize($child));
            }
        }
        if (isset($children->related)) {
            foreach($children->related as $child) {
                $type->addRelated(FHIRObservationRelated::xmlUnserialize($child));
            }
        }
        if (isset($children->reliability)) {
            $type->setReliability(FHIRObservationReliability::xmlUnserialize($children->reliability));
        }
        if (isset($children->specimen)) {
            $type->setSpecimen(FHIRResourceReference::xmlUnserialize($children->specimen));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRObservationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->valueAttachment)) {
            $type->setValueAttachment(FHIRAttachment::xmlUnserialize($children->valueAttachment));
        }
        if (isset($children->valueCodeableConcept)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->valueCodeableConcept));
        }
        if (isset($children->valuePeriod)) {
            $type->setValuePeriod(FHIRPeriod::xmlUnserialize($children->valuePeriod));
        }
        if (isset($children->valueQuantity)) {
            $type->setValueQuantity(FHIRQuantity::xmlUnserialize($children->valueQuantity));
        }
        if (isset($children->valueRatio)) {
            $type->setValueRatio(FHIRRatio::xmlUnserialize($children->valueRatio));
        }
        if (isset($children->valueSampledData)) {
            $type->setValueSampledData(FHIRSampledData::xmlUnserialize($children->valueSampledData));
        }
        if (isset($children->valueString)) {
            $type->setValueString(FHIRString::xmlUnserialize($children->valueString));
        }
        if (isset($attributes->valueString)) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->valueString);
            } else {
                $type->setValueString((string)$attributes->valueString);
            }
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
        if (null !== ($v = $this->getAppliesDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAppliesPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBodySite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getComments())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getInterpretation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTERPRETATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIssued())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_RANGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReliability())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELIABILITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSpecimen())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SAMPLED_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAppliesDateTime())) {
            $a[self::FIELD_APPLIES_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_APPLIES_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAppliesPeriod())) {
            $a[self::FIELD_APPLIES_PERIOD] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $v;
        }
        if (null !== ($v = $this->getComments())) {
            $a[self::FIELD_COMMENTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMMENTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getInterpretation())) {
            $a[self::FIELD_INTERPRETATION] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_ISSUED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReferenceRange())) {
            $a[self::FIELD_REFERENCE_RANGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REFERENCE_RANGE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelated())) {
            $a[self::FIELD_RELATED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED][] = $v;
            }
        }
        if (null !== ($v = $this->getReliability())) {
            $a[self::FIELD_RELIABILITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRObservationReliability::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRObservationReliability::FIELD_VALUE]);
                $a[self::FIELD_RELIABILITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRObservationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRObservationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a[self::FIELD_VALUE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a[self::FIELD_VALUE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a[self::FIELD_VALUE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a[self::FIELD_VALUE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a[self::FIELD_VALUE_RATIO] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a[self::FIELD_VALUE_SAMPLED_DATA] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a[self::FIELD_VALUE_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VALUE_STRING_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}