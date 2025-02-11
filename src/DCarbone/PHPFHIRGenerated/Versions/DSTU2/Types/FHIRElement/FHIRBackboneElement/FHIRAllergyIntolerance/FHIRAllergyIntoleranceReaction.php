<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceCertainty;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceSeverity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION;

    /* class_default.php:50 */
    public const FIELD_SUBSTANCE = 'substance';
    public const FIELD_CERTAINTY = 'certainty';
    public const FIELD_CERTAINTY_EXT = '_certainty';
    public const FIELD_MANIFESTATION = 'manifestation';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_ONSET = 'onset';
    public const FIELD_ONSET_EXT = '_onset';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SEVERITY_EXT = '_severity';
    public const FIELD_EXPOSURE_ROUTE = 'exposureRoute';
    public const FIELD_NOTE = 'note';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_MANIFESTATION => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CERTAINTY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SEVERITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the specific substance considered to be responsible for the
     * Adverse Reaction event. Note: the substance for a specific reaction may be
     * different to the substance identified as the cause of the risk, but must be
     * consistent with it. For instance, it may be a more specific substance (e.g. a
     * brand medication) or a composite substance that includes the identified
     * substance. It must be clinically safe to only process the
     * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $substance;
    /**
     * Statement about the degree of clinical certainty that a Specific Substance was
     * the cause of the Manifestation in an reaction event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Statement about the degree of clinical certainty that the specific substance was
     * the cause of the manifestation in this reaction event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceCertainty 
     */
    protected FHIRAllergyIntoleranceCertainty $certainty;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $manifestation;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $onset;
    /**
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceSeverity 
     */
    protected FHIRAllergyIntoleranceSeverity $severity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $exposureRoute;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAnnotation 
     */
    protected FHIRAnnotation $note;

    /* constructor.php:61 */
    /**
     * FHIRAllergyIntoleranceReaction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $substance
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceCertainty $certainty
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $manifestation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $onset
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $exposureRoute
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAnnotation $note
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $substance = null,
                                null|string|FHIRAllergyIntoleranceCertaintyList|FHIRAllergyIntoleranceCertainty $certainty = null,
                                null|iterable $manifestation = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onset = null,
                                null|string|FHIRAllergyIntoleranceSeverityList|FHIRAllergyIntoleranceSeverity $severity = null,
                                null|FHIRCodeableConcept $exposureRoute = null,
                                null|FHIRAnnotation $note = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $substance) {
            $this->setSubstance($substance);
        }
        if (null !== $certainty) {
            $this->setCertainty($certainty);
        }
        if (null !== $manifestation) {
            $this->setManifestation(...$manifestation);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $onset) {
            $this->setOnset($onset);
        }
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $exposureRoute) {
            $this->setExposureRoute($exposureRoute);
        }
        if (null !== $note) {
            $this->setNote($note);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the specific substance considered to be responsible for the
     * Adverse Reaction event. Note: the substance for a specific reaction may be
     * different to the substance identified as the cause of the risk, but must be
     * consistent with it. For instance, it may be a more specific substance (e.g. a
     * brand medication) or a composite substance that includes the identified
     * substance. It must be clinically safe to only process the
     * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance(): null|FHIRCodeableConcept
    {
        return $this->substance ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the specific substance considered to be responsible for the
     * Adverse Reaction event. Note: the substance for a specific reaction may be
     * different to the substance identified as the cause of the risk, but must be
     * consistent with it. For instance, it may be a more specific substance (e.g. a
     * brand medication) or a composite substance that includes the identified
     * substance. It must be clinically safe to only process the
     * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $substance
     * @return static
     */
    public function setSubstance(null|FHIRCodeableConcept $substance): self
    {
        if (null === $substance) {
            unset($this->substance);
            return $this;
        }
        $this->substance = $substance;
        return $this;
    }

    /**
     * Statement about the degree of clinical certainty that a Specific Substance was
     * the cause of the Manifestation in an reaction event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Statement about the degree of clinical certainty that the specific substance was
     * the cause of the manifestation in this reaction event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceCertainty
     */
    public function getCertainty(): null|FHIRAllergyIntoleranceCertainty
    {
        return $this->certainty ?? null;
    }

    /**
     * Statement about the degree of clinical certainty that a Specific Substance was
     * the cause of the Manifestation in an reaction event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Statement about the degree of clinical certainty that the specific substance was
     * the cause of the manifestation in this reaction event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceCertainty $certainty
     * @return static
     */
    public function setCertainty(null|string|FHIRAllergyIntoleranceCertaintyList|FHIRAllergyIntoleranceCertainty $certainty): self
    {
        if (null === $certainty) {
            unset($this->certainty);
            return $this;
        }
        if (!($certainty instanceof FHIRAllergyIntoleranceCertainty)) {
            $certainty = new FHIRAllergyIntoleranceCertainty(value: $certainty);
        }
        $this->certainty = $certainty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getManifestation(): array
    {
        return $this->manifestation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getManifestationIterator(): iterable
    {
        if (!isset($this->manifestation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manifestation);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $manifestation
     * @return static
     */
    public function addManifestation(FHIRCodeableConcept $manifestation): self
    {
        if (!isset($this->manifestation)) {
            $this->manifestation = [];
        }
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse
     * reaction event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$manifestation
     * @return static
     */
    public function setManifestation(FHIRCodeableConcept ...$manifestation): self
    {
        if ([] === $manifestation) {
            unset($this->manifestation);
            return $this;
        }
        $this->manifestation = $manifestation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text description about the reaction as a whole, including details of the
     * manifestation if required.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
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
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getOnset(): null|FHIRDateTime
    {
        return $this->onset ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $onset
     * @return static
     */
    public function setOnset(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onset): self
    {
        if (null === $onset) {
            unset($this->onset);
            return $this;
        }
        if (!($onset instanceof FHIRDateTime)) {
            $onset = new FHIRDateTime(value: $onset);
        }
        $this->onset = $onset;
        return $this;
    }

    /**
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity(): null|FHIRAllergyIntoleranceSeverity
    {
        return $this->severity ?? null;
    }

    /**
     * Clinical assessment of the severity of a reaction event as a whole, potentially
     * considering multiple different manifestations.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clinical assessment of the severity of the reaction event as a whole,
     * potentially considering multiple different manifestations.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     * @return static
     */
    public function setSeverity(null|string|FHIRAllergyIntoleranceSeverityList|FHIRAllergyIntoleranceSeverity $severity): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        if (!($severity instanceof FHIRAllergyIntoleranceSeverity)) {
            $severity = new FHIRAllergyIntoleranceSeverity(value: $severity);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getExposureRoute(): null|FHIRCodeableConcept
    {
        return $this->exposureRoute ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $exposureRoute
     * @return static
     */
    public function setExposureRoute(null|FHIRCodeableConcept $exposureRoute): self
    {
        if (null === $exposureRoute) {
            unset($this->exposureRoute);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAnnotation
     */
    public function getNote(): null|FHIRAnnotation
    {
        return $this->note ?? null;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function setNote(null|FHIRAnnotation $note): self
    {
        if (null === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAllergyIntoleranceReaction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBSTANCE === $cen) {
                $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CERTAINTY === $cen) {
                $type->setCertainty(FHIRAllergyIntoleranceCertainty::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANIFESTATION === $cen) {
                $type->addManifestation(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET === $cen) {
                $type->setOnset(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRAllergyIntoleranceSeverity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPOSURE_ROUTE === $cen) {
                $type->setExposureRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->setNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CERTAINTY])) {
            if (isset($type->certainty)) {
                $type->certainty->setValue((string)$attributes[self::FIELD_CERTAINTY]);
            } else {
                $type->setCertainty((string)$attributes[self::FIELD_CERTAINTY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CERTAINTY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ONSET])) {
            if (isset($type->onset)) {
                $type->onset->setValue((string)$attributes[self::FIELD_ONSET]);
            } else {
                $type->setOnset((string)$attributes[self::FIELD_ONSET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ONSET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEVERITY])) {
            if (isset($type->severity)) {
                $type->severity->setValue((string)$attributes[self::FIELD_SEVERITY]);
            } else {
                $type->setSeverity((string)$attributes[self::FIELD_SEVERITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEVERITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->certainty) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CERTAINTY]) {
            $xw->writeAttribute(self::FIELD_CERTAINTY, $this->certainty->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->onset) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET]) {
            $xw->writeAttribute(self::FIELD_ONSET, $this->onset->_getValueAsString());
        }
        if (isset($this->severity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEVERITY]) {
            $xw->writeAttribute(self::FIELD_SEVERITY, $this->severity->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->substance)) {
            $xw->startElement(self::FIELD_SUBSTANCE);
            $this->substance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->certainty)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CERTAINTY]
                || $this->certainty->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CERTAINTY);
            $this->certainty->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CERTAINTY]);
            $xw->endElement();
        }
        if (isset($this->manifestation)) {
            foreach ($this->manifestation as $v) {
                $xw->startElement(self::FIELD_MANIFESTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->onset)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET]
                || $this->onset->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET);
            $this->onset->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET]);
            $xw->endElement();
        }
        if (isset($this->severity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEVERITY]
                || $this->severity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEVERITY]);
            $xw->endElement();
        }
        if (isset($this->exposureRoute)) {
            $xw->startElement(self::FIELD_EXPOSURE_ROUTE);
            $this->exposureRoute->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            $xw->startElement(self::FIELD_NOTE);
            $this->note->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAllergyIntoleranceReaction)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->substance) || property_exists($json, self::FIELD_SUBSTANCE)) {
            if (is_array($json->substance)) {
                $type->setSubstance(FHIRCodeableConcept::jsonUnserialize(reset($json->substance), $config));
            } else {
                $type->setSubstance(FHIRCodeableConcept::jsonUnserialize($json->substance, $config));
            }
        }
        if (isset($json->certainty)
            || isset($json->_certainty)
            || property_exists($json, self::FIELD_CERTAINTY)
            || property_exists($json, self::FIELD_CERTAINTY_EXT)) {
            $v = $json->_certainty ?? new \stdClass();
            $v->value = $json->certainty ?? null;
            $type->setCertainty(FHIRAllergyIntoleranceCertainty::jsonUnserialize($v, $config));
        }
        if (isset($json->manifestation) || property_exists($json, self::FIELD_MANIFESTATION)) {
            if (is_object($json->manifestation)) {
                $vals = [$json->manifestation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MANIFESTATION, true);
            } else {
                $vals = $json->manifestation;
            }
            foreach($vals as $v) {
                $type->addManifestation(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->description)
            || isset($json->_description)
            || property_exists($json, self::FIELD_DESCRIPTION)
            || property_exists($json, self::FIELD_DESCRIPTION_EXT)) {
            $v = $json->_description ?? new \stdClass();
            $v->value = $json->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->onset)
            || isset($json->_onset)
            || property_exists($json, self::FIELD_ONSET)
            || property_exists($json, self::FIELD_ONSET_EXT)) {
            $v = $json->_onset ?? new \stdClass();
            $v->value = $json->onset ?? null;
            $type->setOnset(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->severity)
            || isset($json->_severity)
            || property_exists($json, self::FIELD_SEVERITY)
            || property_exists($json, self::FIELD_SEVERITY_EXT)) {
            $v = $json->_severity ?? new \stdClass();
            $v->value = $json->severity ?? null;
            $type->setSeverity(FHIRAllergyIntoleranceSeverity::jsonUnserialize($v, $config));
        }
        if (isset($json->exposureRoute) || property_exists($json, self::FIELD_EXPOSURE_ROUTE)) {
            if (is_array($json->exposureRoute)) {
                $type->setExposureRoute(FHIRCodeableConcept::jsonUnserialize(reset($json->exposureRoute), $config));
            } else {
                $type->setExposureRoute(FHIRCodeableConcept::jsonUnserialize($json->exposureRoute, $config));
            }
        }
        if (isset($json->note) || property_exists($json, self::FIELD_NOTE)) {
            if (is_array($json->note)) {
                $type->setNote(FHIRAnnotation::jsonUnserialize(reset($json->note), $config));
            } else {
                $type->setNote(FHIRAnnotation::jsonUnserialize($json->note, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->substance)) {
            $out->substance = $this->substance;
        }
        if (isset($this->certainty)) {
            if (null !== ($val = $this->certainty->getValue())) {
                $out->certainty = $val;
            }
            if ($this->certainty->_nonValueFieldDefined()) {
                $ext = $this->certainty->jsonSerialize();
                unset($ext->value);
                $out->_certainty = $ext;
            }
        }
        if (isset($this->manifestation) && [] !== $this->manifestation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANIFESTATION) && 1 === count($this->manifestation)) {
                $out->manifestation = $this->manifestation[0];
            } else {
                $out->manifestation = $this->manifestation;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->onset)) {
            if (null !== ($val = $this->onset->getValue())) {
                $out->onset = $val;
            }
            if ($this->onset->_nonValueFieldDefined()) {
                $ext = $this->onset->jsonSerialize();
                unset($ext->value);
                $out->_onset = $ext;
            }
        }
        if (isset($this->severity)) {
            if (null !== ($val = $this->severity->getValue())) {
                $out->severity = $val;
            }
            if ($this->severity->_nonValueFieldDefined()) {
                $ext = $this->severity->jsonSerialize();
                unset($ext->value);
                $out->_severity = $ext;
            }
        }
        if (isset($this->exposureRoute)) {
            $out->exposureRoute = $this->exposureRoute;
        }
        if (isset($this->note)) {
            $out->note = $this->note;
        }
        return $out;
    }
}