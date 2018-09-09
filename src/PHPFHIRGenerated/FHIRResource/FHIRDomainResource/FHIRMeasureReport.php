<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation;
use PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus;
use PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMeasureReport
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMeasureReport extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MeasureReport';

    /**
     * The date this measure report was generated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $evaluatedResource = null;

    /**
     * The results of the calculation, one for each population group in the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
     */
    public $group = null;

    /**
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     */
    public $improvementNotation = null;

    /**
     * A reference to the Measure that was calculated to produce this report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $measure = null;

    /**
     * The reporting period for which the report was calculated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The individual, location, or organization that is reporting the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reporter = null;

    /**
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    public $status = null;

    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    public $type = null;

    /**
     * FHIRMeasureReport Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['evaluatedResource'])) {
                $this->setEvaluatedResource($data['evaluatedResource']);
            }
            if (isset($data['group'])) {
                $this->setGroup($data['group']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['improvementNotation'])) {
                $this->setImprovementNotation($data['improvementNotation']);
            }
            if (isset($data['measure'])) {
                $this->setMeasure($data['measure']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['reporter'])) {
                $this->setReporter($data['reporter']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasureReport::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date this measure report was generated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date this measure report was generated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEvaluatedResource(FHIRReference $evaluatedResource = null)
    {
        if (null === $evaluatedResource) {
            return $this; 
        }
        $this->evaluatedResource = $evaluatedResource;
        return $this;
    }

    /**
     * A reference to a Bundle containing the Resources that were used in the calculation of this measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEvaluatedResource()
    {
        return $this->evaluatedResource;
    }


    /**
     * The results of the calculation, one for each population group in the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
     * @return $this
     */
    public function setGroup(FHIRMeasureReportGroup $group = null)
    {
        if (null === $group) {
            return $this; 
        }
        $this->group = $group;
        return $this;
    }

    /**
     * The results of the calculation, one for each population group in the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
     */
    public function getGroup()
    {
        return $this->group;
    }


    /**
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this MeasureReport when it is represented in other formats or referenced in a specification, model, design or an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     * @return $this
     */
    public function setImprovementNotation($improvementNotation)
    {
        if (null === $improvementNotation) {
            return $this; 
        }
        if (is_scalar($improvementNotation)) {
            $improvementNotation = new FHIRMeasureImprovementNotation($improvementNotation);
        }
        if (!($improvementNotation instanceof FHIRMeasureImprovementNotation)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::setImprovementNotation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation or appropriate scalar value, %s seen.',
                gettype($improvementNotation)
            ));
        }
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * Whether improvement in the measure is noted by an increase or decrease in the measure score.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }


    /**
     * A reference to the Measure that was calculated to produce this report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setMeasure($measure)
    {
        if (null === $measure) {
            return $this; 
        }
        if (is_scalar($measure)) {
            $measure = new FHIRCanonical($measure);
        }
        if (!($measure instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::setMeasure - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($measure)
            ));
        }
        $this->measure = $measure;
        return $this;
    }

    /**
     * A reference to the Measure that was calculated to produce this report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getMeasure()
    {
        return $this->measure;
    }


    /**
     * The reporting period for which the report was calculated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The reporting period for which the report was calculated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * The individual, location, or organization that is reporting the data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReporter(FHIRReference $reporter = null)
    {
        if (null === $reporter) {
            return $this; 
        }
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * The individual, location, or organization that is reporting the data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReporter()
    {
        return $this->reporter;
    }


    /**
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRMeasureReportStatus($status);
        }
        if (!($status instanceof FHIRMeasureReportStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The MeasureReport status. No data will be available until the MeasureReport status is complete.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRMeasureReportType($type);
        }
        if (!($type instanceof FHIRMeasureReportType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasureReport::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; a summary report, which returns a population count for each of the criteria in the measure; or a data-collection, which enables the MeasureReport to be used to exchange the data-of-interest for a quality measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getEvaluatedResource())) {
            $a['evaluatedResource'] = $v;
        }
        if (null !== ($v = $this->getGroup())) {
            $a['group'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $a['improvementNotation'] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a['measure'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getReporter())) {
            $a['reporter'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MeasureReport xmlns="http://hl7.org/fhir"></MeasureReport>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}