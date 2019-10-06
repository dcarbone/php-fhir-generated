<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchStudyStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A process where a researcher or organization plans and then executes a series of
 * steps intended to increase the field of healthcare-related knowledge. This
 * includes studies of safety, efficacy, comparative effectiveness and other
 * information about medications, devices, therapies and other interventional and
 * investigative techniques. A ResearchStudy involves the gathering of information
 * about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRResearchStudy
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRResearchStudy extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY;

    const FIELD_ARM = 'arm';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTACT = 'contact';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ENROLLMENT = 'enrollment';
    const FIELD_FOCUS = 'focus';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_KEYWORD = 'keyword';
    const FIELD_NOTE = 'note';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PERIOD = 'period';
    const FIELD_PRINCIPAL_INVESTIGATOR = 'principalInvestigator';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_REASON_STOPPED = 'reasonStopped';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_SITE = 'site';
    const FIELD_SPONSOR = 'sponsor';
    const FIELD_STATUS = 'status';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     *
     * Describes an expected sequence of events for one of the participants of a study.
     * E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    private $arm = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in learning more about or engaging with the
     * study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A full description of how the study is being conducted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a Group that defines the criteria for and quantity of subjects
     * participating in the study. E.g. " 200 female Europeans between the ages of 20
     * and 45 with early onset diabetes".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $enrollment = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other
     * concerns or interventions that the study is seeking to gain more information
     * about.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $focus = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $keyword = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $partOf = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the individual who has primary oversite of the execution of the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $principalInvestigator = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $protocol = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $reasonStopped = null;
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Citations, references and other related documents.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    private $relatedArtifact = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinic, hospital or other healthcare location that is participating in the
     * study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $site = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the execution of the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $sponsor = null;
    /**
     * Codes that convey the current status of the research study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchStudyStatus
     */
    private $status = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive user-friendly label for the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * FHIRResearchStudy Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchStudy::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ARM])) {
            if (is_array($data[self::FIELD_ARM])) {
                foreach($data[self::FIELD_ARM] as $v) {
                    if ($v instanceof FHIRResearchStudyArm) {
                        $this->addArm($v);
                    } else {
                        $this->addArm(new FHIRResearchStudyArm($v));
                    }
                }
            } else if ($data[self::FIELD_ARM] instanceof FHIRResearchStudyArm) {
                $this->addArm($data[self::FIELD_ARM]);
            } else {
                $this->addArm(new FHIRResearchStudyArm($data[self::FIELD_ARM]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRMarkdown) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_ENROLLMENT])) {
            if (is_array($data[self::FIELD_ENROLLMENT])) {
                foreach($data[self::FIELD_ENROLLMENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEnrollment($v);
                    } else {
                        $this->addEnrollment(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENROLLMENT] instanceof FHIRReference) {
                $this->addEnrollment($data[self::FIELD_ENROLLMENT]);
            } else {
                $this->addEnrollment(new FHIRReference($data[self::FIELD_ENROLLMENT]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if (is_array($data[self::FIELD_FOCUS])) {
                foreach($data[self::FIELD_FOCUS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFocus($v);
                    } else {
                        $this->addFocus(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_FOCUS] instanceof FHIRCodeableConcept) {
                $this->addFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->addFocus(new FHIRCodeableConcept($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_KEYWORD])) {
            if (is_array($data[self::FIELD_KEYWORD])) {
                foreach($data[self::FIELD_KEYWORD] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addKeyword($v);
                    } else {
                        $this->addKeyword(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_KEYWORD] instanceof FHIRCodeableConcept) {
                $this->addKeyword($data[self::FIELD_KEYWORD]);
            } else {
                $this->addKeyword(new FHIRCodeableConcept($data[self::FIELD_KEYWORD]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRINCIPAL_INVESTIGATOR])) {
            if ($data[self::FIELD_PRINCIPAL_INVESTIGATOR] instanceof FHIRReference) {
                $this->setPrincipalInvestigator($data[self::FIELD_PRINCIPAL_INVESTIGATOR]);
            } else {
                $this->setPrincipalInvestigator(new FHIRReference($data[self::FIELD_PRINCIPAL_INVESTIGATOR]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL])) {
            if (is_array($data[self::FIELD_PROTOCOL])) {
                foreach($data[self::FIELD_PROTOCOL] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addProtocol($v);
                    } else {
                        $this->addProtocol(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROTOCOL] instanceof FHIRReference) {
                $this->addProtocol($data[self::FIELD_PROTOCOL]);
            } else {
                $this->addProtocol(new FHIRReference($data[self::FIELD_PROTOCOL]));
            }
        }
        if (isset($data[self::FIELD_REASON_STOPPED])) {
            if ($data[self::FIELD_REASON_STOPPED] instanceof FHIRCodeableConcept) {
                $this->setReasonStopped($data[self::FIELD_REASON_STOPPED]);
            } else {
                $this->setReasonStopped(new FHIRCodeableConcept($data[self::FIELD_REASON_STOPPED]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ARTIFACT])) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addRelatedArtifact($v);
                    } else {
                        $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if (is_array($data[self::FIELD_SITE])) {
                foreach($data[self::FIELD_SITE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSite($v);
                    } else {
                        $this->addSite(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SITE] instanceof FHIRReference) {
                $this->addSite($data[self::FIELD_SITE]);
            } else {
                $this->addSite(new FHIRReference($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_SPONSOR])) {
            if ($data[self::FIELD_SPONSOR] instanceof FHIRReference) {
                $this->setSponsor($data[self::FIELD_SPONSOR]);
            } else {
                $this->setSponsor(new FHIRReference($data[self::FIELD_SPONSOR]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRResearchStudyStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRResearchStudyStatus($data[self::FIELD_STATUS]));
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
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     *
     * Describes an expected sequence of events for one of the participants of a study.
     * E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     *
     * Describes an expected sequence of events for one of the participants of a study.
     * E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm $arm
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addArm(FHIRResearchStudyArm $arm = null)
    {
        $this->arm[] = $arm;
        return $this;
    }

    /**
     * A process where a researcher or organization plans and then executes a series of
     * steps intended to increase the field of healthcare-related knowledge. This
     * includes studies of safety, efficacy, comparative effectiveness and other
     * information about medications, devices, therapies and other interventional and
     * investigative techniques. A ResearchStudy involves the gathering of information
     * about human or animal subjects.
     *
     * Describes an expected sequence of events for one of the participants of a study.
     * E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm[] $arm
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setArm(array $arm = [])
    {
        $this->arm = [];
        if ([] === $arm) {
            return $this;
        }
        foreach($arm as $v) {
            if ($v instanceof FHIRResearchStudyArm) {
                $this->addArm($v);
            } else {
                $this->addArm(new FHIRResearchStudyArm($v));
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
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes categorizing the type of study such as investigational vs. observational,
     * type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in learning more about or engaging with the
     * study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in learning more about or engaging with the
     * study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in learning more about or engaging with the
     * study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A full description of how the study is being conducted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A full description of how the study is being conducted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRMarkdown) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRMarkdown($description);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a Group that defines the criteria for and quantity of subjects
     * participating in the study. E.g. " 200 female Europeans between the ages of 20
     * and 45 with early onset diabetes".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a Group that defines the criteria for and quantity of subjects
     * participating in the study. E.g. " 200 female Europeans between the ages of 20
     * and 45 with early onset diabetes".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $enrollment
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addEnrollment(FHIRReference $enrollment = null)
    {
        $this->enrollment[] = $enrollment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a Group that defines the criteria for and quantity of subjects
     * participating in the study. E.g. " 200 female Europeans between the ages of 20
     * and 45 with early onset diabetes".
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $enrollment
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setEnrollment(array $enrollment = [])
    {
        $this->enrollment = [];
        if ([] === $enrollment) {
            return $this;
        }
        foreach($enrollment as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEnrollment($v);
            } else {
                $this->addEnrollment(new FHIRReference($v));
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
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other
     * concerns or interventions that the study is seeking to gain more information
     * about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other
     * concerns or interventions that the study is seeking to gain more information
     * about.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $focus
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addFocus(FHIRCodeableConcept $focus = null)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other
     * concerns or interventions that the study is seeking to gain more information
     * about.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $focus
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setFocus(array $focus = [])
    {
        $this->focus = [];
        if ([] === $focus) {
            return $this;
        }
        foreach($focus as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFocus($v);
            } else {
                $this->addFocus(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
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
     * Indicates a country, state or other region where the study is taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setJurisdiction(array $jurisdiction = [])
    {
        $this->jurisdiction = [];
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
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
     * Key terms to aid in searching for or filtering the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $keyword
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addKeyword(FHIRCodeableConcept $keyword = null)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $keyword
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setKeyword(array $keyword = [])
    {
        $this->keyword = [];
        if ([] === $keyword) {
            return $this;
        }
        foreach($keyword as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addKeyword($v);
            } else {
                $this->addKeyword(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $partOf
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addPartOf(FHIRReference $partOf = null)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $partOf
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the start date and the expected (or actual, depending on status) end
     * date for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the individual who has primary oversite of the execution of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPrincipalInvestigator()
    {
        return $this->principalInvestigator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the individual who has primary oversite of the execution of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $principalInvestigator
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setPrincipalInvestigator(FHIRReference $principalInvestigator = null)
    {
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $protocol
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addProtocol(FHIRReference $protocol = null)
    {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $protocol
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setProtocol(array $protocol = [])
    {
        $this->protocol = [];
        if ([] === $protocol) {
            return $this;
        }
        foreach($protocol as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProtocol($v);
            } else {
                $this->addProtocol(new FHIRReference($v));
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
     * A description and/or code explaining the premature termination of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonStopped()
    {
        return $this->reasonStopped;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonStopped
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setReasonStopped(FHIRCodeableConcept $reasonStopped = null)
    {
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Citations, references and other related documents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Citations, references and other related documents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addRelatedArtifact(FHIRRelatedArtifact $relatedArtifact = null)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Citations, references and other related documents.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact[] $relatedArtifact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setRelatedArtifact(array $relatedArtifact = [])
    {
        $this->relatedArtifact = [];
        if ([] === $relatedArtifact) {
            return $this;
        }
        foreach($relatedArtifact as $v) {
            if ($v instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($v);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinic, hospital or other healthcare location that is participating in the
     * study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinic, hospital or other healthcare location that is participating in the
     * study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $site
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function addSite(FHIRReference $site = null)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinic, hospital or other healthcare location that is participating in the
     * study.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $site
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setSite(array $site = [])
    {
        $this->site = [];
        if ([] === $site) {
            return $this;
        }
        foreach($site as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSite($v);
            } else {
                $this->addSite(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the execution of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization responsible for the execution of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $sponsor
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setSponsor(FHIRReference $sponsor = null)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * Codes that convey the current status of the research study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchStudyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes that convey the current status of the research study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchStudyStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     */
    public function setStatus(FHIRResearchStudyStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive user-friendly label for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive user-friendly label for the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy
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
                throw new \DomainException(sprintf('FHIRResearchStudy::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResearchStudy::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRResearchStudy);
        } elseif (!is_object($type) || !($type instanceof FHIRResearchStudy)) {
            throw new \RuntimeException(sprintf(
                'FHIRResearchStudy::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->arm)) {
            foreach($children->arm as $child) {
                $type->addArm(FHIRResearchStudyArm::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($children->enrollment)) {
            foreach($children->enrollment as $child) {
                $type->addEnrollment(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->focus)) {
            foreach($children->focus as $child) {
                $type->addFocus(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->keyword)) {
            foreach($children->keyword as $child) {
                $type->addKeyword(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->principalInvestigator)) {
            $type->setPrincipalInvestigator(FHIRReference::xmlUnserialize($children->principalInvestigator));
        }
        if (isset($children->protocol)) {
            foreach($children->protocol as $child) {
                $type->addProtocol(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonStopped)) {
            $type->setReasonStopped(FHIRCodeableConcept::xmlUnserialize($children->reasonStopped));
        }
        if (isset($children->relatedArtifact)) {
            foreach($children->relatedArtifact as $child) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($child));
            }
        }
        if (isset($children->site)) {
            foreach($children->site as $child) {
                $type->addSite(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->sponsor)) {
            $type->setSponsor(FHIRReference::xmlUnserialize($children->sponsor));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRResearchStudyStatus::xmlUnserialize($children->status));
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
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ResearchStudy xmlns="http://hl7.org/fhir"></ResearchStudy>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getArm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ARM));
            }
        }

        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
            }
        }

        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }

        if ([] !== ($vs = $this->getEnrollment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENROLLMENT));
            }
        }

        if ([] !== ($vs = $this->getFocus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FOCUS));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION));
            }
        }

        if ([] !== ($vs = $this->getKeyword())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_KEYWORD));
            }
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }

        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF));
            }
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }

        if (null !== ($v = $this->getPrincipalInvestigator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRINCIPAL_INVESTIGATOR));
        }

        if ([] !== ($vs = $this->getProtocol())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL));
            }
        }

        if (null !== ($v = $this->getReasonStopped())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_STOPPED));
        }

        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ARTIFACT));
            }
        }

        if ([] !== ($vs = $this->getSite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SITE));
            }
        }

        if (null !== ($v = $this->getSponsor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPONSOR));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
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
        if ([] !== ($vs = $this->getArm())) {
            $a[self::FIELD_ARM] = $vs;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getEnrollment())) {
            $a[self::FIELD_ENROLLMENT] = $vs;
        }
        if ([] !== ($vs = $this->getFocus())) {
            $a[self::FIELD_FOCUS] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if ([] !== ($vs = $this->getKeyword())) {
            $a[self::FIELD_KEYWORD] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $vs;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPrincipalInvestigator())) {
            $a[self::FIELD_PRINCIPAL_INVESTIGATOR] = $v;
        }
        if ([] !== ($vs = $this->getProtocol())) {
            $a[self::FIELD_PROTOCOL] = $vs;
        }
        if (null !== ($v = $this->getReasonStopped())) {
            $a[self::FIELD_REASON_STOPPED] = $v;
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $a[self::FIELD_RELATED_ARTIFACT] = $vs;
        }
        if ([] !== ($vs = $this->getSite())) {
            $a[self::FIELD_SITE] = $vs;
        }
        if (null !== ($v = $this->getSponsor())) {
            $a[self::FIELD_SPONSOR] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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