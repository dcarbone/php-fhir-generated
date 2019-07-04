<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRListMode;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

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
 * Class FHIRCompositionSection
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionSection extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION;

    const FIELD_AUTHOR = 'author';
    const FIELD_CODE = 'code';
    const FIELD_EMPTY_REASON = 'emptyReason';
    const FIELD_ENTRY = 'entry';
    const FIELD_FOCUS = 'focus';
    const FIELD_MODE = 'mode';
    const FIELD_ORDERED_BY = 'orderedBy';
    const FIELD_SECTION = 'section';
    const FIELD_TEXT = 'text';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $author = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $emptyReason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $entry = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $focus = null;

    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    private $mode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $orderedBy = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[]
     */
    private $section = [];

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    private $text = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * FHIRCompositionSection Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionSection::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_EMPTY_REASON])) {
            if ($data[self::FIELD_EMPTY_REASON] instanceof FHIRCodeableConcept) {
                $this->setEmptyReason($data[self::FIELD_EMPTY_REASON]);
            } else {
                $this->setEmptyReason(new FHIRCodeableConcept($data[self::FIELD_EMPTY_REASON]));
            }
        }
        if (isset($data[self::FIELD_ENTRY])) {
            if (is_array($data[self::FIELD_ENTRY])) {
                foreach($data[self::FIELD_ENTRY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEntry($v);
                    } else {
                        $this->addEntry(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENTRY] instanceof FHIRReference) {
                $this->addEntry($data[self::FIELD_ENTRY]);
            } else {
                $this->addEntry(new FHIRReference($data[self::FIELD_ENTRY]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRReference) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRReference($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_MODE])) {
            if ($data[self::FIELD_MODE] instanceof FHIRListMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } else {
                $this->setMode(new FHIRListMode($data[self::FIELD_MODE]));
            }
        }
        if (isset($data[self::FIELD_ORDERED_BY])) {
            if ($data[self::FIELD_ORDERED_BY] instanceof FHIRCodeableConcept) {
                $this->setOrderedBy($data[self::FIELD_ORDERED_BY]);
            } else {
                $this->setOrderedBy(new FHIRCodeableConcept($data[self::FIELD_ORDERED_BY]));
            }
        }
        if (isset($data[self::FIELD_SECTION])) {
            if (is_array($data[self::FIELD_SECTION])) {
                foreach($data[self::FIELD_SECTION] as $v) {
                    if ($v instanceof FHIRCompositionSection) {
                        $this->addSection($v);
                    } else {
                        $this->addSection(new FHIRCompositionSection($v));
                    }
                }
            } else if ($data[self::FIELD_SECTION] instanceof FHIRCompositionSection) {
                $this->addSection($data[self::FIELD_SECTION]);
            } else {
                $this->addSection(new FHIRCompositionSection($data[self::FIELD_SECTION]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            if ($data[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $this->setText($data[self::FIELD_TEXT]);
            } else {
                $this->setText(new FHIRNarrative($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT]))
                ? $data[self::FIELD_TITLE_EXT]
                : null;
            if ($data[self::FIELD_TITLE] instanceof FHIRString) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TITLE])) {
                $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TITLE]] + $ext));
            } else {
                $this->setTitle(new FHIRString($data[self::FIELD_TITLE]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function addAuthor(FHIRReference $author = null)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for the information in this section, not
     * necessarily who typed it in.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $author
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setAuthor(array $author = [])
    {
        $this->author = [];
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRReference($v));
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
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code identifying the kind of content contained within the section. This must
     * be consistent with the section title.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the section is empty, why the list is empty. An empty section typically has
     * some text explaining the empty reason.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $emptyReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setEmptyReason(FHIRCodeableConcept $emptyReason = null)
    {
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $entry
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function addEntry(FHIRReference $entry = null)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A reference to the actual resource from which the narrative in the section is
     * derived.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $entry
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setEntry(array $entry = [])
    {
        $this->entry = [];
        if ([] === $entry) {
            return $this;
        }
        foreach($entry as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEntry($v);
            } else {
                $this->addEntry(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $focus
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setFocus(FHIRReference $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The processing mode that applies to this section.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entry list was prepared - whether it is a working list that is suitable
     * for being maintained on an ongoing basis, or if it represents a snapshot of a
     * list of items from another source, or whether it is a prepared list where items
     * may be marked as added, modified or deleted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRListMode $mode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setMode(FHIRListMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order applied to the items in the section entries.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orderedBy
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setOrderedBy(FHIRCodeableConcept $orderedBy = null)
    {
        $this->orderedBy = $orderedBy;
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $section
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function addSection(FHIRCompositionSection $section = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection[] $section
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setSection(array $section = [])
    {
        $this->section = [];
        if ([] === $section) {
            return $this;
        }
        foreach($section as $v) {
            if ($v instanceof FHIRCompositionSection) {
                $this->addSection($v);
            } else {
                $this->addSection(new FHIRCompositionSection($v));
            }
        }
        return $this;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains the attested content of the section,
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative $text
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setText(FHIRNarrative $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The label for this particular section. This will be part of the rendered content
     * for the document, and is often used to build a table of contents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
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
                throw new \DomainException(sprintf('FHIRCompositionSection::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCompositionSection::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRCompositionSection);
        } elseif (!is_object($type) || !($type instanceof FHIRCompositionSection)) {
            throw new \RuntimeException(sprintf(
                'FHIRCompositionSection::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->emptyReason)) {
            $type->setEmptyReason(FHIRCodeableConcept::xmlUnserialize($children->emptyReason));
        }
        if (isset($children->entry)) {
            foreach($children->entry as $child) {
                $type->addEntry(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->focus)) {
            $type->setFocus(FHIRReference::xmlUnserialize($children->focus));
        }
        if (isset($children->mode)) {
            $type->setMode(FHIRListMode::xmlUnserialize($children->mode));
        }
        if (isset($children->orderedBy)) {
            $type->setOrderedBy(FHIRCodeableConcept::xmlUnserialize($children->orderedBy));
        }
        if (isset($children->section)) {
            foreach($children->section as $child) {
                $type->addSection(FHIRCompositionSection::xmlUnserialize($child));
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRNarrative::xmlUnserialize($children->text));
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CompositionSection xmlns="http://hl7.org/fhir"></CompositionSection>');
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getEmptyReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EMPTY_REASON));
        }
        if ([] !== ($vs = $this->getEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENTRY));
            }
        }
        if (null !== ($v = $this->getFocus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCUS));
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE));
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED_BY));
        }
        if ([] !== ($vs = $this->getSection())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECTION));
            }
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT));
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getEmptyReason())) {
            $a[self::FIELD_EMPTY_REASON] = $v;
        }
        if ([] !== ($vs = $this->getEntry())) {
            $a[self::FIELD_ENTRY] = $vs;
        }
        if (null !== ($v = $this->getFocus())) {
            $a[self::FIELD_FOCUS] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a[self::FIELD_MODE] = $v;
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $a[self::FIELD_ORDERED_BY] = $v;
        }
        if ([] !== ($vs = $this->getSection())) {
            $a[self::FIELD_SECTION] = $vs;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
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