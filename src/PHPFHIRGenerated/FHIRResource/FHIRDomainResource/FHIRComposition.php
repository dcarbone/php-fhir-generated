<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRVConfidentialityClassification;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A set of healthcare-related information that is assembled together into a single logical package that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. A Composition defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type=document, and any other resources referenced from Composition must be included as subsequent entries in the Bundle (for example Patient, Practitioner, Encounter, etc.).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRComposition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRComposition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Composition';

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester
     */
    public $attester = null;

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVConfidentialityClassification
     */
    public $confidentiality = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $custodian = null;

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent
     */
    public $event = null;

    /**
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo
     */
    public $relatesTo = null;

    /**
     * The root of the sections that make up the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public $section = null;

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public $status = null;

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Official human-readable label for the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRComposition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['attester'])) {
                $this->setAttester($data['attester']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['confidentiality'])) {
                $this->setConfidentiality($data['confidentiality']);
            }
            if (isset($data['custodian'])) {
                $this->setCustodian($data['custodian']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['event'])) {
                $this->setEvent($data['event']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['relatesTo'])) {
                $this->setRelatesTo($data['relatesTo']);
            }
            if (isset($data['section'])) {
                $this->setSection($data['section']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRComposition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester
     * @return $this
     */
    public function setAttester(FHIRCompositionAttester $attester = null)
    {
        if (null === $attester) {
            return $this; 
        }
        $this->attester = $attester;
        return $this;
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester
     */
    public function getAttester()
    {
        return $this->attester;
    }


    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
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
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The code specifying the level of confidentiality of the Composition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRVConfidentialityClassification
     * @return $this
     */
    public function setConfidentiality($confidentiality)
    {
        if (null === $confidentiality) {
            return $this; 
        }
        if (is_scalar($confidentiality)) {
            $confidentiality = new FHIRVConfidentialityClassification($confidentiality);
        }
        if (!($confidentiality instanceof FHIRVConfidentialityClassification)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRComposition::setConfidentiality - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRVConfidentialityClassification or appropriate scalar value, %s seen.',
                gettype($confidentiality)
            ));
        }
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRVConfidentialityClassification
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }


    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCustodian(FHIRReference $custodian = null)
    {
        if (null === $custodian) {
            return $this; 
        }
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }


    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRComposition::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent
     * @return $this
     */
    public function setEvent(FHIRCompositionEvent $event = null)
    {
        if (null === $event) {
            return $this; 
        }
        $this->event = $event;
        return $this;
    }

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent
     */
    public function getEvent()
    {
        return $this->event;
    }


    /**
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A version-independent identifier for the Composition. This identifier stays constant as the composition is changed over time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo
     * @return $this
     */
    public function setRelatesTo(FHIRCompositionRelatesTo $relatesTo = null)
    {
        if (null === $relatesTo) {
            return $this; 
        }
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Relationships that this composition has with other compositions or documents that already exist.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }


    /**
     * The root of the sections that make up the composition.
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
     * The root of the sections that make up the composition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection
     */
    public function getSection()
    {
        return $this->section;
    }


    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRCompositionStatus($status);
        }
        if (!($status instanceof FHIRCompositionStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRComposition::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Official human-readable label for the composition.
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
                'FHIRComposition::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * Official human-readable label for the composition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAttester())) {
            $a['attester'] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getConfidentiality())) {
            $a['confidentiality'] = $v;
        }
        if (null !== ($v = $this->getCustodian())) {
            $a['custodian'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getEvent())) {
            $a['event'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getRelatesTo())) {
            $a['relatesTo'] = $v;
        }
        if (null !== ($v = $this->getSection())) {
            $a['section'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Composition xmlns="http://hl7.org/fhir"></Composition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}