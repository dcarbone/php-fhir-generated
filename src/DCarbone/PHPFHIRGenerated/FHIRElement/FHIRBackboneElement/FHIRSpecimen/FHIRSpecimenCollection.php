<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A sample to be used for analysis.
 *
 * Class FHIRSpecimenCollection
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen
 */
class FHIRSpecimenCollection extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION;

    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_COLLECTED_DATE_TIME = 'collectedDateTime';
    const FIELD_COLLECTED_DATE_TIME_EXT = '_collectedDateTime';
    const FIELD_COLLECTED_PERIOD = 'collectedPeriod';
    const FIELD_COLLECTOR = 'collector';
    const FIELD_DURATION = 'duration';
    const FIELD_FASTING_STATUS_CODEABLE_CONCEPT = 'fastingStatusCodeableConcept';
    const FIELD_FASTING_STATUS_DURATION = 'fastingStatusDuration';
    const FIELD_METHOD = 'method';
    const FIELD_QUANTITY = 'quantity';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Anatomical location from which the specimen was collected (if subject is a
     * patient). This is the target site. This element is not used for environmental
     * specimens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $bodySite = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $collectedDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $collectedPeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who collected the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $collector = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $duration = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $fastingStatusCodeableConcept = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $fastingStatusDuration = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $method = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of specimen collected; for instance the volume of a blood sample,
     * or the physical measurement of an anatomic pathology sample.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $quantity = null;

    /**
     * FHIRSpecimenCollection Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenCollection::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_COLLECTED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_COLLECTED_DATE_TIME_EXT]) && is_array($data[self::FIELD_COLLECTED_DATE_TIME_EXT]))
                ? $data[self::FIELD_COLLECTED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_COLLECTED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setCollectedDateTime($data[self::FIELD_COLLECTED_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_COLLECTED_DATE_TIME])) {
                $this->setCollectedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_COLLECTED_DATE_TIME]] + $ext));
            } else {
                $this->setCollectedDateTime(new FHIRDateTime($data[self::FIELD_COLLECTED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_COLLECTED_PERIOD])) {
            if ($data[self::FIELD_COLLECTED_PERIOD] instanceof FHIRPeriod) {
                $this->setCollectedPeriod($data[self::FIELD_COLLECTED_PERIOD]);
            } else {
                $this->setCollectedPeriod(new FHIRPeriod($data[self::FIELD_COLLECTED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_COLLECTOR])) {
            if ($data[self::FIELD_COLLECTOR] instanceof FHIRReference) {
                $this->setCollector($data[self::FIELD_COLLECTOR]);
            } else {
                $this->setCollector(new FHIRReference($data[self::FIELD_COLLECTOR]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRDuration) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRDuration($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setFastingStatusCodeableConcept($data[self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT]);
            } else {
                $this->setFastingStatusCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_FASTING_STATUS_DURATION])) {
            if ($data[self::FIELD_FASTING_STATUS_DURATION] instanceof FHIRDuration) {
                $this->setFastingStatusDuration($data[self::FIELD_FASTING_STATUS_DURATION]);
            } else {
                $this->setFastingStatusDuration(new FHIRDuration($data[self::FIELD_FASTING_STATUS_DURATION]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Anatomical location from which the specimen was collected (if subject is a
     * patient). This is the target site. This element is not used for environmental
     * specimens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Anatomical location from which the specimen was collected (if subject is a
     * patient). This is the target site. This element is not used for environmental
     * specimens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $collectedDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setCollectedDateTime($collectedDateTime = null)
    {
        if (null === $collectedDateTime) {
            $this->collectedDateTime = null;
            return $this;
        }
        if ($collectedDateTime instanceof FHIRDateTime) {
            $this->collectedDateTime = $collectedDateTime;
            return $this;
        }
        $this->collectedDateTime = new FHIRDateTime($collectedDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time when specimen was collected from subject - the physiologically relevant
     * time. (choose any one of collected*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $collectedPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setCollectedPeriod(FHIRPeriod $collectedPeriod = null)
    {
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who collected the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who collected the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $collector
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setCollector(FHIRReference $collector = null)
    {
        $this->collector = $collector;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The span of time over which the collection of a specimen occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $duration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setDuration(FHIRDuration $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFastingStatusCodeableConcept()
    {
        return $this->fastingStatusCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fastingStatusCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setFastingStatusCodeableConcept(FHIRCodeableConcept $fastingStatusCodeableConcept = null)
    {
        $this->fastingStatusCodeableConcept = $fastingStatusCodeableConcept;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFastingStatusDuration()
    {
        return $this->fastingStatusDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Abstinence or reduction from some or all food, drink, or both, for a period of
     * time prior to sample collection. (choose any one of fastingStatus*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $fastingStatusDuration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setFastingStatusDuration(FHIRDuration $fastingStatusDuration = null)
    {
        $this->fastingStatusDuration = $fastingStatusDuration;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value specifying the technique that is used to perform the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of specimen collected; for instance the volume of a blood sample,
     * or the physical measurement of an anatomic pathology sample.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of specimen collected; for instance the volume of a blood sample,
     * or the physical measurement of an anatomic pathology sample.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSpecimenCollection::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenCollection::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRSpecimenCollection);
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenCollection)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenCollection::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->bodySite)) {
            $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($children->bodySite));
        }
        if (isset($attributes->collectedDateTime)) {
            $type->setCollectedDateTime((string)$attributes->collectedDateTime);
        }
        if (isset($children->collectedDateTime)) {
            $type->setCollectedDateTime(FHIRDateTime::xmlUnserialize($children->collectedDateTime));
        }
        if (isset($children->collectedPeriod)) {
            $type->setCollectedPeriod(FHIRPeriod::xmlUnserialize($children->collectedPeriod));
        }
        if (isset($children->collector)) {
            $type->setCollector(FHIRReference::xmlUnserialize($children->collector));
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRDuration::xmlUnserialize($children->duration));
        }
        if (isset($children->fastingStatusCodeableConcept)) {
            $type->setFastingStatusCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->fastingStatusCodeableConcept));
        }
        if (isset($children->fastingStatusDuration)) {
            $type->setFastingStatusDuration(FHIRDuration::xmlUnserialize($children->fastingStatusDuration));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SpecimenCollection xmlns="http://hl7.org/fhir"></SpecimenCollection>');
        }
        if (null !== ($v = $this->getBodySite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE));
        }
        if (null !== ($v = $this->getCollectedDateTime())) {
            $sxe->addAttribute(self::FIELD_COLLECTED_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTED_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getCollectedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTED_PERIOD));
        }
        if (null !== ($v = $this->getCollector())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTOR));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION));
        }
        if (null !== ($v = $this->getFastingStatusCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getFastingStatusDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FASTING_STATUS_DURATION));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $v;
        }
        if (null !== ($v = $this->getCollectedDateTime())) {
            $a[self::FIELD_COLLECTED_DATE_TIME] = (string)$v;
            $a[self::FIELD_COLLECTED_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getCollectedPeriod())) {
            $a[self::FIELD_COLLECTED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getCollector())) {
            $a[self::FIELD_COLLECTOR] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getFastingStatusCodeableConcept())) {
            $a[self::FIELD_FASTING_STATUS_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getFastingStatusDuration())) {
            $a[self::FIELD_FASTING_STATUS_DURATION] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}