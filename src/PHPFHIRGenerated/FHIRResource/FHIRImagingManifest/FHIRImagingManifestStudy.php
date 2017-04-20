<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImagingManifest;

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
 * A text description of the DICOM SOP instances selected in the ImagingManifest; or the reason for, or significance of, the selection.
 */
class FHIRImagingManifestStudy extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Study instance UID of the SOP instances in the selection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * Reference to the Imaging Study in FHIR form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $imagingStudy = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $endpoint = array();

    /**
     * Series identity and locating information of the DICOM SOP instances in the selection.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingManifest\FHIRImagingManifestSeries[]
     */
    public $series = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingManifest.Study';

    /**
     * Study instance UID of the SOP instances in the selection.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Study instance UID of the SOP instances in the selection.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Reference to the Imaging Study in FHIR form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * Reference to the Imaging Study in FHIR form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $imagingStudy
     * @return $this
     */
    public function setImagingStudy($imagingStudy)
    {
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * Series identity and locating information of the DICOM SOP instances in the selection.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingManifest\FHIRImagingManifestSeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Series identity and locating information of the DICOM SOP instances in the selection.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingManifest\FHIRImagingManifestSeries $series
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
        if (null !== $this->uid) $json['uid'] = json_encode($this->uid);
        if (null !== $this->imagingStudy) $json['imagingStudy'] = json_encode($this->imagingStudy);
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                $json['endpoint'][] = json_encode($endpoint);
            }
        }
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingManifestStudy xmlns="http://hl7.org/fhir"></ImagingManifestStudy>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->imagingStudy) $this->imagingStudy->xmlSerialize(true, $sxe->addChild('imagingStudy'));
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if (0 < count($this->series)) {
            foreach($this->series as $series) {
                $series->xmlSerialize(true, $sxe->addChild('series'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}