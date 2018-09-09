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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCarePlan
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCarePlan extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CarePlan';

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public $activity = null;

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $addresses = null;

    /**
     * When populated, the author is responsible for the care plan.  The care plan is attributed to the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $careTeam = null;

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Identifies the original context in which this particular care plan was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Identifies the individual(s) or organization who provided the contents of the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $contributor = null;

    /**
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * A description of the scope and nature of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $goal = null;

    /**
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent
     */
    public $intent = null;

    /**
     * General notes about the care plan not covered elsewhere.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * A larger care plan of which this particular care plan is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $replaces = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInfo = null;

    /**
     * Human-friendly name for the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * FHIRCarePlan Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['activity'])) {
                $this->setActivity($data['activity']);
            }
            if (isset($data['addresses'])) {
                $this->setAddresses($data['addresses']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['careTeam'])) {
                $this->setCareTeam($data['careTeam']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contributor'])) {
                $this->setContributor($data['contributor']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['goal'])) {
                $this->setGoal($data['goal']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['replaces'])) {
                $this->setReplaces($data['replaces']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['supportingInfo'])) {
                $this->setSupportingInfo($data['supportingInfo']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCarePlan::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     * @return $this
     */
    public function setActivity(FHIRCarePlanActivity $activity = null)
    {
        if (null === $activity) {
            return $this; 
        }
        $this->activity = $activity;
        return $this;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }


    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAddresses(FHIRReference $addresses = null)
    {
        if (null === $addresses) {
            return $this; 
        }
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAddresses()
    {
        return $this->addresses;
    }


    /**
     * When populated, the author is responsible for the care plan.  The care plan is attributed to the author.
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
     * When populated, the author is responsible for the care plan.  The care plan is attributed to the author.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A care plan that is fulfilled in whole or in part by this care plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCareTeam(FHIRReference $careTeam = null)
    {
        if (null === $careTeam) {
            return $this; 
        }
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }


    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
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
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Identifies the original context in which this particular care plan was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Identifies the original context in which this particular care plan was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Identifies the individual(s) or organization who provided the contents of the care plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContributor(FHIRReference $contributor = null)
    {
        if (null === $contributor) {
            return $this; 
        }
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Identifies the individual(s) or organization who provided the contents of the care plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }


    /**
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * Represents when this particular CarePlan record was created in the system, which is often a system-generated date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * A description of the scope and nature of the plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A description of the scope and nature of the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setGoal(FHIRReference $goal = null)
    {
        if (null === $goal) {
            return $this; 
        }
        $this->goal = $goal;
        return $this;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getGoal()
    {
        return $this->goal;
    }


    /**
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this care plan by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        if (is_scalar($instantiatesCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        if (null === $instantiatesUri) {
            return $this; 
        }
        if (is_scalar($instantiatesUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, questionnaire or other definition that is adhered to in whole or in part by this CarePlan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent
     * @return $this
     */
    public function setIntent($intent)
    {
        if (null === $intent) {
            return $this; 
        }
        if (is_scalar($intent)) {
            $intent = new FHIRCarePlanIntent($intent);
        }
        if (!($intent instanceof FHIRCarePlanIntent)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setIntent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent or appropriate scalar value, %s seen.',
                gettype($intent)
            ));
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates the level of authority/intentionality associated with the care plan and where the care plan fits into the workflow chain.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCarePlanIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * A larger care plan of which this particular care plan is a component or step.
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
     * A larger care plan of which this particular care plan is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
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
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReplaces(FHIRReference $replaces = null)
    {
        if (null === $replaces) {
            return $this; 
        }
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Completed or terminated care plan whose function is taken by this new care plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReplaces()
    {
        return $this->replaces;
    }


    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRRequestStatus($status);
        }
        if (!($status instanceof FHIRRequestStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Identifies the patient or group whose intended care is described by the plan.
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
     * Identifies the patient or group whose intended care is described by the plan.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInfo(FHIRReference $supportingInfo = null)
    {
        if (null === $supportingInfo) {
            return $this; 
        }
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include comorbidities, recent procedures, limitations, recent assessments, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }


    /**
     * Human-friendly name for the care plan.
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
                'FHIRCarePlan::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * Human-friendly name for the care plan.
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
        if (null !== ($v = $this->getActivity())) {
            $a['activity'] = $v;
        }
        if (null !== ($v = $this->getAddresses())) {
            $a['addresses'] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCareTeam())) {
            $a['careTeam'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getContributor())) {
            $a['contributor'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getGoal())) {
            $a['goal'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getReplaces())) {
            $a['replaces'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSupportingInfo())) {
            $a['supportingInfo'] = $v;
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
            $sxe = new \SimpleXMLElement('<CarePlan xmlns="http://hl7.org/fhir"></CarePlan>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}