<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRListMode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A set of healthcare-related information that is assembled together into a single
 * logical package that provides a single coherent statement of meaning,
 * establishes its own context and that has clinical attestation with regard to who
 * is making the statement. A Composition defines the structure and narrative
 * content necessary for a document. However, a Composition alone does not
 * constitute a document. Rather, the Composition must be the first entry in a
 * Bundle where Bundle.type=document, and any other resources referenced from
 * Composition must be included as subsequent entries in the Bundle (for example
 * Patient, Practitioner, Encounter, etc.).
 */
class FHIRCompositionSection extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COMPOSITION_DOT_SECTION;


    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_CODE = 'code';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_TEXT = 'text';
    public const FIELD_MODE = 'mode';
    public const FIELD_MODE_EXT = '_mode';
    public const FIELD_ORDERED_BY = 'orderedBy';
    public const FIELD_ENTRY = 'entry';
    public const FIELD_EMPTY_REASON = 'emptyReason';
    public const FIELD_SECTION = 'section';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $author;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual focus of the section when it is not the subject of the composition,
     * but instead represents something or someone associated with the subject such as
     * (for a patient subject) a spouse, parent, fetus, or donor. If not focus is
     * specified, the focus is assumed to be focus of the parent section, or, for a
     * section in the Composition itself, the subject of the composition. Sections with
     * a focus SHALL only include resources where the logical subject (patient,
     * subject, focus, etc.) matches the section focus, or the resources have no
     * logical subject (few resources).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $focus;
    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative 
     */
    protected FHIRNarrative $text;
    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRListMode 
     */
    protected FHIRListMode $mode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $orderedBy;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $entry;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $emptyReason;
    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     *
     * A nested sub-section within this section.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[] 
     */
    protected array $section;

    /** Default validation map for fields in type Composition.Section */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRCompositionSection Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $title
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $focus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRListMode $mode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $orderedBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $entry
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $emptyReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[] $section
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $author = null,
                                null|FHIRReference $focus = null,
                                null|FHIRNarrative $text = null,
                                null|FHIRListMode $mode = null,
                                null|FHIRCodeableConcept $orderedBy = null,
                                null|iterable $entry = null,
                                null|FHIRCodeableConcept $emptyReason = null,
                                null|iterable $section = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $title) {
            $this->setTitle($title);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $author) {
            $this->setAuthor(...$author);
        }
        if (null !== $focus) {
            $this->setFocus($focus);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $mode) {
            $this->setMode($mode);
        }
        if (null !== $orderedBy) {
            $this->setOrderedBy($orderedBy);
        }
        if (null !== $entry) {
            $this->setEntry(...$entry);
        }
        if (null !== $emptyReason) {
            $this->setEmptyReason($emptyReason);
        }
        if (null !== $section) {
            $this->setSection(...$section);
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
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getAuthor(): array
    {
        return $this->author ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getAuthorIterator(): iterable
    {
        if (!isset($this->author) || [] === $this->author) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->author);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $author
     * @return static
     */
    public function addAuthor(FHIRReference $author): self
    {
        if (!isset($this->author)) {
            $this->author = [];
        }
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$author
     * @return static
     */
    public function setAuthor(FHIRReference ...$author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual focus of the section when it is not the subject of the composition,
     * but instead represents something or someone associated with the subject such as
     * (for a patient subject) a spouse, parent, fetus, or donor. If not focus is
     * specified, the focus is assumed to be focus of the parent section, or, for a
     * section in the Composition itself, the subject of the composition. Sections with
     * a focus SHALL only include resources where the logical subject (patient,
     * subject, focus, etc.) matches the section focus, or the resources have no
     * logical subject (few resources).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual focus of the section when it is not the subject of the composition,
     * but instead represents something or someone associated with the subject such as
     * (for a patient subject) a spouse, parent, fetus, or donor. If not focus is
     * specified, the focus is assumed to be focus of the parent section, or, for a
     * section in the Composition itself, the subject of the composition. Sections with
     * a focus SHALL only include resources where the logical subject (patient,
     * subject, focus, etc.) matches the section focus, or the resources have no
     * logical subject (few resources).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus): self
    {
        if (null === $focus) {
            unset($this->focus);
            return $this;
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text ?? null;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @return static
     */
    public function setText(null|FHIRNarrative $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        $this->text = $text;
        return $this;
    }

    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRListMode
     */
    public function getMode(): null|FHIRListMode
    {
        return $this->mode ?? null;
    }

    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRListMode $mode
     * @return static
     */
    public function setMode(null|FHIRListMode $mode): self
    {
        if (null === $mode) {
            unset($this->mode);
            return $this;
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy(): null|FHIRCodeableConcept
    {
        return $this->orderedBy ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $orderedBy
     * @return static
     */
    public function setOrderedBy(null|FHIRCodeableConcept $orderedBy): self
    {
        if (null === $orderedBy) {
            unset($this->orderedBy);
            return $this;
        }
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getEntry(): array
    {
        return $this->entry ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getEntryIterator(): iterable
    {
        if (!isset($this->entry) || [] === $this->entry) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->entry);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $entry
     * @return static
     */
    public function addEntry(FHIRReference $entry): self
    {
        if (!isset($this->entry)) {
            $this->entry = [];
        }
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$entry
     * @return static
     */
    public function setEntry(FHIRReference ...$entry): self
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason(): null|FHIRCodeableConcept
    {
        return $this->emptyReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $emptyReason
     * @return static
     */
    public function setEmptyReason(null|FHIRCodeableConcept $emptyReason): self
    {
        if (null === $emptyReason) {
            unset($this->emptyReason);
            return $this;
        }
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     *
     * A nested sub-section within this section.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection(): array
    {
        return $this->section ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection>
     */
    public function getSectionIterator(): iterable
    {
        if (!isset($this->section) || [] === $this->section) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->section);
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     *
     * A nested sub-section within this section.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $section
     * @return static
     */
    public function addSection(FHIRCompositionSection $section): self
    {
        if (!isset($this->section)) {
            $this->section = [];
        }
        $this->section[] = $section;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical package that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement. A Composition defines the structure and narrative
     * content necessary for a document. However, a Composition alone does not
     * constitute a document. Rather, the Composition must be the first entry in a
     * Bundle where Bundle.type=document, and any other resources referenced from
     * Composition must be included as subsequent entries in the Bundle (for example
     * Patient, Practitioner, Encounter, etc.).
     *
     * A nested sub-section within this section.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection ...$section
     * @return static
     */
    public function setSection(FHIRCompositionSection ...$section): self
    {
        $this->section = $section;
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
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED_BY])) {
            $v = $this->getOrderedBy();
            foreach($validationRules[self::FIELD_ORDERED_BY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDERED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED_BY])) {
                        $errs[self::FIELD_ORDERED_BY] = [];
                    }
                    $errs[self::FIELD_ORDERED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTRY])) {
            $v = $this->getEntry();
            foreach($validationRules[self::FIELD_ENTRY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTRY])) {
                        $errs[self::FIELD_ENTRY] = [];
                    }
                    $errs[self::FIELD_ENTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EMPTY_REASON])) {
            $v = $this->getEmptyReason();
            foreach($validationRules[self::FIELD_EMPTY_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EMPTY_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EMPTY_REASON])) {
                        $errs[self::FIELD_EMPTY_REASON] = [];
                    }
                    $errs[self::FIELD_EMPTY_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECTION])) {
            $v = $this->getSection();
            foreach($validationRules[self::FIELD_SECTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECTION])) {
                        $errs[self::FIELD_SECTION] = [];
                    }
                    $errs[self::FIELD_SECTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCompositionSection)) {
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
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AUTHOR === $childName) {
                $v = new FHIRReference();
                $type->addAuthor(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FOCUS === $childName) {
                $v = new FHIRReference();
                $type->setFocus(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODE === $childName) {
                $v = new FHIRListMode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMode(FHIRListMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORDERED_BY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setOrderedBy(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENTRY === $childName) {
                $v = new FHIRReference();
                $type->addEntry(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EMPTY_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setEmptyReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SECTION === $childName) {
                $v = new FHIRCompositionSection();
                $type->addSection(FHIRCompositionSection::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle(new FHIRString(
                    value: (string)$attributes[self::FIELD_TITLE],
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
            $xw->openRootNode('CompositionSection', $this->_getSourceXMLNS());
        }
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->author)) {
            foreach ($this->author as $v) {
                $xw->startElement(self::FIELD_AUTHOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->focus)) {
            $xw->startElement(self::FIELD_FOCUS);
            $this->focus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->text)) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->mode)) {
            $xw->startElement(self::FIELD_MODE);
            $this->mode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->orderedBy)) {
            $xw->startElement(self::FIELD_ORDERED_BY);
            $this->orderedBy->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->entry)) {
            foreach ($this->entry as $v) {
                $xw->startElement(self::FIELD_ENTRY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->emptyReason)) {
            $xw->startElement(self::FIELD_EMPTY_REASON);
            $this->emptyReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->section)) {
            foreach ($this->section as $v) {
                $xw->startElement(self::FIELD_SECTION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCompositionSection)) {
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
        if (isset($json[self::FIELD_TITLE]) || isset($json[self::FIELD_TITLE_EXT]) || array_key_exists(self::FIELD_TITLE, $json) || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $ext = (isset($json[self::FIELD_TITLE_EXT]) && is_array($json[self::FIELD_TITLE_EXT])) ? $json[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTitle($value);
                } else if (is_array($value)) {
                    $type->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTitle(new FHIRString($ext));
            } else {
                $type->setTitle(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_AUTHOR]) || array_key_exists(self::FIELD_AUTHOR, $json)) {
            if (is_array($json[self::FIELD_AUTHOR])) {
                foreach($json[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addAuthor($v);
                    } else {
                        $type->addAuthor(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $type->addAuthor($json[self::FIELD_AUTHOR]);
            } else {
                $type->addAuthor(new FHIRReference($json[self::FIELD_AUTHOR]));
            }
        }
        if (isset($json[self::FIELD_FOCUS]) || array_key_exists(self::FIELD_FOCUS, $json)) {
            if ($json[self::FIELD_FOCUS] instanceof FHIRReference) {
                $type->setFocus($json[self::FIELD_FOCUS]);
            } else {
                $type->setFocus(new FHIRReference($json[self::FIELD_FOCUS]));
            }
        }
        if (isset($json[self::FIELD_TEXT]) || array_key_exists(self::FIELD_TEXT, $json)) {
            if ($json[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $type->setText($json[self::FIELD_TEXT]);
            } else {
                $type->setText(new FHIRNarrative($json[self::FIELD_TEXT]));
            }
        }
        if (isset($json[self::FIELD_MODE]) || isset($json[self::FIELD_MODE_EXT]) || array_key_exists(self::FIELD_MODE, $json) || array_key_exists(self::FIELD_MODE_EXT, $json)) {
            $value = $json[self::FIELD_MODE] ?? null;
            $ext = (isset($json[self::FIELD_MODE_EXT]) && is_array($json[self::FIELD_MODE_EXT])) ? $json[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRListMode) {
                    $type->setMode($value);
                } else if (is_array($value)) {
                    $type->setMode(new FHIRListMode(array_merge($ext, $value)));
                } else {
                    $type->setMode(new FHIRListMode([FHIRListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMode(new FHIRListMode($ext));
            } else {
                $type->setMode(new FHIRListMode(null));
            }
        }
        if (isset($json[self::FIELD_ORDERED_BY]) || array_key_exists(self::FIELD_ORDERED_BY, $json)) {
            if ($json[self::FIELD_ORDERED_BY] instanceof FHIRCodeableConcept) {
                $type->setOrderedBy($json[self::FIELD_ORDERED_BY]);
            } else {
                $type->setOrderedBy(new FHIRCodeableConcept($json[self::FIELD_ORDERED_BY]));
            }
        }
        if (isset($json[self::FIELD_ENTRY]) || array_key_exists(self::FIELD_ENTRY, $json)) {
            if (is_array($json[self::FIELD_ENTRY])) {
                foreach($json[self::FIELD_ENTRY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addEntry($v);
                    } else {
                        $type->addEntry(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_ENTRY] instanceof FHIRReference) {
                $type->addEntry($json[self::FIELD_ENTRY]);
            } else {
                $type->addEntry(new FHIRReference($json[self::FIELD_ENTRY]));
            }
        }
        if (isset($json[self::FIELD_EMPTY_REASON]) || array_key_exists(self::FIELD_EMPTY_REASON, $json)) {
            if ($json[self::FIELD_EMPTY_REASON] instanceof FHIRCodeableConcept) {
                $type->setEmptyReason($json[self::FIELD_EMPTY_REASON]);
            } else {
                $type->setEmptyReason(new FHIRCodeableConcept($json[self::FIELD_EMPTY_REASON]));
            }
        }
        if (isset($json[self::FIELD_SECTION]) || array_key_exists(self::FIELD_SECTION, $json)) {
            if (is_array($json[self::FIELD_SECTION])) {
                foreach($json[self::FIELD_SECTION] as $v) {
                    if ($v instanceof FHIRCompositionSection) {
                        $type->addSection($v);
                    } else {
                        $type->addSection(new FHIRCompositionSection($v));
                    }
                }
            } elseif ($json[self::FIELD_SECTION] instanceof FHIRCompositionSection) {
                $type->addSection($json[self::FIELD_SECTION]);
            } else {
                $type->addSection(new FHIRCompositionSection($json[self::FIELD_SECTION]));
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
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            $ext = $this->title->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_title = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->author) && [] !== $this->author) {
            $out->author = $this->author;
        }
        if (isset($this->focus)) {
            $out->focus = $this->focus;
        }
        if (isset($this->text)) {
            $out->text = $this->text;
        }
        if (isset($this->mode)) {
            if (null !== ($val = $this->mode->getValue())) {
                $out->mode = $val;
            }
            $ext = $this->mode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_mode = $ext;
            }
        }
        if (isset($this->orderedBy)) {
            $out->orderedBy = $this->orderedBy;
        }
        if (isset($this->entry) && [] !== $this->entry) {
            $out->entry = $this->entry;
        }
        if (isset($this->emptyReason)) {
            $out->emptyReason = $this->emptyReason;
        }
        if (isset($this->section) && [] !== $this->section) {
            $out->section = $this->section;
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