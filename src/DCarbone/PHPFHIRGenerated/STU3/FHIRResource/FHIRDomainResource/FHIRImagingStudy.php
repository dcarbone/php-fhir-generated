<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstanceAvailability;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Representation of the content produced in a DICOM imaging study. A study
 * comprises a set of series, each of which includes a set of Service-Object Pair
 * Instances (SOP Instances - images or other data) acquired or produced in a
 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
 * ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImagingStudy
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRImagingStudy extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCESSION = 'accession';
    const FIELD_ACCESSION_EXT = '_accession';
    const FIELD_AVAILABILITY = 'availability';
    const FIELD_AVAILABILITY_EXT = '_availability';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CONTEXT = 'context';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INTERPRETER = 'interpreter';
    const FIELD_MODALITY_LIST = 'modalityList';
    const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
    const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
    const FIELD_NUMBER_OF_SERIES = 'numberOfSeries';
    const FIELD_NUMBER_OF_SERIES_EXT = '_numberOfSeries';
    const FIELD_PATIENT = 'patient';
    const FIELD_PROCEDURE_CODE = 'procedureCode';
    const FIELD_PROCEDURE_REFERENCE = 'procedureReference';
    const FIELD_REASON = 'reason';
    const FIELD_REFERRER = 'referrer';
    const FIELD_SERIES = 'series';
    const FIELD_STARTED = 'started';
    const FIELD_STARTED_EXT = '_started';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number is an identifier related to some aspect of imaging workflow and
     * data management. Usage may vary across different institutions. See for instance
     * [IHE Radiology Technical Framework Volume 1 Appendix
     * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $accession = null;

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline, or nearline).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstanceAvailability
     */
    protected $availability = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic requests that resulted in this imaging study being
     * performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode at which the request is initiated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $endpoint = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read the study and interpreted the images or other content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $interpreter = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected $modalityList = [];

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in Study. This value given may be larger than the number
     * of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $numberOfInstances = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of Series in the Study. This value given may be larger than the number of
     * series elements this Resource contains due to resource availability, security,
     * or other factors. This element should be present if any series elements are
     * present.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected $numberOfSeries = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient imaged in the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code for the performed procedure type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $procedureCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the performed Procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $procedureReference = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $reason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $referrer = null;

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Each study has one or more series of images or other content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    protected $series = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and time the study started.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $started = null;

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected $uid = null;

    /**
     * FHIRImagingStudy Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudy::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCESSION])) {
            $ext = (isset($data[self::FIELD_ACCESSION_EXT]) && is_array($data[self::FIELD_ACCESSION_EXT]))
                ? $data[self::FIELD_ACCESSION_EXT]
                : null;
            if ($data[self::FIELD_ACCESSION] instanceof FHIRIdentifier) {
                $this->setAccession($data[self::FIELD_ACCESSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACCESSION])) {
                $this->setAccession(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_ACCESSION]] + $ext));
            } else {
                $this->setAccession(new FHIRIdentifier($data[self::FIELD_ACCESSION]));
            }
        }
        if (isset($data[self::FIELD_AVAILABILITY])) {
            $ext = (isset($data[self::FIELD_AVAILABILITY_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXT]))
                ? $data[self::FIELD_AVAILABILITY_EXT]
                : null;
            if ($data[self::FIELD_AVAILABILITY] instanceof FHIRInstanceAvailability) {
                $this->setAvailability($data[self::FIELD_AVAILABILITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_AVAILABILITY])) {
                $this->setAvailability(new FHIRInstanceAvailability([FHIRInstanceAvailability::FIELD_VALUE => $data[self::FIELD_AVAILABILITY]] + $ext));
            } else {
                $this->setAvailability(new FHIRInstanceAvailability($data[self::FIELD_AVAILABILITY]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INTERPRETER])) {
            if (is_array($data[self::FIELD_INTERPRETER])) {
                foreach($data[self::FIELD_INTERPRETER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addInterpreter($v);
                    } else {
                        $this->addInterpreter(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INTERPRETER] instanceof FHIRReference) {
                $this->addInterpreter($data[self::FIELD_INTERPRETER]);
            } else {
                $this->addInterpreter(new FHIRReference($data[self::FIELD_INTERPRETER]));
            }
        }
        if (isset($data[self::FIELD_MODALITY_LIST])) {
            if (is_array($data[self::FIELD_MODALITY_LIST])) {
                foreach($data[self::FIELD_MODALITY_LIST] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addModalityList($v);
                    } else {
                        $this->addModalityList(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_MODALITY_LIST] instanceof FHIRCoding) {
                $this->addModalityList($data[self::FIELD_MODALITY_LIST]);
            } else {
                $this->addModalityList(new FHIRCoding($data[self::FIELD_MODALITY_LIST]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_INSTANCES])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]))
                ? $data[self::FIELD_NUMBER_OF_INSTANCES_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_INSTANCES] instanceof FHIRUnsignedInt) {
                $this->setNumberOfInstances($data[self::FIELD_NUMBER_OF_INSTANCES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_INSTANCES])) {
                $this->setNumberOfInstances(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_INSTANCES]] + $ext));
            } else {
                $this->setNumberOfInstances(new FHIRUnsignedInt($data[self::FIELD_NUMBER_OF_INSTANCES]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_SERIES])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_SERIES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_SERIES_EXT]))
                ? $data[self::FIELD_NUMBER_OF_SERIES_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_SERIES] instanceof FHIRUnsignedInt) {
                $this->setNumberOfSeries($data[self::FIELD_NUMBER_OF_SERIES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_SERIES])) {
                $this->setNumberOfSeries(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_SERIES]] + $ext));
            } else {
                $this->setNumberOfSeries(new FHIRUnsignedInt($data[self::FIELD_NUMBER_OF_SERIES]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE_CODE])) {
            if (is_array($data[self::FIELD_PROCEDURE_CODE])) {
                foreach($data[self::FIELD_PROCEDURE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProcedureCode($v);
                    } else {
                        $this->addProcedureCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PROCEDURE_CODE] instanceof FHIRCodeableConcept) {
                $this->addProcedureCode($data[self::FIELD_PROCEDURE_CODE]);
            } else {
                $this->addProcedureCode(new FHIRCodeableConcept($data[self::FIELD_PROCEDURE_CODE]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE_REFERENCE])) {
            if (is_array($data[self::FIELD_PROCEDURE_REFERENCE])) {
                foreach($data[self::FIELD_PROCEDURE_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addProcedureReference($v);
                    } else {
                        $this->addProcedureReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROCEDURE_REFERENCE] instanceof FHIRReference) {
                $this->addProcedureReference($data[self::FIELD_PROCEDURE_REFERENCE]);
            } else {
                $this->addProcedureReference(new FHIRReference($data[self::FIELD_PROCEDURE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->setReason($data[self::FIELD_REASON]);
            } else {
                $this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_REFERRER])) {
            if ($data[self::FIELD_REFERRER] instanceof FHIRReference) {
                $this->setReferrer($data[self::FIELD_REFERRER]);
            } else {
                $this->setReferrer(new FHIRReference($data[self::FIELD_REFERRER]));
            }
        }
        if (isset($data[self::FIELD_SERIES])) {
            if (is_array($data[self::FIELD_SERIES])) {
                foreach($data[self::FIELD_SERIES] as $v) {
                    if ($v instanceof FHIRImagingStudySeries) {
                        $this->addSeries($v);
                    } else {
                        $this->addSeries(new FHIRImagingStudySeries($v));
                    }
                }
            } else if ($data[self::FIELD_SERIES] instanceof FHIRImagingStudySeries) {
                $this->addSeries($data[self::FIELD_SERIES]);
            } else {
                $this->addSeries(new FHIRImagingStudySeries($data[self::FIELD_SERIES]));
            }
        }
        if (isset($data[self::FIELD_STARTED])) {
            $ext = (isset($data[self::FIELD_STARTED_EXT]) && is_array($data[self::FIELD_STARTED_EXT]))
                ? $data[self::FIELD_STARTED_EXT]
                : null;
            if ($data[self::FIELD_STARTED] instanceof FHIRDateTime) {
                $this->setStarted($data[self::FIELD_STARTED]);
            } elseif ($ext && is_scalar($data[self::FIELD_STARTED])) {
                $this->setStarted(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_STARTED]] + $ext));
            } else {
                $this->setStarted(new FHIRDateTime($data[self::FIELD_STARTED]));
            }
        }
        if (isset($data[self::FIELD_UID])) {
            $ext = (isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT]))
                ? $data[self::FIELD_UID_EXT]
                : null;
            if ($data[self::FIELD_UID] instanceof FHIROid) {
                $this->setUid($data[self::FIELD_UID]);
            } elseif ($ext && is_scalar($data[self::FIELD_UID])) {
                $this->setUid(new FHIROid([FHIROid::FIELD_VALUE => $data[self::FIELD_UID]] + $ext));
            } else {
                $this->setUid(new FHIROid($data[self::FIELD_UID]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImagingStudy{$xmlns}></ImagingStudy>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number is an identifier related to some aspect of imaging workflow and
     * data management. Usage may vary across different institutions. See for instance
     * [IHE Radiology Technical Framework Volume 1 Appendix
     * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getAccession()
    {
        return $this->accession;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number is an identifier related to some aspect of imaging workflow and
     * data management. Usage may vary across different institutions. See for instance
     * [IHE Radiology Technical Framework Volume 1 Appendix
     * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $accession
     * @return static
     */
    public function setAccession(FHIRIdentifier $accession = null)
    {
        $this->accession = $accession;
        return $this;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline, or nearline).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline, or nearline).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstanceAvailability $availability
     * @return static
     */
    public function setAvailability(FHIRInstanceAvailability $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic requests that resulted in this imaging study being
     * performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic requests that resulted in this imaging study being
     * performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic requests that resulted in this imaging study being
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode at which the request is initiated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode at which the request is initiated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $endpoint
     * @return static
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read the study and interpreted the images or other content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read the study and interpreted the images or other content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $interpreter
     * @return static
     */
    public function addInterpreter(FHIRReference $interpreter = null)
    {
        $this->interpreter[] = $interpreter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read the study and interpreted the images or other content.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $interpreter
     * @return static
     */
    public function setInterpreter(array $interpreter = [])
    {
        $this->interpreter = [];
        if ([] === $interpreter) {
            return $this;
        }
        foreach($interpreter as $v) {
            if ($v instanceof FHIRReference) {
                $this->addInterpreter($v);
            } else {
                $this->addInterpreter(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getModalityList()
    {
        return $this->modalityList;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $modalityList
     * @return static
     */
    public function addModalityList(FHIRCoding $modalityList = null)
    {
        $this->modalityList[] = $modalityList;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $modalityList
     * @return static
     */
    public function setModalityList(array $modalityList = [])
    {
        $this->modalityList = [];
        if ([] === $modalityList) {
            return $this;
        }
        foreach($modalityList as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addModalityList($v);
            } else {
                $this->addModalityList(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in Study. This value given may be larger than the number
     * of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in Study. This value given may be larger than the number
     * of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @return static
     */
    public function setNumberOfInstances($numberOfInstances = null)
    {
        if (null === $numberOfInstances) {
            $this->numberOfInstances = null;
            return $this;
        }
        if ($numberOfInstances instanceof FHIRUnsignedInt) {
            $this->numberOfInstances = $numberOfInstances;
            return $this;
        }
        $this->numberOfInstances = new FHIRUnsignedInt($numberOfInstances);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of Series in the Study. This value given may be larger than the number of
     * series elements this Resource contains due to resource availability, security,
     * or other factors. This element should be present if any series elements are
     * present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of Series in the Study. This value given may be larger than the number of
     * series elements this Resource contains due to resource availability, security,
     * or other factors. This element should be present if any series elements are
     * present.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $numberOfSeries
     * @return static
     */
    public function setNumberOfSeries($numberOfSeries = null)
    {
        if (null === $numberOfSeries) {
            $this->numberOfSeries = null;
            return $this;
        }
        if ($numberOfSeries instanceof FHIRUnsignedInt) {
            $this->numberOfSeries = $numberOfSeries;
            return $this;
        }
        $this->numberOfSeries = new FHIRUnsignedInt($numberOfSeries);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient imaged in the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient imaged in the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code for the performed procedure type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code for the performed procedure type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $procedureCode
     * @return static
     */
    public function addProcedureCode(FHIRCodeableConcept $procedureCode = null)
    {
        $this->procedureCode[] = $procedureCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code for the performed procedure type.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $procedureCode
     * @return static
     */
    public function setProcedureCode(array $procedureCode = [])
    {
        $this->procedureCode = [];
        if ([] === $procedureCode) {
            return $this;
        }
        foreach($procedureCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProcedureCode($v);
            } else {
                $this->addProcedureCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the performed Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getProcedureReference()
    {
        return $this->procedureReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the performed Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $procedureReference
     * @return static
     */
    public function addProcedureReference(FHIRReference $procedureReference = null)
    {
        $this->procedureReference[] = $procedureReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the performed Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $procedureReference
     * @return static
     */
    public function setProcedureReference(array $procedureReference = [])
    {
        $this->procedureReference = [];
        if ([] === $procedureReference) {
            return $this;
        }
        foreach($procedureReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProcedureReference($v);
            } else {
                $this->addProcedureReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why the ImagingStudy was requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referrer
     * @return static
     */
    public function setReferrer(FHIRReference $referrer = null)
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Each study has one or more series of images or other content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Each study has one or more series of images or other content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $series
     * @return static
     */
    public function addSeries(FHIRImagingStudySeries $series = null)
    {
        $this->series[] = $series;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Each study has one or more series of images or other content.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[] $series
     * @return static
     */
    public function setSeries(array $series = [])
    {
        $this->series = [];
        if ([] === $series) {
            return $this;
        }
        foreach($series as $v) {
            if ($v instanceof FHIRImagingStudySeries) {
                $this->addSeries($v);
            } else {
                $this->addSeries(new FHIRImagingStudySeries($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and time the study started.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and time the study started.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $started
     * @return static
     */
    public function setStarted($started = null)
    {
        if (null === $started) {
            $this->started = null;
            return $this;
        }
        if ($started instanceof FHIRDateTime) {
            $this->started = $started;
            return $this;
        }
        $this->started = new FHIRDateTime($started);
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $uid
     * @return static
     */
    public function setUid($uid = null)
    {
        if (null === $uid) {
            $this->uid = null;
            return $this;
        }
        if ($uid instanceof FHIROid) {
            $this->uid = $uid;
            return $this;
        }
        $this->uid = new FHIROid($uid);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImagingStudy::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImagingStudy::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImagingStudy;
        } elseif (!is_object($type) || !($type instanceof FHIRImagingStudy)) {
            throw new \RuntimeException(sprintf(
                'FHIRImagingStudy::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->accession)) {
            $type->setAccession(FHIRIdentifier::xmlUnserialize($children->accession));
        }
        if (isset($children->availability)) {
            $type->setAvailability(FHIRInstanceAvailability::xmlUnserialize($children->availability));
        }
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->interpreter)) {
            foreach($children->interpreter as $child) {
                $type->addInterpreter(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->modalityList)) {
            foreach($children->modalityList as $child) {
                $type->addModalityList(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($attributes->numberOfInstances)) {
            $type->setNumberOfInstances((string)$attributes->numberOfInstances);
        }
        if (isset($children->numberOfInstances)) {
            $type->setNumberOfInstances(FHIRUnsignedInt::xmlUnserialize($children->numberOfInstances));
        }
        if (isset($attributes->numberOfSeries)) {
            $type->setNumberOfSeries((string)$attributes->numberOfSeries);
        }
        if (isset($children->numberOfSeries)) {
            $type->setNumberOfSeries(FHIRUnsignedInt::xmlUnserialize($children->numberOfSeries));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->procedureCode)) {
            foreach($children->procedureCode as $child) {
                $type->addProcedureCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->procedureReference)) {
            foreach($children->procedureReference as $child) {
                $type->addProcedureReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->reason)) {
            $type->setReason(FHIRCodeableConcept::xmlUnserialize($children->reason));
        }
        if (isset($children->referrer)) {
            $type->setReferrer(FHIRReference::xmlUnserialize($children->referrer));
        }
        if (isset($children->series)) {
            foreach($children->series as $child) {
                $type->addSeries(FHIRImagingStudySeries::xmlUnserialize($child));
            }
        }
        if (isset($attributes->started)) {
            $type->setStarted((string)$attributes->started);
        }
        if (isset($children->started)) {
            $type->setStarted(FHIRDateTime::xmlUnserialize($children->started));
        }
        if (isset($attributes->uid)) {
            $type->setUid((string)$attributes->uid);
        }
        if (isset($children->uid)) {
            $type->setUid(FHIROid::xmlUnserialize($children->uid));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAccession())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCESSION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getAvailability())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInterpreter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERPRETER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getModalityList())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODALITY_LIST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_INSTANCES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_SERIES, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProcedureCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getProcedureReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferrer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSeries())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStarted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STARTED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccession())) {
            $a[self::FIELD_ACCESSION] = $v;
        }
        if (null !== ($v = $this->getAvailability())) {
            $a[self::FIELD_AVAILABILITY] = $v;
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = $vs;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInterpreter())) {
            $a[self::FIELD_INTERPRETER] = $vs;
        }
        if ([] !== ($vs = $this->getModalityList())) {
            $a[self::FIELD_MODALITY_LIST] = $vs;
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $a[self::FIELD_NUMBER_OF_INSTANCES] = $v->getValue();
            $a[self::FIELD_NUMBER_OF_INSTANCES_EXT] = $v;
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            $a[self::FIELD_NUMBER_OF_SERIES] = $v->getValue();
            $a[self::FIELD_NUMBER_OF_SERIES_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getProcedureCode())) {
            $a[self::FIELD_PROCEDURE_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getProcedureReference())) {
            $a[self::FIELD_PROCEDURE_REFERENCE] = $vs;
        }
        if (null !== ($v = $this->getReason())) {
            $a[self::FIELD_REASON] = $v;
        }
        if (null !== ($v = $this->getReferrer())) {
            $a[self::FIELD_REFERRER] = $v;
        }
        if ([] !== ($vs = $this->getSeries())) {
            $a[self::FIELD_SERIES] = $vs;
        }
        if (null !== ($v = $this->getStarted())) {
            $a[self::FIELD_STARTED] = $v->getValue();
            $a[self::FIELD_STARTED_EXT] = $v;
        }
        if (null !== ($v = $this->getUid())) {
            $a[self::FIELD_UID] = $v->getValue();
            $a[self::FIELD_UID_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}