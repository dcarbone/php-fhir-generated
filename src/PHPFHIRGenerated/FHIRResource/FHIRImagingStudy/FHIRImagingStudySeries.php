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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Manifest of a set of images produced in study. The set of images may include every image in the study, or it may be an incomplete sample, such as a list of key images.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The number of this series in the overall sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $number = null;

    /**
     * The modality of this series sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRModality
     */
    public $modality = null;

    /**
     * Formal identifier for this series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * A description of the series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Sequence that contains attributes from the.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numberOfInstances = null;

    /**
     * Availability of series (online, offline or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * WADO-RS URI where Series is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * When the series started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * A single image taken from a patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public $instance = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy.Series';

    /**
     * The number of this series in the overall sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The number of this series in the overall sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * The modality of this series sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRModality
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * The modality of this series sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRModality $modality
     * @return $this
     */
    public function setModality($modality)
    {
        $this->modality = $modality;
        return $this;
    }

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
     * Sequence that contains attributes from the.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Sequence that contains attributes from the.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $numberOfInstances
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
     * WADO-RS URI where Series is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * WADO-RS URI where Series is available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * When the series started.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * When the series started.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * A single image taken from a patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A single image taken from a patient.
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
        if (null !== $this->number) $json['number'] = json_encode($this->number);
        if (null !== $this->modality) $json['modality'] = json_encode($this->modality);
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->numberOfInstances) $json['numberOfInstances'] = json_encode($this->numberOfInstances);
        if (null !== $this->availability) $json['availability'] = json_encode($this->availability);
        if (null !== $this->url) $json['url'] = json_encode($this->url);
        if (null !== $this->bodySite) $json['bodySite'] = json_encode($this->bodySite);
        if (null !== $this->dateTime) $json['dateTime'] = json_encode($this->dateTime);
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
        if (null !== $this->number) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (null !== $this->modality) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->numberOfInstances) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (null !== $this->availability) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (0 < count($this->instance)) {
            foreach($this->instance as $instance) {
                $instance->xmlSerialize(true, $sxe->addChild('instance'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}