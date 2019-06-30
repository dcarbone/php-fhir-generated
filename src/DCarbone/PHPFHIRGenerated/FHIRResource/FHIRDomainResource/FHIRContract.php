<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

include_once __DIR__.'/../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRContract
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRContract extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_CONTRACT;

    const FIELD_ALIAS = 'alias';
    const FIELD_ALIAS_EXT = '_alias';
    const FIELD_APPLIES = 'applies';
    const FIELD_AUTHOR = 'author';
    const FIELD_AUTHORITY = 'authority';
    const FIELD_CONTENT_DEFINITION = 'contentDefinition';
    const FIELD_CONTENT_DERIVATIVE = 'contentDerivative';
    const FIELD_DOMAIN = 'domain';
    const FIELD_EXPIRATION_TYPE = 'expirationType';
    const FIELD_FRIENDLY = 'friendly';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_LEGAL = 'legal';
    const FIELD_LEGAL_STATE = 'legalState';
    const FIELD_LEGALLY_BINDING_ATTACHMENT = 'legallyBindingAttachment';
    const FIELD_LEGALLY_BINDING_REFERENCE = 'legallyBindingReference';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_RELEVANT_HISTORY = 'relevantHistory';
    const FIELD_RULE = 'rule';
    const FIELD_SCOPE = 'scope';
    const FIELD_SIGNER = 'signer';
    const FIELD_SITE = 'site';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBTITLE = 'subtitle';
    const FIELD_SUBTITLE_EXT = '_subtitle';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';
    const FIELD_TERM = 'term';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_TOPIC_CODEABLE_CONCEPT = 'topicCodeableConcept';
    const FIELD_TOPIC_REFERENCE = 'topicReference';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Alternative representation of the title for this Contract definition,
     * derivative, or instance in any legal state., e.g., a domain specific contract
     * number related to legislation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $alias = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $applies = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or organization that authored the Contract definition,
     * derivative, or instance in any legal state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $author = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $authority = [];

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Precusory content developed with a focus and intent of supporting the formation
     * a Contract instance, which may be associated with and transformable into a
     * Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition
     */
    private $contentDefinition = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $contentDerivative = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $domain = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Event resulting in discontinuation or termination of this Contract instance by
     * one or more parties to the contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $expirationType = null;

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[]
     */
    private $friendly = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract or a derivative that references a Source
     * Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in
     * whole or part by this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $instantiatesCanonical = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained definition that is adhered to in
     * whole or in part by this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $instantiatesUri = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When this Contract was issued.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $issued = null;

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[]
     */
    private $legal = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legal states of the formation of a legal instrument, which is a formally
     * executed written document that can be formally attributed to its author, records
     * and formally expresses a legally enforceable act, process, or contractual duty,
     * obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $legalState = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $legallyBindingAttachment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $legallyBindingReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying this Contract definition, derivative, or
     * instance in any legal state. Provides additional information about its content.
     * This name should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Contract definition,
     * derivative, or instance, which identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * Contract. The Provence.entity indicates the target that was changed in the
     * update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $relevantHistory = [];

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[]
     */
    private $rule = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A selector of legal concerns for this Contract definition, derivative, or
     * instance in any legal state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $scope = null;

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[]
     */
    private $signer = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $site = [];

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    private $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would
     * be interested in the Contract within the context of the Contract's scope.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $subType = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $subject = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $subtitle = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information that may be needed by/relevant to the performer in their execution
     * of this term action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $supportingInfo = [];

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    private $term = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $topicCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $topicReference = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the legal instrument, whether constructed as a
     * Contract definition, derivative, or instance in any legal state. Provides
     * additional information about its content within the context of the Contract's
     * scope to distinguish the kinds of systems that would be interested in the
     * contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An edition identifier used for business purposes to label business significant
     * variants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRContract Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContract::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALIAS])) {
            $ext = (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT]))
                ? $data[self::FIELD_ALIAS_EXT]
                : null;
            if (is_array($data[self::FIELD_ALIAS])) {
                foreach($data[self::FIELD_ALIAS] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addAlias($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addAlias(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_ALIAS] instanceof FHIRString) {
                $this->addAlias($data[self::FIELD_ALIAS]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALIAS])) {
                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALIAS]] + $ext));
            } else {
                $this->addAlias(new FHIRString($data[self::FIELD_ALIAS]));
            }
        }
        if (isset($data[self::FIELD_APPLIES])) {
            if ($data[self::FIELD_APPLIES] instanceof FHIRPeriod) {
                $this->setApplies($data[self::FIELD_APPLIES]);
            } else {
                $this->setApplies(new FHIRPeriod($data[self::FIELD_APPLIES]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_AUTHORITY])) {
            if (is_array($data[self::FIELD_AUTHORITY])) {
                foreach($data[self::FIELD_AUTHORITY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAuthority($v);
                    } else {
                        $this->addAuthority(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->addAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->addAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_DEFINITION])) {
            if ($data[self::FIELD_CONTENT_DEFINITION] instanceof FHIRContractContentDefinition) {
                $this->setContentDefinition($data[self::FIELD_CONTENT_DEFINITION]);
            } else {
                $this->setContentDefinition(new FHIRContractContentDefinition($data[self::FIELD_CONTENT_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_CONTENT_DERIVATIVE])) {
            if ($data[self::FIELD_CONTENT_DERIVATIVE] instanceof FHIRCodeableConcept) {
                $this->setContentDerivative($data[self::FIELD_CONTENT_DERIVATIVE]);
            } else {
                $this->setContentDerivative(new FHIRCodeableConcept($data[self::FIELD_CONTENT_DERIVATIVE]));
            }
        }
        if (isset($data[self::FIELD_DOMAIN])) {
            if (is_array($data[self::FIELD_DOMAIN])) {
                foreach($data[self::FIELD_DOMAIN] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addDomain($v);
                    } else {
                        $this->addDomain(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DOMAIN] instanceof FHIRReference) {
                $this->addDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->addDomain(new FHIRReference($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_EXPIRATION_TYPE])) {
            if ($data[self::FIELD_EXPIRATION_TYPE] instanceof FHIRCodeableConcept) {
                $this->setExpirationType($data[self::FIELD_EXPIRATION_TYPE]);
            } else {
                $this->setExpirationType(new FHIRCodeableConcept($data[self::FIELD_EXPIRATION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_FRIENDLY])) {
            if (is_array($data[self::FIELD_FRIENDLY])) {
                foreach($data[self::FIELD_FRIENDLY] as $v) {
                    if ($v instanceof FHIRContractFriendly) {
                        $this->addFriendly($v);
                    } else {
                        $this->addFriendly(new FHIRContractFriendly($v));
                    }
                }
            } else if ($data[self::FIELD_FRIENDLY] instanceof FHIRContractFriendly) {
                $this->addFriendly($data[self::FIELD_FRIENDLY]);
            } else {
                $this->addFriendly(new FHIRContractFriendly($data[self::FIELD_FRIENDLY]));
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
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL])) {
            if ($data[self::FIELD_INSTANTIATES_CANONICAL] instanceof FHIRReference) {
                $this->setInstantiatesCanonical($data[self::FIELD_INSTANTIATES_CANONICAL]);
            } else {
                $this->setInstantiatesCanonical(new FHIRReference($data[self::FIELD_INSTANTIATES_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT]))
                ? $data[self::FIELD_INSTANTIATES_URI_EXT]
                : null;
            if ($data[self::FIELD_INSTANTIATES_URI] instanceof FHIRUri) {
                $this->setInstantiatesUri($data[self::FIELD_INSTANTIATES_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTANTIATES_URI])) {
                $this->setInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_INSTANTIATES_URI]] + $ext));
            } else {
                $this->setInstantiatesUri(new FHIRUri($data[self::FIELD_INSTANTIATES_URI]));
            }
        }
        if (isset($data[self::FIELD_ISSUED])) {
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT]))
                ? $data[self::FIELD_ISSUED_EXT]
                : null;
            if ($data[self::FIELD_ISSUED] instanceof FHIRDateTime) {
                $this->setIssued($data[self::FIELD_ISSUED]);
            } elseif ($ext && is_scalar($data[self::FIELD_ISSUED])) {
                $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ISSUED]] + $ext));
            } else {
                $this->setIssued(new FHIRDateTime($data[self::FIELD_ISSUED]));
            }
        }
        if (isset($data[self::FIELD_LEGAL])) {
            if (is_array($data[self::FIELD_LEGAL])) {
                foreach($data[self::FIELD_LEGAL] as $v) {
                    if ($v instanceof FHIRContractLegal) {
                        $this->addLegal($v);
                    } else {
                        $this->addLegal(new FHIRContractLegal($v));
                    }
                }
            } else if ($data[self::FIELD_LEGAL] instanceof FHIRContractLegal) {
                $this->addLegal($data[self::FIELD_LEGAL]);
            } else {
                $this->addLegal(new FHIRContractLegal($data[self::FIELD_LEGAL]));
            }
        }
        if (isset($data[self::FIELD_LEGAL_STATE])) {
            if ($data[self::FIELD_LEGAL_STATE] instanceof FHIRCodeableConcept) {
                $this->setLegalState($data[self::FIELD_LEGAL_STATE]);
            } else {
                $this->setLegalState(new FHIRCodeableConcept($data[self::FIELD_LEGAL_STATE]));
            }
        }
        if (isset($data[self::FIELD_LEGALLY_BINDING_ATTACHMENT])) {
            if ($data[self::FIELD_LEGALLY_BINDING_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setLegallyBindingAttachment($data[self::FIELD_LEGALLY_BINDING_ATTACHMENT]);
            } else {
                $this->setLegallyBindingAttachment(new FHIRAttachment($data[self::FIELD_LEGALLY_BINDING_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_LEGALLY_BINDING_REFERENCE])) {
            if ($data[self::FIELD_LEGALLY_BINDING_REFERENCE] instanceof FHIRReference) {
                $this->setLegallyBindingReference($data[self::FIELD_LEGALLY_BINDING_REFERENCE]);
            } else {
                $this->setLegallyBindingReference(new FHIRReference($data[self::FIELD_LEGALLY_BINDING_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_RELEVANT_HISTORY])) {
            if (is_array($data[self::FIELD_RELEVANT_HISTORY])) {
                foreach($data[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addRelevantHistory($v);
                    } else {
                        $this->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $this->addRelevantHistory($data[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $this->addRelevantHistory(new FHIRReference($data[self::FIELD_RELEVANT_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_RULE])) {
            if (is_array($data[self::FIELD_RULE])) {
                foreach($data[self::FIELD_RULE] as $v) {
                    if ($v instanceof FHIRContractRule) {
                        $this->addRule($v);
                    } else {
                        $this->addRule(new FHIRContractRule($v));
                    }
                }
            } else if ($data[self::FIELD_RULE] instanceof FHIRContractRule) {
                $this->addRule($data[self::FIELD_RULE]);
            } else {
                $this->addRule(new FHIRContractRule($data[self::FIELD_RULE]));
            }
        }
        if (isset($data[self::FIELD_SCOPE])) {
            if ($data[self::FIELD_SCOPE] instanceof FHIRCodeableConcept) {
                $this->setScope($data[self::FIELD_SCOPE]);
            } else {
                $this->setScope(new FHIRCodeableConcept($data[self::FIELD_SCOPE]));
            }
        }
        if (isset($data[self::FIELD_SIGNER])) {
            if (is_array($data[self::FIELD_SIGNER])) {
                foreach($data[self::FIELD_SIGNER] as $v) {
                    if ($v instanceof FHIRContractSigner) {
                        $this->addSigner($v);
                    } else {
                        $this->addSigner(new FHIRContractSigner($v));
                    }
                }
            } else if ($data[self::FIELD_SIGNER] instanceof FHIRContractSigner) {
                $this->addSigner($data[self::FIELD_SIGNER]);
            } else {
                $this->addSigner(new FHIRContractSigner($data[self::FIELD_SIGNER]));
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
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRContractResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRContractResourceStatusCodes($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUB_TYPE])) {
            if (is_array($data[self::FIELD_SUB_TYPE])) {
                foreach($data[self::FIELD_SUB_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubType($v);
                    } else {
                        $this->addSubType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->addSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->addSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBTITLE])) {
            $ext = (isset($data[self::FIELD_SUBTITLE_EXT]) && is_array($data[self::FIELD_SUBTITLE_EXT]))
                ? $data[self::FIELD_SUBTITLE_EXT]
                : null;
            if ($data[self::FIELD_SUBTITLE] instanceof FHIRString) {
                $this->setSubtitle($data[self::FIELD_SUBTITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBTITLE])) {
                $this->setSubtitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUBTITLE]] + $ext));
            } else {
                $this->setSubtitle(new FHIRString($data[self::FIELD_SUBTITLE]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFO])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRReference) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRReference($data[self::FIELD_SUPPORTING_INFO]));
            }
        }
        if (isset($data[self::FIELD_TERM])) {
            if (is_array($data[self::FIELD_TERM])) {
                foreach($data[self::FIELD_TERM] as $v) {
                    if ($v instanceof FHIRContractTerm) {
                        $this->addTerm($v);
                    } else {
                        $this->addTerm(new FHIRContractTerm($v));
                    }
                }
            } else if ($data[self::FIELD_TERM] instanceof FHIRContractTerm) {
                $this->addTerm($data[self::FIELD_TERM]);
            } else {
                $this->addTerm(new FHIRContractTerm($data[self::FIELD_TERM]));
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
        if (isset($data[self::FIELD_TOPIC_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_TOPIC_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setTopicCodeableConcept($data[self::FIELD_TOPIC_CODEABLE_CONCEPT]);
            } else {
                $this->setTopicCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_TOPIC_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_TOPIC_REFERENCE])) {
            if ($data[self::FIELD_TOPIC_REFERENCE] instanceof FHIRReference) {
                $this->setTopicReference($data[self::FIELD_TOPIC_REFERENCE]);
            } else {
                $this->setTopicReference(new FHIRReference($data[self::FIELD_TOPIC_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION])) {
                $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Alternative representation of the title for this Contract definition,
     * derivative, or instance in any legal state., e.g., a domain specific contract
     * number related to legislation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Alternative representation of the title for this Contract definition,
     * derivative, or instance in any legal state., e.g., a domain specific contract
     * number related to legislation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $alias
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addAlias($alias = null)
    {
        if (null === $alias) {
            $this->alias = null;
            return $this;
        }
        if ($alias instanceof FHIRString) {
            $this->alias = $alias;
            return $this;
        }
        $this->alias = new FHIRString($alias);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Alternative representation of the title for this Contract definition,
     * derivative, or instance in any legal state., e.g., a domain specific contract
     * number related to legislation.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $alias
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setAlias(array $alias = [])
    {
        $this->alias = [];
        if ([] === $alias) {
            return $this;
        }
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->addAlias($v);
            } else {
                $this->addAlias(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $applies
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setApplies(FHIRPeriod $applies = null)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or organization that authored the Contract definition,
     * derivative, or instance in any legal state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or organization that authored the Contract definition,
     * derivative, or instance in any legal state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setAuthor(FHIRReference $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $authority
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addAuthority(FHIRReference $authority = null)
    {
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formally or informally recognized grouping of people, principals,
     * organizations, or jurisdictions formed for the purpose of achieving some form of
     * collective action such as the promulgation, administration and enforcement of
     * contracts and policies.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $authority
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setAuthority(array $authority = [])
    {
        $this->authority = [];
        if ([] === $authority) {
            return $this;
        }
        foreach($authority as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthority($v);
            } else {
                $this->addAuthority(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Precusory content developed with a focus and intent of supporting the formation
     * a Contract instance, which may be associated with and transformable into a
     * Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition
     */
    public function getContentDefinition()
    {
        return $this->contentDefinition;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Precusory content developed with a focus and intent of supporting the formation
     * a Contract instance, which may be associated with and transformable into a
     * Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition $contentDefinition
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setContentDefinition(FHIRContractContentDefinition $contentDefinition = null)
    {
        $this->contentDefinition = $contentDefinition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative()
    {
        return $this->contentDerivative;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The minimal content derived from the basal information source at a specific
     * stage in its lifecycle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $contentDerivative
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setContentDerivative(FHIRCodeableConcept $contentDerivative = null)
    {
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $domain
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addDomain(FHIRReference $domain = null)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Recognized governance framework or system operating with a circumscribed scope
     * in accordance with specified principles, policies, processes or procedures for
     * managing rights, actions, or behaviors of parties or principals relative to
     * resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $domain
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setDomain(array $domain = [])
    {
        $this->domain = [];
        if ([] === $domain) {
            return $this;
        }
        foreach($domain as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDomain($v);
            } else {
                $this->addDomain(new FHIRReference($v));
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
     * Event resulting in discontinuation or termination of this Contract instance by
     * one or more parties to the contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExpirationType()
    {
        return $this->expirationType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Event resulting in discontinuation or termination of this Contract instance by
     * one or more parties to the contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $expirationType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setExpirationType(FHIRCodeableConcept $expirationType = null)
    {
        $this->expirationType = $expirationType;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly $friendly
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addFriendly(FHIRContractFriendly $friendly = null)
    {
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * The "patient friendly language" versionof the Contract in whole or in parts.
     * "Patient friendly language" means the representation of the Contract and
     * Contract Provisions in a manner that is readily accessible and understandable by
     * a layperson in accordance with best practices for communication styles that
     * ensure that those agreeing to or signing the Contract understand the roles,
     * actions, obligations, responsibilities, and implication of the agreement.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly[] $friendly
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setFriendly(array $friendly = [])
    {
        $this->friendly = [];
        if ([] === $friendly) {
            return $this;
        }
        foreach($friendly as $v) {
            if ($v instanceof FHIRContractFriendly) {
                $this->addFriendly($v);
            } else {
                $this->addFriendly(new FHIRContractFriendly($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract or a derivative that references a Source
     * Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract or a derivative that references a Source
     * Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for this Contract or a derivative that references a Source
     * Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in
     * whole or part by this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined Contract Definition that is adhered to in
     * whole or part by this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $instantiatesCanonical
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setInstantiatesCanonical(FHIRReference $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained definition that is adhered to in
     * whole or in part by this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally maintained definition that is adhered to in
     * whole or in part by this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $instantiatesUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setInstantiatesUri($instantiatesUri = null)
    {
        if (null === $instantiatesUri) {
            $this->instantiatesUri = null;
            return $this;
        }
        if ($instantiatesUri instanceof FHIRUri) {
            $this->instantiatesUri = $instantiatesUri;
            return $this;
        }
        $this->instantiatesUri = new FHIRUri($instantiatesUri);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When this Contract was issued.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When this Contract was issued.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRDateTime) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRDateTime($issued);
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal $legal
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addLegal(FHIRContractLegal $legal = null)
    {
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Legal expressions or representations of this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal[] $legal
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setLegal(array $legal = [])
    {
        $this->legal = [];
        if ([] === $legal) {
            return $this;
        }
        foreach($legal as $v) {
            if ($v instanceof FHIRContractLegal) {
                $this->addLegal($v);
            } else {
                $this->addLegal(new FHIRContractLegal($v));
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
     * Legal states of the formation of a legal instrument, which is a formally
     * executed written document that can be formally attributed to its author, records
     * and formally expresses a legally enforceable act, process, or contractual duty,
     * obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalState()
    {
        return $this->legalState;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legal states of the formation of a legal instrument, which is a formally
     * executed written document that can be formally attributed to its author, records
     * and formally expresses a legally enforceable act, process, or contractual duty,
     * obligation, or right, and therefore evidences that act, process, or agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $legalState
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setLegalState(FHIRCodeableConcept $legalState = null)
    {
        $this->legalState = $legalState;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getLegallyBindingAttachment()
    {
        return $this->legallyBindingAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment $legallyBindingAttachment
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setLegallyBindingAttachment(FHIRAttachment $legallyBindingAttachment = null)
    {
        $this->legallyBindingAttachment = $legallyBindingAttachment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLegallyBindingReference()
    {
        return $this->legallyBindingReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Legally binding Contract: This is the signed and legally recognized
     * representation of the Contract, which is considered the "source of truth" and
     * which would be the basis for legal action related to enforcement of this
     * Contract. (choose any one of legallyBinding*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $legallyBindingReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setLegallyBindingReference(FHIRReference $legallyBindingReference = null)
    {
        $this->legallyBindingReference = $legallyBindingReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying this Contract definition, derivative, or
     * instance in any legal state. Provides additional information about its content.
     * This name should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying this Contract definition, derivative, or
     * instance in any legal state. Provides additional information about its content.
     * This name should be usable as an identifier for the module by machine processing
     * applications such as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Contract definition,
     * derivative, or instance, which identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * Contract. The Provence.entity indicates the target that was changed in the
     * update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Contract definition,
     * derivative, or instance, which identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * Contract. The Provence.entity indicates the target that was changed in the
     * update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $relevantHistory
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addRelevantHistory(FHIRReference $relevantHistory = null)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Contract definition,
     * derivative, or instance, which identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * Contract. The Provence.entity indicates the target that was changed in the
     * update. http://build.fhir.org/provenance-definitions.html#Provenance.entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $relevantHistory
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setRelevantHistory(array $relevantHistory = [])
    {
        $this->relevantHistory = [];
        if ([] === $relevantHistory) {
            return $this;
        }
        foreach($relevantHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRelevantHistory($v);
            } else {
                $this->addRelevantHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule $rule
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addRule(FHIRContractRule $rule = null)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * List of Computable Policy Rule Language Representations of this Contract.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule[] $rule
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setRule(array $rule = [])
    {
        $this->rule = [];
        if ([] === $rule) {
            return $this;
        }
        foreach($rule as $v) {
            if ($v instanceof FHIRContractRule) {
                $this->addRule($v);
            } else {
                $this->addRule(new FHIRContractRule($v));
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
     * A selector of legal concerns for this Contract definition, derivative, or
     * instance in any legal state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A selector of legal concerns for this Contract definition, derivative, or
     * instance in any legal state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $scope
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner $signer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addSigner(FHIRContractSigner $signer = null)
    {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Parties with legal standing in the Contract, including the principal parties,
     * the grantor(s) and grantee(s), which are any person or organization bound by the
     * contract, and any ancillary parties, which facilitate the execution of the
     * contract such as a notary or witness.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner[] $signer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setSigner(array $signer = [])
    {
        $this->signer = [];
        if ([] === $signer) {
            return $this;
        }
        foreach($signer as $v) {
            if ($v instanceof FHIRContractSigner) {
                $this->addSigner($v);
            } else {
                $this->addSigner(new FHIRContractSigner($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $site
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
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
     * Sites in which the contract is complied with, exercised, or in force.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $site
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setStatus(FHIRContractResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would
     * be interested in the Contract within the context of the Contract's scope.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would
     * be interested in the Contract within the context of the Contract's scope.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addSubType(FHIRCodeableConcept $subType = null)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Sub-category for the Contract that distinguishes the kinds of systems that would
     * be interested in the Contract within the context of the Contract's scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $subType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setSubType(array $subType = [])
    {
        $this->subType = [];
        if ([] === $subType) {
            return $this;
        }
        foreach($subType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubType($v);
            } else {
                $this->addSubType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addSubject(FHIRReference $subject = null)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target entity impacted by or of interest to parties to the agreement.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setSubject(array $subject = [])
    {
        $this->subject = [];
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubject($v);
            } else {
                $this->addSubject(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An explanatory or alternate user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $subtitle
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setSubtitle($subtitle = null)
    {
        if (null === $subtitle) {
            $this->subtitle = null;
            return $this;
        }
        if ($subtitle instanceof FHIRString) {
            $this->subtitle = $subtitle;
            return $this;
        }
        $this->subtitle = new FHIRString($subtitle);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information that may be needed by/relevant to the performer in their execution
     * of this term action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information that may be needed by/relevant to the performer in their execution
     * of this term action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $supportingInfo
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addSupportingInfo(FHIRReference $supportingInfo = null)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Information that may be needed by/relevant to the performer in their execution
     * of this term action.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $supportingInfo
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setSupportingInfo(array $supportingInfo = [])
    {
        $this->supportingInfo = [];
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInfo($v);
            } else {
                $this->addSupportingInfo(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $term
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function addTerm(FHIRContractTerm $term = null)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * One or more Contract Provisions, which may be related and conveyed as a group,
     * and may contain nested groups.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[] $term
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setTerm(array $term = [])
    {
        $this->term = [];
        if ([] === $term) {
            return $this;
        }
        foreach($term as $v) {
            if ($v instanceof FHIRContractTerm) {
                $this->addTerm($v);
            } else {
                $this->addTerm(new FHIRContractTerm($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for this Contract definition,
     * derivative, or instance in any legal state.t giving additional information about
     * its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopicCodeableConcept()
    {
        return $this->topicCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $topicCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setTopicCodeableConcept(FHIRCodeableConcept $topicCodeableConcept = null)
    {
        $this->topicCodeableConcept = $topicCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTopicReference()
    {
        return $this->topicReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Narrows the range of legal concerns to focus on the achievement of specific
     * contractual objectives. (choose any one of topic*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $topicReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setTopicReference(FHIRReference $topicReference = null)
    {
        $this->topicReference = $topicReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the legal instrument, whether constructed as a
     * Contract definition, derivative, or instance in any legal state. Provides
     * additional information about its content within the context of the Contract's
     * scope to distinguish the kinds of systems that would be interested in the
     * contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A high-level category for the legal instrument, whether constructed as a
     * Contract definition, derivative, or instance in any legal state. Provides
     * additional information about its content within the context of the Contract's
     * scope to distinguish the kinds of systems that would be interested in the
     * contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Canonical identifier for this contract, represented as a URI (globally unique).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An edition identifier used for business purposes to label business significant
     * variants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An edition identifier used for business purposes to label business significant
     * variants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRContract::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContract::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRContract);
        } elseif (!is_object($type) || !($type instanceof FHIRContract)) {
            throw new \RuntimeException(sprintf(
                'FHIRContract::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRContract or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->alias)) {
            $type->addAlias((string)$attributes->alias);
        }
        if (isset($children->alias)) {
            foreach($children->alias as $child) {
                $type->addAlias(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->applies)) {
            $type->setApplies(FHIRPeriod::xmlUnserialize($children->applies));
        }
        if (isset($children->author)) {
            $type->setAuthor(FHIRReference::xmlUnserialize($children->author));
        }
        if (isset($children->authority)) {
            foreach($children->authority as $child) {
                $type->addAuthority(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->contentDefinition)) {
            $type->setContentDefinition(FHIRContractContentDefinition::xmlUnserialize($children->contentDefinition));
        }
        if (isset($children->contentDerivative)) {
            $type->setContentDerivative(FHIRCodeableConcept::xmlUnserialize($children->contentDerivative));
        }
        if (isset($children->domain)) {
            foreach($children->domain as $child) {
                $type->addDomain(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->expirationType)) {
            $type->setExpirationType(FHIRCodeableConcept::xmlUnserialize($children->expirationType));
        }
        if (isset($children->friendly)) {
            foreach($children->friendly as $child) {
                $type->addFriendly(FHIRContractFriendly::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->instantiatesCanonical)) {
            $type->setInstantiatesCanonical(FHIRReference::xmlUnserialize($children->instantiatesCanonical));
        }
        if (isset($attributes->instantiatesUri)) {
            $type->setInstantiatesUri((string)$attributes->instantiatesUri);
        }
        if (isset($children->instantiatesUri)) {
            $type->setInstantiatesUri(FHIRUri::xmlUnserialize($children->instantiatesUri));
        }
        if (isset($attributes->issued)) {
            $type->setIssued((string)$attributes->issued);
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRDateTime::xmlUnserialize($children->issued));
        }
        if (isset($children->legal)) {
            foreach($children->legal as $child) {
                $type->addLegal(FHIRContractLegal::xmlUnserialize($child));
            }
        }
        if (isset($children->legalState)) {
            $type->setLegalState(FHIRCodeableConcept::xmlUnserialize($children->legalState));
        }
        if (isset($children->legallyBindingAttachment)) {
            $type->setLegallyBindingAttachment(FHIRAttachment::xmlUnserialize($children->legallyBindingAttachment));
        }
        if (isset($children->legallyBindingReference)) {
            $type->setLegallyBindingReference(FHIRReference::xmlUnserialize($children->legallyBindingReference));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->relevantHistory)) {
            foreach($children->relevantHistory as $child) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->rule)) {
            foreach($children->rule as $child) {
                $type->addRule(FHIRContractRule::xmlUnserialize($child));
            }
        }
        if (isset($children->scope)) {
            $type->setScope(FHIRCodeableConcept::xmlUnserialize($children->scope));
        }
        if (isset($children->signer)) {
            foreach($children->signer as $child) {
                $type->addSigner(FHIRContractSigner::xmlUnserialize($child));
            }
        }
        if (isset($children->site)) {
            foreach($children->site as $child) {
                $type->addSite(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRContractResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->subType)) {
            foreach($children->subType as $child) {
                $type->addSubType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            foreach($children->subject as $child) {
                $type->addSubject(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->subtitle)) {
            $type->setSubtitle((string)$attributes->subtitle);
        }
        if (isset($children->subtitle)) {
            $type->setSubtitle(FHIRString::xmlUnserialize($children->subtitle));
        }
        if (isset($children->supportingInfo)) {
            foreach($children->supportingInfo as $child) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->term)) {
            foreach($children->term as $child) {
                $type->addTerm(FHIRContractTerm::xmlUnserialize($child));
            }
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($children->topicCodeableConcept)) {
            $type->setTopicCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->topicCodeableConcept));
        }
        if (isset($children->topicReference)) {
            $type->setTopicReference(FHIRReference::xmlUnserialize($children->topicReference));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Contract xmlns="http://hl7.org/fhir"></Contract>');
        }
        if ([] !== ($vs = $this->getAlias())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_ALIAS, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_ALIAS));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_ALIAS));
                }
            }
        }
        if (null !== ($v = $this->getApplies())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES));
        }
        if (null !== ($v = $this->getAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR));
        }
        if ([] !== ($vs = $this->getAuthority())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY));
            }
        }
        if (null !== ($v = $this->getContentDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_DEFINITION));
        }
        if (null !== ($v = $this->getContentDerivative())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT_DERIVATIVE));
        }
        if ([] !== ($vs = $this->getDomain())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN));
            }
        }
        if (null !== ($v = $this->getExpirationType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPIRATION_TYPE));
        }
        if ([] !== ($vs = $this->getFriendly())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FRIENDLY));
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
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL));
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $sxe->addAttribute(self::FIELD_INSTANTIATES_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI));
            }
        }
        if (null !== ($v = $this->getIssued())) {
            $sxe->addAttribute(self::FIELD_ISSUED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED));
            }
        }
        if ([] !== ($vs = $this->getLegal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL));
            }
        }
        if (null !== ($v = $this->getLegalState())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGAL_STATE));
        }
        if (null !== ($v = $this->getLegallyBindingAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGALLY_BINDING_ATTACHMENT));
        }
        if (null !== ($v = $this->getLegallyBindingReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEGALLY_BINDING_REFERENCE));
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELEVANT_HISTORY));
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RULE));
            }
        }
        if (null !== ($v = $this->getScope())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCOPE));
        }
        if ([] !== ($vs = $this->getSigner())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SIGNER));
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
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_TYPE));
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
            }
        }
        if (null !== ($v = $this->getSubtitle())) {
            $sxe->addAttribute(self::FIELD_SUBTITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBTITLE));
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFO));
            }
        }
        if ([] !== ($vs = $this->getTerm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TERM));
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        if (null !== ($v = $this->getTopicCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOPIC_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getTopicReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOPIC_REFERENCE));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $sxe->addAttribute(self::FIELD_VERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION));
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
        if ([] !== ($vs = $this->getAlias())) {
            $a[self::FIELD_ALIAS] = [];
            $a[self::FIELD_ALIAS_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_ALIAS][] = (string)$v;
                $a[self::FIELD_ALIAS_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getApplies())) {
            $a[self::FIELD_APPLIES] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $v;
        }
        if ([] !== ($vs = $this->getAuthority())) {
            $a[self::FIELD_AUTHORITY] = $vs;
        }
        if (null !== ($v = $this->getContentDefinition())) {
            $a[self::FIELD_CONTENT_DEFINITION] = $v;
        }
        if (null !== ($v = $this->getContentDerivative())) {
            $a[self::FIELD_CONTENT_DERIVATIVE] = $v;
        }
        if ([] !== ($vs = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $vs;
        }
        if (null !== ($v = $this->getExpirationType())) {
            $a[self::FIELD_EXPIRATION_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getFriendly())) {
            $a[self::FIELD_FRIENDLY] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a[self::FIELD_INSTANTIATES_CANONICAL] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a[self::FIELD_INSTANTIATES_URI] = (string)$v;
            $a[self::FIELD_INSTANTIATES_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = (string)$v;
            $a[self::FIELD_ISSUED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLegal())) {
            $a[self::FIELD_LEGAL] = $vs;
        }
        if (null !== ($v = $this->getLegalState())) {
            $a[self::FIELD_LEGAL_STATE] = $v;
        }
        if (null !== ($v = $this->getLegallyBindingAttachment())) {
            $a[self::FIELD_LEGALLY_BINDING_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getLegallyBindingReference())) {
            $a[self::FIELD_LEGALLY_BINDING_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            $a[self::FIELD_RELEVANT_HISTORY] = $vs;
        }
        if ([] !== ($vs = $this->getRule())) {
            $a[self::FIELD_RULE] = $vs;
        }
        if (null !== ($v = $this->getScope())) {
            $a[self::FIELD_SCOPE] = $v;
        }
        if ([] !== ($vs = $this->getSigner())) {
            $a[self::FIELD_SIGNER] = $vs;
        }
        if ([] !== ($vs = $this->getSite())) {
            $a[self::FIELD_SITE] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = $vs;
        }
        if ([] !== ($vs = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $vs;
        }
        if (null !== ($v = $this->getSubtitle())) {
            $a[self::FIELD_SUBTITLE] = (string)$v;
            $a[self::FIELD_SUBTITLE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $a[self::FIELD_SUPPORTING_INFO] = $vs;
        }
        if ([] !== ($vs = $this->getTerm())) {
            $a[self::FIELD_TERM] = $vs;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getTopicCodeableConcept())) {
            $a[self::FIELD_TOPIC_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getTopicReference())) {
            $a[self::FIELD_TOPIC_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = (string)$v;
            $a[self::FIELD_VERSION_EXT] = $v;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}