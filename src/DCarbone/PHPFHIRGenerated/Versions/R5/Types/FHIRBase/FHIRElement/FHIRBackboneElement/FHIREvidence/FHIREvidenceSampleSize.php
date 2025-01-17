<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (e.g., population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 */
class FHIREvidenceSampleSize extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_DOT_SAMPLE_SIZE;


    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_NOTE = 'note';
    public const FIELD_NUMBER_OF_STUDIES = 'numberOfStudies';
    public const FIELD_NUMBER_OF_STUDIES_EXT = '_numberOfStudies';
    public const FIELD_NUMBER_OF_PARTICIPANTS = 'numberOfParticipants';
    public const FIELD_NUMBER_OF_PARTICIPANTS_EXT = '_numberOfParticipants';
    public const FIELD_KNOWN_DATA_COUNT = 'knownDataCount';
    public const FIELD_KNOWN_DATA_COUNT_EXT = '_knownDataCount';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-readable summary of population sample size.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnote or explanatory note about the sample size.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants in the population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $numberOfStudies;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $numberOfParticipants;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants with known results for measured variables.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $knownDataCount;

    /** Default validation map for fields in type Evidence.SampleSize */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIREvidenceSampleSize Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfStudies
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfParticipants
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $knownDataCount
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|iterable $note = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfStudies = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfParticipants = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $knownDataCount = null,
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
        if (null !== $numberOfStudies) {
            $this->setNumberOfStudies($numberOfStudies);
        }
        if (null !== $numberOfParticipants) {
            $this->setNumberOfParticipants($numberOfParticipants);
        }
        if (null !== $knownDataCount) {
            $this->setKnownDataCount($knownDataCount);
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-readable summary of population sample size.
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
     * Human-readable summary of population sample size.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * Footnote or explanatory note about the sample size.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
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
     * Footnote or explanatory note about the sample size.
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
     * Footnote or explanatory note about the sample size.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants in the population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfStudies(): null|FHIRUnsignedInt
    {
        return $this->numberOfStudies ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants in the population.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfStudies
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumberOfStudies(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfStudies,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $numberOfStudies) {
            unset($this->numberOfStudies);
            return $this;
        }
        if (!($numberOfStudies instanceof FHIRUnsignedInt)) {
            $numberOfStudies = new FHIRUnsignedInt(value: $numberOfStudies);
        }
        if (null !== $valueXMLLocation) {
            $numberOfStudies->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $numberOfStudies->_getValueXMLLocation()) {
            $numberOfStudies->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->numberOfStudies = $numberOfStudies;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfParticipants(): null|FHIRUnsignedInt
    {
        return $this->numberOfParticipants ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfParticipants
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumberOfParticipants(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfParticipants,
                                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $numberOfParticipants) {
            unset($this->numberOfParticipants);
            return $this;
        }
        if (!($numberOfParticipants instanceof FHIRUnsignedInt)) {
            $numberOfParticipants = new FHIRUnsignedInt(value: $numberOfParticipants);
        }
        if (null !== $valueXMLLocation) {
            $numberOfParticipants->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $numberOfParticipants->_getValueXMLLocation()) {
            $numberOfParticipants->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->numberOfParticipants = $numberOfParticipants;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants with known results for measured variables.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getKnownDataCount(): null|FHIRUnsignedInt
    {
        return $this->knownDataCount ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants with known results for measured variables.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $knownDataCount
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setKnownDataCount(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $knownDataCount,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $knownDataCount) {
            unset($this->knownDataCount);
            return $this;
        }
        if (!($knownDataCount instanceof FHIRUnsignedInt)) {
            $knownDataCount = new FHIRUnsignedInt(value: $knownDataCount);
        }
        if (null !== $valueXMLLocation) {
            $knownDataCount->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $knownDataCount->_getValueXMLLocation()) {
            $knownDataCount->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->knownDataCount = $knownDataCount;
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
        if (isset($validationRules[self::FIELD_NUMBER_OF_STUDIES])) {
            $v = $this->getNumberOfStudies();
            foreach($validationRules[self::FIELD_NUMBER_OF_STUDIES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_OF_STUDIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_STUDIES])) {
                        $errs[self::FIELD_NUMBER_OF_STUDIES] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_STUDIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
            $v = $this->getNumberOfParticipants();
            foreach($validationRules[self::FIELD_NUMBER_OF_PARTICIPANTS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_OF_PARTICIPANTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
                        $errs[self::FIELD_NUMBER_OF_PARTICIPANTS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_PARTICIPANTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KNOWN_DATA_COUNT])) {
            $v = $this->getKnownDataCount();
            foreach($validationRules[self::FIELD_KNOWN_DATA_COUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KNOWN_DATA_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KNOWN_DATA_COUNT])) {
                        $errs[self::FIELD_KNOWN_DATA_COUNT] = [];
                    }
                    $errs[self::FIELD_KNOWN_DATA_COUNT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceSampleSize)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER_OF_STUDIES === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNumberOfStudies(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUMBER_OF_PARTICIPANTS === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNumberOfParticipants(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_KNOWN_DATA_COUNT === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setKnownDataCount(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_STUDIES])) {
            $pt = $type->getNumberOfStudies();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NUMBER_OF_STUDIES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumberOfStudies(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_NUMBER_OF_STUDIES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
            $pt = $type->getNumberOfParticipants();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NUMBER_OF_PARTICIPANTS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumberOfParticipants(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_NUMBER_OF_PARTICIPANTS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_KNOWN_DATA_COUNT])) {
            $pt = $type->getKnownDataCount();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_KNOWN_DATA_COUNT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setKnownDataCount(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_KNOWN_DATA_COUNT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('EvidenceSampleSize', $this->_getSourceXMLNS());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->numberOfStudies) && $this->numberOfStudies->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_STUDIES, $this->numberOfStudies->getValue()?->_getFormattedValue());
        }
        if (isset($this->numberOfParticipants) && $this->numberOfParticipants->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_PARTICIPANTS, $this->numberOfParticipants->getValue()?->_getFormattedValue());
        }
        if (isset($this->knownDataCount) && $this->knownDataCount->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_KNOWN_DATA_COUNT, $this->knownDataCount->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
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
        if (isset($this->numberOfStudies) && $this->numberOfStudies->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER_OF_STUDIES);
            $this->numberOfStudies->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->numberOfParticipants) && $this->numberOfParticipants->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER_OF_PARTICIPANTS);
            $this->numberOfParticipants->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->knownDataCount) && $this->knownDataCount->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_KNOWN_DATA_COUNT);
            $this->knownDataCount->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceSampleSize)) {
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
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
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
        if (isset($json[self::FIELD_NUMBER_OF_STUDIES]) || isset($json[self::FIELD_NUMBER_OF_STUDIES_EXT]) || array_key_exists(self::FIELD_NUMBER_OF_STUDIES, $json) || array_key_exists(self::FIELD_NUMBER_OF_STUDIES_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_STUDIES] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_OF_STUDIES_EXT]) && is_array($json[self::FIELD_NUMBER_OF_STUDIES_EXT])) ? $json[self::FIELD_NUMBER_OF_STUDIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setNumberOfStudies($value);
                } else if (is_array($value)) {
                    $type->setNumberOfStudies(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setNumberOfStudies(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumberOfStudies(new FHIRUnsignedInt($ext));
            } else {
                $type->setNumberOfStudies(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_NUMBER_OF_PARTICIPANTS]) || isset($json[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT]) || array_key_exists(self::FIELD_NUMBER_OF_PARTICIPANTS, $json) || array_key_exists(self::FIELD_NUMBER_OF_PARTICIPANTS_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_PARTICIPANTS] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT]) && is_array($json[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT])) ? $json[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setNumberOfParticipants($value);
                } else if (is_array($value)) {
                    $type->setNumberOfParticipants(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setNumberOfParticipants(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumberOfParticipants(new FHIRUnsignedInt($ext));
            } else {
                $type->setNumberOfParticipants(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_KNOWN_DATA_COUNT]) || isset($json[self::FIELD_KNOWN_DATA_COUNT_EXT]) || array_key_exists(self::FIELD_KNOWN_DATA_COUNT, $json) || array_key_exists(self::FIELD_KNOWN_DATA_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_KNOWN_DATA_COUNT] ?? null;
            $ext = (isset($json[self::FIELD_KNOWN_DATA_COUNT_EXT]) && is_array($json[self::FIELD_KNOWN_DATA_COUNT_EXT])) ? $json[self::FIELD_KNOWN_DATA_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setKnownDataCount($value);
                } else if (is_array($value)) {
                    $type->setKnownDataCount(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setKnownDataCount(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setKnownDataCount(new FHIRUnsignedInt($ext));
            } else {
                $type->setKnownDataCount(new FHIRUnsignedInt(null));
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
        if (isset($this->numberOfStudies)) {
            if (null !== ($val = $this->numberOfStudies->getValue())) {
                $out->numberOfStudies = $val;
            }
            $ext = $this->numberOfStudies->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_numberOfStudies = $ext;
            }
        }
        if (isset($this->numberOfParticipants)) {
            if (null !== ($val = $this->numberOfParticipants->getValue())) {
                $out->numberOfParticipants = $val;
            }
            $ext = $this->numberOfParticipants->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_numberOfParticipants = $ext;
            }
        }
        if (isset($this->knownDataCount)) {
            if (null !== ($val = $this->knownDataCount->getValue())) {
                $out->knownDataCount = $val;
            }
            $ext = $this->knownDataCount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_knownDataCount = $ext;
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