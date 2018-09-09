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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The Measure resource provides the definition of a quality measure.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMeasure
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMeasure extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Measure';

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
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $clinicalRecommendationStatement = null;

    /**
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $compositeScoring = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date  (and optionally time) when the measure was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Provides a description of an individual term used within the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * A free text natural language description of the measure from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $disclaimer = null;

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $editor = null;

    /**
     * The period during which the measure content was or is planned to be in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $endorser = null;

    /**
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * A group of population criteria for the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup
     */
    public $group = null;

    /**
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $guidance = null;

    /**
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     */
    public $improvementNotation = null;

    /**
     * A legal or geographic region in which the measure is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * A reference to a Library resource containing the formal logic used by the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $library = null;

    /**
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The name of the organization or individual that published the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this measure is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $rateAggregation = null;

    /**
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $rationale = null;

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
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $riskAdjustment = null;

    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $scoring = null;

    /**
     * The status of this measure. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subjectCodeableConcept = null;

    /**
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subjectReference = null;

    /**
     * An explanatory or alternate title for the measure giving additional information about its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData
     */
    public $supplementalData = null;

    /**
     * A short, descriptive, user-friendly title for the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topic = null;

    /**
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A detailed description, from a clinical perspective, of how the measure is used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate measure instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRMeasure Constructor
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
            if (isset($data['clinicalRecommendationStatement'])) {
                $this->setClinicalRecommendationStatement($data['clinicalRecommendationStatement']);
            }
            if (isset($data['compositeScoring'])) {
                $this->setCompositeScoring($data['compositeScoring']);
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
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['disclaimer'])) {
                $this->setDisclaimer($data['disclaimer']);
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
            if (isset($data['group'])) {
                $this->setGroup($data['group']);
            }
            if (isset($data['guidance'])) {
                $this->setGuidance($data['guidance']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['improvementNotation'])) {
                $this->setImprovementNotation($data['improvementNotation']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['lastReviewDate'])) {
                $this->setLastReviewDate($data['lastReviewDate']);
            }
            if (isset($data['library'])) {
                $this->setLibrary($data['library']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['rateAggregation'])) {
                $this->setRateAggregation($data['rateAggregation']);
            }
            if (isset($data['rationale'])) {
                $this->setRationale($data['rationale']);
            }
            if (isset($data['relatedArtifact'])) {
                $this->setRelatedArtifact($data['relatedArtifact']);
            }
            if (isset($data['reviewer'])) {
                $this->setReviewer($data['reviewer']);
            }
            if (isset($data['riskAdjustment'])) {
                $this->setRiskAdjustment($data['riskAdjustment']);
            }
            if (isset($data['scoring'])) {
                $this->setScoring($data['scoring']);
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
            if (isset($data['supplementalData'])) {
                $this->setSupplementalData($data['supplementalData']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['topic'])) {
                $this->setTopic($data['topic']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
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
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMeasure::__construct - Argument 1 expected to be array or null, '.
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
                'FHIRMeasure::setApprovalDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
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
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setClinicalRecommendationStatement($clinicalRecommendationStatement)
    {
        if (null === $clinicalRecommendationStatement) {
            return $this; 
        }
        if (is_scalar($clinicalRecommendationStatement)) {
            $clinicalRecommendationStatement = new FHIRMarkdown($clinicalRecommendationStatement);
        }
        if (!($clinicalRecommendationStatement instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setClinicalRecommendationStatement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($clinicalRecommendationStatement)
            ));
        }
        $this->clinicalRecommendationStatement = $clinicalRecommendationStatement;
        return $this;
    }

    /**
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getClinicalRecommendationStatement()
    {
        return $this->clinicalRecommendationStatement;
    }


    /**
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCompositeScoring(FHIRCodeableConcept $compositeScoring = null)
    {
        if (null === $compositeScoring) {
            return $this; 
        }
        $this->compositeScoring = $compositeScoring;
        return $this;
    }

    /**
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCompositeScoring()
    {
        return $this->compositeScoring;
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
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
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
                'FHIRMeasure::setCopyright - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($copyright)
            ));
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }


    /**
     * The date  (and optionally time) when the measure was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
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
                'FHIRMeasure::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the measure was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Provides a description of an individual term used within the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRMarkdown($definition);
        }
        if (!($definition instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * Provides a description of an individual term used within the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * A free text natural language description of the measure from a consumer's perspective.
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
                'FHIRMeasure::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the measure from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDisclaimer($disclaimer)
    {
        if (null === $disclaimer) {
            return $this; 
        }
        if (is_scalar($disclaimer)) {
            $disclaimer = new FHIRMarkdown($disclaimer);
        }
        if (!($disclaimer instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setDisclaimer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($disclaimer)
            ));
        }
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
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
     * The period during which the measure content was or is planned to be in active use.
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
     * The period during which the measure content was or is planned to be in active use.
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
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
                'FHIRMeasure::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * A group of population criteria for the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup
     * @return $this
     */
    public function setGroup(FHIRMeasureGroup $group = null)
    {
        if (null === $group) {
            return $this; 
        }
        $this->group = $group;
        return $this;
    }

    /**
     * A group of population criteria for the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup
     */
    public function getGroup()
    {
        return $this->group;
    }


    /**
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setGuidance($guidance)
    {
        if (null === $guidance) {
            return $this; 
        }
        if (is_scalar($guidance)) {
            $guidance = new FHIRMarkdown($guidance);
        }
        if (!($guidance instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setGuidance - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($guidance)
            ));
        }
        $this->guidance = $guidance;
        return $this;
    }

    /**
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getGuidance()
    {
        return $this->guidance;
    }


    /**
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     * @return $this
     */
    public function setImprovementNotation($improvementNotation)
    {
        if (null === $improvementNotation) {
            return $this; 
        }
        if (is_scalar($improvementNotation)) {
            $improvementNotation = new FHIRMeasureImprovementNotation($improvementNotation);
        }
        if (!($improvementNotation instanceof FHIRMeasureImprovementNotation)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setImprovementNotation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation or appropriate scalar value, %s seen.',
                gettype($improvementNotation)
            ));
        }
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeasureImprovementNotation
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }


    /**
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
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
                'FHIRMeasure::setLastReviewDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
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
     * A reference to a Library resource containing the formal logic used by the measure.
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
                'FHIRMeasure::setLibrary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($library)
            ));
        }
        $this->library = $library;
        return $this;
    }

    /**
     * A reference to a Library resource containing the formal logic used by the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getLibrary()
    {
        return $this->library;
    }


    /**
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
                'FHIRMeasure::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The name of the organization or individual that published the measure.
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
                'FHIRMeasure::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this measure is needed and why it has been designed as it has.
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
                'FHIRMeasure::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explanation of why this measure is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRateAggregation($rateAggregation)
    {
        if (null === $rateAggregation) {
            return $this; 
        }
        if (is_scalar($rateAggregation)) {
            $rateAggregation = new FHIRString($rateAggregation);
        }
        if (!($rateAggregation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setRateAggregation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($rateAggregation)
            ));
        }
        $this->rateAggregation = $rateAggregation;
        return $this;
    }

    /**
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRateAggregation()
    {
        return $this->rateAggregation;
    }


    /**
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setRationale($rationale)
    {
        if (null === $rationale) {
            return $this; 
        }
        if (is_scalar($rationale)) {
            $rationale = new FHIRMarkdown($rationale);
        }
        if (!($rationale instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setRationale - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($rationale)
            ));
        }
        $this->rationale = $rationale;
        return $this;
    }

    /**
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getRationale()
    {
        return $this->rationale;
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
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRiskAdjustment($riskAdjustment)
    {
        if (null === $riskAdjustment) {
            return $this; 
        }
        if (is_scalar($riskAdjustment)) {
            $riskAdjustment = new FHIRString($riskAdjustment);
        }
        if (!($riskAdjustment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeasure::setRiskAdjustment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($riskAdjustment)
            ));
        }
        $this->riskAdjustment = $riskAdjustment;
        return $this;
    }

    /**
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRiskAdjustment()
    {
        return $this->riskAdjustment;
    }


    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setScoring(FHIRCodeableConcept $scoring = null)
    {
        if (null === $scoring) {
            return $this; 
        }
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring()
    {
        return $this->scoring;
    }


    /**
     * The status of this measure. Enables tracking the life-cycle of the content.
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
                'FHIRMeasure::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this measure. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
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
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }


    /**
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
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
     * The intended subjects for the measure. If this element is not provided, a Patient subject is assumed, but the subject of the measure can be anything.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }


    /**
     * An explanatory or alternate title for the measure giving additional information about its content.
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
                'FHIRMeasure::setSubtitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($subtitle)
            ));
        }
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * An explanatory or alternate title for the measure giving additional information about its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }


    /**
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData
     * @return $this
     */
    public function setSupplementalData(FHIRMeasureSupplementalData $supplementalData = null)
    {
        if (null === $supplementalData) {
            return $this; 
        }
        $this->supplementalData = $supplementalData;
        return $this;
    }

    /**
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }


    /**
     * A short, descriptive, user-friendly title for the measure.
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
                'FHIRMeasure::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopic()
    {
        return $this->topic;
    }


    /**
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
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
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
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
                'FHIRMeasure::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * A detailed description, from a clinical perspective, of how the measure is used.
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
                'FHIRMeasure::setUsage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($usage)
            ));
        }
        $this->usage = $usage;
        return $this;
    }

    /**
     * A detailed description, from a clinical perspective, of how the measure is used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate measure instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate measure instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
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
                'FHIRMeasure::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
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
        if (null !== ($v = $this->getClinicalRecommendationStatement())) {
            $a['clinicalRecommendationStatement'] = $v;
        }
        if (null !== ($v = $this->getCompositeScoring())) {
            $a['compositeScoring'] = $v;
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
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDisclaimer())) {
            $a['disclaimer'] = $v;
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
        if (null !== ($v = $this->getGroup())) {
            $a['group'] = $v;
        }
        if (null !== ($v = $this->getGuidance())) {
            $a['guidance'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getImprovementNotation())) {
            $a['improvementNotation'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a['lastReviewDate'] = $v;
        }
        if (null !== ($v = $this->getLibrary())) {
            $a['library'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getRateAggregation())) {
            $a['rateAggregation'] = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            $a['rationale'] = $v;
        }
        if (null !== ($v = $this->getRelatedArtifact())) {
            $a['relatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getReviewer())) {
            $a['reviewer'] = $v;
        }
        if (null !== ($v = $this->getRiskAdjustment())) {
            $a['riskAdjustment'] = $v;
        }
        if (null !== ($v = $this->getScoring())) {
            $a['scoring'] = $v;
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
        if (null !== ($v = $this->getSupplementalData())) {
            $a['supplementalData'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getTopic())) {
            $a['topic'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<Measure xmlns="http://hl7.org/fhir"></Measure>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}