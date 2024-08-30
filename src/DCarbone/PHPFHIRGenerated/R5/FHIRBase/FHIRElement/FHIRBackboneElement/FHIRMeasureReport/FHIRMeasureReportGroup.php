<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 *
 * Class FHIRMeasureReportGroup
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport
 */
class FHIRMeasureReportGroup extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP;

    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_CODE = 'code';
    const FIELD_SUBJECT = 'subject';
    const FIELD_POPULATION = 'population';
    const FIELD_MEASURE_SCORE_QUANTITY = 'measureScoreQuantity';
    const FIELD_MEASURE_SCORE_DATE_TIME = 'measureScoreDateTime';
    const FIELD_MEASURE_SCORE_DATE_TIME_EXT = '_measureScoreDateTime';
    const FIELD_MEASURE_SCORE_CODEABLE_CONCEPT = 'measureScoreCodeableConcept';
    const FIELD_MEASURE_SCORE_PERIOD = 'measureScorePeriod';
    const FIELD_MEASURE_SCORE_RANGE = 'measureScoreRange';
    const FIELD_MEASURE_SCORE_DURATION = 'measureScoreDuration';
    const FIELD_STRATIFIER = 'stratifier';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $linkId = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation[]
     */
    protected null|array $population = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $measureScoreQuantity = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $measureScoreDateTime = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $measureScoreCodeableConcept = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $measureScorePeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $measureScoreRange = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $measureScoreDuration = null;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier[]
     */
    protected null|array $stratifier = [];

    /**
     * Validation map for fields in type MeasureReport.Group
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMeasureReportGroup Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_LINK_ID, $data) || array_key_exists(self::FIELD_LINK_ID_EXT, $data)) {
            $value = $data[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $data[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLinkId(new FHIRString($ext));
            } else {
                $this->setLinkId(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_POPULATION, $data)) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRMeasureReportPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRMeasureReportPopulation($v));
                    }
                }
            } elseif ($data[self::FIELD_POPULATION] instanceof FHIRMeasureReportPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRMeasureReportPopulation($data[self::FIELD_POPULATION]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_QUANTITY, $data)) {
            if ($data[self::FIELD_MEASURE_SCORE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMeasureScoreQuantity($data[self::FIELD_MEASURE_SCORE_QUANTITY]);
            } else {
                $this->setMeasureScoreQuantity(new FHIRQuantity($data[self::FIELD_MEASURE_SCORE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_DATE_TIME, $data) || array_key_exists(self::FIELD_MEASURE_SCORE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_MEASURE_SCORE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_MEASURE_SCORE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MEASURE_SCORE_DATE_TIME_EXT])) ? $data[self::FIELD_MEASURE_SCORE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setMeasureScoreDateTime($value);
                } else if (is_array($value)) {
                    $this->setMeasureScoreDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setMeasureScoreDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeasureScoreDateTime(new FHIRDateTime($ext));
            } else {
                $this->setMeasureScoreDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMeasureScoreCodeableConcept($data[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT]);
            } else {
                $this->setMeasureScoreCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_PERIOD, $data)) {
            if ($data[self::FIELD_MEASURE_SCORE_PERIOD] instanceof FHIRPeriod) {
                $this->setMeasureScorePeriod($data[self::FIELD_MEASURE_SCORE_PERIOD]);
            } else {
                $this->setMeasureScorePeriod(new FHIRPeriod($data[self::FIELD_MEASURE_SCORE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_RANGE, $data)) {
            if ($data[self::FIELD_MEASURE_SCORE_RANGE] instanceof FHIRRange) {
                $this->setMeasureScoreRange($data[self::FIELD_MEASURE_SCORE_RANGE]);
            } else {
                $this->setMeasureScoreRange(new FHIRRange($data[self::FIELD_MEASURE_SCORE_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_MEASURE_SCORE_DURATION, $data)) {
            if ($data[self::FIELD_MEASURE_SCORE_DURATION] instanceof FHIRDuration) {
                $this->setMeasureScoreDuration($data[self::FIELD_MEASURE_SCORE_DURATION]);
            } else {
                $this->setMeasureScoreDuration(new FHIRDuration($data[self::FIELD_MEASURE_SCORE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_STRATIFIER, $data)) {
            if (is_array($data[self::FIELD_STRATIFIER])) {
                foreach($data[self::FIELD_STRATIFIER] as $v) {
                    if ($v instanceof FHIRMeasureReportStratifier) {
                        $this->addStratifier($v);
                    } else {
                        $this->addStratifier(new FHIRMeasureReportStratifier($v));
                    }
                }
            } elseif ($data[self::FIELD_STRATIFIER] instanceof FHIRMeasureReportStratifier) {
                $this->addStratifier($data[self::FIELD_STRATIFIER]);
            } else {
                $this->addStratifier(new FHIRMeasureReportStratifier($data[self::FIELD_STRATIFIER]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $linkId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $linkId && !($linkId instanceof FHIRString)) {
            $linkId = new FHIRString($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        if (!isset($this->_xmlLocations[self::FIELD_LINK_ID])) {
            $this->_xmlLocations[self::FIELD_LINK_ID] = [];
        }
        $this->_xmlLocations[self::FIELD_LINK_ID][0] = $xmlLocation;
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation[]
     */
    public function getPopulation(): null|array
    {
        return $this->population;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation $population
     * @return static
     */
    public function addPopulation(null|FHIRMeasureReportPopulation $population = null): self
    {
        if (null === $population) {
            $population = new FHIRMeasureReportPopulation();
        }
        $this->_trackValueAdded();
        $this->population[] = $population;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation ...$population
     * @return static
     */
    public function setPopulation(FHIRMeasureReportPopulation ...$population): self
    {
        if ([] !== $this->population) {
            $this->_trackValuesRemoved(count($this->population));
            $this->population = [];
        }
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            $this->addPopulation($v);
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMeasureScoreQuantity(): null|FHIRQuantity
    {
        return $this->measureScoreQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measureScoreQuantity
     * @return static
     */
    public function setMeasureScoreQuantity(null|FHIRQuantity $measureScoreQuantity = null): self
    {
        if (null === $measureScoreQuantity) {
            $measureScoreQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->measureScoreQuantity, $measureScoreQuantity);
        $this->measureScoreQuantity = $measureScoreQuantity;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getMeasureScoreDateTime(): null|FHIRDateTime
    {
        return $this->measureScoreDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $measureScoreDateTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMeasureScoreDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $measureScoreDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $measureScoreDateTime && !($measureScoreDateTime instanceof FHIRDateTime)) {
            $measureScoreDateTime = new FHIRDateTime($measureScoreDateTime);
        }
        $this->_trackValueSet($this->measureScoreDateTime, $measureScoreDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_MEASURE_SCORE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_MEASURE_SCORE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_MEASURE_SCORE_DATE_TIME][0] = $xmlLocation;
        $this->measureScoreDateTime = $measureScoreDateTime;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMeasureScoreCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->measureScoreCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measureScoreCodeableConcept
     * @return static
     */
    public function setMeasureScoreCodeableConcept(null|FHIRCodeableConcept $measureScoreCodeableConcept = null): self
    {
        if (null === $measureScoreCodeableConcept) {
            $measureScoreCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->measureScoreCodeableConcept, $measureScoreCodeableConcept);
        $this->measureScoreCodeableConcept = $measureScoreCodeableConcept;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getMeasureScorePeriod(): null|FHIRPeriod
    {
        return $this->measureScorePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $measureScorePeriod
     * @return static
     */
    public function setMeasureScorePeriod(null|FHIRPeriod $measureScorePeriod = null): self
    {
        if (null === $measureScorePeriod) {
            $measureScorePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->measureScorePeriod, $measureScorePeriod);
        $this->measureScorePeriod = $measureScorePeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getMeasureScoreRange(): null|FHIRRange
    {
        return $this->measureScoreRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $measureScoreRange
     * @return static
     */
    public function setMeasureScoreRange(null|FHIRRange $measureScoreRange = null): self
    {
        if (null === $measureScoreRange) {
            $measureScoreRange = new FHIRRange();
        }
        $this->_trackValueSet($this->measureScoreRange, $measureScoreRange);
        $this->measureScoreRange = $measureScoreRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getMeasureScoreDuration(): null|FHIRDuration
    {
        return $this->measureScoreDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $measureScoreDuration
     * @return static
     */
    public function setMeasureScoreDuration(null|FHIRDuration $measureScoreDuration = null): self
    {
        if (null === $measureScoreDuration) {
            $measureScoreDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->measureScoreDuration, $measureScoreDuration);
        $this->measureScoreDuration = $measureScoreDuration;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier[]
     */
    public function getStratifier(): null|array
    {
        return $this->stratifier;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier $stratifier
     * @return static
     */
    public function addStratifier(null|FHIRMeasureReportStratifier $stratifier = null): self
    {
        if (null === $stratifier) {
            $stratifier = new FHIRMeasureReportStratifier();
        }
        $this->_trackValueAdded();
        $this->stratifier[] = $stratifier;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier ...$stratifier
     * @return static
     */
    public function setStratifier(FHIRMeasureReportStratifier ...$stratifier): self
    {
        if ([] !== $this->stratifier) {
            $this->_trackValuesRemoved(count($this->stratifier));
            $this->stratifier = [];
        }
        if ([] === $stratifier) {
            return $this;
        }
        foreach($stratifier as $v) {
            $this->addStratifier($v);
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
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POPULATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMeasureScoreQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureScoreDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureScoreCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureScorePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureScoreRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasureScoreDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASURE_SCORE_DURATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStratifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STRATIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POPULATION])) {
            $v = $this->getPopulation();
            foreach($validationRules[self::FIELD_POPULATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_POPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POPULATION])) {
                        $errs[self::FIELD_POPULATION] = [];
                    }
                    $errs[self::FIELD_POPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_QUANTITY])) {
            $v = $this->getMeasureScoreQuantity();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_QUANTITY])) {
                        $errs[self::FIELD_MEASURE_SCORE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_DATE_TIME])) {
            $v = $this->getMeasureScoreDateTime();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_DATE_TIME])) {
                        $errs[self::FIELD_MEASURE_SCORE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT])) {
            $v = $this->getMeasureScoreCodeableConcept();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_PERIOD])) {
            $v = $this->getMeasureScorePeriod();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_PERIOD])) {
                        $errs[self::FIELD_MEASURE_SCORE_PERIOD] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_RANGE])) {
            $v = $this->getMeasureScoreRange();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_RANGE])) {
                        $errs[self::FIELD_MEASURE_SCORE_RANGE] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASURE_SCORE_DURATION])) {
            $v = $this->getMeasureScoreDuration();
            foreach($validationRules[self::FIELD_MEASURE_SCORE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_MEASURE_SCORE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASURE_SCORE_DURATION])) {
                        $errs[self::FIELD_MEASURE_SCORE_DURATION] = [];
                    }
                    $errs[self::FIELD_MEASURE_SCORE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRATIFIER])) {
            $v = $this->getStratifier();
            foreach($validationRules[self::FIELD_STRATIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP, self::FIELD_STRATIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRATIFIER])) {
                        $errs[self::FIELD_STRATIFIER] = [];
                    }
                    $errs[self::FIELD_STRATIFIER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
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
        } else if (!($type instanceof FHIRMeasureReportGroup)) {
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
            if (self::FIELD_LINK_ID === $childName) {
                $type->setLinkId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_POPULATION === $childName) {
                $type->addPopulation(FHIRMeasureReportPopulation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_SCORE_QUANTITY === $childName) {
                $type->setMeasureScoreQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_SCORE_DATE_TIME === $childName) {
                $type->setMeasureScoreDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT === $childName) {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_SCORE_PERIOD === $childName) {
                $type->setMeasureScorePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_SCORE_RANGE === $childName) {
                $type->setMeasureScoreRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASURE_SCORE_DURATION === $childName) {
                $type->setMeasureScoreDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRATIFIER === $childName) {
                $type->addStratifier(FHIRMeasureReportStratifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LINK_ID])) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MEASURE_SCORE_DATE_TIME])) {
            $pt = $type->getMeasureScoreDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MEASURE_SCORE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasureScoreDateTime((string)$attributes[self::FIELD_MEASURE_SCORE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MeasureReportGroup', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MEASURE_SCORE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMeasureScoreDateTime())) {
            $xw->writeAttribute(self::FIELD_MEASURE_SCORE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_LINK_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLinkId())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPopulation() as $v) {
            $xw->startElement(self::FIELD_POPULATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasureScoreQuantity())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MEASURE_SCORE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMeasureScoreDateTime())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasureScoreCodeableConcept())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasureScorePeriod())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasureScoreRange())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMeasureScoreDuration())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStratifier() as $v) {
            $xw->startElement(self::FIELD_STRATIFIER);
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
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LINK_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $out->{self::FIELD_POPULATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_POPULATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getMeasureScoreQuantity())) {
            $out->{self::FIELD_MEASURE_SCORE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getMeasureScoreDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEASURE_SCORE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEASURE_SCORE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMeasureScoreCodeableConcept())) {
            $out->{self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getMeasureScorePeriod())) {
            $out->{self::FIELD_MEASURE_SCORE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getMeasureScoreRange())) {
            $out->{self::FIELD_MEASURE_SCORE_RANGE} = $v;
        }
        if (null !== ($v = $this->getMeasureScoreDuration())) {
            $out->{self::FIELD_MEASURE_SCORE_DURATION} = $v;
        }
        if ([] !== ($vs = $this->getStratifier())) {
            $out->{self::FIELD_STRATIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STRATIFIER}[] = $v;
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