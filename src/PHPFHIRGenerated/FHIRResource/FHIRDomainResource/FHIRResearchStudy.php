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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge.  This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques.  A ResearchStudy involves the gathering of information about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRResearchStudy
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRResearchStudy extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ResearchStudy';

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm
     */
    public $arm = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $condition = null;

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * A full description of how the study is being conducted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enrollment = null;

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $focus = null;

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Key terms to aid in searching for or filtering the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $keyword = null;

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $location = null;

    /**
     * Comments made about the study by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective
     */
    public $objective = null;

    /**
     * A larger research study of which this particular study is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $phase = null;

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $primaryPurposeType = null;

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $principalInvestigator = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $protocol = null;

    /**
     * A description and/or code explaining the premature termination of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonStopped = null;

    /**
     * Citations, references and other related documents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $relatedArtifact = null;

    /**
     * A facility in which study activities are conducted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $site = null;

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sponsor = null;

    /**
     * The current state of the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus
     */
    public $status = null;

    /**
     * A short, descriptive user-friendly label for the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * FHIRResearchStudy Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['arm'])) {
                $this->setArm($data['arm']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['enrollment'])) {
                $this->setEnrollment($data['enrollment']);
            }
            if (isset($data['focus'])) {
                $this->setFocus($data['focus']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['keyword'])) {
                $this->setKeyword($data['keyword']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['objective'])) {
                $this->setObjective($data['objective']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['phase'])) {
                $this->setPhase($data['phase']);
            }
            if (isset($data['primaryPurposeType'])) {
                $this->setPrimaryPurposeType($data['primaryPurposeType']);
            }
            if (isset($data['principalInvestigator'])) {
                $this->setPrincipalInvestigator($data['principalInvestigator']);
            }
            if (isset($data['protocol'])) {
                $this->setProtocol($data['protocol']);
            }
            if (isset($data['reasonStopped'])) {
                $this->setReasonStopped($data['reasonStopped']);
            }
            if (isset($data['relatedArtifact'])) {
                $this->setRelatedArtifact($data['relatedArtifact']);
            }
            if (isset($data['site'])) {
                $this->setSite($data['site']);
            }
            if (isset($data['sponsor'])) {
                $this->setSponsor($data['sponsor']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchStudy::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm
     * @return $this
     */
    public function setArm(FHIRResearchStudyArm $arm = null)
    {
        if (null === $arm) {
            return $this; 
        }
        $this->arm = $arm;
        return $this;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm
     */
    public function getArm()
    {
        return $this->arm;
    }


    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
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
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCondition(FHIRCodeableConcept $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * The condition that is the focus of the study.  For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setContact(FHIRContactDetail $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * A full description of how the study is being conducted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRMarkdown($description);
        }
        if (!($description instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchStudy::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A full description of how the study is being conducted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEnrollment(FHIRReference $enrollment = null)
    {
        if (null === $enrollment) {
            return $this; 
        }
        $this->enrollment = $enrollment;
        return $this;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }


    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFocus(FHIRCodeableConcept $focus = null)
    {
        if (null === $focus) {
            return $this; 
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFocus()
    {
        return $this->focus;
    }


    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Key terms to aid in searching for or filtering the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setKeyword(FHIRCodeableConcept $keyword = null)
    {
        if (null === $keyword) {
            return $this; 
        }
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getKeyword()
    {
        return $this->keyword;
    }


    /**
     * Indicates a country, state or other region where the study is taking place.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLocation(FHIRCodeableConcept $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Comments made about the study by the performer, subject or other participants.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Comments made about the study by the performer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective
     * @return $this
     */
    public function setObjective(FHIRResearchStudyObjective $objective = null)
    {
        if (null === $objective) {
            return $this; 
        }
        $this->objective = $objective;
        return $this;
    }

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective
     */
    public function getObjective()
    {
        return $this->objective;
    }


    /**
     * A larger research study of which this particular study is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPhase(FHIRCodeableConcept $phase = null)
    {
        if (null === $phase) {
            return $this; 
        }
        $this->phase = $phase;
        return $this;
    }

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPhase()
    {
        return $this->phase;
    }


    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPrimaryPurposeType(FHIRCodeableConcept $primaryPurposeType = null)
    {
        if (null === $primaryPurposeType) {
            return $this; 
        }
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPrimaryPurposeType()
    {
        return $this->primaryPurposeType;
    }


    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPrincipalInvestigator(FHIRReference $principalInvestigator = null)
    {
        if (null === $principalInvestigator) {
            return $this; 
        }
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrincipalInvestigator()
    {
        return $this->principalInvestigator;
    }


    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProtocol(FHIRReference $protocol = null)
    {
        if (null === $protocol) {
            return $this; 
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProtocol()
    {
        return $this->protocol;
    }


    /**
     * A description and/or code explaining the premature termination of the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonStopped(FHIRCodeableConcept $reasonStopped = null)
    {
        if (null === $reasonStopped) {
            return $this; 
        }
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonStopped()
    {
        return $this->reasonStopped;
    }


    /**
     * Citations, references and other related documents.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setRelatedArtifact(FHIRRelatedArtifact $relatedArtifact = null)
    {
        if (null === $relatedArtifact) {
            return $this; 
        }
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Citations, references and other related documents.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }


    /**
     * A facility in which study activities are conducted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSite(FHIRReference $site = null)
    {
        if (null === $site) {
            return $this; 
        }
        $this->site = $site;
        return $this;
    }

    /**
     * A facility in which study activities are conducted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSite()
    {
        return $this->site;
    }


    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSponsor(FHIRReference $sponsor = null)
    {
        if (null === $sponsor) {
            return $this; 
        }
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }


    /**
     * The current state of the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRResearchStudyStatus($status);
        }
        if (!($status instanceof FHIRResearchStudyStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchStudy::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResearchStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A short, descriptive user-friendly label for the study.
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
                'FHIRResearchStudy::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive user-friendly label for the study.
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getArm())) {
            $a['arm'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEnrollment())) {
            $a['enrollment'] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a['focus'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getKeyword())) {
            $a['keyword'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getObjective())) {
            $a['objective'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPhase())) {
            $a['phase'] = $v;
        }
        if (null !== ($v = $this->getPrimaryPurposeType())) {
            $a['primaryPurposeType'] = $v;
        }
        if (null !== ($v = $this->getPrincipalInvestigator())) {
            $a['principalInvestigator'] = $v;
        }
        if (null !== ($v = $this->getProtocol())) {
            $a['protocol'] = $v;
        }
        if (null !== ($v = $this->getReasonStopped())) {
            $a['reasonStopped'] = $v;
        }
        if (null !== ($v = $this->getRelatedArtifact())) {
            $a['relatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a['site'] = $v;
        }
        if (null !== ($v = $this->getSponsor())) {
            $a['sponsor'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<ResearchStudy xmlns="http://hl7.org/fhir"></ResearchStudy>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}