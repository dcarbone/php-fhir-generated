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
 * A person's work information, structured to facilitate individual, population, and public health use; not intended to support billing.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROccupationalData extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifier assigned to the occupational data record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The status of this {{title}}. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The occupational data record is about this person (e.g., the patient, a parent of a minor child).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The date of creation or updating of the occupational data record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The person who created or last updated the occupational data record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $author = [];

    /**
     * A person’s current economic relationship to a job. Employment status refers to whether a person is currently working for compensation, is unemployed (i.e., searching for work for compensation), or is not in the labor force (e.g. disabled, homemaker, chooses not to work, etc.). Employment status is not the same as classification of work.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataEmploymentStatus
     */
    public $employmentStatus = null;

    /**
     * A person's self-identified retirement date.  A person may retire multiple times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime[]
     */
    public $retirementDate = [];

    /**
     * The start and end dates for the period of time a person's work is or was in a combat zone. In addition to military personnel, civilians also may work or have worked in a combat zone.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod[]
     */
    public $combatZoneWork = [];

    /**
     * The type of work a person has held for the longest amount of time during his or her life, regardless of the occupation currently held and regardless of whether or not it has been held for a continuous time.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataUsualWork
     */
    public $usualWork = null;

    /**
     * The type of work done by a person during a current or past job. A job is defined by the sum of all the data related to the occupation. A change in occupation, supervisory level, industry, employer, or employer location is considered a new job.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataPastOrPresentJob[]
     */
    public $pastOrPresentJob = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'OccupationalData';

    /**
     * Business identifier assigned to the occupational data record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business identifier assigned to the occupational data record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The status of this {{title}}. Enables tracking the life-cycle of the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of this {{title}}. Enables tracking the life-cycle of the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The occupational data record is about this person (e.g., the patient, a parent of a minor child).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The occupational data record is about this person (e.g., the patient, a parent of a minor child).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The date of creation or updating of the occupational data record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date of creation or updating of the occupational data record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * The person who created or last updated the occupational data record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * The person who created or last updated the occupational data record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function addAuthor($author) {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A person’s current economic relationship to a job. Employment status refers to whether a person is currently working for compensation, is unemployed (i.e., searching for work for compensation), or is not in the labor force (e.g. disabled, homemaker, chooses not to work, etc.). Employment status is not the same as classification of work.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataEmploymentStatus
     */
    public function getEmploymentStatus() {
        return $this->employmentStatus;
    }

    /**
     * A person’s current economic relationship to a job. Employment status refers to whether a person is currently working for compensation, is unemployed (i.e., searching for work for compensation), or is not in the labor force (e.g. disabled, homemaker, chooses not to work, etc.). Employment status is not the same as classification of work.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataEmploymentStatus $employmentStatus
     * @return $this
     */
    public function setEmploymentStatus($employmentStatus) {
        $this->employmentStatus = $employmentStatus;
        return $this;
    }

    /**
     * A person's self-identified retirement date.  A person may retire multiple times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime[]
     */
    public function getRetirementDate() {
        return $this->retirementDate;
    }

    /**
     * A person's self-identified retirement date.  A person may retire multiple times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $retirementDate
     * @return $this
     */
    public function addRetirementDate($retirementDate) {
        $this->retirementDate[] = $retirementDate;
        return $this;
    }

    /**
     * The start and end dates for the period of time a person's work is or was in a combat zone. In addition to military personnel, civilians also may work or have worked in a combat zone.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod[]
     */
    public function getCombatZoneWork() {
        return $this->combatZoneWork;
    }

    /**
     * The start and end dates for the period of time a person's work is or was in a combat zone. In addition to military personnel, civilians also may work or have worked in a combat zone.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $combatZoneWork
     * @return $this
     */
    public function addCombatZoneWork($combatZoneWork) {
        $this->combatZoneWork[] = $combatZoneWork;
        return $this;
    }

    /**
     * The type of work a person has held for the longest amount of time during his or her life, regardless of the occupation currently held and regardless of whether or not it has been held for a continuous time.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataUsualWork
     */
    public function getUsualWork() {
        return $this->usualWork;
    }

    /**
     * The type of work a person has held for the longest amount of time during his or her life, regardless of the occupation currently held and regardless of whether or not it has been held for a continuous time.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataUsualWork $usualWork
     * @return $this
     */
    public function setUsualWork($usualWork) {
        $this->usualWork = $usualWork;
        return $this;
    }

    /**
     * The type of work done by a person during a current or past job. A job is defined by the sum of all the data related to the occupation. A change in occupation, supervisory level, industry, employer, or employer location is considered a new job.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataPastOrPresentJob[]
     */
    public function getPastOrPresentJob() {
        return $this->pastOrPresentJob;
    }

    /**
     * The type of work done by a person during a current or past job. A job is defined by the sum of all the data related to the occupation. A change in occupation, supervisory level, industry, employer, or employer location is considered a new job.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROccupationalData\FHIROccupationalDataPastOrPresentJob $pastOrPresentJob
     * @return $this
     */
    public function addPastOrPresentJob($pastOrPresentJob) {
        $this->pastOrPresentJob[] = $pastOrPresentJob;
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
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['author'])) {
                if (is_array($data['author'])) {
                    foreach($data['author'] as $d) {
                        $this->addAuthor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"author" must be array of objects or null, '.gettype($data['author']).' seen.');
                }
            }
            if (isset($data['employmentStatus'])) {
                $this->setEmploymentStatus($data['employmentStatus']);
            }
            if (isset($data['retirementDate'])) {
                if (is_array($data['retirementDate'])) {
                    foreach($data['retirementDate'] as $d) {
                        $this->addRetirementDate($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"retirementDate" must be array of objects or null, '.gettype($data['retirementDate']).' seen.');
                }
            }
            if (isset($data['combatZoneWork'])) {
                if (is_array($data['combatZoneWork'])) {
                    foreach($data['combatZoneWork'] as $d) {
                        $this->addCombatZoneWork($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"combatZoneWork" must be array of objects or null, '.gettype($data['combatZoneWork']).' seen.');
                }
            }
            if (isset($data['usualWork'])) {
                $this->setUsualWork($data['usualWork']);
            }
            if (isset($data['pastOrPresentJob'])) {
                if (is_array($data['pastOrPresentJob'])) {
                    foreach($data['pastOrPresentJob'] as $d) {
                        $this->addPastOrPresentJob($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"pastOrPresentJob" must be array of objects or null, '.gettype($data['pastOrPresentJob']).' seen.');
                }
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
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->date)) $json['date'] = $this->date;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                if (null !== $author) $json['author'][] = $author;
            }
        }
        if (isset($this->employmentStatus)) $json['employmentStatus'] = $this->employmentStatus;
        if (0 < count($this->retirementDate)) {
            $json['retirementDate'] = [];
            foreach($this->retirementDate as $retirementDate) {
                if (null !== $retirementDate) $json['retirementDate'][] = $retirementDate;
            }
        }
        if (0 < count($this->combatZoneWork)) {
            $json['combatZoneWork'] = [];
            foreach($this->combatZoneWork as $combatZoneWork) {
                if (null !== $combatZoneWork) $json['combatZoneWork'][] = $combatZoneWork;
            }
        }
        if (isset($this->usualWork)) $json['usualWork'] = $this->usualWork;
        if (0 < count($this->pastOrPresentJob)) {
            $json['pastOrPresentJob'] = [];
            foreach($this->pastOrPresentJob as $pastOrPresentJob) {
                if (null !== $pastOrPresentJob) $json['pastOrPresentJob'][] = $pastOrPresentJob;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OccupationalData xmlns="http://hl7.org/fhir"></OccupationalData>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (isset($this->employmentStatus)) $this->employmentStatus->xmlSerialize(true, $sxe->addChild('employmentStatus'));
        if (0 < count($this->retirementDate)) {
            foreach($this->retirementDate as $retirementDate) {
                $retirementDate->xmlSerialize(true, $sxe->addChild('retirementDate'));
            }
        }
        if (0 < count($this->combatZoneWork)) {
            foreach($this->combatZoneWork as $combatZoneWork) {
                $combatZoneWork->xmlSerialize(true, $sxe->addChild('combatZoneWork'));
            }
        }
        if (isset($this->usualWork)) $this->usualWork->xmlSerialize(true, $sxe->addChild('usualWork'));
        if (0 < count($this->pastOrPresentJob)) {
            foreach($this->pastOrPresentJob as $pastOrPresentJob) {
                $pastOrPresentJob->xmlSerialize(true, $sxe->addChild('pastOrPresentJob'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}