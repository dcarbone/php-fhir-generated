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
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImagingStudy extends FHIRDomainResource implements \JsonSerializable
{
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
    public $identifier = [];

    /**
     * Availability of study (online, offline, or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $modalityList = [];

    /**
     * The subject, typically a patient, of the imaging study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode at which the request is initiated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Date and time the study started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * The requesting/referring physician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referrer = null;

    /**
     * Who read the study and interpreted the images or other content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $interpreter = [];

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $endpoint = [];

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfSeries = null;

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * A reference to the performed Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $procedureReference = [];

    /**
     * The code for the performed procedure type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $procedureCode = [];

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * Institution-generated description or classification of the Study performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Each study has one or more series of images or other content.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public $series = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy';

    /**
     * Formal identifier for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Formal identifier for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid) {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Accession Number is an identifier related to some aspect of imaging workflow and data management. Usage may vary across different institutions.  See for instance [IHE Radiology Technical Framework Volume 1 Appendix A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccession() {
        return $this->accession;
    }

    /**
     * Accession Number is an identifier related to some aspect of imaging workflow and data management. Usage may vary across different institutions.  See for instance [IHE Radiology Technical Framework Volume 1 Appendix A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $accession
     * @return $this
     */
    public function setAccession($accession) {
        $this->accession = $accession;
        return $this;
    }

    /**
     * Other identifiers for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Other identifiers for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Availability of study (online, offline, or nearline).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * Availability of study (online, offline, or nearline).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability $availability
     * @return $this
     */
    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getModalityList() {
        return $this->modalityList;
    }

    /**
     * A list of all the Series.ImageModality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $modalityList
     * @return $this
     */
    public function addModalityList($modalityList) {
        $this->modalityList[] = $modalityList;
        return $this;
    }

    /**
     * The subject, typically a patient, of the imaging study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The subject, typically a patient, of the imaging study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode at which the request is initiated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter or episode at which the request is initiated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * Date and time the study started.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted() {
        return $this->started;
    }

    /**
     * Date and time the study started.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $started
     * @return $this
     */
    public function setStarted($started) {
        $this->started = $started;
        return $this;
    }

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * The requesting/referring physician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferrer() {
        return $this->referrer;
    }

    /**
     * The requesting/referring physician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referrer
     * @return $this
     */
    public function setReferrer($referrer) {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Who read the study and interpreted the images or other content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getInterpreter() {
        return $this->interpreter;
    }

    /**
     * Who read the study and interpreted the images or other content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $interpreter
     * @return $this
     */
    public function addInterpreter($interpreter) {
        $this->interpreter[] = $interpreter;
        return $this;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint) {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfSeries() {
        return $this->numberOfSeries;
    }

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfSeries
     * @return $this
     */
    public function setNumberOfSeries($numberOfSeries) {
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances() {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances) {
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * A reference to the performed Procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProcedureReference() {
        return $this->procedureReference;
    }

    /**
     * A reference to the performed Procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $procedureReference
     * @return $this
     */
    public function addProcedureReference($procedureReference) {
        $this->procedureReference[] = $procedureReference;
        return $this;
    }

    /**
     * The code for the performed procedure type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProcedureCode() {
        return $this->procedureCode;
    }

    /**
     * The code for the performed procedure type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $procedureCode
     * @return $this
     */
    public function addProcedureCode($procedureCode) {
        $this->procedureCode[] = $procedureCode;
        return $this;
    }

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Institution-generated description or classification of the Study performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Institution-generated description or classification of the Study performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Each study has one or more series of images or other content.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries() {
        return $this->series;
    }

    /**
     * Each study has one or more series of images or other content.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudySeries $series
     * @return $this
     */
    public function addSeries($series) {
        $this->series[] = $series;
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
            if (isset($data['uid'])) {
                $this->setUid($data['uid']);
            }
            if (isset($data['accession'])) {
                $this->setAccession($data['accession']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['availability'])) {
                $this->setAvailability($data['availability']);
            }
            if (isset($data['modalityList'])) {
                if (is_array($data['modalityList'])) {
                    foreach($data['modalityList'] as $d) {
                        $this->addModalityList($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"modalityList" must be array of objects or null, '.gettype($data['modalityList']).' seen.');
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['started'])) {
                $this->setStarted($data['started']);
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['referrer'])) {
                $this->setReferrer($data['referrer']);
            }
            if (isset($data['interpreter'])) {
                if (is_array($data['interpreter'])) {
                    foreach($data['interpreter'] as $d) {
                        $this->addInterpreter($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"interpreter" must be array of objects or null, '.gettype($data['interpreter']).' seen.');
                }
            }
            if (isset($data['endpoint'])) {
                if (is_array($data['endpoint'])) {
                    foreach($data['endpoint'] as $d) {
                        $this->addEndpoint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endpoint" must be array of objects or null, '.gettype($data['endpoint']).' seen.');
                }
            }
            if (isset($data['numberOfSeries'])) {
                $this->setNumberOfSeries($data['numberOfSeries']);
            }
            if (isset($data['numberOfInstances'])) {
                $this->setNumberOfInstances($data['numberOfInstances']);
            }
            if (isset($data['procedureReference'])) {
                if (is_array($data['procedureReference'])) {
                    foreach($data['procedureReference'] as $d) {
                        $this->addProcedureReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"procedureReference" must be array of objects or null, '.gettype($data['procedureReference']).' seen.');
                }
            }
            if (isset($data['procedureCode'])) {
                if (is_array($data['procedureCode'])) {
                    foreach($data['procedureCode'] as $d) {
                        $this->addProcedureCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"procedureCode" must be array of objects or null, '.gettype($data['procedureCode']).' seen.');
                }
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['series'])) {
                if (is_array($data['series'])) {
                    foreach($data['series'] as $d) {
                        $this->addSeries($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"series" must be array of objects or null, '.gettype($data['series']).' seen.');
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
        if (isset($this->uid)) $json['uid'] = $this->uid;
        if (isset($this->accession)) $json['accession'] = $this->accession;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->availability)) $json['availability'] = $this->availability;
        if (0 < count($this->modalityList)) {
            $json['modalityList'] = [];
            foreach($this->modalityList as $modalityList) {
                if (null !== $modalityList) $json['modalityList'][] = $modalityList;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->started)) $json['started'] = $this->started;
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (isset($this->referrer)) $json['referrer'] = $this->referrer;
        if (0 < count($this->interpreter)) {
            $json['interpreter'] = [];
            foreach($this->interpreter as $interpreter) {
                if (null !== $interpreter) $json['interpreter'][] = $interpreter;
            }
        }
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                if (null !== $endpoint) $json['endpoint'][] = $endpoint;
            }
        }
        if (isset($this->numberOfSeries)) $json['numberOfSeries'] = $this->numberOfSeries;
        if (isset($this->numberOfInstances)) $json['numberOfInstances'] = $this->numberOfInstances;
        if (0 < count($this->procedureReference)) {
            $json['procedureReference'] = [];
            foreach($this->procedureReference as $procedureReference) {
                if (null !== $procedureReference) $json['procedureReference'][] = $procedureReference;
            }
        }
        if (0 < count($this->procedureCode)) {
            $json['procedureCode'] = [];
            foreach($this->procedureCode as $procedureCode) {
                if (null !== $procedureCode) $json['procedureCode'][] = $procedureCode;
            }
        }
        if (isset($this->reason)) $json['reason'] = $this->reason;
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->series)) {
            $json['series'] = [];
            foreach($this->series as $series) {
                if (null !== $series) $json['series'][] = $series;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudy xmlns="http://hl7.org/fhir"></ImagingStudy>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->uid)) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (isset($this->accession)) $this->accession->xmlSerialize(true, $sxe->addChild('accession'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->availability)) $this->availability->xmlSerialize(true, $sxe->addChild('availability'));
        if (0 < count($this->modalityList)) {
            foreach($this->modalityList as $modalityList) {
                $modalityList->xmlSerialize(true, $sxe->addChild('modalityList'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->started)) $this->started->xmlSerialize(true, $sxe->addChild('started'));
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (isset($this->referrer)) $this->referrer->xmlSerialize(true, $sxe->addChild('referrer'));
        if (0 < count($this->interpreter)) {
            foreach($this->interpreter as $interpreter) {
                $interpreter->xmlSerialize(true, $sxe->addChild('interpreter'));
            }
        }
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if (isset($this->numberOfSeries)) $this->numberOfSeries->xmlSerialize(true, $sxe->addChild('numberOfSeries'));
        if (isset($this->numberOfInstances)) $this->numberOfInstances->xmlSerialize(true, $sxe->addChild('numberOfInstances'));
        if (0 < count($this->procedureReference)) {
            foreach($this->procedureReference as $procedureReference) {
                $procedureReference->xmlSerialize(true, $sxe->addChild('procedureReference'));
            }
        }
        if (0 < count($this->procedureCode)) {
            foreach($this->procedureCode as $procedureCode) {
                $procedureCode->xmlSerialize(true, $sxe->addChild('procedureCode'));
            }
        }
        if (isset($this->reason)) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->series)) {
            foreach($this->series as $series) {
                $series->xmlSerialize(true, $sxe->addChild('series'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}