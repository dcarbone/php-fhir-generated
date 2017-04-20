<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances).  The referenced SOP Instances (images or other content) are for a single patient, and may be from one or more studies. The referenced SOP Instances have been selected for a purpose, such as quality assurance, conference, or consult. Reflecting that range of purposes, typical ImagingExcerpt resources may include all SOP Instances in a study (perhaps for sharing through a Health Information Exchange); key images from multiple studies (for reference by a referring or treating physician); a multi-frame ultrasound instance ("cine" video clip) and a set of measurements taken from that instance (for inclusion in a teaching file); and so on.
 */
class FHIRImagingExcerptInstance extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * SOP class UID of the selected instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $sopClass = null;

    /**
     * SOP Instance UID of the selected instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * Methods of accessing using DICOM web technologies.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptDicom2[]
     */
    public $dicom = array();

    /**
     * The specific frame reference within a multi-frame object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt[]
     */
    public $frameNumbers = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingExcerpt.Instance';

    /**
     * SOP class UID of the selected instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getSopClass()
    {
        return $this->sopClass;
    }

    /**
     * SOP class UID of the selected instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $sopClass
     * @return $this
     */
    public function setSopClass($sopClass)
    {
        $this->sopClass = $sopClass;
        return $this;
    }

    /**
     * SOP Instance UID of the selected instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * SOP Instance UID of the selected instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Methods of accessing using DICOM web technologies.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptDicom2[]
     */
    public function getDicom()
    {
        return $this->dicom;
    }

    /**
     * Methods of accessing using DICOM web technologies.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingExcerpt\FHIRImagingExcerptDicom2 $dicom
     * @return $this
     */
    public function addDicom($dicom)
    {
        $this->dicom[] = $dicom;
        return $this;
    }

    /**
     * The specific frame reference within a multi-frame object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt[]
     */
    public function getFrameNumbers()
    {
        return $this->frameNumbers;
    }

    /**
     * The specific frame reference within a multi-frame object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $frameNumbers
     * @return $this
     */
    public function addFrameNumbers($frameNumbers)
    {
        $this->frameNumbers[] = $frameNumbers;
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
        if (null !== $this->sopClass) $json['sopClass'] = json_encode($this->sopClass);
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (0 < count($this->dicom)) {
            $json['dicom'] = [];
            foreach($this->dicom as $dicom) {
                $json['dicom'][] = json_encode($dicom);
            }
        }
        if (0 < count($this->frameNumbers)) {
            $json['frameNumbers'] = [];
            foreach($this->frameNumbers as $frameNumbers) {
                $json['frameNumbers'][] = json_encode($frameNumbers);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingExcerptInstance xmlns="http://hl7.org/fhir"></ImagingExcerptInstance>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sopClass) $this->sopClass->xmlSerialize(true, $sxe->addChild('sopClass'));
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (0 < count($this->dicom)) {
            foreach($this->dicom as $dicom) {
                $dicom->xmlSerialize(true, $sxe->addChild('dicom'));
            }
        }
        if (0 < count($this->frameNumbers)) {
            foreach($this->frameNumbers as $frameNumbers) {
                $frameNumbers->xmlSerialize(true, $sxe->addChild('frameNumbers'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}