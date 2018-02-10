<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Manifest of a set of images produced in study. The set of images may include every image in the study, or it may be an incomplete sample, such as a list of key images.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImagingStudy extends FHIRResource implements \JsonSerializable
{
    /**
     * Date and Time the study took place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Who the images are of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Formal identifier for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * Accession Number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $accessionNo = null;

    /**
     * Other identifiers for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A list of the diagnostic orders that resulted in this imaging study being performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $order = array();

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImagingModality[]
     */
    public $modality = array();

    /**
     * The requesting/referring physician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $referrer = null;

    /**
     * Availability of study (online, offline or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * WADO-RS URI where Study is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Number of Series in Study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numberOfSeries = null;

    /**
     * Number of SOP Instances in Study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numberOfInstances = null;

    /**
     * Diagnoses etc provided with request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $clinicalInformation = null;

    /**
     * Type of procedure performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $procedure = array();

    /**
     * Who read study and interpreted the images.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $interpreter = null;

    /**
     * Institution-generated description or classification of the Study (component) performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Each study has one or more series of image instances.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public $series = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy';

    /**
     * Date and Time the study took place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Date and Time the study took place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Who the images are of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who the images are of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Formal identifier for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Formal identifier for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Accession Number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccessionNo()
    {
        return $this->accessionNo;
    }

    /**
     * Accession Number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $accessionNo
     * @return $this
     */
    public function setAccessionNo($accessionNo)
    {
        $this->accessionNo = $accessionNo;
        return $this;
    }

    /**
     * Other identifiers for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Other identifiers for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A list of the diagnostic orders that resulted in this imaging study being performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * A list of the diagnostic orders that resulted in this imaging study being performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $order
     * @return $this
     */
    public function addOrder($order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRImagingModality[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRImagingModality $modality
     * @return $this
     */
    public function addModality($modality)
    {
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * The requesting/referring physician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * The requesting/referring physician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $referrer
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Availability of study (online, offline or nearline).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of study (online, offline or nearline).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * WADO-RS URI where Study is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * WADO-RS URI where Study is available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Number of Series in Study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * Number of Series in Study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $numberOfSeries
     * @return $this
     */
    public function setNumberOfSeries($numberOfSeries)
    {
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Number of SOP Instances in Study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Diagnoses etc provided with request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getClinicalInformation()
    {
        return $this->clinicalInformation;
    }

    /**
     * Diagnoses etc provided with request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $clinicalInformation
     * @return $this
     */
    public function setClinicalInformation($clinicalInformation)
    {
        $this->clinicalInformation = $clinicalInformation;
        return $this;
    }

    /**
     * Type of procedure performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Type of procedure performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $procedure
     * @return $this
     */
    public function addProcedure($procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * Who read study and interpreted the images.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Who read study and interpreted the images.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $interpreter
     * @return $this
     */
    public function setInterpreter($interpreter)
    {
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Institution-generated description or classification of the Study (component) performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Institution-generated description or classification of the Study (component) performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Each study has one or more series of image instances.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Each study has one or more series of image instances.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries $series
     * @return $this
     */
    public function addSeries($series)
    {
        $this->series[] = $series;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->dateTime) $json['dateTime'] = $this->dateTime;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->uid) $json['uid'] = $this->uid;
        if (null !== $this->accessionNo) $json['accessionNo'] = $this->accessionNo;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->order)) {
            $json['order'] = [];
            foreach($this->order as $order) {
                $json['order'][] = $order;
            }
        }
        if (0 < count($this->modality)) {
            $json['modality'] = [];
            foreach($this->modality as $modality) {
                $json['modality'][] = $modality;
            }
        }
        if (null !== $this->referrer) $json['referrer'] = $this->referrer;
        if (null !== $this->availability) $json['availability'] = $this->availability;
        if (null !== $this->url) $json['url'] = $this->url;
        if (null !== $this->numberOfSeries) $json['numberOfSeries'] = $this->numberOfSeries;
        if (null !== $this->numberOfInstances) $json['numberOfInstances'] = $this->numberOfInstances;
        if (null !== $this->clinicalInformation) $json['clinicalInformation'] = $this->clinicalInformation;
        if (0 < count($this->procedure)) {
            $json['procedure'] = [];
            foreach($this->procedure as $procedure) {
                $json['procedure'][] = $procedure;
            }
        }
        if (null !== $this->interpreter) $json['interpreter'] = $this->interpreter;
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->series)) {
            $json['series'] = [];
            foreach($this->series as $series) {
                $json['series'][] = $series;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudy xmlns="http://hl7.org/fhir"></ImagingStudy>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->accessionNo) $this->accessionNo->xmlSerialize(true, $sxe->addChild('accessionNo'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->order)) {
            foreach($this->order as $order) {
                $order->xmlSerialize(true, $sxe->addChild('order'));
            }
        }
        if (0 < count($this->modality)) {
            foreach($this->modality as $modality) {
                $modality->xmlSerialize(true, $sxe->addChild('modality'));
            }
        }
        if (null !== $this->referrer) $this->referrer->xmlSerialize(true, $sxe->addChild('referrer'));
        if (null !== $this->availability) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->numberOfSeries) $this->numberOfSeries->xmlSerialize(true, $sxe->addChild('numberOfSeries'));
        if (null !== $this->numberOfInstances) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (null !== $this->clinicalInformation) $this->clinicalInformation->xmlSerialize(true, $sxe->addChild('clinicalInformation'));
        if (0 < count($this->procedure)) {
            foreach($this->procedure as $procedure) {
                $procedure->xmlSerialize(true, $sxe->addChild('procedure'));
            }
        }
        if (null !== $this->interpreter) $this->interpreter->xmlSerialize(true, $sxe->addChild('interpreter'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->series)) {
            foreach($this->series as $series) {
                $series->xmlSerialize(true, $sxe->addChild('series'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}