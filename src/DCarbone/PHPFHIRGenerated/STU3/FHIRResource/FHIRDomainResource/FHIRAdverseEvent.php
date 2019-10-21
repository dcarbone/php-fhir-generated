<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCategory;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAdverseEvent
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRAdverseEvent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_EXT = '_category';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EVENT_PARTICIPANT = 'eventParticipant';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_REACTION = 'reaction';
    const FIELD_RECORDER = 'recorder';
    const FIELD_REFERENCE_DOCUMENT = 'referenceDocument';
    const FIELD_SERIOUSNESS = 'seriousness';
    const FIELD_STUDY = 'study';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBJECT_MEDICAL_HISTORY = 'subjectMedicalHistory';
    const FIELD_SUSPECT_ENTITY = 'suspectEntity';
    const FIELD_TYPE = 'type';

    /**
     * Overall categorization of the event, e.g. real or potential
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of event which is important to characterize what occurred and caused
     * harm to the subject, or had the potential to cause harm to the subject.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCategory
     */
    private $category = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the adverse event in text.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * Act. Such information includes information leading to the decision to perform
     * the Act and how to perform the Act (e.g. consultant), information that the Act
     * itself seeks to reveal (e.g. informant of clinical history), or information
     * about what Act was performed (e.g. informant witness).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $eventParticipant = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this adverse event that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itsefl is
     * not appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $location = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $outcome = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $reaction = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $recorder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $referenceDocument = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the seriousness or severity of the adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $seriousness = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $study = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event. With a prospective adverse event,
     * there will be no subject as the adverse event was prevented.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $subjectMedicalHistory = [];
    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    private $suspectEntity = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRAdverseEvent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            $ext = (isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT]))
                ? $data[self::FIELD_CATEGORY_EXT]
                : null;
            if ($data[self::FIELD_CATEGORY] instanceof FHIRAdverseEventCategory) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } elseif ($ext && is_scalar($data[self::FIELD_CATEGORY])) {
                $this->setCategory(new FHIRAdverseEventCategory([FHIRAdverseEventCategory::FIELD_VALUE => $data[self::FIELD_CATEGORY]] + $ext));
            } else {
                $this->setCategory(new FHIRAdverseEventCategory($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
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
        if (isset($data[self::FIELD_EVENT_PARTICIPANT])) {
            if ($data[self::FIELD_EVENT_PARTICIPANT] instanceof FHIRReference) {
                $this->setEventParticipant($data[self::FIELD_EVENT_PARTICIPANT]);
            } else {
                $this->setEventParticipant(new FHIRReference($data[self::FIELD_EVENT_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRReference) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRReference($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_DOCUMENT])) {
            if (is_array($data[self::FIELD_REFERENCE_DOCUMENT])) {
                foreach($data[self::FIELD_REFERENCE_DOCUMENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReferenceDocument($v);
                    } else {
                        $this->addReferenceDocument(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCE_DOCUMENT] instanceof FHIRReference) {
                $this->addReferenceDocument($data[self::FIELD_REFERENCE_DOCUMENT]);
            } else {
                $this->addReferenceDocument(new FHIRReference($data[self::FIELD_REFERENCE_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_SERIOUSNESS])) {
            if ($data[self::FIELD_SERIOUSNESS] instanceof FHIRCodeableConcept) {
                $this->setSeriousness($data[self::FIELD_SERIOUSNESS]);
            } else {
                $this->setSeriousness(new FHIRCodeableConcept($data[self::FIELD_SERIOUSNESS]));
            }
        }
        if (isset($data[self::FIELD_STUDY])) {
            if (is_array($data[self::FIELD_STUDY])) {
                foreach($data[self::FIELD_STUDY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addStudy($v);
                    } else {
                        $this->addStudy(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_STUDY] instanceof FHIRReference) {
                $this->addStudy($data[self::FIELD_STUDY]);
            } else {
                $this->addStudy(new FHIRReference($data[self::FIELD_STUDY]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
            if (is_array($data[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
                foreach($data[self::FIELD_SUBJECT_MEDICAL_HISTORY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSubjectMedicalHistory($v);
                    } else {
                        $this->addSubjectMedicalHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT_MEDICAL_HISTORY] instanceof FHIRReference) {
                $this->addSubjectMedicalHistory($data[self::FIELD_SUBJECT_MEDICAL_HISTORY]);
            } else {
                $this->addSubjectMedicalHistory(new FHIRReference($data[self::FIELD_SUBJECT_MEDICAL_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_SUSPECT_ENTITY])) {
            if (is_array($data[self::FIELD_SUSPECT_ENTITY])) {
                foreach($data[self::FIELD_SUSPECT_ENTITY] as $v) {
                    if ($v instanceof FHIRAdverseEventSuspectEntity) {
                        $this->addSuspectEntity($v);
                    } else {
                        $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($v));
                    }
                }
            } else if ($data[self::FIELD_SUSPECT_ENTITY] instanceof FHIRAdverseEventSuspectEntity) {
                $this->addSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]);
            } else {
                $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
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
        return "<AdverseEvent{$xmlns}></AdverseEvent>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Overall categorization of the event, e.g. real or potential
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of event which is important to characterize what occurred and caused
     * harm to the subject, or had the potential to cause harm to the subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Overall categorization of the event, e.g. real or potential
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of event which is important to characterize what occurred and caused
     * harm to the subject, or had the potential to cause harm to the subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCategory $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setCategory(FHIRAdverseEventCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the adverse event in text.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the adverse event in text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * Act. Such information includes information leading to the decision to perform
     * the Act and how to perform the Act (e.g. consultant), information that the Act
     * itself seeks to reveal (e.g. informant of clinical history), or information
     * about what Act was performed (e.g. informant witness).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getEventParticipant()
    {
        return $this->eventParticipant;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * Act. Such information includes information leading to the decision to perform
     * the Act and how to perform the Act (e.g. consultant), information that the Act
     * itself seeks to reveal (e.g. informant of clinical history), or information
     * about what Act was performed (e.g. informant witness).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $eventParticipant
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setEventParticipant(FHIRReference $eventParticipant = null)
    {
        $this->eventParticipant = $eventParticipant;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this adverse event that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itsefl is
     * not appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier(s) of this adverse event that are assigned by business processes
     * and/or used to refer to it when a direct URL reference to the resource itsefl is
     * not appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $outcome
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reaction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function addReaction(FHIRReference $reaction = null)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $reaction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $recorder
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referenceDocument
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function addReferenceDocument(FHIRReference $referenceDocument = null)
    {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $referenceDocument
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setReferenceDocument(array $referenceDocument = [])
    {
        $this->referenceDocument = [];
        if ([] === $referenceDocument) {
            return $this;
        }
        foreach($referenceDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReferenceDocument($v);
            } else {
                $this->addReferenceDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the seriousness or severity of the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the seriousness or severity of the adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $seriousness
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setSeriousness(FHIRCodeableConcept $seriousness = null)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $study
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function addStudy(FHIRReference $study = null)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $study
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setStudy(array $study = [])
    {
        $this->study = [];
        if ([] === $study) {
            return $this;
        }
        foreach($study as $v) {
            if ($v instanceof FHIRReference) {
                $this->addStudy($v);
            } else {
                $this->addStudy(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event. With a prospective adverse event,
     * there will be no subject as the adverse event was prevented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event. With a prospective adverse event,
     * there will be no subject as the adverse event was prevented.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subjectMedicalHistory
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function addSubjectMedicalHistory(FHIRReference $subjectMedicalHistory = null)
    {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $subjectMedicalHistory
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setSubjectMedicalHistory(array $subjectMedicalHistory = [])
    {
        $this->subjectMedicalHistory = [];
        if ([] === $subjectMedicalHistory) {
            return $this;
        }
        foreach($subjectMedicalHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubjectMedicalHistory($v);
            } else {
                $this->addSubjectMedicalHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function addSuspectEntity(FHIRAdverseEventSuspectEntity $suspectEntity = null)
    {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[] $suspectEntity
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setSuspectEntity(array $suspectEntity = [])
    {
        $this->suspectEntity = [];
        if ([] === $suspectEntity) {
            return $this;
        }
        foreach($suspectEntity as $v) {
            if ($v instanceof FHIRAdverseEventSuspectEntity) {
                $this->addSuspectEntity($v);
            } else {
                $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
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
                throw new \DomainException(sprintf('FHIRAdverseEvent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdverseEvent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAdverseEvent;
        } elseif (!is_object($type) || !($type instanceof FHIRAdverseEvent)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdverseEvent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent or null, %s seen.',
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
        if (isset($children->category)) {
            $type->setCategory(FHIRAdverseEventCategory::xmlUnserialize($children->category));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->eventParticipant)) {
            $type->setEventParticipant(FHIRReference::xmlUnserialize($children->eventParticipant));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($children->outcome));
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->referenceDocument)) {
            foreach($children->referenceDocument as $child) {
                $type->addReferenceDocument(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->seriousness)) {
            $type->setSeriousness(FHIRCodeableConcept::xmlUnserialize($children->seriousness));
        }
        if (isset($children->study)) {
            foreach($children->study as $child) {
                $type->addStudy(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->subjectMedicalHistory)) {
            foreach($children->subjectMedicalHistory as $child) {
                $type->addSubjectMedicalHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->suspectEntity)) {
            foreach($children->suspectEntity as $child) {
                $type->addSuspectEntity(FHIRAdverseEventSuspectEntity::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEventParticipant())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReferenceDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_DOCUMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSeriousness())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIOUSNESS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSubjectMedicalHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_MEDICAL_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getSuspectEntity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUSPECT_ENTITY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getEventParticipant())) {
            $a[self::FIELD_EVENT_PARTICIPANT] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = $vs;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if ([] !== ($vs = $this->getReferenceDocument())) {
            $a[self::FIELD_REFERENCE_DOCUMENT] = $vs;
        }
        if (null !== ($v = $this->getSeriousness())) {
            $a[self::FIELD_SERIOUSNESS] = $v;
        }
        if ([] !== ($vs = $this->getStudy())) {
            $a[self::FIELD_STUDY] = $vs;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getSubjectMedicalHistory())) {
            $a[self::FIELD_SUBJECT_MEDICAL_HISTORY] = $vs;
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            $a[self::FIELD_SUSPECT_ENTITY] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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