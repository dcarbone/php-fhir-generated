<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (e.g., population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIREvidenceStatistic extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER_OF_EVENTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER_AFFECTED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation> 
     */
    #[FHIRAnnotation]
    protected array $note;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, e.g., relative risk.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    #[FHIRUnsignedInt]
    protected FHIRUnsignedInt $numberOfEvents;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of participants affected where the unit of analysis is the same as
     * sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    #[FHIRUnsignedInt]
    protected FHIRUnsignedInt $numberAffected;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize 
     */
    #[FHIREvidenceSampleSize]
    protected FHIREvidenceSampleSize $sampleSize;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate> 
     */
    #[FHIREvidenceAttributeEstimate]
    protected array $attributeEstimate;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic> 
     */
    #[FHIREvidenceModelCharacteristic]
    protected array $modelCharacteristic;

    /* constructor.php:61 */
    /**
     * FHIREvidenceStatistic Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation> $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statisticType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfEvents
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberAffected
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $sampleSize
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate> $attributeEstimate
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic> $modelCharacteristic
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A description of the content value of the statistic.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of statistic, e.g., relative risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Type of statistic, e.g., relative risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statisticType
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $quantity
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfEvents
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberAffected
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
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     */
    public function getSampleSize(): null|FHIREvidenceSampleSize
    {
        return $this->sampleSize ?? null;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Number of samples in the statistic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $sampleSize
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
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate>
     */
    public function getAttributeEstimate(): array
    {
        return $this->attributeEstimate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate>
     */
    public function getAttributeEstimateIterator(): iterable
    {
        if (!isset($this->attributeEstimate)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->attributeEstimate);
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate $attributeEstimate
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
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate ...$attributeEstimate
     * @return static
     */
    public function setAttributeEstimate(FHIREvidenceAttributeEstimate ...$attributeEstimate): self
    {
        if ([] === $attributeEstimate) {
            unset($this->attributeEstimate);
            return $this;
        }
        $this->attributeEstimate = $attributeEstimate;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic>
     */
    public function getModelCharacteristic(): array
    {
        return $this->modelCharacteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic>
     */
    public function getModelCharacteristicIterator(): iterable
    {
        if (!isset($this->modelCharacteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modelCharacteristic);
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic $modelCharacteristic
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
     * concept including the evidence variables (e.g., population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * A component of the method to generate the statistic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic ...$modelCharacteristic
     * @return static
     */
    public function setModelCharacteristic(FHIREvidenceModelCharacteristic ...$modelCharacteristic): self
    {
        if ([] === $modelCharacteristic) {
            unset($this->modelCharacteristic);
            return $this;
        }
        $this->modelCharacteristic = $modelCharacteristic;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATISTIC_TYPE === $cen) {
                $type->setStatisticType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_OF_EVENTS === $cen) {
                $type->setNumberOfEvents(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_AFFECTED === $cen) {
                $type->setNumberAffected(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SAMPLE_SIZE === $cen) {
                $type->setSampleSize(FHIREvidenceSampleSize::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ATTRIBUTE_ESTIMATE === $cen) {
                $type->addAttributeEstimate(FHIREvidenceAttributeEstimate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODEL_CHARACTERISTIC === $cen) {
                $type->addModelCharacteristic(FHIREvidenceModelCharacteristic::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_EVENTS])) {
            if (isset($type->numberOfEvents)) {
                $type->numberOfEvents->setValue((string)$attributes[self::FIELD_NUMBER_OF_EVENTS]);
            } else {
                $type->setNumberOfEvents((string)$attributes[self::FIELD_NUMBER_OF_EVENTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NUMBER_OF_EVENTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER_AFFECTED])) {
            if (isset($type->numberAffected)) {
                $type->numberAffected->setValue((string)$attributes[self::FIELD_NUMBER_AFFECTED]);
            } else {
                $type->setNumberAffected((string)$attributes[self::FIELD_NUMBER_AFFECTED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NUMBER_AFFECTED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->numberOfEvents) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_EVENTS]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_EVENTS, $this->numberOfEvents->_getValueAsString());
        }
        if (isset($this->numberAffected) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_AFFECTED]) {
            $xw->writeAttribute(self::FIELD_NUMBER_AFFECTED, $this->numberAffected->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
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
        if (isset($this->numberOfEvents)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_OF_EVENTS]
                || $this->numberOfEvents->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_OF_EVENTS);
            $this->numberOfEvents->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_OF_EVENTS]);
            $xw->endElement();
        }
        if (isset($this->numberAffected)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_AFFECTED]
                || $this->numberAffected->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_AFFECTED);
            $this->numberAffected->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_AFFECTED]);
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
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->note) || property_exists($decoded, self::FIELD_NOTE)) {
            if (is_object($decoded->note)) {
                $vals = [$decoded->note];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_NOTE, true);
            } else {
                $vals = $decoded->note;
            }
            foreach($vals as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->statisticType) || property_exists($decoded, self::FIELD_STATISTIC_TYPE)) {
            if (is_array($decoded->statisticType)) {
                $type->setStatisticType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->statisticType), $config));
            } else {
                $type->setStatisticType(FHIRCodeableConcept::jsonUnserialize($decoded->statisticType, $config));
            }
        }
        if (isset($decoded->category) || property_exists($decoded, self::FIELD_CATEGORY)) {
            if (is_array($decoded->category)) {
                $type->setCategory(FHIRCodeableConcept::jsonUnserialize(reset($decoded->category), $config));
            } else {
                $type->setCategory(FHIRCodeableConcept::jsonUnserialize($decoded->category, $config));
            }
        }
        if (isset($decoded->quantity) || property_exists($decoded, self::FIELD_QUANTITY)) {
            if (is_array($decoded->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($decoded->quantity, $config));
            }
        }
        if (isset($decoded->numberOfEvents)
            || isset($decoded->_numberOfEvents)
            || property_exists($decoded, self::FIELD_NUMBER_OF_EVENTS)
            || property_exists($decoded, self::FIELD_NUMBER_OF_EVENTS_EXT)) {
            $v = $decoded->_numberOfEvents ?? new \stdClass();
            $v->value = $decoded->numberOfEvents ?? null;
            $type->setNumberOfEvents(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->numberAffected)
            || isset($decoded->_numberAffected)
            || property_exists($decoded, self::FIELD_NUMBER_AFFECTED)
            || property_exists($decoded, self::FIELD_NUMBER_AFFECTED_EXT)) {
            $v = $decoded->_numberAffected ?? new \stdClass();
            $v->value = $decoded->numberAffected ?? null;
            $type->setNumberAffected(FHIRUnsignedInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->sampleSize) || property_exists($decoded, self::FIELD_SAMPLE_SIZE)) {
            if (is_array($decoded->sampleSize)) {
                $type->setSampleSize(FHIREvidenceSampleSize::jsonUnserialize(reset($decoded->sampleSize), $config));
            } else {
                $type->setSampleSize(FHIREvidenceSampleSize::jsonUnserialize($decoded->sampleSize, $config));
            }
        }
        if (isset($decoded->attributeEstimate) || property_exists($decoded, self::FIELD_ATTRIBUTE_ESTIMATE)) {
            if (is_object($decoded->attributeEstimate)) {
                $vals = [$decoded->attributeEstimate];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ATTRIBUTE_ESTIMATE, true);
            } else {
                $vals = $decoded->attributeEstimate;
            }
            foreach($vals as $v) {
                $type->addAttributeEstimate(FHIREvidenceAttributeEstimate::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->modelCharacteristic) || property_exists($decoded, self::FIELD_MODEL_CHARACTERISTIC)) {
            if (is_object($decoded->modelCharacteristic)) {
                $vals = [$decoded->modelCharacteristic];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MODEL_CHARACTERISTIC, true);
            } else {
                $vals = $decoded->modelCharacteristic;
            }
            foreach($vals as $v) {
                $type->addModelCharacteristic(FHIREvidenceModelCharacteristic::jsonUnserialize($v, $config));
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
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_NOTE) && 1 === count($this->note)) {
                $out->note = $this->note[0];
            } else {
                $out->note = $this->note;
            }
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
            if ($this->numberOfEvents->_nonValueFieldDefined()) {
                $ext = $this->numberOfEvents->jsonSerialize();
                unset($ext->value);
                $out->_numberOfEvents = $ext;
            }
        }
        if (isset($this->numberAffected)) {
            if (null !== ($val = $this->numberAffected->getValue())) {
                $out->numberAffected = $val;
            }
            if ($this->numberAffected->_nonValueFieldDefined()) {
                $ext = $this->numberAffected->jsonSerialize();
                unset($ext->value);
                $out->_numberAffected = $ext;
            }
        }
        if (isset($this->sampleSize)) {
            $out->sampleSize = $this->sampleSize;
        }
        if (isset($this->attributeEstimate) && [] !== $this->attributeEstimate) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ATTRIBUTE_ESTIMATE) && 1 === count($this->attributeEstimate)) {
                $out->attributeEstimate = $this->attributeEstimate[0];
            } else {
                $out->attributeEstimate = $this->attributeEstimate;
            }
        }
        if (isset($this->modelCharacteristic) && [] !== $this->modelCharacteristic) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MODEL_CHARACTERISTIC) && 1 === count($this->modelCharacteristic)) {
                $out->modelCharacteristic = $this->modelCharacteristic[0];
            } else {
                $out->modelCharacteristic = $this->modelCharacteristic;
            }
        }
        return $out;
    }
}