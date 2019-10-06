<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAllergyIntolerance
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE;

    const FIELD_CATEGORY = 'category';
    const FIELD_CRITICALITY = 'criticality';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LAST_OCCURENCE = 'lastOccurence';
    const FIELD_LAST_OCCURENCE_EXT = '_lastOccurence';
    const FIELD_NOTE = 'note';
    const FIELD_ONSET = 'onset';
    const FIELD_ONSET_EXT = '_onset';
    const FIELD_PATIENT = 'patient';
    const FIELD_REACTION = 'reaction';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_REPORTER = 'reporter';
    const FIELD_STATUS = 'status';
    const FIELD_SUBSTANCE = 'substance';
    const FIELD_TYPE = 'type';

    /**
     * Category of an identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified Substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    private $category = null;
    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified Substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    private $criticality = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $lastOccurence = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    private $note = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $onset = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * Substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    private $reaction = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $recordedDate = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its conten.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $recorder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $reporter = null;
    /**
     * Assertion about certainty associated with a propensity, or potential risk, of a
     * reaction to the identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified Substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    private $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of a substance, or a class of substances, that is considered to
     * be responsible for the adverse reaction risk.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $substance = null;
    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType
     */
    private $type = null;

    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRAllergyIntoleranceCategory) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRAllergyIntoleranceCategory($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CRITICALITY])) {
            if ($data[self::FIELD_CRITICALITY] instanceof FHIRAllergyIntoleranceCriticality) {
                $this->setCriticality($data[self::FIELD_CRITICALITY]);
            } else {
                $this->setCriticality(new FHIRAllergyIntoleranceCriticality($data[self::FIELD_CRITICALITY]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_LAST_OCCURENCE])) {
            $ext = (isset($data[self::FIELD_LAST_OCCURENCE_EXT]) && is_array($data[self::FIELD_LAST_OCCURENCE_EXT]))
                ? $data[self::FIELD_LAST_OCCURENCE_EXT]
                : null;
            if ($data[self::FIELD_LAST_OCCURENCE] instanceof FHIRDateTime) {
                $this->setLastOccurence($data[self::FIELD_LAST_OCCURENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_OCCURENCE])) {
                $this->setLastOccurence(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_LAST_OCCURENCE]] + $ext));
            } else {
                $this->setLastOccurence(new FHIRDateTime($data[self::FIELD_LAST_OCCURENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->setNote($data[self::FIELD_NOTE]);
            } else {
                $this->setNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_ONSET])) {
            $ext = (isset($data[self::FIELD_ONSET_EXT]) && is_array($data[self::FIELD_ONSET_EXT]))
                ? $data[self::FIELD_ONSET_EXT]
                : null;
            if ($data[self::FIELD_ONSET] instanceof FHIRDateTime) {
                $this->setOnset($data[self::FIELD_ONSET]);
            } elseif ($ext && is_scalar($data[self::FIELD_ONSET])) {
                $this->setOnset(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ONSET]] + $ext));
            } else {
                $this->setOnset(new FHIRDateTime($data[self::FIELD_ONSET]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRAllergyIntoleranceReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRAllergyIntoleranceReaction($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRAllergyIntoleranceReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRAllergyIntoleranceReaction($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_RECORDED_DATE])) {
            $ext = (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT]))
                ? $data[self::FIELD_RECORDED_DATE_EXT]
                : null;
            if ($data[self::FIELD_RECORDED_DATE] instanceof FHIRDateTime) {
                $this->setRecordedDate($data[self::FIELD_RECORDED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECORDED_DATE])) {
                $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RECORDED_DATE]] + $ext));
            } else {
                $this->setRecordedDate(new FHIRDateTime($data[self::FIELD_RECORDED_DATE]));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_REPORTER])) {
            if ($data[self::FIELD_REPORTER] instanceof FHIRReference) {
                $this->setReporter($data[self::FIELD_REPORTER]);
            } else {
                $this->setReporter(new FHIRReference($data[self::FIELD_REPORTER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRAllergyIntoleranceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRAllergyIntoleranceStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRAllergyIntoleranceType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRAllergyIntoleranceType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Category of an identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified Substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of an identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified Substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setCategory(FHIRAllergyIntoleranceCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified Substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified Substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setCriticality(FHIRAllergyIntoleranceCriticality $criticality = null)
    {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
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
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processes and/or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getLastOccurence()
    {
        return $this->lastOccurence;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $lastOccurence
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setLastOccurence($lastOccurence = null)
    {
        if (null === $lastOccurence) {
            $this->lastOccurence = null;
            return $this;
        }
        if ($lastOccurence instanceof FHIRDateTime) {
            $this->lastOccurence = $lastOccurence;
            return $this;
        }
        $this->lastOccurence = new FHIRDateTime($lastOccurence);
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        $this->note = $note;
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
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Record of the date and/or time of the onset of the Allergy or Intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $onset
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnset($onset = null)
    {
        if (null === $onset) {
            $this->onset = null;
            return $this;
        }
        if ($onset instanceof FHIRDateTime) {
            $this->onset = $onset;
            return $this;
        }
        $this->onset = new FHIRDateTime($onset);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * Substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * Substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addReaction(FHIRAllergyIntoleranceReaction $reaction = null)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * Substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[] $reaction
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRAllergyIntoleranceReaction) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRAllergyIntoleranceReaction($v));
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $recordedDate
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setRecordedDate($recordedDate = null)
    {
        if (null === $recordedDate) {
            $this->recordedDate = null;
            return $this;
        }
        if ($recordedDate instanceof FHIRDateTime) {
            $this->recordedDate = $recordedDate;
            return $this;
        }
        $this->recordedDate = new FHIRDateTime($recordedDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its conten.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Individual who recorded the record and takes responsibility for its conten.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $recorder
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * The source of the information about the allergy that is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $reporter
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setReporter(FHIRReference $reporter = null)
    {
        $this->reporter = $reporter;
        return $this;
    }

    /**
     * Assertion about certainty associated with a propensity, or potential risk, of a
     * reaction to the identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified Substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Assertion about certainty associated with a propensity, or potential risk, of a
     * reaction to the identified Substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified Substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setStatus(FHIRAllergyIntoleranceStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of a substance, or a class of substances, that is considered to
     * be responsible for the adverse reaction risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of a substance, or a class of substances, that is considered to
     * be responsible for the adverse reaction risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $substance
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setType(FHIRAllergyIntoleranceType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRAllergyIntolerance);
        } elseif (!is_object($type) || !($type instanceof FHIRAllergyIntolerance)) {
            throw new \RuntimeException(sprintf(
                'FHIRAllergyIntolerance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->category)) {
            $type->setCategory(FHIRAllergyIntoleranceCategory::xmlUnserialize($children->category));
        }
        if (isset($children->criticality)) {
            $type->setCriticality(FHIRAllergyIntoleranceCriticality::xmlUnserialize($children->criticality));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->lastOccurence)) {
            $type->setLastOccurence((string)$attributes->lastOccurence);
        }
        if (isset($children->lastOccurence)) {
            $type->setLastOccurence(FHIRDateTime::xmlUnserialize($children->lastOccurence));
        }
        if (isset($children->note)) {
            $type->setNote(FHIRAnnotation::xmlUnserialize($children->note));
        }
        if (isset($attributes->onset)) {
            $type->setOnset((string)$attributes->onset);
        }
        if (isset($children->onset)) {
            $type->setOnset(FHIRDateTime::xmlUnserialize($children->onset));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRAllergyIntoleranceReaction::xmlUnserialize($child));
            }
        }
        if (isset($attributes->recordedDate)) {
            $type->setRecordedDate((string)$attributes->recordedDate);
        }
        if (isset($children->recordedDate)) {
            $type->setRecordedDate(FHIRDateTime::xmlUnserialize($children->recordedDate));
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->reporter)) {
            $type->setReporter(FHIRReference::xmlUnserialize($children->reporter));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRAllergyIntoleranceStatus::xmlUnserialize($children->status));
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($children->substance));
        }
        if (isset($children->type)) {
            $type->setType(FHIRAllergyIntoleranceType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
        }

        if (null !== ($v = $this->getCriticality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CRITICALITY));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getLastOccurence())) {
            $sxe->addAttribute(self::FIELD_LAST_OCCURENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_OCCURENCE));
            }
        }

        if (null !== ($v = $this->getNote())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
        }
        if (null !== ($v = $this->getOnset())) {
            $sxe->addAttribute(self::FIELD_ONSET, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }

        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION));
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $sxe->addAttribute(self::FIELD_RECORDED_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_DATE));
            }
        }

        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER));
        }

        if (null !== ($v = $this->getReporter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTER));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
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
        if (null !== ($v = $this->getCriticality())) {
            $a[self::FIELD_CRITICALITY] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLastOccurence())) {
            $a[self::FIELD_LAST_OCCURENCE] = (string)$v;
            $a[self::FIELD_LAST_OCCURENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a[self::FIELD_NOTE] = $v;
        }
        if (null !== ($v = $this->getOnset())) {
            $a[self::FIELD_ONSET] = (string)$v;
            $a[self::FIELD_ONSET_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = $vs;
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a[self::FIELD_RECORDED_DATE] = (string)$v;
            $a[self::FIELD_RECORDED_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if (null !== ($v = $this->getReporter())) {
            $a[self::FIELD_REPORTER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}