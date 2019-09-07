<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMeasureReport
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMeasureReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT;

    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_EVALUATED_RESOURCE = 'evaluatedResource';
    const FIELD_GROUP = 'group';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMPROVEMENT_NOTATION = 'improvementNotation';
    const FIELD_MEASURE = 'measure';
    const FIELD_MEASURE_EXT = '_measure';
    const FIELD_PERIOD = 'period';
    const FIELD_REPORTER = 'reporter';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date this measure report was generated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * calculation of this measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $evaluatedResource = [];

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    private $group = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $improvementNotation = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $measure = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, location, or organization that is reporting the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $reporter = null;

    /**
     * The status of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    private $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * The type of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    private $type = null;

    /**
     * FHIRMeasureReport Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_EVALUATED_RESOURCE])) {
            if (is_array($data[self::FIELD_EVALUATED_RESOURCE])) {
                foreach($data[self::FIELD_EVALUATED_RESOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEvaluatedResource($v);
                    } else {
                        $this->addEvaluatedResource(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_EVALUATED_RESOURCE] instanceof FHIRReference) {
                $this->addEvaluatedResource($data[self::FIELD_EVALUATED_RESOURCE]);
            } else {
                $this->addEvaluatedResource(new FHIRReference($data[self::FIELD_EVALUATED_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if ($v instanceof FHIRMeasureReportGroup) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRMeasureReportGroup($v));
                    }
                }
            } else if ($data[self::FIELD_GROUP] instanceof FHIRMeasureReportGroup) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRMeasureReportGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMPROVEMENT_NOTATION])) {
            if ($data[self::FIELD_IMPROVEMENT_NOTATION] instanceof FHIRCodeableConcept) {
                $this->setImprovementNotation($data[self::FIELD_IMPROVEMENT_NOTATION]);
            } else {
                $this->setImprovementNotation(new FHIRCodeableConcept($data[self::FIELD_IMPROVEMENT_NOTATION]));
            }
        }
        if (isset($data[self::FIELD_MEASURE])) {
            $ext = (isset($data[self::FIELD_MEASURE_EXT]) && is_array($data[self::FIELD_MEASURE_EXT]))
                ? $data[self::FIELD_MEASURE_EXT]
                : null;
            if ($data[self::FIELD_MEASURE] instanceof FHIRCanonical) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } elseif ($ext && is_scalar($data[self::FIELD_MEASURE])) {
                $this->setMeasure(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_MEASURE]] + $ext));
            } else {
                $this->setMeasure(new FHIRCanonical($data[self::FIELD_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_REPORTER])) {
            if ($data[self::FIELD_REPORTER] instanceof FHIRReference) {
                $this->setReporter($data[self::FIELD_REPORTER]);
            } else {
                $this->setReporter(new FHIRReference($data[self::FIELD_REPORTER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRMeasureReportStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRMeasureReportStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRMeasureReportType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRMeasureReportType($data[self::FIELD_TYPE]));
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date this measure report was generated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date this measure report was generated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * calculation of this measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEvaluatedResource()
    {
        return $this->evaluatedResource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * calculation of this measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $evaluatedResource
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function addEvaluatedResource(FHIRReference $evaluatedResource = null)
    {
        $this->evaluatedResource[] = $evaluatedResource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * calculation of this measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $evaluatedResource
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setEvaluatedResource(array $evaluatedResource = [])
    {
        $this->evaluatedResource = [];
        if ([] === $evaluatedResource) {
            return $this;
        }
        foreach($evaluatedResource as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEvaluatedResource($v);
            } else {
                $this->addEvaluatedResource(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $group
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function addGroup(FHIRMeasureReportGroup $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[] $group
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setGroup(array $group = [])
    {
        $this->group = [];
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRMeasureReportGroup) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRMeasureReportGroup($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this MeasureReport when it is
     * represented in other formats or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether improvement in the measure is noted by an increase or decrease in the
     * measure score.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $improvementNotation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setImprovementNotation(FHIRCodeableConcept $improvementNotation = null)
    {
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A reference to the Measure that was calculated to produce this report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $measure
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setMeasure($measure = null)
    {
        if (null === $measure) {
            $this->measure = null;
            return $this;
        }
        if ($measure instanceof FHIRCanonical) {
            $this->measure = $measure;
            return $this;
        }
        $this->measure = new FHIRCanonical($measure);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, location, or organization that is reporting the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, location, or organization that is reporting the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $reporter
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setReporter(FHIRReference $reporter = null)
    {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * The status of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The MeasureReport status. No data will be available until the MeasureReport
     * status is complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setStatus(FHIRMeasureReportStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The type of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the measure report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides the
     * score for the measure for an individual member of the population; a
     * subject-listing, which returns the list of members that meet the various
     * criteria in the measure; a summary report, which returns a population count for
     * each of the criteria in the measure; or a data-collection, which enables the
     * MeasureReport to be used to exchange the data-of-interest for a quality measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     */
    public function setType(FHIRMeasureReportType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport
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
                throw new \DomainException(sprintf('FHIRMeasureReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMeasureReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRMeasureReport);
        } elseif (!is_object($type) || !($type instanceof FHIRMeasureReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRMeasureReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($children->evaluatedResource)) {
            foreach($children->evaluatedResource as $child) {
                $type->addEvaluatedResource(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRMeasureReportGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->improvementNotation)) {
            $type->setImprovementNotation(FHIRCodeableConcept::xmlUnserialize($children->improvementNotation));
        }
        if (isset($attributes->measure)) {
            $type->setMeasure((string)$attributes->measure);
        }
        if (isset($children->measure)) {
            $type->setMeasure(FHIRCanonical::xmlUnserialize($children->measure));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->reporter)) {
            $type->setReporter(FHIRReference::xmlUnserialize($children->reporter));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMeasureReportStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->type)) {
            $type->setType(FHIRMeasureReportType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MeasureReport xmlns="http://hl7.org/fhir"></MeasureReport>');
        }
        if (null !== ($v = $this->getDate())) {
            $sxe->addAttribute(self::FIELD_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE));
            }
        }
        if ([] !== ($vs = $this->getEvaluatedResource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVALUATED_RESOURCE));
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPROVEMENT_NOTATION));
        }
        if (null !== ($v = $this->getMeasure())) {
            $sxe->addAttribute(self::FIELD_MEASURE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MEASURE));
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }
        if (null !== ($v = $this->getReporter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTER));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = (string)$v;
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEvaluatedResource())) {
            $a[self::FIELD_EVALUATED_RESOURCE] = $vs;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $a[self::FIELD_IMPROVEMENT_NOTATION] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a[self::FIELD_MEASURE] = (string)$v;
            $a[self::FIELD_MEASURE_EXT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getReporter())) {
            $a[self::FIELD_REPORTER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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