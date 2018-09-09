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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRContract
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRContract extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract';

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $alias = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition
     */
    public $contentDefinition = null;

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $contentDerivative = null;

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $domain = null;

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $expirationType = null;

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly
     */
    public $friendly = null;

    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * When this  Contract was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * List of Legal expressions or representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal
     */
    public $legal = null;

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $legalState = null;

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $legallyBindingAttachment = null;

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $legallyBindingReference = null;

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $relevantHistory = null;

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule
     */
    public $rule = null;

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $scope = null;

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner
     */
    public $signer = null;

    /**
     * Sites in which the contract is complied with,  exercised, or in force.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $site = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    public $status = null;

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInfo = null;

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     */
    public $term = null;

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topicCodeableConcept = null;

    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $topicReference = null;

    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * An edition identifier used for business purposes to label business significant variants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIRContract Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['alias'])) {
                $this->setAlias($data['alias']);
            }
            if (isset($data['applies'])) {
                $this->setApplies($data['applies']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['authority'])) {
                $this->setAuthority($data['authority']);
            }
            if (isset($data['contentDefinition'])) {
                $this->setContentDefinition($data['contentDefinition']);
            }
            if (isset($data['contentDerivative'])) {
                $this->setContentDerivative($data['contentDerivative']);
            }
            if (isset($data['domain'])) {
                $this->setDomain($data['domain']);
            }
            if (isset($data['expirationType'])) {
                $this->setExpirationType($data['expirationType']);
            }
            if (isset($data['friendly'])) {
                $this->setFriendly($data['friendly']);
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
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['legal'])) {
                $this->setLegal($data['legal']);
            }
            if (isset($data['legalState'])) {
                $this->setLegalState($data['legalState']);
            }
            if (isset($data['legallyBindingAttachment'])) {
                $this->setLegallyBindingAttachment($data['legallyBindingAttachment']);
            }
            if (isset($data['legallyBindingReference'])) {
                $this->setLegallyBindingReference($data['legallyBindingReference']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['relevantHistory'])) {
                $this->setRelevantHistory($data['relevantHistory']);
            }
            if (isset($data['rule'])) {
                $this->setRule($data['rule']);
            }
            if (isset($data['scope'])) {
                $this->setScope($data['scope']);
            }
            if (isset($data['signer'])) {
                $this->setSigner($data['signer']);
            }
            if (isset($data['site'])) {
                $this->setSite($data['site']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['subtitle'])) {
                $this->setSubtitle($data['subtitle']);
            }
            if (isset($data['supportingInfo'])) {
                $this->setSupportingInfo($data['supportingInfo']);
            }
            if (isset($data['term'])) {
                $this->setTerm($data['term']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['topicCodeableConcept'])) {
                $this->setTopicCodeableConcept($data['topicCodeableConcept']);
            }
            if (isset($data['topicReference'])) {
                $this->setTopicReference($data['topicReference']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAlias($alias)
    {
        if (null === $alias) {
            return $this; 
        }
        if (is_scalar($alias)) {
            $alias = new FHIRString($alias);
        }
        if (!($alias instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContract::setAlias - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($alias)
            ));
        }
        $this->alias = $alias;
        return $this;
    }

    /**
     * Alternative representation of the title for this Contract definition, derivative, or instance in any legal state., e.g., a domain specific contract number related to legislation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAlias()
    {
        return $this->alias;
    }


    /**
     * Relevant time or time-period when this Contract is applicable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setApplies(FHIRPeriod $applies = null)
    {
        if (null === $applies) {
            return $this; 
        }
        $this->applies = $applies;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }


    /**
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
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
     * The individual or organization that authored the Contract definition, derivative, or instance in any legal state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthority(FHIRReference $authority = null)
    {
        if (null === $authority) {
            return $this; 
        }
        $this->authority = $authority;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }


    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition
     * @return $this
     */
    public function setContentDefinition(FHIRContractContentDefinition $contentDefinition = null)
    {
        if (null === $contentDefinition) {
            return $this; 
        }
        $this->contentDefinition = $contentDefinition;
        return $this;
    }

    /**
     * Precusory content developed with a focus and intent of supporting the formation a Contract instance, which may be associated with and transformable into a Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition
     */
    public function getContentDefinition()
    {
        return $this->contentDefinition;
    }


    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setContentDerivative(FHIRCodeableConcept $contentDerivative = null)
    {
        if (null === $contentDerivative) {
            return $this; 
        }
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }


    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDomain(FHIRReference $domain = null)
    {
        if (null === $domain) {
            return $this; 
        }
        $this->domain = $domain;
        return $this;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDomain()
    {
        return $this->domain;
    }


    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setExpirationType(FHIRCodeableConcept $expirationType = null)
    {
        if (null === $expirationType) {
            return $this; 
        }
        $this->expirationType = $expirationType;
        return $this;
    }

    /**
     * Event resulting in discontinuation or termination of this Contract instance by one or more parties to the contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExpirationType()
    {
        return $this->expirationType;
    }


    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly
     * @return $this
     */
    public function setFriendly(FHIRContractFriendly $friendly = null)
    {
        if (null === $friendly) {
            return $this; 
        }
        $this->friendly = $friendly;
        return $this;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly
     */
    public function getFriendly()
    {
        return $this->friendly;
    }


    /**
     * Unique identifier for this Contract or a derivative that references a Source Contract.
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
     * Unique identifier for this Contract or a derivative that references a Source Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInstantiatesCanonical(FHIRReference $instantiatesCanonical = null)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in whole or part by this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
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
                'FHIRContract::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained definition that is adhered to in whole or in part by this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * When this  Contract was issued.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setIssued($issued)
    {
        if (null === $issued) {
            return $this; 
        }
        if (is_scalar($issued)) {
            $issued = new FHIRDateTime($issued);
        }
        if (!($issued instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContract::setIssued - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($issued)
            ));
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * When this  Contract was issued.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }


    /**
     * List of Legal expressions or representations of this Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal
     * @return $this
     */
    public function setLegal(FHIRContractLegal $legal = null)
    {
        if (null === $legal) {
            return $this; 
        }
        $this->legal = $legal;
        return $this;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal
     */
    public function getLegal()
    {
        return $this->legal;
    }


    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setLegalState(FHIRCodeableConcept $legalState = null)
    {
        if (null === $legalState) {
            return $this; 
        }
        $this->legalState = $legalState;
        return $this;
    }

    /**
     * Legal states of the formation of a legal instrument, which is a formally executed written document that can be formally attributed to its author, records and formally expresses a legally enforceable act, process, or contractual duty, obligation, or right, and therefore evidences that act, process, or agreement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalState()
    {
        return $this->legalState;
    }


    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setLegallyBindingAttachment(FHIRAttachment $legallyBindingAttachment = null)
    {
        if (null === $legallyBindingAttachment) {
            return $this; 
        }
        $this->legallyBindingAttachment = $legallyBindingAttachment;
        return $this;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getLegallyBindingAttachment()
    {
        return $this->legallyBindingAttachment;
    }


    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLegallyBindingReference(FHIRReference $legallyBindingReference = null)
    {
        if (null === $legallyBindingReference) {
            return $this; 
        }
        $this->legallyBindingReference = $legallyBindingReference;
        return $this;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLegallyBindingReference()
    {
        return $this->legallyBindingReference;
    }


    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
                'FHIRContract::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying this Contract definition, derivative, or instance in any legal state. Provides additional information about its content. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRelevantHistory(FHIRReference $relevantHistory = null)
    {
        if (null === $relevantHistory) {
            return $this; 
        }
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this Contract definition, derivative, or instance, which identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the Contract.  The Provence.entity indicates the target that was changed in the update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }


    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule
     * @return $this
     */
    public function setRule(FHIRContractRule $rule = null)
    {
        if (null === $rule) {
            return $this; 
        }
        $this->rule = $rule;
        return $this;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule
     */
    public function getRule()
    {
        return $this->rule;
    }


    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        if (null === $scope) {
            return $this; 
        }
        $this->scope = $scope;
        return $this;
    }

    /**
     * A selector of legal concerns for this Contract definition, derivative, or instance in any legal state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }


    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner
     * @return $this
     */
    public function setSigner(FHIRContractSigner $signer = null)
    {
        if (null === $signer) {
            return $this; 
        }
        $this->signer = $signer;
        return $this;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner
     */
    public function getSigner()
    {
        return $this->signer;
    }


    /**
     * Sites in which the contract is complied with,  exercised, or in force.
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
     * Sites in which the contract is complied with,  exercised, or in force.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSite()
    {
        return $this->site;
    }


    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRContractResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRContractResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContract::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        if (null === $subType) {
            return $this; 
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * Sub-category for the Contract that distinguishes the kinds of systems that would be interested in the Contract within the context of the Contract's scope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }


    /**
     * The target entity impacted by or of interest to parties to the agreement.
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
     * The target entity impacted by or of interest to parties to the agreement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
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
                'FHIRContract::setSubtitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($subtitle)
            ));
        }
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * An explanatory or alternate user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }


    /**
     * Information that may be needed by/relevant to the performer in their execution of this term action.
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
     * Information that may be needed by/relevant to the performer in their execution of this term action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }


    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     * @return $this
     */
    public function setTerm(FHIRContractTerm $term = null)
    {
        if (null === $term) {
            return $this; 
        }
        $this->term = $term;
        return $this;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
     */
    public function getTerm()
    {
        return $this->term;
    }


    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
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
                'FHIRContract::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for this Contract definition, derivative, or instance in any legal state.t giving additional information about its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTopicCodeableConcept(FHIRCodeableConcept $topicCodeableConcept = null)
    {
        if (null === $topicCodeableConcept) {
            return $this; 
        }
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }


    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTopicReference(FHIRReference $topicReference = null)
    {
        if (null === $topicReference) {
            return $this; 
        }
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * Narrows the range of legal concerns to focus on the achievement of specific contractual objectives.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }


    /**
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
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
     * A high-level category for the legal instrument, whether constructed as a Contract definition, derivative, or instance in any legal state.  Provides additional information about its content within the context of the Contract's scope to distinguish the kinds of systems that would be interested in the contract.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
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
                'FHIRContract::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * Canonical identifier for this contract, represented as a URI (globally unique).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * An edition identifier used for business purposes to label business significant variants.
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
                'FHIRContract::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * An edition identifier used for business purposes to label business significant variants.
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
        if (null !== ($v = $this->getAlias())) {
            $a['alias'] = $v;
        }
        if (null !== ($v = $this->getApplies())) {
            $a['applies'] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getAuthority())) {
            $a['authority'] = $v;
        }
        if (null !== ($v = $this->getContentDefinition())) {
            $a['contentDefinition'] = $v;
        }
        if (null !== ($v = $this->getContentDerivative())) {
            $a['contentDerivative'] = $v;
        }
        if (null !== ($v = $this->getDomain())) {
            $a['domain'] = $v;
        }
        if (null !== ($v = $this->getExpirationType())) {
            $a['expirationType'] = $v;
        }
        if (null !== ($v = $this->getFriendly())) {
            $a['friendly'] = $v;
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
        if (null !== ($v = $this->getIssued())) {
            $a['issued'] = $v;
        }
        if (null !== ($v = $this->getLegal())) {
            $a['legal'] = $v;
        }
        if (null !== ($v = $this->getLegalState())) {
            $a['legalState'] = $v;
        }
        if (null !== ($v = $this->getLegallyBindingAttachment())) {
            $a['legallyBindingAttachment'] = $v;
        }
        if (null !== ($v = $this->getLegallyBindingReference())) {
            $a['legallyBindingReference'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getRelevantHistory())) {
            $a['relevantHistory'] = $v;
        }
        if (null !== ($v = $this->getRule())) {
            $a['rule'] = $v;
        }
        if (null !== ($v = $this->getScope())) {
            $a['scope'] = $v;
        }
        if (null !== ($v = $this->getSigner())) {
            $a['signer'] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a['site'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubType())) {
            $a['subType'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSubtitle())) {
            $a['subtitle'] = $v;
        }
        if (null !== ($v = $this->getSupportingInfo())) {
            $a['supportingInfo'] = $v;
        }
        if (null !== ($v = $this->getTerm())) {
            $a['term'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
        }
        if (null !== ($v = $this->getTopicCodeableConcept())) {
            $a['topicCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getTopicReference())) {
            $a['topicReference'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
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
            $sxe = new \SimpleXMLElement('<Contract xmlns="http://hl7.org/fhir"></Contract>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}