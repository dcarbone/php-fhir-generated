<?php namespace PHPFHIRGenerated\FHIRResource\FHIROccupationalData;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A person's work information, structured to facilitate individual, population, and public health use; not intended to support billing.
 */
class FHIROccupationalDataPastOrPresentJob extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code that represents the type of work done by a person at one job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $occupation = null;

    /**
     * A code that represents the type of business associated with a person's Past Or Present Job; i.e., for one job. A change in industry indicates a change in job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $industry = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The party, be it an individual or an organization, responsible for providing compensation to a person performing work, or in the case of unpaid work, the party responsible for engaging the person in a position. For military occupations, this refers to the name of the person's military home base; the person's Branch of Service is recorded as industry. A change in employer or employer location indicates a change in job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $employer = null;

    /**
     * The classification of a person's job (one job) as defined by compensation and sector (e.g. paid, unpaid, self-employed, government, etc.). This is different from employment status: a person who is a volunteer (work classification) may have chosen not to be in the labor force (employment status).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $workClassification = null;

    /**
     * Reflects the amount of supervisory or management responsibilities of a person at one job. For military jobs, pay grade is used as a proxy because it can be interpreted across branches of service.  A change in supervisory level is considered a new job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $supervisoryLevel = null;

    /**
     * A regular action performed at a single job.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $jobDuty = [];

    /**
     * A hazard that is specific to a person's work or work environment for a single job and with which the person might come in contact. A hazard is a source of potential harm to an individual's physical or mental health (e.g., biological, chemical, physical, psychological, radiological).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $occupationalHazard = [];

    /**
     * Describes a person's typical arrangement of working hours for one job.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataWorkSchedule
     */
    public $workSchedule = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'OccupationalData.PastOrPresentJob';

    /**
     * A code that represents the type of work done by a person at one job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOccupation() {
        return $this->occupation;
    }

    /**
     * A code that represents the type of work done by a person at one job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $occupation
     * @return $this
     */
    public function setOccupation($occupation) {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * A code that represents the type of business associated with a person's Past Or Present Job; i.e., for one job. A change in industry indicates a change in job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIndustry() {
        return $this->industry;
    }

    /**
     * A code that represents the type of business associated with a person's Past Or Present Job; i.e., for one job. A change in industry indicates a change in job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $industry
     * @return $this
     */
    public function setIndustry($industry) {
        $this->industry = $industry;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The party, be it an individual or an organization, responsible for providing compensation to a person performing work, or in the case of unpaid work, the party responsible for engaging the person in a position. For military occupations, this refers to the name of the person's military home base; the person's Branch of Service is recorded as industry. A change in employer or employer location indicates a change in job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEmployer() {
        return $this->employer;
    }

    /**
     * The party, be it an individual or an organization, responsible for providing compensation to a person performing work, or in the case of unpaid work, the party responsible for engaging the person in a position. For military occupations, this refers to the name of the person's military home base; the person's Branch of Service is recorded as industry. A change in employer or employer location indicates a change in job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $employer
     * @return $this
     */
    public function setEmployer($employer) {
        $this->employer = $employer;
        return $this;
    }

    /**
     * The classification of a person's job (one job) as defined by compensation and sector (e.g. paid, unpaid, self-employed, government, etc.). This is different from employment status: a person who is a volunteer (work classification) may have chosen not to be in the labor force (employment status).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getWorkClassification() {
        return $this->workClassification;
    }

    /**
     * The classification of a person's job (one job) as defined by compensation and sector (e.g. paid, unpaid, self-employed, government, etc.). This is different from employment status: a person who is a volunteer (work classification) may have chosen not to be in the labor force (employment status).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $workClassification
     * @return $this
     */
    public function setWorkClassification($workClassification) {
        $this->workClassification = $workClassification;
        return $this;
    }

    /**
     * Reflects the amount of supervisory or management responsibilities of a person at one job. For military jobs, pay grade is used as a proxy because it can be interpreted across branches of service.  A change in supervisory level is considered a new job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSupervisoryLevel() {
        return $this->supervisoryLevel;
    }

    /**
     * Reflects the amount of supervisory or management responsibilities of a person at one job. For military jobs, pay grade is used as a proxy because it can be interpreted across branches of service.  A change in supervisory level is considered a new job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $supervisoryLevel
     * @return $this
     */
    public function setSupervisoryLevel($supervisoryLevel) {
        $this->supervisoryLevel = $supervisoryLevel;
        return $this;
    }

    /**
     * A regular action performed at a single job.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getJobDuty() {
        return $this->jobDuty;
    }

    /**
     * A regular action performed at a single job.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $jobDuty
     * @return $this
     */
    public function addJobDuty($jobDuty) {
        $this->jobDuty[] = $jobDuty;
        return $this;
    }

    /**
     * A hazard that is specific to a person's work or work environment for a single job and with which the person might come in contact. A hazard is a source of potential harm to an individual's physical or mental health (e.g., biological, chemical, physical, psychological, radiological).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getOccupationalHazard() {
        return $this->occupationalHazard;
    }

    /**
     * A hazard that is specific to a person's work or work environment for a single job and with which the person might come in contact. A hazard is a source of potential harm to an individual's physical or mental health (e.g., biological, chemical, physical, psychological, radiological).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $occupationalHazard
     * @return $this
     */
    public function addOccupationalHazard($occupationalHazard) {
        $this->occupationalHazard[] = $occupationalHazard;
        return $this;
    }

    /**
     * Describes a person's typical arrangement of working hours for one job.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataWorkSchedule
     */
    public function getWorkSchedule() {
        return $this->workSchedule;
    }

    /**
     * Describes a person's typical arrangement of working hours for one job.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataWorkSchedule $workSchedule
     * @return $this
     */
    public function setWorkSchedule($workSchedule) {
        $this->workSchedule = $workSchedule;
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
            if (isset($data['occupation'])) {
                $this->setOccupation($data['occupation']);
            }
            if (isset($data['industry'])) {
                $this->setIndustry($data['industry']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['employer'])) {
                $this->setEmployer($data['employer']);
            }
            if (isset($data['workClassification'])) {
                $this->setWorkClassification($data['workClassification']);
            }
            if (isset($data['supervisoryLevel'])) {
                $this->setSupervisoryLevel($data['supervisoryLevel']);
            }
            if (isset($data['jobDuty'])) {
                if (is_array($data['jobDuty'])) {
                    foreach($data['jobDuty'] as $d) {
                        $this->addJobDuty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jobDuty" must be array of objects or null, '.gettype($data['jobDuty']).' seen.');
                }
            }
            if (isset($data['occupationalHazard'])) {
                if (is_array($data['occupationalHazard'])) {
                    foreach($data['occupationalHazard'] as $d) {
                        $this->addOccupationalHazard($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"occupationalHazard" must be array of objects or null, '.gettype($data['occupationalHazard']).' seen.');
                }
            }
            if (isset($data['workSchedule'])) {
                $this->setWorkSchedule($data['workSchedule']);
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
        if (isset($this->occupation)) $json['occupation'] = $this->occupation;
        if (isset($this->industry)) $json['industry'] = $this->industry;
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (isset($this->employer)) $json['employer'] = $this->employer;
        if (isset($this->workClassification)) $json['workClassification'] = $this->workClassification;
        if (isset($this->supervisoryLevel)) $json['supervisoryLevel'] = $this->supervisoryLevel;
        if (0 < count($this->jobDuty)) {
            $json['jobDuty'] = [];
            foreach($this->jobDuty as $jobDuty) {
                if (null !== $jobDuty) $json['jobDuty'][] = $jobDuty;
            }
        }
        if (0 < count($this->occupationalHazard)) {
            $json['occupationalHazard'] = [];
            foreach($this->occupationalHazard as $occupationalHazard) {
                if (null !== $occupationalHazard) $json['occupationalHazard'][] = $occupationalHazard;
            }
        }
        if (isset($this->workSchedule)) $json['workSchedule'] = $this->workSchedule;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OccupationalDataPastOrPresentJob xmlns="http://hl7.org/fhir"></OccupationalDataPastOrPresentJob>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->occupation)) $this->occupation->xmlSerialize(true, $sxe->addChild('occupation'));
        if (isset($this->industry)) $this->industry->xmlSerialize(true, $sxe->addChild('industry'));
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (isset($this->employer)) $this->employer->xmlSerialize(true, $sxe->addChild('employer'));
        if (isset($this->workClassification)) $this->workClassification->xmlSerialize(true, $sxe->addChild('workClassification'));
        if (isset($this->supervisoryLevel)) $this->supervisoryLevel->xmlSerialize(true, $sxe->addChild('supervisoryLevel'));
        if (0 < count($this->jobDuty)) {
            foreach($this->jobDuty as $jobDuty) {
                $jobDuty->xmlSerialize(true, $sxe->addChild('jobDuty'));
            }
        }
        if (0 < count($this->occupationalHazard)) {
            foreach($this->occupationalHazard as $occupationalHazard) {
                $occupationalHazard->xmlSerialize(true, $sxe->addChild('occupationalHazard'));
            }
        }
        if (isset($this->workSchedule)) $this->workSchedule->xmlSerialize(true, $sxe->addChild('workSchedule'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}