<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMeasureReport extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The report status. No data will be available until the report status is complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    public $status = null;

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    public $type = null;

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $measure = null;

    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The date this measure report was generated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Reporting Organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reportingOrganization = null;

    /**
     * The reporting period for which the report was calculated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The results of the calculation, one for each population group in the measure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public $group = [];

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $evaluatedResources = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MeasureReport';

    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The report status. No data will be available until the report status is complete.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The report status. No data will be available until the report status is complete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of measure report. This may be an individual report, which provides the score for the measure for an individual member of the population; a subject-listing, which returns the list of members that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeasureReportType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMeasure() {
        return $this->measure;
    }

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $measure
     * @return $this
     */
    public function setMeasure($measure) {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Optional subject identifying the individual or individuals the report is for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The date this measure report was generated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date this measure report was generated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Reporting Organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReportingOrganization() {
        return $this->reportingOrganization;
    }

    /**
     * Reporting Organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reportingOrganization
     * @return $this
     */
    public function setReportingOrganization($reportingOrganization) {
        $this->reportingOrganization = $reportingOrganization;
        return $this;
    }

    /**
     * The reporting period for which the report was calculated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The reporting period for which the report was calculated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The results of the calculation, one for each population group in the measure.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * The results of the calculation, one for each population group in the measure.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
        return $this;
    }

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEvaluatedResources() {
        return $this->evaluatedResources;
    }

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $evaluatedResources
     * @return $this
     */
    public function setEvaluatedResources($evaluatedResources) {
        $this->evaluatedResources = $evaluatedResources;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['measure'])) {
                $this->setMeasure($data['measure']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['reportingOrganization'])) {
                $this->setReportingOrganization($data['reportingOrganization']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['group'])) {
                if (is_array($data['group'])) {
                    foreach($data['group'] as $d) {
                        $this->addGroup($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"group" must be array of objects or null, '.gettype($data['group']).' seen.');
                }
            }
            if (isset($data['evaluatedResources'])) {
                $this->setEvaluatedResources($data['evaluatedResources']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->measure)) $json['measure'] = $this->measure;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->reportingOrganization)) $json['reportingOrganization'] = $this->reportingOrganization;
        if (isset($this->period)) $json['period'] = $this->period;
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
            }
        }
        if (isset($this->evaluatedResources)) $json['evaluatedResources'] = $this->evaluatedResources;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MeasureReport xmlns="http://hl7.org/fhir"></MeasureReport>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->measure)) $this->measure->xmlSerialize(true, $sxe->addChild('measure'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->reportingOrganization)) $this->reportingOrganization->xmlSerialize(true, $sxe->addChild('reportingOrganization'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if (isset($this->evaluatedResources)) $this->evaluatedResources->xmlSerialize(true, $sxe->addChild('evaluatedResources'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}