<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceSeverity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 *
 * Class FHIRAllergyIntoleranceReaction
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPOSURE_ROUTE = 'exposureRoute';
    const FIELD_MANIFESTATION = 'manifestation';
    const FIELD_NOTE = 'note';
    const FIELD_ONSET = 'onset';
    const FIELD_ONSET_EXT = '_onset';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_SUBSTANCE = 'substance';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $exposureRoute = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $manifestation = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $onset = null;
    /**
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    private $severity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the specific substance (or pharmaceutical product) considered
     * to be responsible for the Adverse Reaction event. Note: the substance for a
     * specific reaction may be different from the substance identified as the cause of
     * the risk, but it must be consistent with it. For instance, it may be a more
     * specific substance (e.g. a brand medication) or a composite product that
     * includes the identified substance. It must be clinically safe to only process
     * the 'code' and ignore the 'reaction.substance'. If a receiving system is unable
     * to confirm that AllergyIntolerance.reaction.substance falls within the semantic
     * scope of AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $substance = null;

    /**
     * FHIRAllergyIntoleranceReaction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntoleranceReaction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_EXPOSURE_ROUTE])) {
            if ($data[self::FIELD_EXPOSURE_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setExposureRoute($data[self::FIELD_EXPOSURE_ROUTE]);
            } else {
                $this->setExposureRoute(new FHIRCodeableConcept($data[self::FIELD_EXPOSURE_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_MANIFESTATION])) {
            if (is_array($data[self::FIELD_MANIFESTATION])) {
                foreach($data[self::FIELD_MANIFESTATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addManifestation($v);
                    } else {
                        $this->addManifestation(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_MANIFESTATION] instanceof FHIRCodeableConcept) {
                $this->addManifestation($data[self::FIELD_MANIFESTATION]);
            } else {
                $this->addManifestation(new FHIRCodeableConcept($data[self::FIELD_MANIFESTATION]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
        if (isset($data[self::FIELD_SEVERITY])) {
            $ext = (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT]))
                ? $data[self::FIELD_SEVERITY_EXT]
                : null;
            if ($data[self::FIELD_SEVERITY] instanceof FHIRAllergyIntoleranceSeverity) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEVERITY])) {
                $this->setSeverity(new FHIRAllergyIntoleranceSeverity([FHIRAllergyIntoleranceSeverity::FIELD_VALUE => $data[self::FIELD_SEVERITY]] + $ext));
            } else {
                $this->setSeverity(new FHIRAllergyIntoleranceSeverity($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
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
        return "<AllergyIntoleranceReaction{$xmlns}></AllergyIntoleranceReaction>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getExposureRoute()
    {
        return $this->exposureRoute;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $exposureRoute
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function setExposureRoute(FHIRCodeableConcept $exposureRoute = null)
    {
        $this->exposureRoute = $exposureRoute;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getManifestation()
    {
        return $this->manifestation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $manifestation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function addManifestation(FHIRCodeableConcept $manifestation = null)
    {
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $manifestation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function setManifestation(array $manifestation = [])
    {
        $this->manifestation = [];
        if ([] === $manifestation) {
            return $this;
        }
        foreach($manifestation as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addManifestation($v);
            } else {
                $this->addManifestation(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
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
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
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
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $onset
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
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
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function setSeverity(FHIRAllergyIntoleranceSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the specific substance (or pharmaceutical product) considered
     * to be responsible for the Adverse Reaction event. Note: the substance for a
     * specific reaction may be different from the substance identified as the cause of
     * the risk, but it must be consistent with it. For instance, it may be a more
     * specific substance (e.g. a brand medication) or a composite product that
     * includes the identified substance. It must be clinically safe to only process
     * the 'code' and ignore the 'reaction.substance'. If a receiving system is unable
     * to confirm that AllergyIntolerance.reaction.substance falls within the semantic
     * scope of AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Identification of the specific substance (or pharmaceutical product) considered
     * to be responsible for the Adverse Reaction event. Note: the substance for a
     * specific reaction may be different from the substance identified as the cause of
     * the risk, but it must be consistent with it. For instance, it may be a more
     * specific substance (e.g. a brand medication) or a composite product that
     * includes the identified substance. It must be clinically safe to only process
     * the 'code' and ignore the 'reaction.substance'. If a receiving system is unable
     * to confirm that AllergyIntolerance.reaction.substance falls within the semantic
     * scope of AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $substance
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
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
                throw new \DomainException(sprintf('FHIRAllergyIntoleranceReaction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAllergyIntoleranceReaction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAllergyIntoleranceReaction;
        } elseif (!is_object($type) || !($type instanceof FHIRAllergyIntoleranceReaction)) {
            throw new \RuntimeException(sprintf(
                'FHIRAllergyIntoleranceReaction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction or null, %s seen.',
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
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->exposureRoute)) {
            $type->setExposureRoute(FHIRCodeableConcept::xmlUnserialize($children->exposureRoute));
        }
        if (isset($children->manifestation)) {
            foreach($children->manifestation as $child) {
                $type->addManifestation(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->onset)) {
            $type->setOnset((string)$attributes->onset);
        }
        if (isset($children->onset)) {
            $type->setOnset(FHIRDateTime::xmlUnserialize($children->onset));
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRAllergyIntoleranceSeverity::xmlUnserialize($children->severity));
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($children->substance));
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getExposureRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPOSURE_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getManifestation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANIFESTATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOnset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getExposureRoute())) {
            $a[self::FIELD_EXPOSURE_ROUTE] = $v;
        }
        if ([] !== ($vs = $this->getManifestation())) {
            $a[self::FIELD_MANIFESTATION] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOnset())) {
            $a[self::FIELD_ONSET] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ONSET_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SEVERITY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
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