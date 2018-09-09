<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRListMode;
use PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 *
 * Class FHIRCompositionSection
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionSection extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Composition.Section';

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $emptyReason = null;

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $entry = null;

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    public $mode = null;

    /**
     * Specifies the order applied to the items in the section entries.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $orderedBy = null;

    /**
     * A nested sub-section within this section.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public $section = null;

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public $text = null;

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * FHIRCompositionSection Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['emptyReason'])) {
                $this->setEmptyReason($data['emptyReason']);
            }
            if (isset($data['entry'])) {
                $this->setEntry($data['entry']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['orderedBy'])) {
                $this->setOrderedBy($data['orderedBy']);
            }
            if (isset($data['section'])) {
                $this->setSection($data['section']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthor(FHIRReference $author = null)
    {
        if (null === $author) {
            return $this; 
        }
        $this->author = $author;
        return $this;
    }

    /**
     * Identifies who is responsible for the information in this section, not necessarily who typed it in.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setEmptyReason(FHIRCodeableConcept $emptyReason = null)
    {
        if (null === $emptyReason) {
            return $this; 
        }
        $this->emptyReason = $emptyReason;
        return $this;
    }

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }


    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEntry(FHIRReference $entry = null)
    {
        if (null === $entry) {
            return $this; 
        }
        $this->entry = $entry;
        return $this;
    }

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEntry()
    {
        return $this->entry;
    }


    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRListMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRListMode($mode);
        }
        if (!($mode instanceof FHIRListMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionSection::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRListMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    public function getMode()
    {
        return $this->mode;
    }


    /**
     * Specifies the order applied to the items in the section entries.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOrderedBy(FHIRCodeableConcept $orderedBy = null)
    {
        if (null === $orderedBy) {
            return $this; 
        }
        $this->orderedBy = $orderedBy;
        return $this;
    }

    /**
     * Specifies the order applied to the items in the section entries.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }


    /**
     * A nested sub-section within this section.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     * @return $this
     */
    public function setSection(FHIRCompositionSection $section = null)
    {
        if (null === $section) {
            return $this; 
        }
        $this->section = $section;
        return $this;
    }

    /**
     * A nested sub-section within this section.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function getSection()
    {
        return $this->section;
    }


    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     * @return $this
     */
    public function setText(FHIRNarrative $text = null)
    {
        if (null === $text) {
            return $this; 
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionSection::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getEmptyReason())) {
            $a['emptyReason'] = $v;
        }
        if (null !== ($v = $this->getEntry())) {
            $a['entry'] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getOrderedBy())) {
            $a['orderedBy'] = $v;
        }
        if (null !== ($v = $this->getSection())) {
            $a['section'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CompositionSection xmlns="http://hl7.org/fhir"></CompositionSection>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}