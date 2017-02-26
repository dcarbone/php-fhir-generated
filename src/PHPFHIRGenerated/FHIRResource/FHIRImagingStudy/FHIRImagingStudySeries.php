<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImagingStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Formal identifier for this series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * The Numeric identifier of this series in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * The modality of this series sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * A description of the series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Number of SOP Instances in Series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Availability of series (online, offline or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * Methods of accessing (e.g. retrieving) the series.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyBaseLocation1[]
     */
    public $baseLocation = array();

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $laterality = null;

    /**
     * The date and time the series was started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public $instance = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy.Series';

    /**
     * Formal identifier for this series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Formal identifier for this series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * The Numeric identifier of this series in the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The Numeric identifier of this series in the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * The modality of this series sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * The modality of this series sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $modality
     * @return $this
     */
    public function setModality($modality)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * A description of the series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Number of SOP Instances in Series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Methods of accessing (e.g. retrieving) the series.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyBaseLocation1[]
     */
    public function getBaseLocation()
    {
        return $this->baseLocation;
    }

    /**
     * Methods of accessing (e.g. retrieving) the series.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyBaseLocation1 $baseLocation
     * @return $this
     */
    public function addBaseLocation($baseLocation)
    {
        $this->baseLocation[] = $baseLocation;
        return $this;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getLaterality()
    {
        return $this->laterality;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $laterality
     * @return $this
     */
    public function setLaterality($laterality)
    {
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * The date and time the series was started.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * The date and time the series was started.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $started
     * @return $this
     */
    public function setStarted($started)
    {
        $this->started = $started;
        return $this;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance $instance
     * @return $this
     */
    public function addInstance($instance)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (null !== $this->number) $json['number'] = json_encode($this->number);
        if (null !== $this->modality) $json['modality'] = json_encode($this->modality);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->numberOfInstances) $json['numberOfInstances'] = json_encode($this->numberOfInstances);
        if (null !== $this->availability) $json['availability'] = json_encode($this->availability);
        if (0 < count($this->baseLocation)) {
            $json['baseLocation'] = [];
            foreach($this->baseLocation as $baseLocation) {
                $json['baseLocation'][] = json_encode($baseLocation);
            }
        }
        if (null !== $this->bodySite) $json['bodySite'] = json_encode($this->bodySite);
        if (null !== $this->laterality) $json['laterality'] = json_encode($this->laterality);
        if (null !== $this->started) $json['started'] = json_encode($this->started);
        if (0 < count($this->instance)) {
            $json['instance'] = [];
            foreach($this->instance as $instance) {
                $json['instance'][] = json_encode($instance);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudySeries xmlns="http://hl7.org/fhir"></ImagingStudySeries>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->number) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (null !== $this->modality) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->numberOfInstances) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (null !== $this->availability) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (0 < count($this->baseLocation)) {
            foreach($this->baseLocation as $baseLocation) {
                $baseLocation->xmlSerialize(true, $sxe->addChild('baseLocation'));
            }
        }
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->laterality) $this->laterality->xmlSerialize(true, $sxe->addChild('laterality'));
        if (null !== $this->started) $this->started->xmlSerialize(true, $sxe->addChild('started'));
        if (0 < count($this->instance)) {
            foreach($this->instance as $instance) {
                $instance->xmlSerialize(true, $sxe->addChild('instance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}