<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImagingStudy extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Date and Time the study started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * The patient imaged in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Formal identifier for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * Accession Number is an identifier related to some aspect of imaging workflow and data management. Usage may vary across different institutions.  See for instance [IHE Radiology Technical Framework Volume 1 Appendix A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $accession = null;

    /**
     * Other identifiers for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A list of the diagnostic orders that resulted in this imaging study being performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $order = array();

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $modalityList = array();

    /**
     * The requesting/referring physician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referrer = null;

    /**
     * Availability of study (online, offline or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * WADO-RS resource where Study is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Number of Series in Study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfSeries = null;

    /**
     * Number of SOP Instances in Study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Type of procedure performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $procedure = array();

    /**
     * Who read the study and interpreted the images or other content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $interpreter = null;

    /**
     * Institution-generated description or classification of the Study performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Each study has one or more series of images or other content.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public $series = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy';

    /**
     * Date and Time the study started.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Date and Time the study started.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $started
     * @return $this
     */
    public function setStarted($started)
    {
        $this->started = $started;
        return $this;
    }

    /**
     * The patient imaged in the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient imaged in the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
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
     * Accession Number is an identifier related to some aspect of imaging workflow and data management. Usage may vary across different institutions.  See for instance [IHE Radiology Technical Framework Volume 1 Appendix A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccession()
    {
        return $this->accession;
    }

    /**
     * Accession Number is an identifier related to some aspect of imaging workflow and data management. Usage may vary across different institutions.  See for instance [IHE Radiology Technical Framework Volume 1 Appendix A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $accession
     * @return $this
     */
    public function setAccession($accession)
    {
        $this->accession = $accession;
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * A list of the diagnostic orders that resulted in this imaging study being performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $order
     * @return $this
     */
    public function addOrder($order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getModalityList()
    {
        return $this->modalityList;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $modalityList
     * @return $this
     */
    public function addModalityList($modalityList)
    {
        $this->modalityList[] = $modalityList;
        return $this;
    }

    /**
     * The requesting/referring physician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * The requesting/referring physician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referrer
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
     * WADO-RS resource where Study is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * WADO-RS resource where Study is available.
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * Number of Series in Study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfSeries
     * @return $this
     */
    public function setNumberOfSeries($numberOfSeries)
    {
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Number of SOP Instances in Study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Type of procedure performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Type of procedure performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $procedure
     * @return $this
     */
    public function addProcedure($procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * Who read the study and interpreted the images or other content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Who read the study and interpreted the images or other content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $interpreter
     * @return $this
     */
    public function setInterpreter($interpreter)
    {
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Institution-generated description or classification of the Study performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Institution-generated description or classification of the Study performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Each study has one or more series of images or other content.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Each study has one or more series of images or other content.
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
        if (null !== $this->started) $json['started'] = json_encode($this->started);
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (null !== $this->accession) $json['accession'] = json_encode($this->accession);
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (0 < count($this->order)) {
            $json['order'] = [];
            foreach($this->order as $order) {
                $json['order'][] = json_encode($order);
            }
        }
        if (0 < count($this->modalityList)) {
            $json['modalityList'] = [];
            foreach($this->modalityList as $modalityList) {
                $json['modalityList'][] = json_encode($modalityList);
            }
        }
        if (null !== $this->referrer) $json['referrer'] = json_encode($this->referrer);
        if (null !== $this->availability) $json['availability'] = json_encode($this->availability);
        if (null !== $this->url) $json['url'] = json_encode($this->url);
        if (null !== $this->numberOfSeries) $json['numberOfSeries'] = json_encode($this->numberOfSeries);
        if (null !== $this->numberOfInstances) $json['numberOfInstances'] = json_encode($this->numberOfInstances);
        if (0 < count($this->procedure)) {
            $json['procedure'] = [];
            foreach($this->procedure as $procedure) {
                $json['procedure'][] = json_encode($procedure);
            }
        }
        if (null !== $this->interpreter) $json['interpreter'] = json_encode($this->interpreter);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->series)) {
            $json['series'] = [];
            foreach($this->series as $series) {
                $json['series'][] = json_encode($series);
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
        if (null !== $this->started) $this->started->xmlSerialize(true, $sxe->addChild('started'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->accession) $this->accession->xmlSerialize(true, $sxe->addChild('accession'));
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
        if (0 < count($this->modalityList)) {
            foreach($this->modalityList as $modalityList) {
                $modalityList->xmlSerialize(true, $sxe->addChild('modalityList'));
            }
        }
        if (null !== $this->referrer) $this->referrer->xmlSerialize(true, $sxe->addChild('referrer'));
        if (null !== $this->availability) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->numberOfSeries) $this->numberOfSeries->xmlSerialize(true, $sxe->addChild('numberOfSeries'));
        if (null !== $this->numberOfInstances) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
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