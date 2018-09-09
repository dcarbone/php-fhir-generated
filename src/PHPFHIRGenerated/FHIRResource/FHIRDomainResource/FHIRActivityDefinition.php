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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRRequestIntent;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRRequestResourceType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRActivityDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRActivityDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ActivityDefinition';

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $approvalDate = null;

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $author = null;

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date  (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the activity definition from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $dosage = null;

    /**
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue
     */
    public $dynamicValue = null;

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $editor = null;

    /**
     * The period during which the activity definition content was or is planned to be in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $endorser = null;

    /**
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * A legal or geographic region in which the activity definition is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestResourceType
     */
    public $kind = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * A reference to a Library resource containing any formal logic used by the activity definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $library = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $observationRequirement = null;

    /**
     * Defines the observations that are expected to be produced by the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $observationResultRequirement = null;

    /**
     * Indicates who should participate in performing the action described.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant
     */
    public $participant = null;

    /**
     * Indicates how quickly the activity  should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * A profile to which the target of the activity definition is expected to conform.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * The name of the organization or individual that published the activity definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this activity definition is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $relatedArtifact = null;

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $reviewer = null;

    /**
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimenRequirement = null;

    /**
     * The status of this activity definition. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subjectCodeableConcept = null;

    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subjectReference = null;

    /**
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $timingAge = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $timingDuration = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $timingRange = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * A short, descriptive, user-friendly title for the activity definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topic = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $transform = null;

    /**
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A detailed description of how the activity definition is used from a clinical perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate activity definition instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRActivityDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['approvalDate'])) {
                $this->setApprovalDate($data['approvalDate']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
            }
            if (isset($data['dosage'])) {
                $this->setDosage($data['dosage']);
            }
            if (isset($data['dynamicValue'])) {
                $this->setDynamicValue($data['dynamicValue']);
            }
            if (isset($data['editor'])) {
                $this->setEditor($data['editor']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['endorser'])) {
                $this->setEndorser($data['endorser']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['lastReviewDate'])) {
                $this->setLastReviewDate($data['lastReviewDate']);
            }
            if (isset($data['library'])) {
                $this->setLibrary($data['library']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['observationRequirement'])) {
                $this->setObservationRequirement($data['observationRequirement']);
            }
            if (isset($data['observationResultRequirement'])) {
                $this->setObservationResultRequirement($data['observationResultRequirement']);
            }
            if (isset($data['participant'])) {
                $this->setParticipant($data['participant']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['productCodeableConcept'])) {
                $this->setProductCodeableConcept($data['productCodeableConcept']);
            }
            if (isset($data['productReference'])) {
                $this->setProductReference($data['productReference']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['relatedArtifact'])) {
                $this->setRelatedArtifact($data['relatedArtifact']);
            }
            if (isset($data['reviewer'])) {
                $this->setReviewer($data['reviewer']);
            }
            if (isset($data['specimenRequirement'])) {
                $this->setSpecimenRequirement($data['specimenRequirement']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subjectCodeableConcept'])) {
                $this->setSubjectCodeableConcept($data['subjectCodeableConcept']);
            }
            if (isset($data['subjectReference'])) {
                $this->setSubjectReference($data['subjectReference']);
            }
            if (isset($data['subtitle'])) {
                $this->setSubtitle($data['subtitle']);
            }
            if (isset($data['timingAge'])) {
                $this->setTimingAge($data['timingAge']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
            }
            if (isset($data['timingDuration'])) {
                $this->setTimingDuration($data['timingDuration']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['timingRange'])) {
                $this->setTimingRange($data['timingRange']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['topic'])) {
                $this->setTopic($data['topic']);
            }
            if (isset($data['transform'])) {
                $this->setTransform($data['transform']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['usage'])) {
                $this->setUsage($data['usage']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRActivityDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setApprovalDate($approvalDate)
    {
        if (null === $approvalDate) {
            return $this; 
        }
        if (is_scalar($approvalDate)) {
            $approvalDate = new FHIRDate($approvalDate);
        }
        if (!($approvalDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setApprovalDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($approvalDate)
            ));
        }
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }


    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setAuthor(FHIRContactDetail $author = null)
    {
        if (null === $author) {
            return $this; 
        }
        $this->author = $author;
        return $this;
    }

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
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
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Contact details to assist a user in finding and communicating with the publisher.
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
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setCopyright($copyright)
    {
        if (null === $copyright) {
            return $this; 
        }
        if (is_scalar($copyright)) {
            $copyright = new FHIRMarkdown($copyright);
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setCopyright - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($copyright)
            ));
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }


    /**
     * The date  (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
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
                'FHIRActivityDefinition::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A free text natural language description of the activity definition from a consumer's perspective.
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
                'FHIRActivityDefinition::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the activity definition from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        if (null === $doNotPerform) {
            return $this; 
        }
        if (is_scalar($doNotPerform)) {
            $doNotPerform = new FHIRBoolean($doNotPerform);
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setDoNotPerform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($doNotPerform)
            ));
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }


    /**
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setDosage(FHIRDosage $dosage = null)
    {
        if (null === $dosage) {
            return $this; 
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }


    /**
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue
     * @return $this
     */
    public function setDynamicValue(FHIRActivityDefinitionDynamicValue $dynamicValue = null)
    {
        if (null === $dynamicValue) {
            return $this; 
        }
        $this->dynamicValue = $dynamicValue;
        return $this;
    }

    /**
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }


    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setEditor(FHIRContactDetail $editor = null)
    {
        if (null === $editor) {
            return $this; 
        }
        $this->editor = $editor;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getEditor()
    {
        return $this->editor;
    }


    /**
     * The period during which the activity definition content was or is planned to be in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        if (null === $effectivePeriod) {
            return $this; 
        }
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The period during which the activity definition content was or is planned to be in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }


    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setEndorser(FHIRContactDetail $endorser = null)
    {
        if (null === $endorser) {
            return $this; 
        }
        $this->endorser = $endorser;
        return $this;
    }

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getEndorser()
    {
        return $this->endorser;
    }


    /**
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExperimental($experimental)
    {
        if (null === $experimental) {
            return $this; 
        }
        if (is_scalar($experimental)) {
            $experimental = new FHIRBoolean($experimental);
        }
        if (!($experimental instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     * @return $this
     */
    public function setIntent($intent)
    {
        if (null === $intent) {
            return $this; 
        }
        if (is_scalar($intent)) {
            $intent = new FHIRRequestIntent($intent);
        }
        if (!($intent instanceof FHIRRequestIntent)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setIntent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent or appropriate scalar value, %s seen.',
                gettype($intent)
            ));
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * A legal or geographic region in which the activity definition is intended to be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * A legal or geographic region in which the activity definition is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestResourceType
     * @return $this
     */
    public function setKind($kind)
    {
        if (null === $kind) {
            return $this; 
        }
        if (is_scalar($kind)) {
            $kind = new FHIRRequestResourceType($kind);
        }
        if (!($kind instanceof FHIRRequestResourceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setKind - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestResourceType or appropriate scalar value, %s seen.',
                gettype($kind)
            ));
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestResourceType
     */
    public function getKind()
    {
        return $this->kind;
    }


    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setLastReviewDate($lastReviewDate)
    {
        if (null === $lastReviewDate) {
            return $this; 
        }
        if (is_scalar($lastReviewDate)) {
            $lastReviewDate = new FHIRDate($lastReviewDate);
        }
        if (!($lastReviewDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setLastReviewDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($lastReviewDate)
            ));
        }
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }


    /**
     * A reference to a Library resource containing any formal logic used by the activity definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setLibrary($library)
    {
        if (null === $library) {
            return $this; 
        }
        if (is_scalar($library)) {
            $library = new FHIRCanonical($library);
        }
        if (!($library instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setLibrary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($library)
            ));
        }
        $this->library = $library;
        return $this;
    }

    /**
     * A reference to a Library resource containing any formal logic used by the activity definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getLibrary()
    {
        return $this->library;
    }


    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setObservationRequirement(FHIRReference $observationRequirement = null)
    {
        if (null === $observationRequirement) {
            return $this; 
        }
        $this->observationRequirement = $observationRequirement;
        return $this;
    }

    /**
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getObservationRequirement()
    {
        return $this->observationRequirement;
    }


    /**
     * Defines the observations that are expected to be produced by the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setObservationResultRequirement(FHIRReference $observationResultRequirement = null)
    {
        if (null === $observationResultRequirement) {
            return $this; 
        }
        $this->observationResultRequirement = $observationResultRequirement;
        return $this;
    }

    /**
     * Defines the observations that are expected to be produced by the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getObservationResultRequirement()
    {
        return $this->observationResultRequirement;
    }


    /**
     * Indicates who should participate in performing the action described.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant
     * @return $this
     */
    public function setParticipant(FHIRActivityDefinitionParticipant $participant = null)
    {
        if (null === $participant) {
            return $this; 
        }
        $this->participant = $participant;
        return $this;
    }

    /**
     * Indicates who should participate in performing the action described.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }


    /**
     * Indicates how quickly the activity  should be addressed with respect to other requests.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRRequestPriority($priority);
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly the activity  should be addressed with respect to other requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept(FHIRCodeableConcept $productCodeableConcept = null)
    {
        if (null === $productCodeableConcept) {
            return $this; 
        }
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }


    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        if (null === $productReference) {
            return $this; 
        }
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }


    /**
     * A profile to which the target of the activity definition is expected to conform.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A profile to which the target of the activity definition is expected to conform.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * The name of the organization or individual that published the activity definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPublisher($publisher)
    {
        if (null === $publisher) {
            return $this; 
        }
        if (is_scalar($publisher)) {
            $publisher = new FHIRString($publisher);
        }
        if (!($publisher instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the activity definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this activity definition is needed and why it has been designed as it has.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPurpose($purpose)
    {
        if (null === $purpose) {
            return $this; 
        }
        if (is_scalar($purpose)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explanation of why this activity definition is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
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
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }


    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setReviewer(FHIRContactDetail $reviewer = null)
    {
        if (null === $reviewer) {
            return $this; 
        }
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }


    /**
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSpecimenRequirement(FHIRReference $specimenRequirement = null)
    {
        if (null === $specimenRequirement) {
            return $this; 
        }
        $this->specimenRequirement = $specimenRequirement;
        return $this;
    }

    /**
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimenRequirement()
    {
        return $this->specimenRequirement;
    }


    /**
     * The status of this activity definition. Enables tracking the life-cycle of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this activity definition. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        if (null === $subjectCodeableConcept) {
            return $this; 
        }
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }


    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        if (null === $subjectReference) {
            return $this; 
        }
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A code or group definition that describes the intended subject of the activity being defined.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }


    /**
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        if (null === $subtitle) {
            return $this; 
        }
        if (is_scalar($subtitle)) {
            $subtitle = new FHIRString($subtitle);
        }
        if (!($subtitle instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setSubtitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($subtitle)
            ));
        }
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setTimingAge(FHIRAge $timingAge = null)
    {
        if (null === $timingAge) {
            return $this; 
        }
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        if (null === $timingDateTime) {
            return $this; 
        }
        if (is_scalar($timingDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setTimingDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timingDateTime)
            ));
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setTimingDuration(FHIRDuration $timingDuration = null)
    {
        if (null === $timingDuration) {
            return $this; 
        }
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        if (null === $timingPeriod) {
            return $this; 
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setTimingRange(FHIRRange $timingRange = null)
    {
        if (null === $timingRange) {
            return $this; 
        }
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }


    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        if (null === $timingTiming) {
            return $this; 
        }
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }


    /**
     * A short, descriptive, user-friendly title for the activity definition.
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
                'FHIRActivityDefinition::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the activity definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTopic(FHIRCodeableConcept $topic = null)
    {
        if (null === $topic) {
            return $this; 
        }
        $this->topic = $topic;
        return $this;
    }

    /**
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopic()
    {
        return $this->topic;
    }


    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setTransform($transform)
    {
        if (null === $transform) {
            return $this; 
        }
        if (is_scalar($transform)) {
            $transform = new FHIRCanonical($transform);
        }
        if (!($transform instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setTransform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($transform)
            ));
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getTransform()
    {
        return $this->transform;
    }


    /**
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * A detailed description of how the activity definition is used from a clinical perspective.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setUsage($usage)
    {
        if (null === $usage) {
            return $this; 
        }
        if (is_scalar($usage)) {
            $usage = new FHIRString($usage);
        }
        if (!($usage instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setUsage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($usage)
            ));
        }
        $this->usage = $usage;
        return $this;
    }

    /**
     * A detailed description of how the activity definition is used from a clinical perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate activity definition instances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setUseContext(FHIRUsageContext $useContext = null)
    {
        if (null === $useContext) {
            return $this; 
        }
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate activity definition instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVersion($version)
    {
        if (null === $version) {
            return $this; 
        }
        if (is_scalar($version)) {
            $version = new FHIRString($version);
        }
        if (!($version instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRActivityDefinition::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getApprovalDate())) {
            $a['approvalDate'] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a['copyright'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a['doNotPerform'] = $v;
        }
        if (null !== ($v = $this->getDosage())) {
            $a['dosage'] = $v;
        }
        if (null !== ($v = $this->getDynamicValue())) {
            $a['dynamicValue'] = $v;
        }
        if (null !== ($v = $this->getEditor())) {
            $a['editor'] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a['effectivePeriod'] = $v;
        }
        if (null !== ($v = $this->getEndorser())) {
            $a['endorser'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a['kind'] = $v;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a['lastReviewDate'] = $v;
        }
        if (null !== ($v = $this->getLibrary())) {
            $a['library'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getObservationRequirement())) {
            $a['observationRequirement'] = $v;
        }
        if (null !== ($v = $this->getObservationResultRequirement())) {
            $a['observationResultRequirement'] = $v;
        }
        if (null !== ($v = $this->getParticipant())) {
            $a['participant'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a['productCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a['productReference'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRelatedArtifact())) {
            $a['relatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getReviewer())) {
            $a['reviewer'] = $v;
        }
        if (null !== ($v = $this->getSpecimenRequirement())) {
            $a['specimenRequirement'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a['subjectCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a['subjectReference'] = $v;
        }
        if (null !== ($v = $this->getSubtitle())) {
            $a['subtitle'] = $v;
        }
        if (null !== ($v = $this->getTimingAge())) {
            $a['timingAge'] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a['timingDateTime'] = $v;
        }
        if (null !== ($v = $this->getTimingDuration())) {
            $a['timingDuration'] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a['timingPeriod'] = $v;
        }
        if (null !== ($v = $this->getTimingRange())) {
            $a['timingRange'] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a['timingTiming'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getTopic())) {
            $a['topic'] = $v;
        }
        if (null !== ($v = $this->getTransform())) {
            $a['transform'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getUsage())) {
            $a['usage'] = $v;
        }
        if (null !== ($v = $this->getUseContext())) {
            $a['useContext'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<ActivityDefinition xmlns="http://hl7.org/fhir"></ActivityDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}