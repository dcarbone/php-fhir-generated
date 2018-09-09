<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRImagingStudyStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImagingStudy
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRImagingStudy extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImagingStudy';

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * The encounter or episode at which the request is initiated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * DICOM Study Instance UID, and Accession Number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Who read the study and interpreted the images or other content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $interpreter = null;

    /**
     * The principal physical location where the ImagingStudy was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfSeries = null;

    /**
     * The code for the performed procedure type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $procedureCode = null;

    /**
     * A reference to the performed Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $procedureReference = null;

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this Study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The requesting/referring physician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referrer = null;

    /**
     * Each study has one or more series of images or other content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public $series = null;

    /**
     * Date and time the study started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * The current state of the ImagingStudy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImagingStudyStatus
     */
    public $status = null;

    /**
     * The subject, typically a patient, of the imaging study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRImagingStudy Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
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
            if (isset($data['interpreter'])) {
                $this->setInterpreter($data['interpreter']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['numberOfInstances'])) {
                $this->setNumberOfInstances($data['numberOfInstances']);
            }
            if (isset($data['numberOfSeries'])) {
                $this->setNumberOfSeries($data['numberOfSeries']);
            }
            if (isset($data['procedureCode'])) {
                $this->setProcedureCode($data['procedureCode']);
            }
            if (isset($data['procedureReference'])) {
                $this->setProcedureReference($data['procedureReference']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['referrer'])) {
                $this->setReferrer($data['referrer']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['started'])) {
                $this->setStarted($data['started']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImagingStudy::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A list of the diagnostic requests that resulted in this imaging study being performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * The encounter or episode at which the request is initiated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode at which the request is initiated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
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
                'FHIRImagingStudy::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * The Imaging Manager description of the study. Institution-generated description or classification of the Study (component) performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
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
     * The network service providing access (e.g., query, view, or retrieval) for the study. See implementation notes for information about using DICOM endpoints. A study-level endpoint applies to each series in the study, unless overridden by a series-level endpoint with the same Endpoint.connectionType.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * DICOM Study Instance UID, and Accession Number.
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
     * DICOM Study Instance UID, and Accession Number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Who read the study and interpreted the images or other content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInterpreter(FHIRReference $interpreter = null)
    {
        if (null === $interpreter) {
            return $this; 
        }
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Who read the study and interpreted the images or other content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }


    /**
     * The principal physical location where the ImagingStudy was performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The principal physical location where the ImagingStudy was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
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
     * A list of all the series.modality values that are actual acquisition modalities, i.e. those in the DICOM Context Group 29 (value set OID 1.2.840.10008.6.1.19).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getModality()
    {
        return $this->modality;
    }


    /**
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Per the recommended DICOM mapping, this element is derived from the Study Description attribute (0008,1030). Observations or findings about the imaging study should be recorded in another resource, e.g. Observation, and not in this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
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
                'FHIRImagingStudy::setNumberOfInstances - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($numberOfInstances)
            ));
        }
        $this->numberOfInstances = $numberOfInstances;
        return $this;
    }

    /**
     * Number of SOP Instances in Study. This value given may be larger than the number of instance elements this resource contains due to resource availability, security, or other factors. This element should be present if any instance elements are present.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }


    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setNumberOfSeries($numberOfSeries)
    {
        if (null === $numberOfSeries) {
            return $this; 
        }
        if (is_scalar($numberOfSeries)) {
            $numberOfSeries = new FHIRUnsignedInt($numberOfSeries);
        }
        if (!($numberOfSeries instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudy::setNumberOfSeries - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($numberOfSeries)
            ));
        }
        $this->numberOfSeries = $numberOfSeries;
        return $this;
    }

    /**
     * Number of Series in the Study. This value given may be larger than the number of series elements this Resource contains due to resource availability, security, or other factors. This element should be present if any series elements are present.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }


    /**
     * The code for the performed procedure type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProcedureCode(FHIRCodeableConcept $procedureCode = null)
    {
        if (null === $procedureCode) {
            return $this; 
        }
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * The code for the performed procedure type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }


    /**
     * A reference to the performed Procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProcedureReference(FHIRReference $procedureReference = null)
    {
        if (null === $procedureReference) {
            return $this; 
        }
        $this->procedureReference = $procedureReference;
        return $this;
    }

    /**
     * A reference to the performed Procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProcedureReference()
    {
        return $this->procedureReference;
    }


    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Description of clinical condition indicating why the ImagingStudy was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource whose existence justifies this Study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies this Study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The requesting/referring physician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferrer(FHIRReference $referrer = null)
    {
        if (null === $referrer) {
            return $this; 
        }
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * The requesting/referring physician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferrer()
    {
        return $this->referrer;
    }


    /**
     * Each study has one or more series of images or other content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     * @return $this
     */
    public function setSeries(FHIRImagingStudySeries $series = null)
    {
        if (null === $series) {
            return $this; 
        }
        $this->series = $series;
        return $this;
    }

    /**
     * Each study has one or more series of images or other content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function getSeries()
    {
        return $this->series;
    }


    /**
     * Date and time the study started.
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
                'FHIRImagingStudy::setStarted - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($started)
            ));
        }
        $this->started = $started;
        return $this;
    }

    /**
     * Date and time the study started.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }


    /**
     * The current state of the ImagingStudy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRImagingStudyStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRImagingStudyStatus($status);
        }
        if (!($status instanceof FHIRImagingStudyStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudy::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRImagingStudyStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the ImagingStudy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRImagingStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The subject, typically a patient, of the imaging study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The subject, typically a patient, of the imaging study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
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
        if (null !== ($v = $this->getInterpreter())) {
            $a['interpreter'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getModality())) {
            $a['modality'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $a['numberOfInstances'] = $v;
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            $a['numberOfSeries'] = $v;
        }
        if (null !== ($v = $this->getProcedureCode())) {
            $a['procedureCode'] = $v;
        }
        if (null !== ($v = $this->getProcedureReference())) {
            $a['procedureReference'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getReferrer())) {
            $a['referrer'] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a['series'] = $v;
        }
        if (null !== ($v = $this->getStarted())) {
            $a['started'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImagingStudy xmlns="http://hl7.org/fhir"></ImagingStudy>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}