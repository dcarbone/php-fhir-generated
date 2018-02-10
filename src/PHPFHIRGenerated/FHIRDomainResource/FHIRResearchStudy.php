<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge.  This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques.  A ResearchStudy involves the gathering of information about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRResearchStudy extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A short, descriptive user-friendly label for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $protocol = array();

    /**
     * A larger research study of which this particular study is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * The current state of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus
     */
    public $status = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $focus = array();

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * Citations, references and other related documents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public $relatedArtifact = array();

    /**
     * Key terms to aid in searching for or filtering the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $keyword = array();

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * A full description of how the study is being conducted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $enrollment = array();

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The organization responsible for the execution of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sponsor = null;

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $principalInvestigator = null;

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $site = array();

    /**
     * A description and/or code explaining the premature termination of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonStopped = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public $arm = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ResearchStudy';

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $protocol
     * @return $this
     */
    public function addProtocol($protocol)
    {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current state of the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $focus
     * @return $this
     */
    public function addFocus($focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Citations, references and other related documents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Citations, references and other related documents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return $this
     */
    public function addRelatedArtifact($relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $keyword
     * @return $this
     */
    public function addKeyword($keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A full description of how the study is being conducted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A full description of how the study is being conducted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $enrollment
     * @return $this
     */
    public function addEnrollment($enrollment)
    {
        $this->enrollment[] = $enrollment;
        return $this;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The organization responsible for the execution of the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * The organization responsible for the execution of the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sponsor
     * @return $this
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrincipalInvestigator()
    {
        return $this->principalInvestigator;
    }

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $principalInvestigator
     * @return $this
     */
    public function setPrincipalInvestigator($principalInvestigator)
    {
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $site
     * @return $this
     */
    public function addSite($site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonStopped()
    {
        return $this->reasonStopped;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonStopped
     * @return $this
     */
    public function setReasonStopped($reasonStopped)
    {
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm $arm
     * @return $this
     */
    public function addArm($arm)
    {
        $this->arm[] = $arm;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->title) $json['title'] = $this->title;
        if (0 < count($this->protocol)) {
            $json['protocol'] = [];
            foreach($this->protocol as $protocol) {
                $json['protocol'][] = $protocol;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                $json['category'][] = $category;
            }
        }
        if (0 < count($this->focus)) {
            $json['focus'] = [];
            foreach($this->focus as $focus) {
                $json['focus'][] = $focus;
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->relatedArtifact)) {
            $json['relatedArtifact'] = [];
            foreach($this->relatedArtifact as $relatedArtifact) {
                $json['relatedArtifact'][] = $relatedArtifact;
            }
        }
        if (0 < count($this->keyword)) {
            $json['keyword'] = [];
            foreach($this->keyword as $keyword) {
                $json['keyword'][] = $keyword;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->enrollment)) {
            $json['enrollment'] = [];
            foreach($this->enrollment as $enrollment) {
                $json['enrollment'][] = $enrollment;
            }
        }
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->sponsor) $json['sponsor'] = $this->sponsor;
        if (null !== $this->principalInvestigator) $json['principalInvestigator'] = $this->principalInvestigator;
        if (0 < count($this->site)) {
            $json['site'] = [];
            foreach($this->site as $site) {
                $json['site'][] = $site;
            }
        }
        if (null !== $this->reasonStopped) $json['reasonStopped'] = $this->reasonStopped;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->arm)) {
            $json['arm'] = [];
            foreach($this->arm as $arm) {
                $json['arm'][] = $arm;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResearchStudy xmlns="http://hl7.org/fhir"></ResearchStudy>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (0 < count($this->protocol)) {
            foreach($this->protocol as $protocol) {
                $protocol->xmlSerialize(true, $sxe->addChild('protocol'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (0 < count($this->focus)) {
            foreach($this->focus as $focus) {
                $focus->xmlSerialize(true, $sxe->addChild('focus'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->relatedArtifact)) {
            foreach($this->relatedArtifact as $relatedArtifact) {
                $relatedArtifact->xmlSerialize(true, $sxe->addChild('relatedArtifact'));
            }
        }
        if (0 < count($this->keyword)) {
            foreach($this->keyword as $keyword) {
                $keyword->xmlSerialize(true, $sxe->addChild('keyword'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->enrollment)) {
            foreach($this->enrollment as $enrollment) {
                $enrollment->xmlSerialize(true, $sxe->addChild('enrollment'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->sponsor) $this->sponsor->xmlSerialize(true, $sxe->addChild('sponsor'));
        if (null !== $this->principalInvestigator) $this->principalInvestigator->xmlSerialize(true, $sxe->addChild('principalInvestigator'));
        if (0 < count($this->site)) {
            foreach($this->site as $site) {
                $site->xmlSerialize(true, $sxe->addChild('site'));
            }
        }
        if (null !== $this->reasonStopped) $this->reasonStopped->xmlSerialize(true, $sxe->addChild('reasonStopped'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->arm)) {
            foreach($this->arm as $arm) {
                $arm->xmlSerialize(true, $sxe->addChild('arm'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}