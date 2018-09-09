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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup;
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
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The ChargeItemDefinition resource provides the properties that apply to the (billing) codes necessary to calculate costs and prices. The properties may differ largely depending on type and realm, therefore this resource gives only a rough structure and requires profiling for each type of billing code system.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRChargeItemDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRChargeItemDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ChargeItemDefinition';

    /**
     * Expressions that describe applicability criteria for the billing code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability
     */
    public $applicability = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $approvalDate = null;

    /**
     * The defined billing details in this resource pertain to the given billing code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * A copyright statement relating to the charge item definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the charge item definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date  (and optionally time) when the charge item definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the charge item definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The URL pointing to an externally-defined charge item definition that is adhered to in whole or in part by this definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $derivedFromUri = null;

    /**
     * A free text natural language description of the charge item definition from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The period during which the charge item definition content was or is planned to be in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * A Boolean value to indicate that this charge item definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * A formal identifier that is used to identify this charge item definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The defined billing details in this resource pertain to the given product instance(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $instance = null;

    /**
     * A legal or geographic region in which the charge item definition is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * A larger definition of which this particular definition is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $partOf = null;

    /**
     * Group of properties which are applicable under the same conditions. If no applicability rules are established for the group, then all properties always apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public $propertyGroup = null;

    /**
     * The name of the organization or individual that published the charge item definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * As new versions of a protocol or guideline are defined, allows identification of what versions are replaced by a new instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $replaces = null;

    /**
     * The current state of the ChargeItemDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A short, descriptive, user-friendly title for the charge item definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * An absolute URI that is used to identify this charge item definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this charge item definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the charge item definition is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate charge item definition instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the charge item definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the charge item definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRChargeItemDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['applicability'])) {
                $this->setApplicability($data['applicability']);
            }
            if (isset($data['approvalDate'])) {
                $this->setApprovalDate($data['approvalDate']);
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
            if (isset($data['derivedFromUri'])) {
                $this->setDerivedFromUri($data['derivedFromUri']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instance'])) {
                $this->setInstance($data['instance']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['lastReviewDate'])) {
                $this->setLastReviewDate($data['lastReviewDate']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['propertyGroup'])) {
                $this->setPropertyGroup($data['propertyGroup']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['replaces'])) {
                $this->setReplaces($data['replaces']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Expressions that describe applicability criteria for the billing code.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability
     * @return $this
     */
    public function setApplicability(FHIRChargeItemDefinitionApplicability $applicability = null)
    {
        if (null === $applicability) {
            return $this; 
        }
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * Expressions that describe applicability criteria for the billing code.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability
     */
    public function getApplicability()
    {
        return $this->applicability;
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
                'FHIRChargeItemDefinition::setApprovalDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
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
     * The defined billing details in this resource pertain to the given billing code.
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
     * The defined billing details in this resource pertain to the given billing code.
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
     * A copyright statement relating to the charge item definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the charge item definition.
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
                'FHIRChargeItemDefinition::setCopyright - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($copyright)
            ));
        }
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A copyright statement relating to the charge item definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the charge item definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }


    /**
     * The date  (and optionally time) when the charge item definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the charge item definition changes.
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
                'FHIRChargeItemDefinition::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the charge item definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the charge item definition changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * The URL pointing to an externally-defined charge item definition that is adhered to in whole or in part by this definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDerivedFromUri($derivedFromUri)
    {
        if (null === $derivedFromUri) {
            return $this; 
        }
        if (is_scalar($derivedFromUri)) {
            $derivedFromUri = new FHIRUri($derivedFromUri);
        }
        if (!($derivedFromUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItemDefinition::setDerivedFromUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($derivedFromUri)
            ));
        }
        $this->derivedFromUri = $derivedFromUri;
        return $this;
    }

    /**
     * The URL pointing to an externally-defined charge item definition that is adhered to in whole or in part by this definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDerivedFromUri()
    {
        return $this->derivedFromUri;
    }


    /**
     * A free text natural language description of the charge item definition from a consumer's perspective.
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
                'FHIRChargeItemDefinition::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the charge item definition from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The period during which the charge item definition content was or is planned to be in active use.
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
     * The period during which the charge item definition content was or is planned to be in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }


    /**
     * A Boolean value to indicate that this charge item definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
                'FHIRChargeItemDefinition::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this charge item definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * A formal identifier that is used to identify this charge item definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this charge item definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The defined billing details in this resource pertain to the given product instance(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInstance(FHIRReference $instance = null)
    {
        if (null === $instance) {
            return $this; 
        }
        $this->instance = $instance;
        return $this;
    }

    /**
     * The defined billing details in this resource pertain to the given product instance(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInstance()
    {
        return $this->instance;
    }


    /**
     * A legal or geographic region in which the charge item definition is intended to be used.
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
     * A legal or geographic region in which the charge item definition is intended to be used.
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
                'FHIRChargeItemDefinition::setLastReviewDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
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
     * A larger definition of which this particular definition is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setPartOf($partOf)
    {
        if (null === $partOf) {
            return $this; 
        }
        if (is_scalar($partOf)) {
            $partOf = new FHIRCanonical($partOf);
        }
        if (!($partOf instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItemDefinition::setPartOf - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($partOf)
            ));
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger definition of which this particular definition is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Group of properties which are applicable under the same conditions. If no applicability rules are established for the group, then all properties always apply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     * @return $this
     */
    public function setPropertyGroup(FHIRChargeItemDefinitionPropertyGroup $propertyGroup = null)
    {
        if (null === $propertyGroup) {
            return $this; 
        }
        $this->propertyGroup = $propertyGroup;
        return $this;
    }

    /**
     * Group of properties which are applicable under the same conditions. If no applicability rules are established for the group, then all properties always apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function getPropertyGroup()
    {
        return $this->propertyGroup;
    }


    /**
     * The name of the organization or individual that published the charge item definition.
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
                'FHIRChargeItemDefinition::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the charge item definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * As new versions of a protocol or guideline are defined, allows identification of what versions are replaced by a new instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setReplaces($replaces)
    {
        if (null === $replaces) {
            return $this; 
        }
        if (is_scalar($replaces)) {
            $replaces = new FHIRCanonical($replaces);
        }
        if (!($replaces instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItemDefinition::setReplaces - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($replaces)
            ));
        }
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * As new versions of a protocol or guideline are defined, allows identification of what versions are replaced by a new instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getReplaces()
    {
        return $this->replaces;
    }


    /**
     * The current state of the ChargeItemDefinition.
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
                'FHIRChargeItemDefinition::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the ChargeItemDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A short, descriptive, user-friendly title for the charge item definition.
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
                'FHIRChargeItemDefinition::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the charge item definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * An absolute URI that is used to identify this charge item definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this charge item definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the charge item definition is stored on different servers.
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
                'FHIRChargeItemDefinition::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this charge item definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this charge item definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the charge item definition is stored on different servers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate charge item definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate charge item definition instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * The identifier that is used to identify this version of the charge item definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the charge item definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
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
                'FHIRChargeItemDefinition::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the charge item definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the charge item definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
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
        if (null !== ($v = $this->getApplicability())) {
            $a['applicability'] = $v;
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $a['approvalDate'] = $v;
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
        if (null !== ($v = $this->getDerivedFromUri())) {
            $a['derivedFromUri'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a['effectivePeriod'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstance())) {
            $a['instance'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a['lastReviewDate'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPropertyGroup())) {
            $a['propertyGroup'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getReplaces())) {
            $a['replaces'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
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
            $sxe = new \SimpleXMLElement('<ChargeItemDefinition xmlns="http://hl7.org/fhir"></ChargeItemDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}