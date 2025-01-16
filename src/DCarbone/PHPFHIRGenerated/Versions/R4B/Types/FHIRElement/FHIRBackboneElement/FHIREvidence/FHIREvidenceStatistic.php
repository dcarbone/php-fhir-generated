<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (eg population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 */
class FHIREvidenceStatistic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC;


    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_NOTE = 'note';
    public const FIELD_STATISTIC_TYPE = 'statisticType';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_NUMBER_OF_EVENTS = 'numberOfEvents';
    public const FIELD_NUMBER_OF_EVENTS_EXT = '_numberOfEvents';
    public const FIELD_NUMBER_AFFECTED = 'numberAffected';
    public const FIELD_NUMBER_AFFECTED_EXT = '_numberAffected';
    public const FIELD_SAMPLE_SIZE = 'sampleSize';
    public const FIELD_ATTRIBUTE_ESTIMATE = 'attributeEstimate';
    public const FIELD_MODEL_CHARACTERISTIC = 'modelCharacteristic';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, eg relative risk.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $statisticType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $numberOfEvents;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $numberAffected;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize 
     */
    protected FHIREvidenceSampleSize $sampleSize;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[] 
     */
    protected array $attributeEstimate;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[] 
     */
    protected array $modelCharacteristic;

    /** Default validation map for fields in type Evidence.Statistic */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIREvidenceStatistic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $statisticType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $numberOfEvents
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $numberAffected
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $sampleSize
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[] $attributeEstimate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[] $modelCharacteristic
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|iterable $note = null,
                                null|FHIRCodeableConcept $statisticType = null,
                                null|FHIRCodeableConcept $category = null,
                                null|FHIRQuantity $quantity = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfEvents = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberAffected = null,
                                null|FHIREvidenceSampleSize $sampleSize = null,
                                null|iterable $attributeEstimate = null,
                                null|iterable $modelCharacteristic = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $statisticType) {
            $this->setStatisticType($statisticType);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $numberOfEvents) {
            $this->setNumberOfEvents($numberOfEvents);
        }
        if (null !== $numberAffected) {
            $this->setNumberAffected($numberAffected);
        }
        if (null !== $sampleSize) {
            $this->setSampleSize($sampleSize);
        }
        if (null !== $attributeEstimate) {
            $this->setAttributeEstimate(...$attributeEstimate);
        }
        if (null !== $modelCharacteristic) {
            $this->setModelCharacteristic(...$modelCharacteristic);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, eg relative risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStatisticType(): null|FHIRCodeableConcept
    {
        return $this->statisticType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, eg relative risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $statisticType
     * @return static
     */
    public function setStatisticType(null|FHIRCodeableConcept $statisticType): self
    {
        if (null === $statisticType) {
            unset($this->statisticType);
            return $this;
        }
        $this->statisticType = $statisticType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the measured variable is handled categorically, the category element is
     * used to define which category the statistic is reporting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Statistic value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfEvents(): null|FHIRUnsignedInt
    {
        return $this->numberOfEvents ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of events associated with the statistic, where the unit of analysis
     * is different from numberAffected, sampleSize.knownDataCount and
     * sampleSize.numberOfParticipants.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $numberOfEvents
     * @return static
     */
    public function setNumberOfEvents(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfEvents): self
    {
        if (null === $numberOfEvents) {
            unset($this->numberOfEvents);
            return $this;
        }
        if (!($numberOfEvents instanceof FHIRUnsignedInt)) {
            $numberOfEvents = new FHIRUnsignedInt(value: $numberOfEvents);
        }
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberAffected(): null|FHIRUnsignedInt
    {
        return $this->numberAffected ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt $numberAffected
     * @return static
     */
    public function setNumberAffected(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberAffected): self
    {
        if (null === $numberAffected) {
            unset($this->numberAffected);
            return $this;
        }
        if (!($numberAffected instanceof FHIRUnsignedInt)) {
            $numberAffected = new FHIRUnsignedInt(value: $numberAffected);
        }
        $this->numberAffected = $numberAffected;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     */
    public function getSampleSize(): null|FHIREvidenceSampleSize
    {
        return $this->sampleSize ?? null;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $sampleSize
     * @return static
     */
    public function setSampleSize(null|FHIREvidenceSampleSize $sampleSize): self
    {
        if (null === $sampleSize) {
            unset($this->sampleSize);
            return $this;
        }
        $this->sampleSize = $sampleSize;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate[]
     */
    public function getAttributeEstimate(): array
    {
        return $this->attributeEstimate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate>
     */
    public function getAttributeEstimateIterator(): iterable
    {
        if (!isset($this->attributeEstimate) || [] === $this->attributeEstimate) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->attributeEstimate);
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate $attributeEstimate
     * @return static
     */
    public function addAttributeEstimate(FHIREvidenceAttributeEstimate $attributeEstimate): self
    {
        if (!isset($this->attributeEstimate)) {
            $this->attributeEstimate = [];
        }
        $this->attributeEstimate[] = $attributeEstimate;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate ...$attributeEstimate
     * @return static
     */
    public function setAttributeEstimate(FHIREvidenceAttributeEstimate ...$attributeEstimate): self
    {
        $this->attributeEstimate = $attributeEstimate;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic[]
     */
    public function getModelCharacteristic(): array
    {
        return $this->modelCharacteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic>
     */
    public function getModelCharacteristicIterator(): iterable
    {
        if (!isset($this->modelCharacteristic) || [] === $this->modelCharacteristic) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modelCharacteristic);
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic $modelCharacteristic
     * @return static
     */
    public function addModelCharacteristic(FHIREvidenceModelCharacteristic $modelCharacteristic): self
    {
        if (!isset($this->modelCharacteristic)) {
            $this->modelCharacteristic = [];
        }
        $this->modelCharacteristic[] = $modelCharacteristic;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic ...$modelCharacteristic
     * @return static
     */
    public function setModelCharacteristic(FHIREvidenceModelCharacteristic ...$modelCharacteristic): self
    {
        $this->modelCharacteristic = $modelCharacteristic;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATISTIC_TYPE])) {
            $v = $this->getStatisticType();
            foreach($validationRules[self::FIELD_STATISTIC_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATISTIC_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATISTIC_TYPE])) {
                        $errs[self::FIELD_STATISTIC_TYPE] = [];
                    }
                    $errs[self::FIELD_STATISTIC_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_EVENTS])) {
            $v = $this->getNumberOfEvents();
            foreach($validationRules[self::FIELD_NUMBER_OF_EVENTS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_OF_EVENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_EVENTS])) {
                        $errs[self::FIELD_NUMBER_OF_EVENTS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_EVENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_AFFECTED])) {
            $v = $this->getNumberAffected();
            foreach($validationRules[self::FIELD_NUMBER_AFFECTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_AFFECTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_AFFECTED])) {
                        $errs[self::FIELD_NUMBER_AFFECTED] = [];
                    }
                    $errs[self::FIELD_NUMBER_AFFECTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SAMPLE_SIZE])) {
            $v = $this->getSampleSize();
            foreach($validationRules[self::FIELD_SAMPLE_SIZE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SAMPLE_SIZE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SAMPLE_SIZE])) {
                        $errs[self::FIELD_SAMPLE_SIZE] = [];
                    }
                    $errs[self::FIELD_SAMPLE_SIZE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTRIBUTE_ESTIMATE])) {
            $v = $this->getAttributeEstimate();
            foreach($validationRules[self::FIELD_ATTRIBUTE_ESTIMATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ATTRIBUTE_ESTIMATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTRIBUTE_ESTIMATE])) {
                        $errs[self::FIELD_ATTRIBUTE_ESTIMATE] = [];
                    }
                    $errs[self::FIELD_ATTRIBUTE_ESTIMATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODEL_CHARACTERISTIC])) {
            $v = $this->getModelCharacteristic();
            foreach($validationRules[self::FIELD_MODEL_CHARACTERISTIC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODEL_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODEL_CHARACTERISTIC])) {
                        $errs[self::FIELD_MODEL_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_MODEL_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceStatistic)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATISTIC_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setStatisticType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CATEGORY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER_OF_EVENTS === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNumberOfEvents(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER_AFFECTED === $childName) {
                $v = new FHIRUnsignedInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNumberAffected(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SAMPLE_SIZE === $childName) {
                $v = new FHIREvidenceSampleSize();
                $type->setSampleSize(FHIREvidenceSampleSize::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ATTRIBUTE_ESTIMATE === $childName) {
                $v = new FHIREvidenceAttributeEstimate();
                $type->addAttributeEstimate(FHIREvidenceAttributeEstimate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODEL_CHARACTERISTIC === $childName) {
                $v = new FHIREvidenceModelCharacteristic();
                $type->addModelCharacteristic(FHIREvidenceModelCharacteristic::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_EVENTS])) {
            $pt = $type->getNumberOfEvents();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER_OF_EVENTS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumberOfEvents(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_NUMBER_OF_EVENTS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_AFFECTED])) {
            $pt = $type->getNumberAffected();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER_AFFECTED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumberAffected(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_NUMBER_AFFECTED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'EvidenceStatistic', $this->_getSourceXMLNS());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->numberOfEvents) && $this->numberOfEvents->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_EVENTS, $this->numberOfEvents->getValue()?->getFormattedValue());
        }
        if (isset($this->numberAffected) && $this->numberAffected->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER_AFFECTED, $this->numberAffected->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->statisticType)) {
            $xw->startElement(self::FIELD_STATISTIC_TYPE);
            $this->statisticType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->numberOfEvents) && $this->numberOfEvents->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER_OF_EVENTS);
            $this->numberOfEvents->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->numberAffected) && $this->numberAffected->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER_AFFECTED);
            $this->numberAffected->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sampleSize)) {
            $xw->startElement(self::FIELD_SAMPLE_SIZE);
            $this->sampleSize->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->attributeEstimate)) {
            foreach ($this->attributeEstimate as $v) {
                $xw->startElement(self::FIELD_ATTRIBUTE_ESTIMATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modelCharacteristic)) {
            foreach ($this->modelCharacteristic as $v) {
                $xw->startElement(self::FIELD_MODEL_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceStatistic)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        if (isset($json[self::FIELD_STATISTIC_TYPE]) || array_key_exists(self::FIELD_STATISTIC_TYPE, $json)) {
            if ($json[self::FIELD_STATISTIC_TYPE] instanceof FHIRCodeableConcept) {
                $type->setStatisticType($json[self::FIELD_STATISTIC_TYPE]);
            } else {
                $type->setStatisticType(new FHIRCodeableConcept($json[self::FIELD_STATISTIC_TYPE]));
            }
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            if ($json[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $type->setCategory($json[self::FIELD_CATEGORY]);
            } else {
                $type->setCategory(new FHIRCodeableConcept($json[self::FIELD_CATEGORY]));
            }
        }
        if (isset($json[self::FIELD_QUANTITY]) || array_key_exists(self::FIELD_QUANTITY, $json)) {
            if ($json[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $type->setQuantity($json[self::FIELD_QUANTITY]);
            } else {
                $type->setQuantity(new FHIRQuantity($json[self::FIELD_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_NUMBER_OF_EVENTS]) || isset($json[self::FIELD_NUMBER_OF_EVENTS_EXT]) || array_key_exists(self::FIELD_NUMBER_OF_EVENTS, $json) || array_key_exists(self::FIELD_NUMBER_OF_EVENTS_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_EVENTS] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_OF_EVENTS_EXT]) && is_array($json[self::FIELD_NUMBER_OF_EVENTS_EXT])) ? $json[self::FIELD_NUMBER_OF_EVENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setNumberOfEvents($value);
                } else if (is_array($value)) {
                    $type->setNumberOfEvents(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setNumberOfEvents(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumberOfEvents(new FHIRUnsignedInt($ext));
            } else {
                $type->setNumberOfEvents(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_NUMBER_AFFECTED]) || isset($json[self::FIELD_NUMBER_AFFECTED_EXT]) || array_key_exists(self::FIELD_NUMBER_AFFECTED, $json) || array_key_exists(self::FIELD_NUMBER_AFFECTED_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_AFFECTED] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_AFFECTED_EXT]) && is_array($json[self::FIELD_NUMBER_AFFECTED_EXT])) ? $json[self::FIELD_NUMBER_AFFECTED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setNumberAffected($value);
                } else if (is_array($value)) {
                    $type->setNumberAffected(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setNumberAffected(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumberAffected(new FHIRUnsignedInt($ext));
            } else {
                $type->setNumberAffected(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_SAMPLE_SIZE]) || array_key_exists(self::FIELD_SAMPLE_SIZE, $json)) {
            if ($json[self::FIELD_SAMPLE_SIZE] instanceof FHIREvidenceSampleSize) {
                $type->setSampleSize($json[self::FIELD_SAMPLE_SIZE]);
            } else {
                $type->setSampleSize(new FHIREvidenceSampleSize($json[self::FIELD_SAMPLE_SIZE]));
            }
        }
        if (isset($json[self::FIELD_ATTRIBUTE_ESTIMATE]) || array_key_exists(self::FIELD_ATTRIBUTE_ESTIMATE, $json)) {
            if (is_array($json[self::FIELD_ATTRIBUTE_ESTIMATE])) {
                foreach($json[self::FIELD_ATTRIBUTE_ESTIMATE] as $v) {
                    if ($v instanceof FHIREvidenceAttributeEstimate) {
                        $type->addAttributeEstimate($v);
                    } else {
                        $type->addAttributeEstimate(new FHIREvidenceAttributeEstimate($v));
                    }
                }
            } elseif ($json[self::FIELD_ATTRIBUTE_ESTIMATE] instanceof FHIREvidenceAttributeEstimate) {
                $type->addAttributeEstimate($json[self::FIELD_ATTRIBUTE_ESTIMATE]);
            } else {
                $type->addAttributeEstimate(new FHIREvidenceAttributeEstimate($json[self::FIELD_ATTRIBUTE_ESTIMATE]));
            }
        }
        if (isset($json[self::FIELD_MODEL_CHARACTERISTIC]) || array_key_exists(self::FIELD_MODEL_CHARACTERISTIC, $json)) {
            if (is_array($json[self::FIELD_MODEL_CHARACTERISTIC])) {
                foreach($json[self::FIELD_MODEL_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIREvidenceModelCharacteristic) {
                        $type->addModelCharacteristic($v);
                    } else {
                        $type->addModelCharacteristic(new FHIREvidenceModelCharacteristic($v));
                    }
                }
            } elseif ($json[self::FIELD_MODEL_CHARACTERISTIC] instanceof FHIREvidenceModelCharacteristic) {
                $type->addModelCharacteristic($json[self::FIELD_MODEL_CHARACTERISTIC]);
            } else {
                $type->addModelCharacteristic(new FHIREvidenceModelCharacteristic($json[self::FIELD_MODEL_CHARACTERISTIC]));
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
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->statisticType)) {
            $out->statisticType = $this->statisticType;
        }
        if (isset($this->category)) {
            $out->category = $this->category;
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->numberOfEvents)) {
            if (null !== ($val = $this->numberOfEvents->getValue())) {
                $out->numberOfEvents = $val;
            }
            $ext = $this->numberOfEvents->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_numberOfEvents = $ext;
            }
        }
        if (isset($this->numberAffected)) {
            if (null !== ($val = $this->numberAffected->getValue())) {
                $out->numberAffected = $val;
            }
            $ext = $this->numberAffected->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_numberAffected = $ext;
            }
        }
        if (isset($this->sampleSize)) {
            $out->sampleSize = $this->sampleSize;
        }
        if (isset($this->attributeEstimate) && [] !== $this->attributeEstimate) {
            $out->attributeEstimate = $this->attributeEstimate;
        }
        if (isset($this->modelCharacteristic) && [] !== $this->modelCharacteristic) {
            $out->modelCharacteristic = $this->modelCharacteristic;
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