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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances).  The referenced SOP Instances (images or other content) are for a single patient, and may be from one or more studies. The referenced SOP Instances have been selected for a purpose, such as quality assurance, conference, or consult. Reflecting that range of purposes, typical ImagingExcerpt resources may include all SOP Instances in a study (perhaps for sharing through a Health Information Exchange); key images from multiple studies (for reference by a referring or treating physician); a multi-frame ultrasound instance ("cine" video clip) and a set of measurements taken from that instance (for inclusion in a teaching file); and so on.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImagingExcerpt extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier of the DICOM Key Object Selection (KOS) representation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * A patient resource reference which is the patient subject of all DICOM SOP Instances in this ImagingExcerpt.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Date and time when the selection of the referenced instances were made. It is (typically) different from the creation date of the selection resource, and from dates associated with the referenced instances (e.g. capture time of the referenced image).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoringTime = null;

    /**
     * Author of ImagingExcerpt. It can be a human author or a device which made the decision of the SOP instances selected. For example, a radiologist selected a set of imaging SOP instances to attach in a diagnostic report, and a CAD application may author a selection to describe SOP instances it used to generate a detection conclusion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The reason for, or significance of, the selection of objects referenced in the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $title = null;

    /**
     * Text description of the DICOM SOP instances selected in the ImagingExcerpt. This should be aligned with the content of the title element, and can provide further explanation of the SOP instances in the selection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Study identity and locating information of the DICOM SOP instances in the selection.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptStudy[]
     */
    public $study = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingExcerpt';

    /**
     * Unique identifier of the DICOM Key Object Selection (KOS) representation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Unique identifier of the DICOM Key Object Selection (KOS) representation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * A patient resource reference which is the patient subject of all DICOM SOP Instances in this ImagingExcerpt.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A patient resource reference which is the patient subject of all DICOM SOP Instances in this ImagingExcerpt.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Date and time when the selection of the referenced instances were made. It is (typically) different from the creation date of the selection resource, and from dates associated with the referenced instances (e.g. capture time of the referenced image).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoringTime()
    {
        return $this->authoringTime;
    }

    /**
     * Date and time when the selection of the referenced instances were made. It is (typically) different from the creation date of the selection resource, and from dates associated with the referenced instances (e.g. capture time of the referenced image).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $authoringTime
     * @return $this
     */
    public function setAuthoringTime($authoringTime)
    {
        $this->authoringTime = $authoringTime;
        return $this;
    }

    /**
     * Author of ImagingExcerpt. It can be a human author or a device which made the decision of the SOP instances selected. For example, a radiologist selected a set of imaging SOP instances to attach in a diagnostic report, and a CAD application may author a selection to describe SOP instances it used to generate a detection conclusion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Author of ImagingExcerpt. It can be a human author or a device which made the decision of the SOP instances selected. For example, a radiologist selected a set of imaging SOP instances to attach in a diagnostic report, and a CAD application may author a selection to describe SOP instances it used to generate a detection conclusion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * The reason for, or significance of, the selection of objects referenced in the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The reason for, or significance of, the selection of objects referenced in the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Text description of the DICOM SOP instances selected in the ImagingExcerpt. This should be aligned with the content of the title element, and can provide further explanation of the SOP instances in the selection.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Text description of the DICOM SOP instances selected in the ImagingExcerpt. This should be aligned with the content of the title element, and can provide further explanation of the SOP instances in the selection.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Study identity and locating information of the DICOM SOP instances in the selection.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptStudy[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Study identity and locating information of the DICOM SOP instances in the selection.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptStudy $study
     * @return $this
     */
    public function addStudy($study)
    {
        $this->study[] = $study;
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
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->authoringTime) $json['authoringTime'] = json_encode($this->authoringTime);
        if (null !== $this->author) $json['author'] = json_encode($this->author);
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->study)) {
            $json['study'] = [];
            foreach($this->study as $study) {
                $json['study'][] = json_encode($study);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingExcerpt xmlns="http://hl7.org/fhir"></ImagingExcerpt>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->authoringTime) $this->authoringTime->xmlSerialize(true, $sxe->addChild('authoringTime'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->study)) {
            foreach($this->study as $study) {
                $study->xmlSerialize(true, $sxe->addChild('study'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}