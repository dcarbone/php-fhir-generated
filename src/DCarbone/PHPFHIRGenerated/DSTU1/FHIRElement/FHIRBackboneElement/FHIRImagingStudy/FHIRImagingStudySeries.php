<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Manifest of a set of images produced in study. The set of images may include
 * every image in the study, or it may be an incomplete sample, such as a list of
 * key images.
 *
 * Class FHIRImagingStudySeries
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy
 */
class FHIRImagingStudySeries extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AVAILABILITY = 'availability';
    const FIELD_AVAILABILITY_EXT = '_availability';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_INSTANCE = 'instance';
    const FIELD_MODALITY = 'modality';
    const FIELD_MODALITY_EXT = '_modality';
    const FIELD_NUMBER = 'number';
    const FIELD_NUMBER_EXT = '_number';
    const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
    const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';

    /**
     * Availability of the resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Availability of series (online, offline or nearline).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability
     */
    private $availability = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body part examined. See DICOM Part 16 Annex L for the mapping from DICOM to
     * Snomed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    private $bodySite = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the series started.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $dateTime = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * A single image taken from a patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    private $instance = [];
    /**
     * Type of data in the instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modality of this series sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality
     */
    private $modality = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of this series in the overall sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $number = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that contains attributes from the.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $numberOfInstances = null;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for this series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    private $uid = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URI where Series is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * FHIRImagingStudySeries Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingStudySeries::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCoding) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCoding($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT]))
                ? $data[self::FIELD_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DATE_TIME] instanceof FHIRDateTime) {
                $this->setDateTime($data[self::FIELD_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE_TIME])) {
                $this->setDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE_TIME]] + $ext));
            } else {
                $this->setDateTime(new FHIRDateTime($data[self::FIELD_DATE_TIME]));
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
        if (isset($data[self::FIELD_INSTANCE])) {
            if (is_array($data[self::FIELD_INSTANCE])) {
                foreach($data[self::FIELD_INSTANCE] as $v) {
                    if ($v instanceof FHIRImagingStudyInstance) {
                        $this->addInstance($v);
                    } else {
                        $this->addInstance(new FHIRImagingStudyInstance($v));
                    }
                }
            } else if ($data[self::FIELD_INSTANCE] instanceof FHIRImagingStudyInstance) {
                $this->addInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->addInstance(new FHIRImagingStudyInstance($data[self::FIELD_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_MODALITY])) {
            $ext = (isset($data[self::FIELD_MODALITY_EXT]) && is_array($data[self::FIELD_MODALITY_EXT]))
                ? $data[self::FIELD_MODALITY_EXT]
                : null;
            if ($data[self::FIELD_MODALITY] instanceof FHIRModality) {
                $this->setModality($data[self::FIELD_MODALITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODALITY])) {
                $this->setModality(new FHIRModality([FHIRModality::FIELD_VALUE => $data[self::FIELD_MODALITY]] + $ext));
            } else {
                $this->setModality(new FHIRModality($data[self::FIELD_MODALITY]));
            }
        }
        if (isset($data[self::FIELD_NUMBER])) {
            $ext = (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT]))
                ? $data[self::FIELD_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_NUMBER] instanceof FHIRInteger) {
                $this->setNumber($data[self::FIELD_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER])) {
                $this->setNumber(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMBER]] + $ext));
            } else {
                $this->setNumber(new FHIRInteger($data[self::FIELD_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_INSTANCES])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]))
                ? $data[self::FIELD_NUMBER_OF_INSTANCES_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_INSTANCES] instanceof FHIRInteger) {
                $this->setNumberOfInstances($data[self::FIELD_NUMBER_OF_INSTANCES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_INSTANCES])) {
                $this->setNumberOfInstances(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_INSTANCES]] + $ext));
            } else {
                $this->setNumberOfInstances(new FHIRInteger($data[self::FIELD_NUMBER_OF_INSTANCES]));
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
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
        return "<ImagingStudySeries{$xmlns}></ImagingStudySeries>";
    }


    /**
     * Availability of the resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Availability of series (online, offline or nearline).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Availability of series (online, offline or nearline).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability $availability
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function setAvailability(FHIRInstanceAvailability $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body part examined. See DICOM Part 16 Annex L for the mapping from DICOM to
     * Snomed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Body part examined. See DICOM Part 16 Annex L for the mapping from DICOM to
     * Snomed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $bodySite
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function setBodySite(FHIRCoding $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the series started.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the series started.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $dateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * A single image taken from a patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * A single image taken from a patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance $instance
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function addInstance(FHIRImagingStudyInstance $instance = null)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * A single image taken from a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[] $instance
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function setInstance(array $instance = [])
    {
        $this->instance = [];
        if ([] === $instance) {
            return $this;
        }
        foreach($instance as $v) {
            if ($v instanceof FHIRImagingStudyInstance) {
                $this->addInstance($v);
            } else {
                $this->addInstance(new FHIRImagingStudyInstance($v));
            }
        }
        return $this;
    }

    /**
     * Type of data in the instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modality of this series sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Type of data in the instance
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modality of this series sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality $modality
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function setModality(FHIRModality $modality = null)
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of this series in the overall sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of this series in the overall sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $number
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     */
    public function setNumber($number = null)
    {
        if (null === $number) {
            $this->number = null;
            return $this;
        }
        if ($number instanceof FHIRInteger) {
            $this->number = $number;
            return $this;
        }
        $this->number = new FHIRInteger($number);
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that contains attributes from the.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sequence that contains attributes from the.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $numberOfInstances
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for this series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for this series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid $uid
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URI where Series is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * WADO-RS URI where Series is available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
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
                throw new \DomainException(sprintf('FHIRImagingStudySeries::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImagingStudySeries::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImagingStudySeries;
        } elseif (!is_object($type) || !($type instanceof FHIRImagingStudySeries)) {
            throw new \RuntimeException(sprintf(
                'FHIRImagingStudySeries::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->availability)) {
            $type->setAvailability(FHIRInstanceAvailability::xmlUnserialize($children->availability));
        }
        if (isset($children->bodySite)) {
            $type->setBodySite(FHIRCoding::xmlUnserialize($children->bodySite));
        }
        if (isset($attributes->dateTime)) {
            $type->setDateTime((string)$attributes->dateTime);
        }
        if (isset($children->dateTime)) {
            $type->setDateTime(FHIRDateTime::xmlUnserialize($children->dateTime));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->instance)) {
            foreach($children->instance as $child) {
                $type->addInstance(FHIRImagingStudyInstance::xmlUnserialize($child));
            }
        }
        if (isset($children->modality)) {
            $type->setModality(FHIRModality::xmlUnserialize($children->modality));
        }
        if (isset($attributes->number)) {
            $type->setNumber((string)$attributes->number);
        }
        if (isset($children->number)) {
            $type->setNumber(FHIRInteger::xmlUnserialize($children->number));
        }
        if (isset($attributes->numberOfInstances)) {
            $type->setNumberOfInstances((string)$attributes->numberOfInstances);
        }
        if (isset($children->numberOfInstances)) {
            $type->setNumberOfInstances(FHIRInteger::xmlUnserialize($children->numberOfInstances));
        }
        if (isset($attributes->uid)) {
            $type->setUid((string)$attributes->uid);
        }
        if (isset($children->uid)) {
            $type->setUid(FHIROid::xmlUnserialize($children->uid));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
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

        if (null !== ($v = $this->getAvailability())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBodySite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getModality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODALITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_INSTANCES, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAvailability())) {
            $a[self::FIELD_AVAILABILITY] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $v;
        }
        if (null !== ($v = $this->getDateTime())) {
            $a[self::FIELD_DATE_TIME] = $v->getValue();
            $a[self::FIELD_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = $vs;
        }
        if (null !== ($v = $this->getModality())) {
            $a[self::FIELD_MODALITY] = $v;
        }
        if (null !== ($v = $this->getNumber())) {
            $a[self::FIELD_NUMBER] = $v->getValue();
            $a[self::FIELD_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getNumberOfInstances())) {
            $a[self::FIELD_NUMBER_OF_INSTANCES] = $v->getValue();
            $a[self::FIELD_NUMBER_OF_INSTANCES_EXT] = $v;
        }
        if (null !== ($v = $this->getUid())) {
            $a[self::FIELD_UID] = $v->getValue();
            $a[self::FIELD_UID_EXT] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $a[self::FIELD_URL_EXT] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}