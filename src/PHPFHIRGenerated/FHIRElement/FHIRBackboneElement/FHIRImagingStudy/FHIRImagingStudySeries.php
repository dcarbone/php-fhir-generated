<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 *
 * Class FHIRImagingStudySeries
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy
 */
class FHIRImagingStudySeries extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImagingStudy.Series';

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * A description of the series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * Formal identifier for this series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance
     */
    public $instance = null;

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $laterality = null;

    /**
     * The modality of this series sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * The numeric identifier of this series in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Indicates who or what performed the series and how they were involved.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer
     */
    public $performer = null;

    /**
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The date and time the series was started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * FHIRImagingStudySeries Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instance'])) {
                $this->setInstance($data['instance']);
            }
            if (isset($data['laterality'])) {
                $this->setLaterality($data['laterality']);
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
            if (isset($data['numberOfInstances'])) {
                $this->setNumberOfInstances($data['numberOfInstances']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['specimen'])) {
                $this->setSpecimen($data['specimen']);
            }
            if (isset($data['started'])) {
                $this->setStarted($data['started']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setBodySite(FHIRCoding $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The anatomic structures examined. See DICOM Part 16 Annex L (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html) for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of body part imaged; if so, it shall be consistent with any content of ImagingStudy.series.laterality.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * A description of the series.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudySeries::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A description of the series.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEndpoint(FHIRReference $endpoint = null)
    {
        if (null === $endpoint) {
            return $this; 
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * The network service providing access (e.g., query, view, or retrieval) for this series. See implementation notes for information about using DICOM endpoints. A series-level endpoint, if present, has precedence over a study-level endpoint with the same Endpoint.connectionType.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Formal identifier for this series.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Formal identifier for this series.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance
     * @return $this
     */
    public function setInstance(FHIRImagingStudyInstance $instance = null)
    {
        if (null === $instance) {
            return $this; 
        }
        $this->instance = $instance;
        return $this;
    }

    /**
     * A single SOP instance within the series, e.g. an image, or presentation state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance
     */
    public function getInstance()
    {
        return $this->instance;
    }


    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setLaterality(FHIRCoding $laterality = null)
    {
        if (null === $laterality) {
            return $this; 
        }
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the left knee, both lungs, or unpaired abdomen. If present, shall be consistent with any laterality information indicated in ImagingStudy.series.bodySite.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getLaterality()
    {
        return $this->laterality;
    }


    /**
     * The modality of this series sequence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setModality(FHIRCoding $modality = null)
    {
        if (null === $modality) {
            return $this; 
        }
        $this->modality = $modality;
        return $this;
    }

    /**
     * The modality of this series sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getModality()
    {
        return $this->modality;
    }


    /**
     * The numeric identifier of this series in the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setNumber($number)
    {
        if (null === $number) {
            return $this; 
        }
        if (is_scalar($number)) {
            $number = new FHIRUnsignedInt($number);
        }
        if (!($number instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudySeries::setNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($number)
            ));
        }
        $this->number = $number;
        return $this;
    }

    /**
     * The numeric identifier of this series in the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber()
    {
        return $this->number;
    }


    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setNumberOfInstances($numberOfInstances)
    {
        if (null === $numberOfInstances) {
            return $this; 
        }
        if (is_scalar($numberOfInstances)) {
            $numberOfInstances = new FHIRUnsignedInt($numberOfInstances);
        }
        if (!($numberOfInstances instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudySeries::setNumberOfInstances - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($numberOfInstances)
            ));
        }
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Number of SOP Instances in the Study. The value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }


    /**
     * Indicates who or what performed the series and how they were involved.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer
     * @return $this
     */
    public function setPerformer(FHIRImagingStudyPerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who or what performed the series and how they were involved.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSpecimen(FHIRReference $specimen = null)
    {
        if (null === $specimen) {
            return $this; 
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }


    /**
     * The date and time the series was started.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setStarted($started)
    {
        if (null === $started) {
            return $this; 
        }
        if (is_scalar($started)) {
            $started = new FHIRDateTime($started);
        }
        if (!($started instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudySeries::setStarted - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($started)
            ));
        }
        $this->started = $started;
        return $this;
    }

    /**
     * The date and time the series was started.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstance())) {
            $a['instance'] = $v;
        }
        if (null !== ($v = $this->getLaterality())) {
            $a['laterality'] = $v;
        }
        if (null !== ($v = $this->getModality())) {
            $a['modality'] = $v;
        }
        if (null !== ($v = $this->getNumber())) {
            $a['number'] = $v;
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $a['numberOfInstances'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a['specimen'] = $v;
        }
        if (null !== ($v = $this->getStarted())) {
            $a['started'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImagingStudySeries xmlns="http://hl7.org/fhir"></ImagingStudySeries>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}