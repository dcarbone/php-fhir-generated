<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
 * referenced SOP Instances (images or other content) are for a single patient, and
 * may be from one or more studies. The referenced SOP Instances have been selected
 * for a purpose, such as quality assurance, conference, or consult. Reflecting
 * that range of purposes, typical ImagingObjectSelection resources may include all
 * SOP Instances in a study (perhaps for sharing through a Health Information
 * Exchange); key images from multiple studies (for reference by a referring or
 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
 * set of measurements taken from that instance (for inclusion in a teaching file);
 * and so on.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImagingObjectSelection
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRImagingObjectSelection extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION;
    const FIELD_AUTHOR = 'author';
    const FIELD_AUTHORING_TIME = 'authoringTime';
    const FIELD_AUTHORING_TIME_EXT = '_authoringTime';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_PATIENT = 'patient';
    const FIELD_STUDY = 'study';
    const FIELD_TITLE = 'title';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Author of ImagingObjectSelection. It can be a human author or a device which
     * made the decision of the SOP instances selected. For example, a radiologist
     * selected a set of imaging SOP instances to attach in a diagnostic report, and a
     * CAD application may author a selection to describe SOP instances it used to
     * generate a detection conclusion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $author = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and time when the selection of the referenced instances were made. It is
     * (typically) different from the creation date of the selection resource, and from
     * dates associated with the referenced instances (e.g. capture time of the
     * referenced image).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $authoringTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description of the DICOM SOP instances selected in the
     * ImagingObjectSelection. This should be aligned with the content of the title
     * element, and can provide further explanation of the SOP instances in the
     * selection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A patient resource reference which is the patient subject of all DICOM SOP
     * Instances in this ImagingObjectSelection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Study identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[]
     */
    protected $study = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for, or significance of, the selection of objects referenced in the
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $title = null;

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Instance UID of the DICOM KOS SOP Instances represented in this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    protected $uid = null;

    /**
     * Validation map for fields in type ImagingObjectSelection
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_STUDY => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImagingObjectSelection Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingObjectSelection::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_AUTHORING_TIME]) || isset($data[self::FIELD_AUTHORING_TIME_EXT])) {
            if (isset($data[self::FIELD_AUTHORING_TIME])) {
                $value = $data[self::FIELD_AUTHORING_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORING_TIME_EXT]) && is_array($data[self::FIELD_AUTHORING_TIME_EXT])) {
                $ext = $data[self::FIELD_AUTHORING_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoringTime($value);
                } else if (is_array($value)) {
                    $this->setAuthoringTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoringTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthoringTime(new FHIRDateTime($ext));
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
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_STUDY])) {
            if (is_array($data[self::FIELD_STUDY])) {
                foreach($data[self::FIELD_STUDY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImagingObjectSelectionStudy) {
                        $this->addStudy($v);
                    } else {
                        $this->addStudy(new FHIRImagingObjectSelectionStudy($v));
                    }
                }
            } else if ($data[self::FIELD_STUDY] instanceof FHIRImagingObjectSelectionStudy) {
                $this->addStudy($data[self::FIELD_STUDY]);
            } else {
                $this->addStudy(new FHIRImagingObjectSelectionStudy($data[self::FIELD_STUDY]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            if ($data[self::FIELD_TITLE] instanceof FHIRCodeableConcept) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } else {
                $this->setTitle(new FHIRCodeableConcept($data[self::FIELD_TITLE]));
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
        return "<ImagingObjectSelection{$xmlns}></ImagingObjectSelection>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Author of ImagingObjectSelection. It can be a human author or a device which
     * made the decision of the SOP instances selected. For example, a radiologist
     * selected a set of imaging SOP instances to attach in a diagnostic report, and a
     * CAD application may author a selection to describe SOP instances it used to
     * generate a detection conclusion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Author of ImagingObjectSelection. It can be a human author or a device which
     * made the decision of the SOP instances selected. For example, a radiologist
     * selected a set of imaging SOP instances to attach in a diagnostic report, and a
     * CAD application may author a selection to describe SOP instances it used to
     * generate a detection conclusion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $author
     * @return static
     */
    public function setAuthor(FHIRReference $author = null)
    {
        $this->author = $author;
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
     * Date and time when the selection of the referenced instances were made. It is
     * (typically) different from the creation date of the selection resource, and from
     * dates associated with the referenced instances (e.g. capture time of the
     * referenced image).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getAuthoringTime()
    {
        return $this->authoringTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and time when the selection of the referenced instances were made. It is
     * (typically) different from the creation date of the selection resource, and from
     * dates associated with the referenced instances (e.g. capture time of the
     * referenced image).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $authoringTime
     * @return static
     */
    public function setAuthoringTime($authoringTime = null)
    {
        if (null === $authoringTime) {
            $this->authoringTime = null;
            return $this;
        }
        if ($authoringTime instanceof FHIRDateTime) {
            $this->authoringTime = $authoringTime;
            return $this;
        }
        $this->authoringTime = new FHIRDateTime($authoringTime);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description of the DICOM SOP instances selected in the
     * ImagingObjectSelection. This should be aligned with the content of the title
     * element, and can provide further explanation of the SOP instances in the
     * selection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * Text description of the DICOM SOP instances selected in the
     * ImagingObjectSelection. This should be aligned with the content of the title
     * element, and can provide further explanation of the SOP instances in the
     * selection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
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
     * A patient resource reference which is the patient subject of all DICOM SOP
     * Instances in this ImagingObjectSelection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * A patient resource reference which is the patient subject of all DICOM SOP
     * Instances in this ImagingObjectSelection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Study identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Study identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy $study
     * @return static
     */
    public function addStudy(FHIRImagingObjectSelectionStudy $study = null)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Study identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[] $study
     * @return static
     */
    public function setStudy(array $study = [])
    {
        $this->study = [];
        if ([] === $study) {
            return $this;
        }
        foreach($study as $v) {
            if ($v instanceof FHIRImagingObjectSelectionStudy) {
                $this->addStudy($v);
            } else {
                $this->addStudy(new FHIRImagingObjectSelectionStudy($v));
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
     * The reason for, or significance of, the selection of objects referenced in the
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for, or significance of, the selection of objects referenced in the
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $title
     * @return static
     */
    public function setTitle(FHIRCodeableConcept $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Instance UID of the DICOM KOS SOP Instances represented in this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Instance UID of the DICOM KOS SOP Instances represented in this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid $uid
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
        if (null !== ($v = $this->getAuthor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthoringTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORING_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORING_TIME])) {
            $v = $this->getAuthoringTime();
            foreach($validationRules[self::FIELD_AUTHORING_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_AUTHORING_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORING_TIME])) {
                        $errs[self::FIELD_AUTHORING_TIME] = [];
                    }
                    $errs[self::FIELD_AUTHORING_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY])) {
            $v = $this->getStudy();
            foreach($validationRules[self::FIELD_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY])) {
                        $errs[self::FIELD_STUDY] = [];
                    }
                    $errs[self::FIELD_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection
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
                throw new \DomainException(sprintf('FHIRImagingObjectSelection::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImagingObjectSelection::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImagingObjectSelection;
        } elseif (!is_object($type) || !($type instanceof FHIRImagingObjectSelection)) {
            throw new \RuntimeException(sprintf(
                'FHIRImagingObjectSelection::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection or null, %s seen.',
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
        if (isset($children->author)) {
            $type->setAuthor(FHIRReference::xmlUnserialize($children->author));
        }
        if (isset($children->authoringTime)) {
            $type->setAuthoringTime(FHIRDateTime::xmlUnserialize($children->authoringTime));
        }
        if (isset($attributes->authoringTime)) {
            $pt = $type->getAuthoringTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authoringTime);
            } else {
                $type->setAuthoringTime((string)$attributes->authoringTime);
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
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->study)) {
            foreach($children->study as $child) {
                $type->addStudy(FHIRImagingObjectSelectionStudy::xmlUnserialize($child));
            }
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRCodeableConcept::xmlUnserialize($children->title));
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
        if (null !== ($v = $this->getAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAuthoringTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORING_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $v;
        }
        if (null !== ($v = $this->getAuthoringTime())) {
            $a[self::FIELD_AUTHORING_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_AUTHORING_TIME_EXT] = $enc;
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
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getStudy())) {
            $a[self::FIELD_STUDY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STUDY][] = $v;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v;
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