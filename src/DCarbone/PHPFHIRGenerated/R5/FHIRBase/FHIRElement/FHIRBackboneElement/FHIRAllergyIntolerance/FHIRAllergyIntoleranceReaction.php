<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAllergyIntoleranceSeverity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Risk of harmful or undesirable physiological response which is specific to an
 * individual and associated with exposure to a substance.
 *
 * Class FHIRAllergyIntoleranceReaction
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION;

    const FIELD_SUBSTANCE = 'substance';
    const FIELD_MANIFESTATION = 'manifestation';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ONSET = 'onset';
    const FIELD_ONSET_EXT = '_onset';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_EXPOSURE_ROUTE = 'exposureRoute';
    const FIELD_NOTE = 'note';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $substance = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $manifestation = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $onset = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    protected null|FHIRAllergyIntoleranceSeverity $severity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $exposureRoute = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type AllergyIntolerance.Reaction
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_MANIFESTATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAllergyIntoleranceReaction Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_MANIFESTATION, $data)) {
            if (is_array($data[self::FIELD_MANIFESTATION])) {
                foreach($data[self::FIELD_MANIFESTATION] as $v) {
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addManifestation($v);
                    } else {
                        $this->addManifestation(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MANIFESTATION] instanceof FHIRCodeableReference) {
                $this->addManifestation($data[self::FIELD_MANIFESTATION]);
            } else {
                $this->addManifestation(new FHIRCodeableReference($data[self::FIELD_MANIFESTATION]));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ONSET, $data) || array_key_exists(self::FIELD_ONSET_EXT, $data)) {
            $value = $data[self::FIELD_ONSET] ?? null;
            $ext = (isset($data[self::FIELD_ONSET_EXT]) && is_array($data[self::FIELD_ONSET_EXT])) ? $data[self::FIELD_ONSET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOnset($value);
                } else if (is_array($value)) {
                    $this->setOnset(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOnset(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnset(new FHIRDateTime($ext));
            } else {
                $this->setOnset(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_SEVERITY, $data) || array_key_exists(self::FIELD_SEVERITY_EXT, $data)) {
            $value = $data[self::FIELD_SEVERITY] ?? null;
            $ext = (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT])) ? $data[self::FIELD_SEVERITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAllergyIntoleranceSeverity) {
                    $this->setSeverity($value);
                } else if (is_array($value)) {
                    $this->setSeverity(new FHIRAllergyIntoleranceSeverity(array_merge($ext, $value)));
                } else {
                    $this->setSeverity(new FHIRAllergyIntoleranceSeverity([FHIRAllergyIntoleranceSeverity::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeverity(new FHIRAllergyIntoleranceSeverity($ext));
            } else {
                $this->setSeverity(new FHIRAllergyIntoleranceSeverity(null));
            }
        }
        if (array_key_exists(self::FIELD_EXPOSURE_ROUTE, $data)) {
            if ($data[self::FIELD_EXPOSURE_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setExposureRoute($data[self::FIELD_EXPOSURE_ROUTE]);
            } else {
                $this->setExposureRoute(new FHIRCodeableConcept($data[self::FIELD_EXPOSURE_ROUTE]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSubstance(): null|FHIRCodeableConcept
    {
        return $this->substance;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $substance
     * @return static
     */
    public function setSubstance(null|FHIRCodeableConcept $substance = null): self
    {
        if (null === $substance) {
            $substance = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->substance, $substance);
        $this->substance = $substance;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getManifestation(): null|array
    {
        return $this->manifestation;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $manifestation
     * @return static
     */
    public function addManifestation(null|FHIRCodeableReference $manifestation = null): self
    {
        if (null === $manifestation) {
            $manifestation = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOnset(): null|FHIRDateTime
    {
        return $this->onset;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $onset
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOnset(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onset = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $onset && !($onset instanceof FHIRDateTime)) {
            $onset = new FHIRDateTime($onset);
        }
        $this->_trackValueSet($this->onset, $onset);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ONSET])) {
            $this->_primitiveXmlLocations[self::FIELD_ONSET] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ONSET][0] = $xmlLocation;
        $this->onset = $onset;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity(): null|FHIRAllergyIntoleranceSeverity
    {
        return $this->severity;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     * @return static
     */
    public function setSeverity(null|FHIRAllergyIntoleranceSeverity $severity = null): self
    {
        if (null === $severity) {
            $severity = new FHIRAllergyIntoleranceSeverity();
        }
        $this->_trackValueSet($this->severity, $severity);
        $this->severity = $severity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getExposureRoute(): null|FHIRCodeableConcept
    {
        return $this->exposureRoute;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $exposureRoute
     * @return static
     */
    public function setExposureRoute(null|FHIRCodeableConcept $exposureRoute = null): self
    {
        if (null === $exposureRoute) {
            $exposureRoute = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->exposureRoute, $exposureRoute);
        $this->exposureRoute = $exposureRoute;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getManifestation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANIFESTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnset())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExposureRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPOSURE_ROUTE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANIFESTATION])) {
            $v = $this->getManifestation();
            foreach($validationRules[self::FIELD_MANIFESTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_MANIFESTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANIFESTATION])) {
                        $errs[self::FIELD_MANIFESTATION] = [];
                    }
                    $errs[self::FIELD_MANIFESTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET])) {
            $v = $this->getOnset();
            foreach($validationRules[self::FIELD_ONSET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_ONSET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET])) {
                        $errs[self::FIELD_ONSET] = [];
                    }
                    $errs[self::FIELD_ONSET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPOSURE_ROUTE])) {
            $v = $this->getExposureRoute();
            foreach($validationRules[self::FIELD_EXPOSURE_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_EXPOSURE_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPOSURE_ROUTE])) {
                        $errs[self::FIELD_EXPOSURE_ROUTE] = [];
                    }
                    $errs[self::FIELD_EXPOSURE_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRAllergyIntoleranceReaction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MANIFESTATION === $childName) {
                $type->addManifestation(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ONSET === $childName) {
                $type->setOnset(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEVERITY === $childName) {
                $type->setSeverity(FHIRAllergyIntoleranceSeverity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPOSURE_ROUTE === $childName) {
                $type->setExposureRoute(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONSET])) {
            $pt = $type->getOnset();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ONSET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOnset((string)$attributes[self::FIELD_ONSET], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'AllergyIntoleranceReaction', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ONSET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOnset())) {
            $xw->writeAttribute(self::FIELD_ONSET, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getSubstance())) {
            $xw->startElement(self::FIELD_SUBSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getManifestation() as $v) {
            $xw->startElement(self::FIELD_MANIFESTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ONSET] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOnset())) {
            $xw->startElement(self::FIELD_ONSET);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSeverity())) {
            $xw->startElement(self::FIELD_SEVERITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getExposureRoute())) {
            $xw->startElement(self::FIELD_EXPOSURE_ROUTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getSubstance())) {
            $out->{self::FIELD_SUBSTANCE} = $v;
        }
        if ([] !== ($vs = $this->getManifestation())) {
            $out->{self::FIELD_MANIFESTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MANIFESTATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOnset())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONSET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONSET_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEVERITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAllergyIntoleranceSeverity::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEVERITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExposureRoute())) {
            $out->{self::FIELD_EXPOSURE_ROUTE} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}