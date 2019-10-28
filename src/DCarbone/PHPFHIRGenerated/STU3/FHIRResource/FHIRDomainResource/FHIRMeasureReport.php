<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMeasureReport
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRMeasureReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_EVALUATED_RESOURCES = 'evaluatedResources';
    const FIELD_GROUP = 'group';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MEASURE = 'measure';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERIOD = 'period';
    const FIELD_REPORTING_ORGANIZATION = 'reportingOrganization';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure report was generated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * evaluation of this report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $evaluatedResources = null;

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    protected $group = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this report when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the Measure that was evaluated to produce this report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $measure = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Patient if the report was requested for a single patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reporting Organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $reportingOrganization = null;

    /**
     * The status of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The report status. No data will be available until the report status is
     * complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportStatus
     */
    protected $status = null;

    /**
     * The type of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides a
     * single patient's score for the measure; a patient listing, which returns the
     * list of patients that meet the various criteria in the measure; or a summary
     * report, which returns a population count for each of the criteria in the
     * measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportType
     */
    protected $type = null;

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
        if (isset($data[self::FIELD_EVALUATED_RESOURCES])) {
            if ($data[self::FIELD_EVALUATED_RESOURCES] instanceof FHIRReference) {
                $this->setEvaluatedResources($data[self::FIELD_EVALUATED_RESOURCES]);
            } else {
                $this->setEvaluatedResources(new FHIRReference($data[self::FIELD_EVALUATED_RESOURCES]));
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
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MEASURE])) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRReference) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRReference($data[self::FIELD_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_REPORTING_ORGANIZATION])) {
            if ($data[self::FIELD_REPORTING_ORGANIZATION] instanceof FHIRReference) {
                $this->setReportingOrganization($data[self::FIELD_REPORTING_ORGANIZATION]);
            } else {
                $this->setReportingOrganization(new FHIRReference($data[self::FIELD_REPORTING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRMeasureReportStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRMeasureReportStatus([FHIRMeasureReportStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRMeasureReportStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRMeasureReportType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRMeasureReportType([FHIRMeasureReportType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRMeasureReportType($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<MeasureReport{$xmlns}></MeasureReport>";
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
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure report was generated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this measure report was generated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * evaluation of this report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getEvaluatedResources()
    {
        return $this->evaluatedResources;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a Bundle containing the Resources that were used in the
     * evaluation of this report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $evaluatedResources
     * @return static
     */
    public function setEvaluatedResources(FHIRReference $evaluatedResources = null)
    {
        $this->evaluatedResources = $evaluatedResources;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $group
     * @return static
     */
    public function addGroup(FHIRMeasureReportGroup $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of evaluating a measure.
     *
     * The results of the calculation, one for each population group in the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup[] $group
     * @return static
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this report when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
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
     * A formal identifier that is used to identify this report when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the Measure that was evaluated to produce this report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the Measure that was evaluated to produce this report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $measure
     * @return static
     */
    public function setMeasure(FHIRReference $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Patient if the report was requested for a single patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Patient if the report was requested for a single patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reporting period for which the report was calculated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reporting Organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReportingOrganization()
    {
        return $this->reportingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reporting Organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reportingOrganization
     * @return static
     */
    public function setReportingOrganization(FHIRReference $reportingOrganization = null)
    {
        $this->reportingOrganization = $reportingOrganization;
        return $this;
    }

    /**
     * The status of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The report status. No data will be available until the report status is
     * complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The report status. No data will be available until the report status is
     * complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportStatus $status
     * @return static
     */
    public function setStatus(FHIRMeasureReportStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides a
     * single patient's score for the measure; a patient listing, which returns the
     * list of patients that meet the various criteria in the measure; or a summary
     * report, which returns a population count for each of the criteria in the
     * measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the measure report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of measure report. This may be an individual report, which provides a
     * single patient's score for the measure; a patient listing, which returns the
     * list of patients that meet the various criteria in the measure; or a summary
     * report, which returns a population count for each of the criteria in the
     * measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportType $type
     * @return static
     */
    public function setType(FHIRMeasureReportType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport
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
                throw new \DomainException(sprintf('FHIRMeasureReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMeasureReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMeasureReport;
        } elseif (!is_object($type) || !($type instanceof FHIRMeasureReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRMeasureReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($children->evaluatedResources)) {
            $type->setEvaluatedResources(FHIRReference::xmlUnserialize($children->evaluatedResources));
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRMeasureReportGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->measure)) {
            $type->setMeasure(FHIRReference::xmlUnserialize($children->measure));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->reportingOrganization)) {
            $type->setReportingOrganization(FHIRReference::xmlUnserialize($children->reportingOrganization));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMeasureReportStatus::xmlUnserialize($children->status));
        }
        if (isset($children->type)) {
            $type->setType(FHIRMeasureReportType::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEvaluatedResources())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVALUATED_RESOURCES, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReportingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTING_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getEvaluatedResources())) {
            $a[self::FIELD_EVALUATED_RESOURCES] = $v;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a[self::FIELD_MEASURE] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getReportingOrganization())) {
            $a[self::FIELD_REPORTING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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