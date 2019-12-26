<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Manifest of a set of images produced in study. The set of images may include
 * every image in the study, or it may be an incomplete sample, such as a list of
 * key images.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImagingStudy
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRImagingStudy extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY;
    const FIELD_ACCESSION_NO = 'accessionNo';
    const FIELD_AVAILABILITY = 'availability';
    const FIELD_AVAILABILITY_EXT = '_availability';
    const FIELD_CLINICAL_INFORMATION = 'clinicalInformation';
    const FIELD_CLINICAL_INFORMATION_EXT = '_clinicalInformation';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INTERPRETER = 'interpreter';
    const FIELD_MODALITY = 'modality';
    const FIELD_MODALITY_EXT = '_modality';
    const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
    const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
    const FIELD_NUMBER_OF_SERIES = 'numberOfSeries';
    const FIELD_NUMBER_OF_SERIES_EXT = '_numberOfSeries';
    const FIELD_ORDER = 'order';
    const FIELD_PROCEDURE = 'procedure';
    const FIELD_REFERRER = 'referrer';
    const FIELD_SERIES = 'series';
    const FIELD_SUBJECT = 'subject';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $accessionNo = null;

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability
     */
    protected $availability = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $clinicalInformation = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and Time the study took place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $dateTime = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read study and interpreted the images.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $interpreter = null;

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality[]
     */
    protected $modality = [];

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $numberOfInstances = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $numberOfSeries = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $order = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[]
     */
    protected $procedure = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $referrer = null;

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    protected $series = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who the images are of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    protected $uid = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * Validation map for fields in type ImagingStudy
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ACCESSION_NO])) {
            if ($data[self::FIELD_ACCESSION_NO] instanceof FHIRIdentifier) {
                $this->setAccessionNo($data[self::FIELD_ACCESSION_NO]);
            } else {
                $this->setAccessionNo(new FHIRIdentifier($data[self::FIELD_ACCESSION_NO]));
            }
        }
        if (isset($data[self::FIELD_AVAILABILITY]) || isset($data[self::FIELD_AVAILABILITY_EXT])) {
            if (isset($data[self::FIELD_AVAILABILITY])) {
                $value = $data[self::FIELD_AVAILABILITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AVAILABILITY_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXT])) {
                $ext = $data[self::FIELD_AVAILABILITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstanceAvailability) {
                    $this->setAvailability($value);
                } else if (is_array($value)) {
                    $this->setAvailability(new FHIRInstanceAvailability(array_merge($ext, $value)));
                } else {
                    $this->setAvailability(new FHIRInstanceAvailability([FHIRInstanceAvailability::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAvailability(new FHIRInstanceAvailability($ext));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_INFORMATION]) || isset($data[self::FIELD_CLINICAL_INFORMATION_EXT])) {
            if (isset($data[self::FIELD_CLINICAL_INFORMATION])) {
                $value = $data[self::FIELD_CLINICAL_INFORMATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CLINICAL_INFORMATION_EXT]) && is_array($data[self::FIELD_CLINICAL_INFORMATION_EXT])) {
                $ext = $data[self::FIELD_CLINICAL_INFORMATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClinicalInformation($value);
                } else if (is_array($value)) {
                    $this->setClinicalInformation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClinicalInformation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setClinicalInformation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATE_TIME]) || isset($data[self::FIELD_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_DATE_TIME])) {
                $value = $data[self::FIELD_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateTime($value);
                } else if (is_array($value)) {
                    $this->setDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INTERPRETER])) {
            if ($data[self::FIELD_INTERPRETER] instanceof FHIRResourceReference) {
                $this->setInterpreter($data[self::FIELD_INTERPRETER]);
            } else {
                $this->setInterpreter(new FHIRResourceReference($data[self::FIELD_INTERPRETER]));
            }
        }
        if (isset($data[self::FIELD_MODALITY]) || isset($data[self::FIELD_MODALITY_EXT])) {
            if (isset($data[self::FIELD_MODALITY])) {
                $value = $data[self::FIELD_MODALITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MODALITY_EXT]) && is_array($data[self::FIELD_MODALITY_EXT])) {
                $ext = $data[self::FIELD_MODALITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRImagingModality) {
                    $this->addModality($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRImagingModality) {
                            $this->addModality($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addModality(new FHIRImagingModality(array_merge($v, $iext)));
                            } else {
                                $this->addModality(new FHIRImagingModality([FHIRImagingModality::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addModality(new FHIRImagingModality(array_merge($ext, $value)));
                } else {
                    $this->addModality(new FHIRImagingModality([FHIRImagingModality::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addModality(new FHIRImagingModality($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_INSTANCES]) || isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_INSTANCES])) {
                $value = $data[self::FIELD_NUMBER_OF_INSTANCES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_INSTANCES_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_INSTANCES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfInstances($value);
                } else if (is_array($value)) {
                    $this->setNumberOfInstances(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfInstances(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfInstances(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_SERIES]) || isset($data[self::FIELD_NUMBER_OF_SERIES_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_SERIES])) {
                $value = $data[self::FIELD_NUMBER_OF_SERIES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_SERIES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_SERIES_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_SERIES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfSeries($value);
                } else if (is_array($value)) {
                    $this->setNumberOfSeries(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfSeries(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfSeries(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_ORDER])) {
            if (is_array($data[self::FIELD_ORDER])) {
                foreach($data[self::FIELD_ORDER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addOrder($v);
                    } else {
                        $this->addOrder(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_ORDER] instanceof FHIRResourceReference) {
                $this->addOrder($data[self::FIELD_ORDER]);
            } else {
                $this->addOrder(new FHIRResourceReference($data[self::FIELD_ORDER]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if (is_array($data[self::FIELD_PROCEDURE])) {
                foreach($data[self::FIELD_PROCEDURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addProcedure($v);
                    } else {
                        $this->addProcedure(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_PROCEDURE] instanceof FHIRCoding) {
                $this->addProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->addProcedure(new FHIRCoding($data[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_REFERRER])) {
            if ($data[self::FIELD_REFERRER] instanceof FHIRResourceReference) {
                $this->setReferrer($data[self::FIELD_REFERRER]);
            } else {
                $this->setReferrer(new FHIRResourceReference($data[self::FIELD_REFERRER]));
            }
        }
        if (isset($data[self::FIELD_SERIES])) {
            if (is_array($data[self::FIELD_SERIES])) {
                foreach($data[self::FIELD_SERIES] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_UID]) || isset($data[self::FIELD_UID_EXT])) {
            if (isset($data[self::FIELD_UID])) {
                $value = $data[self::FIELD_UID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT])) {
                $ext = $data[self::FIELD_UID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setUid($value);
                } else if (is_array($value)) {
                    $this->setUid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setUid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUid(new FHIROid($ext));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
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
     * Accession Number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getAccessionNo()
    {
        return $this->accessionNo;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $accessionNo
     * @return static
     */
    public function setAccessionNo(FHIRIdentifier $accessionNo = null)
    {
        $this->accessionNo = $accessionNo;
        return $this;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability $availability
     * @return static
     */
    public function setAvailability(FHIRInstanceAvailability $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getClinicalInformation()
    {
        return $this->clinicalInformation;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $clinicalInformation
     * @return static
     */
    public function setClinicalInformation($clinicalInformation = null)
    {
        if (null === $clinicalInformation) {
            $this->clinicalInformation = null;
            return $this;
        }
        if ($clinicalInformation instanceof FHIRString) {
            $this->clinicalInformation = $clinicalInformation;
            return $this;
        }
        $this->clinicalInformation = new FHIRString($clinicalInformation);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and Time the study took place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and Time the study took place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $dateTime
     * @return static
     */
    public function setDateTime($dateTime = null)
    {
        if (null === $dateTime) {
            $this->dateTime = null;
            return $this;
        }
        if ($dateTime instanceof FHIRDateTime) {
            $this->dateTime = $dateTime;
            return $this;
        }
        $this->dateTime = new FHIRDateTime($dateTime);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
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
     * Who read study and interpreted the images.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * Who read study and interpreted the images.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $interpreter
     * @return static
     */
    public function setInterpreter(FHIRResourceReference $interpreter = null)
    {
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality $modality
     * @return static
     */
    public function addModality(FHIRImagingModality $modality = null)
    {
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality[] $modality
     * @return static
     */
    public function setModality(array $modality = [])
    {
        $this->modality = [];
        if ([] === $modality) {
            return $this;
        }
        foreach($modality as $v) {
            if ($v instanceof FHIRImagingModality) {
                $this->addModality($v);
            } else {
                $this->addModality(new FHIRImagingModality($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $numberOfInstances
     * @return static
     */
    public function setNumberOfInstances($numberOfInstances = null)
    {
        if (null === $numberOfInstances) {
            $this->numberOfInstances = null;
            return $this;
        }
        if ($numberOfInstances instanceof FHIRInteger) {
            $this->numberOfInstances = $numberOfInstances;
            return $this;
        }
        $this->numberOfInstances = new FHIRInteger($numberOfInstances);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $numberOfSeries
     * @return static
     */
    public function setNumberOfSeries($numberOfSeries = null)
    {
        if (null === $numberOfSeries) {
            $this->numberOfSeries = null;
            return $this;
        }
        if ($numberOfSeries instanceof FHIRInteger) {
            $this->numberOfSeries = $numberOfSeries;
            return $this;
        }
        $this->numberOfSeries = new FHIRInteger($numberOfSeries);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $order
     * @return static
     */
    public function addOrder(FHIRResourceReference $order = null)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $order
     * @return static
     */
    public function setOrder(array $order = [])
    {
        $this->order = [];
        if ([] === $order) {
            return $this;
        }
        foreach($order as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addOrder($v);
            } else {
                $this->addOrder(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $procedure
     * @return static
     */
    public function addProcedure(FHIRCoding $procedure = null)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding[] $procedure
     * @return static
     */
    public function setProcedure(array $procedure = [])
    {
        $this->procedure = [];
        if ([] === $procedure) {
            return $this;
        }
        foreach($procedure as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addProcedure($v);
            } else {
                $this->addProcedure(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $referrer
     * @return static
     */
    public function setReferrer(FHIRResourceReference $referrer = null)
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $series
     * @return static
     */
    public function addSeries(FHIRImagingStudySeries $series = null)
    {
        $this->series[] = $series;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[] $series
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who the images are of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who the images are of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $uid
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
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAccessionNo())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCESSION_NO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailability())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABILITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClinicalInformation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_INFORMATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInterpreter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERPRETER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getModality())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODALITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_INSTANCES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_SERIES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOrder())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ORDER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCEDURE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReferrer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERRER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSeries())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERIES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACCESSION_NO])) {
            $v = $this->getAccessionNo();
            foreach($validationRules[self::FIELD_ACCESSION_NO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_ACCESSION_NO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCESSION_NO])) {
                        $errs[self::FIELD_ACCESSION_NO] = [];
                    }
                    $errs[self::FIELD_ACCESSION_NO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABILITY])) {
            $v = $this->getAvailability();
            foreach($validationRules[self::FIELD_AVAILABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_AVAILABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABILITY])) {
                        $errs[self::FIELD_AVAILABILITY] = [];
                    }
                    $errs[self::FIELD_AVAILABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_INFORMATION])) {
            $v = $this->getClinicalInformation();
            foreach($validationRules[self::FIELD_CLINICAL_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_CLINICAL_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_INFORMATION])) {
                        $errs[self::FIELD_CLINICAL_INFORMATION] = [];
                    }
                    $errs[self::FIELD_CLINICAL_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_TIME])) {
            $v = $this->getDateTime();
            foreach($validationRules[self::FIELD_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_TIME])) {
                        $errs[self::FIELD_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERPRETER])) {
            $v = $this->getInterpreter();
            foreach($validationRules[self::FIELD_INTERPRETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_INTERPRETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERPRETER])) {
                        $errs[self::FIELD_INTERPRETER] = [];
                    }
                    $errs[self::FIELD_INTERPRETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODALITY])) {
            $v = $this->getModality();
            foreach($validationRules[self::FIELD_MODALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_MODALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODALITY])) {
                        $errs[self::FIELD_MODALITY] = [];
                    }
                    $errs[self::FIELD_MODALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_INSTANCES])) {
            $v = $this->getNumberOfInstances();
            foreach($validationRules[self::FIELD_NUMBER_OF_INSTANCES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_NUMBER_OF_INSTANCES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_INSTANCES])) {
                        $errs[self::FIELD_NUMBER_OF_INSTANCES] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_INSTANCES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_SERIES])) {
            $v = $this->getNumberOfSeries();
            foreach($validationRules[self::FIELD_NUMBER_OF_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_NUMBER_OF_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_SERIES])) {
                        $errs[self::FIELD_NUMBER_OF_SERIES] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER])) {
            $v = $this->getOrder();
            foreach($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER])) {
                        $errs[self::FIELD_ORDER] = [];
                    }
                    $errs[self::FIELD_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCEDURE])) {
            $v = $this->getProcedure();
            foreach($validationRules[self::FIELD_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCEDURE])) {
                        $errs[self::FIELD_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERRER])) {
            $v = $this->getReferrer();
            foreach($validationRules[self::FIELD_REFERRER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_REFERRER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERRER])) {
                        $errs[self::FIELD_REFERRER] = [];
                    }
                    $errs[self::FIELD_REFERRER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
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
                'FHIRImagingStudy::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->accessionNo)) {
            $type->setAccessionNo(FHIRIdentifier::xmlUnserialize($children->accessionNo));
        }
        if (isset($children->availability)) {
            $type->setAvailability(FHIRInstanceAvailability::xmlUnserialize($children->availability));
        }
        if (isset($children->clinicalInformation)) {
            $type->setClinicalInformation(FHIRString::xmlUnserialize($children->clinicalInformation));
        }
        if (isset($attributes->clinicalInformation)) {
            $pt = $type->getClinicalInformation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->clinicalInformation);
            } else {
                $type->setClinicalInformation((string)$attributes->clinicalInformation);
            }
        }
        if (isset($children->dateTime)) {
            $type->setDateTime(FHIRDateTime::xmlUnserialize($children->dateTime));
        }
        if (isset($attributes->dateTime)) {
            $pt = $type->getDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateTime);
            } else {
                $type->setDateTime((string)$attributes->dateTime);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->interpreter)) {
            $type->setInterpreter(FHIRResourceReference::xmlUnserialize($children->interpreter));
        }
        if (isset($children->modality)) {
            foreach($children->modality as $child) {
                $type->addModality(FHIRImagingModality::xmlUnserialize($child));
            }
        }
        if (isset($children->numberOfInstances)) {
            $type->setNumberOfInstances(FHIRInteger::xmlUnserialize($children->numberOfInstances));
        }
        if (isset($attributes->numberOfInstances)) {
            $pt = $type->getNumberOfInstances();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfInstances);
            } else {
                $type->setNumberOfInstances((string)$attributes->numberOfInstances);
            }
        }
        if (isset($children->numberOfSeries)) {
            $type->setNumberOfSeries(FHIRInteger::xmlUnserialize($children->numberOfSeries));
        }
        if (isset($attributes->numberOfSeries)) {
            $pt = $type->getNumberOfSeries();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfSeries);
            } else {
                $type->setNumberOfSeries((string)$attributes->numberOfSeries);
            }
        }
        if (isset($children->order)) {
            foreach($children->order as $child) {
                $type->addOrder(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->procedure)) {
            foreach($children->procedure as $child) {
                $type->addProcedure(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->referrer)) {
            $type->setReferrer(FHIRResourceReference::xmlUnserialize($children->referrer));
        }
        if (isset($children->series)) {
            foreach($children->series as $child) {
                $type->addSeries(FHIRImagingStudySeries::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->uid)) {
            $type->setUid(FHIROid::xmlUnserialize($children->uid));
        }
        if (isset($attributes->uid)) {
            $pt = $type->getUid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->uid);
            } else {
                $type->setUid((string)$attributes->uid);
            }
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
            }
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
        if (null !== ($v = $this->getAccessionNo())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCESSION_NO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAvailability())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getClinicalInformation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_INFORMATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getInterpreter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTERPRETER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getModality())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODALITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_INSTANCES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_SERIES, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOrder())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORDER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccessionNo())) {
            $a[self::FIELD_ACCESSION_NO] = $v;
        }
        if (null !== ($v = $this->getAvailability())) {
            $a[self::FIELD_AVAILABILITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstanceAvailability::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstanceAvailability::FIELD_VALUE]);
                $a[self::FIELD_AVAILABILITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getClinicalInformation())) {
            $a[self::FIELD_CLINICAL_INFORMATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CLINICAL_INFORMATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            $a[self::FIELD_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getInterpreter())) {
            $a[self::FIELD_INTERPRETER] = $v;
        }
        if ([] !== ($vs = $this->getModality())) {
            $a[self::FIELD_MODALITY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODALITY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRImagingModality::FIELD_VALUE]) || array_key_exists(FHIRImagingModality::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRImagingModality::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_MODALITY_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $a[self::FIELD_NUMBER_OF_INSTANCES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_INSTANCES_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNumberOfSeries())) {
            $a[self::FIELD_NUMBER_OF_SERIES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_SERIES_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getOrder())) {
            $a[self::FIELD_ORDER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ORDER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            $a[self::FIELD_PROCEDURE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROCEDURE][] = $v;
            }
        }
        if (null !== ($v = $this->getReferrer())) {
            $a[self::FIELD_REFERRER] = $v;
        }
        if ([] !== ($vs = $this->getSeries())) {
            $a[self::FIELD_SERIES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SERIES][] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getUid())) {
            $a[self::FIELD_UID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_UID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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